 
<?php
include ("config/DB_config.php"); 
 $myName = new Name();
 if(isset($_SESSION['email']))
 {
 $emailing = $_SESSION['email'];
 }
 
$query = "";

if(isset($_GET['id']))
{
 
	
	$id = $_GET['id'];
	
	
 $query =  "SELECT `id`, `wath`, `community`, `state`, `lga`, `claim_type`, `name_of_claimant`, `line_no`, `sp1`, `sp2`, `km`, `crop`, `crop_age`, `no_of_damages`, `rate`, `amount`, `book_no`, `dav_no`, `status`, `created_date`, `registeredby`, `unique_id` FROM `data_entry` WHERE `id` = '$id'";	
	
	
	//echo $query;
 $extract_distance = mysqli_query($conn, $query) or die(mysqli_error($conn));
		$count = mysqli_num_rows($extract_distance);
    if ($count > 0)
		  {
 	 while ($row_distance=mysqli_fetch_row($extract_distance))
    {
  						  	$id =$row_distance[0];
		 					$wath =$row_distance[1];
		 					$community =$row_distance[2];
						   	$state =$row_distance[3];
		 					$lga =$row_distance[4];
						 	$claim_type =$row_distance[5];
					   		$name_of_claimant =$row_distance[6];
		 					$line_no =$row_distance[7];
						 	$sp1 =$row_distance[8];
					   		$sp2 =$row_distance[9];
		   					$km =$row_distance[10];
						 	$crop =$row_distance[11];
					   		$crop_age =$row_distance[12];
		 					$no_of_damages =$row_distance[13];
					   		$rate =$row_distance[14];
		   					$amount =$row_distance[15];
						 	$book_no =$row_distance[16];
					   		$dav_no =$row_distance[17];
		 					$status =$row_distance[18];
					   		$created_date =$row_distance[19];
		   					$registeredby =$row_distance[20];
		 $unique_id =$row_distance[21];
						  
		
 	
 
}
 
						  
				 }	
				 
			 
					}
		   
	 
?>