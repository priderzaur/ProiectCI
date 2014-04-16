<?php 

Class Get extends CI_Model {

	public function login($email, $password) {

		$this->db->where('email', $email);
		$this->db->where('password', md5($password));
		$result = $this->db->get('users');
		if ($result->num_rows() > 0) {
			$user = array();
			$result = $result->result_array();
			$user['id'] = $result[0]['id'];
			$user['email'] = $result[0]['email'];
			$this->session->set_userdata('user', $user);
		}

	}

}

?>