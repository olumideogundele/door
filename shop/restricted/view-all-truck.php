<?php


include("header.php");
?><?php


include("header2.php");
 
?>
			<!-- main-sidebar -->

				<!-- /main-header -->

			 
                        
                    
                
                
                
                
                
                
                
						<div class="col-xl-12">
							<div class="card mg-b-20">
								<div class="card-header pb-0">
									<div class="d-flex justify-content-between">
										<h4 class="card-title mg-b-0">Truck Information</h4>
										<i class="mdi mdi-dots-horizontal text-gray"></i>
									</div>
									<p class="tx-12 tx-gray-500 mb-2">View All Truck Information</p>
                                    
                                    <div class="col-md-12">
                                            <div class="form-group">
                                      	
								 	
												 <?php
											include("includes/update_column.php");
											include("includes/deleteclass.php");
											//deleteclass
											 if(isset($_GET['value']) and $_GET['value'] == 2)
                                                {
                                                    
                                                      $id =    base64_decode(strtr($_GET['truckid'], '-_,', '+/='));;   
                                                    
                                                    
        $state = $myName->showName($conn, "SELECT  `state` FROM  `truck` WHERE  `id` = '$id'");                                                   
       // $state = $myName->showName($conn, "SELECT  `state` FROM  `truck` WHERE  `id` = '$id'");                                                   
                                                    
     $truck_id = 	strtr(base64_encode($id), '+/=', '-_,');
       
 $inspector = $myName->showName($conn, "SELECT `account_number` FROM `user_unit`  WHERE (`usertype` = 7 AND `state` = '$state') ORDER BY RAND() LIMIT 1;"); 
		
        
        
         
        if(!empty($inspector))
        {
            
            	$link = 'https://'.$_SERVER['HTTP_HOST'].'/restricted/view-truck?id='.$truck_id;	
            
            
            $registeredby = $myName->showName($conn, "SELECT  `registeredby` FROM  `truck` WHERE  `id` = '$id'");   
            
	   $account_name = $myName->showName($conn, "SELECT  `name` FROM  `user_unit` WHERE  `account_number` = '$registeredby'");
	   $account_phone = $myName->showName($conn, "SELECT  `phone` FROM  `user_unit` WHERE  `account_number` = '$registeredby'");
	   $account_email = $myName->showName($conn, "SELECT  `email` FROM  `user_unit` WHERE  `account_number` = '$registeredby'");
            
            
	   $truck_plate_number = $myName->showName($conn, "SELECT  `truck_plate_number` FROM  `truck` WHERE  `id` = '$id'");
	   $truck_brand = $myName->showName($conn, "SELECT  `truck_brand` FROM  `truck` WHERE  `id` = '$id'");
            
            
            
            
            
	   $inspector_phone = $myName->showName($conn, "SELECT  `phone` FROM  `user_unit` WHERE  `account_number` = '$inspector'");
	   $inspector_email = $myName->showName($conn, "SELECT  `email` FROM  `user_unit` WHERE  `account_number` = '$inspector'");
	   $inspector_name = $myName->showName($conn, "SELECT  `name` FROM  `user_unit` WHERE  `account_number` = '$inspector'");
            
            	 
$sql111 = 	 "UPDATE `truck`  SET `inspector`  = '$inspector' WHERE `id`  = '$id'";
$inserted =  mysqli_query($conn, $sql111) or die(mysqli_error($conn));
            
            
            
          if($inserted )  
          {
                     
          $sql111 = 	 "UPDATE `truck`  SET `status`  = '2' WHERE `id`  = '$id'";
$inserted =  mysqli_query($conn, $sql111) or die(mysqli_error($conn));  
   $message_im = "Truck Inpection Alert. 
Truck Owner:".$account_name."
Plate No :".$truck_plate_number."
Brand :".$truck_brand."
Date:".$datetime."
Click:".$link;   
            
$message_ow = "Truck Inpection Alert. 
Your Truck: ".$truck_plate_number."
Brand :".$truck_brand."
Is scheduled for Inspection.
Inspector's details
Name: ".$inspector_name."
Phone: ".$inspector_phone."
Email: ".$inspector_email."";  
            
            
              $senderID = "LoadMe";
  
 
   $Sending = new SendingSMS(); 
  							 
							$Sending->smsAPI($inspector_phone,"LoadMe",$message_im);
							$Sending->smsAPI($account_phone,"LoadMe",$message_ow);
            
            
            
              $message = ' 

<div class="email-background" style="background: #eee;padding: 10px;">
   
  <div class="email-container" style="max-width: 500px;background: white;margin: 0 auto;overflow: hidden;border-radius: 5px;text-align: center;font-family: sans-serif;"> <img src="http://'.$_SERVER['HTTP_HOST'].'/restricted/'.$inst_logo.'"  alt="'.$inst_logo.'"  width="50px" height="50px" style="max-width: 30%;">
	   
	    <h3 style="5px;font-size: 2.0em;">Hi '.$inspector_name.'...,   </h3>
    <span style="padding: 20px;font-size: 1.3em;">Truck Uploaded Need Inspection. </span><br>
	   
 
	 <span style="padding: 20px;font-size: 1.5em;"> Truck Brand: <strong> '.$truck_brand.'</strong> </span>
	 <span style="padding: 20px;font-size: 1.5em;"> Truck Plate Number: <strong> '.$truck_plate_number.'</strong> </span>
	 <span style="padding: 20px;font-size: 1.5em;"> Truck Owner: <strong> '.$account_name.'</strong> </span>
   
    <span> 
	 <p style="padding: 20px;font-weight: 300;font-size: 1.2em;">Please login to the portal. </p>
    <div class="cta" style="padding: 5px;background: #26466D;margin: 0 auto;">
      <p style="padding: 20px;font-weight: 300;font-size: 1.2em;"><a href="'.$link.'" style="text-decoration: none;color: white;">View Details Now</a></p>
 
   </span>
   
    <p style="padding: 20px;font-weight: 300;font-size: 1.2em;">Please login to the portal. </p>
    <div class="cta" style="padding: 5px;background: #26466D;margin: 0 auto;">
      <p style="padding: 20px;font-weight: 300;font-size: 1.2em;"><a href="'.$link.'" style="text-decoration: none;color: white;">Visit Portal Now</a></p>
    </div>


  </div>
  <div class="footer-links" style="max-width: 500px;font-family: sans-serif;margin: 0 auto;overflow: hidden;border-radius: 5px;text-align: center;padding: 20px;">
    <a href="/xx" style="color: #26466D;">about</a> | <a href="/xx" style="color: #26466D;">unsubsribe</a> | <a href="/xx" style="color: #26466D;">t&amp;c s</a>
  </div>
</div>
';	
            
            
$message12 = '<div class="email-background" style="background: #eee;padding: 10px;">
   
  <div class="email-container" style="max-width: 500px;background: white;margin: 0 auto;overflow: hidden;border-radius: 5px;text-align: center;font-family: sans-serif;"> <img src="http://'.$_SERVER['HTTP_HOST'].'/restricted/'.$inst_logo.'"  alt="'.$inst_logo.'"  width="50px" height="50px" style="max-width: 30%;">
	   
	    <h3 style="5px;font-size: 2.0em;">Hi '.$account_name.'...,   </h3>
    <span style="padding: 20px;font-size: 1.3em;">Scheduled Truck Inspection. </span><br>
	   
  <span style="padding: 20px;font-size: 1.5em;">Your truck with plate number: <strong> '.$truck_plate_number.'</strong> </span>
	 <span style="padding: 20px;font-size: 1.5em;"> Truck Brand: <strong> '.$truck_brand.'</strong> </span>
	
	 <span style="padding: 20px;font-size: 1.5em;"> is scheduled for inspection</span>
	 <span style="padding: 20px;font-size: 1.5em;"> Please find inspector\'s details below</span>
     
      <span style="padding: 20px;font-size: 1.5em;">Name <strong> '.$inspector_name.'</strong> </span>
	 <span style="padding: 20px;font-size: 1.5em;">Phone<strong> '.$inspector_phone.'</strong> </span>
	 <span style="padding: 20px;font-size: 1.5em;">Email<strong> '.$inspector_email.'</strong> </span>
   
    <span> 
	 <p style="padding: 20px;font-weight: 300;font-size: 1.2em;">Please login to the portal. </p>
    <div class="cta" style="padding: 5px;background: #26466D;margin: 0 auto;">
      <p style="padding: 20px;font-weight: 300;font-size: 1.2em;"><a href="'.$link.'" style="text-decoration: none;color: white;">View Details Now</a></p>
 
   </span>
   
    <p style="padding: 20px;font-weight: 300;font-size: 1.2em;">Please login to the portal. </p>
    <div class="cta" style="padding: 5px;background: #26466D;margin: 0 auto;">
      <p style="padding: 20px;font-weight: 300;font-size: 1.2em;"><a href="'.$link.'" style="text-decoration: none;color: white;">Visit Portal Now</a></p>
    </div>


  </div>
  
</div>
';	
		 
		
		 
/*EMAIL TEMPLATE ENDS*/ 


//$to      = $email;             // give to email address 
 $subject  = "Truck Inspection Alert";  //change subject of email 
$newEmail    ="info@loadme.services";                           // give from email address 

// mandatory headers for email message, change if you need something different in your setting. 
   $newEmail= "info@loadme.services";
	                    $headers = "From: " .($newEmail) . "\r\n";
                        $headers .= "Reply-To: ".($newEmail) . "\r\n";
                        $headers .= "Return-Path: ".($newEmail) . "\r\n";;
                        $headers .= "MIME-Version: 1.0\r\n";
                        $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
                        $headers .= "X-Priority: 3\r\n";
                        $headers .= "X-Mailer: PHP". phpversion() ."\r\n";         
         mail($inspector_email, $subject, $message, $headers);		
mail($account_email, $subject, $message12, $headers);		

		$realmessage =  mysqli_real_escape_string($conn,$message);
		$realmessage2 =  mysqli_real_escape_string($conn,$message12);
		 
$sqlnot ="INSERT INTO `notification`(`code`,`title`,`message`, `registeredby`, `sent_to`, `status`, `read_status`, `created_at`) VALUES
('$truck_id','$subject','$realmessage','$emailing', '$registeredby', '1', '1','$datetime')";
            
            
$sqlnot ="INSERT INTO `notification`(`code`,`title`,`message`, `registeredby`, `sent_to`, `status`, `read_status`, `created_at`) VALUES
('$truck_id','$subject','$realmessage2','$emailing', '$inspector', '1', '1','$datetime')";
     
				
		 	
 mysqli_query($conn, $sqlnot) or die(mysqli_error($conn));		
  
        echo'<a href="#" class="btn btn-success btn-lg">Information updated successfully. Thank You.</a>';	
		
					 echo '<meta http-equiv="Refresh" content="3; url='.$_SERVER['HTTP_REFERER'].'"> ';     
            
		 
        }
        else
        {
         echo '<div class="btn btn-danger btn-lg">Inspector Not Available for State/Location.<br /> Please Check And Try Again Later.</a></div>'; 	
            
        } 
          }
                                                 else
                                                 {
                                                     
                   echo '<div class="btn btn-danger btn-lg">Inspector Not Available for State/Location.<br /> Please Check And Try Again Later.</a></div>'; 	                                    
                                                     
                                                 }
            
            
    
                                                    
                                                }
											?>
                                            </div>
                                        </div>
								</div>
								<div class="card-body">
									<div class="table-responsive">
										<table id="example" class="table key-buttons text-md-nowrap">
										 <thead>
                                            <tr>
												
 
 
  		   
												 
														<th>Owner</th>
														<th>Truck Brand</th>
														<th>Year</th>
														<th>Plate Number</th>
														<th>State</th>
														<th>Capacity</th>
														<th>Truck Type</th>
														<th>Registered By</th>
														 
														<th>Created Date</th>
												 	   <th>Driver</th>
												 	   
												<th>Status</th>
														<th>More</th>
												 
													 
													</tr>
                                        </thead>
                                        <tbody>
                                         <?php
												include("includes/view-truck.php");
												
												?>
                                                
                                        </tbody>
                                        <tfoot>
                                            <tr>
												
 
 
  		    
														<th>Owner</th>
														<th>Truck Brand</th>
														<th>Year</th>
														<th>Plate Number</th>
														<th>State</th>
														<th>Capacity</th>
														<th>Truck Type</th>
														<th>Registered By</th>
														 
														<th>Created Date</th>
												 	   <th>Driver</th>
												 	   
												<th>Status</th>
														<th>More</th>
													 
													</tr>
                                        </tfoot>
										</table>
									</div>
								</div>
							</div>
						</div>
						<!--/div-->

						<!--div-->
						 
					</div>
					<!-- /row -->
				</div>
				<!-- Container closed -->
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
			</div>



