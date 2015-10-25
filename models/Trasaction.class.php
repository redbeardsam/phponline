<?php
// require_once(__DIR__ . "/lib/prolog.php");

/**
* model "user"
* @author EgTonk
* @package User
*/

class User{

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

    public static function getByID($id){
        
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
* update fields
* @param $field string
* @return $result
*/

    public static function update($id, $fields){
        
        if (!$id) return false;
        $sFields = '';

        foreach ($fields as $key => $value){

            $sFields .= $key . "='" . $value . "', ";

        }

        $iLen = mb_strlen($sFields);
        $sFields = mb_substr($sFields, 0, $iLen - 2);
        $query = "UPDATE `user` SET " . $sFields . " WHERE `id`=" . "'" . $id . "';";
        $result = mysql_query($query);

        return $result;
    }

        public static function getCurrentUser(){

        $userID = $_SESSION['user_id'];
        if ($userID) {

            return self::getByID($userID);

        }
            return true;
    }
}



