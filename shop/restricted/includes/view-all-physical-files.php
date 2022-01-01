 
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

 	  
 



 
if($usertype == "1")
{
	
	 $mdas = $myName->showName($conn, "SELECT  `ministry` FROM `user_unit` WHERE `account_number` = '$emailing'"); 
	
   
	
	
	
	
	 $query1 =  "SELECT  `id`, `filepath`, `filename`, `ministry`, `agency`, `directoryname`, `shelf`, `shelf_cell`, `name`, `file_type`, `status`, `registry`, `created_date`, `creeated_by`, `filesize`, `filecode`, `submitted_by`, `stage` FROM `userfiles` WHERE `file_type` = 'physical' AND `status_a` = '1' AND `registry` = '$mdas'  ORDER BY `id` DESC";
	
	
		
	}else
{
	
	
	 $query1 =  "SELECT  `id`, `filepath`, `filename`, `ministry`, `agency`, `directoryname`, `shelf`, `shelf_cell`, `name`, `file_type`, `status`, `registry`, `created_date`, `creeated_by`, `filesize`, `filecode`, `submitted_by`, `stage` FROM `userfiles` WHERE `file_type` = 'physical' AND `status_a` = '1' AND `creeated_by` = '$emailing'  ORDER BY `id` DESC";
	 
}
	

	
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
 $statusCSS1 = "";
$statusParam1 = "";
if($shelf_cell != "")
{
 $statusCSS1 = "badge badge-success m-b-5";
$statusParam1 = $inst_name." Can Trace";
}			
else  if($shelf_cell == "")
{
 $statusCSS1 = "badge badge-danger m-b-5";
$statusParam1 = $inst_name." Can't Trace";
}
		 
		 
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
$statusParam = "Inactive";
}
else  if($status == 9)
{
 $statusCSS = "badge badge-danger m-b-5";
$statusParam = "Deleted";
}
	 $department = $myName->showName($conn, "SELECT  `name`  FROM `mda`  WHERE `id` = '$registry'"); 
	if($status != 9)
	{
		
		 echo '<tr>
		 <td>
<div class="checkbox checkbox-primary">
 <input id="checkbox2" type="checkbox"  value = '.$id.'  name = "transfer[]">
													<label for="checkbox2">   </label>
												</div>




 	</td>
		 <td><a href = "view-file-information.php?file='.$id.'"><strong>'.$name.'</strong></a></td>
		 <td><a href = "view-file-information.php?file='.$id.'"><strong>'.$filecode.'</strong></a></td>
<td> <strong>'.$file_type.'</strong> </td>
 <td>  '. $department .'</td>
  <td> <span class="'.$statusCSS1.'"> - '.$statusParam1.' - </span> </td>
 <td>'.$created_date.'</td>
<td>'.$submitted_by.'</td>
 <td> <span class="'.$statusCSS.'">'.$statusParam.'</span> </td>
 				 <td>
												 
												 <div class="btn-group">
												<button class="btn btn-primary btn-sm m-b-5 m-t-5 dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
												Action
												</button>
												<div class="dropdown-menu">
											 
									 <a class="dropdown-item"  onClick="return confirm(\'Are you sure you want to update?\')" href="?table=userfiles&id='.$id.'&columnValue=9&column=status"> Delete</a> 
									 
									 
 <a class="dropdown-item" onClick="return confirm(\'Are you sure you want to update?\')" href=view-file-information.php?file='.$id.'&comment=yes">Comment/Write Note</a> 
	
	 <a class="dropdown-item" onClick="return confirm(\'Are you sure you want to view?\')"userfiles href=file-comment-timeline.php?file='.$id.'>View Comment/Write Note</a> 
												 
 <a class="dropdown-item" href="download.php?file='.$filename.'&filecode='.$filecode.'">Download</a>   
 <a class="dropdown-item" href="download-browser.php?file='.$filename.'" target = "new">View Document</a>  
                        
 <a  class="dropdown-item"   onClick="return confirm(\'Are you sure you want to update?\')" href="?table=userfiles&id='.$id.'&columnValue=1&column=status">Activate</a> 	
											  
											  
											   <a class="dropdown-item"  onClick="return confirm(\'Are you sure you want to update?\')" href="?table=userfiles&id='.$id.'&columnValue=0&column=status"> Deactivate</a>  
												
													
													 
												</div>
											</div>
												 
												 
												 
												 
												 
												 
												 
												 
												 
												 
												 
												 
				   
													</td> 
											 
											     
											   
									 
                                            </tr>';	
	}
	 
		  
		
		 
	 }
		
	}
		 
		 
 
	 
  
 
	 
?>