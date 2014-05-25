<?php
	session_start(); 

	$_SESSION['logged'] = 0;
	$_SESSION['email'] = NULL;
	
	header('Location: ../index.php');
	exit;

?>