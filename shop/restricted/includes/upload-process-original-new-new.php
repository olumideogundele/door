 <?php 

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
$tag = "";
$taging = "";
// Check if form was submited 
if(isset($_POST['validated-upload'])) { 
$Sending = new SendingSMS();	
	$tag = "";
		 $accountname = "";
	
	

	
if(isset($_SESSION['sms']))
{
	unset($_SESSION['sms']);
	
}
else
{
	$_SESSION['sms'] = 0;
	
}




//$rand1 = $_SESSION['rand'];

if(isset($_SESSION['rand']))
{
	$rand1 = $_SESSION['rand'];
	
}
else
{
$rand1 =  date("YmdGis")."/".rand(28736, 8735673);	
$_SESSION['rand'] = $rand1;	
}
 //$signature = mysqli_real_escape_string($conn,$_POST['signature']);
$_SESSION['mighty'] = $rand1;

	function formatBytes($size, $precision = 2)
{
    $base = log($size, 1024);
    $suffixes = array('', 'KB', 'MB', 'GB', 'TB');   

    return round(pow(1024, $base - floor($base)), $precision) .' '. $suffixes[floor($base)];
}
include ("config/DB_config.php"); 
//include ("includes/SendingSMS.php"); 
//include("includes/class_file.php");
 include("includes/view-application-details.php");
 $myName = new Name();

$target_dir = "uploads/";
 if(isset($_SESSION['email']))
 {
$emailing  = $_SESSION['email'];
 }

 
// Upload file
	
	
	/*registry
type
subcat
product
amount
comment



*/
	
	

$type = mysqli_real_escape_string($conn,$_POST['type']);
$subcat = mysqli_real_escape_string($conn,$_POST['subcat']);
$ministry = mysqli_real_escape_string($conn, $_POST['registry']);
$product = mysqli_real_escape_string($conn,$_POST['product']);
$amount = mysqli_real_escape_string($conn,$_POST['amount']);
$amount = mysqli_real_escape_string($conn,$_POST['comment']);
 
 /*SELECT  `id`, `registry`, `type`, `subcat`, `product`, `amount`, `comment`, `code`, `status`, `created_date`, `registeredby` FROM `payall` WHERE 1*/
$approval_value = $myName->showName($conn, "SELECT  `approval` FROM `approval` WHERE `status` = 1 AND `mda` = '$ministry'"); 
 
	
		


$status_value = 1;


if($approval == "1")
{
	$status_value = 0;
	
}







$msg = "";
	
	

	// Configure upload directory and allowed file types 
	$upload_dir = 'uploads'.DIRECTORY_SEPARATOR; 
	$allowed_types = array('jpg', 'png', 'jpeg', 'gif'); 
	
	// Define maxsize for files i.e 2MB 
	$maxsize = 2 * 1024 * 1024 * 1024 * 1024 * 1024 * 1024* 1024 * 1024 * 1024 * 1024* 1024 * 1024; 

	// Checks if user sent an empty form 
	if(!empty(array_filter($_FILES['file']['name']))) { 

		// Loop through each file in files[] array 
		foreach ($_FILES['file']['tmp_name'] as $key => $value) { 
			
			$file_tmpname = $_FILES['file']['tmp_name'][$key]; 
			$file_name = $_FILES['file']['name'][$key]; 
			$file_size = $_FILES['file']['size'][$key]; 
			$file_ext = pathinfo($file_name, PATHINFO_EXTENSION); 

			// Set upload file path 
			$filepath = $upload_dir.$file_name; 

			// Check file type is allowed or not 
			
			//here
			//if(in_array(strtolower($file_ext), $allowed_types)) { 

				// Verify file size - 2MB max 
			 
				if(file_exists($filepath)) {
					
					$tag = "File with {$file_name} already exists. Please check and try again.<br />"; 
						 echo '<div class="btn btn-danger btn-lg">'.$tag.'../</a></div><br />';
					 
				} 
				else { 
				
					if(move_uploaded_file($file_tmpname, $filepath)) { 
						//echo "{$file_name} successfully uploaded <br />"; 
						
						$taging = "success";
						
						
						
 
  $size3 =  $_FILES["file"]["size"][$key];
	include ("config/DB_config.php"); 
 $target_file2 =   mysqli_real_escape_string($conn,basename($_FILES["file"]["name"][$key]));
 $target_file = mysqli_real_escape_string($conn,$target_dir.basename($_FILES["file"]["name"][$key]));
	
	
	$rading = rand(28736, 8735673);
	
	
	$rand =  date("YmdGis")."/".rand(28736, 8735673);
	
	 	 $size4 = formatBytes($size3);
						
						///StartHere
						
						
  $flutterapi = $myName->showName($conn, "SELECT `flutterapi` FROM `application` WHERE  `status` = '1'"); 
    
 $converted = "";
 $demoAPI = "FLWPUBK-d26f856a82392100b8faf5f8b73abdf4-X";
			 

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
       
		
		
		
		
		 
		
		 
		
	}
	else
	{
		
	 
	 
				echo '<div class="alert alert-danger alert-dismissible mb-0" role="alert">
		   <button type="button" class="close" data-dismiss="alert">×</button>
			<div class="alert-icon contrast-alert">
			 <i class="fa fa-exclamation-triangle"></i>
			</div>
			<div class="alert-message">
			  <span><strong>Oop!</strong>Account Name of Vendor cannot be verified at this time.<br>Plase go ahead if you are sure.
<strong> '.$message.'</strong></span>
			</div>
		  </div>';
				 
	}
}
 
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						//endshere
						
						
						
						
 $query112 = "INSERT INTO `userfiles`(`filepath`, `filename`,`registry`, `name`,`file_type`, `created_date`, `creeated_by`, `status`,`filesize`,`filecode`,`submitted_by`, `group_code`, `signature`, `approval`,`select_stakeholder`, `type`, `account_name`, `account_number`, `bank_name`, `amount`) VALUES('uploads','".$target_file2."','".$ministry."','".$name."', 'digital', '$datetime','$emailing', '$status_value', '$size4', '$rand', '$from', '$rand1', '$signature', '$approval', 1, '$type', '$accountname','$acct_num', '$bank', '$amount')";
 $processing = mysqli_query($conn, $query112) or die("Error Occured: ".mysqli_error( $conn));	 
	
	
	
	
	$_SESSION['group_code'] = $rand1;

	
	  $last_id = $conn->insert_id;
						
						
							
						if($comment != "")
						{
					$sql = 	 "INSERT INTO `document_comment`(`document_id`, `document_code`, `commenting`, `status`, `created_date`, `registeredby`) VALUES('$last_id',  '$rand', '$comment',1,'$datetime', '$emailing')";
 
 $process = mysqli_query($conn, $sql) or die(mysqli_error($conn));						
								
							
						}
	

if($processing)
						{
							$taging = "success";	
							
						}
				
				
	
	$msg = "Successfully uploaded";
						
										   $fileNaming = $target_file2;
 
$file_ext = pathinfo($fileNaming, PATHINFO_EXTENSION);
 
		 
	 
						
						
					} 
					else {					 
						//echo "Error uploading {$file_name} ****<br />"; 
						
						$tag = "Error uploading File {$file_name}<br />"; 
						 echo '<div class="btn btn-danger btn-lg">'.$tag.'..........</a></div><br />';
					} 
				} 
			/*} 
			else { 
						
						
						
						
						
										
				// If file extention not valid 
	
			echo "Error uploading {$file_name} "; 
				echo "({$file_ext} file type is not allowed)<br / >"; 
			} */
		} 
	} 
	else { 
		
		// If no files selected 
		//echo "No files selected."; 
		$tag = "No files selected."; 
		 echo '<div class="btn btn-danger btn-lg">'.$tag.'</a></div><br />';
		
	} 





