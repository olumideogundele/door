 <?php
 
include ("config/DB_config.php"); 
include ("config/DB_config2.php"); 
 $myName = new Name();
$emailing = "";
//$emailing = "";
$process = false ;
 
 if(isset($_POST['verify']))
 {
 
 if(isset($_SESSION['email']))
 {
$emailing  = $_SESSION['email'];
 }
 $code =$_POST['code'];
 $comment =$_POST['comment'];
	 
	 //`account_name`, `account_number`, `bank_name`
 
 $account_name = $myName->showName($conn, "SELECT `account_name` FROM  `userfiles` WHERE (`group_code` = '$code' or `filecode` = '$code')"); 
 $account_number = $myName->showName($conn, "SELECT `account_number` FROM  `userfiles` WHERE (`group_code` = '$code' or `filecode` = '$code')"); 
 $amount = $myName->showName($conn, "SELECT `amount` FROM  `userfiles` WHERE (`group_code` = '$code' or `filecode` = '$code')"); 
 $bank_name = $myName->showName($conn, "SELECT `bank_name` FROM  `userfiles` WHERE (`group_code` = '$code' or `filecode` = '$code')"); 
 $name = $myName->showName($conn, "SELECT `name` FROM  `userfiles` WHERE (`group_code` = '$code' or `filecode` = '$code')"); 
 $petty = $myName->showName($conn, "SELECT `petty` FROM  `userfiles` WHERE (`group_code` = '$code' or `filecode` = '$code')"); 
 $registry = $myName->showName($conn, "SELECT `registry` FROM  `userfiles` WHERE (`group_code` = '$code' or `filecode` = '$code')"); 
 
   
 $wallet_amount = $myName->showName($conn, "SELECT  `amount` FROM `wallet` WHERE `status` = '1' AND `wallet_no` = '$registry'"); 
 $demand_amount = $myName->showName($conn, "SELECT  `amount` FROM `userfiles` WHERE `group_code` = '$code'  or  `filecode` = '$code'");  
	$label =  $account_number;
				$bank =  $bank_name ;
				$amount = trim($amount); 
	 if($petty == 1)
	 {
	 
	 
	  if($demand_amount > $wallet_amount)
	  {
		 echo'<a href="#"class="btn btn-danger btn-lg">Amount in the wallet is too low.  <br />Please try again later.</a><br />';   
		  
	  }
	  else
	  {
	 
	  
				
			  
	 
			
			
		 
				//$amount2 = 500; 
		 
	   $url = trim("");
 $reff =  $code;	
  $flutterapi = trim($myName->showName($conn, "SELECT `flutterapisecret` FROM `application` WHERE  `status` = '1'")); 
    
			 

$ch = curl_init();

			 $currency  = "NGN";
			 $narration = "Requisition Granted For ".$name.". Code:".$code ;


curl_setopt($ch, CURLOPT_URL, "https://api.ravepay.co/v2/gpx/transfers/create");

curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);

curl_setopt($ch, CURLOPT_HEADER, FALSE);

curl_setopt($ch, CURLOPT_POST, TRUE);

curl_setopt($ch, CURLOPT_POSTFIELDS, "{
 \"account_bank\": \"$bank\",
 \"account_number\": \"$label\",
 \"amount\": \"$amount\",
 \"seckey\": \"$flutterapi\",
  \"narration\": \"$narration\",
  \"currency\": \"$currency\",
  \"reference\": \"$reff\"

}");
 
		 


curl_setopt($ch, CURLOPT_HTTPHEADER, array(

  "Content-Type: application/json",

  "Authorization: Basic ".$converted

));



$response = curl_exec($ch);

curl_close($ch);

 

$err = curl_error($ch);

	 
			 
 

if ($err) {
  //echo "cURL Error #:" . $err;
	
	echo'<a href="#" class="btn btn-danger btn-lg">cURL Error #:' . $err.'</a><br />'; 
} else {
	 
	 
	 $resp = json_decode($response, true);
 $response1 = json_decode($response);  
	  	$response12 = json_decode($response, true);
	 $status23 =  $response12['data']['status'];
	
	
	 $response_code =  $response12['data']['responsecode'];
	
	$status1 =  $response1->status;
	$message =  $response1->message;
 
	 
	if($status1 == "success" and $message == "TRANSFER-CREATED")
	{ 
		 
		
		 $fullname = "";
	 	$account_number = $resp['data']['account_number'];
        $bank_code = $resp['data']['bank_code'];
        $fullname = $resp['data']['fullname'];
        $date_created = $resp['data']['date_created'];
        $amount = $resp['data']['amount'];
        $fee = $resp['data']['fee'];
        $reference = $resp['data']['reference'];
        $narration = $resp['data']['narration'];
        $complete_message = $resp['data']['complete_message'];
        $bank_name = $resp['data']['bank_name'];
		
		
		
		
		
		 
		  $wallet_amount = $myName->showName($conn, "SELECT  `amount` FROM `wallet` WHERE `status` = '1' AND `wallet_no` = '$registry'"); 
		  
		  $new_amount = $wallet_amount - $demand_amount;
		  
		  
		  
		  
		  
		  
		  
		   $sql_1 = "UPDATE `wallet` SET  `amount` = '$new_amount'  WHERE `status` = '1' AND `wallet_no` = '$registry'";
		  $sql_1 = mysqli_query($conn, $sql_1) or die(mysqli_error($conn));
		  
		
		
		
		
		
		
		
		
		
		
		echo '<div class="alert alert-success alert-dismissible mb-0" role="alert">
		   <button type="button" class="close" data-dismiss="alert">×</button>
			<div class="alert-icon contrast-alert">
			 <i class="fa fa-exclamation-triangle"></i>
			</div>
			<div class="alert-message">
			  <span><strong>Yay!</strong> Send Sucessfullyr!<br>
<strong> '.$message.'</strong></span>
			</div>
		  </div>';
	 
		
		
 
		
	}
	else
	{
		
		 
	 
 echo '<div class="alert alert-danger alert-dismissible mb-0" role="alert">
		   <button type="button" class="close" data-dismiss="alert">×</button>
			<div class="alert-icon contrast-alert">
			 <i class="fa fa-exclamation-triangle"></i>
			</div>
			<div class="alert-message">
			  <span><strong>Oop!</strong> Please try again later!<br>
<strong> '.$message.'</strong></span>
			</div>
		  </div>';
				 
	}
}
 
	 
			  
			  	
		if($comment != "")
		{
			$aid = $myName->showName($conn, "SELECT `id` FROM  `userfiles` WHERE (`group_code` = '$code' or `filecode` = '$code')"); 
			
				 $sql12 = "INSERT INTO `document_comment`(`document_id`, `document_code`, `commenting`, `status`, `created_date`, `registeredby`) VALUES
('$aid','$code','$comment', '1', '$datetime', '$emailing')";
 
 $process = mysqli_query($conn, $sql12) or die(mysqli_error($conn));
		}
			  
			  
		 
		  echo '<div class="btn btn-success btn-lg">Information Submitted Successfully.</a></div>'; 
		
	 
	  }
	 }else if($petty == 2)
		 {
		 
		 //data/airtime
			 
			 
			if($demand_amount > $wallet_amount)
	  {
		 echo'<a href="#"class="btn btn-danger btn-lg">Amount in the wallet is too low.  <br />Please try again later.</a><br />';   
		  
	  }
	  else
	  {
	 
	  
		  $biller_code = $myName->showName($conn, "SELECT `subcat` FROM `payall` WHERE `code` = '$code'");   
		  $product_code = $myName->showName($conn, "SELECT `product` FROM `payall` WHERE `code` = '$code'");   
		  $label = $myName->showName($conn, "SELECT `account_number` FROM `userfiles` WHERE `group_code` = '$code' or `filecode` = '$code'");   
		  $amount = $myName->showName($conn, "SELECT `amount` FROM `userfiles` WHERE `group_code` = '$code' or `filecode` = '$code'");   
		  
		  
		  
				
			 
			 
	 $product_name = $myName->showName($conn2, "SELECT `name` FROM `product_information` WHERE `code` = '$product_code' AND `biller` = '$biller_code'");   $key1p = $myName->showName($conn2, "SELECT `ip` FROM `application` WHERE `status` = '1'"); 
   $fee = $myName->showName($conn2, "SELECT `fee` FROM `application` WHERE `status` = '1'"); 
   $flutterapisecret = $myName->showName($conn2, "SELECT `flutterapisecret` FROM `application` WHERE  `status` = '1'"); 
   $merchant_key = $myName->showName($conn2, "SELECT `merchant_key` FROM `application` WHERE  `status` = '1'"); 
	
	  $rave_unique_id = $myName->showName($conn2, "SELECT `id` FROM `product_information` WHERE `code` = '$product_code' AND `biller` = '$biller_code'");
$converted = base64_encode(trim($merchant_key));
 
 
			
			
		 
				//$amount2 = 500; 
		 
	   $url = trim("");
 $reff =  $code;	
  			 

$ch1 = curl_init();


curl_setopt($ch1, CURLOPT_URL, "https://flutterwaveprodv2.com/billpayment/api/bill/pay");
//curl_setopt($ch1, CURLOPT_URL, "https://flutterwaveprodv2.com/billpayment/api/bill/pay");

curl_setopt($ch1, CURLOPT_RETURNTRANSFER, TRUE);

curl_setopt($ch1, CURLOPT_HEADER, FALSE);

curl_setopt($ch1, CURLOPT_POST, TRUE);

curl_setopt($ch1, CURLOPT_POSTFIELDS, "{

  \"amount\": $amount,

  \"customerid\": \"$label\",

  \"transactionreference\": \"$reff\",

  \"billercode\": \"$biller_code\",

  \"productcode\": \"$product_code\"

}");

 curl_setopt($ch1, CURLOPT_HTTPHEADER, array(

  "Content-Type: application/json",

  "Authorization: Basic ".$converted

));

 

$response = curl_exec($ch1);

 
		 

 $err = curl_error($ch1);

if ($err) {
 	
	
	$value = '<div class="alert alert-danger mb-1" role="alert">cURL Error:' . $err.'</div>'; 
} else {

	
	 $resp = json_decode($response, true);

  $response1 = json_decode($response);  
	  	$response12 = json_decode($response, true);
	
	
	
	 $response_code =  $response12['data']['response_code'];
	
	$description =  $response1->description;
	$status1 =  $response1->status;
	 
	echo $response_code.$description;
	
	
 if($status1 == "success" and $response_code == "00")
	{ 
		
		 $name = "";
	 	$date = $resp['data']['date'];
        $amount = $resp['data']['amount'];
        $balance = $resp['data']['balance'];
        $transaction_reference = $resp['data']['transaction_reference'];
        $response_message = $resp['data']['response_message'];
        $flw_reference = $resp['data']['flw_reference'];
        $biller_code = $resp['data']['biller_code'];
        $product_code = $resp['data']['product_code'];
 		$customer_name = $resp['data']['extra']['customer_name'];
        $customer_id = $resp['data']['extra']['customer_id'];
        $token = $resp['data']['extra']['token'];
	 
	 
	 
	 
	 
	  $value =  ' <div class="alert alert-success mb-1" role="alert">
                  '.$response_message.' - '.$description.'
                </div>';
			 
	 $product_name = $myName->showName($conn2, "SELECT `name` FROM `product_information` WHERE `code` = '$code' AND `biller` = '$biller_code'");

		$commissiononfee2 = 0;
	 $sql = 	mysqli_query($conn2,"INSERT INTO `transaction_information`(`unique_id`,   `billercode`, `itemcode`, `amount`, `commissiononfee`,  `registered_by`, `created_at`, `message`, `status`, `reff`,  `rave_unique_id` ,  `customer_id` ) VALUES('$code','$biller_code','$product_code','$amount','$commissiononfee2', '$emailing', '$datetime','Requisipro','1','$reff', '$rave_unique_id', '$label') ")or die("ERROR OCCURED: ".mysqli_error($conn2)); 
		
		
		
		 
	
	 
	 
	 
	 
	 
	 
	 
	 //stop here
	  $code =$_POST['code'];
	 
	 
	 $registry = $myName->showName($conn, "SELECT `registry` FROM  `userfiles` WHERE (`group_code` = '$code' or `filecode` = '$code')"); 
	 $amount = $myName->showName($conn, "SELECT `amount` FROM  `userfiles` WHERE (`group_code` = '$code' or `filecode` = '$code')"); 
	 
	 
	 
	 $wallet_amount = $myName->showName($conn, "SELECT  `amount` FROM `wallet` WHERE `status` = '1' AND `wallet_no` = '$registry'"); 
	
	 
	  
		  $new_amount = $wallet_amount - round($amount,0);
		  
		  
		  
		  
		  
		  
		  
		   $sql_1 = "UPDATE `wallet` SET  `amount` = '$new_amount'  WHERE `status` = '1' AND `wallet_no` = '$registry'";
		  $sql_1 = mysqli_query($conn, $sql_1) or die(mysqli_error($conn));
		  
		
		
		
		
		
		 $sql = 	mysqli_query($conn2,"INSERT INTO `transaction_payment`(`reff`, `transaction_amount`, `message`, `registeredby`, `created_at`, `status` ) VALUES('$code','$amount','Requisipro', '$emailing', '$datetime','1') ")or die("ERROR OCCURED: ".mysqli_error($conn)); 	
		
		
		
		
		echo '<div class="alert alert-success alert-dismissible mb-0" role="alert">
		   <button type="button" class="close" data-dismiss="alert">×</button>
			<div class="alert-icon contrast-alert">
			 <i class="fa fa-exclamation-triangle"></i>
			</div>
			<div class="alert-message">
			  <span><strong>Yay!</strong> Send Sucessfullyr!<br>
<strong> '.$message.'</strong></span>
			</div>
		  </div>';
	 
		
		
 
		
	}
	else
	{
		
		 
	 
 echo '<div class="alert alert-danger alert-dismissible mb-0" role="alert">
		   <button type="button" class="close" data-dismiss="alert">×</button>
			<div class="alert-icon contrast-alert">
			 <i class="fa fa-exclamation-triangle"></i>
			</div>
			<div class="alert-message">
			  <span><strong>Oop!</strong> Please try again later!<br>
<strong> '.$message.'</strong></span>
			</div>
		  </div>';
				 
	}
}
 
	 
			  
			  	
		if($comment != "")
		{
			$aid = $myName->showName($conn, "SELECT `id` FROM  `userfiles` WHERE (`group_code` = '$code' or `filecode` = '$code')"); 
			
				 $sql12 = "INSERT INTO `document_comment`(`document_id`, `document_code`, `commenting`, `status`, `created_date`, `registeredby`) VALUES
('$aid','$code','$comment', '1', '$datetime', '$emailing')";
 
 $process = mysqli_query($conn, $sql12) or die(mysqli_error($conn));
		}
			  
			  
		 
		  echo '<div class="btn btn-success btn-lg">Information Submitted Successfully.</a></div>'; 
		
	 
	  } 
			 
			 
			 
			 
			 
		 }
		 
		 else
	 {
		 
	 
		 
	   $url = trim("");
 $reff =  $code;	
  $flutterapi = trim($myName->showName($conn, "SELECT `flutterapisecret` FROM `application` WHERE  `status` = '1'")); 
    
			 

$ch = curl_init();

			 $currency  = "NGN";
			 $narration = "Requisition Granted For ".$name.". Code:".$code ;


curl_setopt($ch, CURLOPT_URL, "https://api.ravepay.co/v2/gpx/transfers/create");

curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);

