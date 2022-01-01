<?php


include("header.php");
?><?php


include("header2.php");


//include("includes/view-truck-full.php");
include("includes/view-truck-full-2.php");
$buttonName = "validate";
$buttonValue = "Submit Now";

 if(isset($_GET['id']))
	 {
	 
	$buttonName = "update";
$buttonValue = "Update Now";
												 
	 }
?>
			<!-- main-sidebar -->

	 

			 
                        <div class="col-md-12">
                                            <div class="form-group">
                                       <?php
											include("includes/inspection-process.php");
											
											?>    
												
												 
                                            </div>
                                        </div>
                        
						 <div class="col-xl-12">
                        
                        <form     method="post"    autocomplete="off" action="" enctype="multipart/form-data">
    <div class="row row-sm">
        <div class="col-xl-6">
          <div class="card">
            <div class="card-header text-uppercase">Truck Inspection Form</div>
             <div class="card-body">
      <label>Score:( 1-5 )(1-being lowest) (5 -being highest)
</label>
							 <div class="form-group">
													<label>Score:</label>
 <input type="text" class="form-control" id="score" placeholder="Score" name="score"  readonly value="<?php 	 if(isset($_GET['id']))
	 { echo $score; } ?>"> 
                                 
                                 
<input type="hidden" class="form-control" id="score" placeholder="truck" name="truck"  readonly value="<?php 	 if(isset($_GET['truck']))
	 { echo $_GET['truck']; } ?>">
		 </div>
                 
                 <div class="form-group">
													<label>Inspection Result::</label>
 <input type="text" class="form-control" id="result" placeholder="Inspection Result" name="result"  readonly value="<?php 	 if(isset($_GET['id']))
	 { echo $result; } ?>">
		 </div>
										 <div class="form-group overflow-hidden">
													<label>Interior:</label>
<select class="form-control select2" name="interior" id="interior" required onChange="myFunction()">
   <option value='0'>Select One</option>				   
										     <?php
	
	
	
	
	for($i = 1; $i <= 5; $i++)
	{
				echo '<option value='.$i.'>'.$i.'</option>';	
		
	}
	  
	 
	 
	 ?>
                                </select>
												</div>
                 
                 <div class="form-group overflow-hidden">
													<label>Exterior:</label>
<select class="form-control   select2" name="exterior" id="exterior" required onChange="myFunction()">
  			   
    <option value='0'>Select One</option>
    <?php
	
	
	
	
	for($i = 1; $i <= 5; $i++)
	{
				echo '<option value='.$i.'>'.$i.'</option>';	
		
	}
	  
	 
	 
	 ?>
                                </select>
												</div>  
                 
                  <div class="form-group overflow-hidden">
													<label>Cleanliness::</label>
<select class="form-control   select2" name="cleanliness" id="cleanliness" required onChange="myFunction()">
       <option value='0'>Select One</option>
												   
										     <?php
	
	
	
	
	for($i = 1; $i <= 5; $i++)
	{
				echo '<option value='.$i.'>'.$i.'</option>';	
		
	}
	  
	 
	 
	 ?>
                                </select>
												</div>  
                  
                  <div class="form-group overflow-hidden">
													<label>General Functionality:</label>
