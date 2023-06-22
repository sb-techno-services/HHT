<?php include_once("connection.php");
if(empty($_SESSION['usr_id']))
{
	header("Location: login.php");
	exit();
}

	include "config.php";
	  
	include "cart.class.php";
	$cart=new Cart();
  
	$data=[];
	$sql="select * from hht_poojas where pooja_status=1 order by ja_id DESC";
	$res=$con->query($sql);
	if($res->num_rows>0){
		while($row=$res->fetch_assoc()){
			$data[]=$row;
		}
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>:: <?php echo $DOMAIN_NAME_PAGE;?> - Manual Order ::</title>
<link type="text/css" rel="stylesheet" href="css/style.css" />
<link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="screen" />
<!--[if IE]>
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

<script type="text/javascript" src="js/jquery.validate.js"></script>
<script type="text/javascript" src="js/jquery.ui.datepicker.validation.js"></script>
<style>
.donat_btn_new {
    background-color:#17DB21;
    border-radius: 5px;
    width: 100px;
    font-size: 12px;
    margin: auto;
    text-align: center;
    margin-top: -20px;
    color: #fff;
    padding: 5px 25px;
	margin:0 4px;
	top:19px;
	position:relative;
}
.donat_btn_new a {
    color: #fff;
    text-decoration: none;
	font-size:13px;
}
.donat_btn_new1 {
    background-color: #ff681d;
    border-radius: 5px;
    width: 100px;
    font-size: 12px;
    margin: auto;
    text-align: center;
    margin-top: -20px;
    color: #fff;
    padding: 5px 25px;
	margin:0 4px;
	top: 19px;
    position: relative;
}
.donat_btn_new1 a {
    color: #fff;
    text-decoration: none;
	font-size:13px;
}
.card-img-top img {
max-width:100%;
}
.card-body {
    -webkit-box-flex: 1;
    -ms-flex: 1 1 auto;
    flex: 1 1 auto;
    padding: 10px 4px;
}
.imgdiv {
	width: 100%;
    float: left;
    height: 210px;
    border-bottom: 1px solid #dedede;
    padding: 2px;
    text-align: center;
}
.imgdiv img {
max-width:80%;
}

/* ------------------Tab 768px--------------- */ 

@media screen and (min-width: 481px) and (max-width: 768px) {
.donat_btn_new {
    font-size: 11px;
    margin: 0 -6px;
}

}

</style>
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
        <div class='container mt-5 pb-5'>
			<h2 class='text-muted mb-4 text-center'>All Poojas / Donations</h2>
			<div class='row'>
				<?php foreach($data as $row): ?>
					<div class='col-md-3 mt-2'>
						<div style="height:335px; margin:5px 0;" class="card">
                        <div class="imgdiv">
                          <?php       if($row['pooja_image']=="") {?>
                           <img src="images/thumb_donation.jpg" >
                                         <?php } else { ?>

						  <img src="uploads/<?php echo $row["pooja_image"]; ?>" >
                                        <?php } ?>
							</div>
						  <div class="card-body">
							<h5 class="card-title"><?php echo $row["pooja_title"]; ?></h5>
							<p class="card-text">
								<p style="width:35px; float:left;">Price</p> <p style="font-weight:bold; color:#FF0000; font-size:18px;">£<?php echo $row["price"]; ?> </p>
							</p>
                             <span style="float:left;">
                             <?php       if($row['category']=="poojas") {?>
                                <span class="donat_btn_new" style="padding:6px;">POOJAS</span>
							  <?php } else { ?>

                                <span class="donat_btn_new1" style="padding:6px; margin-left:5px;">DONATIONS</span>
						  <?php } ?>

                            </span>
							<a href="view_details.php?id=<?php echo $row["ja_id"]; ?>" class='btn btn-primary  float-right' >View Details</a>
						  </div>
						</div>
					</div>	
				<?php endforeach; ?>
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
