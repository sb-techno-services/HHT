<?php include_once("connection.php");


if($_REQUEST['save'] == "Submit"  )
{
	//	echo $number = count($_POST["name"]);
		$adv_details = mysqli_query($conn,"SELECT * FROM hht_users where email = '".$_SESSION['usrwebfe_id']."'");
		 $res_details = mysqli_fetch_assoc($adv_details); 
		 

			$uid=$res_details['e_id'];
		$number = count($_POST["name"]);
		 if($number > 0) { 
			 $message = false;
			 for($i=0; $i<$number; $i++) {
				 if(trim($_POST["name"][$i] != '')) { 
					 $sql = "INSERT INTO hht_users_rela (e_fname,e_date,e_id,relations,gotram,nakshatram) VALUES('".$_POST["name"][$i]."','".date('Y-m-d')."','".$res_details["e_id"]."','".$_POST["relation"][$i]."','".$_POST["gotram"][$i]."','".$_POST["nakstaram"][$i]."')";  	

					 mysqli_query($conn, $sql);
					 $message = true;
				 }
			 }
			 if($message == true){
			$_SESSION['msgu'] = "Thank You for registering with us and Account has been Created Successfully...";
			
		 if($cart->get_cart_total()>0) { 
			#insert Order information
			$order_no=rand(10000,100000);
			$total_amt=$cart->get_cart_total();
			//$sql="insert into orders (ORDER_NO,ORDER_DATE,UID,TOTAL_AMT) values ('{$order_no}',NOW(),'{$uid}','{$total_amt}')";
			$sql="insert into orders (ORDER_NO,ORDER_DATE,UID,TOTAL_AMT,PAY_STATUS) values ('{$order_no}',NOW(),'{$uid}','{$total_amt}','0')";
			
			if($con->query($sql)){
				$oid=$con->insert_id;
				
				#insert Order Item Details
				$sql="insert into order_details (OID,PID,PNAME,PRICE,QTY,TOTAL) values ";
				$rows=[];
				foreach($cart->get_all_items() as $item){
					$rows[]="('{$oid}','{$item["id"]}','{$item["name"]}','{$item["price"]}','{$item["qty"]}','{$item["total"]}')";
				}
				$sql.=implode(",",$rows);
				if($con->query($sql)){
					
					header("location:checkout_final.php?order_no={$order_no}");
				}
			} // cart order end
		 }
			 }
		 } else { 
			$_SESSION['msgu'] = "Error: Please try again";
		 }

	

	
}
	
?>
<!DOCTYPE html>
<html lang="en">
<head>

  <!-- Basic Page Needs
================================================== -->
  <meta charset="utf-8">
  <title>Thank You - Account Form</title>

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
.thbtn {
  	font-family: Verdana, Geneva, sans-serif;
    font-size: 20px;
    color: #fff;
    padding: 15px;
    background-color: #1486e7;
    margin: auto;
    text-align: center;
    width: 350px;
    font-weight: bold;
}
.thbtn a {
    color: #fff;
	text-decoration:none;
}
.thbtn a:hover {
    color: #fff;
	text-decoration:none;
}

@media screen and (max-width: 480px) {
.thbtn {
    font-size: 15px;
    padding: 10px;
    width: 100%;
}

}


@media only screen and (min-width: 481px) and (max-width: 768px) {
.thbtn {
	width: 75%;
}

}

  </style>
</head>
<body>
  <div class="body-inner">

    <?php include_once("header.php"); ?>




<section class="content">
  <div class="container">
    <div class="row">
        <div class="col-lg-12">
		 <div class="login_main">
          	<div class="p-0 bg-transparent " id="headingTwo">

<h1 class="sucesstext"><strong><?php echo $_SESSION['msgu'];?></strong></h1><br><br>
<br>
<div class="thbtn"><a href="dashboard.php"> Go to My Account Section &raquo;</a></div><br>
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