<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
  <head>
    <!-- Site Title-->
    <title>SSAI | Support Home </title>
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
	<!-- Need to add favicon here -->
    <link rel="icon" href="Images/favicon/favicon-16x16.png" type="image/x-icon">
    <!-- Stylesheets -->
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Oswald:200,400%7CLato:300,400,300italic,700%7CMontserrat:900">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style_ssai2.css">
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
      <div class="page-loader-body-support align-center">
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
      <!-- Page Header-->
      <header class="section page-header">
        <!-- RD Navbar-->
        <?php include('top-nav.php') ?> 
      </header>
	  
	   <section class="section section-xl bg-gray-lighter text-center">
        <div class="shell-wide">
          <div class="range range-50 range-xs-center">
            <div class="cell-sm-10 cell-lg-6">
              <h3>How can we help?</h3>	  
            </div>
          </div>
        </div>
      </section>
	  
	  
	   <section class="section bg-additional-pattern-dark ">
        <div class="shell-custom">
          <div class="range range-sm-center range-md-left range-lg-left range-0">
            <div class="cell-sm-10 cell-md-6">
              <div class="section-sm">
                <div class="shell-custom-inner">
				  <div class="cell-sm-10 cell-lg-6">
					<h4>FAQ Quick Links</h4>
					<hr class="divider divider-default">
				  </div>
				  
				  <div class="small-space">
					  <ul class="list-outer">
						<ul class="list-marked">
							<li><h5><a href="#answer1" >Images on the dashboard are partially or completely white.</a></h5></li>
							<li><h5><a href="#answer2" >Images are appearing broken on the dashboard.</a></h5></li>
							<li><h5><a href="#answer3" >Images say they have been found in the DeepWatch folder.</a></h5></li>
							<li><h5><a href="#answer4" >An image has failed to blur.</a></h5></li>
						</ul>
					</div>
				  
				  </ul>
                 
                </div>
              </div>
            </div>
            <div class="cell-md-6 bg-blue-lighter">
              <div class="section-lg ">
                <div class="text-center">
				<div class="section-sm">
					
					<h4 class="text-white"> Need Help? </h4>
					<a class="button button-secondary button-nina" href="support-contact.php">Contact Support</a>
					
				</div>
				<hr/>
				<div class="section-sm">
				
					<h4 class="text-white"> Our Policies </h4>
					
					<ul class="small-space justify-center">
					
						<li> <a href="EULA"> End User License Agreement </a></li>
						<li> <a href="terms"> Terms and Conditions </a></li>
						<li> <a href="private"> Private Policy </a></li>
						<li> <a href="payment"> Payment Terms </a></li>
					
					</ul>
					
				</div>
			
			
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
	  
	  
	  <!-- FAQ and support -->
	  <section class="section section-lg text-left" id="answer1">
		<div class="shell-wide">
			
			<h3>Frequently Asked Questions</h3>
			
			<div class="divider divider-default"></div>
			
			<div  class="small-space">
				<h4> Question:</h4> 
				<h5>Images on the dashboard are partially or completely white.</h5>
				<div class="small-space" id="answer2">
					<h4>Answer:</h4> 
					<h5>This is generally caused by a firewall blocking DeepWatch from sending flagged images. Please allow DeepWatch through your firewall.</h5>
				</div>
			</div>

			<hr/>
			
			<div class="small-space">
				<h4> Question:</h4>
				<h5>Images are appearing broken on the dashboard.</h5>
				<div class="small-space" id="answer3">
					<h4>Answer:</h4> 
					<h5>Images can be broken if the device sending the image is disabled or disconnected from the internet. Simply delete the image from the dashboard and DeepWatch will attempt to re-upload the image next time the device is switched on.</h5>
				</div>
			</div>
			
			<hr/>
			
			<div class="small-space">
				<h4> Question:</h4> 
				<h5> Images say they have been found in the DeepWatch folder. </h5>
				<div class="small-space" id="answer4">
					<h4>Answer:</h4> 			
					<h5>A security measure of DeepWatch is to scan its own folder. This will cause images gathered from a USB to also be scanned. Simply recognize this image as one gathered from a USB. </h5>
				</div>
			</div>
			
			<hr/>
			
			<div class="small-space">
				<h4> Question:</h4> <h5> An image has failed to blur. </h5>
				<div class="small-space">
					<h4>Answer:</h4> 
					<h5>Various technical issues can sometimes cause the blur to fail. Simply delete the image and DeepWatch will attempt to upload the image next time the device is switched on.</h5>
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
	<script src="js/custom_home.js"></script>
  </body>
</html>