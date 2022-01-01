 
<?php
include ("config/DB_config.php"); 
$counter = 0;
$active= "active";
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
$query12 = "";


if($userT == 1)
{
	$file = $_GET['value'];
	 
	
	 $query12 =  "SELECT  `id`, `FilePath`, `filename`, `registry`, `agency`, `directoryname`, `shelf`, `shelf_cell`, `name`, `file_type`,`status` , `filesize`, `filecode`, `submitted_by`, `group_code` FROM `userfiles` WHERE  `directoryname` = '$file'   ORDER BY `id` DESC";	
}
else
{
	$file = $_GET['value'];
	 
	 $query12 =  "SELECT  `id`, `FilePath`, `filename`, `registry`, `agency`, `directoryname`, `shelf`, `shelf_cell`, `name`, `file_type`,`status`, `filesize`, `filecode`, `submitted_by`, `group_code`  FROM `userfiles` WHERE  `directoryname` = '$file'  AND (status = 1 or status = 4) ORDER BY `id` DESC";	
	
}
 






 $extract_distance12= mysqli_query($conn, $query12) or die(mysqli_error($conn));
		$count12 = mysqli_num_rows($extract_distance12);
    if ($count12 > 0)
		  {
 	 while ($row_distance12=mysqli_fetch_row($extract_distance12))
    {
  						  	$id =$row_distance12[0];
		 					$id4 =$row_distance12[0];
		 					$filepath =$row_distance12[1];
						   	$filename =$row_distance12[2];
		 					$ministry =$row_distance12[3];
					  	   $agency =$row_distance12[4];
						 	$directoryname =$row_distance12[5];
					   	 
					 $shelf =$row_distance12[6];
		 $shelf_cell =$row_distance12[7];
		 					$name =$row_distance12[8];
						   	$file_type =$row_distance12[9];
		 	$status =$row_distance12[10];
		 	  	$filesize =$row_distance12[11];
						   	$filecode =$row_distance12[12];
						   	$submitted_by =$row_distance12[13];			 
						   	$group_code =$row_distance12[14];			 
		
 
		 $usernameT12 = $myName->showName($conn, "SELECT  `username` FROM `document_access` WHERE  `username` = '$emailing' AND (`code` = '$filecode' OR `code` = '$group_code')"); 
		 
		 
	 
		 
		 
		  
		if($usernameT12 == $emailing)
		{
			
			echo '<li data-target="#carousel-4" data-slide-to="'.$counter.' class= "'.$active.'""></li>';
			
		}
		 $active = "";
		 $counter++;
	 
}
 
						  
				 	
				 
			 
					}
else
{
	
	///echo '<meta http-equiv="Refresh" content="0; url= all-my-accessed-files.php"> ';
}
		   
	 
?>