<?php


/**
* model "user"
* @author EgTonk
* @package User
*/

class User extends AbstractModel {

    public function __construct($modelName){

        parent::__construct($modelName);
    }

    public static function getAll(){
        
        $query = 'SELECT id, name, email FROM `user`';
        $result = mysql_query($query);

        while ($row = mysql_fetch_assoc($result)) {
        
            Helpers::dd($row);
            
        }
    }

/**
* get user field by ID
* @param $id string
* @return array
*/
    public function getByID($id){
        
        if (!$id) return false;

        $query = "SELECT * FROM `user` WHERE `email`=" . "'" . $id . "';";
        $result = mysql_query($query);

        return mysql_fetch_assoc($result);
    }

/**
* get user field by email
* @param $email string
* @return array
*/

    public static function getByEmail($email){
        
        if (!$email) return false;

        $query = "SELECT * FROM `user` WHERE `email`=" . "'" . $email . "';";
        $result = mysql_query($query);

        return mysql_fetch_assoc($result);
    }

    /**
     * Get current auth user by session
     *
     * @return array
     */
        public static function getCurrentUser(){

        $userID = $_SESSION['user_id'];
        if ($userID) {

            return self::getByID($userID);
        }
            return true;
    }
}



