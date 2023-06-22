<?php include_once("connection.php");
//echo $_SESSION['usrwebfe_id'];


/*if( ($_SESSION['usrwebfe_id'] !="") || ($_SESSION['usrid'] !="") )
{
	header("Location: account_login.php");
	exit();
}
*/


if($_REQUEST['submit'] == "Submit"  && $_POST['fname']!='')
{
	
	 //   $date = explode('/',$_POST['strt_date']);
	  //  $date1 = $date[2].'-'.$date[1].'-'.$date[0];
		
		
		

	
	  $qry_add = "UPDATE  hht_users SET 	
											   e_fname = '".addslashes(trim($_POST['fname']))."',
											   e_mname = '".addslashes(trim($_POST['mname']))."',
												e_lname = '".addslashes(trim($_POST['lname']))."',	
												e_pwd = '".addslashes(trim($_POST['pwd']))."',	
												email = '".addslashes(trim($_POST['email']))."',	
												mobile = '".addslashes(trim($_POST['mobile']))."',	
												address1 = '".addslashes(trim($_POST['addr1']))."',	
												address2 = '".addslashes(trim($_POST['addr2']))."',	
												city = '".addslashes(trim($_POST['city']))."',	
												state = '".addslashes(trim($_POST['state']))."',
												country = '".addslashes(trim($_POST['country']))."',	
												zipcode = '".addslashes(trim($_POST['zipcode']))."',	
												gotram = '".addslashes(trim($_POST['gotram']))."',
												nakshatram = '".addslashes(trim($_POST['nakshatram']))."'	
											   WHERE e_id  = ".addslashes($_POST['e_id'])."";  
											   
		//$_SESSION['usrwebfe_id'] = addslashes(trim($_POST['email']));
		//$_SESSION['usrweb_fname'] = addslashes(trim($_POST['fname']));
		if(mysqli_query($conn,$qry_add))
		{
		   

			$_SESSION['msg'] = "Thank You for registering with us and Account has been Created Successfully...";
		}
		else
		{
			$_SESSION['msg'] = "Error: Please try again";
		}
}
	
?><!DOCTYPE html>
<html lang="en">
<head>

  <!-- Basic Page Needs
================================================== -->
  <meta charset="utf-8">
  <title>Edit Profile Update- Hanuman Hindu Temple</title>

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
<body>
      <div class="body-inner">

    <?php include_once("header.php"); ?>




<section class="content">
  <div class="container">
    <div class="row">
        <div class="col-lg-12">
		 <div class="login_main">
          	<div class="p-0 bg-transparent " id="headingTwo">

<h1 class="sucesstext"><strong>Your Profile has been Updated Successfully...</strong></h1><br><br>
<br>
<br>


            </div>
            
         </div>
        </div>
    </div>
 </div>
</section>


<!--/ News end -->
    <?php include_once("footer.php"); ?>

  </div>
  </body>
  </html>