 <?php
 
 include("config/DB_config.php");
$myName = new Name();
$emailing = "";
 
 if(isset($_POST['validate']))
 {
 
 if(isset($_SESSION['email']))
 {
$emailing  = $_SESSION['email'];
 }

  
 
$approval=  mysqli_real_escape_string($conn,$_POST['approval']);
$level  =  mysqli_real_escape_string($conn, $_POST['levels']);
$mda  =  mysqli_real_escape_string($conn, $_POST['registry']);
 
 
  $extract_user = mysqli_query($conn, "SELECT * FROM `approval` WHERE  `mda` = '$mda'") or die(mysqli_error($conn));
		$count = mysqli_num_rows($extract_user);
		 if ($count > 0) {
	 	 
		 
$sql = 	 "UPDATE `approval` SET  `approval` = '$approval', `level` = '$level', `status` = '1', `created_date` = '$datetime', `registeredby` = '$emailing' ,`mda` = '$mda' WHERE `mda` = '$mda'";
  
			 
			 
 $process = mysqli_query($conn, $sql) or die(mysqli_error($conn));
 
	if ($process) {
		 
 
   
  echo '<div class="btn btn-success btn-lg">Information Submitted Successfully. <br>
Please wait... </a></div>'; 
		
		
		if($approval == "Yes")
		{
			
				echo '<meta http-equiv="Refresh" content="2; url= approval-level-naming.php?mda='.$mda.'"> ';
		}
		
   
 
	}
			 else
			 {
				  echo '<div class="btn btn-danger btn-lg">Information Not Submitted Successfully.</a></div>'; 	
				 
			 }

	
	
 
		 }else
		 {
 
 //SELECT  `id`, `approval`, `level`, `created_date`, `registeredby`, `status` FROM `approval` WHERE 1
 	 
$sql = 	 "INSERT INTO `approval`(`approval`, `level`, `created_date`, `registeredby`, `status`,`mda` ) VALUES
('$approval', '$level', '$datetime', '$emailing', '1','$mda')";
 
 $process = mysqli_query($conn, $sql) or die(mysqli_error($conn));
 
	if ($process) {
		 
 
  echo '<div class="btn btn-success btn-lg">Information Submitted Successfully. <br>
Please wait... </a></div>'; 
		
		
			if($approval == "Yes")
		{
			
			echo '<meta http-equiv="Refresh" content="2; url= approval-level-naming.php?mda='.$mda.'"> ';
		}
		
   
} else {
  // echo "Error: " . $sql . "<br>" . $conn->error;
    $error="Not Inserted,Some Problem occured.";
echo'<a href="#"class="btn btn-danger btn-lg">Information Not Submitted Successfully.  Please try again later.</a>';  

}

 
		 
 
		
 
 }
 		 
 }

 
$conn->close();
	
 
?>

 