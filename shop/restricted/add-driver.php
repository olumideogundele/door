<?php


include("header.php");
?><?php


include("header2.php");


include("includes/view-driver-full.php");
$buttonName = "validate";
$buttonValue = "Submit Now";

 if(isset($_GET['id']))
	 {
	 
	$buttonName = "update";
$buttonValue = "Update Now";
												 
	 }
?>
			<!-- main-sidebar -->

				<!-- /main-header -->

			 
                        
                        
						 <div class="col-xl-12">
                        
                        <form     method="post"    autocomplete="off" action="" enctype="multipart/form-data">
    <div class="row row-sm">
         <div class="col-lg-6">
          <div class="card">
            <div class="card-header text-uppercase">Driver Information</div>
             <div class="card-body">
      
														
														 
											
										<div class="col-md-12">
                                            <div class="form-group">
                                             <?php
											include("includes/add-driver.php");
											
											?>    
												
												 <?php
											include("includes/update_column.php");
											include("includes/deleteclass.php");
											//deleteclass
											
											?>
                                            </div>
                                        </div>
										
                                         <div class="form-group overflow-hidden">
													<label>Driver First Name:</label>
 <input type="text" class="form-control" id="fname" placeholder="First Name" name="fname" value="<?php 	 if(isset($_GET['id']))
	 { echo $fname; } ?>">
		 </div>
				 
				 
				  <div class="form-group overflow-hidden">
													<label>Driver Last Name:</label>
 <input type="text" class="form-control" id="lname" placeholder="Driver Last Name" name="lname" value="<?php 	 if(isset($_GET['id']))
	 { echo $lname; } ?>">
		 </div>
				 
				  <div class="form-group overflow-hidden">
													<label>Driver Email:</label>
 <input type="email" class="form-control" id="email" placeholder="Driver Email" name="email" value="<?php 	 if(isset($_GET['id']))
	 { echo $email; } ?>">
		 </div>
											
				 <div class="form-group overflow-hidden">
													<label>Driver Phone Number (Mobile):</label>
 <input type="number"  maxlength="11" class="form-control" id="phone" placeholder="Phone Number" name="phone" value="<?php 	 if(isset($_GET['id']))
	 { echo $phone; } ?>">
		 </div> 
				 
				 
				 <div class="form-group overflow-hidden">
													<label>Driver License Number (L/NO):</label>
 <input type="text"  maxlength="100" class="form-control" id="license" placeholder="Driver License Number" name="license" value="<?php 	 if(isset($_GET['id']))
	 { echo $license; } ?>">
		 </div>
				 
				 	 
				 <div class="form-group overflow-hidden">
													<label>Drivers Licence Expiry</label>
 <div class="row row-sm">
										<div class="input-group col-md-12">
											<div class="input-group-prepend">
												<div class="input-group-text">
													<i class="typcn typcn-calendar-outline tx-24 lh--9 op-6"></i>
												</div>
 </div><input class="form-control fc-datepicker" placeholder="MM/DD/YYYY" name="license_expiry"  id="license_expiry" type="text"    value="<?php 	 if(isset($_GET['id'])){ echo $license_expiry; } ?>" >
										</div>
									</div>
									</div>
				 
				 
	
		 
   
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="card">
            
            <div class="card-header"> **Allowed formats & size: JPEG, PNG, JPG, DOC, DOCX, PDF and must not be more than 1MB)</div>
            <div class="card-body">
                   <div class="form-group overflow-hidden">
													<label>Upload Driver Passport Photo:</label>
 <input type="file" class="form-control" id="password" name="passport" placeholder="Upload Driver Passport Photo" value="<?php 	 if(isset($_GET['id']))
	 { echo $password;} ?>" required>
												</div> 
				
				<div class="form-group overflow-hidden">
													<label>Upload Driver License (Front View):</label>
 <input type="file" class="form-control" id="front_view" name="front_view" placeholder="Upload Driver License (Front View)" value="<?php 	 if(isset($_GET['id']))
	 { echo $inst_acct_num;} ?>" required>
												</div>
				
				
				<div class="form-group overflow-hidden">
													<label>Upload Driver License (Back View):</label>
 <input type="file" class="form-control" id="back_view" name="back_view" placeholder="Upload Driver License  (Back View)" value="<?php 	 if(isset($_GET['id']))
	 { echo $back_view;} ?>" required>
												</div>
				
		 
                        
													<div class="card-body">
                                    <div class="action-form">
                                        <div class="form-group m-b-10 text-center">
                                        <button  type="submit" name="validate" class="btn btn-lg btn-primary m-b-5 m-t-5">
													
													 <?php
	 if(isset($_GET['id']))
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
            </div>
        
          </div>
        </div>
      </div><!--End Row-->

		    </form>
                
                </div>
						 
                
                
                
                
                
                
                
						<div class="col-xl-12">
							<div class="card mg-b-20">
								<div class="card-header pb-0">
									<div class="d-flex justify-content-between">
										<h4 class="card-title mg-b-0">Drivers Information</h4>
										<i class="mdi mdi-dots-horizontal text-gray"></i>
									</div>
									<p class="tx-12 tx-gray-500 mb-2">All Driver Information</p>
								</div>
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