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

if($_POST['save'] == "Submit" && $_POST['j_id'] > 0)
{ 
	
		
			$ext_qry1 = "";
			if($_FILES['ja_add_image1']['name'] <> "") {
					if($_FILES['ja_add_image1']['error'] == 0)
					{
						$file_name = time()."_".$_FILES['ja_add_image1']['name'];
						
						if(move_uploaded_file($_FILES['ja_add_image1']['tmp_name'], "uploads/".$file_name))
						{
							$ext_qry1 = " news_image = '".$file_name."' ";
							
								   $qry_upd = "UPDATE hht_news SET news_title = '".addslashes(trim($_POST['title']))."',
											 news_status = '".addslashes(trim($_POST['nsta']))."',
												news_des = '".addslashes(trim($_POST['article']))."',											 
											 news_ip = '".$_SERVER['SERVER_ADDR']."',
											   ".$ext_qry1."
											   WHERE ja_id = '".addslashes($_POST['j_id'])."'";  
						}			
					}
			} else {
				   $qry_upd = "UPDATE hht_news SET news_title = '".addslashes(trim($_POST['title']))."',
											 news_status = '".addslashes(trim($_POST['nsta']))."',
												news_des = '".addslashes(trim($_POST['article']))."',											 
											 news_ip = '".$_SERVER['SERVER_ADDR']."'

											   WHERE ja_id = '".addslashes($_POST['j_id'])."'";  
			}

	

		if(mysqli_query($conn,$qry_upd))
		{
			
		
			$_SESSION['msg'] = "News details updated successfully";
			header("Location: news.php");
			exit();
		}
		else
		{
			$_SESSION['msg'] = "Error: Please try again";
		}
}


		
	

if($_GET['j_id'] > 0)
{
	$h1tag = "Edit News Details"; 
}
else
{
	$h1tag = "Add News Details"; 
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
	$('#end_date2').datepicker({dateFormat: 'dd/mm/yy'});
	$('#strt_date2').datepicker({dateFormat: 'dd/mm/yy'});	

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
        <div id="addpurchase">
        <?php
		if($_SESSION['msg'] != "")
		{
			echo '<div class="error_msg">'.$_SESSION['msg'].'</div>';
			$_SESSION['msg'] = '';
		}
		 if($_GET['j_id']){

		 $adv_details = mysqli_query($conn,"SELECT * FROM hht_news where ja_id = ".$_GET['j_id']);
		 $res_details = mysqli_fetch_assoc($adv_details);
			}
		?>
          <form action="edit_news.php" enctype="multipart/form-data" name="addpurchasefrm" method="post" id="addpurchasefrm" >
          <input type="hidden" name="j_id" value="<?php echo $_GET['j_id']; ?>" />
            <table width="140%" border="0" cellspacing="0" cellpadding="5">
              <tr>
                <td class="bold aright">News Title : <span class="red14">* </span></td>
                <td>
                	
                    <input type="text" name="title" id="title" placeholder="" value="<?php echo $res_details['news_title'];?>" required /></td>
              </tr>
             <tr>
                <td class="bold aright">News Status : <span class="red14">* </span></td>
                <td>
                	
                    <select id="nsta" name="nsta">
                <option value="">-- Select Staus--</option>
						 <?php
                if($res_details['news_status']==1)
                { ?>
                   <option  value="1" selected="selected">Active</option>
                   <?php } else { ?>
                  <option  value="0" selected="selected">In-Active</option>
				 <?php }  ?>
                   <option  value="1">Active</option>
                   <option  value="0">In-Active</option>
                    </select></td>
              </tr>
               <tr>
                <td class="bold aright">News Artile/Content : <span class="red14">* </span></td>
                <td>
                	
                     <?php 
                                $oFCKeditor = new FCKeditor('article',550,300);
                                $oFCKeditor->BasePath = 'fckeditor/';
                                $oFCKeditor->Value = stripslashes($res_details['news_des']);
                                $oFCKeditor->Create() ;
                                ?>	</td>
              </tr>
                <tr>
                <td class="bold aright">News Image  : </td>
                <td><input type="file" name="ja_add_image1" id="ja_add_image1" /><?php if($res_details['news_image']){?><img src="uploads/<?php echo $res_details['news_image']; ?>" height="150" ><?php }?></td>
              </tr>
               <tr>
                <td class="bold aright">&nbsp; </td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td colspan="2" align="center"><input type="submit" name="save" value="Submit" /></td>
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
