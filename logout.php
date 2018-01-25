<?php

	//Start a new session and destroy the old one
	//Redirect to login page
    session_start();    
    session_destroy();
    header('Location: index.php');
?>