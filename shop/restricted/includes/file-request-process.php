  <?php
 
 include("config/DB_config.php");
 $myName = new Name();
$emailing = "";
 
 if(isset($_POST['validate']))
 {
 
 if(isset($_SESSION['email']))
 {
$emailing  = $_SESSION['email'];
 }

  $code =  mt_rand(10, 3434).mt_rand(10, 3434).mt_rand(10, 3434);	
 
$ministry  =    mysqli_real_escape_string($conn,$_POST['mda']);
 
$directoryname  =    mysqli_real_escape_string($conn,$_POST['filename']);
 
 	$ministry_incoming = $myName->showName($conn, "SELECT `ministry` FROM `user_unit` WHERE `account_number` = '$emailing'"); 
	 
	 
  $extract_user = mysqli_query($conn, "SELECT * FROM `file_request` WHERE   `code` = '$code' AND (`status` = '5' OR `status` = '3')") or die(mysqli_error($conn));
		$count = mysqli_num_rows($extract_user);
		 if ($count > 0) {
	 	 
	echo'<a href="#" class="btn btn-danger btn-lg">File '.$code.' is not available. Please check back later.</a><br />';

		  
	
 
		 }else
		 {
	 
	 
	 	 $filecode = $myName->showName($conn, "SELECT `filecode` FROM `userfiles` WHERE  `id` = '$directoryname' "); 
	 
	 
	 
$sql = 	 "INSERT INTO `file_request`(`ministry`,   `file`, `created_date`, `registeredby`, `approvedby`, `status`,`incoming_ministry`,`code`,`type`,`filecode` ) VALUES('$ministry', '$directoryname',  '$datetime','$emailing','','2', '$ministry_incoming', '$code', '0','$filecode')";
 
 $process = mysqli_query($conn, $sql) or die(mysqli_error($conn));
 
	if ($process) {
		
		 
	 
		
		 $naming = $myName->showName($conn, "SELECT `name` FROM `stake_holder` WHERE  `position` = 1 AND `status` = 1"); 
		 $phone = $myName->showName($conn, "SELECT `phone` FROM `stake_holder` WHERE  `position` = 1 AND `status` = 1"); 
		 $email = $myName->showName($conn, "SELECT `email` FROM `stake_holder` WHERE  `position` = 1 AND `status` = 1"); 
		 $account_number = $myName->showName($conn, "SELECT `email` FROM `stake_holder` WHERE  `position` = 1 AND `status` = 1"); 
		
		
		
		 $name = $myName->showName($conn, "SELECT `name` FROM `user_unit` WHERE `account_number` = '$emailing'"); 
		
		 $foldername = $myName->showName($conn, "SELECT  `foldername`  FROM `file_directory` WHERE `id` = '$directoryname'"); 
 
		
		if($phone != "")
		{
			
			$message = "Hi ".$naming.", ".$name." requested for a ".$foldername." at ".$datetime.". Request Code: ". $code." Please attend to it by login to the portal.";
$Sending = new SendingSMS(); 
 $Sending->smsAPI($phone,"LOADME",$message);
			
			
			
			
			 $message = ' 

<div class="email-background" style="background: #eee;padding: 10px;">
   
  <div class="email-container" style="max-width: 500px;background: white;margin: 0 auto;overflow: hidden;border-radius: 5px;text-align: center;font-family: sans-serif;"> <img src="http://'.$_SERVER['HTTP_HOST'].'/requipro/'.$inst_logo.'"  alt="'.$inst_logo.'" width="407" height="30%" style="max-width: 30%;">
	   
    <h1 style="padding: 10px;font-size: 1.5em;">Folder Request Alert </h1>
    <h3 style="padding: 10px;font-size: 1.5em;">Hi '.$name.'   </h3>
    <h6 style="padding: 20px;font-size: 2.5em;">'.$foldername.' File(s) was requested by '.$name.' at '.$datetime.'. Request Code:'. $code.' </h1>
	 
   
    <p style="padding: 20px;font-weight: 300;font-size: 1.2em;">Please login to the portal. </p>
    <div class="cta" style="padding: 5px;background: #26466D;margin: 0 auto;">
      <p style="padding: 20px;font-weight: 300;font-size: 1.2em;"><a href="http://'.$_SERVER['HTTP_HOST'].'/requipro/" style="text-decoration: none;color: white;">Visit Portal Now</a></p>
    </div>


  </div>
  <div class="footer-links" style="max-width: 500px;font-family: sans-serif;margin: 0 auto;overflow: hidden;border-radius: 5px;text-align: center;padding: 20px;">
    <a href="/xx" style="color: #26466D;">about</a> | <a href="/xx" style="color: #26466D;">unsubsribe</a> | <a href="/xx" style="color: #26466D;">t&amp;c s</a>
  </div>
</div>
';	
		 
		
		 
/*EMAIL TEMPLATE ENDS*/ 


$to      = $email;             // give to email address 
 $subject  = "Document Transfer";  //change subject of email 
$newEmail    ="info@payall.ng";                           // give from email address 

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
			
			
			
			
			
			 $sql ="INSERT INTO `notification`(`code`,`title`,`message`, `registeredby`, `sent_to`, `status`, `read_status`, `created_at`) VALUES
('$code','$subject','$message','$emailing', '$account_number', '1', '1','$datetime')";
     
				
		 	
 mysqli_query($conn, $sql) or die(mysqli_error($conn));
			
			
			
		}
		
		
		
		
		
 
  echo '<div class="btn btn-success btn-lg">Information Submitted Successfully.<br /> Folder Request Code: '. $code.'</a></div><br />'; 	
   
   
} else {
  // echo "Error: " . $sql . "<br>" . $conn->error;
    $error="Not Inserted,Some Problem occured.";
echo'<a href="#"class="btn btn-danger btn-lg">Information Not Submitted Successfully.  <br />Please try again later.</a><br />';  

}

 
		 
 
		 }
 
	}
 else if(isset($_POST['validate1']))
 {
 
 if(isset($_SESSION['email']))
 {
$emailing  = $_SESSION['email'];
 }

  $code =  mt_rand(10, 3434).mt_rand(10, 3434).mt_rand(10, 3434);	
 
$ministry  =    mysqli_real_escape_string($conn,$_POST['mda']);
 
$directoryname  =    mysqli_real_escape_string($conn,$_POST['filename']);
	 
	 
	 
	 
	  foreach ($_POST['file'] as $selectedOption)
						   {
							   
	  $extract_user = mysqli_query($conn, "SELECT * FROM `file_request` WHERE   `code` = '$code' AND (`status` = '5' OR `status` = '3')") or die(mysqli_error($conn));
		$count = mysqli_num_rows($extract_user);
		 if ($count > 0) {
	 	 
	echo'<a href="#" class="btn btn-danger btn-lg">File '.$code.' is not available. Please check back later.</a><br />';

		  
	
 
		 }else
		 {					   
	$idd = $selectedOption;	
			 
			 //echo $idd." files";
	 
	 
	 		 $filecode = $myName->showName($conn, "SELECT `filecode` FROM `userfiles` WHERE  `id` = '$idd' "); 
	 
	 
	 
 	$ministry_incoming = $myName->showName($conn, "SELECT `ministry` FROM `user_unit` WHERE `account_number` = '$emailing'"); 
$sql = "INSERT INTO `file_request`(`ministry`,   `file`, `created_date`, `registeredby`, `approvedby`, `status`,`incoming_ministry`,`code`,`type`,`filecode` ) VALUES('$ministry', '$idd',  '$datetime','$emailing','','2', '$ministry_incoming', '$code', '1', '$filecode')";
 
 $process = mysqli_query($conn, $sql) or die(mysqli_error($conn));
 
	if ($process) {
		
		 
	 
		
		 $naming = $myName->showName($conn, "SELECT `name` FROM `stake_holder` WHERE  `position` = 1 AND `status` = 1"); 
		 $phone = $myName->showName($conn, "SELECT `phone` FROM `stake_holder` WHERE  `position` = 1 AND `status` = 1"); 
		 $email = $myName->showName($conn, "SELECT `email` FROM `stake_holder` WHERE  `position` = 1 AND `status` = 1"); 
		 $account_number = $myName->showName($conn, "SELECT `account_number` FROM `stake_holder` WHERE  `position` = 1 AND `status` = 1"); 
		
		
		 $name = $myName->showName($conn, "SELECT `name` FROM `user_unit` WHERE `account_number` = '$emailing'"); 
		
		 $foldername = $myName->showName($conn, "SELECT  `foldername`  FROM `file_directory` WHERE `id` = '$directoryname'"); 
 
		
		if($phone != "")
		{
			
			$message = "Hi ".$naming.", ".$name." requested for a ".$foldername." at ".$datetime.". Request Code: ". $code." Please attend to it by login to the portal.";
$Sending = new SendingSMS(); 
$Sending->smsAPI($phone,"LOADME",$message);
			
			
			
			
			 $message = ' 

<div class="email-background" style="background: #eee;padding: 10px;">
   
  <div class="email-container" style="max-width: 500px;background: white;margin: 0 auto;overflow: hidden;border-radius: 5px;text-align: center;font-family: sans-serif;"> <img src="http://'.$_SERVER['HTTP_HOST'].'/requipro/'.$inst_logo.'"  alt="'.$inst_logo.'" width="407" height="30%" style="max-width: 30%;">
	   
    <h1 style="padding: 10px;font-size: 1.5em;">Folder Request Alert </h1>
    <h3 style="padding: 10px;font-size: 1.5em;">Hi '.$name.'   </h3>
    <h6 style="padding: 20px;font-size: 2.5em;">'.$foldername.' File(s) was requested by '.$name.' at '.$datetime.'. Request Code:'. $code.' </h1>
	 
   
    <p style="padding: 20px;font-weight: 300;font-size: 1.2em;">Please login to the portal. </p>
    <div class="cta" style="padding: 5px;background: #26466D;margin: 0 auto;">
      <p style="padding: 20px;font-weight: 300;font-size: 1.2em;"><a href="http://'.$_SERVER['HTTP_HOST'].'/requipro/" style="text-decoration: none;color: white;">Visit Portal Now</a></p>
    </div>


  </div>
  <div class="footer-links" style="max-width: 500px;font-family: sans-serif;margin: 0 auto;overflow: hidden;border-radius: 5px;text-align: center;padding: 20px;">
    <a href="/xx" style="color: #26466D;">about</a> | <a href="/xx" style="color: #26466D;">unsubsribe</a> | <a href="/xx" style="color: #26466D;">t&amp;c s</a>
  </div>
</div>
';	
		 
		
		 
/*EMAIL TEMPLATE ENDS*/ 


$to      = $email;             // give to email address 
 $subject  = "Document Transfer";  //change subject of email 
$newEmail    ="info@payall.ng";                           // give from email address 

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
 $sql ="INSERT INTO `notification`(`code`,`title`,`message`, `registeredby`, `sent_to`, `status`, `read_status`, `created_at`) VALUES
('$code','$subject','$message','$emailing', '$account_number', '1', '1','$datetime')";
     
				
		 	
 mysqli_query($conn, $sql) or die(mysqli_error($conn));			
			
		}
		
		
		
		
		
 
  echo '<div class="btn btn-success btn-lg">Information Submitted Successfully.<br /> Folder Request Code: '. $code.'</a></div><br />'; 	
   
   
} else {
  // echo "Error: " . $sql . "<br>" . $conn->error;
    $error="Not Inserted,Some Problem occured.";
echo'<a href="#"class="btn btn-danger btn-lg">Information Not Submitted Successfully.  <br />Please try again later.</a><br />';  

}

		 
 }}
 
	 
 
	}
 

 
$conn->close();
	
 
?>

 