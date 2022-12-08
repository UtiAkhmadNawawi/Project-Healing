<?php 
class M_reservation extends CI_Model 
{

	public function __construct()
	{
        parent::__construct();
	}

	function dataReservation($username,$Bed,$child,$guest,$checkin_date,$checkout_date)
	{
		$checkin_date = date("Y-m-d");
		$checkout_date = date("Y-m-d");
		$data_reservation = array(
            'nama'=>$username,
			'Bed'=>$Bed,
			'guest'=>$guest,
			'child'=>$child,
			'checkin_date'=>$checkin_date,
			'checkout_date'=>$checkout_date
		);
		$this->db->insert('tb_reservation',$data_reservation);
	}
}
?>