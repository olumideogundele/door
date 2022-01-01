 <?php
 
 include("config/DB_config.php");
$emailing = "";
 
 if(isset($_POST['validate']))
 {
 
 if(isset($_SESSION['email']))
 {
$emailing  = $_SESSION['email'];
 }
  $randing = rand(2442,76723).rand(2442,76723).rand(23,7674).rand(234,889);
     
     
$score    = $_POST['score'];
$truck    = $_POST['truck'];
$truck    =  base64_decode(strtr($_POST['truck'], '-___________,', '+++++++++++/='));;
$result    = $_POST['result'];
$interior    = $_POST['interior'];
$exterior    = $_POST['exterior'];
$cleanliness    = $_POST['cleanliness'];
$functionality    = $_POST['functionality'];
$vehicle_number    = $_POST['vehicle_number'];
$mileage    = $_POST['mileage'];
$year    = $_POST['year'];
$transmission    = $_POST['transmission'];
$make    = $_POST['make'];
$model    = $_POST['model'];
$exterior_colour    = $_POST['exterior_colour'];
$interior_colour    = $_POST['interior_colour'];
$chasis_colour    = $_POST['chasis_colour'];
$engine_number    = $_POST['engine_number'];
$interior_trim    = $_POST['interior_trim'];
$vehicle_licence_expiry    = $_POST['vehicle_licence_expiry'];
$road_worthiness    = $_POST['road_worthiness'];
$road_worthiness_expiry    = $_POST['road_worthiness_expiry'];
$insurance    = $_POST['insurance'];
$insurance_expiry    = $_POST['insurance_expiry'];
$drivers_licence    = $_POST['drivers_licence'];
$drivers_licence_expiry    = $_POST['drivers_licence_expiry'];
$radio_functional    = $_POST['radio_functional'];
$horn_functional    = $_POST['horn_functional'];
$seat_covering_integrity    = $_POST['seat_covering_integrity'];
$window_control_functional    = $_POST['window_control_functional'];
$door_locks_functional    = $_POST['door_locks_functional'];
$door_handles_functional    = $_POST['door_handles_functional'];
$brv_shocks_condition    = $_POST['brv_shocks_condition'];
$parking_brakes_engages    = $_POST['parking_brakes_engages'];
$no_grinding_noise    = $_POST['no_grinding_noise'];
$spring_or_balloon    = $_POST['spring_or_balloon'];
$tyre_thread    = $_POST['tyre_thread'];
$tyre_condition    = $_POST['tyre_condition'];
$vehicle_body    = $_POST['vehicle_body'];
$free_of_scratches    = $_POST['free_of_scratches'];
$free_of_dents    = $_POST['free_of_dents'];
$no_windshield_window_cracks    = $_POST['no_windshield_window_cracks'];
$wipper_engine_wipper    = $_POST['wipper_engine_wipper'];
$jack_and_accessories    = $_POST['jack_and_accessories'];
$fire_extinguisher    = $_POST['fire_extinguisher'];
$spare_tyre    = $_POST['spare_tyre'];
$hazard_warning_triangle    = $_POST['hazard_warning_triangle'];
$headlights_working    = $_POST['headlights_working'];
$brakelights_working    = $_POST['brakelights_working'];
$indicators_working    = $_POST['indicators_working']; 
 
 
	 $score =$interior + $exterior + $cleanliness + $functionality;
     
     
     if($score >= 11)
     {
          $result  = "A";
       
     }else
     {
         
           $result  = "B";
     }
  
	 
  
  $extract_user = mysqli_query($conn, "SELECT * FROM `inspection_report`  WHERE `truck_id` = '$truck' OR `code` = '$randing'") or die(mysqli_error($conn));
		$count = mysqli_num_rows($extract_user);
		 if ($count > 0) {
	 	  
			 
			  echo '<div class="btn btn-danger btn-lg">Truck Inspection Information Already In The Database.<br /> Please Check And Try Again Later.</a></div>'; 	
			 
			 
		 
 
		 }else
		 {
 
 
 	 
$sql = 	 "INSERT INTO `inspection_report`(`code`, `truck_id`, `inspector`, `score`, `result`, `interior`, `exterior`, `cleanliness`, `functionality`, `vehicle_number`, `mileage`, `year`, `transmission`, `make`, `model`, `exterior_colour`, `interior_colour`, `chasis_colour`, `engine_number`, `interior_trim`, `vehicle_licence_expiry`, `road_worthiness`, `road_worthiness_expiry`, `insurance`, `insurance_expiry`, `drivers_licence`, `drivers_licence_expiry`, `radio_functional`, `horn_functional`, `seat_covering_integrity`, `window_control_functional`, `door_locks_functional`, `door_handles_functional`, `brv_shocks_condition`, `parking_brakes_engages`, `no_grinding_noise`, `spring_or_balloon`, `tyre_thread`, `tyre_condition`, `vehicle_body`, `free_of_scratches`, `free_of_dents`, `no_windshield_window_cracks`, `wipper_engine_wipper`, `jack_and_accessories`, `fire_extinguisher`, `spare_tyre`, `hazard_warning_triangle`, `headlights_working`, `brakelights_working`, `indicators_working`, `status`, `created_date`, `registeredby` ) VALUES
(
'$randing',
'$truck',
'$emailing', 
'$score',
'$result',
'$interior',
'$exterior',
'$cleanliness',
'$functionality',
'$vehicle_number',
'$mileage',
'$year',
'$transmission',
'$make',
'$model',
'$exterior_colour',
'$interior_colour',
'$chasis_colour',
'$engine_number',
'$interior_trim',
'$vehicle_licence_expiry',
'$road_worthiness',
'$road_worthiness_expiry',
'$insurance',
'$insurance_expiry',
'$drivers_licence',
'$drivers_licence_expiry',
'$radio_functional',
'$horn_functional',
'$seat_covering_integrity',
'$window_control_functional',
'$door_locks_functional',
'$door_handles_functional',
'$brv_shocks_condition',
'$parking_brakes_engages',
'$no_grinding_noise',
'$spring_or_balloon',
'$tyre_thread',
'$tyre_condition',
'$vehicle_body',
'$free_of_scratches',
'$free_of_dents',
'$no_windshield_window_cracks',
'$wipper_engine_wipper',
'$jack_and_accessories',
'$fire_extinguisher',
'$spare_tyre',
'$hazard_warning_triangle',
'$headlights_working',
'$brakelights_working',
'$indicators_working',
'0',
'$datetime', 
'$emailing')";
             
 
 $process = mysqli_query($conn, $sql) or die(mysqli_error($conn));
 
	if ($process) {
 
    
         
  echo '<div class="btn btn-success btn-lg">Information Submitted Successfully.</a></div><br />'; 	
 
        
         $query1 =  "UPDATE `truck` SET `inspection_status` = '1', `status` = 3 WHERE `id` = '$truck'";	
 $extract_distance1 = mysqli_query($conn, $query1) or die(mysqli_error($conn));
        
        
        
        
        
        
        
        
        
        /* 
		  $value = "";
		 
		  $query1 =  "SELECT  `name`, `phone`, `email`, `account_number` FROM `stake_holder` WHERE  `status` = 1";	
 $extract_distance1 = mysqli_query($conn, $query1) or die(mysqli_error($conn));
		$count1 = mysqli_num_rows($extract_distance1);
    if ($count1 > 0)
		  {
 	 while ($row_distance1=mysqli_fetch_row($extract_distance1))
    {
  						  	$name =$row_distance1[0];
  						  	$phone =$row_distance1[1];
  						  	$email =$row_distance1[2];
  						  	$account_number =$row_distance1[3];
 
	//$link = 'https://'.$_SERVER['HTTP_HOST'].'/restricted/view-truck?id='.$truck_id;	  
	   $account_name = $myName->showName($conn, "SELECT  `name` FROM  `user_unit` WHERE  `account_number` = '$emailing'");
   $message = "Truck Upload. 
Truck Owner:".$account_name."
Plate :".$truck_plate_number."
Brand :".$truck_brand."
Date:".$datetime."
Click:".$link;  
		 
		 
 

  $senderID = "LoadMe";
  
 
   $Sending = new SendingSMS(); 
  							 
							$Sending->smsAPI($phone,"LoadMe",$message);
		
		
		
		
		
			 
			  $message = ' 

<div class="email-background" style="background: #eee;padding: 10px;">
   
  <div class="email-container" style="max-width: 500px;background: white;margin: 0 auto;overflow: hidden;border-radius: 5px;text-align: center;font-family: sans-serif;"> <img src="http://'.$_SERVER['HTTP_HOST'].'/restricted/'.$inst_logo.'"  alt="'.$inst_logo.'"  width="50px" height="50px" style="max-width: 30%;">
	   
	    <h3 style="5px;font-size: 2.0em;">Hi '.$name.'...,   </h3>
    <span style="padding: 20px;font-size: 1.3em;">Truck Uploaded need approval. </span><br>
	   
 
	 <span style="padding: 20px;font-size: 1.5em;"> Truck Brand: <strong> '.$truck_brand.'</strong> </span>
	 <span style="padding: 20px;font-size: 1.5em;"> Truck Plate Number: <strong> '.$truck_plate_number.'</strong> </span>
	 <span style="padding: 20px;font-size: 1.5em;"> Truck Owner: <strong> '.$account_name.'</strong> </span>
	 
   
    <span> 
	 <p style="padding: 20px;font-weight: 300;font-size: 1.2em;">Please login to the portal. </p>
    <div class="cta" style="padding: 5px;background: #26466D;margin: 0 auto;">
      <p style="padding: 20px;font-weight: 300;font-size: 1.2em;"><a href="'.$link.'" style="text-decoration: none;color: white;">View Details Now</a></p>
 
   </span>
   
    <p style="padding: 20px;font-weight: 300;font-size: 1.2em;">Please login to the portal. </p>
    <div class="cta" style="padding: 5px;background: #26466D;margin: 0 auto;">
      <p style="padding: 20px;font-weight: 300;font-size: 1.2em;"><a href="'.$link.'" style="text-decoration: none;color: white;">Visit Portal Now</a></p>
    </div>


  </div>
  <div class="footer-links" style="max-width: 500px;font-family: sans-serif;margin: 0 auto;overflow: hidden;border-radius: 5px;text-align: center;padding: 20px;">
    <a href="/xx" style="color: #26466D;">about</a> | <a href="/xx" style="color: #26466D;">unsubsribe</a> | <a href="/xx" style="color: #26466D;">t&amp;c s</a>
  </div>
</div>
';	
		 
		
 


$to      = $email;             // give to email address 
 $subject  = "Truck Approval";  //change subject of email 
$newEmail    ="info@loadme.services";                           // give from email address 

// mandatory headers for email message, change if you need something different in your setting. 
   $newEmail= "info@loadme.services";
	                    $headers = "From: " .($newEmail) . "\r\n";
                        $headers .= "Reply-To: ".($newEmail) . "\r\n";
                        $headers .= "Return-Path: ".($newEmail) . "\r\n";;
                        $headers .= "MIME-Version: 1.0\r\n";
                        $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
                        $headers .= "X-Priority: 3\r\n";
                        $headers .= "X-Mailer: PHP". phpversion() ."\r\n";         
         mail($email, $subject, $message, $headers);		

		$realmessage =  mysqli_real_escape_string($conn,$message);
		 
$sqlnot ="INSERT INTO `notification`(`code`,`title`,`message`, `registeredby`, `sent_to`, `status`, `read_status`, `created_at`) VALUES
('$truck_id','$subject','$realmessage','$emailing', '$account_number', '1', '1','$datetime')";
     
				
		 	
 mysqli_query($conn, $sqlnot) or die(mysqli_error($conn));		
  
 
         
         
         
         
         
         
         
         
     }
    }
       */ 
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
 
} else {
  // echo "Error: " . $sql . "<br>" . $conn->error;
    $error="Not Inserted,Some Problem occured.";
echo'<a href="#"class="btn btn-danger btn-lg">Information Not Submitted Successfully.  <br />Please try again later.</a><br />';  

}

 
		 
 
		
 
 }
 		 
 }
else if(isset($_POST['update']))
 {
    

    
     include("config/DB_config.php");
    
 if(isset($_SESSION['email']))
 {
$emailing  = $_SESSION['email'];
 }

  //Update Code
 
		 
 
		
 
 }
    
    
    
 

 
$conn->close();
	
 
?>

 