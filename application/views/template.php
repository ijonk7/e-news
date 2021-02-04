<?php
    $this->load->view('section/header-script');
	$this->load->view('section/header-menu');
	
	if(isset($data['banner'])){
		$this->load->view($data['banner']);
	}

	$this->load->view($data['main_content']);
	
	if(!isset($data['single_page'])){
    	$this->load->view('section/right-side');    
	}

    $this->load->view('section/footer');
    $this->load->view('section/footer-script');
