<?php 
include_once("connection.php");
//echo "sss - ". $_SESSION['usrweb_ida'];
function gtrim($string){
   
   $string = str_replace(" ", "-", $string);   
   $string=preg_replace('/[^A-Za-z0-9-.]+/', '', $string);
   $string = str_replace("--", "-", $string);
   $slug = str_replace("--", "-", $string);
   return $slug;
}

if(empty($_SESSION['usr_id']))
{
	header("Location: login.php");
	exit();
}



?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>:: <?php echo $DOMAIN_NAME_PAGE;?> Signup / Signin page ::</title>
<link type="text/css" rel="stylesheet" href="css/style.css" />
<link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="screen" />
<!--[if IE]>
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<link rel="stylesheet" type="text/css" href="css/jquery-ui.css"> 
<script type="text/javascript" src="js/jquery.min.js"></script> 
<script type="text/javascript" src="js/jquery-ui.min.js"></script> 
<script type="text/javascript" src="js/jquery.validate.js"></script>
<script type="text/javascript" src="js/jquery.ui.datepicker.validation.js"></script>
<script type="text/javascript">
$.noConflict();	
	jQuery( document ).ready(function($){
					
	$('.readonlyone input').attr('disabled', 'disabled');
	$('.readonlyone select').attr('disabled', 'disabled');
	
	$('#end_date').datepicker({dateFormat: 'dd/mm/yy'});
	$('#strt_date').datepicker({dateFormat: 'dd/mm/yy'});	

	$("#addpurchasefrm").validate({
		rules: {
			title: { required:true },			
			strt_date: { required:true },
			//acc_quantity: { required:true },
			//acc_unitprice: { required:true },
			//acc_amount: { required:true, number:true },
			end_date: { required:true }
		},
		messages: {
			//acc_title: { 
				//required:"Please Enter Title" 

				//email:"Please enter valid E-mail Address" 
			//},
			title: { 
				required:"Please Enter Title " 
				//email:"Please enter valid E-mail Address" 
			},
			strt_date: { required:"please enter valid date" },
			//acc_unitprice: { 
				//required:"Please Enter Unit Price " 
				//email:"Please enter valid E-mail Address" 
		//	},
			//acc_amount: { 
//				required:"Please Enter amount", 
//				minlength:"Please Enter valid amount."  
//			},
			end_date: { required:"please enter valid date" }
		},
		errorElement: "span"
	});	
	
	
	
	
});

	
</script>
<script type="text/javascript" src="image_js/behaviour.js"></script>
<script type="text/javascript" src="phpuploader/js/jquery-1.3.2.js"></script>
<script type="text/javascript" src="phpuploader/js/swfupload/swfupload.js"></script>
<script type="text/javascript" src="phpuploader/js/jquery.swfupload.js"></script>


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
<?php include_once("header_logo.php"); ?>
<div class="clear"></div>
<div id="wrapbg">
  <div id="wrapper">
    <?php include_once("header_nav.php"); ?>
    <div class="clear"></div>
    <section>
      <div id="bar">
        <h1><?php echo $h1tag; ?></h1>
        <div class="clear"></div>
      </div>
      <article>
       <?php //include_once("employee_detials_left.php"); ?>
       <div class="addpurchase_manul_main">
        <div id="addpurchase_manul">
       
          <form action="manual_receipt.php" enctype="multipart/form-data" name="addpurchasefrm" method="post" id="addpurchasefrm" >
          <input type="hidden" name="j_id" value="<?php echo $_GET['j_id']; ?>" />
          <h2 style="font-size:14px;">Returning Members Search ...</h2>	<br />
            <table border="0" cellpadding="5" cellspacing="0">
              <tr>
                <td class="bold aright retfom">First Name : </td>
                <td>
                    <input style="width:120px;" type="text" name="fname" id="fname" placeholder="First Name" value=""  /></td>
                <td class="bold aright2retfom">(or) Email Address : </td>
                <td>
                    <input style="width:120px;" type="text" name="email" id="email" placeholder="Email Address" value=""  /></td>
               </tr>
                <tr>
                <td class="bold aright retfom">Last Name : </td>
                <td>
                    <input style="width:120px;" type="text" name="lname" id="lname" placeholder="Last Name" value=""  /></td>
                 <td class="bold aright retfom">(or) Phone Number : </td>
                <td>
                    <input style="width:120px;" type="text" name="mobile" id="mobile" placeholder="Phone Number" value=""  /></td>
               </tr>
               
             
              <tr align="left">
                <td></td>
                <td></td>
                <td colspan="0" align="left" valign="middle" class="bold"><input class="btn" type="submit" name="Search" value="Search" /></td>
              </tr>
              
            </table>
          </form>
        </div>
        
        <div id="addpurchase_manu2">
        	<h2 style="font-size:14px;">New Members - Create Account ...</h2><br />
            <p style="text-align:center;">Please click 'New Members'</p><br />
            <a href="checkout.php"><input style="width:150px; background-color:#fd6d03;" class="btn" type="submit" name="" value="New Members" /></a>
        </div>
        </div>
        
        <div class="addpurchase_manul_main">
        	<table width="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="F0F8FC" class="be-line">
			                  <tbody><tr>
                  <td width="10">&nbsp;</td>
                  <td width="1065" class="be-litle"><table width="100%" border="0" align="center" cellpadding="2" cellspacing="1" bgcolor="#FFFFFF" class="backend-border">
                      <tbody><tr align="center" bgcolor="#F4FAFD">
                        <td width="36%" align="left" class="be-litle"><h2 style="font-size:14px;">Members Details ( Search ... )</h2></td>
                        <td width="35%" class="text"><img src="images/orangeclass.gif" width="30" height="30" border="0"></td>
                        <td width="29%" class="text"><img src="images/greenclass.gif" width="30" height="30"></td>
                        </tr>
                      <tr align="center" bgcolor="#F4FAFD">
                        <td bgcolor="#F4FAFD" class="text">&nbsp;</td>
                        <td bgcolor="#F4FAFD" class="text">New Registered Members with out Orders </td>
                        <td class="text">New Registered Members with Orders</td>
                        </tr>
                    </tbody></table></td>
                  <td width="10">&nbsp;</td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td><table width="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
                      <tbody><tr>
                        <td align="left" valign="top"><img src="images/curve-top-left.gif" width="5" height="5"></td>
                        <td width="99%" background="images/top-line.gif"><img src="images/top-line.gif" width="6" height="5"></td>
                        <td width="0%" align="right" valign="top"><img src="images/curve-top-right.gif" width="5" height="5"></td>
                      </tr>
                      <tr>
                        <td background="images/left-line.gif">&nbsp;</td>
                        <td align="center" valign="top"><table width="100%" border="0" align="center" cellpadding="0" cellspacing="1">
                            <tbody>
                              <tr>
                                <td width="4%" align="center" valign="middle" bgcolor="#B8D7EF" class="be-title2">S.No.</td>
                                <td width="17%" height="20" align="left" valign="middle" bgcolor="#B8D7EF" class="be-title2"><span class="text">&nbsp;</span>  Name</td>
                                <td width="17%" align="left" valign="middle" bgcolor="#B8D7EF"><span class="be-title2"><span class="text">&nbsp; </span>Email</span></td>
                                <td width="9%" align="center" valign="middle" bgcolor="#B8D7EF" class="rdmr_txt"><span class="be-title2"> <span class="text">&nbsp;</span> Mobile </span></td>
                               
                                <td width="17%" align="center" valign="middle" bgcolor="#B8D7EF" class="be-title2"><span class="text">&nbsp; </span> Billing Address </td>
                                <td width="12%" align="center" valign="middle" bgcolor="#B8D7EF" class="be-title2">Registration Date </td>
                                <td width="13%" align="center" valign="middle" bgcolor="#B8D7EF" class="be-title2"><span class="text">&nbsp; </span> Gotram / Nakshatram </td>
                              </tr>
                               <?php
					if($_POST['fname'] !="" ) {
						$sqlquery2.=" and e_fname='$_POST[fname]' ";
					}
					if($_POST['lname'] !="") {
						$sqlquery2.=" and e_lname='$_POST[lname]' ";							
					} 
					if($_POST['email'] !="") {
						$sqlquery2.=" and email='$_POST[email]' ";							
					} 
					if($_POST['mobile'] !="") {
						$sqlquery2.=" and mobile='$_POST[mobile]' ";							
					}
					//echo "SELECT *,DATE_FORMAT(e_date, '%M %e, %Y') as sdate FROM hht_users WHERE e_status=1 ".$sqlquery2." order by e_id DESC"; 
                $sql_purchase = mysqli_query($conn,"SELECT *,DATE_FORMAT(e_date, '%M %e, %Y') as sdate FROM hht_users WHERE e_status=1 ".$sqlquery2." order by e_id DESC");	
			  	if (mysqli_num_rows($sql_purchase))
				{
					$intSNo = 1;
					$i = 0;
					 while ($arrUsersRow = mysqli_fetch_array ($sql_purchase))
					{
						//$sql_updated_user = mysqli_query($conn,"SELECT * FROM  sai_users WHERE usr_id = ".$arrUsersRow['acc_updated']."");
						//$updated_user_details = mysqli_fetch_assoc($sql_updated_user);
												if($cnt==0){
													$class="redclass";										
												} else if($days<7){
													$class="greenclass";
												}									
			?>
                              <tr class="<?=$class?>">
                                <td align="center" class="text" ><?=$intSNo?></td>
                                <td align="left" class="text" title="<?=$arrUsersRow['e_fname']?> &nbsp;<?=$arrUsersRow['e_lname']?>"><a href="checkout.php?mid=<?php echo $arrUsersRow["e_id"]; ?>" class="newlink">
                                 <?=$arrUsersRow['e_fname']?> &nbsp;<?=$arrUsersRow['e_lname']?>                               </a></td>
                                <td align="left" class="text" title="<?=$arrUsersRow['email']?>"><a href="checkout.php?mid=<?php echo $arrUsersRow["e_id"]; ?>" class="newlink">
                                  <?=$arrUsersRow['email']?>                                </a></td>
                                <td align="left" valign="middle" style="height: 24px;" ><span class="text">
                                   <?=$arrUsersRow['mobile']?>                                </span></td>
                               
                                <td align="left" valign="middle" style="height: 24px;" ><span class="text">
                                   <?=$arrUsersRow['address1']?>  , <?=$arrUsersRow['city']?> ,<?=$arrUsersRow['country']?> , <?=$arrUsersRow['zipcode']?>                             </span></td>
                                <td align="center" valign="middle" style="height: 24px;"  class="text"> <?=$arrUsersRow['sdate']?></td>
                                <td align="center" valign="middle" style="height: 24px;"  class="text">&nbsp;
                                    <?=$arrUsersRow['gotram']?> / <?=$arrUsersRow['nakshatram']?></td>
                              </tr>
                              
                              <?php				  	
																
					$intSNo++;
				}
			}
			else
			{
				?>
                 <tr bgcolor="#EDF7FC">
                                <td height="20" colspan="8" align="center" valign="middle" bgcolor="#B8D7EF"> <span class="text"><font color='red'><b>No Data Available</b></font></span></td>
                              </tr>
                              	<?php
            }
          	?>
                              							  <tr bgcolor="#EDF7FC">
                                <td height="20" colspan="8" align="center" valign="middle" bgcolor="#B8D7EF"> </td>
                              </tr>
                            </tbody>
                        </table></td>
                        <td background="images/right-line.gif">&nbsp;</td>
                      </tr>
                      <tr>
                        <td align="left" valign="bottom"><img src="images/curve-bottom-left.gif" width="5" height="5"></td>
                        <td valign="bottom" background="images/bottom-line.gif"><img src="images/bottom-line.gif" width="6" height="5"></td>
                        <td align="right" valign="bottom"><img src="images/curve-bottom-rght.gif" width="5" height="5"></td>
                      </tr>
                  </tbody></table></td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                </tr>
              </tbody></table>
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
