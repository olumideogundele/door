 <?php
 
 include("config/DB_config.php");
$emailing = "";
 
 if(isset($_POST['validate']))
 {
 
 if(isset($_SESSION['email']))
 {
$emailing  = $_SESSION['email'];
 }

 
 
 
$negotiate= $_POST['negotiate'];
$percentage  = $_POST['percentage'];
$truck  = $_POST['truck'];
 
	
	 
	  
  $extract_user = mysqli_query($conn, "SELECT * FROM `negotiation_criterai` WHERE `registeredby` = '$emailing' AND `truck` = '$truck'") or die(mysqli_error($conn));
		$count = mysqli_num_rows($extract_user);
		 if ($count > 0) {
 
$sql = 	 "UPDATE `negotiation_criterai` SET `percentage` = '$percentage'  , `negotiate` = '$negotiate' , `truck` = '$truck', `created_date` = '$datetime', `registeredby` = '$emailing' WHERE `registeredby` = '$emailing'";
 
 $process = mysqli_query($conn, $sql) or die(mysqli_error($conn));
 
	if ($process) {
		 
 
  echo '<div class="btn btn-success btn-lg">Information Updated Successfully.</a></div><br />'; 	
        
       
		 }else
		 {
 
       echo '<div class="btn btn-success btn-lg">Information Updated Successfully.</a></div><br />'; 	 
    }
             
         }else
    {
 
              /*SELECT  `id`, `negotiate`, `percentage`, `status`, `created_date`, `registeredby` FROM `negotiation_criterai` WHERE 1*/
             
             
$sql = 	 "INSERT INTO `negotiation_criterai`(`negotiate`, `percentage`, `status`, `created_date`, `registeredby`, `truck`)  VALUES
('$negotiate', '$percentage', '1', '$datetime', '$emailing', '$truck')";
 
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

 