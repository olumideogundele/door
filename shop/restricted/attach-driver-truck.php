<?php


include("header.php");
/*ini_set('display_startup_errors', 1);
ini_set('display_errors', 1);
error_reporting(-1);*/
?><?php


include("header2.php");
$super = $myName->showName($conn, "SELECT  `super` FROM `user_unit` WHERE `account_number` = '$emailing'"); 

?> 

			 <div class="col-md-12">
                                            <div class="form-group">
                                             <?php
											include("includes/ataachment-process.php");
											
											?>    
												
												 <?php
											include("includes/update_column.php");
											include("includes/deleteclass.php");
											//deleteclass
											
											?>
                                            </div>
                                        </div>
										
						 	<div class="col-xl-12">
							<div class="card mg-b-20">
								<div class="card-header pb-0">
									<div class="d-flex justify-content-between">
										<h4 class="card-title mg-b-0">Attach Driver to Truck</h4>
										<i class="mdi mdi-dots-horizontal text-gray"></i>
									</div>
									<p class="tx-12 tx-gray-500 mb-2">Attach Driver to Truck</p>
								</div>
								<div class="card-body">
                        
                        <form     method="post"    autocomplete="off">
		                    
				   
				    
                                <div class="form-group overflow-hidden">
													<label>Truck:</label>
 <select name="truck" class="form-control  select2"    id="truck" required>
	 
	   <option value="" selected="selected">- Select -</option>
 
                <?php
	 include("config/DB_config.php");
	 
	 
	 
 if(isset($_SESSION['email']))
 {
$emailing  = $_SESSION['email'];
 }
	 
	 
	 
	 if($super == '1')
	 {
		  $query =  "SELECT  `id`, `truck_brand`, `truck_plate_number` , `driver`  FROM `truck` WHERE `status` = 1 AND `truck_brand` = '' ORDER BY `id` ASC";	
		 
	 }
	 else
	 {
		 
		$query =  "SELECT  `id`, `truck_brand`, `truck_plate_number` , `driver`   FROM `truck` WHERE `status` = 1   AND  `registeredby` = '$emailing' AND `truck_brand` != ''  ORDER BY `id` ASC";
	 }
 $extract_distance = mysqli_query($conn, $query) or die(mysqli_error($conn));
		$count = mysqli_num_rows($extract_distance);
    if ($count > 0)
		  {
 	 while ($row_distance=mysqli_fetch_row($extract_distance))
    {
  						  $code=$row_distance[0];
					  $name =$row_distance[1];
					  $truck_plate_number =$row_distance[2];
					  $driver =$row_distance[3];
					 
					  
					  if($driver == '-')
                      {
                          echo '<option value='.$code.'>'.$name.'/'.$truck_plate_number.'</option>';	
                          
                      }
				
				
				  
	}
	
		  }
	 
	 
	 ?>
        
													</select>
												</div>
				   
				   
				   <div class="form-group overflow-hidden">
													<label>Driver:</label>
 <select name="driver" class="form-control select2"    id="driver"    required >
	 
	   <option value="" selected="selected">- Select -</option>
 
                <?php
	 include("config/DB_config.php");
	 
	 
	 
	 if($super == '1')
	 {
		  $query =  "SELECT  `account_number`, `fname`, `lname` FROM `driver` WHERE   `status` = '1' ORDER BY `id` ASC";	
		 
	 }
	 else
	 {
		 
 $query =  "SELECT  `account_number`, `fname`, `lname` FROM `driver` WHERE   `status` = '1' AND  `registeredby` = '$emailing' ORDER BY `id` ASC";
	 }
 $extract_distance = mysqli_query($conn, $query) or die(mysqli_error($conn));
		$count = mysqli_num_rows($extract_distance);
    if ($count > 0)
		  {
 	 while ($row_distance=mysqli_fetch_row($extract_distance))
    {
  						  $code=$row_distance[0];
					  $name =$row_distance[1];
					  $lname =$row_distance[2];
         
         $full_name = $name." ".$lname;
					 
					  
					  
				echo '	<option value='.$code.'>'.$full_name.'</option>';	
				
				  
	}
	
		  }
	 //echo $query;
	 
	 ?>
        
													</select>
												</div>
                                                
                                                
                                                
						 
				 
									 
										
										
										
									 
										 
													<div class="card-body">
                                    <div class="action-form">
                                        <div class="form-group m-b-10 text-center">
                                        <button  type="submit" name="validate" class="btn btn-lg btn-primary m-b-5 m-t-5">
													
													 <?php
	 if(isset($_GET['value']))
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
													
               </form>
                
                </div>
                </div>
						 
                
                
                
                
                
                
                
						<div class="col-xl-12">
							<div class="card mg-b-20">
								<div class="card-header pb-0">
									<div class="d-flex justify-content-between">
										<h4 class="card-title mg-b-0">Truck/Driver Information</h4>
										<i class="mdi mdi-dots-horizontal text-gray"></i>
									</div>
									<p class="tx-12 tx-gray-500 mb-2">Truck/Driver Information</p>
								</div>
								<div class="card-body">
									<div class="table-responsive">
										<table id="example" class="table key-buttons text-md-nowrap">
									 <thead>
                                            <tr> 					<th>Driver's Name</th>
														<th>Truck Owner</th>
														<th>Truck Brand</th>
														<th>Truck Plate Number</th>
													 
													 
													</tr>
                                        </thead>
                                        <tbody>
                                         <?php
												include("includes/view-driver-truck-attachement.php");
												
												?>
                                                
                                        </tbody>
                                        <tfoot>
                                           <tr><th>Driver's Name</th>
														<th>Truck Owner</th>
														<th>Truck Brand</th>
														<th>Truck Plate Number</th>
													 
													 
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

			<?php
            
            
            include("footer.php");
            ?>