<?php include_once("connection.php");
//echo $_SESSION['usrwebfe_id'];


if($_SESSION['usrid'] !="")
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
    <title>Donations</title>
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

                <!-- /. ROW  -->
<nav aria-label="breadcrumb" style="border:none;">
    <ol class="breadcrumb justify-content-center">
      <li class="breadcrumb-item"><a href="index.php">Home</a></li>
      <li class="breadcrumb-item">Donations</li>
    </ol>
</nav>
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
<!--<nav aria-label="breadcrumb" style="border:none;">
    <ol class="breadcrumb justify-content-center">
      <li class="breadcrumb-item"><div class="m_ti">Donations</div></li>
    </ol>
</nav>-->                   	
                       <div class="m_cale_main">
                        <div class="scroll_fam">
  							<div class="container">
    <div class="row">
        <div class="col-12 col-lg-12 col-md-12 col-sm-11 col-xs-12 filter">


		<div class="calendar_main">
       
<!--------donations table start----->
<div class="table-wrapper">

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
            <td style="width:900px;">
            	<div class="evencal_text1">
                    <p style="font-weight:bold; color:#fd6d03;"><?php echo $arrUsersRow['pooja_title'];?></p>
                    <img src="images/note_icon.png"> <span class="details_btn" style="padding:6px; margin-left:5px;"><a href="donation_details_<?=$arrUsersRow['ja_id']?>.html">Details</a></span>                </div>            </td>
            <td colspan="2" style="text-align:center;">
            <p style="font-weight:bold; color:#fd6d03; text-align:center;">£<?php echo $arrUsersRow['price'];?></p><br>

            <span class="donat_btn"><a href="donation_details_<?=$arrUsersRow['ja_id']?>.html">Donate</a></span></td>
         </tr>
         
          <?php
            }
          	?>
        <tbody>
    </table>
    </div>
<!--------donations table end------->
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