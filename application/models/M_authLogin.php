<?php 
class M_authLogin extends CI_Model
{
	private $_table = "tb_user";
	const SESSION_KEY = 'user_id';

	public function rules()
	{
		return [
			[
				'field' => 'email',
				'label' => 'email',
				'rules' => 'required'
			],
			[
				'field' => 'password',
				'label' => 'Password',
				'rules' => 'required|max_length[255]'
			]
		];
	}

    public function register($username,$password,$email)
	{
		$data_user = array(
			'username'=>$username,
			'password'=>password_hash($password,PASSWORD_DEFAULT),
			'email'=>$email
		);
		$this->db->insert('tb_user',$data_user);
	}

	public function login($email, $password)
	{
		$this->db->where('email', $email);
		$query = $this->db->get($this->_table);
        // var_dump($user = $query->row());exit();
		$user = $query->row();
		// cek apakah user sudah terdaftar?
		if (!$user) {
			return FALSE;
		}

		// cek apakah passwordnya benar?
		if (!password_verify($password, $user->password)) {
			return FALSE;
		}

		// bikin session
		$this->session->set_userdata([self::SESSION_KEY => $user->user_id]);
		$this->_update_last_login($user->user_id);

		return $this->session->has_userdata(self::SESSION_KEY);
	}

	public function current_user()
	{
		if (!$this->session->has_userdata(self::SESSION_KEY)) {
			return null;
		}

		$user_id = $this->session->userdata(self::SESSION_KEY);
		$query = $this->db->get_where($this->_table, ['user_id' => $user_id]);
		// var_dump($query->row());exit();
		return $query->row();
	}

	public function logout()
	{
		$this->session->unset_userdata(self::SESSION_KEY);
		return !$this->session->has_userdata(self::SESSION_KEY);
	}

	public function _update_last_login($user_id)
	{
		$data = [
			'last_login' => date("Y-m-d H:i:s"),
		];

		return $this->db->update($this->_table, $data, ['user_id' => $user_id]);
	}
}
?>