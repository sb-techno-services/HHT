<?php include_once("connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>

  <!-- Basic Page Needs
================================================== -->
  <meta charset="utf-8">
  <title>Events</title>

  <!-- Mobile Specific Metas
================================================== -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Construction Html5 Template">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">

  <!-- Favicon
================================================== -->
  <link rel="icon" type="image/png" href="images/favicon.png">

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

<!-- Header start -->
<header id="header" class="header-one">
  <div class="bg-white">
    <div class="container">
      <div class="logo-area">
          <div class="row align-items-center">
            <div class="logo col-lg-3 text-center text-lg-left mb-3 mb-md-5 mb-lg-0">
                <a class="d-block" href="index.html">
                  <img loading="lazy" src="images/logo.png" alt=""> </a> </div><!-- logo end -->
  
            <div class="col-lg-9 header-right">
                <ul class="top-info-box">
                  <li>
                    <div class="info-box">
                      <div class="info-box-content">
                          <p class="info-box-title">Call Us</p>
                          <p class="info-box-subtitle"><a href="tel:(+9) 847-291-4353">(+9) 000-111-1234</a></p>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="info-box">
                      <div class="info-box-content">
                          <p class="info-box-title">Email Us</p>
                          <p class="info-box-subtitle"><a href="mailto:office@hanumanhindutemple.org">office@hanumanhindutemple.org</a></p>
                      </div>
                    </div>
                  </li>
                  <li class="last">
                    <div class="info-box last">
                      <div class="info-box-content">
                          <p class="info-box-title">Global Certificate</p>
                          <p class="info-box-subtitle">ISO 9001:2022</p>
                      </div>
                    </div>
                  </li>
                  <li class="header-get-a-quote"><a class="btn btn-primary" href="my_account.html">My Account</a></li>
                </ul><!-- Ul end -->
            </div><!-- header right end -->
          </div><!-- logo area end -->
      </div><!-- Row end -->
    </div><!-- Container end -->
  </div>
  <div class="site-navigation">
  	<div class="container">
        <div class="row">
          <div class="col-lg-12">
              <nav class="navbar navbar-expand-lg navbar-dark p-0">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>                </button>
                
                <div id="navbar-collapse" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav mr-auto">
                      <li class="nav-item dropdown">
                          <a href="index.html" class="nav-link dropdown-toggle">Home </a></li>

                      <li class="nav-item dropdown">
                          <a href="about_us.html" class="nav-link dropdown-toggle">About Us </i></a>                      </li>
              
                      <li class="nav-item dropdown">
                          <a href="news.html" class="nav-link dropdown-toggle">News </a>                      </li>
              
                      <li class="nav-item dropdown active">
                          <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Events <i class="fa fa-angle-down"></i></a>
                          <ul class="dropdown-menu" role="menu">
                            
                            <li><a href="#">Calendar</a></li>
                            <li><a href="events.html">Events</a></li>
                          </ul>
                      </li>

                      <li class="nav-item dropdown">
                          <a href="poojas.html" class="nav-link dropdown-toggle">Poojas </a>
                      </li>
              		   <li class="nav-item"><a class="nav-link" href="#">Donations</a></li>
                      <li class="nav-item"><a class="nav-link" href="#">Contact Us</a></li>
                    </ul>
                </div>
              </nav>
          </div>
          <!--/ Col end -->
        </div>
        <!--/ Row end -->

        <div class="nav-search">
          <span id="search"><i class="fa fa-search"></i></span>        </div><!-- Search end -->

        <div class="search-block" style="display: none;">
          <label for="search-field" class="w-100 mb-0">
            <input type="text" class="form-control" id="search-field" placeholder="Type what you want and enter">
          </label>
          <span class="search-close">&times;</span>        </div><!-- Site search end -->
    </div>
  </div>
</header>

<div id="banner-area" class="banner-area" style="background-image:url(images/banner/news.jpg)">
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
                $sql_purchase = mysqli_query($conn,"SELECT * FROM hht_events order by ja_id DESC");	
			  	
					 while ($arrUsersRow = mysqli_fetch_array ($sql_purchase))
					{
						//$sql_updated_user = mysqli_query($conn,"SELECT * FROM  sai_users WHERE usr_id = ".$arrUsersRow['acc_updated']."");
						//$updated_user_details = mysqli_fetch_assoc($sql_updated_user);
															
			?>
      <div class="col-12 col-lg-3 col-md-4 col-sm-4 col-xs-6 filter events">
       <div class="events_main">
       <p class="eventsimg"><a href="events_inner.html"><img src="../adm_hht9m8a4s2/uploads/<?=$arrUsersRow['event_image']?>"></a></p>
       	<p class="events_smtext"><?=$arrUsersRow['event_type']?></p>
        <p class="quote-author"><?=$arrUsersRow['event_title']?></p>
        <p class="events_cal"><img style="margin-right:10px;" src="images/clients/calen1.png" width="20" height="20"> <?php echo date('d/m/Y',strtotime($arrUsersRow['event_sdate']));?></p>
        <p class="events_more">More Info <a href="events_inner.html"><img style="margin-left:10px;" src="events_gallery/images/arrows_direction.png"></a></p>
       </div>
      </div>
     	<?php
            }
          	?>
      
    </div>
  </div>

<!--/ News end -->

  <footer id="footer" class="footer bg-overlay">
    <div class="footer-main">
      <div class="container">
        <div class="row justify-content-between">
          <div class="col-lg-4 col-md-6 footer-widget footer-about">
            <h3 class="widget-title">About Us</h3>
            <img loading="lazy" width="200px" class="footer-logo" src="images/footer-logo.png" alt="Constra">
            <p>Sri Ganapathy Sachchidananda Swamiji (Sri Swamiji) is the founder and Life President of the charity, (UK) (Sri DYC UK) which operates under an appointed Board of Trustees.</p>
            <div class="footer-social">
              <ul>
                <li><a href="https://facebook.com/themefisher" aria-label="Facebook"><i
                      class="fab fa-facebook-f"></i></a></li>
                <li><a href="https://twitter.com/themefisher" aria-label="Twitter"><i class="fab fa-twitter"></i></a>                </li>
                <li><a href="https://instagram.com/themefisher" aria-label="Instagram"><i
                      class="fab fa-instagram"></i></a></li>
                <li><a href="https://github.com/themefisher" aria-label="Github"><i class="fab fa-github"></i></a></li>
              </ul>
            </div><!-- Footer social end -->
          </div><!-- Col end -->

          <div class="col-lg-4 col-md-6 footer-widget mt-5 mt-md-0">
            <h3 class="widget-title">Temple Opening Times</h3>
            <div class="working-hours">
              <br> Monday to Friday Opening Hours <span class="text-right"> </span>
              <br> Morning: <span class="text-right">10:00am - 12:00pm</span>
              <br> Evening: <span class="text-right">6:00pm - 8:00pm</span> 
              
              <br><br> Saturday & Sunday Opening Hours <span class="text-right"> </span>
              <br> Morning: <span class="text-right">10:00am - 12:30pm</span>
              <br> Evening: <span class="text-right">4:00pm - 8:00pm</span>           </div>
          </div><!-- Col end -->

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0 footer-widget">
            <h3 class="widget-title">Services</h3>
            <ul class="list-arrow">
              <li><a href="news.html">News </a></li>
              <li><a href="events.html">Events</a></li>
              <li><a href="#">Calendar</a></li>
              <li><a href="poojas.html">Poojas</a></li>
              <li><a href="#">Donations</a></li>
            </ul>
          </div><!-- Col end -->
        </div><!-- Row end -->
      </div><!-- Container end -->
    </div><!-- Footer main end -->

    <div class="copyright">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-6">
            <div class="copyright-info text-center text-md-left">
              <span>&copy; 2022 Hanuman Hindu Temple. All Rights Reserved</span>            </div>
          </div>
        </div>

        <div id="back-to-top" data-spy="affix" data-offset-top="10" class="back-to-top position-fixed">
          <button class="btn btn-primary" title="Back to Top">
            <i class="fa fa-angle-double-up"></i>          </button>
        </div>
      </div><!-- Container end -->
    </div><!-- Copyright end -->
  </footer><!-- Footer end -->

<script src="events_gallery/js/glightbox.min.js"></script>
  <script src="events_gallery/js/index.js"></script>
  
  <!-- Javascript Files
  ================================================== -->

  <!-- initialize jQuery Library -->
  <script src="plugins/jQuery/jquery.min.js"></script>
  <!-- Bootstrap jQuery -->
  <script src="plugins/bootstrap/bootstrap.min.js" defer></script>
  <!-- Slick Carousel -->
  <script src="plugins/slick/slick.min.js"></script>
  <script src="plugins/slick/slick-animation.min.js"></script>
  <!-- Color box -->
  <script src="plugins/colorbox/jquery.colorbox.js"></script>
  <!-- shuffle -->
  <script src="plugins/shuffle/shuffle.min.js" defer></script>


  <!-- Google Map API Key-->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU" defer></script>
  <!-- Google Map Plugin-->
  <script src="plugins/google-map/map.js" defer></script>

  <script src="js/script.js"></script>
  </div>
  </body>
  </html>