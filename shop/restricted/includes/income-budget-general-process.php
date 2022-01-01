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
 
 

$amount  = $_POST['amount'];
	 $year= $_POST['year'];
	 $desc= $_POST['desc'];
	 $status = 0;
	 
	 
	 
	  $super = $myName->showName($conn, "SELECT `super` FROM `user_unit` WHERE `account_number` = '$emailing'"); 
			 
			 if($super == 1)
			 {
				 
				 $status = 1;
			 }
	 
 
	$extract_user = mysqli_query($conn, "SELECT `amount` FROM `income_budget_general` WHERE     `year` = '$year'  AND `amount` != ''") or die(mysqli_error($conn));
		$count = mysqli_num_rows($extract_user);
		 if ($count > 0) {
			 
			  
			 	$monthly = $amount/12;
			 
			 
			 
			 
			 $super = $myName->showName($conn, "SELECT `super` FROM `user_unit` WHERE `account_number` = '$emailing'"); 
			 
			 if($super == 1)
			 {
				 
				 $status = 1;
			 }
			 
			 
	 $extract_user = mysqli_query($conn, "UPDATE `income_budget_general` SET `amount` = '$amount', `monthly` = '$monthly',`year` = '$year',`desc_text` = '$desc',`status` = '$status'  WHERE   `year` = '$year'") or die(mysqli_error($conn));
			 
 
		 if ($extract_user) {
			 
			 
			 $sql = 	mysqli_query($conn,"INSERT INTO `income_budget_general_backup`(`year`, `monthly`, `amount`, `desc_text`, `status`, `created_date`, `registeredby`, `reff`) VALUES('$year','$monthly','$amount','$desc','$status','$datetime','$emailing','$ref')") or die("ERROR OCCURED: ".mysqli_error($conn)); 
			 
			 
			  if($super == 0 or $super != 1)
		  {
			  
			  $registeredby = $myName->showName($conn, "SELECT `name` FROM  `user_unit` WHERE `account_number` = '$emailing'");  	
			
			  $phone = $myName->showName($conn, "SELECT `phone` FROM  `user_unit` WHERE `super` = '1'");  	
			  
			  
			  
			   $message = "Hi, Expenses Budget updated by ".$registeredby.". Ref. No: ".$ref.". needs approval. Thank You.";

  
  	 $Sending = new SendingSMS(); 
  							 
						$Sending->smsAPI($phone,"ATTN",$message);
		  }
			 
				
		 echo'<a href="dashboard.php" class="btn btn-success btn-lg">Budget Information Updated Successful. Thank you.</a><br />'; 
			 
			 
		
			 
			  
 
			 
		 }
		 else
		 {
					 echo '<a href="#" class="btn btn-success btn-lg">Budget Information Not Updated Successful. Please try again later.</a><br />'; 
		 }
			 
				
		 }
			else
			{
				
				
				
				$monthly = $amount/12;
 	
 	
	 
				
 $sql = 	mysqli_query($conn,"INSERT INTO `income_budget_general`( `year`, `monthly`, `amount`, `desc_text`, `status`, `created_date`, `registeredby`, `reff`) VALUES('$year','$monthly','$amount','$desc','$status','$datetime','$emailing','$ref' )") or die("ERROR OCCURED: ".mysqli_error($conn)); 
 
$sql = 	mysqli_query($conn,"INSERT INTO `income_budget_general_backup`(`year`, `monthly`, `amount`, `desc_text`, `status`, `created_date`, `registeredby`, `reff`) VALUES('$year','$monthly','$amount','$desc','$status','$datetime','$emailing','$ref' )") or die("ERROR OCCURED: ".mysqli_error($conn)); 
				
 	  if ($sql) {
		  
		  
		  
		  
		  if($super == 0 or $super != 1)
		  {
			  
			  $registeredby = $myName->showName($conn, "SELECT `name` FROM  `user_unit` WHERE `account_number` = '$emailing'");  	
			
			  $phone = $myName->showName($conn, "SELECT `phone` FROM  `user_unit` WHERE `super` = '1'");  	
			  
			  
			  
			   $message = "Hi, Expenses Budget inserted by ".$registeredby.". Ref. No: ".$ref.". needs approval. Thank You.";

  
  	 $Sending = new SendingSMS(); 
  							 
						$Sending->smsAPI($phone,"ATTN",$message);
		  }
		  
		  
		  
			   echo'<a href="dashboard.php" class="btn btn-success btn-lg">Budget Information Submitted Successful. Thank you.</a><br />'; 
			 
		 
			 
			 
			 
			 
			 
			 
			 
			 
			  
			 
			 
			 
			 
			 
			 
			 
		 }
				else
				{
					  echo'<a href="#" class="btn btn-success btn-lg">Budget Information Not Submitted Successful. Thank you.</a><br />'; 
					
				}
				
				
				
			}
 }
			

 
 
 
?>

 