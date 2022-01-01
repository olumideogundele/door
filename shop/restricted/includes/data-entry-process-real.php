 <?php
 
 include("config/DB_config.php");
$emailing = "";
 
 if(isset($_POST['validate']))
 {
 
 if(isset($_SESSION['email']))
 {
$emailing  = $_SESSION['email'];
 }

  
 
$category  =    mysqli_real_escape_string($conn,$_POST['category']);
$subcategory  =    mysqli_real_escape_string($conn,$_POST['subcategory']);
$datacategory  =    mysqli_real_escape_string($conn,$_POST['datacategory']);
$project_id  =    mysqli_real_escape_string($conn,$_POST['project_id']);
$title  =    mysqli_real_escape_string($conn,$_POST['title']);
$state  =    mysqli_real_escape_string($conn,$_POST['states']);
$year  =    mysqli_real_escape_string($conn,$_POST['year']);
$basin  =    mysqli_real_escape_string($conn,$_POST['basin']);
$terrain  =    mysqli_real_escape_string($conn,$_POST['terrain']);
$price  =    mysqli_real_escape_string($conn,$_POST['price']);
$dimension  =    mysqli_real_escape_string($conn,$_POST['dimension']);
$energy_source  =    mysqli_real_escape_string($conn,$_POST['energy_source']);
$shot  =    mysqli_real_escape_string($conn,$_POST['shot']);
$client  =    mysqli_real_escape_string($conn,$_POST['client']);
$contractor  =    mysqli_real_escape_string($conn,$_POST['contractor']);
$comment  =    mysqli_real_escape_string($conn,$_POST['comment']);
$status  =    mysqli_real_escape_string($conn,$_POST['status']);
	 $volume  =    mysqli_real_escape_string($conn,$_POST['volume']);
	 $volume_value  =    mysqli_real_escape_string($conn,$_POST['volume_value']);
 
 
 
 	 
$sql = 	 "INSERT INTO `data_entry`(`category`, `subcategory`, `datacategory`, `project_id`, `title`, `state`, `year`, `basin`, `terrain`, `price`, `dimension`, `energy_source`, `shot`, `client`, `contractor`, `comment`, `status`,`created_date`,`registeredby`,`volume`, `volume_value`) VALUES('$category', '$subcategory','$datacategory',  '$project_id','$title', '$state','$year',  '$basin','$terrain','$price','$dimension',  '$energy_source','$shot', '$client','$contractor',  '$comment','$status','$datetime', '$emailing','$volume', '$volume_value')";
 
 $process = mysqli_query($conn, $sql) or die(mysqli_error($conn));
 
	if ($process) {
		 
 
  echo '<div class="btn btn-success btn-lg">Information Submitted Successfully.</a></div><br />'; 	
   
   
} else {
  // echo "Error: " . $sql . "<br>" . $conn->error;
    $error="Not Inserted,Some Problem occured.";
echo'<a href="#"class="btn btn-danger btn-lg">Information Not Submitted Successfully.  <br />Please try again later.</a><br />';  

}

 
		 
 
		
 
	}
 

 
$conn->close();
	
 
?>

 