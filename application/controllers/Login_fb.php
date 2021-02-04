<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_fb extends CI_Controller {
    public function index()
    {
        $fb = new Facebook\Facebook([
            'app_id' => '986693465195153', // Replace {app-id} with your app id
            'app_secret' => 'b99320f5c47469bb86007cd51c234d88',
            'default_graph_version' => 'v2.2',
        ]);
          
        $helper = $fb->getRedirectLoginHelper();
          
        try {
          $accessToken = $helper->getAccessToken();
        } catch(Facebook\Exceptions\FacebookResponseException $e) {
          // When Graph returns an error
          echo 'Graph returned an error: ' . $e->getMessage();
          exit;
        } catch(Facebook\Exceptions\FacebookSDKException $e) {
          // When validation fails or other local issues
          echo 'Facebook SDK returned an error: ' . $e->getMessage();
          exit;
        }
          
        if (! isset($accessToken)) {
          if ($helper->getError()) {
            header('HTTP/1.0 401 Unauthorized');
            echo "Error: " . $helper->getError() . "\n";
            echo "Error Code: " . $helper->getErrorCode() . "\n";
            echo "Error Reason: " . $helper->getErrorReason() . "\n";
            echo "Error Description: " . $helper->getErrorDescription() . "\n";
          } else {
            header('HTTP/1.0 400 Bad Request');
            echo 'Bad request';
          }
          exit;
        }
          
        // Logged in
        echo '<h3>Access Token</h3>';
        var_dump($accessToken->getValue());
          
        // The OAuth 2.0 client handler helps us manage access tokens
        $oAuth2Client = $fb->getOAuth2Client();
          
        // Get the access token metadata from /debug_token
        $tokenMetadata = $oAuth2Client->debugToken($accessToken);
        echo '<h3>Metadata</h3>';
        var_dump($tokenMetadata);
          
        // Validation (these will throw FacebookSDKException's when they fail)
        $tokenMetadata->validateAppId('986693465195153'); // Replace {app-id} with your app id
        // If you know the user ID this access token belongs to, you can validate it here
        //$tokenMetadata->validateUserId('123');
        $tokenMetadata->validateExpiration();
          
        if (! $accessToken->isLongLived()) {
          // Exchanges a short-lived access token for a long-lived one
          try {
            $accessToken = $oAuth2Client->getLongLivedAccessToken($accessToken);
          } catch (Facebook\Exceptions\FacebookSDKException $e) {
            echo "<p>Error getting long-lived access token: " . $e->getMessage() . "</p>\n\n";
            exit;
          }
          
          echo '<h3>Long-lived</h3>';
          var_dump($accessToken->getValue());
        }
          
        $_SESSION['fb_access_token'] = (string) $accessToken;
          
        $data = $fb->get("/me?fields=id,name,email,picture",$_SESSION['fb_access_token']);
        $user = $data->getGraphUser();
        // echo $user['picture']['url']; Digunakan untuk mengambil photo icon facebook

        $hasil_query = $this->db->where('email', $user['email'])->get('user')->row_array();
        if (!empty($hasil_query)) {
          $data_session = [
            'id_user' => $hasil_query['id'],
            'nama' => $hasil_query['name'],
            'email' => $hasil_query['email'],
            'photo_full' => $hasil_query['photo_full'],
            'sudah_login' => true,
          ];
          $this->session->set_userdata($data_session);        
          redirect($this->session->userdata('url_saat_ini'));            
        } else {
          $requestPicture = $fb->get('/me/picture?redirect=false&height=300',$_SESSION['fb_access_token']);
          $picture = $requestPicture->getGraphUser();
  
          $nama_foto = time().'-'.url_title($user['name'], 'dash', TRUE);
          $img = $_SERVER['DOCUMENT_ROOT'] . '/assets/img/users/'.$nama_foto.'.jpg';
          $hasil_upload = file_put_contents($img, file_get_contents($picture['url']));
  
          if ($hasil_upload !== FALSE) {
            $data_insert = array(
              'nama' => $user['name'],
              'email' => $user['email'],
              'id_facebook' => $user['id'],
              'photo_full' => $nama_foto.'.jpg'
            );
        
            $this->db->insert('user', $data_insert);
  
            $data_session = [
              'id_user' => $this->db->insert_id(),
              'nama' => $user['name'],
              'email' => $user['email'],
              'photo_full' => $nama_foto.'.jpg',
              'sudah_login' => true,
            ];
            $this->session->set_userdata($data_session);
    
            redirect($this->session->userdata('url_saat_ini'));   
          } else {
            redirect(base_url());
          }
        }
    }

    public function logout()
    {
      $data_logout = [
          'nama' => null,
          'email' => null,
          'photo_full' => null,
          'sudah_login' => null
      ];

      $this->session->unset_userdata($data_logout);
      $this->session->sess_destroy();
      redirect(base_url());
    }
}
