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
 
$department  = $_POST['department'];
$qty  = $_POST['qty'];
	 $year= $_POST['year'];
	 $desc= $_POST['desc'];
	 
	  $product= $_POST['product'];
	 
	 $super_category  = $_POST['super_category'];
$subcategory  = $_POST['subcategory'];
$category  = $_POST['category'];
	 $status = 0;
	 
	 
	 
	 
	 $total_target_amount = $myName->showName($conn, "SELECT `qty` FROM `income_budget_product` WHERE     `year` = '$year'  AND `super_category` = '$super_category' AND `category` = '$category' AND `sub_category` = '$subcategory' AND `product` = '$product'"); 
	 
	 
	 
	  $sub_total_target_amount_dept = $myName->showName($conn, "SELECT SUM(`qty`) FROM `department_income_target_product` WHERE     `year` = '$year'  AND `super_category` = '$super_category' AND `category` = '$category' AND `sub_category` = '$subcategory'  AND `product` = '$product'"); 
	 
	 
	  $total_target_amount_dept =  $sub_total_target_amount_dept + $qty;
	 
	 
	 
	  if($total_target_amount_dept > $total_target_amount)
	 {
		 
		  echo '<a href="#" class="btn btn-danger btn-lg">Department Target Is More Than Overal Target.</a><br />'.$sub_total_target_amount_dept; 	 
		 
	 }
	 else
	 {
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 $price = $myName->showName($conn, "SELECT   `price` FROM `product_type` WHERE `id` = '$product'"); 
	  $product_name = $myName->showName($conn, "SELECT   `name` FROM `product_type` WHERE `id` = '$product'"); 
	 
	  $super = $myName->showName($conn, "SELECT `super` FROM `user_unit` WHERE `account_number` = '$emailing'"); 
	  $my_department_ = $myName->showName($conn, "SELECT `ministry` FROM `user_unit` WHERE `account_number` = '$emailing'"); 
	  $department_name = $myName->showName($conn, "SELECT `name` FROM `mda` WHERE `id` = '$department'"); 
			 $registeredby = $myName->showName($conn, "SELECT `name` FROM  `user_unit` WHERE `account_number` = '$emailing'");  
 
			 if($super == 1)
			 {
				 
				 $status = 1;
			 }
	 
	 
	  $total_budject = $myName->showName($conn, "SELECT `qty` FROM  `income_budget_product` WHERE `product` = '$product' AND `year` = '$year'");  
	 
	 
	 
	  $remaining_value = $myName->showName($conn, "SELECT `qty` FROM  `department_income_target_product` WHERE `product` = '$product' AND `year` = '$year' AND `status` = 1");  
	 
	$remaining_value_new = $remaining_value + $qty; 
	 
	 
	 
/* if($remaining_value_new > $total_budject )
 {
	  echo '<a href="#" class="btn btn-danger btn-lg">Budget too low. Please contact super admin.</a><br />'; 
 }
	 else
	 {*/
	 
	 
 
 
 
	$extract_user = mysqli_query($conn, "SELECT `department` FROM `department_income_target_product` WHERE `department` = '$department' AND `year` = '$year' AND `product` = '$product' AND `super_category` = '$super_category' AND `category` = '$category' AND `sub_category` = '$subcategory'") or die(mysqli_error($conn));
		$count = mysqli_num_rows($extract_user);
		 if ($count > 0) {
			 
 	 echo '<a href="#" class="btn btn-danger btn-lg">Target Information Already Set For '. $department_name.'/'.$year.'. Please Try Again Later.</a><br />'; 	 
		
		  
				
		 }
			else
			{
		 
 	
	 $monthly = round($qty/12,2);
				
				 
				
 $sql = 	mysqli_query($conn,"INSERT INTO `department_income_target_product`(`department`, `product`, `year`, `monthly`, `desc_text`, `status`, `created_date`, `registeredby`, `reff`, `qty`, `super_category`, `category`, `sub_category`) VALUES('$department','$product','$year','$monthly','$desc','$status','$datetime','$emailing', '$reff', '$qty', '$super_category', '$category', '$subcategory' )") or die("ERROR OCCURED: ".mysqli_error($conn)); 
				
				
				for($i = 1; $i <= 12; $i++)
				{
					
 $sql = 	mysqli_query($conn,"INSERT INTO `department_income_target_product_monthly`(`department`, `product`, `year`, `monthly`, `desc_text`, `status`, `created_date`, `registeredby`, `reff`, `qty`, `month`, `super_category`, `category`, `sub_category`) VALUES('$department','$product','$year','$monthly','$desc','$status','$datetime','$emailing', '$reff', '$qty', '$i', '$super_category', '$category', '$subcategory' )") or die("ERROR OCCURED: ".mysqli_error($conn)); 					
					
 	
					
				}
				
				
 
 
 
				
 	  if ($sql) {
		  
		  
		 
		  
		  	  
	  
		  
		  if($super == 0 or $super != 1)
		  {
			  
			 	
			  	
			
			  $phone = $myName->showName($conn, "SELECT `phone` FROM  `user_unit` WHERE `super` = '1'");  	
			 
			  
			  $monthly = round($amount/12,2);
			  
 $message = "Hi, Target Alert! 
Target information for ".$department_name.". 
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
			
			  
			  
			  	
	$query =  "SELECT  `name`, `phone`, `email`,`account_number`   FROM `user_unit` WHERE `ministry` = '$department' AND `status` = 1 ORDER BY `id` DESC";	
 $extract_distance = mysqli_query($conn, $query) or die(mysqli_error($conn));
		$count = mysqli_num_rows($extract_distance);
    if ($count > 0)
		  {
 	 while ($row_distance=mysqli_fetch_row($extract_distance))
    {
  						  $name =$row_distance[0];
						   $phone =$row_distance[1];
		 $email =$row_distance[2];
		 $account_number =$row_distance[3];
			  
			  
			  			  
			  
		  
		  $monthly = round($qty/12,2);
		 
		   $message = "Hi, ".$name." 
Annual Departmental target of ".number_format($qty,2)." of ".$product_name."
AVG. Monthly target of ".number_format($monthly,2).". 
set by ".$registeredby.". 
Ref. No: ".$reff.".
Thank You.";
 $Sending = new SendingSMS(); 
  							 
						$Sending->smsAPI($phone,"ATTN",$message);
			  
			  
			   
		  $subject = "Annual Departmental Target";
		   
		  $sql ="INSERT INTO `notification`(`code`,`title`,`message`, `registeredby`, `sent_to`, `status`, `read_status`, `created_at`) VALUES
('$reff','$subject','$message','$emailing', '$account_number', '1', '1','$datetime')";
    mysqli_query($conn, $sql) or die(mysqli_error($conn));  
		  }
	 }
	
	}
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  

		  
		  
		  
		  
				
		 	

		  
			   echo'<a href="target-department-product" class="btn btn-success btn-lg">Target Information Submitted Successful. Thank you.</a><br />'; 
			 
		 
			 
			 
			 
			 
			 
			 
			 
			 
			  
			 
			 
			 
			 
			 
			 
			 
		 }
				else
				{
					  echo'<a href="target-department-product" class="btn btn-danger btn-lg">Target Information Not Submitted Successful. Thank you.</a><br />'; 
					
				}
				
				
				
			}
 }
	 }

 
 //}
 
?>

 