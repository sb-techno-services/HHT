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


    <title>Calendar</title>


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


      <li class="breadcrumb-item">Calendar</li>


    </ol>


</nav>


                <div class="row">


                    <div class="col-md-12 col-sm-12 col-xs-12">


<!-- <nav aria-label="breadcrumb" style="border:none;">


    <ol class="breadcrumb justify-content-center">


      <li class="breadcrumb-item"><div class="m_ti">Calendar</div></li>


    </ol>


</nav>-->                   	


                       <div class="m_cale_main">


                       <div class="scroll_fam">


                        <div class="container">


    						<div class="row">


      <div class="gallery col-lg-12 col-md-12 col-sm-11 col-xs-12">





<div class="call-to-action-text">


                <h3 style="color:#000;" class="action-title"><img src="images/clients/calen1.png"> Calendar <?php echo date('Y'); ?></h3>


                <p>Datta Peetham Calendar</p>


              </div>


          <?php /*?><div style="margin:0 0 40px 0;">


            <select name="year" id="year" class="form-control calinp">


                <option value="2022">2022</option>


                <option value="2020">2020</option>


                <option value="2019">2019</option>


                <option value="2018">2018</option>


            </select>


            


            <select name="month" id="month" onChange="search(1)" class="form-control calinp">


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


                                            


        </div><?php */?>


      </div>


 


      <div class="col-12 col-lg-12 col-md-12 col-sm-4 col-xs-12 filter events">


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


                	<p style="color:#fd6d03; padding-top:0;"><a href="event_<?=$arrUsersRow['ja_id']?>.html"><?php echo $arrUsersRow['event_title'];?></a></p>


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