<?php 
 
class M_kamar extends CI_Model
{
	function data_kamar(){
		return $this->db->get('tb_kamar')->result_array();
	}
    // public function data_kamar($kode) {
    //  $kode = $no_kode;
    //  $this->db->select('*');
    //  $this->db->from('tb_kamar');
    //  $this->db->where('kode','$kode');
    //  $query = $this->db->get();
    //  return $query->result();
    // }
}