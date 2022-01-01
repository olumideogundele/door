 <?php
 
 include("restricted/config/DB_config.php");
$emailing = "";
 
 if(isset($_POST['negotiate']))
 {
 
 if(isset($_SESSION['email']))
 {
$emailing  = $_SESSION['email'];
$owner  = $_SESSION['owner'];
 }
 
     $search = $_SESSION['search'];
     $search_value =   base64_decode(strtr($_GET['search'], '-_,', '+/='));
     
     $offer = $_POST['offer'];
     
     
     
     $truck_id = $_SESSION['truck_id'];
     
$percentage = $myName->showName($conn, "SELECT  `percentage` FROM `negotiation_criterai` WHERE `registeredby` = '$owner' AND `status` = '1' AND `truck` = '$truck_id'");     
     
     
     
$estimated = $myName->showName($conn, "SELECT  `amount` FROM `search_result` WHERE `code` = '$search_value'");  

     
     
     
  $query =  "UPDATE  `search_result`  SET `registeredby` = '$emailing' WHERE `code` = '$search_value'";
 
  $extract_distance = mysqli_query($conn, $query) or die(mysqli_error($conn));		
    
     
    
     
     
     $realAmount1 = ($estimated/100) * $percentage;
     
     
     $realAmount = $estimated - $realAmount1;
     
     
 
    $count_negotiation = $myName->showName($conn, "SELECT `count` FROM `negotiation_count` WHERE `code` = '$search_value' AND `registeredby` = '$emailing'");  
     
     
    $number_max = $myName->showName($conn, "SELECT  `number_max` FROM `maximum_negotiation` WHERE `status` =  1");  
     
     if($count_negotiation >=  $number_max)
     {
          echo '<div class="btn btn-warning btn-lg">Maximum Negotiation of '.$number_max .' Reached. Thank You. </a></div>'; 
         
         
         
     }
     else
     {
     
     if(empty($count_negotiation) or $count_negotiation == 0)
     {
         
         
         
         $sql = 	 "INSERT INTO `negotiation_count`(`code`, `count`, `status`, `created_date`, `registeredby`) VALUES
('$search_value', '1', '1', '$datetime', '$emailing')";
 
 $process = mysqli_query($conn, $sql) or die(mysqli_error($conn));
 
         $new_count_negotiation = $count_negotiation + 1;
         
         

         $remainingcount = $number_max - $new_count_negotiation;
         
         if($offer >= $realAmount)
         {
             
             echo '<div class="btn btn-success btn-lg">Your Offer of '.number_format($offer, 2).' is accepted. Please wait.</a></div>'; 
             
            //  echo '<meta http-equiv="Refresh" content="5; url= payment-proceed"> ';
             
             $sql = "INSERT INTO `negotiation_table`(`code`, `count`, `amount`, `status`, `created_date`, `registeredby`) VALUES
('$search_value', '$new_count_negotiation', '$offer','1', '$datetime', '$emailing')";
 
 $process = mysqli_query($conn, $sql) or die(mysqli_error($conn));
         
       
              if($process)
             {
                 
               
             
            $query =  "UPDATE  `search_result`  SET `status` = '2'   WHERE `code` = '$search_value'";
                  $extract_distance = mysqli_query($conn, $query) or die(mysqli_error($conn));	
                 
                 
                 
                 
$query1 =  "SELECT  `id`, `code`, `loading`, `destination`, `pick_up_date`, `product`, `truck_type`, `truck_capacity`, `created_date`, `registeredby`, `distance`, `truck_id` FROM `search_result`   WHERE `code` = '$value'	ORDER BY `id` DESC";
 
  
  $extract_distance1 = mysqli_query($conn, $query1) or die(mysqli_error($conn));
		$count1 = mysqli_num_rows($extract_distance1);
    if ($count1 > 0)
		  {
 	 while ($row_distance1=mysqli_fetch_row($extract_distance1))
    {
  						  	$id =$row_distance1[0];
  						  	$id123 =$row_distance1[0];
						   	$code =$row_distance1[1];
					  		$loading =$row_distance1[2];
					  		$destination =$row_distance1[3];
						   	$pick_up_date =$row_distance1[4];
					  		$product =$row_distance1[5];
					  	    $truck_type =$row_distance1[6];
                            $truck_capacity =$row_distance1[7];
                            $created_date =$row_distance1[8];
                            $registeredby =$row_distance1[9];
                            $distance =$row_distance1[10];
                            $truck_id =$row_distance1[11];
         
         
          $truck_owner = $myName->showName($conn, "SELECT  `account_number` FROM `truck` WHERE `id` =  '$truck_id'");  
          $truck_plate_number = $myName->showName($conn, "SELECT  `truck_plate_number` FROM `truck` WHERE `id` =  '$truck_id'");  
          $truck_owner_name = $myName->showName($conn, "SELECT  `name` FROM `user_unit` WHERE `account_number` =  '$truck_owner'");  
          $truck_owner_phone = $myName->showName($conn, "SELECT  `phone` FROM `user_unit` WHERE `account_number` =  '$truck_owner'");  
          $truck_owner_email = $myName->showName($conn, "SELECT  `email` FROM `user_unit` WHERE `account_number` =  '$truck_owner'");  
         
         
         
         
          $query =  "UPDATE  `search_result`  SET `truck_owner` = '$truck_owner'   WHERE `code` = '$search_value'";
                  $extract_distance = mysqli_query($conn, $query) or die(mysqli_error($conn));	
         
         
         		  
$message = "Hi ".$truck_owner_name.",
Truck Booking Request!
Order ID:".$code.".
Truck:".$truck_plate_number."
Pickupdate:".$pick_up_date."
Pick Up:".$loading."
Destination:".$destination."
Product Type:".$product."
Offer Amount:".$offer."
Please login to accecpt/reject
Thank You.";
 $Sending = new SendingSMS(); 
  							 
						$Sending->smsAPI($truck_owner_phone,"Loadme",$message);
         
         
         
         
         
	$sendEmail =  '<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
<table width="538">
  <tr>
    <th colspan="2">Truck Booking Request! </th>
  </tr> 
  <tr>
    <th colspan="2">Hi '.$truck_owner_name.' </th>
  </tr>
  <tr>
    <td width="223" height="18">Order ID</td>
    <td width="303">'.$code.'</td>
  </tr>
  <tr>
    <td>Amount</td>
    <td>'.number_format($offer, 2).'</td>
  </tr>
  <tr>
    <td>Truck Detail Number</td>
    <td>'.$truck_plate_number.'</td>
  </tr>
  <tr>
    <td>Loading Location </td>
    <td>'.$loading.' </td>
  </tr>
  <tr>
    <td>Destination</td>
    <td>'.$destination.'; </td>
  </tr>
  <tr>
    <td>Product </td>
    <td> '.$product.'</td>
  </tr>
  <tr>
    <td>Pick Up Date </td>
    <td> '.$pick_up_date.'</td>
  </tr>
   
</table>
';
	$newEmail= "info@loadme.services";
	
	
	 					$headers = "From: " .($newEmail) . "\r\n";
                        $headers .= "Reply-To: ".($newEmail) . "\r\n";
                        $headers .= "Return-Path: ".($newEmail) . "\r\n";;
                        $headers .= "MIME-Version: 1.0\r\n";
                        $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
                        $headers .= "X-Priority: 3\r\n";
                        $headers .= "X-Mailer: PHP". phpversion() ."\r\n";
  $emailSend = mail($truck_owner_email,"Truck Order Request for: ".$truck_plate_number,$sendEmail,$headers);
         
         
         
         
         
     }
    }
                 
                 
                 
                 
             echo '<div class="btn btn-success btn-lg">Your Offer of &#8358; '.number_format($offer, 2).' is accepted.<br>
 The truck owner has been notified. Please wait.</a></div>'; 
         //full-trip-information
                 
                 
                   $search_value =  	strtr(base64_encode($search_value),'-_,', '+/=');
           echo '<meta http-equiv="Refresh" content="10; url= full-trip-information?search='.$search_value.'"> ';
   
             
                 
             }
             else
             {
                 
                 echo '<div class="btn btn-warning btn-lg">Error Occured. Please try again.</a></div>'; 
             }
           
             
             
             
             
             
             
         
         
         
         }
         else{
             
                echo '<div class="btn btn-warning btn-lg">Your Offer of '.$offer.' is too low. Please try again.</a></div>'; 
             
             //echo '<div class="btn btn-warning btn-lg">Your Offer of '.$offer.' is too low. You have '.$remainingcount .' more offers. Please try again.</a></div>'; 
             
             $sql = "INSERT INTO `negotiation_table`(`code`, `count`, `amount`, `status`, `created_date`, `registeredby`) VALUES
('$search_value', '$new_count_negotiation', '$offer','0', '$datetime', '$emailing')";
 
 $process = mysqli_query($conn, $sql) or die(mysqli_error($conn));
         
         }
         
         
     }
     else
     {
         
         $count_negotiation = $count_negotiation + 1;
      $query =  "UPDATE  `negotiation_count`  SET `count` = '$count_negotiation' WHERE `code` = '$search_value' AND `registeredby` = '$emailing'";
 
  $extract_distance = mysqli_query($conn, $query) or die(mysqli_error($conn));	
         
    
 
         $new_count_negotiation = $count_negotiation + 1;
         
$remainingcount = $number_max - $new_count_negotiation;
         
         
         if($offer >= $realAmount)
         {
               $sql = "INSERT INTO `negotiation_table`(`code`, `count`, `amount`, `status`, `created_date`, `registeredby`) VALUES
('$search_value', '$new_count_negotiation', '$offer','1', '$datetime', '$emailing')";
 
 $process = mysqli_query($conn, $sql) or die(mysqli_error($conn));
             
             if($process)
             {
                 
               
             
            $query =  "UPDATE  `search_result`  SET `status` = '2'   WHERE `code` = '$search_value'";
                  $extract_distance = mysqli_query($conn, $query) or die(mysqli_error($conn));	
                 
                 
                 
                 
$query1 =  "SELECT  `id`, `code`, `loading`, `destination`, `pick_up_date`, `product`, `truck_type`, `truck_capacity`, `created_date`, `registeredby`, `distance`, `truck_id` FROM `search_result`   WHERE `code` = '$value'	ORDER BY `id` DESC";
 
  
  $extract_distance1 = mysqli_query($conn, $query1) or die(mysqli_error($conn));
		$count1 = mysqli_num_rows($extract_distance1);
    if ($count1 > 0)
		  {
 	 while ($row_distance1=mysqli_fetch_row($extract_distance1))
    {
  						  	$id =$row_distance1[0];
  						  	$id123 =$row_distance1[0];
						   	$code =$row_distance1[1];
					  		$loading =$row_distance1[2];
					  		$destination =$row_distance1[3];
						   	$pick_up_date =$row_distance1[4];
					  		$product =$row_distance1[5];
					  	    $truck_type =$row_distance1[6];
                            $truck_capacity =$row_distance1[7];
                            $created_date =$row_distance1[8];
                            $registeredby =$row_distance1[9];
                            $distance =$row_distance1[10];
                            $truck_id =$row_distance1[11];
         
         
          $truck_owner = $myName->showName($conn, "SELECT  `account_number` FROM `truck` WHERE `id` =  '$truck_id'");  
          $truck_plate_number = $myName->showName($conn, "SELECT  `truck_plate_number` FROM `truck` WHERE `id` =  '$truck_id'");  
          $truck_owner_name = $myName->showName($conn, "SELECT  `name` FROM `user_unit` WHERE `account_number` =  '$truck_owner'");  
          $truck_owner_phone = $myName->showName($conn, "SELECT  `phone` FROM `user_unit` WHERE `account_number` =  '$truck_owner'");  
          $truck_owner_email = $myName->showName($conn, "SELECT  `email` FROM `user_unit` WHERE `account_number` =  '$truck_owner'");  
          
         
         
         
         $customer_name = $myName->showName($conn, "SELECT  `name` FROM `user_unit` WHERE `account_number` =  '$emailing'");  
          $customer_email = $myName->showName($conn, "SELECT  `email` FROM `user_unit` WHERE `account_number` =  '$emailing'");  
          $customer_phone = $myName->showName($conn, "SELECT  `phone` FROM `user_unit` WHERE `account_number` =  '$emailing'");  
         
         
         
         		  
$message = "Hi ".$truck_owner_name.",
Truck Booking Request!
Order ID:".$code.".
Truck:".$truck_plate_number."
Pickupdate:".$pick_up_date."
Pick Up:".$loading."
Destination:".$destination."
Product Type:".$product."
Offer Amount:".$offer."
Please login to accecpt/reject
Thank You.";
 $Sending = new SendingSMS(); 
  							 
						$Sending->smsAPI($truck_owner_phone,"Loadme",$message);
         
         
         
         
         
         
         
	$sendEmail =  '<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
<table width="538">
  <tr>
    <th colspan="2">Truck Booking Request! </th>
  </tr> 
  <tr>
    <th colspan="2">Hi '.$truck_owner_name.' </th>
  </tr>
  <tr>
    <td width="223" height="18">Order ID</td>
    <td width="303">'.$code.'</td>
  </tr>
  <tr>
    <td>Amount</td>
    <td>'.number_format($offer, 2).'</td>
  </tr>
  <tr>
    <td>Truck Detail Number</td>
    <td>'.$truck_plate_number.'</td>
  </tr>
  <tr>
    <td>Loading Location </td>
    <td>'.$loading.' </td>
  </tr>
  <tr>
    <td>Destination</td>
    <td>'.$destination.'; </td>
  </tr>
  <tr>
    <td>Product </td>
    <td> '.$product.'</td>
  </tr>
  <tr>
    <td>Pick Up Date </td>
    <td> '.$pick_up_date.'</td>
  </tr>
  
</table>
';
	$newEmail= "info@loadme.services";
	
	
	 					$headers = "From: " .($newEmail) . "\r\n";
                        $headers .= "Reply-To: ".($newEmail) . "\r\n";
                        $headers .= "Return-Path: ".($newEmail) . "\r\n";;
                        $headers .= "MIME-Version: 1.0\r\n";
                        $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
                        $headers .= "X-Priority: 3\r\n";
                        $headers .= "X-Mailer: PHP". phpversion() ."\r\n";
  $emailSend = mail($truck_owner_email,"Truck Order Request for: ".$truck_plate_number,$sendEmail,$headers);
         
         
         
         
     }
    }
                 
                 
                 
                 
             echo '<div class="btn btn-success btn-lg">Your Offer of &#8358; '.number_format($offer, 2).' is accepted.<br>
 The truck owner has been notified. Please wait.</a></div>'; 
         //full-trip-information
                 
                 
                   $search_value =  	strtr(base64_encode($search_value),'-_,', '+/=');
           echo '<meta http-equiv="Refresh" content="10; url= full-trip-information?search='.$search_value.'"> ';
   
             
                 
             }
             else
             {
                 
                 echo '<div class="btn btn-warning btn-lg">Error Occured. Please try again.</a></div>'; 
             }
           
           
         
         }
         else{
             
          //    echo '<div class="btn btn-warning btn-lg">Your Offer of '.$offer.' is too low. You have '.$remainingcount .' more offers. Please try again.</a></div>'; 
             
               echo '<div class="btn btn-warning btn-lg">Your Offer of '.$offer.' is too low. Please try again.</a></div>'; 
             
             $sql = "INSERT INTO `negotiation_table`(`code`, `count`, `amount`, `status`, `created_date`, `registeredby`) VALUES
('$search_value', '$new_count_negotiation', '$offer','0', '$datetime', '$emailing')";
 
 $process = mysqli_query($conn, $sql) or die(mysqli_error($conn));
         
         }
         
         
         
         
         
         
         
         
         
     }
     
     
     
     
     }
     
     
     
     
     
     
      
 		 
 }
 
 
$conn->close();
	
 
?>

 