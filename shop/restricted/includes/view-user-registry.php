 
<?php
include ("config/DB_config.php"); 
 $myName = new Name();
 if(isset($_SESSION['email']))
 {
 $emailing = $_SESSION['email'];
 }
 
$query = "";
 






$usertype = $_SESSION['usertype'] ;


 
	
	
	


if($usertype != "1")
{
	
 
	 $query =  "SELECT `id`, `name`, `account_number`, `phone`, `email`, `address`, `usertype`,`created_date`, `registeredby`, `status`,`irrelivant` FROM `user_registry` WHERE `account_number` = '$emailing' AND `usertype` != '1' ORDER BY `id` DESC";
	
	 
}
else
{
	
	 $query =  "SELECT `id`, `name`, `account_number`, `phone`, `email`, `address`, `usertype`,`created_date`, `registeredby`, `status`,`irrelivant` FROM `user_registry` ORDER BY `id` DESC";	
	
	
}

	
	

	
 














 $extract_distance = mysqli_query($conn, $query) or die(mysqli_error($conn));
		$count = mysqli_num_rows($extract_distance);
    if ($count > 0)
		  {
 	 while ($row_distance=mysqli_fetch_row($extract_distance))
    {
  						  	$id =$row_distance[0];
						   	$name =$row_distance[1];
					  		$account_number =$row_distance[2];
					  		$phone =$row_distance[3];
						   	$email =$row_distance[4];
					  		$address =$row_distance[5];
					  		$usertype =$row_distance[6];
						    $created_date =$row_distance[7];
						 	$registeredby =$row_distance[8];
					   		$status =$row_distance[9];
							$irrelivant  =$row_distance[10];
		
		
		
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
 		
		$usertypeValue = "";
		if($usertype == 1)
		{
				$usertypeValue = "Super Admin";
			
		}
		else if($usertype == 2)
		{
			
				$usertypeValue = "Administrator";
		}
		else if($usertype == 3)
		{
			
				$usertypeValue = "Normal User";
		}
		
		else if($usertype == 4)
		{
			
				$usertypeValue = "Store Keeper";
		}
		
		 
		
		else if($usertype == 5)
		{
				$usertypeValue = "Customer Care";
			
		}
		
		
		
		
		
	 /*
             <option value="">---Select One---</option>
              <option value="1">Super Admin</option>
               <option value="2">Admin</option>
              <option value="3">Normal User</option>
	   <option value="4">Store Keeper</option>
                <option value="5">Customer Care</option>*/
		
		 
echo '<tr>
<td><a href = "view-payout-history.php?id='.$account_number.'"><strong>'.$name.'</strong></a></td>
<td> <a href="all-wallet-trend.php?account_number='.$account_number.'">'.$account_number.' <br>
('.$irrelivant.')</a></td>
<td>'.$phone.'</td>
<td>'.$email.'</td>
 <td>'.$address.'</td>
<td>'.$usertypeValue.'</td>
<td>'.$created_date.'</td>
<td>'.$registeredby.'</td>
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
												<li> <a class="dropdown-item" onClick="return confirm(\'Are you sure you want to delete?\')" href="?table=user_registry&del='.$id.'">Delete</a> </li>
												<li>  <a  class="dropdown-item"   onClick="return confirm(\'Are you sure you want to update?\')" href="?table=user_registry&id='.$id.'&columnValue=1&column=status">Activate</a> </li>
											 
												<li class="divider"></li>
												<li> <a class="dropdown-item"  onClick="return confirm(\'Are you sure you want to update?\')" href="?table=user_registry&id='.$id.'&columnValue=0&column=status"> Deactivate</a>  </li>
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