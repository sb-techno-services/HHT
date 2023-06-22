<?php 
	include "config.php";
	session_start();
	
	include "cart.class.php";
	$cart=new Cart();

if(empty($_SESSION['usr_id']))
{
	header("Location: login.php");
	exit();
}


	
	

if($_GET['j_id'] > 0)
{
	$h1tag = ""; 
}
else
{
	$h1tag = "Manual Receipt &raquo; New Members : Sign Up"; 
}

if($_GET['mid'] > 0) {
	$qry=mysqli_query($con,"select * from hht_users WHERE e_id=".$_REQUEST['mid']."");

	$res=mysqli_fetch_assoc($qry);


			$uid=$res['e_id'];
			$_SESSION['usrwebfe_mano'] = $res['email'];
			$_SESSION['usrwebfe_name'] = $res['e_fname'];

			#insert Order information
			$order_no=rand(10000,100000);
			$total_amt=$cart->get_cart_total();
			$sql="insert into orders (ORDER_NO,ORDER_DATE,UID,TOTAL_AMT) values ('{$order_no}',NOW(),'{$uid}','{$total_amt}')";
			if($con->query($sql)){
				$oid=$con->insert_id;
				
				#insert Order Item Details
				$sql="insert into order_details (OID,PID,PNAME,PRICE,QTY,TOTAL) values ";
				$rows=[];
				foreach($cart->get_all_items() as $item){
					$rows[]="('{$oid}','{$item["id"]}','{$item["name"]}','{$item["price"]}','{$item["qty"]}','{$item["total"]}')";
				}
				$sql.=implode(",",$rows);
				if($con->query($sql)){
				//	$cart->destroy();
					header("location:checkout_final.php?order_no={$order_no}");
				}
			}
			
		
}
	
	if(isset($_POST["save"])){
		
		$name=mysqli_real_escape_string($con,$_POST["fname"]);
		$email=mysqli_real_escape_string($con,$_POST["email"]);
		$contact=mysqli_real_escape_string($con,$_POST["mobile"]);
		$address=mysqli_real_escape_string($con,$_POST["addr1"]);
		$city=mysqli_real_escape_string($con,$_POST["city"]);
		$pincode=mysqli_real_escape_string($con,$_POST["zipcode"]);
		#insert User Details
		$sql="insert into users (NAME,EMAIL,CONTACT,ADDRESS,CITY,PINCODE) values ('{$name}','{$email}','{$contact}','{$address}','{$city}','{$pincode}')";
		$userquery=$con->query($sql);
			 $qry_add = "INSERT INTO hht_users SET 	 e_status = '1',
											   e_fname = '".addslashes(trim($_POST['fname']))."',
											   e_mname = '".addslashes(trim($_POST['mname']))."',
												e_lname = '".addslashes(trim($_POST['lname']))."',	
												e_pwd = '123456',	
												email = '".addslashes(trim($_POST['email']))."',	
												mobile = '".addslashes(trim($_POST['mobile']))."',	
												address1 = '".addslashes(trim($_POST['addr1']))."',	
												address2 = '".addslashes(trim($_POST['addr2']))."',	
												city = '".addslashes(trim($_POST['city']))."',	
												state = '".addslashes(trim($_POST['state']))."',
												country = '".addslashes(trim($_POST['country']))."',	
												zipcode = '".addslashes(trim($_POST['zipcode']))."',	
												gotram = '".addslashes(trim($_POST['gotram']))."',
												nakshatram = '".addslashes(trim($_POST['nakshatram']))."',	
													
											 ipaddr = '".$_SERVER['SERVER_ADDR']."',
											   e_date = '".date('Y-m-d')."'"; 
											   
			$_SESSION['usrwebfe_mano'] = addslashes(trim($_POST['email']));
			$_SESSION['usrwebfe_name'] = addslashes(trim($_POST['fname']));
			
		if($con->query($qry_add)){
			$uid=$con->insert_id;

			#insert Order information
			$order_no=rand(10000,100000);
			$total_amt=$cart->get_cart_total();
			$sql="insert into orders (ORDER_NO,ORDER_DATE,UID,TOTAL_AMT) values ('{$order_no}',NOW(),'{$uid}','{$total_amt}')";
			if($con->query($sql)){
				$oid=$con->insert_id;
				
				#insert Order Item Details
				$sql="insert into order_details (OID,PID,PNAME,PRICE,QTY,TOTAL) values ";
				$rows=[];
				foreach($cart->get_all_items() as $item){
					$rows[]="('{$oid}','{$item["id"]}','{$item["name"]}','{$item["price"]}','{$item["qty"]}','{$item["total"]}')";
				}
				$sql.=implode(",",$rows);
				if($con->query($sql)){
					
					header("location:checkout_final.php?order_no={$order_no}");
				}
			}
			
		}
		
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>:: <?php echo $DOMAIN_NAME_PAGE.' '.$h1tag;?> ::</title>
<link type="text/css" rel="stylesheet" href="css/style.css" />
<link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="screen" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
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
.login_main {
    background: #fff;
    border-radius: 5px;
    -moz-border-radius: 5px;
    -webkit-border-radius: 5px;
    -o-border-radius: 5px;
    -ms-border-radius: 5px;
    padding: 20px 70px;
    border: 1px solid #ccc;
    margin: auto;
    height: auto;
    width: 50%;
    /* float: left; */
}
article p {
    font-family: 'Droid Sans', Arial, Verdana, sans-serif;
    font-size: 13px;
    color: #000;
    text-align: justify;
    line-height: 20px;
    width: 100%;
    float: left;
}
.input-icon input {
    float: left;
    padding: 10px 0 10px 40px;
    width: 312px;
    border: 1px solid #999999;
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
       <nav style="width:100%; padding:0;" class="navbar navbar-expand-lg navbar-dark bg-info ">
<div class='container'>
  <a class="navbar-brand" href="view_cart.php"> Shopping Cart</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div style="color:#CCCCCC;" class="navbar-nav ml-auto">
     <a style="color:#FFFFFF;" class="nav-item nav-link" href="pooja_services.php"><img src="images/pooj_front.png" /> All Poojas <span style="color:#ccc;">&nbsp; |</span></a> <a style="color:#FFFFFF;" class="nav-item nav-link" href="donations.php"><img src="images/don_front.png" /> All Donations <span style="color:#ccc;">&nbsp; |</span></a> 
      <a style="color:#FFFFFF;" class="nav-item nav-link" href="view_cart.php"><img src="images/cart_front.png" /> Cart (<?php echo $cart->get_cart_count();?>)</a>
    </div>
  </div>
  </div>
</nav>
       <?php //include_once("employee_detials_left.php"); ?>
<div class='container mt-3'>
			<div class='row'>
				<div class='col-md-12'>
<h2 class='text-muted mb-4'>Register & Create an account</h2>
  </div>
  </div>
  </div>
        
		 <div class="login_main">
          	<div class="p-0 bg-transparent " id="headingTwo">
               
                <p class="marleft bold">Your Personal Details</p><br />
          <form action="<?php echo $_SERVER["REQUEST_URI"];?>" enctype="multipart/form-data" name="register" method="post" id="register" autocomplete="off">
                        <p>First Name <span class="require">*</span></p>
                        <div class="input-icon"><img src="images/user.png" /><input class="inp" id="fname" type="text" name="fname" maxlength="60" placeholder="First Name" required=""></div><br>
                        <p>Middle Name</p>
                        <div class="input-icon"><img src="images/user.png" /><input class="inp" id="mname" type="text" name="mname" maxlength="60" placeholder="Middle Name" ></div><br>
                        <p>Last Name <span class="require">*</span></p>
                        <div class="input-icon"><img src="images/user.png" /><input class="inp" id="lname" type="text" name="lname" maxlength="60" placeholder="Last Name" required=""></div><br>
                        <p>Gotram <span class="require">*</span></p>
                        <div class="input-icon"><img src="images/user.png" /><input class="inp" id="gotram" type="text" name="gotram" maxlength="60" placeholder="Gotram" required=""></div><br>
                        <p>Nakshatram <span class="require">*</span></p>
                        <div class="input-icon"><img src="images/user.png" /><input class="inp" id="nakshatram" type="text" name="nakshatram" maxlength="60" placeholder="Nakshatram" required=""></div><br>
                        <p>Email <span class="require">*</span></p>
                        <div class="input-icon"><img src="images/email.png" /><input class="inp" id="email" type="email" name="email" maxlength="60" placeholder="Email" required="" value="<?=$_REQUEST['email']?>"></div><br>
                        <p>Mobile Number <span class="require">*</span></p>
                        <div class="input-icon"><img src="images/mobile_number.png" /><input class="inp" id="mobile" type="text" name="mobile" maxlength="60" placeholder="Mobile Number" required=""></div><br>
                        
                    <p class="marleft bold">Your Address</p>  
                    	<p>Address Line 1 <span class="require">*</span></p>
                        <div class="input-icon"><img src="images/line.png" /><input class="inp" id="addr1" type="text" name="addr1" maxlength="60" placeholder="Address Line 1" required=""></div><br>
                        <p>Address Line 2 </p>
                        <div class="input-icon"><img src="images/line.png" /><input class="inp" id="addr2" type="text" name="addr2" maxlength="60" placeholder="Address Line 2" ></div><br>
                        <p>City <span class="require">*</span></p>
                        <div class="input-icon"><img src="images/city.png" /><input class="inp" id="city" type="text" name="city" maxlength="60" placeholder="City" required=""></div><br>
                        <p>Country <span class="require">*</span></p>
                       <div class="input-icon"><img src="images/country.png" />
                        <select class="inp" name="country" id="country" >
																  <option value="Åland Islands">Åland Islands</option>
																  <option value="Albania">Albania</option>
																  <option value="Algeria">Algeria</option>
																  <option value="American Samoa">American Samoa</option>
																  <option value="Andorra">Andorra</option>
																  <option value="Angola">Angola</option>
																  <option value="Anguilla">Anguilla</option>
																  <option value="Antigua and Barbuda">Antigua and Barbuda</option>
																  <option value="Argentina">Argentina</option>
																  <option value="Armenia">Armenia</option>
																  <option value="Aruba">Aruba</option>
																  <option value="Australia">Australia</option>
																  <option value="Austria">Austria</option>
																  <option value="Azerbaijan">Azerbaijan</option>
																  <option value="Bahamas">Bahamas</option>
																  <option value="Bahrain">Bahrain</option>
																  <option value="Bangladesh">Bangladesh</option>
																  <option value="Barbados">Barbados</option>
																  <option value="Belarus">Belarus</option>
																  <option value="Belgium">Belgium</option>
																  <option value="Belize">Belize</option>
																  <option value="Benin">Benin</option>
																  <option value="Bermuda">Bermuda</option>
																  <option value="Bhutan">Bhutan</option>
																  <option value="Bolivia (Plurinational State of)">Bolivia (Plurinational State of)</option>
																  <option value="Bonaire, Saint Eustatius and Saba">Bonaire, Saint Eustatius and Saba</option>
																  <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
																  <option value="Botswana">Botswana</option>
																  <option value="Brazil">Brazil</option>
																  <option value="British Virgin Islands">British Virgin Islands</option>
																  <option value="Brunei Darussalam">Brunei Darussalam</option>
																  <option value="Bulgaria">Bulgaria</option>
																  <option value="Burkina Faso">Burkina Faso</option>
																  <option value="Burundi">Burundi</option>
																  <option value="Cabo Verde">Cabo Verde</option>
																  <option value="Cambodia">Cambodia</option>
																  <option value="Cameroon">Cameroon</option>
																  <option value="Canada">Canada</option>
																  <option value="Cayman Islands">Cayman Islands</option>
																  <option value="Central African Republic">Central African Republic</option>
																  <option value="Chad">Chad</option>
																  <option value="Channel Islands">Channel Islands</option>
																  <option value="Chile">Chile</option>
																  <option value="China">China</option>
																  <option value="China, Hong Kong Special Administrative Region">China, Hong Kong Special Administrative Region</option>
																  <option value="China, Macao Special Administrative Region">China, Macao Special Administrative Region</option>
																  <option value="Colombia">Colombia</option>
																  <option value="Comoros">Comoros</option>
																  <option value="Congo">Congo</option>
																  <option value="Cook Islands">Cook Islands</option>
																  <option value="Costa Rica">Costa Rica</option>
																  <option value="Côte d'Ivoire">Côte d'Ivoire</option>
																  <option value="Croatia">Croatia</option>
																  <option value="Cuba">Cuba</option>
																  <option value="Curaçao">Curaçao</option>
																  <option value="Cyprus">Cyprus</option>
																  <option value="Czech Republic">Czech Republic</option>
																  <option value="Democratic People's Republic of Korea">Democratic People's Republic of Korea</option>
																  <option value="Democratic Republic of the Congo">Democratic Republic of the Congo</option>
																  <option value="Denmark">Denmark</option>
																  <option value="Djibouti">Djibouti</option>
																  <option value="Dominica">Dominica</option>
																  <option value="Dominican Republic">Dominican Republic</option>
																  <option value="Ecuador">Ecuador</option>
																  <option value="Egypt">Egypt</option>
																  <option value="El Salvador">El Salvador</option>
																  <option value="Equatorial Guinea">Equatorial Guinea</option>
																  <option value="Eritrea">Eritrea</option>
																  <option value="Estonia">Estonia</option>
																  <option value="Ethiopia">Ethiopia</option>
																  <option value="Faeroe Islands">Faeroe Islands</option>
																  <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
																  <option value="Fiji">Fiji</option>
																  <option value="Finland">Finland</option>
																  <option value="France">France</option>
																  <option value="French Guiana">French Guiana</option>
																  <option value="French Polynesia">French Polynesia</option>
																  <option value="Gabon">Gabon</option>
																  <option value="Gambia">Gambia</option>
																  <option value="Georgia">Georgia</option>
																  <option value="Germany">Germany</option>
																  <option value="Ghana">Ghana</option>
																  <option value="Gibraltar">Gibraltar</option>
																  <option value="Greece">Greece</option>
																  <option value="Greenland">Greenland</option>
																  <option value="Grenada">Grenada</option>
																  <option value="Guadeloupe">Guadeloupe</option>
																  <option value="Guam">Guam</option>
																  <option value="Guatemala">Guatemala</option>
																  <option value="Guernsey">Guernsey</option>
																  <option value="Guinea">Guinea</option>
																  <option value="Guinea-Bissau">Guinea-Bissau</option>
																  <option value="Guyana">Guyana</option>
																  <option value="Haiti">Haiti</option>
																  <option value="Holy See">Holy See</option>
																  <option value="Honduras">Honduras</option>
																  <option value="Hungary">Hungary</option>
																  <option value="Iceland">Iceland</option>
																  <option value="India">India</option>
																  <option value="Indonesia">Indonesia</option>
																  <option value="Iran (Islamic Republic of)">Iran (Islamic Republic of)</option>
																  <option value="Iraq">Iraq</option>
																  <option value="Ireland">Ireland</option>
																  <option value="Isle of Man">Isle of Man</option>
																  <option value="Israel">Israel</option>
																  <option value="Italy">Italy</option>
																  <option value="Jamaica">Jamaica</option>
																  <option value="Japan">Japan</option>
																  <option value="Jersey">Jersey</option>
																  <option value="Jordan">Jordan</option>
																  <option value="Kazakhstan">Kazakhstan</option>
																  <option value="Kenya">Kenya</option>
																  <option value="Kiribati">Kiribati</option>
																  <option value="Kuwait">Kuwait</option>
																  <option value="Kyrgyzstan">Kyrgyzstan</option>
																  <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
																  <option value="Latvia">Latvia</option>
																  <option value="Lebanon">Lebanon</option>
																  <option value="Lesotho">Lesotho</option>
																  <option value="Liberia">Liberia</option>
																  <option value="Libya">Libya</option>
																  <option value="Liechtenstein">Liechtenstein</option>
																  <option value="Lithuania">Lithuania</option>
																  <option value="Luxembourg">Luxembourg</option>
																  <option value="Madagascar">Madagascar</option>
																  <option value="Malawi">Malawi</option>
																  <option value="Malaysia">Malaysia</option>
																  <option value="Maldives">Maldives</option>
																  <option value="Mali">Mali</option>
																  <option value="Malta">Malta</option>
																  <option value="Marshall Islands">Marshall Islands</option>
																  <option value="Martinique">Martinique</option>
																  <option value="Mauritania">Mauritania</option>
																  <option value="Mauritius">Mauritius</option>
																  <option value="Mayotte">Mayotte</option>
																  <option value="Mexico">Mexico</option>
																  <option value="Micronesia (Federated States of)">Micronesia (Federated States of)</option>
																  <option value="Monaco">Monaco</option>
																  <option value="Mongolia">Mongolia</option>
																  <option value="Montenegro">Montenegro</option>
																  <option value="Montserrat">Montserrat</option>
																  <option value="Morocco">Morocco</option>
																  <option value="Mozambique">Mozambique</option>
																  <option value="Myanmar">Myanmar</option>
																  <option value="Namibia">Namibia</option>
																  <option value="Nauru">Nauru</option>
																  <option value="Nepal">Nepal</option>
																  <option value="Netherlands">Netherlands</option>
																  <option value="New Caledonia">New Caledonia</option>
																  <option value="New Zealand">New Zealand</option>
																  <option value="Nicaragua">Nicaragua</option>
																  <option value="Niger">Niger</option>
																  <option value="Nigeria">Nigeria</option>
																  <option value="Niue">Niue</option>
																  <option value="Norfolk Island">Norfolk Island</option>
																  <option value="Northern Mariana Islands">Northern Mariana Islands</option>
																  <option value="Norway">Norway</option>
																  <option value="Oman">Oman</option>
																  <option value="Pakistan">Pakistan</option>
																  <option value="Palau">Palau</option>
																  <option value="Panama">Panama</option>
																  <option value="Papua New Guinea">Papua New Guinea</option>
																  <option value="Paraguay">Paraguay</option>
																  <option value="Peru">Peru</option>
																  <option value="Philippines">Philippines</option>
																  <option value="Pitcairn">Pitcairn</option>
																  <option value="Poland">Poland</option>
																  <option value="Portugal">Portugal</option>
																  <option value="Puerto Rico">Puerto Rico</option>
																  <option value="Qatar">Qatar</option>
																  <option value="Republic of Korea">Republic of Korea</option>
																  <option value="Republic of Moldova">Republic of Moldova</option>
																  <option value="Réunion">Réunion</option>
																  <option value="Romania">Romania</option>
																  <option value="Russian Federation">Russian Federation</option>
																  <option value="Rwanda">Rwanda</option>
																  <option value="Saint Helena">Saint Helena</option>
																  <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
																  <option value="Saint Lucia">Saint Lucia</option>
																  <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
																  <option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
																  <option value="Saint-Barthélemy">Saint-Barthélemy</option>
																  <option value="Saint-Martin (French part)">Saint-Martin (French part)</option>
																  <option value="Samoa">Samoa</option>
																  <option value="San Marino">San Marino</option>
																  <option value="Sao Tome and Principe">Sao Tome and Principe</option>
																  <option value="Sark">Sark</option>
																  <option value="Saudi Arabia">Saudi Arabia</option>
																  <option value="Senegal">Senegal</option>
																  <option value="Serbia">Serbia</option>
																  <option value="Seychelles">Seychelles</option>
																  <option value="Sierra Leone">Sierra Leone</option>
																  <option value="Singapore">Singapore</option>
																  <option value="Sint Maarten (Dutch part)">Sint Maarten (Dutch part)</option>
																  <option value="Slovakia">Slovakia</option>
																  <option value="Slovenia">Slovenia</option>
																  <option value="Solomon Islands">Solomon Islands</option>
																  <option value="Somalia">Somalia</option>
																  <option value="South Africa">South Africa</option>
																  <option value="South Sudan">South Sudan</option>
																  <option value="Spain">Spain</option>
																  <option value="Sri Lanka">Sri Lanka</option>
																  <option value="State of Palestine">State of Palestine</option>
																  <option value="Sudan">Sudan</option>
																  <option value="Suriname">Suriname</option>
																  <option value="Svalbard and Jan Mayen Islands">Svalbard and Jan Mayen Islands</option>
																  <option value="Swaziland">Swaziland</option>
																  <option value="Sweden">Sweden</option>
																  <option value="Switzerland">Switzerland</option>
																  <option value="Syrian Arab Republic">Syrian Arab Republic</option>
																  <option value="Tajikistan">Tajikistan</option>
																  <option value="Thailand">Thailand</option>
																  <option value="The former Yugoslav Republic of Macedonia">The former Yugoslav Republic of Macedonia</option>
																  <option value="Timor-Leste">Timor-Leste</option>
																  <option value="Togo">Togo</option>
																  <option value="Tokelau">Tokelau</option>
																  <option value="Tonga">Tonga</option>
																  <option value="Trinidad and Tobago">Trinidad and Tobago</option>
																  <option value="Tunisia">Tunisia</option>
																  <option value="Turkey">Turkey</option>
																  <option value="Turkmenistan">Turkmenistan</option>
																  <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
																  <option value="Tuvalu">Tuvalu</option>
																  <option value="Uganda">Uganda</option>
																  <option value="Ukraine">Ukraine</option>
																  <option value="United Arab Emirates">United Arab Emirates</option>
																  <option value="United Kingdom" selected>United Kingdom</option>
																  <option value="United Republic of Tanzania">United Republic of Tanzania</option>
																  <option value="United States of America" >United States of America</option>
																  <option value="United States Virgin Islands">United States Virgin Islands</option>
																  <option value="Uruguay">Uruguay</option>
																  <option value="Uzbekistan">Uzbekistan</option>
																  <option value="Vanuatu">Vanuatu</option>
																  <option value="Venezuela (Bolivarian Republic of)">Venezuela (Bolivarian Republic of)</option>
																  <option value="Viet Nam">Viet Nam</option>
																  <option value="Wallis and Futuna Islands">Wallis and Futuna Islands</option>
																  <option value="Western Sahara">Western Sahara</option>
																  <option value="Yemen">Yemen</option>
																  <option value="Zambia">Zambia</option>
																  <option value="Zimbabwe">Zimbabwe</option>
																  <option value="&#xFEFF;Afghanistan">&#xFEFF;Afghanistan</option>
														    </select> 
                        </div><br>
                        
                        <p>State </p>
                       <div class="input-icon"><img src="images/state.png" /></i>
                       	<input class="inp" id="state" type="text" name="state" maxlength="60" placeholder="Enter state" >

                       </div><br>
                       <p>Zip/Postal Code <span class="require">*</span></p>
                        <div class="input-icon"><img src="images/state.png" /><input class="inp" id="zipcode" type="text" name="zipcode" maxlength="60" placeholder="Zip/Postal Code" required=""></div><br>
                        
                        
                 <h2 class="mb-0">
                 <input style="background-color:#fd6d03;" type="submit" name="save" value="CONTINUE" class="btn btn-primary login_title_inn"  />
                </h2>
                </form>
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
