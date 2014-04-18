<?php 
	
class User extends MY_Model {

	const DB_TABLE = 'user';
    const DB_TABLE_PK = 'user_id';

    public $username;

    public $email;

    public $password;

    public $avatar;

}

?>