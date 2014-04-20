<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class New_update extends CI_Controller{

	public function index(){

		$user = $this->session->userdata('user');

		if ($user) {

			$this->form_validation->set_rules('postContent', 'Status', 'required');

			if ($this->form_validation->run()) {
				$this->load->model('Updates');
				$this->Updates->addUpdate($this->input->post('postContent'), $this->input->post('postImage'),$user['id'],$user['id']);
				redirect(base_url().'index.php/profile/'.$user['id']);
			}

		} else {

			redirect(base_url());

		}
	}

}

?>