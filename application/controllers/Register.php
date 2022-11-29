<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('Auth');
	}

	public function index()
	{
        $this->load->view('User/v_header');
        $this->load->view('User/v_register');
        $this->load->view('User/v_header');
	}

	public function proses()
	{
		// var_dump($_POST);exit();
		$this->form_validation->set_rules('username', 'username',
		'trim|required|min_length[1]|max_length[255]',[
            'required' => 'nama harus di isi',
            'min_length' => 'nama terlalu pendek'
        ]);
		$this->form_validation->set_rules('password', 'password','trim|required|min_length[8]|max_length[255]',[
            'required' => 'password harus di isi',
            'min_length' => 'password terlalu pendek'
        ]);
		$this->form_validation->set_rules('email', 'email','trim|required|min_length[10]|max_length[255]|is_unique[tb_user.email]',[
            'required' => 'email harus di isi',
            'min_length' => 'email terlalu pendek',
			'is_unique' => 'Email sudah terdaftar'
        ]);
		$this->form_validation->set_rules('re_password', 'Password Confirmation', 'required|matches[password]',[
			'matches' => 'Password harus sama'
		]);
		$this->form_validation->set_rules('agree-term', 'agree-term Confirmation', 'required',[
			'required' => 'Harap setujui terms of service'
		]);
		if ($this->form_validation->run()!=true)
	   	{
			$this->session->set_flashdata('error', validation_errors());
			redirect('Register');
		}
		else
		{
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$email = $this->input->post('email');
			$this->Auth->register($username,$password,$email);
			$this->session->set_flashdata('success_register','Proses Pendaftaran User Berhasil');
			redirect('Home');
		}
	}
}

?>