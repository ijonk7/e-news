<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Profile_model', '', TRUE);
	}

	public function index()
	{
		$total_artikel = $this->Profile_model->total_artikel();
		$artikel_penulis = $this->Profile_model->artikel_penulis();
		$data_user = $this->Profile_model->data_user();

		$data['judul_halaman'] = 'Profile';
        $data['menu'] = '';       
		$data['single_page'] = '';
		$data['main_content'] = 'profile/profile';

		$this->load->view('template', compact('data', 'total_artikel', 'artikel_penulis', 'data_user'));

    }
}