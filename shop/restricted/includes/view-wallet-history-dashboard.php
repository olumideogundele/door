 
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
	
 
	
	
	
	// $query =  "SELECT `id`, `amount`, `account_number`, `registeredby`, `status`, `created_date`, `updated_at`, `tcode`, `remark`  FROM  `e_wallet_trend`  WHERE `account_number` = '$emailing' ORDER BY `id` DESC";
	
	$query =  "SELECT  `id`, `amount`, `account_number` FROM `e_wallet` WHERE  `status`  = 1  AND `account_number` = '$emailing' ORDER BY `id` ASC";	
	
}
else
{
	
	// $query =  "SELECT `id`, `amount`, `account_number`, `registeredby`, `status`, `created_date`, `updated_at`, `tcode`, `remark`  FROM  `e_wallet_trend` ORDER BY `id` DESC";	
	$query =  "SELECT  `id`, `amount`, `account_number` FROM `e_wallet` WHERE  `status`  = 1 ORDER BY `id` ASC";	
	
}







 $extract_distance = mysqli_query($conn, $query) or die(mysqli_error($conn));
		$count = mysqli_num_rows($extract_distance);
    if ($count > 0)
		  {
 	 while ($row_distance=mysqli_fetch_row($extract_distance))
    {
  						  	$id =$row_distance[0];
						   	$amount =$row_distance[1];
					  	   $account_number =$row_distance[2];
						  
 
 		 
	  $amountS = $myName->showName($conn, "SELECT sum(`amount`) FROM `e_wallet_trend` WHERE `status` = 1"); 
		$name = $myName->showName($conn, "SELECT `name` FROM `user_unit` WHERE `account_number` = '$account_number'");
		 
		 
		 echo '  <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3>'.thousandsCurrencyFormat($amount) .'/<sup style="font-size: 20px"> '. number_format($amountS) .' </sup></h3>

              <p>'.$name.'\'s Wallet Info</p>
            </div>
            <div class="icon">
              <i class="fa fa-google-wallet"></i>
            </div>
            <a href="all-wallet-report.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>';
		 
		 
		 
		 
		 
	  
	 
}
 
						  
				 	
				 
			 
					}
		   
	 
?>