<?php include_once("connection.php");
		
	


?>
<!DOCTYPE html>
<html lang="en">
<head>

  <!-- Basic Page Needs
================================================== -->
  <meta charset="utf-8">
  <title><?php echo $DOMAIN_NAME_PAGE;?> - View Cart</title>

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
.dropdown-menu {
    position: absolute;
    top: 92%;
    left: 0;
    z-index: 1000;
    display: none;
    float: left;
    min-width: 10rem;
    padding: 0 20px;
    margin: 0.125rem 0 0;
    font-size: 1rem;
    color: #212529;
    text-align: left;
    list-style: none;
    background-color: #fff;
    background-clip: padding-box;
    border: 1pxsolidrgba(0,0,0,.15);
    border-radius: 0.25rem;
}
.btn-primary {
    color: #fff;
    background-color:#fd6d03;
    border-color:#fd6d03;
}
.btn-primary:hover {
    color: #fff;
    background-color:#fd6d03;
    border-color:#fd6d03;
}
section, .section-padding {
    padding: 0;
    position: relative;
}
.container {
    max-width: 1280px;
}
</style>
</head>
<body>
    <?php include_once("header.php"); ?>

  <div id="wrapper">
    <section>
      <div id="bar">
        <div class="clear"></div>
      </div>
      <article>
      <br>
        <?php include "navbar.php"; ?>
        <div class='container mt-3'>
          <div class='row'>
            <div class='col-md-12'>
              <h2 class='text-muted mb-4'>Cart Items</h2>
              <?php if($cart->get_cart_total()>0): ?>
              <div class="calendar_main">
                <div class="scroll">
                <div class="table-wrapper">
              <table class='table table-striped table-bordered'>
                <thead>
                  <tr>
                    <th colspan='2' class='text-center'>Product</th>
                    <th>Donation</th>
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
                      <img src='../test_mode/adm_hht9m8a4s2/uploads/<?php echo $item["img"];?>' style='height:130px;' >
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
                    <td colspan='3'><a href='pooja_services.php' class="btn btn-success vibtnnew" style="background-color:#28a745;"> &laquo; Continue Shopping</a></td>
                    <th>Total</th>
                    <th><p style="font-weight:bold; color:#FF0000; font-size:18px; width:15px; float:left;">£</p>
                      <span id='total'>
                      <p style="font-weight:bold; color:#FF0000; font-size:18px;"><?php echo $cart->get_cart_total();?></p>
                      </span></th>
                    <td style="width:155px;"><a href='account_login.php' class='btn btn-info vibtnnew' style="background-color:#CA0000; border:none; ">Checkout &nbsp; &raquo; </a></td>
                  </tr>
                </tfoot>
              </table>
              </div>
              </div>
              </div>
              <?php else: ?>
              <div class='alert alert-warning'>Cart is empty...</div><br>
<br>
<br>

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
      <br><br>
      <?php include_once("footer.php"); ?>
      <div class="clear"></div>
    </section>
    <div class="clear"></div>
  </div>
  <!-- wrapper ends here -->
  <div class="clear"></div>

<!-- bgwrapper ends here -->
</body>
</html>
