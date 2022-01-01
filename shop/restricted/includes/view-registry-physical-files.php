 
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
	  
 $query =  "SELECT  `id`, `filePath`, `FileName`, `ministry`, `agency`, `directoryname`, `shelf`, `shelf_cell`, `name`, `file_type`,`status`,`registry`, `filecode`, `submitted_by`   FROM `userfiles` WHERE `file_type`  = 'physical'  AND (`registry` = '$ministry'  or `creeated_by` = '$emailing') ORDER BY `id` DESC";	
}
else
{
	 $query =  "SELECT  `id`, `filePath`, `FileName`, `ministry`, `agency`, `directoryname`, `shelf`, `shelf_cell`, `name`, `file_type`,`status`,`registry`, `filecode`, `submitted_by`   FROM `userfiles` WHERE (`status` != 0 AND `file_type` = 'physical')  AND (`creeated_by` = '$emailing') AND `status` = 0 ORDER BY `id` DESC";	
	
}
 
 
 $extract_distance = mysqli_query($conn, $query) or die(mysqli_error($conn));
		$count = mysqli_num_rows($extract_distance);
    if ($count > 0)
		  {
 	 while ($row_distance=mysqli_fetch_row($extract_distance))
    {
  							$id =$row_distance[0];
		 					$FilePath =$row_distance[1];
						   	$filaname =$row_distance[2];
		 					$ministry =$row_distance[3];
					  	   $agency =$row_distance[4];
						 	$directoryname =$row_distance[5];
					   	 
					 $shelf =$row_distance[6];
		 $shelf_cell =$row_distance[7];
		 					$name =$row_distance[8];
						   	$file_type =$row_distance[9];
		 	$status =$row_distance[10];
		 $registry =$row_distance[11];
		 $filecode =$row_distance[12];
		 $submitted_by =$row_distance[13];
	
		 
		 
		 
		 $statusCSS = "";
$statusParam = "";
if($status == 1)
{
 $statusCSS = "badge badge-success m-b-5";
$statusParam = "Active";
}		
 if($status == 4)
{
 $statusCSS = "badge badge-success m-b-5";
$statusParam = "Appoved";
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
else  if($status == 3)
{
 $statusCSS = "badge badge-danger m-b-5";
$statusParam = "Rejected";
}	
else  if($status == 2)
{
 $statusCSS = "badge badge-danger m-b-5";
$statusParam = "Saved";
} 				 
	/*	
		
		
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
} */
 		  $registry = $myName->showName($conn, "SELECT `name`  FROM `mda`  WHERE `id` = '$registry'"); 
 		 $ministry = $myName->showName($conn, "SELECT `name`  FROM `mda`  WHERE `id` = '$ministry'"); 
		 
		 $directoryname = $myName->showName($conn, "SELECT `foldername` FROM `file_directory` WHERE `id` = '$directoryname'"); 
		 $shelf = $myName->showName($conn, "SELECT `name` FROM  `shelf` WHERE `id` = '$shelf'"); 
		 $shelf_cell = $myName->showName($conn, "SELECT `cell_name` FROM `shelf_cells` WHERE `id` = '$shelf_cell'"); 
		 
		 
		 $value = "";
		 
		  $query1 =  "SELECT `rights` FROM  `privilege` WHERE `account_number` = '$emailing'";	
 $extract_distance1 = mysqli_query($conn, $query1) or die(mysqli_error($conn));
		$count1 = mysqli_num_rows($extract_distance1);
    if ($count1 > 0)
		  {
 	 while ($row_distance1=mysqli_fetch_row($extract_distance1))
    {
  						  	$privilege =$row_distance1[0];
		 
		 
	 
		 
		 
	/*	 if($privilege == "delete")
		 {
			 
			 $value .= '<li> <a class="dropdown-item" onClick="return confirm(\'Are you sure you want to delete?\')" href="?table=userfiles&del='.$id.'">Delete</a> </li>';
		 }*/
	
		  if($privilege == "activate")
		 {
			 
			 $value .= '<li> <a  class="dropdown-item"   onClick="return confirm(\'Are you sure you want to update?\')" href="?table=userfiles&id='.$id.'&columnValue=1&column=status">Activate</a> </li>';
		 }
  
		  if($privilege == "deactivate")
		 {
			 
			 $value .= '<li> <a class="dropdown-item"  onClick="return confirm(\'Are you sure you want to update?\')" href="?table=userfiles&id='.$id.'&columnValue=0&column=status"> Deactivate</a>  </li>';
		 }
		 
		 }
	}
		
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
echo '<tr>
<td>
 
 <input id="checkbox" type="checkbox"  value = '.$id.'  name = "transfer[]" class="form-control">
													 
												</div>




 	</td>
 <td>'.$registry.'</td>
 <td> <a href="view-file-information.php?file='.$id.'">'.$name.'</a></td>
 <td> <a href="view-file-information.php?file='.$id.'">'.$filecode.'</a></td>
 <td> <a href="view-file-information.php?file='.$id.'">'.$submitted_by.'</a></td>
 
 
 <td> <span class="'.$statusCSS.'">'.$statusParam.' </span> </td> 
 <td> <div class="btn-group mt-40">
											<div class="dropdown">
												<!-- Single button -->
												<button class="btn btn-info dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
												Action
												<span class="caret"></span>
												</button>
												<ul class="dropdown-menu">
											 
												 
												'.$value.'
												</ul>
											</div>
										</div>
												 
												 
												 
											 
											  
												
													
													 
												</div>
											</div> </td> 									 
                                            </tr>';	 
	 
}
 
						  
				 	
				 
			 
					}
		   
	 
?>