<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>UKTBA Deepavali Get-Together 2021 </title>
  <meta content="UKTBA - Deepavali Event Form" name="description">
  <meta content="UKTBA - Deepavali Event Form" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Company - v4.3.0
  * Template URL: https://bootstrapmade.com/company-free-html-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
<script language='JavaScript' type='text/javascript'>
function refreshCaptcha()
{
	var img = document.images['captchaimg'];
	img.src = img.src.substring(0,img.src.lastIndexOf("?"))+"?rand="+Math.random()*1000;
}
</script><script type="text/javascript">
function validatephone(phone) 
{
    var maintainplus = '';
    var numval = phone.value
    if ( numval.charAt(0)=='+' )
    {
        var maintainplus = '';
    }
    curphonevar = numval.replace(/[\\A-Za-z!"£$%^&\,*+_={};:'@#~,.Š\/<>?|`¬\]\[]/g,'');
    phone.value = maintainplus + curphonevar;
    var maintainplus = '';
    phone.focus;
}
// validates text only
function Validate(txt) {
    txt.value = txt.value.replace(/[^a-zA-Z- '\n\r.]+/g, '');
}
// validate email
function email_validate(email)
{
var regMail = /^([_a-zA-Z0-9-]+)(\.[_a-zA-Z0-9-]+)*@([a-zA-Z0-9-]+\.)+([a-zA-Z]{2,3})$/;

    if(regMail.test(email) == false)
    {
    document.getElementById("status").innerHTML    = "<span class='warning'>Email address is not valid yet.</span>";
    }
    else
    {
    document.getElementById("status").innerHTML	= "<span class='valid'>Thanks, you have entered a valid Email address!</span>";	
    }
}
</script>

</head>

<body>

<?php include_once("header.php"); ?>

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs_1">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>UKTBA Deepavali Event Get-Together 2021 </h2>
   
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Contact Section ======= -->
    <div class="map-section"></div>

    <section id="contact" class="contact">
      <div class="container">

        <div class="row mt-5 justify-content-center" data-aos="fade-up">
          <div class="col-lg-12">
            <form action="do-direct-paypal.php" method="post" role="form" class="php-email-form">
            
              <div class="row">
                <div class="col-md-5 form-group fo" style="padding-top:0;">Type of membership: </div>
                <div class="col-md-7 form-group mt-3 mt-md-0">
                  <input class="ra" type="radio" onClick="javascript:yesnoCheck();" name="yesno" id="noCheck" value="UKTBA Paid Member"> UKTBA Paid Member <br>
                  <input class="ra" type="radio" onClick="javascript:yesnoCheck();" name="yesno" id="yesCheck" value="UKTBA NON-Paid Member"> UKTBA NON-Paid Member
                </div>
              </div>
              
             <div class="row">
                <div class="col-md-5 form-group fo">Email Id: <span style="color:#F00;"><strong>( * )</strong></span> </div>
                <div class="col-md-7 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="" required onChange="email_validate(this);">
                </div>
              </div>

			 <div class="row">
                <div class="col-md-5 form-group fo" style="padding-top:3px;">Title: <span style="color:#F00;"><strong>( * )</strong></span></div>
                <div class="col-md-7 form-group mt-3 mt-md-0">
                  <select name="title" id="title" class="select" required>
                              <option value="">Select</option>
                              <option value="Mr" <? if($_POST['Title']=="Mr") echo "selected";?>>Mr</option>
                              <option value="Miss" <? if($_POST['Title']=="Miss") echo "selected";?>>Miss</option>
							  <option value="Ms" <? if($_POST['Title']=="Ms") echo "selected";?>>Ms</option>
                              <option value="Mrs" <? if($_POST['Title']=="Mrs") echo "selected";?>>Mrs</option>
                              <option value="Dr" <? if($_POST['Title']=="Dr") echo "selected";?>>Dr</option>
                            </select>
                </div>
              </div>	
                
              <div class="row">
                <div class="col-md-5 form-group fo">
                  Full Name: <span style="color:#F00;"><strong>( * )</strong></span>
                </div>
                <div class="col-md-7 form-group mt-3 mt-md-0">
                  <input type="text" class="form-control" name="name" id="name"  required onkeyup = "Validate(this)">
                </div>
              </div>

              <div class="row">
                <div class="col-md-5 form-group fo">
                  Gotram: <span style="color:#F00;"><strong>( * )</strong></span>
                </div>
                <div class="col-md-7 form-group mt-3 mt-md-0">
                  <input type="text" class="form-control" name="gotram" id="gotram" placeholder="" required onkeyup = "Validate(this)">
                </div>
              </div>
              
              <div class="row">
                <div class="col-md-5 form-group fo">
                  Mobile Number: <span style="color:#F00;"><strong>( * )</strong></span>
                </div>
                <div class="col-md-7 form-group mt-3 mt-md-0">
                  <input type="text" class="form-control" name="number" id="phone" placeholder="" maxlength="13" onKeyUp="validatephone(this);"  required>
                </div>
              </div>
	
    		 <div class="row">
                <div class="col-md-5 form-group fo">
                  Spouse Name:
                </div>
                <div class="col-md-7 form-group mt-3 mt-md-0">
                  <input type="text" class="form-control" name="sname" id="sname" placeholder=""  onkeyup = "Validate(this)">
                </div>
              </div>
              
              <div class="row">
                <div class="col-md-5 form-group fo">
                  Spouse WhatsApp Number or Phone Number:
                </div>
                <div class="col-md-7 form-group mt-3 mt-md-0">
                  <input type="text" class="form-control" name="snumber" id="phone" placeholder="" maxlength="13" onKeyUp="validatephone(this);"   >
                </div>
              </div>
              <br>
              <div class="row">
                <div class="col-md-5 form-group fo" style="padding-top:0;">Family Details: </div>
                <div class="col-md-7 form-group mt-3 mt-md-0">
                   <span class="chtx">Children below 5 years <select name="fd1" id="fd1" class="select" >
                              <option value="" >Select </option>
                              <option value="1" >1</option>
                              <option value="2" >2</option>
							  <option value="3" >3</option>
                              <option value="4" >4</option>
                              <option value="5" >5</option>
                            </select></span> <br><br>
                  <span class="chtx">Children between 5 years and 13 years <select name="fd2" id="fd2" class="select" >
                              <option value="" >Select </option>
                              <option value="1" >1</option>
                              <option value="2" >2</option>
							  <option value="3" >3</option>
                              <option value="4" >4</option>
                              <option value="5" >5</option>
                            </select></span> <br><br>
                 <span class="chtx">Children between 13 years and 18 years <select name="fd3" id="fd3" class="select" >
                              <option value="" >Select </option>
                              <option value="1" >1</option>
                              <option value="2" >2</option>
							  <option value="3" >3</option>
                              <option value="4" >4</option>
                              <option value="5" >5</option>
                            </select></span> <br><br>
                  <span class="chtx">Adults (18 and above) <select name="fd4" id="fd4" class="select" >
                              <option value="" >Select </option>
                              <option value="1" >1</option>
                              <option value="2" >2</option>
							  <option value="3" >3</option>
                              <option value="4" >4</option>
                              <option value="5" >5</option>
                            </select></span>
                </div>
              </div>
              <br>
              <div class="row">
                <div class="col-md-5 form-group fo" style="padding-top:0;">Ticket price: </div>
                <div class="col-md-7 form-group mt-3 mt-md-0">
                <script type="text/javascript">
function yesnoCheck() {
    if (document.getElementById('yesCheck').checked) {
        document.getElementById('ifYes').style.display = 'block';
    }
    else document.getElementById('ifYes').style.display = 'none';
	
	if (document.getElementById('noCheck').checked) {
        document.getElementById('ifYes1').style.display = 'block';
    }
    else document.getElementById('ifYes1').style.display = 'none';
}

</script>
<div id="ifYes1" style="display:block">
                  <input class="ra" name="tprice" type="radio" value="UKTBA Paid Member  for Couple-£18"> UKTBA Paid Member  for Couple  ( Only wife and husband): <strong>£18</strong> <br>
                  <input class="ra" name="tprice" type="radio" value="UKTBA Paid Member  for Family-£32"> UKTBA Paid Member  for Family ( Wife, husband, Kids and  UKTBA  Paid Member Parents): <strong>£32</strong> <br>                  </div>
                  <div id="ifYes" style="display:block">

                  <input class="ra" name="tprice" type="radio" value="UKTBA NON-Paid Member  for Couple-£20"> UKTBA NON-Paid Member  for Couple  ( Only wife and husband): <strong>£20</strong> <br>
                  <input class="ra" name="tprice" type="radio" value="UKTBA NON- Paid Member  for Family-£40"> UKTBA NON- Paid Member  for Family ( Wife, husband, Kids and  UKTBA  Paid Member Parents) : <strong>£40</strong> <br>                 </div>       

                  <input class="ra" name="tprice" type="radio" value="UKTBA paid or Non-paid member if its single person-£10" checked> UKTBA paid or Non-paid member if its single person : <strong>£10</strong>
                  
                </div>
              </div>
              <br>
              
              <div class="row">
                <div class="col-md-5 form-group fo">
                  Security Code:
                </div>
                <div class="col-md-7 form-group mt-3 mt-md-0">
<p>
<img src="captcha_code_file.php?rand=<?php echo rand(); ?>" id='captchaimg' ><br>
<label for='message'>Enter the code above here :</label><br>
<input id="6_letters_code" name="6_letters_code" type="text" autocomplete="off" required maxlength="6"><br>
<small>Can't read the image? click <a href='javascript: refreshCaptcha();'>here</a> to refresh</small>
</p>
                </div>
              </div>
             
              <div class="text-center">In order to continue to receive communications from us, you will need to give us your permission<br>to collect and use your personal data such as your name, email, contact details, etc. by ticking the consent box <input class="che" name="terms" type="checkbox" value="yes" checked required></div><br><br>
              
              <div class="text-center"><input class="submitbtn" name="submit" type="submit" value="Submit" ></div><br>
            
            <div class="text-center top"></div>
             <div class="text-left"><strong>Terms and conditions:</strong><br>
<ul>
<li>	Members must be Telugu Brahmin.</li>
<li>	Members accepts Veda Pramanam and Shastra Pramanam in conduct of one's life and affairs.</li>
<li>	Members should be astikas (accepts presence of Ishwara or Parabrahman)</li>
<li>	Any payments are  non-refundable. UKTBA has right to refuse/cancel payments.</li>
<li>	In case of event cancelled Full amount will be refunded .</li>
<li>	Members accept our below GDPR statement.</li>
</ul><br>

<p style="text-align:justify">UKTBA is fully committed to full compliance with the General Data Protection Regulation. UKTBA needs to collect and use information about people with whom it works in order to operate and carry out its functions. UKTBA regards the lawful and appropriate treatment of personal information as very important to its successful operations and essential to maintaining confidence between UKTBA and its members. UKTBA therefore fully endorses and adheres to the Principles of the General Data Protection Regulation. By filling out this form you are agreeing for us to contact you to keep you informed about our activities/events and also to hold your information.  </p>
 </div><br><br>
            </form>
            
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

<?php include_once("footer.php"); ?>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>