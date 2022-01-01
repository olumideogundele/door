 
<?php
include ("config/DB_config.php"); 
 $myName = new Name();
 if(isset($_SESSION['email']))
 {
 $emailing = $_SESSION['email'];
$usertype = $_SESSION['usertype'] ;
 
 }
 
$query = "";
 




 	if($usertype == "1")
					{
 	
		 $query =  "SELECT  `id`, `mda`,   `foldername`, `registeredby`, `status`, `created_date` FROM `file_directory` WHERE `mda` = '$mdas' ORDER BY `id` DESC";				
		
	}
else
{
	
	 $query =  "SELECT  `id`, `mda`,   `foldername`, `registeredby`, `status`, `created_date` FROM `file_directory` WHERE `registeredby` = '$emailing' ORDER BY `id` DESC";	
}
 

 $extract_distance = mysqli_query($conn, $query) or die(mysqli_error($conn));
		$count = mysqli_num_rows($extract_distance);
    if ($count > 0)
		  {
 	 while ($row_distance=mysqli_fetch_row($extract_distance))
    {
  						  	$id =$row_distance[0];
		 					$ministry =$row_distance[1];
						    $foldername =$row_distance[2];
					  	    $registeredby =$row_distance[3];
						 	$status =$row_distance[4];
					   		$created_date =$row_distance[5];
					 
		
		
		
 	 
		 
		 
			
 $statusCSS = "";
$statusParam = "";
if($status == 1)
{
 $statusCSS = "badge badge-success";
$statusParam = "Available";
}			
else  if($status == 0)
{
 $statusCSS = "badge badge-danger";
$statusParam = "Not Active";
}
		 else  if($status == 2)
{
 $statusCSS = "badge badge-warning";
$statusParam = "Requested";
}
 else  if($status == 3)
{
 $statusCSS = "badge badge-info";
$statusParam = "Out of Shelf";
}
 else  if($status == 4)
{
 $statusCSS = "badge badge-success";
$statusParam = "Available";
} 	 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		  $id_value = $myName->showName($conn, "SELECT count(`id`) FROM `userfiles` WHERE `directoryname` = '$id'"); 
		 
 		 $ministry = $myName->showName($conn, "SELECT `name`  FROM `mda`  WHERE `id` = '$ministry'"); 
		 
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
			 
			 $value .= '<li> <a class="dropdown-item" onClick="return confirm(\'Are you sure you want to delete?\')" href="?table=file_directory&del='.$id.'">Delete</a> </li>';
		 }
	
		  if($privilege == "activate")
		 {
			 
			 $value .= '<li> <a  class="dropdown-item"   onClick="return confirm(\'Are you sure you want to update?\')" href="?table=file_directory&id='.$id.'&columnValue=1&column=status">Activate</a> </li>';
		 }
  
		  if($privilege == "deactivate")
		 {
			 
			 $value .= '<li> <a class="dropdown-item"  onClick="return confirm(\'Are you sure you want to update?\')" href="?table=file_directory&id='.$id.'&columnValue=0&column=status"> Deactivate</a>  </li>';
		 }
		 
		 }
	}
		
		 
		 
	 
		 
echo '<tr>
 
<td>'.$ministry.'</td>
 
<td> '.$foldername.' </td> 
<td> '. $id_value.' </td> 
 
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