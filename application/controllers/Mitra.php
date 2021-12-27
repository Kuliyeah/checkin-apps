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
		$data['judul'] = "Mitra";
		$this->load->view('templates/header', $data);
		$this->load->view('mitra/index', $data);
		$this->load->view('templates/footer');
	}

	public function formInputMitra()
	{
		$data['judul'] = "Form Input Mitra";

		$this->load->view('templates/header', $data);
		$this->load->view('mitra/input_mitra');
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
		redirect(base_url() . "mitra");
	}

	public function tambahMitraHome()
	{
		$data = array(
			'namaMitra' => $this->input->post('namaMitra'),
			'alamatMitra' => $this->input->post('alamatMitra'),
			'noHpMitra' => $this->input->post('noHpMitra'),
			'jenisUsaha' => $this->input->post('jenisUsaha'),
			'deskripsi' => $this->input->post('deskripsi'),
		);
		$this->Mitra_model->tambah_mitra($data);
		redirect(base_url() . "home");
	}

	public function formUpdateMitra()
	{
        $idMitra = $this->input->get('idMitra');
        $data['edit'] = $this->Mitra_model->getDataMitraById($idMitra)->row_array();
		$data['judul'] = "Form Update Mitra";

		$this->load->view('templates/header', $data);
		$this->load->view('mitra/update_mitra', $data);
		$this->load->view('templates/footer');
	}

	public function updateMitra()
	{
        $idMitra = $this->input->post('idMitra');
		$data = array(
			'namaMitra' => $this->input->post('namaMitra'),
			'alamatMitra' => $this->input->post('alamatMitra'),
			'noHpMitra' => $this->input->post('noHpMitra'),
			'jenisUsaha' => $this->input->post('jenisUsaha'),
			'deskripsi' => $this->input->post('deskripsi'),
		);
		$this->Mitra_model->update_mitra($idMitra, $data);
		redirect(base_url() . "mitra");
	}

	public function hapusMitra()
	{

		$idMitra = $this->input->get('idMitra');
		$this->Mitra_model->hapus_mitra($idMitra);
		redirect(base_url() . 'mitra/');
	}
}
