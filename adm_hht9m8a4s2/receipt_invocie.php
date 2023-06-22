<?php 	include "config.php";
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
<title>:: <?php echo $DOMAIN_NAME_PAGE;?> Receipt / Invoice ::</title>
<link type="text/css" rel="stylesheet" href="css/style.css" />
<link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="screen" />
<!--[if IE]>
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<link rel="stylesheet" type="text/css" href="css/jquery-ui.css"> 



<style type="text/css" >
#swfupload-control p{ margin:10px 5px; font-size:0.9em; }
#swfupload-control1 p{ margin:10px 5px; font-size:0.9em; }
#log{ margin:0; padding:0; width:200px;}
#log li{ list-style-position:inside; margin:2px; border:1px solid #ccc; padding:5px; font-size:11px; 
	font-family:Arial; color:#000000; background:#fff; position:relative;}
#log li .progressbar{ border:1px solid #333; height:3px; background:#fff; }
#log li .progress{ background:#999; width:0%; height:5px; }
#log li p{ margin:0; }
#log li .status{ margin:0; color:#009900; float:left;}
#log li.success{ border:1px solid #cccccc; background:#ffffff; }
#log li span.cancel{ position:absolute; top:5px; right:5px; width:20px; height:20px; 
	background:url('phpuploader/js/swfupload/cancel.png') no-repeat; cursor:pointer; }
#log1{ margin:0; padding:0; width:200px;}
#log1 li{ list-style-position:inside; margin:2px; border:1px solid #ccc; padding:5px; font-size:11px; 
	font-family:Arial; color:#000000; background:#fff; position:relative;}
#log1 li .progressbar{ border:1px solid #333; height:3px; background:#fff; }
#log1 li .progress{ background:#999; width:0%; height:5px; }
#log1 li p{ margin:0; }
#log1 li .status{ margin:0; color:#009900; float:left;}
#log1 li.success{ border:1px solid #cccccc; background:#ffffff; }
#log1 li span.cancel{ position:absolute; top:5px; right:5px; width:20px; height:20px; 
	background:url('phpuploader/js/swfupload/cancel.png') no-repeat; cursor:pointer; }
a {
text-decoration: none;
}	

#logo {
    margin: auto;
    padding: 10px 0;
    width: 100%;
    text-align: center;
}
.wrapbg {
    width: 986px;
    margin: 13px auto;
    border-radius: 5px;
    behavior: url(ie-css3.htc);
    border: 1px solid #b8aeae;
}

.article {
    /* background: #fff url(../images/cnt_bg.jpg) center top repeat-x; */
    /* border: 1px solid #fff; */
    /* width: 100%; */
    margin: 0 auto;
    margin-top: 10px;
    padding: 10px;
    /* min-height: 360px; */
}
.invoice {
	width: 100%;
    margin: auto;
    float: left;
    margin: 10px 0;
}
.invoice h1 {
    font-weight: bold;
    font-size: 29px;
    text-align: center;
    padding: 5px 0;
}
.invoice p {
    font-weight: bold;
    font-size: 16px;
    text-align: center;
}
.namaha_main {
	width: 100%;
    float: left;
    margin: 0 0 10px 0;
}
.namaha_main .left {
	width: 46%;
    float: left;
    margin-right: 62px;
    top: 0;
}
.namaha_main .left p {
	font-weight: bold;
    font-size: 16px;
	color:#FF0000;
	text-align:right;
}
.namaha_main .right {
	 width: 45%;
    float: left;
}
.namaha_main .right p {
	font-weight: bold;
    font-size: 16px;
    color: #FF0000;
    text-align: left;
}
.invoice_list table td {
    font-size: 14px;
	text-align:left;
}
.bold {
    font-weight: bold;
}
.aright {
    text-align: right;
}
.dotted {
	border-bottom: 2px dotted #000;
}
.left {
	float:left;
	margin-right:10px;
	position:relative;
	top:5px;
}
.mid {
	float:left;
	width:39%;
	margin-right:10px;
}
.right {
	float:right;
	width:35%;
}
.right1 {
	float:right;
	width:85%;
}
.right2 {
	float:right;
	width:88%;
}
input[type=checkbox]:not(old) {
    width: 20px;
    margin: 0;
    padding: 0;
    font-size: 1em;
    height: 20px;
}
strike {
	font-size:14px;
}
</style>
<script type="text/javascript">
$(document).ready(function() {	
	$("#prdcat_id").autocomplete({
		source:'getname.php'
	});		
});
</script>
</head>
<body>

