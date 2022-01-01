 <?php
 
 include("config/DB_config.php");
$emailing = "";
 
 if(isset($_POST['validate']))
 {
 
 if(isset($_SESSION['email']))
 {
$emailing  = $_SESSION['email'];
 }

 $mda = $_POST['registry'];
 $rading = rand(23, 33434).rand(234,343434);
	 $full = $mda.$rading;
	 
 
		  $target_dir = "headerfooter/";
$logo = $target_dir .$full. basename($_FILES["logo"]["name"]);
$footer = $target_dir .$full. basename($_FILES["footer"]["name"]);
 
 
	 
	 
 
	 
  $extract_user = mysqli_query($conn, "SELECT * FROM `headerfooter` WHERE `mda` = '$mda'") or die(mysqli_error($conn));
		$count = mysqli_num_rows($extract_user);
		 if ($count > 0) {
	 	  
		 
$sql = 	 "UPDATE `headerfooter` SET `mda` = '$mda', `header` = '$logo', `footer` = '$footer', `status` = '1', `created_date` = '$datetime', `registeredby` = '$emailing'  WHERE 1";
  
			 
			 
 $process = mysqli_query($conn, $sql) or die(mysqli_error($conn));
 
	if ($process) {
		 
 
  echo '<div class="btn btn-success btn-lg">Information Submitted Successfully.</a></div><br />'; 	
 
		
 
		
		
		$target_dir = "headerfooter/";
$target_file = $target_dir .$full.  basename($_FILES["logo"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
		
		
		
if(isset($_POST["validate"])) {
	
	
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
			 
			 
		 
		$target_dir = "headerfooter/";
$target_file = $target_dir .$full. basename($_FILES["footer"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
		
		
		
if(isset($_POST["validate"])) {
	
	
    $check = getimagesize($_FILES["footer"]["tmp_name"]);
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
if ($_FILES["footer"]["size"] > 500000) {
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
    if (move_uploaded_file($_FILES["footer"]["tmp_name"], $target_file)) {
        echo "<div class='btn btn-success btn-lg'>SThe file ". basename( $_FILES["footer"]["name"]). " has been uploaded.</div>";
    } else {
        echo "<div class='btn btn-danger btn-lg'>Sorry, there was an error uploading your file.</div>";
    }
}
 
	 
	} else
		 {
 	  $target_dir = "headerfooter/";
$logo = $target_dir .$full. basename($_FILES["logo"]["name"]);
$footer = $target_dir .$full. basename($_FILES["footer"]["name"]);
 
 
 	 
$sql = 	 "INSERT INTO `headerfooter`(`header`, `footer`, `status`, `created_date`, `registeredby`, `mda` ) VALUES
('$logo', '$footer', '1', '$datetime', '$emailing', '$mda')";
 
 $process = mysqli_query($conn, $sql) or die(mysqli_error($conn));
 
	if ($process) {
		 
 
  echo '<div class="btn btn-success btn-lg">Information Submitted Successfully.</a></div><br />'; 	
  $target_dir = "headerfooter/";
$target_file = $target_dir .$full. basename($_FILES["logo"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["validate"])) {
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
 
	
		$target_dir = "headerfooter/";
$target_file = $target_dir .$full. basename($_FILES["footer"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
		
		
		
if(isset($_POST["validate"])) {
	
	
    $check = getimagesize($_FILES["footer"]["tmp_name"]);
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
if ($_FILES["footer"]["size"] > 500000) {
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
    if (move_uploaded_file($_FILES["footer"]["tmp_name"], $target_file)) {
        echo "<div class='btn btn-success btn-lg'>SThe file ". basename( $_FILES["footer"]["name"]). " has been uploaded.</div>";
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

 