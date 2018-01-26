<?php

	class Shopping_Cart
	{
	
		// Get total
		
		// Add product
		function Add_Item($product)
		{
		
			// Add item to array
			array_push($items,$product->get_Id() => $product);
			array_push($qty_List,$product->get_Id() => 1);
		
		}
		
		
		// Remove Product
		
		// Add qty
		
		// Remove qty
		
		
		// Private variables
		private $items = array();
		private $qty_List = array();
	
	};
	
?>