<div class="clear"></div>
<div class="wrapbg">

  <div id="wrapper">
  <div id="logo"><a href="https://www.hanumanhindutemple.org"><img src="images/logo.png" alt=""></a></div>
    <div class="invoice">
    <div class="namaha_main">
    	<div class="left"><p>Sri Ganeshaya Namaha</p></div>
        <div class="right"><p>Aum Namo Hanumate Namaha</p></div>
    </div>
    	<p>SRI DATTA YOGA CENTRE (UK) - UK Registered Charity Number 1003856</p>
        <h1>Hanuman Hindu Temple</h1>
        <p>51 Beech Avenue, Brentford, Middlesex, TW8 8NQ</p>
        <div class="clear"></div>
      </div>
    <section>
    
      
      <div class="article">
       <?php //include_once("employee_detials_left.php"); 
	  // echo "SELECT * FROM hht_users where e_id = ".$_SESSION['usrweb_mano']."";
	   $sql_pesonal = mysqli_query($con,"SELECT * FROM hht_users where email = '".$_SESSION['usrweb_mano']."'");
	$pesonal_det = mysqli_fetch_assoc($sql_pesonal);

  $orders = mysqli_query($con,"SELECT * FROM orders where ORDER_NO = ".$_SESSION["orderno"]."");
	$order_det = mysqli_fetch_assoc($orders);
	
	$orders = mysqli_query($con,"SELECT *,DATE_FORMAT(ORDER_DATE, '%d-%m-%Y') as sdate FROM orders where ORDER_NO = ".$_SESSION["orderno"]."");
	$order_det = mysqli_fetch_assoc($orders);
	   ?>
        
         <div class="invoice_list">
         
         
        <table width="100%" border="0" cellspacing="20" cellpadding="5">
              <tr>
                <td class="left">Receipt No.</td>
                <td class="bold mid" style="font-size:25px; width:580px; top:-5px; position:relative;"><?php echo $order_det["ORDER_NO"];?></td>
                <td class="left">Date:</td>
                <td class="bold dotted mid" style="margin-right: 0; width:150px;"><?php echo $order_det["sdate"];?></td>
              </tr>
             
              <tr>
                <td class="left">Name Mr/Mrs/Ms</td>
                <td class="bold dotted mid"><?php echo ucwords($pesonal_det["e_fname"]." ".$pesonal_det["e_mname"]);?></td>
                <td class="bold dotted right"><?php echo ucwords($pesonal_det["e_lname"]);?></td>
              </tr>
              <tr>
                <td class="left">Gotram</td>
                <td class="bold dotted mid"><?php echo ucwords($pesonal_det["gotram"]);?></td>
                <td class="left">Nakshatram </td>
                <td class="bold dotted mid" style="width: 352px; margin-right: 0;"><?php echo ucwords($pesonal_det["nakshatram"]);?></td>
              </tr>
              <tr>
                <td class="left">Home Address</td>
                <td colspan="2" class="bold dotted right1"><?php echo ucwords($pesonal_det["address1"]);?></td>
              </tr>
              <tr>
                <td class="left">Town</td>
                <td class="bold dotted mid"><?php echo ucwords($pesonal_det["city"]);?></td>
                <td class="left">Post Code</td>
                <td class="bold dotted mid" style="width: 385px; margin-right: 0;"><?php echo strtoupper($pesonal_det["zipcode"]);?></td>
              </tr>
              <tr>
                <td class="left">Amount Received £</td>
                <td class="bold dotted mid" style="width:150px;"><?php echo $order_det["TOTAL_AMT"];?>/-</td>
                <td class="left">(in words)</td>
                <td class="bold dotted mid" style="width:481px; float:right;"> </td>
              </tr>
            

              <tr>
                <td class="left">For</td>
                <td class="left"><label><input type="checkbox" name="checkbox" id="checkbox" /></label></td>
                <td class="left">Donation</td>
                <td class="left"><label><input type="checkbox" name="checkbox" id="checkbox" /></label></td>
                <td class="left">Sponsorship</td>
                <td class=" left"><label><input type="checkbox" name="checkbox" id="checkbox" /></label></td>
                <td class="left">Other</td>
              </tr>
              <tr>
                <td colspan="4" class="left"><h1 style="font-size:14px; font-weight:bold;">Boost your donation by 25p of Gift Aid for every £1 you donate. Tick box if applicable.</h1></td>
              </tr>
              <tr>
                <td class="left"><label><input name="checkbox" type="checkbox" id="checkbox" style="width:75px; height:75px;" checked="checked" />
                </label></td>
              <td style="text-align:justify;" class="right2"><span style="font-weight:bold;">YES -</span> I want to Gift Aid my donation made today and any donation I make in the future or have made in the past four
years to date. I am a UK tax payer and understand that if I pay less Income Tax and/or Capital Gains Tax than the
amount of Gift Aid claimed on all my donations in that tax year, it is my responsibility to pay any difference.</td>
              </tr>
            </table>
            
          </form>
      </div>
        
        <div class="clear"></div>
      </div>
     
      <div class="clear"></div>
    </section>
    <div class="clear"></div>
  </div>
  <!-- wrapper ends here -->
  <div class="clear"></div>
</div>
      <?php //include_once("footer.php"); 
	  $cart->destroy();
	  $_SESSION['usrweb_mano']="";
	  $_SESSION["orderno"]=""
	  ?>

<!-- bgwrapper ends here -->
</body>
</html>
