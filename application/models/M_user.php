<?php 
class M_user extends CI_model
{
    public function get_data()
    {
        return $this->db->get('tb_user')->result_array();
    }
}
?>