 <?php
 
 include("config/DB_config.php");
$emailing = "";
  $myName = new Name();
 if(isset($_POST['validate']))
 {
 
 if(isset($_SESSION['email']))
 {
$emailing  = $_SESSION['email'];
 }

	 
 
 
$chargeAmount  = $_POST['amount'];
 
 
	$extract_user = mysqli_query($conn, "SELECT `amount` FROM `max_amount` WHERE 1") or die(mysqli_error($conn));
		$count = mysqli_num_rows($extract_user);
		 if ($count > 0) {
			 //$fee = $myName->showName($conn, "SELECT `fee` FROM `application` WHERE 1"); 
			  
			 
			 	
	 $extract_user = mysqli_query($conn, "UPDATE `max_amount` SET `amount` = '$chargeAmount' WHERE 1") or die(mysqli_error($conn));
			 
	 
		 
		 if ($extract_user) {
		 echo'<a href="dashboard.php" class="btn btn-success btn-lg">Successful Updated. Thank you.</a><br />'; 
			 
	 
			 
		 }
		 else
		 {
					 echo '<a href="#" class="btn btn-success btn-lg">Wallet Not Credited Successful. Please try again later.</a><br />'; 
		 }
			 
				
		 }
			else
			{
				
				
		 
				
 $sql = 	mysqli_query($conn,"INSERT INTO `max_amount`(`amount`, `registeredby`, `status`, `created_at`) VALUES('$chargeAmount','$emailing','1','$datetime')") or die("ERROR OCCURED: ".mysqli_error($conn)); 
				
 
		 
		 if ($sql) {
			   echo'<a href="dashboard.php" class="btn btn-success btn-lg">Successful Submitted. Thank you.</a><br />'; 
			 
		 
			 
			 
			 
			 
			 
			 
			 
			 
			  
			 
			 
			 
			 
			 
			 
			 
		 }
				else
				{
					  echo'<a href="#" class="btn btn-success btn-lg">Wallet Not Credited Successful. Please try again later.</a><br />'; 
					
				}
				
				
				
			}
 }
			

 
 
 
?>

 