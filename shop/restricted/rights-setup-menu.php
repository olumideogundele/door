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

<style type="text/css">input[type=checkbox]
{
  /* Double-sized Checkboxes */
  -ms-transform: scale(2); /* IE */
  -moz-transform: scale(2); /* FF */
  -webkit-transform: scale(2); /* Safari and Chrome */
  -o-transform: scale(2); /* Opera */
  transform: scale(2);
  padding: 10px;
}

/* Might want to wrap a span around your checkbox text */
.checkboxtext
{
  /* Checkbox text */
  font-size: 110%;
  display: inline;
}</style>
	
			<!-- main-sidebar -->

				<!-- /main-header -->

			 
                      
                                      	
										<div class="col-md-12">
                                            <div class="form-group align-items-center">
                                            <?php
											include("includes/menu-right-process.php");
											
											?>
												
                                            </div>
                                        </div>
											 
										 
                        
						 	<div class="col-xl-12">
							<div class="card mg-b-20">
								<div class="card-header pb-0">
									<div class="d-flex justify-content-between">
										<h4 class="card-title mg-b-0">Menu Setup (Rights)</h4>
										<i class="mdi mdi-dots-horizontal text-gray"></i>
									</div>
									<p class="tx-12 tx-gray-500 mb-2">Register User Information</p>
								</div>
								<div class="card-body">
                        
                        <form     method="post"    autocomplete="off" action="" enctype="multipart/form-data">
														
														 
								 
										
											<table id="" class="table table-bordered border-t0 key-buttons text-nowrap w-100" >
												<thead>
												<tr>

												 <th><button type="submit" name="transfer" class="btn btn-primary">Confirm Now</button></th>
											<th> 
												
												 
												 
												 
												 </th>	<th> 
												
												 
												 
												 
												 </th>  
												  
												 
 
 </tr>
												
												
													<tr>
<th  style="width: 2px;"><input type="checkbox" id="checkAll"></th>
 
<th style="width: 10px;">Menu Name</th>
 
<th  style="width: 10px;">Super Menu</th>
 
 </tr>
												</thead>
												<tbody>
                                                <?php
												include("includes/menu-list.php");
												
												?>
                                                
                                                
												</tbody>
												 
											</table>
											
											</form>
                
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
 
			<?php
            
            
            include("footer.php");
            ?>