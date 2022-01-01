<?php


include("header.php");
?><?php


include("header2.php");
include("includes/view-application-details-all.php");
 
?>  	<div class="col-xl-12">
							<div class="card mg-b-20">
								<div class="card-header pb-0">
									<div class="d-flex justify-content-between">
										<h4 class="card-title mg-b-0">All Subscribers Information</h4>
										<i class="mdi mdi-dots-horizontal text-gray"></i>
									</div>
									<p class="tx-12 tx-gray-500 mb-2">All Subscribers Information</p>
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
														<th>Name</th>
														<th>Account Number</th>
														<th>Phone</th>
														<th>Email</th>
														<th>Address</th>
														<th>UserType</th>
														<th>Created Date</th>
													 
                                                        <th>Status</th>
														<th>More</th>
													 
													</tr>
                                        </thead>
                                        <tbody>
                                         <?php
												include("includes/all-subscriber.php");
												
												?>
                                                
                                        </tbody>
                                        <tfoot>
                                           <tr>
														<th>Name</th>
														<th>Account Number</th>
														<th>Phone</th>
														<th>Email</th>
														<th>Address</th>
														<th>UserType</th>
														<th>Created Date</th>
													 
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