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
		
		//load session
		$this->load->library('session');
	}

	public function index()
	{
		$data['judul'] = 'Data Pengunjung';
		$data['pengunjung'] = $this->Pengunjung_model->getDataPengunjung()->result();

		$this->load->view('templates/header', $data);
		$this->load->view('pengunjung/index', $data);
		$this->load->view('templates/footer');
	}

	// public function hapusPengunjung()
	// {

	// 	$idPengunjung = $this->input->get('idPengunjung');
	// 	$this->Pengunjung_model->hapus_pengunjung($idPengunjung);
	// 	redirect(base_url() . 'pengunjung/');
	// }

	public function detailPengunjung()
	{
		$idPengunjung = $this->input->get('idPengunjung');
		$data['detailPengunjung'] = $this->Pengunjung_model->getDataPengunjungById($idPengunjung)->row();
		$data['judul'] = 'Detail Pengunjung';
		$this->load->view('templates/header', $data);
		$this->load->view('pengunjung/detailPengunjung', $data);
		$this->load->view('templates/footer');
	}
}
