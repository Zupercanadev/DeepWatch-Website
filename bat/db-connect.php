<?php

	// Connection to database.
	// Will need to implement SSL encryption.
	$host = "ssaidb.cvk2thijvncr.ap-southeast-2.rds.amazonaws.com";
	$db = "entUsrs";
	$user = "usCre";
	$pass = "bAyuf-Xasw2BA&";
	//$charset = "";
	$dsn = "mysql:host=$host;dbname=$db";
	
	$options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION ,
				PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
				PDO::ATTR_EMULATE_PREPARES => false,];
	
	$pdo = new PDO($dsn,$user,$pass,$options);
	




?>