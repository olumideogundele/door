 
<?php
include ("config/DB_config.php"); 
$counter = 0;
$active= "active";
$userT = "";
$usernameT = "";
 $myName = new Name();
 if(isset($_SESSION['email']))
 {
 $emailing = $_SESSION['email'];
	   
 }
 
 if(isset($_GET['value']))
 {
	 $coded = $_GET['value'];
	 $query12 =  "SELECT  `id`, `message`, `title`, `registeredby`, `sent_to`, `status`, `read_status`, `created_at`, `code`  FROM `notification` WHERE `sent_to` = '$emailing' or `sent_to` = 'all' AND `code` = '$coded'";	



 $extract_distance12= mysqli_query($conn, $query12) or die(mysqli_error($conn));
		$count12 = mysqli_num_rows($extract_distance12);
    if ($count12 > 0)
		  {
 	 while ($row_distance12=mysqli_fetch_row($extract_distance12))
    {
  						  	$id =$row_distance12[0];
		 					$message =$row_distance12[1];
		 					$title =$row_distance12[2];
						   	$registeredby =$row_distance12[3];
		 					$sent_to =$row_distance12[4];
		 					$status =$row_distance12[5];
		 					$read_status =$row_distance12[6];
		 					$created_at =$row_distance12[7];
		 					$code =$row_distance12[8];
					  	  		 
		
 $email = $myName->showName($conn, "SELECT  `email` FROM `user_unit` WHERE `account_number` = '$sent_to'"); 
	 $send_to_name = $myName->showName($conn, "SELECT  `name` FROM `user_unit` WHERE `account_number` = '$sent_to'"); 
	 $recieve_to_name = $myName->showName($conn, "SELECT  `email` FROM `user_unit` WHERE `account_number` = '$sent_to'"); 
	 $sendername = $myName->showName($conn, "SELECT  `name` FROM `user_unit` WHERE `account_number` = '$registeredby'"); 
	 $senderemail = $myName->showName($conn, "SELECT  `email` FROM `user_unit` WHERE `account_number` = '$registeredby'"); 
 
		  
	  $query1 =  "UPDATE  `notification`  SET `read_status`  = '2' WHERE `id` = '$id' AND `sent_to` = '$emailing' AND `code` = '$coded'";	
		 
		 
		 $extract_distance= mysqli_query($conn, $query1) or die(mysqli_error($conn));

}
 
						  
				 	
				 
			 
					}
else
{
	
	$message = "No email available at this time. Please check back soon.";
}
	}	   
	 
?>