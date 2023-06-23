<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Upload extends CI_Controller {
    public function process() {
        $config['upload_path'] = './uploads/'; // Direktori penyimpanan gambar
        $config['allowed_types'] = 'gif|jpg|png'; // Jenis file yang diperbolehkan
        $config['max_size'] = 2048; // Ukuran maksimum file (dalam kilobita)
        $config['encrypt_name'] = TRUE; // Mengenkripsi nama file

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('userfile')) {
            // Jika terjadi kesalahan saat mengunggah gambar
            $error = array('error' => $this->upload->display_errors());
            redirect('admin-hotel');
        } else {
            // Jika pengungahan berhasil
            $data = array('image' => $this->upload->data());
            $hotel_id = $this->input->post('hotel_id');
            
            $file_name = array(
                'image' => $data['image']['file_name']
            );
            $this->M_hotel->updateHotel($hotel_id, $file_name);
            redirect('admin-hotel');
        }
    }
}
?>
