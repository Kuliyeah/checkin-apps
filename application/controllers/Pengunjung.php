<?php

class Pengunjung extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		//load model "Pengunjung_model"
		$this->load->model('Pengunjung_model');

		//load library form validation
		$this->load->library('form_validation');
	}


	public function index()
	{
		$data['pengunjung'] = $this->Pengunjung_model->getDataPengunjung();

		$this->load->view('pengunjung/index', $data);
	}