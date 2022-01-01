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
												<span class="badge badge-pill badge-warning ml-auto my-auto float-right">Mark All Read</span>
											</div>
											<p class="dropdown-title-text subtext mb-0 text-white op-6 pb-0 tx-12 ">You have 4 unread messages</p>
										</div>
										<div class="main-message-list chat-scroll">
											<a href="#" class="p-3 d-flex border-bottom">
												<div class="  drop-img  cover-image  " data-image-src="../../assets/img/faces/3.jpg">
													<span class="avatar-status bg-teal"></span>
												</div>
												<div class="wd-90p">
													<div class="d-flex">
														<h5 class="mb-1 name">Petey Cruiser</h5>
													</div>
													<p class="mb-0 desc">I'm sorry but i'm not sure how to help you with that......</p>
													<p class="time mb-0 text-left float-left ml-2 mt-2">Mar 15 3:55 PM</p>
												</div>
											</a>
											<a href="#" class="p-3 d-flex border-bottom">
												<div class="drop-img cover-image" data-image-src="../../assets/img/faces/2.jpg">
													<span class="avatar-status bg-teal"></span>
												</div>
												<div class="wd-90p">
													<div class="d-flex">
														<h5 class="mb-1 name">Jimmy Changa</h5>
													</div>
													<p class="mb-0 desc">All set ! Now, time to get to you now......</p>
													<p class="time mb-0 text-left float-left ml-2 mt-2">Mar 06 01:12 AM</p>
												</div>
											</a>
											<a href="#" class="p-3 d-flex border-bottom">
												<div class="drop-img cover-image" data-image-src="../../assets/img/faces/9.jpg">
													<span class="avatar-status bg-teal"></span>
												</div>
												<div class="wd-90p">
													<div class="d-flex">
														<h5 class="mb-1 name">Graham Cracker</h5>
													</div>
													<p class="mb-0 desc">Are you ready to pickup your Delivery...</p>
													<p class="time mb-0 text-left float-left ml-2 mt-2">Feb 25 10:35 AM</p>
												</div>
											</a>
											<a href="#" class="p-3 d-flex border-bottom">
												<div class="drop-img cover-image" data-image-src="../../assets/img/faces/12.jpg">
													<span class="avatar-status bg-teal"></span>
												</div>
												<div class="wd-90p">
													<div class="d-flex">
														<h5 class="mb-1 name">Donatella Nobatti</h5>
													</div>
													<p class="mb-0 desc">Here are some products ...</p>
													<p class="time mb-0 text-left float-left ml-2 mt-2">Feb 12 05:12 PM</p>
												</div>
											</a>
											<a href="#" class="p-3 d-flex border-bottom">
												<div class="drop-img cover-image" data-image-src="../../assets/img/faces/5.jpg">
													<span class="avatar-status bg-teal"></span>
												</div>
												<div class="wd-90p">
													<div class="d-flex">
														<h5 class="mb-1 name">Anne Fibbiyon</h5>
													</div>
													<p class="mb-0 desc">I'm sorry but i'm not sure how...</p>
													<p class="time mb-0 text-left float-left ml-2 mt-2">Jan 29 03:16 PM</p>
												</div>
											</a>
										</div>
										<div class="text-center dropdown-footer">
											<a href="backend/text-center">VIEW ALL</a>
										</div>
									</div>
								</div>
								<div class="dropdown nav-item main-header-notification">
									<a class="new nav-link" href="#">
									<svg xmlns="http://www.w3.org/2000/svg" class="header-icon-svgs" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path><path d="M13.73 21a2 2 0 0 1-3.46 0"></path></svg><span class=" pulse"></span></a>
									<div class="dropdown-menu">
										<div class="menu-header-content bg-primary text-left">
											<div class="d-flex">
												<h6 class="dropdown-title mb-1 tx-15 text-white font-weight-semibold">Notifications</h6>
												<span class="badge badge-pill badge-warning ml-auto my-auto float-right">Mark All Read</span>
											</div>
											<p class="dropdown-title-text subtext mb-0 text-white op-6 pb-0 tx-12 ">You have 4 unread Notifications</p>
										</div>
										<div class="main-notification-list Notification-scroll">
											<a class="d-flex p-3 border-bottom" href="#">
												<div class="notifyimg bg-pink">
													<i class="la la-file-alt text-white"></i>
												</div>
												<div class="ml-3">
													<h5 class="notification-label mb-1">New files available</h5>
													<div class="notification-subtext">10 hour ago</div>
												</div>
												<div class="ml-auto" >
													<i class="las la-angle-right text-right text-muted"></i>
												</div>
											</a>
											<a class="d-flex p-3" href="#">
												<div class="notifyimg bg-purple">
													<i class="la la-gem text-white"></i>
												</div>
												<div class="ml-3">
													<h5 class="notification-label mb-1">Updates Available</h5>
													<div class="notification-subtext">2 days ago</div>
												</div>
												<div class="ml-auto" >
													<i class="las la-angle-right text-right text-muted"></i>
												</div>
											</a>
											<a class="d-flex p-3 border-bottom" href="#">
												<div class="notifyimg bg-success">
													<i class="la la-shopping-basket text-white"></i>
												</div>
												<div class="ml-3">
													<h5 class="notification-label mb-1">New Order Received</h5>
													<div class="notification-subtext">1 hour ago</div>
												</div>
												<div class="ml-auto" >
													<i class="las la-angle-right text-right text-muted"></i>
												</div>
											</a>
											<a class="d-flex p-3 border-bottom" href="#">
												<div class="notifyimg bg-warning">
													<i class="la la-envelope-open text-white"></i>
												</div>
												<div class="ml-3">
													<h5 class="notification-label mb-1">New review received</h5>
													<div class="notification-subtext">1 day ago</div>
												</div>
												<div class="ml-auto" >
													<i class="las la-angle-right text-right text-muted"></i>
												</div>
											</a>
											<a class="d-flex p-3 border-bottom" href="#">
												<div class="notifyimg bg-danger">
													<i class="la la-user-check text-white"></i>
												</div>
												<div class="ml-3">
													<h5 class="notification-label mb-1">22 verified registrations</h5>
													<div class="notification-subtext">2 hour ago</div>
												</div>
												<div class="ml-auto" >
													<i class="las la-angle-right text-right text-muted"></i>
												</div>
											</a>
											<a class="d-flex p-3 border-bottom" href="#">
												<div class="notifyimg bg-primary">
													<i class="la la-check-circle text-white"></i>
												</div>
												<div class="ml-3">
													<h5 class="notification-label mb-1">Project has been approved</h5>
													<div class="notification-subtext">4 hour ago</div>
												</div>
												<div class="ml-auto" >
													<i class="las la-angle-right text-right text-muted"></i>
												</div>
											</a>
										</div>
										<div class="dropdown-footer">
											<a href="">VIEW ALL</a>
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
													<h6>Petey Cruiser</h6><span>Premium Member</span>
												</div>
											</div>
										</div>
										<a class="dropdown-item" href=""><i class="bx bx-user-circle"></i>Profile</a>
										<a class="dropdown-item" href=""><i class="bx bx-cog"></i> Edit Profile</a>
										<a class="dropdown-item" href=""><i class="bx bxs-inbox"></i>Inbox</a>
										<a class="dropdown-item" href=""><i class="bx bx-envelope"></i>Messages</a>
										<a class="dropdown-item" href=""><i class="bx bx-slider-alt"></i> Account Settings</a>
										<a class="dropdown-item" href="backend/page-signin.html"><i class="bx bx-log-out"></i> Sign Out</a>
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
							  <p class="mg-b-0">Sales monitoring dashboard template.</p>
							</div>
						</div>
						<div class="main-dashboard-header-right">
							<div>
								<label class="tx-13">Customer Ratings</label>
								<div class="main-star">
									<i class="typcn typcn-star active"></i> <i class="typcn typcn-star active"></i> <i class="typcn typcn-star active"></i> <i class="typcn typcn-star active"></i> <i class="typcn typcn-star"></i> <span>(14,873)</span>
								</div>
							</div>
							<div>
								<label class="tx-13">Online Sales</label>
								<h5>563,275</h5>
							</div>
							<div>
								<label class="tx-13">Offline Sales</label>
								<h5>783,675</h5>
							</div>
						</div>
					</div>
					<!-- /breadcrumb -->

					<!-- row -->
					<div class="row row-sm">
						<div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
							<div class="card overflow-hidden sales-card bg-primary-gradient">
								<div class="pl-3 pt-3 pr-3 pb-2 pt-0">
									<div class="">
										<h6 class="mb-3 tx-12 text-white">TODAY ORDERS</h6>
									</div>
									<div class="pb-0 mt-0">
										<div class="d-flex">
											<div class="">
												<h4 class="tx-20 font-weight-bold mb-1 text-white">$5,74.12</h4>
												<p class="mb-0 tx-12 text-white op-7">Compared to last week</p>
											</div>
											<span class="float-right my-auto ml-auto">
												<i class="fas fa-arrow-circle-up text-white"></i>
												<span class="text-white op-7"> +427</span>
											</span>
										</div>
									</div>
								</div>
								<span id="compositeline" class="pt-1">5,9,5,6,4,12,18,14,10,15,12,5,8,5,12,5,12,10,16,12</span>
							</div>
						</div>
						<div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
							<div class="card overflow-hidden sales-card bg-danger-gradient">
								<div class="pl-3 pt-3 pr-3 pb-2 pt-0">
									<div class="">
										<h6 class="mb-3 tx-12 text-white">TODAY EARNINGS</h6>
									</div>
									<div class="pb-0 mt-0">
										<div class="d-flex">
											<div class="">
												<h4 class="tx-20 font-weight-bold mb-1 text-white">$1,230.17</h4>
												<p class="mb-0 tx-12 text-white op-7">Compared to last week</p>
											</div>
											<span class="float-right my-auto ml-auto">
												<i class="fas fa-arrow-circle-down text-white"></i>
												<span class="text-white op-7"> -23.09%</span>
											</span>
										</div>
									</div>
								</div>
								<span id="compositeline2" class="pt-1">3,2,4,6,12,14,8,7,14,16,12,7,8,4,3,2,2,5,6,7</span>
							</div>
						</div>
						<div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
							<div class="card overflow-hidden sales-card bg-success-gradient">
								<div class="pl-3 pt-3 pr-3 pb-2 pt-0">
									<div class="">
										<h6 class="mb-3 tx-12 text-white">TOTAL EARNINGS</h6>
									</div>
									<div class="pb-0 mt-0">
										<div class="d-flex">
											<div class="">
												<h4 class="tx-20 font-weight-bold mb-1 text-white">$7,125.70</h4>
												<p class="mb-0 tx-12 text-white op-7">Compared to last week</p>
											</div>
											<span class="float-right my-auto ml-auto">
												<i class="fas fa-arrow-circle-up text-white"></i>
												<span class="text-white op-7"> 52.09%</span>
											</span>
										</div>
									</div>
								</div>
								<span id="compositeline3" class="pt-1">5,10,5,20,22,12,15,18,20,15,8,12,22,5,10,12,22,15,16,10</span>
							</div>
						</div>
						<div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
							<div class="card overflow-hidden sales-card bg-warning-gradient">
								<div class="pl-3 pt-3 pr-3 pb-2 pt-0">
									<div class="">
										<h6 class="mb-3 tx-12 text-white">PRODUCT SOLD</h6>
									</div>
									<div class="pb-0 mt-0">
										<div class="d-flex">
											<div class="">
												<h4 class="tx-20 font-weight-bold mb-1 text-white">$4,820.50</h4>
												<p class="mb-0 tx-12 text-white op-7">Compared to last week</p>
											</div>
											<span class="float-right my-auto ml-auto">
												<i class="fas fa-arrow-circle-down text-white"></i>
												<span class="text-white op-7"> -152.3</span>
											</span>
										</div>
									</div>
								</div>
								<span id="compositeline4" class="pt-1">5,9,5,6,4,12,18,14,10,15,12,5,8,5,12,5,12,10,16,12</span>
							</div>
						</div>
					</div>
					<!-- row closed -->

					<!-- row opened -->
					<div class="row row-sm">
						<div class="col-md-12 col-lg-12 col-xl-7">
							<div class="card">
								<div class="card-header bg-transparent pd-b-0 pd-t-20 bd-b-0">
									<div class="d-flex justify-content-between">
										<h4 class="card-title mb-0">Order status</h4>
										<i class="mdi mdi-dots-horizontal text-gray"></i>
									</div>
									<p class="tx-12 text-muted mb-0">Order Status and Tracking. Track your order from ship date to arrival. To begin, enter your order number.</p>
								</div>
								<div class="card-body">
									<div class="total-revenue">
										<div>
										  <h4>120,750</h4>
										  <label><span class="bg-primary"></span>success</label>
										</div>
										<div>
										  <h4>56,108</h4>
										  <label><span class="bg-danger"></span>Pending</label>
										</div>
										<div>
										  <h4>32,895</h4>
										  <label><span class="bg-warning"></span>Failed</label>
										</div>
									  </div>
									<div id="bar" class="sales-bar mt-4"></div>
								</div>
							</div>
						</div>
						<div class="col-lg-12 col-xl-5">
							<div class="card card-dashboard-map-one">
								<label class="main-content-label">Sales Revenue by Customers in USA</label>
								<span class="d-block mg-b-20 text-muted tx-12">Sales Performance of all states in the United States</span>
								<div class="">
									<div class="vmap-wrapper ht-180" id="vmap2"></div>
								</div>
							</div>
						</div>
					</div>
					<!-- row closed -->

					<!-- row opened -->
					<div class="row row-sm">
						<div class="col-xl-4 col-md-12 col-lg-12">
							<div class="card">
								<div class="card-header pb-1">
									<h3 class="card-title mb-2">Recent Customers</h3>
									<p class="tx-12 mb-0 text-muted">A customer is an individual or business that purchases the goods service has evolved to include real-time</p>
								</div>
								<div class="card-body p-0 customers mt-1">
									<div class="list-group list-lg-group list-group-flush">
										<div class="list-group-item list-group-item-action" href="#">
											<div class="media mt-0">
												<img class="avatar-lg rounded-circle mr-3 my-auto" src="../assets/img/faces/3.jpg" alt="Image description">
												<div class="media-body">
													<div class="d-flex align-items-center">
														<div class="mt-0">
															<h5 class="mb-1 tx-15">Samantha Melon</h5>
															<p class="mb-0 tx-13 text-muted">User ID: #1234 <span class="text-success ml-2">Paid</span></p>
														</div>
														<span class="ml-auto wd-45p fs-16 mt-2">
															<div id="spark1" class="wd-100p"></div>
														</span>
													</div>
												</div>
											</div>
										</div>
										<div class="list-group-item list-group-item-action" href="#">
											<div class="media mt-0">
												<img class="avatar-lg rounded-circle mr-3 my-auto" src="../assets/img/faces/11.jpg" alt="Image description">
												<div class="media-body">
													<div class="d-flex align-items-center">
														<div class="mt-1">
															<h5 class="mb-1 tx-15">Jimmy Changa</h5>
															<p class="mb-0 tx-13 text-muted">User ID: #1234 <span class="text-danger ml-2">Pending</span></p>
														</div>
														<span class="ml-auto wd-45p fs-16 mt-2">
															<div id="spark2" class="wd-100p"></div>
														</span>
													</div>
												</div>
											</div>
										</div>
										<div class="list-group-item list-group-item-action" href="#">
											<div class="media mt-0">
												<img class="avatar-lg rounded-circle mr-3 my-auto" src="../assets/img/faces/17.jpg" alt="Image description">
												<div class="media-body">
													<div class="d-flex align-items-center">
														<div class="mt-1">
															<h5 class="mb-1 tx-15">Gabe Lackmen</h5>
															<p class="mb-0 tx-13 text-muted">User ID: #1234<span class="text-danger ml-2">Pending</span></p>
														</div>
														<span class="ml-auto wd-45p fs-16 mt-2">
															<div id="spark3" class="wd-100p"></div>
														</span>
													</div>
												</div>
											</div>
										</div>
										<div class="list-group-item list-group-item-action" href="#">
											<div class="media mt-0">
												<img class="avatar-lg rounded-circle mr-3 my-auto" src="../assets/img/faces/15.jpg" alt="Image description">
												<div class="media-body">
													<div class="d-flex align-items-center">
														<div class="mt-1">
															<h5 class="mb-1 tx-15">Manuel Labor</h5>
															<p class="mb-0 tx-13 text-muted">User ID: #1234<span class="text-success ml-2">Paid</span></p>
														</div>
														<span class="ml-auto wd-45p fs-16 mt-2">
															<div id="spark4" class="wd-100p"></div>
														</span>
													</div>
												</div>
											</div>
										</div>
										<div class="list-group-item list-group-item-action br-br-7 br-bl-7" href="#">
											<div class="media mt-0">
												<img class="avatar-lg rounded-circle mr-3 my-auto" src="../assets/img/faces/6.jpg" alt="Image description">
												<div class="media-body">
													<div class="d-flex align-items-center">
														<div class="mt-1">
															<h5 class="mb-1 tx-15">Sharon Needles</h5>
															<p class="b-0 tx-13 text-muted mb-0">User ID: #1234<span class="text-success ml-2">Paid</span></p>
														</div>
														<span class="ml-auto wd-45p fs-16 mt-2">
															<div id="spark5" class="wd-100p"></div>
														</span>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-4 col-md-12 col-lg-6">
							<div class="card">
								<div class="card-header pb-1">
									<h3 class="card-title mb-2">Sales Activity</h3>
									<p class="tx-12 mb-0 text-muted">Sales activities are the tactics that salespeople use to achieve their goals and objective</p>
								</div>
								<div class="product-timeline card-body pt-2 mt-1">
									<ul class="timeline-1 mb-0">
										<li class="mt-0"> <i class="ti-pie-chart bg-primary-gradient text-white product-icon"></i> <span class="font-weight-semibold mb-4 tx-14 ">Total Products</span> <a href="#" class="float-right tx-11 text-muted">3 days ago</a>
											<p class="mb-0 text-muted tx-12">1.3k New Products</p>
										</li>
										<li class="mt-0"> <i class="mdi mdi-cart-outline bg-danger-gradient text-white product-icon"></i> <span class="font-weight-semibold mb-4 tx-14 ">Total Sales</span> <a href="#" class="float-right tx-11 text-muted">35 mins ago</a>
											<p class="mb-0 text-muted tx-12">1k New Sales</p>
										</li>
										<li class="mt-0"> <i class="ti-bar-chart-alt bg-success-gradient text-white product-icon"></i> <span class="font-weight-semibold mb-4 tx-14 ">Toatal Revenue</span> <a href="#" class="float-right tx-11 text-muted">50 mins ago</a>
											<p class="mb-0 text-muted tx-12">23.5K New Revenue</p>
										</li>
										<li class="mt-0"> <i class="ti-wallet bg-warning-gradient text-white product-icon"></i> <span class="font-weight-semibold mb-4 tx-14 ">Toatal Profit</span> <a href="#" class="float-right tx-11 text-muted">1 hour ago</a>
											<p class="mb-0 text-muted tx-12">3k New profit</p>
										</li>
										<li class="mt-0"> <i class="si si-eye bg-purple-gradient text-white product-icon"></i> <span class="font-weight-semibold mb-4 tx-14 ">Customer Visits</span> <a href="#" class="float-right tx-11 text-muted">1 day ago</a>
											<p class="mb-0 text-muted tx-12">15% increased</p>
										</li>
										<li class="mt-0 mb-0"> <i class="icon-note icons bg-primary-gradient text-white product-icon"></i> <span class="font-weight-semibold mb-4 tx-14 ">Customer Reviews</span> <a href="#" class="float-right tx-11 text-muted">1 day ago</a>
											<p class="mb-0 text-muted tx-12">1.5k reviews</p>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-xl-4 col-md-12 col-lg-6">
							<div class="card">
								<div class="card-header pb-0">
									<h3 class="card-title mb-2">Recent Orders</h3>
									<p class="tx-12 mb-0 text-muted">An order is an investor's instructions to a broker or brokerage firm to purchase or sell</p>
								</div>
								<div class="card-body sales-info ot-0 pb-0 pt-0">
									<div id="chart" class="ht-150"></div>
									<div class="row sales-infomation pb-0 mb-0 mx-auto wd-100p">
										<div class="col-md-6 col">
											<p class="mb-0 d-flex"><span class="legend bg-primary brround"></span>Delivered</p>
											<h3 class="mb-1">5238</h3>
											<div class="d-flex">
												<p class="text-muted ">Last 6 months</p>
											</div>
										</div>
										<div class="col-md-6 col">
											<p class="mb-0 d-flex"><span class="legend bg-info brround"></span>Cancelled</p>
												<h3 class="mb-1">3467</h3>
											<div class="d-flex">
												<p class="text-muted">Last 6 months</p>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="card ">
								<div class="card-body">
									<div class="row">
										<div class="col-md-6">
											<div class="d-flex align-items-center pb-2">
												<p class="mb-0">Total Sales</p>
											</div>
											<h4 class="font-weight-bold mb-2">$7,590</h4>
											<div class="progress progress-style progress-sm">
												<div class="progress-bar bg-primary-gradient wd-80p" role="progressbar" aria-valuenow="78" aria-valuemin="0" aria-valuemax="78"></div>
											</div>
										</div>
										<div class="col-md-6 mt-4 mt-md-0">
											<div class="d-flex align-items-center pb-2">
												<p class="mb-0">Active Users</p>
											</div>
											<h4 class="font-weight-bold mb-2">$5,460</h4>
											<div class="progress progress-style progress-sm">
												<div class="progress-bar bg-danger-gradient wd-75" role="progressbar"  aria-valuenow="45" aria-valuemin="0" aria-valuemax="45"></div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- row close -->

					<!-- row opened -->
					<div class="row row-sm row-deck">
						<div class="col-md-12 col-lg-4 col-xl-4">
							<div class="card card-dashboard-eight pb-2">
								<h6 class="card-title">Your Top Countries</h6><span class="d-block mg-b-10 text-muted tx-12">Sales performance revenue based by country</span>
								<div class="list-group">
									<div class="list-group-item border-top-0">
										<i class="flag-icon flag-icon-us flag-icon-squared"></i>
										<p>United States</p><span>$1,671.10</span>
									</div>
									<div class="list-group-item">
										<i class="flag-icon flag-icon-nl flag-icon-squared"></i>
										<p>Netherlands</p><span>$1,064.75</span>
									</div>
									<div class="list-group-item">
										<i class="flag-icon flag-icon-gb flag-icon-squared"></i>
										<p>United Kingdom</p><span>$1,055.98</span>
									</div>
									<div class="list-group-item">
										<i class="flag-icon flag-icon-ca flag-icon-squared"></i>
										<p>Canada</p><span>$1,045.49</span>
									</div>
									<div class="list-group-item">
										<i class="flag-icon flag-icon-in flag-icon-squared"></i>
										<p>India</p><span>$1,930.12</span>
									</div>
									<div class="list-group-item border-bottom-0 mb-0">
										<i class="flag-icon flag-icon-au flag-icon-squared"></i>
										<p>Australia</p><span>$1,042.00</span>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-12 col-lg-8 col-xl-8">
							<div class="card card-table-two">
								<div class="d-flex justify-content-between">
									<h4 class="card-title mb-1">Your Most Recent Earnings</h4>
									<i class="mdi mdi-dots-horizontal text-gray"></i>
								</div>
								<span class="tx-12 tx-muted mb-3 ">This is your most recent earnings for today's date.</span>
								<div class="table-responsive country-table">
									<table class="table table-striped table-bordered mb-0 text-sm-nowrap text-lg-nowrap text-xl-nowrap">
										<thead>
											<tr>
												<th class="wd-lg-25p">Date</th>
												<th class="wd-lg-25p tx-right">Sales Count</th>
												<th class="wd-lg-25p tx-right">Earnings</th>
												<th class="wd-lg-25p tx-right">Tax Witheld</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>05 Dec 2019</td>
												<td class="tx-right tx-medium tx-inverse">34</td>
												<td class="tx-right tx-medium tx-inverse">$658.20</td>
												<td class="tx-right tx-medium tx-danger">-$45.10</td>
											</tr>
											<tr>
												<td>06 Dec 2019</td>
												<td class="tx-right tx-medium tx-inverse">26</td>
												<td class="tx-right tx-medium tx-inverse">$453.25</td>
												<td class="tx-right tx-medium tx-danger">-$15.02</td>
											</tr>
											<tr>
												<td>07 Dec 2019</td>
												<td class="tx-right tx-medium tx-inverse">34</td>
												<td class="tx-right tx-medium tx-inverse">$653.12</td>
												<td class="tx-right tx-medium tx-danger">-$13.45</td>
											</tr>
											<tr>
												<td>08 Dec 2019</td>
												<td class="tx-right tx-medium tx-inverse">45</td>
												<td class="tx-right tx-medium tx-inverse">$546.47</td>
												<td class="tx-right tx-medium tx-danger">-$24.22</td>
											</tr>
											<tr>
												<td>09 Dec 2019</td>
												<td class="tx-right tx-medium tx-inverse">31</td>
												<td class="tx-right tx-medium tx-inverse">$425.72</td>
												<td class="tx-right tx-medium tx-danger">-$25.01</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
					<!-- /row -->
				</div>
				<!-- /Container -->
			</div>
			<!-- /main-content -->
 ->
 <?php

include("footer.php");

?>