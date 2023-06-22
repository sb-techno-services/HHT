<?php include_once("connection.php");

?>

<!DOCTYPE html>

<html lang="en">

<head>



  <!-- Basic Page Needs

================================================== -->

  <meta charset="utf-8">

  <title>Welcome to Hanuman Hindu Temple...</title>



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





<div class="banner-carousel banner-carousel-1 mb-0">

  <div class="banner-carousel-item" style="background-image:url(images/slider-main/bg1.jpg)">

  </div>



  <div class="banner-carousel-item" style="background-image:url(images/slider-main/bg2.jpg)">

  </div>



  <div class="banner-carousel-item" style="background-image:url(images/slider-main/bg3.jpg)">

  </div>
  
  <div class="banner-carousel-item" style="background-image:url(images/slider-main/bg4.jpg)">

  </div>

</div>

 <?php

 $datenow=date('Y-m-d');

                    $sql_events1 = mysqli_query($conn,"SELECT *,DATE_FORMAT(event_sdate	, '%a, %M %e, %Y') as sdate FROM hht_events where event_status=1 AND event_sdate >='".$datenow."' order by event_sdate ASC LIMIT 0,1");	

			  	

					$arrEvents1 = mysqli_fetch_array ($sql_events1);

					

					    $sql_events1a = mysqli_query($conn,"SELECT * FROM hht_events where event_status=1 AND event_sdate >='".$datenow."' order by event_sdate ASC LIMIT 1,1");	

			  	

					$arrEvents1a = mysqli_fetch_array ($sql_events1a);

					

					    $sql_events1b = mysqli_query($conn,"SELECT * FROM hht_events where event_status=1 AND event_sdate >='".$datenow."' order by event_sdate ASC LIMIT 2,1");	

			  	

					$arrEvents1b = mysqli_fetch_array ($sql_events1b);



															

			?>

<section class="call-to-action-box no-padding">

  <div class="container">

    <div class="action-style-box">

        <div class="row align-items-center">

          <div class="col-md-5 text-center text-md-left">

              <div class="call-to-action-text">

                <h3 style="color:#fff;" class="action-title"><img src="images/clients/calen1.png"> UPCOMING EVENT</h3>

              </div>

          </div>

          

          <div class="col-md-3 text-center text-md-left">

              <div class="call-to-action-text">

                <span class="homear"> <a href="event_<?=$arrEvents1['ja_id']?>.html"><?=$arrEvents1['event_title']?>,</a> <br> <span style="font-style:italic; font-size:14px;"><?php echo $arrEvents1['sdate'];?></span></span>

              </div>

          </div>

          

          <div class="col-md-4 text-center text-md-right mt-3 mt-md-0">

              <div class="call-to-action-btn">

                <a class="btn btn-dark" href="calendar.php">All Events</a>  </div>

          </div><!-- col end -->

        </div><!-- row end -->

    </div><!-- Action style box -->

  </div><!-- Container end -->

</section><!-- Action end -->



