<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_authLogin');
		if(!$this->M_authLogin->current_user()){
			redirect('AuthLogin/login');
		}
        
	}
    
	public function index(){
        $user_id = $this->session->userdata('user_id');
        $user = $this->M_user->get_user($user_id);

        $datadashboard = array(
            'user' => $user,
        );

        $this->load->view('admin/Header', $datadashboard);
        $this->load->view('admin/v_dashboard');
        $this->load->view('admin/Footer');
		
    }

	public function Bookinglist(){
        $payment = $this->M_payment->get_data();

        $data = array(
            'payment' => $payment
        );
        $user_id = $this->session->userdata('user_id');
        $user = $this->M_user->get_user($user_id);
        

        $datadashboard = array(
            'user' => $user,
        );

        $this->load->view('admin/Header', $datadashboard);
        $this->load->view('admin/v_bookinglist', $data);
        $this->load->view('admin/Footer');
    }

	public function Customerlist(){

        $alluser = $this->M_user->get_data();
        $user_id = $this->session->userdata('user_id');
        $user = $this->M_user->get_user($user_id);

        $datadashboard = array(
            'user' => $user,
            'alluser' => $alluser
        );

        $this->load->view('admin/Header', $datadashboard);        
        $this->load->view('admin/v_customerlist', $datadashboard);
        $this->load->view('admin/Footer');
    }

	public function Roomlist(){
        $room = $this->M_kamar->getAllRoom();
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
        $this->load->view('admin/v_roomlist', $data);
        $this->load->view('admin/Footer');
    }

    public function Hotel(){
        $hotel = $this->M_hotel->getAllHotel();

        $data = array(
            'hotel' => $hotel
        );
        $user_id = $this->session->userdata('user_id');
        $user = $this->M_user->get_user($user_id);

        $datadashboard = array(
            'user' => $user,
        );

        $this->load->view('admin/Header', $datadashboard);
        $this->load->view('admin/v_hotel', $data);
        $this->load->view('admin/Footer');
    }

	public function Paymentlist(){
        $payment = $this->M_payment->get_data();

        $data = array(
            'payment' => $payment
        );
        $user_id = $this->session->userdata('user_id');
        $user = $this->M_user->get_user($user_id);
        

        $datadashboard = array(
            'user' => $user,
        );

        $this->load->view('admin/Header', $datadashboard);
        $this->load->view('admin/v_invoicelist', $data);
        $this->load->view('admin/Footer');
    }

	public function Invoicedetails($id){
        $user_id = $this->session->userdata('user_id');
        $user = $this->M_user->get_user($user_id);

        $datadashboard = array(
            'user' => $user,
        );

        $invoice = $this->M_payment->get_dataById($id);

        $data = array(
            'invoice' => $invoice
        );

        $this->load->view('admin/Header', $datadashboard);
        $this->load->view('admin/v_invoicedetails', $data);
        $this->load->view('admin/Footer');
    }
    
    public function invoice_print_pdf($id) {
        $this->load->library('pdf');
        $user_id = $this->session->userdata('user_id');

        $invoice = $this->M_payment->get_dataById($id);
        
        $data = array(
            'invoice' => $invoice
        );
        $html = $this->load->view('admin/invoicePDF', $data, TRUE); // Ganti sesuai dengan nama view Anda

        $this->pdf->generate($html, 'admin/invoicePDF', TRUE, 'A4', 'portrait');
    }
}