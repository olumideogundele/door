<?php


include("header.php");
 
?>
<?php


include("header2.php");
																
																
?>
			<!-- main-sidebar -->

				<!-- /main-header -->

			 
                        <div class="col-md-12">
                                            <div class="form-group">
                                      	
										<div class="col-md-12">
                                            <div class="form-group align-items-center">
                                            <?php
											include("includes/city-setup.php");
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
										<h4 class="card-title mg-b-0">Branches City</h4>
										<i class="mdi mdi-dots-horizontal text-gray"></i>
									</div>
									<p class="tx-12 tx-gray-500 mb-2">Branches City</p>
								</div>
								<div class="card-body">
                        
                        <form     method="post"    autocomplete="off" action="" enctype="multipart/form-data">
														
														 
											
										
										
										 
									 
												
												
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="fname1" class="control-label col-form-label">City Name</label>
 <input type="text"  name="name" class="form-control" id="name" placeholder="Ibadan">
                                            </div>
                                        </div><div class="col-md-12">
                                            <div class="form-group">
                                                <label for="fname1" class="control-label col-form-label">Address</label>
 <!--<input type="text"  name="address" class="form-control" id="address" placeholder="Ibadan">-->
                                                
                                                <textarea name="address" class="form-control" rows="5">
                                                
                                                </textarea>
                                            </div>
                                        </div>
										 
                  
                                  	 
													<div class="card-body">
                                    <div class="action-form">
                                        <div class="form-group m-b-10 text-center">
                                          <button type="submit"  name="validate" id="validate" class="btn btn-info waves-effect waves-light">Save Now</button>
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
										<h4 class="card-title mg-b-0">Branches City  </h4>
										<i class="mdi mdi-dots-horizontal text-gray"></i>
									</div>
									<p class="tx-12 tx-gray-500 mb-2">All Branches City</p>
								</div>
								<div class="card-body">
									<div class="table-responsive">
										<table id="example" class="table key-buttons text-md-nowrap">
									  <thead>
                                            <tr>
													
											  	
											 
														<th>Name</th>
														
													
														 <th>Created Date</th>
												 	   <th>Registered By</th>
														<th>Status</th>
														<th>More</th>
													 
													</tr>
                                        </thead>
                                        <tbody>
                                         <?php
												include("includes/view-city-setup.php");
												
												?>
                                                
                                        </tbody>
                                        <tfoot>
                                           <tr>
											 	
											   <th>Name</th>
                                            
													
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