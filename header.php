<?php //	include "cart.class.php";


	//$cart=new Cart();


?>


<!-- Header start -->


<header id="header" class="header-one">


  <div class="bg-white">


    <div class="container">


      <div class="logo-area">


          <div class="row align-items-center">


            <div class="logo col-lg-5 text-center text-lg-left mb-3 mb-md-5 mb-lg-0">


                <a class="d-block hologod" href="index.php"><img loading="lazy" src="images/logo.png" alt=""> </a> 


                  <a class="d-block" href="index.php"><img loading="lazy" src="images/logo_dycuk.png" alt=""> </a>


             </div>


  


            <div class="col-lg-7 header-right">


                <ul class="top-info-box">


                  <li>


                    <div class="info-box">


                      <div class="info-box-content">


                          <p class="info-box-title">Call Us</p>


                          <p class="info-box-subtitle"><img src="images/call.jpg"></p>


                      </div>


                    </div>


                  </li>


                  <li>


                    <div class="info-box">


                      <div class="info-box-content">


                          <p class="info-box-title">Email Us</p>


                          <p class="info-box-subtitle"><img src="images/email.jpg"></p>


                      </div>


                    </div>


                  </li>


                  <!--<li class="last">


                    <div class="info-box last">


                      <div class="info-box-content">


                          <p class="info-box-title">Global Certificate</p>


                          <p class="info-box-subtitle">ISO 9001:2022</p>


                      </div>


                    </div>


                  </li>-->


                                    


                  <li style="border-right:none; margin-right:5px;" class="header-get-a-quote"><a style="background-color:#fd6d03;"class="btn btn-primary" href="account_login.php">My Account</a></li>


                 <?php  if($_SESSION['usrwebfe_id'] !="") { ?>


                  <li style="padding-right:0;" class="header-get-a-quote"><a style="background-color:#FF0000;" class="btn btn-primary" href="logout.php">Logout</a></li>


                 <?php } 


				 


				   if($_SESSION['usrid']!="") { ?>


                  <li style="padding-right:0;" class="header-get-a-quote"><a style="background-color:#FF0000;" class="btn btn-primary" href="logout.php">Logout</a></li>


                 <?php } ?>


                </ul><!-- Ul end -->


                <?php  if($_SESSION['usrwebfe_id'] !="") { ?>


                <span style="float:right;">Welcome <strong><?php echo $_SESSION["usrweb_fname"]; ?></strong></span>


					 <?php } 


				 


				   if($_SESSION['usrid']!="") { ?>


                <span style="float:right;">Welcome <strong><?php echo $_SESSION["usrname"]; ?></strong></span>


                   


				  <?php } ?>  


            </div><!-- header right end -->


          </div><!-- logo area end -->


      </div><!-- Row end -->


    </div><!-- Container end -->


  </div>


  <div class="site-navigation">


  	<div class="container">


        <div class="row">


          <div class="col-lg-12">


              <nav class="navbar navbar-expand-lg navbar-dark p-0">


                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">


                    <span class="navbar-toggler-icon"></span>                </button>


                


                <div id="navbar-collapse" class="collapse navbar-collapse">


                    <ul class="nav navbar-nav mr-auto">


                      <li class="nav-item dropdown">


                          <a href="index.php" class="nav-link dropdown-toggle">Home </a></li>





                      <li class="nav-item dropdown active">


                          <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown"><a style="top:-6px;" href="about_us.php">About Us <i class="fa fa-angle-down"></i></a></a>


                          <ul class="dropdown-menu" role="menu">


                            <li><a href="inspirer.php">Inspirer</a></li>


                            <li><a href="the_charity_hanuman_temple_uk.php">The Charity Hanuman Temple UK</a></li>


                            <li><a href="hanuman_temple.php">Hanuman Temple</a></li>


                            <li><a href="privacy_policy.php">Privacy Policy</a></li>


                          </ul>


                      </li>


              


                      <li class="nav-item dropdown">


                          <a href="news.php" class="nav-link dropdown-toggle">News </a>                      </li>


              


                      <li class="nav-item dropdown active">


                          <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Events <i class="fa fa-angle-down"></i></a>


                          <ul class="dropdown-menu" role="menu">


                            


                            <li><a href="calendar.php">Calendar</a></li>


                            <li><a href="events_web.php">Events</a></li>


                          </ul>


                      </li>





                      <li class="nav-item dropdown">


                          <a href="pooja_services.php" class="nav-link dropdown-toggle">Poojas </a>


                      </li>


              		   <li class="nav-item"><a class="nav-link" href="donations.php">Donations</a></li>
                       
                       <li class="nav-item"><a class="nav-link" href="gallery.php">Gallery</a></li>


                      <li class="nav-item"><a class="nav-link" href="contact_us.php">Contact Us</a></li>


                      <li class="nav-item"><a class="nav-link" href="view_cart.php"><img src="images/cart_front.png" /> Cart (<?php echo $cart->get_cart_count();?>)</a></li>


                      


                    </ul>


                </div>


              </nav>


          </div>


          <!--/ Col end -->


        </div>


        <!--/ Row end -->





        <!-- Search end -->





        <!-- Site search end -->


    </div>


  </div>


</header>