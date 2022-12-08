<?php 
 
class M_kamar extends CI_Model
{
	function data_kamar(){
		return $this->db->get('tb_kamar')->result_array();
	} 
}