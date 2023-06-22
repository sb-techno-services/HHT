<?php include_once("connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>

  <!-- Basic Page Needs
================================================== -->
  <meta charset="utf-8">
  <title>Donation</title>

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
  
<style>
  
.thankh2 {
	text-align: center;
    font-size: 40px;
    color: #000;
    font-weight: bold;
	margin:30px 0;
}
.trv {
	width:100%;
	margin:auto;
}
.trv p{
	margin-top: 0;
    margin-bottom: 1rem;
    text-align: center;
    line-height: 20px;
    font-size: 20px;
}
.trv img {
	max-width:100%;
}
@media screen and (max-width: 480px) {

.thankh2 {
 margin: 0 0;
 font-size:19px;
}

.trv p {
    font-size: 14px;
}


}

</style>
  
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
                <h1 class="banner-title">Donation</h1>
                <nav aria-label="breadcrumb" style="border:none;">
                    <ol class="breadcrumb justify-content-center">
                      <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                      <li class="breadcrumb-item">Donation</li>
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
    <div class="row">
        <div class="col-lg-12">
          
          <h2 class="thankh2">Thank you for your Donation.</h2><br>
                  
                  <div class="trv"><p><strong>Order Reference No :  1234</strong><br><br>
                 Your transaction has been completed. Please check your email for Order details.<br><br><br>
                 <strong>Note:</strong> Please check your <span style="font-size:15px; padding: 0; text-align: font-weight:bold;"><img src="/images/spam.png" alt="" width="20" height="19" border="0" align="absmiddle"></span> Junk or Spam box if you do not receive the order confirmation email and kindly move to Inbox.<br>
                 If you need any further assistance with your order, please call us on <strong>020 123123123</strong> or email us to <strong>info@hanumanhindutemple.org</strong><br><br><br>
                  <img src="/images/trv.png" align="absmiddle"></p></div>
        </div>
    </div>
  </div>
</section>


    <?php include_once("footer.php"); ?>

  </div>
  </body>
  </html>