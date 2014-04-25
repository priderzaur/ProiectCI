<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class Home extends CI_Controller {

	public function index(){

		$user = $this->session->userdata('user');

		if ($user) {
			$data = array();

			$data['profil'] = $user;
			$this->load->model('User');
			$this->load->model('Updates');

			$data['feeds'] = $this->Updates->getFeed($user['id']);
			$data['users'] = $this->User->getUsers($user['id']);

			$this->load->view('feed.php',$data);

		}else{
			redirect(base_url().'index.php/login');
		}
		
	}


}

?>