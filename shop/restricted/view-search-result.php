<?php


include("header.php");
 
?><?php


include("header2.php");
 
?>
			<!-- main-sidebar -->

				<!-- /main-header -->

			 
                        <div class="col-md-12">
                                            <div class="form-group">
                                    
                                    
												
												 <?php
											//include("includes/update_column.php");
											//include("includes/deleteclass.php");
											//deleteclass
											
											?>
                                            </div>
                                        </div>
                        
						 	<div class="col-xl-12">
			 
						<div class="col-xl-12">
							<div class="card mg-b-20">
								<div class="card-header pb-0">
									<div class="d-flex justify-content-between">
										<h4 class="card-title mg-b-0">Order/Search Information</h4>
										<i class="mdi mdi-dots-horizontal text-gray"></i>
									</div>
									<p class="tx-12 tx-gray-500 mb-2">Order/Search Information</p>
								</div>
								<div class="card-body">
									<div class="table-responsive">
										<table id="example" class="table key-buttons text-md-nowrap">
										 <thead>
                                            <tr>
               
                                                
                                                <?php
 if(isset($_GET["columnValue"]))
{
  $myName = new Name();
	$columnValue = $_GET["columnValue"];
	$id = $_GET["id"];
     
      $registeredby_by = $myName->showName($conn, "SELECT  `registeredby` FROM `search_result` WHERE `id` = '$id'"); 
      $truck_id = $myName->showName($conn, "SELECT  `truck_id` FROM `search_result` WHERE `id` = '$id'"); 
      $code = $myName->showName($conn, "SELECT  `code` FROM `search_result` WHERE `id` = '$id'"); 
      $customer_name = $myName->showName($conn, "SELECT  `name` FROM `user_unit` WHERE `account_number` = '$registeredby_by'"); 
      $customer_phone = $myName->showName($conn, "SELECT  `phone` FROM `user_unit` WHERE `account_number` = '$registeredby_by'"); 
      $customer_email = $myName->showName($conn, "SELECT  `email` FROM `user_unit` WHERE `account_number` = '$registeredby_by'"); 
     
        
  $query =  "UPDATE  `search_result`  SET `status` = '$columnValue' WHERE `id` = '$id'";
 
  $extract_distance = mysqli_query($conn, $query) or die(mysqli_error($conn));		
    
     
     if($extract_distance)
     {
         
         
     if($columnValue ==  3)
     {
           
$message = "Hi ".$customer_name.",
Truck Booking Request!
Order ID:".$code.".
was rejected by the Truck Owner";
 $Sending = new SendingSMS(); 
         
         //echo $message;
  							 
						$Sending->smsAPI($customer_phone,"Loadme",$message);
         
 $sqlnot ="INSERT INTO `notification`(`code`,`title`,`message`, `registeredby`, `sent_to`, `status`, `read_status`, `created_at`, `truck_id`) VALUES
('$code','Truck Booking Request!','$message','$emailing', '$registeredby_by', '1', '1','$datetime', '$truck_id')";
  $extract_distance = mysqli_query($conn, $sqlnot) or die(mysqli_error($conn));    
         
         
     }else if($columnValue == 4)
     {
         
                
$message = "Hi ".$customer_name.",
Truck Booking Request!
Order ID:".$code.".
was accepted by the Truck Owner.
Please proceed to payment on your dashboard.
Thank You.";
 $Sending = new SendingSMS(); 
  							 
						$Sending->smsAPI($customer_phone,"Loadme",$message);
         
 $sqlnot ="INSERT INTO `notification`(`code`,`title`,`message`, `registeredby`, `sent_to`, `status`, `read_status`, `created_at`, `truck_id`) VALUES
('$code','Truck Booking Request!','$message','$emailing', '$registeredby_by', '1', '1','$datetime', '$truck_id')";
  $extract_distance = mysqli_query($conn, $sqlnot) or die(mysqli_error($conn));                                                  
         
     }
                                                    
               
     }
     else
     {
         
         
          echo'<a href="#" class="btn btn-danger btn-lg">Error Occured. Please contact admin.</a>';	
     }
    
                                          
                                                    
 }
               

                                                
                                                
                                                
                                                ?>
                                                
                                                
                                                
                                                
          
                        <th>Order ID</th>
                        <th>Pick Up</th>
                        <th>Destination</th>
                        <th>Product</th>
                        <th>Truck Details</th>
                         <th>Amount</th>
                         
                         <th>Date</th>
                  <th>Status</th>
                       <th>More</th>
                    </tr>
                                        </thead>
                                        <tbody>
                                        <?php
										include("includes/owner-search-history.php");
										
										?>
                                                
                                        </tbody>
                                        <tfoot>
                                           <tr>
               
          
                        <th>Order ID</th>
                        <th>Pick Up</th>
                        <th>Destination</th>
                        <th>Product</th>
                        <th>Truck Details</th>
                         <th>Amount</th>
                        
                         <th>Date</th>
                   <th>Status</th>
                   <th>More</th>
                    </tr>
                                        </tfoot>
										</table>
									</div>
								</div>
								</div>
							</div>
						</div>
						<!--/div-->

						<!--div-->
						 
					</div>
					<!-- /row -->
				</div>
				<!-- Container closed -->
			</div>
 

			<?php
            
            
            include("footer.php");
            ?>