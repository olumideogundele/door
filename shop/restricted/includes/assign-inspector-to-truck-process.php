 <?php
							if(isset($_POST['validate']))
                            {
                                 if(isset($_POST['value']) and $_POST['value'] == 2)
                                                {
                                                    
                                                      $id =    base64_decode(strtr($_POST['truckid'], '-_,', '+/='));;   
                                                    
                                                    
        $state = $myName->showName($conn, "SELECT  `state` FROM  `truck` WHERE  `id` = '$id'");                                                   
       // $state = $myName->showName($conn, "SELECT  `state` FROM  `truck` WHERE  `id` = '$id'");                                                   
                                                    
     $truck_id = 	strtr(base64_encode($id), '+/=', '-_,');
       
 $inspector =  $_POST['inspector'];
 //$inspector = $myName->showName($conn, "SELECT `account_number` FROM `user_unit`  WHERE (`usertype` = 7 AND `state` = '$state') ORDER BY RAND() LIMIT 1;"); 
		
        
        
         
        if(!empty($inspector))
        {
            
            	$link = 'https://'.$_SERVER['HTTP_HOST'].'/restricted/view-truck?id='.$truck_id;	
            
            
            $registeredby = $myName->showName($conn, "SELECT  `registeredby` FROM  `truck` WHERE  `id` = '$id'");   
            
	   $account_name = $myName->showName($conn, "SELECT  `name` FROM  `user_unit` WHERE  `account_number` = '$registeredby'");
	   $account_phone = $myName->showName($conn, "SELECT  `phone` FROM  `user_unit` WHERE  `account_number` = '$registeredby'");
	   $account_email = $myName->showName($conn, "SELECT  `email` FROM  `user_unit` WHERE  `account_number` = '$registeredby'");
            
            
	   $truck_plate_number = $myName->showName($conn, "SELECT  `truck_plate_number` FROM  `truck` WHERE  `id` = '$id'");
	   $truck_brand = $myName->showName($conn, "SELECT  `truck_brand` FROM  `truck` WHERE  `id` = '$id'");
            
            
            
            
            
	   $inspector_phone = $myName->showName($conn, "SELECT  `phone` FROM  `user_unit` WHERE  `account_number` = '$inspector'");
	   $inspector_email = $myName->showName($conn, "SELECT  `email` FROM  `user_unit` WHERE  `account_number` = '$inspector'");
	   $inspector_name = $myName->showName($conn, "SELECT  `name` FROM  `user_unit` WHERE  `account_number` = '$inspector'");
            
            	 
$sql111 = 	 "UPDATE `truck`  SET `inspector`  = '$inspector' WHERE `id`  = '$id'";
$inserted =  mysqli_query($conn, $sql111) or die(mysqli_error($conn));
            
            
            
          if($inserted )  
          {
                     
          $sql111 = 	 "UPDATE `truck`  SET `status`  = '2' WHERE `id`  = '$id'";
$inserted =  mysqli_query($conn, $sql111) or die(mysqli_error($conn));  
   $message_im = "Truck Inpection Alert. 
Truck Owner:".$account_name."
Plate No :".$truck_plate_number."
Brand :".$truck_brand."
Date:".$datetime."
Click:".$link;   
            
$message_ow = "Truck Inpection Alert. 
Your Truck: ".$truck_plate_number."
Brand :".$truck_brand."
Is scheduled for Inspection.
Inspector's details
Name: ".$inspector_name."
Phone: ".$inspector_phone."
Email: ".$inspector_email."";  
            
            
              $senderID = "LoadMe";
  
 
   $Sending = new SendingSMS(); 
  							 
							$Sending->smsAPI($inspector_phone,"LoadMe",$message_im);
							$Sending->smsAPI($account_phone,"LoadMe",$message_ow);
            
            
            
              $message = ' 

<div class="email-background" style="background: #eee;padding: 10px;">
   
  <div class="email-container" style="max-width: 500px;background: white;margin: 0 auto;overflow: hidden;border-radius: 5px;text-align: center;font-family: sans-serif;"> <img src="http://'.$_SERVER['HTTP_HOST'].'/restricted/'.$inst_logo.'"  alt="'.$inst_logo.'"  width="50px" height="50px" style="max-width: 30%;">
	   
	    <h3 style="5px;font-size: 2.0em;">Hi '.$inspector_name.'...,   </h3>
    <span style="padding: 20px;font-size: 1.3em;">Truck Uploaded Need Inspection. </span><br>
	   
 
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
            
            
$message12 = '<div class="email-background" style="background: #eee;padding: 10px;">
   
  <div class="email-container" style="max-width: 500px;background: white;margin: 0 auto;overflow: hidden;border-radius: 5px;text-align: center;font-family: sans-serif;"> <img src="http://'.$_SERVER['HTTP_HOST'].'/restricted/'.$inst_logo.'"  alt="'.$inst_logo.'"  width="50px" height="50px" style="max-width: 30%;">
	   
	    <h3 style="5px;font-size: 2.0em;">Hi '.$account_name.'...,   </h3>
    <span style="padding: 20px;font-size: 1.3em;">Scheduled Truck Inspection. </span><br>
	   
  <span style="padding: 20px;font-size: 1.5em;">Your truck with plate number: <strong> '.$truck_plate_number.'</strong> </span>
	 <span style="padding: 20px;font-size: 1.5em;"> Truck Brand: <strong> '.$truck_brand.'</strong> </span>
	
	 <span style="padding: 20px;font-size: 1.5em;"> is scheduled for inspection</span>
	 <span style="padding: 20px;font-size: 1.5em;"> Please find inspector\'s details below</span>
     
      <span style="padding: 20px;font-size: 1.5em;">Name <strong> '.$inspector_name.'</strong> </span>
	 <span style="padding: 20px;font-size: 1.5em;">Phone<strong> '.$inspector_phone.'</strong> </span>
	 <span style="padding: 20px;font-size: 1.5em;">Email<strong> '.$inspector_email.'</strong> </span>
   
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
  
</div>
';	
		 
		
		 
/*EMAIL TEMPLATE ENDS*/ 


//$to      = $email;             // give to email address 
 $subject  = "Truck Inspection Alert";  //change subject of email 
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
         mail($inspector_email, $subject, $message, $headers);		
mail($account_email, $subject, $message12, $headers);		

		$realmessage =  mysqli_real_escape_string($conn,$message);
		$realmessage2 =  mysqli_real_escape_string($conn,$message12);
		 
$sqlnot ="INSERT INTO `notification`(`code`,`title`,`message`, `registeredby`, `sent_to`, `status`, `read_status`, `created_at`) VALUES
('$truck_id','$subject','$realmessage','$emailing', '$registeredby', '1', '1','$datetime')";
            
            
$sqlnot ="INSERT INTO `notification`(`code`,`title`,`message`, `registeredby`, `sent_to`, `status`, `read_status`, `created_at`) VALUES
('$truck_id','$subject','$realmessage2','$emailing', '$inspector', '1', '1','$datetime')";
     
				
		 	
 mysqli_query($conn, $sqlnot) or die(mysqli_error($conn));		
  
        echo'<a href="#" class="btn btn-success btn-lg">Information updated successfully. Thank You.</a>';	
		
					 echo '<meta http-equiv="Refresh" content="3; url='.$_SERVER['HTTP_REFERER'].'"> ';     
            
		 
        }
        else
        {
         echo '<div class="btn btn-danger btn-lg">Inspector Not Available for State/Location.<br /> Please Check And Try Again Later.</a></div>'; 	
            
        } 
          }
            
            
    
                                                    
                                                }
                            }
											
											?>