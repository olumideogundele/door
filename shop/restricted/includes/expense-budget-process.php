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

 $ref = date("YmdGis");
 

$amount  = $_POST['amount'];
	 $year= $_POST['year'];
	 $desc= $_POST['desc'];
	 $name= $_POST['name'];
	 
	 
	 
	 $category= $_POST['expense_category'];
	 $subcategory= $_POST['subcategory'];
	 $status = 0;
	 
	 
	 
	  $super = $myName->showName($conn, "SELECT `super` FROM `user_unit` WHERE `account_number` = '$emailing'"); 
			 
			 if($super == 1)
			 {
				 
				 $status = 1;
			 }
	 
 
	$extract_user = mysqli_query($conn, "SELECT `amount` FROM `expenses_budget` WHERE   `name` = '$name' AND `year` = '$year' AND `category` = '$category' AND `sub_category` = '$subcategory'") or die(mysqli_error($conn));
		$count = mysqli_num_rows($extract_user);
		 if ($count > 0) {
			 
			  
			 	$monthly = $amount/12;
			 
			 
			 
			 
			 $super = $myName->showName($conn, "SELECT `super` FROM `user_unit` WHERE `account_number` = '$emailing'"); 
			 
			 if($super == 1)
			 {
				 
				 $status = 1;
			 }
			 // `category`, `sub_category`
			 
	 $extract_user = mysqli_query($conn, "UPDATE `expenses_budget` SET `category` = '$category', `sub_category` = '$subcategory',`amount` = '$amount', `monthly` = '$monthly',`year` = '$year',`desc_text` = '$desc',`status` = '$status',`name` = '$name' WHERE   `year` = '$year'") or die(mysqli_error($conn));
			 
 
		 if ($extract_user) {
			 
			 
			 $sql = 	mysqli_query($conn,"INSERT INTO `expenses_budget_backup`(  `year`, `monthly`, `amount`, `desc_text`, `status`, `created_date`, `registeredby`, `reff`, `category`, `sub_category`, `name`) VALUES('$year','$monthly','$amount','$desc','$status','$datetime','$emailing','$ref','$category','$subcategory','$name' )") or die("ERROR OCCURED: ".mysqli_error($conn)); 
			 
			 
			  if($super == 0 or $super != 1)
		  {
			  
			  $registeredby = $myName->showName($conn, "SELECT `name` FROM  `user_unit` WHERE `account_number` = '$emailing'");  	
			
			  $phone = $myName->showName($conn, "SELECT `phone` FROM  `user_unit` WHERE `super` = '1'");  	
			  
			  
			  
			   $message = "Hi, Expenses Budget updated by ".$registeredby.". Ref. No: ".$ref.". needs approval. Thank You.";

  
  	 $Sending = new SendingSMS(); 
  							 
						$Sending->smsAPI($phone,"ATTN",$message);
		  }
			 
				
		 echo'<a href="dashboard.php" class="btn btn-success btn-lg">Budget Information Updated Successful. Thank you.</a><br />'; 
			 
			 
		
			 
			  
 
			 
		 }
		 else
		 {
					 echo '<a href="#" class="btn btn-success btn-lg">Budget Information Not Updated Successful. Please try again later.</a><br />'; 
		 }
			 
				
		 }
			else
			{
				
				
				
				$monthly = $amount/12;
 	
	 
				
 $sql = 	mysqli_query($conn,"INSERT INTO `expenses_budget`( `year`, `monthly`, `amount`, `desc_text`, `status`, `created_date`, `registeredby`, `reff`, `category`, `sub_category`, `name`) VALUES('$year','$monthly','$amount','$desc','$status','$datetime','$emailing','$ref' ,'$category','$subcategory','$name' )") or die("ERROR OCCURED: ".mysqli_error($conn)); 
 
$sql = 	mysqli_query($conn,"INSERT INTO `expenses_budget_backup`( `year`, `monthly`, `amount`, `desc_text`, `status`, `created_date`, `registeredby`, `reff`, `category`, `sub_category`, `name`) VALUES('$year','$monthly','$amount','$desc','$status','$datetime','$emailing','$ref' ,'$category','$subcategory','$name' )") or die("ERROR OCCURED: ".mysqli_error($conn)); 
				
 	  if ($sql) {
		  
		  
		  
		  
		  if($super == 0 or $super != 1)
		  {
			  
			  $registeredby = $myName->showName($conn, "SELECT `name` FROM  `user_unit` WHERE `account_number` = '$emailing'");  	
			
			  $phone = $myName->showName($conn, "SELECT `phone` FROM  `user_unit` WHERE `super` = '1'");  	
			  
			  
			  
			   $message = "Hi, Expenses Budget inserted by ".$registeredby.". Ref. No: ".$ref.". needs approval. Thank You.";

  
  	 $Sending = new SendingSMS(); 
  							 
						$Sending->smsAPI($phone,"ATTN",$message);
		  }
		  
		  
		  
			   echo'<a href="dashboard.php" class="btn btn-success btn-lg">Budget Information Submitted Successful. Thank you.</a><br />'; 
			 
		 
			 
			 
			 
			 
			 
			 
			 
			 
			  
			 
			 
			 
			 
			 
			 
			 
		 }
				else
				{
					  echo'<a href="#" class="btn btn-success btn-lg">Budget Information Not Submitted Successful. Thank you.</a><br />'; 
					
				}
				
				
				
			}
 }
			

 
 
 
?>

 