 <?php


include("header.php");
?>
	 <?php


include("header2.php");
include("includes/owner-order-details.php");

$super = $myName->showName($conn, "SELECT  `super` FROM `user_unit` WHERE `account_number` = '$emailing'"); 
?>
		 
				<!-- /main-header -->
  <div class="col-xl-12">
                        
                        
    <div class="row row-sm">
        <div class="col-xl-12">
          <div class="card">
            <div class="card-header text-uppercase">View Order Information</div>
             <div class="card-body">
				<!-- container -->
				<div class="container-fluid">

                             <?php
											include("includes/update_column.php");
											include("includes/deleteclass.php");
											//deleteclass
											
											?>
					<!-- breadcrumb -->
					<div class="breadcrumb-header justify-content-between">
						<div class="my-auto">
							<div class="d-flex">
								<h4 class="content-title mb-0 my-auto">View Order Information</h4><span class="text-muted mt-1 tx-13 ml-2 mb-0">/</span>
							</div>
						</div>
						<div class="d-flex my-xl-auto right-content">
							<!--<div class="pr-1 mb-xl-0">
								<button type="button" class="btn btn-info btn-icon mr-2"><i class="mdi mdi-filter-variant"></i></button>
							</div>
							<div class="pr-1 mb-xl-0">
								<button type="button" class="btn btn-danger btn-icon mr-2"><i class="mdi mdi-star"></i></button>
							</div>
							<div class="pr-1 mb-xl-0">
								<button type="button" class="btn btn-warning  btn-icon mr-2"><i class="mdi mdi-refresh"></i></button>
							</div>-->
                               <div class="btn-group">
														<div class="dropdown">
															<button aria-expanded="false" data-toggle="dropdown" class="btn btn-info dropdown-toggle " type="button">More <span class="caret"></span></button>
															<ul role="menu" class="dropdown-menu">
																 <?php echo $value; ?>
															 
																
															</ul>
														</div>
													</div>
                            
							  
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
                                                
						</div>
					</div>
					<!-- breadcrumb -->

					<!-- Gallery -->
					 
					<!-- row closed -->
				</div>
				<!-- Container closed -->
                 <div class="col-xl-12">
          <div class="card">
            <div class="card-header text-uppercase">View Truck Information</div>
             <div class="card-body">
				<!-- container -->
				<div class="container-fluid">

					 <div class="table-responsive">
										<table id="example2" class="table key-buttons text-md-nowrap">
										 <thead>
                                            <tr>
												
 
 
  		   
												 
														<th>Truck Owner Name</th>
														<th><?php echo $truck_owner_name; ?></th>
														  
												 
													 
													</tr><tr>
												
 
 
  		   
												 
														<th>Truck Owner Phone</th>
														<th><?php echo $truck_owner_phonee; ?></th>
														  
												 
													 
													</tr>
                                             <tr>
												
 
 
  		   
												 
														<th>Truck Owner Email</th>
														<th><?php echo $truck_owner_email; ?></th>
														  
												 
													 
													</tr>
                                        </thead>
                                        <tbody>
                                         <tr>
											 <td>Subscriber's Name</td>
														<td><?php echo $sub_name; ?></td>
												 </tr> 
                                             <tr>
											 <td>Subscriber's Phone</td>
														<td><?php echo $sub_phonee; ?></td>
												 </tr> 
                                             <tr>
											 <td>Subscriber's Email</td>
														<td><?php echo $sub_email; ?></td>
												 </tr> 
                                            
                                             <tr>
											 <td>Driver's Name</td>
														<td><?php echo $driver_name; ?></td>
												 </tr> 
                                             <tr>
											 <td>Driver's Phone</td>
														<td><?php echo $driver_phonee; ?></td>
												 </tr> 
                                             <tr>
											 <td>Driver's Email</td>
														<td><?php echo $driver_phonee; ?></td>
												 </tr> 
                                            
                                            
                                            
                                            
                                            
                                            <tr>
											 <td>Loading</td>
														<td><?php echo $loading; ?></td>
												 </tr> 
                                            <tr>
											 <td>Destination</td>
														<td><?php echo $destination; ?></td>
												 </tr><tr>
											 <td>Product</td>
														<td><?php echo $product; ?></td>
												 </tr>
                                            <tr>
											 <td>Truck Type</td>
														<td><?php echo $truck_type; ?></td>
												 </tr>
                                            <tr>
											 <td>Truck Capacity</td>
														<td><?php echo $total_capacity; ?></td>
												 </tr>
                                            <tr>
											 <td>Truck Plate Number</td>
														<td><?php echo $truck_plate_number; ?></td>
												 </tr>
                                            <tr>
											 <td>Truck Plate Number</td>
														<td><?php echo $truck_type; ?></td>
												 </tr>
                                            <tr>
											 <td>Driver</td>
														<td><?php echo $driver_name; ?></td>
												 </tr>
                                             <tr>
											 <td>Pick Up Date</td>
														<td><?php echo $pick_up_date; ?></td>
												 </tr>
                                             <tr>
											 <td>Amount</td>
														<td><?php echo number_format($amount,2); ?></td>
												 </tr>
                                           
                                               <tr>
											 <td colspan="2"><span class="<?php echo $statusCSS; ?>"><?php echo $statusParam; ?></span>  </td>
														 
												 </tr>
                                
                                            
                                        </tbody>
                                          
										</table>
									</div>
					<!-- row closed -->
				</div>
				<!-- Container closed -->
			</div>
			</div>
			</div>
			</div>
			</div>
			</div>







			</div>
			</div>
			<!-- main-content closed -->

			 
<?php
            
            
            include("footer.php");
            ?>