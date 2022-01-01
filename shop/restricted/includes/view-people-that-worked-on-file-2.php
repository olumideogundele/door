 
<?php
include ("config/DB_config.php"); 
$userT = "";
$usernameT = "";
 $myName = new Name();
 if(isset($_SESSION['email']))
 {
 $emailing = $_SESSION['email'];
	   $userT = $_SESSION['usertype'] ;
 }
 $ministry = "";
 $value = "";

	 
	 
	
	 
	

$query = "";

  
	 $query =  "SELECT `id`, `statke_holder`, `filecode`, `stage`, `approval_status`, `approved_date`, `touched` FROM `doc_approval_details` WHERE  `filecode` = '$filecode' OR `filecode` = '$group_code'  ORDER BY `approved_date`,`stage`  ASC";	
	 
 
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
		 					$status =$row_distance[4];
					  	   $approved_date =$row_distance[5];
						 	$touched =$row_distance[6];
					 
		
		
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
 	
		 $value = "";
		 
		 if($touched == 1)
		 {
			 $value = "Processed";
		 }
		 else
		 {
			 
			 
			  $value = "Not Yet Processed";
		 }
		 
		 
		 
		 
		 
		 
		 $usernameT = $myName->showName($conn, "SELECT `name` FROM `userfiles` WHERE  `filecode` = '$filecode' or `group_code` = '$filecode'"); 
		 $created_date = $myName->showName($conn, "SELECT `created_date` FROM `userfiles` WHERE  `filecode` = '$filecode' or `group_code` = '$filecode'"); 
	
		 
		  $max = $myName->showName($conn, "SELECT MAX(`stage`) FROM   `doc_approval_details` WHERE (`filecode` = '$filecode')"); 
		   
		 
		 
		 $statke_holder_name = $myName->showName($conn, "SELECT `name` FROM `user_unit` WHERE `account_number` = '$statke_holder'"); 
		 
	   
		 
		 
		 
		 
		 
 
		 
		 
		 
		 echo ' <div class="card">
			<div class="card-body">
				<div>  <em>Document Name:</em> '.$usernameT .'-<br>

				<em>Stakeholder\'s Name: </em><strong>'. $statke_holder_name.'</strong>.<br>
  <em>'.$approved_date.'</em></div>
  <span>Stage '.$stage.' of '.$max.' </span><br>
<span class="'.$statusCSS.'">'.$statusParam.' </span>
			  <p><span class="'.$statusCSS.'">'.$value.'</span></p>
			</div>
		</div>';
		 
		 
	 
}
 }
	else
	{
		 echo ' <div class="card">
			<div class="card-body">
				<div class="card-title"></div>
				<h6><em>----</em>.</h6>
			  <p>No Action on this file(s) yet.</p>
			</div>
		</div>';
		
	}
						  
				 	
 
				 
		 
		   
	 
?>