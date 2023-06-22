<?php include_once("connection.php");

if($_REQUEST['save'] == "CONTINUE"  && $_POST['fname']!='')
{
	
	 //   $date = explode('/',$_POST['strt_date']);
	  //  $date1 = $date[2].'-'.$date[1].'-'.$date[0];
		
		
		if ( isset($_POST['6_letters_code']) && ($_POST['6_letters_code']!="") ){
// Validation: Checking entered captcha code with the generated captcha code
						if(strcasecmp($_SESSION['6_letters_code'], $_POST['6_letters_code']) != 0){
				// Note: the captcha code is compared case insensitively.
				// if you want case sensitive match, check above with strcmp()
							//echo $msg="<span style='color:red'><strong><br><br>The Validation code does not match!</strong></span>";// Captcha verification is incorrect.	
							echo $msg="<p style='color:#FFFFFF; font-size:20px'><span style='background-color:#FF0000;'>Entered captcha code does not match! Kindly try again.</span></p>";
							echo "<br><br><a href='creat_an_account.php' ><span style='color:blue'><strong>Go Back...</strong></span></a>";
								exit();
						} else {

	
	 $qry_add = "INSERT INTO hht_users SET 	 e_status = '1',
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
												nakshatram = '".addslashes(trim($_POST['nakshatram']))."',	
													
											 ipaddr = '".$_SERVER['SERVER_ADDR']."',
											   e_date = '".date('Y-m-d')."'"; 
											   
	if($cart->get_cart_total()>0) { 

			$_SESSION['usrwebfe_id'] = addslashes(trim($_POST['email']));
			$_SESSION['usrweb_fname'] = addslashes(trim($_POST['fname']));
	} else {
			 $_SESSION["usrid"] = addslashes(trim($_POST['email']));
			$_SESSION["usrname"] = addslashes(trim($_POST['fname']));

	}
			if(mysqli_query($conn,$qry_add))
			{
			   
	
			}
			
		
						}
		}
		
}
	
?>
<!DOCTYPE html>
<html lang="en">
<head>

  <!-- Basic Page Needs
================================================== -->
  <meta charset="utf-8">
  <title>Create an Account</title>

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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <!--<style>
    body {
      font-family: arial;
      padding-left: 10px;
    }
 
    .input-box {
      margin: 15px 0;
    }
 
    .input-box input {
      padding: 5px 10px;
      border-radius: 2px;
      border: 1px solid #999;
    }
 
    .btn {
      cursor: pointer;
      padding: 5px 10px;
      border-radius: 2px;
      border: 1px solid #17a2b8;
      color: #fff;
      background-color: #17a2b8;
    }
 
    .btn:hover {
      background-color: #138496;
      border-color: #117a8b;
    }
 
    .btn:focus {
      outline: 0;
    }
 
    .input-box a {
      color: red;
      font-size: 13px;
      text-decoration: none;
    }
 
    .input-box a:hover {
      text-decoration: underline;
    }
  </style>-->
  
<style>
.famdiv {
	width:100%;
	float:left;
}
.famdiv_main {
	width:19%;
	float:left;
	margin:5px;
}
.famdiv_main_save {
	width:210px;
	margin:auto;
}
.faminp {
    width: 100%;
    height: 45px;
    padding: 10px;
    border: 1px solid #ccc;
    font-family: Arial, Helvetica, sans-serif;
    color: #333;
    margin: 0 0 0;
    font-size: 14px;
}
.add-btn {
	padding: 14px 25px !important;
    font-size: 13px;
    border-radius: 3px;
    line-height: normal;
    text-transform: capitalize;
    color: #fff;
	background:#0066CC;
	font-weight:bold;
	border:none;
}
.add-btn a {
    color: #fff;
	text-decoration:none;
}
.add-btn a:hover {
    color: #fff;
	text-decoration:none;
}

@media screen and (max-width: 480px) {
 .famdiv_main {
	width:98%;
}

}


@media only screen and (min-width: 481px) and (max-width: 768px) {
 .famdiv_main {
	width:18%;
}

}

