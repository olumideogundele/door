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
			  <form     method="post"    autocomplete="off" action="" enctype="multipart/form-data">
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
                  <h5>Bike Plate Number:</h5>
				    <input type="text" class="form-control" id="exampleInputEmail_1" name="truck_plate_number" placeholder="Bike Plate Number" value="<?php 	 if(isset($_GET['id']))
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
                <h3><i class="sl sl-icon-map"></i> Locations </h3>
              </div>
              <div class="utf_submit_section"> 
                <div class="row with-forms"> 				
                 <div class="row with-forms">
                <div class="col-md-12">
                  <h5>Bike Operating Location:</h5>
                 <input type="text" class="form-control" name="location" id="location" placeholder="Bike Operating Location" value="<?php 	 if(isset($_GET['id']))
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
						<a href="#" id="utf_street_view_btn">Your Office Street View</a> 
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
                <h3><i class="sl sl-icon-picture"></i> Images  Upload Bike's Particulars (Allowed formats & size: JPEG, PNG, JPG, PDF and must not be more than 1MB)</h3>
              </div>			  
              <div class="row with-forms">              
				 <div class="row with-forms">
                <div class="col-md-6">
                  <h5>GIT Insurance:</h5>
               <input type="file" class="form-control" id="exampleInputpwd_2" name="calibration_chart" placeholder="GIT to"<?php  if(!isset($_GET['id']))
{
 echo "required"       ;
}      ?>>
                       
                       
<input type="hidden" class="form-control" id="exampleInputpwd_2" name="iding"  value="<?php  if(isset($_GET['id']))
{
 echo $id123       ;
}      ?>" >
                       
                       
                       
                       <?php 	 if(isset($_GET['id']))
	 {  
     ?>
<input type="hidden" name="calibration_chart_old" value="<?php echo $calibration_chart; ?>">
                       <?php $array = explode('/', $calibration_chart); echo $array[1];?> 
                          
                          <?php
     
     } ?>
                    
	 	
                </div>
				<div class="col-md-6">
                  <h5>Road Worthiness Cert:</h5>                  
			<input type="file" class="form-control" id="exampleInputpwd_2" name="road_worthiness_cert" placeholder="Road Worthiness Cert"  <?php  if(!isset($_GET['id']))
{
 echo "required"       ;
}      ?>>
                    
                    <?php 	 if(isset($_GET['id']))
	 {  
     ?>
                           <input type="hidden" name="road_worthiness_cert_old" value="<?php echo $road_worthiness_cert; ?>">
                    <?php 
         
         $array = explode('/', $road_worthiness_cert);
         echo $array[1];?> 
                          
                          <?php
     
     } ?>
               
                </div>
					 
					 
					 
					  <div class="col-md-6">
                  <h5>Commercial Licence:</h5> 
 <input type="file" class="form-control" id="exampleInputpwd_2" name="commercial_licence" placeholder="Commercial Licence"  <?php  if(!isset($_GET['id']))
{
 echo "required"       ;
}      ?>>
                      <?php 	 if(isset($_GET['id']))
	 {  
     ?>
                          <input type="hidden" name="commercial_licence_old" value="<?php echo $commercial_licence; ?>"><?php 
         
         $array = explode('/', $commercial_licence);
         echo $array[1];?> 
                          
                          <?php
     
     } ?>
            
	 	
                </div>
					 
					   <div class="col-md-6">
                  <h5>Vehicle Insurance:</h5>  
 												 
 <input type="file" class="form-control" id="exampleInputpwd_2" name="git_insurance" placeholder="Vehicle Insurance"  <?php  if(!isset($_GET['id']))
{
 echo "required"       ;
}      ?>>
				
