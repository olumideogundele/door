<?php
	if(isset($_POST["validate"])){		
	
	include ("config/DB_config.php"); 
 $ministry  =    mysqli_real_escape_string($conn,$_POST['registry']);
 $name  =    mysqli_real_escape_string($conn,$_POST['name']);
 
		 if(isset($_SESSION['email']))
 {
$emailing  = $_SESSION['email'];
 }
		
		
		
		$errors = array();
		
		$extension = array("jpeg","jpg","png","gif","pdf", "doc", "docx", "xlsx","xls");
		
		$bytes = 1902412212;
		$allowedKB = 100333;
		$totalBytes = $allowedKB * $bytes;
		
		if(isset($_FILES["files"])==false)
		{
			echo "<div class='btn btn-block btn-danger'><b>Please, Select the files to upload!!!</b></p>";
			return;
		}
		
		//$conn = mysqli_connect("localhost","root","","phpfiles");	
		
		
		
		foreach($_FILES["files"]["tmp_name"] as $key=>$tmp_name)
		{
			$uploadThisFile = true;
			
			$file_name=$_FILES["files"]["name"][$key];
			$file_tmp=$_FILES["files"]["tmp_name"][$key];
			
			$ext=pathinfo($file_name,PATHINFO_EXTENSION);

			if(!in_array(strtolower($ext),$extension))
			{
				array_push($errors, "<div class='btn btn-block btn-danger'>File type is invalid. Name:- ".$file_name."</div>");
				$uploadThisFile = false;
			}				
 
			if(file_exists("../upload/".$_FILES["files"]["name"][$key]))
			{
				array_push($errors, "<div class='btn btn-block btn-danger'>File is already exist. Name:- ". $file_name."</div>");
				$uploadThisFile = false;
			}
			
			if($uploadThisFile){
				$filename=basename($file_name,$ext);
				$newFileName=$filename.$name.".".$ext;				
				move_uploaded_file($_FILES["files"]["tmp_name"][$key],"Upload/".$newFileName);
				
				$query = "INSERT INTO `userfiles`(`filepath`, `filename`,`registry`, `name`,`file_type`, `status`, `created_date`,`created_by` ) VALUES('upload','".$newFileName."','".$ministry."','".$name."', 'digital','0', '$datetime', '$emailing')";
				
				$process = mysqli_query($conn, $query) or die("Error Occured: ".mysqli_error($conn));	
				
				
				
			}
		}
		
		mysqli_close($conn);
		
		$count = count($errors);
		
		if($count != 0){
			foreach($errors as $error){
				echo "<div class='btn btn-block btn-danger'>".$error."</div><br/>";
			}
		}		
		if($process)
				{
					echo"<script> alert('File Upload Successful. Thank You.');</script>";
					
				}
				else{
					
					echo"<script> alert('File Upload Not Successful. Thank You.');</script>";
				}

	}



?>