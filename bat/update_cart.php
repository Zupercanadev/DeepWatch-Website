<?php

	error_reporting(E_ALL);
	ini_set('display_errors', 1);

	include_once("libs/cart_lib.php");
	include_once("libs/product_lib.php");
	$test_Key = array();
	foreach($_POST as $key => $value)
	{
		array_push($test_Key, $value);
	}
	
	echo json_encode($test_Key);
	
	return $test_Key;

?>