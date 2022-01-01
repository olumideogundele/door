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
/*SELECT  `id`, `truck`, `driver`, `status`, `created_date`, `registeredby` FROM `driver_truck_attachment` WHERE 1*/
 
 
$truck= $_POST['truck'];
$driver  = $_POST['driver'];
	 
 
  $extract_user = mysqli_query($conn, "SELECT * FROM `driver_truck_attachment` WHERE `truck` = '$truck' or `driver` = '$driver'") or die(mysqli_error($conn));
		$count = mysqli_num_rows($extract_user);
		 if ($count > 0) {
	 	  
			 
			 
		echo '<div class="btn btn-warning btn-lg">Driver already has a truck attached.</a></div><br />'; 		 
			 
		 

		 }
			 else
		 {
 
 
 	 
$sql = 	 "INSERT INTO `driver_truck_attachment`(`truck`, `driver`, `status`, `created_date`, `registeredby`   ) VALUES
('$truck', '$driver', '1', '$datetime', '$emailing')";
 
 $process = mysqli_query($conn, $sql) or die(mysqli_error($conn));
 
	if ($process) {
		 $sql = 	 "UPDATE `truck` SET `driver` = '$driver' WHERE `id` = '$truck'";
		 $process = mysqli_query($conn, $sql) or die(mysqli_error($conn));
 
  echo '<div class="btn btn-success btn-lg">Information Submitted Successfully.</a></div><br />'; 	
		
$driver_name = $myName->showName($conn, "SELECT  `name` FROM  `user_unit` WHERE  `account_number` = '$driver'");
$phone = $myName->showName($conn, "SELECT  `phone` FROM  `user_unit` WHERE  `account_number` = '$driver'");
 $registeredby = $myName->showName($conn, "SELECT  `name` FROM  `user_unit` WHERE  `account_number` = '$emailing'");
 $truck_brand = $myName->showName($conn, "SELECT  `truck_brand` FROM  `truck` WHERE  `id` = '$truck'");
 $truck_plate_number = $myName->showName($conn, "SELECT  `truck_plate_number` FROM  `truck` WHERE  `id` = '$truck'");
		
		 $phone = $phone;
		
		if($phone !="")
		{
  
			
			 
			
			
  $message = "Hi, ".$driver_name." ".$registeredby."! Just attached you to a truck with registeraton number :".$truck_plate_number.". Truck Brand:".$truck_brand.". Thank You.";

  
  	 $Sending = new SendingSMS(); 
  							 
						$Sending->smsAPI($phone,"Your Truck",$message);
							 
		 }
		
		
		
		
		
		
  
   
} else {
  // echo "Error: " . $sql . "<br>" . $conn->error;
    $error="Not Inserted,Some Problem occured.";
echo'<a href="#"class="btn btn-danger btn-lg">Information Not Submitted Successfully.  <br />Please try again later.</a><br />';  

}

 
		 
 
		
 
 }
 		 
 }

 
$conn->close();
	
 
?>

 