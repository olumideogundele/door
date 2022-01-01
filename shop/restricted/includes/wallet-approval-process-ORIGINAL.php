 <?php
 
include ("config/DB_config.php"); 
 $myName = new Name();
$emailing = "";
//$emailing = "";
 
 if(isset($_POST['validate']))
 {
 
 if(isset($_SESSION['email']))
 {
$emailing  = $_SESSION['email'];
 }
 
	 
	 $status= $_POST['status'];
	 $comment= $_POST['comment'];
	 $code= $_POST['code'];
	 $aid = $_POST['aid'];
 
	 
	 
	  $position = $myName->showName($conn, "SELECT  `position` FROM `stake_holder` WHERE `username` = '$emailing' or `phone` = '$emailing' or `email` = '$emailing'"); 
	 
 
	 
	 $extract_user = mysqli_query($conn, "SELECT * FROM `userfiles` WHERE  (`stage` != '$position' AND `code` = '$code')") or die(mysqli_error($conn));
		$count = mysqli_num_rows($extract_user);
		 if ($count > 0) { 
	 	 
  
    $error="Not Inserted,Some Problem occured.";
echo'<a href="#"class="btn btn-danger btn-lg">Sorry! The funding is no more on your table..</a><br />';  

 
  
   
} else {
 
 $maxposition = $myName->showName($conn, "SELECT  MAX(`position`) FROM `stake_holder` WHERE `status` = '1'"); 
			 
 
	 $sql = "INSERT INTO `approval_log`(`code`, `action`, `created_date`, `registeredby`) VALUES
('$code', '$status', '$datetime', '$emailing')";
 
 $process = mysqli_query($conn, $sql) or die(mysqli_error($conn));
 
			 
			 if($process)
			 {
			 
				 
				 if($status == 1)
				 {
					 
					 if($position < $maxposition )
					 {
						 $newStage = $position + 1;
						 
 $sqlii = "UPDATE `userfiles` SET  `status` = '$status', `stage` = '$newStage'  WHERE `id` = '$aid' AND `code` = '$code' ";
						 
						 
 $query =  "SELECT  `id`, `name`, `phone`, `email` FROM `stake_holder` WHERE `status` = 1 AND `position` = '$newStage'";	
 
 
 $extract_distance = mysqli_query($conn, $query) or die(mysqli_error($conn));
		$count = mysqli_num_rows($extract_distance);
    if ($count > 0)
		  {
 	 while ($row_distance=mysqli_fetch_row($extract_distance))
    {
 		 $id =$row_distance[0];
		 $name=$row_distance[1];
		 $phone =$row_distance[2];
		$email =$row_distance[3];
		
		
		
		 $name = $myName->showName($conn, "SELECT  `name` FROM `userfiles` WHERE `code` = '$code'"); 
		
		 
		 $registry = $myName->showName($conn, "SELECT  `registry` FROM `userfiles` WHERE `code` = '$code'"); 
		 
		 
		 $department = $myName->showName($conn, "SELECT  `name`  FROM `mda`  WHERE `id` = '$registry'"); 
		 $submitted_by = $myName->showName($conn, "SELECT  `submitted_by`  FROM `mda`  WHERE `id` = '$registry'"); 
 
		
		 
		 
		 
		 
					     	
		//$link = 'http://apexapps.net/funaab/wallet-fund.php?code='.$code;
 $link = 'https://'.$_SERVER['HTTP_HOST'].'/requipro/approval.php?code='.$code;
	  
	  
/*  $message = "New Requisition Uploaded. 
Name:".$name."
Dept. Name:".$department."
Submited By:".$submitted_by."
File Code:".$code
Click:".$link;  */
		 $message = "New Requisition Uploaded. 
Name:".$name."
Dept. Name:".$department."
Submited By:".$submitted_by."
File Code:".$code;


  $senderID = "LOADME";
  
 
   $Sending = new SendingSMS(); 
  							 
							 $Sending->smsAPI($phone,"LOADME",$message);
		
		
		
		
		
			 
			  $message = ' 

<div class="email-background" style="background: #eee;padding: 10px;">
   
  <div class="email-container" style="max-width: 500px;background: white;margin: 0 auto;overflow: hidden;border-radius: 5px;text-align: center;font-family: sans-serif;"> <img src="http://'.$_SERVER['HTTP_HOST'].'/requipro/'.$inst_logo.'"  alt="'.$inst_logo.'" width="407" height="30%" style="max-width: 30%;">
	   
    <h1 style="5px;font-size: 2.0em;">Hi     '.$name.'   </h1>
    <h1 style="padding: 20px;font-size: 2.5em;">'.$name.' Files Uploaded and needs approval. </h1>
	 <h1 style="padding: 20px;font-size: 2.5em;"> Comment: '.$comment.' </h1>
   
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
		 
		
		
		//echo $message;
 

//echo $message;

/*EMAIL TEMPLATE ENDS*/ 


$to      = $email;             // give to email address 
 $subject  = "Document Approval";  //change subject of email 
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

		
		
  
 
  	 //$phone = $phone;
 // $message = "Pay All Login:-\nUsername:".$phone."Password:".$password;
  //$message = "Welcome to requipro ".$name."! Username:".$phone.".Password:".$password.". Thank You.";

  
  	// $Sending = new SendingSMS(); 
  							 
						//	$Sending->smsAPI($phone,"LOADME",$message);
	}
  
   
} else {
  // echo "Error: " . $sql . "<br>" . $conn->error;
    $error="Not Inserted,Some Problem occured.";
echo'<a href="#"class="btn btn-danger btn-lg">Information Not Submitted Successfully.  <br />Please try again later.</a><br />';  

} 
						 
						 
						 
						 
					 }
					 else
					 {
						 
						 $maxposition = $myName->showName($conn, "SELECT  MAX(`position`) FROM `stake_holder` WHERE `status` = '1'"); 
						 
						 $sqlii = "UPDATE `fund_wallet_back` SET  `status` = '4', `stage` = '$maxposition'  WHERE `id` = '$aid' AND `code` = '$code' ";
						 
		 
						 echo '<meta http-equiv="Refresh" content="2; url= send-document.php"> '; 
						 
						 
					 }
				
				 
					 
					 
					
					 
					 
				 }
				 else
				 {
					  
					 
					 $statusValue = "";
				if($status == 3)	
				{
					$statusValue = "Declined";
					
				}
					 else{
						 $statusValue = "Pending";
					 }
					 
$registeredby = $myName->showName($conn, "SELECT  `registeredby` FROM `userfiles`  WHERE  `code` = '$code'"); 	
					 
					 
					 
					 
 $sqlii = "UPDATE `userfiles` SET  `status` = '$status'  WHERE `id` = '$aid' AND `code` = '$code' ";
  $emailAddress = $myName->showName($conn, "SELECT  `email` FROM `users`  WHERE  `email` = '$registeredby' or `phone` = '$registeredby'"); 
 $phone = $myName->showName($conn, "SELECT  `phone` FROM `users`  WHERE  `email` = '$registeredby' or `phone` = '$registeredby'"); 
					$link = 'http://apexapps.net/funaab/wallet-fund.php?code='.$code."&call=show";
 $link = 'https://'.$_SERVER['HTTP_HOST'].'/requipro/approval.php?code='.$code."&call=show";
	  
	  
/*$message = "New Requisition Uploaded. 
Name:".$name."
Dept. Name:".$department."
Submited By:".$submitted_by."
File Status:".$statusValue."
File Code:".$code."
More Details;
Click: ".$link ." 
Thank you.";*/
					 
$message = "New Requisition Uploaded. 
Name:".$name."
Dept. Name:".$department."
Submited By:".$submitted_by."
File Status:".$statusValue."
File Code:".$code;

					 

  $senderID = "LOADME";
  
 
   $Sending = new SendingSMS(); 
  							 
							 $Sending->smsAPI($registeredby,"LOADME",$message); 
					 
			  $message = ' 

<div class="email-background" style="background: #eee;padding: 10px;">
   
  <div class="email-container" style="max-width: 500px;background: white;margin: 0 auto;overflow: hidden;border-radius: 5px;text-align: center;font-family: sans-serif;"> <img src="http://'.$_SERVER['HTTP_HOST'].'/requipro/'.$inst_logo.'"  alt="'.$inst_logo.'" width="407" height="30%" style="max-width: 30%;">
	   
    <h1 style="5px;font-size: 2.0em;">Hi     '.$name.'   </h1>
    <h1 style="padding: 20px;font-size: 2.5em;">  Files Status: '.$statusValue.' </h1>
	 <h1 style="padding: 20px;font-size: 2.5em;"> Comment: '.$comment.' </h1>
   
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
 				 
		
$to      = $emailAddress;             // give to email address 
 $subject  = "Doccument Approval";  //change subject of email 
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
         mail($emailAddress, $subject, $message, $headers);					 
					 
					 
					 
					 
					 
					 
				 }
				 
				 
				 
				 
				  if($comment != "")
					 {
						 
	 $sql = "INSERT INTO `wallet_fund_approval_comment`(`comment`, `code`, `aid`, `created_date`, `registeredby`) VALUES
('$comment','$code', '$aid', '$datetime', '$emailing')";
 
 $process = mysqli_query($conn, $sql) or die(mysqli_error($conn));
						 
						 
						 
						 
					 }
 	 
				 
				 
				 
				 
				 
				  
 $process = mysqli_query($conn, $sqlii) or die(mysqli_error($conn));
				 
				 
				 if($process)
				 {
					 
					 echo '<div class="btn btn-success btn-lg">Information Updated Successfully.</a></div>'; 	
					 
				 }
				 else{
					 
					 echo '<div class="btn btn-danger btn-lg">Information Not Updated Successfully.</a></div>'; 	
					 
				 }
				 
			 }

	 
	 
 }
	 
	 
 }
$conn->close();
	
 
?>

 