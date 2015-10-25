<?php
require_once(__DIR__ . "/lib/prolog.php");

$data = [];

if (!Helpers::isAuth()) return false;

$aAccount   = AbstractModel::getModel('Account')->get();
$aUser      = AbstractModel::getModel('User')->get();
$aCurrency  = AbstractModel::getModel('Currency')->get();

foreach ($aAccount as $key => $items) {
    
    $aResult[] = array_merge($items, 
                            ['user_name' => $aUser[$key]['name']]
                            // ['currency_id' => $aCurrency[$items]['currency_id']]
    );
}
// Helpers::dd($aResult);
Helpers::render(__DIR__ . "/view/account-form.php", ['accounts' => $aResult]);