<script>
function myFunction(val) {
//	var age = document.getElementById("quanity").value;


	
	 var x = parseInt(document.getElementById("total_capacity").value);	
	 var compartment_1 = parseInt(document.getElementById("compartment_1").value);	
	 var compartment_2 = parseInt(document.getElementById("compartment_2").value);	
	 var compartment_3 = parseInt(document.getElementById("compartment_3").value);	
	
	
	//alert("jkhsjdjsjk - "+  x);
	
	
 
		//alert(val);	
	//	 var value  = (val + x).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,'); 
 
			
		var total = compartment_1 + compartment_2 + compartment_3;	
 
 
  document.getElementById("total_capacity").value =parseInt(total);	
			
	 
	/*
	

	var percentage = document.getElementById("compartment_1").value;
//percentage	
	
 
 if(isNaN(val))
 {
	alert("Value is not a number. Please check and edit."); 
	 
 }
 
	if(x != "")
		{
	
 var value  = (val * x).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,'); 
 
 //alert(value);
 
  document.getElementById("pricing").value = val * x;


  document.getElementById("demo").innerHTML =  "&#8358; "+value; 
		}
	else if(percentage !="")
	{
		
		
		 
		 var value  = ((val * 100)/percentage).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,'); 
 
 //alert(value);
 
  document.getElementById("pricing").value = (val * 100)/percentage;


  document.getElementById("demo").innerHTML =  "&#8358; "+value; 
		
	}*/
}
	
	
	function myFunction2(val) {
//	$value = round(($amount * $percentage)/100, 2);
 var x = document.getElementById("percentage").value;
 
 if(isNaN(val))
 {
	alert("Value is not a number. Please check and edit."); 
	 
 }
 
 var value  = ((val * x)/100).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,'); 
 
 //alert(value);
 
  document.getElementById("pricing").value = val * x;


  document.getElementById("demo").innerHTML =  "&#8358; "+value; 
}
	
</script>


<script>
	
	function hide()
	{
		 $("#hide").hide();
		
	}

	function changing()
	{
		
	var val2 =   $("#approval").val()
 
		
		if(val2 == "Yes")
			{
			$("#hide").show();	
			}
		else{
			
			$("#hide").hide();
		}
		
		 
	}
 		   
				   </script>
				   <!-- modal -->

			<?php
            
            
            include("footer.php");
            ?>