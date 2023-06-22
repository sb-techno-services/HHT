<?php include_once("connection.php");

 if($_SESSION['usrid'] !="") {

	 
	 if($cart->get_cart_count() > 0 ) {
		 	header("Location: LoginCheck.php?login=true"); 	exit();

	 } else {
		 	header("Location: dashboard.php"); 	exit();

	 }
	 				

 }
/* if($_SESSION['usrwebfe_id'] !="") {
	 				
	header("Location: view_cart.php"); 	exit();

 }*/

?>

<!DOCTYPE html>
<html lang="en">
<head>

  <!-- Basic Page Needs
================================================== -->
  <meta charset="utf-8">
  <title>Account Login</title>

  <!-- Mobile Specific Metas
================================================== -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Construction Html5 Template">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">

  <!-- Favicon
================================================== -->
  <link rel="icon" type="image/png" href="images/favicon.png">
    <?php include_once("google-analytics.php"); ?>

  <!-- CSS
================================================== -->
  <!-- Bootstrap -->
  <link rel="stylesheet" href="plugins/bootstrap/bootstrap.min.css">
  <!-- FontAwesome -->
  <link rel="stylesheet" href="plugins/fontawesome/css/all.min.css">
  <!-- Animation -->
  <link rel="stylesheet" href="plugins/animate-css/animate.css">
  <!-- slick Carousel -->
  <link rel="stylesheet" href="plugins/slick/slick.css">
  <link rel="stylesheet" href="plugins/slick/slick-theme.css">
  <!-- Colorbox -->
  <link rel="stylesheet" href="plugins/colorbox/colorbox.css">
  <!-- Template styles-->
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <div class="body-inner">

    <?php include_once("header.php"); ?>


<div id="banner-area" class="banner-area" style="background-image:url(images/banner/news.jpg)">
  <div class="banner-text">
    <div class="container">
        <div class="row">
          <div class="col-lg-12">
              <div class="banner-heading">
                <h1 class="banner-title">My Account</h1>
                <nav aria-label="breadcrumb" style="border:none;">
                    <ol class="breadcrumb justify-content-center">
                      <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                      <li class="breadcrumb-item">My Account</li>
                    </ol>
                </nav>
              </div>
          </div><!-- Col end -->
        </div><!-- Row end -->
    </div><!-- Container end -->
  </div><!-- Banner text end -->
</div>
<section class="content">

  <div class="container">

<?php if ($_SESSION['elmsg']<>"") { ?>
         <br><br> <strong style="color:#F00; font-size:24px"><?php echo $_SESSION['elmsg'];?></strong><br>

<?php } ?>
    <div class="row">
        <div class="col-lg-6">

          <div style="height:430px;" class="events_inner_main">
          	<div class="p-0 bg-transparent " id="headingTwo">
                <h2 class="mb-0">
                  <p style="color:#fff; background-color:#007bff; padding:5px 15px; font-weight:bold;" class="btn1 btn-block text-left">New Member</p>
                </h2>
                <p>Please click 'Proceed' and we'll guide you through the ordering process.</p><br>
                <form name="register" action="creat_an_account.php" id="register" method="post">
                        <p>Username / E-mail Address</p>
                        <input class="inp" id="email" type="email" name="email" maxlength="60" required><br><br>
                        <button style="width:150px;" class="btn btn-primary1">Proceed <img style="margin-left:15px; margin-top:-5px;" src="images/proceed.png" width="20" height="20" align="absmiddle"></button>
                </form>
            </div>
         </div>
        </div>

        <div class="col-lg-6">
       
		 <div class="events_inner_main">
          	<div class="p-0 bg-transparent " id="headingTwo">
                <h2 class="mb-0">
                  <p style="color:#fff; background-color:#fd6d03; padding:5px 15px; font-weight:bold;" class="btn1 btn-block text-left"> Existing Member</p>
                </h2>
                <p>Please sign in below to access your account.</p><br>
                <form name="register1" action="LoginCheck.php" id="" method="post">
                        <p>Username / E-mail Address</p>
                        <input class="inp" id="email" type="email" name="email" maxlength="60" required><br><br>
                        <p>Password</p>
                        <input class="inp" id="pwd" type="password" name="pwd" maxlength="60" required><br><br>
                        <button style="width:150px; float:left;" class="btn btn-primary">Login <img style="margin-left:15px; margin-top:-5px;" src="images/login.png" align="absmiddle"></button>
                        <div class="for_name"> <a href="#"><span class="directory">Forgot your password?</span></a></div>
                </form>
               
            </div>
         </div>
        </div>
    </div>
    
   
    
 </div>
</section>


<!--/ News end -->

    <?php include_once("footer.php"); ?>

  </div>
  </body>
  </html>