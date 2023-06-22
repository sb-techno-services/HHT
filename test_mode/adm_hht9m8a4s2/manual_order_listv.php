<?php 
include_once("connection.php");
include("image_function.php");

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



		
	

if($_GET['j_id'] > 0)
{
	$h1tag = "All Poojas / Donations"; 
}
else
{
	$h1tag = "All Poojas / Donations"; 
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>:: <?php echo $DOMAIN_NAME_PAGE.' '.$h1tag;?> ::</title>
<link type="text/css" rel="stylesheet" href="css/style.css" />
<link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="screen" />
<!--[if IE]>
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<link rel="stylesheet" type="text/css" href="css/jquery-ui.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
		
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

.members_donations_main {
    background: #fff;
	float: left;
	width: 100%;
    /*border-radius: 5px;
    -moz-border-radius: 5px;
    -webkit-border-radius: 5px;
    -o-border-radius: 5px;
    -ms-border-radius: 5px;
    padding: 40px 0;
    border: 1px solid #ccc;*/
    margin: auto;
    height: auto;
    
    
    
    
}
.be-litle {
    font-family: Verdana;
    font-size: 12px;
    line-height: 40px;
    font-weight: bold;
    color: #007EC1;
    text-decoration: none;
}
.calendar_main {
    float: left;
    width: 100%;
    height: auto;
    margin-bottom: 50px;
    border: 1px solid #ccc;
}
.table-wrapper1 {
    height: 890px;
}
.fl-table1 {
    width: 100%;
}
.fl-table1 td {
    border-left: 1px solid #e8d8d8;
    border-top: 1px solid #d0c9c9;
    font-size: 12px;
	width:145px;
}
.startcal_text1 {
}
img {
    vertical-align: middle;
    border-style: none;
    max-width: 100%;
}
.evencal_text1 {
    /*height: 60px;*/
    padding: 10px;
}
b, strong {
    font-weight: bolder;
	line-height:25px;
}
.calendar_main {
    float: left;
    width: 100%;
    height: auto;
    margin-bottom: 50px;
    border: 1px solid #ccc;
}
.details_btn {
    background-color: #fd6d03;
    border-radius: 5px;
    width: 100px;
    font-size: 12px;
    margin: auto;
    cursor: pointer;
    text-align: center;
    margin-top: -20px;
    color: #fff;
}
.details_btn a {
    color: #fff;
}
.donat_btn {
    background-color: #fd6d03;
    border-radius: 5px;
    width: 100px;
    font-size: 12px;
    margin: auto;
    cursor: pointer;
    text-align: center;
    margin-top: -20px;
    color: #fff;
    padding: 7px 16px;
    margin: 0 8px;
    top: 40px;
    position: relative;
}
.donat_btn a {
    color: #fff;
    text-decoration: none;
	font-size:14px;
}
.donat_btn_new {
    background-color:#17DB21;
    border-radius: 5px;
    width: 100px;
    font-size: 12px;
    margin: auto;
    text-align: center;
    margin-top: -20px;
    color: #fff;
    padding: 5px 25px;
	margin:0 4px;
}
.donat_btn_new a {
    color: #fff;
    text-decoration: none;
	font-size:13px;
}
.donat_btn_new1 {
    background-color: #4b8df8;
    border-radius: 5px;
    width: 100px;
    font-size: 12px;
    margin: auto;
    text-align: center;
    margin-top: -20px;
    color: #fff;
    padding: 5px 25px;
	margin:0 4px;
	top: -5px;
    position: relative;
}
.donat_btn_new1 a {
    color: #fff;
    text-decoration: none;
	font-size:13px;
}
.scroll1 {
	overflow: auto;
}
.pooja_cal {
    padding: 10px;
    font-size: 13px;
    width: 96%;
    float: left;
    border: 1px solid #dedede;
    border-radius: 5px;
    background-color: #f9f8f8;
    margin: 5px 0;
}
.startcal_text1 {
	margin:auto;
	width:100%;
	text-align:center;
}
.startcal_text1 img {
max-width:100%;

}


@media screen and (max-width: 480px)
.scroll1 {
    /* width: 369px; */
    overflow-y: auto;
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
    
      <!--<div id="bar">
        <h1><?php echo $h1tag; ?></h1>
        <div class="clear"></div>
      </div>-->
      <article>
      
      <nav style="width:100%;" class="navbar navbar-expand-lg navbar-dark bg-info ">
<div class='container'>
  <a class="navbar-brand" href="view_cart.php"> Shopping Cart</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div style="color:#CCCCCC;" class="navbar-nav ml-auto">
     <a class="nav-item nav-link" href="manual_order.php"><img src="images/grid_view_icon.png" /> Grid View <span style="color:#ccc;">&nbsp; |</span></a> <a class="nav-item nav-link" href="manual_order.php"><img src="images/all_poojas_donations.png" /> All Poojas / Donations <span style="color:#ccc;">&nbsp; |</span></a> 
      <a class="nav-item nav-link" href="view_cart.php"><img src="images/shopping_cart_icon.png" /> Cart ()</a>
    </div>
  </div>
  </div>
</nav>

<div class='container mt-3'>
			<div class='row'>
				<div class='col-md-12'>
<h2 class='text-muted mb-4'>All Poojas / Donations</h2>
  </div>
  </div>
  </div>    
       <?php //include_once("employee_detials_left.php"); ?>
        
        <!--<h2 style="font-size:14px;">Members Donations</h2><br />-->
		 <div class="members_donations_main">
          	<div class="calendar_main">
       
<!--------donations table start----->

<div class="scroll1">
<div class="table-wrapper1">

    <table class="fl-table1">
        
        <tbody>
          <?php
                $sql_purchase = mysqli_query($conn,"SELECT *,DATE_FORMAT(pooja_sdate, '%a, %M %e, %Y') as sdate,DATE_FORMAT(pooja_edate, '%a, %M %e, %Y') as edate FROM hht_poojas where pooja_status=1 order by ja_id DESC");	
			  	
					 while ($arrUsersRow = mysqli_fetch_array ($sql_purchase))
					{
						//$sql_updated_user = mysqli_query($conn,"SELECT * FROM  sai_users WHERE usr_id = ".$arrUsersRow['acc_updated']."");
						//$updated_user_details = mysqli_fetch_assoc($sql_updated_user);
															
			?>
        <tr>
            <td style="width:115px;">
                <div class="startcal_text1">
            <?php       if($arrUsersRow['pooja_image']=="") {?>
             <p> <img src="images/thumb_donation.jpg"></p>
              <?php } else { ?>
             <p> <img src="uploads/<?=$arrUsersRow['pooja_image']?>" ></p>
              <?php } ?>
                 </div>             </td>
            <td style="width:800px;">
            	<div class="evencal_text1">
                    <p style="font-weight:bold; color:#fd6d03; font-size:15px;"><?php echo $arrUsersRow['pooja_title'];?></p>
                     
                    
                    <div class="pooja_cal">
                     <?php       if($arrUsersRow['category']=="poojas") {?>
                        <p style="line-height:27px;">Pooja Timings: <strong><strong><?php echo $arrUsersRow['pooja_time'];?></strong><br>
                            <img style="margin-right:5px;" src="images/clients/calen1.png" width="20" height="20"> <span class="pooja_link"><strong><?php echo $arrUsersRow['sdate'];?> - <?php echo $arrUsersRow['edate'];?></strong></span><br>
                            Seva closes by: <span style="color:#FF0000;"><strong><?php echo $arrUsersRow['pooja_cut_off'];?></strong></span></p>
							  <?php } else { ?>
                                <p>Donation Type: <strong><?php echo $arrUsersRow['pooja_type'];?></strong><br>
                           <br>
                            <strong>Description:</strong> <p style="color:#FF0000;"><?php echo substr($arrUsersRow['pooja_des'],0,130);?>...</p></p>
                    			 <?php } ?>

                            <span style="float:right;">
                             <?php       if($arrUsersRow['category']=="poojas") {?>
                                <span class="donat_btn_new" style="padding:6px;">POOJAS</span>
							  <?php } else { ?>

                                <span class="donat_btn_new1" style="padding:6px; margin-left:5px;">DONATIONS</span>
						  <?php } ?>

                            </span>
                     </div>
                        
                                        </div>            </td>
            <td colspan="0">
            <p style="font-weight:bold; color:#FF0000; text-align:center; font-size:18px;">£<?php echo $arrUsersRow['price'];?></p><br>

            <span class="donat_btn"><a href="view_details.php?id=<?php echo $arrUsersRow["ja_id"]; ?>">View Details</a></span></td>
         </tr>
         
          <?php
            }
          	?>
        <tbody>
    </table>
    </div>
</div>
<!--------donations table end------->
       </div>
            
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
