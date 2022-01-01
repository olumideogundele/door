 
<?php

ini_set('display_startup_errors', 1);
ini_set('display_errors', 1);
error_reporting(-1);

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


if($userT == 1)
{
 
	
	$query = "SELECT `id`, `ministry`,   `file`, `created_date`, `registeredby`, `approvedby`, `status`, `incoming_ministry`, `incoming_agency`,`type`,`code`,`filecode` FROM `file_request` WHERE (`ministry` = '$ministry')  ORDER BY `id` DESC";	
	
}
else
{
		$query = "SELECT `id`, `ministry`,   `file`, `created_date`, `registeredby`, `approvedby`, `status`, `incoming_ministry`, `incoming_agency`,`type`,`code`,`filecode` FROM `file_request` WHERE (`ministry` = '$ministry')  ORDER BY `id` DESC";		
	
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
} 
 		 $ministry = $myName->showName($conn, "SELECT `name`  FROM `mda`  WHERE `id` = '$ministry'"); 
		 $foldername = $myName->showName($conn, "SELECT  `directoryname`  FROM `userfiles` WHERE `id` = '$file'"); 
  $foldername = $myName->showName($conn, "SELECT  `foldername`  FROM `file_directory` WHERE `id` = '$foldername'"); 
		 
		 
		 $filename = $myName->showName($conn, "SELECT `name` FROM `userfiles` WHERE `filecode` = '$filecode' or `group_code` = '$filecode'"); 
		 
		 
		   $name = $myName->showName($conn, "SELECT `name` FROM `user_unit` WHERE `account_number` = '$registeredby'"); 
		  $approvedby = $myName->showName($conn, "SELECT `name` FROM `user_unit` WHERE `account_number` = '$approvedby'"); 
		 
		 
		 
		 
		 $value = "";
		 
		  $query1 =  "SELECT `rights` FROM  `privilege` WHERE `account_number` = '$emailing'";	
 $extract_distance1 = mysqli_query($conn, $query1) or die(mysqli_error($conn));
		$count1 = mysqli_num_rows($extract_distance1);
    if ($count1 > 0)
		  {
 	 while ($row_distance1=mysqli_fetch_row($extract_distance1))
    {
  						  	$privilege =$row_distance1[0];
		 
		 
	 
		 
		 
		 if($privilege == "grant" and $status != 3)
		 {
		 
			 
			 
			  $value .= ' <li>  <a  class="dropdown-item"   onClick="return confirm(\'Are you sure you want to update?\')" href="?table=file_request&id='.$id.'&columnValue=3&column=status&type='.$type.'">Grant  Request</a> </li>';
			 
		 } if($privilege == "returned")
		 {
			 
			 $value .= ' <li>  <a  class="dropdown-item"   onClick="return confirm(\'Are you sure you want to update?\')" href="?table=file_request&id='.$id.'&columnValue=4&column=status">Returned</a> </li>';
		 }
	
		  if($privilege == "activate")
		 {
			 
			 $value .= '<li> <a  class="dropdown-item"   onClick="return confirm(\'Are you sure you want to update?\')" href="?table=stake_holder&id='.$id.'&columnValue=1&column=status">Activate</a> </li>';
		 }
  
		  if($privilege == "deactivate")
		 {
			 
			 $value .= '<li> <a class="dropdown-item"  onClick="return confirm(\'Are you sure you want to update?\')" href="?table=stake_holder&id='.$id.'&columnValue=0&column=status"> Deactivate</a>  </li>';
		 }
		 
		 }
	}
		
		 
		 
		 
		 
		 
		 
		 
		 
echo '<tr>
 
<td>'.$code.'</td>
<td>'.$ministry.'</td>
 
<td>'.$filename.'<br>
'.$filecode.'</td>
<td>'.$created_date.'</td>
<td>'.$name.'</td>
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
											 
											 
												
											 
												
												'.$value.'
										
											 
											
											 
											 
												<li class="divider"></li>
												<li> <a class="dropdown-item"  onClick="return confirm(\'Are you sure you want to update?\')" href="?table=file_request&id='.$id.'&columnValue=0&column=status"> Deactivate</a>  </li>
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