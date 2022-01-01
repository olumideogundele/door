 
<?php
include ("config/DB_config.php"); 
 $myName = new Name();
 if(isset($_SESSION['email']))
 {
 $emailing = $_SESSION['email'];
 }
 $query = "";
 $query =  "SELECT `id`, `amount`, `account_number`, `registeredby`, `status`, `created_date`, `updated_at`, `tcode`, `remark`  FROM `e_wallet` ORDER BY `id` DESC";	
 $extract_distance = mysqli_query($conn, $query) or die(mysqli_error($conn));
		$count = mysqli_num_rows($extract_distance);
    if ($count > 0)
		  {
 	 while ($row_distance=mysqli_fetch_row($extract_distance))
    {
  						  	$id =$row_distance[0];
						   	$amount =$row_distance[1];
					  		$account_number =$row_distance[2];
					  		$registeredby =$row_distance[3];
						   	$status =$row_distance[4];
					  		$created_date =$row_distance[5];
					  		$updated_at =$row_distance[6];
						    $tcode =$row_distance[7];
						 	$remark =$row_distance[8];
		 				 
		 					 
$statusCSS = "";
$statusParam = "";
if($status == 1)
{
 $statusCSS = "badge badge-success m-b-5";
$statusParam = "Successful";
}			
else  if($status == 0)
{
 $statusCSS = "badge badge-danger m-b-5";
$statusParam = "Not Successful";
}
		 //1 active investment
		 //2matured investment
		 //3cashed out investment
		 //0 inactive investment
 
$name = $myName->showName($conn, "SELECT `name` FROM `user_unit` WHERE `account_number` = '$account_number'");
 
		 
echo '<tr>
<td> <strong>'.$name.'</strong> </td>
<td><a href = "#?int='.$id.'"><strong>'.$account_number.'</strong></a></td>
 
<td> &#8358;'.number_format($amount,2).'</td>
 <td>'.$created_date.'</td>
 
 
  		   
												 <td>
												 
												 <div class="btn-group">
												<button class="btn btn-primary btn-sm m-b-5 m-t-5 dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
												Action
												</button>
												<div class="dropdown-menu">
											 
												 <a class="dropdown-item" onClick="return confirm(\'Are you sure you want to delete?\')" href="?table=e_wallet&del='.$id.'">Delete</a> 
                      
											<div class="dropdown-divider"></div>  <a  class="dropdown-item"   onClick="return confirm(\'Are you sure you want to update?\')" href="?table=e_wallet&id='.$id.'&columnValue=1&column=status">Activate</a> 	
											  
											  
											   <a class="dropdown-item"  onClick="return confirm(\'Are you sure you want to update?\')" href="?table=e_wallet&id='.$id.'&columnValue=0&column=status"> Deactivate</a>  
												
													
													 
												</div>
											</div>
												 
												 
												 
												 
												 
												 
												 
												 
												 
												 
												 
												 
				   
													</td> 
											 
											     
											   
									 
                                            </tr>';	 
	 
}
 
						  
				 	
				 
			 
					}
		   
	 
?>