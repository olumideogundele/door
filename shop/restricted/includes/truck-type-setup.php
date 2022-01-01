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
$desc  = $_POST['desc'];
	 
 $image = basename($_FILES["image"]["name"]);
 
  if($image == "")
	 {
		   $logo =  trim(mysqli_real_escape_string($conn, $_POST['image1']));
		 
		 
	 }
	 else
	 {
 $target_dir = "graphicallity/";
$logo = $target_dir.$name.basename($_FILES["image"]["name"]);
 
		 
	 }
	 
	 
	  
  $extract_user = mysqli_query($conn, "SELECT * FROM `truck_type` WHERE `name` = '$name'") or die(mysqli_error($conn));
		$count = mysqli_num_rows($extract_user);
		 if ($count > 0) {
	 	  
			 
			 
			 
			 
		 
$sql = 	 "UPDATE `truck_type` SET `name` = '$name', `desc` = '$desc'  , `status` = '1', `created_date` = '$datetime', `registeredby` = '$emailing' , `image` = '$logo'   WHERE `name` = '$name'";
 
 $process = mysqli_query($conn, $sql) or die(mysqli_error($conn));
 
	if ($process) {
		 
 
  echo '<div class="btn btn-success btn-lg">Information Updated Successfully.</a></div><br />'; 	
        
        
         $target_dir = "graphicallity/";
$target_file = $target_dir.$name. basename($_FILES["image"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
		
		
		
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["image"]["tmp_name"]);
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
if ($_FILES["image"]["size"] > 500000) {
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
    if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
        echo "<div class='btn btn-success btn-lg'>SThe file ". basename( $_FILES["image"]["name"]). " has been uploaded.</div>";
    } else {
        echo "<div class='btn btn-danger btn-lg'>Sorry, there was an error uploading your file.</div>";
    }
}
 
	
   
 
		 }else
		 {
 
       echo '<div class="btn btn-success btn-lg">Information Updated Successfully.</a></div><br />'; 	 
    }
             
         }else
    {
        
    
 
 	 
$sql = 	 "INSERT INTO `truck_type`(`name`, `desc`, `status`, `created_date`, `registeredby`, `image`) VALUES
('$name', '$desc', '1', '$datetime', '$emailing', '$logo')";
 
 $process = mysqli_query($conn, $sql) or die(mysqli_error($conn));
 
	if ($process) {
		 
 
  echo '<div class="btn btn-success btn-lg">Information Submitted Successfully.</a></div><br />'; 	
        
        
        
        
        $target_dir = "graphicallity/";
$target_file = $target_dir .$name. basename($_FILES["image"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["image"]["tmp_name"]);
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
if ($_FILES["image"]["size"] > 500000) {
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
    if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
        echo "<div class='btn btn-success btn-lg'>The file ". basename( $_FILES["image"]["name"]). " has been uploaded.</div>";
    } else {
        echo "<div class='btn btn-danger btn-lg'>Sorry, there was an error uploading your file.</div>";
    }
}
 
  
} else {
  // echo "Error: " . $sql . "<br>" . $conn->error;
    $error="Not Inserted,Some Problem occured.";
echo'<a href="#"class="btn btn-danger btn-lg">Information Not Submitted Successfully.  <br />Please try again later.</a><br />';  

}

 
		 
 
		
 
 }
 		 
 }
 
 
$conn->close();
	
 
?>

 