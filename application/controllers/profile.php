<?php

Class Profile extends CI_Controller{

	public function index() {

		$this->load->model('get');
		$data['updates'] = $this->get->updates();
		$this->load->view('profile',$data);


	}

}

?>