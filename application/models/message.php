<?php

Class Message extends CI_Model {

	function __construct(){

        parent::__construct();

    }

    function addMessage($user1,$user2,$reply){

    	$data = array(
    		'user1'				=> $user1,
    		'user2'				=> $user2,
    		'reply'				=> $reply,
    		'status'			=> 'unread',
    		'date'				=> date('Y-m-d H:i:s', time())
    	);

    	$this->db->insert('conversations',$data);

    }

    function getMessagesReceived($id){

    	// $this->db->where('user2',$id);
    	// $this->db->order_by('conversation_id','DESC');
    	// $query=$this->db->get('conversations');
    	// return $query->result();

        $this->db->select("*");
        $this->db->from('conversations');
        $this->db->where('user2', $id);
        $this->db->join('user', 'user.user_id = conversations.user1', 'right');
        $this->db->order_by('conversation_id','DESC');

        $query = $this->db->get();

        return $query->result();
    }

    function showMessage($user1,$user2){

    	$this->db->where('user1',$user1);
    	$this->db->where('user2',$user2);
    	$this->db->order_by('conversation_id','ASC');
    	$query=$this->db->get('conversations');
    	return $query->result();

    }


}

?>