curl_setopt($ch, CURLOPT_HEADER, FALSE);

curl_setopt($ch, CURLOPT_POST, TRUE);

curl_setopt($ch, CURLOPT_POSTFIELDS, "{
 \"account_bank\": \"$bank\",
 \"account_number\": \"$label\",
 \"amount\": \"$amount\",
 \"seckey\": \"$flutterapi\",
  \"narration\": \"$narration\",
  \"currency\": \"$currency\",
  \"reference\": \"$reff\"

}");
 
		 


curl_setopt($ch, CURLOPT_HTTPHEADER, array(

  "Content-Type: application/json",

  "Authorization: Basic ".$converted

));



$response = curl_exec($ch);

curl_close($ch);

 

$err = curl_error($ch);

	 
			 
 

if ($err) {
  //echo "cURL Error #:" . $err;
	
	echo'<a href="#" class="btn btn-danger btn-lg">cURL Error #:' . $err.'</a><br />'; 
} else {
	 
	 
	 $resp = json_decode($response, true);
 $response1 = json_decode($response);  
	  	$response12 = json_decode($response, true);
	 $status23 =  $response12['data']['status'];
	
	
	 $response_code =  $response12['data']['responsecode'];
	
	$status1 =  $response1->status;
	$message =  $response1->message;
 
	 
	if($status1 == "success" and $message == "TRANSFER-CREATED")
	{ 
		 
		
		 $fullname = "";
	 	$account_number = $resp['data']['account_number'];
        $bank_code = $resp['data']['bank_code'];
        $fullname = $resp['data']['fullname'];
        $date_created = $resp['data']['date_created'];
        $amount = $resp['data']['amount'];
        $fee = $resp['data']['fee'];
        $reference = $resp['data']['reference'];
        $narration = $resp['data']['narration'];
        $complete_message = $resp['data']['complete_message'];
        $bank_name = $resp['data']['bank_name'];
		
		
		
		
	/*	
		 
		  $wallet_amount = $myName->showName($conn, "SELECT  `amount` FROM `wallet` WHERE `status` = '1'"); 
		  
		  $new_amount = $wallet_amount - $demand_amount;
		  
		  
		  
		  
		  
		  
		  
		   $sql_1 = "UPDATE `wallet` SET  `amount` = '$new_amount'  WHERE 1";
		  $sql_1 = mysqli_query($conn, $sql_1) or die(mysqli_error($conn));*/
		  
 	echo '<div class="alert alert-success alert-dismissible mb-0" role="alert">
		   <button type="button" class="close" data-dismiss="alert">×</button>
			<div class="alert-icon contrast-alert">
			 <i class="fa fa-exclamation-triangle"></i>
			</div>
			<div class="alert-message">
			  <span><strong>Yay!</strong> Send Sucessfullyr!<br>
<strong> '.$message.'</strong></span>
			</div>
		  </div>';
	 
		
		
 
		
	}
	else
	{
		
		 
	 
 echo '<div class="alert alert-danger alert-dismissible mb-0" role="alert">
		   <button type="button" class="close" data-dismiss="alert">×</button>
			<div class="alert-icon contrast-alert">
			 <i class="fa fa-exclamation-triangle"></i>
			</div>
			<div class="alert-message">
			  <span><strong>Oop!</strong> Please try again later!<br>
<strong> '.$message.'</strong></span>
			</div>
		  </div>';
				 
	}
}
 
	 
			  
			  	
		if($comment != "")
		{
			$aid = $myName->showName($conn, "SELECT `id` FROM  `userfiles` WHERE (`group_code` = '$code' or `filecode` = '$code')"); 
			
				 $sql12 = "INSERT INTO `document_comment`(`document_id`, `document_code`, `commenting`, `status`, `created_date`, `registeredby`) VALUES
('$aid','$code','$comment', '1', '$datetime', '$emailing')";
 
 $process = mysqli_query($conn, $sql12) or die(mysqli_error($conn));
		}
			  
			  
		 
		  echo '<div class="btn btn-success btn-lg">Information Submitted Successfully.</a></div>'; 
		
		 
		 
	 }
	 
 }

 
$conn->close();
	
 
?>

 