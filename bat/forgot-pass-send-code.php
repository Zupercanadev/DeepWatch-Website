<?php


	
	include_once("db-connect.php");
	include_once("general-utilities.php");
	include_once("user-utilities.php");
	session_start();
	$email = $_POST['email'];
	
	// Check for valid email
	if(Email_Check($email))
	{
		// Check if email exists
		$stmt = $pdo->prepare("SELECT ID,Email,Salt FROM homeUsers.users WHERE email=:email");
		$stmt->bindParam(":email" , $email);
		$stmt->execute();
	
		$result = $stmt->fetch();
	
		if(isset($result['ID']))
		{
	
			echo "FOUND";
			// Store user pass user id to server.
			$_SESSION['reset-user'] = $result['ID'];
			$_SESSION['reset-email'] = $email;
			$_SESSION['reset-salt'] = $result['Salt'];
			// See if reset code exists.
			$stmt = $pdo->prepare("SELECT ID,resetCode FROM SSAI.resetPass WHERE ID=:input_Id");
			$stmt->bindParam(":input_Id" , $result['ID']);
			$stmt->execute();
			$found_Code = $stmt->fetch();
			$code = "";
			
			// Resend code if one already found.
			if(isset($found_Code['ID']))
			{
				echo "RESENDING!";
				$code = $found_Code['resetCode'];
				
			}
			else
			{
				
				// Generate 4 digit code.
				$code = genSimpleCode(4);
			
				// Get current time
				$current_Time = new DateTime(null, new DateTimeZone('Australia/Brisbane'));
				$input_Time = $current_Time->format('Y-m-d H:i:s');
				// Upload code to database.
				$stmt = $pdo->prepare("INSERT INTO SSAI.resetPass (id,resetCode,time_added) VALUES(:id,:code,:current_Time)");
				$stmt->bindParam(":id" , $result['ID']);
				$stmt->bindParam(":code", $code);
				$stmt->bindParam(":current_Time" , $input_Time);
				$stmt->execute();
				
				if($stmt->rowCount() == 0)
				{
					echo "SQL ERROR";
					header("Location: ../forgot-password.php?error=UNCAUGHT");
				}
					
			}
			// Send email.
			$message = '
						<html>
						<head>
						  <title>DeepWatch Password Request</title>
						</head>
						<body>
							<p> Dear Customer, <br/><br/>
							There has been a reset password request for your DeepWatch account.
							<br/>
							Please enter this code:
							<br/>
							<br/>
							<b><h3>'.$code.'</h3></b>
							<br/>
							<br/>
							Thankyou for using DeepWatch.
							<br/>
							<br/>
							<hr/>
							PLEASE NOTE: If you did not initiate this request. Simply ignore this email.
							<br/>
							This code will expire in 15 minutes.
							
						</body>
						</html>
						';
			$subject = "Forgot Password Request";
			$headers[] = 'MIME-Version: 1.0';
			$headers[] = 'Content-type: text/html; charset=iso-8859-1';
			$headers[] = 'From: SSAI Assistant <no-reply@ssai.tech>';

			mail($email, $subject, $message, implode("\r\n", $headers));
					
			header("Location: ../forgot-password-enter.php");
		}
		else
		{
			echo "NOT FOUND";
			header("Location: ../forgot-password.php?error=NOUSER");
		}
	}
	else
	{
		header("Location: ../forgot-password.php?error=BADEMAIL");	
	}
	
	
	
	


	// Close connection.
	$pdo = null;
	$stmt = null;
	
?>