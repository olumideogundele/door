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
	 $icon = $_POST['icon'];
	 $desc_text = $_POST['desc'];
 
  $extract_user = mysqli_query($conn, "SELECT * FROM `types` WHERE  (`name` = '$name')") or die(mysqli_error($conn));
		$count = mysqli_num_rows($extract_user);
		 if ($count > 0) {
	 	 
	echo'<a href="#" class="btn btn-danger btn-lg">Information in the  database already.  <br />Please check and try again later.</a><br />';


	
 
		 }else
		 {
 
 
 	 
$sql = "INSERT INTO `types`(`name`, `status`, `created_date`, `registeredby`, `icon`, `desc_text`) VALUES
('$name', '$status','$datetime','$email', '$icon', '$desc_text')";
 
 $process = mysqli_query($conn, $sql) or die(mysqli_error($conn));
 
	if ($process) {
		 
  $last_id = $conn->insert_id;
  echo '<div class="btn btn-success btn-lg">Information Submitted Successfully. Please wait.</a></div><br />'; 	
		
		
		echo '<meta http-equiv="Refresh" content="1; url= requisition-sub-category-type?value='.$icon.'&code='.$last_id.'"> ';
  
 
  
  
   
} else {
  // echo "Error: " . $sql . "<br>" . $conn->error;
    $error="Not Inserted,Some Problem occured.";
echo'<a href="#"class="btn btn-danger btn-lg">Information Not Submitted Successfully.  <br />Please try again later.</a><br />';  

}

 
		 
 
		
 
 }
 		 
 }

 
$conn->close();
	
 
?>

 