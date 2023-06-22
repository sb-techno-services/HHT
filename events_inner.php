<?php include_once("connection.php");

		
		 if($_GET['j_id']){
//echo "SELECT * FROM hht_events where ja_id = ".$_GET['j_id'];
		 $adv_details = mysqli_query($conn,"SELECT *,DATE_FORMAT(event_sdate, '%a, %M %e, %Y') as sdate,DATE_FORMAT(event_edate, '%a, %M %e, %Y') as edate FROM hht_events where ja_id = ".$_GET['j_id']);
		 $res_details = mysqli_fetch_assoc($adv_details);
			}
		?>
<!DOCTYPE html>
<html lang="en">
<head>

  <!-- Basic Page Needs
================================================== -->
  <meta charset="utf-8">
  <title><?php echo $res_details['event_title'];?> - Hanumanhindutemple.org</title>

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
                <h1 class="banner-title">Events</h1>
                <nav aria-label="breadcrumb" style="border:none;">
                    <ol class="breadcrumb justify-content-center">
                      <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                      <li class="breadcrumb-item">Events</li>
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
      <li class="breadcrumb-item">Events</li>
    </ol>
</nav>
</div>
<div class="mytitle_header">
	<div class="container"><h2>Events</h2></div>
</div>

<div class="container">
    <div class="row">
      <div class="col-12 col-lg-3 col-md-4 col-sm-4 col-xs-6 filter events">
       <div class="events_inner_main11">
       	<h4 style="margin:15px 0;">Event Schedule</h4>
       	<div class="events_cal">
        	<div class="left"><img src="images/clients/calen1.png" width="30" height="30"></div>

            <div class="right"> <p>Start Date</p> <h4> <?php echo $res_details['sdate'];?></h4></div>
         </div>
         <div class="events_cal">
        	<div class="left"><img src="images/clients/calen1.png" width="30" height="30"></div>
            <div class="right"> <p>End Date</p> <h4> <?php echo $res_details['edate'];?></h4></div>
         </div>
         <div class="events_cal">
        	<div class="left"><img src="images/clients/calen1.png" width="30" height="30"></div>
            <div class="right"> <p>Location</p> <h4> <?php echo $res_details['event_location'];?>,<br>
