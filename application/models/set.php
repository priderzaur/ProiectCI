<?php 

Class Set extends CI_Model {

	public function insert_user($email, $password) {

		$data = array(
			'email' => $email,
			'password' => md5($password)
		);

		$this->db->insert('users', $data);

	}

}

?>