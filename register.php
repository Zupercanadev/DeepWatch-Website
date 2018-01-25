<?php

	error_reporting(E_ALL);
	ini_set('display_errors', 1);

	$errors = parse_url($_SERVER['REQUEST_URI'] , PHP_URL_QUERY);
	$error_found = false;
	if(isset($errors))
	{
		
		$error_found = true;
				
		$error_split = explode("=" , $errors);
			
		if($error_split[1] == "EMAILFOUND")
		{
			$error = "Email already exists";	
		}
		else if($error_split[1] == "NOMATCH")
		{
			$error = "Passwords must match";
		}
		else if($error_split[1] == "BADEMAIL")
		{
			$error = "Must be a valid email address";
		}
		else if($error_split[1] == "WEAKPASSWORD")
		{
			$error = "Password must contain at least a number and a letter.";
		}
		else if($error_split[1] == "PASSWORDLENGTH")
		{
			$error = "Password must be between 5 and 20 characters.";	
		}

	}

?>

<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
  <head>
    <!-- Site Title-->
    <title>SSAI | DeepWatch </title>
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
	<!-- Need to add favicon here -->
    <link rel="icon" href="Images/favicon/favicon-16x16.png" type="image/x-icon">
    <!-- Stylesheets -->
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Oswald:200,400%7CLato:300,400,300italic,700%7CMontserrat:900">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style_ssai11.css">
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
	  
	    <section class="section">
        <div class="fullwidth-page-inner">
          <div class="section-lg text-center">
            <div class="shell">
              <h3>Create your DeepWatch account</h3>
              <div class="range range-xs-center">
                <div class="cell-sm-8 cell-md-6 cell-lg-4">
                  <!-- RD Mailform-->
                  <form id="create_user_frm" method="POST" action="bat\create-user.php">
                    <div class="form-wrap form-wrap-validation">
                      <input class="form-input" id="form-1-email" type="email" name="email" data-constraints="@Required @Email">
                      <label class="form-label" for="form-1-email">E-mail</label>
                    </div>
                    <div class="form-wrap form-wrap-validation">
                      <input class="form-input" id="form-1-password" type="password" name="password" data-constraints="@Required">
                      <label class="form-label" for="form-1-password">Password</label>
                    </div>
                    <div class="form-wrap form-wrap-validation">
                      <input class="form-input" id="form-1-password-confirm" type="password" name="password-confirm" data-constraints="@Required">
                      <label class="form-label" for="form-1-password-confirm">Confirm Password</label>
                    </div>
                    <div class="form-button">
                      <button class="button button-block button-secondary button-nina" type="submit">Sign up</button>
                    </div>
					<?php
					
						if($error_found)
						{
							echo "<div class='small-space-top form-error'>";
							
								echo $error;
							
							
							echo "</div>";
							
						}
						
					
					?>
                  </form>
                </div>
              </div>
            </div>
          </div>
          <!-- Page Footer-->
          <div class="section-xs page-footer text-center">
            <div class="shell">
              <p class="right">&#169; <span class="copyright-year"></span> All Rights Reserved
                &nbsp;<a href="#">Terms of Use</a>&nbsp;<span>and</span>&nbsp;<a href="privacy-policy.html">Privacy Policy</a>
              </p>
            </div>
          </div>
        </div>
      </section>

      <!-- Page Footer-->
      <!-- Footer Default-->
      <footer class="section page-footer page-footer-default text-left bg-gray-lighter">
        <div class="shell-wide">
          <div class="range range-50 range-xs-center">
            <div class="cell-sm-6 cell-lg-3">
              <div class="inset-xl">
                <h6>About us</h6>
                <p class="text-spacing-sm">Stanley Smith Artificial Intelligence ("SSAI") is a software company focused on providing superior filtering using A.I. </p>
              </div>
            </div>
            <div class="cell-sm-6 cell-lg-2">
              <h6>Quick links</h6>
              <ul class="list-marked list-marked-primary"> 
                <li><a href="about-us.html">About Us</a></li>
                <li><a href="support-home.html">Support</a></li>
                <li><a href="classic-blog.html">Blog</a></li>
                <li><a href="contacts.html">Contact</a></li>
              </ul>
            </div>
			<div class="cell-sm-6 cell-lg-2">
              <h6>Policies</h6>
              <ul class="list-marked list-marked-primary"> 
                <li><a href="#">Privacy</a></li>
                <li><a href="#">Terms and Conditions</a></li>
                <li><a href="#">Support Services</a></li>
              </ul>
            </div>
			<!--
            <div class="cell-sm-6 cell-lg-4">
              <h6>Instagram feed</h6>
              <div class="instafeed text-center" data-instafeed-user="25025320" data-instafeed-get="user" data-instafeed-sort="least-recent" data-lightgallery="group">
                <div class="range range-10 range-narrow"> 
                  <div class="cell-xxs-6 cell-xs-4 cell-sm-4 cell-md-3" data-instafeed-item="">
                    <div class="thumbnail-instafeed thumbnail-instafeed-minimal"> <a class="instagram-link" data-lightgallery="group-item" href="#" data-images-standard_resolution-url="href"><img class="instagram-image" src="images/_blank.png" alt="" data-images-standard_resolution-url="src"/></a>
                      <div class="caption"> 
                        <ul class="list-inline">
                          <li><span class="icon mdi mdi-heart"></span><span data-likes-count="text"></span></li>
                          <li><span class="icon mdi mdi-comment"></span><span data-comments-count="text"></span></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="cell-xxs-6 cell-xs-4 cell-sm-4 cell-md-3" data-instafeed-item="">
                    <div class="thumbnail-instafeed thumbnail-instafeed-minimal"> <a class="instagram-link" data-lightgallery="group-item" href="#" data-images-standard_resolution-url="href"><img class="instagram-image" src="images/_blank.png" alt="" data-images-standard_resolution-url="src"/></a>
                      <div class="caption"> 
                        <ul class="list-inline">
                          <li><span class="icon mdi mdi-heart"></span><span data-likes-count="text"></span></li>
                          <li><span class="icon mdi mdi-comment"></span><span data-comments-count="text"></span></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="cell-xxs-6 cell-xs-4 cell-sm-4 cell-md-3" data-instafeed-item="">
                    <div class="thumbnail-instafeed thumbnail-instafeed-minimal"> <a class="instagram-link" data-lightgallery="group-item" href="#" data-images-standard_resolution-url="href"><img class="instagram-image" src="images/_blank.png" alt="" data-images-standard_resolution-url="src"/></a>
                      <div class="caption"> 
                        <ul class="list-inline">
                          <li><span class="icon mdi mdi-heart"></span><span data-likes-count="text"></span></li>
                          <li><span class="icon mdi mdi-comment"></span><span data-comments-count="text"></span></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="cell-xxs-6 cell-xs-4 cell-sm-4 cell-md-3" data-instafeed-item="">
                    <div class="thumbnail-instafeed thumbnail-instafeed-minimal"> <a class="instagram-link" data-lightgallery="group-item" href="#" data-images-standard_resolution-url="href"><img class="instagram-image" src="images/_blank.png" alt="" data-images-standard_resolution-url="src"/></a>
                      <div class="caption"> 
                        <ul class="list-inline">
                          <li><span class="icon mdi mdi-heart"></span><span data-likes-count="text"></span></li>
                          <li><span class="icon mdi mdi-comment"></span><span data-comments-count="text"></span></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="cell-xxs-6 cell-xs-4 cell-sm-4 cell-md-3" data-instafeed-item="">
                    <div class="thumbnail-instafeed thumbnail-instafeed-minimal"> <a class="instagram-link" data-lightgallery="group-item" href="#" data-images-standard_resolution-url="href"><img class="instagram-image" src="images/_blank.png" alt="" data-images-standard_resolution-url="src"/></a>
                      <div class="caption"> 
                        <ul class="list-inline">
                          <li><span class="icon mdi mdi-heart"></span><span data-likes-count="text"></span></li>
                          <li><span class="icon mdi mdi-comment"></span><span data-comments-count="text"></span></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="cell-xxs-6 cell-xs-4 cell-sm-4 cell-md-3" data-instafeed-item="">
                    <div class="thumbnail-instafeed thumbnail-instafeed-minimal"> <a class="instagram-link" data-lightgallery="group-item" href="#" data-images-standard_resolution-url="href"><img class="instagram-image" src="images/_blank.png" alt="" data-images-standard_resolution-url="src"/></a>
                      <div class="caption"> 
                        <ul class="list-inline">
                          <li><span class="icon mdi mdi-heart"></span><span data-likes-count="text"></span></li>
                          <li><span class="icon mdi mdi-comment"></span><span data-comments-count="text"></span></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="cell-xxs-6 cell-xs-4 cell-sm-4 cell-md-3" data-instafeed-item="">
                    <div class="thumbnail-instafeed thumbnail-instafeed-minimal"> <a class="instagram-link" data-lightgallery="group-item" href="#" data-images-standard_resolution-url="href"><img class="instagram-image" src="images/_blank.png" alt="" data-images-standard_resolution-url="src"/></a>
                      <div class="caption"> 
                        <ul class="list-inline">
                          <li><span class="icon mdi mdi-heart"></span><span data-likes-count="text"></span></li>
                          <li><span class="icon mdi mdi-comment"></span><span data-comments-count="text"></span></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="cell-xxs-6 cell-xs-4 cell-sm-4 cell-md-3" data-instafeed-item="">
                    <div class="thumbnail-instafeed thumbnail-instafeed-minimal"> <a class="instagram-link" data-lightgallery="group-item" href="#" data-images-standard_resolution-url="href"><img class="instagram-image" src="images/_blank.png" alt="" data-images-standard_resolution-url="src"/></a>
                      <div class="caption"> 
                        <ul class="list-inline">
                          <li><span class="icon mdi mdi-heart"></span><span data-likes-count="text"></span></li>
                          <li><span class="icon mdi mdi-comment"></span><span data-comments-count="text"></span></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
			-->
          </div>
          <p class="right">&#169;&nbsp;<span class="copyright-year"></span> All Rights Reserved&nbsp;<a href="#">Terms of Use</a>&nbsp;and&nbsp;<a href="privacy-policy.html">Privacy Policy</a></p>
        </div>
      </footer>
    </div>
    
    <!-- Global Mailform Output-->
    <div class="snackbars" id="form-output-global"></div>
    <!-- Javascript-->
    <script src="js/core.min.js"></script>
    <script src="js/script.js"></script>
	<script src="js/validate_create_user.js"></script>
  </body>
</html>