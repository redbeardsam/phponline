<?php

define('BASE_URL', $_SERVER['SERVER_NAME'] . ":" . $_SERVER['SERVER_PORT']); 
session_start();
require_once(__DIR__ . "/helpers.class.php");
require_once(__DIR__ . "/db.php");
require_once(__DIR__ . "/../models/AbstractModel.class.php");
require_once(__DIR__ . "/../models/User.class.php");
require_once(__DIR__ . "/../models/Account.class.php");
require_once(__DIR__ . "/../models/Currency.class.php");
require_once(__DIR__ . "/../models/AccountEntity.class.php");
require_once(__DIR__ . "/../models/UserEntity.class.php");

?>
