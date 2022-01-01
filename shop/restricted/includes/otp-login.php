 <?php
 
 
 include("config/DB_config.php");
$emailing = "";
 
 if(isset($_POST['validate']))
 {
 
 if(isset($_SESSION['email']))
 {
$emailing  = $_SESSION['email'];
 }



$password  =  mysqli_real_escape_string($conn,$_POST['otp']);


 
	 //`id`, `unique_id`, `encrypted_password`, `salt`, `registeredby`, `status`, `created_at` 
$statement = "select * from `otp_signature` where (`registeredby` = '$emailing') AND `status` =  1";
	
$result = mysqli_query($conn,$statement) or die("ERROR OCCURED: ".mysqli_error($conn));

if($result)
{
if(mysqli_num_rows($result) == 1)
{
$customer = mysqli_fetch_assoc($result);
 
 
 $encrypted_password = $customer['encrypted_password'];
 $salt = $customer['salt'];
	$username  = $customer['registeredby'];
$hash = base64_encode(sha1($password . $salt, true) . $salt);
  
  
	
	$_SESSION['otp'] = $encrypted_password ;
	
 if ($encrypted_password == $hash and (trim($emailing)) == trim($username))
   {
	 
	 
	
  $signature = $myName->showName($conn, "SELECT  `signature` FROM  `user_unit` WHERE  `account_number` = '$emailing'"); 
 $filename_sign = $myName->showName($conn, "SELECT  `filename` FROM `signature` WHERE  `created_by` = '$emailing'"); 
	 
	 
	 
	 if($signature == 1)
							{
		 
		 	if($filename_sign == "")
							{
						 echo '<meta http-equiv="Refresh" content="0; url=signature-page"> ';		
			}
		 else
		 {
			 
			  echo '<meta http-equiv="Refresh" content="0; url=view-signature.php"> ';
		 }
		 
		 
	 }
	 else
	 {
		  echo '<meta http-equiv="Refresh" content="0; url=dashboard"> ';
		 
	 }
				 
			 
				 
 
	
	
	
	
	
}
	else
	{
		
		
				echo'<div class="btn btn-danger btn-lg">
                   OTP: Incorrect for your acccount.
                
            </div>'; 
		
	}
	
}
	 
	 
	 
	 
	 
 }
 }
 
//$conn->close();
	
 
?>

 