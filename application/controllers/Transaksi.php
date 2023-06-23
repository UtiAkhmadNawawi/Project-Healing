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
		$this->load->model('M_authLogin');
		if(!$this->M_authLogin->current_user()){
			redirect('AuthLogin/login');
		};
		$this->load->model('M_tamu');
		$this->load->model('M_reservation');
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
        $this->form_validation->set_rules('nama', 'nama',
		    'trim|required|min_length[1]|max_length[255]',[
            'required' => 'nama harus di isi',
            'min_length' => 'nama terlalu pendek'
        ]);
		$this->form_validation->set_rules('no_identitas', 'no_identitas','trim|required|min_length[1]|max_length[10]',[
            'required' => 'No identitas harus di isi',
            'min_length' => 'NO identitas terlalu pendek',
			'is_unique' => 'No identitas sudah terdaftar'
			// |is_unique[tb_reservation.email]'
        ]);
		$this->form_validation->set_rules('telepon', 'telepon ', 'required',[
            'required' => 'no telepon harus di isi'
		]);
		$this->form_validation->set_rules('kota', 'kota', 'required',[
            'required' => 'kota harus di isi'
		]);
		$this->form_validation->set_rules('alamat', 'alamat', 'required',[
            'required' => 'alamat harus di isi'
		]);
		$this->form_validation->set_rules('checkin_date', 'checkin_date', 'required',[
            'required' => 'tanggal cehekin harus di isi'
		]);
		$this->form_validation->set_rules('checkout_date', 'checkout_date', 'required',[
            'required' => 'tanggal chekout harus di isi'
		]);
		$this->form_validation->set_rules('guest', 'guest', 'required',[
            'required' => 'jumlah tamu harus di isi'
		]);
		$this->form_validation->set_rules('child', 'child', 'required',[
            'required' => 'jumlah anak harus di isi'
		]);
		if ($this->form_validation->run()!=true)
        {
			$this->session->set_flashdata('error', validation_errors());
			redirect('Transaksi');
		}
		else
		{
			// data tamu
			$user_id = $this->session->userdata('user_id');
        	$user = $this->M_user->get_user($user_id);
			$room_id = $this->input->post('room_id');

			$username = $this->input->post('nama');
			$alamat = $this->input->post('alamat');
			$identitasNO = $this->input->post('no_identitas');
			$phone = $this->input->post('telepon');
			$kota = $this->input->post('kota');
			//data reservasi
			$child = $this->input->post('child');
			$Bed = $this->input->post('Bed');
			$guest = $this->input->post('guest');
			$checkin_date = $this->input->post('checkin_date');
			$checkout_date = $this->input->post('checkout_date');

			$kamar = $this->M_kamar->getRoomById($room_id);
			$hotel_id = $kamar->id_hotel;

			$this->M_reservation->dataReservation($username,$Bed,$child,$guest,$checkin_date,$checkout_date, $user_id, $hotel_id, $room_id, $phone);
			$this->session->set_flashdata('success_register','Proses Pendaftaran User Berhasil');
			redirect('Transaksi/checkout');
		}
	}

	public function checkout()
	{

		$user_id = $this->session->userdata('user_id');

		$order = $this->M_reservation->getLastOrderByUserId($user_id);
		// var_dump($user_id);
		// exit();

		$data = array(
			'order' => $order
		);
		$this->load->view('v_bayar', $data);
	}

	public function payment()
	{
		$user_id = $this->session->userdata('user_id');

		$order = $this->M_reservation->getLastOrderByUserId($user_id);

		$data_reservation = array(
            
			'user_id' => $order->user_id,
			'hotel_id' => $order->hotel_id,
			'kamar_id' => $order->room_id,
			'subtotal' => $order->harga,
			'status' => 'Lunas'
		);
		$this->db->insert('tb_payment',$data_reservation);		

		$data = array(
			'order' => $order
		);
		$this->load->view('v_invoice', $data);
	}
	
}