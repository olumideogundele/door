 
<?php
include ("config/DB_config.php"); 
 $myName = new Name();
 if(isset($_SESSION['email']))
 {
 $emailing = $_SESSION['email'];
 }
 
$query = "";







$usertype = $_SESSION['usertype']; 

 
if($usertype == "1")
{
	
	 $mdas = $myName->showName($conn, "SELECT  `ministry` FROM `user_unit` WHERE `account_number` = '$emailing'"); 
	
  
$query =  "SELECT `id`, `ministry`, `file`, `created_date`, `registeredby`, `approvedby`, `status`, `incoming_ministry`, `incoming_agency`, `code` FROM `file_request` WHERE `ministry` = '$mdas' OR `registeredby` = '$emailing'  order by  `id` DESC";
		
	}else
{
	 
$query =  "SELECT `id`, `ministry`, `file`, `created_date`, `registeredby`, `approvedby`, `status`, `incoming_ministry`, `incoming_agency`, `code` FROM `file_request` WHERE `registeredby` = '$emailing' order by  `id` DESC";
}






 $extract_distance = mysqli_query($conn, $query) or die(mysqli_error($conn));
		$count = mysqli_num_rows($extract_distance);
    if ($count > 0)
		  {
 	 while ($row_distance=mysqli_fetch_row($extract_distance))
    {
  						  	$id =$row_distance[0];
						   	$ministry =$row_distance[1];
					  		$file =$row_distance[2];
					  		$created_date =$row_distance[3];
						   	$registeredby =$row_distance[4];
					  		$approvedby =$row_distance[5];
					  		$status =$row_distance[6];
					  		$incoming_ministry =$row_distance[7];
					  		$incoming_agency =$row_distance[8];
					  		$code =$row_distance[9];
					  	  
						 	 
	
		
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
		 else  if($status == 2)
{
 $statusCSS = "badge badge-warning m-b-5";
$statusParam = "Requested";
}
 else  if($status == 3)
{
 $statusCSS = "badge badge-info m-b-5";
$statusParam = "Request Granted";
}
 else  if($status == 4)
{
 $statusCSS = "badge badge-success m-b-5";
$statusParam = "Returned";
} 
		 
		 
  $foldername = $myName->showName($conn, "SELECT  `directoryname`  FROM `userfiles` WHERE `id` = '$file'"); 
  $foldername = $myName->showName($conn, "SELECT  `foldername`  FROM `file_directory` WHERE `id` = '$foldername'"); 
	
  $registeredby = $myName->showName($conn, "SELECT `name` FROM `user_unit` WHERE `account_number` = '$registeredby'"); 
  $approvedby = $myName->showName($conn, "SELECT `name` FROM `user_unit` WHERE `account_number` = '$approvedby'"); 
		 
		 
  $ministry = $myName->showName($conn, "SELECT   `name`  FROM `mda`  WHERE `id` = '$ministry'"); 
 $incoming_ministry = $myName->showName($conn, "SELECT  `name`  FROM `mda`  WHERE `id` = '$incoming_ministry'"); 
		
echo '<tr>
<td> <strong>'.$code.'</strong> </td>
<td>'.$foldername.'</td>
<td>'.$ministry.'</td>
<td>'.$incoming_ministry.'</td>
<td>'.$approvedby.'</td>
<td>'.$created_date.'</td>
<td> - '.$registeredby.' - </td>
<td> <span class="'.$statusCSS.'">'.$statusParam.' </span> </td>
 
									 
                                            </tr>';	 
	 
}
 
						  
				 	
				 
			 
					}
		   
	 
?>