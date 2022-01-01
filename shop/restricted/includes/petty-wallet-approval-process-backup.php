 <?php
 
include ("config/DB_config.php"); 
 $myName = new Name();
$emailing = "";
//$emailing = "";
/* ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);*/
 if(isset($_POST['validate']))
 {
 
 if(isset($_SESSION['email']))
 {
$emailing  = $_SESSION['email'];
 }
	 else
	 {
		 $emailing  = $_POST['emailing'];
	 }
	 
	 $status= $_POST['status'];
	 $comment= $_POST['comment'];
	 $code= $_POST['code'];
	 $aid = $_POST['aid'];
	 
	 
	 if($comment == "" or $status == "")
	 {
		 
	    
echo'<a href="#"class="btn btn-danger btn-lg">Inportant Field(s) is empty.</a><br />';  	 
	 }
	 else
	 {
	 
	 
	  $position = $myName->showName($conn, "SELECT  `position` FROM `stake_holder` WHERE `username` = '$emailing' or `phone` = '$emailing' or `email` = '$emailing' or `account_number` = '$emailing'"); 
	 
	   $maxposition = $myName->showName($conn, "SELECT  MAX(`position`) FROM `stake_holder` WHERE `status` = '1'"); 
	 
	 
	 $extract_user = mysqli_query($conn, "SELECT * FROM `userfiles` WHERE  (`stage` != '$position' or `status` = '4')  AND (`group_code` = '$code' or `filecode` = '$code')") or die(mysqli_error($conn));
		$count = mysqli_num_rows($extract_user);
		 if ($count > 0) { 
	 	 
  
    $error="Not Inserted,Some Problem occured.";
echo'<a href="#"class="btn btn-danger btn-lg">Sorry! The File is no more on your table..</a><br />';  

 
  
   
} else {
 
 $maxposition = $myName->showName($conn, "SELECT  MAX(`position`) FROM `stake_holder` WHERE `status` = '1'"); 
			 
 
$sql = "INSERT INTO `approval_log`(`code`, `action`, `created_date`, `registeredby`) VALUES('$code', '$status', '$datetime', '$emailing')";
 
 $process = mysqli_query($conn, $sql) or die(mysqli_error($conn));
 
			 
			 if($process)
			 {
			 
				 
				 if($status == 1)
				 {
					 
					 if($position < $maxposition )
					 {
						 $newStage = $position + 1;
						 
 $sqlii = "UPDATE `userfiles` SET  `status` = '$status', `stage` = '$newStage'  WHERE   `group_code` = '$code' or  `filecode` = '$code' ";
						 
						 
 $query =  "SELECT  `id`, `name`, `phone`, `email`,`account_number` FROM `stake_holder` WHERE `status` = 1 AND `position` = '$newStage'";	
 
  if($position == $maxposition)
						 
						// if($newStage == $maxposition)
						 {
							 
	
	  
	  
	  
	  
	  $wallet_amount = $myName->showName($conn, "SELECT  `amount` FROM `wallet` WHERE `status` = '1'"); 
	  $demand_amount = $myName->showName($conn, "SELECT  `amount` FROM `userfiles` WHERE `group_code` = '$code'  or  `filecode` = '$code'"); 
	  
	  
	  if($demand_amount > $wallet_amount)
	  {
		 echo'<a href="#"class="btn btn-danger btn-lg">Amount in the wallet is too low.  <br />Please try again later.</a><br />';   
		  
	  }
	  else
	  {
		   $maxposition = $myName->showName($conn, "SELECT  MAX(`position`) FROM `stake_holder` WHERE `status` = '1'"); 
						 
						 $sqlii = "UPDATE `userfiles` SET  `status` = '4',`status_a` = '1', `stage` = '$maxposition'  WHERE   `group_code` = '$code'  or  `filecode` = '$code'";
		  
		  
		  $wallet_amount = $myName->showName($conn, "SELECT  `amount` FROM `wallet` WHERE `status` = '1'"); 
		  
		  $new_amount = $wallet_amount - $demand_amount;
		  
		  
		  
		  
		  
		  
		  
		   $sql_1 = "UPDATE `wallet` SET  `amount` = '$new_amount'  WHERE 1";
		  $sql_1 = mysqli_query($conn, $sql_1) or die(mysqli_error($conn));
		  
		  
						 
		 
						 echo '<meta http-equiv="Refresh" content="2; url= send-document.php?code='.$code.'"> '; 
		  
	  }
	  
	  
	 
						
  
  
  
  
  
  
  }
						 else{
						 
						 
						 
 $extract_distance = mysqli_query($conn, $query) or die(mysqli_error($conn));
		$count = mysqli_num_rows($extract_distance);
    if ($count > 0)
		  {
 	 while ($row_distance=mysqli_fetch_row($extract_distance))
    {
 		 $id =$row_distance[0];
		 $name=$row_distance[1];
		 $naming=$row_distance[1];
		 $phone =$row_distance[2];
		$email =$row_distance[3];
		 $account_number =$row_distance[4];
		
		
		
		 $name = $myName->showName($conn, "SELECT  `name` FROM `userfiles` WHERE `group_code` = '$code' or  `filecode` = '$code'"); 
		 $fileName = $myName->showName($conn, "SELECT  `filename` FROM `userfiles` WHERE `group_code` = '$code'  or  `filecode` = '$code'"); 
		
		 
		 $registry = $myName->showName($conn, "SELECT  `registry` FROM `userfiles` WHERE `group_code` = '$code'  or  `filecode` = '$code'"); 
		 
		 
		 $department = $myName->showName($conn, "SELECT  `name`  FROM `mda`  WHERE `id` = '$registry'"); 
		 $submitted_by = $myName->showName($conn, "SELECT  `submitted_by`  FROM `userfiles`  WHERE `id` = '$registry'"); 
 
		
		 
		 	 
		 
$file_ext = pathinfo($fileName, PATHINFO_EXTENSION);
 
		 
		 $images = "";
		 
		 
		 if($file_ext == "jpg" or $file_ext == "png" or $file_ext == "gif")
		 {
			 
			$images = '<div class="cta" style="padding: 5px; margin: 0 auto;">
     <img src="https://'.$_SERVER['HTTP_HOST'].'/requipro/uploads/'.$fileName  .'" width = "100%" height = "100%"> 
    </div>' ;
			 
		 }
		 
		 
		 
		 
		 
					     	
		//$link = 'http://apexapps.net/funaab/wallet-fund.php?code='.$code;
 $link = 'https://'.$_SERVER['HTTP_HOST'].'/requipro/petty-approval.php?code='.$code;
	  
	  
   $message = "New Requisition Uploaded. 
Name:".$name."
Dept. Name:".$department."
Submited By:".$submitted_by."
File Code:".$code."
Click:".$link;  
		 
		 
		/* $message = "New Requisition Uploaded. 
Name:".$name."
Dept. Name:".$department."
Submited By:".$submitted_by."
File Code:".$code*/;


  $senderID = "LOADME";
  
 
   $Sending = new SendingSMS(); 
  							 //here
							$Sending->smsAPI($phone,"LOADME",$message);
		
		
		
		
		
			 
			  $message = ' 

<div class="email-background" style="background: #eee;padding: 10px;">
   
  <div class="email-container" style="max-width: 500px;background: white;margin: 0 auto;overflow: hidden;border-radius: 5px;text-align: center;font-family: sans-serif;"> <img src="http://'.$_SERVER['HTTP_HOST'].'/requipro/'.$inst_logo.'"  alt="'.$inst_logo.'"  width="50px" height="50px" style="max-width: 30%;">
	   
	    <h3 style="5px;font-size: 2.0em;">Hi '.$naming.'...,   </h3>
    <span style="padding: 20px;font-size: 1.3em;">'.$name.' Uploaded and needs approval. </span><br>
	   
 
	 <span style="padding: 20px;font-size: 1.5em;"> Comment: <strong> '.$comment.'</strong> </span>
   
    <span> 
	 <p style="padding: 20px;font-weight: 300;font-size: 1.2em;">Please login to the portal. </p>
    <div class="cta" style="padding: 5px;background: #26466D;margin: 0 auto;">
      <p style="padding: 20px;font-weight: 300;font-size: 1.2em;"><a href="'.$link.'" style="text-decoration: none;color: white;">Visit Portal Now</a></p>
 
	<form     method="post"    autocomplete="off" action = "http://'.$_SERVER['HTTP_HOST'].'/requipro/petty-approval.php">
	<input name = "status" value = "1" type = "hidden">
	<input name = "code" value = "'.$code.'" type = "hidden">
	<input name = "comment" value = "'.$comment.'" type = "hidden">
	<input name = "aid" value = "'.$code.'" type = "hidden">
	<input name = "emailing" value = "'.$emailing.'" type = "hidden">
	<button class="button" style = " background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 5px 5px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;" type = "submit" name = "validate">Approve Now</button>
  </form>
  
  
  <form     method="post"    autocomplete="off" action = "http://'.$_SERVER['HTTP_HOST'].'/requipro/petty-approval.php">
	<input name = "status" value = "3" type = "hidden">
	<input name = "code" value = "'.$rand.'" type = "hidden">
	<input name = "comment" value = "'.$comment.'" type = "hidden">
	<input name = "aid" value = "'.$code.'" type = "hidden">
	<input name = "emailing" value = "'.$emailing.'" type = "hidden">
	<button class="button" style = " background-color: #f44336; /* Red */
  border: none;
  color: white;
  padding: 5px 5px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;" type = "submit" name = "validate">Disapprove Now</button>
  </form>
  
   
   
   
   '.$images.'
   
   
   
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

		
		 
$sqlnot ="INSERT INTO `notification`(`code`,`title`,`message`, `registeredby`, `sent_to`, `status`, `read_status`, `created_at`) VALUES
('$code','$subject','$message','$emailing', '$account_number', '1', '1','$datetime')";
     
				
		 	
 mysqli_query($conn, $sqlnot) or die(mysqli_error($conn));		
  
 
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
						 
						 
						 
					 }
					 else if($position == $maxposition)  
					 {
						   
						 
						/* $maxposition = $myName->showName($conn, "SELECT  MAX(`position`) FROM `stake_holder` WHERE `status` = '1'"); 
						 
						 $sqlii = "UPDATE `userfiles` SET  `status` = '4',`status_a` = '1', `stage` = '$maxposition'  WHERE   `group_code` = '$code' or  `filecode` = '$code'";
						 
		 
						 echo '<meta http-equiv="Refresh" content="2; url= send-document.php?code='.$code.'"> '; */
						 
						 
						  $wallet_amount = $myName->showName($conn, "SELECT  `amount` FROM `wallet` WHERE `status` = '1'"); 
	  $demand_amount = $myName->showName($conn, "SELECT  `amount` FROM `userfiles` WHERE `group_code` = '$code'  or  `filecode` = '$code'"); 
	  
	  
	  if($demand_amount > $wallet_amount)
	  {
		 echo'<a href="#"class="btn btn-danger btn-lg">Amount in the wallet is too low.  <br />Please try again later.</a><br />';   
		  
	  }
	  else
	  {
		   $maxposition = $myName->showName($conn, "SELECT  MAX(`position`) FROM `stake_holder` WHERE `status` = '1'"); 
						 
						 $sqlii = "UPDATE `userfiles` SET  `status` = '4',`status_a` = '1', `stage` = '$maxposition'  WHERE   `group_code` = '$code'  or  `filecode` = '$code'";
		  
		  
		  $wallet_amount = $myName->showName($conn, "SELECT  `amount` FROM `wallet` WHERE `status` = '1'"); 
		  
		  $new_amount = $wallet_amount - $demand_amount;
		  
		  
		  
		  
		  
		  
		  
		   $sql_1 = "UPDATE `wallet` SET  `amount` = '$new_amount'  WHERE 1";
		  $sql_1 = mysqli_query($conn, $sql_1) or die(mysqli_error($conn));
		  
		  
						 
		 
						 echo '<meta http-equiv="Refresh" content="2; url= send-document.php?code='.$code.'"> '; 
		  
	  }
	  
	  
	 
						 
						 
						 
						 
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
					 
$registeredby = $myName->showName($conn, "SELECT  `creeated_by` FROM `userfiles`  WHERE   `group_code` = '$code' or  `filecode` = '$code'"); 	
					 
					 
					 
					 
 $sqlii = "UPDATE `userfiles` SET  `status` = '$status'  WHERE   `group_code` = '$code' or  `filecode` = '$code' ";
  $emailAddress = $myName->showName($conn, "SELECT  `email` FROM `user_unit`  WHERE  `email` = '$registeredby' or `phone` = '$registeredby'"); 
 $phone = $myName->showName($conn, "SELECT  `phone` FROM `user_unit`  WHERE  `email` = '$registeredby' or `phone` = '$registeredby'"); 
 $account_number = $myName->showName($conn, "SELECT  `account_number` FROM `user_unit`  WHERE  `email` = '$registeredby' or `phone` = '$registeredby'"); 
					//$link = 'http://apexapps.net/funaab/wallet-fund.php?code='.$code."&call=show";
 $link = 'https://'.$_SERVER['HTTP_HOST'].'/requipro/petty-approval.php?code='.$code."&call=show";
	  
 	 
$message = "New Requisition Uploaded. 
Name:".$name."
Dept. Name:".$department."
Submited By:".$submitted_by."
File Status:".$statusValue."
File Code:".$code;

					 

  $senderID = "LOADME";
  
 
   $Sending = new SendingSMS(); 
  							 //here
							 $Sending->smsAPI($phone,"LOADME",$message); 
					 
			  $message = ' 

<div class="email-background" style="background: #eee;padding: 10px;">
   
  <div class="email-container" style="max-width: 500px;background: white;margin: 0 auto;overflow: hidden;border-radius: 5px;text-align: center;font-family: sans-serif;"> <img src="http://'.$_SERVER['HTTP_HOST'].'/requipro/'.$inst_logo.'"  alt="'.$inst_logo.'"  width="50px" height="50px" style="max-width: 30%;">
	   
    <span style="5px;font-size: 1.5em;">Hi     '.$name.'   </span>
    <span style="padding: 20px;font-size:  1.5em;">  Files Status: '.$statusValue.' </span>
	 <span style="padding: 20px;font-size:  1.5em;"> Comment: '.$comment.' </span>
   
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
					 
	 
						 
$sqlnot ="INSERT INTO `notification`(`code`,`title`,`message`, `registeredby`, `sent_to`, `status`, `read_status`, `created_at`) VALUES
('$code','$subject','$message','$emailing', '$account_number', '1', '1','$datetime')";
     
				
		 	
 mysqli_query($conn, $sqlnot) or die(mysqli_error($conn));			 
					 
				 }
				 
				 
				 
				 
				  if($comment != "")
					 {
						 
	 $sql = "INSERT INTO `wallet_fund_approval_comment`(`comment`, `code`, `aid`, `created_date`, `registeredby`) VALUES
('$comment','$code', '$aid', '$datetime', '$emailing')";
 
 $process = mysqli_query($conn, $sql) or die(mysqli_error($conn));
					  
	 
						 
								 
	 $sql12 = "INSERT INTO `document_comment`(`document_id`, `document_code`, `commenting`, `status`, `created_date`, `registeredby`) VALUES
('$aid','$code','$comment', '1', '$datetime', '$emailing')";
 
 $process = mysqli_query($conn, $sql12) or die(mysqli_error($conn));
					  			 
						 
						 
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
 
	 
 }
$conn->close();
	
 
?>

 