 
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
			 
				 
 $query =  "SELECT `id`, `department`, `product`, `year`, `monthly`, `desc_text`, `status`, `created_date`, `registeredby`, `reff`, `qty`, `super_category`, `category`, `sub_category`  FROM `department_income_target_product`   ORDER BY `id` DESC";	
				  
}
else
{
	
	$query =  "SELECT `id`, `department`, `product`, `year`, `monthly`, `desc_text`, `status`, `created_date`, `registeredby`, `reff`, `qty`, `super_category`, `category`, `sub_category`  FROM `department_income_target_product` WHERE `registeredby` = '$emailing' ORDER BY `id` DESC";	
	
 
	
	
}


 
 
 
 
 $extract_distance = mysqli_query($conn, $query) or die(mysqli_error($conn));
		$count = mysqli_num_rows($extract_distance);
    if ($count > 0)
		  {
 	 while ($row_distance=mysqli_fetch_row($extract_distance))
    {
  						  $id =$row_distance[0];
						   $department =$row_distance[1];
		 $product =$row_distance[2];
					  
				  $year =$row_distance[3];
					  
					    $monthly =$row_distance[4];
					    $desc_text =$row_distance[5];
					    $status =$row_distance[6];
					    $created_date =$row_distance[7];
					    $registeredby =$row_distance[8];
					    $reff =$row_distance[9];
					    $qty =$row_distance[10];
		 $super_category =$row_distance[11];
					    $category =$row_distance[12];
					    $sub_category =$row_distance[13];
					  
					  
	$statusCSS = "";
$statusParam = "";
if($status == 1)
{
	
	$statusCSS = "badge badge-success m-b-5";
$statusParam = "Confirmed";
}			
else  if($status == 0)
{
	//btn btn-primary btn-block
	$statusCSS = "badge badge-danger m-b-5";
$statusParam = "Not Confirmed";
}

 
 


 
	
		 
		  $stage = "";
		
$product_name = $myName->showName($conn, "SELECT   `name` FROM `product_type` WHERE `id` = '$product'"); 
$price = $myName->showName($conn, "SELECT   `price` FROM `product_type` WHERE `id` = '$product'"); 
$registeredby = $myName->showName($conn, "SELECT `name` FROM `user_unit` WHERE `account_number` = '$registeredby'"); 
$department_name = $myName->showName($conn, "SELECT `name` FROM `mda` WHERE `id` = '$department'"); 
 


		 
		 
		 
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
			 
			 $value .= '<li> <a class="dropdown-item" onClick="return confirm(\'Are you sure you want to delete?\')" href="?table=department_income_target_product&del='.$id.'">Delete</a> </li>';
		 }
	
		  if($privilege == "activate")
		 {
			 
			 $value .= '<li> <a  class="dropdown-item"   onClick="return confirm(\'Are you sure you want to update?\')" href="?table=department_income_target_product&id='.$id.'&columnValue=1&column=status">Activate</a> </li>';
		 }
  
		  if($privilege == "deactivate")
		 {
			 
			 $value .= '<li> <a class="dropdown-item"  onClick="return confirm(\'Are you sure you want to update?\')" href="?table=department_income_target_product&id='.$id.'&columnValue=0&column=status"> Deactivate</a>  </li>';
		 }
		 
		 }
	}
		 
		 $projected_amount = $qty * $price;
		 $projected_amount_monthly = $monthly * $price;
		
	 
 
	$super_category_name = $myName->showName($conn, "SELECT `name` FROM `income_super_category` WHERE `id` = '$super_category'"); 
		$category_name = $myName->showName($conn, "SELECT `name` FROM `income_category` WHERE `id` = '$category'"); 
		$sub_category_name = $myName->showName($conn, "SELECT `name` FROM `income_types` WHERE `id` = '$sub_category'"); 
		 
echo '<tr>
<td>'.$sub_category_name.'</td>
<td><a href = "departmental-monthly-target-product?value='.$reff.'"><strong>'.$department_name.'</strong></a></td>
<td>'.$year.'</td>
<td>'.$product_name.'</td>
<td>'.$qty.'</td>
<td>'.number_format($monthly, 2).'</td>
<td>'.number_format($projected_amount, 2).'</td>
<td>'.number_format($projected_amount_monthly, 2).'</td>
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