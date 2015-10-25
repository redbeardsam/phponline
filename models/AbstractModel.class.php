<?php

abstract class AbstractModel{

    private $modelName = '';
    private $entityName = '';

    public function __construct($modelName){

        $this->modelName = $modelName;
        $this->entityName = $modelName . 'Entity';
    }

    public static function getModel($sName){

        // $path = __DIR__ . '/' . $sName . '.class.php';
        // if (!is_file($path)) return "Model is empty";

        return new $sName($sName);

    }

    abstract function getByID($id);

    public function get(){
        
        $aResult =[];

        $query = 'SELECT * FROM `' . $this->modelName . '`';
        $result = mysql_query($query);

        while ($row = mysql_fetch_assoc($result)) {
            
            $aResult[] = $row;
        }

        return $aResult;
    }

/**
* update fields
* @param $field string
* @return $result
*/

    public function update($model, $id, $fields){
        
        if (!$id) return false;

        $sFields = '';
        foreach ($fields as $key => $value){

            $sFields .= $key . "='" . $value . "', ";

        }

        $iLen = mb_strlen($sFields);
        $sFields = mb_substr($sFields, 0, $iLen - 2);

        $query = "UPDATE `" . $model . "` SET " . $sFields . " WHERE `id`=" . "'" . $id . "';";
        $result = mysql_query($query);

        return $result;
    }
}