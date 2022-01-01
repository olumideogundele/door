 <?php
 
 include("config/DB_config.php");
$emailing = "";
 
 if(isset($_POST['validate']))
 {
 
 if(isset($_SESSION['email']))
 {
$emailing  = $_SESSION['email'];
 }

 
	 
	 $cell  = $_SESSION["row_number"];  
				 $last_id =  	$_SESSION["self_last_id"] ;
		$cell =   $_SESSION["row_number"]  ;
		$ministry=$_SESSION["mda"]  ;
		
	 
	 
	  foreach ($_POST['name'] as $selectedOption)
						   {
		  
		   $extract_user = mysqli_query($conn, "SELECT * FROM `shelf_cells` WHERE `cell_name` = '$selectedOption' and `ministry` = '$ministry'") or die(mysqli_error($conn));
		$count = mysqli_num_rows($extract_user);
		 if ($count > 0) {

			 echo '<div class="btn btn-danger btn-lg">'.$selectedOption.' Information in the database Already.</a></div><br />'; 
			 
 		 }
		  else{
		  
		  
		  
							  
 $sql = 	 "INSERT INTO `shelf_cells`(`ministry`,  `shelf`, `cell_name`,  `registeredby`, `status`, `created_date`) VALUES
('$ministry',   '$last_id', '$selectedOption',  '$emailing' ,  '1', '$datetime')";
 
 $process = mysqli_query($conn, $sql) or die(mysqli_error($conn));
	  
	  
	  
	  
	  }
	  
	  
	  
	  
	  }
	 
 
	 
	 if($process)
	 {
	
		
 
  echo '<div class="btn btn-success btn-lg">Information Submitted Successfully.</a></div><br />'; 	
   
   
} else {
  // echo "Error: " . $sql . "<br>" . $conn->error;
    $error="Not Inserted,Some Problem occured.";
echo'<a href="#"class="btn btn-danger btn-lg">Information Not Submitted Successfully.  <br />Please try again later.</a><br />';  

}

 
		 
 
		
 
	}
 

 
$conn->close();
	
 
?>

 