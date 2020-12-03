<?php
	//session_start();
	$_SESSION = array();
	session_destroy();
	setcookie('Pseudo','');
	setcookie('pass','');
	
	header('location:index.php');
?>