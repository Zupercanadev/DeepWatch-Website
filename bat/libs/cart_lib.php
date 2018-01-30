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
			
			return round($total_Cost,2);
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
		// Input1: Product id to remove from cart.
		//
		//--------------------------------------------------
		function Remove_Item($product)
		{
			
			unset($this->items[$product]);
			unset($this->qty_List[$product]);
			
		}
		
		
		//------------------------------------------------
		// 
		// Description: Gets total value of shopping cart
		// Input1: New quantity value.
		// Input2: Product id to increase quantity of.
		//
		//--------------------------------------------------
		function Change_Qty($New_Qty, $product)
		{
			
			$this->qty_List[$product] = $New_Qty;
			
			
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
		//------------------------------------------------
		// 
		// Description: Gets quantity count.
		// Return: Value of selected quantity.
		//
		//--------------------------------------------------
		function Get_Product_Qty($product)
		{
			
			$count = $this->qty_List[$product->Get_Id()];
			
			if(!isset($count))
			{
				return 0;
			}
			
			return $count;
			
		}
	

		// Private variables
		private $items = array();
		private $qty_List = array();
	
	};
	
?>

