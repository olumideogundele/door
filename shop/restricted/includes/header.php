<?php

session_start();
include ("config/DB_config.php"); 
include("includes/checkuser.php");
include("includes/class_file.php");
 
 include("includes/SendingSMS.php");
 include("includes/view-application-details.php");
 $usertype = "";
	 
	 if(isset($_SESSION['usertype'] ))
	 {
	 $usertype = $_SESSION['usertype']; 
	 }

if(isset($_SESSION['ministry'] ))
{
$ministry = $_SESSION['ministry'] ;	
	
}
?> 


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
  <meta name="description" content=""/>
  <meta name="author" content=""/>
  <title><?php  if(isset($inst_name))
{
	echo  $inst_name."::: ".$inst_slogan;
	
}
		else
		{
			
			echo "APEXAPPS: DOCPRO";
			
		}
		?></title>
  <!--favicon-->
 <!-- <link rel="icon" href="backend-admin/assets/images/favicon.ico" type="image/x-icon">-->
	
	<link rel="icon" href="<?php
						   
						   if(isset($inst_logo))
														{
															echo $inst_logo;
														}
														else
														{
															echo "backend-admin/assets/images/logo-icon.png";
															
														}
						   ?>" type="image/jpg" sizes="16x16">
	
  <!-- simplebar CSS-->
 <link href="backend-admin/assets/plugins/dropzone/css/dropzone.css" rel="stylesheet" type="text/css">
 
	
	<link href="backend-admin/assets/plugins/simplebar/css/simplebar.css" rel="stylesheet"/>
  <!-- Bootstrap core CSS-->
  <link href="backend-admin/assets/css/bootstrap.min.css" rel="stylesheet"/>
  <!--Data Tables -->
  <link href="backend-admin/assets/plugins/bootstrap-datatable/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css">
  <link href="backend-admin/assets/plugins/bootstrap-datatable/css/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css">
	
	  <link href="backend-admin/assets/plugins/select2/css/select2.min.css" rel="stylesheet"/>
  <!--inputtags-->
  <link href="backend-admin/assets/plugins/inputtags/css/bootstrap-tagsinput.css" rel="stylesheet" />
  <!--multi select-->
  <link href="backend-admin/assets/plugins/jquery-multi-select/multi-select.css" rel="stylesheet" type="text/css">
  <!--Bootstrap Datepicker-->
  <link href="backend-admin/assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet" type="text/css">
  <!--Touchspin-->
  <link href="backend-admin/assets/plugins/bootstrap-touchspin/css/jquery.bootstrap-touchspin.css" rel="stylesheet" type="text/css">
	
	  <link rel="stylesheet" href="backend-admin/assets/plugins/summernote/dist/summernote-bs4.css"/>
	 <link href="backend-admin/assets/plugins/vertical-timeline/css/vertical-timeline.css" rel="stylesheet"/>
  <!-- animate CSS-->
  <link href="backend-admin/assets/css/animate.css" rel="stylesheet" type="text/css"/>
  <!-- Icons CSS-->
  <link href="backend-admin/assets/css/icons.css" rel="stylesheet" type="text/css"/>
  <!-- Sidebar CSS-->
  <link href="backend-admin/assets/css/sidebar-menu.css" rel="stylesheet"/>
  <!-- Custom Style-->
  <link href="backend-admin/assets/css/app-style.css" rel="stylesheet"/>
  <!-- skins CSS-->
  <link href="backend-admin/assets/css/skins.css" rel="stylesheet"/>
  
</head>

<body onLoad="hide()"> 

<!-- start loader -->
   <div id="pageloader-overlay" class="visible incoming"><div class="loader-wrapper-outer"><div class="loader-wrapper-inner" ><div class="loader"></div></div></div></div>
   <!-- end loader -->

