 <?php
 
 include("config/DB_config.php");

 
 if(isset($_POST['validate']))
 {
 $emailing = "";
 if(isset($_SESSION['email']))
 {
$emailing  = $_SESSION['email'];
 }

  
$name= $_POST['name'];
	 
$status  = $_POST['status'];
	 
	 $desc_text = $_POST['desc'];
	 $code = $_POST['code'];
	 $category = $_POST['category'];
  
	 
	 
	 
	 
	 
	 
  $extract_user = mysqli_query($conn, "SELECT * FROM `income_category` WHERE  (`name` = '$name' OR `code` = '$code')") or die(mysqli_error($conn));
		$count = mysqli_num_rows($extract_user);
		 if ($count > 0) {
	 	 
	echo'<a href="#" class="btn btn-danger btn-lg">Information in the  database already.  <br />Please check and try again later.</a><br />';


	
 
		 }else
		 {
 
 $sql = "INSERT INTO `types_sub`(`name`,`code`, `status`, `created_date`, `registeredby`, `expenses_type`) VALUES
('$name', '$code','1','$datetime','$email', '$category')";
 
 $process = mysqli_query($conn, $sql) or die(mysqli_error($conn));
 	 
 
	if ($process) {
		 
 $last_id = $conn->insert_id;
  echo '<div class="btn btn-success btn-lg">Information Submitted Successfully. Please wait.</a></div><br />'; 	
  
 
  
  
   
} else {
  // echo "Error: " . $sql . "<br>" . $conn->error;
    $error="Not Inserted,Some Problem occured.";
echo'<a href="#"class="btn btn-danger btn-lg">Information Not Submitted Successfully.  <br />Please try again later.</a><br />';  

}

 
		 
 
		
 
 }
 		 
 }

 
$conn->close();
	
 
?>

 