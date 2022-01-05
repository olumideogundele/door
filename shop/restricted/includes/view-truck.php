 
<?php
//include ("config/DB_config.php"); 
 $myName = new Name();
 if(isset($_SESSION['email']))
 {
 $emailing = $_SESSION['email'];
 }
 
$query = "";

$super = $myName->showName($conn, "SELECT  `super` FROM `user_unit` WHERE `account_number` = '$emailing'"); 
$usertype = $myName->showName($conn, "SELECT  `usertype` FROM `user_unit` WHERE `account_number` = '$emailing'"); 
$right = "";
$value_super  = "";

if(isset($_GET['truck']))
{
	
	$value = $_GET['truck'];

 if($super == '1' or $super == 1)
							{
	 
	 
 $query =  "SELECT  `id`, `account_number`, `truck_brand`, `year`, `truck_plate_number`,`total_capacity`, `truck_type`, `status`, `created_date`, `registeredby`, `state`, `inspector`, `code`, `status_value`, `driver`  FROM `truck`  WHERE `status` = '$value'	ORDER BY `id` DESC";
	 
 
 }
else
{
	
	
 $query =  "SELECT  `id`, `account_number`, `truck_brand`, `year`, `truck_plate_number`,`total_capacity`, `truck_type`, `status`, `created_date`, `registeredby`, `state`, `inspector`, `code`, `status_value` , `driver`  FROM `truck` WHERE `registeredby` = '$emailing' AND `status` = '$value'	ORDER BY `id` DESC";
	 
	
}
	
	
}
else
{



 if($super == '1' or $super == 1)
							{
	 
	 
 $query =  "SELECT `id`, `account_number`, `truck_brand`, `year`, `truck_plate_number`,`total_capacity`, `truck_type`, `status`, `created_date`, `registeredby`, `state`, `inspector`, `code`, `status_value`, `driver`  FROM `truck` 	ORDER BY `id` DESC";
	 
 
 }
else
{
	
	
 $query =  "SELECT `id`, `account_number`, `truck_brand`, `year`, `truck_plate_number`,`total_capacity`, `truck_type`, `status`, `created_date`, `registeredby`, `state`, `inspector`, `code`, `status_value`, `driver`  FROM `truck` WHERE `registeredby` = '$emailing'	ORDER BY `id` DESC";
	 
	
}

}

//echo $query;

$value1 = "";
	
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
					   		$state =$row_distance[10];
					   		$inspector =$row_distance[11];
					   		$code =$row_distance[12];
					   		 $status_value  =$row_distance[13];
					   		 $driver  =$row_distance[14];
                                
                                
                                
          $state_name = $myName->showName($conn, "SELECT  `name` FROM `states` WHERE `state_id` = '$state'"); 
         
         
         
         $total_capacity = $myName->showName($conn, "SELECT  `capacity` FROM `truck_capacity` WHERE `id` = '$total_capacity'"); 
         
          $truck_type = $myName->showName($conn, "SELECT  `name` FROM  `truck_type` WHERE  `id` = '$truck_type'");
         
         
          $driver_name = $myName->showName($conn, "SELECT  `name` FROM  `user_unit` WHERE  `account_number` = '$driver'");
          $driver_phone = $myName->showName($conn, "SELECT  `phone` FROM  `user_unit` WHERE  `account_number` = '$driver'");
         
         $truck_id = 	strtr(base64_encode($id), '+/=', '-_,');
         $truck_id22 = 	strtr(base64_encode($id), '-___________,', '+++++++++++/=');
         
         
         
         if(empty($inspector))
         {
               $value2 = '<a class="dropdown-item"  onClick="return confirm(\'Coming Soon?\')" href=""> Assign Inspector</a>  ' ;
             
         }
         
         
						   
						 	 
 $statusCSS = "";
