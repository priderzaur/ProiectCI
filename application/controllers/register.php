<?php

Class Register extends CI_Controller {

	public function index() {

		$user = $this->session->userdata('user');

		if (!$user) {

			$this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[user.email]');
			$this->form_validation->set_rules('password', 'Password','required');

			if ($this->form_validation->run()) {

				$this->load->model('User');
				$this->User->addUser(
					$this->input->post('firstName'),
					$this->input->post('lastName'),
					$this->input->post('email'), 
					$this->input->post('password')
				);
				$this->User->login($this->input->post('email'), $this->input->post('password'));

			} else {

				$this->load->view('register.php');

			}

		} else {

			redirect(base_url());

		}

	}

}

?>