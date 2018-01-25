<?php
session_start();
include('db-connect.php'); 
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
	echo $rawInput . "\n";
	echo $salt  . "\n";
	$saltyInput = $rawInput . $salt;
	echo $saltyInput  . "\n";
	$encrypted = hash("sha256",$saltyInput,false);
	
	return $encrypted;


}

/*
*
* Authenticates the inputs with the database.
* @input1 username/id of the account
* @input2 password of the account
* return boolean if account is true or false
*
*/

function authenticate($username,$password,$dbConnect)
{
		$auth = False;
		
		// Get salt from server
		$saltQuery = "SELECT salt FROM homeUsers.users WHERE id='$username'";
		$saltGet = mysqli_query($dbConnect,$saltQuery);
		$saltResult = mysqli_fetch_array($saltGet);
		$salt = $saltResult['salt'];
		
		//echo $salt;
		
		echo system('python pyAuthenticate.py', $output);
		
		//echo $output;
		//$encryptPass = encrypt($password,$salt);
		
		//echo $encryptPass;
		
		return $encryptPass;
}





?>