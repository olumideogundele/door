 <?php
 
 include("config/DB_config.php");

 
 if(isset($_POST['validate']))
 {
 
 if(isset($_SESSION['email']))
 {
$email  = $_SESSION['email'];
 }

  
$name= $_POST['name'];
	 $super= $_POST['super'];
	 $url= $_POST['url'];
$status  = $_POST['status'];
	 $icon = $_POST['icon'];
	 $desc_text = $_POST['desc'];
 
  $extract_user = mysqli_query($conn, "SELECT * FROM `menu` WHERE  (`name` = '$name')") or die(mysqli_error($conn));
		$count = mysqli_num_rows($extract_user);
		 if ($count > 0) {
	 	 
	echo'<a href="#" class="btn btn-danger btn-lg">Information in the  database already.  <br />Please check and try again later.</a><br />';


	
 
		 }else
		 {
 
 
 	 
$sql = "INSERT INTO `menu`(`name`, `url`, `super_menu`, `status`, `created_date`, `registeredby`, `icon`, `desc_text`) VALUES
('$name', '$url', '$super', '$status','$datetime','$email', '$icon', '$desc_text')";
 
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

 