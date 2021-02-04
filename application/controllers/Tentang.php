<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tentang extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Tentang_model', '', TRUE);
	}

	public function index()
	{
		// Code: Login With Facebook
		if (! $this->session->userdata('sudah_login')) {
			$this->session->set_userdata('url_saat_ini', current_url());

			$fb = new Facebook\Facebook([
			  'app_id' => '522555908558801', // Replace {app-id} with your app id
			  'app_secret' => 'e038bc6bcb111c0499d80cab460efccb',
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

		$data['judul_halaman'] = 'Tentang Kami';
		$data['menu'] = 'tentang-kami'; 
		$data['single_page'] = 'Selamat Datang';
		$data['main_content'] = 'tentang-kami/tentang-kami';
		$total_artikel = $this->Tentang_model->total_artikel();

		$this->load->view('template', compact('data', 'total_artikel', 'login_url_facebook', 'login_url_google'));
	}

	// Method ini menggunakan Cache Memcached untuk menyimpan database
	public function memcached()
	{
		$this->load->driver('cache');
		$cek_cache= $this->cache->get('cache_tentang_memcached');		
		if ($cek_cache)
		{
			$total_artikel = $this->cache->get('cache_tentang_memcached');
		} else 
		{			
			$total_artikel = $this->Tentang_model->total_artikel();
			$this->cache->memcached->save('cache_tentang_memcached', $total_artikel, 3000);
		}

		$data['judul_halaman'] = 'Tentang Kami';
		$data['menu'] = 'tentang-kami'; 
		$data['single_page'] = 'Selamat Datang';
		$data['main_content'] = 'tentang-kami/tentang-kami';

		$this->load->view('template', compact('data', 'total_artikel'));
	}

	// Method ini menggunakan Cache Redis untuk menyimpan database
	public function redis()
	{
		$this->load->driver('cache');
		$cek_cache= $this->cache->get('cache_tentang_redis');		
		if ($cek_cache) 
		{
			$total_artikel = $this->cache->get('cache_tentang_redis');
		} else 
		{			
			$total_artikel = $this->Tentang_model->total_artikel();
			$this->cache->redis->save('cache_tentang_redis', $total_artikel, 3000);
		}

		$data['judul_halaman'] = 'Tentang Kami';
		$data['menu'] = 'tentang-kami'; 
		$data['single_page'] = 'Selamat Datang';
		$data['main_content'] = 'tentang-kami/tentang-kami';

		$this->load->view('template', compact('data', 'total_artikel'));
	}

	// Method ini menggunakan Cache APC untuk menyimpan database
	public function apc()
	{
		$this->load->driver('cache', array('adapter' => 'apc', 'backup' => 'file'));
		$cek_cache= $this->cache->get('cache_tentang_apc');		
		if ($cek_cache) 
		{
			$total_artikel = $this->cache->get('cache_tentang_apc');
		} else 
		{			
			$total_artikel = $this->Tentang_model->total_artikel();
			$this->cache->save('cache_tentang_apc', $total_artikel, 3000);
		}

		$data['judul_halaman'] = 'Tentang Kami';
		$data['menu'] = 'tentang-kami'; 
		$data['single_page'] = 'Selamat Datang';
		$data['main_content'] = 'tentang-kami/tentang-kami';

		$this->load->view('template', compact('data', 'total_artikel'));
	}

	// Method ini berisi perintah-perintah lainnya dari Library Cache
	public function infoCache()
	{
		$this->load->driver('cache', array('adapter' => 'apc', 'backup' => 'file'));
		
		// $this->cache->delete('cache_tentang_apc');	// Digunakan untuk menghapus Cache APC tertentu
		// $this->cache->clean();	// Digunakan untuk menghapus semua Cache APC

		// $this->cache->redis->cache_info();	// Digunakan untuk menampilkan info dari Cache Redis
		// $this->cache->redis->delete('cache_tentang_redis');	// Digunakan untuk menghapus Cache Redis tertentu
		// $this->cache->redis->clean();	// Digunakan untuk menghapus semua Cache Redis
	}
}
