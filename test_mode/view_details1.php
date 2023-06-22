<?php include_once("connection.php");
	include "config.php";
	session_start();
	
	include "cart.class.php";
	$cart=new Cart();
	
	if(isset($_POST["submit"])){
		$item=[
			"id"=>$_POST["pid"],
			"name"=>$_POST["product"],
			"price"=>$_POST["price"],
			"qty"=>$_POST["qty"],
			"total"=>($_POST["qty"]*$_POST["price"]),
			"img"=>$_POST["img"],
		];
		$cart->add_to_cart($item);
		header("location:view_cart.php");
	}
	
	$data=[];
	$sql="select * from hht_poojas where ja_id={$_GET["id"]}";
	$res=$con->query($sql);
	if($res->num_rows>0){
		$data=$row=$res->fetch_assoc();
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>

  <!-- Basic Page Needs
================================================== -->
  <meta charset="utf-8">
  <title><?php echo $DOMAIN_NAME_PAGE;?> - View Details</title>

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
  <div class="body-inner">

    <?php include_once("header.php"); ?>

	<?php include "navbar.php"; ?>
        <div class='container mt-5'>
			<div class='row'>
				<div class='col-md-9 mx-auto'>
					<h2 class='text-muted mb-4'>Product Details</h2><hr>
					<div class='row mt-5'>
						<div class='col-md-4'>
							  <?php       if($data['pooja_image']=="") {?>
             <p> <img src="images/thumb_donation.jpg"></p>
              <?php } else { ?>
             <p> <img src="uploads/<?=$data['pooja_image']?>" style='height:130px;'></p>
              <?php } ?>
						</div>	
						<div class='col-md-8'>
							<h2 class='text-muted'><?php echo $data["pooja_title"]; ?></h2>
							<p style="width:35px; float:left;">Price</p> <p style="font-weight:bold; color:#FF0000; font-size:18px;">£<?php echo $data["price"]; ?></p>
							<p><?php echo $data["pooja_des"]; ?></p>
							
							<form method='post' action='<?php echo $_SERVER["REQUEST_URI"];?>'>
								<input type='hidden' name='pid' value='<?php echo $data["ja_id"]; ?>'>
								<input type='hidden' name='product' value='<?php echo $data["pooja_title"]; ?>'>
								<input type='hidden' name='price' value='<?php echo $data["price"]; ?>'>
								<input type='hidden' name='img' value='<?php echo $data["pooja_image"]; ?>'>
									<p><input type='number' min='1' value='1' name='qty' required class='form-control col-md-5'></p>
								<input type='submit' name='submit' value='Add To Cart' class='btn btn-primary'>
							</form>
						</div>
					</div><br /><br /><br /><br />
				</div>
			</div>
		</div>
      </article>


    <?php include_once("footer.php"); ?>

  </div>
  </body>
  </html>