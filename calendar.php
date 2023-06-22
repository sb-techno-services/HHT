<?php include_once("connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>

  <!-- Basic Page Needs
================================================== -->
  <meta charset="utf-8">
  <title>Events Calendar - Hanumanhindutemple.org</title>

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
      <li class="breadcrumb-item">Calendar</li>
    </ol>
</nav>
</div>
<div class="mytitle_header">
	<div class="container"><h2>Calendar</h2></div>
</div>

<div class="container">
    <div class="row">
      <div class="gallery col-lg-12 col-md-12 col-sm-12 col-xs-12">

<div class="call-to-action-text">
                <h3 style="color:#000;" class="action-title"><img src="images/clients/calen1.png"> Calendar <?php echo date('Y'); ?></h3>
                <p>Hanuman hindu temple Calendar</p>
              </div>
        <?php /*?><div style="margin:0 0 40px 0;">
            <select name="year" id="year" class="form-control input-sm calinp">
                <option value="2022">2022</option>
                <option value="2020">2020</option>
                <option value="2019">2019</option>
                <option value="2018">2018</option>
            </select>
            
            <select name="month" id="month" onChange="search(1)" class="form-control input-sm calinp">
                <option value="">All Months</option>
                <option value="1">January</option>
                <option value="2">February</option>
                <option value="3">March</option>
                <option value="4">April</option>
                <option value="5">May</option>
                <option value="6">June</option>
                <option value="7">July</option>
                <option value="8">August</option>
                <option value="9">September</option>
                <option value="10">October</option>
                <option value="11">November</option>
                <option value="12">December</option>
            </select>
            
           
        <button style="margin-top:6px; font-size:12px;" type="button" id="" class="btn btn-primary"><i class="fa fa-search"></i> Search</button>
                                            
        </div><?php */?>
      </div>
 
      <div class="col-12 col-lg-12 col-md-12 col-sm-4 col-xs-6 filter events">
       <div class="calendar_main">
       
<!--------calendar table start----->
<div class="scroll">
<div class="table-wrapper">

    <table class="fl-table">
        <thead>
        <tr>
            <th width="15%">Start Date</th>
            <th width="15%">End Date</th>
            <th width="65%">Event</th>
            <th width="5%">&nbsp;</th>
            </tr>
        </thead>
        <tbody>
         <?php
                $sql_purchase = mysqli_query($conn,"SELECT *,DATE_FORMAT(event_sdate, '%a, %M %e, %Y') as sdate,DATE_FORMAT(event_edate, '%a, %M %e, %Y') as edate,DATE_FORMAT(event_sdate, '%d') as sdate1,DATE_FORMAT(event_edate, '%d') as edate1,DATE_FORMAT(event_sdate, '%W') as sdate2,DATE_FORMAT(event_edate, '%W') as edate2 FROM hht_events where event_status=1 order by event_sdate DESC");	
			  	
					 while ($arrUsersRow = mysqli_fetch_array ($sql_purchase))
					{
						//$sql_updated_user = mysqli_query($conn,"SELECT * FROM  sai_users WHERE usr_id = ".$arrUsersRow['acc_updated']."");
						//$updated_user_details = mysqli_fetch_assoc($sql_updated_user);
															
			?>
        <tr>
            <td>
                <div class="startcal_text">
                    <h2><?php echo $arrUsersRow['sdate1'];?> <p> <?php echo $arrUsersRow['sdate'];?></p></h2> 
                    <p><?php echo $arrUsersRow['sdate2'];?></p>
                 </div>
             </td>
            <td>
                <div class="startcal_text">
                    <h2><?php echo $arrUsersRow['edate1'];?> <p><?php echo $arrUsersRow['edate'];?></p></h2>  
                    <p><?php echo $arrUsersRow['edate2'];?></p>
                 </div>
             </td>
            <td>
            	<div class="evencal_text">
                	<p style="color:#fd6d03;"><a href="event_<?=$arrUsersRow['ja_id']?>.html"><?php echo $arrUsersRow['event_title'];?></a></p>
                    <p><?php
echo substr($arrUsersRow['event_des'],0,200);?>...</p>
                    <p class="sc_btn">Swamiji Calendar</p>
                </div>
            </td>
            <td colspan="2"><p class="details_btn"><a href="event_<?=$arrUsersRow['ja_id']?>.html">Details</a></p></td>
         </tr>
              	<?php
            }
          	?>

        
        <tbody>
    </table>
    </div>
</div>
<!--------calendar table end------->
             
             
       </div>
      </div>
     
    </div>
  </div>

<!--/ News end -->

    <?php include_once("footer.php"); ?>

  </div>
  </body>
  </html>