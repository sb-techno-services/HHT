<?php 

	include "config.php";
	session_start();
	

if(empty($_SESSION['usr_id']))
{
	header("Location: login.php");
	exit();
}
	
	include "cart.class.php";
	$cart=new Cart();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>::<?php echo $DOMAIN_NAME_PAGE;?> - Checkout Final Page::</title>
<link type="text/css" rel="stylesheet" href="css/style.css" />
<link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="screen" />
<!--[if IE]>
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<style>
th {
	font-size:15px;
	color:#000;
	font-weight:bold;
}
td {
	font-size:14px;
	color:#625e5e;
}
.row_total {
	font-size:14px;
	color:#625e5e;
}
td input {
	padding:3px;
}
.vibtnnew {
	float: left;
	padding: 7px;
	font-size: 19px;
	font-weight: bold;
}
.btn:hover {
	background: url(../images/bg_menu.jpg) repeat-x scroll center -5px rgba(0, 0, 0, 0);
	color: #fff;
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
        <div class='container mt-3'>
          <div class='row'>
            <div class='col-md-12'>
              <h2 class='text-muted mb-4'>Cart Items - Checkout Page</h2>
              <?php
			  $cartv=$cart->get_cart_count(); 
			  if( $cartv >0 ) {
			  ?>
              <div style="text-align:center; padding:5px;" class="alert alert-warning">Your Order Ref. no is #<strong><?php echo $_GET["order_no"];?></strong><br />
<br /> Customer Email: <strong><?php echo $_SESSION['usrweb_mano']; ?></strong>
</div> 
<?php } ?>
              <?php if($cart->get_cart_total()>0): ?>
              <table class='table table-striped table-bordered'>
                <thead>
                  <tr>
                    <th colspan='2' class='text-center'>Product</th>
                    <th>Price</th>
                    <th>Qty</th>
                    <th>Total</th>
                    <th>Action </th>
                  </tr>
                </thead>
                <tbody>
                  <?php $items=$cart->get_all_items(); ?>
                  <?php foreach($items as $item): ?>
                  <tr>
                    <td><?php  
					if($item["img"]=="") {?>
                      <img src="images/thumb_donation.jpg">
                      <?php } else { ?>
                      <img src='uploads/<?php echo $item["img"];?>' style='height:130px;' >
                      <?php } ?></td>
                    <td><?php echo $item["name"];?></td>
                    <td><p style="font-weight:bold; color:#FF0000; font-size:18px;">£ <?php echo $item["price"];?></p></td>
                    <td><input style="width:80px; text-align:center;" type='number' value='<?php echo $item["qty"];?>' class='qty' pid='<?php echo $item["id"]; ?>' min='1'></td>
                    <td>£ <span class='row_total'><?php echo $item["total"];?></span></td>
                    <td><a href='remove.php?id=<?php echo $item["id"]; ?>' onClick="return confirm('Are You Sure?')">Remove</a></td>
                  </tr>
                  <?php endforeach; ?>
                </tbody>
                <tfoot>
                  <tr>
                    <td colspan='3'>


                       </td>
                    <th>Total</th>
                    <th style="width:73px;"><p style="font-weight:bold; color:#FF0000; font-size:18px; width:15px; float:left;">£</p>
                      <span style="font-weight:bold; color:#FF0000; font-size:16px;" id='total'>
                      <p style="font-weight:bold; color:#FF0000; font-size:18px;"><?php echo $cart->get_cart_total();?></p>
                      </span></th>
                    <td style="width:155px;"><a href='receipt_invocie.php' class='btn btn-info vibtnnew' style="background-color:#CA0000; border:none; " target="_blank">PRINT RECEIPT / INVOICE &nbsp; &raquo; </a></td>
                  </tr>
                </tfoot>
              </table>
              <?php else: ?>
              <div class='alert alert-warning'>Cart is empty...</div>
              <?php endif; ?>
            </div>
          </div>
        </div>
        <script>
			$(document).ready(function(){
				$(".qty").change(function(){
					update_cart($(this));
				});
				$(".qty").keyup(function(){
					update_cart($(this));
				});
				
				function update_cart(cls){
					var pid=$(cls).attr("pid");
					var q=$(cls).val();
					
					$.ajax({
						url:"ajax_update_cart.php",
						type:"post",
						data:{id:pid,qty:q},
						success:function(res){
							console.log(res);
							
							var a=JSON.parse(res);
							$("#total").text(a.total);
							$(cls).closest("tr").find(".row_total").text(a.row_total);
						}
					});
				}
			});
		</script> 
      </article>
      <?php include_once("footer.php"); 
	  $_SESSION["orderno"]=$_GET["order_no"];
	 // $cart->destroy();
	  ?>
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
