  <?php
 
 include("config/DB_config.php");
 $myName = new Name();
$emailing = "";
 
 if(isset($_POST['validated']))
 {
 
 if(isset($_SESSION['email']))
 {
$emailing  = $_SESSION['email'];
 }

	   $group_code = $_SESSION['mighty'];
 
	 
	   foreach ($_POST['file'] as $selectedOption)
						   {
							  
$extract_user = mysqli_query($conn, "SELECT * FROM `signature_file` WHERE   `stakeholder` = '$selectedOption' AND `status` = '1' AND `filecode` = '$group_code'") or die(mysqli_error($conn));
		$count = mysqli_num_rows($extract_user);
		 if ($count > 0) {
	 	 
	echo'<a href="#" class="btn btn-danger btn-lg">Stakeholder already attached with the file. Please check back later.</a><br />';

		  
	
 
		 }else
		 {
	 
	 
	 
$sql = 	 "INSERT INTO `signature_file`(`filecode`, `stakeholder`, `created_date`, `status`, `registeredby`  ) VALUES('$group_code', '$selectedOption',  '$datetime','1', '$emailing')";
 
 $process = mysqli_query($conn, $sql) or die(mysqli_error($conn));
 
	if ($process) {
		
		 
	 
		
		 $naming = $myName->showName($conn, "SELECT `name` FROM `stake_holder` WHERE  `account_number` = '$selectedOption'"); 
	 
		 
		
		
		
 
  echo '<div class="btn btn-success btn-lg">Information Submitted Successfully.<br /> Stakeholder: '. $naming.' </div><br />'; 	
   
   
} else {
  $naming = $myName->showName($conn, "SELECT `name` FROM `stake_holder` WHERE  `account_number` = '$selectedOption'"); 
	 
    $error="Not Inserted,Some Problem occured.";
echo'<a href="#"class="btn btn-danger btn-lg">Information Not Submitted Successfully. <br>
  Stakeholder: '. $naming.'.<br />Please try again later.</a><br />';  

}

 
		 
 
		 }
 
	}
		   
		 $_SESSION['mighty'] = "";
 unset($_SESSION['mighty']);
   
		   
	   }
	 
	 
  
  
	 
 
 
$conn->close();
	
 
?>

 