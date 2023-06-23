<?php 
 
class M_hotel extends CI_Model
{
	function getAllHotel(){
		return $this->db->get('tb_hotel')->result();
	} 
    public function updateHotel($hotel_id, $data) {
        $this->db->where('id', $hotel_id);
        $this->db->update('tb_hotel', $data);
    }

    public function delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('tb_hotel');
    }
    public function getHotelById($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->get('tb_hotel');
        return $query->row();
    }

    public function searchHotel($nama_hotel, $lokasi, $ratings)
    {
        $this->db->select('*');
        $this->db->from('tb_hotel');

        if (!empty($nama_hotel)) {
            $this->db->where_in('nama_hotel', $nama_hotel);
        }

        if (!empty($lokasi)) {
            $this->db->where_in('lokasi', $lokasi);
        }

        if (!empty($ratings)) {
            $this->db->where_in('rating', $ratings);
        }
        $query = $this->db->get();
        return $query->result();
    }
}