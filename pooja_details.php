<?php include_once("connection.php");

 if($_GET['j_id']){
//echo "SELECT * FROM hht_events where ja_id = ".$_GET['j_id'];
		 $adv_details = mysqli_query($conn,"SELECT *,DATE_FORMAT(pooja_sdate, '%a, %M %e, %Y') as sdate,DATE_FORMAT(pooja_edate, '%a, %M %e, %Y') as edate FROM hht_poojas where ja_id = ".$_GET['j_id']);
		 $res_details = mysqli_fetch_assoc($adv_details);
			}
?>
<!DOCTYPE html>
<html lang="en">
<head>

  <!-- Basic Page Needs
================================================== -->
  <meta charset="utf-8">
  <title><?php echo $res_details['pooja_title'];?>- Hanumanhindutemple.org</title>

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


<?php /*?><div id="banner-area" class="banner-area" style="background-image:url(images/banner/news.jpg)">
  <div class="banner-text">
    <div class="container">
        <div class="row">
          <div class="col-lg-12">
              <div class="banner-heading">
                <h1 class="banner-title">Guru Purnima Mahotsav</h1>
                <nav aria-label="breadcrumb" style="border:none;">
                    <ol class="breadcrumb justify-content-center">
                      <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                      <li class="breadcrumb-item">Guru Purnima Mahotsav</li>
                    </ol>
                </nav>
              </div>
          </div><!-- Col end -->
        </div><!-- Row end -->
    </div><!-- Container end -->
  </div><!-- Banner text end -->
</div><?php */?>
<div class="container">
 <nav aria-label="breadcrumb" style="border:none;">
    <ol class="breadcrumb justify-content-center">
      <li class="breadcrumb-item"><a href="index.php">Home</a></li>
      <li class="breadcrumb-item">Pooja Details</li>
    </ol>
</nav>
</div>
<div class="mytitle_header">
	<div class="container"><h2>Pooja Details</h2></div>
</div>

<div class="container">
    <div class="row">
      <div class="col-12 col-lg-8 col-md-12 col-sm-12 col-xs-6 filter festival">

      <div style="margin-bottom:0; border-radius: 5px 5px 0 0;" class="events_inner_main">
      		<div class="gurumid_details">
            	<div class="left"> <?php 
			  
			  if($res_details['pooja_image']=="") {?>
              <img src="images/annual_pooja.jpg">
              <?php } else { ?>
              <img src="../adm_hht9m8a4s2/uploads/<?=$res_details['pooja_image']?>" width="50%">
              <?php } ?></div>
           		<div class="right"><h4 style="color:#000; border-bottom:1px solid #dedede; padding:0 0 20px 0;"><?php echo $res_details['pooja_title'];?></h4>
            <p><strong style="font-size:16px; color:#000;">Pooja Cut off time : </strong>
Pooja will be closed by <?php echo $res_details['pooja_cut_off'];?>  (whenever available)<br>
<br>
<strong style="font-size:16px; color:#000;">Days : </strong><?php echo $res_details['pooja_freq'];?><br>
<br>
<strong style="font-size:16px; color:#000;">Valid Dates : </strong><?php echo $res_details['sdate'];?> - <?php echo $res_details['edate'];?>
<br>
<br>
<strong style="font-size:16px; color:#000;">Pooja Timings : </strong><?php echo $res_details['pooja_time'];?>

</p>
            <div style="width:30%;" class="left">Sponscrship End Date:<br><br>
            	
            </div>
            <div class="right">
            	<select id="" name="">
                    <option value="<?php echo $res_details['edate'];?>  : £<?php echo $res_details['price'];?>"><?php echo $res_details['edate'];?>  : £<?php echo $res_details['price'];?></option>
                </select><br>
                <a style="margin-top:7px;" class="btn btn-primary" href="view_details.php?id=<?php echo $res_details["ja_id"]; ?>">ADD TO CART</a><br><br>
                </div>
            	</div>
            </div>
      </div>
      <div style="border-radius: 0 0 5px 5px;" class="events_inner_main">
      <div class="description">Description</div>
    <p><?php echo $res_details['pooja_des'];?>
      </p>
      </div>
      </div>
      
      <div class="col-12 col-lg-4 col-md-12 col-sm-12 col-xs-6 filter health">
       
       <div class="events_inner_main">
       	<h4 style="margin:15px 0;">POPULAR POOJAS</h4>
                 <?php
                $sql_purchase = mysqli_query($conn,"SELECT * FROM hht_poojas WHERE category = 'poojas' AND pooja_status=1 AND ja_id <> ".$_GET['j_id']." order by ja_id DESC");	
			  	
					 while ($arrUsersRow = mysqli_fetch_array ($sql_purchase))
					{
						//$sql_updated_user = mysqli_query($conn,"SELECT * FROM  sai_users WHERE usr_id = ".$arrUsersRow['acc_updated']."");
						//$updated_user_details = mysqli_fetch_assoc($sql_updated_user);
															
			?>

       	<div class="events_cal">
        	<div style="padding-top:5px;" class="left"><img src="events_gallery/images/categories_img2.jpg" width="50" height="50"></div>
            <div class="right"> <p style="color:#999;"><a href="pooja_details_<?=$arrUsersRow['ja_id']?>.html"><?php echo $arrUsersRow['pooja_title'];?></a></p> <p> £<?php echo $arrUsersRow['price'];?></div>
         </div>
         
        <?php
            }
          	?>
       </div>
      </div>
    </div>
  </div>

<!--/ News end -->

    <?php include_once("footer.php"); ?>

  </div>
  </body>
  </html>