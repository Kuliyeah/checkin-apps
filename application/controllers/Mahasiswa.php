<?php
 // write your name and student id here
class Mahasiswa extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		//load model "Mahasiswa_model"
		//load library form validation
	}


	public function index()
	{

		$data['judul'] = 'Daftar Mahasiswa';
		$data['mahasiswa'] = $this->Mahasiswa_model->getAllMahasiswa();
		if ($this->input->post('keyword')) {
			$data['mahasiswa'] = $this->Mahasiswa_model->cariDataMahasiswa();
		}
		$this->load->view('templates/header', $data);
		$this->load->view('mahasiswa/index', $data);
		$this->load->view('templates/footer');
	}

	public function tambah()
	{
		$data['judul'] = 'Form Tambah Data Mahasiswa';

		//from library form_validation, set rules for nama, nim, email = required



		//conditon in form_validation, if user input form = false, then load page "tambah" again





		//else, when successed {
		//call method "tambahDataMahasiswa" in Mahasiswa_model
		//use flashdata to to show alert "added success"
		//back to controller mahasiswa }
	}

	public function hapus($id)
	{
		//call method hapusDataMahasiswa with parameter id from mahasiswa_model
		//use flashdata to show alert "dihapus"
		//back to controller mahasiswa

	}

	public function ubah($id)
	{
		$data['judul'] = 'Form Ubah Data Mahasiswa';

		$data['mahasiswa'] = $this->Mahasiswa_model->getMahasiswaById($id);
		$data['jurusan'] = ['Teknik Informatika', 'Teknik Industri', 'Teknik Elektro', 'DKV', 'MBTI'];

		//from library form_validation, set rules for nama, nim, email = required



		//conditon in form_validation, if user input form = false, then load page "ubah" again





		//else, when successed {
		//call method "ubahDataMahasiswa" in Mahasiswa_model
		//use flashdata to to show alert "data changed successfully"
		//back to controller mahasiswa }
	}
}
