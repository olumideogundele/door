 
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
    
    	 $query =  "SELECT  `id`, `code`, `truck_owner`, `commissiononfee`, `message`, `owners_share`, `loadme_share`, `customer`, `status`, `created_date`, `registeredby`, `amount`,`trip_status`,`cashed` FROM `transaction_information` WHERE (`status` = 2  OR `status` = 1)  ORDER BY `id` DESC LIMIT 5";
}
 else{
     
     	 $query =  "SELECT  `id`, `code`, `truck_owner`, `commissiononfee`, `message`, `owners_share`, `loadme_share`, `customer`, `status`, `created_date`, `registeredby`, `amount`,`trip_status`,`cashed` FROM `transaction_information` WHERE (`status` = 2  OR `status` = 1)  and `truck_owner` = '$emailing' ORDER BY `id` DESC LIMIT 5";
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
							 
		
		
 $statusCSS = "";
$statusParam = "";
if($trip_status == 1)
{
 $statusCSS = "bg-primary-gradient";
$statusParam = "Ongoing";
}			
else  if($trip_status == 2)
{
 $statusCSS = "bg-success-gradient";
$statusParam = "Completed";
}else  if($trip_status == 0)
{
 $statusCSS = "bg-success-gradient";
$statusParam = "Cancelled";
}
         
         
         
 		
	  $loading = $myName->showName($conn, "SELECT `loading` FROM `search_result` WHERE  `code` = '$code'"); 
	  $destination = $myName->showName($conn, "SELECT `destination` FROM `search_result` WHERE  `code` = '$code'"); 
	  $pick_up_date = $myName->showName($conn, "SELECT `pick_up_date` FROM `search_result` WHERE  `code` = '$code'"); 
	  $truck_id = $myName->showName($conn, "SELECT `truck_id` FROM `search_result` WHERE  `code` = '$code'"); 
	  $truck_plate_number = $myName->showName($conn, "SELECT `truck_plate_number` FROM `truck` WHERE  `id` = '$truck_id'"); 
	
 
       
		  echo '<li class="mt-0"> <i class="fa fa-truck '.$statusCSS.' text-white product-icon"></i> <span class="font-weight-semibold mb-4 tx-14 ">'.$loading.' - '.$destination.'</span> <a href="#" class="float-right tx-11 text-muted">'.$pick_up_date.'</a>
											<p class="mb-0 text-muted tx-12">'.$truck_plate_number.'</p>
										</li>';
         
          $counter++;
}
 
						  
				 	
				 
			 
					}
		   
	 
?>