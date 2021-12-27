<?php
class Informasi extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		
		//load session
		$this->load->library('session');
	}
	public function index()
	{
		$data['judul'] = 'Team';
		$this->load->view('templates/header', $data);
		$this->load->view('informasi/index');
		$this->load->view('templates/footer');
	}
}
