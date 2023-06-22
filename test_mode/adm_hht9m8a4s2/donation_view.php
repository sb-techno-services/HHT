<?php include_once("connection.php");
echo "siva".$_SESSION['usr_fname']."-bb-".$_SESSION['usrweb_id'];
if(empty($_SESSION['usr_id']))
{
	header("Location: login.php");
	exit();
}

$sql_pesonal = mysqli_query($conn,"SELECT * FROM hht_poojas where ja_id = ".$_GET['j_id']."");
$pesonal_detials = mysqli_fetch_assoc($sql_pesonal);
$h1tag = "View Donation Details"; 


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>::<?php echo $DOMAIN_NAME_PAGE.' '.$h1tag;?> ::</title>
<link type="text/css" rel="stylesheet" href="css/style.css" />
<link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="screen" />
<!--[if IE]>
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<link rel="stylesheet" type="text/css" href="css/jquery-ui.css"> 

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
        <h1><?php echo $h1tag; ?> <?php //include_once("header_title.php"); ?></h1>
        <div class="clear"></div>
      </div>
      <article>
        <div id="purchase_list">
         
         
        <table width="100%" border="0" cellspacing="0" cellpadding="5">
              
              <tr>
                <td class="bold aright">Donation Title : </td>
                <td><?php echo $pesonal_detials['pooja_title']; ?></td>
              </tr>
           
              <tr>
                <td class="bold aright">Donation Description : </td>
                <td><?php echo $pesonal_detials['pooja_des']; ?></td>
              </tr>
               <tr>
                <td class="bold aright">Donation Status : </td>
                <td><?php 
				if($pesonal_detials['pooja_status']==1) {
				
				echo "Active"; 
				} else {
				echo "In-Active"; 
				}
					?></td>
              </tr>
             <tr>
                <td class="bold aright">Donation Type : </td>
                <td><?php echo $pesonal_detials['pooja_type']; ?></td>
              </tr>
               <tr>
                <td class="bold aright">Donation Price : </td>
                <td>£<?php echo $pesonal_detials['price']; ?></td>
              </tr>
              <tr>
                <td class="bold aright">Donation Image : </td>
                <td><?php 
				if($pesonal_detials['pooja_image']<>"") {
				
				?>
                <img src="uploads/<?php echo $pesonal_detials['pooja_image']; ?>" width="150" >
                <?php
				}
					?></td>
              </tr>
              
              
             
              
              
            </table>
            
          </form>
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
