<?php


include("header.php");
 
?><?php


include("header2.php");

include("includes/view-application-details-all.php");
?>
 


			<!-- main-sidebar -->

				<!-- /main-header -->

			 
                       <div class="col-md-12">
                                            <div class="form-group">
                                             <?php
											include("includes/payment-settlement-process.php");
											
											?>    
												
												 <?php
											include("includes/update_column.php");
											include("includes/deleteclass.php");
											//deleteclass
											
											?>
                                            </div>
                                        </div>
                        
						 	<div class="col-xl-12">
							<div class="card mg-b-20">
								<div class="card-header pb-0">
									<div class="d-flex justify-content-between">
										<h4 class="card-title mg-b-0">Payment Settlement For LoadMe</h4>
										<i class="mdi mdi-dots-horizontal text-gray"></i>
									</div>
									<p class="tx-12 tx-gray-500 mb-2">Payment Settlement For LoadMe</p>
								</div>
								<div class="card-body">
                        
                        <form     method="post"    autocomplete="off" action="" enctype="multipart/form-data">
														
														 
										 <div class="form-group overflow-hidden">
													<label>Truck Owners:</label>
<select class="form-control   select2" name="truck_owners" id="truck_owners" required>
												  
    
    											 
    <?php 	 if(isset($_GET['id']))
	 { 

echo '<option value='.$truck_type.'>'.$truck_type.'</option>';	
} ?>
    
    
    <option value=''>Select One</option>
 
												   
										     <?php
	 include("restricted/config/DB_config.php");
	 
	 
	 $query =  "SELECT  `id`, `name`, `account_number` FROM `user_unit`  WHERE `status` = 1 AND  `usertype` = 2  ORDER BY `name` ASC";	
 $extract_distance = mysqli_query($conn, $query) or die(mysqli_error($conn));
		$count = mysqli_num_rows($extract_distance);
    if ($count > 0)
		  {
 	 while ($row_distance=mysqli_fetch_row($extract_distance))
    {
  						  $id=$row_distance[0];
		  $name=$row_distance[1];
		  $account_number=$row_distance[2];
		
	 
					 
					  
					  
				echo '<option value='.$account_number.'>'.$name.' | '.$account_number.'</option>';	
				
				  
	}
	
		  }
	 
	 
	 ?>
	
	 
												   
									 
                                </select>
		 </div>
		   <div class="form-group overflow-hidden">
													<label>Amount In Percentage:</label>
 <input type="number" class="form-control" id="exampleInputuname_1" placeholder="Amount In Percentage" name="percentage" value="<?php 	 if(isset($_GET['value']))
	 { echo $name; } ?>" required>
												</div>
											  
                           
 <div class="card-body">
                                    <div class="action-form">
                                        <div class="form-group m-b-10 text-center">
                                        <button  type="submit" name="validate" class="btn btn-lg btn-primary m-b-5 m-t-5">
													
													 <?php
	 if(isset($_GET['value']))
	 {
	 
	 echo "Update Now";
												 
	 }
													else
													{
														
												echo "Submit Now"		;
														
													}
													?>
													 </button>
                                            <button type="reset" class="btn btn-dark waves-effect waves-light">Cancel</button><br>
<br>

                                        </div>
                                    </div>
                                </div>	
													
													</form>
                
                </div>
                </div>
						 
                
                
                
                
                
                
                
						<div class="col-xl-12">
							<div class="card mg-b-20">
								<div class="card-header pb-0">
									<div class="d-flex justify-content-between">
										<h4 class="card-title mg-b-0">Payment Settlement For LoadMe</h4>
										<i class="mdi mdi-dots-horizontal text-gray"></i>
									</div>
									<p class="tx-12 tx-gray-500 mb-2">Payment Settlement For LoadMe</p>
								</div>
								<div class="card-body">
									<div class="table-responsive">
										<table id="example" class="table key-buttons text-md-nowrap">
										 <thead>
                                            <tr>
														<th>Truck Owner</th>
														<th>Percentage</th>
														
														 
														 
														<th>Created Date</th>
												 	   
												 	   <th>Registered By</th>
												<th>Status</th>
														<th>More</th>
													 
													</tr>
                                        </thead>
                                        <tbody>
                                         <?php
												include("includes/view-payment-settlement-details.php");
												
												?>
                                                
                                        </tbody>
                                        <tfoot>
                                            <tr>
														<th>Truck Owner</th>
														<th>Percentage</th>
														
														 
														 
														<th>Created Date</th>
												 	   
												 	   <th>Registered By</th>
												<th>Status</th>
														<th>More</th>
													 
													</tr>
                                        </tfoot>
										</table>
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
			<!-- main-content closed -->
 


 


 
				   <!-- modal -->

			<?php
            
            
            include("footer.php");
            ?>