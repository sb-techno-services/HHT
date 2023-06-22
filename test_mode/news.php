<?php include_once("connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>

  <!-- Basic Page Needs
================================================== -->
  <meta charset="utf-8">
  <title>News</title>

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

          <div class="col-12 col-lg-8 col-md-12 col-sm-4 col-xs-6 filter">
          <div class="p-0 bg-transparent" id="headingTwo">
                <h2 class="mb-0">
                  <p style="color:#fff; background-color:#fd6d03; padding:5px 15px; font-weight:bold;" class="btn btn-block text-left"> Latest News </p>
                </h2>
                 <?php
                $sql_purchase = mysqli_query($conn,"SELECT *,DATE_FORMAT(news_date	, '%a, %M %e, %Y') as sdate FROM hht_news where news_status=1 order by ja_id DESC");	
			  	
					 while ($arrUsersRow = mysqli_fetch_array ($sql_purchase))
					{
						//$sql_updated_user = mysqli_query($conn,"SELECT * FROM  sai_users WHERE usr_id = ".$arrUsersRow['acc_updated']."");
						//$updated_user_details = mysqli_fetch_assoc($sql_updated_user);
															
			?>
                <div class="news_main">
                    <p style="color:#fd6d03;"><a href="news_<?=$arrUsersRow['ja_id']?>.html"><?=$arrUsersRow['news_title']?></a></p>
                    <p style="font-size:12px;"><?php echo $arrUsersRow['sdate'];?></p>
                    <p><?php
echo substr($arrUsersRow['news_des'],0,130);?>...</p>
                </div>
                	<?php
            }
          	?>

                
             
            </div>

        </div>

  <div style="border-left:1px solid #dedede;" class="col-12 col-lg-4 col-md-12 col-sm-4 col-xs-6 filter">
		
          <div class="p-0 bg-transparent" id="headingTwo">
                <h2 class="mb-0">
                  <p style="color:#fff; background-color:#fd6d03; padding:5px 15px; font-weight:bold;" class="btn btn-block text-left"> News before 2021 </p>
                </h2>
                
                <div class="news_main_right">
                    <p style="color:#fd6d03;"><a href="#">Sri Swamiji's 80th birthday</a></p>
                    <p style="font-size:12px;">June 9th, 2022</p>
                    <p>Sri Swamiji's 80th lunar birthday on Jyeshtha Shuddha Ekadashi is tomorrow June 10th. It is all about the three big ones</p>
                </div>

            </div>
            
        </div>
    </div>
       
   <?php /*?> <nav aria-label="pagination" style="margin:25px 0; justify-content:center; padding:15px 0;">
        <ul class="pagination">
            <li><a href=""><span aria-hidden="true">&laquo; </span><span class="visuallyhidden">Previous</span></a></li>
            <li><a href="" aria-current="page">1</a></li>
            <li><a href="">2</a></li>
            <li><a href="">3</a></li>
            <li><a href="">4</a></li>
            <li><a href=""><span class="visuallyhidden">Next</span><span aria-hidden="true"> &raquo;</span></a></li>
        </ul>
    </nav><?php */?>
  </div>
</section>


<!--/ News end -->

    <?php include_once("footer.php"); ?>

  </div>
  </body>
  </html>