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
        $query = $this->db->get('user');
        return $query->result();

    }

    function getUsers($id){

        $this->db->select("*");
        $this->db->from('user');
        $this->db->where('follower',$id);
        $this->db->join('user_follow','user_follow.following = user.user_id');
        $query = $this->db->get();

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

    function updateUser($id,$email){
        $data = array(
            'email' => $email,
            'password' => md5($pwd)
        );

        $this->db->where('user_id',$id);
        $this->db->update('user',$data);
    }


    function selectFollower($follower,$following){

        $this->db->where('follower',$follower);
        $this->db->where('following',$following);
        $query = $this->db->get('user_follow');
        return $query->result();


    }

    function selectFollowers($id){

        $this->db->where('follower',$id);
        $query = $this->db->get('user_follow');
        return $query->result();

    }

    function addFollower($follower,$following){
        $data= array(
            'follower'      => $follower,
            'following'     => $following
        );
        $this->db->insert('user_follow',$data);
    }
    
    function deleteFollower($follower,$following){
        $data= array(
            'follower'      => $follower,
            'following'     => $following
        );
        $this->db->delete('user_follow',$data);
    }

    function addMoreInfo($id,$email){
        $data= array(
            'user_id'           => $id,
            'work'              => 'not set',
            'work_position'     => 'not set',
            'work_start'        => 'not set',
            'work_end'          => 'not set',
            'school'            => 'not set',
            'school_start'      => 'not set',
            'school_end'        => 'not set',
            'birthday'          => 'not set',
            'hometown'          => 'not set',
            'current_location'  => 'not set',
            'email'             => $email,
            'relationship'      => 'not set'
        );
        $this->db->insert('profil',$data);
    }

    function getMoreInfoById($id){

        $this->db->where('user_id',$id);
        $query = $this->db->get('profil');
        return $query->result();

    }

    function updateMoreInfo($id,$data=array()){

        $this->db->where('user_id',$id);
        $this->db->update('profil',$data);

    }



    function login($email,$password){

        $this->db->where('email', $email);
        $this->db->where('password', md5($password));
        $result = $this->db->get('user');

        if ( $result->num_rows() > 0 ) {
            $user = array();
            $result = $result->result_array();
            print_r($result);
            $user['id']         = $result[0]['user_id'];
            $user['firstName']  = $result[0]['firstName'];
            $user['lastName']   = $result[0]['lastName'];
            $user['email']      = $result[0]['email'];
            $user['avatar']     = $result[0]['avatar'];
            $this->session->set_userdata('user', $user);
            redirect(site_url());
        }

    }

    public function get_autocomplete($search_data) {
        $this->db->select('*');
        $this->db->like('firstName', $search_data);
        $this->db->or_like('lastName', $search_data);
        return $this->db->get('user', 10);
    }

}

?>