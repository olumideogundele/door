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
 
$user  = $_POST['user'];
$amount_real  = $_POST['amount'];
$year  = $_POST['year'];
$mode  = $_POST['mode'];
	 $super_category  = $_POST['super_category'];
$category  = $_POST['category'];	 
$subcategory  = $_POST['subcategory'];
	
	 $desc= $_POST['desc'];
	 
	 $amount = "";
	 
	 //ALTER TABLE `target_department`  ADD `remaining_amount` VARCHAR(50) NULL DEFAULT NULL  AFTER `account_number`;
	 
	 
	 $user_depatment = $myName->showName($conn, "SELECT `ministry` FROM  `user_unit` WHERE `account_number` = '$user'");  
	 
	 
	 
	  $my_department = $myName->showName($conn, "SELECT `ministry` FROM `user_unit` WHERE `account_number` = '$emailing'"); 
	 
	 $remaining_amount = $myName->showName($conn, "SELECT `remaining_amount` FROM  `target_department` WHERE `account_number` = '$user_depatment' AND `year` = '$year' AND `super_category` = '$super_category' AND `category` = '$category' AND `sub_category` = '$subcategory'");  
	 
	 
	 
	 $amount_dept = $myName->showName($conn, "SELECT SUM(`amount`) FROM  `target_department` WHERE `account_number` = '$user_depatment' AND `year` = '$year' AND `super_category` = '$super_category' AND `category` = '$category' AND `sub_category` = '$subcategory'");  
	 
	 
	 
	 
	 
	 if($mode == 1)
	 {
		 $amount = $amount_real/100 * $amount_dept;
		 
		 $remaining_amount_real = $remaining_amount - $amount;
		 
		 
	 }else
	 {
		 $amount = $amount_real;
		  $remaining_amount_real = $remaining_amount - $amount;
		 
	 }
	
	 
	 
	 
	 
	 
	  
	 $total_target_amount = $myName->showName($conn, "SELECT `amount` FROM `target_department` WHERE     `year` = '$year'  AND `super_category` = '$super_category' AND `category` = '$category' AND `sub_category` = '$subcategory'  AND `account_number` = '$my_department'"); 
	 
	 
	 
	  $sub_total_target_amount_dept = $myName->showName($conn, "SELECT SUM(`amount`) FROM `target_employee` WHERE     `year` = '$year'  AND `super_category` = '$super_category' AND `category` = '$category' AND `sub_category` = '$subcategory'"); 
	 
	 
	  $total_target_amount_dept =  $sub_total_target_amount_dept + $amount_real;
	 
	 
	 
	  if($total_target_amount_dept > $total_target_amount)
	 {
		 
		  echo '<a href="#" class="btn btn-danger btn-lg">Department Target Is More Than Overal Target.</a><br />'; 	 
		   echo'<a href="target-employee" class="btn btn-danger btn-lg">-'.$user_depatment.'- Employee target is greated than departmental target.<br> Total departmental remaining allocation is '.number_format($remaining_amount).'
</a><br />'; 
		 
		 
	 }
	 else
	 {
	 
	 
	 
	 
/*	 
	 if($amount > $remaining_amount)
	 {
 echo'<a href="target-employee" class="btn btn-danger btn-lg">-'.$user_depatment.'- Employee target is greated than departmental target.<br> Total departmental remaining allocation is '.number_format($remaining_amount).'
</a><br />'; 
		 
	 }
	 else
	 {*/
		 
		 
		 
	 
	 
	 
	 $status = 0;
	 
	 
	 
	  $super = $myName->showName($conn, "SELECT `super` FROM `user_unit` WHERE `account_number` = '$emailing'"); 
	  $department = $myName->showName($conn, "SELECT `ministry` FROM `user_unit` WHERE `account_number` = '$emailing'"); 
			 
			 if($super == 1)
			 {
				 
				 $status = 1;
			 }
	
 
	$extract_user = mysqli_query($conn, "SELECT `amount` FROM `target_employee` WHERE `account_number` = '$user' AND `year` = '$year'") or die(mysqli_error($conn));
		$count = mysqli_num_rows($extract_user);
		 if ($count > 0) {
			 
 	 echo '<a href="#" class="btn btn-danger btn-lg">Target Information Not Inserted Successfully. Please try again later.</a><br />'; 	 
		
		  
				
		 }
			else
			{
		 
 	
	 $monthly = round($amount/12,2);
				
				 
				
 $sql = 	mysqli_query($conn,"INSERT INTO `target_employee`(`amount`, `desc_text`, `status`, `created_date`, `registeredby`, `monthly`, `year`, `account_number`, `reff`, `super_category`, `category`, `sub_category`, `department`) VALUES('$amount','$desc','$status','$datetime','$emailing','$monthly','$year','$user', '$reff', '$super_category', '$category', '$subcategory', '$my_department' )") or die("ERROR OCCURED: ".mysqli_error($conn)); 
				
				
				for($i = 1; $i <= 12; $i++)
				{
				 
					
$sql = 	mysqli_query($conn,"INSERT INTO `target_employee_month`(`monthly`, `year`, `account_number`, `amount`, `desc_text`, `status`, `created_date`, `registeredby`, `month`, `reff`, `super_category`, `category`, `sub_category`) VALUES('$monthly','$year','$user','$amount', '$desc','$status','$datetime','$emailing','$i', '$reff', '$super_category', '$category', '$subcategory' )") or die("ERROR OCCURED: ".mysqli_error($conn));			
					
				}
				
				
 
 
 
				
 	  if ($sql) {
		  
		  $sql = 	mysqli_query($conn,"UPDATE `target_department` SET  `remaining_amount` = '$remaining_amount_real'  WHERE `account_number` = '$user_depatment' AND `year` = '$year'") or die("ERROR OCCURED: ".mysqli_error($conn));		
		  
		  
		  if($super == 0 or $super != 1)
		  {
			  
			  $registeredby = $myName->showName($conn, "SELECT `name` FROM  `user_unit` WHERE `account_number` = '$emailing'");  	
			  $target_user = $myName->showName($conn, "SELECT `name` FROM  `user_unit` WHERE `account_number` = '$user'");  	
			
			  $phone = $myName->showName($conn, "SELECT `phone` FROM  `user_unit` WHERE `super` = '1'");  	
			  
			  $monthly = round($amount/12,2);
			  
 $message = "Hi, Target Alert! 
Target information for ".$target_user.". 
by ".$registeredby.". 
Amount: ".number_format($amount,2)."
Ref. No: ".$reff1.".
needs approval. 
Thank You.";
 $Sending = new SendingSMS(); 
  							 
						$Sending->smsAPI($phone,"ATTN",$message);
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
		  }
		  else if($super == 1 or $super == "1")
		  {
			  $registeredby = $myName->showName($conn, "SELECT `name` FROM  `user_unit` WHERE `account_number` = '$emailing'");  	
			   $phonenumber = $myName->showName($conn, "SELECT `phone` FROM  `user_unit` WHERE `account_number` = '$user'");  
		    $name_user = $myName->showName($conn, "SELECT `name` FROM  `user_unit` WHERE `account_number` = '$user'");  
		  
		  $monthly = round($amount/12,2);
		/*   $message = "Hi, ".$name_user." 
Annual target of ".number_format($amount,2).". 
Monthly target of ".number_format($monthly,2).". 
set by ".$registeredby.". 
Ref. No: ".$reff1.".
Thank You.";
 $Sending = new SendingSMS(); 
  							 
						$Sending->smsAPI($phonenumber,"ATTN",$message);
			  */
			  
			  
			  	   $realmessage = "Hi, ".$name_user." 
Annual target of ".number_format($amount,2).". 
Monthly target of ".number_format($monthly,2).". 
set by ".$registeredby.". 
Ref. No: ".$reff1.".
Thank You.";
		  $subject = "Annual Target Set";
		   
		  $sql ="INSERT INTO `notification`(`code`,`title`,`message`, `registeredby`, `sent_to`, `status`, `read_status`, `created_at`) VALUES
('$reff','$subject','$realmessage','$emailing', '$user', '1', '1','$datetime')";
     
		  }
		  
		  
		  
		  
				
		 	
 mysqli_query($conn, $sql) or die(mysqli_error($conn));
		  
			   echo'<a href="target-employee" class="btn btn-success btn-lg">Target Information Submitted Successful. Thank you.</a><br />'; 
			 
		 
			 
			 
			 
			 
			 
			 
			 
			 
			  
			 
			 
			 
			 
			 
			 
			 
		 }
				else
				{
					  echo'<a href="target-employee" class="btn btn-danger btn-lg">Target Information Not Submitted Successful. Thank you.</a><br />'; 
					
				}
				
				
				
			}
	 }
 }
			

 
 //}
 
?>

 