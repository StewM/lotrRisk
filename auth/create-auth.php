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
	
	//Arnor
	mysqli_query($db,"INSERT INTO territory (name, unitcount, leader, user_id, stronghold, game_id) 
					   VALUES('Forodwaith',     ". 0 .", ". 0 .", ". -1 .", ". 0 .",". $result['id'] .")");
	
	$sql = "SELECT id FROM territory WHERE name = 'Forodwaith'";
	$query = mysqli_query($db, $sql);
	$territory = mysqli_fetch_array($query);
	
	mysqli_query($db,"INSERT INTO quest (type, inplay, territory_id, game_id, goodreward, evilreward) 
					  VALUES(". 1 .", ". 0 .", ". $territory['id'] .", ". $result['id'] .", ". 2 .",". 2 .")");		
					   
	mysqli_query($db,"INSERT INTO territory (name, unitcount, leader, user_id, quest_id, stronghold, game_id) 
					   VALUES('Borderlands',    ". 0 .", ". 0 .", ". -1 .", ". 0 .",". $result['id'] .")");
	mysqli_query($db,"INSERT INTO territory (name, unitcount, leader, user_id, quest_id, stronghold, game_id) 
					   VALUES('North Downs',    ". 0 .", ". 0 .", ". -1 .", ". 0 .",". $result['id'] .")");				   
	mysqli_query($db,"INSERT INTO territory (name, unitcount, leader, user_id, quest_id, stronghold, game_id) 
					   VALUES('Fornost',        ". 0 .", ". 0 .", ". -1 .", ". 0 .",". $result['id'] .")");
					   
	$sql = "SELECT id FROM territory WHERE name = 'Fornost'";
	$query = mysqli_query($db, $sql);
	$territory = mysqli_fetch_array($query);
	
	mysqli_query($db,"INSERT INTO quest (type, inplay, territory_id, game_id, goodreward, evilreward) 
					  VALUES(". 1 .", ". 0 .", ". $territory['id'] .", ". $result['id'] .", ". 2 .",". 6 .")");
					   
	mysqli_query($db,"INSERT INTO territory (name, unitcount, leader, user_id, quest_id, stronghold, game_id) 
					   VALUES('Buckland',       ". 0 .", ". 0 .", ". -1 .", ". 0 .",". $result['id'] .")");
	mysqli_query($db,"INSERT INTO territory (name, unitcount, leader, user_id, quest_id, stronghold, game_id) 
					   VALUES('South Downs',    ". 0 .", ". 0 .", ". -1 .", ". 0 .",". $result['id'] .")");
	mysqli_query($db,"INSERT INTO territory (name, unitcount, leader, user_id, quest_id, stronghold, game_id) 
					   VALUES('Weather Hills',  ". 0 .", ". 0 .", ". -1 .", ". 0 .",". $result['id'] .")");
					   
	$sql = "SELECT id FROM territory WHERE name = 'Weather Hills'";
	$query = mysqli_query($db, $sql);
	$territory = mysqli_fetch_array($query);
	
	mysqli_query($db,"INSERT INTO quest (type, inplay, territory_id, game_id, goodreward, evilreward) 
					  VALUES(". 1 .", ". 0 .", ". $territory['id'] .", ". $result['id'] .", ". 2 .",". 2 .")");
					  
	mysqli_query($db,"INSERT INTO territory (name, unitcount, leader, user_id, quest_id, stronghold, game_id) 
					   VALUES('Angmar',         ". 0 .", ". 0 .", ". -1 .", ". 0 .",". $result['id'] .")");
	mysqli_query($db,"INSERT INTO territory (name, unitcount, leader, user_id, quest_id, stronghold, game_id) 
					   VALUES('Rhudaur',        ". 0 .", ". 0 .", ". -1 .", ". 1 .",". $result['id'] .")");
	mysqli_query($db,"INSERT INTO territory (name, unitcount, leader, user_id, quest_id, stronghold, game_id) 
					   VALUES('Eastern Angmar', ". 0 .", ". 0 .", ". -1 .", ". 0 .",". $result['id'] .")");
					   
	$sql = "SELECT id FROM territory WHERE name = 'Eastern Angmar'";
	$query = mysqli_query($db, $sql);
	$territory = mysqli_fetch_array($query);
	
	mysqli_query($db,"INSERT INTO quest (type, inplay, territory_id, game_id, goodreward, evilreward) 
					  VALUES(". 1 .", ". 0 .", ". $territory['id'] .", ". $result['id'] .", ". 4 .",". 4 .")");	
				
				
	//rhovanion
	mysqli_query($db,"INSERT INTO territory (name, unitcount, leader, user_id, quest_id, stronghold, game_id) 
					   VALUES('Moria',		    ". 0 .", ". 0 .", ". -1 .", ". 1 .",". $result['id'] .")");
	mysqli_query($db,"INSERT INTO territory (name, unitcount, leader, user_id, quest_id, stronghold, game_id) 
					   VALUES('Gladden Fields', ". 0 .", ". 0 .", ". -1 .", ". 0 .",". $result['id'] .")");
	mysqli_query($db,"INSERT INTO territory (name, unitcount, leader, user_id, quest_id, stronghold, game_id) 
					   VALUES('Lorien',         ". 0 .", ". 0 .", ". -1 .", ". 0 .",". $result['id'] .")");
					   
	$sql = "SELECT id FROM territory WHERE name = 'Lorien'";
	$query = mysqli_query($db, $sql);
	$territory = mysqli_fetch_array($query);
	
	mysqli_query($db,"INSERT INTO quest (type, inplay, territory_id, game_id, goodreward, evilreward) 
					  VALUES(". 1 .", ". 0 .", ". $territory['id'] .", ". $result['id'] .", ". 2 .",". 2 .")");
					   
	mysqli_query($db,"INSERT INTO territory (name, unitcount, leader, user_id, quest_id, stronghold, game_id) 
					   VALUES('The Wold',       ". 0 .", ". 0 .", ". -1 .", ". 0 .",". $result['id'] .")");
					   
	$sql = "SELECT id FROM territory WHERE name = 'The Wold'";
	$query = mysqli_query($db, $sql);
	$territory = mysqli_fetch_array($query);
	
	mysqli_query($db,"INSERT INTO quest (type, inplay, territory_id, game_id, goodreward, evilreward) 
					  VALUES(". 1 .", ". 0 .", ". $territory['id'] .", ". $result['id'] .", ". 2 .",". 2 .")");
					   
	mysqli_query($db,"INSERT INTO territory (name, unitcount, leader, user_id, quest_id, stronghold, game_id) 
					   VALUES('Emyn Muil',      ". 0 .", ". 0 .", ". -1 .", ". 0 .",". $result['id'] .")");
	mysqli_query($db,"INSERT INTO territory (name, unitcount, leader, user_id, quest_id, stronghold, game_id) 
					   VALUES('Brown Lands',    ". 0 .", ". 0 .", ". -1 .", ". 0 .",". $result['id'] .")");
					   
	$sql = "SELECT id FROM territory WHERE name = 'Brown Lands'";
	$query = mysqli_query($db, $sql);
	$territory = mysqli_fetch_array($query);
	
	mysqli_query($db,"INSERT INTO quest (type, inplay, territory_id, game_id, goodreward, evilreward) 
					  VALUES(". 1 .", ". 0 .", ". $territory['id'] .", ". $result['id'] .", ". 6 .",". 2 .")");
					   
	mysqli_query($db,"INSERT INTO territory (name, unitcount, leader, user_id, quest_id, stronghold, game_id) 
					   VALUES('Rhun Hills',     ". 0 .", ". 0 .", ". -1 .", ". 0 .",". $result['id'] .")");
	mysqli_query($db,"INSERT INTO territory (name, unitcount, leader, user_id, quest_id, stronghold, game_id) 
					   VALUES('Dead Marshes',   ". 0 .", ". 0 .", ". -1 .", ". 0 .",". $result['id'] .")");
					   
	$sql = "SELECT id FROM territory WHERE name = 'Dead Marshes'";
	$query = mysqli_query($db, $sql);
	$territory = mysqli_fetch_array($query);
	
	mysqli_query($db,"INSERT INTO quest (type, inplay, territory_id, game_id, goodreward, evilreward) 
					  VALUES(". 1 .", ". 0 .", ". $territory['id'] .", ". $result['id'] .", ". 2 .",". 2 .")");
	
	
	//rohan
	mysqli_query($db,"INSERT INTO territory (name, unitcount, leader, user_id, quest_id, stronghold, game_id) 
					   VALUES('Minhiriath',		". 0 .", ". 0 .", ". -1 .", ". 0 .",". $result['id'] .")");
					   
	$sql = "SELECT id FROM territory WHERE name = 'Minhiriath'";
	$query = mysqli_query($db, $sql);
	$territory = mysqli_fetch_array($query);
	
	mysqli_query($db,"INSERT INTO quest (type, inplay, territory_id, game_id, goodreward, evilreward) 
					  VALUES(". 1 .", ". 0 .", ". $territory['id'] .", ". $result['id'] .", ". 4 .",". 4 .")");
					   
	mysqli_query($db,"INSERT INTO territory (name, unitcount, leader, user_id, quest_id, stronghold, game_id) 
					   VALUES('Dunland',	    ". 0 .", ". 0 .", ". -1 .", ". 0 .",". $result['id'] .")");
	mysqli_query($db,"INSERT INTO territory (name, unitcount, leader, user_id, quest_id, stronghold, game_id) 
					   VALUES('Eregion',	    ". 0 .", ". 0 .", ". -1 .", ". 0 .",". $result['id'] .")");
					   
	$sql = "SELECT id FROM territory WHERE name = 'Eregion'";
	$query = mysqli_query($db, $sql);
	$territory = mysqli_fetch_array($query);
	
	mysqli_query($db,"INSERT INTO quest (type, inplay, territory_id, game_id, goodreward, evilreward) 
					  VALUES(". 1 .", ". 0 .", ". $territory['id'] .", ". $result['id'] .", ". 2 .",". 4 .")");
					   
	mysqli_query($db,"INSERT INTO territory (name, unitcount, leader, user_id, quest_id, stronghold, game_id) 
					   VALUES('Enedwaith',		". 0 .", ". 0 .", ". -1 .", ". 0 .",". $result['id'] .")");
	mysqli_query($db,"INSERT INTO territory (name, unitcount, leader, user_id, quest_id, stronghold, game_id) 
					   VALUES('Fangorn',		". 0 .", ". 0 .", ". -1 .", ". 1 .",". $result['id'] .")");
	mysqli_query($db,"INSERT INTO territory (name, unitcount, leader, user_id, quest_id, stronghold, game_id) 
					   VALUES('West Rohan',		". 0 .", ". 0 .", ". -1 .", ". 1 .",". $result['id'] .")");
	mysqli_query($db,"INSERT INTO territory (name, unitcount, leader, user_id, quest_id, stronghold, game_id) 
					   VALUES('Gap of Rohan',   ". 0 .", ". 0 .", ". -1 .", ". 0 .",". $result['id'] .")");
					   
	$sql = "SELECT id FROM territory WHERE name = 'Gap of Rohan'";
	$query = mysqli_query($db, $sql);
	$territory = mysqli_fetch_array($query);
	
	mysqli_query($db,"INSERT INTO quest (type, inplay, territory_id, game_id, goodreward, evilreward) 
					  VALUES(". 1 .", ". 0 .", ". $territory['id'] .", ". $result['id'] .", ". 2 .",". 2 .")");
	
	
	//mirkwood
	mysqli_query($db,"INSERT INTO territory (name, unitcount, leader, user_id, quest_id, stronghold, game_id) 
					   VALUES('Carrock',          ". 0 .", ". 0 .", ". -1 .", ". 0 .",". $result['id'] .")");
	mysqli_query($db,"INSERT INTO territory (name, unitcount, leader, user_id, quest_id, stronghold, game_id) 
					   VALUES('North Mirkwood',   ". 0 .", ". 0 .", ". -1 .", ". 0 .",". $result['id'] .")");
					   
	$sql = "SELECT id FROM territory WHERE name = 'North Mirkwood'";
	$query = mysqli_query($db, $sql);
	$territory = mysqli_fetch_array($query);
	
	mysqli_query($db,"INSERT INTO quest (type, inplay, territory_id, game_id, goodreward, evilreward) 
					  VALUES(". 1 .", ". 0 .", ". $territory['id'] .", ". $result['id'] .", ". 2 .",". 1 .")");
					   
	mysqli_query($db,"INSERT INTO territory (name, unitcount, leader, user_id, quest_id, stronghold, game_id) 
					   VALUES('Anduin Valley',    ". 0 .", ". 0 .", ". -1 .", ". 0 .",". $result['id'] .")");
	mysqli_query($db,"INSERT INTO territory (name, unitcount, leader, user_id, quest_id, stronghold, game_id) 
					   VALUES('Eastern Mirkwood', ". 0 .", ". 0 .", ". -1 .", ". 0 .",". $result['id'] .")");
	mysqli_query($db,"INSERT INTO territory (name, unitcount, leader, user_id, quest_id, stronghold, game_id) 
					   VALUES('South Mirkwood',   ". 0 .", ". 0 .", ". -1 .", ". 1 .",". $result['id'] .")");
	
	
	//eriador
	mysqli_query($db,"INSERT INTO territory (name, unitcount, leader, user_id, quest_id, stronghold, game_id) 
					   VALUES('Forlindon',        ". 0 .", ". 0 .", ". -1 .", ". 0 .",". $result['id'] .")");
	mysqli_query($db,"INSERT INTO territory (name, unitcount, leader, user_id, quest_id, stronghold, game_id) 
					   VALUES('Harlindon',        ". 0 .", ". 0 .", ". -1 .", ". 0 .",". $result['id'] .")");
					   
	$sql = "SELECT id FROM territory WHERE name = 'Harlindon'";
	$query = mysqli_query($db, $sql);
	$territory = mysqli_fetch_array($query);
	
	mysqli_query($db,"INSERT INTO quest (type, inplay, territory_id, game_id, goodreward, evilreward) 
					  VALUES(". 1 .", ". 0 .", ". $territory['id'] .", ". $result['id'] .", ". 2 .",". 3 .")");
					   
	mysqli_query($db,"INSERT INTO territory (name, unitcount, leader, user_id, quest_id, stronghold, game_id) 
					   VALUES('Mithlond',         ". 0 .", ". 0 .", ". -1 .", ". 0 .",". $result['id'] .")");
					   
	$sql = "SELECT id FROM territory WHERE name = 'Mithlond'";
	$query = mysqli_query($db, $sql);
	$territory = mysqli_fetch_array($query);
	
	mysqli_query($db,"INSERT INTO quest (type, inplay, territory_id, game_id, goodreward, evilreward) 
					  VALUES(". 1 .", ". 0 .", ". $territory['id'] .", ". $result['id'] .", ". 2 .",". 4 .")");
					   
	mysqli_query($db,"INSERT INTO territory (name, unitcount, leader, user_id, quest_id, stronghold, game_id) 
					   VALUES('Lune Valley',      ". 0 .", ". 0 .", ". -1 .", ". 0 .",". $result['id'] .")");
	mysqli_query($db,"INSERT INTO territory (name, unitcount, leader, user_id, quest_id, stronghold, game_id) 
					   VALUES('Evendim Hills',    ". 0 .", ". 0 .", ". -1 .", ". 1 .",". $result['id'] .")");
	mysqli_query($db,"INSERT INTO territory (name, unitcount, leader, user_id, quest_id, stronghold, game_id) 
					   VALUES('Tower Hills',      ". 0 .", ". 0 .", ". -1 .", ". 0 .",". $result['id'] .")");
	mysqli_query($db,"INSERT INTO territory (name, unitcount, leader, user_id, quest_id, stronghold, game_id) 
					   VALUES('The Shire',        ". 0 .", ". 0 .", ". -1 .", ". 0 .",". $result['id'] .")");
					   
	$sql = "SELECT id FROM territory WHERE name = 'The Shire'";
	$query = mysqli_query($db, $sql);
	$territory = mysqli_fetch_array($query);
	
	mysqli_query($db,"INSERT INTO quest (type, inplay, territory_id, game_id, goodreward, evilreward) 
					  VALUES(". 1 .", ". 0 .", ". $territory['id'] .", ". $result['id'] .", ". 2 .",". 2 .")");
	
	
	//rhun
	mysqli_query($db,"INSERT INTO territory (name, unitcount, leader, user_id, quest_id, stronghold, game_id) 
					   VALUES('North Rhun',        ". 0 .", ". 0 .", ". -1 .", ". 0 .",". $result['id'] .")");
	mysqli_query($db,"INSERT INTO territory (name, unitcount, leader, user_id, quest_id, stronghold, game_id) 
					   VALUES('Withered Heath',    ". 0 .", ". 0 .", ". -1 .", ". 0 .",". $result['id'] .")");
	mysqli_query($db,"INSERT INTO territory (name, unitcount, leader, user_id, quest_id, stronghold, game_id) 
					   VALUES('Esgaroth',          ". 0 .", ". 0 .", ". -1 .", ". 0 .",". $result['id'] .")");
					   
	$sql = "SELECT id FROM territory WHERE name = 'Esgaroth'";
	$query = mysqli_query($db, $sql);
	$territory = mysqli_fetch_array($query);
	
	mysqli_query($db,"INSERT INTO quest (type, inplay, territory_id, game_id, goodreward, evilreward) 
					  VALUES(". 1 .", ". 0 .", ". $territory['id'] .", ". $result['id'] .", ". 4 .",". 2 .")");
					   
	mysqli_query($db,"INSERT INTO territory (name, unitcount, leader, user_id, quest_id, stronghold, game_id) 
					   VALUES('South Rhun',        ". 0 .", ". 0 .", ". -1 .", ". 0 .",". $result['id'] .")");
	
	
	//gondor
	mysqli_query($db,"INSERT INTO territory (name, unitcount, leader, user_id, quest_id, stronghold, game_id) 
					   VALUES('Druwaith Iaur',     ". 0 .", ". 0 .", ". -1 .", ". 0 .",". $result['id'] .")");
	mysqli_query($db,"INSERT INTO territory (name, unitcount, leader, user_id, quest_id, stronghold, game_id) 
					   VALUES('Andrast',           ". 0 .", ". 0 .", ". -1 .", ". 0 .",". $result['id'] .")");
	mysqli_query($db,"INSERT INTO territory (name, unitcount, leader, user_id, quest_id, stronghold, game_id) 
					   VALUES('Anfalas',           ". 0 .", ". 0 .", ". -1 .", ". 0 .",". $result['id'] .")");
	mysqli_query($db,"INSERT INTO territory (name, unitcount, leader, user_id, quest_id, stronghold, game_id) 
					   VALUES('Vale of Erech',     ". 0 .", ". 0 .", ". -1 .", ". 0 .",". $result['id'] .")");
					   
	$sql = "SELECT id FROM territory WHERE name = 'Vale of Erech'";
	$query = mysqli_query($db, $sql);
	$territory = mysqli_fetch_array($query);
	
	mysqli_query($db,"INSERT INTO quest (type, inplay, territory_id, game_id, goodreward, evilreward) 
					  VALUES(". 1 .", ". 0 .", ". $territory['id'] .", ". $result['id'] .", ". 6 .",". 6 .")");
					   
	mysqli_query($db,"INSERT INTO territory (name, unitcount, leader, user_id, quest_id, stronghold, game_id) 
					   VALUES('Lamedon',           ". 0 .", ". 0 .", ". -1 .", ". 0 .",". $result['id'] .")");
	mysqli_query($db,"INSERT INTO territory (name, unitcount, leader, user_id, quest_id, stronghold, game_id) 
					   VALUES('Belfalas',          ". 0 .", ". 0 .", ". -1 .", ". 0 .",". $result['id'] .")");
					   
	$sql = "SELECT id FROM territory WHERE name = 'Belfalas'";
	$query = mysqli_query($db, $sql);
	$territory = mysqli_fetch_array($query);
	
	mysqli_query($db,"INSERT INTO quest (type, inplay, territory_id, game_id, goodreward, evilreward) 
					  VALUES(". 1 .", ". 0 .", ". $territory['id'] .", ". $result['id'] .", ". 2 .",". 2 .")");
					   
	mysqli_query($db,"INSERT INTO territory (name, unitcount, leader, user_id, quest_id, stronghold, game_id) 
					   VALUES('Lebennin',          ". 0 .", ". 0 .", ". -1 .", ". 0 .",". $result['id'] .")");
					   
	$sql = "SELECT id FROM territory WHERE name = 'Lebennin'";
	$query = mysqli_query($db, $sql);
	$territory = mysqli_fetch_array($query);
	
	mysqli_query($db,"INSERT INTO quest (type, inplay, territory_id, game_id, goodreward, evilreward) 
					  VALUES(". 1 .", ". 0 .", ". $territory['id'] .", ". $result['id'] .", ". 5 .",". 5 .")");
					   
	mysqli_query($db,"INSERT INTO territory (name, unitcount, leader, user_id, quest_id, stronghold, game_id) 
					   VALUES('Minas Tirith',      ". 0 .", ". 0 .", ". -1 .", ". 1 .",". $result['id'] .")");
	mysqli_query($db,"INSERT INTO territory (name, unitcount, leader, user_id, quest_id, stronghold, game_id) 
					   VALUES('Ithilien',          ". 0 .", ". 0 .", ". -1 .", ". 0 .",". $result['id'] .")");
					   
	$sql = "SELECT id FROM territory WHERE name = 'Ithilien'";
	$query = mysqli_query($db, $sql);
	$territory = mysqli_fetch_array($query);
	
	mysqli_query($db,"INSERT INTO quest (type, inplay, territory_id, game_id, goodreward, evilreward) 
					  VALUES(". 1 .", ". 0 .", ". $territory['id'] .", ". $result['id'] .", ". 2 .",". 4 .")");
					   
	mysqli_query($db,"INSERT INTO territory (name, unitcount, leader, user_id, quest_id, stronghold, game_id) 
					   VALUES('South Ithilien',    ". 0 .", ". 0 .", ". -1 .", ". 0 .",". $result['id'] .")");
					   
	
	//mordor
	mysqli_query($db,"INSERT INTO territory (name, unitcount, leader, user_id, quest_id, stronghold, game_id) 
					   VALUES('Udun Vale',         ". 0 .", ". 0 .", ". -1 .", ". 1 .",". $result['id'] .")");
	mysqli_query($db,"INSERT INTO territory (name, unitcount, leader, user_id, quest_id, stronghold, game_id) 
					   VALUES('Mount Doom',        ". 0 .", ". 0 .", ". -1 .", ". 0 .",". $result['id'] .")");
					   
	$sql = "SELECT id FROM territory WHERE name = 'Mount Doom'";
	$query = mysqli_query($db, $sql);
	$territory = mysqli_fetch_array($query);
	
	mysqli_query($db,"INSERT INTO quest (type, inplay, territory_id, game_id, goodreward, evilreward) 
					  VALUES(". 1 .", ". 0 .", ". $territory['id'] .", ". $result['id'] .", ". 2 .",". 5 .")");
					   
	mysqli_query($db,"INSERT INTO territory (name, unitcount, leader, user_id, quest_id, stronghold, game_id) 
					   VALUES('Barad-Dur',         ". 0 .", ". 0 .", ". -1 .", ". 1 .",". $result['id'] .")");
	mysqli_query($db,"INSERT INTO territory (name, unitcount, leader, user_id, quest_id, stronghold, game_id) 
					   VALUES('Gorgoroth',         ". 0 .", ". 0 .", ". -1 .", ". 0 .",". $result['id'] .")");
	mysqli_query($db,"INSERT INTO territory (name, unitcount, leader, user_id, quest_id, stronghold, game_id) 
					   VALUES('Nurn',              ". 0 .", ". 0 .", ". -1 .", ". 0 .",". $result['id'] .")");
	mysqli_query($db,"INSERT INTO territory (name, unitcount, leader, user_id, quest_id, stronghold, game_id) 
					   VALUES('Minas Morgul',      ". 0 .", ". 0 .", ". -1 .", ". 1 .",". $result['id'] .")");
	
	
	//haradwaith
	mysqli_query($db,"INSERT INTO territory (name, unitcount, leader, user_id, quest_id, stronghold, game_id) 
					   VALUES('Harondor',          ". 0 .", ". 0 .", ". -1 .", ". 0 .",". $result['id'] .")");
	mysqli_query($db,"INSERT INTO territory (name, unitcount, leader, user_id, quest_id, stronghold, game_id) 
					   VALUES('Umbar',             ". 0 .", ". 0 .", ". -1 .", ". 1 .",". $result['id'] .")");
	mysqli_query($db,"INSERT INTO territory (name, unitcount, leader, user_id, quest_id, stronghold, game_id) 
					   VALUES('Deep Harad',        ". 0 .", ". 0 .", ". -1 .", ". 0 .",". $result['id'] .")");
	mysqli_query($db,"INSERT INTO territory (name, unitcount, leader, user_id, quest_id, stronghold, game_id) 
					   VALUES('Harad',             ". 0 .", ". 0 .", ". -1 .", ". 0 .",". $result['id'] .")");
	mysqli_query($db,"INSERT INTO territory (name, unitcount, leader, user_id, quest_id, stronghold, game_id) 
					   VALUES('Near Harad',        ". 0 .", ". 0 .", ". -1 .", ". 0 .",". $result['id'] .")");
	mysqli_query($db,"INSERT INTO territory (name, unitcount, leader, user_id, quest_id, stronghold, game_id) 
					   VALUES('Khand',             ". 0 .", ". 0 .", ". -1 .", ". 0 .",". $result['id'] .")");
					   
	$sql = "SELECT id FROM territory WHERE name = 'Khand'";
	$query = mysqli_query($db, $sql);
	$territory = mysqli_fetch_array($query);
	
	mysqli_query($db,"INSERT INTO quest (type, inplay, territory_id, game_id, goodreward, evilreward) 
					  VALUES(". 1 .", ". 0 .", ". $territory['id'] .", ". $result['id'] .", ". 2 .",". 4 .")");
	
	
	$_SESSION['message'] = 'The game has been successfully created. Please invite people to play!';
	$_SESSION['message_type'] = 'success';
	
	header('Location: ../menu.php');
	exit;
	
?>