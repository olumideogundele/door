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
	 
  
	 /*SELECT  `id`, `super_category`, `code`, `name`, `desc`, `status`, `created_date`, `registeredby` FROM `income_category` WHERE 1*/
	 
	 
	 
	 
	 
  $extract_user = mysqli_query($conn, "SELECT * FROM `income_category` WHERE  (`name` = '$name' OR `code` = '$code')") or die(mysqli_error($conn));
		$count = mysqli_num_rows($extract_user);
		 if ($count > 0) {
	 	 
	echo'<a href="#" class="btn btn-danger btn-lg">Information in the  database already.  <br />Please check and try again later.</a><br />';


	
 
		 }else
		 {
 
 
 	 
 
			 
			 

$sql = "INSERT INTO `types`(`name`, `status`, `created_date`, `registeredby`, `icon`, `desc_text`,`code` ) VALUES
('$name', '$status','$datetime','$email', '$icon', '$desc_text','$code')";
 			 
			 
 
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

 