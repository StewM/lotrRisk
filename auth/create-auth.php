<?php
	session_start(); 

	$numusers = $_GET['numusers'];
	$name = $_GET['name'];
	
	$db = mysqli_connect("localhost","root","1fQ88AHU0D","db_risk");
	
	if (mysqli_connect_errno()) {
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
					   
	mysqli_query($db,"INSERT INTO game (phase, currentuser, gamestate, numusers, name) 
					  VALUES(". -1 .", ". -1 .", ". -1 .",". $numusers .",'". $name ."')");
					   
	$sql = "SELECT id FROM game WHERE name = '". $name. "'";
	$query = mysqli_query($db, $sql);
	$result = mysqli_fetch_array($query);
	
	function territoryInsert($territoryName, $stronghold, $game_id) {
		mysqli_query($db,"INSERT INTO territory (name, unitcount, leader, user_id, stronghold, game_id) 
					      VALUES('". $territoryName ."',     ". 0 .", ". 0 .", ". -1 .", ". $stronghold .",". $game_id .")");
	}
	
	function questInsert($territoryName, $goodReward, $evilReward, $game_id) {
		$territory = mysqli_fetch_array(mysqli_query($db, "SELECT id FROM territory WHERE name = '". $territoryName ."'"));
		mysqli_query($db,"INSERT INTO quest (type, inplay, territory_id, game_id, goodreward, evilreward) 
					      VALUES(". 1 .", ". 0 .", ". $territory['id'] .", ". $game_id .", ". $goodReward .",". $evilReward .")");	
	}
	//Arnor
	Forodwaith 0
	Borderlands 0
	North Downs 0			   
	Fornost 0
	Buckland 0
	South Downs 0
	Weather Hills 0
	Angmar 0
	Rhudaur 1 
	Eastern Angmar 0
	
	//Forodwaith 2 2			   
	//Fornost 2	6	 	 	   
	//Weather Hills	2 2	 	 	   			  
	//Eastern Angmar 4 4					
				
				
				
	//rhovanion
	Moria 1
	Gladden Fields 0
	Lorien 0
	The Wold 0
	Emyn Muil 0
	Brown Lands 0
	Rhun Hills 0
	Dead Marshes 0
	
	//Lorien 2 2
	//The Wold 2 2				   
	//Brown Lands 6 2
	//Dead Marshes 2 2				
	
	
	//rohan
	Minhiriath 0
	Dunland 0
	Eregion 0
	Enedwaith 0
	Fangorn 1
	West Rohan 1
	Gap of Rohan 0
	
	//Minhiriath 4 4 	
	//Eregion 2 4
	//Gap of Rohan 2 2	   

	
	//mirkwood
	Carrock 0
	North Mirkwood 0
	Anduin Valley 0
	Eastern Mirkwood 0
	South Mirkwood 1
	
	//North Mirkwood 2 1
	
	
	//eriador
	Forlindon 0
	Harlindon 0
	Mithlond 0
	Lune Valley 0
	Evendim Hills 1
	Tower Hills 0
	The Shire 0
	
	//Harlindon 2 3
	//Mithlond 2 4
	//The Shire 2 2
	
	
	//rhun
	North Rhun 0
	Withered Heath 0
	Esgaroth 0
	South Rhun 0
	
	//Esgaroth 4 2
	
	
	//gondor
	Druwaith Iaur 0
	Andrast 0
	Anfalas 0
	Vale of Erech 0
	Lamedon 0
	Belfalas 0
	Lebennin 0
	Minas Tirith 1
	Ithilien 0
	South Ithilien 0
	
	//Vale of Erech 6 6
	//Belfalas 2 2
	//Lebennin 5 5
	//Ithilien 2 4
					   
	
	//mordor
	Udun Vale 1
	Mount Doom 0
	Barad-Dur 1
	Gorgoroth 0
	Nurn 0
	Minas Morgul 1
	
	//Mount Doom 2 5
	
	
	//haradwaith
	Harondor 0
	Umbar 1 
	Deep Harad 0
	Harad 0
	Near Harad 0
	Khand 0
	
	//Khand 2 4
				
				
	/*********************************************************************************************************/
	//Arnor
	$Forodwaith = mysqli_fetch_array(mysqli_query($db, "SELECT id FROM territory WHERE name = 'Forodwaith'"));
	$Borderlands = mysqli_fetch_array(mysqli_query($db, "SELECT id FROM territory WHERE name = 'Borderlands'"));
	$NorthDowns = mysqli_fetch_array(mysqli_query($db, "SELECT id FROM territory WHERE name = 'North Downs'"));
	$Fornost = mysqli_fetch_array(mysqli_query($db, "SELECT id FROM territory WHERE name = 'Fornost'"));
	$Buckland = mysqli_fetch_array(mysqli_query($db, "SELECT id FROM territory WHERE name = 'Buckland'"));
	$SouthDowns = mysqli_fetch_array(mysqli_query($db, "SELECT id FROM territory WHERE name = 'South Downs'"));
	$WeatherHills = mysqli_fetch_array(mysqli_query($db, "SELECT id FROM territory WHERE name = 'Weather Hills'"));
	$Angmar = mysqli_fetch_array(mysqli_query($db, "SELECT id FROM territory WHERE name = 'Angmar'"));
	$Rhudaur = mysqli_fetch_array(mysqli_query($db, "SELECT id FROM territory WHERE name = 'Rhudaur'"));
	$EasternAngmar = mysqli_fetch_array(mysqli_query($db, "SELECT id FROM territory WHERE name = 'Eastern Angmar'"));
	
	//Rhovanion
	$Moria = mysqli_fetch_array(mysqli_query($db, "SELECT id FROM territory WHERE name = 'Moria'"));
	$GladdenFields = mysqli_fetch_array(mysqli_query($db, "SELECT id FROM territory WHERE name = 'Gladden Fields'"));
	$Lorien = mysqli_fetch_array(mysqli_query($db, "SELECT id FROM territory WHERE name = 'Lorien'"));
	$TheWold = mysqli_fetch_array(mysqli_query($db, "SELECT id FROM territory WHERE name = 'The Wold'"));
	$EmynMuil = mysqli_fetch_array(mysqli_query($db, "SELECT id FROM territory WHERE name = 'Emyn Muil'"));
	$BrownLands = mysqli_fetch_array(mysqli_query($db, "SELECT id FROM territory WHERE name = 'Brown Lands'"));
	$RhunHills = mysqli_fetch_array(mysqli_query($db, "SELECT id FROM territory WHERE name = 'Rhun Hills'"));
	$DeadMarshes = mysqli_fetch_array(mysqli_query($db, "SELECT id FROM territory WHERE name = 'Dead Marshes'"));
	
	//Rohan    
	$Minhiriath = mysqli_fetch_array(mysqli_query($db, "SELECT id FROM territory WHERE name = 'Minhiriath'"));
	$Dunland = mysqli_fetch_array(mysqli_query($db, "SELECT id FROM territory WHERE name = 'Dunland'"));
	$Eregion = mysqli_fetch_array(mysqli_query($db, "SELECT id FROM territory WHERE name = 'Eregion'"));
	$Enedwaith = mysqli_fetch_array(mysqli_query($db, "SELECT id FROM territory WHERE name = 'Enedwaith'"));
	$Fangorn = mysqli_fetch_array(mysqli_query($db, "SELECT id FROM territory WHERE name = 'Fangorn'"));
	$WestRohan = mysqli_fetch_array(mysqli_query($db, "SELECT id FROM territory WHERE name = 'West Rohan'"));
	$GapofRohan = mysqli_fetch_array(mysqli_query($db, "SELECT id FROM territory WHERE name = 'Gap of Rohan'"));
	
	//Mirkwood
	 Eastern Mirkwood South Mirkwood
	$Carrock = mysqli_fetch_array(mysqli_query($db, "SELECT id FROM territory WHERE name = 'Carrock'"));
	$NorthMirkwood = mysqli_fetch_array(mysqli_query($db, "SELECT id FROM territory WHERE name = 'North Mirkwood'"));
	$AnduinValley = mysqli_fetch_array(mysqli_query($db, "SELECT id FROM territory WHERE name = 'Anduin Valley'"));
	$Eregion = mysqli_fetch_array(mysqli_query($db, "SELECT id FROM territory WHERE name = 'Eregion'"));
	$Eregion = mysqli_fetch_array(mysqli_query($db, "SELECT id FROM territory WHERE name = 'Eregion'"));
	
	mysqli_query($con,"UPDATE territory SET Age=36,
					   WHERE FirstName=". $territory['id'] .);
	
	
	
	$_SESSION['message'] = 'The game has been successfully created. Please invite people to play!';
	$_SESSION['message_type'] = 'success';
	
	header('Location: ../menu.php');
	exit;
	
?>