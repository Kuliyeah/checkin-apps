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

		$data['judul'] = 'Data Mitra';
		$data['mitra'] = $this->Mitra_model->getDataMitra();

		$this->load->view('mitra/index', $data);
	}