 
<?php
include ("config/DB_config.php"); 
 $myName = new Name();

$code ="";
	$code2 ="";

 if(isset($_SESSION['email']))
 {
 $emailing = $_SESSION['email'];
 }
 
$query = "";
 

if(isset($_GET['code']) or isset($_POST['code'])  )
{

	if(isset($_GET['code']))
	   {
	
	$code =$_GET['code'];
	}
	
	if(isset($_POST['code']))
	   {
		   
		   $code2 =$_POST['code'];
	   }
	
 

 $query =  "SELECT  `id`, `filepath`, `filename`, `ministry`, `agency`, `directoryname`, `shelf`, `shelf_cell`, `name`, `file_type`, `status`, `registry`, `created_date`, `creeated_by`, `filesize`, `filecode`, `submitted_by`, `stage`, `group_code` ,`type`, `account_name`, `account_number`, `bank_name`, `amount` FROM `userfiles` WHERE (`group_code` = '$code' or `filecode` = '$code') or (`group_code` = '$code2' or `filecode` = '$code2') LIMIT 1";	
 
	
 
 
 $extract_distance = mysqli_query($conn, $query) or die(mysqli_error($conn));
		$count = mysqli_num_rows($extract_distance);
    if ($count > 0)
		  {
 	 while ($row_distance=mysqli_fetch_row($extract_distance))   
    { 
		 $id =$row_distance[0];
		 $aid =$row_distance[0];
		 $filepath=$row_distance[1];
		 $filename =$row_distance[2];
		 $ministry =$row_distance[3];
		 $agency =$row_distance[4];
		 $directoryname =$row_distance[5];	
		 $shelf =$row_distance[6];
      		$shelf_cell =$row_distance[7];
			$name =$row_distance[8];
			$name123 =$row_distance[8];
		$file_type =$row_distance[9]; 
		$status =$row_distance[10]; 
		$registry =$row_distance[11]; 
		$created_date =$row_distance[12]; 
		$creeated_by =$row_distance[13]; 
		$filesize =$row_distance[14]; 
		$filecode =$row_distance[15]; 
		$submitted_by =$row_distance[16]; 
		$stage =$row_distance[17]; 
		$group_code =$row_distance[18]; 
		 
		 
		  $type =$row_distance[19]; 
		$account_name =$row_distance[20]; 
		$account_number =$row_distance[21]; 
		$bank_name =$row_distance[22]; 
		$amount =$row_distance[23]; 
					  
					  
  $department = $myName->showName($conn, "SELECT  `name`  FROM `mda`  WHERE `id` = '$registry'"); 
 	$filecount = $myName->showName($conn, "SELECT  count(`id`) FROM  `userfiles` WHERE (`group_code` = '$code'  or `filecode` = '$code') or (`group_code` = '$code2'  or `filecode` = '$code2')"); 
 	$created_name = $myName->showName($conn, "SELECT  `name` FROM `user_unit` WHERE  `account_number` = '$creeated_by' or `phone` = '$creeated_by' or `email` = '$creeated_by'"); 
		 
		 
		 
		 
		   $req_type = $myName->showName($conn, "SELECT  `name`  FROM `types`  WHERE `id` = '$type'"); 
  $bank_name = $myName->showName($conn, "SELECT  `name`  FROM `banks`  WHERE `code` = '$bank_name'"); 
		 

	$statusCSS = "";
$statusParam = "";
if($status == 1)
{
	
	$statusCSS = "badge badge-success m-b-5";
$statusParam = "Active";
}			
else  if($status == 0)
{
	//btn btn-primary btn-block
	$statusCSS = "badge badge-danger m-b-5";
$statusParam = "Not Active";
}

 
		
		
  
 
	 
}
 
						  
				 	
				 
			 
					}
}		   
	 
?>