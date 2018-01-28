<?php

	//------------------------------------------------------------------
	//
	// Description: Shopping cart object. Holds customer selected items.
	//
	//-------------------------------------------------------------------


	class Shopping_Cart
	{
	
		//------------------------------------------------
		// 
		// Description: Gets total value of shopping cart
		// Return: Value of shopping cart.
		//
		//--------------------------------------------------
		function Get_Total()
		{
			
			$total_Cost = 0; 
			
			foreach($this->items as $product_Id => $product_Item)
			{
				
				$total_Cost = $total_Cost + ($product_Item->Get_Price() * $this->qty_List[$product_Id]);
				
			}
			
			return $total_Cost;
		}
		
		//------------------------------------------------
		// 
		// Description: Gets total value of shopping cart
		// Input1: Product object representing item customer wants to add.
		//
		//--------------------------------------------------
		function Add_Item($product)
		{
		
			// Add item to array
			$this->items[$product->Get_Id()] = $product;
			$this->qty_List[$product->Get_Id()] = 1;
	
		}
		
		
		//------------------------------------------------
		// 
		// Description: Gets total value of shopping cart
		// Input1: Product to remove from shopping cart.
		//
		//--------------------------------------------------
		function Remove_Item($product)
		{
			
			unset($this->items[$product->Get_Id()]);
			unset($this->qty_List[$product->Get_Id()]);
			
		}
		
		
		//------------------------------------------------
		// 
		// Description: Gets total value of shopping cart
		// Input1: New quantity value.
		// Input2: Product to increase quantity of.
		//
		//--------------------------------------------------
		function Change_Qty($New_Qty, $product)
		{
			
			$this->qty_List[$product->Get_Id()] = $New_Qty;
			
			
		}
		//------------------------------------------------
		// 
		// Description: Gets all items in shopping cart.
		// Return: Array of items.
		//
		//--------------------------------------------------
		function Get_Items()
		{
			
			return $this->items;
			
			
		}
		//------------------------------------------------
		// 
		// Description: Gets quantity list.
		// Return: Array of quantities.
		//
		//--------------------------------------------------
		function Get_Qty_List()
		{
			
			return $this->qty_List;
			
			
		}
	

		// Private variables
		private $items = array();
		private $qty_List = array();
	
	};
	
?>

