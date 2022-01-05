<?php	 
 //session_start();
		 //include("config/DB_config.php");
	if(isset($_GET["columnValue"]))
{
	$id = $_GET["id"];
	$TableName = $_GET["table"];
	$column = $_GET["column"];
	$columnValue = $_GET["columnValue"];
	//$approvedUser = $_SESSION['email'];
	$registeredBy = "";
$datetime=date("Y-m-d H:i:s");
if(isset($_SESSION['email']))
{
	$registeredBy = $_SESSION['email'];
}
//column=isSpecials
 $new_amount = 0;
  $myName = new Name();
$amount = 0;

//userfiles&id='.$id.'&columnValue=9
        
        
        if($TableName == "driver")
        {
            $user =   $_GET["user"];
 $update = 	mysqli_query($conn,"UPDATE `user_unit` SET `".$column."` = '$columnValue'   WHERE `account_number` = '$user'") or die("ERROR OCCURED: ".mysqli_error($conn)); 
            
            
        }
        
        if(isset($_GET['approve_id']))
        {
            
            
            $sql11111111 = 	 "UPDATE `truck` SET `status_value` = 1 WHERE  `id` = '$id'";
 mysqli_query($conn, $sql11111111) or die(mysqli_error($conn));
        } 
        
        
        
        
        if(isset($_GET['user']))
        {
            $userValue = $_GET['user'];
            
            $sql = 	 "DELETE FROM `block_users` WHERE  `username` = '$userValue'";
 mysqli_query($conn, $sql) or die(mysqli_error($conn));
        }
          
        if(isset($_GET['update']))
        {
            $account_number = $_GET['update'];
            
          	   
 $password = rand(34,234).rand(34,234).rand(34,234);					
$uuid = uniqid('', true);

$salt = sha1(rand());
        $salt = substr($salt, 0, 10);
        $encrypted = base64_encode(sha1($password . $salt, true) . $salt);
        $hash = array("salt" => $salt, "encrypted" => $encrypted);
         
        $encrypted_password = $hash["encrypted"]; // encrypted password
        $salt = $hash["salt"]; // salt
  
$sql = 	 "UPDATE `user_unit` SET  `updated_at`='$datetime', `registeredby`='$emailing', `unique_id` = '$uuid', `encrypted_password` = '$encrypted_password', `salt`='$salt' , `irrelivant` = '$password' WHERE `account_number` = '$account_number' ";
 
 $process = mysqli_query($conn, $sql) or die(mysqli_error($conn));
            
          if($process)  
          {
              
              $update_phone = $myName->showName($conn, "SELECT `phone` FROM `user_unit` WHERE `account_number` = '$account_number'");		
              $update_email = $myName->showName($conn, "SELECT `email` FROM `user_unit` WHERE `account_number` = '$account_number'");		
              $update_name = $myName->showName($conn, "SELECT `name` FROM `user_unit` WHERE `account_number` = '$account_number'");	
              
              
              
              echo ' <script>
						  var newLine = "\r\n"
            var message = "Password Changed!"
            message += newLine;
            message += " pin change to  '.$password.'";
            message += newLine;
            message += "User will be asked to chnage this default password on first login.";
            alert(message);
						</script>';
	 
              
		if($update_phone !="")
		{
  
	 
			
			
  $message = "Hi, ".$update_name."  New Password on ".$inst_name." is:".$password.". Thank You.";

  
  	 $Sending = new SendingSMS(); 
  							 
						$Sending->smsAPI($update_phone,"Welcome",$message);
							 
		 }
        
          }
            
        }
        
		
		if($TableName == "userfiles" and $columnValue == '9')
				{
			
		 
			$sql = 	 "INSERT INTO `deleted`(`filecode`, `created_date`, `created_by`) VALUES('$id', '$datetime','$registeredBy')";
			$process = mysqli_query($conn, $sql) or die(mysqli_error($conn));
			
		}
		
		
		
		
		
		
			if($TableName == "file_request" and $column == 'status')
				{
			 //mighty
 
 
$update = 	mysqli_query($conn,"UPDATE `".$TableName."` SET `approvedby` = '$registeredBy' WHERE id = '$id'") or die("ERROR OCCURED: ".mysqli_error($conn));
			
	//`file_directory`		
  $file = $myName->showName($conn, "SELECT `file` FROM  `".$TableName."` WHERE `id` = '$id'"); 
				
				$typing = $_GET['type'];
				
				if($typing == 0)
				{
			$update = 	mysqli_query($conn,"UPDATE `file_directory`	 SET `status` = '$columnValue' WHERE id = '$file'") or die("ERROR OCCURED: ".mysqli_error($conn));			
					
				}
				
 	
				if($columnValue == 3)
				{
					
					
				
				}
				
		
				
				
				/*  $message = "ATTENTION. 
Wallet with Transacction Code:".$tcode." for wallet ID: ".$wallet_no.". Amount".number_format($amount, 2).".Please review and activate.";

  
  	 $Sending = new SendingSMS(); 
  							 
							 $Sending->smsAPI($phone,"LOADME",$message);
							 */
				
				
				
				
				
				
				
				
				
				
				}
		
		
		
		
		
		
		
if(!isset($_GET['walletno']))
{
$update = 	mysqli_query($conn,"UPDATE `".$TableName."` SET `".$column."` = '$columnValue'   WHERE id = '$id'") or die("ERROR OCCURED: ".mysqli_error($conn));


//table=customer&id='.$id.'&columnValue=2&column=inspected_status










}
else
{
	  $tinwallet = $myName->showName($conn, "SELECT `amount` FROM `e_wallet_balance`"); 
	  $request_amount =  $_GET['amount'];	
	  
	if(($tinwallet < $request_amount) or ($request_amount > $tinwallet ))
   {
	  //$update = 	mysqli_query($conn,"UPDATE `".$TableName."` SET `".$column."` = '$columnValue'   WHERE id = '$id'") or die("ERROR OCCURED: ".mysqli_error($conn)); 
	  
	   echo'<a href="#" class="btn btn-danger btn-lg">Fets Wallet amount too low. Please fund your wallet.</a>';	
	      
   }
   else
   {
	   
	  
	$update = 	mysqli_query($conn,"UPDATE `".$TableName."` SET `".$column."` = '$columnValue'   WHERE id = '$id'") or die("ERROR OCCURED: ".mysqli_error($conn));
	}
}
 
	
			if($TableName == "electric_commission_sharing")
				{
				$update = 	mysqli_query($conn,"UPDATE `electric_commission_sharing_2` SET `".$column."` = '$columnValue'   WHERE id = '$id'") or die("ERROR OCCURED: ".mysqli_error($conn));
			
					
				}
				
				if($TableName == "e_wallet_request")
				{
					if($columnValue == 1)
						{
					
$walletno = $_GET['walletno'];			 		 
$phone = $myName->showName($conn, "SELECT `username` FROM `users` WHERE `walletno` = '$walletno'"); 
$bizname = $myName->showName($conn, "SELECT `businessname` FROM `users` WHERE `walletno` = '$walletno'");
$bal = $myName->showName($conn, "SELECT sum(`amount`) FROM `e_wallet` WHERE `walletno` = '$walletno' AND `status` = 1");	

$request_amount =  $_GET['amount'];	
   
//SELECT * FROM `e_wallet` WHERE 1`amount`, `walletno`
$message = "Dear ".$bizname.".Your wallet prefund of N".$request_amount." has been granted. You Bal is N".$bal.". Thank You.";
$Sending = new SendingSMS(); 
$Sending->smsAPI($phone,"LOADME",$message);
									
							} 
					 
				}
			
			
			
			
			
			if($update)
			{
 if($column == "isSpecials")
 {
	 
  echo '<meta http-equiv="Refresh" content="0; url=updateCustomer.php?unique='.$id.'"> ';
			}
			
				if(isset($_GET['walletno']))
				{
				//amount='.$amount.'&walletno='.$wallet_no.'
				$amount = $_GET['amount'];
				$wallet_no = $_GET['walletno'];
				$tcode = $_GET['tcode'];
				
		 	 
 $usertype = $_SESSION['usertype'];
 $value = '';
 $status = 0;
 if($usertype == 0 or $usertype == "0")
 {
	  $status = 0;
	   $phone = "08099166662";
	   
	  
 // $message = "Pay All Login:-\nUsername:".$phone."Password:".$password;
  $message = "ATTENTION. 
Wallet with Transacction Code:".$tcode." for wallet ID: ".$wallet_no.". Amount".number_format($amount, 2).".Please review and activate.";

  
  	 $Sending = new SendingSMS(); 
  							 
							 $Sending->smsAPI($phone,"LOADME",$message);
							 
							 							 
							  $phone = "08035538658";
  			 
							 $Sending->smsAPI($phone,"LOADME",$message);
							 
							 
							 

 }
 else if ($usertype == 1)
 {
$updating = 	mysqli_query($conn,"UPDATE `".$TableName."` SET `".$column."` = '$columnValue'   WHERE id = '$id'") or die("ERROR OCCURED: ".mysqli_error($conn));	

	$status = 1;
	  
 
   $tinwallet = $myName->showName($conn, "SELECT `amount` FROM `e_wallet_balance`"); 
   
   
   if(($tinwallet < $amount) or ($amount > $tinwallet ))
   {
	   
	     echo'<a href="#" class="btn btn-danger btn-lg">Fets Wallet amount too low. Please fund your wallet.</a>';	
   }
   else
   {
 
 
 
			 $extract_user = mysqli_query($conn, "SELECT  `id`,  `amount`  FROM `e_wallet` WHERE `walletno` = '$wallet_no'") or die(mysqli_error($conn));
		$count = mysqli_num_rows($extract_user);
		 if ($count > 0) {
 //$customer = mysqli_fetch_assoc($extract_user);
  while ($customer=mysqli_fetch_row($extract_user))
    {
 
$id = $customer[0];
$old_amount = $customer[1];
 

 $sql ="INSERT INTO `e_wallet_trend`
(`amount`, `walletno`, `registeredby`, `status`, `updated_at`, `tcode`
) VALUES
('$amount', '$wallet_no', '$registeredBy', '1' , '$datetime', '$tcode')";


$new_amount = $old_amount + $amount;

   
	  $DELsql = 	mysqli_query($conn,"UPDATE `e_wallet` SET `amount` = '$new_amount', `walletno` = '$wallet_no', `registeredby` = '$registeredBy', `status` = $status, `updated_at` = '$datetime', `tcode` = '$tcode' WHERE `id` = '$id'") or die("ERROR OCCURED: ".mysqli_error($conn));

if ($conn->query($sql) === TRUE) {
 
 
// $walletno = $_GET['walletno'];			 		 
$phone = $myName->showName($conn, "SELECT `username` FROM `users` WHERE `walletno` = '$wallet_no'"); 
$bizname = $myName->showName($conn, "SELECT `businessname` FROM `users` WHERE `walletno` = '$wallet_no'");
$bal = $myName->showName($conn, "SELECT sum(`amount`) FROM `e_wallet` WHERE `walletno` = '$wallet_no' AND `status` = 1");	

$request_amount =  $_GET['amount'];	
   
//SELECT * FROM `e_wallet` WHERE 1`amount`, `walletno`
$message = "Dear ".$bizname.".Your wallet prefund of N".$request_amount." has been granted. You Bal is N".$bal.". Thank You.";
$Sending = new SendingSMS(); 
$Sending->smsAPI($phone,"LOADME",$message);
 
 
	
	  $tinwallet = $myName->showName($conn, "SELECT `amount` FROM `e_wallet_balance`"); 
	  
	  $amount_new = $tinwallet -  $amount;
	  
	  $DELsql = 	mysqli_query($conn,"UPDATE `e_wallet_balance` SET `amount` = '$amount_new' WHERE 1") or die("ERROR OCCURED: ".mysqli_error($conn));
	 
	 
	 
	 
	 
	 ////start here
	 
	 
	 
	
 $query = "SELECT `id`, `wallet_num`, `amount`, `status`, `first_prefund`, `due_date`, `created_date`,   `paid_date`, `installment`,`mode`,`isSlit` FROM  `starter_kit_gbese`    WHERE `wallet_num`  = '$wallet_no' AND `status` = 0";  
 

 $extract_user = mysqli_query($conn, $query) or die(mysqli_error("Error Here: ".$conn));
		$count = mysqli_num_rows($extract_user);
		 if ($count > 0) {
 //$customer = mysqli_fetch_assoc($extract_user);
  while ($customer=mysqli_fetch_row($extract_user))
    {
		
	 
 
$id = $customer[0];
$wallet_num = $customer[1];
$amountGbese = $customer[2];
$status = $customer[3];
$first_prefund = $customer[4];
$due_date = $customer[5];
$created_date = $customer[6];
$paid_date = $customer[7];
$installment = $customer[8];
$mode = $customer[9];
$isSlit = $customer[10];

$broken_value = $amountGbese / $installment;
if($installment == 1)
{
	   
	   $newValue1 = $new_amount - $amountGbese;
	   
	  // if($NEWrequiproAmount >= $amountGbese)
	   //{
	  
$update = mysqli_query($conn,"UPDATE  `starter_kit_gbese` SET `status` = 1,`paid_date` = '$datetime' , `first_prefund` = 0 WHERE `id` = '$id' ") or die("ERROR OCCURED: ".mysqli_error($conn));
		   
		   
		   $update= mysqli_query($conn,"UPDATE  `e_wallet` SET `amount` = '$newValue1'  WHERE  `walletno` = '$wallet_no'") or die("ERROR OCCURED: ".mysqli_error($conn));
		   
		//e_wallet   
	  // }
	 
	   
	   //$update=  	mysqli_query($conn,"INSERT INTO `e_wallet`( `amount`, `walletno`, `registeredby`, `status`, `created_date`, `updated_at`, `tcode`, `remark`) VALUES('$amount','$wallet_num','$registeredby',  '1',  '$datetime','$datetime','$txnref', '$responsecode')") or die("ERROR OCCURED: ".mysqli_error($conn));
	
}
else
{
	
if($isSlit == 1 and $isSlit != 0)
{
 

	if($mode == "weekly")
	{
	$dating =  date('Y-m-d');
	$todayDays2 = "";
	for($var  = 1; $var<=$installment; $var++)
	{
		
 
		
$sql ="INSERT INTO `starter_kit_gbese`(`wallet_num`, `amount`, `status`, `first_prefund`, `due_date`, `created_date`, `registeredby`, `installment`,  `mode`, `isSlit`) VALUES('$wallet_no', '$broken_value', '0', '1','$dating','$datetime', '$registeredBy', '$installment','$mode', 0)";

			 
			  $extract_user = mysqli_query($conn,  $sql) or die(mysqli_error($conn)); 
		 	
 $pDate = strtotime($dating.' + 1 week');
$dating =  date('Y-m-d',$pDate);
		  
   
			  
	}
	
	
 
	
	$newValue = $new_amount - $broken_value;
	
	$today = date('Y-m-d');
	
$update =  	mysqli_query($conn,"UPDATE  `starter_kit_gbese` SET `status` = 1,`paid_date` = '$datetime' WHERE `due_date` = '$today' and `wallet_num` =  '$wallet_no'") or die("ERROR OCCURED: ".mysqli_error($conn));
		   
		   
		   $update=  	mysqli_query($conn,"UPDATE  `e_wallet` SET `amount` = '$newValue'  WHERE  `walletno` = '$wallet_no'") or die("ERROR OCCURED: ".mysqli_error($conn));
	
	
	
}
 

 
$extract_user = mysqli_query($conn,"Delete from `starter_kit_gbese` WHERE `id` = '$id'") or die(mysqli_error($conn)); 
 
		
		
		
	}
	else
	{
		
	 
		 	$today = date('Y-m-d');
			
		 
		 	$amounting = $myName->showName($conn, "SELECT `amount` FROM `starter_kit_gbese` WHERE `status` = 0 AND `wallet_num`  = '$wallet_no'  AND `due_date` = '$today' "); 
	 $newValue = $new_amount - $amounting;
 
 
 if($amounting != "" or $amounting != null)
 {
	 
	 $update =  	mysqli_query($conn,"UPDATE  `starter_kit_gbese` SET `status` = 1,`paid_date` = '$datetime' WHERE `due_date` = '$today' and `wallet_num` =  '$wallet_no'") or die("ERROR OCCURED: ".mysqli_error($conn));
	  $update=  	mysqli_query($conn,"UPDATE  `e_wallet` SET `amount` = '$newValue'  WHERE  `walletno` = '$wallet_no'") or die("ERROR OCCURED: ".mysqli_error($conn));
 }
	
			   
		   
		   
		  
		
	}
	
	
	
 
	
	
	
	
	
	
	
	
	
}



	}
	
		 }
	
	
	
	
	
	////end here
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	  
	  
	
}
 





	}
	
		 }
		 else
		 {
			 
	 	 $new_amount = $amount;
 $sql = 	 "INSERT INTO `e_wallet_trend`
(`amount`, `walletno`, `registeredby`, `status`, `updated_at`,`tcode`
) VALUES
('$amount', '$wallet_no', '$registeredBy', '$status' , '$datetime', '$tcode')";

 
 $sql1 = 	mysqli_query($conn,"INSERT INTO `e_wallet`
(`amount`, `walletno`, `registeredby`, `status`, `updated_at`, `tcode`
) VALUES
('$amount', '$wallet_no', '$registeredBy', '$status' , '$datetime', '$tcode')") or die("ERROR OCCURED: ".mysqli_error($conn));


if ($conn->query($sql) === TRUE) {
 
 
	 
	  $tinwallet = $myName->showName($conn, "SELECT `amount` FROM `e_wallet_balance`"); 
	  
	  $amount_new = $tinwallet -  $amount;
	  $DELsql = 	mysqli_query($conn,"UPDATE `e_wallet_balance` SET `amount` = '$amount_new' WHERE 1") or die("ERROR OCCURED: ".mysqli_error($conn));
 
	   
	   
	    $phone = $myName->showName($conn, "SELECT `phone1` FROM `users` WHERE `walletno` = '$wallet_no'"); 
	  // $phone = "08099166662";
	  
	    $lname = $myName->showName($conn, "SELECT `lname` FROM `users` WHERE `walletno` = '$wallet_no'");
	   
	  
 // $message = "Pay All Login:-\nUsername:".$phone."Password:".$password;
  $message = "Hi ".$lname.". Your for wallet ID: ".$wallet_no." has been credited with ".number_format($amount, 2).". Thank You.";

  
  	 $Sending = new SendingSMS(); 
  							 
							 $Sending->smsAPI($phone,"LOADME",$message);
							 
							 
							 /// here
							 
							 
							
	
 $query = "SELECT `id`, `wallet_num`, `amount`, `status`, `first_prefund`, `due_date`, `created_date`,   `paid_date`, `installment`,`mode`,`isSlit` FROM  `starter_kit_gbese`    WHERE `wallet_num`  = '$wallet_no' AND `status` = 0";  
 

 $extract_user = mysqli_query($conn, $query) or die(mysqli_error("Error Here: ".$conn));
		$count = mysqli_num_rows($extract_user);
		 if ($count > 0) {
 //$customer = mysqli_fetch_assoc($extract_user);
  while ($customer=mysqli_fetch_row($extract_user))
    {
		
	 
 
$id = $customer[0];
$wallet_num = $customer[1];
$amountGbese = $customer[2];
$status = $customer[3];
$first_prefund = $customer[4];
$due_date = $customer[5];
$created_date = $customer[6];
$paid_date = $customer[7];
$installment = $customer[8];
$mode = $customer[9];
$isSlit = $customer[10];

$broken_value = $amountGbese / $installment;
if($installment == 1)
{
	
	   
	   $newValue1 = $new_amount - $amountGbese;
	   
	  // if($NEWrequiproAmount >= $amountGbese)
	   //{
	  
$update = mysqli_query($conn,"UPDATE  `starter_kit_gbese` SET `status` = 1,`paid_date` = '$datetime' , `first_prefund` = 0 WHERE `id` = '$id' ") or die("ERROR OCCURED: ".mysqli_error($conn));
		   
		   
		   $update=  	mysqli_query($conn,"UPDATE  `e_wallet` SET `amount` = '$newValue1'  WHERE  `walletno` = '$wallet_num'") or die("ERROR OCCURED: ".mysqli_error($conn));
		   
		//e_wallet   
	  // }
	 
	   
	   //$update=  	mysqli_query($conn,"INSERT INTO `e_wallet`( `amount`, `walletno`, `registeredby`, `status`, `created_date`, `updated_at`, `tcode`, `remark`) VALUES('$amount','$wallet_num','$registeredby',  '1',  '$datetime','$datetime','$txnref', '$responsecode')") or die("ERROR OCCURED: ".mysqli_error($conn));
	
}
else
{
	
if($isSlit == 1 and $isSlit != 0)
{
 

	if($mode == "weekly")
	{
	$dating =  date('Y-m-d');
	$todayDays2 = "";
	for($var  = 1; $var<=$installment; $var++)
	{
		
 
		
$sql ="INSERT INTO `starter_kit_gbese`(`wallet_num`, `amount`, `status`, `first_prefund`, `due_date`, `created_date`, `registeredby`, `installment`,  `mode`, `isSlit`) VALUES('$wallet_no', '$broken_value', '0', '1','$dating','$datetime', '$registeredBy', '$installment','$mode', 0)";

			 
			  $extract_user = mysqli_query($conn,  $sql) or die(mysqli_error($conn)); 
		 	
 $pDate = strtotime($dating.' + 1 week');
$dating =  date('Y-m-d',$pDate);
		  
   
			  
	}
	
	
 
	
	$newValue = $new_amount - $broken_value;
	
	$today = date('Y-m-d');
	
$update =  	mysqli_query($conn,"UPDATE  `starter_kit_gbese` SET `status` = 1,`paid_date` = '$datetime' WHERE `due_date` = '$today' and `wallet_num` =  '$wallet_no'") or die("ERROR OCCURED: ".mysqli_error($conn));
		   
		   
		   $update=  	mysqli_query($conn,"UPDATE  `e_wallet` SET `amount` = '$newValue'  WHERE  `walletno` = '$wallet_no'") or die("ERROR OCCURED: ".mysqli_error($conn));
	
	
	
}
else if($mode == "monthly")
{
	$dating =  date('Y-m-d');
	$todayDays2 = "";
	for($var  = 1; $var  <= $installment; $var++)
	{
	 	
		 
$sql ="INSERT INTO `starter_kit_gbese`(`wallet_num`, `amount`, `status`, `first_prefund`, `due_date`, `created_date`, `registeredby`, `installment`,  `mode`, `isSlit`) VALUES('$wallet_no', '$broken_value', '0', '1','$dating','$datetime', '$registeredBy', '$installment','$mode', 0)";
 		 
$extract_user = mysqli_query($conn,$sql) or die(mysqli_error($conn)); 
  $pDate = strtotime($dating.' + 1 month');
$dating =  date('Y-m-d',$pDate);
 
   
			  
	}
 
	$newValue = $new_amount - $broken_value;
	
	$today = date('Y-m-d');
	
$update =  	mysqli_query($conn,"UPDATE  `starter_kit_gbese` SET `status` = 1,`paid_date` = '$datetime' WHERE `due_date` = '$today' and    `wallet_num` =  '$wallet_no'") or die("ERROR OCCURED: ".mysqli_error($conn));
		   
		   
$update=  	mysqli_query($conn,"UPDATE  `e_wallet` SET `amount` = '$newValue'  WHERE  `walletno` = '$wallet_no'") or die("ERROR OCCURED: ".mysqli_error($conn));
	
	
}

 
$extract_user = mysqli_query($conn,"Delete from `starter_kit_gbese` WHERE `id` = '$id'") or die(mysqli_error($conn)); 
 
		
		
		
	}
	else
	{
		
	 
		 	$today = date('Y-m-d');
			
		 
		 	$amounting = $myName->showName($conn, "SELECT `amount` FROM `starter_kit_gbese` WHERE `status` = 0 AND `wallet_num`  = '$wallet_no'  AND `due_date` = '$today' "); 
	 $newValue = $new_amount - $amounting;
 
 
 if($amounting != "" or $amounting != null)
 {
	 
	 $update =  	mysqli_query($conn,"UPDATE  `starter_kit_gbese` SET `status` = 1,`paid_date` = '$datetime' WHERE `due_date` = '$today' and `wallet_num` =  '$wallet_no'") or die("ERROR OCCURED: ".mysqli_error($conn));
	  $update=  	mysqli_query($conn,"UPDATE  `e_wallet` SET `amount` = '$newValue'  WHERE  `walletno` = '$wallet_no'") or die("ERROR OCCURED: ".mysqli_error($conn));
 }
	
			   
		   
		   
		  
		
	}
	
	
	
 
	
	
	
	
	
	
	
	
	
}



	}
	
		 }
	
	
							 
							 
							 
							 
							 
							 
							 
							 
							 
							 
							 
 
}
			 
		 }
				 
	 

 }
 //up here
					
				}
			 
			 
			 echo'<a href="#" class="btn btn-success btn-lg">Information updated successfully. Thank You.</a>';	
		
					 echo '<meta http-equiv="Refresh" content="3; url='.$_SERVER['HTTP_REFERER'].'"> ';
		
 
			} 
			else
			{
//echo'<a href="#" class="btn btn-danger btn-lg">Information not updated successfully. Please try again later.</a>';	

	 //echo '<meta http-equiv="Refresh" content="3; url='.$_SERVER['HTTP_REFERER'].'"> ';
			}			 	
						
						
						
			  echo'<a href="#" class="btn btn-success btn-lg">Information updated successfully. Thank You.</a>';	
		
					 echo '<meta http-equiv="Refresh" content="3; url='.$_SERVER['HTTP_REFERER'].'"> ';
 
							 
			 
				} 
				else
			{
echo'<a href="#" class="btn btn-danger btn-lg">Information not updated successfully. Please try again later.</a>';	

	 echo '<meta http-equiv="Refresh" content="3; url='.$_SERVER['HTTP_REFERER'].'"> ';
			}	
						
						
						
						
						
						
						
						
}
						
						
	   
			 
?>
