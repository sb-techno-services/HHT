<?php include_once("connection.php");
if(empty($_SESSION['usr_id']))
{
	header("Location: login.php");
	exit();
}
if($_POST['save'] == "Submit" && $_POST['p_id'] > 0)
{ 
	if($_POST['p_drvng_license'] != "")
	{
		
		if($_FILES['a_path']['error'] == 0)
	{
		$file_name = time()."_".$_FILES['a_path']['name'];
		
		if(move_uploaded_file($_FILES['a_path']['tmp_name'], "uploads/".$file_name))
		{
		
			$sql_query_attact = mysql_query("INSERT INTO hrm_attachemnts SET e_id= '".addslashes(trim($_POST['acc_id']))."',
																				mul_id = '".addslashes($_POST['p_id'])."',
																			 	a_title = '".addslashes(trim($_POST['a_title']))."',
																				a_path = '".$file_name."',
																				a_type= 'personal_detials',
																				a_comments= '".addslashes(trim($_POST['a_comments']))."',
																				a_date = '".date("Y-m-d")."'");
		}			
	}
		
		
		$qry_add = "UPDATE hrm_emp_personal SET p_otherid = '".addslashes(trim($_POST['p_otherid']))."',
												p_drvng_license = '".addslashes(trim($_POST['p_drvng_license']))."',
												p_exp_date = '".addslashes(trim($_POST['p_exp_date']))."',
												p_gender = '".addslashes(trim($_POST['p_gender']))."',
												p_marital = '".addslashes(trim($_POST['p_marital']))."',
												p_nationality = '".addslashes(trim($_POST['p_nationality']))."',												
												p_dob = '".addslashes(trim($_POST['p_dob']))."'
												WHERE p_id = '".addslashes($_POST['p_id'])."' ";
												
		if(mysql_query($qry_add))
		{
			
		
			$_SESSION['msg'] = "Employee Personal details updated successfully";
			header("Location: employee_personal_detials.php?e_id=".$_POST['acc_id']."");
			exit();
		}
		else
		{
			$_SESSION['msg'] = "Error: Please try again";
		}
		
	 
	}
	else
	{
		$_SESSION['msg'] = "Please enter First Name";
	
	}
	exit();
}
if($_POST['save'] == "Submit")
{
	if($_POST['p_drvng_license'] != "")
	{
	
	
	
	$qry_add = "INSERT INTO hrm_emp_personal SET e_id = '".addslashes(trim($_POST['acc_id']))."',
												p_otherid = '".addslashes(trim($_POST['p_otherid']))."',
												p_drvng_license = '".addslashes(trim($_POST['p_drvng_license']))."',
												p_exp_date = '".addslashes(trim($_POST['p_exp_date']))."',
												p_gender = '".addslashes(trim($_POST['p_gender']))."',
												p_marital = '".addslashes(trim($_POST['p_marital']))."',
												p_nationality = '".addslashes(trim($_POST['p_nationality']))."',
												p_dob = '".addslashes(trim($_POST['p_dob']))."',
												p_date = '".date("Y-m-d")."' ";
	
		
		
												
		mysql_query($qry_add);
		$id = mysql_insert_id();
		if($_FILES['a_path']['error'] == 0)
	{
		$file_name = time()."_".$_FILES['a_path']['name'];
		
		if(move_uploaded_file($_FILES['a_path']['tmp_name'], "uploads/".$file_name))
		{
		
			$sql_query_attact = mysql_query("INSERT INTO hrm_attachemnts SET e_id= '".addslashes(trim($_POST['acc_id']))."',
																			 mul_id = '".$id."',
																			 	a_title = '".addslashes(trim($_POST['a_title']))."',
																				a_path = '".$file_name."',
																				a_type= 'personal_detials',
																				a_comments= '".addslashes(trim($_POST['a_comments']))."',
																				a_date = '".date("Y-m-d")."'");
		}			
	}
		
			
			$_SESSION['msg'] = "Employee Personal details added successfully";
			header("Location: employee_personal_detials.php?e_id=".$_POST['acc_id']."");
			exit();
		
		
	  
	}
	else
	{
		$_SESSION['msg'] = "Please enter License Number";
	
	}
	
}
if($_GET['e_id'] > 0 && $_GET['p_id'] > 0)
{
	$qry_account = mysql_query("SELECT * FROM hrm_employee WHERE e_id = '".$_GET['e_id']."'");
	$account = mysql_fetch_assoc($qry_account);
	$h1tag = "Edit Employee Personal Details"; 
}
else
{
	$account = $_POST;
	$h1tag = "Add Employee Personal Details"; 
}
if($_GET['e_id'] > 0)
{
$qry_account = mysql_query("SELECT * FROM hrm_employee WHERE e_id = '".$_GET['e_id']."'");
	$account = mysql_fetch_assoc($qry_account);
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
$(document).ready(function() {	
	
	$('.readonlyone input').attr('disabled', 'disabled');
	$('.readonlyone select').attr('disabled', 'disabled');
	
	$('#p_exp_date').datepicker({dateFormat: 'yy-mm-dd'});
	$('#p_dob').datepicker({dateFormat: 'yy-mm-dd'});	
	
	$("#addpurchasefrm").validate({
		rules: {
			p_drvng_license: { required:true }		
			//e_lname: { required:true },
			//acc_quantity: { required:true },
			//acc_unitprice: { required:true },
			//acc_amount: { required:true, number:true },
			//p_exp_date: { required:true }
		},
		messages: {
			//acc_title: { 
				//required:"Please Enter Title" 

				//email:"Please enter valid E-mail Address" 
			//},
			p_drvng_license: { 
				required:"Please Enter License Number " 
				//email:"Please enter valid E-mail Address" 
			}
			//e_lname: { 
				//required:"Please Enter Last Name  " 
				//email:"Please enter valid E-mail Address" 
		//	},
			//acc_unitprice: { 
				//required:"Please Enter Unit Price " 
				//email:"Please enter valid E-mail Address" 
		//	},
			//acc_amount: { 
//				required:"Please Enter amount", 
//				minlength:"Please Enter valid amount."  
//			},
			//p_exp_date: { required:"please enter valid date" }
		},
		errorElement: "span"
	});	
	
	
	
	
});

	
</script>
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
        <?php include_once("employee_detials_left.php"); ?>
        <div id="addpurchase" style="width:710px;">
        <?php
		if($_SESSION['msg'] != "")
		{
			echo '<div class="error_msg">'.$_SESSION['msg'].'</div>';
			$_SESSION['msg'] = '';
		}
		 $sql_pesonal = mysql_query("SELECT * FROM hrm_emp_personal where p_id = ".$_GET['p_id']."");
		 $pesonal_detials = mysql_fetch_assoc($sql_pesonal);
		?>
          <form action="add_per_detials.php" enctype="multipart/form-data" name="addpurchasefrm" method="post" id="addpurchasefrm" >
          <input type="hidden" name="acc_id" value="<?php echo $account['e_id']; ?>" />
           <input type="hidden" name="p_id" value="<?php echo $pesonal_detials['p_id']; ?>" />
            <table width="100%" border="0" cellspacing="0" cellpadding="5">
              <?php /*?><tr>
                <td class="bold aright">Other Id : <span class="red14">* </span></td>
                <td>
                	
                    <input type="text" name="p_otherid" id="p_otherid" placeholder="" value="<?php echo $pesonal_detials['p_otherid'];?>" /></td>
              </tr><?php */?>
              <tr>
                <td class="bold aright">Driver's License Number : </td>
                <td><input type="text" name="p_drvng_license" id="p_drvng_license" value="<?php echo $pesonal_detials['p_drvng_license']; ?>"  /></td>
              </tr>
              <tr>
                <td class="bold aright">License Expiry Date : </td>
                <td><input type="text" name="p_exp_date" id="p_exp_date" value="<?php echo $pesonal_detials['p_exp_date']; ?>" /></td>
              </tr>
              <tr>
                <td class="bold aright">Gender : </td>
                 <?php $gender = array("Male"=>"Male", "Female"=>"Female");?>
                <td>
                <?php 
				foreach($gender as $aa=>$vv)
				{
				if($vv==$pesonal_detials['p_gender']){$sal2='checked="checked"';}else{$sal2='';}	
				?>
                <input <?php echo $sal2; ?> type="radio" name="p_gender" value="<?php echo $aa; ?>">&nbsp;<?php echo $aa; ?>
                <?php
				}
				?>
               </td>
              </tr>
              
             
               <?php $status = array("Single"=>"Single", "Married"=>"Married", "Other"=>"Other");?>
              <tr>
                <td class="bold aright">Marital Status : </td>
                <td><select id="p_marital" name="p_marital">
                <option value="">-- Select --</option>
                   <?php 
				   foreach($status as $v=>$k)
				   {
				   if($v==$pesonal_detials['p_marital']){$sal='selected="selected"';}else{$sal='';}				   
				   ?>
                   <option <?php echo $sal; ?> value="<?php echo $v; ?>"><?php echo $v; ?></option>
                   <?php
				   }
				   ?>
                    </select>
                    </td>
              </tr>
              
              <tr>
                <td class="bold aright">Nationality : </td>
                <td><select id="p_nationality" name="p_nationality">
                <option value="">-- Select --</option>
                   <?php 
				   $sql_country = mysql_query("SELECT * FROM hrm_country");
				   while($country_detials = mysql_fetch_assoc($sql_country))
				   {
				   if($country_detials['place']==$pesonal_detials['p_nationality']){$sal1='selected="selected"';}else{$sal1='';}
				   ?>
                   <option  <?php echo $sal1; ?> value="<?php echo $country_detials['place']; ?>"><?php echo $country_detials['place']; ?></option>
                   <?php
				   }
				   ?>
                    </select>
                    </td>
              </tr>
              <tr>
                <td class="bold aright">Date of Birth : </td>
                <td><input type="text" name="p_dob" id="p_dob" value="<?php echo $pesonal_detials['p_dob']; ?>" /></td>
              </tr>
              
              <tr>
              <td colspan="3">
              <hr />
              </td>
              </tr>
              <tr>
                <td class="bold" colspan="2">Attachments </td>
              </tr>
              <tr>
                <td class="bold aright">Title : </td>
                <td><input type="text" name="a_title" id="a_title"  /></td>
              </tr>
              
              <tr>
                <td class="bold aright">Select File : </td>
                <td><input type="file" name="a_path" id="a_path" /></td>
              </tr>
              <tr>
                <td class="bold aright">Comment : </td>
                <td><textarea name="a_comments" id="a_comments"></textarea></td>
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
