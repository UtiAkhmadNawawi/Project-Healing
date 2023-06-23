<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hotel extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_authLogin');
		if(!$this->M_authLogin->current_user()){
			redirect('AuthLogin/login');
		}
        
	}
    
	public function Create(){
        $this->form_validation->set_rules('nama_hotel', 'nama_hotel', 'required');
		$this->form_validation->set_rules('lokasi', 'lokasi', 'required');
		$this->form_validation->set_rules('keterangan', 'keterangan', 'required');
		$this->form_validation->set_rules('rating', 'rating', 'required');
		// $this->form_validation->set_rules('image', 'image', 'required');

        if ($this->form_validation->run() == FALSE) {
            redirect('admin-hotel');
         } else {
             // Ambil data dari formulir
             $nama_hotel = $this->input->post('nama_hotel');
             $lokasi = $this->input->post('lokasi');
             $keterangan = $this->input->post('keterangan');
             $rating = $this->input->post('rating');

                 
             // Lakukan proses penyimpanan data ke database
             $data = array(
                 'nama_hotel' => $nama_hotel,
                 'lokasi' => $lokasi,
                 'keterangan' => $keterangan,
                 'rating' => $rating                        
             );
 
             $this->db->insert('tb_hotel', $data);
     
             // Redirect ke halaman login atau halaman lain yang diinginkan
             redirect('admin-hotel');
         }
    }
    public function edit($id){
        
		$hotel = $this->M_hotel->getHotelById($id);
        $data = array(
            'hotel' => $hotel
        );
        $user_id = $this->session->userdata('user_id');
        $user = $this->M_user->get_user($user_id);

        $datadashboard = array(
            'user' => $user,
        );

        $this->load->view('admin/Header', $datadashboard);
        $this->load->view('admin/hotel/edit', $data);
        $this->load->view('admin/Footer');

    }
    public function update()
    {
        $this->form_validation->set_rules('nama_hotel', 'nama_hotel', 'required');
		$this->form_validation->set_rules('lokasi', 'lokasi', 'required');
		$this->form_validation->set_rules('keterangan', 'keterangan', 'required');
		$this->form_validation->set_rules('rating', 'rating', 'required');

        if ($this->form_validation->run() == FALSE) {
            redirect('admin-hotel');
         } else {
             // Ambil data dari formulir
            $nama_hotel = $this->input->post('nama_hotel');
            $lokasi = $this->input->post('lokasi');
            $keterangan = $this->input->post('keterangan');
            $rating = $this->input->post('rating');
            $hotel_id = $this->input->post('hotel_id');

            $config['upload_path'] = './uploads/hotel'; // Direktori penyimpanan gambar
            $config['allowed_types'] = 'gif|jpg|png'; // Jenis file yang diperbolehkan
            $config['max_size'] = 2048; // Ukuran maksimum file (dalam kilobita)
            $config['encrypt_name'] = TRUE; // Mengenkripsi nama file

            $this->load->library('upload', $config);
            $this->upload->do_upload('userfile');
           
            // Jika pengungahan berhasil
            $dataUpload = array('image' => $this->upload->data());
            $file_name = $dataUpload['image']['file_name'];
            
            // Lakukan proses penyimpanan data ke database
            $data = array(
                'nama_hotel' => $nama_hotel,
                'lokasi' => $lokasi,
                'keterangan' => $keterangan,
                'rating' => $rating,
                'image' => $file_name                        
            );
        

            $this->M_hotel->updateHotel($hotel_id,$data);
    
            // Redirect ke halaman login atau halaman lain yang diinginkan
            redirect('admin-hotel');
        }
}
    public function delete($id){
        $this->M_hotel->delete($id);
        redirect('admin-hotel');
		
    }
}