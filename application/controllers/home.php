<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class Home extends CI_Controller {

	public function index(){

		$user = $this->session->userdata('user');

		if ($user) {
			$data = array();

			$this->load->model('User');
			$this->load->model('Updates');
			$followers = $this->User->SelectFollowers($user['id']);

			foreach($followers as $follower){
				$data['feeds'][] = $this->Updates->getUpdatesByOwner($follower->following);
				$data['users'][] = $this->User->getUserById($follower->following);
			}

			$this->load->view('feed.php',$data);

		}else{
			redirect(base_url().'index.php/login');
		}
		
	}

}

?>