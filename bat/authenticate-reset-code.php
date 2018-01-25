<?php

	error_reporting(E_ALL);
	ini_set('display_errors', 1);

	session_start();
	include_once("db-connect.php");
	
	$code = $_POST['code'];
	$id = $_SESSION['reset-user'];

	// Find Code
	$stmt = $pdo->prepare("SELECT * FROM SSAI.resetPass WHERE resetCode=:input_code AND id=:input_Id");
	$stmt->bindParam(":input_code" , $code);
	$stmt->bindParam(":input_Id" , $id);
	$stmt->execute();
	$result = $stmt->fetch();

	if(isset($result['resetCode']))
	{	
		if($code == $result['resetCode'])
		{
			echo "CODE FOUND";
			header("Location: ../forgot-password-reset.php");
		}
		else
		{
			echo "CODE NOT FOUND";
			header("Location: ../forgot-password-enter.php?error=CODENOTFOUND");
		}
	}
	else
	{
		echo "CODE NOT FOUND!";
	}


?>