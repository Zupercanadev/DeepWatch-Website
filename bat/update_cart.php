<?php

	error_reporting(E_ALL);
	ini_set('display_errors', 1);

	include_once("libs/cart_lib.php");
	include_once("libs/product_lib.php");

	foreach($_POST as $key => $value)
	{
		echo $key;
		echo "in";
	}
	
	echo "OKAY";
	
	return "HELLO WORLD!";

?>