 
<?php
  if(isset($_POST['validate']))
 {
 $myName = new Name();
 if(isset($_SESSION['email']))
 {
 $emailing = $_SESSION['email'];
 }
 
$query = "";

$super = $myName->showName($conn, "SELECT  `super` FROM `user_unit` WHERE `account_number` = '$emailing'"); 
$right = "";

 $query =  "SELECT `id`, `account_number`, `truck_brand`, `year`, `truck_plate_number`,`total_capacity`, `truck_type`, `status`, `created_date`, `registeredby` FROM `truck` 	ORDER BY `id` DESC";
	
 $extract_distance = mysqli_query($conn, $query) or die(mysqli_error($conn));
		$count = mysqli_num_rows($extract_distance);
    if ($count > 0)
		  {
 	 while ($row_distance=mysqli_fetch_row($extract_distance))
    {
  						  	$id =$row_distance[0];
						   	$account_number =$row_distance[1];
					  		$truck_brand =$row_distance[2];
					  		$year =$row_distance[3];
						   	$truck_plate_number =$row_distance[4];
					  		$total_capacity =$row_distance[5];
					  		$truck_type =$row_distance[6];
						   	$status =$row_distance[7];
					  		$created_date =$row_distance[8];
					   		$registeredby =$row_distance[9];
						   
						 	 
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
$statusParam = "Pending";
}
  
		 
 if($super == '1' or $super == 1)
							{
	 
 
	 
	 
	 
	  $right = ' <div class="btn-group">
												<button class="btn btn-primary btn-sm m-b-5 m-t-5 dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
												Action
												</button>
												<div class="dropdown-menu">
											 
												 <a class="dropdown-item" href="#">More</a> 
												
												
												<a class="dropdown-item" onClick="return confirm(\'Are you sure you want to delete?\')" href="?table=truck&del='.$id.'">Delete</a> 
                      
											<div class="dropdown-divider"></div>  <a  class="dropdown-item"   onClick="return confirm(\'Are you sure you want to update?\')" href="?table=truck&id='.$id.'&columnValue=1&column=status">Activate</a> 	
											  
											  
											   <a class="dropdown-item"  onClick="return confirm(\'Are you sure you want to update?\')" href="?table=truck&id='.$id.'&columnValue=0&column=status"> Deactivate</a>  
											   
											   
												<a class="dropdown-item" onClick="return confirm(\'Are you sure you want to view?\')" href="view-truck?id='.$id.'">Details</a> 
													
													 
												</div>
											</div>';
 }
else
{
	
	
 
	
	 $right = ' <div class="btn-group">
												<button class="btn btn-primary btn-sm m-b-5 m-t-5 dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
												Action
												</button>
												<div class="dropdown-menu">
											 
												 <a class="dropdown-item" href="#">More</a> 
												
												
												<a class="dropdown-item" onClick="return confirm(\'Are you sure you want to delete?\')" href="?table=truck&del='.$id.'">Delete</a> 
                      
											 
													
												<a class="dropdown-item" onClick="return confirm(\'Are you sure you want to view?\')" href="view-truck?id='.$id.'">Details</a> 
                      
													
													 
												</div>
											</div>';
	
}

 
		 
		 
 $account_name = $myName->showName($conn, "SELECT  `name` FROM  `user_unit` WHERE  `account_number` = '$account_number'");
		
echo '<tr>
<td><a href = "?value='.$id.'"> <strong>'.$account_name.'</strong> </a></td>
<td>'.$truck_brand.'</td>
<td>'.$year.'</td>
<td>'.$truck_plate_number.'</td>
 <td>'.$total_capacity.'</td>
<td>'.$truck_type.'</td>
<td>'.$created_date.'</td>
<td>'.$account_name.'</td>



 <td> <span class="'.$statusCSS.'">'.$statusParam.' </span> </td>
 
  		   
												 <td>
												 
												
												 
												 
												 
												 
											'.$right.'	 
												 
												 
												 
												 
												 
												 
				   
													</td> 
											 
											     
											   
									 
                                            </tr>';	 
	 
}
 
						  
				 	
				 
			 
					}
					}
		   
	 
?>