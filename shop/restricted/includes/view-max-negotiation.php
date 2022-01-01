 
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
     

 $query =  "SELECT `id`, `number_max`, `status`, `created_date`, `registeredby` FROM `maximum_negotiation`  ORDER BY `id` DESC ";	

 }
else
{
    
    
   $query =  "SELECT `id`, `number_max`, `status`, `created_date`, `registeredby` FROM `maximum_negotiation` WHERE `registeredby` = '$emailing' ORDER BY `id` DESC "; 
    
}








 $extract_distance = mysqli_query($conn, $query) or die(mysqli_error($conn));
		$count = mysqli_num_rows($extract_distance);
    if ($count > 0)
		  {
 	 while ($row_distance=mysqli_fetch_row($extract_distance))
    {
  						  	$id =$row_distance[0];
						   	$number_max =$row_distance[1];
					  		 
						   	$status =$row_distance[2];
					  		$created_date =$row_distance[3];
					  		$registeredby =$row_distance[4];
					  		 
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
         
 
		
echo '<tr>
<td>  <strong>'.$number_max.'</strong> </a></td>
 <td>'.$created_date.'</td>
<td>'.$registeredby.'</td>



 <td> <span class="'.$statusCSS.'">'.$statusParam.' </span> </td>
 
  		   
												 <td>
												 
												 <div class="btn-group">
												<button class="btn btn-primary btn-sm m-b-5 m-t-5 dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
												Action
												</button>
												<div class="dropdown-menu">
											 
												 <a class="dropdown-item" onClick="return confirm(\'Are you sure you want to delete?\')" href="?table=maximum_negotiation&del='.$id.'">Delete</a> 
                      
											<div class="dropdown-divider"></div>  <a  class="dropdown-item"   onClick="return confirm(\'Are you sure you want to update?\')" href="?table=maximum_negotiation&id='.$id.'&columnValue=1&column=status">Activate</a> 	
											  
											  
											   <a class="dropdown-item"  onClick="return confirm(\'Are you sure you want to update?\')" href="?table=maximum_negotiation&id='.$id.'&columnValue=0&column=status"> Deactivate</a>  
												
													
													 
												</div>
											</div>
												 
												 
												 
												 
												 
												 
												 
												 
												 
												 
												 
												 
				   
													</td> 
											 
											     
											   
									 
                                            </tr>';	 
	 
}
 
						  
				 	
				 
			 
					}
		   
	 
?>