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

$reff = date("YmdGis");
 
$user  = $_POST['user'];
$qty  = $_POST['qty'];
	 $year= $_POST['year'];
	 $desc= $_POST['desc'];
	 
	 
	 
	 
	  $product= $_POST['product'];
	 
	 $super_category  = $_POST['super_category'];
$subcategory  = $_POST['subcategory'];
$category  = $_POST['category'];
	 $status = 0;
	 
	 
	 
	 $price = $myName->showName($conn, "SELECT   `price` FROM `product_type` WHERE `id` = '$product'"); 
	  $product_name = $myName->showName($conn, "SELECT   `name` FROM `product_type` WHERE `id` = '$product'"); 
	 
	  $super = $myName->showName($conn, "SELECT `super` FROM `user_unit` WHERE `account_number` = '$emailing'"); 
	  $my_department = $myName->showName($conn, "SELECT `ministry` FROM `user_unit` WHERE `account_number` = '$emailing'"); 
	 
	 
	  $user_name = $myName->showName($conn, "SELECT `name` FROM `user_unit` WHERE `id` = '$user'"); 
	  $department_name = $myName->showName($conn, "SELECT `name` FROM `mda` WHERE `id` = '$my_department'"); 
			 $registeredby = $myName->showName($conn, "SELECT `name` FROM  `user_unit` WHERE `account_number` = '$emailing'");  
 
			 if($super == 1)
			 {
				 
				 $status = 1;
			 }
	 
	 
	  $total_budject = $myName->showName($conn, "SELECT `qty` FROM  `target_department` WHERE `year` = '$year'");  
	 
	 
	 
	  $remaining_value = $myName->showName($conn, "SELECT sum(`qty`) FROM  `employee_income_target_product` WHERE `product` = '$product' AND `year` = '$year' AND `status` = 1 AND `department` = '$my_department'");  
	 
	$remaining_value_new = $remaining_value + $qty; 
	 
	 
	 
	 
	 
	 
 
	 $total_target_amount = $myName->showName($conn, "SELECT `qty` FROM `target_department` WHERE     `year` = '$year'  AND `super_category` = '$super_category' AND `category` = '$category' AND `sub_category` = '$subcategory' AND `account_number` = '$my_department'"); 
	 
	 
	 
	  $sub_total_target_amount_dept = $myName->showName($conn, "SELECT SUM(`qty`) FROM `employee_income_target_product` WHERE     `year` = '$year'  AND `super_category` = '$super_category' AND `category` = '$category' AND `sub_category` = '$subcategory'  AND `product` = '$product'"); 
	 
	 
	  $total_target_amount_dept =  ($sub_total_target_amount_dept * $price) + ($qty * $price);
	 
	 
	 
	  if($total_target_amount_dept > $total_target_amount)
	 {
		 
		  echo '<a href="#" class="btn btn-danger btn-lg">Department Target Is More Than Overal Target.</a><br />'.$sub_total_target_amount_dept; 	 
		 
	 }
	 else
	 {
	 
	 
	 
 
	 
 
 
 
	$extract_user = mysqli_query($conn, "SELECT `department` FROM `employee_income_target_product` WHERE  `year` = '$year' AND `employee` = '$user' AND `super_category` = '$super_category' AND `category` = '$category' AND `sub_category` = '$subcategory' AND `product` = '$product'") or die(mysqli_error($conn));
		$count = mysqli_num_rows($extract_user);
		 if ($count > 0) {
			 
 	 echo '<a href="#" class="btn btn-danger btn-lg">Target Information Already Set For '. $user_name.'/'.$year.'. Please Try Again Later.</a><br />'; 	 
		
		  
				
		 }
			else
			{
		 
 	
	 $monthly = round($qty/12,2);
				
			 
				
 $sql = 	mysqli_query($conn,"INSERT INTO `employee_income_target_product`(`department`, `product`, `year`, `monthly`, `desc_text`, `status`, `created_date`, `registeredby`, `reff`, `qty`, `employee`, `super_category`, `category`, `sub_category`, `price`) VALUES('$my_department','$product','$year','$monthly','$desc','$status','$datetime','$emailing', '$reff', '$qty', '$user', '$super_category', '$category', '$subcategory', '$price' )") or die("ERROR OCCURED: ".mysqli_error($conn)); 
				
				
				for($i = 1; $i <= 12; $i++)
				{
					
 $sql = 	mysqli_query($conn,"INSERT INTO `employee_income_target_product_monthly`(`department`, `product`, `year`, `monthly`, `desc_text`, `status`, `created_date`, `registeredby`, `reff`, `qty`, `month`, `employee`, `super_category`, `category`, `sub_category`) VALUES('$my_department','$product','$year','$monthly','$desc','$status','$datetime','$emailing', '$reff', '$qty', '$i', '$user', '$super_category', '$category', '$subcategory' )") or die("ERROR OCCURED: ".mysqli_error($conn)); 					
					
 	
					
				}
				
				
 
 
 
				
 	  if ($sql) {
		  
		  
		 
		  
		  	  
	  
		  
		  if($super == 0 or $super != 1)
		  {
			  
			 	
			  	
			
			  $phone = $myName->showName($conn, "SELECT `phone` FROM  `user_unit` WHERE `super` = '1'");  	
			 
			  
			  $monthly = round($amount/12,2);
			  
 $message = "Hi, Target Alert! 
Target information for ".$user_name.". 
by ".$registeredby.". 
by product name: ".$product_name.". 
Amount: ".number_format($qty,2)."
Ref. No: ".$reff.".
needs approval. 
Thank You.";
 $Sending = new SendingSMS(); 
  							 
						$Sending->smsAPI($phone,"ATTN",$message);
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
		  }
		  else if($super == 1 or $super == "1")
		  {
			
			  
			  
			  	
$phonenumber = $myName->showName($conn, "SELECT `phone` FROM  `user_unit` WHERE `account_number` = '$user'");  
			  
		if($phonenumber != "")	  			  
		{
			
			  $monthly = round($qty/12,2);
		 
		   $message = "Hi, ".$name." 
Annual Employee target of ".number_format($qty,2)." of ".$product_name."
AVG. Monthly target of ".number_format($monthly,2).". 
set by ".$registeredby.". 
Ref. No: ".$reff.".
Thank You.";
 $Sending = new SendingSMS(); 
  							 
						$Sending->smsAPI($phone,"ATTN",$message);
			  
			  
			   
		  $subject = "Annual Employee Target";
		   
		  $sql ="INSERT INTO `notification`(`code`,`title`,`message`, `registeredby`, `sent_to`, `status`, `read_status`, `created_at`) VALUES
('$reff','$subject','$message','$emailing', '$user', '1', '1','$datetime')";
    mysqli_query($conn, $sql) or die(mysqli_error($conn));  
		}
			  
		  
		
		  }
	 
	 
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  

		  
		  
		  
		  
				
		 	

		  
			   echo'<a href="target-employee-product" class="btn btn-success btn-lg">Target Information Submitted Successful. Thank you.</a><br />'; 
			 
		 
			 
			 
			 
			 
			 
			 
			 
			 
			  
			 
			 
			 
			 
			 
			 
			 
		 }
				else
				{
					  echo'<a href="target-employee-product" class="btn btn-danger btn-lg">Target Information Not Submitted Successful. Thank you.</a><br />'; 
					
				}
				
				
				
			}
 
			

	 }
 }
 
?>

 