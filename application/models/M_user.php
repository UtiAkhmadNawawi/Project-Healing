<?php 
class M_user extends CI_model
{
    public function get_data()
    {
        return $this->db->get('tb_user')->result();
    }

    public function get_user($user_id) {
        // Ambil data pengguna berdasarkan user_id
        $query = $this->db->get_where('tb_user', array('user_id' => $user_id));

        if ($query->num_rows() == 1) {
            // Jika pengguna ditemukan, kembalikan data pengguna
            return $query->row();
        } else {
            // Jika pengguna tidak ditemukan, kembalikan false
            return false;
        }
    }
}
?>