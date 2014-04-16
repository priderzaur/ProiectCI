<?php

Class Register extends CI_Controller {

	public function index() {

		$user = $this->session->userdata('user');

		if (!$user) {

			$this->form_validation->set_rules('email','Email','required|valid_email|is_unique[users.email]');
			$this->form_validation->set_rules('password','Password','required');

			$this->form_validation->set_message('required',"%s e obligatoriu");
			$this->form_validation->set_message('valid_email', "%s nu este un email valid!");

			if ($this->form_validation->run()) {
				$this->load->model('set');
				$this->set->insert_user($this->input->post('email'), $this->input->post('password'));
			}
			else {
				$this->load->view('register');
			}

		} else {

			redirect(base_url());

		}

	}
}

?>