<?php include_once("connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>

  <!-- Basic Page Needs
================================================== -->
  <meta charset="utf-8">
  <title>Calendar - Hanumanhindutemple.org</title>

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
<br>


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
    <div class="row">
      <div class="gallery col-lg-12 col-md-12 col-sm-12 col-xs-12">
<nav aria-label="breadcrumb" style="border:none;">
    <ol class="breadcrumb justify-content-center">
      <li class="breadcrumb-item"><a href="index.php">Home</a></li>
      <li class="breadcrumb-item">Calendar</li>
    </ol>
</nav>
<div class="call-to-action-text">
                <h3 style="color:#000;" class="action-title"><img src="images/clients/calen1.png"> Calendar <?php echo date('Y'); ?></h3>
                <p>Datta Peetham Calendar</p>
              </div>
        <div style="margin:0 0 40px 0;">
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
            
            <div class="calinp">
            <input type="text" name="search_text" id="search_text" placeholder="Type keyword to search..." class="form-control input-sm" value="">
        </div>
        <button style="margin-top:6px; font-size:12px;" type="button" id="" class="btn btn-primary"><i class="fa fa-search"></i> Search</button>
                                            
        </div>
      </div>
 
      <div class="col-12 col-lg-12 col-md-4 col-sm-4 col-xs-6 filter events">
       <div class="calendar_main">
       
            <div class="startcal_main">
            	<div class="startcal_head">Start Date</div>
                <div class="startcal_text">
                	<h2>06 <p>Mar 2022</p></h2> 
                    <p>Sunday</p>
                </div>
                <div class="startcal_text">
                	<h2>31 <p>Mar 2022</p></h2> 
                    <p>Thursday</p>
                </div>
             </div>
             
             <div class="endcal_main">
            	<div class="endcal_head">End Date</div>
                <div class="endcal_text">
                	<h2>17 <p>Mar 2022</p></h2> 
                    <p>Thursday</p>
                </div>
                <div class="endcal_text">
                	<h2>03 <p>Apr 2022</p></h2> 
                    <p>Sunday</p>
                </div>
             </div>
             
             <div class="evencal_main">
            	<div class="evencal_head">Event</div>
                <div class="evencal_text">
                	<p style="color:#fd6d03;"><a href="#">Sri Swamiji's 80th birthday</a></p>
                    <p>Sri Swamiji's 80th lunar birthday on Jyeshtha Shuddha Ekadashi is tomorrow June 10th. It is all about the three big ones</p>
                    <p class="sc_btn">Swamiji Calendar</p>
                </div>
                <div class="evencal_text">
                	<p style="color:#fd6d03;"><a href="#">Pujya Sri Swamiji in Hyderabad for Yugadi</a></p>
                    <p>Parama Pujya Sri Swamiji will grace SGS Ashrama, Dindigul, Hyderabad to celebrate SHUBHAKRUT Yugadi festival on 2nd April 2022</p>
                    <p class="sc_btn">Swamiji Calendar</p>
                    <p class="sc_btn1">Bala Swamiji Calendar</p>

                </div>
             </div>
             
             <div class="detaical_main">
            	<div class="detaical_head">&nbsp;</div>
                <div class="detaical_text">
                    <p class="details_btn"><a href="#">Details</a></p>
                </div>
                <div class="detaical_text">
                    <p class="details_btn"><a href="#">Details</a></p>
                </div>
             </div>
             
       </div>
      </div>
     
    </div>
  </div>

<!--/ News end -->

    <?php include_once("footer.php"); ?>

  </div>
  </body>
  </html>