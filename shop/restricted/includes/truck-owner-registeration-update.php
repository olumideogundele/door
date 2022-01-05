 	
		    <?php
 
 include("../restricted/config/DB_config.php");
 
//include("restricted/includes/class_file.php");
 
 include("../restricted/includes/SendingSMS.php");
$emailing = "";
 
 if(isset($_POST['validate']))
 {
  if(!isset($_POST['agree']))
 {
 if(isset($_SESSION['email']))
 {
$emailing  = $_SESSION['email'];
 }

 
 
 
$year  =  ""; 
$name=  mysqli_real_escape_string($conn,$_POST['name']);
$state  =  mysqli_real_escape_string($conn,$_POST['state']);

$lga  = "";
$number  =  mysqli_real_escape_string($conn,$_POST['number']);
//$agree  =  mysqli_real_escape_string($conn,$_POST['agree']);
 $email=  mysqli_real_escape_string($conn,$_POST['email']);
$phone =  mysqli_real_escape_string($conn,$_POST['phone']);
	 $address=  mysqli_real_escape_string($conn,$_POST['address']);
	 $owner_type=  mysqli_real_escape_string($conn,$_POST['owner_type']);
	 $rc=  mysqli_real_escape_string($conn,$_POST['rc']);
	 $notes=  trim(mysqli_real_escape_string($conn,$_POST['notes']));
	 $id123=  mysqli_real_escape_string($conn,$_POST['id123']);
	 $account_number=  mysqli_real_escape_string($conn,$_POST['id123']);
	  
	  
	  
	   $coordinates1 = get_coordinates($address);
     
  $lati = "";
   $longi = "";
   
	 
  $lati = $coordinates1['lat'];
	$longi = $coordinates1['long'];
	  
	  
	 	 
 $image = basename($_FILES["file"]["name"]);
 $git = basename($_FILES["git"]["name"]);
          
 
 
 
  if($image == "")
	 {
		   $logo =  trim(mysqli_real_escape_string($conn, $_POST['logo1']));
		 
		 
	 }
	 else
	 {
 
$logo =   $account_number.basename($_FILES["file"]["name"]);
 
		 
	 } 
	  
	  
	  
  if($git == "")
	 {
 $git1 =  trim(mysqli_real_escape_string($conn, $_POST['git1']));
		 
		 
	 }
	 else
	 {
 
$git1 =    $account_number.basename($_FILES["git"]["name"]);
 
		 
	 } 
	  
	  
	  
	  
	  
	  
	  
      
      if(empty($owner_type))
      {
          
           
		     echo ' 
      <div class="row">
        <div class="col-md-12">
          <div class="notification error closeable margin-bottom-30">
            <p><strong>Ooooops!</strong> <a href="#">Important field(s) are empty. <b />Please check and try again.</a></p>
            <a class="close" href="#"></a> 
		  </div>
        </div></div>';	
		   
		  
		  
		  
		  
		  
		  
		  
      }
      else
      {
	  
	 
	 
 
  $extract_user = mysqli_query($conn, "SELECT * FROM `user_unit` WHERE `account_number` = '$id123'") or die(mysqli_error($conn));
		$count = mysqli_num_rows($extract_user);
		 if ($count < 0) {
	 	  
			 
        
			 
			 
			   echo ' 
      <div class="row">
        <div class="col-md-12">
          <div class="notification error closeable margin-bottom-30">
            <p><strong>Oops! </strong> Information not in the database. <br /> Please check and try again.</p>
            <a class="close" href="#"></a> 
		  </div>
        </div></div>';	
			 
			 
			  
			 
		 
 
		 }else
		 {
 
 
			 
 
 
	 
	 
$sql = 	 "UPDATE `user_unit` SET  `name` = '$name',   `phone` = '$phone', `email` = '$email', `address` = '$address', `created_date` = '$datetime', `registeredby` = '$emailing', `status` = 2,`state` = '$state', `lga` = '$lga',`number` = '$number',`file` = '$logo' , `truck_owner_type` = '$owner_type', `git` = '$git1', `lati` = '$lati', `longi` = '$longi', `rc` = '$rc', `notes` = '$notes' WHERE `account_number` = '$id123'";
 
 
 $process = mysqli_query($conn, $sql) or die(mysqli_error($conn));
 
	if ($process) {
		 

		
		
			
		if(!empty($_POST['courier_category'])) { 
			
	$DELsql = 	mysqli_query($conn,"DELETE FROM `courier_category_sign_up` WHERE `registeredby` = '$id123'") or die("ERROR OCCURED: ".mysqli_error($conn));
    foreach($_POST['courier_category'] as $check) {
             
		
		
		
		 
$sql = 	 "INSERT INTO `courier_category_sign_up`(`category`, `courier`, `status`, `created_date`, `registeredby`) VALUES
( '$check', '$account_number', '1', '$datetime', '$account_number')";
 
 
 $process = mysqli_query($conn, $sql) or die(mysqli_error($conn));	
		
		
		
		
    }
}
		
		
		
		
		
        
     
		
		if($phone !="")
		{
  
		 
			
  $message = "Hi ".$name."! Your account update is accepted. It will be reviewed. Thank You.";

  
  	 $Sending = new SendingSMS(); 
  							 
						$Sending->smsAPI($phone,"Welcome",$message);
							 
		 }
        
        
		  $value = "";
		 
		  $query1 =  "SELECT  `name`, `phone`, `email`, `account_number` FROM `stake_holder` WHERE  `status` = 1";	
 $extract_distance1 = mysqli_query($conn, $query1) or die(mysqli_error($conn));
		$count1 = mysqli_num_rows($extract_distance1);
    if ($count1 > 0)
		  {
 	 while ($row_distance1=mysqli_fetch_row($extract_distance1))
    {
  						  	$name123 =$row_distance1[0];
  						  	$phone123 =$row_distance1[1];
  						  	$email123 =$row_distance1[2];
  						  	$account_number123 =$row_distance1[3];
         
         
      //   "view-truck?id='.$truck_id.'
         	     	
		
// $link = 'https://'.$_SERVER['HTTP_HOST'].'/opman/document-approval.php?code='.$code;
	$link = 'https://'.$_SERVER['HTTP_HOST'].'/restricted/all-truck-owners?id='.$account_number;	  
	  
   $message = "Courier Company Update. 
Courier Company :".$name."
Acct. Num. :".$id123."
Phone :".$phone."
Date:".$datetime."
Click:".$link;  
		 
		 
 

  $senderID = "LoadMe";
  
 
   $Sending = new SendingSMS(); 
  							 
							$Sending->smsAPI($phone123,"LoadMe",$message);
		
		
		
		
		
			 
			  $message = ' 

<div class="email-background" style="background: #eee;padding: 10px;">
   
  <div class="email-container" style="max-width: 500px;background: white;margin: 0 auto;overflow: hidden;border-radius: 5px;text-align: center;font-family: sans-serif;"> <img src="http://'.$_SERVER['HTTP_HOST'].'/restricted/'.$inst_logo.'"  alt="'.$inst_logo.'"  width="50px" height="50px" style="max-width: 30%;">
	   
	    <h3 style="5px;font-size: 2.0em;">Hi '.$name123.'...,   </h3>
    <span style="padding: 20px;font-size: 1.3em;">Courier Company  Updates needs approval. </span><br>
	   
 
	 <span style="padding: 20px;font-size: 1.5em;"> Courier Company  Name: <strong> '.$name.'</strong> </span>
	 <span style="padding: 20px;font-size: 1.5em;"> Account Number: <strong> '.$account_number.'</strong> </span>
	 <span style="padding: 20px;font-size: 1.5em;"> Courier Company  Phone: <strong> '.$phone.'</strong> </span>
   
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


/*$to      = $email123;             // give to email address 
 $subject  = "Courier Company  Approval";  //change subject of email 
$newEmail    ="info@loadme.services";                           // give from email address 

// mandatory headers for email message, change if you need something different in your setting. 
   $newEmail= "info@loadme.services";
	                    $headers = "From: " .($newEmail) . "\r\n";
                        $headers .= "Reply-To: ".($newEmail) . "\r\n";
                        $headers .= "Return-Path: ".($newEmail) . "\r\n";;
                        $headers .= "MIME-Version: 1.0\r\n";
                        $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
                        $headers .= "X-Priority: 3\r\n";
                        $headers .= "X-Mailer: PHP". phpversion() ."\r\n";         
         */
        
         
          $subject  = "Courier Company Updated:  Approval"; 
         $newEmail= "info@loadme.services";
	                    $headers = "From: " .($newEmail) . "\r\n";
                        $headers .= "Reply-To: ".($newEmail) . "\r\n";
                        $headers .= "Return-Path: ".($newEmail) . "\r\n";;
                        $headers .= "MIME-Version: 1.0\r\n";
                        $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
                        $headers .= "X-Priority: 3\r\n";
                        $headers .= "X-Mailer: PHP". phpversion() ."\r\n";         
         
         
         

mail($email123, $subject, $message, $headers);		

		$realmessage =  mysqli_real_escape_string($conn,$message);
		 
$sqlnot ="INSERT INTO `notification`(`code`,`title`,`message`, `registeredby`, `sent_to`, `status`, `read_status`, `created_at`) VALUES
('$account_number','$subject','$realmessage','$emailing', '$account_number123', '1', '1','$datetime')";
     
				
		 	
 mysqli_query($conn, $sqlnot) or die(mysqli_error($conn));		
  
 
         
         
         
         
         
         
         
         
     }
    }
        
        
        
        
        
        
        
        
         echo ' 
      <div class="row">
        <div class="col-md-12">
          <div class="notification success closeable margin-bottom-30">
            <p><strong>Well-done!</strong> Information Updated Successfully.</p>
            <a class="close" href="#"></a> 
		  </div>
        </div>
		</div>';	
        
        
               
		
		
		if($image != "")
		{
			
			
		
		
  $target_dir = "../graphicallity/";
$target_file = $target_dir . $account_number. basename($_FILES["file"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["file"]["tmp_name"]);
    if($check !== false) {
        echo "<div class='btn btn-success btn-lg'>File is an image - " . $check["mime"] . ".</div>";
        $uploadOk = 1;
    } else {
        echo "<div class='btn btn-danger btn-lg'>File is not an image.</div>";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "<div class='btn btn-danger btn-lg'>Sorry, file already exists.</div>";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["file"]["size"] > 500000) {
    echo "<div class='btn btn-danger btn-lg'>Sorry, your file is too large.</div>";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "<div class='btn btn-danger btn-lg'>Sorry, only JPG, JPEG, PNG & GIF files are allowed.</div>";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "<div class='btn btn-danger btn-lg'>Sorry, your file was not uploaded.</div>";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
        echo "<div class='btn btn-success btn-lg'>The file ". basename( $_FILES["file"]["name"]). " has been uploaded.</div>";
    } else {
        echo "<div class='btn btn-danger btn-lg'>Sorry, there was an error uploading your file.</div>";
    }
}
 
  
     }   
        
        
        //GIT HERE
        
        
      if($git != "")  
	  {
		  		
  $target_dir = "../graphicallity/";
$target_file = $target_dir . $account_number. basename($_FILES["git"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["git"]["tmp_name"]);
    if($check !== false) {
        echo "<div class='btn btn-success btn-lg'>File is an image - " . $check["mime"] . ".</div>";
        $uploadOk = 1;
    } else {
        echo "<div class='btn btn-danger btn-lg'>File is not an image.</div>";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "<div class='btn btn-danger btn-lg'>Sorry, file already exists.</div>";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["git"]["size"] > 500000) {
    echo "<div class='btn btn-danger btn-lg'>Sorry, your file is too large.</div>";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "<div class='btn btn-danger btn-lg'>Sorry, only JPG, JPEG, PNG & GIF files are allowed.</div>";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "<div class='btn btn-danger btn-lg'>Sorry, your file was not uploaded.</div>";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["git"]["tmp_name"], $target_file)) {
        echo "<div class='btn btn-success btn-lg'>The file ". basename( $_FILES["git"]["name"]). " has been uploaded.</div>";
    } else {
        echo "<div class='btn btn-danger btn-lg'>Sorry, there was an error uploading your file.</div>";
    }
}
		  
	  }
 	

 
         
        
 
		
		
		
		/*
		
  $target_dir = "graphicallity/";
$target_file = $target_dir . basename($_FILES["file"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["file"]["tmp_name"]);
    if($check !== false) {
        echo "<div class='btn btn-success btn-lg'>File is an image - " . $check["mime"] . ".</div>";
        $uploadOk = 1;
    } else {
        echo "<div class='btn btn-danger btn-lg'>File is not an image.</div>";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "<div class='btn btn-danger btn-lg'>Sorry, file already exists.</div>";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["file"]["size"] > 500000) {
    echo "<div class='btn btn-danger btn-lg'>Sorry, your file is too large.</div>";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "<div class='btn btn-danger btn-lg'>Sorry, only JPG, JPEG, PNG & GIF files are allowed.</div>";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "<div class='btn btn-danger btn-lg'>Sorry, your file was not uploaded.</div>";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
        echo "<div class='btn btn-success btn-lg'>The file ". basename( $_FILES["file"]["name"]). " has been uploaded.</div>";
    } else {
        echo "<div class='btn btn-danger btn-lg'>Sorry, there was an error uploading your file.</div>";
    }
}
 
  */
        
        
        
        //GIT HERE
        
        
        
 	
	/*	
  $target_dir = "graphicallity/";
$target_file = $target_dir . basename($_FILES["git"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["git"]["tmp_name"]);
    if($check !== false) {
        echo "<div class='btn btn-success btn-lg'>File is an image - " . $check["mime"] . ".</div>";
        $uploadOk = 1;
    } else {
        echo "<div class='btn btn-danger btn-lg'>File is not an image.</div>";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "<div class='btn btn-danger btn-lg'>Sorry, file already exists.</div>";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["git"]["size"] > 500000) {
    echo "<div class='btn btn-danger btn-lg'>Sorry, your file is too large.</div>";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "<div class='btn btn-danger btn-lg'>Sorry, only JPG, JPEG, PNG & GIF files are allowed.</div>";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "<div class='btn btn-danger btn-lg'>Sorry, your file was not uploaded.</div>";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["git"]["tmp_name"], $target_file)) {
        echo "<div class='btn btn-success btn-lg'>The file ". basename( $_FILES["git"]["name"]). " has been uploaded.</div>";
    } else {
        echo "<div class='btn btn-danger btn-lg'>Sorry, there was an error uploading your file.</div>";
    }
}
 
         
        
        
        */
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
  
   
} else {
 
 
		
		
		  echo ' 
      <div class="row">
        <div class="col-md-12">
          <div class="notification error closeable margin-bottom-30">
            <p><strong>Ooops!</strong>  Information Not Submitted Successfully.  <br />Please try again later.</p>
            <a class="close" href="#"></a> 
		  </div>
        </div></div>';	

}

 
		 
 }
		
 
 }
 		 
 }else
  {
	  
	  
	  
	  
	  
	/*   echo ' 
      <div class="row">
        <div class="col-md-12">
          <div class="notification error closeable margin-bottom-30">
            <p><strong>Ooops!</strong>  Please accept terms and conditions to continue.</p>
            <a class="close" href="#"></a> 
		  </div>
        </div></div>';	
*/
	  
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

 