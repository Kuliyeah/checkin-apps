<?php

class Mitra extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		//load model "Mitra_model"
		$this->load->model('Mitra_model');

		//load library form validation
		$this->load->library('form_validation');
	}


	public function index()
	{
		$data['mitra'] = $this->Mitra_model->getDataMitra();

		$this->load->view('templates/header');
        $this->load->view('mitra/index', $data);
        $this->load->view('templates/footer');
	}
}