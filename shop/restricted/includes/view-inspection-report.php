 
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
if(isset($_GET['id']))
{
	
	$value = $_GET['id'];
     $value =   base64_decode(strtr($_GET['id'], '-_,', '+/='));

 if($super == '1' or $super == 1)
 {
$query =  "SELECT  `id`, `code`, `truck_id`, `inspector`, `score`, `result`, `interior`, `exterior`, `cleanliness`, `functionality`, `vehicle_number`, `mileage`, `year`, `transmission`, `make`, `model`, `exterior_colour`, `interior_colour`, `chasis_colour`, `engine_number`, `interior_trim`, `vehicle_licence_expiry`, `road_worthiness`, `road_worthiness_expiry`, `insurance`, `insurance_expiry`, `drivers_licence`, `drivers_licence_expiry`, `radio_functional`, `horn_functional`, `seat_covering_integrity`, `window_control_functional`, `door_locks_functional`, `door_handles_functional`, `brv_shocks_condition`, `parking_brakes_engages`, `no_grinding_noise`, `spring_or_balloon`, `tyre_thread`, `tyre_condition`, `vehicle_body`, `free_of_scratches`, `free_of_dents`, `no_windshield_window_cracks`, `wipper_engine_wipper`, `jack_and_accessories`, `fire_extinguisher`, `spare_tyre`, `hazard_warning_triangle`, `headlights_working`, `brakelights_working`, `indicators_working`, `status`, `created_date`, `registeredby`, `report` FROM `inspection_report` WHERE  `truck_id` = '$value'	ORDER BY `id` DESC";
}
else
{
$query =  "SELECT  `id`, `code`, `truck_id`, `inspector`, `score`, `result`, `interior`, `exterior`, `cleanliness`, `functionality`, `vehicle_number`, `mileage`, `year`, `transmission`, `make`, `model`, `exterior_colour`, `interior_colour`, `chasis_colour`, `engine_number`, `interior_trim`, `vehicle_licence_expiry`, `road_worthiness`, `road_worthiness_expiry`, `insurance`, `insurance_expiry`, `drivers_licence`, `drivers_licence_expiry`, `radio_functional`, `horn_functional`, `seat_covering_integrity`, `window_control_functional`, `door_locks_functional`, `door_handles_functional`, `brv_shocks_condition`, `parking_brakes_engages`, `no_grinding_noise`, `spring_or_balloon`, `tyre_thread`, `tyre_condition`, `vehicle_body`, `free_of_scratches`, `free_of_dents`, `no_windshield_window_cracks`, `wipper_engine_wipper`, `jack_and_accessories`, `fire_extinguisher`, `spare_tyre`, `hazard_warning_triangle`, `headlights_working`, `brakelights_working`, `indicators_working`, `status`, `created_date`, `registeredby`, `report` FROM `inspection_report` WHERE `truck_id` = '$value' ORDER BY `id` DESC";
 }
  $extract_distance = mysqli_query($conn, $query) or die(mysqli_error($conn));
		$count = mysqli_num_rows($extract_distance);
    if ($count > 0)
		  {
 	 while ($row_distance=mysqli_fetch_row($extract_distance))
    {
  						  	$id =$row_distance[0];
  						  	$id123 =$row_distance[0];
						   	$code =$row_distance[1];
					  		$truck_id =$row_distance[2];
					  		$inspector =$row_distance[3];
						   	$score =$row_distance[4];
					  		$result =$row_distance[5];
					  		$interior =$row_distance[6];
						   	$exterior =$row_distance[7];
					  		$cleanliness =$row_distance[8];
					   		$functionality =$row_distance[9];
                            $vehicle_number =$row_distance[10];
                            $mileage =$row_distance[11];
                            $year =$row_distance[12];
                            $transmission =$row_distance[13];
         
                            $make =$row_distance[14];
                            $model =$row_distance[15];
                            $exterior_colour =$row_distance[16];
                            $interior_colour =$row_distance[17];
                            $chasis_colour =$row_distance[18];
                            $engine_number =$row_distance[19];
                            $interior_trim =$row_distance[20];
                            $vehicle_licence_expiry =$row_distance[21];
                            $road_worthiness =$row_distance[22];
                            $road_worthiness_expiry =$row_distance[23];
                            $insurance =$row_distance[24];
                            $insurance_expiry =$row_distance[25];
                            $drivers_licence =$row_distance[26];
                            $drivers_licence_expiry =$row_distance[27];
                            $radio_functional =$row_distance[28];
                            $horn_functional =$row_distance[29];
                            $seat_covering_integrity =$row_distance[30];
                            $window_control_functional =$row_distance[31];
                            $door_locks_functional =$row_distance[32];
                            $door_handles_functional =$row_distance[33];
                            $brv_shocks_condition =$row_distance[34];
                            $parking_brakes_engages =$row_distance[35];
                            $no_grinding_noise =$row_distance[36];
                            $spring_or_balloon =$row_distance[37];
                            $tyre_thread =$row_distance[38];
                            $tyre_condition =$row_distance[39];
                            $vehicle_body =$row_distance[40];
                            $free_of_scratches =$row_distance[41];
                            $free_of_dents =$row_distance[42];
                            $no_windshield_window_cracks =$row_distance[43];
                            $wipper_engine_wipper =$row_distance[44];
                            $jack_and_accessories =$row_distance[45];
                            $fire_extinguisher =$row_distance[46];
                            $spare_tyre =$row_distance[47];
                            $hazard_warning_triangle =$row_distance[48];
                            $headlights_working =$row_distance[49];
                            $brakelights_working =$row_distance[50];
                            $indicators_working =$row_distance[51];
                            $status =$row_distance[52];
                            $created_date =$row_distance[53];
                            $registeredby =$row_distance[54];
                            $report =$row_distance[55];
						   
          $inspector_name = $myName->showName($conn, "SELECT  `name` FROM  `user_unit` WHERE  `account_number` = '$registeredby'");
         
           $account_number = $myName->showName($conn, "SELECT  `registeredby` FROM  `truck` WHERE  `id` = '$truck_id'");
           $owner_name = $myName->showName($conn, "SELECT  `name` FROM  `user_unit` WHERE  `account_number` = '$account_number'");
           $owner_phone = $myName->showName($conn, "SELECT  `phone` FROM  `user_unit` WHERE  `account_number` = '$account_number'");
           $owner_email = $myName->showName($conn, "SELECT  `email` FROM  `user_unit` WHERE  `account_number` = '$account_number'");
       
        
         
            
         
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