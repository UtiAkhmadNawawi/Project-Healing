<?php 
class M_reservation extends CI_Model 
{

	public function __construct()
	{
        parent::__construct();
	}

	function dataReservation($username,$Bed,$child,$guest,$checkin_date,$checkout_date, $user_id, $hotel_id, $room_id, $phone)
	{
		$checkin_date = date("Y-m-d");
		$checkout_date = date("Y-m-d");
		$data_reservation = array(
            'nama'=>$username,
			'Bed'=>$Bed,
			'guest'=>$guest,
			'child'=>$child,
			'checkin_date'=>$checkin_date,
			'checkout_date'=>$checkout_date,
			'user_id' => $user_id,
			'hotel_id' => $hotel_id,
			'room_id' => $room_id,
			'phone' => $phone
		);
		$this->db->insert('tb_reservation',$data_reservation);
	}

	public function getLastOrderByUserId($user_id)
    {
		$this->db->select('tb_reservation.*, tb_kamar.harga, tb_kamar.no_room, tb_kamar.type,tb_kamar.AC, tb_hotel.nama_hotel');
		$this->db->from('tb_reservation');
		$this->db->join('tb_kamar', 'tb_kamar.id = tb_reservation.room_id');
		$this->db->join('tb_hotel', 'tb_hotel.id = tb_reservation.hotel_id');
        $this->db->where('user_id', $user_id);
        $this->db->order_by('id', 'DESC');
        $this->db->limit(1);
        $query = $this->db->get();
        return $query->row(); // Mengembalikan data order terakhir berdasarkan user_id
    }
}
?>