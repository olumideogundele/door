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
											include("includes/update_column.php");
											include("includes/deleteclass.php");
											//deleteclass
											
											?>
                                            </div>
                                        </div>
                        
						 	<div class="col-xl-12">
					 
						<div class="col-xl-12">
							<div class="card mg-b-20">
								<div class="card-header pb-0">
									<div class="d-flex justify-content-between">
										<h4 class="card-title mg-b-0">User Information  </h4>
										<i class="mdi mdi-dots-horizontal text-gray"></i>
									</div>
									<p class="tx-12 tx-gray-500 mb-2">All User Information</p>
								</div>
								<div class="card-body">
									<div class="table-responsive">
										<table id="example" class="table key-buttons text-md-nowrap">
										 <thead>
                                               <tr>
														<th>Name</th>
												  
														<th>Phone</th>
														<th>Email</th>
														<th>Address</th>
												    
														<th>Designation</th>
														<th>UserType</th>
														<th>Created Date</th>
														<th>Registered  By</th>
                                                        <th>Status</th>
														<th>More</th>
													 
													</tr>
                                        </thead>
                                        <tbody>
                                         <?php
												include("includes/view-user-unit.php");
												
												?>
                                                
                                        </tbody>
                                        <tfoot>
                                         <tr>
														<th>Name</th>
												 
														<th>Phone</th>
														<th>Email</th>
														<th>Address</th>
											 
											 			<th>Designation</th>
														<th>UserType</th>
														<th>Created Date</th>
														<th>Registered  By</th>
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