<?php echo $res_details['event_country'];?></h4></div>
         </div>
         <div class="events_cal">
    <?php /*?>     	<div class="left"><img src="images/clients/calen1.png" width="30" height="30"></div>
           <div class="right"> <p>More Details</p> <h4 style="font-size:14px; font-weight:normal; line-height:18px;"> Click below to sponsor for the event:</h4></div>
<?php */?>         </div>
         <div style="text-align:center;" class="call-to-action-btn">
        <?php /*?>    <a style="margin-top:20px;" class="btn btn-dark" href="sponsornow.php">Sponsor Now</a><?php */?></div>
       </div>
      </div>
      
      <div class="col-12 col-lg-6 col-md-4 col-sm-4 col-xs-6 filter festival">
      <div class="events_inner_main">
      		<div class="gurumid">
            	<div class="left"><img class="rounded-full" src="events_gallery/images/about_logo_sriswamiji.jpg"></div>
           		<div class="right"><h4 style="color:#fff;"><?php echo $res_details['event_title'];?></h4>
            <p><?php echo $res_details['event_des'];?></p>
            	</div>
            </div>
            
            <div class="gurumid_1">
                           <?php if($res_details['event_image'] !="") { ?>

            	<img src="../adm_hht9m8a4s2/uploads/<?=$res_details['event_image']?>"> 
                       <?php } ?>
           </div>
            <div class="gurumid_1">
             <?php if($res_details['event_image2'] !="") { ?>
            	<img src="../adm_hht9m8a4s2/uploads/<?=$res_details['event_image2']?>">
                 <?php } ?>            </div>
      </div>
      </div>
      
      <div class="col-12 col-lg-3 col-md-4 col-sm-4 col-xs-6 filter health">
      
      <div style="text-align:center; margin-bottom:15px; background-image: linear-gradient(to left,#99f6e4,#d9f99d);" class="events_inner_main">
			<br><img src="images/logo.png"><br> <br>
            <h4>Support Temple</h4> 
            <p>Donate towards General Donation!</p>  
            <div class="btndonate">Donate</div>     
       </div>
       
       <div style="text-align:center; margin-bottom:15px;" class="events_inner_main">
			<img class="rounded-full" src="events_gallery/images/about_logo_sriswamiji.jpg"><br>  
            <p>Founder & Visionary of Karya Siddhi Hanuman Temple</p>       
       </div>
       
       <div style="margin:0 0 15px 0;" class="events_inner_main">
       	<h4 style="margin:15px 0;">Event Links</h4>
       	<div class="events_cal">
        	<div style="padding-top:10px;" class="left"><img src="images/clients/calen1.png" width="30" height="30"></div>
            <div class="right"> <p>Hotels near Temple: </p> <h4> Hotels Info</h4></div>
            <div style="padding-top:0; padding-left:15px;" class="right1"> <a href="events_web.php"><img src="events_gallery/images/arrows_direction.png"></a></div>
         </div>
       </div>
       
       <div style="margin-top:0; margin-bottom:15px;" class="events_inner_main">
       	<h4 style="margin:15px 0; color:#fd6d03; border-bottom:1px solid #dedede;">HH Parama Pujya Sri Swamiji</h4>
       	<div style="border-bottom:none;" class="events_cal">
        	<p>HH Parama Pujya Sri Ganapathy Sachchidananda Swamiji is the Founder and Pontiﬀ of Avadhoota Datta Peetham of Sri Ganapathy Sachchidananda Ashrama in Mysuru, India. Sri Swamiji is renowned for His meditation music and is considered a divine guide who promotes ancient Vedic traditions and world peace.</p>
         </div>         
       </div>
       
       <?php /*?><div style="margin:0 0 15px 0;" class="events_inner_main">
       	<h4 style="margin:15px 0;">Sponsor Pujas</h4>
       	<div class="events_cal">
        	<div style="padding-top:10px;" class="left"><img src="images/clients/calen1.png" width="30" height="30"></div>
            <div class="right"> <p style="color:#000000;">Datta Gayatri Homa Devotees can personally perform the Homa </p></div>
            <div style="padding-top:0; padding-left:15px;" class="right1"> <a href="#"><img src="events_gallery/images/arrows_direction.png"></a></div>
         </div>
         <div class="events_cal">
        	<div style="padding-top:10px;" class="left"><img src="images/clients/calen1.png" width="30" height="30"></div>
            <div class="right"> <p style="color:#000000;">Datta Gayatri Homa Devotees can personally perform the Homa </p></div>
            <div style="padding-top:0; padding-left:15px;" class="right1"> <a href="#"><img src="events_gallery/images/arrows_direction.png"></a></div>
         </div>
         <div class="events_cal">
        	<div style="padding-top:10px;" class="left"><img src="images/clients/calen1.png" width="30" height="30"></div>
            <div class="right"> <p style="color:#000000;">Datta Gayatri Homa Devotees can personally perform the Homa </p></div>
            <div style="padding-top:0; padding-left:15px;" class="right1"> <a href="#"><img src="events_gallery/images/arrows_direction.png"></a></div>
         </div>
         <div class="events_cal">
        	<div style="padding-top:10px;" class="left"><img src="images/clients/calen1.png" width="30" height="30"></div>
            <div class="right"> <p style="color:#000000;">Datta Gayatri Homa Devotees can personally perform the Homa </p></div>
            <div style="padding-top:0; padding-left:15px;" class="right1"> <a href="#"><img src="events_gallery/images/arrows_direction.png"></a></div>
         </div>
       </div><?php */?>
      </div>
    </div>
  </div>

<!--/ News end -->
    <?php include_once("footer.php"); ?>


  </div>
  </body>
  </html>