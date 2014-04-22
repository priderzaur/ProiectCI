<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class Update extends CI_Controller{

	public function index($update_id=0){

		$user = $this->session->userdata('user');

		if ($user) {

			$data['profil'] = $user;
		
			$this->load->model('Updates');
			$data['update'] = $this->Updates->getUpdateById($update_id);

			$updateOwner = $data['update'][0]->postedByUserID;

			$this->load->model('User');
			$data['user'] = $this->User->getUserById($updateOwner);
			


			$data['comments'] = $this->Updates->getCommentsByPost($update_id);

			$data['commentsUser'] = array();

			foreach($data['comments'] as $key => $value){

				$temp = $this->User->getUserById($value->postedBy);

				$data['comments'][$key]->user_id = $temp[0]->user_id;
				$data['comments'][$key]->firstName = $temp[0]->firstName;
				$data['comments'][$key]->lastName = $temp[0]->lastName;
				$data['comments'][$key]->avatar = $temp[0]->avatar;

			}

			$this->load->view('update.php',$data);
		
		} else {

			redirect(base_url().'index.php/login');

		}
	
	}

}
