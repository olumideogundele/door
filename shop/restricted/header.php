<?php

session_start();



include("config/DB_config.php"); 
include("includes/checkuser.php");
include("includes/class_file.php");
 
 include("includes/SendingSMS.php");
 include("includes/view-application-details.php");
 $usertype = "";
	 
$emailing = "";
 
 $myName = new Name();
 
 if(isset($_SESSION['email']))
 {
$emailing  = $_SESSION['email'];
 }

 
$super = $myName->showName($conn, "SELECT  `super` FROM `user_unit` WHERE `account_number` = '$emailing'"); 
 
 $myName = new Name();
						$user = $_SESSION['email'];
 $usertype_all = $myName->showName($conn, "SELECT  `usertype` FROM  `user_unit` WHERE  `account_number` = '$user'"); 
 $super = $myName->showName($conn, "SELECT  `super` FROM  `user_unit` WHERE  `account_number` = '$user'"); 
 $status_owner = $myName->showName($conn, "SELECT  `status` FROM  `user_unit` WHERE  `account_number` = '$user'"); 
 $idding = $myName->showName($conn, "SELECT  `id` FROM  `user_unit` WHERE  `account_number` = '$user'"); 
 $real_email = $myName->showName($conn, "SELECT  `email` FROM  `user_unit` WHERE  `account_number` = '$user'"); 
 
	 

?> 

