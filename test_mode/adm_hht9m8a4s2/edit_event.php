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
	
		
			$ext_qry1 = "";  $ext_qry2 = "";
			if($_FILES['ja_add_image1']['name'] <> "") {
					if($_FILES['ja_add_image1']['error'] == 0)
					{
						$file_name = time()."_".$_FILES['ja_add_image1']['name'];
						
						if(move_uploaded_file($_FILES['ja_add_image1']['tmp_name'], "uploads/".$file_name))
						{
							$ext_qry1 = " event_image = '".$file_name."', ";
							
						}			
					}
			}
			
			if($_FILES['ja_add_image2']['name'] <> "") {
					if($_FILES['ja_add_image2']['error'] == 0)
					{
						$file_name = time()."_".$_FILES['ja_add_image2']['name'];
						
						if(move_uploaded_file($_FILES['ja_add_image2']['tmp_name'], "uploads/".$file_name))
						{
							$ext_qry2 = " event_image2 = '".$file_name."', ";
							
						}			
					}
			}
			
			$date = explode('/',$_POST['strt_date']);
	$date1 = $date[2].'-'.$date[1].'-'.$date[0];
		
		//$dtc   = new DateTime();
		//$expdate = $dtc->createFromFormat('d/m/Y', $_POST['i_exp_date']);
		
		$date3 = explode('/',$_POST['end_date']);
	$date4 = $date3[2].'-'.$date3[1].'-'.$date3[0];
				   $qry_upd = "UPDATE hht_events SET event_title = '".addslashes(trim($_POST['title']))."',
											 event_status = '".addslashes(trim($_POST['nsta']))."',
											   event_sdate = '".addslashes(trim($date1))."',
											   event_edate = '".addslashes(trim($date4))."',
												event_des = '".addslashes(trim($_POST['article']))."',	
												event_time = '".addslashes(trim($_POST['etime']))."',	
												event_location = '".addslashes(trim($_POST['eloc']))."',	
												event_country = '".addslashes(trim($_POST['country']))."',	
												
												event_type = '".addslashes(trim($_POST['event_type']))."',	
											   ".$ext_qry1."
											   ".$ext_qry2."
											 event_ip = '".$_SERVER['SERVER_ADDR']."'

											   WHERE ja_id = '".addslashes($_POST['j_id'])."'";  
		

	

		if(mysqli_query($conn,$qry_upd))
		{
			
		
			$_SESSION['msg'] = "Event details updated successfully";
			header("Location: events.php");
			exit();
		}
		else
		{
			$_SESSION['msg'] = "Error: Please try again";
		}
}


		
	

