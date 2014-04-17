<?php
	
	Class Get extends CI_Model {

		public function login($email, $password) {

			$this->db->where('email', $email);
			$this->db->where('password', md5($password));
			$result = $this->db->get('users');

			if ( $result->num_rows() > 0 ) {
				$user = array();
				$result = $result->result_array();
				print_r($result);
				$user['id'] = $result[0]['id'];
				$user['email'] = $result[0]['email'];
				$this->session->set_userdata('user', $user);
				redirect(base_url());
			}

		}

		public function user{
			$result = $this->db->get('users');
			return $result->result_array();
		}

		public function updates(){

			$this->db->limit(10);
			$this->db->order_by('dateCreated','desc');
			$result = $this->db->get('updates');
			return $result->result_array();

		}

		public function updateWhereID($id){

			$this->db->where('posts.id',$id);
			$this->db->join('users','users.id = posts.user_id');
			$result = $this->db->get('posts');
			$result = $result->result_array();

			unset($result[0]['password']);
			return $result[0];

		}

	}


?>