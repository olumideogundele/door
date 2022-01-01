 <?php
 
 include("config/DB_config.php");

 
 if(isset($_POST['validate']))
 {
 
 if(isset($_SESSION['email']))
 {
$email  = $_SESSION['email'];
 }

	 
	 $expense_type  = $_POST['expense_type'];
	 $number  = $_POST['number'];
	 
	 
  


	 for($i = 1; $i <= $number; $i++)
												{
													 $name = $_POST[$i];
		 if($name != "")
		 {
			 
		
			 
  $extract_user = mysqli_query($conn, "SELECT * FROM `types_sub` WHERE  (`name` = '$name')") or die(mysqli_error($conn));
		$count = mysqli_num_rows($extract_user);
		 if ($count > 0) {
	 	 
	echo'<a href="#" class="btn btn-danger btn-lg">Information in the  database already for '.$name.'.  <br />Please check and try again later.</a><br />';


	
 
		 }else
		 {
 
 
 	 
$sql = "INSERT INTO `types_sub`(`name`, `status`, `created_date`, `registeredby`, `expenses_type`) VALUES
('$name', '1','$datetime','$email', '$expense_type')";
 
 $process = mysqli_query($conn, $sql) or die(mysqli_error($conn));
 
	if ($process) {
		 
  $last_id = $conn->insert_id;
  echo '<div class="btn btn-success btn-lg"> '.$name.' Information Submitted Successfully.</a></div><br />'; 	
		
		
	
  
 
  
  
   
} else {
  // echo "Error: " . $sql . "<br>" . $conn->error;
    $error="Not Inserted,Some Problem occured.";
echo'<a href="#"class="btn btn-danger btn-lg">Information Not Submitted Successfully.  <br />Please try again later.</a><br />';  

}

 
		 
 
		
 
 }
			 
			 
			 
		 }
		
												}
	 
	 

	
 }

 
$conn->close();
	
 
?>

 