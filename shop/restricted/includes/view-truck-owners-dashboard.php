 
<?php
include ("config/DB_config.php"); 
 $myName = new Name();
 if(isset($_SESSION['email']))
 {
 $emailing = $_SESSION['email'];
 }
 
 $counter = 1;
 
	 $query =  "SELECT `id`, `name`, `account_number`, `phone`, `email`, `address`, `usertype`,`created_date`, `registeredby`, `status`,`irrelivant` ,`designation`, `file` FROM `user_unit` WHERE    `usertype` = '2'   ORDER BY `id` DESC LIMIT 5";
	
 

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
							$designation  =$row_distance[11];
							$file  =$row_distance[12];
		
		
		
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
		 else  if($status == 3)
{
 $statusCSS = "badge badge-danger m-b-5";
$statusParam = "Blocked";
}		 else  if($status == 2)
{
 $statusCSS = "badge badge-warning m-b-5";
$statusParam = "Pending";
}
 		
	 
 
       
		 
		 
		$registeredby = $myName->showName($conn, "SELECT `name` FROM  `user_unit` WHERE `account_number` = '$registeredby'");  	
		  $driver_id = 	strtr(base64_encode($id), '+/=', '-_,');
   
         
         if(empty($file))
         {
             
             $file = "../assets/img/faces/6.jpg";
         }
           
		 
echo '<div class="list-group-item list-group-item-action" href="#">
											<div class="media mt-0">
											<a  href="truck-owner-profile?id='.$driver_id.'">	<img class="avatar-lg rounded-circle mr-3 my-auto" src="'.$file.'" alt=""></a>
												<div class="media-body">
													<div class="d-flex align-items-center">
														<div class="mt-0">
															<h5 class="mb-1 tx-15">'.$name.'</h5>
															<p class="mb-0 tx-13 text-muted">User ID: '.$account_number.' 
                                                            <span class="text-success ml-2"> <span class="'.$statusCSS.'">'.$statusParam.' </span></span></p>
														</div>
														<span class="ml-auto wd-45p fs-16 mt-2">
															<div id="spark'.$counter.'" class="wd-100p"></div>
														</span>
													</div>
												</div>
											</div>
										</div>';	 
	 
         
          $counter++;
}
 
						  
				 	
				 
			 
					}
		   
	 
?>