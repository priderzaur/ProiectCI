<?php 
	
	Class Post extends CI_Controller{

		public function id($id){

			$this->load->model('get');
			$data = $this->get->post($id);
			$this->load->view('post',$data);

		}

	}

?>