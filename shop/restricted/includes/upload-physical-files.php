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

 
$ministry = $_POST['registry'];
 
 $registry  =    mysqli_real_escape_string($conn,$_POST['registry']);
$from  =    mysqli_real_escape_string($conn,$_POST['from']);
$name  =    mysqli_real_escape_string($conn,$_POST['name']);
 
  
  $extract_user = mysqli_query($conn, "SELECT * FROM `userfiles` WHERE `registry` = '$registry' and `name` = '$name'") or die(mysqli_error($conn));
		$count = mysqli_num_rows($extract_user);
		 if ($count > 0) {

			 echo '<div class="btn btn-danger btn-lg">Information in the database Already.</a></div><br />'; 
			 
 		 }else
		 {
 
			 $approval_value = $myName->showName($conn, "SELECT  `approval` FROM `approval` WHERE `status` = 1"); 
 

	
		


$status_value = 1;


if($approval_value == "Yes")
{
	$status_value = 0;
	
}
		$rand = date("YmdGis")."/".rand(28736, 8735673);	 
			 
 
 $query = "INSERT INTO `userfiles`(`filepath`, `filename`,`registry`, `name`,`file_type`, `created_date`, `creeated_by`, `status`,`filesize`,`filecode`,`submitted_by`) VALUES('-','".$name."','".$registry."','".$name."', 'physical', '$datetime','$emailing', '$status_value', '0', '$rand', '$from')";
 $process = mysqli_query($conn, $query) or die("Error Occured: ".mysqli_error($conn));	 
			 
			 
			//$query = "INSERT INTO `userfiles`(`filename`,`registry`, `name`) VALUES('".$name."','".$registry."','".$name."')"; 
			 
			 
			 $process = mysqli_query($conn, $query) or die(mysqli_error($conn));
			 
			 
			 
 
	if ($process) {
		 
 
  echo '<div class="btn btn-success btn-lg">Information Submitted Successfully.</a></div><br />'; 
		
		
		
		 $approval_value = $myName->showName($conn, "SELECT  `approval` FROM `approval` WHERE `status` = 1"); 
if($approval_value == "Yes")
{
	include ("config/DB_config.php"); 
	 $query =  "SELECT  `id`, `name`, `phone`, `email` FROM `stake_holder` WHERE `status` = 1 AND `position` = 1";	
 
 
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
/*  $message = "New Requisition Uploaded. 
Name:".$name."
Department Name:".$department."
Date:".$datetime."
Code:".$rand."
Click:".$link;  */
		 $message = "New Requisition Uploaded. 
Name:".$name."
Department Name:".$department."
Date:".$datetime."
File Code:".$rand;

 
  $senderID = "-requipro-";
  
 
   $Sending = new SendingSMS();$Sending->smsAPI($phone,$senderID,$message);
		
		
		
			$_SESSION['sms'] = 1;	
		
		
		 
		  $message = ' 

<div class="email-background" style="background: #eee;padding: 10px;">
   
  <div class="email-container" style="max-width: 500px;background: white;margin: 0 auto;overflow: hidden;border-radius: 5px;text-align: center;font-family: sans-serif;"> <img src="http://'.$_SERVER['HTTP_HOST'].'/requipro/'.$inst_logo.'"  alt="'.$inst_logo.'" width="407" height="30%" style="max-width: 30%;">
	   
    <h1 style="5px;font-size: 2.0em;">Hi     '.$name.'   </h1>
    <h1 style="padding: 20px;font-size: 2.5em;">'.$name.' Files Uploaded and needs approval. </h1>
   
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
		 
 
 


$to      = $email;              
 $subject  = "Doc Approval Notification";   
$newEmail    ="info@payall.ng";                         

 

							  
	
	 					$headers = "From: " .($newEmail) . "\r\n";
                        $headers .= "Reply-To: ".($newEmail) . "\r\n";
                        $headers .= "Return-Path: ".($newEmail) . "\r\n";;
                        $headers .= "MIME-Version: 1.0\r\n";
                        $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
                        $headers .= "X-Priority: 3\r\n";
                        $headers .= "X-Mailer: PHP". phpversion() ."\r\n";
 $emailSend = mail($email,$subject,$message,$headers); 						  
			
 		  
					  
							  
							  
	}
		  }
 
 
  	}	
		
		
   
   
} else {
  // echo "Error: " . $sql . "<br>" . $conn->error;
    $error="Not Inserted,Some Problem occured.";
echo'<a href="#"class="btn btn-danger btn-lg">Information Not Submitted Successfully.  <br />Please try again later.</a><br />';  

}

 
		 
 
		
 
	}}
 

 
$conn->close();
	
 
?>

 