<!DOCTYPE html>
<html lang="en">
	<head>

		<meta charset="UTF-8">
		<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta http-equiv="X-UA-Compatible" content="IE=9" />
		<meta name="Description" content="Bootstrap Responsive Admin Web Dashboard HTML5 Template">
		<meta name="Author" content="Spruko Technologies Private Limited">
		<meta name="Keywords" content="admin,admin dashboard,admin dashboard template,admin panel template,admin template,admin theme,bootstrap 4 admin template,bootstrap 4 dashboard,bootstrap admin,bootstrap admin dashboard,bootstrap admin panel,bootstrap admin template,bootstrap admin theme,bootstrap dashboard,bootstrap form template,bootstrap panel,bootstrap ui kit,dashboard bootstrap 4,dashboard design,dashboard html,dashboard template,dashboard ui kit,envato templates,flat ui,html,html and css templates,html dashboard template,html5,jquery html,premium,premium quality,sidebar bootstrap 4,template admin bootstrap 4"/>

		<!-- Title -->
		 <title><?php  if(isset($inst_name))
{
	echo  $inst_name."::: ".$inst_slogan;
	
}
		else
		{
			
			echo "LoadMe::: Dashboard.....";
			
		}
		?></title>
		<!-- Favicon -->
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

		<!-- Icons css -->
		<link href="../assets/css/icons.css" rel="stylesheet">

		<!--  Owl-carousel css-->
		<link href="../assets/plugins/owl-carousel/owl.carousel.css" rel="stylesheet" />

		<!-- P-scroll bar css-->
		<link href="../assets/plugins/perfect-scrollbar/p-scrollbar.css" rel="stylesheet" />

		<!--  Right-sidemenu css -->
		<link href="../assets/plugins/sidebar/sidebar.css" rel="stylesheet">

		<!-- Sidemenu css -->
		<link rel="stylesheet" href="../assets/css/closed-sidemenu.css">

		<!-- Maps css -->
		<link href="../assets/plugins/jqvmap/jqvmap.min.css" rel="stylesheet">

		<!-- style css -->
		<link href="../assets/css/style.css" rel="stylesheet">
		<link href="../assets/css/style-dark.css" rel="stylesheet">

		<!---Skinmodes css-->
		<link href="../assets/css/skin-modes.css" rel="stylesheet" />

        
        <!-- Internal Data table css -->
		<link href="../assets/plugins/datatable/css/dataTables.bootstrap4.min.css" rel="stylesheet" />
		<link href="../assets/plugins/datatable/css/buttons.bootstrap4.min.css" rel="stylesheet">
		<link href="../assets/plugins/datatable/css/responsive.bootstrap4.min.css" rel="stylesheet" />
		<link href="../assets/plugins/datatable/css/jquery.dataTables.min.css" rel="stylesheet">
		<link href="../assets/plugins/datatable/css/responsive.dataTables.min.css" rel="stylesheet">
		 
        <link href="../assets/plugins/gallery/gallery.css" rel="stylesheet">
        
        <!-- Internal Select2 css -->
		<link href="../assets/plugins/select2/css/select2.min.css" rel="stylesheet">

		<!--Internal  Datetimepicker-slider css -->
		<link href="../assets/plugins/amazeui-datetimepicker/css/amazeui.datetimepicker.css" rel="stylesheet">
		<link href="../assets/plugins/jquery-simple-datetimepicker/jquery.simple-dtpicker.css" rel="stylesheet">
		<link href="../assets/plugins/pickerjs/picker.min.css" rel="stylesheet">

		<!-- Internal Spectrum-colorpicker css -->
		<link href="../assets/plugins/spectrum-colorpicker/spectrum.css" rel="stylesheet">
        
        <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>yy 
  <link rel="stylesheet" href="css/sweetalert.css">
        
        <script>
      function getNotofication()
            {  
               // document.body.removeChild(modal);  
            
               var username = "<?php echo $emailing; ?>";
                   
                //alert(username);
              $.ajax({
				url: "https://loadme.services/mobile/get-notification.php",
				type: "POST",
				data: {
					username:username 			
				},
				cache: false,
             	success: function(dataResult){
                  var dataResult = JSON.parse(dataResult);
                  	if(dataResult.statusCode==200){
                           var val = dataResult.errorMessage;
                           var title = dataResult.title;
                            var url = dataResult.url;
                            var code = dataResult.code;
 var id = dataResult.id;
 var status = dataResult.status;
                        
                     url = "view-order-details.php?id="+id+"&code="+code   
             var proceed = "";
                 
                        if(url == "")
                            {
                                    var proceed = "Read More";
                                
                 
                                url= "notification-details.php?value="+code;
                            }
                        else{
                            if(status == 9)
                                {
                                    var proceed = "Confirm Delivery";
                                    
                                }else{
                                    
                                    var proceed = "Proceed Now";
                                }
                            
                             
          
                        }
                         
                       
                         
                        
 swal({   title: title,   
    text: val,     
    showCancelButton: true,   
    confirmButtonColor: "#DD6B55",   
    confirmButtonText: proceed,   
    closeOnConfirm: false,   
    closeOnCancel: true }, 
    function(isConfirm){   
        if (isConfirm) 
    {   
          location.href = url; 
        //swal("Account Removed!", "Your account is removed permanently!", "success");   
        } 
        else {     
          //  swal("Hurray", "Account is not removed!", "error");   
              location.href = "#"; 
            } });  
                        
            var audio = new Audio('notification.mp3');
                  audio.play();    
                        
                        
                        
                    soundManager.url = 'notification.mp3';

    soundManager.onready(function() {
        soundManager.createSound({
            id: 'mySound',
            url: 'notification.mp3'
        });

        // ...and play it
        soundManager.play('mySound');
    }); 
                     
       /*                
showModal(title, val, [
  {
    label: proceed,
    onClick: (modal) => {
        
         location.href = url; 
      //console.log("The button was clicked!");
        
    },
    triggerClose: false
  } 
]);             
     */
                        
                  
                        
					}
					else if(dataResult.statusCode==201)
                    {
                        
                 //  var val = dataResult.errorMessage;
                    
					}
                    else{
                        
                         // var val = dataResult.errorMessage;
                        
						 
                        
                    }
					
				},error: function(){
                     
                }
                    
                    
			});
            
  
 setTimeout(getNotofication, 10000);
                

                
                
        
            }
        
    
  
    
    </script>
        <script>
        
        function JSalert(){
 
//swal("Congrats!", ", Your account is created!", "error");
 
}</script>
        
        
        <?php
/*$swal='swal';
echo '<script>'.$swal.'("Error!", "Something Went Wrong!", "error");</script>';*/
        
