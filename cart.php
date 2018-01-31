<?php

	include_once("bat/libs/cart_lib.php");
	include_once("bat/libs/product_lib.php");

?>

<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
  <head>
    <!-- Site Title-->
    <title>SSAI | Cart </title>
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
	<!-- Need to add favicon here -->
    <link rel="icon" href="Images/favicon/favicon-16x16.png" type="image/x-icon">
    <!-- Stylesheets -->
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Oswald:200,400%7CLato:300,400,300italic,700%7CMontserrat:900">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style_ssai.css">
    <link rel="stylesheet" href="css/mdi.css">
    <link rel="stylesheet" href="css/fl-bigmug-line.css">
		<!--[if lt IE 10]>
    <div style="background: #212121; padding: 10px 0; box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3); clear: both; text-align:center; position: relative; z-index:1;"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img src="images/ie8-panel/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
    <script src="js/html5shiv.min.js"></script>
		<![endif]--> 
  </head>
  <body>
    <!-- Page preloader-->
	<!-- Change Preloading look here -->
    <div class="page-loader">
      <div class="page-loader-body align-center">
        <div class="preloader-wrapper big active"> 
          <div class="spinner-layer spinner-blue">
            <div class="circle-clipper left">
              <div class="circle"></div>
            </div>
            <div class="gap-patch">
              <div class="circle"> </div>
            </div>
            <div class="circle-clipper right">
              <div class="circle"></div>
            </div>
          </div>
          <div class="spinner-layer spinner-red">
            <div class="circle-clipper left">
              <div class="circle"></div>
            </div>
            <div class="gap-patch">
              <div class="circle"> </div>
            </div>
            <div class="circle-clipper right">
              <div class="circle"></div>
            </div>
          </div>
          <div class="spinner-layer spinner-yellow"> 
            <div class="circle-clipper left">
              <div class="circle"></div>
            </div>
            <div class="gap-patch">
              <div class="circle"></div>
            </div>
            <div class="circle-clipper right">
              <div class="circle"> </div>
            </div>
          </div>
          <div class="spinner-layer spinner-green"> 
            <div class="circle-clipper left">
              <div class="circle"></div>
            </div>
            <div class="gap-patch">
              <div class="circle"></div>
            </div>
            <div class="circle-clipper right">
              <div class="circle"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Page-->
    <div class="page">
      <!-- Page Header-->
      <header class="section page-header">
        <!-- RD Navbar-->
        <?php include('top-nav.php') ?> 
      </header>

	  <section class="section section-lg bg-white">
      <!-- section wave-->
       <div class="shell shell-wide">
         <div class="range range-md-center">
           <div class="cell-lg-11 cell-xl-8">
             <div class="table-novi table-custom-responsive table-shop-responsive">
               <table class="table-custom">
                 <thead>
                   <tr>
                     <th>#</th>
                     <th>Product</th>
                     <th>Price</th>
                     <th>Quantity</th>
					 <th></th>
                   </tr>
                 </thead>
				 <tbody>
					<?php
						echo "<form action='bat\update_cart.php?' method='POST' id='update_Cart_frm'>";
						if(isset($_SESSION["Shopping_Cart"]) && count($_SESSION["Shopping_Cart"]->Get_Items()) > 0)
						{
							$session_Cart = $_SESSION["Shopping_Cart"];
							$session_Qty_List = $session_Cart->Get_Qty_List();
							$counter = 1;
							foreach($session_Cart->Get_Items() as $key => $product)
							{
								echo "<tr>";
								
									echo "<td>";
										echo $counter;
									echo "</td>";
									echo "<td>";
										echo "<div class='unit unit-horizontal unit-middle'>";
											echo "<div class='unit-body'>";
												echo $product->Get_Name() . " " . $product->Get_Type();
											echo "</div>";
										echo "</div>";
									echo "</td>";
									echo "<td>";
										echo $product->Get_Price();
									echo "</td>";
									echo "<td>";
										echo "<div class='form-wrap box-width-1 shop-input'>";
											echo "<input name='". $product->Get_Id() ."' id='input_Test' type='number' min='0' max='10' value='" . $session_Qty_List[$product->Get_Id()] . "'>";
										echo "</div>";
									echo "</td>";
									echo "<td>";
										echo "<a class='icon mdi mdi-close icon-md-middle icon-gray-1 sml-space-left' href='#'></a>";
									echo "</td>";
								
								
								echo "</tr>";
								
								$counter++;
							}
						}
						else
						{
							echo "<tr class='text-center'><td colspan='4'><b>No Items In Shopping Cart. To Protect Your Kids, <a href='get-deepwatch.php'> Click Here! </a></b></td></tr>";
						}
					?>
				 </tbody>
               </table>
              </div>
			   <?php 
				if(isset($_SESSION["Shopping_Cart"]) && count($_SESSION["Shopping_Cart"]->Get_Items()) > 0)
				{
					echo "<div class='cells-sm-5 cell-lg-6 cell-xl-5 text-sm-right small-space-top'>";
					  echo  "<ul class='inline-list'>";
						echo  "<li class='text-middle'>";
						  echo "<div class='text-regular'>"; 
							echo "<button type='submit' class='button button-xs button-default-outline button-nina'>Update Cart </button>";
							echo "</form>";
						  echo "</div>";
						echo  "</li>";
						echo  "<li class='text-middle'>";
						  echo "<div id='total_Calculation_div' class='text-bold'>Total: $" . $session_Cart->Get_Total() . "</div>";
						echo "</li>";
					  echo "</ul>";
					echo  "</div>";
					echo "<div class='cells-sm-5 cell-lg-6 cell-xl-5 text-sm-right small-space-top'>";
					echo "<a class='button form-button button-sm button-secondary button-nina' href='checkout.html'>checkout</a>";
					echo "</div>";
				}
			  ?>
            </div>
          </div>
        </div>
      </section> 
      <!-- Page Footer-->
      <!-- Footer Default-->
	  <?php include('footer.php') ?> 
	</div>
    
	
	
	
    <!-- Global Mailform Output-->
    <div class="snackbars" id="form-output-global"></div>
    <!-- Javascript-->
    <script src="js/core.min.js"></script>
    <script src="js/script.js"></script>
	<script src="js/shopping_cart.js"></script>
	<script src="js/custom_home.js"></script>
  </body>
</html>