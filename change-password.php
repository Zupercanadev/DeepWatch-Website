<?php

	/*
	*
	* Description: Wrapper used to change user password
	*
	*/
	
	require_once("db-connect.php");
	require_once("user-utilities.php");
	require_once("general-utilities.php");

	// Get values
	$email = $_POST['email'];
	$old_Pass = $_POST['old_pass'];
	$new_Pass = $_POST['new_pass'];
	$confirm_Pass = $_POST['confirm_pass'];
	
	// Need to do confirm email check.
	if(Compare_Values($confirm_Pass,$new_Pass))
	{
		echo $email;
		echo $old_Pass;
		echo $new_Pass;
		
	}
	else
	{
		// Return to account page with error.
		echo "PASSWORD MIS-MATCH";	
	}

	Change_Password($email,$old_Pass,$new_Pass,$pdo);

?>