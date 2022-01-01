 <?php
 
 include("restricted/config/DB_config.php");
$emailing = "";
 
 if(isset($_POST['send']))
 {
 
 if(isset($_SESSION['email']))
 {
$emailing  = $_SESSION['email'];
 }

 
 
$name= $_POST['name'];
$email  = $_POST['email'];
$comment  = $_POST['comment'];
$truck_owner  = $_POST['truck_owner'];
	 
 
   
        // `id`, `feedback`, `truck_owner`, `registeredby`, `rating`, `status`, `created_at`
    
 
 	 
$sql = 	 "INSERT INTO `feedback`(`feedback`, `truck_owner`, `registeredby`, `rating`, `status`, `created_at`, `name`, `email`) VALUES
('$comment', '$truck_owner', '$emailing', '0', '1', '$datetime','$name', '$email')";
 
 $process = mysqli_query($conn, $sql) or die(mysqli_error($conn));
 
	if ($process) {
		 
 
  echo '<div class="btn btn-success btn-lg">Feedback/Review Submitted Successfully.</a></div><br />'; 	
        
        
         
 
  
} else {
  // echo "Error: " . $sql . "<br>" . $conn->error;
    $error="Not Inserted,Some Problem occured.";
echo'<a href="#"class="btn btn-danger btn-lg">Information Not Submitted Successfully.  <br />Please try again later.</a><br />';  

}

 
		 
 
		
 
 }
 		 
 
 
 
$conn->close();
	
 
?>

 