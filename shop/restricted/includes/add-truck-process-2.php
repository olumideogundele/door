 <?php
 
 include("config/DB_config.php");
$emailing = "";
 
 if(isset($_POST['validate']))
 {
 
 if(isset($_SESSION['email']))
 {
$emailing  = $_SESSION['email'];
 }

 
     
     if(isset($_POST['truck_owner']))
     {
         
         $emailing = $_POST['truck_owner'];
     }
     
     

 $randing = rand(2442,76723).rand(2442,76723).rand(23,7674).rand(234,889);

$inspector = "";



 
 $target_dir = "graphicallity/";
 
$truck_brand= $_POST['truck_brand'];
$year  = $_POST['year'];
	 $truck_plate_number= $_POST['truck_plate_number'];
$state = $_POST['state'];
	 
 
     
     
     $ccaution= $_POST['ccaution'];
	 $extinguisher = $_POST['extinguisher'];
	 $jacket= $_POST['jacket'];
	 $extratyre= $_POST['extratyre'];
	 $hat= $_POST['hat'];
	 $boot= $_POST['boot'];
     
     
     
     
     
     
	 $total_capacity = $_POST['total_capacity'];
	 $truck_type = $_POST['truck_type'];
	 $location = $_POST['location'];
 
	 
 
	   $coordinates1 = get_coordinates($location);
     
     
     
      $truck_long = "";
	 $truck_lat = "";
	 
  $truck_lat = $coordinates1['lat'];
	$truck_long = $coordinates1['long'];
     
     
     
      if($truck_long == "" or empty($truck_long))
     {
         
         
           echo '<div class="btn btn-danger btn-lg">Truck Operating Location Not Retrieved. Please Update The Address</a></div><br />'; 	
     }
	 
	 
	
	 
	 
	 
	 
$calibration_chart = $target_dir .$randing. basename($_FILES["calibration_chart"]["name"]);
$road_worthiness_cert = $target_dir .$randing. basename($_FILES["road_worthiness_cert"]["name"]);
$commercial_licence = $target_dir .$randing. basename($_FILES["commercial_licence"]["name"]);
$git_insurance = $target_dir .$randing. basename($_FILES["git_insurance"]["name"]);
$front_view_1 = $target_dir .$randing. basename($_FILES["front_view_1"]["name"]);
$front_view_2 = $target_dir .$randing. basename($_FILES["front_view_2"]["name"]);
$side_view_1 = $target_dir .$randing. basename($_FILES["side_view_1"]["name"]);
$side_view_2 = $target_dir .$randing. basename($_FILES["side_view_2"]["name"]);
 
 
	 
	 
  
  $extract_user = mysqli_query($conn, "SELECT * FROM `truck`  WHERE `truck_plate_number` = '$truck_plate_number'") or die(mysqli_error($conn));
		$count = mysqli_num_rows($extract_user);
		 if ($count > 0) {
	 	  
			 
			  echo '<div class="btn btn-danger btn-lg">Truck Information Already In The Database.<br /> Please Check And Try Again Later.</a></div>'; 	
			 
			 
		 
 
		 }else
		 {
 
 
 	 
$sql = 	 "INSERT INTO `truck`( `account_number`, `truck_brand`, `year`, `truck_plate_number`, `state`, `total_capacity`, `truck_type`, `calibration_chart`, `road_worthiness_cert`, `commercial_licence`, `git_insurance`, `front_view_1`, `front_view_2`, `side_view_1`, `side_view_2`, `status`, `created_date`, `registeredby`, `ccaution`, `extinguisher`, `jacket`, `extratyre`, `hat`, `boot`, `code`, `location`, `lati`, `longi` ) VALUES
('$emailing', '$truck_brand', '$year', '$truck_plate_number', '$state', '$total_capacity', '$truck_type', '$calibration_chart','$road_worthiness_cert','$commercial_licence','$git_insurance','$front_view_1','$front_view_2', '$side_view_1', '$side_view_2','0','$datetime', '$emailing', '$ccaution', '$extinguisher', '$jacket', '$extratyre', '$hat', '$boot', '$randing', '$location', '$truck_lat', '$truck_long')";
 
 $process = mysqli_query($conn, $sql) or die(mysqli_error($conn));
 
	if ($process) {
		 
 $lastId =  $myName->showName($conn, "SELECT `id` FROM `truck`  WHERE (`code` = '$randing') ORDER BY `id` DESC LIMIT 1");;
    
        
         $truck_id = 	strtr(base64_encode($lastId), '+/=', '-_,');
  echo '<div class="btn btn-success btn-lg">Information Submitted Successfully.</a></div><br />'; 	
  $target_dir = "graphicallity/";
   
        
        
		
		
		
		saveImage($target_dir,$randing,$_FILES["calibration_chart"]["name"],$_FILES["calibration_chart"]["tmp_name"],$_FILES["calibration_chart"]["size"]);
		saveImage($target_dir,$randing,$_FILES["road_worthiness_cert"]["name"],$_FILES["road_worthiness_cert"]["tmp_name"],$_FILES["road_worthiness_cert"]["size"]);
		saveImage($target_dir,$randing,$_FILES["commercial_licence"]["name"],$_FILES["commercial_licence"]["tmp_name"],$_FILES["commercial_licence"]["size"]);
		saveImage($target_dir,$randing,$_FILES["git_insurance"]["name"],$_FILES["git_insurance"]["tmp_name"],$_FILES["git_insurance"]["size"]);
		saveImage($target_dir,$randing,$_FILES["front_view_1"]["name"],$_FILES["front_view_1"]["tmp_name"],$_FILES["front_view_1"]["size"]);
		saveImage($target_dir,$randing,$_FILES["front_view_2"]["name"],$_FILES["front_view_2"]["tmp_name"],$_FILES["front_view_2"]["size"]);
		saveImage($target_dir,$randing,$_FILES["side_view_1"]["name"],$_FILES["side_view_1"]["tmp_name"],$_FILES["side_view_1"]["size"]);
		saveImage($target_dir,$randing,$_FILES["side_view_2"]["name"],$_FILES["side_view_2"]["tmp_name"],$_FILES["side_view_2"]["size"]);
        
        
        
        
        
        
        
        
         
		  $value = "";
		 
		  $query1 =  "SELECT  `name`, `phone`, `email`, `account_number` FROM `stake_holder` WHERE  `status` = 1";	
 $extract_distance1 = mysqli_query($conn, $query1) or die(mysqli_error($conn));
		$count1 = mysqli_num_rows($extract_distance1);
    if ($count1 > 0)
		  {
 	 while ($row_distance1=mysqli_fetch_row($extract_distance1))
    {
  						  	$name =$row_distance1[0];
  						  	$phone =$row_distance1[1];
  						  	$email =$row_distance1[2];
  						  	$account_number =$row_distance1[3];
         
         
      //   "view-truck?id='.$truck_id.'
         	     	
		
// $link = 'https://'.$_SERVER['HTTP_HOST'].'/opman/document-approval.php?code='.$code;
         
         
     
         
         
	$link = 'https://'.$_SERVER['HTTP_HOST'].'/restricted/view-truck?id='.$truck_id;	  
	   $account_name = $myName->showName($conn, "SELECT  `name` FROM  `user_unit` WHERE  `account_number` = '$emailing'");
   $message = "Truck Upload. 
Truck Owner:".$account_name."
Plate :".$truck_plate_number."
Brand :".$truck_brand."
Date:".$datetime."
Click:".$link;  
		 
		 
 

  $senderID = "LoadMe";
  
 
   $Sending = new SendingSMS(); 
  							 
							$Sending->smsAPI($phone,"LoadMe",$message);
		
		
		
		
		
			 
			  $message = ' 

<div class="email-background" style="background: #eee;padding: 10px;">
   
  <div class="email-container" style="max-width: 500px;background: white;margin: 0 auto;overflow: hidden;border-radius: 5px;text-align: center;font-family: sans-serif;"> <img src="http://'.$_SERVER['HTTP_HOST'].'/restricted/'.$inst_logo.'"  alt="'.$inst_logo.'"  width="50px" height="50px" style="max-width: 30%;">
	   
	    <h3 style="5px;font-size: 2.0em;">Hi '.$name.'...,   </h3>
    <span style="padding: 20px;font-size: 1.3em;">Truck Uploaded need approval. </span><br>
	   
 
	 <span style="padding: 20px;font-size: 1.5em;"> Truck Brand: <strong> '.$truck_brand.'</strong> </span>
	 <span style="padding: 20px;font-size: 1.5em;"> Truck Plate Number: <strong> '.$truck_plate_number.'</strong> </span>
	 <span style="padding: 20px;font-size: 1.5em;"> Truck Owner: <strong> '.$account_name.'</strong> </span>
	 
   
    <span> 
	 <p style="padding: 20px;font-weight: 300;font-size: 1.2em;">Please login to the portal. </p>
    <div class="cta" style="padding: 5px;background: #26466D;margin: 0 auto;">
      <p style="padding: 20px;font-weight: 300;font-size: 1.2em;"><a href="'.$link.'" style="text-decoration: none;color: white;">View Details Now</a></p>
 
   </span>
   
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
		 
		
		 
/*EMAIL TEMPLATE ENDS*/ 


$to      = $email;             // give to email address 
 $subject  = "Truck Approval";  //change subject of email 
                       // give from email address 
                        $newEmail= "info@loadme.services";
	                    $headers = "From: " .($newEmail) . "\r\n";
                        $headers .= "Reply-To: ".($newEmail) . "\r\n";
                        $headers .= "Return-Path: ".($newEmail) . "\r\n";;
                        $headers .= "MIME-Version: 1.0\r\n";
                        $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
                        $headers .= "X-Priority: 3\r\n";
                        $headers .= "X-Mailer: PHP". phpversion() ."\r\n";         
         
         

mail($email, $subject, $message, $headers);		

		$realmessage =  mysqli_real_escape_string($conn,$message);
		 
$sqlnot ="INSERT INTO `notification`(`code`,`title`,`message`, `registeredby`, `sent_to`, `status`, `read_status`, `created_at`) VALUES
('$truck_id','$subject','$realmessage','$emailing', '$account_number', '1', '1','$datetime')";
     
				
		 	
 mysqli_query($conn, $sqlnot) or die(mysqli_error($conn));		
  
 
         
         
         
         
         
         
         
         
     }
    }
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
 
} else {
  // echo "Error: " . $sql . "<br>" . $conn->error;
    $error="Not Inserted,Some Problem occured.";
echo'<a href="#"class="btn btn-danger btn-lg">Information Not Submitted Successfully.  <br />Please try again later.</a><br />';  

}

 
		 
 
		
 
 }
 		 
 }
