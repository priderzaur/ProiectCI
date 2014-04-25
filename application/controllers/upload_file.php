<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class New_update extends CI_Controller{

	public function index(){

		$user = $this->session->userdata('user');

		if ($user) {

			$this->config =  array(
                  'upload_path'     => dirname($_SERVER["SCRIPT_FILENAME"])."/files/",
                  'upload_url'      => base_url()."files/",
                  'allowed_types'   => "gif|jpg|png|jpeg|pdf|doc|xml",
                  'overwrite'       => TRUE,
                  'max_size'        => "1000KB",
                  'max_height'      => "768",
                  'max_width'       => "1024"  
                );

			$this->load->library('upload', $this->config);
			
			if($this->upload->do_upload()){ echo "file upload success"; }
			else{  echo "file upload failed"; }				

		} else {

			redirect(base_url());

		}
	}

}

?>