$statusParam = "";
if($status == 1)
{
 $statusCSS = "badge badge-success m-b-5";
$statusParam = "Approved";
    
       if($status_value == 1)
    {
      $statusParam = "Approved without Inspection";  
        
    }
    else
    {
        
          $statusParam = "Approved";  
    }
    
    
    
    
}			
else  if($status == 0)
{
 $statusCSS = "badge badge-danger m-b-5";
$statusParam = "Pending";
    
   $value_super = ' <a class="dropdown-item"   onClick="return confirm(\'-Are you sure you want to update?\')" href="?table=truck&id='.$id.'&columnValue=1&column=status&approve_id='.$truck_id.'">Approve without Inspection</a> 
     
     
     <a class="dropdown-item"   onClick="return confirm(\'Are you sure you want to update?\')" href="view-all-truck?truckid='.$truck_id.'&value=2">Approve for Inspection</a> 
     
     
     
     
       <a class="dropdown-item"   onClick="return confirm(\'Are you sure you want to update?\')" href="assign-inspector-to-truck?truckid='.$truck_id.'&value=2">Assign Inspector</a>';
    
}
 else  if($status == 2)
{
 $statusCSS = "badge badge-warning m-b-5";
$statusParam = "Approved for Inspection";
    
   $value1 = '<a class="dropdown-item"  onClick="return confirm(\'Coming Soon?\')" href="inspectors-form?truck='.$truck_id22.'"> Update Inspection</a>  ' ;
    
}
   else  if($status == 3)
{
 $statusCSS = "badge badge-info m-b-5";
$statusParam = "Inspected";
 
}
  
        
		 
 if($super == '1' or $super == 1)
							{
	 
 
	 
	 
	 
	  $right = ' <div class="btn-group">
												<button class="btn btn-primary btn-sm m-b-5 m-t-5 dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
												Action
												</button>
												<div class="dropdown-menu">
											  '. $value1.'
												 <a class="dropdown-item" href="add-truck?id='.$truck_id.'">Edit</a> 
												
												
												<a class="dropdown-item" onClick="return confirm(\'Are you sure you want to delete?\')" href="?table=truck&del='.$id.'">Delete</a> 
                      
											<div class="dropdown-divider"></div> 
                                            
                                           
                                            '.$value_super.'
                                            
                                            
                                          	
											  
											  
											   <a class="dropdown-item"  onClick="return confirm(\'Are you sure you want to update?\')" href="?table=truck&id='.$id.'&columnValue=0&column=status"> Deactivate</a>  
											   
											   
												<a class="dropdown-item" onClick="return confirm(\'Are you sure you want to view?\')" href="view-truck?id='.$truck_id.'">Details</a> 
                                                
                                                
                                               	<a class="dropdown-item" onClick="return confirm(\'Are you sure you want to view?\')" href="view-inspection-report?id='.$truck_id.'">Inspection Report Details</a> 
                                               	
													
													 
												</div>
											</div>';
 }
else  if($usertype == 2)
{
	
	
 
	
	 $right = ' <div class="btn-group">
												<button class="btn btn-primary btn-sm m-b-5 m-t-5 dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
												Action
												</button>
												<div class="dropdown-menu">
											 
												 <a class="dropdown-item" href="add-truck?id='.$truck_id.'">Edit</a> 
												
												
												<a class="dropdown-item" onClick="return confirm(\'Are you sure you want to delete?\')" href="?table=truck&del='.$id.'">Delete</a> 
                      
											 
													
												<a class="dropdown-item" onClick="return confirm(\'Are you sure you want to view?\')" href="view-truck?id='.$truck_id.'">Details</a> 
                      
													
													 
												</div>
											</div>';
	
}
else  if($usertype == 7)
{
	
	
 
	
	 $right = ' <div class="btn-group">
												<button class="btn btn-primary btn-sm m-b-5 m-t-5 dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
												Action
												</button>
												<div class="dropdown-menu">
											 
											   '. $value1.'
											 
													
												<a class="dropdown-item" onClick="return confirm(\'Are you sure you want to view?\')" href="view-truck?id='.$truck_id.'">Details</a> 
                      
													
													 
												</div>
											</div>';
	
}

 
		 
		 
 $account_name = $myName->showName($conn, "SELECT  `name` FROM  `user_unit` WHERE  `account_number` = '$account_number'");
		
echo '<tr>
<td><a href="view-truck?id='.$truck_id.'"><strong>'.$account_name.'</strong> </a></td>
<td>'.$truck_brand.'</td>
<td>'.$year.'</td>
<td>'.$truck_plate_number.' </td>
<td>'.$state_name.' </td>
 <td>'.$total_capacity.'</td>
<td>'.$truck_type.'</td>
<td>'.$account_name.'</td>
<td>'.$created_date.'</td>
<td>'.$driver_name.'<br>('.$driver_phone.')
</td>





 <td> <span class="'.$statusCSS.'">'.$statusParam.' </span> </td>
 
  		   
												 <td>
												 
												
												 
												 
												 
												 
											'.$right.'  
												 
												 
												 
												 
												 
												 
				   
													</td> 
											 
											     
											   
									 
                                            </tr>';	 
	 
}
 
						  
				 	
				 
			 
					}
		   
	 
?>