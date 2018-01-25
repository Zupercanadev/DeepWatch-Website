<?php

	error_reporting(E_ALL);
	ini_set('display_errors', 1);


	include_once("db-connect.php");
	include_once("user-utilities.php");
	include_once("general-utilities.php");
	
	
	$user_id = $_POST['userId'];
	$email = $_POST['new_email'];
	$confirm_email = $_POST['confirm_email'];
	
	// Get email.
	// Compare values.
	if(Compare_Values($email,$confirm_email))
	{
		//Check for proper email.
		if(Email_Check($email))
		{
			// Check if email exists
			$stmt = $pdo->prepare("SELECT Email FROM homeUsers.users WHERE email=:input_email");
			$stmt->bindParam(":input_email" ,$email);
			$stmt->execute();
			$found_Email = $stmt->fetch()['Email'];
			
			if(isset($found_Email))
			{
				echo "EMAIL EXISTS";
				header("Location: ../user-account.php?error=EMAILEXISTS");
			}
			else
			{
				if(Change_Email($user_id,$email,$pdo))
				{
					echo "PASSED";
					session_start();
					session_destroy();
					header("Location: ../login.php?success=EMAILCHANGED");
				}
				else
				{
					echo "FAILED";
					header("Location: ../user-account.php?error=EMAILERROR");
				}
			}
		}
		else
		{
			echo "FAILED email check";
			header("Location: ../user-account.php?error=BADEMAIL");
		}
	}
	else
	{
		echo "FAILED compare check.";
		header("Location: ../user-account.php?error=EMAILMISMATCH");
		
	}
?>