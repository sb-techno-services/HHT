<?php 
include_once("connection.php");
include("image_function.php");
include("fckeditor/fckeditor.php");

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


if($_REQUEST['save'] == "Submit"  && $_POST['title']!='')
{
	
	 //   $date = explode('/',$_POST['strt_date']);
	  //  $date1 = $date[2].'-'.$date[1].'-'.$date[0];
		
		
		$ext_qry1 = "";
		if($_FILES['ja_add_image1']['error'] == 0)
		{
			$file_name = time()."_".$_FILES['ja_add_image1']['name'];
			
			if(move_uploaded_file($_FILES['ja_add_image1']['tmp_name'], "uploads/".$file_name))
			{
				$ext_qry1 = " pooja_image = '".$file_name."', ";
			}			
		}
		
			$ext_qry2 = "";
		if($_FILES['ja_add_image2']['error'] == 0)
		{
			$file_name = time()."_".$_FILES['ja_add_image2']['name'];
			
			if(move_uploaded_file($_FILES['ja_add_image2']['tmp_name'], "uploads/".$file_name))
			{
				$ext_qry2 = " pooja_image2 = '".$file_name."', ";
			}			
		}
		
		$date = explode('/',$_POST['strt_date']);
	$date1 = $date[2].'-'.$date[1].'-'.$date[0];
		
		//$dtc   = new DateTime();
		//$expdate = $dtc->createFromFormat('d/m/Y', $_POST['i_exp_date']);
		
		$date3 = explode('/',$_POST['end_date']);
	$date4 = $date3[2].'-'.$date3[1].'-'.$date3[0];

	
	echo $qry_add = "INSERT INTO hht_poojas SET pooja_title = '".addslashes(trim($_POST['title']))."',
											 pooja_status = '1',
											   pooja_sdate = '".addslashes(trim($date1))."',
											   pooja_edate = '".addslashes(trim($date4))."',
												pooja_des = '".addslashes(trim($_POST['article']))."',	
												pooja_time = '".addslashes(trim($_POST['etime']))."',	
												pooja_location = '".addslashes(trim($_POST['eloc']))."',	
												pooja_country = '".addslashes(trim($_POST['country']))."',	
												pooja_cut_off = '".addslashes(trim($_POST['pooja_cut_off']))."',	
												pooja_type = '".addslashes(trim($_POST['pooja_type']))."',	
												pooja_freq = '".addslashes(trim($_POST['pooja_freq']))."',	
												price = '".addslashes(trim($_POST['price1']))."',	
											   ".$ext_qry1."
											   ".$ext_qry2."
											 pooja_ip = '".$_SERVER['SERVER_ADDR']."',
											   pooja_adddate = '".date('Y-m-d')."'"; 
		if(mysqli_query($conn,$qry_add))
		{
		   

			$_SESSION['msg'] = "Pooja details Added successfully";
			header("Location: poojas.php");
			exit();
		}
		else
		{
			$_SESSION['msg'] = "Error: Please try again";
		}
}
		
	

if($_GET['j_id'] > 0)
{
	$h1tag = "Manual Receipt"; 
}
else
{
	$h1tag = "Manual Receipt"; 
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

.thanks_main {
    background: #fff;
    border-radius: 5px;
    -moz-border-radius: 5px;
    -webkit-border-radius: 5px;
    -o-border-radius: 5px;
    -ms-border-radius: 5px;
    padding: 40px 0;
    border: 1px solid #ccc;
    margin: auto;
    height: auto;
    width: 65%;
    /* float: left; */
    text-align: center;
    margin-top: 60px;
}
.be-litle {
    font-family: Verdana;
    font-size: 12px;
    line-height: 40px;
    font-weight: bold;
    color: #007EC1;
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
        
        
		 <div class="thanks_main">
          	<div class="p-0 bg-transparent " id="headingTwo">
               
                <h2 class="bold" style="font-size:14px; color:#007EC1;">Thank you for registering with Donations.<br /><br />
                <h2 class="bold" style="font-size:14px; color:#007EC1;">Member details have been submitted successfully.<br /><br />
                <hr />
          		<span class="be-litle">&nbsp;•</span> <a href="members_donations.php"><input style="background-color:#fd6d03; width:105px;" type="submit" name="" value="CLICK HERE" class="btn btn-primary login_title_inn"></a> to place a Order Now.</h2>
            </div>
            
         </div><br /><br />
       
        
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
