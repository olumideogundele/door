 
<?php
include ("config/DB_config.php"); 
$counter = 0;
$active= "active";
$userT = "";
$usernameT = "";
 $myName = new Name();

 if(isset($_SESSION['email']))
 {
$emailing  = $_SESSION['email'];
 }

 
$super = $myName->showName($conn, "SELECT `super` FROM `user_unit` WHERE `account_number` = '$emailing'");

 
	 if($super == 1)
	 {
		$query12 =  "SELECT `id`, `amount`, `registeredby`, `status`, `created_at`, `updated_at`, `wallet_no` FROM `wallet` WHERE  `status` = 1";	 
		 
	 }
else
{
	$query12 =  "SELECT `id`, `amount`, `registeredby`, `status`, `created_at`, `updated_at`, `wallet_no` FROM `wallet` WHERE  `status` = 1 AND `registeredby` = '$emailing'";	 
	
}
	 



 $extract_distance12= mysqli_query($conn, $query12) or die(mysqli_error($conn));
		$count12 = mysqli_num_rows($extract_distance12);
    if ($count12 > 0)
		  {
 	 while ($row_distance12=mysqli_fetch_row($extract_distance12))
    {
  						  	$id =$row_distance12[0];
		 					$amount =$row_distance12[1];
		 					$registeredby =$row_distance12[2];
						   	$status =$row_distance12[3];
		 					$created_at =$row_distance12[4];
		 					$updated_at =$row_distance12[5];
		 					$wallet_no =$row_distance12[6];
					  	  		 
		
 
		$department = $myName->showName($conn, "SELECT  `name` FROM `mda` WHERE `id` = '$wallet_no'"); 
	 
				  
		 
		 
		 
		 echo ' <div class="col-12 col-lg-6 col-xl-3">
         <div class="card gradient-ohhappiness">
           <div class="card-body">
              <h5 class="text-white mb-0">
			 
			 '.number_format($amount,2).'
				  
			  
				  
				  <span class="float-right"><i class="fa fa-user-secret"></i></span></h5>
                <div class="progress my-3" style="height:3px;">
                   <div class="progress-bar" style="width:55%"></div>
                </div>
             <a href=""> <p class="mb-0 text-white small-font">Wallet '.$department.'<span class="float-right">(+/-)<i class="zmdi zmdi-long-arrow-up"></i></span></p></a>
            </div>
         </div>
       </div>';
		 
		 
	 
		  
	 
}
 
						  
				 	
				 
			 
					}
else
{
	
	///echo '<meta http-equiv="Refresh" content="0; url= all-my-accessed-files.php"> ';
}
		   
	 
?>