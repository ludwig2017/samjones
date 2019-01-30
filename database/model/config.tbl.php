<?php

	include_once "../../config/database.php";

	$sql = "USE ".$dbname;
	$dbcnn->exec($sql);
	$sql = "CREATE TABLE IF NOT EXISTS ARTISTS (ID int(11) AUTO_INCREMENT PRIMARY KEY,artistname varchar(30) NOT NULL)";
	$dbcnn->exec($sql);
	echo "DB created successfully";