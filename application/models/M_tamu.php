<?php 
class M_Tamu extends CI_Model 
{

	public function __construct()
	{
        parent::__construct();
	}

	function dataTamu($username,$alamat,$identitasNO,$telepon,$kota)
	{
		$data_tamu = array(
			'nama'=>$username,
			'alamat'=>$alamat,
			'no_identitas'=>$identitasNO,
			'telepon'=>$telepon,
			'kota'=>$kota
		);
		$this->db->insert('tb_tamu',$data_tamu);
	}
}
?>