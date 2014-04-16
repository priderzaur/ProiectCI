<?php 

Class New_post extends CI_Controller {

	public function index() {

		$user = $this->session->userdata('user');

		if ($user) {

			$this->form_validation->set_rules('title', 'Title', 'required');
			$this->form_validation->set_rules('content', 'Content', 'required');

			if ($this->form_validation->run()) {
				$this->load->model('set');
				$this->set->insert_post($user['id'], $this->input->post('title'), $this->input->post('content'));
				redirect(base_url());
			} else {
				$this->load->view('new_post');
			}

		} else {

			redirect(base_url('login'));

		}

	}

}

?>