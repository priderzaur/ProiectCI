<?php 

Class Set extends CI_model {

	public function addUser($firstName,$lastName,$email,$password,$avatar) {

		$data = array(
			'firstName'		=> $firstName,
			'lastName'		=> $lastName,
			'email'			=> $email,
			'password'		=> md5($password),
			'avatar'		=> $avatar
		);

		$this->db->insert('users', $data);
		$this->db->addProfile($data);

	}

	public function addProfile($data, $extraInfo){



	}

	public function addUpdate($update){



	}

	public function ($value=''){
		
		

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