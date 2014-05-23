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
		$_SESSION['message'] = 'That email has already been registered';
		$_SESSION['message_type'] = 'error';
		header('Location: ../index.php');
		exit;
	} else {
		mysqli_query($db,"INSERT INTO user (email,password,hand_id,territorycards,reinforcements,game_id) 
					   VALUES('". $email. "','". $password. "',". -1 .",". -1 .",". -1 .",". -1 .")");
					   
		$_SESSION['message'] = 'Your account has been successfully created!';
		$_SESSION['message_type'] = 'success';
	}
	
	$_SESSION['logged'] = 1;
	$_SESSION['email'] = $email;

	header('Location: ../menu.php');
	exit;
	
	//$db = new PDO('mysql:host=localhost;dbname=db_risk;charset=utf8', 'root', '1fQ88AHU0D');
	//$stmt = $db->prepare("INSERT INTO user (email,password,hand_id,territorycards,reinforcements,game_id) VALUES(:email,:password,:hand_id,:territorycards,:reinforcements,:game_id)");
	//$stmt->execute(array(':email' => $email, ':password' => $pass, ':hand_id' => -1, ':territorycards' => -1, ':reinforcements' => -1, ':game_id' => -1));

?>