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
 

$qty  = $_POST['qty'];
	 $year= $_POST['year'];
	 $desc= $_POST['desc'];
	 $product= $_POST['product'];
	 $department= $_POST['department'];
	 $status = 0;
	 
	  $price = $myName->showName($conn, "SELECT   `price` FROM `product_type` WHERE `id` = '$product'"); 
	 
	  $super = $myName->showName($conn, "SELECT `super` FROM `user_unit` WHERE `account_number` = '$emailing'"); 
			 
			 if($super == 1)
			 {
				 
				 $status = 1;
			 }
	 
 
	$extract_user = mysqli_query($conn, "SELECT `id` FROM `income_budget_product` WHERE     `year` = '$year' and `product` = '$product'") or die(mysqli_error($conn));
		$count = mysqli_num_rows($extract_user);
		 if ($count > 0) {
			 
			   
				
		 echo'<a href="dashboard" class="btn btn-danger btn-lg">Budget Already Exist For '.$year.'. <br /> Please Edit The Information. <br />Thank you.</a>'; 
			 
			 
		
			 
			  
 
			 
		 }
		  
			 
		 
			else
			{
				
				
				
				$monthly = $qty/12;
				$total_price = $qty * $price;
				$monthly_price = $monthly * $price;
 	
 	
	 
				
 $sql = 	mysqli_query($conn,"INSERT INTO `income_budget_product`(`product`, `qty` ,`year`, `monthly`, `total_amount`, `monthly_amount`, `desc_text`, `status`, `created_date`, `registeredby`, `reff`) VALUES('$product','$qty','$year','$monthly','$total_price','$monthly_price','$desc','$status','$datetime','$emailing','$ref' )") or die("ERROR OCCURED: ".mysqli_error($conn)); 
				
				
				
$sql = 	mysqli_query($conn,"INSERT INTO `income_budget_product_backup`(`product`, `qty` ,`year`, `monthly`, `total_amount`, `monthly_amount`, `desc_text`, `status`, `created_date`, `registeredby`, `reff`) VALUES('$product','$qty','$year','$monthly','$total_price','$monthly_price','$desc','$status','$datetime','$emailing','$ref' )") or die("ERROR OCCURED: ".mysqli_error($conn)); 
 
 
 	  if ($sql) {
		  
		  
		  
		  
		  if($super == 0 or $super != 1)
		  {
			  
			  $registeredby = $myName->showName($conn, "SELECT `name` FROM  `user_unit` WHERE `account_number` = '$emailing'");  	
			
			  $phone = $myName->showName($conn, "SELECT `phone` FROM  `user_unit` WHERE `super` = '1'");  	
			  
			  
			  
			   $message = "Hi, Expenses Budget inserted by ".$registeredby.". Ref. No: ".$ref.". needs approval. Thank You.";

  
  	 $Sending = new SendingSMS(); 
  							 
						$Sending->smsAPI($phone,"ATTN",$message);
		  }
		  
		  
		  
			   echo'<a href="income-budget-projection" class="btn btn-success btn-lg">Budget Information Submitted Successful. Thank you.</a><br />'; 
			 
		 
			 
			 
			 
			 
			 
			 
			 
			 
			  
			 
			 
			 
			 
			 
			 
			 
		 }
				else
				{
					  echo'<a href="#" class="btn btn-success btn-lg">Budget Information Not Submitted Successful. Thank you.</a><br />'; 
					
				}
				
				
				
			}
 }
			

 
 
 
?>

 