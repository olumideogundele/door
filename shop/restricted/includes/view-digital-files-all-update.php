 
<?php
include ("config/DB_config.php"); 
$userT = "";
$usernameT = "";
 $myName = new Name();
 if(isset($_SESSION['email']))
 {
 $emailing = $_SESSION['email'];
	   $userT = $_SESSION['usertype'] ;
 }
 $ministry = "";

if(isset($_SESSION['ministry'] ))
{
$ministry = $_SESSION['ministry'] ;	
	
}
$query = "";


if(isset($_GET['code']))
{
	$code = $_GET['code'];
	 
	
	 $query =  "SELECT  `id`, `FilePath`, `filename`, `registry`, `agency`, `directoryname`, `shelf`, `shelf_cell`, `name`, `file_type`,`status` , `filesize`, `filecode`, `submitted_by`, `group_code` FROM `userfiles` WHERE  `filecode` = '$code'   ORDER BY `id` DESC";	

 
 $extract_distance = mysqli_query($conn, $query) or die(mysqli_error($conn));
		$count = mysqli_num_rows($extract_distance);
    if ($count > 0)
		  {
 	 while ($row_distance=mysqli_fetch_row($extract_distance))
    {
  						  	$id =$row_distance[0];
		 					$id4 =$row_distance[0];
		 					$filepath =$row_distance[1];
						   	$filename =$row_distance[2];
		 					$ministry =$row_distance[3];
					  	   $agency =$row_distance[4];
						 	$directoryname =$row_distance[5];
					   	 
					 $shelf =$row_distance[6];
		 $shelf_cell =$row_distance[7];
		 					$name =$row_distance[8];
		 					$naming2 =$row_distance[8];
						   	$file_type =$row_distance[9];
		 	$status =$row_distance[10];
		 	  	$filesize =$row_distance[11];
						   	$filecode =$row_distance[12];
						   	$submitted_by =$row_distance[13];			 
						   	$group_code =$row_distance[14];			 
		
		
		
 $statusCSS = "";
$statusParam = "";
if($status == 1)
{
 $statusCSS = "badge badge-success m-b-5";
$statusParam = "Active";
}			
else  if($status == 0)
{
 $statusCSS = "badge badge-danger m-b-5";
$statusParam = "Not Active";
}
 	
		 $usernameT = $myName->showName($conn, "SELECT  `username` FROM `document_access` WHERE  `username` = '$emailing' AND (`code` = '$filecode' OR `code` = '$group_code')"); 
		 
		 
	 
		 
		 
		  $comment = $myName->showName($conn, "SELECT `comment` FROM `document_access` WHERE `username` = '$emailing' AND `code` = '$filecode'"); 
		 
		 
		 
		 $ministry_value = $myName->showName($conn, "SELECT `name`  FROM `mda`  WHERE `id` = '$ministry'"); 
		
		 $directoryname = $myName->showName($conn, "SELECT `foldername` FROM `file_directory` WHERE `id` = '$directoryname'"); 
		 $shelf = $myName->showName($conn, "SELECT `name` FROM  `shelf` WHERE `id` = '$shelf'"); 
		 $shelf_cell = $myName->showName($conn, "SELECT `cell_name` FROM `shelf_cells` WHERE `id` = '$shelf_cell'"); 
		 $name_cell = $myName->showName($conn, "SELECT `name` FROM `user_unit` WHERE `account_number` = '$emailing'"); 
		 
		 if($shelf == "")
		 {
			 $message = "wrong answer";
echo "<script type='text/javascript'>alert('Hi $name_cell, Please note: $inst_name cannot trace the physical location of this file.');</script>";
			 
			  
		 }
 
	 
}
 
						  
				 	
				 
			 
					}
else
{
	
	///echo '<meta http-equiv="Refresh" content="0; url= all-my-accessed-files.php"> ';
}
}		   
	 
?>