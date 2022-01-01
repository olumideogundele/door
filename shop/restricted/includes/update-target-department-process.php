 <?php
 
 include("config/DB_config.php");
$emailing = "";
  $myName = new Name();
 if(isset($_POST['update']))
 {
 
 if(isset($_SESSION['email']))
 {
$emailing  = $_SESSION['email'];
 }

 
$id  = $_POST['id'];
$amount  = $_POST['amount'];
$desc_text  = $_POST['desc'];
 
	 
	   $super = $myName->showName($conn, "SELECT `super` FROM `user_unit` WHERE `account_number` = '$emailing'"); 
	   $dept = $myName->showName($conn, "SELECT `account_number` FROM `target_department_month` WHERE `id` = '$id'"); 
	   $reff1 = $myName->showName($conn, "SELECT `reff` FROM `target_department_month` WHERE `id` = '$id'"); 
	   $month = $myName->showName($conn, "SELECT `month` FROM `target_department_month` WHERE `id` = '$id'"); 
	   $year = $myName->showName($conn, "SELECT `year` FROM `target_department_month` WHERE `id` = '$id'"); 
	 $month = $myName->showName($conn, "SELECT  `name` FROM `months` WHERE `id` = '$month'"); 
	  
			 
			 if($super == 1)
			 {
				 
				 $status = 1;
			 }
	
	 
	 
$sql = 	mysqli_query($conn,"UPDATE `target_department_month` SET  `monthly` = '$amount', `desc_text` = '$desc_text', `status` = '$status' WHERE `id` = '$id'") or die("ERROR OCCURED: ".mysqli_error($conn));			
					
	 
	 
	 
	 
	 
	 if($sql)
	 {
		 
		 
		 
		 
		 
		  
			   echo'<a href="target-employee" class="btn btn-success btn-lg">Target Information Updated Successful. Thank you.</a><br />'; 
		  
		  if($super == 0 or $super != 1)
		  {
			  
			  $registeredby = $myName->showName($conn, "SELECT `name` FROM  `user_unit` WHERE `account_number` = '$emailing'");  	
			  $target_user = $myName->showName($conn, "SELECT `name` FROM  `user_unit` WHERE `account_number` = '$dept'");  	
			
			  $phone = $myName->showName($conn, "SELECT `phone` FROM  `user_unit` WHERE `super` = '1'");  	
			  
			 
			  
 $message = "Hi, Target Updated! 
Target information for ".$target_user.". 
".$month."/".$year."
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
			
			  
			  
			  	
	$query =  "SELECT  `name`, `phone`, `email`,`account_number`   FROM `user_unit` WHERE `ministry` = '$dept' AND `status` = 1 ORDER BY `id` DESC";	
 $extract_distance = mysqli_query($conn, $query) or die(mysqli_error($conn));
		$count = mysqli_num_rows($extract_distance);
    if ($count > 0)
		  {
 	 while ($row_distance=mysqli_fetch_row($extract_distance))
    {
  						  $name =$row_distance[0];
						   $phone =$row_distance[1];
		 $email =$row_distance[2];
		 $account_number =$row_distance[3];
			  $registeredby = $myName->showName($conn, "SELECT `name` FROM  `user_unit` WHERE `account_number` = '$emailing'");  	
			  
			  			  
			  
		  
		  $monthly = round($amount/12,2);
		   $message = "Hi, ".$name." 
Annual Departmental target of ".number_format($amount,2).". 
".$month."/".$year."
updated by ".$registeredby.". 
Ref. No: ".$reff1.".
Thank You.";
 $Sending = new SendingSMS(); 
  							 
						$Sending->smsAPI($phone,"ATTN",$message);
			  
			  
			   
		  $subject = "Annual Departmental Target Updated";
		   
		  $sql ="INSERT INTO `notification`(`code`,`title`,`message`, `registeredby`, `sent_to`, `status`, `read_status`, `created_at`) VALUES
('$reff1','$subject','$message','$emailing', '$account_number', '1', '1','$datetime')";
    mysqli_query($conn, $sql) or die(mysqli_error($conn));  
		  }
	 }
		  }
	
			 
			 
		 }
				else
				{
					  echo'<a href="target-employee" class="btn btn-danger btn-lg">Target Information Not Updated Successful. Thank you.</a><br />'; 
					
				}
				
	 
	  
 }

			

 
 
 
?>

 