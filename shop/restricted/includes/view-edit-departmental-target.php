 
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
			 
				 $value = $_GET['id'];
 $query =  "SELECT `id`, `monthly`, `year`, `account_number`, `amount`, `desc_text`,  `month`, `reff` FROM `target_department_month` WHERE `id` = '$value'";	
				  
			 }
else
{
	
	echo '<div class="alert alert-warning"> <span class="vd_alert-icon"><i class="fa fa-check-circle vd_green"></i></span><strong>ERROR</strong> Invalid Input. Please try again. </div>';
	
 
	
	
}
 $extract_distance = mysqli_query($conn, $query) or die(mysqli_error($conn));
		$count = mysqli_num_rows($extract_distance);
    if ($count > 0)
		  {
 	 while ($row_distance=mysqli_fetch_row($extract_distance))
    {
  						  $id_value =$row_distance[0];
						   $monthly_value =$row_distance[1];
		 $year_value =$row_distance[2];
					  
				  $account_number_value =$row_distance[3];
					  
					    $amount_value =$row_distance[4];
					    $desc_text_value =$row_distance[5];
					    $month_value =$row_distance[6];
		 $department = $myName->showName($conn, "SELECT `name` FROM `mda` WHERE `id` = '$account_number_value'"); 
		 $month = $myName->showName($conn, "SELECT  `name` FROM `months` WHERE `id` = '$month_value'"); 
					   
					  
 
}
 
						  
				 	
				 
			 
					}
		   
	 
?>