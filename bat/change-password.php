<?php

	/*
	*
	* Description: Wrapper used to change user password
	*
	*/
	session_start();    
	require_once("db-connect.php");
	require_once("user-utilities.php");
	require_once("general-utilities.php");

	// Get values
	$email = $_POST['email'];
	$old_Pass = $_POST['old_pass'];
	$new_Pass = $_POST['new_pass'];
	$confirm_Pass = $_POST['confirm_pass'];
	
	
	if(Compare_Values($confirm_Pass,$new_Pass))
	{
		if($old_Pass != $new_Pass)
		{
			// Check Strength
			$strength = Password_Strength_Test($new_Pass, 5 , 20);
			
			if($strength == "SUCCESS")
			{
				$response = Change_Password($email,$old_Pass,$new_Pass,$pdo);
				if($response == "SUCCESS")
				{
				
					session_destroy();
					header("Location: ../login.php?success=PCHANGED");
		
				}
				else
				{
					header("Location: ../user-account.php?error=".$response);
				}	
			}
			else
			{
				header("Location: ../user-account.php?error=".$strength);
			}
		}
		else
		{
			header("Location: ../user-account.php?error=OLDPASSWORD");
		}
	}
	else
	{
		// Return to account page with error.
		header("Location: ../user-account.php?error=PASSMISMATCH");
	}


?>