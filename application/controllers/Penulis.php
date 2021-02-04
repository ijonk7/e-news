<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penulis extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Penulis_model', '', TRUE);
	}

	public function index()
	{
		// Code: Login With Facebook
		if (! $this->session->userdata('sudah_login')) {
			$this->session->set_userdata('url_saat_ini', current_url());

			$fb = new Facebook\Facebook([
			  'app_id' => '986693465195153', // Replace {app-id} with your app id
			  'app_secret' => 'b99320f5c47469bb86007cd51c234d88',
			  'default_graph_version' => 'v2.2',
			  ]);
			
			$helper = $fb->getRedirectLoginHelper();
				
			$permissions = ['email']; // Optional permissions
			$login_url_facebook = $helper->getLoginUrl('https://e-news.muhammad-rizal.dev/login_fb', $permissions);
		}
		// End Code: Login With Facebook

		// Code: Login With Google
		if (! $this->session->userdata('sudah_login')) {
			$this->session->set_userdata('url_saat_ini', current_url());

        	// init configuration
        	$clientID = '291510143353-g6pgkgn2irhggg0gqchch7go9v2rovtu.apps.googleusercontent.com';
        	$clientSecret = 'wmKyldKQVc8Gc6lpv8qJzVAK';
        	$redirectUri = 'https://e-news.muhammad-rizal.dev/login_google';

        	// create Client Request to access Google API
        	$client = new Google_Client();
        	$client->setClientId($clientID);
        	$client->setClientSecret($clientSecret);
        	$client->setRedirectUri($redirectUri);
        	$client->addScope("email");
			$client->addScope("profile");
			
			$login_url_google = $client->createAuthUrl();
		}
		// End Code: Login With Google

		$total_artikel = $this->Penulis_model->total_artikel();
		$artikel_penulis = $this->Penulis_model->artikel_penulis();
            
		$data['judul_halaman'] = 'Penulis';
        $data['menu'] = '';       
		$data['single_page'] = '';
		$data['main_content'] = 'penulis/penulis';

		$this->load->view('template', compact('data', 'total_artikel', 'artikel_penulis', 'login_url_facebook', 'login_url_google'));
	}
}
