 
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
 
 $ministry = $myName->showName($conn, "SELECT `ministry` FROM `user_unit` WHERE `account_number` = '$emailing'"); 
 

if(isset($_GET['value']))
{
		$value = $_GET['value'];

if($userT == 1)
{
	  
$query = "SELECT   `id`, `ministry`,  `file`, `created_date`, `registeredby`, `approvedby`, `status`, `incoming_ministry`, `incoming_agency`,`type`,`code`,`filecode` FROM `file_request` WHERE  `status` = '$value' AND  (`ministry` = '$ministry' OR  `registeredby` = '$emailing') ORDER BY `id` DESC";	
}
else
{
$query = "SELECT `id`, `ministry`,   `file`, `created_date`, `registeredby`, `approvedby`, `status`, `incoming_ministry`, `incoming_agency`,`type`,`code`,`filecode` FROM `file_request` WHERE (`registeredby` = '$emailing' OR `approvedby` = '$emailing') AND `status` = '$value'  ORDER BY `id` DESC";	
	
}
	
}
else{
	
	
if($userT == 1)
{
	  
$query = "SELECT   `id`, `ministry`,  `file`, `created_date`, `registeredby`, `approvedby`, `status`, `incoming_ministry`, `incoming_agency`,`type`,`code`,`filecode` FROM `file_request`  WHERE  `incoming_ministry` = '$ministry' OR `registeredby` = '$emailing' ORDER BY `id` DESC";	
}
else
{
	 
$query = "SELECT `id`, `ministry`,   `file`, `created_date`, `registeredby`, `approvedby`, `status`, `incoming_ministry`, `incoming_agency`,`type`,`code`,`filecode` FROM `file_request` WHERE (`registeredby` = '$emailing' OR `approvedby` = '$emailing')  ORDER BY `id` DESC";	
	
}
}

 


 $extract_distance = mysqli_query($conn, $query) or die(mysqli_error($conn));
		$count = mysqli_num_rows($extract_distance);
    if ($count > 0)
		  {
 	 while ($row_distance=mysqli_fetch_row($extract_distance))
    {
  						  	$id =$row_distance[0];
		 					$ministry =$row_distance[1];
						   $file =$row_distance[2];
					  	   $created_date =$row_distance[3];
						 	$registeredby =$row_distance[4];
					  $approvedby =$row_distance[5];
		 				$status =$row_distance[6];
		 				$type =$row_distance[9];
		 				$code =$row_distance[10];
		 				$filecode =$row_distance[11];
		 					 
		
		
		
 $statusCSS = "";
$statusParam = "";
if($status == 1)
{
$statusCSS = "badge badge-success m-b-5";
$statusParam = "Active";
}			
else if($status == 0)
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
} 
 else  if($status == 5)
{
 $statusCSS = "badge badge-info m-b-5";
$statusParam = "Picked";
} 
 else  if($status == 6)
{
 $statusCSS = "badge badge-danger m-b-5";
$statusParam = "Cancelled";
} 
	
		 
		 $typeValue  ="";
		 
		 
		 if($type != "0")
		 {
			$typeValue = "Digital Request"; 
			
		 }
		 else 
		 {
			   $typeValue = "Physcial PickUp";
		 }
		 
 		 $ministry = $myName->showName($conn, "SELECT `name`  FROM `mda`  WHERE `id` = '$ministry'"); 
		  
		  $foldername = $myName->showName($conn, "SELECT  `directoryname`  FROM `userfiles` WHERE `id` = '$file'"); 
  $directoryname = $myName->showName($conn, "SELECT  `foldername`  FROM `file_directory` WHERE `id` = '$foldername'"); 
		   $name = $myName->showName($conn, "SELECT `name` FROM `user_unit` WHERE `account_number` = '$registeredby'"); 
		  $approvedby = $myName->showName($conn, "SELECT `name` FROM `user_unit` WHERE `account_number` = '$approvedby'"); 
		 
		 
		 
		 
		 
		 
		  
		   $query1 =  "SELECT `rights` FROM  `privilege` WHERE `account_number` = '$emailing'";	
 $extract_distance1 = mysqli_query($conn, $query1) or die(mysqli_error($conn));
		$count1 = mysqli_num_rows($extract_distance1);
    if ($count1 > 0)
		  {
 	 while ($row_distance1=mysqli_fetch_row($extract_distance1))
    {
  						  	$privilege =$row_distance1[0];
		 
		 
	 
		 
  
		  if($privilege == "deactivate")
		 {
			 
			 $value .= '<li> <a class="dropdown-item"  onClick="return confirm(\'Are you sure you want to update?\')" href="?table=file_request&id='.$id.'&columnValue=0&column=status"> Deactivate</a>  </li>';
		 }
		 
		 
		 
			 
	
		 if($registeredby != $emailing)
		 {
			if($privilege == "grant")
		 {
			 
			 $value .= ' <li>  <a  class="dropdown-item"   onClick="return confirm(\'Are you sure you want to update?\')" href="?table=file_request&id='.$id.'&columnValue=3&column=status&type='.$type.'">Grant  Request</a> </li>';
			 
			 
		 
		 }
		  
			 
		 }
		 
		  
		 
		 
		 
		 
		 
		 }
	}
		
		 
		 
 
		 
		 
		 
echo '<tr>
 
<td>'.$ministry.'</td>
 
<td>'.$directoryname.'</td>
<td>'.$filecode.'</td>
<td>'.$code.'</td>

<td>'.$name.'</td>

<td>'.$created_date.'</td>
<td>'.  $typeValue .'</td>
<td>'.$approvedby.'</td>
 
 <td> <span class="'.$statusCSS.'">'.$statusParam.' </span> </td>
 
  		   
												 <td>
											 
												 
												 <div class="btn-group mt-40">
											<div class="dropdown">
												<!-- Single button -->
												<button class="btn btn-info dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
												Action
												<span class="caret"></span>
												</button>
												<ul class="dropdown-menu">
									 
											 
											  <li>  <a  class="dropdown-item"   onClick="return confirm(\'Are you sure you want to update?\')" href="?table=file_request&id='.$id.'&columnValue=5&column=status">Picked</a> </li>
											  
											  
											  
											  
											   <li>  <a  class="dropdown-item"   onClick="return confirm(\'Are you sure you want to update?\')" href="?table=file_request&id='.$id.'&columnValue=6&column=status">Cancel</a> </li>
											 
											 
											 <li>  <a  class="dropdown-item"   onClick="return confirm(\'Are you sure you want to update?\')" href="?table=file_request&id='.$id.'&columnValue=4&column=status">Returned</a> </li>
											 
											 
											 
											 
												<li class="divider"></li>
												'.$value.'
												</ul>
											</div>
										</div>
												 
												 
												 
											 
											  
												
													
													 
												</div>
											</div>
												 
												 
												 
												 
												 
												 
												 
												 
												 
												 
												 
												 
				   
													</td> 
											 
											     
											   
									 
                                            </tr>';	 
	 
}
 
						  
				 	
				 
			 
					}
		   
	 
?>