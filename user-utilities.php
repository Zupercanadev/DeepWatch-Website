<?php

	/*
	*
	* Account Utilities.
	*
	*/

	error_reporting(E_ALL);
	ini_set('display_errors', 1);
	
	/*
	*
	* Description: Authenticate user and get user details.
	*
	* Input1: Email
	* Input2: Password
	* Return: Array of user details.
	*
	*/
	function Authenticate_User($email,$password,$pdo)
	{
		
		$userDetails = null;
		
		// Get salt then hash password
		$salt = Get_Salt($email,$pdo);
				
		if(isset($salt))
		{
			$encrypted_Pass = encrypt($password,$salt);
			
			$stmt = $pdo->prepare("SELECT ID,RenewalDate,Active,DevicesLeft,Registration FROM homeUsers.users WHERE email=:email AND password=:password");
			$stmt->bindParam(":email", $email);
			$stmt->bindParam(":password" , $encrypted_Pass);
			$stmt->execute();
			$result = $stmt->fetch();
			
			echo $result['ID'];
			
			if(isset($result['ID']))
			{
				$userDetails = array();
				$userDetails['active'] = $result['Active']; 
				$userDetails['userId'] = $result['ID']; 
				$userDetails['DevicesLeft'] = $result['DevicesLeft'];
				$userDetails['RenewalDate'] = $result['RenewalDate'];
				$userDetails['Registration'] = $result['Registration'];
				$userDetails['Email'] = $email;	
			}
		}
		
		return $userDetails;
		
	}
	
	
	
		/*
	*
	* Description: Gets the salt of a user
	*
	* Input1: Email
	* Return: Salt if found.
	*
	*/
	function Get_Salt($email,$pdo)
	{
		$stmt = $pdo->prepare("SELECT Salt from homeUsers.users WHERE email=:email");
		$stmt->bindParam(":email", $email);
		$stmt->execute();
		$salt = $stmt->fetch()['Salt'];
		
		return $salt;
	}
	
	/*
	*
	* Description: Authenticates old password. Changes to new password.
	*
	* Input1: Username
	* Input2: Current Password
	* Input3: New Password
	* Return: Passed or failed flag.
	*
	*/
	function Change_Password($email,$old_Pass,$new_Pass,$pdo)
	{
	
		// Get salt
		$salt = Get_Salt($email,$pdo);
		
		if(isset($salt))
		{
			// Encrypt old password.
			$encrypt_Old = encrypt($old_Pass,$salt);
			
			// Confirm Password.
			$stmt = $pdo->prepare("SELECT ID FROM homeUsers.users WHERE email=:email AND Password=:password");
			$stmt->bindParam(":email" , $email);
			$stmt->bindParam(":password", $encrypt_Old);
			$stmt->execute();
			
			$acc = $stmt->fetch();
			
			if(isset($acc['ID']))
			{
				
				// Create new pass.
				$encypt_New_Pass = encrypt($new_Pass,$salt);
								
				// Reset passwaord.
				$stmt = $pdo->prepare("UPDATE homeUsers.users SET Password=:new_pass WHERE ID=:input_id");
				$stmt->bindParam(":new_pass" , $encypt_New_Pass);
				$stmt->bindParam(":input_id" , $acc['ID']);
				$stmt->execute();
				
				if($stmt->rowCount() == 0)
				{
					return "PASSWORDERROR";
				}
				else
				{
					return "SUCCESS";
				}
			}
			else
			{
				return "PASSWORDFAIL";				
			}
		}
		else
		{
			return "PASSWORDFAIL";
		}
	}
	

	/*
	*
	* Description: Generates hashed password with added salt.
	*
	* Input1: Password
	* Input2: Salt
	* Return: Hashed password
	*
	*/
	function encrypt($rawPassword,$salt)
	{

		$saltyInput = $rawPassword . $salt;
		$encrypted = base64_encode(hash("sha256",$saltyInput ,true));
		
		return $encrypted;

	};
	
	/*
	*
	* Description: Generates salt.
	*
	* Input1: Length of salt
	* Return: Character string representing the salt
	*
	*/
	function genSalt($length)
	{
		$salt = '';
		
		for($i=0;$i<$length;$i++)
		{
			$genSwitch = rand(1,3);
			if($genSwitch % $length == 1)
			{
				$genCharInt = rand(60,122);
				while($genCharInt == 92)
				{
					$genCharInt = rand(60,122);
				}
				$genChar = chr($genCharInt);
				$salt .= $genChar;
			}
			else
			{
				$genCharInt = rand(0,9);
				$salt .= $genCharInt;
			}
			
		}
	
	return $salt;
	
	};
	
	
	/*
	*
	* Description: Creates new user account. Updates database.
	*
	* Input1: Email
	* Input2: Password
	*
	*/
	function Create_User($email,$password,$pdo)
	{
		
		// Check if email exists
		$stmt = $pdo->prepare("SELECT ID FROM homeUsers.users WHERE Email=:input_email");
		$stmt->bindParam("input_email" , $email);
		$stmt->execute();
		
		$found_email = $stmt->fetch();
		if(isset($found_email['ID']))
		{
			echo "FOUND";
			print_r($found_email);
			
			header("Location: ../register.php?error=EMAILFOUND");
			
			return "error=EMAILFOUND";
		}
		else
		{
			// Generate Salr
			$salt = genSalt(15);
			
			// Create User details.
			$encrpyted_Pass = encrypt($password, $salt);
			$userId = Gen_UserID("DWHME",$pdo);
			
			// Add User to database
			$stmt = $pdo->prepare("INSERT INTO homeUsers.users (ID,Email,Password,Salt) VALUES (:input_id,:input_email,:input_pass,:salt)");
			$stmt->bindParam(":input_id" , $userId);
			$stmt->bindParam(":input_email" , $email);
			$stmt->bindParam(":input_pass" , $encrpyted_Pass);
			$stmt->bindParam(":salt" , $salt);
			
			$stmt->execute();
			
			// Close connection
			$pdo->connection = null;
			
			
		}
		
		return "PASSED";
	
	};
	
	/*
	*
	* Description: Generates userId
	*
	* Input1: Client Type. Home= DWHME
	* Return: Generated userid.
	*
	*/
	function Gen_UserID($clientType,$pdo)
	{
	
		$randomNumber = rand(1 , 10000);
		
		$userId = $clientType . (string)$randomNumber;
		
		// Check if id exists.
		$stmt = $pdo->prepare("SELECT ID FROM homeUsers.users WHERE ID=:input_id");
		$stmt->bindParam(":input_id" , $userId);
		
		$stmt->execute();
		
		$row = $stmt->fetch(PDO::FETCH_ASSOC);

		// Keep generating id until a new one is created.
		if(isset($row['ID']))
		{

			$userId = Gen_UserID($clientType,$pdo);
			
		}
	
		return $userId;
			
	};
	
	/*
	*
	* Description: Checks a password for one number and one letter, with length greater then input.
	*
	* Input1: Password
	* Input2: Minimum password length.
	* Input3: Maximum password length.
	* Return: Bool representing good password.
	*
	*/
	function Password_Strength_Test($password, $min,$max)
	{
		// Test length
		if(strlen($password) > $max || strlen($password) < $min)
		{
			return "PASSWORDLENGTH";
		}
		
		// Test for single letter and number.
		$has_Number = false;
		$has_Letter = false;
		
		for($i = 0; $i < strlen($password); $i++)
		{

			//echo $password[$i];
			if(is_numeric($password[$i]))
			{
				//echo "FOUND INT!";
				$has_Number = true;
			}
			else if(!is_numeric($password[$i]))
			{
				//echo "FOUND LETTER";
				$has_Letter = true;
			}
		}
		
		if($has_Letter && $has_Number)
		{
			echo "PASSED";
			return "SUCCESS";
		}
		else
		{
			echo "WEAK PASSWORD";
			return "WEAKPASSWORD";
		}
	}
	/*
	*
	* Description: Change Email
	*
	* Input1: User id
	* Input2: New email
	* Return: Bool represeting a successful change
	*
	*/
	function Change_Email($user_Id , $new_Email , $pdo)
	{
		// Change email address.
		$stmt = $pdo->prepare("UPDATE homeUsers.users SET email=:email WHERE ID=:input_Id");
		$stmt->bindParam(":email" , $new_Email);
		$stmt->bindParam(":input_Id" , $user_Id);
		$stmt->execute();
		if($stmt->rowCount() == 0)
		{
			return false;
		}
		else
		{
			return true;
		}
	}
	
?>

