<?php


include("header.php");
 
?><?php


include("header2.php");

include("includes/view-application-details-all.php");
?>
			<!-- main-sidebar -->

				<!-- /main-header -->

			 
                       <div class="col-md-12">
                                            <div class="form-group">
                                             <?php
											include("includes/application-details-process.php");
											
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
										<h4 class="card-title mg-b-0">Application Information</h4>
										<i class="mdi mdi-dots-horizontal text-gray"></i>
									</div>
									<p class="tx-12 tx-gray-500 mb-2">Application Setup</p>
								</div>
								<div class="card-body">
                        
                        <form     method="post"    autocomplete="off" action="" enctype="multipart/form-data">
														
														 
											
										
										
                                         <div class="form-group overflow-hidden">
													<label>Application Name:</label>
 <input type="text" class="form-control" id="exampleInputuname_1" placeholder="Application Name" name="name" value="<?php 	 if(isset($_GET['value']))
	 { echo $inst_name1; } ?>" c>
												</div>
											  <div class="form-group overflow-hidden">
													<label>Application Moto:</label>
 <input type="text" class="form-control" id="exampleInputEmail_1"  name="slogan" placeholder="Institution Slogan" value="<?php 	 if(isset($_GET['value']))
	 { echo $inst_slogan1;} ?>" required>
												</div>
                                                
											
                                         <div class="form-group overflow-hidden">
													<label>Email Address:</label>
 <input type="email" class="form-control" id="exampleInputEmail_1" name="email" placeholder="Enter email" value="<?php 	 if(isset($_GET['value']))
	 { echo $inst_email1; } ?>" required>
												</div>
                                                
                                                
                                                 <div class="form-group overflow-hidden">
													<label>Phone Number:</label>
 <input type="phone" class="form-control" id="exampleInputEmail_1" placeholder="Enter Phone" name="phone" value="<?php 	 if(isset($_GET['value']))
	 { echo $inst_phone1;} ?>" required>
												</div>
				   
				   
				   
				   <div class="form-group overflow-hidden">
													<label>Contact Address:</label>
																<input type="text" class="form-control" id="exampleInputpwd_2" name="address" placeholder="Full Address" value="<?php 	 if(isset($_GET['value']))
	 { echo $inst_address1; } ?>">
												</div>
                                                
                                                
                       <div class="form-group overflow-hidden">
													<label>Logo:</label>
 <input type="file" class="form-control" id="" name="logo" placeholder="Application Logo" <?php
																									  
																									  if(!isset($_GET['value']))
																									  {
																										 echo "required"  ;
																									  }
																									  
																									  ?>>
												</div>                         
                       <input type="hidden" class="form-control" id="logo1"  name="logo1"   value="<?php  if(isset($_GET['value']))
																									  {
																										  echo $inst_logo1;
																									  }
																									  
																									  ?>
																									  ">
										
									           
                                           
                                                <div class="form-group overflow-hidden">
													<label>Account Number:</label>
 <input type="text" class="form-control" id="exampleInputpwd_2" name="acct_num" placeholder="Account Number" value="<?php 	 if(isset($_GET['value']))
	 { echo $inst_acct_num;} ?>" required>
												</div>
                                                
                                                
                                             <div class="form-group overflow-hidden">
													<label>Bank Name:</label>
 <select name="bank" class="form-control select2"    id="bank"    required >
			  
	 <?php
	 if(isset($_GET['value']))
	 {
	 
	 ?>
	 
	   <option value="<?php echo $inst_bank_name; ?>" selected="selected"><?php echo $inst_bank_name; ?></option>
	 
	 <?php
	 }
	 else
	 {
		 
		 ?>
	   <option value="" selected="selected">- Select -</option>
	 <?php
	 }
		 ?>
                <?php
	 include("config/DB_config.php");$query =  "SELECT `code`, `name`  FROM `banks` WHERE `status` = 1 AND `name` != '' ORDER BY `id` ASC";	
 $extract_distance = mysqli_query($conn, $query) or die(mysqli_error($conn));
		$count = mysqli_num_rows($extract_distance);
    if ($count > 0)
		  {
 	 while ($row_distance=mysqli_fetch_row($extract_distance))
    {
  						  $code=$row_distance[0];
					  $name =$row_distance[1];
					 
					  
					  
				echo '	<option value='.$code.'>'.$name.'</option>';	
				
				  
	}
	
		  }
	 
	 
	 ?>
        
													</select>
												</div>
                                                
                                                
                                                 <div class="form-group overflow-hidden">
													<label>FlutterWaves API:</label>
 <input type="text" class="form-control" id="exampleInputpwd_2" name="flutterwaves1" placeholder="Public API"  value="<?php 	 if(isset($_GET['value']))
	 { echo $inst_flutterapi; } ?>"  required>
												</div>
												
												
												 <div class="form-group overflow-hidden">
													<label>FlutterWaves Secret API:</label>
 <input type="text" class="form-control" id="exampleInputpwd_2" name="flutterwavessecret" placeholder="Secret API"  value="<?php 	 if(isset($_GET['value']))
	 { echo $inst_flutterapisecret; }?>" required>
												</div>
				   
				    
												     
												 
												 <div class="form-group overflow-hidden">
													<label>Convenience Fee:</label>
 <input type="text" class="form-control" id="exampleInputpwd_2" name="fee"  value="<?php 	 if(isset($_GET['value']))
	 { echo $inst_fee;} ?>" placeholder="Convenience Fee" required>
												</div>
				 
				 
				 
				 <div class="form-group overflow-hidden">
													<label>Google API:</label>
 <input type="text" class="form-control" id="exampleInputpwd_2" name="googleapi"  value="<?php 	 if(isset($_GET['value']))
	 { echo $googleapi;} ?>" placeholder="GOOGLE MAP API:" required>
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
										<h4 class="card-title mg-b-0">Application Information</h4>
										<i class="mdi mdi-dots-horizontal text-gray"></i>
									</div>
									<p class="tx-12 tx-gray-500 mb-2">Application Information</p>
								</div>
								<div class="card-body">
									<div class="table-responsive">
										<table id="example" class="table key-buttons text-md-nowrap">
										 <thead>
                                            <tr>
														<th>Name</th>
														<th>Moto</th>
														<th>Phone</th>
														<th>Email</th>
														<th>Address</th>
														<th>Account Num</th>
														<th>Bank</th>
														 
														<th>Created Date</th>
												 	   
												 	   <th>Registered By</th>
												<th>Status</th>
														<th>More</th>
													 
													</tr>
                                        </thead>
                                        <tbody>
                                         <?php
												include("includes/view-application.php");
												
												?>
                                                
                                        </tbody>
                                        <tfoot>
                                           <tr>
													<th>Name</th>
														<th>Moto</th>
														<th>Phone</th>
														<th>Email</th>
														<th>Address</th>
														<th>Account Num</th>
														<th>Bank</th>
														 
														<th>Created Date</th>
												 	   
												 	   <th>Registered By</th>
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