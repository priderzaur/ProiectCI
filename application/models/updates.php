<?php 

class Updates extends CI_Model {

    var $update_id          = '';
    var $postContent        = '';
    var $postImage          = '';
    var $postedByUserID     = '';
    var $postedOnUserID     = '';
    var $dateCreated        = '';

    function __construct(){

        parent::__construct();

    }

    function getAllUpdates(){

        $query = $this->db->get('updates');
        return $query->result();

    }

    function getUpdateById($id){

        $this->db->where('update_id', $id);
        $query = $this->db->get('updates', 1);
        return $query->result();

    }

    function getUpdatesByOwner($id){

        $this->db->where('postedByUserID', $id);
        $this->db->order_by('dateCreated', 'desc');
        $query = $this->db->get('updates');
        return $query->result();

    }

    function addUpdate($postContent='', $postImage='', $postedByUserID, $postedOnUserID){

        $data = array(
            'postContent'       => $postContent,
            'postImage'         => $postImage,
            'postedByUserID'    => $postedByUserID,
            'postedOnUserID'    => $postedOnUserID,
            'dateCreated'       => date('Y-m-d H:i:s', time())
        );

        $this->db->insert("updates", $data);
    }

    function deleteUpdate($id){

        $this->db->delete('updates', array('update_id' => $id));

    }

    function addComment($user_id,$update_id,$content){

        $data = array(
            'postedBy'      => $user_id,
            'postedOn'      => $update_id,
            'content'       => $content,
            'date'          => date('Y-m-d H:i:s', time())
        );

        $this->db->insert('comments', $data);

    }

    function deleteComment($id){

        $this->db->delete('comments', array('comment_id' => $id));

    }

    function getCommentById($id){

        $this->db->where('comment_id',$id);
        $query = $this->db->get('comments');
        return $query->result();

    }

    function getCommentsByPost($update_id){

        $this->db->where('postedOn',$update_id);
        $this->db->order_by('date','asc');
        $query = $this->db->get('comments');
        return $query->result();

    }


}

?>