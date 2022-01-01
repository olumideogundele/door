<?php


include("header.php");
?><?php


include("header2.php");
 
?>  	<div class="col-xl-12">
							<div class="card mg-b-20">
								<div class="card-header pb-0">
									<div class="d-flex justify-content-between">
										<h4 class="card-title mg-b-0">Drivers Information</h4>
										<i class="mdi mdi-dots-horizontal text-gray"></i>
									</div>
									<p class="tx-12 tx-gray-500 mb-2">All Driver Information</p>
								</div>
                                	 <?php
											include("includes/update_column.php");
											include("includes/deleteclass.php");
											 
											
											?>
								<div class="card-body">
									<div class="table-responsive">
										<table id="example" class="table key-buttons text-md-nowrap">
										 <thead>
                                            <tr>
												
 
  		   
												 
														<th>Driver's Name</th>
														<th>Truck Owner's Name</th>
														<th>Driver's Email</th>
														<th>Driver's Phone</th>
														<th>License</th>
														<th>License  Expiry</th>
														 
														<th>Created Date</th>
												 	   
												 	 
												<th>Status</th>
														<th>More</th>
												 </td>
													 
													</tr>
                                        </thead>
                                        <tbody>
                                         <?php
												include("includes/view-driver.php");
												
												?>
                                                
                                        </tbody>
                                        <tfoot>
                                            <tr>
												
 															<th>Driver's Name</th>
														<th>Truck Owner's Name</th>
														<th>Driver's Email</th>
														<th>Driver's Phone</th>
														<th>License</th>
														<th>License  Expiry</th>
														 
														<th>Created Date</th>
												 	   
												 	 
												<th>Status</th>
														<th>More</th>
												 </td>
													 
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