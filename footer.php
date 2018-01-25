      <footer class="section page-footer page-footer-default text-left bg-gray-lighter">
        <div class="shell-wide">
          <div class="range range-50 range-xs-center">
            <div class="cell-sm-6 cell-lg-2">
              <h6>Quick links</h6>
              <ul class="list-marked list-marked-primary"> 
                <li><a href="about-us.php">About Us</a></li>
                <li><a href="support-home.php">Support</a></li>
                <li><a href="get-deepwatch.php">Get DeepWatch</a></li>
				<li><a href="portal.ssai.tech">Portal</a></li>
				
				<?php
				
					echo "<li>";
					// Session Issue need to fix.
				
					if(!isset($_SESSION['user']))
					{
				
						echo "<a href='login.php'>Account";
				
					}
					else
					{
						
						echo "<a href='user-account.php'>". $_SESSION['user'];
						
					}
				
					//echo "<a href='user-account.php'>Account";
					echo "</a>";
					echo "</li>";
					
				?>
              </ul>
            </div>
			<div class="cell-sm-6 cell-lg-2">
              <h6>Policies</h6>
              <ul class="list-marked list-marked-primary"> 
                <li><a href="C:\xampp\htdocs\SSAI Website\docs\private_policy.pdf">Privacy</a></li>
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