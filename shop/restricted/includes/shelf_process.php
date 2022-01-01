 <?php
 
 include("config/DB_config.php");
$emailing = "";
 
 if(isset($_POST['validate']))
 {
 
 if(isset($_SESSION['email']))
 {
$emailing  = $_SESSION['email'];
 }

  
 $wait = "";
$ministry=  mysqli_real_escape_string($conn,$_POST['mda']);
 
	 $name=  mysqli_real_escape_string($conn,$_POST['name']);
	 $cell=  mysqli_real_escape_string($conn,$_POST['cell']);
	 $autoname=  mysqli_real_escape_string($conn,$_POST['autoname']);

 
	 $status=  mysqli_real_escape_string($conn,$_POST['status']);
 
  $extract_user = mysqli_query($conn, "SELECT * FROM `shelf` WHERE `name` = '$name' and `ministry` = '$ministry'") or die(mysqli_error($conn));
		$count = mysqli_num_rows($extract_user);
		 if ($count > 0) {

			 echo '<div class="btn btn-danger btn-lg">Information in the database Already.</a></div><br />'; 
			 
 		 }else
		 {
 
 
 	 
$sql = 	 "INSERT INTO `shelf`(`ministry`, `name`, `cell`, `registeredby`, `status`, `created_date`) VALUES
('$ministry',    '$name', '$cell', '$emailing' ,  '$status', '$datetime')";
 
 $process = mysqli_query($conn, $sql) or die(mysqli_error($conn));
 
	if ($process) {
		 
		$last_id = $conn->insert_id;
		$_SESSION["self_last_id"] = $last_id;
		$_SESSION["row_number"] = $cell;
		$_SESSION["mda"] = $ministry;
		
		if($autoname == "1")
		{
				
		for($a = 1; $a <= $cell; $a++)
		{
			$cell_name = $name."-".$a;
			$sql = 	 "INSERT INTO `shelf_cells`(`ministry`,  `shelf`, `cell_name`,  `registeredby`, `status`, `created_date`) VALUES
('$ministry',   '$last_id', '$cell_name',  '$emailing' ,  '$status', '$datetime')";
 
 $process = mysqli_query($conn, $sql) or die(mysqli_error($conn));
		}
		
			
		}
		else{
			
			echo '<meta http-equiv="Refresh" content="0; url= cells-naming.php"> ';
			$wait = "Please wait...";
			
		}
	
		
 
  echo '<div class="btn btn-success btn-lg">Information Submitted Successfully. '.$wait.'</a></div><br />'; 	
   
   
} else {
  // echo "Error: " . $sql . "<br>" . $conn->error;
    $error="Not Inserted,Some Problem occured.";
echo'<a href="#"class="btn btn-danger btn-lg">Information Not Submitted Successfully.  <br />Please try again later.</a><br />';  

}

 
		 
 
		
 
	}}
 

 
$conn->close();
	
 
?>

 