 <?php


include("header.php");
/*ini_set('display_startup_errors', 1);
ini_set('display_errors', 1);
error_reporting(-1);*/
?><?php


include("header2.php");
 
?> 
	 <?php
						
						include("includes/view-notificationp-full.php");
						
						?>	

				<!-- container -->
				<div class="container-fluid">

					<!-- breadcrumb -->
					<div class="breadcrumb-header justify-content-between">
						<div class="my-auto">
							<div class="d-flex"><h4 class="content-title mb-0 my-auto">Mail</h4><span class="text-muted mt-1 tx-13 ml-2 mb-0">/ Read-Mail</span></div>
						</div>
						<div class="d-flex my-xl-auto right-content">
							<div class="pr-1 mb-xl-0">
								<button type="button" class="btn btn-info btn-icon mr-2"><i class="mdi mdi-filter-variant"></i></button>
							</div>
							<div class="pr-1 mb-xl-0">
								<button type="button" class="btn btn-danger btn-icon mr-2"><i class="mdi mdi-star"></i></button>
							</div>
							<div class="pr-1 mb-xl-0">
								<button type="button" class="btn btn-warning  btn-icon mr-2"><i class="mdi mdi-refresh"></i></button>
							</div>
							 
						</div>
					</div>
					<!-- breadcrumb -->

					<!-- row opened -->
					<div class="row row-sm">
						<!-- Col -->
						<div class="col-lg-4 col-xl-3 col-md-12 col-sm-12">
							<div class="card mg-b-20">
								<div class="main-content-left main-content-left-mail card-body">
									<a class="btn btn-primary btn-compose" href="" id="btnCompose">Compose</a>
									<div class="main-mail-menu">
										<nav class="nav main-nav-column mg-b-20">
											<a class="nav-link" href="notification-list"><i class="bx bxs-inbox"></i> Inbox <!--<!--<span>18</span>--></a>
										<!--	<a class="nav-link" href=""><i class="bx bx-star"></i> Starred <span>8</span></a>
											<a class="nav-link" href=""><i class="bx bx-alarm-snooze"></i> Snoozed <span>6</span></a>
											<a class="nav-link" href=""><i class="bx bx-bookmarks"></i> Important <span>15</span></a>-->
											<a class="nav-link" href=""><i class="bx bx-send"></i> Sent Mail <!--<span>24</span>--></a>
											<!--<a class="nav-link" href=""><i class="bx bx-edit"></i> Drafts <span>2</span></a>
											<a class="nav-link" href=""><i class="bx bx-message-error"></i> Spam <span>32</span></a>
											<a class="nav-link" href=""><i class="bx bx-message-square-detail"></i> Chats <span>14</span></a>-->
											<a class="nav-link" href="notification-list"><i class="bx bx-folder"></i> All Mail <!--<span>652</span>--></a>
											<!--<a class="nav-link" href=""><i class="bx bx-book-content"></i> Contacts <span>547</span></a>
											<a class="nav-link" href=""><i class="bx bx-trash"></i> Trash <span>365</span></a>-->
										</nav>
									 
									</div><!-- main-mail-menu -->
								</div>
							</div>
						</div>
						<!-- /Col -->
						<div class="col-xl-9 col-lg-8 col-md-12 col-sm-12">
							<div class="card">
								<div class="card-header">
									<h4 class="card-title"><?php echo $_SESSION['name'];?> <span class="badge badge-primary">inbox</span></h4>
								</div>
								<div class="card-body">
									<div class="email-media">
										<div class="mt-0 d-sm-flex">
											<img class="mr-2 rounded-circle avatar-xl" src="../assets/img/faces/6.jpg" alt="avatar">
											<div class="media-body">
												<div class="float-right d-none d-md-flex fs-15">
													<span class="mr-3"><?php echo $created_at;?></span>
													<small class="mr-3"><i class="bx bx-star tx-18" data-toggle="tooltip" title="" data-original-title="Rated"></i></small>
													<small class="mr-3"><i class="bx bx-reply tx-18" data-toggle="tooltip" title="" data-original-title="Reply"></i></small>
													<div class="mr-3">
														<a href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-horizontal  tx-18" data-toggle="tooltip" title="" data-original-title="View more"></i></a>
														<!--<div class="dropdown-menu">
															<a class="dropdown-item" href="#">Reply</a>
															<a class="dropdown-item" href="#">Report Spam</a>
															<a class="dropdown-item" href="#">Delete</a>
															<a class="dropdown-item" href="#">Show Original</a>
															<a class="dropdown-item" href="#">Print</a>
															<a class="dropdown-item" href="#">Filter</a>
														</div>-->
													</div>
												</div>
												<div class="media-title  font-weight-bold mt-3"><?php echo $sendername; ?> <span class="text-muted">(<?php echo $senderemail; ?>)</span></div>
												<p class="mb-0">to <?php $send_to_name; ?> (<?php $recieve_to_name; ?> ) </p>
												<small class="mr-2 d-md-none"><?php echo $created_at;?></small>
												<small class="mr-2 d-md-none"><i class="fe fe-star text-muted" data-toggle="tooltip" title="" data-original-title="Rated"></i></small>
												<small class="mr-2 d-md-none"><i class="fa fa-reply text-muted" data-toggle="tooltip" title="" data-original-title="Reply"></i></small>
											</div>
										</div>
									</div>
									<div class="eamil-body mt-5">
										 <?php 
                                        
                                        echo $message;
                                        
                                        
                                        ?>
										<hr>
										<div class="email-attch">
											<div class="float-right">
												<a href="#"><i class="bx bxs-download tx-18" data-toggle="tooltip" title="" data-original-title="Download"></i></a>
											</div>
										<!--	<p>3 Attachments<a href="#"> View All Images</a></p>
											<div class="emai-img">
												<div class="d-sm-flex">
													<div class=" m-2">
														<a href="#"><img class="wd-150 mb-2" src="../assets/img/photos/1.jpg" alt="placeholder image"></a>
														<h6 class="mb-3 mb-lg-0">1.jpg <small class="text-muted">12kb</small></h6>
													</div>
													<div class="m-2">
														<a href="#"><img class="wd-150 mb-2" src="../assets/img/photos/2.jpg" alt="placeholder image"></a>
														<h6 class="mb-3 mb-lg-0">2.jpg <small class="text-muted">18kb</small></h6>
													</div>
													<div class="m-2">
														<a href="#"><img class="wd-150 mb-2" src="../assets/img/photos/3.jpg" alt="placeholder image"></a>
														<h6>3.jpg <small class="text-muted">21kb</small></h6>
													</div>
												</div>
											</div>-->
										</div>
									</div>
								</div>
								<!--<div class="card-footer">
									<a class="btn btn-primary mt-1 mb-1" href="#"><i class="fa fa-reply"></i> Reply</a>
									<a class="btn btn-info mt-1 mb-1" href="#"><i class="fa fa-share"></i> Forward</a>
								</div>-->
							</div>
						</div>
					</div>
					<!-- row closed -->
				</div>
				<!-- Container closed -->
			</div>
 
			<?php
include("footer.php");

?>