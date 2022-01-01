 
<?php
include ("config/DB_config.php"); 
 $myName = new Name();
 if(isset($_SESSION['email']))
 {
 $emailing = $_SESSION['email'];
 }
 
$query = "";

 
	
 $query =  "SELECT `id`, `name`, `account_number`, `phone`, `email`, `address`, `usertype`,`created_date`, `registeredby`, `status`,`irrelivant`,`ministry` FROM `user_unit` WHERE `account_number` = '$emailing' ";	
 
 $extract_distance = mysqli_query($conn, $query) or die(mysqli_error($conn));
		$count = mysqli_num_rows($extract_distance);
    if ($count > 0)
		  {
 	 while ($row_distance=mysqli_fetch_row($extract_distance))
    {
  						  	$id =$row_distance[0];
						   	$name =$row_distance[1];
						   	$naming =$row_distance[1];
					  		$account_number =$row_distance[2];
					  		$phone =$row_distance[3];
						   	$email =$row_distance[4];
					  		$address =$row_distance[5];
					  		$usertype =$row_distance[6];
						    $created_date =$row_distance[7];
						 	$registeredby =$row_distance[8];
					   		$status =$row_distance[9];
							$irrelivant  =$row_distance[10];
							$ministry  =$row_distance[11];
		 
		 
		 
		  
	 
		 
		 
		 
		
		
		
	 
	 
}
 
					}	  
				 	
				 
			 
					
		   
	 
?>