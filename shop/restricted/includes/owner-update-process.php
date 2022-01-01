 <?php
 
 include("config/DB_config.php");
if(isset($_POST['update']))
 {
 
 if(isset($_SESSION['email']))
 {
$emailing  = $_SESSION['email'];
 }
	
	 $datetime=date("Y-m-d G:i:s");
	
	
//$account_number  =  mysqli_real_escape_string($conn,$_POST['account_number']);
$name  =  mysqli_real_escape_string($conn,$_POST['name']);
$phone  =  mysqli_real_escape_string($conn,$_POST['phone']);
$email  =  mysqli_real_escape_string($conn,$_POST['email']);
$address  =  mysqli_real_escape_string($conn,$_POST['address']);
	 //$ministry = mysqli_real_escape_string($conn,$_POST['mda']);
	 //$city = mysqli_real_escape_string($conn,$_POST['city']);
	 //$status = mysqli_real_escape_string($conn,$_POST['status']);

//$usertype =  mysqli_real_escape_string($conn,$_POST['usertype']);
		$idding = mysqli_real_escape_string($conn,$_POST['idding']);
		$password = mysqli_real_escape_string($conn,$_POST['password']);
		$password2 = mysqli_real_escape_string($conn,$_POST['password2']);
		//$designation = mysqli_real_escape_string($conn,$_POST['designation']);
	
  // $state = mysqli_real_escape_string($conn,$_POST['state']);
	// $lga = mysqli_real_escape_string($conn,$_POST['lga']);
     
    
    if($password != $password2)
    {
        
        echo '<div class="btn btn-danger btn-lg">Passwords entered are not equal.</a></div>'; 
    }
    else{
    
     
      $coordinates1 = get_coordinates($address);
     
     
     
      $user_long = "";
	 $user_lat = "";
	 
  $company_lat1 = $coordinates1['lat'];
	$company_long1 = $coordinates1['long'];
     
     
     
 
	    $super = $myName->showName($conn, "SELECT `super` FROM `user_unit` WHERE `account_number` = '$emailing'");			 
    
    if($super == 1)
			 {
				 
				 $status = 1;
			 }
	 else
	 {
		  $status = 0;
	 }
	 if($company_lat1 == "" or empty($company_lat1))
     {
         
         
           echo '<div class="btn btn-danger btn-lg">Address Location Not Retrieved. Please Update The Address</a></div>'; 	
     }
	 
	 
	   
 $password = $password;					
$uuid = uniqid('', true);

$salt = sha1(rand());
        $salt = substr($salt, 0, 10);
        $encrypted = base64_encode(sha1($password . $salt, true) . $salt);
        $hash = array("salt" => $salt, "encrypted" => $encrypted);
         
        $encrypted_password = $hash["encrypted"]; // encrypted password
        $salt = $hash["salt"]; // salt
 
	 
	 //, `unique_id` = '$uuid', `encrypted_password` = '$encrypted_password', `salt`='$salt' , `irrelivant` = '$password'
    //,  ,,, 
	 
	 
$sql = 	 "UPDATE `user_unit` SET  `name`='$name' , `phone`='$phone', `email`='$email', `address`='$address', `updated_at`='$datetime', `registeredby`='$emailing'  , `lati` = '$company_lat1', `longi` = '$company_long1', `unique_id` = '$uuid', `encrypted_password` = '$encrypted_password', `salt`='$salt' , `irrelivant` = '$password' WHERE `id` = '$idding' ";
 
 $process = mysqli_query($conn, $sql) or die(mysqli_error($conn));
 
	if ($process) {
		
 
		 
		  
 
  echo '<div class="btn btn-success btn-lg">Information Updated Successfully.Thanks You.</a></div><br />'; 	
 
} else {
  // echo "Error: " . $sql . "<br>" . $conn->error;
    $error="Not Inserted,Some Problem occured.";
echo'<a href="#"class="btn btn-danger btn-lg">Information Not Submitted Successfully.  <br />Please try again later.</a><br />';  

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


function GetDrivingDistance($lat1, $lat2, $long1, $long2)
{
    $url = "https://maps.googleapis.com/maps/api/distancematrix/json?origins=".$lat1.",".$long1."&destinations=".$lat2.",".$long2."&mode=driving&language=en-EN&departure_time=now&key=AIzaSyAGrHdhUTvfj1Fyl9Dx7_e7RstThaE1uHo";
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_PROXYPORT, 3128);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    $response = curl_exec($ch);
    curl_close($ch);
    $response_a = json_decode($response, true);
    $dist = $response_a['rows'][0]['elements'][0]['distance']['text'];
	  $dist_value = $response_a['rows'][0]['elements'][0]['distance']['value'];
    $time = $response_a['rows'][0]['elements'][0]['duration']['text'];
	$value = $response_a['rows'][0]['elements'][0]['duration']['value'];

    return array('distance' => $dist,'distanceval' => $dist_value, 'time' => $time, 'value' => $value);
}

 
$conn->close();
 
	
 
?>

 