<?php


include("header.php");
ini_set('display_startup_errors', 1);
ini_set('display_errors', 1);
error_reporting(-1);
?><?php


include("header2.php");

 
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
				 	<div class="col-xl-12">
							<div class="card mg-b-20">
								<div class="card-header pb-0">
									<div class="d-flex justify-content-between">
										<h4 class="card-title mg-b-0">Driver/Truck Report</h4>
										<i class="mdi mdi-dots-horizontal text-gray"></i>
									</div>
									<p class="tx-12 tx-gray-500 mb-2">Driver/Truck Report</p>
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