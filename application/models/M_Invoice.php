<?php 
 
class M_Invoice extends CI_Model
{
	function tampil_data(){
		return $this->db->get('tb_reservasi');
	}
}