<?php


include("header.php");
/*ini_set('display_startup_errors', 1);
ini_set('display_errors', 1);
error_reporting(-1);*/
?><?php


include("header2.php");
 
?> 
				<div class="container-fluid">

					<!-- breadcrumb -->
					<div class="breadcrumb-header justify-content-between">
						<div class="my-auto">
							<div class="d-flex"><h4 class="content-title mb-0 my-auto">Mail</h4><span class="text-muted mt-1 tx-13 ml-2 mb-0">/ Mail</span></div>
						</div>
						
					</div>
					<!-- breadcrumb -->

					<!-- row -->
					<div class="row row-sm main-content-mail">
						<div class="col-lg-4 col-xl-3 col-md-12">
							<div class="card mg-b-20 mg-md-b-0">
								<div class="card-body">
									<div class="main-content-left main-content-left-mail">
										<a class="btn btn-main-primary btn-compose" href="" id="btnCompose">Compose</a>
										<div class="main-mail-menu">
												<nav class="nav main-nav-column mg-b-20">
											<a class="nav-link" href="notification-list"><i class="bx bxs-inbox"></i> Inbox <!--<span>18</span>--></a>
										<!--	<a class="nav-link" href=""><i class="bx bx-star"></i> Starred <span>8</span></a>
											<a class="nav-link" href=""><i class="bx bx-alarm-snooze"></i> Snoozed <span>6</span></a>
											<a class="nav-link" href=""><i class="bx bx-bookmarks"></i> Important <span>15</span></a>-->
											<a class="nav-link" href=""><i class="bx bx-send"></i> Sent Mail <!--<span>24</span>--></a>
											<!--<a class="nav-link" href=""><i class="bx bx-edit"></i> Drafts <span>2</span></a>
											<a class="nav-link" href=""><i class="bx bx-message-error"></i> Spam <span>32</span></a>
											<a class="nav-link" href=""><i class="bx bx-message-square-detail"></i> Chats <span>14</span></a>-->
											<a class="nav-link" href="notification-list"><i class="bx bx-folder"></i> All Mail <!--<!--<span>652</span>--></a>
											<!--<a class="nav-link" href=""><i class="bx bx-book-content"></i> Contacts <span>547</span></a>
											<a class="nav-link" href=""><i class="bx bx-trash"></i> Trash <span>365</span></a>-->
										</nav>
									 
										</div><!-- main-mail-menu -->
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-8 col-xl-9 col-md-12">
							<div class="card">
								<div class="main-content-body main-content-body-mail card-body">
									<div class="main-mail-header">
										<div>
											<h4 class="main-content-title mg-b-5">Inbox</h4>
											<p>You have 2 unread messages</p>
										</div>
										<!--<div>
											<span>1-50 of 1200</span>
											<div class="btn-group" role="group">
												<button class="btn btn-outline-secondary disabled" type="button"><i class="icon ion-ios-arrow-back"></i></button> <button class="btn btn-outline-secondary" type="button"><i class="icon ion-ios-arrow-forward"></i></button>
											</div>
										</div>-->
									</div><!-- main-mail-list-header -->
									<!--<div class="main-mail-options">
										<label class="ckbox"><input id="checkAll" type="checkbox"> <span></span></label>
										<div class="btn-group">
											<button class="btn btn-light"><i class="bx bx-refresh"></i></button> <button class="btn btn-light disabled"><i class="bx bx-archive"></i></button> <button class="btn btn-light disabled"><i class="bx bx-info-circle"></i></button> <button class="btn btn-light disabled"><i class="bx bx-trash"></i></button> <button class="btn btn-light disabled"><i class="bx bx-folder-open"></i></button> <button class="btn btn-light disabled"><i class="bx bx-purchase-tag-alt"></i></button>
										</div> 
									</div>--><!-- main-mail-options -->
									<div class="main-mail-list">
                                        
                                        <?php 
								include("includes/view-notification.php");
								
								?>
                                       
									</div>
									<div class="mg-lg-b-30"></div>
								</div>
							</div>
						</div>
						<div class="main-mail-compose">
							<div>
								<div class="container">
									<div class="main-mail-compose-box">
										<div class="main-mail-compose-header">
											<span>New Message</span>
											<nav class="nav">
												<a class="nav-link" href=""><i class="fas fa-minus"></i></a> <a class="nav-link" href=""><i class="fas fa-compress"></i></a> <a class="nav-link" href=""><i class="fas fa-times"></i></a>
											</nav>
										</div>
										<div class="main-mail-compose-body">
											<div class="form-group">
												<label class="form-label">To</label>
												<div>
													<input class="form-control" placeholder="Enter recipient's email address" type="text">
												</div>
											</div>
											<div class="form-group">
												<label class="form-label">Subject</label>
												<div>
													<input class="form-control" type="text">
												</div>
											</div>
											<div class="form-group">
												<textarea class="form-control" placeholder="Write your message here..." rows="8"></textarea>
											</div>
											<div class="form-group mg-b-0">
												<nav class="nav">
													<a class="nav-link" data-toggle="tooltip" href="" title="Add attachment"><i class="fas fa-paperclip"></i></a> <a class="nav-link" data-toggle="tooltip" href="" title="Add photo"><i class="far fa-image"></i></a> <a class="nav-link" data-toggle="tooltip" href="" title="Add link"><i class="fas fa-link"></i></a> <a class="nav-link" data-toggle="tooltip" href="" title="Emoticons"><i class="far fa-smile"></i></a> <a class="nav-link" data-toggle="tooltip" href="" title="Discard"><i class="far fa-trash-alt"></i></a>
												</nav><button class="btn btn-primary">Send</button>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- /row -->
				</div><!-- container closed -->
			</div>
			<!-- main-content closed -->

			<!-- Sidebar-right-->
			<div class="sidebar sidebar-right sidebar-animate">
				<div class="panel panel-primary card mb-0 box-shadow">
					<div class="tab-menu-heading border-0 p-3">
						<div class="card-title mb-0">Notifications</div>
						<div class="card-options ml-auto">
							<a href="#" class="sidebar-remove"><i class="fe fe-x"></i></a>
						</div>
					</div>
					<div class="panel-body tabs-menu-body latest-tasks p-0 border-0">
						<div class="tabs-menu ">
							<!-- Tabs -->
							<ul class="nav panel-tabs">
								<li class=""><a href="#side1" class="active" data-toggle="tab"><i class="ion ion-md-chatboxes tx-18 mr-2"></i> Chat</a></li>
								<li><a href="#side2" data-toggle="tab"><i class="ion ion-md-notifications tx-18  mr-2"></i> Notifications</a></li>
								<li><a href="#side3" data-toggle="tab"><i class="ion ion-md-contacts tx-18 mr-2"></i> Friends</a></li>
							</ul>
						</div>
						<div class="tab-content">
							<div class="tab-pane active " id="side1">
								<div class="list d-flex align-items-center border-bottom p-3">
									<div class="">
										<span class="avatar bg-primary brround avatar-md">CH</span>
									</div>
									<a class="wrapper w-100 ml-3" href="#" >
										<p class="mb-0 d-flex ">
											<b>New Websites is Created</b>
										</p>
										<div class="d-flex justify-content-between align-items-center">
											<div class="d-flex align-items-center">
												<i class="mdi mdi-clock text-muted mr-1"></i>
												<small class="text-muted ml-auto">30 mins ago</small>
												<p class="mb-0"></p>
											</div>
										</div>
									</a>
								</div>
								<div class="list d-flex align-items-center border-bottom p-3">
									<div class="">
										<span class="avatar bg-danger brround avatar-md">N</span>
									</div>
									<a class="wrapper w-100 ml-3" href="#" >
										<p class="mb-0 d-flex ">
											<b>Prepare For the Next Project</b>
										</p>
										<div class="d-flex justify-content-between align-items-center">
											<div class="d-flex align-items-center">
												<i class="mdi mdi-clock text-muted mr-1"></i>
												<small class="text-muted ml-auto">2 hours ago</small>
												<p class="mb-0"></p>
											</div>
										</div>
									</a>
								</div>
								<div class="list d-flex align-items-center border-bottom p-3">
									<div class="">
										<span class="avatar bg-info brround avatar-md">S</span>
									</div>
									<a class="wrapper w-100 ml-3" href="#" >
										<p class="mb-0 d-flex ">
											<b>Decide the live Discussion</b>
										</p>
										<div class="d-flex justify-content-between align-items-center">
											<div class="d-flex align-items-center">
												<i class="mdi mdi-clock text-muted mr-1"></i>
												<small class="text-muted ml-auto">3 hours ago</small>
												<p class="mb-0"></p>
											</div>
										</div>
									</a>
								</div>
								<div class="list d-flex align-items-center border-bottom p-3">
									<div class="">
										<span class="avatar bg-warning brround avatar-md">K</span>
									</div>
									<a class="wrapper w-100 ml-3" href="#" >
										<p class="mb-0 d-flex ">
											<b>Meeting at 3:00 pm</b>
										</p>
										<div class="d-flex justify-content-between align-items-center">
											<div class="d-flex align-items-center">
												<i class="mdi mdi-clock text-muted mr-1"></i>
												<small class="text-muted ml-auto">4 hours ago</small>
												<p class="mb-0"></p>
											</div>
										</div>
									</a>
								</div>
								<div class="list d-flex align-items-center border-bottom p-3">
									<div class="">
										<span class="avatar bg-success brround avatar-md">R</span>
									</div>
									<a class="wrapper w-100 ml-3" href="#" >
										<p class="mb-0 d-flex ">
											<b>Prepare for Presentation</b>
										</p>
										<div class="d-flex justify-content-between align-items-center">
											<div class="d-flex align-items-center">
												<i class="mdi mdi-clock text-muted mr-1"></i>
												<small class="text-muted ml-auto">1 days ago</small>
												<p class="mb-0"></p>
											</div>
										</div>
									</a>
								</div>
								<div class="list d-flex align-items-center border-bottom p-3">
									<div class="">
										<span class="avatar bg-pink brround avatar-md">MS</span>
									</div>
									<a class="wrapper w-100 ml-3" href="#" >
										<p class="mb-0 d-flex ">
											<b>Prepare for Presentation</b>
										</p>
										<div class="d-flex justify-content-between align-items-center">
											<div class="d-flex align-items-center">
												<i class="mdi mdi-clock text-muted mr-1"></i>
												<small class="text-muted ml-auto">1 days ago</small>
												<p class="mb-0"></p>
											</div>
										</div>
									</a>
								</div>
								<div class="list d-flex align-items-center border-bottom p-3">
									<div class="">
										<span class="avatar bg-purple brround avatar-md">L</span>
									</div>
									<a class="wrapper w-100 ml-3" href="#" >
										<p class="mb-0 d-flex ">
											<b>Prepare for Presentation</b>
										</p>
										<div class="d-flex justify-content-between align-items-center">
											<div class="d-flex align-items-center">
												<i class="mdi mdi-clock text-muted mr-1"></i>
												<small class="text-muted ml-auto">45 mintues ago</small>
												<p class="mb-0"></p>
											</div>
										</div>
									</a>
								</div>
								<div class="list d-flex align-items-center p-3">
									<div class="">
										<span class="avatar bg-blue brround avatar-md">U</span>
									</div>
									<a class="wrapper w-100 ml-3" href="#" >
										<p class="mb-0 d-flex ">
											<b>Prepare for Presentation</b>
										</p>
										<div class="d-flex justify-content-between align-items-center">
											<div class="d-flex align-items-center">
												<i class="mdi mdi-clock text-muted mr-1"></i>
												<small class="text-muted ml-auto">2 days ago</small>
												<p class="mb-0"></p>
											</div>
										</div>
									</a>
								</div>
							</div>
							<div class="tab-pane  " id="side2">
								<div class="list-group list-group-flush ">
									<div class="list-group-item d-flex  align-items-center">
										<div class="mr-3">
											<span class="avatar avatar-lg brround cover-image" data-image-src="../../assets/img/faces/12.jpg"><span class="avatar-status bg-success"></span></span>
										</div>
										<div>
											<strong>Madeleine</strong> Hey! there I' am available....
											<div class="small text-muted">
												3 hours ago
											</div>
										</div>
									</div>
									<div class="list-group-item d-flex  align-items-center">
										<div class="mr-3">
											<span class="avatar avatar-lg brround cover-image" data-image-src="../../assets/img/faces/1.jpg"></span>
										</div>
										<div>
											<strong>Anthony</strong> New product Launching...
											<div class="small text-muted">
												5 hour ago
											</div>
										</div>
									</div>
									<div class="list-group-item d-flex  align-items-center">
										<div class="mr-3">
											<span class="avatar avatar-lg brround cover-image" data-image-src="../../assets/img/faces/2.jpg"><span class="avatar-status bg-success"></span></span>
										</div>
										<div>
											<strong>Olivia</strong> New Schedule Realease......
											<div class="small text-muted">
												45 mintues ago
											</div>
										</div>
									</div>
									<div class="list-group-item d-flex  align-items-center">
										<div class="mr-3">
											<span class="avatar avatar-lg brround cover-image" data-image-src="../../assets/img/faces/8.jpg"><span class="avatar-status bg-success"></span></span>
										</div>
										<div>
											<strong>Madeleine</strong> Hey! there I' am available....
											<div class="small text-muted">
												3 hours ago
											</div>
										</div>
									</div>
									<div class="list-group-item d-flex  align-items-center">
										<div class="mr-3">
											<span class="avatar avatar-lg brround cover-image" data-image-src="../../assets/img/faces/11.jpg"></span>
										</div>
										<div>
											<strong>Anthony</strong> New product Launching...
											<div class="small text-muted">
												5 hour ago
											</div>
										</div>
									</div>
									<div class="list-group-item d-flex  align-items-center">
										<div class="mr-3">
											<span class="avatar avatar-lg brround cover-image" data-image-src="../../assets/img/faces/6.jpg"><span class="avatar-status bg-success"></span></span>
										</div>
										<div>
											<strong>Olivia</strong> New Schedule Realease......
											<div class="small text-muted">
												45 mintues ago
											</div>
										</div>
									</div>
									<div class="list-group-item d-flex  align-items-center">
										<div class="mr-3">
											<span class="avatar avatar-lg brround cover-image" data-image-src="../../assets/img/faces/9.jpg"><span class="avatar-status bg-success"></span></span>
										</div>
										<div>
											<strong>Olivia</strong> Hey! there I' am available....
											<div class="small text-muted">
												12 mintues ago
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="tab-pane  " id="side3">
								<div class="list-group list-group-flush ">
									<div class="list-group-item d-flex  align-items-center">
										<div class="mr-2">
											<span class="avatar avatar-md brround cover-image" data-image-src="../../assets/img/faces/9.jpg"><span class="avatar-status bg-success"></span></span>
										</div>
										<div class="">
											<div class="font-weight-semibold" data-toggle="modal" data-target="#chatmodel">Mozelle Belt</div>
										</div>
										<div class="ml-auto">
											<a href="#" class="btn btn-sm btn-light" data-toggle="modal" data-target="#chatmodel"><i class="fab fa-facebook-messenger"></i></a>
										</div>
									</div>
									<div class="list-group-item d-flex  align-items-center">
										<div class="mr-2">
											<span class="avatar avatar-md brround cover-image" data-image-src="../../assets/img/faces/11.jpg"></span>
										</div>
										<div class="">
											<div class="font-weight-semibold" data-toggle="modal" data-target="#chatmodel">Florinda Carasco</div>
										</div>
										<div class="ml-auto">
											<a href="#" class="btn btn-sm btn-light" data-toggle="modal" data-target="#chatmodel" ><i class="fab fa-facebook-messenger"></i></a>
										</div>
									</div>
									<div class="list-group-item d-flex  align-items-center">
										<div class="mr-2">
											<span class="avatar avatar-md brround cover-image" data-image-src="../../assets/img/faces/10.jpg"><span class="avatar-status bg-success"></span></span>
										</div>
										<div class="">
											<div class="font-weight-semibold" data-toggle="modal" data-target="#chatmodel">Alina Bernier</div>
										</div>
										<div class="ml-auto">
											<a href="#" class="btn btn-sm btn-light" data-toggle="modal" data-target="#chatmodel"><i class="fab fa-facebook-messenger"></i></a>
										</div>
									</div>
									<div class="list-group-item d-flex  align-items-center">
										<div class="mr-2">
											<span class="avatar avatar-md brround cover-image" data-image-src="../../assets/img/faces/2.jpg"><span class="avatar-status bg-success"></span></span>
										</div>
										<div class="">
											<div class="font-weight-semibold" data-toggle="modal" data-target="#chatmodel">Zula Mclaughin</div>
										</div>
										<div class="ml-auto">
											<a href="#" class="btn btn-sm btn-light" data-toggle="modal" data-target="#chatmodel"><i class="fab fa-facebook-messenger"></i></a>
										</div>
									</div>
									<div class="list-group-item d-flex  align-items-center">
										<div class="mr-2">
											<span class="avatar avatar-md brround cover-image" data-image-src="../../assets/img/faces/13.jpg"></span>
										</div>
										<div class="">
											<div class="font-weight-semibold" data-toggle="modal" data-target="#chatmodel">Isidro Heide</div>
										</div>
										<div class="ml-auto">
											<a href="#" class="btn btn-sm btn-light" data-toggle="modal" data-target="#chatmodel"><i class="fab fa-facebook-messenger"></i></a>
										</div>
									</div>
									<div class="list-group-item d-flex  align-items-center">
										<div class="mr-2">
											<span class="avatar avatar-md brround cover-image" data-image-src="../../assets/img/faces/12.jpg"><span class="avatar-status bg-success"></span></span>
										</div>
										<div class="">
											<div class="font-weight-semibold" data-toggle="modal" data-target="#chatmodel">Mozelle Belt</div>
										</div>
										<div class="ml-auto">
											<a href="#" class="btn btn-sm btn-light" ><i class="fab fa-facebook-messenger"></i></a>
										</div>
									</div>
									<div class="list-group-item d-flex  align-items-center">
										<div class="mr-2">
											<span class="avatar avatar-md brround cover-image" data-image-src="../../assets/img/faces/4.jpg"></span>
										</div>
										<div class="">
											<div class="font-weight-semibold" data-toggle="modal" data-target="#chatmodel">Florinda Carasco</div>
										</div>
										<div class="ml-auto">
											<a href="#" class="btn btn-sm btn-light" data-toggle="modal" data-target="#chatmodel"><i class="fab fa-facebook-messenger"></i></a>
										</div>
									</div>
									<div class="list-group-item d-flex  align-items-center">
										<div class="mr-2">
											<span class="avatar avatar-md brround cover-image" data-image-src="../../assets/img/faces/7.jpg"></span>
										</div>
										<div class="">
											<div class="font-weight-semibold" data-toggle="modal" data-target="#chatmodel">Alina Bernier</div>
										</div>
										<div class="ml-auto">
											<a href="#" class="btn btn-sm btn-light" ><i class="fab fa-facebook-messenger"></i></a>
										</div>
									</div>
									<div class="list-group-item d-flex  align-items-center">
										<div class="mr-2">
											<span class="avatar avatar-md brround cover-image" data-image-src="../../assets/img/faces/2.jpg"></span>
										</div>
										<div class="">
											<div class="font-weight-semibold" data-toggle="modal" data-target="#chatmodel">Zula Mclaughin</div>
										</div>
										<div class="ml-auto">
											<a href="#" class="btn btn-sm btn-light" data-toggle="modal" data-target="#chatmodel" ><i class="fab fa-facebook-messenger"></i></a>
										</div>
									</div>
									<div class="list-group-item d-flex  align-items-center">
										<div class="mr-2">
											<span class="avatar avatar-md brround cover-image" data-image-src="../../assets/img/faces/14.jpg"><span class="avatar-status bg-success"></span></span>
										</div>
										<div class="">
											<div class="font-weight-semibold" data-toggle="modal" data-target="#chatmodel">Isidro Heide</div>
										</div>
										<div class="ml-auto">
											<a href="#" class="btn btn-sm btn-light" ><i class="fab fa-facebook-messenger"></i></a>
										</div>
									</div>
									<div class="list-group-item d-flex  align-items-center">
										<div class="mr-2">
											<span class="avatar avatar-md brround cover-image" data-image-src="../../assets/img/faces/11.jpg"></span>
										</div>
										<div class="">
											<div class="font-weight-semibold" data-toggle="modal" data-target="#chatmodel">Florinda Carasco</div>
										</div>
										<div class="ml-auto">
											<a href="#" class="btn btn-sm btn-light" data-toggle="modal" data-target="#chatmodel"><i class="fab fa-facebook-messenger"></i></a>
										</div>
									</div>
									<div class="list-group-item d-flex  align-items-center">
										<div class="mr-2">
											<span class="avatar avatar-md brround cover-image" data-image-src="../../assets/img/faces/9.jpg"></span>
										</div>
										<div class="">
											<div class="font-weight-semibold" data-toggle="modal" data-target="#chatmodel">Alina Bernier</div>
										</div>
										<div class="ml-auto">
											<a href="#" class="btn btn-sm btn-light" data-toggle="modal" data-target="#chatmodel"><i class="fab fa-facebook-messenger"></i></a>
										</div>
									</div>
									<div class="list-group-item d-flex  align-items-center">
										<div class="mr-2">
											<span class="avatar avatar-md brround cover-image" data-image-src="../../assets/img/faces/15.jpg"><span class="avatar-status bg-success"></span></span>
										</div>
										<div class="">
											<div class="font-weight-semibold" data-toggle="modal" data-target="#chatmodel">Zula Mclaughin</div>
										</div>
										<div class="ml-auto">
											<a href="#" class="btn btn-sm btn-light" data-toggle="modal" data-target="#chatmodel"><i class="fab fa-facebook-messenger"></i></a>
										</div>
									</div>
									<div class="list-group-item d-flex  align-items-center">
										<div class="mr-2">
											<span class="avatar avatar-md brround cover-image" data-image-src="../../assets/img/faces/4.jpg"></span>
										</div>
										<div class="">
											<div class="font-weight-semibold" data-toggle="modal" data-target="#chatmodel">Isidro Heide</div>
										</div>
										<div class="ml-auto">
											<a href="#" class="btn btn-sm btn-light" data-toggle="modal" data-target="#chatmodel"><i class="fab fa-facebook-messenger"></i></a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--/Sidebar-right-->

			<!-- Message Modal -->
			<div class="modal fade" id="chatmodel" tabindex="-1" role="dialog"  aria-hidden="true">
				<div class="modal-dialog modal-dialog-right chatbox" role="document">
					<div class="modal-content chat border-0">
						<div class="card overflow-hidden mb-0 border-0">
							<!-- action-header -->
							<div class="action-header clearfix">
								<div class="float-left hidden-xs d-flex ml-2">
									<div class="img_cont mr-3">
										<img src="../assets/img/faces/6.jpg" class="rounded-circle user_img" alt="img">
									</div>
									<div class="align-items-center mt-2">
										<h4 class="text-white mb-0 font-weight-semibold">Daneil Scott</h4>
										<span class="dot-label bg-success"></span><span class="mr-3 text-white">online</span>
									</div>
								</div>
								<ul class="ah-actions actions align-items-center">
									<li class="call-icon">
										<a href="" class="d-done d-md-block phone-button" data-toggle="modal" data-target="#audiomodal">
											<i class="si si-phone"></i>
										</a>
									</li>
									<li class="video-icon">
										<a href="" class="d-done d-md-block phone-button" data-toggle="modal" data-target="#videomodal">
											<i class="si si-camrecorder"></i>
										</a>
									</li>
									<li class="dropdown">
										<a href="" data-toggle="dropdown" aria-expanded="true">
											<i class="si si-options-vertical"></i>
										</a>
										<ul class="dropdown-menu dropdown-menu-right">
											<li><i class="fa fa-user-circle"></i> View profile</li>
											<li><i class="fa fa-users"></i>Add friends</li>
											<li><i class="fa fa-plus"></i> Add to group</li>
											<li><i class="fa fa-ban"></i> Block</li>
										</ul>
									</li>
									<li>
										<a href=""  class="" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true"><i class="si si-close text-white"></i></span>
										</a>
									</li>
								</ul>
							</div>
							<!-- action-header end -->

							<!-- msg_card_body -->
							<div class="card-body msg_card_body">
								<div class="chat-box-single-line">
									<abbr class="timestamp">February 1st, 2019</abbr>
								</div>
								<div class="d-flex justify-content-start">
									<div class="img_cont_msg">
										<img src="../assets/img/faces/6.jpg" class="rounded-circle user_img_msg" alt="img">
									</div>
									<div class="msg_cotainer">
										Hi, how are you Jenna Side?
										<span class="msg_time">8:40 AM, Today</span>
									</div>
								</div>
								<div class="d-flex justify-content-end ">
									<div class="msg_cotainer_send">
										Hi Connor Paige i am good tnx how about you?
										<span class="msg_time_send">8:55 AM, Today</span>
									</div>
									<div class="img_cont_msg">
										<img src="../assets/img/faces/9.jpg" class="rounded-circle user_img_msg" alt="img">
									</div>
								</div>
								<div class="d-flex justify-content-start ">
									<div class="img_cont_msg">
										<img src="../assets/img/faces/6.jpg" class="rounded-circle user_img_msg" alt="img">
									</div>
									<div class="msg_cotainer">
										I am good too, thank you for your chat template
										<span class="msg_time">9:00 AM, Today</span>
									</div>
								</div>
								<div class="d-flex justify-content-end ">
									<div class="msg_cotainer_send">
										You welcome Connor Paige
										<span class="msg_time_send">9:05 AM, Today</span>
									</div>
									<div class="img_cont_msg">
										<img src="../assets/img/faces/9.jpg" class="rounded-circle user_img_msg" alt="img">
									</div>
								</div>
								<div class="d-flex justify-content-start ">
									<div class="img_cont_msg">
										<img src="../assets/img/faces/6.jpg" class="rounded-circle user_img_msg" alt="img">
									</div>
									<div class="msg_cotainer">
										Yo, Can you update Views?
										<span class="msg_time">9:07 AM, Today</span>
									</div>
								</div>
								<div class="d-flex justify-content-end mb-4">
									<div class="msg_cotainer_send">
										But I must explain to you how all this mistaken  born and I will give
										<span class="msg_time_send">9:10 AM, Today</span>
									</div>
									<div class="img_cont_msg">
										<img src="../assets/img/faces/9.jpg" class="rounded-circle user_img_msg" alt="img">
									</div>
								</div>
								<div class="d-flex justify-content-start ">
									<div class="img_cont_msg">
										<img src="../assets/img/faces/6.jpg" class="rounded-circle user_img_msg" alt="img">
									</div>
									<div class="msg_cotainer">
										Yo, Can you update Views?
										<span class="msg_time">9:07 AM, Today</span>
									</div>
								</div>
								<div class="d-flex justify-content-end mb-4">
									<div class="msg_cotainer_send">
										But I must explain to you how all this mistaken  born and I will give
										<span class="msg_time_send">9:10 AM, Today</span>
									</div>
									<div class="img_cont_msg">
										<img src="../assets/img/faces/9.jpg" class="rounded-circle user_img_msg" alt="img">
									</div>
								</div>
								<div class="d-flex justify-content-start ">
									<div class="img_cont_msg">
										<img src="../assets/img/faces/6.jpg" class="rounded-circle user_img_msg" alt="img">
									</div>
									<div class="msg_cotainer">
										Yo, Can you update Views?
										<span class="msg_time">9:07 AM, Today</span>
									</div>
								</div>
								<div class="d-flex justify-content-end mb-4">
									<div class="msg_cotainer_send">
										But I must explain to you how all this mistaken  born and I will give
										<span class="msg_time_send">9:10 AM, Today</span>
									</div>
									<div class="img_cont_msg">
										<img src="../assets/img/faces/9.jpg" class="rounded-circle user_img_msg" alt="img">
									</div>
								</div>
								<div class="d-flex justify-content-start">
									<div class="img_cont_msg">
										<img src="../assets/img/faces/6.jpg" class="rounded-circle user_img_msg" alt="img">
									</div>
									<div class="msg_cotainer">
										Okay Bye, text you later..
										<span class="msg_time">9:12 AM, Today</span>
									</div>
								</div>
							</div>
							<!-- msg_card_body end -->
							<!-- card-footer -->
							<div class="card-footer">
								<div class="msb-reply d-flex">
									<div class="input-group">
										<input type="text" class="form-control " placeholder="Typing....">
										<div class="input-group-append ">
											<button type="button" class="btn btn-primary ">
												<i class="far fa-paper-plane" aria-hidden="true"></i>
											</button>
										</div>
									</div>
								</div>
							</div><!-- card-footer end -->
						</div>
					</div>
				</div>
			</div>

			<!--Video Modal -->
			<div id="videomodal" class="modal fade">
				<div class="modal-dialog" role="document">
					<div class="modal-content bg-dark border-0 text-white">
						<div class="modal-body mx-auto text-center p-7">
							<h5>Valex Video call</h5>
							<img src="../assets/img/faces/6.jpg" class="rounded-circle user-img-circle h-8 w-8 mt-4 mb-3" alt="img">
							<h4 class="mb-1 font-weight-semibold">Daneil Scott</h4>
							<h6>Calling...</h6>
							<div class="mt-5">
								<div class="row">
									<div class="col-4">
										<a class="icon icon-shape rounded-circle mb-0 mr-3" href="#">
											<i class="fas fa-video-slash"></i>
										</a>
									</div>
									<div class="col-4">
										<a class="icon icon-shape rounded-circle text-white mb-0 mr-3" href="#" data-dismiss="modal" aria-label="Close">
											<i class="fas fa-phone bg-danger text-white"></i>
										</a>
									</div>
									<div class="col-4">
										<a class="icon icon-shape rounded-circle mb-0 mr-3" href="#">
											<i class="fas fa-microphone-slash"></i>
										</a>
									</div>
								</div>
							</div>
						</div><!-- modal-body -->
					</div>
				</div><!-- modal-dialog -->
			</div><!-- modal -->

			<!-- Audio Modal -->
			<div id="audiomodal" class="modal fade">
				<div class="modal-dialog" role="document">
					<div class="modal-content border-0">
						<div class="modal-body mx-auto text-center p-7">
							<h5>Valex Voice call</h5>
							<img src="../assets/img/faces/6.jpg" class="rounded-circle user-img-circle h-8 w-8 mt-4 mb-3" alt="img">
							<h4 class="mb-1  font-weight-semibold">Daneil Scott</h4>
							<h6>Calling...</h6>
							<div class="mt-5">
								<div class="row">
									<div class="col-4">
										<a class="icon icon-shape rounded-circle mb-0 mr-3" href="#">
											<i class="fas fa-volume-up bg-light"></i>
										</a>
									</div>
									<div class="col-4">
										<a class="icon icon-shape rounded-circle text-white mb-0 mr-3" href="#" data-dismiss="modal" aria-label="Close">
											<i class="fas fa-phone text-white bg-success"></i>
										</a>
									</div>
									<div class="col-4">
										<a class="icon icon-shape  rounded-circle mb-0 mr-3" href="#">
											<i class="fas fa-microphone-slash bg-light"></i>
										</a>
									</div>
								</div>
							</div>
						</div><!-- modal-body -->
					</div>
				</div><!-- modal-dialog -->
			</div><!-- modal -->

		<?php 

include("footer.php");

?>