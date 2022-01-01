 
<?php
include ("config/DB_config.php"); 
$counter = 0;
$active= "active";
$userT = "";
$usernameT = "";
 $myName = new Name();
 if(isset($_SESSION['email']))
 {
 $emailing = $_SESSION['email'];
	   
 }
 
 
	 
	 $query12 =  "SELECT `id`, `created_at`, `code`,`title`,`registeredby` FROM `notification` WHERE (`sent_to` = '$emailing' or `sent_to` = 'all')  AND (`read_status` = 1) ORDER BY `id` DESC LIMIT 6";	



 $extract_distance12= mysqli_query($conn, $query12) or die(mysqli_error($conn));
		$count12 = mysqli_num_rows($extract_distance12);
    if ($count12 > 0)
		  {
 	 while ($row_distance12=mysqli_fetch_row($extract_distance12))
    {
  						  	$id =$row_distance12[0];
		 					$created_date =$row_distance12[1];
		 					$code =$row_distance12[2];
						   	$title =$row_distance12[3];
		 					$registered_by =$row_distance12[4];
					  	  		 
		
 
		$name = $myName->showName($conn, "SELECT  `name` FROM `user_unit` WHERE `account_number` = '$registered_by'"); 
	 
		
         
         
         echo '<a href="notification-details.php?value='.$code.'" class="p-3 d-flex border-bottom">
												 
												<div class="wd-90p">
													<div class="d-flex">
														<h5 class="mb-1 name"><strong>'.$name.'</strong></h5>
													</div>
													<p class="mb-0 desc">'.$title.'</p>
													<p class="time mb-0 text-left float-left ml-2 mt-2">'.$created_date.'</p>
												</div>
											</a>';
		 
		 
		/* echo ' <li class="list-group-item">
          <a href="notification-details.php?value='.$code.'">
           <div class="media">
             <i class="zmdi zmdi-accounts fa-2x mr-3 text-info"></i>
            <div class="media-body">
            <h6 class="mt-0 msg-title">'.$name.'</h6>
            <p class="msg-info">'.$title.'</p>
            </div>
          </div>
          </a>
          </li>';
		 */
		 
	 
		  
	 
}
 
						  
				 	
				 
			 
					}
else
{
	
	  echo '<a href="#" class="p-3 d-flex border-bottom">
											 
												<div class="wd-90p">
													<div class="d-flex">
														<h5 class="mb-1 name">No Recent Message</h5>
													</div>
													<p class="mb-0 desc">No Unread Message Yet</p>
													<p class="time mb-0 text-left float-left ml-2 mt-2">'.$datetime.'</p>
												</div>
											</a>';
}
		   
	 
?>