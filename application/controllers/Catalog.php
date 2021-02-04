<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Catalog extends CI_Controller {

	public function index($no_antrian, $no_makanan)
	{
        echo "Ini adalah halaman makan sate | ".$no_antrian." | ".$no_makanan;
    }
}
