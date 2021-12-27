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

		//load session
		$this->load->library('session');
	}


	public function index()
	{
		$data['admin'] = $this->Admin_model->getDataAdmin();

		if($this->session->userdata('status') == '') { //take them back to signin }

		$this->load->view('admin/index', $data);
		
	}
}