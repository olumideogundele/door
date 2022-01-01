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

 $reff1 =date("YmdGiss");
 $reff =$emailing.'-'.$reff1;
 
$incometype  = $_POST['incometype'];
$amount  = $_POST['amount'];
	 $incomedate= $_POST['incomedate'];
	 
	 //01/06/2021
	 $month = substr($incomedate,0,2);
	 $year = substr($incomedate,6);
	 
	 
	 
	 
	 
	 $desc= $_POST['desc'];
	 $status = 0;
	 
	 
	 
	  $super = $myName->showName($conn, "SELECT `super` FROM `user_unit` WHERE `account_number` = '$emailing'"); 
	  $department = $myName->showName($conn, "SELECT `ministry` FROM `user_unit` WHERE `account_number` = '$emailing'"); 
			 
			 if($super == 1)
			 {
				 
				 $status = 1;
			 }
	 
 
	$extract_user = mysqli_query($conn, "SELECT `amount` FROM `income_actual` WHERE `reff` = '$reff'") or die(mysqli_error($conn));
		$count = mysqli_num_rows($extract_user);
		 if ($count > 0) {
			 
 	 echo '<a href="#" class="btn btn-success btn-lg">Budget Information Not Inserted Successfully. Please try again later.</a><br />'; 	 
		
		  
				
		 }
			else
			{
		 
 	
	 
				//
 $sql = 	mysqli_query($conn,"INSERT INTO `income_actual`(`income_type`,`amount`, `dept`, `income_date`, `desc_text`, `status`, `created_date`, `registeredby`, `reff`, `month` , `year`) VALUES('$incometype','$amount','$department','$incomedate', '$desc','$status','$datetime','$emailing','$reff','$month','$year' )") or die("ERROR OCCURED: ".mysqli_error($conn)); 
 
$sql = 	mysqli_query($conn,"INSERT INTO `income_actual_backup`(`income_type`,`amount`, `dept`, `income_date`, `desc_text`, `status`, `created_date`, `registeredby`, `reff`, `month` , `year`) VALUES('$incometype','$amount','$department','$incomedate', '$desc','$status','$datetime','$emailing','$reff' ,'$month','$year')") or die("ERROR OCCURED: ".mysqli_error($conn)); 
 
				
 	  if ($sql) {
		  
		  
		  
		  
		  if($super == 0 or $super != 1)
		  {
			  
			  $registeredby = $myName->showName($conn, "SELECT `name` FROM  `user_unit` WHERE `account_number` = '$emailing'");  	
			
			  $phone = $myName->showName($conn, "SELECT `phone` FROM  `user_unit` WHERE `super` = '1'");  	
			  
			  
			  
 $message = "Hi, 
 Income Alert! Inserted by ".$registeredby.". 
 Amount: ".number_format($amount,2)."
 Income Date: ".$incomedate."
 Ref. No: ".$reff1.". 
 needs approval. 
 Thank You.";
 $Sending = new SendingSMS(); 
  							 
						$Sending->smsAPI($phone,"ATTN",$message);
		  }
		  
		  
		  
			   echo'<a href="income-actual.php" class="btn btn-success btn-lg">Budget Information Submitted Successful. Thank you.</a><br />'; 
			 
		 
			 
			 
			 
			 
			 
			 
			 
			 
			  
			 
			 
			 
			 
			 
			 
			 
		 }
				else
				{
					  echo'<a href="income-actual.php" class="btn btn-success btn-lg">Budget Information Not Submitted Successful. Thank you.</a><br />'; 
					
				}
				
				
				
			}
 }
			

 
 
 
?>

 