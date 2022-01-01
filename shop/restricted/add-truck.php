<?php


include("header.php");
?><?php


include("header2.php");


include("includes/view-truck-full.php");
$buttonName = "validate";
$buttonValue = "Submit Now";

 if(isset($_GET['id']))
	 {
	 
	$buttonName = "update";
$buttonValue = "Update Now";
												 
	 }
?>
			<!-- main-sidebar -->

	<script>
	
	
	function call()
	{
		   //alert("Tracking");
        var selectedCountry = $("#truck_type option:selected").val();
	 //alert(selectedCountry);
		   
        $.ajax({
            type: "POST",
            url: "populate-capacity.php",
            data: {state : selectedCountry } 
        }).done(function(data){
            $("#response").html(data);
        });
		
	}
	
	
</script>

			 
                        <div class="col-md-12">
                                            <div class="form-group">
                                       <?php
											include("includes/add-truck-process.php");
											
											?>    
												
												 <?php
											include("includes/update_column.php");
											include("includes/deleteclass.php");

                                                
                                                
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
                        
						 <div class="col-xl-12">
                        
                        <form     method="post"    autocomplete="off" action="" enctype="multipart/form-data">
    <div class="row row-sm">
        <div class="col-xl-6">
          <div class="card">
            <div class="card-header text-uppercase">Create Fleet</div>
             <div class="card-body">
                 
                 <?php
                 if($super == 1)
                 {
                 
                 ?>
                 
                 <div class="form-group overflow-hidden">
													<label>Truck Owner:</label>
<select class="form-control   select2" name="truck_owner" id="truck_owner">
												 
    <?php 	 if(isset($_GET['id']))
	 { 

echo '<option value='.$registeredby.'>'.$truck_owner_name .'</option>';	
} ?>
    
    
    
    <option value=''>Select One</option>
												   
										     <?php
	 include("restricted/config/DB_config.php");
	 
	 
	 $query =  "SELECT  `account_number`, `name` FROM `user_unit` WHERE `usertype` = 2 ORDER BY `name` ASC";	
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
                 <?php
                     
                     }
                     
                     ?>
                 
                 
                 
                 
      
							 <div class="form-group">
													<label>Truck Brand:</label>
 <input type="text" class="form-control" id="truck_brand" placeholder="Truck Brand" name="truck_brand" value="<?php 	 if(isset($_GET['id']))
	 { echo $truck_brand; } ?>">
		 </div>
											   
                                           <div class="form-group overflow-hidden">
													<label>Year:</label>
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
		   
		   
		   
											
                                         <div class="form-group overflow-hidden">
													<label>Truck Plate Number:</label>
 <input type="text" class="form-control" id="exampleInputEmail_1" name="truck_plate_number" placeholder="Truck Plate Number" value="<?php 	 if(isset($_GET['id']))
	 { echo $truck_plate_number; } ?>" required>
		 </div>
                                            <div class="form-group overflow-hidden">
													<label>State on Plate Number:</label>
<select class="form-control   select2" name="state" id="state" required>
												 
    <?php 	 if(isset($_GET['id']))
	 { 

echo '<option value='.$state.'>'.$state_name.'</option>';	
} ?>
    
    
    
    <option value=''>Select One</option>
												   
										     <?php
	 include("restricted/config/DB_config.php");
	 
	 
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
                                                
                                      
				   
				   
				     
                 
                 
                 <div class="form-group overflow-hidden">
<label>C-Caution (Reflective Triangle/Cone)?
:</label>
<select class="form-control select2" name="ccaution" id="ccaution" required>
												  
    
    											 
    <?php 	 if(isset($_GET['id']))
	 { 

echo '<option value='.$ccaution.'>'.$ccaution.'</option>';	
} ?>
    
    
    <option value=''>Select One</option>
												 
	 
	
	<option value='Yes'>Yes</option>
												   
												   <option value='No'>No</option>
												   
									 
                                </select>
		 </div>
				   
		   <div class="form-group overflow-hidden">
													<label>Fire Extinguisher?:</label>
<select class="form-control select2" name="extinguisher" id="extinguisher" required>
												  
    
    											 
    <?php 	 if(isset($_GET['id']))
	 { 

echo '<option value='.$extinguisher.'>'.$extinguisher.'</option>';	
} ?>
    
    
    <option value=''>Select One</option>
												 
	 
	
	<option value='Yes'>Yes</option>
												   
												   <option value='No'>No</option>
												   
									 
                                </select>
		 </div>
		    	
						<div class="form-group overflow-hidden">
													<label>Extra Tyre?:</label>
<select class="form-control select2" name="extratyre" id="extratyre" required>
												  
    
    											 
    <?php 	 if(isset($_GET['id']))
	 { 

echo '<option value='.$extratyre.'>'.$extratyre.'</option>';	
} ?>
    
    
    <option value=''>Select One</option>
												 
	 
	
	<option value='Yes'>Yes</option>
												   
												   <option value='No'>No</option>
												   
									 
                                </select>
		 </div>			
                 	<div class="form-group overflow-hidden">
													<label>Hard Hat?:</label>
<select class="form-control select2" name="hat" id="hat" required>
												  
    
    											 
    <?php 	 if(isset($_GET['id']))
	 { 

echo '<option value='.$hat.'>'.$hat.'</option>';	
} ?>
    
    
    <option value=''>Select One</option>
												 
	 
	
	<option value='Yes'>Yes</option>
												   
												   <option value='No'>No</option>
												   
									 
                                </select>
		 </div>			<div class="form-group overflow-hidden">
													<label>Steel-toed boot?:</label>
