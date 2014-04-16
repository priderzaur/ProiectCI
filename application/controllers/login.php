<?php

Class Login extends CI_Controller {

	public function index() {

		$this->form_validation->set_rules('email','Email','required|valid_email');
		$this->form_validation->set_rules('password','Password','required');

		$this->form_validation->set_message('required',"%s e obligatoriu");
		$this->form_validation->set_message('valid_email', "%s nu este un email valid!");

		if ($this->form_validation->run()) {
			$this->load->model('get');
			$this->get->login($this->input->post('email'), $this->input->post('password'));
		}
		else {
			$this->load->view('login');
		}
	}
}

?>