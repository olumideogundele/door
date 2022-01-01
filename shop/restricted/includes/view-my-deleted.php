 
<?php
include ("config/DB_config.php"); 
 $myName = new Name();
 if(isset($_SESSION['email']))
 {
 $emailing = $_SESSION['email'];
 }
 $query = "";

//$usertype = $_SESSION['usertype'] ;
$usertype = $_SESSION['usertype']; 

 	  

	 
	 $query2 =  "SELECT `id`, `filecode`, `created_date`, `created_by` FROM `deleted` WHERE `created_by` = '$emailing' ORDER BY `id` DESC";
	
	
 $extract_distance2 = mysqli_query($conn, $query2) or die(mysqli_error($conn));
		$count2 = mysqli_num_rows($extract_distance2);
    if ($count2 > 0)
		  {
 	 while ($row_distance2=mysqli_fetch_row($extract_distance2))
    {
  						  	$id =$row_distance2[0];
						   	$filecode =$row_distance2[1];
						   	$deleted_date =$row_distance2[2];
						   	$deleted_by =$row_distance2[3];
//SELECT `name` FROM `user_unit` WHERE `account_number`

 $deleted_by = $myName->showName($conn, "SELECT `name` FROM `user_unit` WHERE `account_number` = '$deleted_by'"); 
		 
	 $query1 =  "SELECT  `id`, `filepath`, `filename`, `ministry`, `agency`, `directoryname`, `shelf`, `shelf_cell`, `name`, `file_type`, `status`, `registry`, `created_date`, `creeated_by`, `filesize`, `filecode`, `submitted_by`, `stage` FROM `userfiles` WHERE `id` = '$filecode' AND `status` = 9";
	
	
 $extract_distance1 = mysqli_query($conn, $query1) or die(mysqli_error($conn));
		$count1 = mysqli_num_rows($extract_distance1);
    if ($count1 > 0)
		  {
 	 while ($row_distance1=mysqli_fetch_row($extract_distance1))
    {
  						  	$id =$row_distance1[0];
						   	$filepath =$row_distance1[1];
						   	$filename =$row_distance1[2];
						   	$ministry =$row_distance1[3];
						   	$agency =$row_distance1[4];
						   	$directoryname =$row_distance1[5];
						   	$shelf =$row_distance1[6];
						   	$shelf_cell =$row_distance1[7];
						   	$name =$row_distance1[8];
						   	$file_type =$row_distance1[9];
						   	$status =$row_distance1[10];
						   	$registry =$row_distance1[11];
						   	$created_date =$row_distance1[12];
						   	$creeated_by =$row_distance1[13];
						   	$filesize =$row_distance1[14];
						   	$filecode =$row_distance1[15];
						   	$submitted_by =$row_distance1[16];
						   	$stage =$row_distance1[17];
 	 
		 
		 $statusCSS = "";
$statusParam = "";
if($status == 1 or $status == 4 )
{
 $statusCSS = "badge badge-success m-b-5";
$statusParam = "Active";
}			
else  if($status == 0)
{
 $statusCSS = "badge badge-danger m-b-5";
$statusParam = "Inactive";
}
else  if($status == 9)
{
 $statusCSS = "badge badge-danger m-b-5";
$statusParam = "Deleted";
}
	 $department = $myName->showName($conn, "SELECT  `name`  FROM `mda`  WHERE `id` = '$registry'"); 
	 $uploaded_by = $myName->showName($conn, "SELECT `name` FROM `user_unit` WHERE `account_number` = '$creeated_by'"); 
		 
		 
		 echo '<tr>
		 
		 <td><a href = "view-file-information.php?file='.$id.'"><strong>'.$name.'</strong></a></td>
		 <td><a href = "view-file-information.php?file='.$id.'"><strong>'.$filecode.'</strong></a></td>
 
	<td>'.$uploaded_by.'</td>
	<td>'.$deleted_by.'</td>
 <td>'.$created_date.'</td>
 <td>'.$deleted_date.'</td>
 <td> <span class="'.$statusCSS.'">'.$statusParam.'</span> </td>
 				 <td>
												 
												 <div class="btn-group">
												<button class="btn btn-primary btn-sm m-b-5 m-t-5 dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
												Action
												</button>
												<div class="dropdown-menu">
										 
									 
  
 <a  class="dropdown-item"   onClick="return confirm(\'Are you sure you want to update?\')" href="?table=userfiles&id='.$id.'&columnValue=1&column=status">Restore</a> 	
											  
										 
													
													 
												</div>
											</div>
												 
												 
												 
												 
												 
												 
												 
												 
												 
												 
												 
												 
				   
													</td> 
											 
											     
											   
									 
                                            </tr>';	
	}
	 
		  
		
		 
	 }
		
	}
		 
	 }
	

	 
  
 
	 
?>