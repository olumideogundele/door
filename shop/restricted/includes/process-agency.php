 <?php
 
 include("config/DB_config.php");
$emailing = "";
 
 if(isset($_POST['validate']))
 {
 
 if(isset($_SESSION['email']))
 {
$emailing  = $_SESSION['email'];
 }

  
 
$ministry=  mysqli_real_escape_string($conn,$_POST['ministry']);
	 $name=  mysqli_real_escape_string($conn,$_POST['name']);

 
	 $status=  mysqli_real_escape_string($conn,$_POST['status']);
 
 /*SELECT * FROM `agency` WHERE 1

`id`, `crop_type`, `crop_age`, `amount`, `registeredby`, `status`, `created_date`*/
  $extract_user = mysqli_query($conn, "SELECT * FROM `agency` WHERE `name` = '$name' and `ministry` = '$ministry'") or die(mysqli_error($conn));
		$count = mysqli_num_rows($extract_user);
		 if ($count > 0) {

			 echo '<div class="btn btn-danger btn-lg">Information in the database Already.</a></div><br />'; 
			 
 
		 }else
		 {
 /*SELECT * FROM `agency` WHERE 1
`id`, `ministry`, `name`, `registeredby`, `status`, `created_date`*/
 
 	 
$sql = 	 "INSERT INTO `agency`(`ministry`, `name`, `registeredby`, `status`, `created_date`) VALUES
('$ministry',  '$name', '$emailing' ,  '$status', '$datetime')";
 
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

 