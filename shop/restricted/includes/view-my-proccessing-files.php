 
<?php
include ("config/DB_config.php"); 
 $myName = new Name();
 if(isset($_SESSION['email']))
 {
 $emailing = $_SESSION['email'];
 }
 $query = "";


$usertype = $_SESSION['usertype']; 

 
$super = $myName->showName($conn, "SELECT `super` FROM `user_unit` WHERE `account_number` = '$emailing'");

 
 
	 $query =  "SELECT `id`, `statke_holder`, `filecode`, `stage`, `approval_status`, `approved_date`, `touched` FROM `doc_approval_details` WHERE `statke_holder` =  '$emailing'  ORDER BY `id` DESC LIMIT 10";
	
 

	 




/*
	 $query =  "SELECT `id`, `statke_holder`, `filecode`, `stage`, `approval_status`, `approved_date`, `touched` FROM `doc_approval_details` WHERE `statke_holder` =  '$emailing'  ORDER BY `id` DESC LIMIT 10";*/
	
	
 
 

	
 $extract_distance = mysqli_query($conn, $query) or die(mysqli_error($conn));
		$count = mysqli_num_rows($extract_distance);
    if ($count > 0)
		  {
 	 while ($row_distance=mysqli_fetch_row($extract_distance))
    {
  						  	$id =$row_distance[0];
						   	$statke_holder =$row_distance[1];
					  		$filecode =$row_distance[2];
					  		$stage =$row_distance[3];
						   	$approval_status =$row_distance[4];
					  		$approved_date =$row_distance[5];
					  		$touched =$row_distance[6];
						  
 
		 
	 
			   
					    $name = $myName->showName($conn, "SELECT `name` FROM  `userfiles` WHERE `filecode` = '$filecode' OR `group_code` = '$filecode'"); 
					    $registry = $myName->showName($conn, "SELECT `registry` FROM  `userfiles` WHERE `filecode` = '$filecode' OR `group_code` = '$filecode'"); 
					  
					    $creeated_by = $myName->showName($conn, "SELECT `creeated_by` FROM  `userfiles` WHERE `filecode` = '$filecode' OR `group_code` = '$filecode'"); 
					   $submitted_by = $myName->showName($conn, "SELECT `creeated_by` FROM  `userfiles` WHERE `filecode` = '$filecode' OR `group_code` = '$filecode'"); 
		 
		  $created_date = $myName->showName($conn, "SELECT `created_date` FROM  `userfiles` WHERE `filecode` = '$filecode' OR `group_code` = '$filecode'"); 
		  $iddd = $myName->showName($conn, "SELECT `id` FROM  `userfiles` WHERE `filecode` = '$filecode' OR `group_code` = '$filecode'"); 
		 
		 								 
		 
		 
					    $department = $myName->showName($conn, "SELECT `name` FROM  `mda`  WHERE `id` = '$registry'"); 
		 
		 
		 
					  
		 
		 
		 $name_statke_id = $myName->showName($conn, "SELECT `statke_holder` FROM  `doc_approval_details` WHERE `filecode` = '$filecode' and `touched` = '1' ORDER BY `id` DESC LIMIT 1"); 
		 $status = $myName->showName($conn, "SELECT `approval_status` FROM  `doc_approval_details` WHERE `filecode` = '$filecode' and `touched` = '1' ORDER BY `id` DESC LIMIT 1"); 
		 $last_stage = $myName->showName($conn, "SELECT `stage` FROM  `doc_approval_details` WHERE `filecode` = '$filecode' and `touched` = '1' ORDER BY `id` DESC LIMIT 1"); 
		 
 $name_statke_name = $myName->showName($conn, "SELECT `name` FROM  `user_unit` WHERE `account_number` = '$name_statke_id'"); 
 $submitted_by = $myName->showName($conn, "SELECT `name` FROM  `user_unit` WHERE `account_number` = '$submitted_by'"); 
		 
		 
		 
		 
		 
 
	 $statusCSS = "";
$statusParam = "";
if($status == 1)
{
 $statusCSS = "badge badge-success m-b-5";
$statusParam = "Approved";
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
$statusParam = "Rejected (Sent Back)";
}	
else  if($status == 2)
{
 $statusCSS = "badge badge-danger m-b-5";
$statusParam = "Saved";
}	
		
	if($last_stage == "")	
	{
		$last_stage = "Not Processed Yet";
	}
		 
		 
		 if($name_statke_name == "")
		 {
			 
			 $name_statke_name = "Not Processed Yet";
		 }
		
		 echo '<tr>
  
		 <td><a href = "view-file-information.php?file='.$iddd.'"><strong>'.$name.'</strong></a></td>
		 <td>  '. $department .'</td>
		 <td>'.$stage.'</td>
		 <td>'.$last_stage.'</td>
		 
		 <td> <span class="'.$statusCSS.'">'.$statusParam.'</span> </td>
<td> <strong>'.$name_statke_name.'</strong> </td>
 
 
 
 
 
 <td>'.$created_date.'</td>
<td>'.$submitted_by.'</td>

 				 	     
											   
									 
                                            </tr>';	
	}
	 
		  
		
 
 	 
		 
 
	 
}
 
						  
				 	
				 
			  
		   
	 
?>