<select class="form-control   select2" name="functionality" id="functionality" required onChange="myFunction()">
 
					<option value='0'>Select One</option>							   
										     <?php
	
	
	
	
	for($i = 1; $i <= 5; $i++)
	{
				echo '<option value='.$i.'>'.$i.'</option>';	
		
	}
	  
	 
	 
	 ?>
                                </select>
												</div>  
                 
                
                 
                  <div class="form-group overflow-hidden">
													<label> <strong>VEHICLE PARTICULARS:</strong></label>
 
		 </div>
                 
 
  <div class="form-group overflow-hidden">
													<label>Vehicle Plate Number:</label>
 <input type="text" class="form-control" id="exampleInputEmail_1" name="vehicle_number" placeholder="Vehicle Number" value="<?php 	 if(isset($_GET['truck']))
	 { echo $truck_plate_number; } ?>" required>
		 </div>
               
                 <div class="form-group overflow-hidden">
													<label>Mileage(KM):</label>
 <input type="text" class="form-control" id="exampleInputEmail_1" name="mileage" placeholder="Mileage" value="<?php 	 if(isset($_GET['id']))
	 { echo $mileage; } ?>" required>
		 </div>
                 
                 <div class="form-group overflow-hidden">
													<label>Year:</label>
 <input type="text" class="form-control" id="exampleInputEmail_1" name="year" placeholder="1982" value="<?php 	 if(isset($_GET['truck']))
	 { echo $year; } ?>" required>
		 </div>
                   <div class="form-group overflow-hidden">
													<label>Transmission:</label>
 <input type="text" class="form-control" id="exampleInputEmail_1" name="transmission" placeholder="Transmission" value="<?php 	 if(isset($_GET['id']))
	 { echo $transmission; } ?>" required>
		 </div>
                 <div class="form-group overflow-hidden">
													<label>Make:</label>
 <input type="text" class="form-control" id="exampleInputEmail_1" name="make" placeholder="Make" value="<?php 	 if(isset($_GET['id']))
	 { echo $make; } ?>" required>
		 </div>
                 <div class="form-group overflow-hidden">
													<label>Model:</label>
 <input type="text" class="form-control" id="exampleInputEmail_1" name="model" placeholder="Model" value="<?php 	 if(isset($_GET['id']))
	 { echo $model; } ?>" required>
		 </div>
                 
                 <div class="form-group overflow-hidden">
													<label>Exterior Colour:</label>
 <input type="text" class="form-control" id="exampleInputEmail_1" name="exterior_colour" placeholder="Exterior Colour" value="<?php 	 if(isset($_GET['id']))
	 { echo $exterior_colour; } ?>" required>
		 </div>
                 
                 <div class="form-group overflow-hidden">
													<label>Interior Colour:</label>
 <input type="text" class="form-control" id="exampleInputEmail_1" name="interior_colour" placeholder="Interior Colour" value="<?php 	 if(isset($_GET['id']))
	 { echo $interior_colour; } ?>" required>
		 </div>
                   <div class="form-group overflow-hidden">
													<label>Chasis Number:</label>
 <input type="text" class="form-control" id="exampleInputEmail_1" name="chasis_colour" placeholder="Chasis Number" value="<?php 	 if(isset($_GET['id']))
	 { echo $chasis_colour; } ?>" required>
		 </div>
                 
                   <div class="form-group overflow-hidden">
													<label>Engine Number:</label>
 <input type="text" class="form-control" id="exampleInputEmail_1" name="engine_number" placeholder="Engine Number" value="<?php 	 if(isset($_GET['id']))
	 { echo $engine_number; } ?>" required>
		 </div>
                 
                 
                   <div class="form-group overflow-hidden">
													<label>Interior Trim:</label>
 <input type="text" class="form-control" id="exampleInputEmail_1" name="interior_trim" placeholder="Interior Trim" value="<?php 	 if(isset($_GET['id']))
	 { echo $interior_trim; } ?>" required>
		 </div>
                 
                  
                     <div class="form-group overflow-hidden">
													<label>Vehicle Licence Expiry:</label>
 <div class="row row-sm">
										<div class="input-group col-md-12">
											<div class="input-group-prepend">
												<div class="input-group-text">
													<i class="typcn typcn-calendar-outline tx-24 lh--9 op-6"></i>
												</div>
 </div><input class="form-control fc-datepicker" placeholder="MM/DD/YYYY" name="vehicle_licence_expiry"  id="vehicle_licence_expiry" type="text"  value="<?php 	 if(isset($_GET['id'])){ echo $vehicle_licence_expiry; }else { echo "2021-12-20";} ?>" >
										</div>
									</div>
									</div>
		 
                 
                 
                   <div class="form-group overflow-hidden">
													<label>Road Worthiness:</label>
<select class="form-control   select2" name="road_worthiness" id="road_worthiness" required >
												 
    <?php 	 if(isset($_GET['id']))
	 { 

echo '<option value='.$road_worthiness.'>'.$road_worthiness.'</option>';	
} ?>
    
    
    
    <option value=''>Select One</option>
    <option value='Yes'>Yes</option>
    <option value='No'>No</option>
 
                                </select>
		 </div>
                 
                 
            <div class="form-group overflow-hidden">
														<label>Road Worthiness Expiry:</label>
 <div class="row row-sm">
										<div class="input-group col-md-12">
											<div class="input-group-prepend">
												<div class="input-group-text">
													<i class="typcn typcn-calendar-outline tx-24 lh--9 op-6"></i>
												</div>
 </div><input class="form-control fc-datepicker" placeholder="MM/DD/YYYY" name="road_worthiness_expiry"  id="road_worthiness_expiry" type="text"    value="<?php 	 if(isset($_GET['id'])){ echo $road_worthiness_expiry; } ?>" >
										</div>
									</div>
									</div>
                 
                 
                 
                 
                   <div class="form-group overflow-hidden">
													<label>Insurance:</label>
