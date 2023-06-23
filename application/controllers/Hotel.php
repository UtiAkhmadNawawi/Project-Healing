<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hotel extends CI_Controller {

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
	public function __construct()
    {
        parent::__construct();
        $this->load->model('M_kamar');
		$this->load->model('M_authLogin');
		if(!$this->M_authLogin->current_user()){
			redirect('AuthLogin/login');
		}
    }
	public function index(){
        // $data['mahasiswa'] = $this->M_mahasiswa->tampil_data()->result();
		$hotel = $this->M_hotel->getAllHotel();

		$data = array(
			'hotel' => $hotel
		);
        $this->load->view('templates/header');
		$this->load->view('v_hotel',$data);
        // $this->load->view('templates/mahasiswa', $data);
		$this->load->view('templates/footer');
    }

	public function getKamarByHotel($id)
	{
		$daftarkamar = $this->M_kamar->getRoomByHotel($id);
		$hotel = $this->M_hotel->getHotelById($id);
		
		

		$data = array(
			'daftarkamar' => $daftarkamar,
			'hotel' => $hotel
		);
		$this->load->view('templates/header');
		$this->load->view('User/Hotel/daftar-kamar',$data);
		$this->load->view('templates/footer');
	}

	public function searchHotel(){
		$nama_hotel = $this->input->post('nama_hotel');
		$lokasi = $this->input->post('lokasi');
		$ratings = $this->input->post('ratings');
		
        $hotel = $this->M_hotel->searchHotel($nama_hotel, $lokasi, $ratings);

		$data = array(
			'hotel' => $hotel
		);
        $this->load->view('templates/header');
		$this->load->view('User/hotel/search-hotel',$data);
		$this->load->view('templates/footer');
    }
}