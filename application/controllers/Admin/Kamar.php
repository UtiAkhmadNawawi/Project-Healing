<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kamar extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_authLogin');
		if(!$this->M_authLogin->current_user()){
			redirect('AuthLogin/login');
		}
        
	}
    
	public function Create(){
		$this->form_validation->set_rules('noroom', 'noroom', 'required');
		$this->form_validation->set_rules('roomtype', 'roomtype', 'required');
        $this->form_validation->set_rules('hotelid', 'hotelid', 'required');
		$this->form_validation->set_rules('ac', 'ac', 'required');
		$this->form_validation->set_rules('bedcapacity', 'bedcapacity', 'required');
		$this->form_validation->set_rules('harga', 'harga', 'required');
		$this->form_validation->set_rules('status', 'status', 'required');
		// $this->form_validation->set_rules('image', 'image', 'required');

        if ($this->form_validation->run() == FALSE) {
            echo 'gagal';
            // redirect('admin-room');
         } else {
             // Ambil data dari formulir
             $hotel_id = $this->input->post('hotelid');
             $room_type = $this->input->post('roomtype');
             $bed_capacity = $this->input->post('bedcapacity');
             $ac = $this->input->post('ac');
             $harga = $this->input->post('harga');
             $status = $this->input->post('status');
             $no_room = $this->input->post('noroom');

                 
             // Lakukan proses penyimpanan data ke database
             $data = array(
                 'id_hotel' => $hotel_id,
                 'type' => $room_type,
                 'Bed_capacity' => $bed_capacity,
                 'harga' => $harga,                        
                 'ac' => $ac,                        
                 'no_room' => $no_room,                        
                 'status' => $status                        
             );
 
             $this->db->insert('tb_kamar', $data);
     
             // Redirect ke halaman login atau halaman lain yang diinginkan
             redirect('admin-room');
         }
    }
    public function edit($id){
        
		$room = $this->M_kamar->getRoomById($id);
        $hotel = $this->M_hotel->getAllHotel();
        $data = array(
            'room' => $room,
            'hotel' => $hotel
        );
        $user_id = $this->session->userdata('user_id');
        $user = $this->M_user->get_user($user_id);

        $datadashboard = array(
            'user' => $user,
        );

        $this->load->view('admin/Header', $datadashboard);
        $this->load->view('admin/room/edit', $data);
        $this->load->view('admin/Footer');

    }
    public function update()
    {
        // Ambil data dari formulir
        $hotel_id = $this->input->post('hotelid');
        $room_id = $this->input->post('room_id');
        $room_type = $this->input->post('roomtype');
        $bed_capacity = $this->input->post('bedcapacity');
        $ac = $this->input->post('ac');
        $harga = $this->input->post('harga');
        $status = $this->input->post('status');
        $no_room = $this->input->post('noroom');

        $config['upload_path'] = './uploads/room'; // Direktori penyimpanan gambar
        $config['allowed_types'] = 'gif|jpg|png'; // Jenis file yang diperbolehkan
        $config['max_size'] = 2048; // Ukuran maksimum file (dalam kilobita)
        $config['encrypt_name'] = TRUE; // Mengenkripsi nama file

        $this->load->library('upload', $config);
        $this->upload->do_upload('userfile');
    
        // Jika pengungahan berhasil
        $dataUpload = array('image' => $this->upload->data());
        $file_name = $dataUpload['image']['file_name'];
        // var_dump($file_name);
        // exit();
        
        // Lakukan proses penyimpanan data ke database
        $data = array(
            'id_hotel' => $hotel_id,
            'type' => $room_type,
            'Bed_capacity' => $bed_capacity,
            'harga' => $harga,                        
            'ac' => $ac,                        
            'no_room' => $no_room,                        
            'status' => $status,
            'image' => $file_name                        
        );

        $this->M_kamar->updateRoom($room_id,$data);

        // Redirect ke halaman login atau halaman lain yang diinginkan
        redirect('admin-room');
    
}
    public function delete($id){
        $this->M_kamar->delete($id);
        redirect('admin-room');
		
    }
}