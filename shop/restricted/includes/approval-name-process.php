 <?php
 
 include("config/DB_config.php");
$email = "";
  $process = false;
 if(isset($_POST['validate']))
 {
 
 if(isset($_SESSION['email']))
 {
$email  = $_SESSION['email'];
 }
 
	
 $naming =  $_POST['naming'] ;
$positioning =  $_POST['position'] ;
$mda =  $_POST['mda'] ;

 $extract_user = mysqli_query($conn, "DELETE FROM `sh_position`  WHERE (`mda` = '$mda')") or die(mysqli_error($conn)); 

foreach( $naming as $key => $n ) {
 
	
	 
 
$name= $naming[$key];
$status  = 1;
	 $position  = $positioning[$key];
 
  $extract_user = mysqli_query($conn, "SELECT * FROM `sh_position` WHERE  (`name` = '$name')  AND (`mda` = '$mda')") or die(mysqli_error($conn));
		$count = mysqli_num_rows($extract_user);
		 if ($count > 0) {
	 	 
	echo'<a href="#" class="btn btn-danger btn-lg">Information in the  database already.  <br />Please check and try again later.</a><br />';


	
 
		 }else
		 {
 
 
 	 
$sql = 	 "INSERT INTO `sh_position`(`name`, `position`, `status`, `created_date`, `registeredby`, `mda` ) VALUES
('$name', '$position', '$status', '$datetime', '$email', '$mda')";
 
 $process = mysqli_query($conn, $sql) or die(mysqli_error($conn));
 
	
		 
 
		
 
 }
	
	
	
	
	
}
	
	 
	 
	 if ($process) {
		 
 
  echo '<div class="btn btn-success btn-lg">Information Submitted Successfully.</a></div><br />'; 	
  
 
  
  
   
} else {
  // echo "Error: " . $sql . "<br>" . $conn->error;
    $error="Not Inserted,Some Problem occured.";
echo'<a href="#"class="btn btn-danger btn-lg">Information Not Submitted Successfully.  <br />Please try again later.</a><br />';  

}

	 
	 
	
 		 
 }

 
 
$conn->close();
	
 
?>

 