</style>
</head>
<body>
  <div class="body-inner">

    <?php include_once("header.php"); ?>


<div id="banner-area" class="banner-area" style="background-image:url(images/banner/news.jpg)">
  <div class="banner-text">
    <div class="container">
        <div class="row">
          <div class="col-lg-12">
              <div class="banner-heading">
                <h1 class="banner-title">Add Family Members</h1>
                <nav aria-label="breadcrumb" style="border:none;">
                    <ol class="breadcrumb justify-content-center">
                      <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                      <li class="breadcrumb-item">Create An Account</li>
                    </ol>
                </nav>
              </div>
          </div><!-- Col end -->
        </div><!-- Row end -->
    </div><!-- Container end -->
  </div><!-- Banner text end -->
</div>

<section class="content">
  <div class="container">
    <div class="row">
        

        <div class="col-lg-12">
        <h4>Add Family Members</h4>
		 <div class="login_main">
          	<div class="p-0 bg-transparent " id="headingTwo">
               
          <form action="thank_you.php" enctype="multipart/form-data" name="register" method="post" id="register" >
    <div class="wrapper">
      <div class="input-box">
      <div class="famdiv">
      <div class="famdiv_main">
        <input class="faminp" type="text" name="name[]" placeholder="Enter Name">
	</div>
    <div class="famdiv_main">
         <input class="faminp" type="text" name="gotram[]" placeholder="Enter Gotram">
     </div>
	<div class="famdiv_main">
        <input class="faminp" type="text" name="nakstaram[]" placeholder="Enter Nakstaram">
	</div>
    <div class="famdiv_main">
                <select class="faminp" style="float:left;" id="relation[]" name="relation[]">
                    <option value="">-- Select Relationship--</option>
                    <option  value="Father">Father</option>
                    <option  value="Mother">Mother</option>
                    <option  value="Spouse" >Spouse</option>
                    <option  value="Son">Son</option>
                    <option  value="Daughter">Daughter</option>
                </select>
      </div>
      <div class="famdiv_main">
        <button style="color:#fff;" class="btn add-btn">Add Family Member</button>
      </div>
     </div>
     
      </div>
    </div>
    <div class="famdiv_main_save">
    <input type="submit" name="save"  value="Submit" class="btn btn-primary login_title_inn" />
    </div>
  </form>
 
  <script type="text/javascript">
    $(document).ready(function () {
 
      // allowed maximum input fields
      var max_input = 5;
 
      // initialize the counter for textbox
      var x = 1;
 
      // handle click event on Add More button
      $('.add-btn').click(function (e) {
        e.preventDefault();
        if (x < max_input) { // validate the condition
          x++; // increment the counter
          $('.wrapper').append(`
            <div class="input-box">
			<div class="famdiv">
      		<div class="famdiv_main">
               <input class="faminp" type="text" name="name[]" placeholder="Enter Name">
			</div>
			<div class="famdiv_main">
                <input class="faminp" type="text" name="gotram[]" placeholder="Enter Gotram">
			</div>
			<div class="famdiv_main">
				<input class="faminp" type="text" name="nakstaram[]" placeholder="Enter Nakstaram">
			</div>
			<div class="famdiv_main">
                <select class="faminp" id="relation[]" name="relation[]">
					<option value="">-- Select Relationship--</option>
					<option  value="Father">Father</option>
					<option  value="Mother">Mother</option>
					<option  value="Spouse" >Spouse</option>
					<option  value="Son">Son</option>
					<option  value="Daughter">Daughter</option>
                </select>
			</div>
			
              <a style="color:#fd6d03; float:left; margin-top:15px; margin-left:5px;" href="#" class="remove-lnk">Remove</a>
			</div>
            </div>
          `); // add input field
        }
      });
 
      // handle click event of the remove link
      $('.wrapper').on("click", ".remove-lnk", function (e) {
        e.preventDefault();
        $(this).parent('div').remove();  // remove input field
        x--; // decrement the counter
      })
 
    });
  </script>
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