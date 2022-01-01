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

  $uuid = uniqid('', true).rand(635,83838);
$message =  trim(mysqli_real_escape_string($conn,$_POST['message']));
$title =  mysqli_real_escape_string($conn,$_POST['title']);
	 
 foreach ($_POST['rights'] as $selectedOption)
		{
			 
					 
 $sql ="INSERT INTO `notification`(`code`,`title`,`message`, `registeredby`, `sent_to`, `status`, `read_status`, `created_at`) VALUES
('$uuid','$title','$message','$emailing', '$selectedOption', '1', '1','$datetime')";
 
 $process = mysqli_query($conn, $sql) or die(mysqli_error($conn));
	 
	 $email = $myName->showName($conn, "SELECT  `email` FROM `user_unit` WHERE `account_number` = '$selectedOption'"); 
	 $send_to_name = $myName->showName($conn, "SELECT  `name` FROM `user_unit` WHERE `account_number` = '$selectedOption'"); 
	 $sendername = $myName->showName($conn, "SELECT  `name` FROM `user_unit` WHERE `account_number` = '$emailing'"); 
	 
	 if($email != "")
		{
			
			
		 
		$sendEmail = ' 
		<div class="email-background" style="background: #eee;padding: 10px;">
  
  <div class="email-container" style="max-width: 500px;background: white;margin: 0 auto;overflow: hidden;border-radius: 5px;text-align: center;font-family: sans-serif;">
    <h5 style="padding: 20px;font-size: 1.5em;">Notification sent to you from '.$sendername.'. </h5>
	 <img src="http://'.$_SERVER['HTTP_HOST'].'/'.$inst_logo.'" width="100" height="100" style="max-width: 100%;">
    <p style="padding: 20px;font-weight: 300;font-size: 1.2em;">Hi '.$send_to_name.', you have a new message from  '.$sendername.'  titled '.$title.'. Please login to your dashboard to view the details.  </p>
    <div class="cta" style="padding: 5px;background: #26466D;margin: 0 auto;">
      <p style="padding: 20px;font-weight: 300;font-size: 1.2em;"><a href="http://'.$_SERVER['HTTP_HOST'].'/notification-details.php?value='.$uuid.'" style="text-decoration: none;color: white;">Go to Dashboard for details</a></p>
    </div>


  </div>
  <div class="footer-links" style="max-width: 500px;font-family: sans-serif;margin: 0 auto;overflow: hidden;border-radius: 5px;text-align: center;padding: 20px;"></div>
</div>
';
		
		
		
		
			$newEmail= $inst_email;
	
	
	 					$headers = "From: " .($newEmail) . "\r\n";
                        $headers .= "Reply-To: ".($newEmail) . "\r\n";
                        $headers .= "Return-Path: ".($newEmail) . "\r\n";;
                        $headers .= "MIME-Version: 1.0\r\n";
                        $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
                        $headers .= "X-Priority: 3\r\n";
                        $headers .= "X-Mailer: PHP". phpversion() ."\r\n";
  $emailSend = mail($email,"Notification from ".$sendername,$sendEmail,$headers); 
		
	  
	 
	 }
	 
	 
	 
	 
 
		}
	 
	 
	 if($process)
	 {
		 
		 echo '<div class="btn btn-success btn-lg">Notification Sent Successfully</a></div>'; 	
	 }
	 else
	 {
		 
		 echo '<div class="btn btn-danger btn-lg">Notification not sent successfully. Try again later.</a></div><br />'; 	
		 
	 }
   
	 
			
		 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	  
 
		 
 
		
 
 }
 

 
$conn->close();
	
 
?>

 