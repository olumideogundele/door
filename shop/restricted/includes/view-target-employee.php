 
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
			 
				 
 $query =  "SELECT `id`, `amount`, `desc_text`, `status`, `created_date`, `monthly`, `year`, `reff`, `account_number`, `registeredby`, `super_category`, `category`, `sub_category` FROM `target_employee`  ORDER BY `id` DESC";	
				  
			 }
else
{
	
	$query =  "SELECT `id`, `amount`, `desc_text`, `status`, `created_date`, `monthly`, `year`, `reff`, `account_number` FROM `target_employee`, `registeredby`, `super_category`, `category`, `sub_category` WHERE `account_number` = '$emailing' ORDER BY `id` DESC";	
	
 
	
	
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
		 
		 
		 				 $super_category =$row_distance[10];
					    $category =$row_distance[11];
					    $sub_category =$row_distance[12];
					  
					  
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
$employee = $myName->showName($conn, "SELECT `name` FROM `user_unit` WHERE `account_number` = '$account_number'"); 
//$income_type = $myName->showName($conn, "SELECT `name` FROM  `income_types` WHERE `id` = '$income_type'"); 
//$department = $myName->showName($conn, "SELECT `name` FROM `mda` WHERE `id` = '$dept'"); 


		 
		 
		 
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
			 
			 $value .= '<li> <a class="dropdown-item" onClick="return confirm(\'Are you sure you want to delete?\')" href="?table=target_employee&del='.$id.'">Delete</a> </li>';
		 }
	
		  if($privilege == "activate")
		 {
			 
			 $value .= '<li> <a  class="dropdown-item"   onClick="return confirm(\'Are you sure you want to update?\')" href="?table=target_employee&id='.$id.'&columnValue=1&column=status">Activate</a> </li>';
		 }
  
		  if($privilege == "deactivate")
		 {
			 
			 $value .= '<li> <a class="dropdown-item"  onClick="return confirm(\'Are you sure you want to update?\')" href="?table=target_employee&id='.$id.'&columnValue=0&column=status"> Deactivate</a>  </li>';
		 }
		 
		 }
	}
		
	 
		 	$super_category_name = $myName->showName($conn, "SELECT `name` FROM `income_super_category` WHERE `id` = '$super_category'"); 
		$category_name = $myName->showName($conn, "SELECT `name` FROM `income_category` WHERE `id` = '$category'"); 
		$sub_category_name = $myName->showName($conn, "SELECT `name` FROM `income_types` WHERE `id` = '$sub_category'"); 
		 
echo '<tr>
<td>'.$sub_category_name.'</td>
<td>'.$employee.'</td>
<td>'.number_format($amount, 2).'</td>
<td>'.$monthly.'</td>
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