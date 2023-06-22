<?php include_once("connection.php");
//echo $_SESSION['usrwebfe_id'];


if($_SESSION['usrwebfe_id'] !="")
{
	header("Location: account_login.php");
	exit();
}



if($_REQUEST['save'] == "Submit"  && $_POST['fname']!='')
{
	
	 //   $date = explode('/',$_POST['strt_date']);
	  //  $date1 = $date[2].'-'.$date[1].'-'.$date[0];
		
		
		

	
	 $qry_add = "UPDATE  hht_users SET 	 e_status = '1',
											   e_fname = '".addslashes(trim($_POST['fname']))."',
											   e_mname = '".addslashes(trim($_POST['mname']))."',
												e_lname = '".addslashes(trim($_POST['lname']))."',	
												e_pwd = '".addslashes(trim($_POST['pwd']))."',	
												email = '".addslashes(trim($_POST['email']))."',	
												mobile = '".addslashes(trim($_POST['mobile']))."',	
												address1 = '".addslashes(trim($_POST['addr1']))."',	
												address2 = '".addslashes(trim($_POST['addr2']))."',	
												city = '".addslashes(trim($_POST['city']))."',	
												state = '".addslashes(trim($_POST['state']))."',
												country = '".addslashes(trim($_POST['country']))."',	
												zipcode = '".addslashes(trim($_POST['zipcode']))."'	
													
											
											   WHERE e_id  = '".addslashes($_POST['e_id'])."'";  
											   
		//$_SESSION['usrwebfe_id'] = addslashes(trim($_POST['email']));
		//$_SESSION['usrweb_fname'] = addslashes(trim($_POST['fname']));
		if(mysqli_query($conn,$qry_add))
		{
		   

			$_SESSION['msg'] = "Thank You for registering with us and Account has been Created Successfully...";
		}
		else
		{
			$_SESSION['msg'] = "Error: Please try again";
		}
}
	
?>


<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Edit Profile</title>
    <!-- Bootstrap Styles-->
    <link href="dashboard/assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FontAwesome Styles-->
    <link href="dashboard/assets/css/font-awesome.css" rel="stylesheet" />
    <!-- Morris Chart Styles-->
    <link href="dashboard/assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
    <!-- Custom Styles-->
    <link href="dashboard/assets/css/custom-styles.css" rel="stylesheet" />
    <!-- Google Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <link rel="stylesheet" href="dashboard/assets/js/Lightweight-Chart/cssCharts.css"> 
</head>

<body>
    <div id="wrapper">
        <nav class="navbar navbar-default top-navbar" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"><img src="dashboard/assets/img/logo.png"></a>
            </div>

            <ul class="nav navbar-top-links navbar-right">

                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="edit_profile.php"><i class="fa fa-user fa-fw"></i> My Profile</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
        </nav>
        <!--/. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
		
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">

                    <li>
                        <a class="active-menu" href="#"><img style="margin-top:-7px;" src="dashboard/assets/img/home.png" align="absmiddle"> My Account</a>                    </li>
                    <li>
                        <a href="#"><img style="margin-top:-7px;" src="dashboard/assets/img/pooj.png" align="absmiddle"> Poojas</a>
                    </li>
					<li>
                        <a href="#"><img style="margin-top:-7px;" src="dashboard/assets/img/don.png" align="absmiddle"> Donations</a>
                    </li>
     
                </ul>

            </div>

        </nav>
        <!-- /. NAV SIDE  -->
      
		<div id="page-wrapper">
		  <div class="header"> 
                        <h1 class="page-header">
                            Edit Profile
                        </h1>
						<ol class="breadcrumb">
					  <li class="active"><a href="#"> My Account</a></li>
					  <li><a href="#">Poojas</a></li>
					  <li><a href="#">Donations</a></li>
					</ol> 
									
		</div>
            <div id="page-inner">