<!-- Start wrapper-->
 <div id="wrapper">

   <!--Start sidebar-wrapper-->
   <div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true">
     <div class="brand-logo">
      <a href="dashboard.php">
       <img src="<?php
														if(isset($inst_logo))
														{
															echo $inst_logo;
														}
														else
														{
															echo "backend-admin/assets/images/logo-icon.png";
															
														}
														?>" alt="<?php echo $inst_name;?>"  class="logo-icon">
       <h5 class="logo-text"><?php echo $inst_name;?></h5>
     </a>
   </div>
   <div class="user-details">
    <div class="media align-items-center user-pointer collapsed" data-toggle="collapse" data-target="#user-dropdown">
      <div class="avatar"><img class="mr-3 side-user-img" src="https://via.placeholder.com/110x110" alt="user avatar"></div>
       <div class="media-body">
       <h6 class="side-user-name"><?php 
		   
		   if(isset($_SESSION['lastname']))
		   {echo $_SESSION['lastname'];
		   }else
		   { echo "Hello, Stranger!";}
		   ; ?></h6>
      </div>
       </div>
     <div id="user-dropdown" class="collapse">
      <ul class="user-setting-menu">
            <li><a href="javaScript:void();"><i class="icon-user"></i>  My Profile</a></li>
            <li><a href="javaScript:void();"><i class="icon-settings"></i> Setting</a></li>
      <li><a href="includes/logout.php"><i class="icon-power"></i> Logout</a></li>
      </ul>
     </div>
      </div>
   <ul class="sidebar-menu">
      <li class="sidebar-header">MAIN NAVIGATION</li>
      <li>
        <a href="dashboard.php" class="waves-effect">
          <i class="zmdi zmdi-view-dashboard"></i> <span>Dashboard</span> 
        </a>
		 
      </li>
	   
	   
                       <?php
						
						 $myName = new Name();
						$user = $_SESSION['email'];
 $usertype_all = $myName->showName($conn, "SELECT  `usertype` FROM  `user_unit` WHERE  `account_number` = '$user'"); 
						
						
						
						
		if($usertype_all != 1)				
		{
						
 			
 
 $query =  "SELECT  `id`, `menu` FROM `menu_rights` WHERE `user` = '$user' AND `super` = 'super'";		
		 
			
 $extract_distance = mysqli_query($conn, $query) or die(mysqli_error($conn));
		$count = mysqli_num_rows($extract_distance);
    if ($count > 0)
		  {
 	 while ($row_distance=mysqli_fetch_row($extract_distance))
    {
  						  	$mid =$row_distance[0];
						   	$menu =$row_distance[1];
		 
$name = $myName->showName($conn, "SELECT `name` FROM  `menu` WHERE  `id` = '$menu'");
$url = $myName->showName($conn, "SELECT `url` FROM  `menu` WHERE  `id` = '$menu'");
$icon = $myName->showName($conn, "SELECT `icon` FROM  `menu` WHERE  `id` = '$menu'");
		/*
				echo ' <li class="slide">
							<a class="side-menu__item" data-toggle="slide" href="'.$name.'"><i class="side-menu__icon fa '.$icon.'"></i><span class="side-menu__label">'.$name.'</span><i class="angle fa fa-angle-right"></i></a>
							<ul class="slide-menu">';	*/
		 
		 
		 echo '  <li>
        <a href="javaScript:void();" class="waves-effect">

         <i aria-hidden="true" class="'.$icon.'"></i>
          <span>'.$name.'</span> <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="sidebar-submenu">';
	 
		
		 $query1 =  "SELECT  `id`, `menu`  FROM `menu_rights` WHERE `super` = '$menu' AND `user` = '$user'";	
 $extract_distance1 = mysqli_query($conn, $query1) or die(mysqli_error($conn));
		$count1 = mysqli_num_rows($extract_distance1);
    if ($count1 > 0)
		  {
 	 while ($row_distance1=mysqli_fetch_row($extract_distance1))
    {
  						  	$id =$row_distance1[0];
						   	$menu =$row_distance1[1];
							 
		
	 
		
		$name = $myName->showName($conn, "SELECT `name` FROM  `menu` WHERE  `id` = '$menu'");
$url = $myName->showName($conn, "SELECT `url` FROM  `menu` WHERE  `id` = '$menu'");
$icon = $myName->showName($conn, "SELECT `icon` FROM  `menu` WHERE  `id` = '$menu'");
		
		//echo '<li><a href="'.$url.'" class="slide-item"> '.$name.'</a></li>';
		
		 echo '<li><a href="'.$url.'"><i class="zmdi zmdi-dot-circle-alt"></i>  '.$name.'</a>';
					  		 
	}
			  
		  }
		
		echo '		 
							</ul>
						</li>';
		
		
					  		 
	}
			  
		  } 		
						
						
						
		}	
						else{
						
	
						
						?>
                       
                       
                       
                       
                       
                       
	   
	   
	   
      <li>
        <a href="javaScript:void();" class="waves-effect">

         <i aria-hidden="true" class="fa fa-gear"></i>
          <span>Settings</span> <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="sidebar-submenu">
			<li><a href="application-setup.php"><i class="zmdi zmdi-dot-circle-alt"></i> Application Setup</a></li>
			<li><a href="register-departments.php"><i class="zmdi zmdi-dot-circle-alt"></i> Department Setup</a></li>
    	<li><a href="approval-level-setup.php"><i class="zmdi zmdi-dot-circle-alt"></i> Approval Level Setup</a></li>
    	
        <li><a href="stake-holder-register.php"><i class="zmdi zmdi-dot-circle-alt"></i> Register Stakeholders</a></li>
        <li><a href="menu-setup.php"><i class="zmdi zmdi-dot-circle-alt"></i>Menu Setup</a></li>
     
        </ul>
      </li><li>
        <a href="javaScript:void();" class="waves-effect">

     <i aria-hidden="true" class="fa fa-folder-o"></i>
          <span>Directory Setup</span> <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="sidebar-submenu">
			<li><a href="create-folder.php"><i class="zmdi zmdi-dot-circle-alt"></i> Create Folder</a></li>
			<li><a href="create-shelf.php"><i class="zmdi zmdi-dot-circle-alt"></i> Create Shelf</a></li>
    	
        </ul>
      </li>
      
	   
	    <li>
        <a href="javaScript:void();" class="waves-effect">

         <i aria-hidden="true" class="fa fa-cloud-upload"></i>
          <span>Files Upload</span> <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="sidebar-submenu">
    	<li><a href="multiple-files-upload.php"><i class="zmdi zmdi-dot-circle-alt"></i> Upload Digital Files</a></li>
    	<li><a href="upload-data-physical.php"><i class="zmdi zmdi-dot-circle-alt"></i> Upload Physical Files</a></li>
        
     
        </ul>
      </li>
      
	    <li>
        <a href="javaScript:void();" class="waves-effect">

         <i aria-hidden="true" class="fa fa-table"></i>
          <span>Report</span> <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="sidebar-submenu">
    	<li><a href="all-my-accessed-files.php"><i class="zmdi zmdi-dot-circle-alt"></i>My Files</a></li>
    	<li><a href="all-uploaded.php"><i class="zmdi zmdi-dot-circle-alt"></i>All Uploaded Files</a></li>
    	<li><a href="all-digital-files.php"><i class="zmdi zmdi-dot-circle-alt"></i>All Digital Files</a></li>
    	<li><a href="all-physical-files.php"><i class="zmdi zmdi-dot-circle-alt"></i>All Physical Files</a></li>
        
     
        </ul>
      </li>
	   
	   <li>
        <a href="javaScript:void();" class="waves-effect">

      <i aria-hidden="true" class="fa fa-folder-open"></i>
          <span>Registry Report</span> <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="sidebar-submenu">
 <li><a href="view-registry-physical-records.php"><i class="zmdi zmdi-dot-circle-alt"></i>View Physical Files</a></li>
    	<li><a href="view-registry-digital-files.php"><i class="zmdi zmdi-dot-circle-alt"></i>View Digital Requests</a></li>
    	 
     
        </ul>
      </li>
      
	    <li>
        <a href="javaScript:void();" class="waves-effect">

        <i aria-hidden="true" class="fa fa-file-archive-o"></i>
          <span>Request File </span> <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="sidebar-submenu">
    	<li><a href="file-request.php"><i class="zmdi zmdi-dot-circle-alt"></i>Request Folder(PickUp) </a></li>
    	<li><a href="file-request-digital.php"><i class="zmdi zmdi-dot-circle-alt"></i>Request File(Digital) </a></li>
    	<li><a href="view-my-file-request.php"><i class="zmdi zmdi-dot-circle-alt"></i>Request History</a></li>
    	 
    	 
     
        </ul>
      </li>
      
	     <li>
        <a href="javaScript:void();" class="waves-effect">

        <i aria-hidden="true" class="fa fa-sort-amount-desc"></i>
          <span>Request Report</span> <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="sidebar-submenu">
 <li><a href="view-outgoing-files.php"><i class="zmdi zmdi-dot-circle-alt"></i>All Requests</a></li>
    	<li><a href="view-outgoing-files.php?value=2"><i class="zmdi zmdi-dot-circle-alt"></i>Recent Requests</a></li>
    	<li><a href="view-outgoing-files.php?value=3"><i class="zmdi zmdi-dot-circle-alt"></i>Granted Requests</a></li>
		 <li><a href="view-outgoing-files.php?value=6"><i class="zmdi zmdi-dot-circle-alt"></i>Cancelled Requests</a></li>
    	  <li><a href="view-outgoing-files.php?value=5"><i class="zmdi zmdi-dot-circle-alt"></i>Picked</a></li>
    	  <li><a href="view-outgoing-files.php?value=4"><i class="zmdi zmdi-dot-circle-alt"></i>Returned</a></li>
     
        </ul>
      </li>
	   
	   
	   
	   
	   
	   
	   
	   <li>
        <a href="javaScript:void();" class="waves-effect">

     <span class="ti-arrows-horizontal"></span>
          <span>Departmental Request</span> <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="sidebar-submenu">
 <li><a href="view-incoming-files.php"><i class="zmdi zmdi-dot-circle-alt"></i>Incoming Files</a></li>
    	<li><a href="outgoing-files.php"><i class="zmdi zmdi-dot-circle-alt"></i>Outgoing Files</a></li>
    	 
     
        </ul>
      </li> <li>
        <a href="javaScript:void();" class="waves-effect">

     <span class="fa fa-users"></span>
          <span>User Management</span> <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="sidebar-submenu">
 <li><a href="register-users.php"><i class="zmdi zmdi-dot-circle-alt"></i>Register Users</a></li>
 <li><a href="register-users-mgt.php"><i class="zmdi zmdi-dot-circle-alt"></i>View Users</a></li>
     
    	 
     
        </ul>
      </li>
	   
	   <li>
        <a href="javaScript:void();" class="waves-effect">

        <i aria-hidden="true" class="fa fa-trash-o"></i>
          <span>Recycle (Deleted)</span> <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="sidebar-submenu">
 <li><a href="all-deleted.php"><i class="zmdi zmdi-dot-circle-alt"></i>All Deleted</a></li>
 <li><a href="my-deleted-files.php"><i class="zmdi zmdi-dot-circle-alt"></i>My Deleted Files</a></li>
    	
    	 
        </ul>
      </li>
	    <?php
							
						}
							?>
	   
	   
    </ul>
   
   </div>
   <!--End sidebar-wrapper-->

