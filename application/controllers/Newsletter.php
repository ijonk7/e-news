<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Newsletter extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Newsletter_model', '', TRUE);
	}

	public function simpan()
	{
        if ($_POST) {
            date_default_timezone_set("Asia/Jakarta");
            $input = (object) $this->input->post(null, true);
            $this->Newsletter_model->simpan($input);
            $this->session->set_flashdata('pendaftaran_berhasil', 'Selamat, email Anda berhasil didaftarakan.');

            redirect($input->url_aktif.'#newsletter');
        }
    }
}
