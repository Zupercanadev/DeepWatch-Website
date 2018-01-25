<?php

	session_start();
	include_once("db-connect.php");
	include_once("general-utilities.php");
	include_once("user-utilities.php");
	
	
	$password = $_POST['password'];
	$confirm_Pass = $_POST['confirm-password'];
			
	// Compare values.
	if(Compare_Values($password , $confirm_Pass))
	{
	
		$pass_Test = Password_Strength_Test($password , 5 , 20);
		
		if($pass_Test == "SUCCESS")
		{

			// Create new password.
			$new_Pass = encrypt($password, $_SESSION['reset-salt']);
	
			// Change password.
			$stmt = $pdo->prepare("UPDATE homeUsers.users SET password=:input_pass WHERE ID=:input_id");
			$stmt->bindParam(":input_pass" , $new_Pass);
			$stmt->bindParam(":input_id" , $_SESSION['reset-user']);
			$stmt->execute();
			
			if($stmt->rowCount() == 0)
			{
				echo "FAILED";
				header("Location: ../forgot-password-reset.php?error=ERROR");
			}
			else
			{
				echo "PASSED";
				
				header("Location: ../login.php?success=PCHANGED");
			}
			
			
		}
		else
		{
			header("Location: ../forgot-password-reset.php?error=".$pass_Test);
		}
			
		
	
	}
	else
	{
		header("Location: ../forgot-password-reset.php?error=PASSMISMATCH");
	}



?>