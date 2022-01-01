<?php
 ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
$myName = new Name();
 $usertype = "";
	 
	 if(isset($_SESSION['usertype'] ))
	 {
	 $usertype = $_SESSION['usertype']; 
	 }
$phone  = "";
 

if(isset($_SESSION['rand']) and isset($_GET['complete']))
 {
	
	
	
$ministry= $_SESSION['registry'] ;
$filename =$_SESSION['name'] ;
$from =$_SESSION['from'] ;
	
	$rand = $_SESSION['rand'];
	include ("config/DB_config.php"); 
 $approval_value = $myName->showName($conn, "SELECT  `approval` FROM `approval` WHERE `status` = 1"); 
if($approval_value == "Yes")
{
	include ("config/DB_config.php"); 
	 $query =  "SELECT  `id`, `name`, `phone`, `email` FROM `stake_holder` WHERE `status` = 1 AND `position` = 1";	
 
 
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
		
		$link = 'https://'.$_SERVER['HTTP_HOST'].'/requipro/approval.php?code='.$rand;
		 include ("config/DB_config.php"); 
	  $department = $myName->showName($conn, "SELECT  `name`  FROM `mda`  WHERE `id` = '$ministry'"); 
   $message12 = "New Requisition Uploaded. 
Requisition Name:".$filename."
Department Name:".$department."
File From:".$from."
Date:".$datetime."
Code:".$rand."
Click:".$link;   


 
  $senderID = "Doc-Pro";
  
 
   $Sending = new SendingSMS(); 
  							 
$smsSent = $Sending->smsAPI($phone,$senderID,$message12);
		
		
		
		
		
		
		 
		  $message = ' 

<div class="email-background" style="background: #eee;padding: 10px;">
   
  <div class="email-container" style="max-width: 500px;background: white;margin: 0 auto;overflow: hidden;border-radius: 5px;text-align: center;font-family: sans-serif;"> <img src="http://'.$_SERVER['HTTP_HOST'].'/requipro/'.$inst_logo.'"  alt="'.$inst_logo.'" width="407" height="30%" style="max-width: 30%;">
	   
    <h3 style="padding: 10px;font-size: 1.5em;">Hi '.$name.',   </h1>
    <h3 style="padding: 20px;font-size: 2.5em;">'.$filename.' Files Uploaded and needs approval. <br>
File From: '.$from.'</h3>
   
    <p style="padding: 20px;font-weight: 300;font-size: 1.2em;">Please login to the portal. </p>
    <div class="cta" style="padding: 5px;background: #26466D;margin: 0 auto;">
      <p style="padding: 20px;font-weight: 300;font-size: 1.2em;"><a href="'.$link.'" style="text-decoration: none;color: white;">Visit Portal Now</a></p>
    </div>


  </div>
  <div class="footer-links" style="max-width: 500px;font-family: sans-serif;margin: 0 auto;overflow: hidden;border-radius: 5px;text-align: center;padding: 20px;">
    <a href="/xx" style="color: #26466D;">about</a> | <a href="/xx" style="color: #26466D;">unsubsribe</a> | <a href="/xx" style="color: #26466D;">t&amp;c s</a>
  </div>
</div>
';
		 
 
 


$to      = $email;              
 $subject  = "Doc Approval Notification";   
$newEmail    ="info@payall.ng";                         

 

							  
	
	 					$headers = "From: " .($newEmail) . "\r\n";
                        $headers .= "Reply-To: ".($newEmail) . "\r\n";
                        $headers .= "Return-Path: ".($newEmail) . "\r\n";;
                        $headers .= "MIME-Version: 1.0\r\n";
                        $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
                        $headers .= "X-Priority: 3\r\n";
                        $headers .= "X-Mailer: PHP". phpversion() ."\r\n";
 //$emailSend = mail($email,$subject,$message,$headers); 						  
			
 		  
					  if($emailSend)
					  {
						  //echo '<div class="btn btn-success btn-lg">Files Uploaded Successfully.</a></div><br />'; 
						  //echo "sms sent";
					  }
		 
		 
		 
		 else
		 {
			 echo '<div class="btn btn-success btn-lg">Files Uploaded Successfully.</a></div><br />'; 
			 						 // echo '<div class="btn btn-danger btn-lg">Notification Not Sent.</a></div><br />'; 
			 //echo "sms not sent";
		 }
							  
							  
	}
		  }
 
 
  	}
	else
	{
		
		
		  echo '<div class="btn btn-success btn-lg">Files Uploaded Successfully.</a></div><br />'; 
	}
	
	
	
	
	$rand = $_SESSION['rand'];
	

	 $filename = $myName->showName($conn, "SELECT  `filename` FROM `userfiles` WHERE `group_code` = '$rand' or `filecode` = '$rand'"); 
	
	// $Sending = new SendingSMS(); 
							//$Sending->smsAPI($phone ,"LOADME",$message12);
	
	
	
	
	// 1. Send image to Cloud OCR SDK using processImage call
  // 2.	Get response as xml
  // 3.	Read taskId from xml

  
  // To create an application and obtain a password,
  // register at https://cloud.ocrsdk.com/Account/Register
  // More info on getting your application id and password at
  // https://ocrsdk.com/documentation/faq/#faq3
  // Name of application you created
  $applicationId = '0cb9310d-878c-454b-be35-1d344a1a27a7';
  // Password should be sent to your e-mail after application was created
  $password = 'OLj1EVOZgMNZMMQAOJYOMpYF';
  $fileName = $filename;
  // URL of the processing service. Change to http://cloud-westus.ocrsdk.com
  // if you created your application in US location
  $serviceUrl = 'https://cloud-westus.ocrsdk.com';

  // Get path to file that we are going to recognize
  $local_directory='../uploads';
  $filePath = "../uploads/".$fileName;
  if(!file_exists($filePath))
  {
    die('File '.$filePath.' not found.');
  }
  if(!is_readable($filePath) )
  {
     die('Access to file '.$filePath.' denied.');
  }

  // Recognizing with English language to rtf
  // You can use combination of languages like ?language=english,russian or
  // ?language=english,french,dutch
  // For details, see API reference for processImage method
  $url = $serviceUrl.'/processImage?language=english&exportFormat=rtf';
  
  // Send HTTP POST request and ret xml response
  $curlHandle = curl_init();
  curl_setopt($curlHandle, CURLOPT_URL, $url);
  curl_setopt($curlHandle, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($curlHandle, CURLOPT_USERPWD, "$applicationId:$password");
  curl_setopt($curlHandle, CURLOPT_POST, 1);
  curl_setopt($curlHandle, CURLOPT_USERAGENT, "PHP Cloud OCR SDK Sample");
  curl_setopt($curlHandle, CURLOPT_FAILONERROR, true);
  $post_array = array();
  if((version_compare(PHP_VERSION, '5.5') >= 0)) {
    $post_array["my_file"] = new CURLFile($filePath);
  } else {
    $post_array["my_file"] = "@".$filePath;
  }
  curl_setopt($curlHandle, CURLOPT_POSTFIELDS, $post_array); 
  $response = curl_exec($curlHandle);
  if($response == FALSE) {
    $errorText = curl_error($curlHandle);
    curl_close($curlHandle);
    die($errorText);
  }
  $httpCode = curl_getinfo($curlHandle, CURLINFO_HTTP_CODE);
  curl_close($curlHandle);

  // Parse xml response
  $xml = simplexml_load_string($response);
  if($httpCode != 200) {
    if(property_exists($xml, "message")) {
       die($xml->message);
    }
    die("unexpected response ".$response);
  }

  $arr = $xml->task[0]->attributes();
  $taskStatus = $arr["status"];
  if($taskStatus != "Queued") {
    die("Unexpected task status ".$taskStatus);
  }
  
  // Task id
  $taskid = $arr["id"];  
  
  // 4. Get task information in a loop until task processing finishes
  // 5. If response contains "Completed" staus - extract url with result
  // 6. Download recognition result (text) and display it

  $url = $serviceUrl.'/getTaskStatus';
  // Note: a logical error in more complex surrounding code can cause
  // a situation where the code below tries to prepare for getTaskStatus request
  // while not having a valid task id. Such request would fail anyway.
  // It's highly recommended that you have an explicit task id validity check
  // right before preparing a getTaskStatus request.
  if(empty($taskid) || (strpos($taskid, "00000000-0") !== false)) {
    die("Invalid task id used when preparing getTaskStatus request");
  }
  $qry_str = "?taskid=$taskid";

  // Check task status in a loop until it is finished

  // Note: it's recommended that your application waits
  // at least 2 seconds before making the first getTaskStatus request
  // and also between such requests for the same task.
  // Making requests more often will not improve your application performance.
  // Note: if your application queues several files and waits for them
  // it's recommended that you use listFinishedTasks instead (which is described
  // at https://ocrsdk.com/documentation/apireference/listFinishedTasks/).
  while(true)
  {
    sleep(5);
    $curlHandle = curl_init();
    curl_setopt($curlHandle, CURLOPT_URL, $url.$qry_str);
    curl_setopt($curlHandle, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curlHandle, CURLOPT_USERPWD, "$applicationId:$password");
    curl_setopt($curlHandle, CURLOPT_USERAGENT, "PHP Cloud OCR SDK Sample");
    curl_setopt($curlHandle, CURLOPT_FAILONERROR, true);
    $response = curl_exec($curlHandle);
    $httpCode = curl_getinfo($curlHandle, CURLINFO_HTTP_CODE);
    curl_close($curlHandle);
  
    // parse xml
    $xml = simplexml_load_string($response);
    if($httpCode != 200) {
      if(property_exists($xml, "message")) {
        die($xml->message);
      }
      die("Unexpected response ".$response);
    }
    $arr = $xml->task[0]->attributes();
    $taskStatus = $arr["status"];
    if($taskStatus == "Queued" || $taskStatus == "InProgress") {
      // continue waiting
      continue;
    }
    if($taskStatus == "Completed") {
      // exit this loop and proceed to handling the result
      break;
    }
    if($taskStatus == "ProcessingFailed") {
      die("Task processing failed: ".$arr["error"]);
    }
    die("Unexpected task status ".$taskStatus);
  }

  // Result is ready. Download it

  $url = $arr["resultUrl"];   
  $curlHandle = curl_init();
  curl_setopt($curlHandle, CURLOPT_URL, $url);
  curl_setopt($curlHandle, CURLOPT_RETURNTRANSFER, 1);
  // Warning! This is for easier out-of-the box usage of the sample only.
  // The URL to the result has https:// prefix, so SSL is required to
  // download from it. For whatever reason PHP runtime fails to perform
  // a request unless SSL certificate verification is off.
  curl_setopt($curlHandle, CURLOPT_SSL_VERIFYPEER, false);
  $response = curl_exec($curlHandle);
  curl_close($curlHandle);
 
  // Let user donwload rtf result
 // header('Content-type: application/rtf');
  //header('Content-Disposition: attachment; filename="file.rtf"');
  
 
  
  
 $txt = file_get_contents("file.rtf");
  file_put_contents('rtf-files/file.rtf', $response);
 // echo rtf2text("file.rtf");
  
   echo $response;
	
	
	
	
	
	
	$_SESSION['rand'] = "";
	unset($_SESSION['rand']);
} 


?>