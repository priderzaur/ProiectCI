<?php 

Class Set extends CI_model {

	public function insert_user($email,$password) {

		$data = array(
			'email' => $email,
			'password' => md5($password)
		);

		$this->db->insert('users', $data);

	}

	public function insert_post($user_id, $title, $content) {

		$data = array(
			"user_id" => $user_id,
			"title" => $title,
			"content" => nl2br($content),
			"date" => date('Y-m-d H:i:s', time())
		);

		$this->db->insert("posts", $data);

	}

}

?>