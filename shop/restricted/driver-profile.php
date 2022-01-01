 <?php


include("header.php");
?><?php


include("header2.php");
include("includes/view-driver-full.php");

 
?>
	
				<!-- container -->
				<div class="container-fluid">

					<!-- breadcrumb -->
					<div class="breadcrumb-header justify-content-between">
						<div class="my-auto">
							<div class="d-flex">
								<h4 class="content-title mb-0 my-auto"><?php echo $fname; ?>'s</h4><span class="text-muted mt-1 tx-13 ml-2 mb-0">/ Profile</span>
							</div>
						</div>
						<!--<div class="d-flex my-xl-auto right-content">
							<div class="pr-1 mb-xl-0">
								<button type="button" class="btn btn-info btn-icon mr-2"><i class="mdi mdi-filter-variant"></i></button>
							</div>
							<div class="pr-1 mb-xl-0">
								<button type="button" class="btn btn-danger btn-icon mr-2"><i class="mdi mdi-star"></i></button>
							</div>
							<div class="pr-1 mb-xl-0">
								<button type="button" class="btn btn-warning  btn-icon mr-2"><i class="mdi mdi-refresh"></i></button>
							</div>
							<div class="mb-xl-0">
								<div class="btn-group dropdown">
									<button type="button" class="btn btn-primary">14 Aug 2019</button>
									<button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" id="dropdownMenuDate" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									<span class="sr-only">Toggle Dropdown</span>
									</button>
									<div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuDate" data-x-placement="bottom-end">
										<a class="dropdown-item" href="#">2015</a>
										<a class="dropdown-item" href="#">2016</a>
										<a class="dropdown-item" href="#">2017</a>
										<a class="dropdown-item" href="#">2018</a>
									</div>
								</div>
							</div>
						</div>-->
					</div>
					<!-- breadcrumb -->

					<!-- row -->
					<div class="row row-sm">
						<div class="col-lg-4">
							<div class="card mg-b-20">
								<div class="card-body">
									<div class="pl-0">
										<div class="main-profile-overview">
											<div class="main-img-user profile-user">
												<img alt="" src="<?php echo $passport; ?>"><a class="fas fa-camera profile-edit" href="JavaScript:void(0);"></a>
											</div>
											<div class="d-flex justify-content-between mg-b-20">
												<div>
													<h5 class="main-profile-name"><?php echo $fname." ".$lname; ?></h5>
													<p class="main-profile-name-text"><?php echo $account_number; ?></p>
												</div>
											</div>
											 
											 
										 
											 
											<hr class="mg-y-30">
											<h6>Other Information</h6>
											<div class="skill-bar mb-4 clearfix mt-3">
												<span><strong>Phone Number</strong></span><br>

												 
													<span><?php echo $phone; ?></span>
												 
											</div><div class="skill-bar mb-4 clearfix mt-3">
												<span><strong>Email</strong></span><br>

												 
													<span><?php echo $email; ?></span>
												 
											</div><div class="skill-bar mb-4 clearfix mt-3">
												<span><strong>License Number</strong></span><br>

												 
													<span><?php echo $license; ?></span>
												 
											</div><div class="skill-bar mb-4 clearfix mt-3">
												<span><strong>License Expiry</strong></span><br>

												 
													<span><?php echo $license_expiry; ?></span>
												 
											</div>
                                            <div class="skill-bar mb-4 clearfix mt-3">
												<span><strong>Created Date</strong></span><br>

												 
													<span><?php echo $created_date; ?></span>
												 
											</div><div class="skill-bar mb-4 clearfix mt-3">
												<span><strong>Attached Truck</strong></span><br>

												 
													<span><?php echo "-"; ?></span>
												 
											</div><div class="skill-bar mb-4 clearfix mt-3">
												<span><strong>Status</strong></span><br>

												 
													<span class="<?php echo  $statusCSS; ?>"><?php echo  $statusParam; ?>  </span> 
												 
											</div>
											 
										</div><!-- main-profile-overview -->
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-8">
							<div class="row row-sm">
								<div class="col-sm-12 col-xl-4 col-lg-12 col-md-12">
									<div class="card ">
										<div class="card-body">
											<div class="counter-status d-flex md-mb-0">
												<div class="counter-icon bg-primary-transparent">
													<i class="fa fa-road text-primary"></i>
												</div>
												<div class="ml-auto">
													<h5 class="tx-13">Trips</h5>
													<h2 class="mb-0 tx-22 mb-1 mt-1">1,587</h2>
													<p class="text-muted mb-0 tx-11"><i class="si si-arrow-up-circle text-success mr-1"></i>-</p>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-sm-12 col-xl-4 col-lg-12 col-md-12">
									<div class="card ">
										<div class="card-body">
											<div class="counter-status d-flex md-mb-0">
												<div class="counter-icon bg-danger-transparent">
													<i class="las la-money-check-alt text-danger"></i>
												</div>
												<div class="ml-auto">
													<h5 class="tx-13">Revenue</h5>
													<h2 class="mb-0 tx-22 mb-1 mt-1">46,782</h2>
													 
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-sm-12 col-xl-4 col-lg-12 col-md-12">
									<div class="card ">
										<div class="card-body">
											<div class="counter-status d-flex md-mb-0">
												<div class="counter-icon bg-success-transparent">
													<i class="mdi mdi-star text-success"></i>
												</div>
												<div class="ml-auto">
													<h5 class="tx-13">Rating</h5>
													<h2 class="mb-0 tx-22 mb-1 mt-1">1,890</h2>
													 
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="card">
								<div class="card-body">
									<div class="tabs-menu ">
										<!-- Tabs -->
										<ul class="nav nav-tabs profile navtab-custom panel-tabs">
											<li class="active">
												<a href="#home" data-toggle="tab" aria-expanded="true"> <span class="visible-xs"><i class="las la-user-circle tx-16 mr-1"></i></span> <span class="hidden-xs">Recent Activities</span> </a>
											</li>
											<li class="">
												<a href="#profile" data-toggle="tab" aria-expanded="false"> <span class="visible-xs"><i class="las la-images tx-15 mr-1"></i></span> <span class="hidden-xs">GALLERY</span> </a>
											</li>
											<li class="">
												<a href="#settings" data-toggle="tab" aria-expanded="false"> <span class="visible-xs"><i class="las la-cog tx-16 mr-1"></i></span> <span class="hidden-xs">SETTINGS</span> </a>
											</li>
										</ul>
									</div>
									<div class="tab-content border-left border-bottom border-right border-top-0 p-4">
										<div class="tab-pane active" id="home">
											<h4 class="tx-15 text-uppercase mb-3">Recent Activities</h4>
											<p class="m-b-5"> Recent Comment/Trips etc </p>
											<div class="m-t-30">
												<h4 class="tx-15 text-uppercase mt-3">Experience</h4>
												 
												<hr>
												 
											</div>
										</div>
										<div class="tab-pane" id="profile">
											<div class="row">
												<div class="col-sm-4">
													<div class="border p-1 card thumb">
														<a href="#" class="image-popup" title="Screenshot-2"> <img src="<?php  echo $front_view; ?>" class="thumb-img" alt="work-thumbnail"> </a>
														<h4 class="text-center tx-14 mt-3 mb-0">Licence Front View</h4>
														<div class="ga-border"></div>
														<p class="text-muted text-center"><small>Drivers Licence Front View</small></p>
													</div>
												</div>
												<div class="col-sm-4">
													<div class=" border p-1 card thumb">
														<a href="#" class="image-popup" title="Screenshot-2"> <img src="<?php  echo $back_view; ?>" class="thumb-img" alt="work-thumbnail"> </a>
														<h4 class="text-center tx-14 mt-3 mb-0">Licence Back  View</h4>
														<div class="ga-border"></div>
														<p class="text-muted text-center"><small>Drivers Licence Back View</small></p>
													</div>
												</div>
												<div class="col-sm-4">
													<div class=" border p-1 card thumb">
														<a href="#" class="image-popup" title="Screenshot-2"> <img src="<?php  echo $passport; ?>" class="thumb-img" alt="work-thumbnail"> </a>
														<h4 class="text-center tx-14 mt-3 mb-0">Passport</h4>
														<div class="ga-border"></div>
														<p class="text-muted text-center"><small>Passport</small></p>
													</div>
												</div>
												 
											</div>
										</div>
										<div class="tab-pane" id="settings">
											 <form     method="post"    autocomplete="off" action="" enctype="multipart/form-data">
												<div class="form-group">
													<label for="FullName">First Name</label>
													<input type="text" value="<?php  echo $fname; ?>" id="fname" name="fname" class="form-control">
												</div>
                                                <div class="form-group">
													<label for="FullName">Last Name</label>
													<input type="text" value="<?php  echo $lname; ?>" id="lname" name="lname" class="form-control">
												</div>
												<div class="form-group">
													<label for="Email">Email</label>
													<input type="email" value="<?php  echo $email; ?>" id="email" name="email" class="form-control">
												</div>
												<div class="form-group">
													<label for="Username">Phone</label>
													<input type="text"  value="<?php  echo $phone; ?>" id="phone" name="phone" class="form-control">
												</div>
												<div class="form-group">
													<label for="Password">Password</label>
													<input type="password" placeholder="6 - 15 Characters" value="<?php  echo $irrelivant; ?>" id="password" name="password" class="form-control">
												</div>
												<div class="form-group">
													<label for="RePassword">Re-Password</label>
													<input type="password" placeholder="6 - 15 Characters"  value="<?php  echo $irrelivant; ?>" id="password2" name="password2"  class="form-control">
												</div>
												 
												<button class="btn btn-primary waves-effect waves-light w-md" type="submit">Save</button>
											</form>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- row closed -->
				</div>
				<!-- Container closed -->
			</div>
			<!-- main-content closed -->

			 

			<?php 

include("footer.php");

?>