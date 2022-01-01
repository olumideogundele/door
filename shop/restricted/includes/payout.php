 
<?php
include ("config/DB_config.php"); 
 $myName = new Name();
 if(isset($_SESSION['email']))
 {
 $emailing = $_SESSION['email'];
 }
  if(isset($_POST['validate']))
 {
 
$query = "";
 
	
	$unique_id = $_POST['unique_id'];
	  $amounting = $_POST['amount'];
	  
	  
	   $statusing = $myName->showName($conn, "SELECT `status` FROM `data_entry`WHERE `unique_id` = '$unique_id'"); 
	  
	  
	  if($statusing == 1)
	  {
		  
		    
echo'<a href="#"class="btn btn-danger btn-lg">Payment already made for this transaction. </a><br />';  
	  }
	  else
	  {
	  
	  
	  
	  
	  
	  
	  
	
	
 $query =  "SELECT  `amount` FROM `e_wallet` WHERE `account_number`  = '$emailing'";	
	
	
	//echo $query;
 $extract_distance = mysqli_query($conn, $query) or die(mysqli_error($conn));
		$count = mysqli_num_rows($extract_distance);
    if ($count > 0)
		  {
 	 while ($row_distance=mysqli_fetch_row($extract_distance))
    {
  						  	$Walletamount =$row_distance[0];
		 
		 if($Walletamount >= $amounting)
		 {
			 $sql = 	 "UPDATE `data_entry` SET    `status` = '1', `paid_date` = '$datetime', `paid_by` = '$emailing'  WHERE `unique_id` = '$unique_id'";
			 $process = mysqli_query($conn, $sql) or die(mysqli_error($conn));
			 
			 
			 
			 $newAmount = $Walletamount - $amounting;
			 
			 
			  $sql = 	 "UPDATE `e_wallet` SET `amount` = '$newAmount'    WHERE `account_number` = '$emailing'";
			 $process = mysqli_query($conn, $sql) or die(mysqli_error($conn));
			 
			 
			 /*SELECT * FROM `transactions` WHERE 1

`id`, `amount`, `account_number`, `registeredby`, `status`, `created_date`, `tcode`*/
			 
			 
			 
			 
			 $sql = "INSERT INTO `transactions`(`amount`, `account_number`, `registeredby`, `status`, `created_date`, `tcode`) VALUES
('$amounting',  '$emailing',  '$emailing', '1','$datetime', '$unique_id')";
 
 $process = mysqli_query($conn, $sql) or die(mysqli_error($conn));
 
	if ($process) {
		 
 
  echo '<div class="btn btn-success btn-lg">Payment made Successfully. Thank You.</a></div><br />'; 	
    echo '<meta http-equiv="Refresh" content="2; url=view-all-data.php?id=1"> ';
   
} else {
  // echo "Error: " . $sql . "<br>" . $conn->error;
    $error="Not Inserted,Some Problem occured.";
echo'<a href="#"class="btn btn-danger btn-lg">Information Not Submitted Successfully.  <br />Please try again later.</a><br />';  

}
			 
			 
			 
			 
			 
			 
		 }
		 else{
			 
			 	echo'<a href="#"class="btn btn-danger btn-lg">Amount in your wallet is too low. Please contact the admin.</a><br />';  
		 }
		 					
		 	 
 	
 
}
 
						  
				 }	
else
{
	
	echo'<a href="#"class="btn btn-danger btn-lg">No wallet found for you. Please contact the admin.</a><br />';  
	
}
	
				 
  }
			 
	}	   
	 
?>