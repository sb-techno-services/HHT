<?php include_once("connection.php");
		
	



	
	

?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>:: <?php echo $DOMAIN_NAME_PAGE;?> - Payment page::</title>
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
  <link rel="stylesheet" href="css/style.css"><!--[if IE]>
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
		
</head>
<body>
<?php include_once("header.php"); ?>
<div class="clear"></div>
<div id="wrapbg">
  <div id="wrapper">
    <?php //include_once("header_nav.php"); ?>
    <div class="clear"></div>
    <section>
      <div id="bar">
        <div class="clear"></div>
      </div>
      <article>
		<?php //include "navbar.php"; ?>
        <div class='container mt-5'>
			<h2 class='text-muted mb-4' style="text-align:center"><br />
<br />
<br />
Payment Page Coming Soon! .....</h2>
			<div class='row'>
				<div class='col-md-12'>
						<div class='alert alert-success'>
                        </div>
					</div>
					
				</div>
			</div>
		</div>
        <br /><br /><br /><br /><br />
      </article>
      <?php include_once("footer.php"); ?>
       <?php //include_once("footer.php"); 
	  $cart->destroy();
	  $_SESSION['usrwebfe_id']="";
	  $_SESSION['usrwebfe_name']="";
		$_SESSION["usrid"] = "";
		$_SESSION["usrname"] = "";

	  ?>
      <div class="clear"></div>
    </section>
    <div class="clear"></div>
  </div>
  <!-- wrapper ends here -->
  <div class="clear"></div>
</div>
<!-- bgwrapper ends here -->
</body>
</html>
