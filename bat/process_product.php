<?php
	
	error_reporting(E_ALL);
	ini_set('display_errors', 1);

	include_once("libs/cart_lib.php");
	include_once("libs/product_lib.php");
	
	session_start();
	
	$plan_Price = $_POST["plan_price"];
	$plan_Type = $_POST["plan_type"];
	$plan_Name = $_POST["plan_selection"];
	$plan_Description = $_POST["plan_description"];
	$plan_Id = $_POST["plan_id"];
	
	echo $plan_Id;
	
	$selected_Plan = new Product($plan_Id,$plan_Name,$plan_Price,$plan_Description,$plan_Type);
	
	if(isset($_SESSION["Shopping_Cart"]))
	{
		
		$session_Cart = $_SESSION["Shopping_Cart"];
		$cart_Items = $session_Cart->Get_Items();
	
		// If item exists in cart, Add 1 to current quantity.
		if(!isset($cart_Items[$selected_Plan->Get_Id()]))
		{
			echo "Add";
			$session_Cart->Add_Item($selected_Plan);
		}
		else
		{
			$current_Count = $session_Cart->Get_Product_Qty($selected_Plan);
			$session_Cart->Change_Qty(($current_Count + 1),$selected_Plan->Get_Id());
		}
		
		
	}
	else
	{
		$new_Cart = new Shopping_Cart();
		$new_Cart->Add_Item($selected_Plan);
		$_SESSION["Shopping_Cart"] = $new_Cart;
	}
	

	header("Location: ../cart.php");
	

?>