<select class="form-control   select2" name="insurance" id="insurance" required >
												 
    <?php 	 if(isset($_GET['id']))
	 { 

echo '<option value='.$insurance.'>'.$insurance.'</option>';	
} ?>
    
    
    
    <option value=''>Select One</option>
    <option value='Yes'>Yes</option>
    <option value='No'>No</option>
 
                                </select>
		 </div>
                 
                 
                 
                 
        
                 
                 
                  <div class="form-group overflow-hidden">
													<label>Insurance Expiry</label>
 <div class="row row-sm">
										<div class="input-group col-md-12">
											<div class="input-group-prepend">
												<div class="input-group-text">
													<i class="typcn typcn-calendar-outline tx-24 lh--9 op-6"></i>
												</div>
 </div><input class="form-control fc-datepicker" placeholder="MM/DD/YYYY" name="insurance_expiry"  id="insurance_expiry" type="text"    value="<?php 	 if(isset($_GET['id'])){ echo $insurance_expiry; } ?>" >
										</div>
									</div>
									</div>
                 
                 
                 
                 
                  
                   <div class="form-group overflow-hidden">
													<label>Drivers Licence:</label>
<select class="form-control   select2" name="drivers_licence" id="drivers_licence" required >
												 
    <?php 	 if(isset($_GET['id']))
	 { 

echo '<option value='.$drivers_licence.'>'.$drivers_licence.'</option>';	
} ?>
    
    
    
    <option value=''>Select One</option>
    <option value='Yes'>Yes</option>
    <option value='No'>No</option>
 
                                </select>
		 </div>
                 
                 
 
                 
                 
                 <div class="form-group overflow-hidden">
													<label>Drivers Licence Expiry</label>
 <div class="row row-sm">
										<div class="input-group col-md-12">
											<div class="input-group-prepend">
												<div class="input-group-text">
													<i class="typcn typcn-calendar-outline tx-24 lh--9 op-6"></i>
												</div>
 </div><input class="form-control fc-datepicker" placeholder="MM/DD/YYYY" name="drivers_licence_expiry"  id="drivers_licence_expiry" type="text"    value="<?php 	 if(isset($_GET['id'])){ echo $drivers_licence_expiry; } ?>" >
										</div>
									</div>
									</div>
                 
                 
                 
                  <div class="form-group overflow-hidden">
													<label><strong>VEHICLE ASSESSMENT</strong>
