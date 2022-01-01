 <?php
    $myName = new Name();
 include("config/DB_config.php");
$emailing = "";
 
 if(isset($_POST['validate']))
 {
 
 if(isset($_SESSION['email']))
 {
$emailing  = $_SESSION['email'];
 }
 
	 
 
	 
$account_number  =  mysqli_real_escape_string($conn,$_POST['account_number']);
 
$amount  =  mysqli_real_escape_string($conn,$_POST['amount']);
$remark  =  mysqli_real_escape_string($conn,$_POST['remark']);
 
	 
	  $rand =  $account_number.'-'.rand(13,324232354);
					
					
					
 $query1 =  "SELECT  `id`, `amount`  FROM `e_wallet` WHERE `account_number` = '$account_number'";	
	 
 
	 
 $extract_distance1 = mysqli_query($conn, $query1) or die(mysqli_error($conn));
		$count1 = mysqli_num_rows($extract_distance1);
    if ($count1 > 0)
		  {
 	 while ($row_distance1=mysqli_fetch_row($extract_distance1))
    {
  			$id =$row_distance1[0];
 			$amount_old =$row_distance1[1];	
		 //	$account_number =$row_distance1[1];	
		
		 $newAmount = $amount_old + $amount; 
		 
		 
		 
 $query =  "UPDATE `e_wallet` SET `amount` = '$newAmount', `updated_at` = '$datetime', `status` = 1 WHERE `account_number` = '$account_number' ";	
		 
 
 $extract_distance = mysqli_query($conn, $query) or die(mysqli_error($conn));
	
		 
 $sql ="INSERT INTO `e_wallet_trend`(`amount`, `account_number`, `registeredby`, `status`, `created_date`, `updated_at`, `tcode`, `remark`) VALUES('$amount', '$account_number', '$emailing', '1', '$datetime', '$datetime', '$rand', '$remark')";
	$process = mysqli_query($conn, $sql) or die(mysqli_error($conn));
		 
 	 
		 
		 if($extract_distance)
		 {
			 
			 echo'<a href="#" class="btn btn-success btn-lg">Wallet Credited Inserted Successfully.</a><br />';
		 }
		 else
		 {
			 echo'<a href="#" class="btn btn-danger btn-lg">Wallet Not Credited Inserted Successfully.</a><br />';
			 
		 }

		
	}
			  
		  }
					else
					{
				 
				
$sql ="INSERT INTO `e_wallet`(`amount`, `account_number`, `registeredby`, `status`, `created_date`, `updated_at`, `tcode`, `remark`) VALUES('$amount', '$account_number', '$emailing', '1', '$datetime', '$datetime', '$rand', '$remark')";
	$process = mysqli_query($conn, $sql) or die(mysqli_error($conn));
						
 $sql ="INSERT INTO `e_wallet_trend`(`amount`, `account_number`, `registeredby`, `status`, `created_date`, `updated_at`, `tcode`, `remark`) VALUES('$amount', '$account_number', '$emailing', '1', '$datetime', '$datetime', '$rand', '$remark')";
	$process = mysqli_query($conn, $sql) or die(mysqli_error($conn));

						
						
						
						
 		if($process)
		 {
			 
			 echo'<a href="#" class="btn btn-success btn-lg">Wallet Credited Inserted Successfully.</a><br />';
		 }
		 else
		 {
			 echo'<a href="#" class="btn btn-danger btn-lg">Wallet Not Credited Inserted Successfully.</a><br />';
			 
		 }

						
						
						
						
					}
	 
	 
	 
	 
	 	$name = $myName->showName($conn, "SELECT `name` FROM `user_unit` WHERE `account_number` = '$account_number'"); 
		$phone = $myName->showName($conn, "SELECT `phone` FROM `user_unit` WHERE `account_number` = '$account_number'"); 
		$email = $myName->showName($conn, "SELECT `email` FROM `user_unit` WHERE `account_number` = '$account_number'"); 
			 $statusT = "badge badge-success m-b-5";
$statusTP = "Successful";		
					
		$message = "Hello ".$name."! Your wallet was credited successfully. Amount: ".number_format($amount,2).". Transaction ID: ".$rand.". Thank You.";
 
	 
	 
  	 					$Sending = new SendingSMS(); 
  	
	 if($phone !="")
	 {
		 
		 
$arr = explode(' ',trim($inst_name));
$sender = substr($arr[0], 0, 10);
		 			$value =	$Sending->smsAPI($phone,$sender,$message);		
		 //echo $value." - polide";
		 
		
		 $messageBody = urlencode($message);
 
  	 	
   

 
	 }
		
  
 
$conn->close();
	
 }




?>

 