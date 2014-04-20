<?php

Class Login extends CI_Controller {

	public function index() {

		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
		$this->form_validation->set_rules('password', 'Password','required');

		if ($this->form_validation->run()) {
			$this->load->model('User');
			$this->User->login($this->input->post('email'), $this->input->post('password'));
		} else {
			$this->load->view('login.php');
		}

	}

}

?>