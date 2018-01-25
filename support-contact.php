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
    <link rel="stylesheet" href="css/style_ssai3.css">
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
	  
	  
	   <!-- Contact us-->
      <section class="section section-lg bg-white text-center">
        <div class="shell">
          <div class="range range-xs-center">
            <div class="cell-sm-10 cell-lg-8">
              <h3>Contact us</h3>
              <!-- RD Mailform-->
              <form class="rd-mailform" data-form-output="form-output-global" data-form-type="request-help" method="post" action="bat/rd-mailform.php">
                <div class="range range-20">
                  <div class="cell-sm-6">
                    <div class="form-wrap form-wrap-validation">
                      <label class="form-label-outside" for="form-1-name">Full name</label>
                      <input class="form-input" id="form-1-name" type="text" name="name" data-constraints="@Required"/>
                    </div>
                  </div>
				  <div class="cell-sm-6">
				    <!-- Select 2-->
				  	<label class="form-label-outside" for="form-1-name">Issue Type</label>
				      <select class="form-control select-filter" data-placeholder="All" data-minimum-results-for-search="Infinity" data-constraints="@Selected" name="issue_type">
				        <option label=" "> </option>
						<option value="scc" selected="">Account</option>
				        <option value="2scan">Scanner</option>
				        <option value="dash">Dashboard</option>
						<option value="oth">Other</option>
				      </select>
				  </div>
                  <div class="cell-sm-6">
                    <div class="form-wrap form-wrap-validation">
                      <label class="form-label-outside" for="form-1-email">E-mail</label>
                      <input class="form-input" id="form-1-email" type="email" name="email" data-constraints="@Email @Required"/>
                    </div>
                  </div>
                  <div class="cell-xs-12">
                    <div class="form-wrap form-wrap-validation">
                      <label class="form-label-outside" for="form-1-message">What is the problem?</label>
                      <textarea class="form-input" id="form-1-message" name="message" data-constraints="@Required"></textarea>
                    </div>
                  </div>
                  <div class="cell-xs-12 offset-custom-1">
                    <div class="form-button">
                      <button class="button button-secondary button-nina" type="submit">send message</button>
                    </div>
                  </div>
                </div>
              </form>
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