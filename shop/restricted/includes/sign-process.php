<?php

 
include ("config/DB_config.php"); 
 $myName = new Name();
$emailing = "";
//$emailing = "";
/* ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);*/
 if(isset($_POST['validate']))
 {
 
 if(isset($_SESSION['email']))
 {
$emailing  = $_SESSION['email'];
 }
	 
	 

	 
	 
	 
 
$target_dir = "sign/";
$target_file = $target_dir . basename($_FILES["sign"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["sign"]["tmp_name"]);
  if($check !== false) {
    echo "<div class='btn btn-danger btn-lg'>File is an image - " . $check["mime"] . ".</div>";
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
if ($_FILES["sign"]["size"] > 500000) {
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
  if (move_uploaded_file($_FILES["sign"]["tmp_name"], $target_file)) {
    echo '<div class="btn btn-success btn-lg">The file '. basename( $_FILES["sign"]["name"]). ' has been uploaded.</div>';
	  
	  
	  $file = $_FILES["sign"]["name"];
	  
$query = "INSERT INTO `signature`( `filepath`, `filename`, `code`, `created_date`, `created_by`) VALUES
	('sign','".$file."',  '$emailing',  '$datetime','$emailing')";
 $process = mysqli_query($conn, $query) or die("Error Occured: ".mysqli_error($conn));	 
	  
	  
	  
  } else {
    echo "<div class='btn btn-danger btn-lg'>Sorry, there was an error uploading your file.</div>";
  }
}
 
	 
	 
	 
 }

?>