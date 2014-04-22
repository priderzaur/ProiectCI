<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class Delete_update extends CI_Controller{

	public function index($id=0){

		$user = $this->session->userdata('user');

		if ($user) {

			$this->load->model('Updates');
			$this->Updates->deleteComment($id);
			redirect(base_url().'index.php/update/'.$user['id']);
		
		} else {

			redirect(base_url());

		}

	}

}
