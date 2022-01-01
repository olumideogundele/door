 <?php


include("header.php");
?>
	 <?php


include("header2.php");
include("includes/view-truck-full.php");
include("includes/view-inspection-report.php");

$super = $myName->showName($conn, "SELECT  `super` FROM `user_unit` WHERE `account_number` = '$emailing'"); 
?>
		 
				<!-- /main-header -->
  <div class="col-xl-12">
                        
                        
    <div class="row row-sm">
          


<div class="col-xl-6">
          <div class="card">
            <div class="card-header text-uppercase">View Truck Inspecction Report</div>
             <div class="card-body">
				<!-- container -->
				<div class="container-fluid">

					 <div class="table-responsive">
										<table id="" class="table key-buttons text-md-nowrap">
										    <tbody>
                                            <tr>
												
                                                           <td>Owner Name</td>
														<td><?php echo $owner_name;  ?></td>
														  
												 
													 
													</tr>  <tr>
												
                                                           <td>Owner Phone</td>
														<td><?php echo $owner_phone;  ?></td>
														  
												 
													 
													</tr> 
                                            <tr>
												
                                                           <td>Owner Email</td>
														<td><?php echo $owner_email;  ?></td>
														  
												 
													 
													</tr>
                                         
                                     
                                            
                                            <tr style="background-color:chocolate; ">
												
 <td><strong>OVERALL ASSESSMENT</strong>
</td> <td>
</td>
														 
														  
												 
													 
													</tr>
                                            
                                         <tr>
											 <td><strong>Inspection Result:</strong></td>
														<td><?php echo $result; ?></td>
												 </tr> 
                                            <tr>
											 <td>Score</td>
														<td><?php echo $score; ?></td>
												 </tr><tr>
											 <td>Interior</td>
														<td><?php echo $interior; ?></td>
												 </tr>
                                            <tr>
											 <td>Exterior</td>
														<td><?php echo $exterior; ?></td>
												 </tr>
                                            <tr>
											 <td>Cleanliness:</td>
														<td><?php echo $cleanliness; ?></td>
												 </tr>
                                            <tr>
											 <td>General Functionality:
</td>
														<td><?php echo $functionality; ?></td>
												 </tr>
                                           
                                            <tr style="background-color:chocolate; ">
												
 <td>VEHICLE PARTICULARS:

</td> <td>
</tr>                                   <tr>
												
 <td>Item

</td> 
<td>Value</td>
</tr> 
			
        <tr>
											 <td>Vehicle Number:
</td>
														<td><?php echo $vehicle_number; ?></td>
												 </tr>  
                                            <tr>
											 <td>Mileage(KM):
</td>
														<td><?php echo $mileage; ?></td>
												 </tr>  <tr>
											 <td>Year:
