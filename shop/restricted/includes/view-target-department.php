 
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
			 
				 
 $query =  "SELECT `id`, `amount`, `desc_text`, `status`, `created_date`, `monthly`, `year`, `reff`, `account_number`, `registeredby`, `remaining_amount`, `super_category`, `category`, `sub_category` FROM `target_department`  ORDER BY `id` DESC";	
				  
			 }
else
{
	
	$query =  "SELECT `id`, `amount`, `desc_text`, `status`, `created_date`, `monthly`, `year`, `reff`, `account_number`, `super_category`, `category`, `sub_category` FROM `target_department`, `registeredby` , `remaining_amount`  WHERE `account_number` = '$emailing' ORDER BY `id` DESC";	
	
 
	
	
}


 
 
 
 
 $extract_distance = mysqli_query($conn, $query) or die(mysqli_error($conn));
		$count = mysqli_num_rows($extract_distance);
    if ($count > 0)
		  {
 	 while ($row_distance=mysqli_fetch_row($extract_distance))
    {
  						  $id =$row_distance[0];
						   $amount =$row_distance[1];
		 $desc_text =$row_distance[2];
					  
				  $status =$row_distance[3];
					  
					    $created_date =$row_distance[4];
					    $monthly =$row_distance[5];
					    $year =$row_distance[6];
					    $reff =$row_distance[7];
					    $account_number =$row_distance[8];
					    $registeredby =$row_distance[9];
					    $remaining_amount =$row_distance[10];
		  $super_category =$row_distance[11];
					    $category =$row_distance[12];
					    $sub_category =$row_distance[13];
					  
					  
		 
 $total_product_amount = $myName->showName($conn, "SELECT SUM(`qty` * `price`) FROM `employee_income_target_product` WHERE     `year` = '$year'  AND `super_category` = '$super_category' AND `category` = '$category' AND `sub_category` = '$sub_category' AND `department` = '$account_number'"); 
		 
		 
 $total_service_amount = $myName->showName($conn, "SELECT SUM(`amount`) FROM `target_employee` WHERE     `year` = '$year'  AND `super_category` = '$super_category' AND `category` = '$category' AND `sub_category` = '$sub_category' AND `department` = '$account_number'"); 
		 
		 
		 
		 
		$total_aloc = $total_product_amount + $total_service_amount;
		 
		$balance = $amount - $ $total_aloc; 
		 
		 
		 
		 
		 
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
		
		
$registeredby = $myName->showName($conn, "SELECT `name` FROM `user_unit` WHERE `account_number` = '$registeredby'"); 
$employee = $myName->showName($conn, "SELECT `name` FROM `mda` WHERE `id` = '$account_number'"); 
 


		 
		 
		 
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
			 
			 $value .= '<li> <a class="dropdown-item" onClick="return confirm(\'Are you sure you want to delete?\')" href="?table=target_department&del='.$id.'">Delete</a> </li>';
		 }
	
		  if($privilege == "activate")
		 {
			 
			 $value .= '<li> <a  class="dropdown-item"   onClick="return confirm(\'Are you sure you want to update?\')" href="?table=target_department&id='.$id.'&columnValue=1&column=status">Activate</a> </li>';
		 }
  
		  if($privilege == "deactivate")
		 {
			 
			 $value .= '<li> <a class="dropdown-item"  onClick="return confirm(\'Are you sure you want to update?\')" href="?table=target_department&id='.$id.'&columnValue=0&column=status"> Deactivate</a>  </li>';
		 }
		 
		 }
	}
		
	 
	$super_category_name = $myName->showName($conn, "SELECT `name` FROM `income_super_category` WHERE `id` = '$super_category'"); 
		$category_name = $myName->showName($conn, "SELECT `name` FROM `income_category` WHERE `id` = '$category'"); 
		$sub_category_name = $myName->showName($conn, "SELECT `name` FROM `income_types` WHERE `id` = '$sub_category'"); 
		 
echo '<tr>
<td>'.$sub_category_name.'</td>
<td><a href = "departmental-monthly-target?value='.$reff.'"><strong>'.$employee.'</strong></a></td>
<td>'.number_format($amount, 2).'</td>
<td>'.number_format($total_aloc, 2).'</td>
<td>'.number_format($balance, 2).'</td>
<td>'.number_format($monthly, 2).'</td>
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