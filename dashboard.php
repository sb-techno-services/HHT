<?php // session_start();
	include_once("connection.php");
	
/*if(empty($_SESSION['usrid']))
{
	header("Location: account_login.php");
	exit();
}
*/
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard</title>
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
<nav aria-label="breadcrumb" style="border:none;">
    <ol class="breadcrumb justify-content-center">
      <li class="breadcrumb-item"><a href="index.php">Home</a></li>
      <li class="breadcrumb-item">Dashboard</li>
    </ol>
</nav>
                <!-- /. ROW  -->

                <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12"><br>
                
<!--<nav aria-label="breadcrumb" style="border:none;">
    <ol class="breadcrumb justify-content-center">
      <li class="breadcrumb-item"><div class="m_ti">Dashboard</div></li>
    </ol>
</nav> -->                
                    <div class="col-md-4 col-sm-12 col-xs-12">
                        <a href="dashboard.php"><div class="panel panel-primary text-center no-boder blue">
                           
                            <div class="panel-right">
								<h3><img style="margin-top:-7px;" src="dashboard/assets/img/user_icon.png" align="absmiddle"> <br>My Account</h3>
                            </div>
                        </div></a>
                    </div>
                    <div class="col-md-4 col-sm-12 col-xs-12">
                        <a href="family_members_donors.php"><div class="panel panel-primary text-center no-boder blue">
                           
                            <div class="panel-right">
								<h3><img style="margin-top:-7px;" src="dashboard/assets/img/family_icon_big.png" align="absmiddle"> <br>Family Members / Donors</h3>
                            </div>
                        </div></a>
                    </div>
                    <div class="col-md-4 col-sm-12 col-xs-12">
                        <a href="m_calendar.php"><div class="panel panel-primary text-center no-boder blue">
                           
                            <div class="panel-right">
								<h3><img style="margin-top:-7px;" src="dashboard/assets/img/calendar_icon_big.png" align="absmiddle"> <br>Calendar</h3>
                            </div>
                        </div></a>
                    </div>
                    <div class="col-md-4 col-sm-12 col-xs-12">
                        <a href="m_events.php"><div class="panel panel-primary text-center no-boder blue">
                           
                            <div class="panel-right">
								<h3><img style="margin-top:-7px;" src="dashboard/assets/img/events_icon_big.png" align="absmiddle"> <br>Events</h3>
                            </div>
                        </div></a>
                    </div>
                    <div class="col-md-4 col-sm-12 col-xs-12">
                       <a href="m_pooja_services.php"> <div class="panel panel-primary text-center no-boder blue">
                            <div class="panel-right">
							<h3><img style="margin-top:-7px;" src="dashboard/assets/img/poojas_icon.png" align="absmiddle"> <br>Poojas</h3>
                            </div>
                        </div></a>
                    </div>
                    <div class="col-md-4 col-sm-12 col-xs-12">
                        <a href="m_donations.php"><div class="panel panel-primary text-center no-boder blue">
                            <div class="panel-right">
							 <h3><img style="margin-top:-7px;" src="dashboard/assets/img/donations_icon.png" align="absmiddle"> <br>Donations</h3>
                            </div>
                        </div></a>
                    </div>
                    <?php
					

					?>
                </div>
				
            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
		          <?php include_once("m_footer_nav.php"); ?>


</body>

</html>