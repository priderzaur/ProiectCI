<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class New_update_photo extends CI_Controller{

	public function index(){

		$user = $this->session->userdata('user');

		if ($user) {

			$this->form_validation->set_rules('postContent', 'Status', 'required');


			$this->config =  array(
                  'upload_path'     => dirname($_SERVER["SCRIPT_FILENAME"]).'/uploads/',
                  'upload_url'      => base_url().'uploads/',
                  'allowed_types'   => "gif|jpg|png|jpeg",
                  'overwrite'       => TRUE,
                  'max_size'        => "10000KB",
                  'max_height'      => "1024",
                  'max_width'       => "2024"  
                );

			$this->load->library('upload', $this->config);
			
			if($this->upload->do_upload()){

				$upload_data = $this->upload->data();

				$postImage = $upload_data['file_name'];

			}
			else{ echo $this->upload->display_errors(); }	
			

			if ($this->form_validation->run()) {

				$this->load->model('Updates');
				$this->Updates->addUpdate($this->input->post('postContent'),$postImage,$user['id'],$user['id']);

				redirect(base_url());

			}

		} else {

			redirect(base_url());

		}
	}


}

?>