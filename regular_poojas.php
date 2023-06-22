<?php include_once("connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>

  <!-- Basic Page Needs
================================================== -->
  <meta charset="utf-8">
  <title>Pooja Services - Regular Poojas</title>

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




<section class="content">
  <div class="container">
    <div class="row">
        <div class="col-12 col-lg-12 col-md-12 col-sm-12 col-xs-6 filter">
<nav aria-label="breadcrumb" style="border:none;">
    <ol class="breadcrumb justify-content-center">
      <li class="breadcrumb-item"><a href="index.php">Home</a></li>
      <li class="breadcrumb-item">Pooja Services - Regular Poojas</li>
    </ol>
</nav>

		<div class="pooja-services_main">
           <?php
                $sql_purchase = mysqli_query($conn,"SELECT *,DATE_FORMAT(pooja_sdate, '%a, %M %e, %Y') as sdate,DATE_FORMAT(pooja_edate, '%a, %M %e, %Y') as edate FROM hht_poojas where pooja_category='Regular Poojas' AND pooja_status=1 order by ja_id DESC");	
			  	
					 while ($arrUsersRow = mysqli_fetch_array ($sql_purchase))
					{
						//$sql_updated_user = mysqli_query($conn,"SELECT * FROM  sai_users WHERE usr_id = ".$arrUsersRow['acc_updated']."");
						//$updated_user_details = mysqli_fetch_assoc($sql_updated_user);
															
			?>
          	<div class="pooja-services">
              <div class="left_img">
              <?php 
			  
			  if($arrUsersRow['pooja_image']=="") {?>
              <img src="images/annual_pooja.jpg">
              <?php } else { ?>
              <img src="../adm_hht9m8a4s2/uploads/<?=$arrUsersRow['pooja_image']?>">
              <?php } ?>
              </div>
         	  <div class="right_content">
                <div class="p-0 bg-transparent " id="headingTwo">
                    <h4 class="pooja_title"><?php echo $arrUsersRow['pooja_title'];?></h4><br>
                    <p><?php echo $arrUsersRow['pooja_desc'];?></p>
                    <div class="pooja_cal">
                        <p>Pooja Timings: <span style="font-weight:bold;"><?php echo $arrUsersRow['pooja_time'];?></span><br>
                        <img style="margin-right:5px;" src="images/clients/calen1.png" width="20" height="20"> <span class="pooja_link"><a href="pooja_details_<?=$arrUsersRow['ja_id']?>.html"><strong><?php echo $arrUsersRow['sdate'];?> - <?php echo $arrUsersRow['edate'];?></strong></a></span><br>
                        Seva closes by: <span style="color:#FF0000;"><strong><?php echo $arrUsersRow['pooja_cut_off'];?></strong></span></p>
                    </div>    
                    <a class="btn btn-primary" href="pooja_details_<?=$arrUsersRow['ja_id']?>.html">Sponsor</a>
                    <a style="margin-left:15px;" class="btn btn-primary" href="pooja_details_<?=$arrUsersRow['ja_id']?>.html">Details</a>
                </div>
           </div>
            </div>
            <?php
            }
          	?>
            
            
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