<!--Start topbar header-->
<header class="topbar-nav">
 <nav id="header-setting" class="navbar navbar-expand fixed-top">
  <ul class="navbar-nav mr-auto align-items-center">
    <li class="nav-item">
      <a class="nav-link toggle-menu" href="javascript:void();">
       <i class="icon-menu menu-icon"></i>
     </a>
    </li>
    <li class="nav-item">
      <form class="search-bar">
        Hey, <strong><?php echo $_SESSION['name'];?></strong>
      </form>
    </li>
  </ul>
     
  <ul class="navbar-nav align-items-center right-nav-link">
    <li class="nav-item dropdown-lg">
      <a class="nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect" data-toggle="dropdown" href="javascript:void();">
      <i class="fa fa-envelope-open-o"></i><span class="badge badge-primary badge-up">12</span></a>
      <div class="dropdown-menu dropdown-menu-right">
        <ul class="list-group list-group-flush">
         <li class="list-group-item d-flex justify-content-between align-items-center">
          You have 12 new messages
          <span class="badge badge-primary">12</span>
          </li>
          <li class="list-group-item">
          <a href="javaScript:void();">
           <div class="media">
             <div class="avatar"><img class="align-self-start mr-3" src="https://via.placeholder.com/110x110" alt="user avatar"></div>
            <div class="media-body">
            <h6 class="mt-0 msg-title">Jhon Deo</h6>
            <p class="msg-info">Lorem ipsum dolor sit amet...</p>
            <small>Today, 4:10 PM</small>
            </div>
          </div>
          </a>
          </li>
          <li class="list-group-item">
          <a href="javaScript:void();">
           <div class="media">
             <div class="avatar"><img class="align-self-start mr-3" src="https://via.placeholder.com/110x110" alt="user avatar"></div>
            <div class="media-body">
            <h6 class="mt-0 msg-title">Sara Jen</h6>
            <p class="msg-info">Lorem ipsum dolor sit amet...</p>
            <small>Yesterday, 8:30 AM</small>
            </div>
          </div>
          </a>
          </li>
          <li class="list-group-item">
          <a href="javaScript:void();">
           <div class="media">
             <div class="avatar"><img class="align-self-start mr-3" src="https://via.placeholder.com/110x110" alt="user avatar"></div>
            <div class="media-body">
            <h6 class="mt-0 msg-title">Dannish Josh</h6>
            <p class="msg-info">Lorem ipsum dolor sit amet...</p>
             <small>5/11/2018, 2:50 PM</small>
            </div>
          </div>
          </a>
          </li>
          <li class="list-group-item">
          <a href="javaScript:void();">
           <div class="media">
             <div class="avatar"><img class="align-self-start mr-3" src="https://via.placeholder.com/110x110" alt="user avatar"></div>
            <div class="media-body">
            <h6 class="mt-0 msg-title">Katrina Mccoy</h6>
            <p class="msg-info">Lorem ipsum dolor sit amet.</p>
            <small>1/11/2018, 2:50 PM</small>
            </div>
          </div>
          </a>
          </li>
          <li class="list-group-item text-center"><a href="javaScript:void();">See All Messages</a></li>
        </ul>
        </div>
    </li>
    <li class="nav-item dropdown-lg">
      <a class="nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect" data-toggle="dropdown" href="javascript:void();">
    <i class="fa fa-bell-o"></i><span class="badge badge-info badge-up">14</span></a>
      <div class="dropdown-menu dropdown-menu-right">
        <ul class="list-group list-group-flush">
          <li class="list-group-item d-flex justify-content-between align-items-center">
          You have 14 Notifications
          <span class="badge badge-info">14</span>
          </li>
          <li class="list-group-item">
          <a href="javaScript:void();">
           <div class="media">
             <i class="zmdi zmdi-accounts fa-2x mr-3 text-info"></i>
            <div class="media-body">
            <h6 class="mt-0 msg-title">New Registered Users</h6>
            <p class="msg-info">Lorem ipsum dolor sit amet...</p>
            </div>
          </div>
          </a>
          </li>
          <li class="list-group-item">
          <a href="javaScript:void();">
           <div class="media">
             <i class="zmdi zmdi-coffee fa-2x mr-3 text-warning"></i>
            <div class="media-body">
            <h6 class="mt-0 msg-title">New Received Orders</h6>
            <p class="msg-info">Lorem ipsum dolor sit amet...</p>
            </div>
          </div>
          </a>
          </li>
          <li class="list-group-item">
          <a href="javaScript:void();">
           <div class="media">
             <i class="zmdi zmdi-notifications-active fa-2x mr-3 text-danger"></i>
            <div class="media-body">
            <h6 class="mt-0 msg-title">New Updates</h6>
            <p class="msg-info">Lorem ipsum dolor sit amet...</p>
            </div>
          </div>
          </a>
          </li>
          <li class="list-group-item text-center"><a href="javaScript:void();">See All Notifications</a></li>
        </ul>
      </div>
    </li>
    <li class="nav-item language">
      <a class="nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect" data-toggle="dropdown" href="javascript:void();"><i class="fa fa-flag"></i></a>
      <ul class="dropdown-menu dropdown-menu-right">
          <li class="dropdown-item"> <i class="flag-icon flag-icon-gb mr-2"></i> English</li>
          <li class="dropdown-item"> <i class="flag-icon flag-icon-fr mr-2"></i> French</li>
          <li class="dropdown-item"> <i class="flag-icon flag-icon-cn mr-2"></i> Chinese</li>
          <li class="dropdown-item"> <i class="flag-icon flag-icon-de mr-2"></i> German</li>
        </ul>
    </li>
    <li class="nav-item">
      <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown" href="#">
        <span class="user-profile"><img src="https://via.placeholder.com/110x110" class="img-circle" alt="user avatar"></span>
      </a>
      <ul class="dropdown-menu dropdown-menu-right">
       <li class="dropdown-item user-details">
        <a href="javaScript:void();">
           <div class="media">
             <div class="avatar"><img class="align-self-start mr-3" src="https://via.placeholder.com/110x110" alt="user avatar"></div>
            <div class="media-body">
            <h6 class="mt-2 user-title"><?php
				if(isset($_SESSION['name']))
				{
					
					echo $_SESSION['name'];
				}
				else{
					echo "Welcome Stanger!";
					
				}
				
				
				?></h6>
            <p class="user-subtitle">
				<?php
				if(isset($_SESSION['emailadd']))
				{
					
					echo $_SESSION['emailadd'];
				}
				else{
					echo "Welcome Stanger!";
					
				}
				
				
				?>
				
				
				</p>
            </div>
           </div>
          </a>
        </li>
        <li class="dropdown-divider"></li>
        <li class="dropdown-item"><i class="icon-envelope mr-2"></i> Inbox</li>
        <li class="dropdown-divider"></li>
        <li class="dropdown-item"><i class="icon-wallet mr-2"></i> Account</li>
        <li class="dropdown-divider"></li>
        <li class="dropdown-item"><i class="icon-settings mr-2"></i> Setting</li>
        <li class="dropdown-divider"></li>
        <li class="dropdown-item"><a href="includes/logout.php"> <i class="icon-power mr-2"></i> -Logout-</a></li>
      </ul>
    </li>
  </ul>
</nav>
</header>
<!--End topbar header-->
