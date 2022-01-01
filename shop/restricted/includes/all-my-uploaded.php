 
<?php
include ("config/DB_config.php"); 
 $myName = new Name();
 if(isset($_SESSION['email']))
 {
 $emailing = $_SESSION['email'];
 }
 $query1 = "";


$usertype = $_SESSION['usertype']; 

 
if($usertype == "1")
{
	$mdas = $myName->showName($conn, "SELECT  `ministry` FROM `user_unit` WHERE `account_number` = '$emailing'"); 
	
	if(isset($_GET['type']))
  {
		$type = $_GET['type'];
		
		  $query1 =  "SELECT  `id`, `filepath`, `filename`, `ministry`, `agency`, `directoryname`, `shelf`, `shelf_cell`, `name`, `file_type`, `status`, `registry`, `created_date`, `creeated_by`, `filesize`, `filecode`, `submitted_by`, `stage`,`type`, `account_name`, `account_number`, `bank_name`, `amount` FROM `userfiles` WHERE   `file_type` = '$type' AND `creeated_by` = '$emailing'  ORDER BY `id` DESC";
	}
	else
	{
		 $query1 =  "SELECT  `id`, `filepath`, `filename`, `ministry`, `agency`, `directoryname`, `shelf`, `shelf_cell`, `name`, `file_type`, `status`, `registry`, `created_date`, `creeated_by`, `filesize`, `filecode`, `submitted_by`, `stage`,`type`, `account_name`, `account_number`, `bank_name`, `amount` FROM `userfiles` WHERE   `creeated_by` = '$emailing' ORDER BY `id` DESC";
		
	}
	 
	
 
		
	}else
{
	
	
	
	
	if(isset($_GET['type']))
  {
		$type = $_GET['type'];
		 
	  $query1 =  "SELECT  `id`, `filepath`, `filename`, `ministry`, `agency`, `directoryname`, `shelf`, `shelf_cell`, `name`, `file_type`, `status`, `registry`, `created_date`, `creeated_by`, `filesize`, `filecode`, `submitted_by`, `stage`,`type`, `account_name`, `account_number`, `bank_name`, `amount` FROM `userfiles` WHERE `file_type` = '$type' AND `creeated_by` = '$emailing' AND `status` != '4'  ORDER BY `id` DESC"; 
	}
	else
	{
		  $query1 =  "SELECT  `id`, `filepath`, `filename`, `ministry`, `agency`, `directoryname`, `shelf`, `shelf_cell`, `name`, `file_type`, `status`, `registry`, `created_date`, `creeated_by`, `filesize`, `filecode`, `submitted_by`, `stage`,`type`, `account_name`, `account_number`, `bank_name`, `amount` FROM `userfiles` WHERE `creeated_by` = '$emailing' AND `status` != '4'  ORDER BY `id` DESC"; 
	}
	 
	
	
	
	
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
		 
		  
		 $type =$row_distance[18]; 
		$account_name =$row_distance[19]; 
		$account_number =$row_distance[20]; 
		$bank_name =$row_distance[21]; 
		$amount =$row_distance[22]; 
		 
		 
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
	 $department = $myName->showName($conn, "SELECT  `name`  FROM `mda`  WHERE `id` = '$registry'"); 
	if($status != 9)
	{
		
		
		$value = "";
		 
		  $query3 =  "SELECT `rights` FROM  `privilege` WHERE `account_number` = '$emailing'";	
 $extract_distance3 = mysqli_query($conn, $query3) or die(mysqli_error($conn));
		$count3 = mysqli_num_rows($extract_distance3);
    if ($count3 > 0)
		  {
 	 while ($row_distance3=mysqli_fetch_row($extract_distance3))
    {
  						  	$privilege =$row_distance3[0];
		 
		 
	 
		 
		 
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
			 
			 $value .= '<li> <a class="dropdown-item"  onClick="return confirm(\'Are you sure you want to update?\')" href="approval.php?code='.$filecode.'"> Approve File</a>  </li>';
		 }
		  if($privilege == "share")
		 {
			 
 $value .= '<li> <a class="dropdown-item"  onClick="return confirm(\'Are you sure you want to update?\')" href="send-document.php?code='.$filecode.'"> Share File</a>  </li>';
		 }
		 
		 }
	}
		
		 
		  
		
		  $req_type = $myName->showName($conn, "SELECT  `name`  FROM `types`  WHERE `id` = '$type'"); 
  $bank_name = $myName->showName($conn, "SELECT  `name`  FROM `banks`  WHERE `id` = '$bank_name'"); 
		
		
		
		
			 
		 echo '<tr> <td>'.$name.'</td>
                        <td>'.$filecode.'</td>
                        <td>'.number_format($amount,2).'</td>
                        <td><a class="btn btn-info dropdown-toggle" href="download.php?file='.$filename.'&filecode='.$filecode.'">Download</a></td>
                       <td>'.$department.'</td>
					   <td>'.$created_name.'</td>
                        <td>'.$created_date.'</td>
                        <td>'.$submitted_by.'</td>
						<td> <span class="'.$statusCSS.'">'.$statusParam.' </span> </td>
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