 
<?php
include ("config/DB_config.php"); 
 $myName = new Name();
 if(isset($_SESSION['email']))
 {
 $emailing = $_SESSION['email'];
 }
 
$query = "";

/*SELECT * FROM `location` WHERE 1


`id`, `name`, `registeredby`, `status`, `created_date`*/
 
 $query =  "SELECT `id`, `name`,  `created_date`,`registeredby`, `status` FROM `location` ORDER BY `id` DESC";	
 $extract_distance = mysqli_query($conn, $query) or die(mysqli_error($conn));
		$count = mysqli_num_rows($extract_distance);
    if ($count > 0)
		  {
 	 while ($row_distance=mysqli_fetch_row($extract_distance))
    {
  						  	$id =$row_distance[0];
						   	$name =$row_distance[1];
					  	   $created_date =$row_distance[2];
						 	$registeredby =$row_distance[3];
					   		$status =$row_distance[4];
						 
		
		
		
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
 		
	 
		 
echo '<tr>
<td> <strong>'.$name.'</strong> </td>
 
<td>'.$registeredby.'</td>
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
												<li> <a class="dropdown-item" onClick="return confirm(\'Are you sure you want to delete?\')" href="?table=location&del='.$id.'">Delete</a> </li>
												<li>  <a  class="dropdown-item"   onClick="return confirm(\'Are you sure you want to update?\')" href="?table=location&id='.$id.'&columnValue=1&column=status">Activate</a> </li>
											 
												<li class="divider"></li>
												<li> <a class="dropdown-item"  onClick="return confirm(\'Are you sure you want to update?\')" href="?table=location&id='.$id.'&columnValue=0&column=status"> Deactivate</a>  </li>
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