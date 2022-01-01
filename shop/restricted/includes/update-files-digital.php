 <?php
 
 include("config/DB_config.php");
include("ocr-export.php");
$emailing = "";
 
 if(isset($_POST['validate']))
 {
 
 if(isset($_SESSION['email']))
 {
$emailing  = $_SESSION['email'];
 }

  $rading  = rand(28736, 8735673);
 $name = mysqli_real_escape_string($conn,$_POST['name']);
$naming = mysqli_real_escape_string($conn,$_POST['name']);
$ministry = mysqli_real_escape_string($conn, $_POST['registry']);
$from = mysqli_real_escape_string($conn,$_POST['from']);
$filecode = mysqli_real_escape_string($conn,$_POST['filecode']);

	  $filecount = $myName->showName($conn, "SELECT  count(`filecode`) FROM `filehistory` WHERE `filecode` = '$filecode'"); 
	  $logoOld = $myName->showName($conn, "SELECT  `filename` FROM `userfiles` WHERE `filecode` = '$filecode'"); 
	 
	 $filecount2 = $filecount + 1;
	 
	 $version = "V".$filecount2;
 $target_dir = "uploads/";
$logo = $target_dir . basename($_FILES["file"]["name"]);
 
	 
	  $logo1 =  trim(mysqli_real_escape_string($conn, $_POST['logo1']));
	 $image = basename($_FILES["file"]["name"]);
	 
	 
	 if($image == "")
	 {
		   $logo =  trim(mysqli_real_escape_string($conn, $_POST['logo1']));
		  // $logoOld =  trim(mysqli_real_escape_string($conn, $_POST['logo1']));
		 
		 
	 }
	 else
	 {
		  $target_dir = "uploads/";
$logo = $target_dir . basename($_FILES["file"]["name"]);
$logo =   basename($_FILES["file"]["name"]);
$logonew =   basename($_FILES["file"]["name"]);
 
		 
	 }
	 
	
		  
	 
	$sql = 	 "INSERT INTO `filehistory` (
   `filepath`, `filename`, `ministry`, `agency`, `directoryname`, `shelf`, `shelf_cell`, `name`, `file_type`, `status`, `registry`, `created_date`, `creeated_by`, `filesize`, `filecode`, `submitted_by`, `stage`, `updated_by`, `updated_at`, `group_code`, `status_a`, `signature`
)
SELECT 
   `filepath`, `filename`, `ministry`, `agency`, `directoryname`, `shelf`, `shelf_cell`, `name`, `file_type`, `status`, `registry`, `created_date`, `creeated_by`, `filesize`, `filecode`, `submitted_by`, `stage`, `updated_by`, `updated_at`, `group_code`, `status_a`, `signature`
FROM 
    userfiles
WHERE 
   `filecode` = '$filecode'";
	 $process = mysqli_query($conn, $sql) or die(mysqli_error($conn)); 
	 
	 
	 
	 
	 
  $extract_user = mysqli_query($conn, "SELECT * FROM `userfiles`  WHERE `filecode` = '$filecode'") or die(mysqli_error($conn));
		$count = mysqli_num_rows($extract_user);
		 if ($count > 0) {
	 	 
			 
			 if($logoOld == $logonew)
			 {
	echo "<div class='btn btn-warning btn-lg'>Please rename the file with proper version number. Requisition Name:".$logoOld."</div>";			 
				 
				 
			 }
			 else
			 {
			 
	 
			 
			 
		$filesize = $_FILES["file"]["size"];
$sql = 	 "UPDATE `userfiles` SET  `filename` = '$logo', `name` = '$naming', `registry` = '$ministry', `updated_by` = '$emailing', `updated_at` = '$datetime', `submitted_by` = '$from', `filesize` = '$filesize' WHERE 
   `filecode` = '$filecode'";
  
			 
			 
 $process = mysqli_query($conn, $sql) or die(mysqli_error($conn));
 
	if ($process) {
		 
 
  //	convertOCR($logo, "rtf",$rading);
	//convertOCR($logo, "txt",$rading);
		
		$query = "INSERT INTO `ocr`(`filepath`, `filename`,`name`,`code`,`filecode`, `created_date`, `created_by`) VALUES
	('rtf-files','".$logo."', '".$naming."', '$rading', '$filecode','$datetime','$emailing')";
 $process = mysqli_query($conn, $query) or die("Error Occured: ".mysqli_error($conn));	 
		
 
		
 	if($image != "")
	 {	
		
		
		$target_dir = "uploads/";
			// $logo = $target_dir . basename($_FILES["file"]["name"]);
//$target_file = $target_dir . basename($_FILES["file"]["name"]);
$target_file = $target_dir . basename($_FILES["file"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
		
		
		
if(isset($_POST["validate"])) {
	
	 
    /*$check = getimagesize($_FILES["file"]["tmp_name"]);
    if($check !== false) {
       // echo "<div class='btn btn-success btn-lg'>File is an image - " . $check["mime"] . ".</div>";
       $uploadOk = 1;
    } else {
       // echo "<div class='btn btn-danger btn-lg'>File is not an image.</div>";
         $uploadOk = 1;
    } */
// Check if file already exists
if (file_exists($target_file)) {
    echo "<div class='btn btn-danger btn-lg'>Sorry, file already exists.</div><br />";
    $uploadOk = 0;
}
// Check file size
/*if ($_FILES["file"]["size"] > 90000000000000) {
    echo "<div class='btn btn-danger btn-lg'>Sorry, your file is too large.</div><br />";
    $uploadOk = 0;
}*/
// Allow certain file formats
/* if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}*/ 
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "<div class='btn btn-danger btn-lg'>Sorry, your file was not uploaded.</div><br />";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
        echo "<div class='btn btn-success btn-lg'>The file ". basename( $_FILES["file"]["name"]). " has been uploaded.</div><br />";
    } else {
        echo "<div class='btn btn-danger btn-lg'>Sorry, there was an error uploading your file.</div><br />";
    }
}
 
	}
	}
	
 }
		 
 
 }
 		 
 }
 }
 
$conn->close();
	
 
?>

 