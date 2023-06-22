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


    <title>Events</title>


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


        <li class="breadcrumb-item"><a href="#">Home</a></li>


        <li class="breadcrumb-item">Events</li>


    </ol>


</nav>


                <div class="row">


                    <div class="col-md-12 col-sm-12 col-xs-12">


<!-- <nav aria-label="breadcrumb" style="border:none;">


    <ol class="breadcrumb justify-content-center">


      <li class="breadcrumb-item"><div class="m_ti">Events</div></li>


    </ol>


</nav>-->                   	


                       <div class="m_cale_main">


                       <div class="scroll_fam">


                        <div class="container">


   						 <div class="row">


      <div class="gallery col-lg-12 col-md-12 col-sm-11 col-xs-12">





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


      <div class="col-12 col-lg-3 col-md-4 col-sm-4 col-xs-12 filter events">


       <div class="events_main">


       <p class="eventsimg"><a href="event_<?=$arrUsersRow['ja_id']?>.html"> <?php if($arrUsersRow['event_image'] !="") { ?>

       <img src="../adm_hht9m8a4s2/uploads/<?=$arrUsersRow['event_image']?>">
       <?php } else { ?> 
              <img src="images/annual_pooja.jpg">

       <?php } ?></a></p>


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