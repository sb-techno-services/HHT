<nav style="width:100%; padding:0;" class="navbar navbar-expand-lg navbar-dark bg-info ">
<div class='container'>
  <a class="navbar-brand" href="view_cart.php"> Shopping Cart</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div style="color:#CCCCCC;" class="navbar-nav ml-auto">
     <a style="color:#FFFFFF;" class="nav-item nav-link" href="pooja_services.php"><img src="images/pooj_front.png" /> All Poojas <span style="color:#ccc;">&nbsp; |</span></a> <a style="color:#FFFFFF;" class="nav-item nav-link" href="donations.php"><img src="images/don_front.png" /> All Donations <span style="color:#ccc;">&nbsp; |</span></a> 
      <a style="color:#FFFFFF;" class="nav-item nav-link" href="view_cart.php"><img src="images/cart_front.png" /> Cart (<?php echo $cart->get_cart_count();?>)</a>
    </div>
  </div>
  </div>
</nav>