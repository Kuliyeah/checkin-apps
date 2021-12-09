<?php

class Admin extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		//load model "Mitra_model"
		$this->load->model('Admin_model');

		//load library form validation
		$this->load->library('form_validation');
	}


	public function index()
	{
		$data['admin'] = $this->Admin_model->getDataAdmin();

		$this->load->view('admin/index', $data);
	}