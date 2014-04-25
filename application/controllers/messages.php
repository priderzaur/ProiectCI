<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class Messages extends CI_Controller {

	public function index() {

		$user = $this->session->userdata('user');

		if ($user) {
				$this->load->model('User');
				$this->load->model('Message');

				$id=$user['id'];

				$data['conversations'] = $this->Message->getMessagesReceived($id);

				for($i = 0; $i<sizeof($data['conversations']); $i++){

					$ok=1;

					for($c = 0; $c < $i; $c++){


						if(isset($data['conversations'][$i]) && isset($data['conversations'][$c]->user1) ){

							if($data['conversations'][$i]->user1 == $data['conversations'][$c]->user1){

								unset($data['conversations'][$i]);

							}

						}

					}

				}

				// echo '<pre>';
				// print_r($data['conversations']);
				// echo '</pre>';

				$data['user'] = $user;

				$this->load->view('messages.php',$data);
		} else {
			$this->load->view('login.php');
		}

	}

	public function conversation($id){

		$user = $this->session->userdata('user');

		if ($user) {
				$this->load->model('User');
				$this->load->model('Message');

				$data['chat'] = $this->User->getUserById($id);

				$conv1 = $this->Message->showMessage($user['id'],$data['chat'][0]->user_id);
				$conv2 = $this->Message->showMessage($data['chat'][0]->user_id,$user['id']);

				$data['conversations'] = array_merge($conv1,$conv2);
				asort($data['conversations']);
				$data['user'] = $user;	

				// echo '<pre>';
				// print_r($data['conversations']);
				// echo '</pre>';

				$this->load->view('conversation.php',$data);

		} else {
			$this->load->view('login.php');
		}

	}

	public function add($id){

		$user = $this->session->userdata('user');

		if ($user) {

			$this->form_validation->set_rules('reply', 'Comment', 'required');

			if ( ($this->form_validation->run()) ) {
				$this->load->model('Message');
				$this->Message->addMessage(
						$user['id'],
						$id,
						$this->input->post('reply')
					);
				redirect(base_url().'index.php/messages/conversation/'.$id);
			}

		} else {

			redirect(base_url());

		}

	}

}

?>