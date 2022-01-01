 
<?php
include ("config/DB_config.php"); 
 $myName = new Name();
 if(isset($_SESSION['email']))
 {
 $emailing = $_SESSION['email'];
 }

 
$query = "";


$super = $myName->showName($conn, "SELECT `super` FROM `user_unit` WHERE `account_number` = '$emailing'"); 
			 
			 if($super == 1)
			 {
 $query =  "SELECT `id`,   `year`, `monthly`, `amount`, `desc_text`, `status`, `created_date`, `registeredby`, `reff`, `category`, `sub_category` , `name` FROM `expenses_budget` ORDER BY `id` DESC";	
				  
			 }
else
{
	$query =  "SELECT `id`, `year`, `monthly`, `amount`, `desc_text`, `status`, `created_date`, `registeredby`, `reff`, `category`, `sub_category`, `name` FROM `expenses_budget` WHERE `registeredby` = '$emailing' ORDER BY `id` DESC";	
	
	
}


 
 
 
 
 $extract_distance = mysqli_query($conn, $query) or die(mysqli_error($conn));
		$count = mysqli_num_rows($extract_distance);
    if ($count > 0)
		  {
 	 while ($row_distance=mysqli_fetch_row($extract_distance))
    {
  						  $id =$row_distance[0];
						   
		 $year =$row_distance[1];
					  
				  $monthly =$row_distance[2];
					  
					    $amount =$row_distance[3];
					    $desc_text =$row_distance[4];
					    $status =$row_distance[5];
					    $created_date =$row_distance[6];
					    $registeredby =$row_distance[7];
					    $reff =$row_distance[8];
		 
		 
					    $category =$row_distance[9];
					    $subcategory =$row_distance[10];
					    $name =$row_distance[11];
						  

	$statusCSS = "";
$statusParam = "";
if($status == 1)
{
	
	$statusCSS = "badge badge-success m-b-5";
$statusParam = "Active";
}			
else  if($status == 0)
{
	//btn btn-primary btn-block
	$statusCSS = "badge badge-danger m-b-5";
$statusParam = "Not Active";
}

 
 


 
	
		 
		  $stage = "";
		
		
$registeredby = $myName->showName($conn, "SELECT `name` FROM `user_unit` WHERE `account_number` = '$registeredby'"); 
		 
		 
		 
		 
$category_name = $myName->showName($conn, "SELECT `name` FROM `types` WHERE `id` = '$category'"); 
$subcategory_name = $myName->showName($conn, "SELECT `name` FROM `types_sub` WHERE `id` = '$subcategory'"); 
		 
		 
		 
		 



		 
		 
		 
		  $value = "";
		 
		  $query1 =  "SELECT `rights` FROM  `privilege` WHERE `account_number` = '$emailing'";	
 $extract_distance1 = mysqli_query($conn, $query1) or die(mysqli_error($conn));
		$count1 = mysqli_num_rows($extract_distance1);
    if ($count1 > 0)
		  {
 	 while ($row_distance1=mysqli_fetch_row($extract_distance1))
    {
  						  	$privilege =$row_distance1[0];
		 
		 
	 
		 
		 
		 if($privilege == "delete")
		 {
			 
			 $value .= '<li> <a class="dropdown-item" onClick="return confirm(\'Are you sure you want to delete?\')" href="?table=expenses_budget&del='.$id.'">Delete</a> </li>';
		 }
	
		  if($privilege == "activate")
		 {
			 
			 $value .= '<li> <a  class="dropdown-item"   onClick="return confirm(\'Are you sure you want to update?\')" href="?table=expenses_budget&id='.$id.'&columnValue=1&column=status">Activate</a> </li>';
		 }
  
		  if($privilege == "deactivate")
		 {
			 
			 $value .= '<li> <a class="dropdown-item"  onClick="return confirm(\'Are you sure you want to update?\')" href="?table=expenses_budget&id='.$id.'&columnValue=0&column=status"> Deactivate</a>  </li>';
		 }
		 
		 }
	}
		
	 
		 
echo '<tr>

<td>'.$name.'</td>
<td>'.$category_name.'</td>
<td>'.$subcategory_name.'</td>



<td>'.number_format($amount, 2).'</td>
<td>'.number_format($monthly, 2).'</td>
<td>'.$reff.'</td>
<td>'.$year.'</td>
<td>'.$desc_text.'</td>
<td>'.$created_date.'</td>
<td>'.$registeredby.'</td>
 
 
<td> <span class="'.$statusCSS.'">'.$statusParam.' </span> </td>
 
  		   
												 <td>
													<div class="btn-group">
														<div class="dropdown">
															<button aria-expanded="false" data-toggle="dropdown" class="btn btn-info dropdown-toggle " type="button">More <span class="caret"></span></button>
															<ul role="menu" class="dropdown-menu">
																'.$value.'
																
															</ul>
														</div>
													</div>
												 
												 
												 
												 
												 
												 
												 
												 
												 
												 
												 
												 
				   
													</td> 
											 
											     
											   
									 
                                            </tr>';	 
	 
}
 
						  
				 	
				 
			 
					}
		   
	 
?>