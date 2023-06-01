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
        $this->load->view('admin/Header');
        $this->load->view('admin/v_dashboard');
        $this->load->view('admin/Footer');
		
    }

	public function Bookinglist(){
        $this->load->view('admin/Header');
        $this->load->view('admin/v_bookinglist');
        $this->load->view('admin/Footer');
    }

	public function Customerlist(){
        $this->load->view('admin/Header');
        $this->load->view('admin/v_customerlist');
        $this->load->view('admin/Footer');
    }

	public function Roomlist(){
        $this->load->view('admin/Header');
        $this->load->view('admin/v_roomlist');
        $this->load->view('admin/Footer');
    }

	public function Invoicelist(){
        $this->load->view('admin/Header');
        $this->load->view('admin/v_invoicelist');
        $this->load->view('admin/Footer');
    }

	public function Invoicedetails(){
        $this->load->view('admin/Header');
        $this->load->view('admin/v_invoicedetails');
        $this->load->view('admin/Footer');
    }

	public function Support(){
        $this->load->view('admin/Header');
        $this->load->view('admin/v_support');
        $this->load->view('admin/Footer');
    }

	public function Setting(){
        $this->load->view('admin/Header');
        $this->load->view('admin/v_setting');
        $this->load->view('admin/Footer');
    }
}