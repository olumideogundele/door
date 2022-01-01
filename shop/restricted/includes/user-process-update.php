 <?php
 
 include("config/DB_config.php");
$emailing = "";
 
  if(isset($_POST['update']))
 {
 
 if(isset($_SESSION['email']))
 {
$emailing  = $_SESSION['email'];
 }
	
	 $datetime=date("Y-m-d G:i:s");
	
	

$name  =  mysqli_real_escape_string($conn,$_POST['name']);
$phone  =  mysqli_real_escape_string($conn,$_POST['phone']);
$email  =  mysqli_real_escape_string($conn,$_POST['email']);
$address  =  mysqli_real_escape_string($conn,$_POST['address']);
	 $password = mysqli_real_escape_string($conn,$_POST['password']);
	 $password2 = mysqli_real_escape_string($conn,$_POST['password2']);
 
  
 if($password != $password2)
 {
	 
	echo'<a href="#"class="btn btn-danger btn-lg">Password supplied are not the same.  <br />Please check try again later.</a><br />';  
 
 }
	  else
	  {
	 
	 			 
 	  
 				
$uuid = uniqid('', true);

$salt = sha1(rand());
        $salt = substr($salt, 0, 10);
        $encrypted = base64_encode(sha1($password . $salt, true) . $salt);
        $hash = array("salt" => $salt, "encrypted" => $encrypted);
         
        $encrypted_password = $hash["encrypted"]; // encrypted password
        $salt = $hash["salt"]; // salt
 
	 
 
	 
	 
$sql = 	 "UPDATE `user_unit` SET  `name`='$name',`phone`='$phone', `email`='$email', `address`='$address', `created_date`='$datetime', `registeredby`='$emailing', `unique_id`='$uuid', `encrypted_password`='$encrypted_password', `salt`='$salt', `irrelivant`='$password'    WHERE `account_number` = '$emailing' ";
 
 $process = mysqli_query($conn, $sql) or die(mysqli_error($conn));
 
	if ($process) {
		 
 
  echo '<div class="btn btn-success btn-lg">Information Updated Successfully. Thanks You.</a></div><br />'; 	
  
 
  
 
  
  
   
} else {
  // echo "Error: " . $sql . "<br>" . $conn->error;
    $error="Not Inserted,Some Problem occured.";
echo'<a href="#"class="btn btn-danger btn-lg">Information Not Submitted Successfully.  <br />Please try again later.</a><br />';  

}
	
	
	
	
	
	
	
	
	}
	
	
	
	
}


 
$conn->close();
	
 
?>

 