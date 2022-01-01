<?php


include("header.php");
 
?><?php


include("header2.php");

include("includes/view-application-details-all.php");


$codec = "";
if(isset($_GET['codec']))
{
    
    $codec = $_GET['codec'];
    
    
    
      $code =   base64_decode(strtr($_GET['codec'], '-_,', '+/='));
    
    
    $owners_share = $myName->showName($conn, "SELECT `owners_share` FROM `transaction_information` WHERE  `code` = '$code'"); 
    
}
?>
 
			 
                       <div class="col-md-12">
                                            <div class="form-group">
                                             <?php
											include("includes/cash-out-owner-process.php");
											
											?>    
												
												 
                                            </div>
                                        </div>
                        
						 	<div class="col-xl-12">
							<div class="card mg-b-20">
								<div class="card-header pb-0">
									<div class="d-flex justify-content-between">
										<h4 class="card-title mg-b-0">Cashout</h4>
										<i class="mdi mdi-dots-horizontal text-gray"></i>
									</div>
									<p class="tx-12 tx-gray-500 mb-2">Transfer Matured Cash Into Your Account</p>
								</div>
								<div class="card-body">
                        
                        <form     method="post"    autocomplete="off" action="" enctype="multipart/form-data">
														
										<div class="form-group overflow-hidden">
													<label>Account Number:</label>
<input type="text" class="form-control" id="exampleInputpwd_2" name="acct_num" placeholder="Account Number" value="<?php 	 if(isset($_GET['value']))
	 { echo $inst_acct_num;} ?>" required>
                      
												</div>
                            
     <input type="hidden" class="form-control" id="exampleInputpwd_2" name="codec" placeholder="CODE" value="<?php 	 if(isset($_GET['codec']))
	 { echo $codec;} ?>" required>                        
                            
                            
										 <div class="form-group overflow-hidden">
													<label>Bank Name:</label>
 <select name="bank" class="form-control select2"   id="bank"    required >
			  
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
	 include("config/DB_config.php");
	 
	 //SELECT  `id`, `name`, `state`, `created_date`, `registeredby`, `status` FROM `business_unit` 
	 $query =  "SELECT `code`, `name`  FROM `banks` WHERE `status` = 1 AND `name` != '' ORDER BY `id` ASC";	
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
													<label>Amount In Naira:</label>
 <input type="text" class="form-control" id="exampleInputuname_1" placeholder="Amount In Naira" name="amount" value="<?php 	 if(isset($_GET['codec']))
	 { echo $owners_share; } ?>" required readonly>
												</div>
											  
                           
 <div class="card-body">
                                    <div class="action-form">
                                        <div class="form-group m-b-10 text-center">
                                          
                                        <button  type="submit" id="validate" name="validate" class="btn btn-lg btn-primary m-b-5 m-t-5">
													
													 <?php
	 if(isset($_GET['value']))
	 {
	 
	 echo "Update Now";
												 
	 }
													else
													{
														
												echo "Transfer Now"		;
														
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
						 
                
                

						<!--div-->
						 
					</div>
					<!-- /row -->
				</div>
				<!-- Container closed -->
			</div>
			<!-- main-content closed -->
 

			<?php
            
            
            include("footer.php");
            ?>