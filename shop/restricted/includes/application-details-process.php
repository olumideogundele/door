 <?php
 
 include("config/DB_config.php");
$emailing = "";
 
 if(isset($_POST['validate']))
 {
 
 if(isset($_SESSION['email']))
 {
$emailing  = $_SESSION['email'];
 }

 
 
$name= $_POST['name'];
$slogan  = $_POST['slogan'];
	 $email= $_POST['email'];
$phone = $_POST['phone'];
	 $address= $_POST['address'];
	  $ip= "";
	  $port="";
	 $bank = $_POST['bank'];
	 
	 $flutterwaves1= $_POST['flutterwaves1'];
	 $flutterwavessecret = $_POST['flutterwavessecret'];
	 $googleapi = $_POST['googleapi'];
	 $merchantkey = "";
		 $vasapikey = "";
		 $fee = $_POST['fee'];
	 
	 // `merchant_key`, `api_key` 
	 
	 
	 
	 $acct_num = $_POST['acct_num'];
 $image = basename($_FILES["logo"]["name"]);
 
  if($image == "")
	 {
		   $logo =  trim(mysqli_real_escape_string($conn, $_POST['logo1']));
		 
		 
	 }
	 else
	 {
 $target_dir = "graphicallity/";
$logo = $target_dir . basename($_FILES["logo"]["name"]);
 
		 
	 }
  $extract_user = mysqli_query($conn, "SELECT * FROM `application`") or die(mysqli_error($conn));
		$count = mysqli_num_rows($extract_user);
		 if ($count > 0) {
	 	  
			 
			 
			 
			 
		 
$sql = 	 "UPDATE `application` SET `flutterapi` = '$flutterwaves1', `flutterapisecret` = '$flutterwavessecret' ,`name` = '$name', `phone` = '$phone', `email` = '$email', `slogan` = '$slogan', `address` = '$address', `logo` = '$logo', `status` = '1', `created_date` = '$datetime', `registeredby` = '$emailing', `ip` = '$ip', `port` = '$port', `acct_num` = '$acct_num', `bank_name` = '$bank', `merchant_key` = '$merchantkey', `api_key` = '$vasapikey', `fee` = '$fee' , `googleapi` = '$googleapi'  WHERE 1";
 
 $process = mysqli_query($conn, $sql) or die(mysqli_error($conn));
 
	if ($process) {
		 
 
  echo '<div class="btn btn-success btn-lg">Information Submitted Successfully.</a></div><br />'; 	
  $target_dir = "graphicallity/";
$target_file = $target_dir . basename($_FILES["logo"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
		
		
		
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["logo"]["tmp_name"]);
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
if ($_FILES["logo"]["size"] > 500000) {
    echo "<div class='btn btn-danger btn-lg'>Sorry, your file is too large.</div>";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "<div class='btn btn-danger btn-lg'>SSorry, your file was not uploaded.</div>";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["logo"]["tmp_name"], $target_file)) {
        echo "<div class='btn btn-success btn-lg'>SThe file ". basename( $_FILES["logo"]["name"]). " has been uploaded.</div>";
    } else {
        echo "<div class='btn btn-danger btn-lg'>Sorry, there was an error uploading your file.</div>";
    }
}
 
	}

	 echo '<meta http-equiv="Refresh" content="1; url=includes/logout.php"> ';
 
		 }else
		 {
 
 
 	 
$sql = 	 "INSERT INTO `application`(`name`, `phone`, `email`, `slogan`, `address`, `logo`, `status`, `created_date`, `registeredby`,`ip`,`port`, `acct_num`, `bank_name`, `flutterapi`, `flutterapisecret`,`merchant_key`, `api_key`, `fee`, `googleapi`  ) VALUES
('$name', '$phone', '$email', '$slogan', '$address', '$logo', '1', '$datetime', '$emailing', '$ip', '$port', '$acct_num','$bank','$flutterwaves1','$flutterwavessecret','$merchantkey','$vasapikey', '$fee', '$googleapi')";
 
 $process = mysqli_query($conn, $sql) or die(mysqli_error($conn));
 
	if ($process) {
		 
 
  echo '<div class="btn btn-success btn-lg">Information Submitted Successfully.</a></div><br />'; 	
  $target_dir = "graphicallity/";
$target_file = $target_dir . basename($_FILES["logo"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["logo"]["tmp_name"]);
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
if ($_FILES["logo"]["size"] > 500000) {
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
    if (move_uploaded_file($_FILES["logo"]["tmp_name"], $target_file)) {
        echo "<div class='btn btn-success btn-lg'>The file ". basename( $_FILES["logo"]["name"]). " has been uploaded.</div>";
    } else {
        echo "<div class='btn btn-danger btn-lg'>Sorry, there was an error uploading your file.</div>";
    }
}
 
  
  echo '<meta http-equiv="Refresh" content="1; url=web-include/logout.php"> ';
   
} else {
  // echo "Error: " . $sql . "<br>" . $conn->error;
    $error="Not Inserted,Some Problem occured.";
echo'<a href="#"class="btn btn-danger btn-lg">Information Not Submitted Successfully.  <br />Please try again later.</a><br />';  

}

 
		 
 
		
 
 }
 		 
 }

 
$conn->close();
	
 
?>

 