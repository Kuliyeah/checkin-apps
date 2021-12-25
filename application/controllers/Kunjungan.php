<?php

class Kunjungan extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		//load model "Kunjungan_model"
		$this->load->model('Kunjungan_model');

		//load library form validation
		$this->load->library('form_validation');
	}


	public function index()
	{
		$data['kunjungan'] = $this->Kunjungan_model->getDataKunjungan()->result();
		$data['judul'] = 'Data Kunjungan';
		$this->load->view('templates/header', $data);
		$this->load->view('kunjungan/index', $data);
		$this->load->view('templates/footer');
	}
}
