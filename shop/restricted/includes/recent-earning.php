 
<?php
include ("config/DB_config.php"); 
 $myName = new Name();
 if(isset($_SESSION['email']))
 {
 $emailing = $_SESSION['email'];
 }
 
 $counter = 1;

 $super = $myName->showName($conn, "SELECT `super` FROM `user_unit` WHERE `account_number` = '$emailing'");

if($super == 1)
{
    
    	 $query =  "SELECT  `id`, `code`, `truck_owner`, `commissiononfee`, `message`, `owners_share`, `loadme_share`, `customer`, `status`, `created_date`, `registeredby`, `amount`,`trip_status`,`cashed` FROM `transaction_information` WHERE (`status` = 2 OR `status` = 1)  ORDER BY `id` DESC LIMIT 5";
}
 else{
     
     	 $query =  "SELECT  `id`, `code`, `truck_owner`, `commissiononfee`, `message`, `owners_share`, `loadme_share`, `customer`, `status`, `created_date`, `registeredby`, `amount`,`trip_status`,`cashed` FROM `transaction_information` WHERE (`status` = 2  OR `status` = 1) and `truck_owner` = '$emailing' ORDER BY `id` DESC LIMIT 5";
 }

	
 

 $extract_distance = mysqli_query($conn, $query) or die(mysqli_error($conn));
		$count = mysqli_num_rows($extract_distance);
    if ($count > 0)
		  {
 	 while ($row_distance=mysqli_fetch_row($extract_distance))
    {
  						  	$id =$row_distance[0];
						   	$code =$row_distance[1];
					  		$truck_owner =$row_distance[2];
					  		$commissiononfee =$row_distance[3];
						   	$message =$row_distance[4];
					  		$owners_share =$row_distance[5];
					  		$loadme_share =$row_distance[6];
					  		$customer =$row_distance[7];
						    $status =$row_distance[8];
						 	$created_date =$row_distance[9];
					   	 $registeredby  =$row_distance[10];
							$amount  =$row_distance[11];
							$trip_status  =$row_distance[12];
							$cashed  =$row_distance[12];
							 
		
		
 $statusCSS = "";
$statusParam = "";
if($cashed == 1)
{
 $statusCSS = "badge badge-warning m-b-5";
$statusParam = "Not Cashed";
}			
else  if($cashed == 2)
{
 $statusCSS = "badge badge-info m-b-5";
$statusParam = "Matured";
}
 else  if($cashed == 2)
{
 $statusCSS = "badge badge-success m-b-5";
$statusParam = "Cashed";
}
 		
	  $loading = $myName->showName($conn, "SELECT `loading` FROM `search_result` WHERE  `code` = '$code'"); 
	  $destination = $myName->showName($conn, "SELECT `destination` FROM `search_result` WHERE  `code` = '$code'"); 
	  $distance = $myName->showName($conn, "SELECT `distance` FROM `search_result` WHERE  `code` = '$code'"); 
	  $pick_up_date = $myName->showName($conn, "SELECT `pick_up_date` FROM `search_result` WHERE  `code` = '$code'"); 
	  $truck_id = $myName->showName($conn, "SELECT `truck_id` FROM `search_result` WHERE  `code` = '$code'"); 
	  $truck_plate_number = $myName->showName($conn, "SELECT `truck_plate_number` FROM `truck` WHERE  `id` = '$truck_id'"); 
	  $truck_owner_name = $myName->showName($conn, "SELECT `name` FROM `user_unit` WHERE  `account_number` = '$truck_owner'"); 
	
  
         
         
         echo '<tr>
         <td>'.$loading.'<br>
'.$pick_up_date.'</td>
         <td>'.$destination.'</td>
         <td>'.$distance.' km</td>
         <td>'.$truck_owner_name.'</td>
         <td>'.$truck_plate_number.'</td>
													<td class="tx-right tx-medium tx-inverse">'.number_format($commissiononfee,2).'</td>
												<td class="tx-right tx-medium tx-inverse"> '.number_format($loadme_share,2).'</td>
												<td class="tx-right tx-medium tx-danger"> '.number_format($owners_share,2).'</td>
												 
												<td class="tx-right tx-medium tx-danger"> '.number_format($amount,2).'</td>
												<td class="tx-right tx-medium tx-danger">  <span class="'.$statusCSS.' text-white product-icon">'.$statusParam .'</span> </td>
											</tr>';
         
}
 
						  
				 	
				 
			 
					}
		   
	 
?>