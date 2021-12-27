<?php

class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        //Load semua model
        $this->load->model('Admin_model');
        $this->load->model('Pengunjung_model');
        $this->load->model('Mitra_model');
        $this->load->model('Kunjungan_model');
        
		//load session
		$this->load->library('session');
    }

    public function index()
    {
        $data['jumlahKunjungan'] = $this->Kunjungan_model->countRowsKunjungan();
        $data['jumlahMitra'] = $this->Mitra_model->countRowsMitra();
        $data['jumlahPengunjung'] = $this->Pengunjung_model->countRowsPengunjung();
        $data['judul'] = 'Dashboard';

        $this->load->view('templates/header', $data);
        $this->load->view('templates/index', $data);
        $this->load->view('templates/footer');
    }
}