//here
 if($taging == "success" )
 {
	 

include ("config/DB_config.php"); 
 $approval_value = $myName->showName($conn, "SELECT  `approval` FROM `approval` WHERE `status` = 1 AND `mda` = '$ministry'"); 
if($approval_value == "Yes" and $approval == 1)
{
	include ("config/DB_config.php"); 
	 $query =  "SELECT  `id`, `name`, `phone`, `email`,`account_number` FROM `stake_holder` WHERE `status` = 1 AND `position` = 1 AND `mda` = '$ministry'";	
 
 
 $extract_distance = mysqli_query($conn, $query) or die(mysqli_error($conn));
		$count = mysqli_num_rows($extract_distance);
    if ($count > 0)
		  {
 	 while ($row_distance=mysqli_fetch_row($extract_distance))
    {
 		 $id =$row_distance[0];
		 $name=$row_distance[1];
		 $phone =$row_distance[2];
		$email =$row_distance[3];
		$account_number =$row_distance[4];
		
		$link = 'https://'.$_SERVER['HTTP_HOST'].'/requipro/approval.php?code='.$rand1;
		 include ("config/DB_config.php"); 
	  $department = $myName->showName($conn, "SELECT  `name`  FROM `mda`  WHERE `id` = '$ministry'"); 
 $message12 = "New Requisition Uploaded. 
Name:".$naming."
Department Name:".$department."
Date:".$datetime."
Code:".$rand."
Click:".$link;  
 

 
  $senderID = "-requipro-";
  
 
   
		// $Sending->smsAPI($phone,$senderID,$message12);
		
		
		
			$_SESSION['sms'] = 1;	
		
		$comment = "Approved by ".$name;
		 $fileName = $target_file2;
 
$file_ext = pathinfo($fileName, PATHINFO_EXTENSION);
 
		 
		 $images = "";
		 
		 
		 if($file_ext == "jpg" or $file_ext == "png" or $file_ext == "gif")
		 {
			 
			$images = '<div class="cta" style="padding: 5px; margin: 0 auto;">
     <img src="https://'.$_SERVER['HTTP_HOST'].'/requipro/uploads/'.$target_file  .'" width = "100%" height = "100%"> 
    </div>' ;
			 
		 }
		 
		 
		 
		  $message = ' 
	 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  
<div class="email-background" style="background: #eee;padding: 10px;">
   
  <div class="email-container" style="max-width: 500px;background: white;margin: 0 auto;overflow: hidden;border-radius: 5px;text-align: center;font-family: sans-serif;"> <img src="http://'.$_SERVER['HTTP_HOST'].'/requipro/'.$inst_logo.'"  alt="'.$inst_logo.'" width="50px" height="50px" style="max-width: 30%;">
	   
    <h3 style="5px;font-size: 2.0em;">Hi '.$name.',   </h3>
    <span style="padding: 20px;font-size: 2.0em;">'.$naming.' Uploaded and needs approval. </span><br>

    <span> 
	   
	   
	   <p style="padding: 10px;font-weight: 300;font-size: 1.2em;">Please login to the portal. </p>
    <div class="cta" style="padding: 5px;background: #26466D;margin: 0 auto;">
      <p style="padding: 20px;font-weight: 300;font-size: 1.2em;"><a href="https://'.$_SERVER['HTTP_HOST'].'/requipro/approval.php?code='.$rand1.'" style="text-decoration: none;color: white;">Visit Portal Now for More Details</a></p>
 
	<form     method="post"    autocomplete="off" action = "http://'.$_SERVER['HTTP_HOST'].'/requipro/approval.php">
	<input name = "status" value = "1" type = "hidden">
	<input name = "code" value = "'.$rand.'" type = "hidden">
	<input name = "comment" value = "'.$comment.'" type = "hidden">
	<input name = "aid" value = "'.$last_id.'" type = "hidden">
	<input name = "emailing" value = "'.$emailing.'" type = "hidden">
	<button class="button" style = " background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 5px 5px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;" type = "submit" name = "validate">Approve Now</button>
  </form>
  
  
  <form     method="post"    autocomplete="off" action = "http://'.$_SERVER['HTTP_HOST'].'/requipro/approval.php">
	<input name = "status" value = "3" type = "hidden">
	<input name = "code" value = "'.$rand.'" type = "hidden">
	<input name = "comment" value = "'.$comment.'" type = "hidden">
	<input name = "aid" value = "'.$last_id.'" type = "hidden">
	<input name = "emailing" value = "'.$emailing.'" type = "hidden">
	<button class="button" style = " background-color: #f44336; /* Red */
  border: none;
  color: white;
  padding: 5px 5px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;" type = "submit" name = "validate">Disapprove Now</button>
  </form>
  
   
   
   
   '.$images.'
   
    <p style="padding: 10px;font-weight: 300;font-size: 1.2em;">Please login to the portal. </p>
    <div class="cta" style="padding: 5px;background: #26466D;margin: 0 auto;">
      <p style="padding: 20px;font-weight: 300;font-size: 1.2em;"><a href="https://'.$_SERVER['HTTP_HOST'].'/requipro/approval.php?code='.$rand1.'" style="text-decoration: none;color: white;">Visit Portal Now for More Details</a></p>

    </div>


  </div>
  <div class="footer-links" style="max-width: 500px;font-family: sans-serif;margin: 0 auto;overflow: hidden;border-radius: 5px;text-align: center;padding: 20px;">
    <a href="/xx" style="color: #26466D;">about</a> | <a href="/xx" style="color: #26466D;">unsubsribe</a> | <a href="/xx" style="color: #26466D;">t&amp;c s</a>
  </div>
</div>
';
		 
 
 



$to      = $email;              
 $subject  ="Requisition Approval Notification";   
$newEmail    ="info@payall.ng";                         

 

							  
	
	 					$headers = "From: " .($newEmail) . "\r\n";
                        $headers .= "Reply-To: ".($newEmail) . "\r\n";
                        $headers .= "Return-Path: ".($newEmail) . "\r\n";;
                        $headers .= "MIME-Version: 1.0\r\n";
                        $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
                        $headers .= "X-Priority: 3\r\n";
                        $headers .= "X-Mailer: PHP". phpversion() ."\r\n";
 //$emailSend = mail($email,$subject,$message,$headers); 						  
			
 		
		 
		 
$sql ="INSERT INTO `notification`(`code`,`title`,`message`, `registeredby`, `sent_to`, `status`, `read_status`, `created_at`) VALUES
('$rand1','$subject','$message','$emailing', '$account_number', '1', '1','$datetime')";
     
				
		 	
 //mysqli_query($conn, $sql) or die(mysqli_error("Error 2:".$conn));
							  
							  
	}
		 
		  }
	
	 
 
 
  	}				
	 
 
							// $Sending->smsAPI($phone,$senderID,$message12);
	
	if($taging == "success")
	{
		
		echo '<meta http-equiv="Refresh" content="2; url= requisition-uploads-inter.php?complete=success&code='.$rand1.'"> ';
	}
	
	
} 

	
	
	} 



?> 
  <script>
//window.location.replace("multiple-files-upload.php?complete=success");

</script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>