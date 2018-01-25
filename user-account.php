<?php

	session_start();

	// If restricted page.
	if(!isset($_SESSION['userDetails']))
	{
		header("Location: index.php");
	}
	
	$error_Found = false;
	$success_Found = false;
	if(isset($_SERVER['QUERY_STRING']))
	{
		$query_String = $_SERVER['QUERY_STRING'];
		$query_Split = explode("=" , $query_String);
		
		if($query_Split[0] == "error")
		{
			if(isset($query_Split[1]))
			{
				$error_Found = true;
				$error = $query_Split[1];
				echo $error;
			}
		}
		else
		{
			if(isset($query_Split[1]))
			{
				$success_Found = true;
				$success = $query_Split[1];
			}
		}
	}
		
	// Get account details.
	$user_Details = $_SESSION['userDetails'];
	$daily_Difference = 0;
	$renewal_Date= "";
	$next_Renewal_Date = "";
	// Calculate date differences.
	if($user_Details['RenewalDate'] != "" && $user_Details['active'] == "YES")
	{
		$renewal_Date = new DateTime($user_Details['RenewalDate']);
		$current_Date = new DateTime(date("Y-m-d"));
		$next_Renewal_Date = $renewal_Date->add(new DateInterval('P30D'));
		$daily_Difference = date_diff($current_Date, $next_Renewal_Date);		
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
    <link rel="stylesheet" href="css/style_ssai22.css">
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
      <div class="page-loader-body-login align-center">
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
        <div class="container">
          <h3 class="text-left">Your Account</h3>
		  <div class="row">
			<div class="col-xs-12 small-space-top">
				<p><b>Status:</b> <?php if($user_Details['active'] == "YES") 
										{ 
											echo "Active";
										}
										else
										{
											echo "In-active";
									    }?></p>
				<p><b>Days Left:</b> 
				<?php
				
					if($user_Details['active'] == "YES") 
					{
						echo $daily_Difference->format('%d');
					}
					else
					{
						echo "0";
					}
					
				
				?>
				</p>
			</div>
		  </div>
          <div class="row">
            <div class="col-xs-12 small-space-top">
              <h4>Account Management</h4>
			  <div class="divider divider-default"></div>
            </div>
			<div class="col-xs-2 text-left">
			</div>
			<div class="col-xs-6 text-left small-space-top">
			  <div class="small-space-top">
				<div class="float-left">Email:</div><div class="float-right"><button id="change_email_btn" class="button button-xs button-secondary button-nina button-ellipse-lg">Change Email</button></div>
			  </div>
			  <br/>
			  <?php
				
				if($error_Found)
				{
					echo "<div class='form-error'>";
					
						if($error == "EMAILEXISTS")
						{
							echo "Email already exists.";
						}
						else if($error == "EMAILMISMATCH")
						{
							echo "Emails must match.";
						}
						else if($error == "BADEMAIL")
						{
							echo "Must be a valid email.";
						}
			
					echo "</div>";
				}
			  
			  ?>
			  <form id="change_email_frm" class="hidden-before-fade" method="POST" action="bat\change-email.php">
				<input type="hidden" value="<?php echo $user_Details['userId']; ?>" name="userId"/>
				<div class="small-space-top">
					<label class="float-left" for="n_email">New Email:</label> <input id="n_email" class="float-right" type="email" name="new_email" required><br/>
				</div>
				<div class="x-small-space-top">
					<label class="float-left" for="c_email">Confirm Email:</label> <input id="c_email" class="float-right" type="email" name="confirm_email" required>
				</div>
				<br/>
				<div class="x-small-space-top">
					<button type="submit" class="float-right button button-xs button-secondary button-nina button-ellipse-lg">Save</button>
				</div>
			  </form>
			  <br/>
			  <div class="small-space-top" >
				<div class="float-left">Password:</div><div class="float-right "><button id="change_pass_btn" class="button button-xs button-secondary button-nina button-ellipse-lg" >Change Password</button></div>
			  </div>
			  <br/>
			  <?php
				
				if($error_Found)
				{
					echo "<div class='form-error'>";
					
						if($error == "PASSWORDFAIL")
						{
							echo "Incorrect Password.";
						}
						else if($error == "PASSMISMATCH")
						{
							echo "New passwords must match.";
						}
						else if($error == "OLDPASSWORD")
						{
							echo "Must be a new password.";
						}
						else if ($error =="WEAKPASSWORD")
						{
							echo "New password must contain at least one number and one letter.";
						}
						else if ($error =="PASSWORDLENGTH")
						{
							echo "New password must be between 5 and 20 characters.";
						}
					
					echo "</div>";
				}
			  
			  ?>
			  <form id="change_pass_frm" class="hidden-before-fade" method="POST" action="bat\change-password.php">
				<input type="hidden" id="email" name="email" value="<?php echo $user_Details['Email']; ?>"/>
				<div class="small-space-top">
				  <label class="float-left" for="n_email">Old Password:</label> <input id="o_pass" class="float-right" type="password" name="old_pass" required><br/>
			    </div>
				<div class="x-small-space-top">
					<label class="float-left" for="n_email">New Password:</label> <input id="n_pass" class="float-right" type="password" name="new_pass" required><br/>
				</div>
				<div class="x-small-space-top">
					<label class="float-left" for="c_email">Confirm Password:</label> <input id="c_pass" class="float-right" type="password" name="confirm_pass" required>
				</div>
				<br/>
				<div class="x-small-space-top">
					<button type="submit" class="float-right button button-xs button-secondary button-nina button-ellipse-lg">Save</button>
				</div>
			  </form>
          </div>
		   <div class="row">
            <div class="col-xs-12 small-space-top">
              <h4>Device Management</h4>
			  <div class="divider divider-default"></div>
            </div>
          </div>
            <div class="row">
			<div class="col-xs-2 text-left">
			</div>
			<div class="col-xs-2 text-left small-space-top">
			  <p>Authorized Devices: </p>
            </div>
			<div class="col-xs-6 text-left small-space-top">
			  <?php
			  
				if($user_Details['Registration'] != "")
				{
					echo "WILL GET DEVICES";
				}
				else
				{
					echo "<p>No authorized devices found.</p>";
				}
			  
			  
			  ?>
            </div>
          </div>
		  <div class="row">
            <div class="col-xs-12 small-space-top">
              <h4>Payment Management</h4>
			  <div class="divider divider-default"></div>
            </div>
          </div>
		   <?php
				if($user_Details['active'] == "YES")
				{
					
					echo "<div class='row'>";
						echo "<div class='col-xs-2 text-left'>";
						echo "</div>";
						echo "<div class='col-xs-2 text-left small-space-top'>";
							echo "<p>Last  Renewal: </p>";
						echo "</div>";
						echo "<div class='col-xs-2 text-left small-space-top'>";
							echo "<p>".$user_Details['RenewalDate']."</p>";
						echo "</div>";
					echo "</div>";
					echo "<div class='row'>";
						echo "<div class='col-xs-2 text-left'>";
						echo "</div>";
						echo "<div class='col-xs-2 text-left small-space-top'>";
							echo "<p>Next  Renewal: </p>";
						echo "</div>";
						echo "<div class='col-xs-2 text-left small-space-top'>";
							echo "<p>".$next_Renewal_Date->format('Y-m-d')."</p>";
						echo "</div>";
					echo "</div";
				}
		    ?>
            <div class="row">
			  <div class="col-xs-2 text-left">
			  </div>
			  <div class="col-xs-2 text-left small-space-top">
			    <p>Payment Method: </p>
              </div>
			  <div class="col-xs-2 text-left small-space-top">
			    <p>[USER METHOD]</p>
			    <p><a href="show_form">Change Method</a> </p>
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
	<script src="js/user-account_custom.js"></script>
	<script src="js/custom_home.js"></script>
  </body>
</html>