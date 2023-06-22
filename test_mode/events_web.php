<?php include_once("connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>

  <!-- Basic Page Needs
================================================== -->
  <meta charset="utf-8">
  <title>Events - Hanumanhindutemple.org</title>

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
      <div class="gallery col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div style="margin:0 0 40px 0; border:1px solid #dec4b0;" class="text-center">
          <button class="btn btn-default filter-button active" id="all" onClick="call(this.id)">All</button>
          <button class="btn btn-default filter-button" id="events" onClick="call(this.id)">Events</button>
          <button class="btn btn-default filter-button" id="festival" onClick="call(this.id)">Festival</button>
          <button class="btn btn-default filter-button" id="health" onClick="call(this.id)">Health</button>
        </div>
      </div>
 <?php
                $sql_purchase = mysqli_query($conn,"SELECT * FROM hht_events where event_status=1 order by ja_id DESC");	
			  	
					 while ($arrUsersRow = mysqli_fetch_array ($sql_purchase))
					{
						//$sql_updated_user = mysqli_query($conn,"SELECT * FROM  sai_users WHERE usr_id = ".$arrUsersRow['acc_updated']."");
						//$updated_user_details = mysqli_fetch_assoc($sql_updated_user);
															
			?>
      <div class="col-12 col-lg-3 col-md-4 col-sm-4 col-xs-6 filter events">
       <div class="events_main">
       <p class="eventsimg">
       <a href="event_<?=$arrUsersRow['ja_id']?>.html">
               <?php if($arrUsersRow['event_image'] !="") { ?>

       <img src="../test_mode/adm_hht9m8a4s2/uploads/<?=$arrUsersRow['event_image']?>">
       <?php } else { ?> 
              <img src="images/annual_pooja.jpg">

       <?php } ?>
       </a></p>
       	<p class="events_smtext"><?=$arrUsersRow['event_type']?></p>
        <p class="quote-author"><?=$arrUsersRow['event_title']?></p>
        <p class="events_cal"><img style="margin-right:10px;" src="images/clients/calen1.png" width="20" height="20"> <?php echo date('d/m/Y',strtotime($arrUsersRow['event_sdate']));?></p>
        <p class="events_more">More Info <a href="event_<?=$arrUsersRow['ja_id']?>.html"><img style="margin-left:10px;" src="events_gallery/images/arrows_direction.png"></a></p>
       </div>
      </div>
     	<?php
            }
          	?>
      
    </div>
  </div>

<!--/ News end -->

    <?php include_once("footer.php"); ?>

  </div>
  </body>
  </html>