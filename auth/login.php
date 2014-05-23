<?php
	session_start(); 

	$email = $_GET['email'];
	$pass = $_GET['password'];
	
		$db = mysqli_connect("localhost","root","1fQ88AHU0D","db_risk");
	
	if (mysqli_connect_errno()) {
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	
	$sql = "SELECT * FROM user WHERE email = '". $email. "'";
	$query = mysqli_query($db, $sql);
	$result = mysqli_fetch_array($query);
	
	if($result != NULL) {
		if($result['password'] == $pass) {
			$_SESSION['logged'] = 1;
			$_SESSION['email'] = $email;
		
			$_SESSION['message'] = 'Welcome '. $email .'!';
			$_SESSION['message_type'] = 'success';
			header('Location: ../menu.php');
			exit;
		} else {
			$_SESSION['message'] = 'The password you have selected does not match.';
			$_SESSION['message_type'] = 'error';
			
			header('Location: ../index.php');
			exit;
		}
	} else {		   
		$_SESSION['message'] = 'The account that you entered does not exist!';
		$_SESSION['message_type'] = 'error';
		
		header('Location: ../index.php');
		exit;
	}

?> 