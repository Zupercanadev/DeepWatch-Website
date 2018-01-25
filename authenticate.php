<?php
session_start();
include('dbconnect.php'); 
error_reporting(E_ALL);
ini_set('display_errors', 'on');


/*
*
* Encrypts the rawInput with the salt
* @input1 rawInput
* @input2 salt to be added to the input
* @return encrypted hash
*
*/

function encrypt($rawInput,$salt)
{

	$saltyInput = $rawInput . $salt;
	$encrypted = base64_encode(hash("sha256",$saltyInput ,true));
	
	return $encrypted;

}

/*
*
* Authenticates the inputes with the database.
* @input1 username/id of the account
* @input2 password of the account
* return boolean if account is true or false
*
*/

function authenticate($username,$password,$dbConnect)
{
		$auth = False;
		
		// Get salt from server
		$saltQuery = "SELECT salt FROM entUsrs.users WHERE id='$username'";
		$saltGet = mysqli_query($dbConnect,$saltQuery);
		$saltResult = mysqli_fetch_array($saltGet);
		$salt = $saltResult['salt'];
		
		$encryptPass = encrypt($password,$salt);
		
		$res = mysqli_query($dbConnect, "SELECT * FROM users WHERE id='$username' AND Password ='$encryptPass' AND active != 'NO'");
		$row = mysqli_fetch_array($res);
		
		//echo $row[0];
		if(mysqli_num_rows($res) != 0)
		{
			$auth = True;
					
		}
		else
		{
			$auth = False;
		}
		
		return $row[0];
}


/*
*
* Generates random salt
* @input1 desired salt length
* return generated salt
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
	
}


?>