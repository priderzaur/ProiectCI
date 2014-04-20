<?php 
	
class User extends CI_Model {

    var $user_id	= '';
    var $username	= '';
    var $email		= '';
    var $password	= '';
    var $avatar		= '';

    function __construct(){

        parent::__construct();

    }

    function getAllUsers(){

        $query = $this->db->get('user');
        return $query->result();

    }

    function getUserById($id){

        $this->db->where('user_id', $id);
        $query = $this->db->get('user', 1);
        return $query->result();

    }

    function addUser($firstName,$lastName,$email,$password){

        $data = array(
            'firstName'     => $firstName,
            'lastName'      => $lastName,
            'email'         => $email,
            'password'      => md5($password),
        );

        $this->db->insert('user', $data);

    }

    function login($email,$password){

        $this->db->where('email', $email);
        $this->db->where('password', md5($password));
        $result = $this->db->get('user');

        if ( $result->num_rows() > 0 ) {
            $user = array();
            $result = $result->result_array();
            print_r($result);
            $user['id'] = $result[0]['user_id'];
            $user['email'] = $result[0]['email'];
            $this->session->set_userdata('user', $user);
            redirect(base_url());
        }

    }

}

?>