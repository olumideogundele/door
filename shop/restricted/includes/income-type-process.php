 <?php
 
 include("config/DB_config.php");

 
 if(isset($_POST['validate']))
 {
 
 if(isset($_SESSION['email']))
 {
$email  = $_SESSION['email'];
 }

  
$name= $_POST['name'];
	 
$status  = $_POST['status'];
$super_category  = $_POST['super_category'];
$category  = $_POST['category'];
$code  = $_POST['code'];
	 
	 $desc_text = $_POST['desc'];
  //$image = basename($_FILES["picture"]["name"]);
	 
	 
  $extract_user = mysqli_query($conn, "SELECT * FROM `income_types` WHERE  (`name` = '$name')") or die(mysqli_error($conn));
		$count = mysqli_num_rows($extract_user);
		 if ($count > 0) {
	 	 
	echo'<a href="#" class="btn btn-danger btn-lg">Information in the  database already.  <br />Please check and try again later.</a><br />';


	
 
		 }else
		 {
 
 
 	 
$sql = "INSERT INTO `income_types`(`name`, `status`, `created_date`, `registeredby`, `code`, `desc_text`, `super_category`, `category`) VALUES
('$name', '$status','$datetime','$email', '$code', '$desc_text', '$super_category', '$category')";
 
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

 