<?php
		 $adv_details = mysqli_query($conn,"SELECT * FROM hht_users where email = '".$_SESSION['usrwebfe_id']."'");
		 $res_details = mysqli_fetch_assoc($adv_details);  ?>

                <!-- /. ROW  -->

                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                    	<div class="col-lg-3"></div>
                        <div class="col-lg-6">
                        <h4>Edit Profile</h4>
                        	<div class="login_main">
                        <div class="p-0 bg-transparent " id="headingTwo">
                        
                        <p class="marleft"><strong>Your Personal Details</strong></p>
                        <form action="edit_success.php" enctype="multipart/form-data" name="register" method="post" id="register">
                                  <input type="hidden" name="e_id" value="<?php echo $res_details['e_id'];?>" />

                        <p>First Name <span class="require">*</span></p>
                        <div class="input-icon"><i class="fa fa-user"></i><input class="inp" id="fname" type="text" name="fname" maxlength="60" placeholder="First Name" required="" value="<?php echo $res_details['e_fname'];?>"></div><br>
                        <p>Middle Name</p>
                        <div class="input-icon"><i class="fa fa-user"></i><input class="inp" id="mname" type="text" name="mname" maxlength="60" placeholder="Middle Name" value="<?php echo $res_details['e_mname'];?>"></div><br>
                        <p>Last Name <span class="require">*</span></p>
                        <div class="input-icon"><i class="fa fa-user"></i><input class="inp" id="lname" type="text" name="lname" maxlength="60" placeholder="Last Name" required="" value="<?php echo $res_details['e_lname'];?>"></div><br>
                        <p>Email <span class="require">*</span></p>
                        <div class="input-icon"><i class="fa fa-envelope"></i><input class="inp" id="email" type="email" name="email" maxlength="60" placeholder="Email" required="" value="<?php echo $res_details['email'];?>"></div><br>
                        <p>Cell Phone <span class="require">*</span></p>
                        <div class="input-icon"><i class="fa fa-phone"></i><input class="inp" id="mobile" type="text" name="mobile" maxlength="60" placeholder="Cell Phone" required="" value="<?php echo $res_details['mobile'];?>"></div><br>
                        
                        <p class="marleft"><strong>Your Address</strong></p>  
                        <p>Address Line 1 <span class="require">*</span></p>
                        <div class="input-icon"><i class="fa fa-check"></i><input class="inp" id="addr1" type="text" name="addr1" maxlength="60" placeholder="Address Line 1" required="" value="<?php echo $res_details['address1'];?>"></div><br>
                        <p>Address Line 2 </p>
                        <div class="input-icon"><i class="fa fa-check"></i><input class="inp" id="addr2" type="text" name="addr2" maxlength="60" placeholder="Address Line 2" value="<?php echo $res_details['address2'];?>"></div><br>
                        <p>City <span class="require">*</span></p>
                        <div class="input-icon"><i class="fa fa-building"></i><input class="inp" id="city" type="text" name="city" maxlength="60" placeholder="City" required="" value="<?php echo $res_details['city'];?>"></div><br>
                        <p>Country <span class="require">*</span></p>
                        <div class="input-icon"><i class="fa fa-map-marker"></i>
                        <select class="inp" name="country" id="country">
                                                              <option value="<?php echo $res_details['country'];?>" selected><?php echo $res_details['country'];?></option>
                        
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
                                                              <option value="United Kingdom">United Kingdom</option>
                                                              <option value="United Republic of Tanzania">United Republic of Tanzania</option>
                                                              <option value="United States of America" selected="">United States of America</option>
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
                                                              <option value="Afghanistan">Afghanistan</option>
                                                        </select> 
                        </div><br>
                        
                        <p>State <span class="require">*</span></p>
                        <div class="input-icon"><i class="fa fa-location-arrow"></i>
<input class="inp" id="state" type="text" name="state" maxlength="60" placeholder="Enter state" required="" value="<?php echo $res_details['state'];?>">
                        </div><br>
                        <p>Zip/Postal Code <span class="require">*</span></p>
                        <div class="input-icon"><i class="fa fa-location-arrow"></i><input class="inp" id="zipcode" type="text" name="zipcode" maxlength="60" placeholder="Zip/Postal Code" required="" value="<?php echo $res_details['zipcode'];?>"></div><br>
                        
                        <p class="marleft"><strong>Your Password</strong></p>  
                        <p>Password <span class="require">*</span></p>
                        <div class="input-icon"><i class="fa fa-lock"></i><input class="inp" id="pwd" type="password" name="pwd" maxlength="60" placeholder="Your Password" required="" value="<?php echo $res_details['e_pwd'];?>"></div><br>
                        <p>Confirm password <span class="require">*</span></p>
                        <div class="input-icon"><i class="fa fa-lock"></i><input class="inp" id="cpwd" type="password" name="cpwd" maxlength="60" placeholder="Confirm password" required="" value="<?php echo $res_details['e_pwd'];?>"></div><br>
                        
                       <h2 class="mb-0">
                        <input type="submit" name="save" value="Submit" class="btn btn-primary login_title_inn">
                        </h2><br>
                        </form>
                        </div>
                        
                        </div>
                        </div>
                    </div>
                    
                </div>

				<div class="row">
				<div class="col-md-12">
				
					</div>		
				</div> 	
			
		
				
            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <footer style="color:#FFFFFF; width:100%; padding:2px; background-color:#000000; float:left; z-index:100; position:relative; text-align:center;"><p>© 2022 Hanuman Hindu Temple. All Rights Reserved</p></footer>
    <!-- /. WRAPPER  -->
    <!-- JS Scripts-->
    <!-- jQuery Js -->
    <script src="dashboard/assets/js/jquery-1.10.2.js"></script>
    <!-- Bootstrap Js -->
    <script src="dashboard/assets/js/bootstrap.min.js"></script>
	 
    <!-- Metis Menu Js -->
    <script src="dashboard/assets/js/jquery.metisMenu.js"></script>
    <!-- Morris Chart Js -->
    <script src="dashboard/assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="dashboard/assets/js/morris/morris.js"></script>
	
	
	<script src="dashboard/assets/js/easypiechart.js"></script>
	<script src="dashboard/assets/js/easypiechart-data.js"></script>
	
	 <script src="dashboard/assets/js/Lightweight-Chart/jquery.chart.js"></script>
	
    <!-- Custom Js -->
    <script src="dashboard/assets/js/custom-scripts.js"></script>

      <script>
    
      </script>

</body>

</html>