</td>
														<td><?php echo $year; ?></td>
												 </tr>                                         
                                               
                                            
                                            <tr><td>Transmission:</td><td><?php echo $transmission; ?></td></tr>                                         
                                            <tr><td>Make:</td><td><?php echo $make; ?></td></tr>                                         
                                            <tr><td>Model:</td><td><?php echo $model; ?></td></tr>                                         
                                            <tr><td>Exterior Colour:</td><td><?php echo $exterior_colour; ?></td></tr>                                         
                                            <tr><td>Interior Colour:</td><td><?php echo $interior_colour; ?></td></tr>                                         
                                            <tr><td>Engine Number:</td><td><?php echo $engine_number; ?></td></tr>                                         
                                            <tr><td>Chasis Number:</td><td><?php echo $chasis_colour; ?></td></tr>                                         
                                            <tr><td>Interior Trim:</td><td><?php echo $interior_trim; ?></td></tr>                                         
                                            <tr><td>Vehicle Licence Expiry:</td><td><?php echo $vehicle_licence_expiry; ?></td></tr>                                         
                                            <tr><td>Road Worthiness:</td><td><?php echo $road_worthiness; ?></td></tr>                                         
                                            <tr><td>Road Worthiness Expiry:</td><td><?php echo $road_worthiness_expiry; ?></td></tr>                                         
                                            <tr><td>Insurance:</td><td><?php echo $insurance; ?></td></tr>                                         
                                            <tr><td>Insurance Expiry:</td><td><?php echo $insurance_expiry; ?></td></tr>                                         
                                            <tr><td>Drivers Licence:</td><td><?php echo $drivers_licence; ?></td></tr>                                         
                                            <tr><td>Drivers Licence Expiry:</td><td><?php echo $drivers_licence_expiry; ?></td></tr>                                         
                                       




                                                
                                         <tr style="background-color:chocolate; "><td><strong>VEHICLE ASSESSMENT</strong></td><td> </td></tr>                                         
        
  <tr><td>Radio Functional:</td><td><?php echo $radio_functional; ?></td></tr>
  <tr><td>Horn Functional:</td><td><?php echo $horn_functional; ?></td></tr>
  <tr><td>Seat Covering Integrity:</td><td><?php echo $seat_covering_integrity; ?></td></tr>


                                                
                                                




 <tr style="background-color:chocolate; "><td><strong>Windows and Locks</strong></td><td> </td></tr>  

  <tr><td>Window control functional:</td><td><?php echo $window_control_functional; ?></td></tr>
  <tr><td>Door locks functional:</td><td><?php echo $door_locks_functional; ?></td></tr>
  <tr><td>Door handles functional:</td><td><?php echo $door_handles_functional; ?></td></tr>


 <tr style="background-color:chocolate; "><td><strong>Brakes and Suspension</strong></td><td> </td></tr> 
 
  <tr><td>BRV Shocks Condition:</td><td><?php echo $brv_shocks_condition; ?></td></tr>
  <tr><td>Parking brakes engages:</td><td><?php echo $parking_brakes_engages; ?></td></tr>
  <tr><td>No grinding noise:</td><td><?php echo $no_grinding_noise; ?></td></tr>
  <tr><td>Spring or Balloon:</td><td><?php echo $spring_or_balloon; ?></td></tr>
														  
 
 <tr style="background-color:chocolate; "><td><strong>Tyres</strong></td><td> </td></tr> 
  <tr><td>Tyre Thread:</td><td><?php echo $tyre_thread; ?></td></tr>
  <tr><td>Tyre Condition:</td><td><?php echo $tyre_condition; ?></td></tr>

 <tr style="background-color:chocolate; "><td><strong>Interior Amenities</strong></td><td> </td></tr> 
 <tr><td>Vehicle Body:</td><td><?php echo $vehicle_body; ?></td></tr>											 
 <tr><td>Free of scratches:</td><td><?php echo $free_of_scratches; ?></td></tr>											 
 <tr><td>Free of dents:</td><td><?php echo $free_of_dents; ?></td></tr>											 
 <tr><td>No windshield/window cracks:</td><td><?php echo $no_windshield_window_cracks; ?></td></tr>											 
 <tr><td>Wipper engine/wipper:</td><td><?php echo $wipper_engine_wipper; ?></td></tr>											 
													 
	
                                                
 <tr style="background-color:chocolate; "><td><strong>Emergency Equipment</strong></td><td> </td></tr> 
 <tr><td>Jack and Accessories:</td><td><?php echo $jack_and_accessories; ?></td></tr>											 
 <tr><td>Fire extinguisher:</td><td><?php echo $fire_extinguisher; ?></td></tr>											 
 <tr><td>Spare tyre:</td><td><?php echo $spare_tyre; ?></td></tr>											 
 <tr><td>Hazard warning triangle:</td><td><?php echo $hazard_warning_triangle; ?></td></tr>		 
                                                
                                                
               



                                 
                                                
<tr style="background-color:chocolate; "><td><strong>Electronics</strong></td><td> </td></tr> 
 <tr><td>Headlights Working:</td><td><?php echo $headlights_working; ?></td></tr>											 
 <tr><td>Brakelights Working:</td><td><?php echo $brakelights_working; ?></td></tr>											 
 <tr><td>Indicators Working</td><td><?php echo $indicators_working; ?></td></tr>											 
 										 
 
                                            
                                            
 



                        
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            </tr>
                                            
                                        </tbody>
                                         
										</table>
									</div>
					<!-- row closed -->
				</div>
				<!-- Container closed -->
			</div>
			</div>
			</div>




			</div>
			</div>
			<!-- main-content closed -->

			 
<?php
            
            
            include("footer.php");
            ?>