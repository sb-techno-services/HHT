  <nav class="navbar navbar-default top-navbar" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"><img src="dashboard/assets/img/logo.png"></a>
            </div>
            <ul class="tophome_menu">
				<li style="margin-right:20px; float:left;" class="header-get-a-quote"><a style="background-color:#fd6d03;" class="btn btn-primary" href="index.php"><img style="margin-top:-7px;" src="dashboard/assets/img/home.png" align="absmiddle"> Home</a></li>
               <li style="margin-right:20px; float:left;" class="header-get-a-quote"><a style="background-color:#fd6d03;" class="btn btn-primary" href="view_cart.php"><img src="images/cart_front.png"> Cart (<?php echo $cart->get_cart_count();?>)</a></li>
                <li class="header-get-a-quote mar"><a style="background-color:#FF0000;" class="btn btn-primary" href="logout.php">Logout</a></li>
                
            </ul>
            <ul class="nav navbar-top-links navbar-right">

                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="edit-prof.php"><i class="fa fa-user fa-fw"></i> My Profile</a></li>
                        <li><a href="family_members_donors.php"><i class="fa fa-users"></i> Family Members / Donors</a></li>
                        <li class="divider"></li>
                        <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a></li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
        </nav>
                <!--/. NAV TOP  -->