<select class="form-control select2" name="boot" id="boot" required>
												  
    
    											 
    <?php 	 if(isset($_GET['id']))
	 { 

echo '<option value='.$boot.'>'.$boot.'</option>';	
} ?>
    
    
    <option value=''>Select One</option>
												 
	 
	
	<option value='Yes'>Yes</option>
												   
												   <option value='No'>No</option>
												   
									 
                                </select>
		 </div>			
                 
                 <div class="form-group overflow-hidden">
													<label>A Reflective Jacket?:</label>
<select class="form-control select2" name="jacket" id="jacket" required>
												  
    
    											 
    <?php 	 if(isset($_GET['id']))
	 { 

echo '<option value='.$jacket.'>'.$jacket.'</option>';	
} ?>
    
    
    <option value=''>Select One</option>
												 
	 
	
	<option value='Yes'>Yes</option>
												   
												   <option value='No'>No</option>
												   
									 
                                </select>
		 </div>				 
		   
		   <div class="form-group overflow-hidden">
													<label>Truck Type:</label>
<select class="form-control   select2" name="truck_type" id="truck_type" required onChange = "call()">
												  
    
    											 
    <?php 	 if(isset($_GET['id']))
	 { 

echo '<option value='.$truck_type.'>'.$truck_type.'</option>';	
} ?>
    
    
    <option value=''>Select One</option>
 
												   
										     <?php
	 include("restricted/config/DB_config.php");
	 
	 
	 $query =  "SELECT  `id`, `name` FROM `truck_type`  WHERE `status` = 1 ORDER BY `name` ASC";	
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
		   
		   <div  id="response">       
                                         
	 </div>  
                 
                  <div class="form-group overflow-hidden">
													<label>Truck Operating Location:</label>
 <input type="text" class="form-control" name="location" id="location" placeholder="Truck Operating Location" value="<?php 	 if(isset($_GET['id']))
	 { echo $location; } ?>" required>
		 </div>
	
		 
   
            </div>
          </div>
        </div>
       <div class="col-xl-6">
          <div class="card">
            
            <div class="card-header">  Upload Truck Particulars (Allowed formats & size: JPEG, PNG, JPG, PDF and must not be more than 1MB)</div>
            <div class="card-body">
                   <div class="form-group overflow-hidden">
													<label>GIT Insurance:</label>
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
				
				<div class="form-group overflow-hidden">
													<label>Road Worthiness Cert:</label>
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
				
		 
                                                <div class="form-group overflow-hidden">
													<label>Commercial Licence:</label>
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
                                                 <div class="form-group overflow-hidden">
													<label>Vehicle Insurance:</label>
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
                                            
				
				
				
                                          <div class="card-header"> Upload Truck Photos (Allowed formats & size: JPEG, PNG, JPG, PDF and must not be more than 1MB)</div>     
                                                
				
				
				      <div class="form-group overflow-hidden">
													<label>Front View:</label>
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
				
				
				<div class="form-group overflow-hidden">
													<label>Back View:</label>
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
				<div class="form-group overflow-hidden">
													<label>Right View:</label>
 <input type="file" class="form-control" id="exampleInputpwd_2" name="side_view_1" placeholder="Side View"<?php  if(!isset($_GET['id']))
{
 echo "required"       ;
}      ?>>
                    
                    <?php 	 if(isset($_GET['id']))
	 {  
     ?>
                          <input type="hidden" name="side_view_1_old" value="<?php echo $side_view_1;?>"><?php 
         
         $array = explode('/', $side_view_1);
         echo $array[1];?> 
                          
                          <?php
     
     } ?>
                    
												</div>	
                
                
                
                <div class="form-group overflow-hidden">
													<label>Left View:</label>
 <input type="file" class="form-control" id="exampleInputpwd_2" name="side_view_2" placeholder="Side View"<?php  if(!isset($_GET['id']))
{
 echo "required"       ;
}      ?>>
                    
                     <?php 	 if(isset($_GET['id']))
	 {  
     ?>
                          <input type="hidden" name="side_view_2_old" value="<?php echo $side_view_2;?>">
                    <?php 
         
         $array = explode('/', $side_view_2);
         echo $array[1];?> 
                          
                          <?php
     
     } ?>
												</div>
				
				
			
				  
										 
													<div class="card-body">
                                    <div class="action-form">
                                        <div class="form-group m-b-10 text-center">
                                        <button  type="submit" name="<?php echo $buttonName;?>" class="btn btn-lg btn-primary m-b-5 m-t-5">
													
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
                                            <button type="reset" class="btn btn-dark waves-effect waves-light">Cancel</button><br>
<br>

                                        </div>
                                    </div>
                                </div>	
            </div>
        
          </div>
        </div>
      </div><!--End Row-->

		    </form>
                
                </div>
						 
                
                
                
                
                
                
                
						<div class="col-xl-12">
							<div class="card mg-b-20">
								<div class="card-header pb-0">
									<div class="d-flex justify-content-between">
										<h4 class="card-title mg-b-0">Truck Information</h4>
										<i class="mdi mdi-dots-horizontal text-gray"></i>
									</div>
									<p class="tx-12 tx-gray-500 mb-2">All Truck Information</p>
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
														 
														<th>Created Date</th>
												 	   
												 	   <th>Registered By</th>
												<th>Status</th>
														<th>More</th>
												 </td>
													 
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
						<!--/div-->

						<!--div-->
						 
					</div>
					<!-- /row -->
				</div>
				<!-- Container closed -->
			</div>
			<!-- main-content closed -->
 


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



 <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAGrHdhUTvfj1Fyl9Dx7_e7RstThaE1uHo&libraries=places"></script>
      
    
      <script>
            function init() {
                var input = document.getElementById('location');
                var autocomplete = new google.maps.places.Autocomplete(input);
            }
 
            google.maps.event.addDomListener(window, 'load', init);
          
           
        </script>

			<?php
            
            
            include("footer.php");
            ?>