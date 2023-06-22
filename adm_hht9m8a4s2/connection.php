<?php
session_start();
error_reporting(0);
	 $path = "https://www.hanumanhindutemple.org";


$host = 'localhost';  
$user = 'hanumanhindutemple_orghht6m2ayh5s8';  
$pass = 'htt9eVB8*)^p4Ta';  
$dbname = 'hanumanhindutemple_orghht6m2ayh5s8';  
  
$conn = mysqli_connect($host, $user, $pass,$dbname);  
if(!$conn){  
  die('Could not connect: '.mysqli_connect_error());  
}  


 $DOMAIN_NAME = "Hanuman Hindu Temple";
$DOMAIN_NAME_PAGE = "Welcome to Hanuman Hindu Temple";
$transFrom = array(2 => "Cash", 5 => "Cheque", 3 => "DD", 4 => "RTGS", 6=> "NEFT");
$transForView = array(2 => "In Hand", 5 => "Cheque", 3 => "DD", 4 => "RTGS", 6=> "NEFT", 1 => "Bank");
function pagenation($rows, $perpage, $url, $cpage)
{	
	global $path;
	$nopages = ceil($rows/$perpage);
	if($cpage > 1)
	{
		if(($cpage-1) == 1)
		{
			echo '<a href="'.$url.'" class="pnav"><strong>Prev</strong></a>&nbsp;';
		}
		else
		{
			echo '<a href="'.$url.($cpage - 1).'" class="pnav"><strong>Prev</strong></a>&nbsp;';
		}
	}
	
	for($i = 1; $i < $nopages+1; $i++)
	{
		if($cpage == $i)
		{
			echo "<span class='pnav sel'>".$i."</span>";
		}
		else if(((($i+7) > $cpage) && (($i-7) < $cpage)) || ($cpage < 10 && $i < 11))
		{		
			if($i == 1)
			{
				echo '<a href="'.$url.'" class="pnav">'.$i.'</a>&nbsp;';
			}
			else
			{
				echo '<a href="'.$url.$i.'" class="pnav">'.$i.'</a>&nbsp;';
			}
		}
	}
	if($nopages >= ($cpage + 1))
	{
		echo '<a href="'.$url.($cpage + 1).'" class="pnav"><strong>Next</strong></a>&nbsp;';
	}
}
