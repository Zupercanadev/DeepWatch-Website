<?php

	error_reporting(E_ALL);
	ini_set('display_errors', 1);

	require_once("db-connect.php");
	require_once("user-utilities.php");

	session_start();
	
	// Check user details.
	$username = $_POST['name'];
	$password = $_POST['password'];
	
	$user_Details = Authenticate_User($username,$password,$pdo);
	
	if($user_Details != null)
	{
	
		// Put user details in session object.
		$_SESSION['userDetails'] = $user_Details;
		header("Location: ../user-account.php?".$user_Details['userId']);
	
	}
	else
	{
		header("Location: ../login.php?error=NOUSER");
	}
	

	
	// Will need todo hashing with salt.
	
	/*
	$stmt = $pdo->prepare("SELECT ID,Email,Password,Salt,Active FROM homeUsers.users WHERE Email=:inpt_email AND Password=:inpt_pass");
	
	$stmt->bindParam(":inpt_email" , $username);
	$stmt->bindParam(":inpt_pass" , $password);
	
	$stmt->execute();
	
	$row = $stmt->fetch();
	
	if(isset($row['ID']))
	{
		echo "USER FOUND";
		
		$_SESSION['user'] = $row['Email'];
		$_SESSION['active'] = $row['Active'];
		
		header("Location: ../user-account.php?user=".$row['ID']);
	
	}
	else
	{
		echo "NO USER";
		
		//$_SESSION['login-error'] = "NOUSER";
		
		header("Location: ../login.php?error=NOUSER");
		
		
	}

	//echo "OKAY";
	*/

?>