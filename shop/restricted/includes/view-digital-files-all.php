 
<?php
include ("config/DB_config.php"); 
$userT = "";
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


if($userT == 1)
{
	$file = $_GET['file'];
	$qu = $_GET['qu'];
	
	 $query =  "SELECT  `id`, `FilePath`, `filename`, `ministry`, `agency`, `directoryname`, `shelf`, `shelf_cell`, `name`, `file_type`,`status`  FROM `userfiles` WHERE  `id` = '$file' OR  (`filename` like '%".$qu."%' or `directoryname` like '%".$qu."%')  ORDER BY `id` DESC";	
}
else
{
	$file = $_GET['file'];
		$qu = $_GET['qu'];
	 $query =  "SELECT  `id`, `FilePath`, `filename`, `ministry`, `agency`, `directoryname`, `shelf`, `shelf_cell`, `name`, `file_type`,`status`  FROM `userfiles` WHERE  `id` = '$file'   OR  (`filename` like '%".$qu."%' or `directoryname` like '%".$qu."%')  ORDER BY `id` DESC";	
	
}
 






 $extract_distance = mysqli_query($conn, $query) or die(mysqli_error($conn));
		$count = mysqli_num_rows($extract_distance);
    if ($count > 0)
		  {
 	 while ($row_distance=mysqli_fetch_row($extract_distance))
    {
  						  	$id =$row_distance[0];
		 					$filepath =$row_distance[1];
						   	$filename =$row_distance[2];
		 					$ministry =$row_distance[3];
					  	   $agency =$row_distance[4];
						 	$directoryname =$row_distance[5];
					   	 
					 $shelf =$row_distance[6];
		 $shelf_cell =$row_distance[7];
		 					$name =$row_distance[8];
						   	$file_type =$row_distance[9];
		 	$status =$row_distance[10];
		 				 
		
		
		
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
 		 $ministry = $myName->showName($conn, "SELECT `name`  FROM `mda`  WHERE `id` = '$ministry'"); 
		 
		 $directoryname = $myName->showName($conn, "SELECT `foldername` FROM `file_directory` WHERE `id` = '$directoryname'"); 
		 $shelf = $myName->showName($conn, "SELECT `name` FROM  `shelf` WHERE `id` = '$shelf'"); 
		 $shelf_cell = $myName->showName($conn, "SELECT `cell_name` FROM `shelf_cells` WHERE `id` = '$shelf_cell'"); 
		 
		 
 
	 
}
 
						  
				 	
				 
			 
					}
		   
	 
?>