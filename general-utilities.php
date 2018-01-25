<?php

	/*
	*
	* General Utilities.
	*
	*/

	/*
	*
	* Description: Compares two values.
	*
	* Input1: Value one
	* Input2: Value two
	* Return: Bool if they match or don't match
	*
	*/
	function Compare_Values($input1 , $input2)
	{
		if($input1 == $input2)
		{
			return true;	
		}
		else
		{
			return false;	
		}	
	}
	/*
	*
	* Description: Test string input for valid email.
	*
	* Input1: Email
	* Return: Bool if input is email or not
	*
	*/
	function Email_Check($email)
	{
		if(strpos($email , "@"))
		{
			return true;
		}
		else
		{
			return false;
		}
	}

	
	/*
	*
	* Generates simple code
	* @input1 desired code length
	* return generated code
	*
	*/
	function genSimpleCode($length)
	{
		$code = '';
		
		for($i=0; $i< $length; $i++)
		{
			$switch = rand(1,3);
			if($switch % $length == 1)
			{
				// Gen A-Z,a-z only
				$genCharInt = rand(60,108);
					
				// Remove Spacw
				while($genCharInt == 92)
				{
					$genCharInt =  rand(60,108);
				}
				
				// Covert to char
				$genChar = chr($genCharInt);
				
				$code .= $genChar;
			}
			else
			{
				$genInt = rand(0,9);
				$code .= $genInt;
			
			
			}
		
		}

		return $code;

	}



?>