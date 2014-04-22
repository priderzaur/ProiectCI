<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class Add_comment extends CI_Controller{

	public function index($update_id){

		$user = $this->session->userdata('user');

		if ($user) {

			$this->form_validation->set_rules('comment', 'Comment', 'required');

			if ( ($this->form_validation->run()) && ($this->input->post('comment') != '') ) {
				$this->load->model('Updates');
				$this->Updates->addComment(
						$user['id'],
						$update_id,
						$this->input->post('comment')
					);
				redirect(base_url().'index.php/update/'.$update_id);
			}

		} else {

			redirect(base_url());

		}
	}

}

?>