<?php

include("header.php");
include("config/DB_config.php"); 
 $myName = new Name();

$usertype = $_SESSION['usertype'] ;
 
if(isset($_SESSION['email']))
{
	
	$emailing = $_SESSION['email'];
	
}
?>

<style>

/* unvisited link */
a:link {
  color: red;
}

/* visited link */
a:visited {
  color: white;
}

/* mouse over link */
a:hover {
  color: white;
}

/* selected link */
a:active {
  color: white;
}

</style>
			<!-- main-sidebar -->

			<!-- main-content -->
			<div class="main-content app-content">

				<!-- main-header -->
				<div class="main-header sticky side-header nav nav-item">
					<div class="container-fluid">
						<div class="main-header-left ">
							<div class="responsive-logo">
								<a href="dashboard"><img src="<?php
														if(isset($inst_logo))
														{
															echo $inst_logo;
														}
														else
														{
															echo "backend-admin/assets/images/logo-icon.png";
															
														}
														?>" class="logo-1" alt="logo"></a>
								<a href="dashboard"><img src="<?php
														if(isset($inst_logo))
														{
															echo $inst_logo;
														}
														else
														{
															echo "backend-admin/assets/images/logo-icon.png";
															
														}
														?>" class="dark-logo-1" alt="logo"></a>
								<a href="dashboard"><img src="<?php
														if(isset($inst_logo))
														{
															echo $inst_logo;
														}
														else
														{
															echo "backend-admin/assets/images/logo-icon.png";
															
														}
														?>" class="logo-2" alt="logo"></a>
								<a href="dashboard"><img src="<?php
														if(isset($inst_logo))
														{
															echo $inst_logo;
														}
														else
														{
															echo "backend-admin/assets/images/logo-icon.png";
															
														}
														?>" class="dark-logo-2" alt="logo"></a>
							</div>
							<div class="app-sidebar__toggle" data-toggle="sidebar">
								<a class="open-toggle" href="#"><i class="header-icon fe fe-align-left" ></i></a>
								<a class="close-toggle" href="#"><i class="header-icons fe fe-x"></i></a>
							</div>
							 
						</div>
						<div class="main-header-right">
							 
							<div class="nav nav-item  navbar-nav-right ml-auto">
								 
								<div class="dropdown nav-item main-header-message ">
									<a class="new nav-link" href="#"><svg xmlns="http://www.w3.org/2000/svg" class="header-icon-svgs" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg><span class=" pulse-danger"></span></a>
									<div class="dropdown-menu">
										<div class="menu-header-content bg-primary text-left">
											<div class="d-flex">
												<h6 class="dropdown-title mb-1 tx-15 text-white font-weight-semibold">Messages</h6>
												 
											</div>
											<p class="dropdown-title-text subtext mb-0 text-white op-6 pb-0 tx-12 ">You have   <?php
		  $countering = $myName->showName($conn, "SELECT Count(`id` ) FROM `notification` WHERE `sent_to` = '$emailing' AND `read_status` = 1"); 
		echo  $countering;
		  
		  ?> unread messages</p>
										</div>
										<div class="main-message-list chat-scroll">
                                            <?php 
                                            
                                            include("includes/view-notification-header.php");
                                            
                                            
                                            ?>
                                            
                                            
                                            
										 
										</div>
										<div class="text-center dropdown-footer">
											<a href="notification-list">VIEW ALL</a>
										</div>
									</div>
								</div>
								 
								<div class="nav-item full-screen fullscreen-button">
									<a class="new nav-link full-screen-link" href="#"><svg xmlns="http://www.w3.org/2000/svg" class="header-icon-svgs" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M8 3H5a2 2 0 0 0-2 2v3m18 0V5a2 2 0 0 0-2-2h-3m0 18h3a2 2 0 0 0 2-2v-3M3 16v3a2 2 0 0 0 2 2h3"></path></svg></a>
								</div>
								<div class="dropdown main-profile-menu nav nav-item nav-link">
									<a class="profile-user d-flex" href=""><img alt="" src="../assets/img/faces/6.jpg"></a>
									<div class="dropdown-menu">
										<div class="main-header-profile bg-primary p-3">
											<div class="d-flex wd-100p">
												<div class="main-img-user"><img alt="" src="../assets/img/faces/6.jpg" class=""></div>
												<div class="ml-3 my-auto">
													<h6><?php echo $_SESSION['name']; ?></h6><span><?php echo $real_email; ?></span>
												</div>
											</div>
										</div>
										<a class="dropdown-item" href="truck-owner-profile?id=<?php  echo strtr(base64_encode($idding),'-_,', '+/='); ?>"><i class="bx bx-user-circle"></i>Profile</a>
									 
										<a class="dropdown-item" href="notification-list"><i class="bx bxs-inbox"></i>Inbox</a>
									 
										<a class="dropdown-item" href="includes/logout"><i class="bx bx-log-out"></i> Sign Out</a>
									</div>
								</div>
								 
							</div>
						</div>
					</div>
				</div>
				<!-- /main-header -->

				<!-- container -->
				<div class="container-fluid">

					<!-- breadcrumb -->
					<div class="breadcrumb-header justify-content-between">
						<div class="left-content">
							<div>
							  <h2 class="main-content-title tx-24 mg-b-1 mg-b-lg-1">Hi, welcome <?php echo $_SESSION['lastnaming'];?>!</h2>
							  <p class="mg-b-0">(<?php  echo $emailing; ?>)</p>
							</div>
						</div>
						<div class="main-dashboard-header-right">
							<!--<div>
								<label class="tx-13">Customer Ratings</label>
								<div class="main-star">
									<i class="typcn typcn-star active"></i> <i class="typcn typcn-star active"></i> <i class="typcn typcn-star active"></i> <i class="typcn typcn-star active"></i> <i class="typcn typcn-star"></i> <span>(14,873)</span>
								</div>
							</div>-->
							<div>
								<label class="tx-13">Today's Trip</label>
								<h5><?php
                                    
                                    
                                    $trip = 0;
				  $newDate = date("Y-m-d", strtotime($datetime));
				  
				  $super = $myName->showName($conn, "SELECT `super` FROM `user_unit` WHERE `account_number` = '$emailing'");
				  
				   if($super == 1)
				   {
					   
					   $trip = $myName->showName($conn, "SELECT  count(`id`) FROM `transaction_information` WHERE (`status` = 1 or  `status` = 2 or `status` = 5) AND (`created_date` LIKE '%".$newDate."%')");
					 
				 
				 
				  
				  
				
				 
				  
				   }
				  else
				  {
   $trip = $myName->showName($conn, "SELECT  count(`id`) FROM `transaction_information` WHERE  (`truck_owner` = '$emailing') AND  (`status` = 1 or  `status` = 2 or `status` = 5) AND  (`created_date` LIKE '%".$newDate."%')");
					   
				 
				 
				  
				  
				
				  
				  
				  
				  }
                                                    
                          echo  $trip;    
                                    
                                    
                                    ?></h5>
							</div>
							<div>
								<label class="tx-13">Today's Esrnings</label>
								<h5><?php
                                    
                                    
                                    $trip_amount = 0;
				  $newDate = date("Y-m-d", strtotime($datetime));
				  
				  $super = $myName->showName($conn, "SELECT `super` FROM `user_unit` WHERE `account_number` = '$emailing'");
				  
				   if($super == 1)
				   {
					   
					   $trip_amount = $myName->showName($conn, "SELECT  SUM(`amount`) FROM `transaction_information` WHERE (`status` = 1 or  `status` = 2 or `status` = 5) AND (`created_date` LIKE '%".$newDate."%')");
					 
				 
				 
				  
				  
				
				 
				  
				   }
				  else
				  {
   $trip_amount = $myName->showName($conn, "SELECT   SUM(`amount`) FROM `transaction_information` WHERE  (`truck_owner` = '$emailing') AND  (`status` = 1 or  `status` = 2 or `status` = 5) AND (`created_date` LIKE '%".$newDate."%')");
					   
				 
				 
				  
				  
				
				  
				  
				  
				  }
                                                    
                          echo  "&#8358 ".number_format($trip_amount, 2);    
                                    
                                    
                                    ?></h5>
							</div>
						</div>
					</div>
					<!-- /breadcrumb -->

					<!-- row -->
                    
                    <?php
                    if($usertype_all == 2 or $super == 1)				
		{
                    
                    ?>
                    
					<div class="row row-sm">
						<div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
							<div class="card overflow-hidden sales-card bg-primary-gradient">
								<div class="pl-3 pt-3 pr-3 pb-2 pt-0">
									<div class="">
										<h6 class="mb-3 tx-12 text-white">TRUCKS</h6>
									</div>
									<div class="pb-0 mt-0">
										<div class="d-flex">
											<div class="">
                                                
                                                <?php
				  
				  $owners_plus = 0;
				  $owners_minus = 0;
				  
				  $super = $myName->showName($conn, "SELECT `super` FROM `user_unit` WHERE `account_number` = '$emailing'");
				  
				   if($super == 1)
				   {
					   
					   $owners_plus = $myName->showName($conn, "SELECT  count(`id`) FROM `truck` WHERE  `status` = 1");
					   $owners_minus = $myName->showName($conn, "SELECT  count(`id`) FROM `truck` WHERE  `status` = 0");
				   }
				  else
				  {
 $owners_plus = $myName->showName($conn, "SELECT  count(`id`) FROM `truck` WHERE  `status` = 1 AND  `registeredby` = '$emailing'");
 $owners_minus = $myName->showName($conn, "SELECT  count(`id`) FROM `truck` WHERE  `status` = 0 AND  `registeredby` = '$emailing'");
				  }
					   
			 
				  
				  ?>
                                                
                                                
												<h4 class="tx-20 font-weight-bold mb-1 text-white"><?php echo $owners_plus; ?></h4>
												<p class="mb-0 tx-12 text-white op-7"><a href="view-all-truck?truck=1">All Active Trucks</a></p>
											</div>
											<span class="float-right my-auto ml-auto">
												<i class="fas fa-arrow-circle-up text-white"></i>
												<span class="text-white op-7"><a href="view-all-truck?truck=0"> <strong>-<?php echo $owners_minus; ?></strong></a></span>
											</span>
										</div>
									</div>
								</div>
								
							</div>
						</div>
						<div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
							<div class="card overflow-hidden sales-card bg-danger-gradient">
								<div class="pl-3 pt-3 pr-3 pb-2 pt-0">
									<div class="">
										<h6 class="mb-3 tx-12 text-white">DAILY TRIPS</h6>
									</div>
									<div class="pb-0 mt-0">
										<div class="d-flex">
											<div class="">
												<h4 class="tx-20 font-weight-bold mb-1 text-white">0</h4>
												<p class="mb-0 tx-12 text-white op-7">Total Trips</p>
											</div>
											<span class="float-right my-auto ml-auto">
												<i class="fas fa-arrow-circle-down text-white"></i>
												<span class="text-white op-7"> 0</span>
											</span>
										</div>
									</div>
								</div>
							
							</div>
						</div>
						<div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
							<div class="card overflow-hidden sales-card bg-success-gradient">
								<div class="pl-3 pt-3 pr-3 pb-2 pt-0">
									<div class="">
										<h6 class="mb-3 tx-12 text-white">DAILY REVENUE</h6>
									</div>
									<div class="pb-0 mt-0">
										<div class="d-flex">
											<div class="">
												<h4 class="tx-20 font-weight-bold mb-1 text-white">0.0</h4>
												<p class="mb-0 tx-12 text-white op-7">Daily Revenue Generated</p>
											</div>
											<span class="float-right my-auto ml-auto">
												<i class="fas fa-arrow-circle-up text-white"></i>
												<span class="text-white op-7">0.0</span>
											</span>
										</div>
									</div>
								</div>
								
							</div>
						</div>
                        
                        
                            <?php
                    if($super == 1)				
		{
                    
                    ?>
						<div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
							<div class="card overflow-hidden sales-card bg-warning-gradient">
								<div class="pl-3 pt-3 pr-3 pb-2 pt-0">
									<div class="">
										<h6 class="mb-3 tx-12 text-white">TRUCK OWNERS</h6>
									</div>
									<div class="pb-0 mt-0">
										<div class="d-flex">
											<div class="">
                                                
                                                
												<h4 class="tx-20 font-weight-bold mb-1 text-white"><?php
				  
		 	 
				  $owners_plus = 0;
				  $owners_minus = 0;
				  
				  $super = $myName->showName($conn, "SELECT `super` FROM `user_unit` WHERE `account_number` = '$emailing'");
				  
				   
					   $owners_plus = $myName->showName($conn, "SELECT  count(`id`) FROM `user_unit` WHERE  `status` = 1 AND `usertype` = '2'");
					   $owners_minus = $myName->showName($conn, "SELECT  count(`id`) FROM `user_unit` WHERE  `status` = 0 AND `usertype` = '2'");
					  
				 
				 
				  
				  
				
				  
				  echo  $owners_plus; 
				  
				  ?></h4>
												<p class="mb-0 tx-12 text-white op-7">All Active Truck Owners</p>
											</div>
											<span class="float-right my-auto ml-auto">
												<i class="fas fa-arrow-circle-down text-white"></i>
												<span class="text-white op-7"><?php echo $owners_minus; ?></span>
											</span>
										</div>
									</div>
								</div>
							
							</div>
						</div>
                        
                        <?php
                        
                    }
                        ?>
					</div>
                    
                    
                    
                    
                    <div class="row row-sm">
						<div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
							<div class="card overflow-hidden sales-card bg-primary-gradient">
								<div class="pl-3 pt-3 pr-3 pb-2 pt-0">
									<div class="">
										<h6 class="mb-3 tx-12 text-white">DRIVERS</h6>
									</div>
									<div class="pb-0 mt-0">
										<div class="d-flex">
											<div class="">
												<h4 class="tx-20 font-weight-bold mb-1 text-white">
                                                
                                                <?php
				  
				  $owners_plus = 0;
				  $owners_minus = 0;
				  
				  $super = $myName->showName($conn, "SELECT `super` FROM `user_unit` WHERE `account_number` = '$emailing'");
				  
				   if($super == 1)
				   {
					   
					   $owners_plus = $myName->showName($conn, "SELECT  count(`id`) FROM `user_unit` WHERE  `status` = 1 AND `usertype` = '3'");
					   $owners_minus = $myName->showName($conn, "SELECT  count(`id`) FROM `user_unit` WHERE  `status` = 0 AND `usertype` = '3'");
					  
				 
				 
				  
				  
				
				 
				  
				   }
				  else
				  {
   $owners_plus = $myName->showName($conn, "SELECT  count(`id`) FROM `user_unit` WHERE  `status` = 1 AND `usertype` = '3'");
					   $owners_minus = $myName->showName($conn, "SELECT  count(`id`) FROM `user_unit` WHERE  `status` = 0 AND `usertype` = '3'");
					  
				 
				 
				  
				  
				
				  
				  
				  
				  }
					   
					  
				 
				 
				  
				  
				
				  
				  echo $owners_plus; 
				  
				  ?>
                                                
                                                
                                                </h4>
												<p class="mb-0 tx-12 text-white op-7">All Active Drivers</p>
											</div>
											<span class="float-right my-auto ml-auto">
												<i class="fas fa-arrow-circle-up text-white"></i>
												<span class="text-white op-7"> <?php echo $owners_minus; ?></span>
											</span>
										</div>
									</div>
								</div>
								<span id="" class="pt-1"></span>
							</div>
						</div>
                                      <?php
                    if($super == 1)				
		{
                    
                    ?>
						<div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
							<div class="card overflow-hidden sales-card bg-danger-gradient">
								<div class="pl-3 pt-3 pr-3 pb-2 pt-0">
									<div class="">
										<h6 class="mb-3 tx-12 text-white">SUBSCRIBERS</h6>
									</div>
									<div class="pb-0 mt-0">
										<div class="d-flex">
											<div class="">
												<h4 class="tx-20 font-weight-bold mb-1 text-white"><?php
				  
		 	 
				  $owners_plus = 0;
				  $owners_minus = 0;
				  
				  $super = $myName->showName($conn, "SELECT `super` FROM `user_unit` WHERE `account_number` = '$emailing'");
				  
				   
					   $owners_plus = $myName->showName($conn, "SELECT  count(`id`) FROM `user_unit` WHERE  `status` = 1 AND `usertype` = '3'");
					   $owners_minus = $myName->showName($conn, "SELECT  count(`id`) FROM `user_unit` WHERE  `status` = 0 AND `usertype` = '3'");
					  
				 
				 
				  
				  
				
				  
				  echo $owners_plus; 
				  
				  ?></h4>
												<p class="mb-0 tx-12 text-white op-7">All Active Subscribers</p>
											</div>
											<span class="float-right my-auto ml-auto">
												<i class="fas fa-arrow-circle-down text-white"></i>
												<span class="text-white op-7"> <?php echo $owners_minus; ?></span>
											</span>
										</div>
									</div>
								</div>
								<span id="" class="pt-1"></span>
							</div>
						</div>
                        
                        <?php
                    }
                    ?>
						<div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
							<div class="card overflow-hidden sales-card bg-success-gradient">
								<div class="pl-3 pt-3 pr-3 pb-2 pt-0">
									<div class="">
										<h6 class="mb-3 tx-12 text-white">TOTAL WALLET</h6>
									</div>
									<div class="pb-0 mt-0">
										<div class="d-flex">
											<div class="">
												<h4 class="tx-20 font-weight-bold mb-1 text-white"><?php
				  
				  $owners_plus = 0;
				  
				  
				  $super = $myName->showName($conn, "SELECT `super` FROM `user_unit` WHERE `account_number` = '$emailing'");
				  
				   if($super == 1)
				   {
					   
					   $owners_plus = $myName->showName($conn, "SELECT  SUM(`owners_share`) FROM `transaction_information` WHERE `status` = 1");
					 
				 
				 
				  
				  
				
				 
				  
				   }
				  else
				  {
   $owners_plus = $myName->showName($conn, "SELECT  SUM(`owners_share`) FROM `transaction_information` WHERE  `truck_owner` = '$emailing' AND  `status` = 1");
					   
				 
				 
				  
				  
				
				  
				  
				  
				  }
                                                    
                          echo  number_format($owners_plus, 2);                            
                                                    
                                                    ?></h4>
												<p class="mb-0 tx-12 text-white op-7">Total Active Wallet</p>
											</div>
											<span class="float-right my-auto ml-auto">
												<i class="fas fa-arrow-circle-up text-white"></i>
												<span class="text-white op-7"> 0</span>
											</span>
										</div>
									</div>
								</div>
								<!--<span id="compositeline3" class="pt-1"></span>-->
							</div>
						</div>
                        
                                        <?php
                    if($super == 1)				
		{
                    
                    ?>
						<div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
							<div class="card overflow-hidden sales-card bg-warning-gradient">
								<div class="pl-3 pt-3 pr-3 pb-2 pt-0">
									<div class="">
										<h6 class="mb-3 tx-12 text-white">TOTAL <?php echo $inst_name; ?> EARNINGS</h6>
									</div>
									<div class="pb-0 mt-0">
										<div class="d-flex">
											<div class="">
												<h4 class="tx-20 font-weight-bold mb-1 text-white"><?php
				  
				  $owners_plus = 0;
				  
				  
				  $super = $myName->showName($conn, "SELECT `super` FROM `user_unit` WHERE `account_number` = '$emailing'");
				  
				   if($super == 1)
				   {
					   
					   $owners_plus = $myName->showName($conn, "SELECT  SUM(`loadme_share`) FROM `transaction_information` WHERE (`status` = 2 OR `status` = 1 OR `status` = 5)");
					 
				 
				 
				  
				  
				
				 
				  
				   }
				  else
				  {
   $owners_plus = $myName->showName($conn, "SELECT  SUM(`loadme_share`) FROM `transaction_information` WHERE  `truck_owner` = '$emailing' AND  (`status` = 2 OR `status` = 1 OR `status` = 5)");
					   
				 
				 
				  
				  
				
				  
				  
				  
				  }
                                                    
                          echo  number_format($owners_plus, 2);                          
                                                    
                                                    ?></h4>
												<p class="mb-0 tx-12 text-white op-7">All Active LoadMe Earnings</p>
											</div>
											<span class="float-right my-auto ml-auto">
												<i class="fas fa-arrow-circle-down text-white"></i>
												<span class="text-white op-7">0</span>
											</span>
										</div>
									</div>
								</div>
								<!--<span id="compositeline4" class="pt-1"></span>-->
							</div>
						</div>
                        <?php
                        
                    }
                        ?>
                        
					</div>
                    
                    
                    
                    
                    <div class="row row-sm">
						<div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
							<div class="card overflow-hidden sales-card bg-primary-gradient">
								<div class="pl-3 pt-3 pr-3 pb-2 pt-0">
									<div class="">
										<h6 class="mb-3 tx-12 text-white">All Orders</h6>
									</div>
									<div class="pb-0 mt-0">
										<div class="d-flex">
											<div class="">
												<h4 class="tx-20 font-weight-bold mb-1 text-white">
                                                
                                                <?php
				  
				  $owners_plus = 0;
				  
				  
				  $super = $myName->showName($conn, "SELECT `super` FROM `user_unit` WHERE `account_number` = '$emailing'");
				  
				   if($super == 1)
				   {
					   
					   $owners_plus = $myName->showName($conn, "SELECT  count(`id`) FROM `search_result`");
					 
				 
				 
				  
				  
				
				 
				  
				   }
				  else
				  {
   $owners_plus = $myName->showName($conn, "SELECT  count(`id`) FROM `search_result` WHERE  `truck_owner` = '$emailing'");
					   
				 
				 
				  
				  
				
				  
				  
				  
				  }
					   
					  
				 
				 
				  
				  
				
				  
				  echo $owners_plus; 
				  
				  ?>
                                                
                                                
                                                </h4>
												<p class="mb-0 tx-12 text-white op-7">All My Orders</p>
											</div>
											<span class="float-right my-auto ml-auto">
												<i class="fas fa-arrow-circle-up text-white"></i>
												<span class="text-white op-7"> <?php echo $owners_minus; ?></span>
											</span>
										</div>
									</div>
								</div>
								<span id="" class="pt-1"></span>
							</div>
						</div>
						<div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
							<div class="card overflow-hidden sales-card bg-success-gradient">
								<div class="pl-3 pt-3 pr-3 pb-2 pt-0">
									<div class="">
										<h6 class="mb-3 tx-12 text-white">All Accepted Orders</h6>
									</div>
									<div class="pb-0 mt-0">
										<div class="d-flex">
											<div class="">
												<h4 class="tx-20 font-weight-bold mb-1 text-white">  <?php
				  
				  $owners_plus = 0;
				  
				  
				  $super = $myName->showName($conn, "SELECT `super` FROM `user_unit` WHERE `account_number` = '$emailing'");
				  
				   if($super == 1)
				   {
					   
					   $owners_plus = $myName->showName($conn, "SELECT  count(`id`) FROM `search_result` WHERE `status` = 4");
					 
				 
				 
				  
				  
				
				 
				  
				   }
				  else
				  {
   $owners_plus = $myName->showName($conn, "SELECT  count(`id`) FROM `search_result` WHERE  `truck_owner` = '$emailing' AND  `status` = 4");
					   
				 
				 
				  
				  
				
				  
				  
				  
				  }
                                                    
                          echo  $owners_plus;                          
                                                    
                                                    ?>
                                                
                                                
                                                
                                                
                                                </h4>
												<p class="mb-0 tx-12 text-white op-7">All Rejected Orders</p>
											</div>
											<span class="float-right my-auto ml-auto">
												<i class="fas fa-arrow-circle-down text-white"></i>
												<span class="text-white op-7"> <?php echo $owners_minus; ?></span>
											</span>
										</div>
									</div>
								</div>
								<span id="" class="pt-1"></span>
							</div>
						</div>
						<div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
							<div class="card overflow-hidden sales-card bg-success-gradient">
								<div class="pl-3 pt-3 pr-3 pb-2 pt-0">
									<div class="">
										<h6 class="mb-3 tx-12 text-white">PAID ORDERS</h6>
									</div>
									<div class="pb-0 mt-0">
										<div class="d-flex">
											<div class="">
												<h4 class="tx-20 font-weight-bold mb-1 text-white"><?php
				  
				  $owners_plus = 0;
				  
				  
				  $super = $myName->showName($conn, "SELECT `super` FROM `user_unit` WHERE `account_number` = '$emailing'");
				  
				   if($super == 1)
				   {
					   
					   $owners_plus = $myName->showName($conn, "SELECT  count(`id`) FROM `transaction_information` WHERE `status` = 1");
					 
				 
				 
				  
				  
				
				 
				  
				   }
				  else
				  {
   $owners_plus = $myName->showName($conn, "SELECT  count(`id`) FROM `transaction_information` WHERE  `truck_owner` = '$emailing' AND  `status` = 1");
					   
				 
				 
				  
				  
				
				  
				  
				  
				  }
                                                    
                          echo  $owners_plus;                          
                                                    
                                                    ?></h4>
												<p class="mb-0 tx-12 text-white op-7">Total Paid Orders</p>
											</div>
											<span class="float-right my-auto ml-auto">
												<i class="fas fa-arrow-circle-up text-white"></i>
												<span class="text-white op-7"> 0</span>
											</span>
										</div>
									</div>
								</div>
								<!--<span id="compositeline3" class="pt-1"></span>-->
							</div>
						</div>
						<div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
							<div class="card overflow-hidden sales-card bg-warning-gradient">
								<div class="pl-3 pt-3 pr-3 pb-2 pt-0">
									<div class="">
										<h6 class="mb-3 tx-12 text-white">Awaiting Acceptance Orders</h6>
									</div>
									<div class="pb-0 mt-0">
										<div class="d-flex">
											<div class="">
												<h4 class="tx-20 font-weight-bold mb-1 text-white"><?php
				  
				  $owners_plus = 0;
				  
				  
				  $super = $myName->showName($conn, "SELECT `super` FROM `user_unit` WHERE `account_number` = '$emailing'");
				  
				   if($super == 1)
				   {
					   
					   $owners_plus = $myName->showName($conn, "SELECT  count(`id`) FROM `search_result` WHERE `status` = 2");
					 
				 
				 
				  
				  
				
				 
				  
				   }
				  else
				  {
   $owners_plus = $myName->showName($conn, "SELECT  count(`id`) FROM `search_result` WHERE  `truck_owner` = '$emailing' AND  `status` = 2");
					   
				 
				 
				  
				  
				
				  
				  
				  
				  }
                                                    
                          echo  $owners_plus;                          
                                                    
                                                    ?>
                                                </h4>
												<p class="mb-0 tx-12 text-white op-7">ALl Orders Waiting Acceptance</p>
											</div>
											<span class="float-right my-auto ml-auto">
												<i class="fas fa-arrow-circle-down text-white"></i>
												<span class="text-white op-7">0</span>
											</span>
										</div>
									</div>
								</div>
								<!--<span id="compositeline4" class="pt-1"></span>-->
							</div>
						</div>
					</div>
                    
                    
                    
                    
                    <?php
                    }
                    
                        ?>
                    <?php
                    if($usertype_all == 7 or $super == 1)				
		{
                    
                    ?>
                    <div class="row row-sm">
						<div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
							<div class="card overflow-hidden sales-card bg-success-gradient">
								<div class="pl-3 pt-3 pr-3 pb-2 pt-0">
									<div class="">
										<h6 class="mb-3 tx-12 text-white">Approved for Inspection</h6>
									</div>
									<div class="pb-0 mt-0">
										<div class="d-flex">
											<div class="">
												<h4 class="tx-20 font-weight-bold mb-1 text-white">
                                                
                                                <?php
				  
				  $owners_plus = 0;
				  $owners_minus = 0;
				  
				  $super = $myName->showName($conn, "SELECT `super` FROM `user_unit` WHERE `account_number` = '$emailing'");
				  
				   if($super == 1)
				   {
					   
					   $owners_plus = $myName->showName($conn, "SELECT  count(`id`) FROM `truck` WHERE  `status` = 2");
				 
				  
				   }
				  else
				  {
   $owners_plus = $myName->showName($conn, "SELECT  count(`id`) FROM `truck` WHERE  `status` = 2 AND `inspector` = '$emailing'");
					  
				 
				 
				  
				  
				
				  
				  
				  
				  }
					   
					  
				 
				 
				  
				  
				
				  
				  echo $owners_plus; 
				  
				  ?>
                                                
                                                
                                                </h4>
												<p class="mb-0 tx-12 text-white op-7">All Trucks Approved for Inspection</p>
											</div>
											<span class="float-right my-auto ml-auto">
												<i class="fas fa-arrow-circle-up text-white"></i>
												<span class="text-white op-7"> <?php // echo $owners_minus; ?></span>
											</span>
										</div>
									</div>
								</div>
								<span id="" class="pt-1"></span>
							</div>
						</div>
						<div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
							<div class="card overflow-hidden sales-card bg-primary-gradient">
								<div class="pl-3 pt-3 pr-3 pb-2 pt-0">
									<div class="">
										<h6 class="mb-3 tx-12 text-white">Inspected</h6>
									</div>
									<div class="pb-0 mt-0">
										<div class="d-flex">
											<div class="">
												<h4 class="tx-20 font-weight-bold mb-1 text-white"><?php
				  
		 	 
			 
				  
				  $owners_plus = 0;
				  $owners_minus = 0;
				  
				  $super = $myName->showName($conn, "SELECT `super` FROM `user_unit` WHERE `account_number` = '$emailing'");
				  
				   if($super == 1)
				   {
					   
					   $owners_plus = $myName->showName($conn, "SELECT  count(`id`) FROM `truck` WHERE  `status` = 3");
				 
				  
				   }
				  else
				  {
   $owners_plus = $myName->showName($conn, "SELECT  count(`id`) FROM `truck` WHERE  `status` = 3 AND `inspector` = '$emailing'");
					  
				 
				 
				  
				  
				
				  
				  
				  
				  }
					   
					  
				 
				 
				  
				  
				
				  
				  echo $owners_plus; 
				  
				  ?>
				  
				  
				
				 </h4>
												<p class="mb-0 tx-12 text-white op-7">All Trucks Inspected</p>
											</div>
											<span class="float-right my-auto ml-auto">
												<i class="fas fa-arrow-circle-down text-white"></i>
												<span class="text-white op-7"> <?php //echo $owners_minus; ?></span>
											</span>
										</div>
									</div>
								</div>
								<span id="" class="pt-1"></span>
							</div>
						</div>
						<div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
							<div class="card overflow-hidden sales-card bg-success-gradient">
								<div class="pl-3 pt-3 pr-3 pb-2 pt-0">
									<div class="">
										<h6 class="mb-3 tx-12 text-white">APPROVED</h6>
									</div>
									<div class="pb-0 mt-0">
										<div class="d-flex">
											<div class="">
												<h4 class="tx-20 font-weight-bold mb-1 text-white"><?php
				  
		 	 
			 
				  
				  $owners_plus = 0;
				  $owners_minus = 0;
				  
				  $super = $myName->showName($conn, "SELECT `super` FROM `user_unit` WHERE `account_number` = '$emailing'");
				  
				   if($super == 1)
				   {
					   
					   $owners_plus = $myName->showName($conn, "SELECT  count(`id`) FROM `truck` WHERE  `status` = 1");
				 
				  
				   }
				  else
				  {
   $owners_plus = $myName->showName($conn, "SELECT  count(`id`) FROM `truck` WHERE  `status` = 1 AND `inspector` = '$emailing'");
					  
				 
				 
				  
				  
				
				  
				  
				  
				  }
					   
					  
				 
				 
				  
				  
				
				  
				  echo $owners_plus; 
				  
				  ?></h4>
												<p class="mb-0 tx-12 text-white op-7">Total Approved Trucks Inspected</p>
											</div>
											<span class="float-right my-auto ml-auto">
												<i class="fas fa-arrow-circle-up text-white"></i>
												<span class="text-white op-7"> 0</span>
											</span>
										</div>
									</div>
								</div>
								<!--<span id="compositeline3" class="pt-1"></span>-->
							</div>
						</div>
						<div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
							<div class="card overflow-hidden sales-card bg-warning-gradient">
								<div class="pl-3 pt-3 pr-3 pb-2 pt-0">
									<div class="">
										<h6 class="mb-3 tx-12 text-white">PENDING APPROVAL</h6>
									</div>
									<div class="pb-0 mt-0">
										<div class="d-flex">
											<div class="">
												<h4 class="tx-20 font-weight-bold mb-1 text-white"><?php
				  
		 	 
			 
				  
				  $owners_plus = 0;
				  $owners_minus = 0;
				  
				  $super = $myName->showName($conn, "SELECT `super` FROM `user_unit` WHERE `account_number` = '$emailing'");
				  
				   if($super == 1)
				   {
					   
					   $owners_plus = $myName->showName($conn, "SELECT  count(`id`) FROM `truck` WHERE  `status` = 0");
				 
				  
				   }
				  else
				  {
   $owners_plus = $myName->showName($conn, "SELECT  count(`id`) FROM `truck` WHERE  `status` = 0 AND `inspector` = '$emailing'");
					  
				 
				 
				  
				  
				
				  
				  
				  
				  }
					   
					  
				 
				 
				  
				  
				
				  
				  echo $owners_plus; 
				  
				  ?></h4>
												<p class="mb-0 tx-12 text-white op-7">All Pending Trucks</p>
											</div>
											<span class="float-right my-auto ml-auto">
												<i class="fas fa-arrow-circle-down text-white"></i>
												<span class="text-white op-7">0</span>
											</span>
										</div>
									</div>
								</div>
								<!--<span id="compositeline4" class="pt-1"></span>-->
							</div>
						</div>
					</div>
                    
                      <?php
                    }
                    
                        ?>
                    
					<!-- row closed -->

					<!-- row opened -->
					 
					<!-- row closed -->

					<!-- row opened -->
                    
                      <?php
                    if($super == 1)				
		{
                    
                    ?>
					<div class="row row-sm">
                        
						<div class="col-xl-4 col-md-12 col-lg-12">
							<div class="card">
								<div class="card-header pb-1">
									<h3 class="card-title mb-2">Recent Truck Owners</h3>
								 
								</div>
								<div class="card-body p-0 customers mt-1">
									<div class="list-group list-lg-group list-group-flush">
                                        
                                        <?php 
                                        include("includes/view-truck-owners-dashboard.php");
                                        
                                        ?>
                                        
                                   
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-4 col-md-12 col-lg-6">
							<div class="card">
								<div class="card-header pb-1">
									<h3 class="card-title mb-2">Trip Activity</h3>
							 </div>
								<div class="product-timeline card-body pt-2 mt-1">
									<ul class="timeline-1 mb-0">
                                        
                                        <?php
                        
                        include("includes/recent-trip.php");
                        ?>
                                        
                                        
                                        
									 
									</ul>
								</div>
							</div>
						</div>
						 <div class="col-xl-4 col-md-12 col-lg-12">
							<div class="card">
								<div class="card-header pb-1">
									<h3 class="card-title mb-2">Recent Customers</h3>
								 
								</div>
								<div class="card-body p-0 customers mt-1">
									<div class="list-group list-lg-group list-group-flush">
                                        
                                        <?php 
                                        include("includes/view-customers-dashboard.php");
                                        
                                        ?>
                                        
                                   
									</div>
								</div>
							</div>
						</div>
					</div>
                    
                    <?php
                    }
                        
                        ?>
					<!-- row close -->

					<!-- row opened -->
                      <?php
                    if($usertype_all == 2 or $super == 1)				
		{
                    
                    ?>
					<div class="row row-sm row-deck">
						 
						<div class="col-md-12 col-lg-12 col-xl-12">
							<div class="card card-table-two">
								<div class="d-flex justify-content-between">
									<h4 class="card-title mb-1">Your Most Transaction Earnings</h4>
									<i class="mdi mdi-dots-horizontal text-gray"></i>
								</div>
								<span class="tx-12 tx-muted mb-3 ">This is your most recent earnings for today's date.</span>
								<div class="table-responsive country-table">
									<table class="table table-striped table-bordered mb-0 text-sm-nowrap text-lg-nowrap text-xl-nowrap">
										<thead>
											<tr>
													<th class="wd-lg-25p">Loading</th>
												<th class="wd-lg-25p">Destination</th>
												<th class="wd-lg-25p">Distance</th>
												<th class="wd-lg-25p tx-right">Truck Owner</th>
												<th class="wd-lg-25p tx-right">Truck Plate</th>
												<th class="wd-lg-25p tx-right">Convenience Fee</th>
												<th class="wd-lg-25p tx-right">LoadMe </th>
												<th class="wd-lg-25p tx-right">Owner Share </th>
												<th class="wd-lg-25p tx-right">Total</th>
												<th class="wd-lg-25p tx-right">Status</th>
											</tr>
										</thead>
										<tbody>
                                            
                                            
                                            <?php
                        
                        
                        include("includes/recent-earning.php");
                        ?> 
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
                    
                    <?php
                        
                    }
                        ?>
					<!-- /row -->
				</div>
				<!-- /Container -->
			</div>
			<!-- /main-content -->
 ->
 <?php

include("footer.php");

?>