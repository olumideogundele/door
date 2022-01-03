<?php
//session_start();

 
if(!isset($_SESSION['account_number']) || !isset($_SESSION['name']))
{
header("location: ../restricted/includes/logout-2.php");
}
else
{
	//$kd = $_SESSION['kd'];date_default_timezone_set('America/Chicago');;
		$datetime=date("Y-m-d g:i:s");
		$make_date=date("Y-m-d"); 
	 	 	 $make_date2 = date("Ymdgis");
		  //$username = $_SESSION['email'];
		 $code=  rand(10,100).$make_date2; 
		 $approvedUser = $_SESSION['email'];
	
}






?>

