 <?php
 
 include("config/DB_config.php");
$emailing = "";
 $myName = new Name();
 if(isset($_POST['validate']))
 {
 
 if(isset($_SESSION['email']))
 {
$emailing  = $_SESSION['email'];
 }

  
 
$iding=  mysqli_real_escape_string($conn,$_POST['iding']);
$code=  mysqli_real_escape_string($conn,$_POST['code']);
 $commenting=  mysqli_real_escape_string($conn,trim($_POST['comment']));
 
  
 
 	 
$sql = 	 "INSERT INTO `document_comment`(`document_id`, `document_code`, `commenting`, `status`, `created_date`, `registeredby`) VALUES('$iding',  '$code', '$commenting',1,'$datetime', '$emailing')";
 
 $process = mysqli_query($conn, $sql) or die(mysqli_error($conn));
 
	if ($process) {
		
		
		/*SELECT  `id`, `code`, `username`, `status`, `created_date`, `registeredby`, `comment`FROM `document_access` WHERE `code` = '$code'*/
		 $query1 =  "SELECT  `id`, `code`, `username`, `status`, `created_date`, `registeredby`, `comment`FROM `document_access` WHERE `code` = '$code' AND `status` = 1   ORDER BY `id` DESC";	
	

 $extract_distance1 = mysqli_query($conn, $query1) or die(mysqli_error($conn));
		$count1 = mysqli_num_rows($extract_distance1);
    if ($count1 > 0)
		  {
 	 while ($row_distance1=mysqli_fetch_row($extract_distance1))
    {
  						  	$id =$row_distance1[0];
  						  	$code =$row_distance1[1];
		 					$username =$row_distance1[2];
		 
		   $filename = $myName->showName($conn, "SELECT  `name` FROM `userfiles` WHERE  `id` = '$iding' AND `status` = '1'"); 
		 
		 
		   $Sendername = $myName->showName($conn, "SELECT `name` FROM `user_unit` WHERE  `account_number` = '$emailing' AND `status` = '1'"); 
		 
		 
		   $name = $myName->showName($conn, "SELECT `name` FROM `user_unit` WHERE  `account_number` = '$username' AND `status` = '1'"); 
		   $phone = $myName->showName($conn, "SELECT `phone` FROM `user_unit` WHERE  `account_number` = '$username' AND `status` = '1'"); 
		   $emailAdd = $myName->showName($conn, "SELECT `email` FROM `user_unit` WHERE  `account_number` = '$username' AND `status` = '1'"); 
		 
		 if($phone != "")
			{
				
$message = "New Comment on 
File Name:".$filename."
File Code:".$code."
By:".$Sendername."
Date:".$datetime."
Please login to the portal." ;


  $senderID = "DOCPRO";
  
 
				
   $Sending = new SendingSMS(); 
  							 
							  $Sending->smsAPI($phone,"DOCPRO",$message);
		
			}
			
			
			if($emailAdd != "")
			{
				
				 
			  $message = ' 

<div class="email-background" style="background: #eee;padding: 10px;">
   
  <div class="email-container" style="max-width: 500px;background: white;margin: 0 auto;overflow: hidden;border-radius: 5px;text-align: center;font-family: sans-serif;"> <img src="http://'.$_SERVER['HTTP_HOST'].'/dpdev-001/'.$inst_logo.'"  alt="'.$inst_logo.'" width="50px" height="50px" style="max-width: 30%;">
	   
    <h1 style="5px;font-size: 2.0em;">Hi '.$name.'   </h1>
    <h1 style="padding: 20px;font-size: 2.5em;">'.$Sendername.'just commented on '.$filename.' on '.$datetime.'. </h1>
	 <h6 style="padding: 10px;"> Comment/Remark/Note:  </h6>
	 <span style="5px;font-size: 2.0em;">'.$comment.' </span>
   
    <p style="padding: 20px;font-weight: 300;font-size: 1.2em;">Please login to the portal. </p>
    <div class="cta" style="padding: 5px;background: #26466D;margin: 0 auto;">
      <p style="padding: 20px;font-weight: 300;font-size: 1.2em;"><a href="http://'.$_SERVER['HTTP_HOST'].'/dpdev-001/" style="text-decoration: none;color: white;">Visit Portal Now</a></p>
    </div>


  </div>
  <div class="footer-links" style="max-width: 500px;font-family: sans-serif;margin: 0 auto;overflow: hidden;border-radius: 5px;text-align: center;padding: 20px;">
    <a href="/xx" style="color: #26466D;">about</a> | <a href="/xx" style="color: #26466D;">unsubsribe</a> | <a href="/xx" style="color: #26466D;">t&amp;c s</a>
  </div>
</div>
';	
		 
		
		 
/*EMAIL TEMPLATE ENDS*/ 


$to      = $emailAdd;             // give to email address 
 $subject  = "Comment on ".$filename;  //change subject of email 
$newEmail    ="info@apexappsng.com";                           // give from email address 

// mandatory headers for email message, change if you need something different in your setting. 
   $newEmail= "info@loadme.services";
	                    $headers = "From: " .($newEmail) . "\r\n";
                        $headers .= "Reply-To: ".($newEmail) . "\r\n";
                        $headers .= "Return-Path: ".($newEmail) . "\r\n";;
                        $headers .= "MIME-Version: 1.0\r\n";
                        $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
                        $headers .= "X-Priority: 3\r\n";
                        $headers .= "X-Mailer: PHP". phpversion() ."\r\n";         
         mail($emailAdd, $subject, $message, $headers);		
				
				
			}
		 
		 
	 }
		
	}
		
		
		 
 
  echo '<div class="btn btn-success btn-lg">Information Submitted Successfully.</a></div><br />'; 	
   
   
} else {
  // echo "Error: " . $sql . "<br>" . $conn->error;
    $error="Not Inserted,Some Problem occured.";
echo'<a href="#"class="btn btn-danger btn-lg">Information Not Submitted Successfully.  <br />Please try again later.</a><br />';  

}

 
		 
 
		
 
	}
 

 
$conn->close();
	
 
?>

 