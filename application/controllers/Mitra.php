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
		
		//load session
		$this->load->library('session');
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

		$this->form_validation->set_rules('namaMitra', 'Nama Mitra','required');
		$this->form_validation->set_rules('alamatMitra', 'Alamat Mitra','required');
		$this->form_validation->set_rules('noHpMitra', 'No Hp Mitra','required');
		$this->form_validation->set_rules('jenisUsaha', 'Jenis Usaha','required');
		$this->form_validation->set_rules('deskripsi', 'Deskripsi','required');
		$this->form_validation->set_rules('fotoUsaha', 'Foto Usaha','required');		
		$data = array(
			'namaMitra' => $this->input->post('namaMitra'),
			'alamatMitra' => $this->input->post('alamatMitra'),
			'noHpMitra' => $this->input->post('noHpMitra'),
			'jenisUsaha' => $this->input->post('jenisUsaha'),
			'deskripsi' => $this->input->post('deskripsi'),
			'fotoUsaha' => $this->input->post('fotoUsaha')
		);
		if($this->form_validation->run() == FALSE){
					$data['judul'] = "Form Input Mitra";

		$this->load->view('templates/header', $data);
		$this->load->view('mitra/input_mitra');
		$this->load->view('templates/footer');
		}else{
			$this->Mitra_model->tambah_mitra($data);
			echo '<script type ="text/JavaScript">';  
			echo 'alert("Berhasil Input Mitra")';  
			echo '</script>'; 
					$data['judul'] = "Form Input Mitra";

		$this->load->view('templates/header', $data);
		$this->load->view('mitra/input_mitra');
		$this->load->view('templates/footer');
		}
		//redirect(base_url() . "mitra");
	}

	public function tambahMitraHome()
	{
		
		$this->form_validation->set_rules('namaMitra', 'Nama Mitra','required');
		$this->form_validation->set_rules('alamatMitra', 'Alamat Mitra','required');
		$this->form_validation->set_rules('noHpMitra', 'No Hp Mitra','required');
		$this->form_validation->set_rules('jenisUsaha', 'Jenis Usaha','required');
		$this->form_validation->set_rules('deskripsi', 'Deskripsi','required');
		$this->form_validation->set_rules('fotoUsaha', 'Foto Usaha','required');

		$data = array(
			'namaMitra' => $this->input->post('namaMitra'),
			'alamatMitra' => $this->input->post('alamatMitra'),
			'noHpMitra' => $this->input->post('noHpMitra'),
			'jenisUsaha' => $this->input->post('jenisUsaha'),
			'deskripsi' => $this->input->post('deskripsi'),
			'fotoUsaha' => $this->input->post('fotoUsaha')
		);
		//redirect(base_url() . "home");

		if($this->form_validation->run() == FALSE){
			$this->load->view('home/mitra');
		}else{
			$this->Mitra_model->tambah_mitra($data);
			echo '<script type ="text/JavaScript">';  
			echo 'alert("Berhasil Input Mitra")';  
			echo '</script>'; 
			$this->load->view('home/mitra');
		}
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
			'fotoUsaha' => $this->input->post('fotoUsaha')
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
	
	/*public function fotoMitra()
	{
		$config['upload_path']          = './assets/imageMitra/';
        $config['allowed_types']        = 'jpg|png|JPG|jpeg';
    	$config['max_size']             = 4000;
        $config['max_width']            = 0;
        $config['max_height']           = 0;

		$this->load->library('upload', $config);
        if (!$this->upload->do_upload('fotoUsaha')) {
            $this->load->view('', array('error' => $this->upload->display_errors()));
        } else {
            $this->load->view('V_upload_success', array('upload_data' => $this->upload->data()));
        }
	}*/
}
