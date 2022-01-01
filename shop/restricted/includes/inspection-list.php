 
<?php
include ("config/DB_config.php"); 
 $myName = new Name();
 if(isset($_SESSION['email']))
 {
 $emailing = $_SESSION['email'];
 }
 
$query = "";

$super = $myName->showName($conn, "SELECT  `super` FROM `user_unit` WHERE `account_number` = '$emailing'"); 
$right = "";

if(isset($_GET['truck']))
{
	
	$value = $_GET['truck'];

 if($super == '1' or $super == 1)
{
	 
	 
 $query =  "SELECT `id`, `account_number`, `truck_brand`, `year`, `truck_plate_number`,`total_capacity`, `truck_type`, `status`, `created_date`, `registeredby`, `state`, `inspector` FROM `truck`  WHERE `status` = '$value'	ORDER BY `id` DESC";
	 
 
 }
else
{
	
	
 $query =  "SELECT `id`, `account_number`, `truck_brand`, `year`, `truck_plate_number`,`total_capacity`, `truck_type`, `status`, `created_date`, `registeredby`, `state`, `inspector` FROM `truck` WHERE `inspector` = '$emailing' AND `status` = '$value'	ORDER BY `id` DESC";
	 
	
}
	
	
}
else
{



 if($super == '1' or $super == 1)
							{
	 
	 
 $query =  "SELECT `id`, `account_number`, `truck_brand`, `year`, `truck_plate_number`,`total_capacity`, `truck_type`, `status`, `created_date`, `registeredby`, `state`, `inspector`  FROM `truck` WHERE  `inspection_status` = 0 AND  `status` = 2	ORDER BY `id` DESC";
	 
 
 }
else
{
	
	
 $query =  "SELECT `id`, `account_number`, `truck_brand`, `year`, `truck_plate_number`,`total_capacity`, `truck_type`, `status`, `created_date`, `registeredby`, `state`, `inspector`  FROM `truck` WHERE `inspector` = '$emailing' AND  `inspection_status` = 0 AND  `status` = 2	ORDER BY `id` DESC";
	 
	
}

}

 
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
          $state_name = $myName->showName($conn, "SELECT  `name` FROM `states` WHERE `state_id` = '$state'"); 
         
          $truck_type = $myName->showName($conn, "SELECT  `name` FROM  `truck_type` WHERE  `id` = '$truck_type'");
          $total_capacity = $myName->showName($conn, "SELECT  `capacity` FROM  `truck_capacity` WHERE  `id` = '$total_capacity'");
         
         $truck_id = 	strtr(base64_encode($id), '+/=', '-_,');
						   
		     $truck_id22 = 	strtr(base64_encode($id), '-___________,', '+++++++++++/=');				 	 
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
else if($status == 2)
         {
             $statusCSS = "badge badge-warning m-b-5";
$statusParam = "Approved for Inspection"; 
                
 if($emailing == $inspector or $super == 1)
 {
        $value1 = '<a class="dropdown-item"  onClick="return confirm(\'Are you sure you want to continue?\')" href="inspectors-form?truck='.$truck_id22.'"> Update Inspection</a>  
        
        	<a class="dropdown-item" onClick="return confirm(\'Are you sure you want to view?\')" href="view-truck?id='.$truck_id.'">Details</a> ' ;
    
      
 }
         }
   else if($status == 3)
         {
             $statusCSS = "badge badge-info m-b-5";
$statusParam = "Inspected"; 
       }
   
	 
 
	 
	 
	 
 
		 
		 
 $account_name = $myName->showName($conn, "SELECT  `name` FROM  `user_unit` WHERE  `account_number` = '$account_number'");
 $inspectort_name = $myName->showName($conn, "SELECT  `name` FROM  `user_unit` WHERE  `account_number` = '$inspector'");
		
echo '<tr>
<td><a href="view-truck?id='.$truck_id.'"><strong>'.$account_name.'</strong> </a></td>
<td>'.$truck_brand.'</td>
 
<td>'.$truck_plate_number.' </td>
<td>'.$state_name.' </td>
 <td>'.$total_capacity.'</td>
<td>'.$truck_type.'</td>
<td>'.$created_date.'</td>
<td>'.$inspectort_name.' <br>
('.$inspector.')</td>



 <td> <span class="'.$statusCSS.'">'.$statusParam.' </span> </td>
 
  		   
												 <td>
												 
												
												 
												 
												 <div class="btn-group">
												<button class="btn btn-primary btn-sm m-b-5 m-t-5 dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
												Action
												</button>
												<div class="dropdown-menu"> 
								  
                                            '.$value1.'
												 
												 
												 
												 	
													 
												</div>
											</div>
												 
												 
				   
													</td> 
											 
											     
											   
									 
                                            </tr>';	 
	 
}
 
						  
				 	
				 
			 
					}
		   
	 
?>