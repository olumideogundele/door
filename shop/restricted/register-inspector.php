 <?php


include("header.php");
 
?><?php


include("header2.php");

								$buttonName = "validate";
$buttomValue = "Submit Now";
																if(isset($_GET['value']))
												{
															
															$buttonName = "update";
																	$buttomValue = "Update Now";
																	
																}
?>

<script>
	
	
	function call()
	{
		   //alert("Tracking");
        var selectedCountry = $("#state option:selected").val();
	 //alert(selectedCountry);
		   
        $.ajax({
            type: "POST",
            url: "populate-lga-2.php",
            data: {state : selectedCountry } 
        }).done(function(data){
            $("#response").html(data);
        });
		
	}
	
	
</script>
	
			<!-- main-sidebar -->

				<!-- /main-header -->

			 
                        <div class="col-md-12">
                                            <div class="form-group">
                                      	
										<div class="col-md-12">
                                            <div class="form-group align-items-center">
                                            <?php
											include("includes/user-process.php");
											if(isset($_GET['value']))
												{
													include("includes/view-user-unit-all.php");
													
												}
											?>
												
                                            </div>
                                        </div>
											 
												
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
										<h4 class="card-title mg-b-0">User Management</h4>
										<i class="mdi mdi-dots-horizontal text-gray"></i>
									</div>
									<p class="tx-12 tx-gray-500 mb-2">Register User Information</p>
								</div>
								<div class="card-body">
                        
                        <form     method="post"    autocomplete="off">
		   							 
                                    			
                                        <div class="col-md-12">
                                            <div class="form-group">
                                  
												
												 <label for="fname1" class="control-label col-form-label">Full Name</label>
 <input type="text"   name="name" class="form-control" id="name" placeholder="User FullName" value = "<?php if(isset($_GET['value'])) { echo $naming; } ?>" required>
                                            </div>
                                        </div>
												
												
												
												
												
												<div class="col-md-12">
                                            <div class="form-group">
                                                <label for="fname1" class="control-label col-form-label">Phone Number</label>
 <input type="text"      id="phone"  class="form-control" name="phone"  placeholder="Phone Number" value = "<?php if(isset($_GET['value'])) { echo $phone; } ?>" required>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <div class="form-group">
                                                    <label for="email2" class="control-label col-form-label">Email</label>
                                                    <input type="email" name="email" value = "<?php
															 if(isset($_GET['value'])) {  echo $email; } ?>" class="form-control" id="email" placeholder="Email Address">
                                                </div>
                                            </div>
                                        </div>
										    	 <input type="hidden" name="idding" class="form-control" value = "<?php if(isset($_GET['value'])) {  echo $_GET['value']; }?> "/>
										
										
										<div class="col-md-12">
                                            <div class="form-group">
                                                <div class="form-group">
                                                    <label for="email2" class="control-label col-form-label">Contact Address</label>
                                                    <input type="text" name="address" value = "<?php
															 if(isset($_GET['value'])) { echo $address; }
																?>" class="form-control" id="address" placeholder="Full Contact Address">
													
													 <input type="hidden" name="account_number" class="form-control" required id="since" value = "<?php if(isset($_GET['value'])) { echo $account_number; } ?>"  />
													
													
                                                </div>
                                            </div>
                                        </div>
					
                             <div class="col-md-12">
                   <div class="form-group">
											<label>State of Operation</label> 
 <select class="form-control select2"  name="state" id="state" required  onChange = "call()">
     
       <?php
																
                                    if(isset($_GET['value']))
												{
															 
																echo " <option value=".$state." selected>".$state_name."</option>"	;
																}
																else
																{
																echo " <option value='' selected>---Select One---</option>"	;	
																	
																}
																?>		
     
     
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
                            </div>
									 
												
									<div  id="response">       
                                         
	 </div>
                            
                            
                    
				   
				   
				   <div class="col-md-12">
                                            <div class="form-group">
                                                <div class="form-group">
                                                    <label for="email2" class="control-label col-form-label">Designation</label>
                                                    <input type="text" name="designation" value = "<?php
															 if(isset($_GET['value'])) { echo $designation; }
																?>" class="form-control" id="designation" placeholder="Designation">
													
													 
													
                                                </div>
                                            </div>
                                        </div>
									
                            
 <input type="hidden" name="usertype" value = "7" class="form-control" id="usertype" placeholder="usertype">
                            
                            
                            
                            
                            
                            
                                         
												
							 	<div class="col-md-12">
				     <div class="form-group">
                      <label>Privilege  </label>
                      <select class="form-control select2" multiple="multiple" name="rights[]" required>
						  
						   <?php
																
																if(isset($_GET['value']))
												{
															
																	 echo $priviled;
																	
																}
																?>					
						  
						  
                         <option  value="delete">Delete</option>
                        
                         <option  value="update">Update</option>
                          <option  value="activate">Activate</option>
                          <option value="deactivate">Deactivate</option>
                          <option value = "inspect">Inspect</option>
                   
                          <option value = "view">View</option>
                     
                          <option value = "approve">Approve</option>
                        
                    
                      </select>
                    </div>
				    	
										  
				    </div>	
										 
                                  
				   	
				   
													<div class="card-body">
                                    <div class="action-form">
                                        <div class="form-group m-b-10 text-center">
                                            <button  type="submit" name="<?php echo $buttonName; ?>"  class="btn btn-lg btn-primary m-b-5 m-t-5"><?php echo $buttomValue; ?></button>
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
										<h4 class="card-title mg-b-0">User Information  </h4>
										<i class="mdi mdi-dots-horizontal text-gray"></i>
									</div>
									<p class="tx-12 tx-gray-500 mb-2">All User Information</p>
								</div>
								<div class="card-body">
									<div class="table-responsive">
										<table id="example" class="table key-buttons text-md-nowrap">
										 <thead>
                                               <tr>
														<th>Name</th>
												  
														<th>Phone</th>
														<th>Email</th>
														<th>Address</th>
												    
														<th>Designation</th>
														<th>UserType</th>
														<th>Created Date</th>
														<th>Registered  By</th>
                                                        <th>Status</th>
														<th>More</th>
													 
													</tr>
                                        </thead>
                                        <tbody>
                                         <?php
												include("includes/view-inspectors.php");
												
												?>
                                                
                                        </tbody>
                                        <tfoot>
                                         <tr>
														<th>Name</th>
												 
														<th>Phone</th>
														<th>Email</th>
														<th>Address</th>
											 
											 			<th>Designation</th>
														<th>UserType</th>
														<th>Created Date</th>
														<th>Registered  By</th>
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