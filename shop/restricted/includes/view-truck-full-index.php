 
<?php
include ("restricted/config/DB_config.php"); 
 $myName = new Name();
 
$query = "";
$negotiation_status = "No";
 
$right = "";
if(isset($_GET['truck']))
{
	
	$value = $_GET['truck'];
	$value123 = $_GET['truck'];
	$_SESSION['truck'] = $_GET['truck'];
	$_SESSION['search'] = $_GET['search'];
     $value =   base64_decode(strtr($_GET['truck'], '-_,', '+/='));
     $code_search =   base64_decode(strtr($_GET['search'], '-_,', '+/='));

  
$query =  "SELECT `id`, `account_number`, `truck_brand`, `year`, `truck_plate_number`, `state`, `total_capacity`, `truck_type`, `calibration_chart`, `road_worthiness_cert`, `commercial_licence`, `git_insurance`, `front_view_1`, `front_view_2`, `side_view_1`, `side_view_2`, `status`, `created_date`, `registeredby`, `driver`, `ccaution`, `extinguisher`, `jacket`, `extratyre`, `hat`, `boot`, `location` FROM `truck`  WHERE `id` = '$value'	ORDER BY `id` DESC";
 
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
					   		$_SESSION['owner'] =$row_distance[18];
					   		$driver =$row_distance[19];
         
         
         
         
       //  , `ccaution`, `extinguisher`, `jacket`, `extratyre`, `hat`, `boot`
         
         
         $ccaution =$row_distance[20];
					   		$extinguisher =$row_distance[21];
					   		$jacket =$row_distance[22];
					   		$extratyre =$row_distance[23];
					   		$hat =$row_distance[24];
					   		$boot =$row_distance[25];
					   		$location =$row_distance[26];
         
         $_SESSION['truck_id'] = $id123;
         
         
          $sql = 	mysqli_query($conn,"UPDATE `search_result` SET `truck_id` = '$id123', `truck_owner` = '$registeredby' WHERE `code` ='$code_search'") or die("ERROR OCCURED: ".mysqli_error($conn)); 
         
          $total_capacity = $myName->showName($conn, "SELECT  `capacity` FROM `truck_capacity` WHERE `id` = '$total_capacity'"); 
           
         $state_name = $myName->showName($conn, "SELECT  `name` FROM `states` WHERE `state_id` = '$state'"); 
          $account_name = $myName->showName($conn, "SELECT  `name` FROM  `user_unit` WHERE  `account_number` = '$account_number'");
          $owner = $myName->showName($conn, "SELECT  `name` FROM  `user_unit` WHERE  `account_number` = '$registeredby'");
          $driver_lname = $myName->showName($conn, "SELECT  `fname` FROM  `driver` WHERE  `account_number` = '$driver'");
          $driver_fname = $myName->showName($conn, "SELECT  `lname` FROM  `driver` WHERE  `account_number` = '$driver'");
         
         $driver_name = $driver_lname ." ".$driver_fname;
          $driver_phone = $myName->showName($conn, "SELECT  `phone` FROM  `driver` WHERE  `account_number` = '$driver'");
          $driver_passport = $myName->showName($conn, "SELECT  `passport` FROM  `driver` WHERE  `account_number` = '$driver'");
          $truck_type = $myName->showName($conn, "SELECT  `name` FROM  `truck_type` WHERE  `id` = '$truck_type'");
            $truck_id = 	strtr(base64_encode($id), '+/=', '-_,');
         
 $negotiate = $myName->showName($conn, "SELECT   `negotiate` FROM `negotiation_criterai` WHERE   `registeredby` = '$registeredby' and `truck` = '$id123'");
          
         
         if(!empty($negotiate) and $negotiate == "Yes")
         {
             
             $negotiation_status = "Yes";
         }
         
         
        
          
}
 
						  
		}		 	
				 
			 
					}
		   
	 
?>