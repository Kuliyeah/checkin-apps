<?php

class Home extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Admin_model');
		
		//load session
		$this->load->library('session');
    }

	public function index(){
		$this->load->view('home/index');
	}

	public function daftar(){
		$this->load->view('home/mitra');
	}
	
	public function login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		
		$query = $this->Admin_model->getByUsername($username);
		$user = $query->row();

		if (!$user) return FALSE;
		if (!password_verify($password, $user->passwordAdmin)) return FALSE;

		$userdata = array(
			'id' => $user->idAdmin,
			'username' => $user->usernameAdmin,
			'full_name' => $user->namaAdmin,
			'status' => 'login',
		);
		$this->session->set_userdata($userdata);

		redirect('dashboard');
	}

	public function logout()
	{
        $this->session->sess_destroy();
        redirect('home');
	}
}

?>