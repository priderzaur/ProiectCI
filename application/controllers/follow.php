<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class Follow extends CI_Controller {

	public function index($following) {

		$user = $this->session->userdata('user');

		if ($user) {
				$this->load->model('User');
				$this->User->addFollower($user['id'],$following);
				redirect(base_url());
		} else {
			$this->load->view('login.php');
		}

	}

}

?>