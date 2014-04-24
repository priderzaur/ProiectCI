<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class About extends CI_Controller{

	public function index($user_id=1) {

		$user = $this->session->userdata('user');

		if ($user) {

			$this->load->model('User');
			$data['user'] = $this->User->getUserById($user_id);
			$data['infos'] = $this->User->getMoreInfoById($user_id);

			$data['profil'] = $user;

			$this->load->view('about.php',$data);

		}else{

			redirect(base_url().'index.php/login');

		}

	}

}

?>