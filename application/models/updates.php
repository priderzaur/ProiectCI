<?php 

class Updates extends MY_Model {

	const DB_TABLE = 'updates';
    const DB_TABLE_PK = 'update_id';
    const DB_TABLE_FK1 = 'postedByUserID';
    const DB_TABLE_FK2 = 'postedOnUserID';

    public $postContent;

    public $postImage;

    public $postedByUserID;

    public $postedOnUserID;

    public $dateCreated;

}

?>