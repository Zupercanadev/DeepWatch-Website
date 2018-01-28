<?php

	include_once("libs/cart_lib.php");
	include_once("libs/product_lib.php");
	
	session_start();
	
	$plan_Price = $_POST["plan_price"];
	$plan_Type = $_POST["plan_type"];
	$plan_Name = $_POST["plan_selection"];
	$plan_Description = $_POST["plan_description"];
	$plan_Id = $_POST["plan_id"];
	
	
	$selected_Plan = new Product($plan_Id,$plan_Name,$plan_Price,$plan_Description,$plan_Type);
	
	if(isset($_SESSION["Shopping_Cart"]))
	{
		$session_Cart = $_SESSION["Shopping_Cart"];
		$session_Cart->Add_Item($selected_Plan);
		$_SESSION["Shopping_Cart"] = $session_Cart;
		
		// TODO increase quantity if item exists.
	}
	else
	{
		$new_Cart = new Shopping_Cart();
		$new_Cart->Add_Item($selected_Plan);
		$_SESSION["Shopping_Cart"] = $new_Cart;
	}
	

	header("Location: ../cart.php");
	

?>