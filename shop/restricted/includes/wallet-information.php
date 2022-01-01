 
<?php
include ("config/DB_config.php"); 
 $myName = new Name();
 if(isset($_SESSION['email']))
 {
 $emailing = $_SESSION['email'];
 }

 
$query = "";
 
 $query =  "SELECT   `id`, `amount`, `registeredby`, `status`, `created_at`, `wallet_no` FROM `wallet` WHERE 1";	
 
 
 $extract_distance = mysqli_query($conn, $query) or die(mysqli_error($conn));
		$count = mysqli_num_rows($extract_distance);
    if ($count > 0)
		  {
 	 while ($row_distance=mysqli_fetch_row($extract_distance))
    {
  						  $id =$row_distance[0];
						   $amount =$row_distance[1];
		 $registeredby =$row_distance[2];
					  
				  $status =$row_distance[3];
					  
					    $created_date =$row_distance[4];
					    $wallet_no =$row_distance[5];
						  

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
$department = $myName->showName($conn, "SELECT `name` FROM `mda` WHERE `id` = '$wallet_no'"); 

//$stage = $position." Stage";
		 
		 
		 
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
			 
			 $value .= '<li> <a class="dropdown-item" onClick="return confirm(\'Are you sure you want to delete?\')" href="?table=stake_holder&del='.$id.'">Delete</a> </li>';
		 }
	
		  if($privilege == "activate")
		 {
			 
			 $value .= '<li> <a  class="dropdown-item"   onClick="return confirm(\'Are you sure you want to update?\')" href="?table=stake_holder&id='.$id.'&columnValue=1&column=status">Activate</a> </li>';
		 }
  
		  if($privilege == "deactivate")
		 {
			 
			 $value .= '<li> <a class="dropdown-item"  onClick="return confirm(\'Are you sure you want to update?\')" href="?table=stake_holder&id='.$id.'&columnValue=0&column=status"> Deactivate</a>  </li>';
		 }
		 
		 }
	}
		
	 
		 
echo '<tr>
<td>'.$department.'</td>
<td>'.$amount.'</td>
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