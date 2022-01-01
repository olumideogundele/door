 
<?php
include ("config/DB_config.php"); 
 $myName = new Name();
 if(isset($_SESSION['email']))
 {
 $emailing = $_SESSION['email'];
 }
 
$query = "";

$super = $myName->showName($conn, "SELECT  `super` FROM `user_unit` WHERE `account_number` = '$emailing'"); 
$right = "";
if(isset($_GET['truck']))
{
	
	$value = $_GET['truck'];
   // $value = 	strtr(base64_encode($value), '-___________,', '+++++++++++/=');	
     $value =   base64_decode(strtr($value, '-___________,', '+++++++++++/='));

 if($super == '1' or $super == 1)
 {
$query =  "SELECT `id`, `account_number`, `truck_brand`, `year`, `truck_plate_number`, `state`, `total_capacity`, `truck_type`, `calibration_chart`, `road_worthiness_cert`, `commercial_licence`, `git_insurance`, `front_view_1`, `front_view_2`, `side_view_1`, `side_view_2`, `status`, `created_date`, `registeredby`, `driver`, `ccaution`, `extinguisher`, `jacket`, `extratyre`, `hat`, `boot`, `inspector` FROM `truck`  WHERE `id` = '$value'	ORDER BY `id` DESC";
}
else
{
$query =  "SELECT `id`, `account_number`, `truck_brand`, `year`, `truck_plate_number`, `state`, `total_capacity`, `truck_type`, `calibration_chart`, `road_worthiness_cert`, `commercial_licence`, `git_insurance`, `front_view_1`, `front_view_2`, `side_view_1`, `side_view_2`, `status`, `created_date`, `registeredby`, `driver`, `ccaution`, `extinguisher`, `jacket`, `extratyre`, `hat`, `boot`, `inspector` FROM `truck` WHERE `registeredby` = '$emailing' AND `id` = '$value' ORDER BY `id` DESC";
 }
  $extract_distance = mysqli_query($conn, $query) or die(mysqli_error($conn));
		$count = mysqli_num_rows($extract_distance);
    if ($count > 0)
		  {
 	 while ($row_distance=mysqli_fetch_row($extract_distance))
    {
  						  	$id =$row_distance[0];
  						  	$id123 =$row_distance[0];
						   	$account_number =$row_distance[1];
					  		$truck_brand =$row_distance[2];
					  		$year =$row_distance[3];
						   	$truck_plate_number =$row_distance[4];
					  		$state =$row_distance[5];
					  	 $total_capacity =$row_distance[6];
                            $truck_type =$row_distance[7];
						   
         
         
         
         
                            $calibration_chart =$row_distance[8];
					  		$road_worthiness_cert =$row_distance[9];
					  		$commercial_licence =$row_distance[10];
						   	$git_insurance =$row_distance[11];
					  		$front_view_1 =$row_distance[12];
					  		$front_view_2 =$row_distance[13];
						   	$side_view_1 =$row_distance[14];
					 		$side_view_2 =$row_distance[15];
         
         
         
         
					   		$status =$row_distance[16];
					   		$created_date =$row_distance[17];
					   		$registeredby =$row_distance[18];
					   		$driver =$row_distance[19];
         
         
         
          
         
         $ccaution =$row_distance[20];
					   		$extinguisher =$row_distance[21];
					   		$jacket =$row_distance[22];
					   		$extratyre =$row_distance[23];
					   		$hat =$row_distance[24];
					   		$boot =$row_distance[25];
					   		$inspector =$row_distance[26];
         
         
          $total_capacity = $myName->showName($conn, "SELECT  `capacity` FROM `truck_capacity` WHERE `id` = '$total_capacity'"); 
           
         $state_name = $myName->showName($conn, "SELECT  `name` FROM `states` WHERE `state_id` = '$state'"); 
          $account_name = $myName->showName($conn, "SELECT  `name` FROM  `user_unit` WHERE  `account_number` = '$account_number'");
          $driver_name = $myName->showName($conn, "SELECT  `name` FROM  `user_unit` WHERE  `account_number` = '$driver'");
        
          $truck_type = $myName->showName($conn, "SELECT  `name` FROM  `truck_type` WHERE  `id` = '$truck_type'");
            $truck_id = 	strtr(base64_encode($id), '+/=', '-_,');
         
         
           $inspector_name = $myName->showName($conn, "SELECT  `name` FROM  `user_unit` WHERE  `account_number` = '$inspector'");
         					 	 
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
				 
			 
					}
		   
	 
?>