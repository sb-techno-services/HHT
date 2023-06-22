<?php include_once("connection.php");
if(empty($_SESSION['usr_id']))
{
	header("Location: login.php");
	exit();
}
$qry_account = mysqli_query($conn,"SELECT * FROM hht_newsletter ");
$account = mysqli_fetch_assoc($qry_account);

if($_GET['e_id']){
	$qry=mysqli_query($conn,"select e_id from hht_newsletter WHERE e_id=".$_REQUEST['e_id']."");

	$res=mysqli_fetch_assoc($qry);
	if(mysqli_num_rows($qry)>0){
		$del=mysqli_query($conn,"delete from hht_newsletter WHERE e_id=".$_REQUEST['e_id']."");
		header("Location: newsletter_sub.php");
		exit();
	}
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>:: <?php echo $DOMAIN_NAME_PAGE.' News Letter Subscriber Details';?> ::</title>
<link type="text/css" rel="stylesheet" href="css/style.css" />
<link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="screen" />
<!--[if IE]>
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

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
        <h1>News Letter Subscriber Details</h1>
        <div class="clear"></div>
      </div>
      <article>
      <?php //include_once("employee_detials_left.php"); ?>
        <div id="purchase_list" style="float: left;width: 100%;">
        <?php
		if(isset($_SESSION['msg']))
		{
			echo '<div class="error_msg">'.$_SESSION['msg'].'</div>';
			$_SESSION['msg'] = '';
		}
		?>
       
          <table width="130%" border="0"  cellpadding="0" cellspacing="0">
            <tbody>
           
              <tr>
                <th width="8%" align="center" valign="middle" bgcolor="#d8d1e9">S.No.</th>
                <th width="12%" align="center" valign="middle" bgcolor="#d8d1e9">Date</th>
                <th width="21%" align="center" valign="middle" bgcolor="#d8d1e9">Email</span></th>
                <th width="21%" align="center" valign="middle" bgcolor="#d8d1e9">Action</th>
                
              </tr>
              <?php
                $sql_purchase = mysqli_query($conn,"SELECT * FROM hht_newsletter order by e_id DESC");	
			  	if (mysqli_num_rows($sql_purchase))
				{
					$intSNo = 1;
					$i = 0;
					 while ($arrUsersRow = mysqli_fetch_array ($sql_purchase))
					{
						//$sql_updated_user = mysqli_query($conn,"SELECT * FROM  sai_users WHERE usr_id = ".$arrUsersRow['acc_updated']."");
						//$updated_user_details = mysqli_fetch_assoc($sql_updated_user);
															
			?>
              <tr class="<?=$class?>">
                <td align="center"><?=$intSNo?></td>
                <td align="left"><?php echo date('d/m/Y',strtotime($arrUsersRow['e_date'])); ?> &nbsp;</td>
                <td align="left"><?=$arrUsersRow['email']?></td>
                <td align="left">  <a href="newsletter_sub.php?e_id=<?=$arrUsersRow['e_id']?>">Delete</a></td>
              </tr>
              <?php				  	
																
					$intSNo++;
				}
			}
			else
			{
				?>
              <tr bgcolor="#EDF7FC">
                <td height="20" colspan="8" align="center" valign="middle" bgcolor="#EDF7FC"><span class="text"><font color='red'><b>No Data Available</b></font></span></td>
              </tr>
		  	<?php
            }
          	?>
            </tbody>
          </table>
        </div>
        <div class="clear"></div>
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