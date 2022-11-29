<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	function __construct()
	{
		parent::__construct();
		$this->load->model('Available');
	}
    public function index(){
        // $data['mahasiswa'] = $this->M_mahasiswa->tampil_data()->result();
        $this->load->view('templates/header');
		$this->load->view('v_transaksi');
        // $this->load->view('templates/mahasiswa', $data);
		$this->load->view('templates/footer');
    }

    public function proses()
    {
        // var_dump($_POST);exit();
        $this->form_validation->set_rules('username', 'username',
		    'trim|required|min_length[1]|max_length[255]',[
            'required' => 'nama harus di isi',
            'min_length' => 'nama terlalu pendek'
        ]);
		$this->form_validation->set_rules('email', 'email','trim|required|min_length[10]|max_length[255]|is_unique[tb_reservation.email]',[
            'required' => 'email harus di isi',
            'min_length' => 'email terlalu pendek',
			'is_unique' => 'Email sudah terdaftar'
        ]);
		$this->form_validation->set_rules('checkin_date', 'checkin_date ', 'required',[
            'required' => 'Tanggal harus di isi'
		]);
		$this->form_validation->set_rules('checkout_date', 'checkout_date', 'required',[
            'required' => 'Tanggal harus di isi'
		]);
		if ($this->form_validation->run()!=true)
        {
			$this->session->set_flashdata('error', validation_errors());
			redirect('Transaksi');
		}
		else
		{
			$username = $this->input->post('username');
			$email = $this->input->post('email');
			$chekin = $this->input->post('checkin_date');
			$chekout = $this->input->post('checkout_date');
			$guest = $this->input->post('guest');
			$child = $this->input->post('child');

			$this->Available->reservasi($username,$email,$chekin,$chekout,$guest,$child);
			$this->session->set_flashdata('success_register','Proses Pendaftaran User Berhasil');
			redirect('Invoice');
		}
	}
}