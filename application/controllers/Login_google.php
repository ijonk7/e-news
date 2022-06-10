<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_google extends CI_Controller {
    public function index()
    {
        // init configuration
        $clientID = '291510143353-g6pgkgn2irhggg0gqchch7go9v2rovtu.apps.googleusercontent.com';
        $clientSecret = 'wmKyldKQVc8Gc6lpv8qJzVAK';
        $redirectUri = 'https://e-news.m-rizal.live/login_google';

        // create Client Request to access Google API
        $client = new Google_Client();
        $client->setClientId($clientID);
        $client->setClientSecret($clientSecret);
        $client->setRedirectUri($redirectUri);
        $client->addScope("email");
        $client->addScope("profile");

        // authenticate code from Google OAuth Flow
        if (isset($_GET['code'])) {
          $token = $client->fetchAccessTokenWithAuthCode($_GET['code']);
          $client->setAccessToken($token['access_token']);
        
          // get profile info
          $google_oauth = new Google_Service_Oauth2($client);
          $google_account_info = $google_oauth->userinfo->get();
          $email =  $google_account_info->email;
          $name =  $google_account_info->name;
        
          // now you can use this profile info to create account in your website and make user logged in.
        } else {
          echo "<a href='".$client->createAuthUrl()."'>Google Login</a>";
          exit;
        }

        $hasil_query = $this->db->where('email', $email)->get('user')->row_array();

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
          $nama_foto = time().'-'.url_title($google_account_info->name, 'dash', TRUE);
          $img = $_SERVER['DOCUMENT_ROOT'] . '/assets/img/users/'.$nama_foto.'.jpg';
          $hasil_upload = file_put_contents($img, file_get_contents($google_account_info->picture));
  
          if ($hasil_upload !== FALSE) {
            $data_insert = array(
              'nama' => $google_account_info->name,
              'email' => $google_account_info->email,
              'id_google' => $google_account_info->id,
              'photo_full' => $nama_foto.'.jpg'
            );
        
            $this->db->insert('user', $data_insert);
  
            $data_session = [
              'id_user' => $this->db->insert_id(),
              'nama' => $google_account_info->name,
              'email' => $google_account_info->email,
              'photo_full' => $nama_foto.'.jpg',
              'sudah_login' => true,
            ];
            $this->session->set_userdata($data_session);
    
            redirect($this->session->userdata('url_saat_ini'));   
          } else {
            redirect(base_url());
          }
        }

        // print_r($google_account_info);
        // echo "<br>" . $google_account_info->picture;
    }
}
