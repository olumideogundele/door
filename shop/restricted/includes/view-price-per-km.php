 
<?php
include ("config/DB_config.php"); 
 $myName = new Name();
 if(isset($_SESSION['email']))
 {
 $emailing = $_SESSION['email'];
 }
 
$query = "";


$super = $myName->showName($conn, "SELECT  `super` FROM `user_unit` WHERE `account_number` = '$emailing'"); 


 if($super == '1' or $super == 1)
 {
     

 $query =  "SELECT  `id`, `truck_type`, `capacity`, `amount`, `status`, `created_date`, `registeredby` FROM `price_per_km`  ORDER BY `id` DESC ";	

 }
else
{
    
    
   $query =  "SELECT  `id`, `truck_type`, `capacity`, `amount`, `status`, `created_date`, `registeredby` FROM `price_per_km`  WHERE `registeredby` = '$emailing' ORDER BY `id` DESC "; 
    
}








 $extract_distance = mysqli_query($conn, $query) or die(mysqli_error($conn));
		$count = mysqli_num_rows($extract_distance);
    if ($count > 0)
		  {
 	 while ($row_distance=mysqli_fetch_row($extract_distance))
    {
  						  	$id =$row_distance[0];
						   	$truck_type =$row_distance[1];
					  		$capacity =$row_distance[2];
					  		$amount =$row_distance[3];
						   	$status =$row_distance[4];
					  		$created_date =$row_distance[5];
					  		$registeredby =$row_distance[6];
					  		 
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
  
 $registeredby = $myName->showName($conn, "SELECT  `name` FROM  `user_unit` WHERE  `account_number` = '$registeredby'");
         
 $truck_type_name = $myName->showName($conn, "SELECT  `name` FROM `truck_type` WHERE  `id`= '$truck_type'");
         
 $capacity_name = $myName->showName($conn, "SELECT  `capacity` FROM `truck_capacity` WHERE  `id`= '$capacity'");
		
echo '<tr>
<td>  <strong>'.$truck_type_name.'</strong> </a></td>
<td>'.$capacity_name.'</td>
<td>'.number_format($amount, 2).'</td>
 
<td>'.$created_date.'</td>
<td>'.$registeredby.'</td>



 <td> <span class="'.$statusCSS.'">'.$statusParam.' </span> </td>
 
  		   
												 <td>
												 
												 <div class="btn-group">
												<button class="btn btn-primary btn-sm m-b-5 m-t-5 dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
												Action
												</button>
												<div class="dropdown-menu">
											 
												 <a class="dropdown-item" onClick="return confirm(\'Are you sure you want to delete?\')" href="?table=price_per_km&del='.$id.'">Delete</a> 
                      
											<div class="dropdown-divider"></div>  <a  class="dropdown-item"   onClick="return confirm(\'Are you sure you want to update?\')" href="?table=price_per_km&id='.$id.'&columnValue=1&column=status">Activate</a> 	
											  
											  
											   <a class="dropdown-item"  onClick="return confirm(\'Are you sure you want to update?\')" href="?table=price_per_km&id='.$id.'&columnValue=0&column=status"> Deactivate</a>  
												
													
													 
												</div>
											</div>
												 
												 
												 
												 
												 
												 
												 
												 
												 
												 
												 
												 
				   
													</td> 
											 
											     
											   
									 
                                            </tr>';	 
	 
}
 
						  
				 	
				 
			 
					}
		   
	 
?>