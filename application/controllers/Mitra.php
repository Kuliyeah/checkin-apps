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
		$data['mitra'] = $this->Mitra_model->getDataMitra()->result();

		$this->load->view('templates/header');
        $this->load->view('mitra/index', $data);
        $this->load->view('templates/footer');
	}
	public function tambahMitra()
	{
		
		$data = array(
			'namaMitra' => $this->input->post('namaMitra'),
			'alamatMitra' => $this->input->post('alamatMitra'),
			'noHpMitra' => $this->input->post('noHpMitra'),
			'jenisUsaha' => $this->input->post('jenisUsaha'),
			'deskripsi' => $this->input->post('deskripsi'),
		);
		$this->Mitra_model->tambah_mitra($data);
		redirect(base_url()."mitra");

	}

	public function tampilan_input()
	{
		$data['judul'] = "inputMitra";

		$this->load->view('templates/header');
        $this->load->view('mitra/input_mitra', $data);
        $this->load->view('templates/footer');
	}
}