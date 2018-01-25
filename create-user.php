<?php

	error_reporting(E_ALL);
	ini_set('display_errors', 1);

	include_once("db-connect.php");
	include_once("user-utilities.php");
	include_once("general-utilities.php");
	
	session_start();

	/*
	*
	* Creates user account
	*
	*/

	$email = $_POST['email'];
	$password = $_POST['password'];
	$confirmed_Pass = $_POST['password-confirm'];
	echo $password;
	echo $confirmed_Pass;
	echo "TEST";
	
	// Check passwords match.
	if($password != $confirmed_Pass)
	{
		echo "ERROR,  Passwords don't match";
		header("Location: ../register.php?error=NOMATCH");
	
	}
	else
	{
		// Check password strength.
		$password_Test = Password_Strength_Test($password , 5,20);
		if($password_Test != "SUCCESS")
		{
			header("Location: ../register.php?error=".$password_Test);
		}
		else
		{
			// Generate hashed password.
			if(($error_Found = Create_User($email,$password,$pdo)) == "PASSED")
			{
				// Pass user to session_cache_expire
				$user_Details = Authenticate_User($email,$password,$pdo);
				$_SESSION['userDetails'] = $user_Details;
						
				if(isset($_SESSION['plan']))
				{
					// Go to Plan location page.
					header("Location: ../paypal.php");
				}
				else
				{
					header("Location: ../get-deepwatch.php");
				}
			}
			else
			{
				header("Location: ../register.php?" . $error_Found);
			}
		}
	}
	


?>