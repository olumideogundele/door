 <?php
 
 include("config/DB_config.php");
$emailing = "";
  $myName = new Name();
 if(isset($_POST['validate']))
 {
 
 if(isset($_SESSION['email']))
 {
$emailing  = $_SESSION['email'];
 }

 $ref = date("YmdGis");
 
$wallet  = $_POST['wallet_no'];
$chargeAmount  = $_POST['amount'];
	 $desc= $_POST['desc'];
 
	$extract_user = mysqli_query($conn, "SELECT `amount` FROM `wallet` WHERE `wallet_no` = '$wallet'") or die(mysqli_error($conn));
		$count = mysqli_num_rows($extract_user);
		 if ($count > 0) {
			 //$fee = $myName->showName($conn, "SELECT `fee` FROM `application` WHERE 1"); 
			 $fee = 0; 
			  $new_Amount_1 =  $chargeAmount - $fee;
			 
			 $old_amount = $myName->showName($conn, "SELECT  `amount`  FROM `wallet` WHERE `wallet_no` = '$wallet'"); 
			 
			 $new_Amount = $old_amount + $new_Amount_1;
			  $sql = 	mysqli_query($conn,"INSERT INTO `wallet_breakdown`(`amount`, `registeredby`, `status`, `created_at`, `updated_at`, `wallet_no`, `reff`) VALUES('$new_Amount_1','$emailing','1','$datetime','$datetime','$wallet', '$ref' )") or die("ERROR OCCURED: ".mysqli_error($conn)); 
			 
			 	
	 $extract_user = mysqli_query($conn, "UPDATE `wallet` SET `amount` = '$new_Amount' WHERE `wallet_no` = '$wallet'") or die(mysqli_error($conn));
			 
			 
 /*$sql =  mysqli_query($conn,"INSERT INTO `transaction_payment`(`reff`, `transaction_amount`, `message`, `registeredby`, `created_at`, `status`, `wallet_new`) VALUES('$ref','$new_Amount_1','walletfund', '$wallet', '$datetime','1', '$new_Amount') ")or die("ERROR OCCURED: ".mysqli_error($conn)); 	
			 
			 */
		 
		 if ($extract_user) {
		 echo'<a href="dashboard.php" class="btn btn-success btn-lg">Wallet Credited Successful. Thank you.</a><br />'; 
			 
			 
		
			 
			  
				 		
		
			 
			 
			 
			 
	 /*
			 	  
  $message = "Hi, ".$naming.". 
 Your wallet funding was 
 successful.
 Current wallet amount is:
 ".number_format($new_Amount, 2)."
 ".$bonusSomething ;

  $senderID = "REQUISIPRO";
  
 
   $Sending = new SendingSMS(); 
  							 
							 $Sending->smsAPI($phone,"REQUISIPRO",$message);
			 */
			 
		 }
		 else
		 {
					 echo '<a href="#" class="btn btn-success btn-lg">Wallet Not Credited Successful. Please try again later.</a><br />'; 
		 }
			 
				
		 }
			else
			{
				
				
				
				
				
				
				
				
				
				
				
				
			  //$fee = $myName->showName($conn, "SELECT `fee` FROM `application` WHERE 1"); 
			  $fee = 0; 
				$new_Amount_1 =  $chargeAmount - $fee;
			
				
				
				
				
				
				
				
				
 $sql = 	mysqli_query($conn,"INSERT INTO `wallet`(`amount`, `registeredby`, `status`, `created_at`, `updated_at`, `wallet_no`) VALUES('$new_Amount_1','$emailing','1','$datetime','$datetime','$wallet' )") or die("ERROR OCCURED: ".mysqli_error($conn)); 
				
				
 $sql = 	mysqli_query($conn,"INSERT INTO `wallet_breakdown`(`amount`, `registeredby`, `status`, `created_at`, `updated_at`, `wallet_no`, `reff`) VALUES('$new_Amount_1','$emailing','1','$datetime','$datetime','$wallet', '$ref' )") or die("ERROR OCCURED: ".mysqli_error($conn)); 
			 
				
/*
 $sql =  mysqli_query($conn,"INSERT INTO `transaction_payment`(`reff`, `transaction_amount`, `message`, `registeredby`, `created_at`, `status`, `wallet_new`) VALUES('$ref','$new_Amount_1','walletfund', '$wallet', '$datetime','1', '$new_Amount_1') ")or die("ERROR OCCURED: ".mysqli_error($conn)); 					
			 
	*/			
				
				
				
				
				
				
				
				
		 
		 if ($sql) {
			   echo'<a href="dashboard.php" class="btn btn-success btn-lg">Wallet Credited Successful. Thank you.</a><br />'; 
			 
		 
			 
			 
			 
			 
			 
			 
			 
			 
			  
			 
			 
			 
			 
			 
			 
			 
		 }
				else
				{
					  echo'<a href="#" class="btn btn-success btn-lg">Wallet Not Credited Successful. Please try again later.</a><br />'; 
					
				}
				
				
				
			}
 }
			

 
 
 
?>

 