</label>
 
		 </div>  
                 
                 
                  <div class="form-group overflow-hidden">
													<label>Radio Functional</label>
 <input type="text" class="form-control" id="exampleInputEmail_1" name="radio_functional" placeholder="Radio Functional" value="<?php 	 if(isset($_GET['id']))
	 { echo $radio_functional; } ?>" required>
                 </div>           
                      
                      
                      <div class="form-group overflow-hidden">
													<label>Horn Functional</label>
 <input type="text" class="form-control" id="exampleInputEmail_1" name="horn_functional" placeholder="Horn Functional" value="<?php 	 if(isset($_GET['id']))
	 { echo $horn_functional; } ?>" required>
		 </div>  
                 <div class="form-group overflow-hidden">
													<label>Seat Covering Integrity</label>
 <input type="text" class="form-control" id="exampleInputEmail_1" name="seat_covering_integrity" placeholder="Seat Covering Integrity" value="<?php 	 if(isset($_GET['id']))
	 { echo $seat_covering_integrity; } ?>" required>
		 </div>  
 


                 
                 
                 
                 
                 
                 
                 
                 
                 
                 
                 
                 
                 
                 
                 
                 
                 
                  
                 
                   
	
		 
   
            </div>
          </div>
        </div>
       <div class="col-xl-6">
          <div class="card">
            
            <div class="card-header"> Windows and Locks</div>
            <div class="card-body">
                   <div class="form-group overflow-hidden">
													<label>Window Control Functional:</label>
 <input type="text" class="form-control" id="exampleInputpwd_2" name="window_control_functional" placeholder="Window Control Functional" required value="<?php  if(isset($_GET['id']))
{
 echo $window_control_functional       ;
}      ?>">
                        	</div> 
				
				   <div class="form-group overflow-hidden">
													<label>Door locks functional:</label>
 <input type="text" class="form-control" id="exampleInputpwd_2" name="door_locks_functional" placeholder="Door locks functional" required value="<?php  if(isset($_GET['id']))
{
 echo $door_locks_functional       ;
}      ?>">
                        	</div> 
				
				  <div class="form-group overflow-hidden">
													<label>Door handles functional:</label>
 <input type="text" class="form-control" id="exampleInputpwd_2" name="door_handles_functional" placeholder="Door handles functional" required value="<?php  if(isset($_GET['id']))
{
 echo $door_handles_functional       ;
}      ?>">
                        	</div> 
				
				 
				
                                          <div class="card-header"> Brakes and Suspension</div>     
                                                
				
			 
				  <div class="form-group overflow-hidden">
													<label>BRV Shocks Condition:</label>
 <input type="text" class="form-control" id="exampleInputpwd_2" name="brv_shocks_condition" placeholder="BRV Shocks Condition" required value="<?php  if(isset($_GET['id']))
{
 echo $brv_shocks_condition       ;
}      ?>">
                        	</div> 
                
				  <div class="form-group overflow-hidden">
													<label>Parking brakes engages:</label>
 <input type="text" class="form-control" id="exampleInputpwd_2" name="parking_brakes_engages" placeholder="Parking brakes engages" required value="<?php  if(isset($_GET['id']))
{
 echo $parking_brakes_engages       ;
}      ?>">
                        	</div> 
                  <div class="form-group overflow-hidden">
													<label>No grinding noise:</label>
 <input type="text" class="form-control" id="exampleInputpwd_2" name="no_grinding_noise" placeholder="No grinding noise" required value="<?php  if(isset($_GET['id']))
{
 echo $no_grinding_noise       ;
}      ?>">
                        	</div> 
                 <div class="form-group overflow-hidden">
													<label>Spring or Balloon:</label>
 <input type="text" class="form-control" id="exampleInputpwd_2" name="spring_or_balloon" placeholder="Spring or Balloon" required value="<?php  if(isset($_GET['id']))
{
 echo $spring_or_balloon       ;
}      ?>">
                        	</div> 
                
                
             
                
             
 
   <div class="card-header"> Tyres	</div> 
  <div class="form-group overflow-hidden">
													<label>Tyre Thread:</label>
 <input type="text" class="form-control" id="exampleInputpwd_2" name="tyre_thread" placeholder="Tyre Thread" required value="<?php  if(isset($_GET['id']))
{
 echo $tyre_thread       ;
}      ?>">
                        	</div> 
                <div class="form-group overflow-hidden">
													<label>Tyre Condition:</label>
 <input type="text" class="form-control" id="exampleInputpwd_2" name="tyre_condition" placeholder="Tyre Condition" required value="<?php  if(isset($_GET['id']))
{
 echo $tyre_condition       ;
}      ?>">
                        	</div> 
                
                
                
                
                
                
                


                
              <div class="card-header"> Interior Amenities	</div>    
                
                
                <div class="form-group overflow-hidden">
													<label>Vehicle Body:</label>
 <input type="text" class="form-control" id="exampleInputpwd_2" name="vehicle_body" placeholder="Vehicle Body" required value="<?php  if(isset($_GET['id']))
{
 echo $vehicle_body       ;
}      ?>">
                        	</div> 
                <div class="form-group overflow-hidden">
													<label>Free of scratches:</label>
 <input type="text" class="form-control" id="exampleInputpwd_2" name="free_of_scratches" placeholder="Free of scratches" required value="<?php  if(isset($_GET['id']))
{
 echo $free_of_scratches       ;
}      ?>">
                        	</div> 
                 


 
