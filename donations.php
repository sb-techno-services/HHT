<?php include_once("connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>

  <!-- Basic Page Needs
================================================== -->
  <meta charset="utf-8">
  <title>Donations - Hanumanhindutemple.org</title>

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
      <li class="breadcrumb-item">Donations</li>
    </ol>
</nav>
</div>
<div class="mytitle_header">
	<div class="container"><h2>Donations</h2></div>
</div>
<div class="container">
    <div class="row">
      <div class="gallery col-lg-12 col-md-12 col-sm-12 col-xs-12">

        <div style="margin:0 0 10px 0; width:100%; float:left;">
       <?php /*?> <select name="" id="" class="form-control input-sm calinp" style="background-color: #fd6d03; color:#fff;">
            <option value="4">Avadhoota Datta Peetham, Mysore (Main)</option>
            <option value="15">Guru Kanika</option>
            <option value="6">Sri Datta Venkateswara Temple, Mysore</option>
            <option value="11">Jayalakshmi Puram (Gandluru Trust)</option>
            <option value="13" selected="">Datta Kriya Yoga International Centre</option>
        </select>
            
        <select name="" id="" class="form-control input-sm calinp" style="background-color: #4B8DF8; color:#fff;">
            <option value="inr">INR (₹)</option>
            <option value="usd" selected="">UK (£)</option>
        </select><?php */?>
        <!--<button style="margin-top:6px; font-size:12px;" type="button" id="" class="btn btn-primary"><i class="fa fa-search"></i> Search</button>-->
        </div>
      </div>
 
      <div class="col-12 col-lg-12 col-md-12 col-sm-12 col-xs-6 filter events">
       <div class="calendar_main">
       
<!--------donations table start----->
<div class="scroll1">
<div class="table-wrapper1">

    <table class="fl-table1">
        
        <tbody>
          <?php
                $sql_purchase = mysqli_query($conn,"SELECT * FROM hht_poojas WHERE category = 'donations' AND pooja_status=1 order by ja_id DESC");	
			  	
					 while ($arrUsersRow = mysqli_fetch_array ($sql_purchase))
					{
						//$sql_updated_user = mysqli_query($conn,"SELECT * FROM  sai_users WHERE usr_id = ".$arrUsersRow['acc_updated']."");
						//$updated_user_details = mysqli_fetch_assoc($sql_updated_user);
															
			?>
        <tr>
            <td style="width:115px;">
                <div class="startcal_text1">
                    <p><img src="images/thumb_donation.jpg"></p>
                 </div>             </td>
            <td style="width:1064px;">
            	<div class="evencal_text1">
                    <p style="font-weight:bold; color:#fd6d03;"><?php echo $arrUsersRow['pooja_title'];?></p>
                    <img src="images/note_icon.png"> <span class="details_btn" style="padding:6px; margin-left:5px;"><a href="donation_details_<?=$arrUsersRow['ja_id']?>.html">Details</a></span>                </div>            </td>
            <td colspan="2">
            <p style="font-weight:bold; color:#fd6d03; text-align:center;">£<?php echo $arrUsersRow['price'];?></p><br>

            <span class="donat_btn"><a href="donation_details_<?=$arrUsersRow['ja_id']?>.html">Donate</a></span></td>
         </tr>
         
          <?php
            }
          	?>
        <tbody>
    </table>
    </div>
</div>
<!--------donations table end------->
       </div>
      </div>
    </div>
  </div>

<!--/ News end -->

    <?php include_once("footer.php"); ?>
  </div>
  </body>
  </html>