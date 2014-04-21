<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class Settings extends CI_Controller{

	public function index(){

		$user = $this->session->userdata('user');
		if ($user) {

			$this->form_validation->set_rules('email', 'Email', 'valid_email');

			if ($this->form_validation->run()) {
				$this->load->model('User');

				if ($this->input->post('confirmPwd') == $user['password']){

					$this->User->updateUser($user['id'],$this->input->post('email'));
					redirect(base_url());
				}

			}else {
				$this->load->view('settings.php');
			}

		}else{

			redirect(base_url().'index.php/login');

		}
	}

}


?>