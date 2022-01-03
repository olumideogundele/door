<?php


include("header.php");
 
?>
  
   
  <div class="container margin-bottom-75">
     <div class="row">
        <div class="col-lg-12">
          <div id="utf_add_listing_part">             
			 
			 
            <div class="add_utf_listing_section margin-top-45"> 
              <div class="utf_add_listing_part_headline_part">
                <h3><i class="sl sl-icon-lock-open"></i> Change Default Password</h3>                
              </div>              
              <div class="switcher-content">
				  
				  <div class="form-group">
						  
						 <?php  include("restricted/includes/change-password-2.php");?>
						   </div>
				 
        
          <div class="utf_signin_form style_one">
            
            <div class="tab_container alt"> 
              <div class="tab_content" id="tab1" style="display:none;">
                <form method="post" class="login">
				 
                  <p class="utf_row_form utf_form_wide_block">
                    <label for="username">
                   <h2>Change Password!</h2>
													<h5 class="font-weight-semibold mb-4">Please enter your new password to change your default password.</h5>
                    </label>
                  </p>
					
					
					 
					  
				<div class="form-group">
															<label>New Password</label> 
                                                          	<input type="password" class="form-control" required id="exampleInputEmail_2"  placeholder="New Password"  name = "password">
                                                            
                                   
														</div>
														<div class="form-group">
															<label>Confirm Password</label>   <input type="password" class="form-control" required id="exampleInputEmail_2" placeholder="Retype New Password" name =  "retype_password">
														</div>
                                                        
                                                        <div class="form-row mr-0 ml-0">
						   
						</div>
						 <button type="submit" class="button border margin-top-5" name = "change">Change Password Now </button>
						<a href="index" class="button add-pricing-submenu">Go Back Home</a>
						 
 
                                                        
                </form>
              </div>
				
				
				
				
				
				
				
				
              
               
            </div>
          </div>
        
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
               
               
                
                
               
             
                
          
             
              </div>                            
            </div>
			
			 
			
			                         
            
        </div>        
      </div>
  </div>
  </div>
  
  
  
  <?php

include("footer.php");

?>