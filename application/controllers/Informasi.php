<?php

class Dashboard extends CI_Controller{
	public function index(){
		$this->load->view('templates/header');
		$this->load->view('informasi/index');
		$this->load->view('templates/footer');
	}
}

?>