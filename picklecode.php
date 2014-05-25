<?php

//play immediately
mysqli_query($db,"INSERT INTO quest (type, image, inplay, territory_id, game_id, goodreward, evilreward) 
			      VALUES(". 2 .",	 'the-entmoot', ". 0 .",	 ". -1 .",	 ". $result['id'] .",	 ". -1 .",	". -1 .")");
mysqli_query($db,"INSERT INTO quest (type, image, inplay, territory_id, game_id, goodreward, evilreward) 
			      VALUES(". 2 .",	 'Appoint a Second Leader', ". 0 .",	 ". -1 .",	 ". $result['id'] .",	 ". -1 .",	". -1 .")");

?> 