else if(isset($_POST['update']))
 {
    

    
     include("config/DB_config.php");
    
 if(isset($_SESSION['email']))
 {
$emailing  = $_SESSION['email'];
 }

 
    
    
     
     if(isset($_POST['truck_owner']))
     {
         
         $emailing = $_POST['truck_owner'];
     }
     

 $randing = rand(22,76723).rand(23,7674).rand(234,889);





 
 $target_dir = "graphicallity/";
 
$iding= $_POST['iding'];
$truck_brand= $_POST['truck_brand'];
$year  = $_POST['year'];
	 $truck_plate_number= $_POST['truck_plate_number'];
$state = $_POST['state'];
 
	 $total_capacity = $_POST['total_capacity'];
	 $truck_type = $_POST['truck_type'];
   
     $ccaution= $_POST['ccaution'];
	 $extinguisher = $_POST['extinguisher'];
	 $jacket= $_POST['jacket'];
	 $extratyre= $_POST['extratyre'];
	 $hat= $_POST['hat'];
	 $boot= $_POST['boot'];
     $location = $_POST['location'];
     
	 
$calibration_chart_old = $_POST["calibration_chart_old"];
$road_worthiness_cert_old = $_POST["road_worthiness_cert_old"];
$commercial_licence_old = $_POST["commercial_licence_old"];
$git_insurance_old = $_POST["git_insurance_old"];
$front_view_1_old = $_POST["front_view_1_old"];
$front_view_2_old = $_POST["front_view_2_old"];
$side_view_1_old = $_POST["side_view_1_old"];
$side_view_2_old = $_POST["side_view_2_old"];
	 
    
    
    $calibration_chart = $_FILES["calibration_chart"]["name"];
$road_worthiness_cert = $_FILES["road_worthiness_cert"]["name"];
$commercial_licence = $_FILES["commercial_licence"]["name"];
$git_insurance = $_FILES["git_insurance"]["name"];
$front_view_1 = $_FILES["front_view_1"]["name"];
$front_view_2 = $_FILES["front_view_2"]["name"];
$side_view_1 = $_FILES["side_view_1"]["name"];
$side_view_2 = $_FILES["side_view_2"]["name"];
    
    
    if($calibration_chart!="") {
      $calibration_chart = $target_dir .$randing. basename($_FILES["calibration_chart"]["name"]);
        saveImage($target_dir,$randing,$_FILES["calibration_chart"]["name"],$_FILES["calibration_chart"]["tmp_name"],$_FILES["calibration_chart"]["size"]);
        
    } else {
    $calibration_chart = $calibration_chart_old;
    }
    
      if($road_worthiness_cert!="") {
     $road_worthiness_cert = $target_dir .$randing. basename($_FILES["road_worthiness_cert"]["name"]);
       saveImage($target_dir,$randing,$_FILES["road_worthiness_cert"]["name"],$_FILES["road_worthiness_cert"]["tmp_name"],$_FILES["road_worthiness_cert"]["size"]);
        
    } else {
    $road_worthiness_cert = $road_worthiness_cert_old;
    }
    
    
     if($commercial_licence!="") {
   $commercial_licence = $target_dir .$randing. basename($_FILES["commercial_licence"]["name"]);
     saveImage($target_dir,$randing,$_FILES["commercial_licence"]["name"],$_FILES["commercial_licence"]["tmp_name"],$_FILES["commercial_licence"]["size"]);
        
    } else {
    $commercial_licence = $commercial_licence_old;
    }
     
    
    if($git_insurance!="") {
  $git_insurance = $target_dir .$randing. basename($_FILES["git_insurance"]["name"]);
     saveImage($target_dir,$randing,$_FILES["git_insurance"]["name"],$_FILES["git_insurance"]["tmp_name"],$_FILES["git_insurance"]["size"]);
        
    } else {
    $git_insurance = $git_insurance_old;
    }
    
    
	 if($front_view_1!="") {
 $front_view_1 = $target_dir .$randing. basename($_FILES["front_view_1"]["name"]);
     saveImage($target_dir,$randing,$_FILES["front_view_1"]["name"],$_FILES["front_view_1"]["tmp_name"],$_FILES["front_view_1"]["size"]);
        
    } else {
    $front_view_1 = $front_view_1_old;
    }
    
		
	 if($front_view_2!="") {
$front_view_2 = $target_dir .$randing. basename($_FILES["front_view_2"]["name"]);
    saveImage($target_dir,$randing,$_FILES["front_view_2"]["name"],$_FILES["front_view_2"]["tmp_name"],$_FILES["front_view_2"]["size"]);
        
    } else {
    $front_view_2 = $front_view_2_old;
    }	
		
		 if($side_view_1!="") {
$side_view_1 = $target_dir .$randing. basename($_FILES["side_view_1"]["name"]);
  saveImage($target_dir,$randing,$_FILES["side_view_1"]["name"],$_FILES["side_view_1"]["tmp_name"],$_FILES["side_view_1"]["size"]);
        
    } else {
    $side_view_1 = $side_view_1_old;
    }	
    
    
    
    if($side_view_1!="") {
$side_view_2 = $target_dir .$randing. basename($_FILES["side_view_2"]["name"]);
  saveImage($target_dir,$randing,$_FILES["side_view_2"]["name"],$_FILES["side_view_2"]["tmp_name"],$_FILES["side_view_2"]["size"]);
        
    } else {
    $side_view_2 = $side_view_2_old;
    }	
		
		
 
 
 
 	 
$sql = 	 "UPDATE `truck` SET  `account_number` = '$emailing', `truck_brand` = '$truck_brand', `year` = '$year', `truck_plate_number` = '$truck_plate_number', `state` = '$state', `total_capacity` = '$total_capacity', `truck_type` = '$truck_type', `calibration_chart` = '$calibration_chart', `road_worthiness_cert` = '$road_worthiness_cert', `commercial_licence` = '$commercial_licence', `git_insurance` = '$git_insurance', `front_view_1` = '$front_view_1', `front_view_2` = '$front_view_2', `side_view_1` = '$side_view_1', `side_view_2` = '$side_view_2', `status` = '0',`registeredby` = '$emailing',  `ccaution` = '$ccaution', `extinguisher`  = '$extinguisher', `jacket`  = '$jacket', `extratyre`  = '$jacket', `hat`  = '$hat', `boot`  = '$boot' , `location`  = '$location' WHERE `id` = '$iding'";
 
 $process = mysqli_query($conn, $sql) or die(mysqli_error($conn));
 
    
     
	if ($process) {
		 
 
  echo '<div class="btn btn-success btn-lg">Information Updated Successfully.</a></div><br />'; 	
  $target_dir = "graphicallity/";
		
		
		
		
		
 
} else {
  // echo "Error: " . $sql . "<br>" . $conn->error;
    $error="Not Inserted,Some Problem occured.";
echo'<a href="#"class="btn btn-danger btn-lg">Information Not Updated Successfully.  <br />Please try again later.</a><br />';  

}

 
		 
 
		
 
 }
    
    
    
 




