<?php
class Informasi extends CI_Controller
{
	public function index()
	{
		$data['judul'] = 'Team';
		$this->load->view('templates/header', $data);
		$this->load->view('informasi/index');
		$this->load->view('templates/footer');
	}
}
