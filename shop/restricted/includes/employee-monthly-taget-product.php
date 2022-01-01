 
<?php
include ("config/DB_config.php"); 
 $myName = new Name();
 if(isset($_SESSION['email']))
 {
 $emailing = $_SESSION['email'];
 }



if(isset($_GET['value']))
{
	$reff = $_GET['value'];
	
	 $query =  "SELECT `id`, `employee`, `product`, `year`, `monthly`, `desc_text`, `status`, `created_date`, `registeredby`, `qty`, `month` FROM `employee_income_target_product_monthly` WHERE `reff` = '$reff'";
	
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
					    $qty =$row_distance[9];
					    $month =$row_distance[10];
					  
					  
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
$department_name = $myName->showName($conn, "SELECT `name` FROM `user_unit` WHERE `account_number` = '$department'"); 
 


		 
		 
		 
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
			 
			 $value .= '<li> <a class="dropdown-item" onClick="return confirm(\'Are you sure you want to delete?\')" href="?table=employee_income_target_product&del='.$id.'">Delete</a> </li>';
		 }
	
		  if($privilege == "activate")
		 {
			 
			 $value .= '<li> <a  class="dropdown-item"   onClick="return confirm(\'Are you sure you want to update?\')" href="?table=employee_income_target_product&id='.$id.'&columnValue=1&column=status">Activate</a> </li>';
		 }
  
		  if($privilege == "deactivate")
		 {
			 
			 $value .= '<li> <a class="dropdown-item"  onClick="return confirm(\'Are you sure you want to update?\')" href="?table=employee_income_target_product&id='.$id.'&columnValue=0&column=status"> Deactivate</a>  </li>';
		 }if($privilege == "edit")
		 {
			 
			 $value .= '<li> <a class="dropdown-item"  onClick="return confirm(\'Are you sure you want to update?\')" href=edit-employee-target-product?id='.$id.'"> Deactivate</a>  </li>';
		 }
		 
		 }
	}
		
	  $product_name = $myName->showName($conn, "SELECT   `name` FROM `product_type` WHERE `id` = '$product'"); 
		 $month = $myName->showName($conn, "SELECT  `name` FROM `months` WHERE `id` = '$month'"); 
echo '<tr>
<td><a href = "edit-employee-target-product?id='.$id.'"><strong>'.$department_name.'</strong></a></td>
<td><a href = "edit-employee-target-product?id='.$id.'"><strong>'.$product_name.'</strong></a></td>
<td>'.$month.'</td>
<td>'.$year.'</td>
<td>'.number_format($monthly, 2).'</td>

<td>'.$desc_text.'</td>
<td>'.$created_date.'</td>
<td>'.$registeredby.'</td>
 
 
<td> <span class="'.$statusCSS.'">'.$statusParam.' </span> </td>
 
  		   
												 <td>
													<div class="btn-group">
														<div class="dropdown">
															<button aria-expanded="false" data-toggle="dropdown" class="btn btn-info dropdown-toggle " type="button">More Options <span class="caret"></span></button>
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