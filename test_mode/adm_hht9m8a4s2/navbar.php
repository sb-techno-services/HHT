<nav style="width:100%;" class="navbar navbar-expand-lg navbar-dark bg-info ">
<div class='container'>
  <a class="navbar-brand" href="view_cart.php"> Shopping Cart</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div style="color:#CCCCCC;" class="navbar-nav ml-auto">
     <a class="nav-item nav-link" href="manual_order_listv.php"><img src="images/list_view_icon.png" /> List View <span style="color:#ccc;">&nbsp; |</span></a> <a class="nav-item nav-link" href="manual_order.php"><img src="images/all_poojas_donations.png" /> All Poojas / Donations <span style="color:#ccc;">&nbsp; |</span></a> 
      <a class="nav-item nav-link" href="view_cart.php"><img src="images/shopping_cart_icon.png" /> Cart (<?php echo $cart->get_cart_count();?>)</a>
    </div>
  </div>
  </div>
</nav>