<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Order extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('M_reservation');
        $this->load->library('pdf');
    }

    public function print_pdf() {
        $user_id = $this->session->userdata('user_id');

		$order = $this->M_reservation->getLastOrderByUserId($user_id); 
        
        $data = array(
            'order' => $order
        );
        $html = $this->load->view('v_invoicePDF', $data, TRUE); // Ganti sesuai dengan nama view Anda

        $this->pdf->generate($html, 'v_invoicePDF', TRUE, 'A4', 'portrait');
    }
}