function saveImage($target_dir,$randing,$imageValue,$imageValue2,$size)
{
	
$target_file = $target_dir.$randing. basename($imageValue);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if($imageValue2 != "") {
    $check = getimagesize($imageValue2);
    if($check !== false) {
        //echo "<div class='btn btn-success btn-lg'>File is an image - " . $check["mime"] . ".</div>";
        $uploadOk = 1;
    } else {
      //  echo "<div class='btn btn-danger btn-lg'>File is not an image.</div>";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "<div class='btn btn-danger btn-lg'>Sorry, ".basename($imageValue)." file already exists.</div><br>";
    $uploadOk = 0;
}
// Check file size
if ($size > 500000) {
    echo "<div class='btn btn-danger btn-lg'>Sorry, your file  ".basename($imageValue)." is too large.</div><br>";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "<div class='btn btn-danger btn-lg'>Sorry, only JPG, JPEG, PNG & GIF files are allowed.  ".basename($imageValue)."</div><br>";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "<div class='btn btn-danger btn-lg'>Sorry, your file was not uploaded.</div><br>";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($imageValue2, $target_file)) {
       // echo "<div class='btn btn-success btn-lg'>The file ". basename( $imageValue). " has been uploaded.</div>";
    } else {
        echo "<div class='btn btn-danger btn-lg'>Sorry, there was an error uploading your ". basename( $imageValue). " file.</div><br>";
    }
}
	
}


function get_coordinates($address)
{
    $address = urlencode($address);
    $url = "https://maps.google.com/maps/api/geocode/json?address=$address&sensor=false&region=Poland&key=AIzaSyAGrHdhUTvfj1Fyl9Dx7_e7RstThaE1uHo";
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_PROXYPORT, 3128);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    $response = curl_exec($ch);
    curl_close($ch);
    $response_a = json_decode($response);
    $status = $response_a->status;

    if ( $status == 'ZERO_RESULTS' )
    {
        return FALSE;
    }
    else
    {
 $return = array('lat' => $response_a->results[0]->geometry->location->lat, 'long' => $long = $response_a->results[0]->geometry->location->lng);
        return $return;
    }
}

 
$conn->close();
	
 
?>

 