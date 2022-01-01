 <?php
/* ini_set('display_startup_errors', 1);
ini_set('display_errors', 1);
error_reporting(-1);*/
 include("config/DB_config.php");
$emailing = "";
 
 if(isset($_POST['validate']))
 {
 
 if(isset($_SESSION['email']))
 {
$emailing  = $_SESSION['email'];
 }

  $code =   base64_decode(strtr($_POST['codec'], '-_,', '+/='));
 $bank = mysqli_real_escape_string($conn,$_POST['bank']);
$acct_num = mysqli_real_escape_string($conn, $_POST['acct_num']);
$label = mysqli_real_escape_string($conn, $_POST['acct_num']);
     
     

     
     
     $rand =  date("YmdGis")."/".rand(28736, 8735673);
	
  //$user_fullname = $myName->showName($conn, "SELECT `name` FROM `user_unit` WHERE  `account_number` = '$emailing'"); 
						
						
  $flutterapi = $myName->showName($conn, "SELECT `flutterapi` FROM `application` WHERE  `status` = '1'"); 
  $user_fullname = $myName->showName($conn, "SELECT `name` FROM `user_unit` WHERE  `account_number` = '$emailing'"); 
  //$amount = $myName->showName($conn, "SELECT  `amount_calc` FROM `journey_plan` WHERE `registeredby` = '$emailing' and `status` = '4' and `code` = '$code'"); 
     
 $amount = $myName->showName($conn, "SELECT `owners_share` FROM `transaction_information` WHERE  `code` = '$code' AND  `truck_owner` = '$emailing' AND `status` = 5");     
     
     
    
 $converted = "";
  
			 

$ch = curl_init();



curl_setopt($ch, CURLOPT_URL, "https://api.ravepay.co/flwv3-pug/getpaidx/api/resolve_account");

curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);

curl_setopt($ch, CURLOPT_HEADER, FALSE);

curl_setopt($ch, CURLOPT_POST, TRUE);

curl_setopt($ch, CURLOPT_POSTFIELDS, "{

  \"recipientaccount\": \"$acct_num\",

  \"destbankcode\": \"$bank\",

  \"PBFPubKey\": \"$flutterapi\"

}");



curl_setopt($ch, CURLOPT_HTTPHEADER, array(

  "Content-Type: application/json",

  "Authorization: Basic ".$converted

));



$response = curl_exec($ch);

//curl_close($ch);

 

$err = curl_error($ch);

				
			 
 

if ($err) {
  //echo "cURL Error #:" . $err;
	
	echo'<a href="#" class="btn btn-danger btn-lg">cURL Error #:' . $err.'</a><br />'; 
} else {
	 
	 
	 $resp = json_decode($response, true);
 $response1 = json_decode($response);  
	  	$response12 = json_decode($response, true);
	 $status23 =  $response12['data']['status'];
	
	
	 $response_code =  $response12['data']['data']['responsecode'];
	
	$status1 =  $response1->status;
 
	 
	if($status1 == "success" and $response_code == "00")
	{ 
		 
		
	
	 	$accountnumber = $resp['data']['data']['accountnumber'];
        $accountname = $resp['data']['data']['accountname'];
        $responsemessage = $resp['data']['data']['responsemessage'];
        $uniquereference = $resp['data']['data']['uniquereference'];
        
        
       // echo  $accountname." <strong>----</strong>".$responsemessage;
        
        
           $url = trim("");
 $reff =  $code ." ".$uniquereference;	
  $flutterapisecret = trim($myName->showName($conn, "SELECT `flutterapisecret` FROM `application` WHERE  `status` = '1'")); 
    
        
       // echo $flutterapisecret." flutterapisecret";
			 

$ch1 = curl_init();

			 $currency  = "NGN";
			 $narration = "Cashout for ".$user_fullname.". Code:".$code ;


curl_setopt($ch1, CURLOPT_URL, "https://api.ravepay.co/v2/gpx/transfers/create");

curl_setopt($ch1, CURLOPT_RETURNTRANSFER, TRUE);

curl_setopt($ch1, CURLOPT_HEADER, FALSE);

curl_setopt($ch1, CURLOPT_POST, TRUE);

curl_setopt($ch1, CURLOPT_POSTFIELDS, "{
 \"account_bank\": \"$bank\",
 \"account_number\": \"$label\",
 \"amount\": \"$amount\",
 \"seckey\": \"$flutterapisecret\",
  \"narration\": \"$narration\",
  \"currency\": \"$currency\",
  \"reference\": \"$reff\"

}");
 
		 


curl_setopt($ch1, CURLOPT_HTTPHEADER, array(

  "Content-Type: application/json",

  "Authorization: Basic ".$converted

));



$response = curl_exec($ch1);



 

$err = curl_error($ch1);

	 
		 
 

if ($err) {
  //echo "cURL Error #:" . $err;
	
	echo'<a href="#" class="btn btn-danger btn-lg">cURL Error #:' . $err.'</a><br />'; 
} else {
	 
	 
	 $resp = json_decode($response, true);
 $response1 = json_decode($response);  
	  	$response12 = json_decode($response, true);
	 $status23 =  $response12['data']['status'];
	
	
	 //$response_code =  $response12['data']['responsecode'];
	
	$status1 =  $response1->status;
	$message =  $response1->message;
    
    
    //echo $message." message ".$status1;
 
	 
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
        
 
        
 $sql = "INSERT INTO `logistics_payment_details`(`code`, `bank`, `account_number`, `account_name`, `reff`, `naration`, `message`, `status`, `created_at`) VALUES
('$code','$bank_name', '$account_number', '$fullname', '$reference', '$narration', '$complete_message', '1', '$datetime')";
 
 $process = mysqli_query($conn, $sql) or die(mysqli_error($conn));	
        
 
        
 $sql = "UPDATE `transaction_information` SET `status` = 2 WHERE `code` = '$code' AND `truck_owner` = '$emailing'";
 
 $process = mysqli_query($conn, $sql) or die(mysqli_error($conn));
        
        
        
        echo '<div class="alert alert-success alert-dismissible mb-0" role="alert">
		   <button type="button" class="close" data-dismiss="alert">×</button>
			<div class="alert-icon contrast-alert">
			 <i class="fa fa-exclamation-triangle"></i>
			</div>
			<div class="alert-message">
			  <span><strong>Hay! </strong>Account Credited Successfully.|||
<strong> '.$complete_message.'</strong></span>
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
			  <span><strong>Oop!</strong>Error Occured. Please try again later.
<strong> '.$message.'</strong></span>
			</div>
		  </div>';
    }
}
        
        
       
		
		curl_close($ch1);	
		
		
		 
		
		 
		
	}
	else
	{
		
	 
	 
				echo '<div class="alert alert-danger alert-dismissible mb-0" role="alert">
		   <button type="button" class="close" data-dismiss="alert">×</button>
			<div class="alert-icon contrast-alert">
			 <i class="fa fa-exclamation-triangle"></i>
			</div>
			<div class="alert-message">
			  <span><strong>Oop!</strong>Account Name of User cannot be verified at this time.<br>Please  check and make corrections.
<strong> '.$message.'</strong></span>
			</div>
		  </div>';
				 
	}
}
 
		
     
     
	 
	 
	 
 }







 
$conn->close();
	
 
?>

 