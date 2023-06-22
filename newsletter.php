<?php include_once("connection.php");


if($_REQUEST['save'] == "Sign Up"  )
{
	//	echo $number = count($_POST["name"]);
			 $qry_add = "INSERT INTO hht_newsletter SET 	 e_status = '1',
												email = '".addslashes(trim($_POST['emailaddress']))."',	
												mobile = 'NA',	
													
											 ipaddr = '".$_SERVER['SERVER_ADDR']."',
											   e_date = '".date('Y-m-d')."'"; 
								 mysqli_query($conn, $qry_add);
											   
											   $message == true;
			 if($message == true){
				$_SESSION['msgu'] = "Thank You for Subscribing to News Letter...";
			 }


	

	
}
	
?>
<!DOCTYPE html>
<html lang="en">
<head>

  <!-- Basic Page Needs
================================================== -->
  <meta charset="utf-8">
  <title>Thank You for Subscribing to News Letter...</title>

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
.thbtn {
  	font-family: Verdana, Geneva, sans-serif;
    font-size: 20px;
    color: #fff;
    padding: 15px;
    background-color: #1486e7;
    margin: auto;
    text-align: center;
    width: 350px;
    font-weight: bold;
}
.thbtn a {
    color: #fff;
	text-decoration:none;
}
.thbtn a:hover {
    color: #fff;
	text-decoration:none;
}

@media screen and (max-width: 480px) {
.thbtn {
    font-size: 15px;
    padding: 10px;
    width: 100%;
}

}


@media only screen and (min-width: 481px) and (max-width: 768px) {
.thbtn {
	width: 75%;
}

}

  </style>
</head>
<body>
  <div class="body-inner">

    <?php include_once("header.php"); ?>




<section class="content">
  <div class="container">
    <div class="row">
        <div class="col-lg-12">
		 <div class="login_main">
          	<div class="p-0 bg-transparent " id="headingTwo">

<h1 class="sucesstext"><strong>Thank You for Subscribing to News Letter...</strong></h1><br><br>
<br>
<br>


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