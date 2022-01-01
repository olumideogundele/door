 <?php
 
 include("config/DB_config.php");
$emailing = "";
 
 if(isset($_POST['validate']))
 {
 
 if(isset($_SESSION['email']))
 {
$emailing  = $_SESSION['email'];
 }

 
 
$truck_type= $_POST['truck_type'];
$total_capacity= $_POST['total_capacity'];
$amount  = $_POST['amount'];
 
	 /*SELECT  `id`, `truck_type`, `capacity`, `amount`, `status`, `created_date`, `registeredby` FROM `base_fare` WHERE 1*/
	 
	  
  $extract_user = mysqli_query($conn, "SELECT * FROM `base_fare` WHERE `truck_type` = '$truck_type' AND `capacity` = '$total_capacity' AND `registeredby` = '$emailing'") or die(mysqli_error($conn));
		$count = mysqli_num_rows($extract_user);
		 if ($count > 0) {
	 	  
			 
			 
			 
			 
		 
$sql = 	 "UPDATE `base_fare` SET `amount` = '$amount'  , `status` = '1', `created_date` = '$datetime', `registeredby` = '$emailing' WHERE `truck_type` = '$truck_type' AND `capacity` = '$total_capacity' AND `registeredby` = '$emailing'";
 
 $process = mysqli_query($conn, $sql) or die(mysqli_error($conn));
 
	if ($process) {
		 
 
  echo '<div class="btn btn-success btn-lg">Information Updated Successfully.</a></div><br />'; 	
        
       
		 }else
		 {
 
       echo '<div class="btn btn-success btn-lg">Information Updated Successfully.</a></div><br />'; 	 
    }
             
         }else
    {
 
$sql = 	 "INSERT INTO `base_fare`(`truck_type`, `capacity`, `amount`, `status`, `created_date`, `registeredby`) VALUES
('$truck_type', '$total_capacity','$amount', '1', '$datetime', '$emailing')";
 
 $process = mysqli_query($conn, $sql) or die(mysqli_error($conn));
 
	if ($process) {
		 
 
  echo '<div class="btn btn-success btn-lg">Information Submitted Successfully.</a></div><br />'; 	
        
        
        
 
  
} else {
  // echo "Error: " . $sql . "<br>" . $conn->error;
    $error="Not Inserted,Some Problem occured.";
echo'<a href="#"class="btn btn-danger btn-lg">Information Not Submitted Successfully.  <br />Please try again later.</a><br />';  

}

 
		 
 
		
 
 }
 		 
 }
 
 
$conn->close();
	
 
?>

 