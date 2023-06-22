 <nav class="navbar-default navbar-side" role="navigation">
		
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">

                    <li>
                        <a class="active-menu" href="dashboard.php"><img style="margin-top:-7px;" src="dashboard/assets/img/home.png" align="absmiddle"> My Account</a>
                    </li>
                    <li>
                        <a href="family_members_donors.php"><img style="margin-top:-7px;" src="dashboard/assets/img/family_icon.png" align="absmiddle"> Family Members / Donors</a>
                    </li>
                    <li>
                        <a href="m_calendar.php"><img style="margin-top:-7px;" src="dashboard/assets/img/calendar.png" align="absmiddle"> Calendar</a>
                    </li>
                    <li>
                        <a href="m_events.php"><img style="margin-top:-7px;" src="dashboard/assets/img/events.png" align="absmiddle"> Events</a>
                    </li>
                    <li>
                        <a href="m_pooja_services.php"><img style="margin-top:-7px;" src="dashboard/assets/img/pooj.png" align="absmiddle"> Poojas</a>
                    </li>
					<li>
                        <a href="m_donations.php"><img style="margin-top:-7px;" src="dashboard/assets/img/don.png" align="absmiddle"> Donations</a>
                    </li>
                    <li>
                        <a href="view_cart.php"><img src="images/cart_front.png"> </i> Cart (<?php echo $cart->get_cart_count();?>)</a>
                    </li>
                   <br>
                    <li>
                        <a href="logout.php"><i style="width: 15px; text-align: left; padding: 0; margin-right: 0;" class="fa fa-sign-out fa-fw"></i> Logout</a>
                    </li>
     
                </ul>

            </div>

        </nav>