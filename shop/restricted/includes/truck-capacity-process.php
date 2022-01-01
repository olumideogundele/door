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
$capacity= $_POST['size'];
//$desc  = $_POST['desc'];
 
	 
	  
  $extract_user = mysqli_query($conn, "SELECT * FROM `truck_capacity` WHERE `truck_type` = '$truck_type' AND `capacity` = '$capacity'") or die(mysqli_error($conn));
		$count = mysqli_num_rows($extract_user);
		 if ($count > 0) {
	 	  
	  
		 
$sql = 	 "UPDATE `truck_capacity` SET `capacity` = '$capacity', `truck_type` = '$truck_type'  , `status` = '1', `created_date` = '$datetime', `registeredby` = '$emailing' WHERE `capacity` = '$truck_type'";
 
 $process = mysqli_query($conn, $sql) or die(mysqli_error($conn));
 
	if ($process) {
		 
 
  echo '<div class="btn btn-success btn-lg">Information Updated Successfully.</a></div><br />'; 	
        
     
 
		 }else
		 {
 
       echo '<div class="btn btn-success btn-lg">Information Updated Successfully.</a></div><br />'; 	 
    }
             
         }else
    {
        
 
 	 
$sql = 	 "INSERT INTO `truck_capacity`(`truck_type`, `capacity`, `status`, `created_date`, `registeredby` ) VALUES
('$truck_type', '$capacity', '1', '$datetime', '$emailing')";
 
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

 