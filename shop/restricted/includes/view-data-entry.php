 
<?php
include ("config/DB_config.php"); 
 $myName = new Name();
 if(isset($_SESSION['email']))
 {
 $emailing = $_SESSION['email'];
 }
 
$query = "";

/*SELECT * FROM `data_entry` WHERE 1


`id`, `category`, `subcategory`, `datacategory`, `project_id`, `title`, `state`, `year`, `basin`, `terrain`, `price`, `dimension`, `energy_source`, `shot`, `client`, `contractor`, `comment`, `status`, `created_date`, `registeredby`*/
 
 $query =  "SELECT `id`, `category`, `subcategory`, `datacategory`, `project_id`, `title`, `state`, `year`, `basin`, `terrain`, `price`, `dimension`, `energy_source`, `shot`, `client`, `contractor`, `comment`, `status`, `created_date`, `registeredby`, `volume`,`volume_value` FROM `data_entry` ORDER BY `id` DESC";	
 $extract_distance = mysqli_query($conn, $query) or die(mysqli_error($conn));
		$count = mysqli_num_rows($extract_distance);
    if ($count > 0)
		  {
 	 while ($row_distance=mysqli_fetch_row($extract_distance))
    {
  						  	$id =$row_distance[0];
		 					$category =$row_distance[1];
		 					$subcategory =$row_distance[2];
						   	$datacategory =$row_distance[3];
					  	   $project_id =$row_distance[4];
						 	$title =$row_distance[5];
					   		$state =$row_distance[6];
 							$year =$row_distance[7];
		 					$basin =$row_distance[8];
		 					$terrain =$row_distance[9];
						   	$price =$row_distance[10];
					  	   $dimension =$row_distance[11];
						 	$energy_source =$row_distance[12];
					   		$shot =$row_distance[13];
		 
		 					$client =$row_distance[14];
						 	$contractor =$row_distance[15];
					   		$comment =$row_distance[16];
		 
		 
		 $status =$row_distance[17];
						 	$created_date =$row_distance[18];
					   		$registeredby =$row_distance[19];
		 $volume  =$row_distance[20];
		 $volume_value = $row_distance[21];
		  
		 
		 
		 
		 
		 
		 
		 
		 
		 $categoryName = $myName->showName($conn, "SELECT `name` FROM `category` WHERE id = '$category'"); 
		  $subcategoryName = $myName->showName($conn, "SELECT `name` FROM `sub_category` WHERE id = '$subcategory'"); 
		   $data_category = $myName->showName($conn, "SELECT `name` FROM `data_category` WHERE  id = '$datacategory'"); 
		
		
		
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
 <td>'.$categoryName.'</td>
<td>'.$subcategoryName.'</td>
<td>'.$data_category.'</td>
<td> <strong>'.$project_id.'</strong> </td>
 <td>'.$title.'</td>
<td>'.$state.'</td>
<td> '.$year.'  </td>
 <td>'.$basin.'</td>
<td>'.$terrain.'</td>
<td> '.$price.'  </td>
<td>'.$dimension.'</td>
<td>'.$volume_value.'</td>

<td>'.$volume.'</td>

<td>'.$energy_source.'</td>
<td>  '.$shot.' </td>
 <td>'.$client.'</td>
<td>'.$contractor.'</td>


<td> '.$comment.'</td>
 <td> '.$created_date.'</td>
 
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
												<li> <a class="dropdown-item" onClick="return confirm(\'Are you sure you want to delete?\')" href="?table=data_entry&del='.$id.'">Delete</a> </li>
												<li>  <a  class="dropdown-item"   onClick="return confirm(\'Are you sure you want to update?\')" href="?table=data_entry&id='.$id.'&columnValue=1&column=status">Activate</a> </li>
											 
												<li class="divider"></li>
												<li> <a class="dropdown-item"  onClick="return confirm(\'Are you sure you want to update?\')" href="?table=data_entry&id='.$id.'&columnValue=0&column=status"> Deactivate</a>  </li>
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