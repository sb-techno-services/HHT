<?php include_once("connection.php");
//echo $_SESSION['usrwebfe_id'];


if($_SESSION['usrwebfe_id'] !="")
{
	header("Location: account_login.php");
	exit();
}
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Pooja Services</title>
    <!-- Bootstrap Styles-->
    <link href="dashboard/assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FontAwesome Styles-->
    <link href="dashboard/assets/css/font-awesome.css" rel="stylesheet" />
    <!-- Morris Chart Styles-->
    <link href="dashboard/assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
    <!-- Custom Styles-->
    <link href="dashboard/assets/css/custom-styles.css" rel="stylesheet" />
    <!-- Google Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <link rel="stylesheet" href="dashboard/assets/js/Lightweight-Chart/cssCharts.css"> 
    <link rel="icon" type="image/png" href="images/favicon.png">
</head>

<body>
    <div id="wrapper">
                <?php include_once("m_top_nav.php"); ?>

        <!--/. NAV TOP  -->
          <?php include_once("m_side_nav.php"); ?>
        <!-- /. NAV SIDE  -->
      
		<div id="page-wrapper">
		  		          <?php include_once("m_breadcrum.php"); ?>

            <div id="page-inner">
<?php
		 $adv_details = mysqli_query($conn,"SELECT * FROM hht_users where email = '".$_SESSION['usrwebfe_id']."'");
		 $res_details = mysqli_fetch_assoc($adv_details);  ?>

                <!-- /. ROW  -->
<nav aria-label="breadcrumb" style="border:none;">
    <ol class="breadcrumb justify-content-center">
      <li class="breadcrumb-item"><a href="index.php">Home</a></li>
      <li class="breadcrumb-item">Pooja Services</li>
    </ol>
</nav>
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
<!--<nav aria-label="breadcrumb" style="border:none;">
    <ol class="breadcrumb justify-content-center">
      <li class="breadcrumb-item"><div class="m_ti">Pooja Services</div></li>
    </ol>
</nav> -->                   	
                       <div class="m_cale_main">
                        <div class="scroll_fam">
 						 <div class="container">
    <div class="row">
        <div class="col-12 col-lg-12 col-md-12 col-sm-11 col-xs-12 filter">


		<div class="pooja-services_main">
           <?php
                $sql_purchase = mysqli_query($conn,"SELECT *,DATE_FORMAT(pooja_sdate, '%a, %M %e, %Y') as sdate,DATE_FORMAT(pooja_edate, '%a, %M %e, %Y') as edate FROM hht_poojas WHERE category = 'poojas' AND pooja_status=1 order by ja_id DESC");	
			  	
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
              <img src="../adm_hht9m8a4s2/uploads/<?=$arrUsersRow['pooja_image']?>" width="50%">
              <?php } ?>
              </div>
         	  <div class="right_content">
                <div class="p-0 bg-transparent " id="headingTwo">
                    <h4 class="pooja_title"><?php echo $arrUsersRow['pooja_title'];?></h4><br>
                    <p><?php echo $arrUsersRow['pooja_des'];?></p>
                    <div class="pooja_cal">
                        <p>Pooja Timings: <strong><strong><?php echo $arrUsersRow['pooja_time'];?></strong><br>
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
                        </div>
                        </div>
                    </div>
                    
                </div>

				<div class="row">
				<div class="col-md-12">
				
					</div>		
				</div> 	
			
		
				
            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
 		          <?php include_once("m_footer_nav.php"); ?>


</body>

</html>