<?php include_once("connection.php");

		
		 if($_GET['j_id']){
//echo "SELECT * FROM hht_events where ja_id = ".$_GET['j_id'];
		 $adv_details = mysqli_query($conn,"SELECT *,DATE_FORMAT(news_date, '%a, %M %e, %Y') as ndate FROM hht_news where ja_id = ".$_GET['j_id']);
		 $res_details = mysqli_fetch_assoc($adv_details);
			}
		?>
<!DOCTYPE html>
<html lang="en">
<head>

  <!-- Basic Page Needs
================================================== -->
  <meta charset="utf-8">
  <title><?php echo $res_details['news_title'];?>- Hanumanhindutemple.org</title>

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
      <li class="breadcrumb-item">News</li>
    </ol>
</nav>
</div>
<div class="mytitle_header">
	<div class="container"><h2>News</h2></div>
</div>

<section class="content">
  <div class="container">
    <div class="row">
        <div class="col-lg-12">
          <h3 class="service-box-title"><?php echo $res_details['news_title'];?></h3><br>
          <p><?php echo $res_details['news_des'];?> </p><br><br>
        </div>
    </div>
    
    <div class="row">
        <div class="col-lg-4"></div>
        <div class="col-lg-8">
        <?php if($res_details['news_image'] !="") { ?>
        <img src="../adm_hht9m8a4s2/uploads/<?=$res_details['news_image']?>"> 
        <?php } ?> </div>
     </div>
  </div>
</section>


    <?php include_once("footer.php"); ?>

  </div>
  </body>
  </html>