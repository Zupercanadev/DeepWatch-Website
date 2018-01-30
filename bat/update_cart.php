<?php

	include_once("libs/cart_lib.php");
	include_once("libs/product_lib.php");
	
	session_start();
	
	$refresh = false;
	$session_Cart = $_SESSION["Shopping_Cart"];
	$response = array();
	if(isset($session_Cart))
	{
		foreach($_POST as $key => $value)
		{
			// Update Quantities
			if(ctype_digit((string)$value))
			{
				
				if($value <= 0)
				{
					$session_Cart->Remove_Item($key);
					$refresh = true;
				}
				else
				{
					$session_Cart->Change_Qty($value,$key);
					array_push($test_Array, $key);
					array_push($test_Array, $value);
				}
				
			}
		}
		
		$_SESSION["Shopping_Cart"] = $session_Cart;
	}
	
	array_push($response, $session_Cart->Get_Total());
	array_push($response, $refresh);
	
	echo json_encode($response);
	
?>