wipper engine/wipper
                 <div class="form-group overflow-hidden">
													<label>Free of dents:</label>
 <input type="text" class="form-control" id="exampleInputpwd_2" name="free_of_dents" placeholder="Free of dents" required value="<?php  if(isset($_GET['id']))
{
 echo $free_of_dents       ;
}      ?>">
                        	</div> 
                  <div class="form-group overflow-hidden">
													<label>No windshield/window cracks:</label>
 <input type="text" class="form-control" id="exampleInputpwd_2" name="no_windshield_window_cracks" placeholder="No windshield/window cracks" required value="<?php  if(isset($_GET['id']))
{
 echo $no_windshield_window_cracks       ;
}      ?>">
                        	</div>      <div class="form-group overflow-hidden">
													<label>Wipper Engine/Wipper:</label>
 <input type="text" class="form-control" id="exampleInputpwd_2" name="wipper_engine_wipper" placeholder="Wipper Engine/Wipper" required value="<?php  if(isset($_GET['id']))
{
 echo $wipper_engine_wipper       ;
}      ?>">
                        	</div> 
                
                   <div class="card-header">  Emergency Equipment	</div>    
                
                
                <div class="form-group overflow-hidden">
													<label>Jack and Accessories:</label>
 <input type="text" class="form-control" id="exampleInputpwd_2" name="jack_and_accessories" placeholder="Jack and Accessories" required value="<?php  if(isset($_GET['id']))
{
 echo $jack_and_accessories       ;
}      ?>">
                        	</div> 
                <div class="form-group overflow-hidden">
													<label>Fire extinguisher:</label>
 <input type="text" class="form-control" id="exampleInputpwd_2" name="fire_extinguisher" placeholder="Fire extinguisher" required value="<?php  if(isset($_GET['id']))
{
 echo $fire_extinguisher       ;
}      ?>">
                        	</div> 
                <div class="form-group overflow-hidden">
													<label>Spare Tyre:</label>
 <input type="text" class="form-control" id="exampleInputpwd_2" name="spare_tyre" placeholder="Spare Tyre" required value="<?php  if(isset($_GET['id']))
{
 echo $spare_tyre       ;
}      ?>">
                        	</div> 
                
                <div class="form-group overflow-hidden">
													<label>Hazard warning triangle:</label>
 <input type="text" class="form-control" id="exampleInputpwd_2" name="hazard_warning_triangle" placeholder="Hazard warning triangle" required value="<?php  if(isset($_GET['id']))
{
 echo $hazard_warning_triangle       ;
}      ?>">
                        	</div> 
                
               
  <div class="card-header"> Electronics	</div>    
                
                
                <div class="form-group overflow-hidden">
													<label>Headlights Working:</label>
 <input type="text" class="form-control" id="exampleInputpwd_2" name="headlights_working" placeholder="Headlights Working" required value="<?php  if(isset($_GET['id']))
{
 echo $headlights_working       ;
}      ?>">
                        	</div> 
                 <div class="form-group overflow-hidden">
													<label>Brakelights Working:</label>
 <input type="text" class="form-control" id="exampleInputpwd_2" name="brakelights_working" placeholder="Brakelights Working" required value="<?php  if(isset($_GET['id']))
{
 echo $brakelights_working       ;
}      ?>">
                        	</div> 
                  <div class="form-group overflow-hidden">
													<label>Indicators Working:</label>
 <input type="text" class="form-control" id="exampleInputpwd_2" name="indicators_working" placeholder="Indicators Working" required value="<?php  if(isset($_GET['id']))
{
 echo $indicators_working        ;
}      ?>">
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
						 
                
                
                
                
                
                
                
						 
						<!--/div-->

						<!--div-->
						 
					</div>
					<!-- /row -->
				</div>
				<!-- Container closed -->
			</div>
			<!-- main-content closed -->
 


<script>
function myFunction() {
//	var age = document.getElementById("quanity").value;


	
	 //var x = parseInt(document.getElementById("score").value);	
	 var interior = parseInt(document.getElementById("interior").value);	
	  var exterior = parseInt(document.getElementById("exterior").value);	
  var cleanliness = parseInt(document.getElementById("cleanliness").value);	
  var functionality = parseInt(document.getElementById("functionality").value);	
	
	 
 
			
		var total = interior + exterior + functionality + cleanliness;	
 
 
  document.getElementById("score").value =parseInt(total);	
    
    var result = "NON";
    
    if(total>= 11)
        {
            
            result = "A";
        }
    else{
        
        result = "B";
    }
    
  document.getElementById("result").value =result;	
			
	 
	 
}
	
	 
</script>

 
 


 

			<?php
            
            
            include("footer.php");
            ?>