<section id="ts-features" class="ts-features">

  <div class="container">

    <div class="row">

        <div class="col-lg-6">

          <h3 class="column-title">Latest News</h3>



          <div id="testimonial-slide" class="testimonial-slide">

           <?php

                $sql_purchase = mysqli_query($conn,"SELECT *,DATE_FORMAT(news_date	, '%a, %M %e, %Y') as sdate FROM hht_news where news_status=1 order by news_date DESC LIMIT 0,3");	

			  	

					 while ($arrUsersRow = mysqli_fetch_array ($sql_purchase))

					{



															

			?>

              <div class="item">

                <div class="quote-item">

                    <span class="quote-text">

                     <?php

echo substr($arrUsersRow['news_des'],0,200);?>... </span>



                    <div class="quote-item-footer">

                      <img loading="lazy" class="testimonial-thumb" src="images/clients/calen.png" alt="testimonial">

                      <div class="quote-item-info">

                          <h3 class="quote-author"><a href="news_<?=$arrUsersRow['ja_id']?>.html"><?=$arrUsersRow['news_title']?></a></h3>

                          <span class="quote-subtext"><?php echo $arrUsersRow['sdate'];?></span>                      </div>

                    </div>

                </div><!-- Quote item end -->

              </div>

              <?php

            }

          	?>

              <!--/ Item 1 end -->



             

          </div>

          <!--/ Testimonial carousel end-->

        </div><!-- Col end -->



        <div class="col-lg-6 mt-4 mt-lg-0">

          <h3 class="into-sub-title">Upcoming Events</h3>

          

          <p>Dear All, Jai Shree Ram, Jai Shree Hanuman, Jai Guru Datta We invite all to participate in the upcoming celebration (Devotees visiting the Temple are....</p>



          <div class="accordion accordion-group" id="our-values-accordion">

              <div class="card">

                <div class="card-header p-0 bg-transparent" id="headingOne">

                    <h2 class="mb-0">

                      <button class="btn btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">

                         <?=$arrEvents1['event_title']?> </button>

                    </h2>

                </div>

              

                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#our-values-accordion">

                    <div class="card-body">

                      <?php

echo substr($arrEvents1['event_des'],0,130);?>... <?php if($arrEvents1a['event_title'] <> "") {

                ?><a class="home_ev_btn" href="event_<?=$arrEvents1['ja_id']?>.html">View Details</a> <?php } ?></div>

                </div>

              </div>

				<?php if($arrEvents1a['event_title'] <> "") {

                ?>

              <div class="card">

                <div class="card-header p-0 bg-transparent" id="headingTwo">

                    <h2 class="mb-0">

                      <button class="btn btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">

                         <?=$arrEvents1a['event_title']?> </button>

                    </h2>

                </div>

                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#our-values-accordion">

                    <div class="card-body">

                    <?php

echo substr($arrEvents1a['event_des'],0,130);?>...  <a class="home_ev_btn" href="event_<?=$arrEvents1a['ja_id']?>.html">View Details</a></div>

                </div>

              </div>

              <?php 

				}

			  if($arrEvents1b['event_title'] <> "") {

				  ?>

              <div class="card">

                <div class="card-header p-0 bg-transparent" id="headingThree">

                    <h2 class="mb-0">

                      <button class="btn btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">

                         <?=$arrEvents1b['event_title']?>  </button>

                    </h2>

                </div>

                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#our-values-accordion">

                    <div class="card-body">

                     <?php

echo substr($arrEvents1b['event_des'],0,130);?>... <a class="home_ev_btn" href="event_<?=$arrEvents1b['ja_id']?>.html">View Details</a></div>

                </div>

              </div>

              <?php } ?>

          </div>

          <!--/ Accordion end -->

        </div><!-- Col end -->

    </div><!-- Row end -->

  </div><!-- Container end -->

</section><!-- Feature are end -->







<section id="ts-service-area" class="ts-service-area pb-0">

  <div class="container">

    <div class="row text-center">

        <div class="col-12">

          <h3 class="column-title">HANUMAN TEMPLE</h3>

          

        </div>

    </div>

    <!--/ Title row end -->



    <div class="row">

        <div class="col-lg-4">

          <div class="ts-service-box d-flex">

              <div class="ts-service-box-img">

                <img style="width:130px;" loading="lazy" src="images/icon-image/service-icon1.png" alt="service-icon">              </div>

              <div class="ts-service-box-info">

                <h3 class="service-box-title"><a href="inspirer.php">INSPIRER</a></h3>

                <p>Sri Ganapathy Sachchidananda Swamiji (Sri Swamiji) is the founder and Life President of the charity, (UK) (Sri DYC UK) which operates under an appointed Board of Trustees.</p>

              </div>

          </div><!-- Service 1 end -->



          <div class="ts-service-box d-flex">

              <div class="ts-service-box-img">

                <img style="width:180px;" loading="lazy" src="images/icon-image/service-icon1.png" alt="service-icon">              </div>

              <div class="ts-service-box-info">

                <h3 class="service-box-title"><a href="hanuman_temple.php">HANUMAN TEMPLE</a></h3>

                <p>The founder and spiritual master Parama Pujya Dr.Sri Ganapathy Sachchidananda Swamiji (Sri Swamiji) made a sankalpa (statement of determination) to establish a Karya Siddhi Hanuman temple in London for the benefit of one and all in UK and Europe.</p>

              </div>

          </div><!-- Service 2 end -->



        </div><!-- Col end -->



        <div class="col-lg-4 text-center">

          <img loading="lazy" class="img-fluid" src="images/services/service-center.jpg" alt="service-avater-image">        </div><!-- Col end -->



        <div class="col-lg-4 mt-5 mt-lg-0 mb-4 mb-lg-0">

          <div class="ts-service-box d-flex">

              <div class="ts-service-box-img">

                <img style="width:100px;" loading="lazy" src="images/icon-image/service-icon1.png" alt="service-icon">              </div>

              <div class="ts-service-box-info">

                <h3 class="service-box-title"><a href="the_charity_hanuman_temple_uk.php">THE CHARITY - HANUMAN TEMPLE</a></h3>

                <p>H.H. Sri Ganapathy Sachchidananda Swamiji is the founder and Life President of the charity which operates under an appointed Board of Trustees.</p>

              </div>

          </div><!-- Service 4 end -->



          <div class="ts-service-box d-flex">

              <div class="ts-service-box-img">

                <img style="width:100px;" loading="lazy" src="images/icon-image/service-icon1.png" alt="service-icon">              </div>

              <div class="ts-service-box-info">

                <h3 class="service-box-title"><a href="prayers.php">PRAYERS</a></h3>

                <p>Sri Ganapathy Sachchidananda Swamiji is the founder and Life President of the charity which operates under an appointed Board of Trustees.</p>

              </div>

          </div><!-- Service 5 end -->

        </div><!-- Col end -->

    </div><!-- Content row end -->

  </div>

  <!--/ Container end -->

</section><!-- Service end -->



<section class="content">

  <div class="container">

    <div class="row">

              <form action="newsletter.php" enctype="multipart/form-data" name="newsletter" method="post" id="newsletter" >



        <div class="subscribe_ho">

          <h3 class="column-title">Subscribe to DYCUK Newsletter</h3>

			<h4>Email address:</h4>

            <div class="input-icon"><i class="fa fa-envelope"></i><input style="width:98%;" class="inp" id="emailaddress" type="email" name="emailaddress" maxlength="60" placeholder="Your email address" required="" value=""></div><br>

            <input style="width:98%;" class="btn btn-primary" type="submit" value="Sign Up" name="save">

            

        </div><!-- Col end -->

            </form>

        <div class="col-lg-6 mt-5 mt-lg-0">



          <h3 style="color:#3953d8;" class="column-title">Recent Posts on Facebook</h3>



          <div class="row all-clients">

          

          <span style="padding:8px;"><img src="images/Hanuman_Small.jpg"></span> 

          <h4 style="float:left; color:#3953d8;">Hanuman Hindu Temple<br><span style="font-size:12px; font-weight:normal; color:#000000;">1,429 likes</span></h4>

          <div class="all-clients_inner_div">

          

              <div class="all-clients_inner">

              <span style="float:left; margin-right:15px;"><img style="border: 1px solid #ccc; border-radius: 25px;" src="images/Hanuman_Small.jpg"></span> 

          <h4 style="color:#3953d8;" class="homeli">Hanuman Hindu Temple London <i style="float:right; background-color: #3953d8; color: #fff; padding: 8px;" class="fab fa-facebook-f"></i><br><span style="font-size:12px; font-weight:normal; color:#000000;">on Thursday</span></h4>

          

               <p style="float:left; width:100%; border-top:1px solid #dedede;">Aum Namaha Shivaaya<br>

                    Jai Durga Mata<br>

                    We cordially invite all to participate at the Temple<br><br>

                    

                    Friday 5 August<br>

                    @ 11am: Vara-Lakshmi Vratam<br>

                    @ 7pm: Narahari Teertha Swamy Aradhana<br><br>

                    

                    Saturday 6<br>

                    Hanuman Pooja @ 11am</p>

                    <p style="color:#3953d8;"><a href="https://mailchi.mp/e95dc8a7a4be/vara-lakshmivratam?fbclid=IwAR3BYjMfF_Y0Qsl5PY1sqD3dT_1rn9cR9p34Cb9moEMFksevgh1CkeGyNJw" target="_blank">https://mailchi.mp/e95dc8a7a4be/vara-lakshmivratam</a></p>

                    <a href="https://mailchi.mp/e95dc8a7a4be/vara-lakshmivratam?fbclid=IwAR3BYjMfF_Y0Qsl5PY1sqD3dT_1rn9cR9p34Cb9moEMFksevgh1CkeGyNJw" target="_blank"><img src="images/shiva_home_img.jpg"></a>

              </div>

              

              <div class="all-clients_inner">

              <span style="float:left; margin-right:15px;"><img style="border: 1px solid #ccc; border-radius: 25px;" src="images/Hanuman_Small.jpg"></span> 

          <h4 style="color:#3953d8;" class="homeli">Hanuman Hindu Temple London <i style="float:right; background-color: #3953d8; color: #fff; padding: 8px;" class="fab fa-facebook-f"></i><br><span style="font-size:12px; font-weight:normal;">last Tuesday</span></h4>

          

               <p style="float:left; width:100%; border-top:1px solid #dedede;">

                    August 2022<br>

Special days and prayers<br> @HanumanTempleUK</p>

                    

                    <a href="https://www.facebook.com/HanumanTempleUK/photos/a.431131671007392/1219194865534398/?type=3" target="_blank"><img src="images/shravana_img.jpg"></a>

              </div>

              

              </div>

              

          </div>

     

          

        </div><!-- Col end -->

    </div>

    <!--/ Content row end -->

  </div>

  <!--/ Container end -->

</section><!-- Content end -->



</section>

<!--/ News end -->



    <?php include_once("footer.php"); ?>



  </div>

  </body>

  </html>