<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class Profile extends CI_Controller{

	public function index($user_id) {

		$data = array();
		$this->load->model('User');
		$user = new User();
		$user->load($user_id);
		$data['user'] = $user;
		
		$updates= array();
		$this->load->model('Updates');
		$updatesAll = $this->Updates->get();

		foreach ($updatesAll as $updateSingle) {

			if ( ($updateSingle -> postedByUserID == $user_id) || ($updateSingle -> postedOnUserID == $user_id) ){
				$updates[] = $updateSingle;
			}
			
		}
		$data['updates'] = $updates;

		$this->load->view('profile.php',$data);
	}

}

?>