<?php 

session_start();

if(isset($_SESSION['email']))
{
	
	$emailing = $_SESSION['email'];
}
 
include("../restricted/config/DB_config.php");

include("../restricted/includes/checkuser-courier.php");
include("../restricted/includes/view-application-details-general.php");
include("../restricted/includes/class_file.php");
 
// include("restricted/includes/SendingSMS.php");
   

 $myName = new Name();




if(isset($_SESSION['email']))
{
	$customer_name = $myName->showName($conn, "SELECT  `name` FROM  `user_unit` WHERE  `account_number` = '$emailing'");
    $customer_phone = $myName->showName($conn, "SELECT  `phone` FROM  `user_unit` WHERE  `account_number` = '$emailing'");
    $customer_email = $myName->showName($conn, "SELECT  `email` FROM  `user_unit` WHERE  `account_number` = '$emailing'");
    $logo = $myName->showName($conn, "SELECT  `file` FROM  `user_unit` WHERE  `account_number` = '$emailing'");
}


?>


<!DOCTYPE html>
<html lang="zxx">
<head>
<meta name="author" content="">
<meta name="description" content="">
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title><?php echo $inst_name.":: ".$inst_slogan;?></title>

<!-- Favicon -->
<link rel="icon" href="<?php
						   
						   if(isset($inst_logo))
														{
															echo "restricted/".$inst_logo;
														}
														else
														{
															echo "backend-admin/assets/images/logo-icon.png";
															
														}
						   ?>" type="image/jpg" sizes="16x16">
<!-- Style CSS -->
<link rel="stylesheet" href="../css/stylesheet.css">
<link rel="stylesheet" href="../css/mmenu.css">
<link rel="stylesheet" href="../css/perfect-scrollbar.css">
<link rel="stylesheet" href="../css/style.css" id="colors">
<!-- Google Font -->
<link href="https://fonts.googleapis.com/css?family=Nunito:300,400,600,700,800&display=swap&subset=latin-ext,vietnamese" rel="stylesheet"> 
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700,800" rel="stylesheet" type="text/css">
</head>
<body>

<!-- Wrapper -->
<div id="main_wrapper"> 
  <header id="header_part" class="fixed fullwidth_block dashboard"> 
    <div id="header" class="not-sticky">
      <div class="container"> 
        <div class="utf_left_side"> 
          <div id="logo"> <a href="../index"><img src="<?php echo "../restricted/".$inst_logo; ?>" alt=""></a> <a href="../index" class="dashboard-logo"><img src="<?php echo "../restricted/".$inst_logo; ?>" alt=""></a> </div>
          <div id="logo"> <a href="../index"><img src="../<?php echo "restricted/".$inst_logo; ?>" alt=""></a> <a href="../index" class="dashboard-logo"><img src="<?php echo "../restricted/".$inst_logo; ?>" alt=""></a> </div>
          <div class="mmenu-trigger">
			<button class="hamburger utfbutton_collapse" type="button">
				<span class="utf_inner_button_box">
					<span class="utf_inner_section"></span>
				</span>
			</button>
		  </div>
          <nav id="navigation" class="style_one">
            <ul id="responsive">
              <li><a href="#">Home</a>
                <ul>
                  
                </ul>
              </li>			  
                        
            </ul>
          </nav>
          <div class="clearfix"></div>
        </div>
        <div class="utf_right_side"> 
          <div class="header_widget"> 
			<div class="dashboard_header_button_item has-noti js-item-menu">
				<i class="sl sl-icon-bell"></i>
				<div class="dashboard_notifi_dropdown js-dropdown">
					<div class="dashboard_notifi_title">
						<p>You Have 2 Notifications</p>
					</div>
					<div class="dashboard_notifi_item">
						<div class="bg-c1 red">
							<i class="fa fa-check"></i>
						</div>
						<div class="content">
							<p>Your Listing <b>Burger House (MG Road)</b> Has Been Approved!</p>
							<span class="date">2 hours ago</span>
						</div>
					</div>
					<div class="dashboard_notifi_item">
						<div class="bg-c1 green">
							<i class="fa fa-envelope"></i>
						</div>
						<div class="content">
							<p>You Have 7 Unread Messages</p>
							<span class="date">5 hours ago</span>
						</div>
					</div>
					<div class="dashboard_notify_bottom text-center pad-tb-20">
						<a href="#">View All Notification</a>
					</div>
				</div>
			</div>
            <div class="utf_user_menu">
              <div class="utf_user_name"><span><img src="../images/dashboard-avatar.jpg" alt=""></span>Hi, John!</div>
              <ul>
                <li><a href="../dashboard.html"><i class="sl sl-icon-layers"></i> Dashboard</a></li>
                <li><a href="../dashboard_my_profile.html"><i class="sl sl-icon-user"></i> My Profile</a></li>
				<li><a href="../dashboard_my_listing.html"><i class="sl sl-icon-list"></i> My Listing</a></li>
				<li><a href="../dashboard_messages.html"><i class="sl sl-icon-envelope-open"></i> Messages</a></li>
				<li><a href="../dashboard_bookings.html"><i class="sl sl-icon-docs"></i> Booking</a></li>
                <li><a href="../index_1.html"><i class="sl sl-icon-power"></i> Logout</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
	
	  <div class="clearfix"></div>
  
  <!-- Dashboard -->
  <div id="dashboard"> 
    <a href="#" class="utf_dashboard_nav_responsive"><i class="fa fa-reorder"></i> Dashboard Sidebar Menu</a>
    <div class="utf_dashboard_navigation js-scrollbar">
      <div class="utf_dashboard_navigation_inner_block">
        <ul>
          <li class="active"><a href="../dashboard.html"><i class="sl sl-icon-layers"></i> Dashboard</a></li>       
		  <li><a href="../dashboard_add_listing.html"><i class="sl sl-icon-plus"></i> Add Listing</a></li>	          
		  <li>
			<a href="#"><i class="sl sl-icon-layers"></i> My Listings</a>
			<ul>
				<li><a href="../dashboard_my_listing.html">Active <span class="nav-tag green">10</span></a></li>
				<li><a href="../dashboard_my_listing.html">Pending <span class="nav-tag yellow">4</span></a></li>
				<li><a href="../dashboard_my_listing.html">Expired <span class="nav-tag red">8</span></a></li>
			</ul>	
		  </li>		  		 
		  <li><a href="../dashboard_bookings.html"><i class="sl sl-icon-docs"></i> Bookings</a></li>		  
		  <li><a href="../dashboard_messages.html"><i class="sl sl-icon-envelope-open"></i> Messages</a></li>
		  <li><a href="../dashboard_wallet.html"><i class="sl sl-icon-wallet"></i> Wallet</a></li>		            
		  <li>
			<a href="#"><i class="sl sl-icon-star"></i> Reviews</a>
			<ul>
				<li><a href="../dashboard_visitor_review.html">Visitor Reviews <span class="nav-tag green">4</span></a></li>
				<li><a href="../dashboard_submitted_review.html">Submitted Reviews <span class="nav-tag yellow">5</span></a></li>					
			</ul>	
		  </li>		  
		  <li><a href="../dashboard_bookmark.html"><i class="sl sl-icon-heart"></i> Bookmark</a></li>                                    		 
		  <li><a href="../dashboard_my_profile.html"><i class="sl sl-icon-user"></i> My Profile</a></li>
		  <li><a href="../dashboard_change_password.html"><i class="sl sl-icon-key"></i> Change Password</a></li>
          <li><a href="../index_1.html"><i class="sl sl-icon-power"></i> Logout</a></li>
        </ul>
      </div>
    </div>