if($_GET['j_id'] > 0)
{
	$h1tag = "Edit Events Details"; 
}
else
{
	$h1tag = "Add Events Details"; 
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

		 $adv_details = mysqli_query($conn,"SELECT * FROM hht_events where ja_id = ".$_GET['j_id']);
		 $res_details = mysqli_fetch_assoc($adv_details);
			}
		?>
          <form action="edit_event.php" enctype="multipart/form-data" name="addpurchasefrm" method="post" id="addpurchasefrm" >
          <input type="hidden" name="j_id" value="<?php echo $_GET['j_id']; ?>" />
            <table width="140%" border="0" cellspacing="0" cellpadding="5">
              <tr>
                <td class="bold aright">Event Title : <span class="red14">* </span></td>
                <td>
                	
                    <input type="text" name="title" id="title" placeholder="" value="<?php echo $res_details['event_title'];?>" required /></td>
              </tr>
               <tr>
                <td class="bold aright">Event Status : <span class="red14">* </span></td>
                <td>
                	
                    <select id="nsta" name="nsta">
                <option value="">-- Select Staus--</option>
						 <?php
                if($res_details['event_status']==1)
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
                <td class="bold aright">Event Type : <span class="red14">* </span></td>
                <td>
                	
                    <input type="text" name="event_type" id="event_type" placeholder="" value="<?php echo $res_details['event_type'];?>" required /><span class="red14"> &nbsp; &nbsp;( e.g, Festival, Event, Health ) </span></td>
              </tr>
              <tr>
                <td class="bold aright">Event Start Date : </td>
                <td><input type="text" name="strt_date" id="strt_date" value="<?php if($res_details['event_sdate']!=''){echo date('d/m/Y',strtotime($res_details['event_sdate']));} ?>" /></td>
              </tr>
              <tr>
                <td class="bold aright">Event End Date : </td>
                <td><input type="text" name="end_date" id="end_date" value="<?php if($res_details['event_edate']!=''){echo date('d/m/Y',strtotime($res_details['event_edate']));} ?>" /></td>
              </tr>
               <tr>
                <td class="bold aright">Event Time Duration : <span class="red14">* </span></td>
                <td>
                	
                    <input type="text" name="etime" id="etime" placeholder="" value="<?php echo $res_details['event_time'];?>" required /> <span class="red14"> &nbsp; &nbsp;( e.g, 6:00 AM to 5:00 PM ) </span></td>
              </tr>
               <tr>
                <td class="bold aright">Event Location : <span class="red14">* </span></td>
                <td>
                	
                    <input type="text" name="eloc" id="eloc" placeholder="" value="<?php echo $res_details['event_location'];?>" required /></td>
              </tr>
               <tr>
                <td class="bold aright">Event Country : <span class="red14">* </span></td>
                <td>
                	
                <select name="country" class="form-control" id="country">

                  <option value="Afghanistan">Afghanistan</option>
                <option value="Albania">Albania</option>
                <option value="Algeria">Algeria</option>
                <option value="American Samoa">American Samoa</option>
                <option value="Andorra">Andorra</option>
                <option value="Angola">Angola</option>
                <option value="Anguilla">Anguilla</option>
                <option value="Antartica">Antarctica</option>
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
                <option value="Bolivia">Bolivia</option>
                <option value="Bosnia and Herzegowina">Bosnia and Herzegowina</option>
                <option value="Botswana">Botswana</option>
                <option value="Bouvet Island">Bouvet Island</option>
                <option value="Brazil">Brazil</option>
                <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                <option value="Brunei Darussalam">Brunei Darussalam</option>
                <option value="Bulgaria">Bulgaria</option>
                <option value="Burkina Faso">Burkina Faso</option>
                <option value="Burundi">Burundi</option>
                <option value="Cambodia">Cambodia</option>
                <option value="Cameroon">Cameroon</option>
                <option value="Canada">Canada</option>
                <option value="Cape Verde">Cape Verde</option>
                <option value="Cayman Islands">Cayman Islands</option>
                <option value="Central African Republic">Central African Republic</option>
                <option value="Chad">Chad</option>
                <option value="Chile">Chile</option>
                <option value="China">China</option>
                <option value="Christmas Island">Christmas Island</option>
                <option value="Cocos Islands">Cocos (Keeling) Islands</option>
                <option value="Colombia">Colombia</option>
                <option value="Comoros">Comoros</option>
                <option value="Congo">Congo</option>
                <option value="Congo">Congo, the Democratic Republic of the</option>
                <option value="Cook Islands">Cook Islands</option>
                <option value="Costa Rica">Costa Rica</option>
                <option value="Cota D'Ivoire">Cote d'Ivoire</option>
                <option value="Croatia">Croatia (Hrvatska)</option>
                <option value="Cuba">Cuba</option>
                <option value="Cyprus">Cyprus</option>
                <option value="Czech Republic">Czech Republic</option>
                <option value="Denmark">Denmark</option>
                <option value="Djibouti">Djibouti</option>
                <option value="Dominica">Dominica</option>
                <option value="Dominican Republic">Dominican Republic</option>
                <option value="East Timor">East Timor</option>
                <option value="Ecuador">Ecuador</option>
                <option value="Egypt">Egypt</option>
                <option value="El Salvador">El Salvador</option>
                <option value="Equatorial Guinea">Equatorial Guinea</option>
                <option value="Eritrea">Eritrea</option>
                <option value="Estonia">Estonia</option>
                <option value="Ethiopia">Ethiopia</option>
                <option value="Falkland Islands">Falkland Islands (Malvinas)</option>
                <option value="Faroe Islands">Faroe Islands</option>
                <option value="Fiji">Fiji</option>
                <option value="Finland">Finland</option>
                <option value="France">France</option>
                <option value="France Metropolitan">France, Metropolitan</option>
                <option value="French Guiana">French Guiana</option>
                <option value="French Polynesia">French Polynesia</option>
                <option value="French Southern Territories">French Southern Territories</option>
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
                <option value="Guinea">Guinea</option>
                <option value="Guinea-Bissau">Guinea-Bissau</option>
                <option value="Guyana">Guyana</option>
                <option value="Haiti">Haiti</option>
                <option value="Heard and McDonald Islands">Heard and Mc Donald Islands</option>
                <option value="Holy See">Holy See (Vatican City State)</option>
                <option value="Honduras">Honduras</option>
                <option value="Hong Kong">Hong Kong</option>
                <option value="Hungary">Hungary</option>
                <option value="Iceland">Iceland</option>
                <option value="India">India</option>
                <option value="Indonesia">Indonesia</option>
                <option value="Iran">Iran (Islamic Republic of)</option>
                <option value="Iraq">Iraq</option>
                <option value="Ireland">Ireland</option>
                <option value="Israel">Israel</option>
                <option value="Italy">Italy</option>
                <option value="Jamaica">Jamaica</option>
                <option value="Japan">Japan</option>
                <option value="Jordan">Jordan</option>
                <option value="Kazakhstan">Kazakhstan</option>
                <option value="Kenya">Kenya</option>
                <option value="Kiribati">Kiribati</option>
                <option value="Democratic People's Republic of Korea">Korea, Democratic People's Republic of</option>
                <option value="Korea">Korea, Republic of</option>
                <option value="Kuwait">Kuwait</option>
                <option value="Kyrgyzstan">Kyrgyzstan</option>
                <option value="Lao">Lao People's Democratic Republic</option>
                <option value="Latvia">Latvia</option>
                <option value="Lebanon" >Lebanon</option>
                <option value="Lesotho">Lesotho</option>
                <option value="Liberia">Liberia</option>
                <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                <option value="Liechtenstein">Liechtenstein</option>
                <option value="Lithuania">Lithuania</option>
                <option value="Luxembourg">Luxembourg</option>
                <option value="Macau">Macau</option>
                <option value="Macedonia">Macedonia, The Former Yugoslav Republic of</option>
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
                <option value="Micronesia">Micronesia, Federated States of</option>
                <option value="Moldova">Moldova, Republic of</option>
                <option value="Monaco">Monaco</option>
                <option value="Mongolia">Mongolia</option>
                <option value="Montserrat">Montserrat</option>
                <option value="Morocco">Morocco</option>
                <option value="Mozambique">Mozambique</option>
                <option value="Myanmar">Myanmar</option>
                <option value="Namibia">Namibia</option>
                <option value="Nauru">Nauru</option>
                <option value="Nepal">Nepal</option>
                <option value="Netherlands">Netherlands</option>
                <option value="Netherlands Antilles">Netherlands Antilles</option>
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
                <option value="Reunion">Reunion</option>
                <option value="Romania">Romania</option>
                <option value="Russia">Russian Federation</option>
                <option value="Rwanda">Rwanda</option>
                <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option> 
                <option value="Saint LUCIA">Saint LUCIA</option>
                <option value="Saint Vincent">Saint Vincent and the Grenadines</option>
                <option value="Samoa">Samoa</option>
                <option value="San Marino">San Marino</option>
                <option value="Sao Tome and Principe">Sao Tome and Principe</option> 
                <option value="Saudi Arabia">Saudi Arabia</option>
                <option value="Senegal">Senegal</option>
                <option value="Seychelles">Seychelles</option>
                <option value="Sierra">Sierra Leone</option>
                <option value="Singapore">Singapore</option>
                <option value="Slovakia">Slovakia (Slovak Republic)</option>
                <option value="Slovenia">Slovenia</option>
                <option value="Solomon Islands">Solomon Islands</option>
                <option value="Somalia">Somalia</option>
                <option value="South Africa">South Africa</option>
                <option value="South Georgia">South Georgia and the South Sandwich Islands</option>
                <option value="Span">Spain</option>
                <option value="SriLanka">Sri Lanka</option>
                <option value="St. Helena">St. Helena</option>
                <option value="St. Pierre and Miguelon">St. Pierre and Miquelon</option>
                <option value="Sudan">Sudan</option>
                <option value="Suriname">Suriname</option>
                <option value="Svalbard">Svalbard and Jan Mayen Islands</option>
                <option value="Swaziland">Swaziland</option>
                <option value="Sweden">Sweden</option>
                <option value="Switzerland">Switzerland</option>
                <option value="Syria">Syrian Arab Republic</option>
                <option value="Taiwan">Taiwan, Province of China</option>
                <option value="Tajikistan">Tajikistan</option>
                <option value="Tanzania">Tanzania, United Republic of</option>
                <option value="Thailand">Thailand</option>
                <option value="Togo">Togo</option>
                <option value="Tokelau">Tokelau</option>
                <option value="Tonga">Tonga</option>
                <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                <option value="Tunisia">Tunisia</option>
                <option value="Turkey">Turkey</option>
                <option value="Turkmenistan">Turkmenistan</option>
                <option value="Turks and Caicos">Turks and Caicos Islands</option>
                <option value="Tuvalu">Tuvalu</option>
                <option value="Uganda">Uganda</option>
                <option value="Ukraine">Ukraine</option>
                <option value="United Arab Emirates">United Arab Emirates</option>
                <option value="United Kingdom" selected>United Kingdom</option>
                <option value="United States">United States</option>
                <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
                <option value="Uruguay">Uruguay</option>
                <option value="Uzbekistan">Uzbekistan</option>
                <option value="Vanuatu">Vanuatu</option>
                <option value="Venezuela">Venezuela</option>
                <option value="Vietnam">Viet Nam</option>
                <option value="Virgin Islands (British)">Virgin Islands (British)</option>
                <option value="Virgin Islands (U.S)">Virgin Islands (U.S.)</option>
                <option value="Wallis and Futana Islands">Wallis and Futuna Islands</option>
                <option value="Western Sahara">Western Sahara</option>
                <option value="Yemen">Yemen</option>
                <option value="Serbia">Serbia</option>
                <option value="Zambia">Zambia</option>
                <option value="Zimbabwe">Zimbabwe</option>
                </select>
                              </tr>
               <tr>
                <td class="bold aright">Event Artile/Content : <span class="red14">* </span></td>
                <td>
                	
                     <?php 
                                $oFCKeditor = new FCKeditor('article',550,300);
                                $oFCKeditor->BasePath = 'fckeditor/';
                                $oFCKeditor->Value = stripslashes($res_details['event_des']);
                                $oFCKeditor->Create() ;
                                ?>	</td>
              </tr>
                <tr>
                <td class="bold aright">Event Image 1 : </td>
                <td><input type="file" name="ja_add_image1" id="ja_add_image1" /><?php if($res_details['event_image']){?><img src="uploads/<?php echo $res_details['event_image']; ?>" height="150" ><?php }?></td>
              </tr>
                <tr>
                <td class="bold aright">Event Image 2 : </td>
                <td><input type="file" name="ja_add_image2" id="ja_add_image2" /><?php if($res_details['event_image2']){?><img src="uploads/<?php echo $res_details['event_image2']; ?>" height="150" ><?php }?></td>
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
