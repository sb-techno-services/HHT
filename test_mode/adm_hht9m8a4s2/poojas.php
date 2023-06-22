<?php include_once("connection.php");
if(empty($_SESSION['usr_id']))
{
	header("Location: login.php");
	exit();
}
$qry_account = mysqli_query($conn,"SELECT * FROM hht_poojas WHERE category = 'poojas'");
$account = mysqli_fetch_assoc($qry_account);

if($_GET['j_id']){
	$qry=mysqli_query($conn,"select ja_id from hht_poojas WHERE ja_id=".$_REQUEST['j_id']."");

	$res=mysqli_fetch_assoc($qry);
	if(mysqli_num_rows($qry)>0){
		$del=mysqli_query($conn,"delete from hht_poojas WHERE ja_id=".$_REQUEST['j_id']."");
		header("Location: poojas.php");
		exit();
	}
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>:: <?php echo $DOMAIN_NAME_PAGE.' Pooja Details';?> ::</title>
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
        <h1>Pooja Details</h1>
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
        <div class="btn"><a href="add_pooja.php">ADD Pooja </a></div>
          <table width="130%" border="0"  cellpadding="0" cellspacing="0">
            <tbody>
           
              <tr>
                <th width="8%" height="55" align="center" valign="middle" bgcolor="#d8d1e9">S.No.</th>
                <th width="12%" align="center" valign="middle" bgcolor="#d8d1e9">Pooja Title</th>
                <th width="21%" align="center" valign="middle" bgcolor="#d8d1e9">Pooja Start Date</span></th>
                <th width="12%" height="30%" align="center" valign="middle" bgcolor="#d8d1e9">Pooja Service/section</th>
                <th width="12%" align="center" valign="middle" bgcolor="#d8d1e9">Pooja Pooja Frequency</th>
                
                <th width="21%" align="center" valign="middle" bgcolor="#d8d1e9">Action</th>
                
              </tr>
              <?php
                $sql_purchase = mysqli_query($conn,"SELECT * FROM hht_poojas WHERE category = 'poojas' order by ja_id DESC");	
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
                <td align="left"><?=$arrUsersRow['pooja_title']?></td>
                <td align="left"><?php if($arrUsersRow['pooja_sdate']!=''){echo date('d/m/Y',strtotime($arrUsersRow['pooja_sdate']));}?></td>
                               <td align="left"><?=$arrUsersRow['pooja_category']?></td>
                <td align="left"><?=$arrUsersRow['pooja_freq']?></td>

                <td align="left"><a href="pooja_view.php?j_id=<?=$arrUsersRow['ja_id']?>">View</a> | <a href="edit_pooja.php?j_id=<?=$arrUsersRow['ja_id']?>">Edit</a> | <a href="poojas.php?j_id=<?=$arrUsersRow['ja_id']?>">Delete</a></td>
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
