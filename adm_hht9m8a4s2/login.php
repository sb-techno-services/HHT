<?php
include_once("connection.php");

if($_POST['login'] == "Login")
{
	if($_POST['usr_email'] != "" && $_POST['usr_password'] != "")
	{
	 $qqry_select = "SELECT * FROM  hrm_admin WHERE admin_email = '".addslashes(trim($_POST['usr_email']))."' AND admin_password = '".addslashes(trim($_POST['usr_password']))."' ";
	 $qry_select =mysqli_query($conn, $qqry_select);  

		if(mysqli_num_rows($qry_select) == 1)
		{
			$user = mysqli_fetch_assoc($qry_select);
			$_SESSION['usr_id'] = $user['admin_id'];
			$_SESSION['usr_fname'] = $user['admin_name'];
			//die();
			header("Location:home.php");
			exit();
		}
		else
		{
			$_SESSION['msg'] = "Please enter valid Email Address and Password";		
		}	
	}
	else
	{
		$_SESSION['msg'] = "Please enter Email Address and Password";
	}
}
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $DOMAIN_NAME;?></title>
<link type="text/css" rel="stylesheet" href="css/style.css" />
<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />

</head>

<body>
<header>
  <div id="warp_inner">
    <div id="logo"><a href="index.html"><img src="images/logo.jpg"  alt="logo" /></a></div>
  </div>
</header>
<div class="clear"></div>
<div id="wrapbg">
  <div id="wrapper">
    <nav>     
      <!--nav start here -->     
      <ul>
        
        
      </ul>
      
      <!--Nav ends--> 
    </nav>  
    <div class="clear"></div>
    <section>
      <div id="bar">
        <h1 style="color:#404040;">Please Sign In</h1>
        
        <div class="clear"></div>
      </div>
      <article>
        <div id="login">
<?php
if($_SESSION['msg'] != "")
{
	echo '<div class="error_msg">'.$_SESSION['msg'].'</div>';
	$_SESSION['msg'] = '';
}
?>
<form action="login.php" enctype="multipart/form-data" name="login" method="post">
   	<form role="form">
                            <fieldset>
      <div class="form-group">
      <input class="form-control" placeholder="Email Address" type="text" name="usr_email" id="usr_email" />
      </div>
    
      <input class="form-control" placeholder="Password" type="password" name="usr_password" id="usr_password" />
    <tr>
      <td colspan="2" align="center"><input style="margin-left:0; margin-top:10px;" type="submit" name="login" class="btn-lg btn-success btn-block" value="Login" /></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    </fieldset>
    </form>
  
 </form>
</div>

        <div class="clear"></div>
      </article>
     
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
