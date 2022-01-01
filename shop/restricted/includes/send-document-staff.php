 <?php
 
include ("config/DB_config.php"); 
 $myName = new Name();
$emailing = "";
//$emailing = "";
$process = false ;
 
 if(isset($_POST['validate']))
 {
 
 if(isset($_SESSION['email']))
 {
$emailing  = $_SESSION['email'];
 }
 $code =$_POST['code'];
 $comment =$_POST['comment'];
	 
	  if(!empty($_POST['transfer'])){
 
 
foreach($_POST['transfer'] as $selected){

	
	$extract_user = mysqli_query($conn, "SELECT  `id` FROM `document_access` WHERE `code` = '$code' AND `username` = '$selected'") or die(mysqli_error($conn));
		$count = mysqli_num_rows($extract_user);
		 if ($count > 0) {
	 	  echo '<div class="btn btn-warning btn-lg">Document already attached to the user. <br>
Please check and try again. </a></div><br />'; 
			 
			 
		 }
	else
	{
			 
$sql = 	 "INSERT INTO `document_access`(`code`, `username`, `status`, `created_date`, `registeredby`, `comment`) VALUES
('$code', '$selected', '1', '$datetime', '$emailing', '$comment')";
 
 $process = mysqli_query($conn, $sql) or die(mysqli_error($conn));
 
		
		if ($process) {
			
			
			
		
		 
			
		$phone = $myName->showName($conn, "SELECT `phone` FROM  `user_unit`WHERE  `account_number` = '$selected'"); 	
		$email = $myName->showName($conn, "SELECT `email` FROM  `user_unit`WHERE  `account_number` = '$selected'"); 	
		$name = $myName->showName($conn, "SELECT `name` FROM  `user_unit`WHERE  `account_number` = '$selected'"); 	
			
		 
		$filesize = $myName->showName($conn, "SELECT  `filesize` FROM `userfiles` WHERE (`filecode`= '$code' OR `group_code`= '$code')"); 	
		$filename = $myName->showName($conn, "SELECT  `name` FROM `userfiles` WHERE (`filecode`= '$code' OR `group_code`= '$code')"); 	
		$sent_by = $myName->showName($conn, "SELECT `name` FROM `user_unit` WHERE  `phone`= '$emailing' OR `email`= '$emailing' OR `account_number` = '$emailing'"); 	
			
			//echo $phone;
			if($phone != "")
			{
				
$message = "File Transfer. 
Requisition Name:".$filename."
File Size:".$filesize."
File Code:".$code."
Sent By:".$sent_by."
Please login to the portal." ;


  $senderID = "LOADME";
  
 
				
   $Sending = new SendingSMS(); 
  							 
						 $Sending->smsAPI($phone,"LOADME",$message);
		
			}
			
			
			if($email != "")
			{
				
				 
			  $message = ' 

<div class="email-background" style="background: #eee;padding: 10px;">
   
  <div class="email-container" style="max-width: 500px;background: white;margin: 0 auto;overflow: hidden;border-radius: 5px;text-align: center;font-family: sans-serif;"> <img src="http://'.$_SERVER['HTTP_HOST'].'/requipro/'.$inst_logo.'"  alt="'.$inst_logo.'"  width="50px" height="50px" style="max-width: 30%;">
	   
	    <h3 style="5px;font-size: 2.0em;">Hi '.$name.',   </h3>  
    
   <span style="padding: 20px;font-size: 1.3em;">'.$filename.' File(s) Was transfered to you by '.$sent_by.'. </span><br>

	 <h6 style="padding: 2px;"> <strong>Comment/Remark/Note: </strong> </h6>
	 <span style="padding: 20px;font-size: 1.3em;">'.$comment.' </span>
   
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
('$code','$subject','$message','$emailing', '$selected', '1', '1','$datetime')";
     
				
		 	
 mysqli_query($conn, $sql) or die(mysqli_error($conn));	
				
				
				
				
				
			}
			
					
			
			
		}
		
		
		
	
	}
	
	
	
	
 
	
	
}
		  
		  if ($process) {
			  
			  
			  
			  	
		if($comment != "")
		{
			$aid = $myName->showName($conn, "SELECT `id` FROM  `userfiles` WHERE (`group_code` = '$code' or `filecode` = '$code')"); 
			
				 $sql12 = "INSERT INTO `document_comment`(`document_id`, `document_code`, `commenting`, `status`, `created_date`, `registeredby`) VALUES
('$aid','$code','$comment', '1', '$datetime', '$emailing')";
 
 $process = mysqli_query($conn, $sql12) or die(mysqli_error($conn));
		}
			  
			  
		 
		  echo '<div class="btn btn-success btn-lg">Information Submitted Successfully.</a></div>'; 
		
	}
		else
		{
			 $error="Not Inserted,Some Problem occured.";
echo'<a href="#"class="btn btn-danger btn-lg">Information Not Submitted Successfully.  Please try again later.</a>'; 
			
		}
	  }
	 
	 
 }
$conn->close();
	
 
?>

 