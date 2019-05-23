<?php
require '../db/header.php';
$DB = new DB();

if (isset($_SESSION) ) {
	session_destroy();
	session_start();
}
else{
session_start();
}

$result = $DB->queryInsertADMIN();

var_dump($result);

?>