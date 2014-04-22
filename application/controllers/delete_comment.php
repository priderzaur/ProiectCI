<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class Delete_comment extends CI_Controller{

	public function index($id=0){

		$user = $this->session->userdata('user');

		if ($user) {

			$this->load->model('Updates');
			$comment = $this->Updates->getCommentById($id);
			$this->Updates->deleteComment($id);
			redirect(site_url().'/update/'.$comment[0]->postedOn);
		
		} else {

			redirect(base_url());

		}

	}

}
