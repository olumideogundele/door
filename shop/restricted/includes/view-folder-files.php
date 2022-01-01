 
<?php
include ("config/DB_config.php"); 
 $myName = new Name();
 if(isset($_SESSION['email']))
 {
 $emailing = $_SESSION['email'];
$usertype = $_SESSION['usertype'] ;
 
 }
 
$query = "";
 
 
 

 
 




 	if($usertype == "1")
					{
 	
	 	$query =  "SELECT  `id`, `mda`,   `foldername`, `registeredby`, `status`, `created_date` FROM `file_directory` WHERE `mda` = '$mdas' ORDER BY `id` DESC";

		
	}
else
{
	
		$query =  "SELECT  `id`, `mda`,   `foldername`, `registeredby`, `status`, `created_date` FROM `file_directory` WHERE `registeredby` = '$emailing'  ORDER BY `id` DESC";

	
	
	
	 
}
 







 $extract_distance = mysqli_query($conn, $query) or die(mysqli_error($conn));
		$count = mysqli_num_rows($extract_distance);
    if ($count > 0)
		  {
 	 while ($row_distance=mysqli_fetch_row($extract_distance))
    {
  						  	$id =$row_distance[0];
		 					$ministry =$row_distance[1];
						    $foldername =$row_distance[2];
					  	    $registeredby =$row_distance[3];
						 	$status =$row_distance[4];
					   		$created_date =$row_distance[5];
					 
		
		
		 
		 
		  $id_value = $myName->showName($conn, "SELECT count(`id`) FROM `userfiles` WHERE `directoryname` = '$id'"); 
		 
 		 $ministry = $myName->showName($conn, "SELECT `name`  FROM `mda`  WHERE `id` = '$ministry'"); 
		 
		  
		 
	 
		 
echo '<tr>
 <td><a href = "view-folder-effect.php?value='.$id.'"> <i aria-hidden="true" class="fa fa-folder"></i> '.$foldername.'</a> </td> 
<td>'.$ministry.'</td>
 

<td> '. $id_value.' </td> 
  
												 
												 
											 
											  
												
											 
											     
											   
									 
                                            </tr>';	 
	 
}
 
						  
				 	
				 
			 
					}
		   
	 
?>