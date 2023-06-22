<?php
	include_once("connection.php");


$DOMAIN_NAME = "Hanuman Hindu Temple";
$DOMAIN_NAME_PAGE = "Welcome to Hanuman Hindu Temple";

if($_POST['email'] !='')
{
	if($_POST['email'] != "" && $_POST['pwd'] != "")
	{
	 $qqry_select = "SELECT * FROM  hht_users WHERE email = '".addslashes(trim($_POST['email']))."' AND e_pwd = '".addslashes(trim($_POST['pwd']))."' ";
	 $qry_select =mysqli_query($con, $qqry_select);  

		if(mysqli_num_rows($qry_select) == 1)
		{
			$user = mysqli_fetch_assoc($qry_select);
			
			if($cart->get_cart_total()>0) { 

				$_SESSION['usrwebfe_id'] = $user['email'];
				$_SESSION['usrweb_fname'] = $user['e_fname'];
			} else {
				 $_SESSION["usrid"] = $user['email'];
				 $_SESSION["usrname"] = $user['e_fname'];
		    }
/*			$cookie_name = "user";
$cookie_value = "John Doe";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
*/			//die();
			$cart11=$cart->get_cart_count();
			if($cart11 >0 ) {
				
				
			$qry=mysqli_query($con,"select * from hht_users WHERE email='".$user['email']."'");
		
			$res=mysqli_fetch_assoc($qry);


			$uid=$res['e_id'];
			//$_SESSION['usrwebfe_id'] = $res['email'];
			//$_SESSION['usrwebfe_name'] = $res['e_fname'];

			#insert Order information
			$order_no=rand(10000,100000);
			$total_amt=$cart->get_cart_total();
			$sql="insert into orders (ORDER_NO,ORDER_DATE,UID,TOTAL_AMT,PAY_STATUS) values ('{$order_no}',NOW(),'{$uid}','{$total_amt}','0')";
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
				//header("Location: view_cart.php");

			} else {
				header("Location:dashboard.php?eid={$user['e_id']}");
			}
			exit();
		}
		else
		{
			$_SESSION['elmsg'] = "Please enter valid Email Address and Password";	
			header("Location:account_login.php");
			exit();
	
		}	
	}
	else
	{
		$_SESSION['elmsg'] = "Please enter Email Address and Password";
			header("Location:account_login.php");
			exit();

		
	}
}

if($_GET["login"] =='true')
{
	
			
			
			$cart11=$cart->get_cart_count();
			if($cart11 >0 ) {
				
				
			$qry=mysqli_query($con,"select * from hht_users WHERE email='".$_SESSION['usrid']."'");
		
			$res=mysqli_fetch_assoc($qry);


			$uid=$res['e_id'];

			#insert Order information
			$order_no=rand(10000,100000);
			$total_amt=$cart->get_cart_total();
			$sql="insert into orders (ORDER_NO,ORDER_DATE,UID,TOTAL_AMT,PAY_STATUS) values ('{$order_no}',NOW(),'{$uid}','{$total_amt}','0')";
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
				//header("Location: view_cart.php");

			}
}
?>