<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class Update extends CI_Controller{

	public function index($update_id=0){
		
		$this->load->model('Updates');
		$data['update'] = $this->Updates->getUpdateById($update_id);

		$updateOwner = $data['update'][0]->postedByUserID;

		$this->load->model('User');
		$data['user'] = $this->User->getUserById($updateOwner);

		$this->load->view('update.php',$data);
		
	}

	public function delete($update_id=0){

		$user = $this->session->userdata('user');

		if ($user) {

			// $this->load->model('Updates');
			// $this->Updates->delete($update_id);
			// redirect(base_url().'index.php/profile/'.$user['id']);

			echo "test";
		
		} else {

			redirect(base_url());

		}

	}

}
