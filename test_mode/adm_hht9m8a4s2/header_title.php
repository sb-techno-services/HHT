<?php 

$qry_accountemp = mysqli_query($conn,"SELECT * FROM hrm_emp_details where e_id = '".$_GET['e_id']."'");
	$accountemp = mysqli_fetch_assoc($qry_accountemp);
	



?>

 - <?php echo $account['e_title'].'.'.$account['e_fname'].' '.$account['e_lname'];?> ( <?php echo $accountemp['ed_job_title'] ; ?>)
