<?php

	class Shopping_Cart
	{
	
		// Get total
		function Get_Total()
		{
			
			
			
			
		}
		
		// Add product
		function Add_Item($product)
		{
		
			// Add item to array
			array_push($items,$product->get_Id() => $product);
			array_push($qty_List,$product->get_Id() => 1);
		
		}
		
		
		// Remove Product
		function Remove_Item($product)
		{
			
			unset($items[$product->get_Id()]);
			unset($qty_List[$product->get_Id()]);
			
		}
		
		
		// Change qty
		function Change_Qty($New_Qty, $product)
		{
			
			$qty_List[$product->get_Id()] = $New_Qty;
			
			
		}
	
		
		
		// Private variables
		private $items = array();
		private $qty_List = array();
	
	};
	
?>

