<?php include_once("connection.php");
if(empty($_SESSION['usr_id']))
{
	header("Location: login.php");
	exit();
}
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

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>:: <?php echo $DOMAIN_NAME_PAGE.' '.$h1tag;?>::</title>
<link type="text/css" rel="stylesheet" href="css/style.css" />
<link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="screen" />
<!--[if IE]>
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

<script type="text/javascript" src="js/jquery.validate.js"></script>
<script type="text/javascript" src="js/jquery.ui.datepicker.validation.js"></script>
</head>
<body>
<?php include_once("header_logo.php"); ?>
<div class="clear"></div>
<div id="wrapbg">
  <div id="wrapper">
    <?php include_once("header_nav.php"); ?>
    <div class="clear"></div>
    <section>
      <div id="bar">
        <div class="clear"></div>
      </div>
      <article>
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
      <div class="clear"></div>
    </section>
    <div class="clear"></div>
  </div>
  <!-- wrapper ends here -->
  <div class="clear"></div>
</div>
<!-- bgwrapper ends here -->
</body>
</html>
