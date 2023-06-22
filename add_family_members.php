<?php include_once("connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>

  <!-- Basic Page Needs
================================================== -->
  <meta charset="utf-8">
  <title>Add Family Members - Hanuman Hindu Temple</title>

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
	width:100%;
	float:left;
	margin:5px;
	text-align:center;
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
.famdiv_main_save {
    width: 18%;
    margin: auto;
    text-align: center;
	float:none;
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

<div class="container">
 <nav aria-label="breadcrumb" style="border:none;">
    <ol class="breadcrumb justify-content-center">
      <li class="breadcrumb-item"><a href="index.php">Home</a></li>
      <li class="breadcrumb-item">Add Family Members</li>
    </ol>
</nav>
</div>
<div class="mytitle_header">
	<div class="container"><h2>Add Family Members</h2></div>
</div>

<div id="wrapper">

        <!--/. NAV TOP  -->
        <!-- /. NAV SIDE  -->
      
		<div id="page-wrapper">

            <div id="page-inner">

              
  <div class="container">
          <div class="row">
         <div class="col-lg-12">           
        <div id="page-inner">
       
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                       	
                               <div style="width:100%;" class="m_cale_main">
                        <section class="content">
  <div class="container">
    <div class="row">
        <div class="col-12 col-lg-12 col-md-12 col-sm-11 col-xs-12 filter">


       
<!--------add family member----->
<div class="p-0 bg-transparent " id="headingTwo">
               
          <form action="fm_thank_you.php" enctype="multipart/form-data" name="register" method="post" id="register" >
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
        <button style="color:#fff; float:right;" class="btn add-btn">Add Family Member</button>
      </div>
     </div>
     
      </div>
    </div>
    <div class="famdiv_main_save"><br>
    <input style="width:150px; text-align:center; margin-bottom:0;" type="submit" name="save"  value="Submit" class="btn btn-primary login_title_inn" />
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
<!--------add family member end------->
        </div>
    </div>

  </div>
</section>
                        </div>
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