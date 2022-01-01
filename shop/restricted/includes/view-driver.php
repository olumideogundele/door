 
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


 if($super == '1' or $super == 1)
		
 { 
 
 if(isset($_GET['id'])){
     
     
     
      $idddd =   base64_decode(strtr($_GET['id'], '-_,', '+/='));
	  $query =  "SELECT `id`, `account_number`, `fname`, `lname`, `email`, `phone`, `license`, `license_expiry`, `status`, `created_date`, `registeredby` FROM `driver` WHERE `status` = '$idddd' 	ORDER BY `id` DESC";	
 }
     else
     {
         
         
          $query =  "SELECT `id`, `account_number`, `fname`, `lname`, `email`, `phone`, `license`, `license_expiry`, `status`, `created_date`, `registeredby` FROM `driver` 	ORDER BY `id` DESC";	
     }
	 
	  
 }
else
{
    
    if(isset($_GET['id'])){
     
     
     
      $idddd =   base64_decode(strtr($_GET['id'], '-_,', '+/='));
	  $query =  "SELECT `id`, `account_number`, `fname`, `lname`, `email`, `phone`, `license`, `license_expiry`, `status`, `created_date`, `registeredby` FROM `driver` WHERE `registeredby` = '$emailing' AND `status` = '$idddd' 	ORDER BY `id` DESC";	
 }
     else
     {
         
         
          $query =  "SELECT `id`, `account_number`, `fname`, `lname`, `email`, `phone`, `license`, `license_expiry`, `status`, `created_date`, `registeredby` FROM `driver` WHERE `registeredby` = '$emailing' 	ORDER BY `id` DESC";	
     }
		
	
 
	
}


 $extract_distance = mysqli_query($conn, $query) or die(mysqli_error($conn));
		$count = mysqli_num_rows($extract_distance);
    if ($count > 0)
		  {
 	 while ($row_distance=mysqli_fetch_row($extract_distance))
    {
  						  	$id =$row_distance[0];
						   	$account_number =$row_distance[1];
					  		$fname =$row_distance[2];
					  		$lname =$row_distance[3];
						   	$email =$row_distance[4];
					  		$phone =$row_distance[5];
					  		$license =$row_distance[6];
						   	$license_expiry =$row_distance[7];
					  		$status =$row_distance[8];
					   		$created_date =$row_distance[9];
					   		$registeredby =$row_distance[10];
						   
						 	   $driver_id = 	strtr(base64_encode($id), '+/=', '-_,');
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
  
 $registeredby = $myName->showName($conn, "SELECT  `name` FROM  `user_unit` WHERE  `account_number` = '$registeredby'");
		 
	
 if($super == '1' or $super == 1)
							{
 
	 
	 
	 $right = ' <div class="btn-group">
												<button class="btn btn-primary btn-sm m-b-5 m-t-5 dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
												Action
												</button>
												<div class="dropdown-menu">
											 
										 
												
												
												<a class="dropdown-item" onClick="return confirm(\'Are you sure you want to delete?\')" href="?table=driver&del='.$id.'">Delete</a> 
                      
											<div class="dropdown-divider"></div>  <a  class="dropdown-item"   onClick="return confirm(\'Are you sure you want to update?\')" href="?table=driver&id='.$id.'&columnValue=1&column=status&user='.$account_number.'">Activate</a> 	
											  
											  
											   <a class="dropdown-item"  onClick="return confirm(\'Are you sure you want to update?\')" href="?table=driver&id='.$id.'&columnValue=0&column=status&user='.$account_number.'"> Deactivate</a>  
											    
			  <a class="dropdown-item"  onClick="return confirm(\'Are you sure you want to update?\')" href="?table=user_unit&id='.$id.'&columnValue=1&column=status&user='.$account_number.'"> Unblock</a>
		 
		   <a  class="dropdown-item"   onClick="return confirm(\'Are you sure you want to update?\')" href="?table=user_unit&id='.$id.'&columnValue=0&column=password_update&update='.$account_number.'">Reset Passsword</a> 
											   
												<a class="dropdown-item" onClick="return confirm(\'Are you sure you want to view?\')" href="driver-profile?id='.$driver_id.'">Details</a> 
													
													 
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
												
												
												<a class="dropdown-item" onClick="return confirm(\'Are you sure you want to delete?\')" href="?table=driver&del='.$id.'">Delete</a> 
                      
											 
													
												<a class="dropdown-item" onClick="return confirm(\'Are you sure you want to view?\')" href="driver-profile?id='.$driver_id.'">Details</a> 
                      
													
													 
												</div>
											</div>';
	
	
}	 
	 
		
echo '<tr>
<td><a class="dropdown-item"  href="driver-profile?id='.$driver_id.'"> <strong>'.$fname." ".$lname.'</strong> </a></td>
<td><strong>'.$registeredby.'</strong></td>
<td>'.$email.'</td>
<td>'.$phone.'</td>
<td>'.$license.'</td>
 <td>'.$license_expiry.'</td>
<td>'.$created_date.'</td>
 <td> <span class="'.$statusCSS.'">'.$statusParam.' </span> </td>
 
  		   
												 <td>
												 
												
												 
												 
												 
												 
												 '.$right.'	 
												 
												 
												 
												 
												 
												 
												 
				   
													</td> 
											 
											     
											   
									 
                                            </tr>';	 
	 
}
 
						  
				 	
				 
			 
					}
		   
	 
?>