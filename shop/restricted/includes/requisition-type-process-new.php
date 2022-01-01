 <?php
 
include ("config/DB_config.php"); 
include ("config/DB_config2.php"); 
 $myName = new Name();
$emailing = "";
 
include("includes/view-application-details.php");


 if(isset($_POST['validated-upload']))
 {
 
 if(isset($_SESSION['email']))
 {
$emailing  = $_SESSION['email'];
 }
	 else
	 {
		 $emailing  = $_POST['emailing'];
	 }

	 $rand1 =  date("YmdGis")."/".rand(28736, 8735673);	
	 
	$type = mysqli_real_escape_string($conn,$_POST['type']);
$subcat = mysqli_real_escape_string($conn,$_POST['subcat']);
$ministry = mysqli_real_escape_string($conn, $_POST['registry']);
$product = mysqli_real_escape_string($conn,$_POST['product']);
$amount = mysqli_real_escape_string($conn,$_POST['amount']);
$comment = mysqli_real_escape_string($conn,$_POST['comment']);
$acct_num = mysqli_real_escape_string($conn,$_POST['number']);
	 
	 $_SESSION['mighty'] = $rand1;
	 
	 //SELECT   `code`, `name`, `amount` FROM `product_information` WHERE `biller` = '$serviceunit'  and `status` =  1 ORDER BY `name` DESC
	 
	 $service_name = $myName->showName($conn2, "SELECT   `service_name` FROM `services_information` WHERE `service_code` = '$type'"); 
	 $services_category_information_name = $myName->showName($conn2, "SELECT  `name` FROM `services_category_information` WHERE `code` = '$subcat'"); 
	 $product_information_name = $myName->showName($conn2, "SELECT  `name` FROM `product_information` WHERE `code` = '$product'"); 
	 $product_information_amount = $myName->showName($conn2, "SELECT  `amount` FROM `product_information` WHERE `code` = '$product'"); 
	
	 
	 $approval = 1;
	 
	 
	 
	 
	 $from = $myName->showName($conn, "SELECT  `name` FROM `user_unit` WHERE `account_number` = '$emailing'"); 
 
$query112 = "INSERT INTO `userfiles`(`filepath`, `filename`,`registry`, `name`,`file_type`, `created_date`, `creeated_by`, `status`,`filesize`,`filecode`,`submitted_by`, `group_code`, `signature`, `approval`,`select_stakeholder`, `type`, `account_name`, `account_number`, `bank_name`, `amount`, `petty`) VALUES('uploads','".$product_information_name."','".$ministry."','".$product_information_name."', 'digital', '$datetime','$emailing', '0', '$services_category_information_name', '$rand1', '$from', '$rand1', '1', '$approval', 1, '$type', '$from','$acct_num', '$product_information_name', '$amount', 2)";
 $processing = mysqli_query($conn, $query112) or die("Error Occured: ".mysqli_error( $conn));	 
	
	
$query112 = "INSERT INTO `payall`( `registry`, `type`, `subcat`, `product`, `amount`, `comment`, `code`, `status`, `created_date`, `registeredby`) VALUES('".$ministry."','".$type."','".$subcat."', '$product','$amount', '$comment', '$rand1',0, '$datetime', '$emailing')";
 $processing = mysqli_query($conn, $query112) or die("Error Occured: ".mysqli_error( $conn));	
	 
	 
	 
	 
 
	 
   if($processing)
	{
		
		echo '<meta http-equiv="Refresh" content="1; url= requisition-uploads-inter.php?complete=success&code='.$rand1.'"> ';
	}
	 else
	 {
		 
		 
	 }
	
	
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	$_SESSION['group_code'] = $rand1;

	
	  $last_id = $conn->insert_id;
						
						
							
						if($comment != "")
						{
					$sql = 	 "INSERT INTO `document_comment`(`document_id`, `document_code`, `commenting`, `status`, `created_date`, `registeredby`) VALUES('$last_id',  '$rand', '$comment',1,'$datetime', '$emailing')";
 
 $process = mysqli_query($conn, $sql) or die(mysqli_error($conn));						
								
							
						}



	 
	 
	 
	 
	 
	 
	 
	 
	 
	  
	 
	 
 }
	 


$conn->close();
$conn2->close();
	
 
?>

 