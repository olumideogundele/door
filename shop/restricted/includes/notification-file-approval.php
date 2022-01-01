<?php
 
$myName = new Name();
 $usertype = "";
	 
	 if(isset($_SESSION['usertype'] ))
	 {
	 $usertype = $_SESSION['usertype']; 
	 }
$phone  = "";
 

if(isset($_SESSION['rand']) and isset($_GET['complete']))
 {
	
	
	
$ministry= $_SESSION['registry'] ;
$filename =$_SESSION['name'] ;
$from =$_SESSION['from'] ;
$rand = $_SESSION['rand'];
	include ("config/DB_config.php"); 
 $approval_value = $myName->showName($conn, "SELECT  `approval` FROM `approval` WHERE `status` = 1 AND `mda` = '$ministry'"); 
	 
	
$approval_value_2 = $myName->showName($conn, "SELECT  `approval` FROM `userfiles` WHERE `status` = 1 AND (`group_code` = '$rand' or `filecode` = '$rand')"); 
	
	
	
	
	
if($approval_value == "Yes" and $approval_value_2 == 1)
{
	include ("config/DB_config.php"); 
	 $query =  "SELECT  `id`, `name`, `phone`, `email` FROM `stake_holder` WHERE `status` = 1 AND `position` = 1 AND `mda` = '$ministry'";	
 
 
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
		
		$link = 'https://'.$_SERVER['HTTP_HOST'].'/requipro/approval.php?code='.$rand;
		 include ("config/DB_config.php"); 
	  $department = $myName->showName($conn, "SELECT  `name`  FROM `mda`  WHERE `id` = '$ministry'"); 
   $message12 = "New Requisition Uploaded. 
Requisition Name:".$filename."
Department Name:".$department."
File From:".$from."
Date:".$datetime."
Code:".$rand."
Click:".$link;   


 
  $senderID = "Doc-Pro";
  
 
   $Sending = new SendingSMS(); 
  							 
$smsSent = $Sending->smsAPI($phone,$senderID,$message12);
		
		
		
		
		
		
		 
		  $message = ' 

<div class="email-background" style="background: #eee;padding: 10px;">
   
  <div class="email-container" style="max-width: 500px;background: white;margin: 0 auto;overflow: hidden;border-radius: 5px;text-align: center;font-family: sans-serif;"> <img src="http://'.$_SERVER['HTTP_HOST'].'/requipro/'.$inst_logo.'"  alt="'.$inst_logo.'" width="407" height="30%" style="max-width: 30%;">
	   
    <h3 style="padding: 10px;font-size: 1.5em;">Hi '.$name.',   </h1>
    <h3 style="padding: 20px;font-size: 2.5em;">'.$filename.' Files Uploaded and needs approval. <br>
File From: '.$from.'</h3>
   
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
		 
 
 


$to      = $email;              
 $subject  ="Requisition Approval Notification";   
$newEmail    ="info@payall.ng";                         

 

							  
	
	 					$headers = "From: " .($newEmail) . "\r\n";
                        $headers .= "Reply-To: ".($newEmail) . "\r\n";
                        $headers .= "Return-Path: ".($newEmail) . "\r\n";;
                        $headers .= "MIME-Version: 1.0\r\n";
                        $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
                        $headers .= "X-Priority: 3\r\n";
                        $headers .= "X-Mailer: PHP". phpversion() ."\r\n";
 //$emailSend = mail($email,$subject,$message,$headers); 						  
			
 		  
					  if($emailSend)
					  {
						  //echo '<div class="btn btn-success btn-lg">Files Uploaded Successfully.</a></div><br />'; 
						  //echo "sms sent";
					  }
		 
		 
		 
		 else
		 {
			 //echo '<div class="btn btn-success btn-lg">Files Uploaded Successfully. Thank You.</a></div><br />'; 
			 						 // echo '<div class="btn btn-danger btn-lg">Notification Not Sent.</a></div><br />'; 
			 //echo "sms not sent";
		 }
							  
							  
	}
		  }
 
 
  	}
	else
	{
		
		
		  //echo '<div class="btn btn-success btn-lg">Files Uploaded Successfully...</a></div><br />'; 
	}
	
	
	
	 echo '<div class="btn btn-success btn-lg">Files Uploaded Successfully. Thank You.</a></div><br />'; 
	
	
	// $Sending = new SendingSMS(); 
							//$Sending->smsAPI($phone ,"LOADME",$message12);
	
	
	$_SESSION['rand'] = "";
	unset($_SESSION['rand']);
} 


?>