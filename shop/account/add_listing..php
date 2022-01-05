 <?php

include("header.php");

include("../restricted/includes/view-truck-full.php");
$buttonName = "validate";
$buttonValue = "Submit Now";

 if(isset($_GET['id']))
	 {
	 
	$buttonName = "update";
$buttonValue = "Update Now";
												 
	 }
?>
    
    <!-- Content -->
    <div class="utf_dashboard_content">       
      <div id="titlebar" class="dashboard_gradient">
        <div class="row">
          <div class="col-md-12">
            <h2>Add Listing</h2>
            <nav id="breadcrumbs">
              <ul>
                <li><a href="../index">Home</a></li>
                <li><a href="index">Dashboard</a></li>
                <li>Add Listing</li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <div id="utf_add_listing_part">             
			<div class="add_utf_listing_section"> 
			  <div class="utf_add_listing_part_headline_part">
                <h3><i class="sl sl-icon-user"></i>Create Fleet</h3>
              </div>			  
			  <div class="row with-forms">				
				<div class="col-md-12">
					<div class="form-group lis-relative">
						<div class="col-md-12">
                                            <div class="form-group">
                                       <?php
											include("../restricted/includes/add-truck-process.php");
											
											?>    
												
												 <?php
											include("../restricted/includes/update_column.php");
											include("../restricted/includes/deleteclass.php");

                                                
                                                
                                                if(isset($_GET['columnValue']) and $_GET['columnValue'] == 2)
                                                {
                                                    
                                                      $id = $_GET['id'];   
                                                    
                                                    
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
 mysqli_query($conn, $sql111) or die(mysqli_error($conn));
            
            
            
            
            
            
            
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
				</div>
			  </div>
			</div>
			
            <div class="add_utf_listing_section margin-top-45"> 
              <div class="utf_add_listing_part_headline_part">
                <h3><i class="sl sl-icon-tag"></i> Add Bike</h3>
              </div>              
              <div class="row with-forms">
                <div class="col-md-6">
                  <h5>Bike Brand:</h5>
                  <input type="text" class="search-field"  id="listing_title" name="truck_brand" placeholder="Bike Brand" value="<?php 	 if(isset($_GET['id']))
	 { echo $truck_brand; } ?>">
	 	
                </div>
				<div class="col-md-6">
                  <h5>Year</h5>                  
				 <!--  <select class="selectpicker default" data-selected-text-format="count" data-size="7" title="Select Category">-->
						<select class="form-control   select2" name="year" id="year" required>
    
    
    <?php 	 if(isset($_GET['id']))
	 { 

echo '<option value='.$year.'>'.$year.'</option>';	
} ?>
    
    
												   <option value=''>Select One</option>
												   
										     <?php
	
	
	
	
	for($i = 1896; $i <= 2021; $i++)
	{
				echo '<option value='.$i.'>'.$i.'</option>';	
		
	}
	  
	 
	 
	 ?>
                                </select>
                </div>
              </div>              
              <div class="row with-forms">                 
                <div class="col-md-6">
                  <h5>Truck Plate Number:</h5>
				    <input type="text" class="form-control" id="exampleInputEmail_1" name="truck_plate_number" placeholder="Truck Plate Number" value="<?php 	 if(isset($_GET['id']))
	 { echo $truck_plate_number; } ?>" required>
                </div>
                <div class="col-md-6">
                  <h5>State on Plate Number:</h5>
                  <div class="intro-search-field utf-chosen-cat-single">
					  <select class="selectpicker default" data-selected-text-format="count" data-size="7" title="State on Plate Number" name="state" id="state" required>
												 
    <?php 	 if(isset($_GET['id']))
	 { 

echo '<option value='.$state.'>'.$state_name.'</option>';	
} ?>
    
    
    
    <option value=''>Select One</option>
												   
										     <?php
	 include("../restricted/config/DB_config.php");
	 
	 
	 $query =  "SELECT  `state_id`, `name` FROM `states` ORDER BY `name` ASC";	
 $extract_distance = mysqli_query($conn, $query) or die(mysqli_error($conn));
		$count = mysqli_num_rows($extract_distance);
    if ($count > 0)
		  {
 	 while ($row_distance=mysqli_fetch_row($extract_distance))
    {
  						  $id=$row_distance[0];
		  $name=$row_distance[1];
		
	 
					 
					  
					  
				echo '<option value='.$id.'>'.$name.'</option>';	
				
				  
	}
	
		  }
	 
	 
	 ?>
                                </select>
				 
					 
				  </div>
                </div>
              </div>
				
				
				
				
				
				
				<div class="row with-forms">                 
                <div class="col-md-6">
                  <h5>Safety Helmet?:</h5>
					  <div class="intro-search-field utf-chosen-cat-single">
				   <select class="selectpicker default" data-selected-text-format="count" data-size="7" title="Safety Helmet?"  name="hat" id="hat" required>
													 
    <?php 	 if(isset($_GET['id']))
	 { 

echo '<option value='.$hat.' selected>'.$hat.'</option>';	
} ?>
  <option value='Yes' selected>Yes</option>
 <option value='No'>No</option>
												   
                                </select>
                </div>
                </div>
                <div class="col-md-6">
                  <h5>Reflective Jacket?:</h5>
                  <div class="intro-search-field utf-chosen-cat-single">
					  <select class="selectpicker default" data-selected-text-format="count" data-size="7" title="Reflective Jacket?" name="jacket" id="jacket" required>
			
    											 
    <?php 	 if(isset($_GET['id']))
	 { 

echo '<option value='.$jacket.' selected>'.$jacket.'</option>';	
} ?>
    
 	
	<option value='Yes' selected>Yes</option>
												   
												   <option value='No'>No</option>
												   
                                </select>
				 
					 
				  </div>
                </div>
              </div>
				
				
				
				
				
				
				
				
				
				
			    
            </div>
            
            <div class="add_utf_listing_section margin-top-45"> 
              <div class="utf_add_listing_part_headline_part">
                <h3><i class="sl sl-icon-map"></i> Location</h3>
              </div>
              <div class="utf_submit_section"> 
                <div class="row with-forms"> 				
                 <div class="row with-forms">
                <div class="col-md-12">
                  <h5>Bike Operating Location:</h5>
                 <input type="text" class="form-control" name="location" id="location" placeholder="Truck Operating Location" value="<?php 	 if(isset($_GET['id']))
	 { echo $location; } ?>" required>
                </div>				
              </div>
					
					<?php
					
					if(isset($lati))
					{
					
					?>
				  <div id="utf_listing_location" class="col-md-12 utf_listing_section">
					  <div id="utf_single_listing_map_block">
						<div id="utf_single_listingmap" data-latitude="<?php echo $lati; ?>" data-longitude="<?php echo $longi; ?>" data-map-icon="im im-icon-Hamburger"></div>
						<a href="#" id="utf_street_view_btn">Street View</a> 
					  </div>
				  </div>
					
					<?php
					}
					?>
                </div>
              </div>
            </div>
            
            <div class="add_utf_listing_section margin-top-45"> 
              <div class="utf_add_listing_part_headline_part">
                <h3><i class="sl sl-icon-picture"></i> Images</h3>
              </div>			  
              <div class="row with-forms">              
				  <div class="utf_submit_section col-md-4">
				    <h4>Logo</h4>
					<form action="../file-upload" class="dropzone"></form>
				  </div>
				  <div class="utf_submit_section col-md-4">
					<h4>Cover Image</h4>
					<form action="../file-upload" class="dropzone"></form>
				  </div>
				  <div class="utf_submit_section col-md-4">
					<h4>Gallery Images</h4>
					<form action="../file-upload" class="dropzone"></form>
				  </div>
			  </div>	  
            </div> 
			
            <div class="add_utf_listing_section margin-top-45"> 
              <div class="utf_add_listing_part_headline_part">
                <h3><i class="sl sl-icon-list"></i> Name & Description</h3>
              </div>              
			  <div class="row with-forms">
				  <div class="col-md-6">
					<h5>Name</h5>
					<input type="text" placeholder="Name">
				  </div>	
				  <div class="col-md-6">
					<h5>Email</h5>
					<input type="text" placeholder="Email">
				  </div>
				  <div class="col-md-6">
					<h5>Title</h5>
					<input type="text" placeholder="Title">
				  </div>
				  <div class="col-md-6">
					<h5>Tagline</h5>
					<input type="text" placeholder="Tagline">
				  </div>				  				 
				  <div class="col-md-12">
					<h5>Description</h5>
					<textarea name="summary" cols="40" rows="3" id="description" placeholder="Description..." spellcheck="true"></textarea>
				  </div>
			  </div>                
            </div>

			<div class="add_utf_listing_section margin-top-45"> 
              <div class="utf_add_listing_part_headline_part">
                <h3><i class="sl sl-icon-home"></i> Amenities</h3>
              </div>              
              <div class="checkboxes in-row amenities_checkbox">
                <ul>
					<li>
						<input id="check-a" type="checkbox" name="check">
						<label for="check-a">Car Parking</label>
					</li>
					<li>
						<input id="check-b" type="checkbox" name="check">
						<label for="check-b">Takes Reservations</label>
					</li>
					<li>
						<input id="check-c" type="checkbox" name="check">
						<label for="check-c">Street Parking</label>
					</li>
					<li>
						<input id="check-d" type="checkbox" name="check">
						<label for="check-d">Elevator in Building</label>
					</li>
					<li>
						<input id="check-e" type="checkbox" name="check">
						<label for="check-e">Outdoor Seating</label>
					</li>
					<li>
						<input id="check-f" type="checkbox" name="check">
						<label for="check-f">Friendly Workspace</label>	
					</li>
					<li>
						<input id="check-g" type="checkbox" name="check">
						<label for="check-g">Wireless Internet</label>
					</li>
					<li>
						<input id="check-h" type="checkbox" name="check" >
						<label for="check-h">Good for Kids</label>
					</li>
					<li>
						<input id="check-i" type="checkbox" name="check" >
						<label for="check-i">Events</label>
					</li>
					<li>
						<input id="check-j" type="checkbox" name="check">
						<label for="check-j">Smoking Allowed</label>
					</li>
					<li>
						<input id="check-k" type="checkbox" name="check">
						<label for="check-k">Wheelchair Accessible</label>
					</li>
					<li>
						<input id="check-l" type="checkbox" name="check">
						<label for="check-l">Accepted Bank Cards</label>
					</li>
				</ul>				
              </div>              
            </div>
            
            <div class="add_utf_listing_section margin-top-45"> 
              <div class="utf_add_listing_part_headline_part">
                <h3><i class="sl sl-icon-clock"></i> Opening Hours</h3>                
              </div>              
              <div class="switcher-content"> 
                <div class="row utf_opening_day utf_js_demo_hours">
                  <div class="col-md-2">
                    <h5>Monday :-</h5>
                  </div>
                  <div class="col-md-5">
                    <select class="utf_chosen_select" data-placeholder="Open Time"></select>
                  </div>
                  <div class="col-md-5">
                    <select class="utf_chosen_select" data-placeholder="Close Time"></select>
                  </div>
                </div>
                
                <div class="row utf_opening_day utf_js_demo_hours">
                  <div class="col-md-2">
                    <h5>Tuesday :-</h5>
                  </div>
                  <div class="col-md-5">
                    <select class="utf_chosen_select" data-placeholder="Open Time"></select>
                  </div>
                  <div class="col-md-5">
                    <select class="utf_chosen_select" data-placeholder="Close Time"></select>
                  </div>
                </div>
                
                <div class="row utf_opening_day utf_js_demo_hours">
                  <div class="col-md-2">
                    <h5>Wednesday :-</h5>
                  </div>
                  <div class="col-md-5">
                    <select class="utf_chosen_select" data-placeholder="Open Time"></select>
                  </div>
                  <div class="col-md-5">
                    <select class="utf_chosen_select" data-placeholder="Close Time"></select>
                  </div>
                </div>
                
                <div class="row utf_opening_day utf_js_demo_hours">
                  <div class="col-md-2">
                    <h5>Thursday :-</h5>
                  </div>
                  <div class="col-md-5">
                    <select class="utf_chosen_select" data-placeholder="Open Time"></select>
                  </div>
                  <div class="col-md-5">
                    <select class="utf_chosen_select" data-placeholder="Close Time"></select>
                  </div>
                </div>
                
                <div class="row utf_opening_day utf_js_demo_hours">
                  <div class="col-md-2">
                    <h5>Friday :-</h5>
                  </div>
                  <div class="col-md-5">
                    <select class="utf_chosen_select" data-placeholder="Open Time"></select>
                  </div>
                  <div class="col-md-5">
                    <select class="utf_chosen_select" data-placeholder="Close Time"></select>
                  </div>
                </div>
                
                <div class="row utf_opening_day utf_js_demo_hours">
                  <div class="col-md-2">
                    <h5>Saturday :-</h5>
                  </div>
                  <div class="col-md-5">
                    <select class="utf_chosen_select" data-placeholder="Open Time"></select>
                  </div>
                  <div class="col-md-5">
                    <select class="utf_chosen_select" data-placeholder="Close Time"></select>
                  </div>
                </div>
                
                <div class="row utf_opening_day utf_js_demo_hours">
                  <div class="col-md-2">
                    <h5>Sunday :-</h5>
                  </div>
                  <div class="col-md-5">
                    <select class="utf_chosen_select" data-placeholder="Open Time"></select>
                  </div>
                  <div class="col-md-5">
                    <select class="utf_chosen_select" data-placeholder="Close Time"></select>
                  </div>
                </div>
              </div>                            
            </div>
			
			<div class="add_utf_listing_section margin-top-45"> 
				<div class="utf_add_listing_part_headline_part">
					<h3><i class="sl sl-icon-tag"></i> Add Pricing</h3>
                </div>              
				<div class="row">
				  <div class="col-md-12">
					<table id="utf_pricing_list_section">
					  <tbody class="ui-sortable">
						<tr class="pricing-list-item pattern ui-sortable-handle">
						  <td><div class="fm-move"><i class="sl sl-icon-cursor-move"></i></div>
							<div class="fm-input pricing-name">
							  <input type="text" placeholder="Title">
							</div>
							<div class="fm-input pricing-ingredients">
							  <input type="text" placeholder="Description">
							</div>
							<div class="fm-input pricing-price"><i class="data-unit">$</i>
							  <input type="text" placeholder="Price" data-unit="$">
							</div>
							<div class="fm-close"><a class="delete" href="#"><i class="fa fa-remove"></i></a></div></td>
						</tr>
					  </tbody>
					</table>
					<a href="#" class="button add-pricing-list-item">Add Item</a> <a href="#" class="button add-pricing-submenu">Add Category</a> </div>
				</div>                          
            </div>					
			
			<div class="add_utf_listing_section margin-top-45"> 
              <div class="utf_add_listing_part_headline_part">
                <h3><i class="sl sl-icon-docs"></i> Your Listing Feature</h3>
              </div>              
              <div class="checkboxes in-row amenities_checkbox">
                <ul>
					<li>
						<input id="check-a1" type="checkbox" name="check">
						<label for="check-a1">Accepts Credit Cards</label>
					</li>
					<li>
						<input id="check-b1" type="checkbox" name="check">
						<label for="check-b1">Smoking Allowed</label>
					</li>
					<li>
						<input id="check-c1" type="checkbox" name="check">
						<label for="check-c1">Bike Parking</label>
					</li>
					<li>
						<input id="check-d1" type="checkbox" name="check">
						<label for="check-d1">Hostels</label>
					</li>
					<li>
						<input id="check-e1" type="checkbox" name="check">
						<label for="check-e1">Wheelchair Accessible</label>
					</li>
					<li>
						<input id="check-f1" type="checkbox" name="check">
						<label for="check-f1">Wheelchair Internet</label>	
					</li>
					<li>
						<input id="check-g1" type="checkbox" name="check">
						<label for="check-g1">Wheelchair Accessible</label>
					</li>
					<li>
						<input id="check-h1" type="checkbox" name="check" >
						<label for="check-h1">Parking Street</label>
					</li>
					<li>
						<input id="check-i1" type="checkbox" name="check" >
						<label for="check-i1">Wireless Internet</label>
					</li>					
				</ul>				
              </div>              
            </div>                        
            <a href="#" class="button preview">Save & Preview</a> </div>
        </div>
        <div class="col-md-12">
          <div class="footer_copyright_part">Copyright © 2019 All Rights Reserved.</div>
        </div>
      </div>
    </div>    
  </div>  
</div>

<!-- Scripts --> 
<script src="../scripts/jquery-3.4.1.min.js"></script> 
<script src="../scripts/chosen.min.js"></script> 
<script src="../scripts/perfect-scrollbar.min.js"></script>
<script src="../scripts/slick.min.js"></script> 
<script src="../scripts/rangeslider.min.js"></script> 
<script src="../scripts/bootstrap-select.min.js"></script> 
<script src="../scripts/magnific-popup.min.js"></script> 
<script src="../scripts/jquery-ui.min.js"></script> 
<script src="../scripts/mmenu.js"></script>
<script src="../scripts/tooltips.min.js"></script> 
<script src="../scripts/color_switcher.js"></script>
<script src="../scripts/jquery_custom.js"></script>
<script>
(function($) {
try {
	var jscr1 = $('.js-scrollbar');
	if (jscr1[0]) {
		const ps1 = new PerfectScrollbar('.js-scrollbar');

	}
    } catch (error) {
        console.log(error);
    }
})(jQuery);
</script>
<!-- Style Switcher -->
<div id="color_switcher_preview">
  <h2>Choose Your Color <a href="#"><i class="fa fa-gear fa-spin (alias)"></i></a></h2>	
	<div>
		<ul class="colors" id="color1">
			<li><a href="#" class="stylesheet"></a></li>
			<li><a href="#" class="stylesheet_1"></a></li>
			<li><a href="#" class="stylesheet_2"></a></li>			
			<li><a href="#" class="stylesheet_3"></a></li>						
			<li><a href="#" class="stylesheet_4"></a></li>
			<li><a href="#" class="stylesheet_5"></a></li>			
		</ul>
	</div>		
</div> 

<!-- Maps --> 
 
<script src="../scripts/infobox.min.js"></script> 
<script src="../scripts/markerclusterer.js"></script> 
<script src="../scripts/maps.js"></script>
<script>
$(".utf_opening_day.utf_js_demo_hours .utf_chosen_select").each(function() {
	$(this).append(''+
        '<option></option>'+
        '<option>Closed</option>'+
        '<option>1 AM</option>'+
        '<option>2 AM</option>'+
        '<option>3 AM</option>'+
        '<option>4 AM</option>'+
        '<option>5 AM</option>'+
        '<option>6 AM</option>'+
        '<option>7 AM</option>'+
        '<option>8 AM</option>'+
        '<option>9 AM</option>'+
        '<option>10 AM</option>'+
        '<option>11 AM</option>'+
        '<option>12 AM</option>'+
        '<option>1 PM</option>'+
        '<option>2 PM</option>'+
        '<option>3 PM</option>'+
        '<option>4 PM</option>'+
        '<option>5 PM</option>'+
        '<option>6 PM</option>'+
        '<option>7 PM</option>'+
        '<option>8 PM</option>'+
        '<option>9 PM</option>'+
        '<option>10 PM</option>'+
        '<option>11 PM</option>'+
        '<option>12 PM</option>');
});
</script> 
<script src="../scripts/dropzone.js"></script>


 <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAGrHdhUTvfj1Fyl9Dx7_e7RstThaE1uHo&libraries=places"></script>
      
    
      <script>
            function init() {
                var input = document.getElementById('location');
                var autocomplete = new google.maps.places.Autocomplete(input);
            }
 
            google.maps.event.addDomListener(window, 'load', init);
          
           
        </script>

</body>
</html>