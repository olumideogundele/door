 <?php
 
 include("config/DB_config.php");
$emailing = "";
 
 if(isset($_POST['validate']))
 {
 
 if(isset($_SESSION['email']))
 {
$emailing  = $_SESSION['email'];
 }

 
 
$truck_owners= $_POST['truck_owners'];
//$total_capacity= $_POST['total_capacity'];
$percentage  = $_POST['percentage'];
 
	 
	 
	  
  $extract_user = mysqli_query($conn, "SELECT * FROM `percentage_commission` WHERE `truck_owners` = '$truck_owners'") or die(mysqli_error($conn));
		$count = mysqli_num_rows($extract_user);
		 if ($count > 0) {
	 	  
			 
			 
			 
			 
		 
$sql = 	 "UPDATE `percentage_commission` SET `truck_owners` = '$truck_owners'  ,`percentage` = '$percentage'  , `status` = '1', `created_date` = '$datetime', `registeredby` = '$emailing' WHERE `truck_owners` = '$truck_owners'";
 
 $process = mysqli_query($conn, $sql) or die(mysqli_error($conn));
 
	if ($process) {
		 
 
  echo '<div class="btn btn-success btn-lg">Information Updated Successfully.</a></div><br />'; 	
        
       
		 }else
		 {
 
       echo '<div class="btn btn-success btn-lg">Information Updated Successfully.</a></div><br />'; 	 
    }
             
         }else
    {
 
             
             /*SELECT  `id`, `truck_owners`, `percentage`, `status`, `created_date`, `registeredby` FROM `percentage_commission` WHERE 1*/
             
             
$sql = 	 "INSERT INTO `percentage_commission`(`truck_owners`, `percentage`, `status`, `created_date`, `registeredby` ) VALUES
('$truck_owners', '$percentage', '1', '$datetime', '$emailing')";
 
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

 