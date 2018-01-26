<?php

	class Shopping_Cart
	{
	
		// Get total
		function Get_Total()
		{
			
			$total_Cost = 0; 
			
			foreach($this->items as $product_Id => $product_Item)
			{
				
				$total_Cost = $total_Cost + ($product_Item->Get_Price() * $this->qty_List[$product_Id]);
				
			}
			
			return $total_Cost;
		}
		
		// Add product
		function Add_Item($product)
		{
		
			// Add item to array
			array_push($this->items,$product->Get_Id() => $product);
			array_push($this->qty_List,$product->Get_Id() => 1);
		
		}
		
		
		// Remove Product
		function Remove_Item($product)
		{
			
			unset($this->items[$product->Get_Id()]);
			unset($this->qty_List[$product->Get_Id()]);
			
		}
		
		
		// Change qty
		function Change_Qty($New_Qty, $product)
		{
			
			$this->qty_List[$product->Get_Id()] = $New_Qty;
			
			
		}
	

		// Private variables
		private $items = array();
		private $qty_List = array();
	
	};
	
?>

