<?php include_once("connection.php");

if($_GET['rid']){
	$qry=mysqli_query($conn,"select r_id from hht_users_rela WHERE r_id=".$_REQUEST['rid']."");

	$res=mysqli_fetch_assoc($qry);
	if(mysqli_num_rows($qry)>0){
		$del=mysqli_query($conn,"delete from hht_users_rela WHERE r_id=".$_REQUEST['rid']."");
		header("Location: family_members_donors.php");
		exit();
	}
}

?>
<!DOCTYPE html>
<html lang="en">
<head>

  <!-- Basic Page Needs
================================================== -->
  <meta charset="utf-8">
  <title>Family Members Donors - Hanuman Hindu Temple</title>

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
  <style>
  .details_btn a {
    color: #fff;
    text-decoration: none;
}
.open>.dropdown-menu {
    display: block;
}
.dropdown-menu {
    position: absolute;
    top: 100%;
    left: 0;
    z-index: 1000;
    display: none;
    float: left;
    min-width: 160px;
    padding: 5px 0;
    margin: 2px 0 0;
    font-size: 14px;
    text-align: left;
    list-style: none;
    background-color: #fff;
    -webkit-background-clip: padding-box;
    background-clip: padding-box;
    border: 1px solid #ccc;
    border: 1px solid rgba(0,0,0,.15);
    border-radius: 4px;
    -webkit-box-shadow: 0 6px 12px rgb(0 0 0 / 18%);
    box-shadow: 0 6px 12px rgb(0 0 0 / 18%);
}
.dropdown-user li {
    margin: 8px 0;
}
  </style>
</head>
<body>
  <div class="body-inner">

    <?php include_once("header.php"); ?>

<div class="container">
 <nav aria-label="breadcrumb" style="border:none;">
    <ol class="breadcrumb justify-content-center">
      <li class="breadcrumb-item"><a href="index.php">Home</a></li>
      <li class="breadcrumb-item">Family Members Donors</li>
    </ol>
</nav>
</div>
<div class="mytitle_header">
	<div class="container"><h2>Family Members Donors</h2></div>
</div>

<div id="wrapper">

        <!--/. NAV TOP  -->
        <!-- /. NAV SIDE  -->
      
		<div id="page-wrapper">

            <div id="page-inner">
<?php
if($_SESSION["usrid"] != "") {
		 $adv_details = mysqli_query($conn,"SELECT * FROM hht_users where email = '".$_SESSION["usrid"]."'");
		 $res_details = mysqli_fetch_assoc($adv_details); 
} 

if($_SESSION["usrwebfe_id"] != "") {
		 $adv_details = mysqli_query($conn,"SELECT * FROM hht_users where email = '".$_SESSION["usrwebfe_id"]."'");
		 $res_details = mysqli_fetch_assoc($adv_details); 
} 
 ?>
         

                <!-- /. ROW  -->
  <div class="container">
          <div class="row">
         <div class="col-lg-12">           
        <div id="page-inner">
        
      
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                       	
                               <div class="m_cale_main">
                               
          <div class="container">
            <div class="row">
                <div class="col-12 col-lg-12 col-md-12 col-sm-11 col-xs-12 filter">
        <div style="margin:0 0 40px 0;">
                    
                   
                            <a href="add_family_members.php"><button style="margin-top:6px; font-size:12px; float:right;" type="button" id="" class="btn btn-primary"><i class="fa fa-plus"></i> Add Family Member / Donor</button></a>
                       <br>
                             
                </div>
        
                <div class="calendar_main">
               
        <!--------family member donors table start----->
        <div class="scroll_fam">
        <div class="table-wrapper">
        
            <table class="fl-table">
                <thead>
                <tr>
                    <th width="8%">S. No.</th>
                    <th width="10%">Relation</th>
                    <th width="48%">Name</th>
                    <th width="10%">Gotram</th>
                    <th width="10%">Nakstaram</th>
                    <th width="10%">Actions</th>
                </tr>
                </thead>
                <tbody>
                  <?php
                $sql_purchase = mysqli_query($conn,"SELECT * FROM hht_users_rela where e_id=".$res_details['e_id']." order by r_id DESC");	
			  	if (mysqli_num_rows($sql_purchase))
				{
					$intSNo = 1;
					$i = 0;
					 while ($arrUsersRow = mysqli_fetch_array ($sql_purchase))
					{
						//$sql_updated_user = mysqli_query($conn,"SELECT * FROM  sai_users WHERE usr_id = ".$arrUsersRow['acc_updated']."");
						//$updated_user_details = mysqli_fetch_assoc($sql_updated_user);
															
			?>
                  <tr>
                    <td><p><?=$intSNo?></p></td>
                    <td><p><?=$arrUsersRow['relations']?></p></td>
                    <td><p><?=$arrUsersRow['e_fname']?></p></td>
                    <td><p><?=$arrUsersRow['gotram']?></p></td>
                    <td><p><?=$arrUsersRow['nakshatram']?></p></td>
                    <td>
                    
                   
<?php /*?>                        <a style="color:#fd6d03; float:left; font-size:14px; padding:5px; font-weight:bold;"  href="edit_profile.php"> Edit &nbsp;/</a>
<?php */?>                           

<a style="color:#fd6d03; float:left; font-size:14px; padding:5px; font-weight:bold;"  href="family_members_donors.php?rid=<?=$arrUsersRow['r_id']?>"> Delete</a>
                     
                    </td>
                 </tr>
                  <?php				  	
																
					$intSNo++;
				}
			}
			else
			{
				?>
              <tr bgcolor="#EDF7FC">
                <td height="20" colspan="8" align="center" valign="middle" bgcolor="#EDF7FC"><span class="text"><font color='red'><b>No Data Available</b></font></span></td>
              </tr>
		  	<?php
            }
          	?>
                 </tbody><tbody>
            </tbody></table>
            </div>
        </div>
        <!--------family member donors table end------->
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
         </div>
                    
              
</div>
</section>
				 	
			
		
				
            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>


<!--/ News end -->

    <?php include_once("footer.php"); ?>

  </div>
  
  </body>
  </html>