<?php 	 if(isset($_GET['id']))
	 {  
     ?>
                           <input type="hidden" name="git_insurance_old" value="<?php echo $git_insurance; ?>"><?php 
         
         $array = explode('/', $git_insurance);
         echo $array[1];?> 
                          
                          <?php
     
     } ?>
            
	 	
                </div>
			  
					  <div class="col-md-6">
                  <h5>Bike View 1:</h5>  
 													 
 <input type="file" class="form-control" id="exampleInputpwd_2" name="front_view_1" placeholder="Front View"<?php  if(!isset($_GET['id']))
{
 echo "required"       ;
}      ?>>
                          
                          <?php 	 if(isset($_GET['id']))
	 {  
     ?>
                         <input type="hidden" name="front_view_1_old" value="<?php echo $front_view_1;?>"><?php 
         
         $array = explode('/', $front_view_1);
         echo $array[1];?> 
                          
                          <?php
     
     } ?>
                
	 	
                </div>
					 
					 <div class="col-md-6">
                  <h5>Bike View 2:</h5>  
 												 
 <input type="file" class="form-control" id="exampleInputpwd_2" name="front_view_2" placeholder="Front View"<?php  if(!isset($_GET['id']))
{
 echo "required"       ;
}      ?>>
                    
                    
                    
                          <?php 	 if(isset($_GET['id']))
	 {  
     ?>
                         <input type="hidden" name="front_view_2_old" value="<?php echo $front_view_2; ?>"><?php 
         
         $array = explode('/', $front_view_2);
         echo $array[1];?> 
                          
                          <?php
     
     } ?>
	 	
                </div>
					 
					 
					 
					 
              </div>
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
			 
				  
				  
				  
				  
				  
				   
			  </div>	  
            </div> 
			
                 <button  type="submit" name="<?php echo $buttonName;?>" class="button preview">
													
													 <?php
	 if(isset($_GET['id']))
	 {
	 
	 echo "Update Now";
												 
	 }
													else
													{
														
												echo "Submit Now"		;
														
													}
													?>
													 </button>
                                            <button type="reset" class="button preview">Cancel</button><br>
 
			  </form>
			  
			  
			  
        </div>
			
			
			
			<div id="utf_add_listing_part" style="padding-top: 10px;">             
			<div class="add_utf_listing_section"> 
			  <div class="utf_add_listing_part_headline_part">
                <h3><i class="sl sl-icon-user"></i>View  Fleet</h3>
              </div>			  
			  <div class="row with-forms">				
				<div class="col-md-12">
					<div class="form-group lis-relative">
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
														 
														<th>Created Date</th>
												 	   
												 	   <th>Registered By</th>
												<th>Status</th>
														<th>More</th>
												 </td>
													 
													</tr>
                                        </thead>
                                        <tbody>
                                         <?php
												include("../restricted/includes/view-truck.php");
												
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
														 
														<th>Created Date</th>
												 	   
												 	   <th>Registered By</th>
												<th>Status</th>
														<th>More</th>
												 </td>
													 
													</tr>
                                        </tfoot>
										</table>
									</div> 
					</div>
				</div>
			  </div>
			</div>
			   
			  
			  
			  
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
 <script src="http://maps.google.com/maps/api/js?sensor=false&amp;language=en"></script> 
<script src="../scripts/infobox.min.js"></script> 
<script src="../scripts/markerclusterer.js"></script> 
<script src="../scripts/maps.js"></script>
  
<script src="../scripts/dropzone.js"></script>


 <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAGrHdhUTvfj1Fyl9Dx7_e7RstThaE1uHo&libraries=places"></script>
      
    
      <script>
            function init() {
                var input = document.getElementById('location');
                var autocomplete = new google.maps.places.Autocomplete(input);
            }
 
            google.maps.event.addDomListener(window, 'load', init);
          
           
        </script>



 <script src="../myassets/plugins/datatable/js/jquery.dataTables.min.js"></script>
		<script src="../myassets/plugins/datatable/js/dataTables.dataTables.min.js"></script>
		<script src="../myassets/plugins/datatable/js/dataTables.responsive.min.js"></script>
		<script src="../myassets/plugins/datatable/js/responsive.dataTables.min.js"></script>
		<script src="../myassets/plugins/datatable/js/jquery.dataTables.js"></script>
		<script src="../myassets/plugins/datatable/js/dataTables.bootstrap4.js"></script>
		<script src="../myassets/plugins/datatable/js/dataTables.buttons.min.js"></script>
		<script src="../myassets/plugins/datatable/js/buttons.bootstrap4.min.js"></script>
		<script src="../myassets/plugins/datatable/js/jszip.min.js"></script>
		<script src="../myassets/plugins/datatable/js/pdfmake.min.js"></script>
		<script src="../myassets/plugins/datatable/js/vfs_fonts.js"></script>
		<script src="../myassets/plugins/datatable/js/buttons.html5.min.js"></script>
		<script src="../myassets/plugins/datatable/js/buttons.print.min.js"></script>
		<script src="../myassets/plugins/datatable/js/buttons.colVis.min.js"></script>
		<script src="../myassets/plugins/datatable/js/dataTables.responsive.min.js"></script>
		<script src="../myassets/plugins/datatable/js/responsive.bootstrap4.min.js"></script>



</body>
</html>