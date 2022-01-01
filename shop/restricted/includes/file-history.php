 
<?php
include ("config/DB_config.php"); 
 $myName = new Name();
 if(isset($_SESSION['email']))
 {
 $emailing = $_SESSION['email'];
 }
 $query = "";


$usertype = $_SESSION['usertype']; 

 $code = $_GET['file'];
 
	 
		  
 
		 
 $query2 =  "SELECT   `id`, `filepath`, `filename`, `name`, `registry`, `filecode`, `submitted_by`, `updated_by`, `updated_at`, `status`,`created_date`, `creeated_by`, `updated_by` FROM `filehistory`  WHERE  (`filecode` = '$code' or `group_code` = '$code') AND `status` !=  '3' ORDER BY `id` DESC";
 
 $extract_distance2 = mysqli_query($conn, $query2) or die(mysqli_error($conn));
		$count2 = mysqli_num_rows($extract_distance2);
    if ($count2 > 0)
		  {
 	 while ($row_distance2=mysqli_fetch_row($extract_distance2))
    {
  						  	$id =$row_distance2[0];
						   	$filepath =$row_distance2[1];
						   	$filename =$row_distance2[2];
						   	$name =$row_distance2[3];
						   	$registry =$row_distance2[4];
						   	$filecode =$row_distance2[5];
						   	$submitted_by =$row_distance2[6];
						   	$updated_by =$row_distance2[7];
						   	$updated_at =$row_distance2[8];
						   	$status =$row_distance2[9];
						   	$created_date =$row_distance2[10];
						   	$creeated_by =$row_distance2[11];
						   	$updated_by =$row_distance2[12];
						   	
	 
		 
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
		 
		 
	 
		 
		 
		/* if($privilege == "delete")
		 {
			 
			 $value .= '<li> <a class="dropdown-item" onClick="return confirm(\'Are you sure you want to delete?\')" href="?table=userfiles&id='.$id.'&columnValue=9&column=status">Delete</a> </li>';
		 }*/
	
		/*  if($privilege == "activate")
		 {
			 
			 $value .= '<li> <a  class="dropdown-item"   onClick="return confirm(\'Are you sure you want to update?\')" href="?table=userfiles&id='.$id.'&columnValue=1&column=status">Activate</a> </li>';
		 }*/
  
		/*  if($privilege == "deactivate")
		 {
			 
			 $value .= '<li> <a class="dropdown-item"  onClick="return confirm(\'Are you sure you want to update?\')" href="?table=userfiles&id='.$id.'&columnValue=0&column=status"> Deactivate</a>  </li>';
		 }*/
		 
		/* if($privilege == "comment")
		 {
			 
			 $value .= '<li> <a class="dropdown-item"  onClick="return confirm(\'Are you sure you want to update?\')" href=view-file-information.php?file='.$id.'&comment=yes> Comment/Write Note</a>  </li>';
			 
			 
			 $value .= '<li> <a class="dropdown-item"  onClick="return confirm(\'Are you sure you want to update?\')" href=file-comment-timeline.php?file='.$id.'> View Comment</a>  </li>';
		 }*/
		  
		/* if($privilege == "view")
		 {
			 
			 $value .= '<li> <a class="dropdown-item"  onClick="return confirm(\'Are you sure you want to update?\')" href="download-browser.php?file='.$filename.'" target = "new"> View File</a>  </li>';
		 } 
		 */
		 if($privilege == "download")
		 {
			 
 $value .= '<li> <a class="dropdown-item"  onClick="return confirm(\'Are you sure you want to update?\')" href="download.php?file='.$filename.'&filecode='.$filecode.'"> Download File</a>  </li>';
		 }
		 
		 /* if($privilege == "approve")
		 {
			 
			 $value .= '<li> <a class="dropdown-item"  onClick="return confirm(\'Are you sure you want to update?\')" href="approval.php?code='.$filecode.'"> Download File</a>  </li>';
		 }*/
		 /* if($privilege == "share")
		 {
			 
 $value .= '<li> <a class="dropdown-item"  onClick="return confirm(\'Are you sure you want to update?\')" href="send-document.php?code='.$filecode.'"> Share File</a>  </li>';
		 }*/
		 
		 }
	}
		
 
		
		 $department = $myName->showName($conn, "SELECT  `name`  FROM `mda`  WHERE `id` = '$registry'"); 
		 $creeated_by = $myName->showName($conn, "SELECT  `name` FROM `user_unit` WHERE `account_number` = '$creeated_by'"); 
		 $updated_by = $myName->showName($conn, "SELECT  `name` FROM `user_unit` WHERE `account_number` = '$updated_by'"); 
		
		 echo '<tr>
		 
		 <td><a href = ""><strong>'.$name.'</strong></a></td>
		 
 <td>  '. $department .'</td>
<td>'.$submitted_by.'</td>
<td>'.$creeated_by.'<br>'.$created_date.'
</td>
<td>'.$updated_by.'<br>'.$updated_at.'
</td>
 
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
		 
		 
 
	 

 
						  
				 	
				 
			 
					
		   
	 
?>