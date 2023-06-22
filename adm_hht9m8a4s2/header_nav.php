<?php
$cuur_page = substr($_SERVER['SCRIPT_FILENAME'], strrpos($_SERVER['SCRIPT_FILENAME'], "/"), 250);


?>	
    <nav>         
      <ul>
        <li><a href="index.php" >Home</a> </li>
        <li class="<?php echo $se_trn_entry; ?>"><a href="#">CMS</a>
        	<ul>
				<li><a href="news.php">NEWS</a></li>
				<li><a href="events.php">EVENTS</a></li>
				<li><a href="poojas.php">POOJAS</a></li>
				<li><a href="donations.php">DONATIONS</a></li>
			</ul>

        </li>
         <li class="<?php echo $se_trn_entry4; ?>"><a href="members.php">Members</a></li>
         <li class="<?php echo $se_trn_entry4; ?>"><a href="manual_order.php">Manual Orders / Receipt</a></li>
         <li class="<?php echo $se_trn_entry4; ?>"><a href="newsletter_sub.php">News Letter Subscribers</a></li>
        <li><a href="logout.php">Logout</a></li>        
      </ul>
    </nav>