?>

		<!--  Right-sidemenu css -->
		<link href="../assets/plugins/sidebar/sidebar.css" rel="stylesheet">
        
	</head>

	<body class="main-body app sidebar-mini dark-theme" onLoad="getNotofication()">

		<!-- Loader -->
	<!-- <div id="global-loader">
			<img src="../assets/img/loader.svg" class="loader-img" alt="Loader">
		</div> -->
		<!-- /Loader -->

		<!-- Page -->
		<div class="page">

			<!-- main-sidebar -->
			<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
			<aside class="app-sidebar sidebar-scroll">
				<div class="main-sidebar-header active">
					<a class="desktop-logo logo-light active" href="dashboard"><img src="<?php
														if(isset($inst_logo))
														{
															echo $inst_logo;
														}
														else
														{
															echo "backend-admin/assets/images/logo-icon.png";
															
														}
														?>" class="main-logo" alt="logo"></a>
					<a class="desktop-logo logo-dark active" href="dashboard"><img src="<?php
														if(isset($inst_logo))
														{
															echo $inst_logo;
														}
														else
														{
															echo "backend-admin/assets/images/logo-icon.png";
															
														}
														?>" class="main-logo dark-theme" alt="logo"></a>
					<a class="logo-icon mobile-logo icon-light active" href="dashboard"><img src="<?php
														if(isset($inst_logo))
														{
															echo $inst_logo;
														}
														else
														{
															echo "backend-admin/assets/images/logo-icon.png";
															
														}
														?>" class="logo-icon" alt="logo"></a>
					<a class="logo-icon mobile-logo icon-dark active" href="dashboard"><img src="<?php
														if(isset($inst_logo))
														{
															echo $inst_logo;
														}
														else
														{
															echo "backend-admin/assets/images/logo-icon.png";
															
														}
														?>" class="logo-icon dark-theme" alt="logo"></a>
				</div>
				<div class="main-sidemenu" style="padding-top: 10px;">
					 
					<ul class="side-menu">
						<li class="side-item side-item-category">Main</li>
                        
                        <li class="slide">
							<a class="side-menu__item" href="dashboard"><svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24" ><path d="M0 0h24v24H0V0z" fill="none"/><path d="M5 5h4v6H5zm10 8h4v6h-4zM5 17h4v2H5zM15 5h4v2h-4z" opacity=".3"/><path d="M3 13h8V3H3v10zm2-8h4v6H5V5zm8 16h8V11h-8v10zm2-8h4v6h-4v-6zM13 3v6h8V3h-8zm6 4h-4V5h4v2zM3 21h8v-6H3v6zm2-4h4v2H5v-2z"/></svg><span class="side-menu__label">Dashboard</span><span class="badge badge-success side-badge">Home</span></a>
						</li>
                           
						              
                          <?php
						
						 
						
						
						
						
		if($super == 1)				
		{
						
 		 ?>
						<li class="side-item side-item-category">ADMIN AREA</li>
					  
                        <li class="slide">
							<a class="side-menu__item" data-toggle="slide" href="#">
                              
                            <i class="icon ion-md-settings" aria-hidden="true" style="padding-right: 15px; padding-left: 5px;"></i>
                                
                            
                                
                                <span class="side-menu__label"> Settings</span><i class="angle fe fe-chevron-down"></i></a>
							<ul class="slide-menu">
                                
                   
								<li><a class="slide-item" href="application-setup">Application Setup</a></li>
								<li><a class="slide-item" href="truck-type">Truck Type </a></li>
								<li><a class="slide-item" href="truck-search-radius-setup">Truck Searh Radius </a></li>
								<li><a class="slide-item" href="truck-capacity">Truck Capacity </a></li>
								<li><a class="slide-item" href="branches">Register Branches </a></li>
								<li><a class="slide-item" href="maximum-negotiation">Max Negotiation </a></li>
								 
								
							</ul>
						</li>
                        
                        
                        <li class="slide">
							<a class="side-menu__item" data-toggle="slide" href="#">
                              
                              <i class="fa fa-user-astronaut" aria-hidden="true" style="padding-right: 15px; padding-left: 5px;"></i>
                                
                            
                                
                                <span class="side-menu__label"> Stakeholders</span><i class="angle fe fe-chevron-down"></i></a>
							<ul class="slide-menu">
                                
                   
								<li><a class="slide-item" href="stake-holder-register">Register Stakeholders</a></li>
								<li><a class="slide-item" href="view-stakeholder">All Stakeholders </a></li>
								 
								
							</ul>
						</li>
                         <li class="slide">
							<a class="side-menu__item" data-toggle="slide" href="#">
                              
                              <i class="fa fa-user-circle" aria-hidden="true" style="padding-right: 15px; padding-left: 5px;"></i>
                                
                            
                                
                                <span class="side-menu__label"> Inspector Mgt.</span><i class="angle fe fe-chevron-down"></i></a>
							<ul class="slide-menu">
                                
                   
								<li><a class="slide-item" href="register-inspector">Register Inspectors</a></li>
								<li><a class="slide-item" href="view-all-inspectors">All Inspectors </a></li>
								 
								
							</ul>
						</li>
                        
                        
                          <li class="slide">
							<a class="side-menu__item" data-toggle="slide" href="#">
                              
                              <i class="fa fa-user-circle" aria-hidden="true" style="padding-right: 15px; padding-left: 5px;"></i>
                                
                            
                                
                                <span class="side-menu__label"> User Mgt.</span><i class="angle fe fe-chevron-down"></i></a>
							<ul class="slide-menu">
                                
                   
								<li><a class="slide-item" href="register-users">Register Users</a></li>
								<li><a class="slide-item" href="view-register-users">All User </a></li>
								 
								
							</ul>
						</li>
                        
                        <li class="slide">
							<a class="side-menu__item" data-toggle="slide" href="#">
                                <i class="si si-calculator" aria-hidden="true" style="padding-right: 15px; padding-left: 5px;"></i>
                               
                                
                                
                                <span class="side-menu__label">Cost Estimator</span><i class="angle fe fe-chevron-down"></i></a>
							<ul class="slide-menu">
                                
                 
		 
                                
                                
                                
<li><a class="slide-item" href="truck-base-fare">Basefare</a></li>
<li><a class="slide-item" href="truck-price-per-km">Price Per Kilometer</a></li>
											 
								<li><a class="slide-item" href="truck-capacity-charge">Truck Capacity Charge</a></li>
								
							</ul>
						</li>
                        
                        <li class="slide">
							<a class="side-menu__item" data-toggle="slide" href="#">
                                <i class="si si-calculator" aria-hidden="true" style="padding-right: 15px; padding-left: 5px;"></i>
                               
                                
                                
                                <span class="side-menu__label">Settlement Setup</span><i class="angle fe fe-chevron-down"></i></a>
							<ul class="slide-menu">
                                
                 
		 
                                
                                
                                
<li><a class="slide-item" href="payment-settlement-setup">Payment Settlement Setup</a></li>
 
								
							</ul>
						</li>
                        
                        
                        <li class="side-item side-item-category">OPERATORS AREA</li>
                        <li class="slide">
							<a class="side-menu__item" data-toggle="slide" href="#">
                              
                              <i class="fa fa-users" aria-hidden="true" style="padding-right: 15px; padding-left: 5px;"></i>
                                
                            
                                
                                <span class="side-menu__label"> Subscribers</span><i class="angle fe fe-chevron-down"></i></a>
							<ul class="slide-menu">
                                
                   
								<li><a class="slide-item" href="all-subscriber">All Subscribers</a></li>
								<li><a class="slide-item" href="all-subscriber?id=<?php  echo	strtr(base64_encode(1), '+/=', '-_,'); ?>">Active Subscribers </a></li>
								<li><a class="slide-item" href="all-subscriber?id=<?php  echo	strtr(base64_encode(0), '+/=', '-_,'); ?>">Inactive Subscribers </a></li>
								
							</ul>
						</li>
                        
                         <li class="slide">
							<a class="side-menu__item" data-toggle="slide" href="#">
                                <i class="fa fa-user-plus" aria-hidden="true" style="padding-right: 15px; padding-left: 5px;"></i>
                               
                                
                                
                                <span class="side-menu__label">Truck Owners</span><i class="angle fe fe-chevron-down"></i></a>
							<ul class="slide-menu">
                                
                 
		 
                                
                                
                                
								<li><a class="slide-item" href="all-truck-owners">All Truck Owners</a></li>
								<li><a class="slide-item" href="all-truck-owners?type=1">Corporate  Owners</a></li>
								<li><a class="slide-item" href="all-truck-owners?type=2">Individual Owners</a></li>
							 
								<li><a class="slide-item" href="all-truck-owners?id=1">Active Truck Owners</a></li>
								<li><a class="slide-item" href="all-truck-owners?id=0">Inactive Truck Owners</a></li>
								
							</ul>
						</li> 
                        
                        <li class="slide">
							<a class="side-menu__item" data-toggle="slide" href="#">
                                <i class="si si-list" aria-hidden="true" style="padding-right: 15px; padding-left: 5px;"></i>
                               
                                
                                
                                <span class="side-menu__label">Inspection</span><i class="angle fe fe-chevron-down"></i></a>
							<ul class="slide-menu">
                                
                 
		 
                                
                                
                                
								<li><a class="slide-item" href="inspection-list">Pending Inspection</a></li>
								
						 
								<li><a class="slide-item" href="inspection-list?truck=3">Inspected</a></li>
							<!--	<li><a class="slide-item" href="inspection-list?truck=1">Approved</a></li>-->
								
							</ul>
						</li> 
                        
                        <li class="slide">
							<a class="side-menu__item" data-toggle="slide" href="#">
                                <i class="si si-calculator" aria-hidden="true" style="padding-right: 15px; padding-left: 5px;"></i>
                               
                                
                                
                                <span class="side-menu__label">Cost Estimator</span><i class="angle fe fe-chevron-down"></i></a>
							<ul class="slide-menu">
                                
                 
		 
                                
                                
                                
<li><a class="slide-item" href="truck-base-fare">Basefare</a></li>
<li><a class="slide-item" href="truck-price-per-km">Price Per Kilometer</a></li>
											 
								<li><a class="slide-item" href="truck-capacity-charge">Truck Capacity Charge</a></li>
								
							</ul>
						</li>
                        
                        
                           <li class="side-item side-item-category">MENU</li>
                          
                        
                        
                        
                          <?php
						
						 
        }
						
						
						
	  if($usertype_all == 2 or $super == 1)				
		{
						
 		 ?>
                        
                       
                        
                        
                         <li class="slide">
							<a class="side-menu__item" data-toggle="slide" href="#">
                                <i class="fa fa-truck" aria-hidden="true" style="padding-right: 15px; padding-left: 5px;"></i>
                              
                                
                            
                                
                                <span class="side-menu__label"> Trucks</span><i class="angle fe fe-chevron-down"></i></a>
							<ul class="slide-menu">
                                
                                <?php
            if($status_owner == 1)
            {
            ?>
                                <li><a class="slide-item" href="add-truck">Add Truck</a></li>
                                <li><a class="slide-item" href="view-all-truck">All Trucks</a></li>
								<li><a class="slide-item" href="view-all-truck?truck=1">Active Trucks </a></li>
								<li><a class="slide-item" href="view-all-truck?truck=0">Inactive Trucks </a></li>
                    <?php
                }
            else
            {
                echo ' <li><a class="slide-item" href="add-truck">Account Still Pending</a></li>';
            }
                ?>
								
								
							</ul>
						</li>
                        
                        <li class="slide">
							<a class="side-menu__item" data-toggle="slide" href="#">
                                <i class="si si-list" aria-hidden="true" style="padding-right: 15px; padding-left: 5px;"></i>
                               
                                
                                
                                <span class="side-menu__label">Order Reports</span><i class="angle fe fe-chevron-down"></i></a>
							<ul class="slide-menu">
                                
                 
		 
                                
                                
                                
								<li><a class="slide-item" href="view-search-result">Bookings/Search</a></li>
						 
 <li><a class="slide-item" href="view-search-result?status=<?php echo strtr(base64_encode(0),'-_,', '+/='); ?>">Pending</a></li>
                                
                                
								<li><a class="slide-item" href="view-search-result?status=<?php echo strtr(base64_encode(1),'-_,', '+/='); ?>">Paid Orders</a></li>
                                
                                
								<li><a class="slide-item" href="view-search-result?status=<?php echo strtr(base64_encode(2),'-_,', '+/='); ?>">Awaiting Acceptance</a></li>
                                
                                <li><a class="slide-item" href="view-search-result?status=<?php echo strtr(base64_encode(3),'-_,', '+/='); ?>">Rejected Orders</a></li>
                                
                                
                                <li><a class="slide-item" href="view-search-result?status=<?php echo strtr(base64_encode(4),'-_,', '+/='); ?>">Accepted Orders</a></li>
                                
                                
                                 <li><a class="slide-item" href="view-search-result?status=<?php echo strtr(base64_encode(5),'-_,', '+/='); ?>">Completed</a></li>
                                
								 
								
							</ul>
						</li>
                        <li class="slide">
							<a class="side-menu__item" data-toggle="slide" href="#">
                                <i class="fa fa-money-bill" aria-hidden="true" style="padding-right: 15px; padding-left: 5px;"></i>
                               
                                
                                
                                <span class="side-menu__label">Wallet Reports</span><i class="angle fe fe-chevron-down"></i></a>
							<ul class="slide-menu">
                                
                 
		 
                                
                                
                                
								<li><a class="slide-item" href="view-transaction-report">All Transaction</a></li>
						 
 <li><a class="slide-item" href="view-transaction-report?status=<?php echo strtr(base64_encode(0),'-_,', '+/='); ?>">Pending</a></li>
                                
                                
								<li><a class="slide-item" href="view-transaction-report?status=<?php echo strtr(base64_encode(5),'-_,', '+/='); ?>">Matured</a></li>
                                
                                <li><a class="slide-item" href="view-transaction-report?status=<?php echo strtr(base64_encode(1),'-_,', '+/='); ?>">Paid</a></li>
                                
                                
								<li><a class="slide-item" href="view-transaction-report?status=<?php echo strtr(base64_encode(2),'-_,', '+/='); ?>">Cashed</a></li>
                                
                              
                                
								 
								
							</ul>
						</li>
                         <li class="slide">
							<a class="side-menu__item" data-toggle="slide" href="#">
                               
                              <i class="fa fa-road" aria-hidden="true" style="padding-right: 15px; padding-left: 5px;"></i>
                                
                            
                                
                                <span class="side-menu__label"> Driver</span><i class="angle fe fe-chevron-down"></i></a>
							<ul class="slide-menu">
                                
                   <?php
            if($status_owner == 1)
            {
            ?>
                                <li><a class="slide-item" href="add-driver">Register Driver</a></li>
								<li><a class="slide-item" href="all-driver">All Drivers</a></li>
								<li><a class="slide-item" href="all-driver?id=<?php  echo	strtr(base64_encode(1), '+/=', '-_,'); ?>">Active Drivers </a></li>
								<li><a class="slide-item" href="all-driver?id=<?php  echo	strtr(base64_encode(0), '+/=', '-_,'); ?>">Inactive Drivers </a></li>
                    <?php
                }
            else
            {
                echo ' <li><a class="slide-item" href="add-truck">Account Still Pending</a></li>';
            }
                ?>
                                
                                
                                
								
							</ul>
						</li>
                        
                        
                        
                           <li class="slide">
							<a class="side-menu__item" data-toggle="slide" href="#">
                              
                              <i class="fas fa-link" aria-hidden="true" style="padding-right: 15px; padding-left: 5px;"></i>
                                
                            
                                
                                <span class="side-menu__label"> Driver/Truck</span><i class="angle fe fe-chevron-down"></i></a>
							<ul class="slide-menu">
                                
                   <?php
            if($status_owner == 1)
            {
            ?>
                                 <li><a class="slide-item" href="attach-driver-truck">Attach Driver to Truck</a></li>
								<li><a class="slide-item" href="all-driver">View Report</a></li>
                    <?php
                }
            else
            {
                echo ' <li><a class="slide-item" href="add-truck">Account Still Pending</a></li>';
            }
                ?>
                       
                                
                                
                               
								 
							</ul>
						</li>
                        
                        <li class="slide">
							<a class="side-menu__item" data-toggle="slide" href="#">
                                <i class="si si-calculator" aria-hidden="true" style="padding-right: 15px; padding-left: 5px;"></i>
                               
                                
                                
                                <span class="side-menu__label">Negotiation</span><i class="angle fe fe-chevron-down"></i></a>
							<ul class="slide-menu">
                                
                 
		 
                                
                                
                                
<li><a class="slide-item" href="fare-negotiation">Fare Negotiation</a></li>
 
								
							</ul>
						</li>
                        
                        
                        <?php
            
        }
                        if($usertype_all == 7)
                        {
                            
                      ?>
                        
                        
                          
                        <li class="slide">
							<a class="side-menu__item" data-toggle="slide" href="#">
                                <i class="si si-list" aria-hidden="true" style="padding-right: 15px; padding-left: 5px;"></i>
                               
                                
                                
                                <span class="side-menu__label">Inspection</span><i class="angle fe fe-chevron-down"></i></a>
							<ul class="slide-menu">
                                
                 
		 
                                
                                
                                
								<li><a class="slide-item" href="inspection-list">Pending Inspection</a></li>
								
						 
								<li><a class="slide-item" href="inspection-list?truck=3">Inspected</a></li>
							<!--	<li><a class="slide-item" href="inspection-list?truck=1">Approved</a></li>-->
								
							</ul>
						</li> 
                        
                        
                        <?php
                            
                            
                        }
                        
                        if($status_owner != 2 or $super != 1)
                        {
                            
						
 			
 
 $query =  "SELECT  `id`, `menu` FROM `menu_rights` WHERE `user` = '$user' AND `super` = 'super' GROUP BY `menu`";		
		 
			
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
	 
		 echo '
                           <li class="slide">
							<a class="side-menu__item" data-toggle="slide" href="#">
                              
                              <i class="'.$icon.'" aria-hidden="true" style="padding-right: 15px; padding-left: 5px;"></i>
                                
                            
                                
                                <span class="side-menu__label">'.$name.'</span><i class="angle fe fe-chevron-down"></i></a>
							<ul class="slide-menu">';
		 
		/* echo '  <li>
        <a href="javaScript:void();" class="waves-effect">

         <i aria-hidden="true" class="fa '.$icon.'"></i>
          <span>'.$name.'</span> <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="sidebar-submenu">';*/
	 
		
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
		
		// echo '<li><a href="'.$url.'"><i class="zmdi zmdi-dot-circle-alt"></i>  '.$name.'</a>';
         echo '  <li><a class="slide-item" href="'.$url.'"> '.$name.'</a></li>';
					  		 
	}
			  
		  }
		
		echo '		 
							</ul>
						</li>
                        ';
		
		
					  		 
	}
			  
		  } 		
					
                            
                        }
            ?>
                        
                        
                        
                        
                        
                        
                      <li class="slide">
							<a class="side-menu__item" data-toggle="slide" href="#">
                                <i class="si si-envelope-letter" aria-hidden="true" style="padding-right: 15px; padding-left: 5px;"></i>
                               
                                
                                
                                <span class="side-menu__label">Notifications</span><i class="angle fe fe-chevron-down"></i></a>
							<ul class="slide-menu">
                                
                 
		 
                                
                                
                                
								<li><a class="slide-item" href="notification-list">Inbox</a></li>
								
						 
								<li><a class="slide-item" href="mail-compose">Send</a></li>
							 
								
							</ul>
						</li>  
                        
                        
                     
                       
					</ul>
				</div>
			</aside>