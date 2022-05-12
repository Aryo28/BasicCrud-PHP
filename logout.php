<?php
session_start();   

$_SESSION = array();

session_destroy();

Header('Location:login.php');

?>

