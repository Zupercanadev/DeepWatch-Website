<?php
	
	//----------------------------------------------------------------------------
	//
	// Description: Product Object. Holds specific information regarding products.
	//
	//-----------------------------------------------------------------------------
	
	
	class Product
	{
		
		//----------------------------------------------------------------------------
		//
		// Description: This is a default consturctor for the product.
		// Input1: Product Id.
		// Input2: Product Name.
		// Input3: Product Price.
		// Input4: Product Description.
		//
		//-----------------------------------------------------------------------------
		function __construct($Input_Id, $Input_Name, $Input_Price, $Input_Description)
		{
			$this->id = $Input_Id;
			$this->name = $Input_Name;
			$this->price = $Input_Price;
			$this->description = $Input_Description;
			
		}
		
		//----------------------------------------------------------------------------
	    //
		// Description: This gets the id of the product.
		// Return: Product Id.
		//
		//-----------------------------------------------------------------------------
		function Get_Id()
		{
			return $this->id;
		}
		//----------------------------------------------------------------------------
	    //
		// Description: This gets the name of the product.
		// Return: Product Name.
		//
		//-----------------------------------------------------------------------------
		function Get_Name()
		{
			return $this->name;
		}
		//----------------------------------------------------------------------------
	    //
		// Description: This gets the price of the product.
		// Return: Product Price.
		//
		//-----------------------------------------------------------------------------
		function Get_Price()
		{
			return $this->price;
		}
		//----------------------------------------------------------------------------
	    //
		// Description: This gets the description of the product.
		// Return: Product Description.
		//
		//-----------------------------------------------------------------------------
		function Get_Description()
		{
			return $this->description;
		}
	
		// Private Variables
		private $name = '';
		private $id = '';
		private $price = 0;
		private $description = '';
	
	}

	

?>