<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class Settings extends CI_Controller{

	public function index(){

		$user = $this->session->userdata('user');
		if ($user) {

			$this->form_validation->set_rules('email', 'Email', 'valid_email');
			$this->load->model('User');

			$data=array();
			$data['profil']=$user;
			$data['user']=$this->User->getUserById($user['id']);

			if ($this->form_validation->run()) {


				if ($this->input->post('confirmPwd') == $user['password']){

					if($this->input->post('newpwd') !='') { $pwd = $this->input->post('newpwd'); }

					$this->User->updateUser($user['id'],$this->input->post('email'),$pwd);
					redirect(base_url());
				}

			}else {

				$this->load->view('settings.php',$data);
			}

		}else{

			redirect(base_url().'index.php/login');

		}
	}

}


?>