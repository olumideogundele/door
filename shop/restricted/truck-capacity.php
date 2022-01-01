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
											include("includes/truck-capacity-process.php");
											
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
										<h4 class="card-title mg-b-0">Truck Type SetUp</h4>
										<i class="mdi mdi-dots-horizontal text-gray"></i>
									</div>
									<p class="tx-12 tx-gray-500 mb-2">Truck Type Information</p>
								</div>
								<div class="card-body">
                        
                        <form     method="post"    autocomplete="off" action="" enctype="multipart/form-data">
														
														 
											<div class="form-group overflow-hidden">
													<label>Truck Type:</label>
<select class="form-control   select2" name="truck_type" id="truck_type" required>
												  
    
    											 
    <?php 	 if(isset($_GET['id']))
	 { 

echo '<option value='.$truck_type.'>'.$truck_type.'</option>';	
} ?>
    
    
    <option value=''>Select One</option>
 
												   
										     <?php
	 include("restricted/config/DB_config.php");
	 
	 
	 $query =  "SELECT  `id`, `name` FROM `truck_type`  WHERE `status` = 1 ORDER BY `name` ASC";	
 $extract_distance = mysqli_query($conn, $query) or die(mysqli_error($conn));
		$count = mysqli_num_rows($extract_distance);
    if ($count > 0)
		  {
 	 while ($row_distance=mysqli_fetch_row($extract_distance))
    {
  						  $id=$row_distance[0];
		  $name=$row_distance[1];
		
	 
					 
					  
					  
				echo '<option value='.$id.'>'.$name.'</option>';	
				
				  
	}
	
		  }
	 
	 
	 ?>
	
	 
												   
									 
                                </select>
		 </div>
										
										
                                         <div class="form-group overflow-hidden">
													<label>Truck Size:</label>
 <input type="text" class="form-control" id="exampleInputuname_1" placeholder="Truck Size" name="size" value="<?php 	 if(isset($_GET['value']))
	 { echo $size; } ?>" c>
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
										<h4 class="card-title mg-b-0">Truck Type Information</h4>
										<i class="mdi mdi-dots-horizontal text-gray"></i>
									</div>
									<p class="tx-12 tx-gray-500 mb-2">Truck Type Information</p>
								</div>
								<div class="card-body">
									<div class="table-responsive">
										<table id="example" class="table key-buttons text-md-nowrap">
										 <thead>
                                            <tr>
														<th>Name</th>
														<th>Capacity</th>
														 
														 
														<th>Created Date</th>
												 	   
												 	   <th>Registered By</th>
												<th>Status</th>
														<th>More</th>
													 
													</tr>
                                        </thead>
                                        <tbody>
                                         <?php
												include("includes/view-truck-capacity.php");
												
												?>
                                                
                                        </tbody>
                                        <tfoot>
                                           <tr>
													<th>Name</th>
													<th>Capacity</th>
														 
														 
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
 
 

			<?php
            
            
            include("footer.php");
            ?>