 <?php
 
 include("config/DB_config.php");

 
	 if(isset($_SESSION['email'] ))
	 {
	 $emailing = $_SESSION['email']; 
	 }
$email = "";
$serviceunit = " - ";
$bizunit = " - ";
 
 if(isset($_POST['validate2']))
 {
 
 if(isset($_SESSION['email']))
 {
$email  = $_SESSION['email'];
 }
 
$mda = "";
$folder = "";
$shelf = "";
$cell = "";
	  if(isset($_POST['mda']))
	 {
	 
	 $mda = $_POST['mda'];
	 }
	 
	 if(isset($_POST['folder']))
	 {
		 
		$folder = $_POST['folder']; 
	 }

   if(isset($_POST['shelf']))
	 {
		 
		$shelf = $_POST['shelf']; 
	 }
	 
	 
	   if(isset($_POST['cell']))
	 {
		 
		$cell = $_POST['cell']; 
	 }

if(isset($_SESSION['meter_numbers']))
 {
													
													
 $id2 = $_SESSION['meter_numbers'];
													 
$myArray = explode(',', $id2);
foreach($myArray as $my_Array){
  
	 	 
$sql = "UPDATE `userfiles` SET `ministry` = '$mda', `directoryname` = '$folder', `shelf` = '$shelf', `shelf_cell` = '$cell' , `updated_by` = '$emailing' , `updated_at` = '$datetime' WHERE `id` = '$my_Array'  ";
 
	$process = mysqli_query($conn, $sql) or die(mysqli_error($conn));
	
 
	
}
													
													
													
													
 }
 
 

 
 
	if ($process) {
		 
		//$meter_number =$_SESSION['meter_numbers'];
		
		

  echo '<div class="btn btn-success btn-lg">Information Updated Successfully.</a></div><br />'; 	
  
 
  
  
   
} else {
  // echo "Error: " . $sql . "<br>" . $conn->error;
    $error="Not Inserted,Some Problem occured.";
echo'<a href="#"class="btn btn-danger btn-lg">Information Not Submitted Successfully.  <br />Please try again later.</a><br />';  

}

 
	
	
 
		 } 
	 
	 
 

 
$conn->close();
	
 
?>

 