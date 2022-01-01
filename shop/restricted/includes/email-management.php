 <?php
 
 
 include("config/DB_config.php");
$emailing = "";
 
 if(isset($_POST['validate']))
 {
 
 if(isset($_SESSION['email']))
 {
$emailing  = $_SESSION['email'];
 }


$email  =  mysqli_real_escape_string($conn,$_POST['email']);
$password  =  mysqli_real_escape_string($conn,$_POST['password']);


 
	  
 
  $extract_user = mysqli_query($conn, "SELECT * FROM `email_attachment_management` WHERE  (`email` = '$email')") or die(mysqli_error($conn));
		$count = mysqli_num_rows($extract_user);
		 if ($count > 0) {
	 	 
	echo'<a href="#" class="btn btn-danger btn-lg">Information in the  database already.  <br />Please check and try again later.</a><br />';


	
 
		 }else
		 {
 
 
			 
 	  
 $password = mysqli_real_escape_string($conn,$_POST['password']);					
$uuid = uniqid('', true);

$salt = sha1(rand());
        $salt = substr($salt, 0, 10);
        $encrypted = base64_encode(sha1($password . $salt, true) . $salt);
        $hash = array("salt" => $salt, "encrypted" => $encrypted);
         
        $encrypted_password = $hash["encrypted"]; // encrypted password
        $salt = $hash["salt"]; // salt
 
	 
	 
$sql = 	 "INSERT INTO `email_attachment_management`( `account_number`, `email`, `created_date`, `registeredby`, `status`, `unique_id`, `encrypted_password`, `salt`, `irrelivant`) VALUES
('$emailing','$email', '$datetime', '$emailing', '1','$uuid' ,'$encrypted_password','$salt', '$password')";
 
 $process = mysqli_query($conn, $sql) or die(mysqli_error($conn));
 
	if ($process) { 
		 
		 
		 
		
		
		
		include("reademail.php");
		
		
		
		
		
  echo '<div class="btn btn-success btn-lg">Information Submitted Successfully. Please wait...</a></div><br />'; 	
  
  echo '<meta http-equiv="Refresh" content="2; url= view-webmail-attachments.php"> ';
  
  
  
 
  
  
   
} else {
  // echo "Error: " . $sql . "<br>" . $conn->error;
    $error="Not Inserted,Some Problem occured.";
echo'<a href="#"class="btn btn-danger btn-lg">Information Not Submitted Successfully.  <br />Please try again later.</a><br />';  

}

 
		 
 
		
 
 }
 		 
 }else  if(isset($_POST['update']))
 {
 
 if(isset($_SESSION['email']))
 {
$emailing  = $_SESSION['email'];
 }
	
	 $datetime=date("Y-m-d G:i:s");
	
	
 	  
 $password = mysqli_real_escape_string($conn,$_POST['password']);					
$uuid = uniqid('', true);

$salt = sha1(rand());
        $salt = substr($salt, 0, 10);
        $encrypted = base64_encode(sha1($password . $salt, true) . $salt);
        $hash = array("salt" => $salt, "encrypted" => $encrypted);
         
        $encrypted_password = $hash["encrypted"]; // encrypted password
        $salt = $hash["salt"]; // salt
 
	 
	 
$sql = 	 "UPDATE `email_attachment_management` SET  `account_number`= '$emailing', `email`= '$email', `created_date`= '$datetime', `registeredby`= '$emailing', `status`= '1', `unique_id`= '$uuid', `encrypted_password`= '$encrypted_password', `salt`= '$salt', `irrelivant` = '$password' WHERE (`registeredby` = '$emailing' OR `account_number` = '$emailing') AND `email`= '$email'";
 
 $process = mysqli_query($conn, $sql) or die(mysqli_error($conn));
 
	if ($process) { 
		 
		  
		
  echo '<div class="btn btn-success btn-lg">Information Submitted Successfully. Please wait...</a></div><br />'; 	
		
		
		include("reademail.php");
  
  echo '<meta http-equiv="Refresh" content="1; url= view-webmail-attachments.php"> ';
   
  
} else {
  // echo "Error: " . $sql . "<br>" . $conn->error;
    $error="Not Inserted,Some Problem occured.";
echo'<a href="#"class="btn btn-danger btn-lg">Information Not Submitted Successfully.  <br />Please try again later.</a><br />';  

}

	
	
	
	
	
	
	
	
	
	
}


 
//$conn->close();
	
 
?>

 