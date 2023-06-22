<?php include_once("connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>

  <!-- Basic Page Needs
================================================== -->
  <meta charset="utf-8">
  <title>Prayers</title>

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
  .table-bordered a {
  color:#000;
  text-decoration:underline;
  }
  .table-bordered a:hover {
  color:#FF0000;
  text-decoration:none;
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
      <li class="breadcrumb-item">PRAYERS</li>
    </ol>
</nav>
</div>
<div class="mytitle_header">
	<div class="container"><h2>PRAYERS</h2></div>
</div>

<section class="content">
  <div class="container">
    <div class="row">
		
          <div class="col-12 col-lg-12 col-md-12 col-sm-4 col-xs-6 filter">
          <div class="prayers_inner_main">
          <div class="p-0 bg-transparent" id="headingTwo">
                <h2 class="mb-0">
                  <p style="color:#fff; background-color:#fd6d03; padding:5px 15px; font-weight:bold;" class="btn btn-block text-center"> MAIN PRAYERS FOR HANUMAN TEMPLE </p>
                </h2>
                
             <div class="right_content">
                <div class="p-0 bg-transparent " id="headingTwo">
                <div class="scroll_fam">
                <table class="table table-bordered">
                    <thead><tr>
                    <th> # </th>
                    <th> Prayer Name&nbsp;</th>
                    <th>&nbsp; </th>
                    <th>&nbsp; </th>
                    <th>&nbsp; </th>
                    </tr></thead>
                    <tbody><tr>
                    <td> 1 </td>
                    <td> Datta Stava&nbsp;</td>
                    <td> <a href="prayers_pdf/datta_stava_english.pdf"> English</a> </td>
                    <td> <a href="prayers_pdf/datta_stava_kannada.pdf"> Kannada</a> </td>
                    <td> <a href="prayers_pdf/datta_stava_telugu.pdf"> Telugu</a> </td>
                    </tr>
                    <tr>
                    <td> 2 </td>
                    <td> Ashta Lakshmi Stuti </td>
                    <td> <a href="prayers_pdf/lakshmi_stava_english.pdf"> English</a> </td>
                    <td> <a href="prayers_pdf/lakshmi_stava_kannada.pdf"> Kannada</a> </td>
                    <td> <a href="prayers_pdf/lakshmi_stava_telugu.pdf"> Telugu</a> </td>
                    </tr>
                    <tr>
                    <td> 3 </td>
                    <td> Sadguru Stava </td>
                    <td> <a href="prayers_pdf/sadguru_stava_english.pdf"> English</a> </td>
                    <td> <a href="prayers_pdf/sadguru_stava_kannada.pdf"> Kannada</a> </td>
                    <td> <a href="prayers_pdf/sadguru_stava_telugu.pdf"> Telugu</a> </td>
                    </tr>
                    <tr>
                    <td> 4 </td>
                    <td> Aditya Hrudayam </td>
                    <td> <a href="prayers_pdf/aditya_english.pdf"> English</a> </td>
                    <td> <a href="prayers_pdf/aditya_sanskrit.pdf"> Sanskrit</a> </td>
                    <td> <a href="prayers_pdf/aditya_telugu.pdf"> Telugu</a> </td>
                    </tr>
                    <tr>
                    <td> 5 </td>
                    <td> Hanuman Chalisa </td>
                    <td> <a href="hanuman-chalisa-english.php"> English</a> </td>
                    <td> <a href="prayers_pdf/HanumanChalisa_V3-final.pdf">Hindi</a></td>
                    <td> </td>
                    </tr>
                    <tr>
                    <td> 6 </td>
                    <td> Sri Datta Sodasi </td>
                    <td> <a href="prayers_pdf/Sri-Datta-Sodasi.pdf"> English</a> </td>
                    <td> </td>
                    <td> </td>
                    </tr>
                    </tbody>
                 </table>
                 </div>
                </div>
               </div>
           
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