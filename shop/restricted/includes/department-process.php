 <?php
 
 include("config/DB_config.php");
$emailing = "";
 
 if(isset($_POST['validate']))
 {
 
 if(isset($_SESSION['email']))
 {
$emailing  = $_SESSION['email'];
 }

  
 $registry=  mysqli_real_escape_string($conn,$_POST['registry']);
$name=  mysqli_real_escape_string($conn,$_POST['name']);
	 $status=  mysqli_real_escape_string($conn,$_POST['status']);
	 $information = mysqli_real_escape_string($conn,$_POST['information']);
 
 
  $extract_user = mysqli_query($conn, "SELECT *  FROM `mda`  WHERE  `name` = '$name'") or die(mysqli_error($conn));
		$count = mysqli_num_rows($extract_user);
		 if ($count > 0) {
	 	 //ip` VARCHAR(30) NULL AFTER `registeredby`, ADD `port` 
		 
$sql = 	 "UPDATE `mda` SET  `registry` = '$registry',`name` = '$name', `information` = '$information', `status` = '$status', `created_date` = '$datetime', `registeredby` = '$emailing'  WHERE `name` = '$name'";
  
			 
			 
 $process = mysqli_query($conn, $sql) or die(mysqli_error($conn));
 
	if ($process) {
		 
 
  echo '<div class="btn btn-success btn-lg">Information Updated Successfully.</a></div><br />'; 	
 
		 }
		 }else
		 {
 
 
 	 
$sql = 	 "INSERT INTO `mda`(`registry` ,`name` ,`information` , `status`, `created_date`, `registeredby`) VALUES
('$registry','$name',  '$information',  '$status', '$datetime', '$emailing')";
 
 $process = mysqli_query($conn, $sql) or die(mysqli_error($conn));
 
	if ($process) {
		 
 
  echo '<div class="btn btn-success btn-lg">Information Submitted Successfully.</a></div><br />'; 	
   
   
} else {
  // echo "Error: " . $sql . "<br>" . $conn->error;
    $error="Not Inserted,Some Problem occured.";
echo'<a href="#"class="btn btn-danger btn-lg">Information Not Submitted Successfully.  <br />Please try again later.</a><br />';  

}

 
		 
 
		
 
	}}
 

 
$conn->close();
	
 
?>

 