<?php 
class M_payment extends CI_model
{
    public function get_data()
    {
        $this->db->select('tb_payment.*, tb_kamar.harga, tb_kamar.no_room, tb_kamar.type,tb_kamar.AC, tb_hotel.nama_hotel, tb_user.email, tb_user.username');
		$this->db->from('tb_payment');
		$this->db->join('tb_kamar', 'tb_kamar.id = tb_payment.kamar_id');
		$this->db->join('tb_hotel', 'tb_hotel.id = tb_payment.hotel_id');
		$this->db->join('tb_user', 'tb_user.user_id = tb_payment.user_id');
        $query = $this->db->get();
        return $query->result();
    }

    public function get_dataById($id)
    {
        $this->db->select('tb_payment.*, tb_kamar.harga, tb_kamar.no_room, tb_kamar.type,tb_kamar.AC, tb_hotel.nama_hotel, tb_user.email, tb_user.username');
		$this->db->from('tb_payment');
		$this->db->join('tb_kamar', 'tb_kamar.id = tb_payment.kamar_id');
		$this->db->join('tb_hotel', 'tb_hotel.id = tb_payment.hotel_id');
		$this->db->join('tb_user', 'tb_user.user_id = tb_payment.user_id');
        $this->db->where('tb_payment.id', $id);
        $query = $this->db->get();
        return $query->row();
    }
}
?>