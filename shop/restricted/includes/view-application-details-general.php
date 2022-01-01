 
<?php
//include ("config/DB_config.php"); 
// $myName = new Name();
 if(isset($_SESSION['email']))
 {
 $emailing = $_SESSION['email'];
 }
  $inst_name = "";
$inst_slogan = "";
$query = "";
 
 $query =  "SELECT  `id`, `name`, `phone`, `email`, `slogan`, `address`, `status`, `created_date`, `registeredby`, `logo` FROM `application` WHERE `status` = 1";	
 
 
 $extract_distance = mysqli_query($conn, $query) or die(mysqli_error($conn));
		$count = mysqli_num_rows($extract_distance);
    if ($count > 0)
		  {
 	 while ($row_distance=mysqli_fetch_row($extract_distance))
    {
  						  //$id =$row_distance[0];
						   $inst_name =$row_distance[1];
					  $inst_phone =$row_distance[2];
		
		 				$inst_email =$row_distance[3];
						   $inst_slogan =$row_distance[4];
					  $inst_address =$row_distance[5];
					  $inst_status =$row_distance[6];
					    $inst_created_date =$row_distance[7];
		  $inst_logo =$row_distance[9];
         
         
         
         $_SESSION['logo'] =  $inst_logo ;
						 
					  
 
 
 




 
											 
											     
									 
	 
}
 
						  
				 	
				 
			 
					}
		   
	 
?>