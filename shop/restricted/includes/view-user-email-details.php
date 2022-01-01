 
<?php
include ("config/DB_config.php"); 
 $myName = new Name();
 if(isset($_SESSION['email']))
 {
 $emailing = $_SESSION['email'];
 }
 
$query = "";


 
 
	 $query =  "SELECT `id`, `account_number`, `email`, `created_date`, `registeredby`, `status` FROM `email_attachment_management` WHERE `account_number` = '$emailing'  ORDER BY `id` DESC";
	
$extract_distance = mysqli_query($conn, $query) or die(mysqli_error($conn));
		$count = mysqli_num_rows($extract_distance);
    if ($count > 0)
		  {
 	 while ($row_distance=mysqli_fetch_row($extract_distance))
    {
  						  	$id =$row_distance[0];
						   	$account_number =$row_distance[1];
					  		$email =$row_distance[2];
					  		$created_date =$row_distance[3];
						   	$registeredby =$row_distance[4];
					  		$status =$row_distance[5];
					  	 
		
		
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
		 else  if($status == 0)
{
 $statusCSS = "badge badge-danger m-b-5";
$statusParam = "Blocked";
}
 		
		
		 
		$name = $myName->showName($conn, "SELECT `name` FROM  `user_unit` WHERE `account_number` = '$account_number'");  		
		 
	 
echo '<tr>
<td><strong>'.$name.'</strong></td>
<td>'.$account_number.'</td>
<td>'.$email.'</td>
<td>'.$created_date.'</td>
  
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
												<li> <a class="dropdown-item" onClick="return confirm(\'Are you sure you want to delete?\')" href="?value='.$id.'">Edit</a> </li>
												
												
												
												<li> <a  class="dropdown-item"   onClick="return confirm(\'Are you sure you want to update?\')" href="?table=email_attachment_management&id='.$id.'&columnValue=1&column=status">Activate</a> </li>
												
												
												<li> <a  class="dropdown-item"   onClick="return confirm(\'Are you sure you want to update?\')" href="?table=email_attachment_management&id='.$id.'&columnValue=0&column=status">Deactivate</a> </li>
												<li> <a class="dropdown-item" onClick="return confirm(\'Are you sure you want to delete?\')" href="?table=email_attachment_management&del='.$id.'">Delete</a> </li>
												
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