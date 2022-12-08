<?php

class AuthLogin extends CI_Controller
{
	public function index()
	{
		show_404();
	}

	public function login()
	{
		$this->load->model('M_authLogin');
		$this->load->library('form_validation');

		$rules = $this->M_authLogin->rules();
		$this->form_validation->set_rules($rules);

		if($this->form_validation->run() == FALSE){
			return  $this->load->view('User/v_login.php');
		}
        // var_dump($_POST);exit();
		$email = $this->input->post('email');
		$password = $this->input->post('password');

		if($this->M_authLogin->login($email, $password)){
			redirect('Home');
		} else {
			$this->session->set_flashdata('message_login_error', 'Login Gagal, pastikan email dan passwrod benar!');
		}

		$this->load->view('User/v_login.php');
	}

	public function logout()
	{
		$this->load->model('M_authLogin');
		$this->M_authLogin->logout();
		$this->M_authLogin->_update_last_login($user_id);

		redirect(site_url());
	}

	public function register()
	{
		$this->load->model('M_authLogin');
		$this->load->library('form_validation');

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
			return $this->load->view('User/v_register');
		}
		// if($this->form_validation->run() == FALSE){
		// 	return  $this->load->view('User/v_register.php');
		// }
		else
		{
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$email = $this->input->post('email');
			$this->M_authLogin->register($username,$password,$email);
			$this->session->set_flashdata('success_register','Proses Pendaftaran User Berhasil');
			redirect('Authlogin/login');
		}
	}
}