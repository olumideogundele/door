 
<?php
include ("config/DB_config.php"); 
 $myName = new Name();
 if(isset($_SESSION['email']))
 {
 $emailing = $_SESSION['email'];
 }
 
$query = "";

/*SELECT * FROM `crop_claim` WHERE 1

`id`, `crop_type`, `crop_age`, `amount`, `registeredby`, `status`, `created_date`*/
 
 $query =  "SELECT  `id`, `crop_type`, `crop_age`, `amount`, `created_date`, `registeredby`, `status`  FROM `crop_claim` ORDER BY `id` DESC";	
 $extract_distance = mysqli_query($conn, $query) or die(mysqli_error($conn));
		$count = mysqli_num_rows($extract_distance);
    if ($count > 0)
		  {
 	 while ($row_distance=mysqli_fetch_row($extract_distance))
    {
  						  	$id =$row_distance[0];
		 					$crop_type =$row_distance[1];
						   	$crop_age =$row_distance[2];
		 					$amount =$row_distance[3];
					  	   $created_date =$row_distance[4];
						 	$registeredby =$row_distance[5];
					   		$status =$row_distance[6];
					 
		
		
		
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
 
<td>'.$crop_type.'</td>
<td> '.$crop_age.' </td>
<td> '.number_format($amount, 2).' </td> 
 
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
												<li> <a class="dropdown-item" onClick="return confirm(\'Are you sure you want to delete?\')" href="?table=crop_claim&del='.$id.'">Delete</a> </li>
												<li>  <a  class="dropdown-item"   onClick="return confirm(\'Are you sure you want to update?\')" href="?table=crop_claim&id='.$id.'&columnValue=1&column=status">Activate</a> </li>
											 
												<li class="divider"></li>
												<li> <a class="dropdown-item"  onClick="return confirm(\'Are you sure you want to update?\')" href="?table=crop_claim&id='.$id.'&columnValue=0&column=status"> Deactivate</a>  </li>
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