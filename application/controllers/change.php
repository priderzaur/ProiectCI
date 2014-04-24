<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class Change extends CI_Controller{

	public function index(){

		$user = $this->session->userdata('user');
		if ($user) {

			$this->form_validation->set_rules('email', 'Email', 'valid_email|required');
			$this->form_validation->set_rules('hometown','Hometown', 'required');
			$this->form_validation->set_rules('current_location','Current City', 'required');
			$this->form_validation->set_rules('birthday','Birthday', 'required');

			$this->load->model('User');

			$data=array();
			$data['profil']=$user;
			$data['user']=$this->User->getUserById($user['id']);
			$data['info']=$this->User->getMoreInfoById($user['id']);

			if ($this->form_validation->run()) {


					$moreinfo=array(
						'user_id'			=> $user['id'],
						'work'				=> $this->input->post('work'),
						'work_position' 	=> $this->input->post('work_position'),
						'work_start' 		=> $this->input->post('work_start'),
						'work_end'			=> $this->input->post('work_end'),
						'school'			=> $this->input->post('school'),
						'school_start'		=> $this->input->post('school_start'),
						'school_end'		=> $this->input->post('school_end'),
						'birthday'			=> $this->input->post('birthday'),
						'hometown'			=> $this->input->post('hometown'),
						'current_location'	=> $this->input->post('current_location'),
						'email'				=> $this->input->post('email'),
						'relationship'		=> $this->input->post('relationship')

					);

					$this->User->updateMoreInfo($user['id'],$moreinfo);
					redirect(site_url().'/about/'.$user['id']);

			}else {

				$this->load->view('change.php',$data);
			}

		}else{

			redirect(base_url().'index.php/login');

		}
	}

}


?>