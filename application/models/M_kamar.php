<?php 
 
class M_kamar extends CI_Model
{
	function getAllRoom(){
		$this->db->select('tb_kamar.*, tb_hotel.nama_hotel');
		$this->db->from('tb_kamar');
		$this->db->join('tb_hotel', 'tb_hotel.id = tb_kamar.id_hotel');
		$query =  $this->db->get();
		return $query->result();
	} 

	public function delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('tb_kamar');
    }
	public function getRoomById($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->get('tb_kamar');
        return $query->row();
    }
	public function updateRoom($hotel_id, $data) {
        $this->db->where('id', $hotel_id);
        $this->db->update('tb_kamar', $data);
    }

    public function getRoomByHotel($id_hotel)
    {
        $this->db->where('id_hotel', $id_hotel);
        $query = $this->db->get('tb_kamar');
        return $query->result();
    }
}