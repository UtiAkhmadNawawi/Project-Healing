<?php 
class Available extends CI_Model 
{

	public function __construct()
	{
        parent::__construct();
	}

	function reservasi($username,$email,$chekin,$chekout,$guest,$child)
	{
		$data_reservasi = array(
			'cust_name'=>$username,
			'email'=>$email,
			'chek_in'=>$chekin,
			'chek_out'=>$chekout,
			'Gues'=>$guest,
            'child'=> $child
		);
		$this->db->insert('tb_reservation',$data_reservasi);
	}
}
?>