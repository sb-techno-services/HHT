<?php include_once("connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>

  <!-- Basic Page Needs
================================================== -->
  <meta charset="utf-8">
  <title>HANUMAN TEMPLE</title>

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

  <!-- Gallery start-->
 <link rel="stylesheet" href="FG-Gallery-master/css/gallery.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="FG-Gallery-master/js/gallery.js"></script>
   <!-- Gallery end-->
        
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
                <h1 class="banner-title">GALLERY</h1>
                <nav aria-label="breadcrumb" style="border:none;">
                    <ol class="breadcrumb justify-content-center">
                      <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                      <li class="breadcrumb-item">GALLERY</li>
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
           <div class="container p-3">

       
        <div class="fg-gallery">
            <img src="FG-Gallery-master/images/1.jpg" alt="">
            <img src="FG-Gallery-master/images/2.jpg" alt="">
            <img src="FG-Gallery-master/images/3.jpg" alt="">
            <img src="FG-Gallery-master/images/4.jpg" alt="">
            <img src="FG-Gallery-master/images/5.jpg" alt="">
            <img src="FG-Gallery-master/images/6.jpg" alt="">
             <img src="FG-Gallery-master/images/7.jpg" alt="">
            <img src="FG-Gallery-master/images/8.jpg" alt="">
            <img src="FG-Gallery-master/images/9.jpg" alt="">
            <img src="FG-Gallery-master/images/10.jpg" alt="">
            
        </div>

    </div>
        </div>
    </div>
  </div>
  
</section>


    <?php include_once("footer.php"); ?>



  </div>
  
    <script>
        var a = new FgGallery('.fg-gallery', {
            cols: 4,
            style: {
                border: '10px solid #fff',
                height: '300px',
                borderRadius: '5px',
                boxShadow: '0 2px 10px -5px #858585',
            }
        })

        var a = new FgGallery('.ns', {
            cols: 3,
            style: {
                border: '0 solid #fff',
                height: '240px',
                borderRadius: '5px',
            }
        })
    </script>
        
  </body>
  </html>