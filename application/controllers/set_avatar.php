<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class Set_avatar extends CI_Controller{

	public function index(){

		$user = $this->session->userdata('user');

		if ($user) {

			$this->config2 =  array(
                  'upload_path'     => dirname($_SERVER["SCRIPT_FILENAME"]).'/uploads/',
                  'upload_url'      => base_url().'uploads/',
                  'allowed_types'   => "gif|jpg|png|jpeg",
                  'overwrite'       => TRUE,
                  'max_size'        => "10001KB",
                  'max_height'      => "1024",
                  'max_width'       => "2024"  
                );

			$this->load->library('upload', $this->config2);
			
			if( $this->upload->do_upload() ){

				$upload_avatar = $this->upload->data();
				$postImage = $upload_avatar['file_name'];

			}
			else{ echo $this->upload->display_errors(); }	
		
			$this->load->model('User');
			$this->User->updateUser($user['id'],$user['email'],$user['password'],$postImage);

			redirect(site_url().'/profile/'.$user['id']);

		} else {

			redirect(base_url());

		}
	}


}

?>