
			<!-- main-content -->
			<div class="main-content app-content">

				<!-- main-header -->
				<div class="main-header sticky side-header nav nav-item">
					<div class="container-fluid">
						<div class="main-header-left ">
							<div class="responsive-logo">
								<a href="backend/index.html"><img src="<?php
														if(isset($inst_logo))
														{
															echo $inst_logo;
														}
														else
														{
															echo "backend-admin/assets/images/logo-icon.png";
															
														}
														?>" class="logo-1" alt="logo"></a>
								<a href="backend/index.html"><img     src="<?php
														if(isset($inst_logo))
														{
															echo $inst_logo;
														}
														else
														{
															echo "backend-admin/assets/images/logo-icon.png";
															
														}
														?>" class="dark-logo-1" alt="logo"></a>
								<a href="backend/index.html"><img   src="<?php
														if(isset($inst_logo))
														{
															echo $inst_logo;
														}
														else
														{
															echo "backend-admin/assets/images/logo-icon.png";
															
														}
														?>"class="logo-2" alt="logo"></a>
								<a href="backend/index.html"><img     src="<?php
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
							<div class="main-header-center ml-3 d-sm-none d-md-none d-lg-block">
								 <input class="form-control" placeholder="Search for anything..." type="hidden">
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