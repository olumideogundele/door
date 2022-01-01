<?php
include("config/DB_config.php"); 

 
$ALGORITHM = 'AES-128-CBC';
$IV    = '12dasdq3g5b2434b';
$password    = '12312312';
$error = "";
// include("../includes/view-application-details.php");
if(isset($_POST['validated']))
{
	 //$files = array_filter($_FILES['upload']['name']); //something like that to be used before processing files.
/*
// Count # of uploaded files in array
$total = count($_FILES['upload']['name']);

// Loop through each file
for( $i=0 ; $i < $total ; $i++ ) {
$target_file2 =   mysqli_real_escape_string($conn,basename($_FILES["upload"]["name"][$i]));
   //Get the temp file path
  $tmpFilePath = $_FILES['upload']['tmp_name'][$i];

  //Make sure we have a file path
  if ($tmpFilePath != ""){
    //Setup our new file path
    $newFilePath = "./uploadFiles/" . $_FILES['upload']['name'][$i];
 
	 
	  
	    $orginalfile = $target_file2;
    $crypt = $target_file2;
   // $decrypt = 'decrypt.pdf';
    $password = 'pass';
    CryptFile($orginalfile,$crypt,$password);
	   
 echo $_FILES['upload']['name'][$i]." - <strong>File</strong></p>".$target_file2 ;
  } */
	
	
	
	//session_start();
    $target="uploadFiles";
        if($target[strlen($target)-1]!='/')
                $target=$target.'/';
            $count=0;
            foreach ($_FILES['file']['name'] as $filename) 
            {
                $temp=$target;
                $tmp=$_FILES['file']['tmp_name'][$count];
                $count=$count + 1;
                $temp=$temp.basename($filename);
                move_uploaded_file($tmp,$temp);
				
				
				
				$orginalfile = $temp;
				  $crypt = $temp;
   // $decrypt = 'decrypt.pdf';
    $password = 'pass';
    CryptFile($orginalfile,$crypt,$password);
				
                $temp='';
                $tmp='';
				
				echo $orginalfile;
            }
   // header("location:../../views/upload.php");

	
	
 
	
}

	
	

	
	



function CryptFile($InFileName,$OutFileName,$password){
	
	$OutFile = "";
    //check the file if exists
    if (file_exists($InFileName)){
    //get file content as string
    $InFile = file_get_contents($InFileName);
    // get string length
    $StrLen = strlen($InFile);
    // get string char by char
    for ($i = 0; $i < $StrLen ; $i++){
    //current char
    $chr = substr($InFile,$i,1);
    //get password char by char
    $modulus = $i % strlen($password);
    $passwordchr = substr($password,$modulus, 1);
    //encryption algorithm
    $OutFile .= chr(ord($chr)+ord($passwordchr));
    }
    $OutFile = base64_encode($OutFile);
    //write to a new file
    if($newfile = fopen($OutFileName, "c")){
    file_put_contents($OutFileName,$OutFile);
    fclose($newfile);
    return true;
    }else{
    return false;
    }
    }else{
    return false;
    }
    }
  
?>