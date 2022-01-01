 <?php


include("header.php");
?>
	 <?php


include("header2.php");
include("includes/view-driver-full.php");

$super = $myName->showName($conn, "SELECT  `super` FROM `user_unit` WHERE `account_number` = '$emailing'"); 
?>
		 
				<!-- /main-header -->

				<!-- container -->
				<div class="container-fluid">

					<!-- breadcrumb -->
					<div class="breadcrumb-header justify-content-between">
						<div class="my-auto">
							<div class="d-flex">
								<h4 class="content-title mb-0 my-auto">View Truck Pictures</h4><span class="text-muted mt-1 tx-13 ml-2 mb-0">/ Gallery</span>
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
                            
                            
                             <?php
											include("includes/update_column.php");
											include("includes/deleteclass.php");
											//deleteclass
											
											?>
							<div class="mb-xl-0">
								<div class="btn-group dropdown">
									<button type="button" class="btn btn-primary">Action</button>
									<button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" id="dropdownMenuDate" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									<span class="sr-only">Toggle Dropdown</span>
									</button>
									<div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuDate" data-x-placement="bottom-end">
										<?php
                                        
                                         
 if($super == '1' or $super == 1)
							{
	 
 
	 
	 
	 
	  $right = '  
												
												
												<a class="dropdown-item" onClick="return confirm(\'Are you sure you want to delete?\')" href="?table=truck&del='.$id.'">Delete</a> 
                                             <a  class="dropdown-item"   onClick="return confirm(\'Are you sure you want to update?\')" href="?table=truck&id='.$id.'&columnValue=1&column=status">Activate</a> 	
											  
											  
											   <a class="dropdown-item"  onClick="return confirm(\'Are you sure you want to update?\')" href="?table=truck&id='.$id.'&columnValue=0&column=status"> Deactivate</a>  
											   
											   
												<a class="dropdown-item" onClick="return confirm(\'Are you sure you want to view?\')" href="view-truck?id='.$truck_id.'">Details</a> 
													
												 ';
 }
else
{
	
	
 
	
	 $right = '  
												
												
												<a class="dropdown-item" onClick="return confirm(\'Are you sure you want to delete?\')" href="?table=truck&del='.$id.'">Delete</a> 
                      
											 
													
												<a class="dropdown-item" onClick="return confirm(\'Are you sure you want to view?\')" href="view-truck?id='.$truck_id.'">Details</a> 
                      
													
												 ';
	
}
                                        
                                        ?>
                                        
                                        
                                        
                                        
                                        
                                        <?php
                                        
                                        echo $right;
                                        
                                        ?>
                                        
                                         
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- breadcrumb -->

					<!-- Gallery -->
					<div class="demo-gallery">
						<ul id="lightgallery" class="list-unstyled row row-sm">
                            
                           
                            
                            
                            
							<li class="col-sm-6 col-lg-4" data-responsive="<?php echo $calibration_chart; ?>" data-src="<?php echo $calibration_chart; ?>" data-sub-html="<h4>Calibration Chart</h4>" >
								<a href="">
									<img class="img-responsive" src="<?php echo $calibration_chart; ?>" alt="Thumb-1" style="width: 50px; height: 250px;">
								</a>
							</li>
                            
                            
                            
                            
                            
							<li class="col-sm-6 col-lg-4" data-responsive="<?php echo $road_worthiness_cert; ?>" data-src="<?php echo $road_worthiness_cert; ?>" data-sub-html="<h4>Road Worthiness Cert:</h4>" >
								<a href="">
									<img class="img-responsive" src="<?php echo $road_worthiness_cert; ?>" alt="Thumb-1"   style="width: 50px; height: 250px;">
								</a>
							</li>
                            
                            
                            
							<li class="col-sm-6 col-lg-4" data-responsive="<?php echo $commercial_licence; ?>" data-src="<?php echo $commercial_licence; ?>" data-sub-html="<h4>Commercial Licence:</h4>" >
								<a href="">
									<img class="img-responsive" src="<?php echo $commercial_licence; ?>" alt="Thumb-1"  style="width: 50px; height: 250px;">
								</a>
							</li>
                            
                           
							<li class="col-sm-6 col-lg-4" data-responsive="<?php echo $git_insurance; ?>" data-src="<?php echo $git_insurance; ?>" data-sub-html="<h4>GIT Insurance:</h4>" >
								<a href="">
									<img class="img-responsive" src="<?php echo $git_insurance; ?>" alt="Thumb-1" style="width: 50px; height: 250px;">
								</a>
							</li>
                            
                            
                            
                            
							<li class="col-sm-6 col-lg-4" data-responsive="<?php echo $front_view_1; ?>" data-src="<?php echo $front_view_1; ?>" data-sub-html="<h4>Front View 1:</h4>" >
								<a href="">
									<img class="img-responsive" src="<?php echo $front_view_1; ?>" alt="Thumb-1" style="width: 50px; height: 250px;">
								</a>
							</li>
                            
                            
                            
                            
							<li class="col-sm-6 col-lg-4" data-responsive="<?php echo $front_view_2; ?>" data-src="<?php echo $front_view_2; ?>" data-sub-html="<h4Front View 2:</h4>" >
								<a href="">
									<img class="img-responsive" src="<?php echo $front_view_2; ?>" alt="Thumb-1" style="width: 50px; height: 250px;">
								</a>
							</li>
                            
                            
                            
                            
							<li class="col-sm-6 col-lg-4" data-responsive="<?php echo $side_view_1; ?>" data-src="<?php echo $side_view_1; ?>" data-sub-html="<h4>Side View 1:</h4>" >
								<a href="">
									<img class="img-responsive" src="<?php echo $side_view_1; ?>" alt="Thumb-1" style="width: 50px; height: 250px;">
								</a>
							</li>
                            
                            
							<li class="col-sm-6 col-lg-4" data-responsive="<?php echo $side_view_2; ?>" data-src="<?php echo $side_view_2; ?>" data-sub-html="<h4>Side View 2:</h4>" >
								<a href="">
									<img class="img-responsive" src="<?php echo $side_view_2; ?>" alt="Thumb-1" style="width: 50px; height: 250px;">
								</a>
							</li>
                            
                            
						 
						</ul>
						<!-- /Gallery -->

						<!-- Pagination -->
					 
						<!-- Pagination -->
					</div>
					<!-- row closed -->
				</div>
				<!-- Container closed -->
			</div>
			<!-- main-content closed -->

			 
<?php
            
            
            include("footer.php");
            ?>