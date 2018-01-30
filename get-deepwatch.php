<?php

	$loggedIn = false;
	
	session_start();

	if(isset($_SESSION['userDetails']['userId']))
	{
		$loggedIn = true;
	}
	
?>


<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
  <head>
    <!-- Site Title-->
    <title>SSAI | Get Started</title>
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
	<!-- Need to add favicon here -->
	<link rel="icon" href="Images/favicon/favicon-16x16.png" type="image/x-icon">
    <!-- Stylesheets -->
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Oswald:200,400%7CLato:300,400,300italic,700%7CMontserrat:900">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style_ssai8.css">
    <link rel="stylesheet" href="css/mdi.css">
    <link rel="stylesheet" href="css/fl-bigmug-line.css">
		<!--[if lt IE 10]>
    <div style="background: #212121; padding: 10px 0; box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3); clear: both; text-align:center; position: relative; z-index:1;"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img src="images/ie8-panel/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
    <script src="js/html5shiv.min.js"></script>
		<![endif]--> 
  </head>
  <body>
    <!-- Page preloader-->
     <!-- Page preloader-->
	<!-- Change Preloading look here -->
    <div class="page-loader">
      <div class="page-loader-body-buy align-center">
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
	  <section class="section section-lg text-center bg-white">
        <div class="shell shell-bigger">
          <h3>You're on your way to a safer home!</h3>
          <div class="divider divider-default"></div>
          <!-- Owl Carousel-->
          <div class="owl-carousel owl-layout-1" data-items="1" data-dots="true" data-nav="true" data-stage-padding="0" data-loop="true" data-margin="30" data-mouse-drag="false">
            <article class="quote-boxed">
              <div class="quote-boxed-aside"><img class="quote-boxed-image" src="images/quote-user-1-210x210.jpg" alt="" width="210" height="210"/>
              </div>
              <div class="quote-boxed-main">
                <div class="quote-boxed-text">
                  <p>Every family needs this. Now I have piece of mind knowing what images my children are sending an recieving.</p>
                </div>
                <div class="quote-boxed-meta">
                  <p class="quote-boxed-cite">Philip Lawrence</p>
                  <p class="quote-boxed-small">Regular Customer</p>
                </div>
              </div>
            </article>
            <article class="quote-boxed">
              <div class="quote-boxed-aside"><img class="quote-boxed-image" src="images/quote-user-2-210x210.jpg" alt="" width="210" height="210"/>
              </div>
              <div class="quote-boxed-main">
                <div class="quote-boxed-text">
                  <p>My company needed a new design for our new website and we decided to stop on Brave. No HTML template that we’ve seen before hasn’t even come close to what your designers and developers done. It’s a truly amazing solution and if you still hesitate whether to buy this template or not, I recommend you to buy it now.</p>
                </div>
                <div class="quote-boxed-meta">
                  <p class="quote-boxed-cite">Debra Ortega</p>
                  <p class="quote-boxed-small">Regular Customer</p>
                </div>
              </div>
            </article>
            <article class="quote-boxed">
              <div class="quote-boxed-aside"><img class="quote-boxed-image" src="images/quote-user-3-210x210.jpg" alt="" width="210" height="210"/>
              </div>
              <div class="quote-boxed-main">
                <div class="quote-boxed-text">
                  <p>This template is a universal solution, which I was looking for so long. With Brave, I can now showcase all my projects and receive instant feedback from my website visitors. It is an easy-to-use and very powerful product, and the features it has will come in handy if you need a reliable and stunning website.</p>
                </div>
                <div class="quote-boxed-meta">
                  <p class="quote-boxed-cite">Jose Gutierrez</p>
                  <p class="quote-boxed-small">Regular Customer</p>
                </div>
              </div>
            </article>
          </div>
        </div>
      </section>
      <section class="section section-lg bg-white text-center">
        <div class="shell shell-wide" >
          <h3>Monthly Plans</h3>
          <div class="divider divider-default"></div>
		  <table class="align-center sml-space-top">
			<tr>
				<td>
					<b>Avaliable On:</b>
				</td>
				<td>
					<img src="images/Stock/windows_icon.png" alt="" width="28" height="30" class="lrg-space-left sml-space-right"/> Windows 7 or later
				</td>
			</tr>
			<tr>
				<td>
				 <b>Coming soon:</b>
				</td>
			    <td> 
					<figure class="image-small"><img src="images/Stock/mac_icon.ico" alt="" width="30" height="30" />
						<img src="images/Stock/android_icon.png" alt="" width="35" height="35"/> 
						<img src="images/Stock/ios_icon.png" alt="" width="35" height="35"/>
					</figure>
				<td>
			</tr>
			</table>
          <div class="range range-md range-50 range-xs-center">
            <!-- Pricing Box XL-->
            <div class="cell-sm-6 cell-lg-3">
              <div class="pricing-box pricing-box-xl pricing-box-novi">
                <div class="pricing-box-header">
                  <h4>1 Device</h4>
				  <h5>PC</h5>
                </div>
                <div class="pricing-box-price">
                  <div class="heading-2"><sup>$</sup>9.97</div>
				  <div class="unit-body"><span>per device</span></div>
				  <div class="small-space"></div>
				  <div class="x-small-space"></div>
                </div>
                <div class="pricing-box-body">
                  <ul class="pricing-box-list">
                    <li>
                      <div class="unit unit-spacing-sm unit-horizontal unit-middle">
                        <div class="unit-left"><span class="icon icon-md-big icon-primary mdi mdi-account-multiple"></span></div>
                        <div class="unit-body"><span>1 User</span></div>
                      </div>
                    </li>
                    <li>
                      <div class="unit unit-spacing-sm unit-horizontal unit-middle">
                        <div class="unit-left"><span class="icon icon-md-big icon-primary mdi mdi-harddisk"></span></div>
                        <div class="unit-body"><span>24/7 scanning</span></div>
                      </div>
                    </li>
                    <li>
                      <div class="unit unit-spacing-sm unit-horizontal unit-middle">
                        <div class="unit-left"><span class="icon icon-md-big icon-primary mdi mdi-repeat"></span></div>
                        <div class="unit-body"><span>Unlimited scans</span></div>
                      </div>
                    </li>
                  </ul>
				  <form id="Single_Frm" action="bat\process_product.php" method="POST" class="small-space-top">
					<input type="hidden" value="Single Device" name="plan_selection"/>
					<input type="hidden" value="9.97" name="plan_price"/>
					<input type="hidden" value="Monthly" name="plan_type"/>
					<input type="hidden" value="single_monthly" name="plan_id"/>
					<input type="hidden" value="Single device monthly plan." name="plan_description"/>
				    <button class="button button-sm button-secondary button-nina">Get DeepWatch</button>
				  </form>
                </div>
              </div>
            </div>
            <!-- Pricing Box XL-->
            <div class="cell-sm-6 cell-lg-3" id= "plans">
              <div class="pricing-box pricing-box-xl pricing-box-novi">
                <div class="pricing-box-header">
				   <h4>5 Devices</h4>
				  <h5>PC</h5>
                </div>
               <div class="pricing-box-price">
                  <div class="heading-2"><sup>$</sup>3.99</div>
				  <div class="unit-body"><span>per device</span></div>
				  <div class="small-space">
					<div class="unit-body">
						<span class="text-gray-1 sml-space-right"><strike><sup>$</sup>64.75</strike></span><span class="text-blue-1">  <sup>$</sup>19.97 p.m</span>
					</div>
				  </div>
                </div>
                <div class="pricing-box-body">
                  <ul class="pricing-box-list">
                    <li>
                      <div class="unit unit-spacing-sm unit-horizontal unit-middle">
                        <div class="unit-left"><span class="icon icon-md-big icon-primary mdi mdi-account-multiple"></span></div>
                        <div class="unit-body"><span>5 Devices</span></div>
                      </div>
                    </li>
                    <li>
                      <div class="unit unit-spacing-sm unit-horizontal unit-middle">
                        <div class="unit-left"><span class="icon icon-md-big icon-primary mdi mdi-harddisk"></span></div>
                        <div class="unit-body"><span>24/7 scanning</span></div>
                      </div>
                    </li>
                    <li>
                      <div class="unit unit-spacing-sm unit-horizontal unit-middle">
                        <div class="unit-left"><span class="icon icon-md-big icon-primary mdi mdi-repeat"></span></div>
                        <div class="unit-body"><span>Unlimited scans</span></div>
                      </div>
                    </li>
                  </ul>
				  <form id="5_device_Frm" action="bat\process_product.php" method="POST" class="small-space-top">
					<input type="hidden" value="5 Devices" name="plan_selection"/>
					<input type="hidden" value="19.97" name="plan_price"/>
					<input type="hidden" value="Monthly" name="plan_type"/>
					<input type="hidden" value="five_monthly" name="plan_id"/>
					<input type="hidden" value="Five devices, monthly plan."/>
					<input type="hidden" value="Five devices monthly plan." name="plan_description"/>
				    <button class="button button-sm button-secondary button-nina">Get DeepWatch</button>
				  </form>
                </div>
              </div>
            </div>
			<div class="cell-sm-6 cell-lg-3">
              <div class="pricing-box pricing-box-xl pricing-box-novi">
                <div class="pricing-box-header">
				   <h4>10 Devices</h4>
				  <h5>PC</h5>
                </div>
               <div class="pricing-box-price">
                  <div class="heading-2"><sup>$</sup>2.49</div>
				  <div class="unit-body"><span>per device</span></div>
				  <div class="small-space">
					<div class="unit-body">
						<span class="text-gray-1 sml-space-right"><strike><sup>$</sup>129.50</strike></span><span class="text-blue-1"> <sup>$</sup> 24.97 p.m</span>
					</div>
				  </div>
                </div>
                <div class="pricing-box-body">
                  <ul class="pricing-box-list">
                    <li>
                      <div class="unit unit-spacing-sm unit-horizontal unit-middle">
                        <div class="unit-left"><span class="icon icon-md-big icon-primary mdi mdi-account-multiple"></span></div>
                        <div class="unit-body"><span>5 Devices</span></div>
                      </div>
                    </li>
                    <li>
                      <div class="unit unit-spacing-sm unit-horizontal unit-middle">
                        <div class="unit-left"><span class="icon icon-md-big icon-primary mdi mdi-harddisk"></span></div>
                        <div class="unit-body"><span>24/7 scanning</span></div>
                      </div>
                    </li>
                    <li>
                      <div class="unit unit-spacing-sm unit-horizontal unit-middle">
                        <div class="unit-left"><span class="icon icon-md-big icon-primary mdi mdi-repeat"></span></div>
                        <div class="unit-body"><span>Unlimited scans</span></div>
                      </div>
                    </li>
                  </ul>
				  <form class="small-space-top" action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
					<input type="hidden" name="cmd" value="_s-xclick">
					<input type="hidden" name="hosted_button_id" value="MB59TGUYPPHX2">
					<input type="submit" class="button button-sm button-secondary button-nina" value="Get DeepWatch" name="submit"/>
				  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
	  <section class="section section-lg bg-white text-center">
        <div class="shell shell-wide">
          <h3>Yearly Plans</h3>
          <div class="divider divider-default"></div>
		  <table class="align-center sml-space-top">
			<tr>
				<td>
					<b>Avaliable On:</b>
				</td>
				<td>
					<img src="images/Stock/windows_icon.png" alt="" width="28" height="30" class="lrg-space-left sml-space-right"/> Windows 7 or later
				</td>
			</tr>
			<tr>
				<td>
				 <b>Coming soon:</b>
				</td>
			    <td> 
					<figure class="image-small"><img src="images/Stock/mac_icon.ico" alt="" width="30" height="30"/>
						<img src="images/Stock/android_icon.png" alt="" width="35" height="35"/> 
						<img src="images/Stock/ios_icon.png" alt="" width="35" height="35"/>
					</figure>
				<td>
			</tr>
			</table>
          <div class="range range-md range-50 range-xs-center">
            <!-- Pricing Box XL-->
            <div class="cell-sm-6 cell-lg-3">
              <div class="pricing-box pricing-box-xl pricing-box-novi">
                <div class="pricing-box-header">
                  <h4>1 Device</h4>
				  <h5>PC</h5>
                </div>
                <div class="pricing-box-price">
                  <div class="heading-2"><h5><strike><sup>$</sup>119.97</strike></h5><sup>$</sup>59.97</div>
				  <div class="unit-body"><span>per year</span></div>
                </div>
                <div class="pricing-box-body">
                  <ul class="pricing-box-list">
                    <li>
                      <div class="unit unit-spacing-sm unit-horizontal unit-middle">
                        <div class="unit-left"><span class="icon icon-md-big icon-primary mdi mdi-account-multiple"></span></div>
                        <div class="unit-body"><span>1 User</span></div>
                      </div>
                    </li>
                    <li>
                      <div class="unit unit-spacing-sm unit-horizontal unit-middle">
                        <div class="unit-left"><span class="icon icon-md-big icon-primary mdi mdi-harddisk"></span></div>
                        <div class="unit-body"><span>24/7 scanning</span></div>
                      </div>
                    </li>
                    <li>
                      <div class="unit unit-spacing-sm unit-horizontal unit-middle">
                        <div class="unit-left"><span class="icon icon-md-big icon-primary mdi mdi-repeat"></span></div>
                        <div class="unit-body"><span>Unlimited scans</span></div>
                      </div>
                    </li>
                  </ul>
				  <form class="small-space-top" action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
					<input type="hidden" name="cmd" value="_s-xclick">
					<input type="hidden" name="hosted_button_id" value="ATRTFR8XDW7UJ">
					<input type="submit" class="button button-sm button-secondary button-nina" value="Get DeepWatch" name="submit"/>
				  </form>
                </div>
              </div>
            </div>
            <!-- Pricing Box XL-->
            <div class="cell-sm-6 cell-lg-3">
              <div class="pricing-box pricing-box-xl pricing-box-novi">
                <div class="pricing-box-header">
				   <h4>5 Devices</h4>
				  <h5>PC</h5>
                </div>
               <div class="pricing-box-price">
                  <div class="heading-2"><h5><strike><sup>$</sup>239.64</strike></h5><sup>$</sup>119.82</div>
				  <div class="unit-body"><span>per year</span></div>
                </div>
                <div class="pricing-box-body">
                  <ul class="pricing-box-list">
                    <li>
                      <div class="unit unit-spacing-sm unit-horizontal unit-middle">
                        <div class="unit-left"><span class="icon icon-md-big icon-primary mdi mdi-account-multiple"></span></div>
                        <div class="unit-body"><span>5 Devices</span></div>
                      </div>
                    </li>
                    <li>
                      <div class="unit unit-spacing-sm unit-horizontal unit-middle">
                        <div class="unit-left"><span class="icon icon-md-big icon-primary mdi mdi-harddisk"></span></div>
                        <div class="unit-body"><span>24/7 scanning</span></div>
                      </div>
                    </li>
                    <li>
                      <div class="unit unit-spacing-sm unit-horizontal unit-middle">
                        <div class="unit-left"><span class="icon icon-md-big icon-primary mdi mdi-repeat"></span></div>
                        <div class="unit-body"><span>Unlimited scans</span></div>
                      </div>
                    </li>
                  </ul>
				  <form class="small-space-top" action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
				  <input type="hidden" name="cmd" value="_s-xclick">
				  <input type="hidden" name="hosted_button_id" value="6XK4KK8Q9DQMS">
				  <input type="submit" class="button button-sm button-secondary button-nina" value="Get DeepWatch" name="submit"/>
				</form>
                </div>
              </div>
            </div>
			<div class="cell-sm-6 cell-lg-3">
              <div class="pricing-box pricing-box-xl pricing-box-novi">
                <div class="pricing-box-header">
				   <h4>10 Devices</h4>
				  <h5>PC</h5>
                </div>
               <div class="pricing-box-price">
                  <div class="heading-2"><h5><strike><sup>$</sup>299.64</strike></h5><sup>$</sup>149.97</div>
				  <div class="unit-body"><span>per year</span></div>
                </div>
                <div class="pricing-box-body">
                  <ul class="pricing-box-list">
                    <li>
                      <div class="unit unit-spacing-sm unit-horizontal unit-middle">
                        <div class="unit-left"><span class="icon icon-md-big icon-primary mdi mdi-account-multiple"></span></div>
                        <div class="unit-body"><span>10 Devices</span></div>
                      </div>
                    </li>
                    <li>
                      <div class="unit unit-spacing-sm unit-horizontal unit-middle">
                        <div class="unit-left"><span class="icon icon-md-big icon-primary mdi mdi-harddisk"></span></div>
                        <div class="unit-body"><span>24/7 scanning</span></div>
                      </div>
                    </li>
                    <li>
                      <div class="unit unit-spacing-sm unit-horizontal unit-middle">
                        <div class="unit-left"><span class="icon icon-md-big icon-primary mdi mdi-repeat"></span></div>
                        <div class="unit-body"><span>Unlimited scans</span></div>
                      </div>
                    </li>
                  </ul>
				  <form class="small-space-top" action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
					<input type="hidden" name="cmd" value="_s-xclick">
					<input type="hidden" name="hosted_button_id" value="5UD7MGAWHUGLN">
					<input type="submit" class="button button-sm button-secondary button-nina" value="Get DeepWatch" name="submit"/>
				  </form>

                </div>
              </div>
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
  </body>
</html>