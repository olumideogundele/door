 
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
 
 
	 
	 $query12 =  "SELECT `id`, `created_at`, `code`,`title`,`registeredby` FROM `notification` WHERE `sent_to` = '$emailing' or `sent_to` = 'all' ORDER BY `id` DESC";	



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
         
         
         
         echo '<div class="main-mail-item unread">
											<div class="main-mail-checkbox">
												<label class="ckbox"><input type="checkbox"> <span></span></label>
											</div>
											<div class="main-mail-star">
												<i class="typcn typcn-star"></i>
											</div>
										 
											<div class="main-mail-body">
												<div class="main-mail-from">
												  <a href="notification-details?value='.$code.'">	'.$name.'</a>
												</div>
												<div class="main-mail-subject">
													<strong>  <a href="notification-details?value='.$code.'">'.$title.'</a></strong><br>
<span>'.$title.'</span>
												</div>
											</div>
											 
											<div class="main-mail-date">
												'.$created_date.'
											</div>
										</div>';
         
         
         
		 
	 
		  
	 
}
 
						  
				 	
				 
			 
					}
else
{
	
	 echo '<div class="main-mail-item unread">
											<div class="main-mail-checkbox">
												<label class="ckbox"><input type="checkbox"> <span></span></label>
											</div>
											<div class="main-mail-star">
												<i class="typcn typcn-star"></i>
											</div>
											<div class="main-img-user"><img alt="" src="../assets/img/faces/5.jpg"></div>
											<div class="main-mail-body">
												<div class="main-mail-from">
												No email/notification  yet
												</div>
												<div class="main-mail-subject">
													<strong>No email/notification  yet</strong> <span>Check back soon</span>
												</div>
											</div>
											 
											<div class="main-mail-date">
										 ---------
											</div>
										</div>';
}
		   
	 
?>