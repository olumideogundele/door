 
<?php
include ("config/DB_config.php"); 
 $myName = new Name();
 if(isset($_SESSION['email']))
 {
 $emailing = $_SESSION['email'];
 }
 
$query = "";
 
/*SELECT  `id`, `name`, `information`, `registeredby`, `status`, `created_date`  FROM `mda`  WHERE 1*/
 $query =  "SELECT `id`, `name`, `information`, `registeredby`, `status`, `created_date`  FROM `mda`   ORDER BY `id` DESC";	
 $extract_distance = mysqli_query($conn, $query) or die(mysqli_error($conn));
		$count = mysqli_num_rows($extract_distance);
    if ($count > 0)
		  {
 	 while ($row_distance=mysqli_fetch_row($extract_distance))
    {
  						  	$id =$row_distance[0];
						   	$name =$row_distance[1];
					  		$information =$row_distance[2];
					  		$registeredby =$row_distance[3];
						   	$status =$row_distance[4];
					  		$created_date =$row_distance[5];
					  	  
						 	 
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
		 
		 //SELECT  `name` FROM `user_unit` WHERE  `account_number`
 
	
  $registeredby = $myName->showName($conn, "SELECT `name` FROM `user_unit` WHERE `account_number` = '$registeredby'"); 
		
echo '<tr>
<td> <strong>'.$name.'</strong> </td>
<td>'.$information.'</td>
 
 
<td>'.$created_date.'</td>
<td>'.$registeredby.'</td>



 <td> <span class="'.$statusCSS.'">'.$statusParam.' </span> </td>
 
  		   
												 <td>
												 
												 
												 
												 <div class="btn-group">
														<div class="dropdown">
															<button aria-expanded="false" data-toggle="dropdown" class="btn btn-info dropdown-toggle " type="button">More <span class="caret"></span></button>
															<ul role="menu" class="dropdown-menu">
																<li> <a class="dropdown-item" onClick="return confirm(\'Are you sure you want to delete?\')" href="?table=registry&del='.$id.'">Delete</a> </li>
																<li> <a  class="dropdown-item"   onClick="return confirm(\'Are you sure you want to update?\')" href="?table=registry&id='.$id.'&columnValue=1&column=status">Activate</a> </li>
																
																<li> <a class="dropdown-item"  onClick="return confirm(\'Are you sure you want to update?\')" href="?table=registry&id='.$id.'&columnValue=0&column=status"> Deactivate</a>  </li>
																
															</ul>
														</div>
													</div>
												 
												 
												 
												 
												 
												 
												 
												 
												 
												 
												 
												 
												 
												 
												 
				   
													</td> 
											 
											     
											   
									 
                                            </tr>';	 
	 
}
 
						  
				 	
				 
			 
					}
		   
	 
?>