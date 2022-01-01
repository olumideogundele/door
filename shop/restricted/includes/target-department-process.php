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
$amount  = $_POST['amount'];
$year  = $_POST['year'];
	 	 $super_category  = $_POST['super_category'];
$category  = $_POST['category'];	 
$subcategory  = $_POST['subcategory'];
	
	
	 $desc= $_POST['desc'];
	 $status = 0;
	 
	 
	  
	  $total_target_amount = $myName->showName($conn, "SELECT `amount` FROM `income_budget` WHERE     `year` = '$year'  AND `super_category` = '$super_category' AND `category` = '$category' AND `sub_category` = '$subcategory'"); 
	 
	 
	 
	  $sub_total_target_amount_dept = $myName->showName($conn, "SELECT SUM(`amount`) FROM `target_department` WHERE     `year` = '$year'  AND `super_category` = '$super_category' AND `category` = '$category' AND `sub_category` = '$subcategory'"); 
	 
	 
	  $total_target_amount_dept =  $sub_total_target_amount_dept + $amount;
	 
	 
	 if($total_target_amount_dept > $total_target_amount)
	 {
		 
		  echo '<a href="#" class="btn btn-danger btn-lg">Department Target Is More Than Overal Target.</a><br />'; 	 
		 
	 }
	 else
	 {
	 
	 
	 
	 
	 
	 
	  $super = $myName->showName($conn, "SELECT `super` FROM `user_unit` WHERE `account_number` = '$emailing'"); 
	  $department = $myName->showName($conn, "SELECT `ministry` FROM `user_unit` WHERE `account_number` = '$emailing'"); 
			 
			 if($super == 1)
			 {
				 
				 $status = 1;
			 }
	
 
	$extract_user = mysqli_query($conn, "SELECT `amount` FROM `target_department` WHERE `account_number` = '$user' AND `year` = '$year' AND `super_category` = '$super_category' AND `category` = '$category' AND `sub_category` = '$subcategory'") or die(mysqli_error($conn));
		$count = mysqli_num_rows($extract_user);
		 if ($count > 0) {
			 
 	 echo '<a href="#" class="btn btn-danger btn-lg">Target Information Not Inserted Successfully. Please try again later.</a><br />'; 	 
		
		  
				
		 }
			else
			{
		 
 	
	 $monthly = round($amount/12,2);
				
				 
				
 $sql = 	mysqli_query($conn,"INSERT INTO `target_department`(`amount`, `desc_text`, `status`, `created_date`, `registeredby`, `monthly`, `year`, `account_number`, `reff`,  `remaining_amount`, `super_category`, `category`, `sub_category`) VALUES('$amount','$desc','$status','$datetime','$emailing','$monthly','$year','$user', '$reff', '$amount','$super_category', '$category', '$subcategory' )") or die("ERROR OCCURED: ".mysqli_error($conn)); 
				
				
				for($i = 1; $i <= 12; $i++)
				{
				 
					
$sql = 	mysqli_query($conn,"INSERT INTO `target_department_month`(`monthly`, `year`, `account_number`, `amount`, `desc_text`, `status`, `created_date`, `registeredby`, `month`, `reff`, `super_category`, `category`, `sub_category`) VALUES('$monthly','$year','$user','$amount', '$desc','$status','$datetime','$emailing','$i', '$reff','$super_category', '$category', '$subcategory' )") or die("ERROR OCCURED: ".mysqli_error($conn));			
					
				}
				
				
 
 
 
				
 	  if ($sql) {
		  
		  
		  
		  
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
			
			  
			  
			  	
	$query =  "SELECT  `name`, `phone`, `email`,`account_number`   FROM `user_unit` WHERE `ministry` = '$user' AND `status` = 1 ORDER BY `id` DESC";	
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
			  
			  
			  			  
			  
		  
		  $monthly = round($amount/12,2);
		   $message = "Hi, ".$name." 
Annual Departmental target of ".number_format($amount,2).". 
AVG. Monthly target of ".number_format($monthly,2).". 
set by ".$registeredby.". 
Ref. No: ".$reff1.".
Thank You.";
 $Sending = new SendingSMS(); 
  							 
						$Sending->smsAPI($phone,"ATTN",$message);
			  
			  
			   
		  $subject = "Annual Departmental Target";
		   
		  $sql ="INSERT INTO `notification`(`code`,`title`,`message`, `registeredby`, `sent_to`, `status`, `read_status`, `created_at`) VALUES
('$reff1','$subject','$message','$emailing', '$account_number', '1', '1','$datetime')";
    mysqli_query($conn, $sql) or die(mysqli_error($conn));  
		  }
	 }
	
	}
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  

		  
		  
		  
		  
				
		 	

		  
			   echo'<a href="target-department" class="btn btn-success btn-lg">Target Information Submitted Successful. Thank you.</a><br />'; 
			 
		 
			 
			 
			 
			 
			 
			 
			 
			 
			  
			 
			 
			 
			 
			 
			 
			 
		 }
				else
				{
					  echo'<a href="target-employee" class="btn btn-danger btn-lg">Target Information Not Submitted Successful. Thank you.</a><br />'; 
					
				}
				
				
				
			}
 }
			

 }
 
 
?>

 