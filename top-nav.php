<?php

	session_start();
	
	$current_page = $_SERVER['REQUEST_URI'];

?>
<!-- RD Navbar-->
<div class="rd-navbar-wrap rd-navbar-centered">
  <nav class="rd-navbar" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fullwidth" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-static" data-md-stick-up-offset="1px" data-lg-stick-up-offset="1px" data-stick-up="true" data-sm-stick-up="true" data-md-stick-up="true" data-lg-stick-up="true">
    <div class="rd-navbar-inner">
      <div class="rd-navbar-aside-left">
         <div class="rd-navbar-nav-wrap">
           <ul class="rd-navbar-nav">
		   <?php
		   
			if(strpos($current_page , "index") != 0)
			{
				echo "<li class='active'><a href='index.php'>Home</a>";
			}
			else
			{
				echo "<li><a href='index.php'>Home</a>";
			}
			
		    echo "</li>";
			
			if(strpos($current_page , "about-us") != 0)
			{
				echo "<li class='active'><a href='about-us.php'>About Us</a>";
			}
			else
			{
				echo "<li><a href='about-us.php'>About Us</a>";
			}
		   
			echo "</li>";
			
			if(strpos($current_page , "support-home") != 0 || strpos($current_page , "support-contact") != 0)
			{
				echo "<li class='active'><a href='support-home.php'>Support</a>";
			}
			else
			{
				echo " <li><a href='support-home.php'>Support</a>";
			}
		   
			echo "</li>";
			
			if(strpos($current_page , "get-deepwatch") != 0)
			{
				echo "<li class='active'><a href='get-deepwatch.php'>Get Started</a>";
			}
			else
			{
				echo " <li><a href='get-deepwatch.php'>Get Started</a>";
			}
		   
			echo "</li>";
			
		   ?>
		   
		     <li><a href="https://portal.ssai.tech">Portal</a>
	         </li>
			 <?php
			 
				if(strpos($current_page , "login") != 0 || strpos($current_page , "user-account") != 0 || strpos($current_page , "register") != 0)
				{
					echo "<li class='active'>";
				}
				else
				{
					echo "<li>";
				}
								
				if(!isset($_SESSION['userDetails']['Email']))
				{
				
					echo "<a href='login.php'>Account";
				
				}
				else
				{
					echo "<a href='user-account.php'>". $_SESSION['userDetails']['Email'];
				}
				
				echo "</a>";
				echo "</li>";

			 ?>
         </ul>
       </div>
     </div>
     <!-- RD Navbar Panel-->
     <div class="rd-navbar-panel">
       <!-- RD Navbar Toggle-->
       <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
       <!-- RD Navbar Brand-->
       <!-- <div class="rd-navbar-brand"><a class="brand-name" href="index.html"><img class="logo-default" src="images/Logo/Logo_inverse_800x800_edit.png" alt="" width="100" height="35"/><img class="logo-inverse" src="images/Logo/Logo_edit.png" alt="" width="100" height="35"/></a></div> -->
     </div>
     <div class="rd-navbar-collapse-toggle" data-rd-navbar-toggle=".rd-navbar-collapse"><span></span></div>
        <div class="rd-navbar-aside-right rd-navbar-collapse">
		  <?php
			if(!isset($_SESSION['userDetails']))
			{
				echo "<a class='button button-sm button-default-outline button-nina' href='get-deepwatch.html'>Get DeepWatch Now</a>";
			}
			else
			{
				echo "<a class='button button-sm button-default-outline button-nina' href='logout.php'>Logout</a>";
			}
		  ?>
      </div>
    </div>
  </nav>
</div>