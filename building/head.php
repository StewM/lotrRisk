<?php 
	session_start(); 
	
	if($_SERVER['SCRIPT_NAME'] == "/index.php" && $_SESSION['logged'] == 1) {
		header("Location: ../menu.php"); 
		exit();
	}
	if($_SERVER['SCRIPT_NAME'] != "/index.php" && $_SESSION['logged'] != 1) {
		header("Location: ../index.php"); 
		exit();
	}

	$territoryClasses = array(
		"borderlands",
		"forlindon",
		"mithlond",
		"luneValley",
		"evendimHills",
		"towerHills",
		"theShire",
		"harlindon",
		"forodwaith",
		"easternAngmar",
		"angmar",
		"northDowns",
		"fornost",
		"weatherHills",
		"rhudaur",
		"buckland",
		"oldForest",
		"southDowns",
		"northRhun",
		"witheredHeath",
		"esgaroth",
		"southRhun",
		"carrock",
		"northMirkwood",
		"easternMirkwood",
		"anduinValley",
		"southMirkwood",
		"minhiriath",
		"eregion",
		"dunland",
		"enedwaith",
		"fangorn",
		"westRohan",
		"gapOfRohan",
		"moria",
		"gladdenFields",
		"lorien",
		"emenMuil",
		"theWold",
		"deadMarshes",
		"brownLands",
		"khunHills",
		"druwaithIaur",
		"andrast",
		"anfalas",
		"valeOfErech",
		"lamedon",
		"belfalas",
		"lebennin",
		"minasTirith",
		"ithilien",
		"southIthilien",
		"udunVale",
		"mountDoom",
		"baradDur",
		"minasMorgul",
		"gorgoroth",
		"nurn",
		"harondur",
		"umbar",
		"deepHarad",
		"harad",
		"nearHarad",
		"khand",
	);
	
	$territoryNames = array(
		"borderlands" => "Borderlands",
		"forlindon" => "Forlindon",
		"mithlond" => "Mithlond",
		"luneValley" => "Lune Valley",
		"evendimHills" => "Evendim Hills",
		"towerHills" => "Tower Hills",
		"theShire" => "The Shire",
		"harlindon" => "Harlindon",
		"forodwaith" => "Forodwaith",
		"easternAngmar" => "Eastern Angmar",
		"angmar" => "Angmar",
		"northDowns" => "North Downs",
		"fornost" => "Fornost",
		"weatherHills" => "Weather Hills",
		"rhudaur" => "Rhudaur",
		"buckland" => "Buckland",
		"oldForest" => "Old Forest",
		"southDowns" => "South Downs",
		"northRhun" => "North Rhun",
		"witheredHeath" => "Withered Heath",
		"esgaroth" => "Esgaroth",
		"southRhun" => "South Rhun",
		"carrock" => "Carrock",
		"northMirkwood" => "North Mirkwoord",
		"easternMirkwood" => "Eastern Mirkwood",
		"anduinValley" => "Anduin Valley",
		"southMirkwood" => "South Mirkwood",
		"minhiriath" => "Minhiriath",
		"eregion" => "Eregion",
		"dunland" => "Dunland",
		"enedwaith" => "Enedwaith",
		"fangorn" => "Fangorn",
		"westRohan" => "West Rohan",
		"gapOfRohan" => "Gap Of Rohan",
		"moria" => "Moria",
		"gladdenFields" => "Gladden Fields",
		"lorien" => "Lorien",
		"emenMuil" => "Emen Muil",
		"theWold" => "The Wold",
		"deadMarshes" => "Dead Marshes",
		"brownLands" => "Brown Lands",
		"khunHills" => "Khun Hills",
		"druwaithIaur" => "Druwaith Iaur",
		"andrast" => "Andrast",
		"anfalas" => "Anfalas",
		"valeOfErech" => "Vale Of Erech",
		"lamedon" => "Lamedon",
		"belfalas" => "Belfalas",
		"lebennin" => "Lebennin",
		"minasTirith" => "Minas Tirith",
		"ithilien" => "Ithilien",
		"southIthilien" => "South Ithilien",
		"udunVale" => "Udun Vale",
		"mountDoom" => "Mount Doom",
		"baradDur" => "Barad-Dur",
		"minasMorgul" => "Minas Morgul",
		"gorgoroth" => "Gorgoroth",
		"nurn" => "Nurn",
		"harondur" => "Harondur",
		"umbar" => "Umbar",
		"deepHarad" => "Deep Harad",
		"harad" => "Harad",
		"nearHarad" => "Near Harad",
		"khand" => "Khand",
	);

?>

<!DOCTYPE html>
<html lang="en">
  
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../assets/ico/favicon.ico">

    <title>Starter Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="style.css" rel="stylesheet">
  

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>