 
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

 	
	

$query = "";

 
	 
	 
	
	 $query =  "SELECT  `id`, `document_id`, `document_code`, `commenting`, `status`, `created_date`, `registeredby` FROM `document_comment` WHERE  (`document_id` = '$id'  OR  `document_code` = '$filecode'  OR  `document_code` = '$group_code') AND `status` = 1   ORDER BY `id` DESC";	
 $extract_distance = mysqli_query($conn, $query) or die(mysqli_error($conn));
		$count = mysqli_num_rows($extract_distance);
    if ($count > 0)
		  {
 	 while ($row_distance=mysqli_fetch_row($extract_distance))
    {
  						  	$id =$row_distance[0];
		 					$document_id =$row_distance[1];
		 					$document_code =$row_distance[2];
						   	$commenting =$row_distance[3];
		 					$status =$row_distance[4];
					  	   $created_date =$row_distance[5];
						 	$registeredby =$row_distance[6];
					 
		
		
		
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
 	
		 $usernameT = $myName->showName($conn, "SELECT `name` FROM `userfiles` WHERE  `filecode` = '$document_code' or `group_code` = '$document_code'"); 
		 
		 
		   
		 
		 
		 $name_cell = $myName->showName($conn, "SELECT `name` FROM `user_unit` WHERE `account_number` = '$registeredby'"); 
		 
	   
 
		 
		 
		 
		 echo ' <div class="card">
			<div class="card-body">
				<div>  <em>Requisition Name:</em> '.$usernameT .'-<em>By: </em>'. $name_cell.'.<br>
  <em>'.$created_date.'</em></div>
				 <br>
  
			  <p><strong>'.$commenting.'</strong></p>
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
			  <p>No Comment on this file yet.</p>
			</div>
		</div>';
		
	}
						  
				 	
				 
		 
		   
	 
?>