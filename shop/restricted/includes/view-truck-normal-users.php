 
<?php
//include ("config/DB_config.php"); 
 $myName = new Name();
 if(isset($_SESSION['email']))
 {
 $emailing = $_SESSION['email'];
 }
 
$query1 = "";
 
 
$query1 =  "SELECT `id`, `account_number`, `phone`, `email`, `address`, `registeredby`, `status`, `file`, `state`, `lga`, `number` , `year`, `name`, `created_date` FROM `user_unit` WHERE `account_number` = '$emailing'";
 
  $extract_distance = mysqli_query($conn, $query1) or die(mysqli_error($conn));
		$count = mysqli_num_rows($extract_distance);
    if ($count > 0)
		  {
 	 while ($row_distance=mysqli_fetch_row($extract_distance))
    {
  						  	$id =$row_distance[0];
  						  	$id123 =$row_distance[0];
						   	$account_number =$row_distance[1];
					  		$phone =$row_distance[2];
					  		$email =$row_distance[3];
						   	$address =$row_distance[4];
					  		$registeredby =$row_distance[5];
					  		$status =$row_distance[6];
						   	$file =$row_distance[7];
						   	$state =$row_distance[8];
					  		$lga =$row_distance[9];
					   		$number =$row_distance[10];
                            $year =$row_distance[11];
                            $name =$row_distance[12];
                            $created_date =$row_distance[13];
                            
         
         $irrelivant = $myName->showName($conn, "SELECT  `irrelivant` FROM `user_unit` WHERE `account_number` = '$account_number'"); 
       //  $state_name = $myName->showName($conn, "SELECT `name` FROM `states` WHERE  `state_id` = '$state'"); 
         //$lga_name = $myName->showName($conn, "SELECT  `local_name` FROM `locals` WHERE `local_id`= '$lga'"); 
         
         
            $driver_id = 	strtr(base64_encode($id), '+/=', '-_,');
         
         
          $statusCSS = "";
$statusParam = "";
if($status == 1)
{
 $statusCSS = "badge badge-success m-b-5";
$statusParam = "Active";
}			
else  if($status == 0)
{
 $statusCSS = "badge badge-danger m-b-5";
$statusParam = "Pending";
}
  
          
}
 
	 	 	
				 
			 
					}
		   
	 
?>