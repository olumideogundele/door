 <?php
 
 include("config/DB_config.php");
$emailing = "";
 
 if(isset($_POST['validate']))
 {
 
 if(isset($_SESSION['email']))
 {
$emailing  = $_SESSION['email'];
 }

  
 $registry= "-";
$name=  mysqli_real_escape_string($conn,$_POST['name']);
//$start=  mysqli_real_escape_string($conn,$_POST['start']);
$address=  mysqli_real_escape_string($conn,$_POST['address']);
	 
	  $coordinates1 = get_coordinates($address);
     
     
     
      $company_lat1 = "";
	 $company_long1 = "";
	 
  $company_lat1 = $coordinates1['lat'];
	$company_long1 = $coordinates1['long'];
     
     
     
      if($company_lat1 == "" or empty($company_lat1))
     {
         
         
           echo '<div class="btn btn-danger btn-lg">Address Location Not Retrieved. Please Update The Address</a></div><br />'; 	
     }
 
 
  $extract_user = mysqli_query($conn, "SELECT *  FROM `city`  WHERE  `name` = '$name'") or die(mysqli_error($conn));
		$count = mysqli_num_rows($extract_user);
		 if ($count > 0) {
	 	 //ip` VARCHAR(30) NULL AFTER `registeredby`, ADD `port` 
		 
$sql = 	 "UPDATE `city` SET   `name` = '$name', `status` = '1', `created_date` = '$datetime', `registeredby` = '$emailing' , `address` = '$address' , `lati` = '$company_lat1' , `longi` = '$company_long1'  WHERE `name` = '$name'";
  
			 
			 
 $process = mysqli_query($conn, $sql) or die(mysqli_error($conn));
 
	if ($process) {
		 
 
  echo '<div class="btn btn-success btn-lg">Information Updated Successfully.</a></div><br />'; 	
 
		 }
		 }else
		 {
 
 
 	 
$sql = 	 "INSERT INTO `city`( `name`  , `status`, `created_date`, `registeredby`,  `address`, `longi`, `lati`) VALUES
('$name',    '1', '$datetime', '$emailing',   '$address', '$company_long1', '$company_lat1')";
 
 $process = mysqli_query($conn, $sql) or die(mysqli_error($conn));
 
	if ($process) {
		 
 
  echo '<div class="btn btn-success btn-lg">Information Submitted Successfully.</a></div><br />'; 	
   
   
} else {
  // echo "Error: " . $sql . "<br>" . $conn->error;
    $error="Not Inserted,Some Problem occured.";
echo'<a href="#"class="btn btn-danger btn-lg">Information Not Submitted Successfully.  <br />Please try again later.</a><br />';  

}

 
		 
 
		
 
	}}
 	   
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

 