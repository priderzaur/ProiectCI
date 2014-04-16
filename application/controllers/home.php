<?php 

Class Home extends CI_Controller {

	public function index() {
		$this->load->model('get');
		$data['posts'] = $this->get->posts();
		$this->load->view('home',$data);


	}

}

?>