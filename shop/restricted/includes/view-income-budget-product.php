 
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
 $query =  "SELECT `id`, `product`, `year`, `qty` , `monthly`, `total_amount`, `monthly_amount`, `desc_text`, `status`, `created_date`, `registeredby`, `reff` , `category`, `sub_category`, `super_category` FROM `income_budget_product` ORDER BY `id` DESC";	
				  
			 }
else
{
	$query =  "SELECT `id`, `product`, `year`, `qty`, `monthly`, `total_amount`, `monthly_amount`, `desc_text`, `status`, `created_date`, `registeredby`, `reff`, `category`, `sub_category`, `super_category` FROM `income_budget_product` WHERE `registeredby` = '$emailing' ORDER BY `id` DESC";	
	
	
}


 
 
 
 
 $extract_distance = mysqli_query($conn, $query) or die(mysqli_error($conn));
		$count = mysqli_num_rows($extract_distance);
    if ($count > 0)
		  {
 	 while ($row_distance=mysqli_fetch_row($extract_distance))
    {
  						  $id =$row_distance[0];
						   $product =$row_distance[1];
		 $year =$row_distance[2];
					  
				  $qty =$row_distance[3];
					  
					    $monthly =$row_distance[4];
					    $total_amount =$row_distance[5];
					    $monthly_amount =$row_distance[6];
					    $desc_text =$row_distance[7];
					    $status =$row_distance[8];
					    $created_date =$row_distance[9];
					    $registeredby =$row_distance[10];
					    $reff =$row_distance[11];
		 
		 
		  $category=$row_distance[12];
		 $sub_category=$row_distance[13];
		 $super_category=$row_distance[14];
		 
						  

		 
		 $super_category_name = $myName->showName($conn, "SELECT `name` FROM `income_super_category` WHERE `id` = '$super_category'"); 
		$category_name = $myName->showName($conn, "SELECT `name` FROM `income_category` WHERE `id` = '$category'"); 
		$sub_category_name = $myName->showName($conn, "SELECT `name` FROM `income_types` WHERE `id` = '$sub_category'"); 
		 
		 
		 
		 
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
$product_name = $myName->showName($conn, "SELECT `name` FROM `product_type` WHERE `id` = '$product'"); 


		 
		 
		 
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
			 
			 $value .= '<li> <a class="dropdown-item" onClick="return confirm(\'Are you sure you want to delete?\')" href="?table=income_budget_product&del='.$id.'">Delete</a> </li>';
		 }
	
		  if($privilege == "activate")
		 {
			 
			 $value .= '<li> <a  class="dropdown-item"   onClick="return confirm(\'Are you sure you want to update?\')" href="?table=income_budget_product&id='.$id.'&columnValue=1&column=status">Activate</a> </li>';
		 }
  
		  if($privilege == "deactivate")
		 {
			 
			 $value .= '<li> <a class="dropdown-item"  onClick="return confirm(\'Are you sure you want to update?\')" href="?table=income_budget_product&id='.$id.'&columnValue=0&column=status"> Deactivate</a>  </li>';
		 }
		 
		 }
	}
		
	 
		 
echo '<tr>
<td>'.$super_category_name.'</td>
<td>'.$category_name.'</td>
<td>'.$sub_category_name.'</td>
<td>'.$product_name.'</td>
<td>'.$year.'</td>
<td>'.number_format($qty, 2).'</td>
<td>'.number_format($total_amount, 2).'</td>
<td>'.round($monthly,2).'</td>
<td>'.number_format($monthly_amount, 2).'</td>
<td>'.$reff.'</td>
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