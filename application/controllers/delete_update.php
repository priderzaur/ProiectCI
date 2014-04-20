<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class Delete_update extends CI_Controller{

	public function index($update_id=0){

		$user = $this->session->userdata('user');

		if ($user) {

			$this->load->model('Updates');
			$this->Updates->deleteUpdate($update_id);
			redirect(base_url().'index.php/profile/'.$user['id']);
		
		} else {

			redirect(base_url());

		}

	}

}
