<?php 
//session_start();
 //date_default_timezone_set('Africa/Lagos');
	 
 
	 $todaydatefull=  date('Y-m-d H:i:s'); 
 include("restricted/config/DB_config.php");
 
 include("restricted/includes/SendingSMS.php");
 include("restricted/includes/view-application-details-general.php");
 

if(isset($_POST['validate']))
{


//i am creating an array to store my validation errors if anyone occur
$errinput_arr = array();

//catching the error with boolean value
$errcatch_flag = false;
$username = "";

global $error, $success, $error2;
//global $name, $address, $email, $pnumber;

 $today=date("Y-m-d"); 
	 $data ="";
	
// by default if get_magic_quotes_gpc() function is on it automatically perform an addslahes() function to the input. This is is basically to clean the clean the input with trim() //and the stripslashes() function
function clean($myinput)
{

if(get_magic_quotes_gpc() == 1)
{
  $myinput = @trim($myinput);
  $myinput = stripslashes($myinput);
}

//I am using this function mysql_real_escape_string to make my data save before i send it to the database: preventing it from an attack
return $myinput;

}

//I am using the function above to clean all my input
 
 
	
//$user = clean($_POST['user']);	
$email = clean($_POST['email']);
//$username = trim(clean($_POST['username']));

if(strlen($email) == 0 )
{
 

$errcatch_flag = true;
$resp = "Username is a reqiured field";
	$response = "Failed";
	$level = "Server";
 $data = '{"resp":"'.$response.'", "Message":"'.$resp.'", "stats":"'.$level.'"}';
 echo '<div class="alert alert-danger">
 <button type="button" class="close" data-dismiss="alert" aria-hidden="true"><i class="icon-cross"></i></button>
 <span class="vd_alert-icon"><i class="fa fa-exclamation-circle vd_red"></i></span><strong>Oh snap!</strong> Username is a reqiured field.!</div>'; 

}
 
else
{

$table = "";
 

$usertype = "";

 
	
$statement = "select * from `user_unit` where (`email` = '$email' or `phone` = '$email')";
$result =mysqli_query($conn,$statement) or die("ERROR OCCURED: ".mysqli_error($conn));

if($result)
{
if(mysqli_num_rows($result) == 1)
{
	// `irrelivant` ,`name` 
	
$customer = mysqli_fetch_assoc($result);
	 $username = $customer['email'];
	 $email = $customer['email'];
 $emailing = $customer['account_number'];
$password = $customer['irrelivant'];
	$name = $customer['name'];
	$phone = $customer['phone'];
    
    
    
    $statement = "UPDATE `user_unit` SET `password_update` = 0  WHERE (`email` = '$email' or `phone` = '$email')";
$result =mysqli_query($conn,$statement) or die("ERROR OCCURED: ".mysqli_error($conn));
    
    
    
 
	$sendEmail =  '<html xmlns="http://www.w3.org/1999/xhtml" style="font-family: \'Helvetica Neue\', Helvetica, Arial, sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;">
<head>
<meta name="viewport" content="width=device-width" />
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Change Password</title>


<style type="text/css">
img {
max-width: 100%;
}
body {
-webkit-font-smoothing: antialiased; -webkit-text-size-adjust: none; width: 100% !important; height: 100%; line-height: 1.6em;
}
body {
background-color: #f6f6f6;
}
@media only screen and (max-width: 640px) {
  body {
    padding: 0 !important;
  }
  h1 {
    font-weight: 800 !important; margin: 20px 0 5px !important;
  }
  h2 {
    font-weight: 800 !important; margin: 20px 0 5px !important;
  }
  h3 {
    font-weight: 800 !important; margin: 20px 0 5px !important;
  }
  h4 {
    font-weight: 800 !important; margin: 20px 0 5px !important;
  }
  h1 {
    font-size: 22px !important;
  }
  h2 {
    font-size: 18px !important;
  }
  h3 {
    font-size: 16px !important;
  }
  .container {
    padding: 0 !important; width: 100% !important;
  }
  .content {
    padding: 0 !important;
  }
  .content-wrap {
    padding: 10px !important;
  }
  .invoice {
    width: 100% !important;
  }
}
</style>
</head>

<body itemscope itemtype="http://schema.org/EmailMessage" style="font-family: \'Helvetica Neue\',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; -webkit-font-smoothing: antialiased; -webkit-text-size-adjust: none; width: 100% !important; height: 100%; line-height: 1.6em; background-color: #f6f6f6; margin: 0;" bgcolor="#f6f6f6">

<table class="body-wrap" style="font-family: \'Helvetica Neue\',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; width: 100%; background-color: #f6f6f6; margin: 0;" bgcolor="#f6f6f6"><tr style="font-family: \'Helvetica Neue\',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;"><td style="font-family: \'Helvetica Neue\',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; vertical-align: top; margin: 0;" valign="top"></td>
		<td class="container" width="600" style="font-family: \'Helvetica Neue\',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; vertical-align: top; display: block !important; max-width: 600px !important; clear: both !important; margin: 0 auto;" valign="top">
			<div class="content" style="font-family: \'Helvetica Neue\',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; max-width: 600px; display: block; margin: 0 auto; padding: 20px;">
				<table class="main" width="100%" cellpadding="0" cellspacing="0" style="font-family: \'Helvetica Neue\',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; border-radius: 3px; background-color: #fff; margin: 0; border: 1px solid #e9e9e9;" bgcolor="#fff"><tr style="font-family: \'Helvetica Neue\',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;">
				  <td class="content-wrap aligncenter" style="font-family: \'Helvetica Neue\',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; vertical-align: top; text-align: center; margin: 0; padding: 20px;" align="center" valign="top">
							<table width="100%" cellpadding="0" cellspacing="0" style="font-family: \'Helvetica Neue\',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;"><tr style="font-family: \'Helvetica Neue\',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;"><td class="content-block" style="font-family: \'Helvetica Neue\',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; vertical-align: top; margin: 0; padding: 0 0 20px;" valign="top">
										<h2 class="aligncenter" style="font-family: \'Helvetica Neue\',Helvetica,Arial,\'Lucida Grande\',sans-serif; box-sizing: border-box; font-size: 24px; color: #000; line-height: 1.2em; font-weight: 400; text-align: center; margin: 40px 0 0;" align="center">Thanks for using '.$inst_name.'.</h2>
									</td>
								</tr><tr style="font-family: \'Helvetica Neue\',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;"><td class="content-block aligncenter" style="font-family: \'Helvetica Neue\',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; vertical-align: top; text-align: center; margin: 0; padding: 0 0 20px;" align="center" valign="top">
										<table class="invoice" style="font-family: \'Helvetica Neue\',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; text-align: left; width: 80%; margin: 10px auto;">
										  <tr style="font-family: \'Helvetica Neue\',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;">
										  <td style="font-family: \'Helvetica Neue\',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; vertical-align: top; margin: 0; padding: 5px 0; font-weight: bold; text-align: center; color:black;" valign="top">Please find your credentials below.</td>
										  </tr><tr style="font-family: \'Helvetica Neue\',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;">
										    <td style="font-family: \'Helvetica Neue\',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; vertical-align: top; margin: 0; padding: 5px 0;" valign="top">
													<table class="invoice-items" cellpadding="0" cellspacing="0" style="font-family: \'Helvetica Neue\',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; width: 100%; margin: 0;"><tr style="font-family: \'Helvetica Neue\',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;">
													  <td style="font-family: \'Helvetica Neue\',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; vertical-align: top; border-top-width: 1px; border-top-color: #eee; border-top-style: solid; margin: 0; padding: 5px 0; color:black;" valign="top"><strong>Username</strong>:</td>
															<td width="55%" align="right" valign="top" class="alignright" style="font-family: \'Helvetica Neue\',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; vertical-align: top; text-align: right; border-top-width: 1px; border-top-color: #eee; border-top-style: solid; margin: 0; padding: 5px 0; color:black;">'.$username.'</td>
														</tr><tr style="font-family: \'Helvetica Neue\',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;">
															<td style="font-family: \'Helvetica Neue\',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; vertical-align: top; border-top-width: 1px; border-top-color: #eee; border-top-style: solid; margin: 0; padding: 5px 0;color:black;" valign="top">Password:</td>
															<td class="alignright" style="font-family: \'Helvetica Neue\',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; vertical-align: top; text-align: right; border-top-width: 1px; border-top-color: #eee; border-top-style: solid; margin: 0; padding: 5px 0;color:black;" align="right" valign="top">'.$password.'</td>
														</tr><tr style="font-family: \'Helvetica Neue\',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;">
														  <td colspan="2" valign="top" style="text-align: center"><a href="https://payall.com.ng/payallmobile" style="font-family: \'Helvetica Neue\',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; color: #348eda; text-decoration: underline; margin: 0;">Go back Home</a><span style="text-align: center"></span></td>
															</tr><tr class="total" style="font-family: \'Helvetica Neue\',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;"><td class="alignright" width="45%" style="font-family: \'Helvetica Neue\',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; vertical-align: top; text-align: right; border-top-width: 2px; border-top-color: #333; border-top-style: solid; border-bottom-color: #333; border-bottom-width: 2px; border-bottom-style: solid; font-weight: 700; margin: 0; padding: 5px 0;" align="right" valign="top"> - </td>
															<td class="alignright" style="font-family: \'Helvetica Neue\',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; vertical-align: top; text-align: right; border-top-width: 2px; border-top-color: #333; border-top-style: solid; border-bottom-color: #333; border-bottom-width: 2px; border-bottom-style: solid; font-weight: 700; margin: 0; padding: 5px 0;" align="right" valign="top"> - </td>
														</tr></table></td>
											</tr></table></td>
								</tr></table></td>
		  </tr></table><div class="footer" style="font-family: \'Helvetica Neue\',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; width: 100%; clear: both; color: #999; margin: 0; padding: 20px;"></div></div>
		</td>	
		<td style="font-family: \'Helvetica Neue\',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; vertical-align: top; margin: 0;" valign="top"></td>
	</tr></table></body>
</html>
';
	$newEmail= "info@loadme.services";
	
	
	 					$headers = "From: " .($newEmail) . "\r\n";
                        $headers .= "Reply-To: ".($newEmail) . "\r\n";
                        $headers .= "Return-Path: ".($newEmail) . "\r\n";;
                        $headers .= "MIME-Version: 1.0\r\n";
                        $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
                        $headers .= "X-Priority: 3\r\n";
                        $headers .= "X-Mailer: PHP". phpversion() ."\r\n";
  $emailSend = mail($email,"Login Credentials For: ".$name,$sendEmail,$headers);
	
	
	
	
	$message = "Hi, ".$name.".
Username: ".$username."
Password: ".$password.".
Thank You for choosing ".$inst_name;
			
   
   $Sending = new SendingSMS(); 
  							 
 $smsReturn = $Sending->smsAPI($phone,"LOADME",$message);
			 
	
	if($smsReturn > 0)
	{
		 echo '<div class="alert alert-success">
 <button type="button" class="close" data-dismiss="alert" aria-hidden="true"><i class="icon-cross"></i></button>
 <span class="vd_alert-icon"><i class="fa fa-exclamation-circle vd_red"></i></span><strong>Hurray!</strong> User Credential Sent to your phone number '.$phone.'.!</div>';	
		
		
	}
	
	
	if($emailSend)
	{
		
		  $message = "User Credential Sent to your email.";
		 $resp = "Success";
	$response = "Success";
	$level = "Server";
 $data = '{"resp":"'.$resp.'", "Message":"'.$message.'", "stats":"'.$level.'"}';
		
	   echo '<div class="alert alert-success">
 <button type="button" class="close" data-dismiss="alert" aria-hidden="true"><i class="icon-cross"></i></button>
 <span class="vd_alert-icon"><i class="fa fa-exclamation-circle vd_red"></i></span><strong>Hurray!</strong> User Credential Sent to your email.!</div>';	
		
		
		
	}
	else
	{
		 $resp = "User Credential Not Sent Successfully.";
	$response = "Failed";
	$level = "Server";
 $data = '{"resp":"'.$response.'", "Message":"'.$resp.'", "stats":"'.$level.'"}';
		
		
		
		 echo '<div class="alert alert-danger">
 <button type="button" class="close" data-dismiss="alert" aria-hidden="true"><i class="icon-cross"></i></button>
 <span class="vd_alert-icon"><i class="fa fa-exclamation-circle vd_red"></i></span><strong>Oh snap!</strong> User Credential Not Sent Successfully!</div>';	
		
		
		
	}
	
 


}
else
{
  
 
  $resp = "User information not found.";
	$response = "Failed";
	$level = "Server";
 $data = '{"resp":"'.$response.'", "Message":"'.$resp.'", "stats":"'.$level.'"}';
	 echo '<div class="alert alert-danger">
 <button type="button" class="close" data-dismiss="alert" aria-hidden="true"><i class="icon-cross"></i></button>
 <span class="vd_alert-icon"><i class="fa fa-exclamation-circle vd_red"></i></span><strong>Oh snap!</strong> User information not found.!</div>'; 
}
}




}
 
  
}
 

?>

