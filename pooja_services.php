<?php include_once("connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>

  <!-- Basic Page Needs
================================================== -->
  <meta charset="utf-8">
  <title>POOJA SERVICES - Hanuman Hindu Temple</title>

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

<div class="container">
 <nav aria-label="breadcrumb" style="border:none;">
    <ol class="breadcrumb justify-content-center">
      <li class="breadcrumb-item"><a href="index.php">Home</a></li>
      <li class="breadcrumb-item">POOJA SERVICES</li>
    </ol>
</nav>
</div>
<div class="mytitle_header">
	<div class="container"><h2>POOJA SERVICES</h2></div>
</div>

<section class="content">
  <div class="container">
    <div class="row">
		<div class="col-12 col-lg-1 col-md-12 col-sm-4 col-xs-6 filter"></div>
          <div style="border-right:1px solid #ccc;" class="col-12 col-lg-5 col-md-12 col-sm-12 col-xs-6 filter">
          <div class="events_inner_main">
          <div class="p-0 bg-transparent" id="headingTwo">
                <h2 class="mb-0">
                  <p class="btn btn-block text-center rpn"> <a href="regular_poojas.php">Regular Poojas </a></p>
                </h2>
                
             <div class="right_content">
                <div class="p-0 bg-transparent " id="headingTwo">
                <a href="regular_poojas.php"><img src="images/poojaimg_left.jpg"></a><br><br>
                    	<a style="float:right; text-transform:none;" class="btn btn-primary" href="regular_poojas.php">View More...</a>
                		</strong>
                    </div>
               </div>
           
            </div>
            </div>
        </div>

  <div class="col-12 col-lg-5 col-md-12 col-sm-12 col-xs-6 filter">
  	<div style="float:right;" class="events_inner_main">
          <div class="p-0 bg-transparent" id="headingTwo">
                <h2 class="mb-0">
                  <p class="btn btn-block text-center rpn"> <a href="special_poojas.php">Special Poojas</a> </p>
                </h2>
			<div class="right_content">
                <div class="p-0 bg-transparent " id="headingTwo">
               <a href="special_poojas.php"> <img src="images/poojaimg.jpg"></a><br><br>
                    	<a style="float:right; text-transform:none;" class="btn btn-primary" href="special_poojas.php">View More...</a>
                		</strong>
                    </div>
               </div>
            </div>
            </div>
        </div>
        <div class="col-12 col-lg-1 col-md-12 col-sm-4 col-xs-6 filter"></div>
    </div>
       
     </div>
</section>


<!--/ News end -->

    <?php include_once("footer.php"); ?>

  </div>
  </body>
  </html>