 
<?php
include ("config/DB_config.php"); 
 $myName = new Name();
 if(isset($_SESSION['email']))
 {
 $emailing = $_SESSION['email'];
 }
 $query = "";


$usertype = $_SESSION['usertype']; 


 
	
 $query =  "SELECT `id`, `code`, `username`, `status`, `created_date`, `registeredby`, `comment` FROM `document_access` WHERE `username` = '$emailing' AND `status` =  '1'  ORDER BY `id` DESC";
	
	
 

 

	
 $extract_distance = mysqli_query($conn, $query) or die(mysqli_error($conn));
		$count = mysqli_num_rows($extract_distance);
    if ($count > 0)
		  {
 	 while ($row_distance=mysqli_fetch_row($extract_distance))
    {
  						  	$id =$row_distance[0];
						   	$code =$row_distance[1];
					  		$username =$row_distance[2];
					  		$status =$row_distance[3];
						   	$created_date =$row_distance[4];
					  		$registered_by =$row_distance[5];
					  		$comment =$row_distance[6];
						  
$statusCSS = "";
$statusParam = "";
if($status == 1)
{
 $statusCSS = "badge badge-success m-b-5";
$statusParam = "Successful";
}			
else  if($status == 0)
{
 $statusCSS = "badge badge-danger m-b-5";
$statusParam = "Not Successful";
}
		  
 
		 
	 $query1 =  "SELECT  `id`, `filepath`, `filename`, `ministry`, `agency`, `directoryname`, `shelf`, `shelf_cell`, `name`, `file_type`, `status`, `registry`, `created_date`, `creeated_by`, `filesize`, `filecode`, `submitted_by`, `stage` FROM `userfiles` WHERE  (`filecode` = '$code') AND `status` !=  '3' AND `status_a` = '1' ORDER BY `id` DESC";
	
	
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
	 $department = $myName->showName($conn, "SELECT  `name`  FROM `mda`  WHERE `id` = '$registry'"); 
	if($status != 9)
	{
		
		
		$value = "";
		 
		  $query1 =  "SELECT `rights` FROM  `privilege` WHERE `account_number` = '$emailing'";	
 $extract_distance1 = mysqli_query($conn, $query1) or die(mysqli_error($conn));
		$count1 = mysqli_num_rows($extract_distance1);
    if ($count1 > 0)
		  {
 	 while ($row_distance1=mysqli_fetch_row($extract_distance1))
    {
  						  	$privilege =$row_distance1[0];
		 
		 
	 
		 
		 
		 if($privilege == "delete")
		 {
			 
			 $value .= '<li> <a class="dropdown-item" onClick="return confirm(\'Are you sure you want to delete?\')" href="?table=userfiles&id='.$id.'&columnValue=9&column=status">Delete</a> </li>';
		 }
	
		  if($privilege == "activate")
		 {
			 
			 $value .= '<li> <a  class="dropdown-item"   onClick="return confirm(\'Are you sure you want to update?\')" href="?table=userfiles&id='.$id.'&columnValue=1&column=status">Activate</a> </li>';
		 }
  
		  if($privilege == "deactivate")
		 {
			 
			 $value .= '<li> <a class="dropdown-item"  onClick="return confirm(\'Are you sure you want to update?\')" href="?table=userfiles&id='.$id.'&columnValue=0&column=status"> Deactivate</a>  </li>';
		 }
		 
		 if($privilege == "comment")
		 {
			 
			 $value .= '<li> <a class="dropdown-item"  onClick="return confirm(\'Are you sure you want to update?\')" href=view-file-information.php?file='.$id.'&comment=yes> Comment/Write Note</a>  </li>';
			 
			 
			 $value .= '<li> <a class="dropdown-item"  onClick="return confirm(\'Are you sure you want to update?\')" href=file-comment-timeline.php?file='.$id.'> View Comment</a>  </li>';
		 }
		  
		 if($privilege == "view")
		 {
			 
			 $value .= '<li> <a class="dropdown-item"  onClick="return confirm(\'Are you sure you want to update?\')" href="download-browser.php?file='.$filename.'" target = "new"> View File</a>  </li>';
		 } 
		 
		 if($privilege == "download")
		 {
			 
			 $value .= '<li> <a class="dropdown-item"  onClick="return confirm(\'Are you sure you want to update?\')" href="download.php?file='.$filename.'&filecode='.$filecode.'"> Download File</a>  </li>';
		 }
		 
		  if($privilege == "approve")
		 {
			 
			 $value .= '<li> <a class="dropdown-item"  onClick="return confirm(\'Are you sure you want to update?\')" href="approval.php?code='.$filecode.'"> Download File</a>  </li>';
		 }
		 
		 
		 }
	}
		
		 
		 
		/* <a class="dropdown-item"  onClick="return confirm(\'Are you sure you want to update?\')" href="?table=userfiles&id='.$id.'&columnValue=9&column=status"> Delete</a> 
									 */
		
		
		
		
		
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
											 
									 
                        
 
  
 
 
											  
										 '.$value.'
													
													 
												</div>
											</div>
												 
												 
												 
												 
												 
												 
												 
												 
												 
												 
												 
												 
				   
													</td> 
											 
											     
											   
									 
                                            </tr>';	
	}
	 
		  
		
		 
	 }
		
	}
		 
		 
 
	 
}
 
						  
				 	
				 
			 
					}
		   
	 
?>