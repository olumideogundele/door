<?php


include("header.php");

$url = "";
if(isset($_GET['link']))
{
	
$url =  $_GET['link'];	
}

$_SESSION['url'] = $url;
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
	
	<script>
function myFunction() {
	
	var e = document.getElementById("type").value;
	 
	
	
	if(e == "yes")
		{
			 var yes = document.getElementById("yes");
			 var no = document.getElementById("no");
			
			yes.style.display = "block";
			
			 no.style.display = "none";
			
			
			 
	/*		 if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }*/
		}
	else if(e == "no")
		{
			 var yes = document.getElementById("yes");
			 var no = document.getElementById("no");
			
			yes.style.display = "none";
			
			 no.style.display = "block";
			
			
	 
			/* if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }*/
			
		}
	 

 
}
		
		function loading()
		{
			
			
			 var yes = document.getElementById("yes");
			 var no = document.getElementById("no");
			
			yes.style.display = "block";
			
			 no.style.display = "none";
			
			
		}
</script>
  
  <div class="container margin-bottom-75">
     <div class="row">
        <div class="col-lg-12">
          <div id="utf_add_listing_part">             
			<div class="add_utf_listing_section"> 
			  <div class="utf_add_listing_part_headline_part">
                <h3><i class="sl sl-icon-user"></i> Have an Account?</h3>
              </div>			  
			  <div class="row with-forms">				
				<div class="col-md-12">
					<div class="form-group lis-relative" align="center"> <a href="index">
                                                
                                            
                                                <img src="<?php
														if(isset($inst_logo))
														{
															
															echo "restricted/".$inst_logo;
														}
														else
														{
															//echo "backend-admin/assets/images/logo-icon.png";
															
														}
														?>" class="sign-favicon ht-40" alt="logo"></a>
                                                
                                                
                                                
                                                <h1 class="main-logo1 ml-1 mr-0 my-auto tx-28"><?php echo $inst_name; ?></h1></div>
					
					<div class="form-group lis-relative">
						Sign in If you don’t have an account you can create one below by entering your email address/username. Your account details will be confirmed via email.  
					</div>
					
					
					
				</div>
			  </div>
			</div>
			
             
            
            
            <div class="add_utf_listing_section margin-top-45"> 
              <div class="utf_add_listing_part_headline_part">
                <h3><i class="sl sl-icon-lock-open"></i> Account</h3>                
              </div>              
              <div class="switcher-content">
				  
				  
				 
        
          <div class="utf_signin_form style_one">
            <ul class="utf_tabs_nav">
              <li class=""><a href="#tab1">Sign In</a></li>
              <li><a href="#tab2">Sign Up</a></li>
            </ul>
            <div class="tab_container alt"> 
              <div class="tab_content" id="tab1" style="display:none;">
                <form method="post" class="login">
				 
                  <p class="utf_row_form utf_form_wide_block">
                    <label for="username">
                   <h2>Welcome back!</h2>
													<h5 class="font-weight-semibold mb-4">Please sign in to continue.</h5>
                    </label>
                  </p>
					
					
					<div class="form-group">
						  
						<?php 
                                                              
include("restricted/includes/login_process_2.php");
 
if(isset($_GET['login']))
{
	
	$log  = $_GET['login'];
	if($log == "error")
	{
    
        
                $error2 = '<div class="alert alert-danger" role="alert">
		<button aria-label="Close" class="close" data-dismiss="alert" type="button">
		   <span aria-hidden="true">&times;</span>
	  </button>
		<strong>Oops!</strong>Invalid login details. <br>
Please try again.
	</div>';
        
        
//	$error2 = '<a href="#"  class="alert alert-danger">Please provide valid username and password</a>';
   }
   else if($log == "successful")
   {
 
//		$error2 = '<div class="btn btn-success btn-lg"> You logged out successful. Please wait..</div> ';
	
  $error2 = '<div class="alert alert-success" role="alert">
		<button aria-label="Close" class="close" data-dismiss="alert" type="button">
		   <span aria-hidden="true">&times;</span>
	  </button>
		<strong>Yay!</strong>You logged out successful. Thank You.
	</div>';
			  
  echo '<meta http-equiv="Refresh" content="3; url= index"> ';
 
 
    // header("Location: http://test.shiftclocker.com/index.php"); 			
	  
	 }
	 else if($log == "menu" and !isset($_SESSION['email']))
	 {
// $error2 = '<div class="alert alert-success alert-dismissable"> Please <a href="#" data-popup=".popup-login" class="open-popup"><strong>LOGIN</strong></a> with to use CHI-CONF.</div> ';
	 }
   
   }

 

                                                              
                                                              
							   
					 		    if(is_array($error) && count($error) > 0)
					  {
					  foreach ($error as $message)
					  echo $message;
					   }
							   
							   
							   ?>
                       
          <?php  echo $error2;
		  
		  
		  ?>   
						   </div>
					
					 <input type="hidden" name="link" id="inputEmail" class="form-control" placeholder="Username" required autofocus value="<?php if(isset($_GET['linking']))
{
	
	
	echo $_GET['linking'];
}
								
								?>" autocomplete="off">
                                                            
					
					
					<p class="utf_row_form utf_form_wide_block">
                    <label for="username">
                      <input type="text" class="input-text" name="username" id="username" value="" placeholder="Username" value="<?php
if(isset($_COOKIE['remember_me'])){echo $_COOKIE['remember_me'];} ?>" autocomplete="off" />
                    </label>
                  </p>
                  <p class="utf_row_form utf_form_wide_block">
                    <label for="password">
                      <input class="input-text" type="password" name="password" id="password" placeholder="Password" value="<?php
if(isset($_COOKIE['password_me'])){echo $_COOKIE['password_me']; }?>" required  autocomplete="off"/>
                    </label>
                  </p>
                  <div class="utf_row_form utf_form_wide_block form_forgot_part"> <span class="lost_password fl_left"> <a href="reset-password">Forgot Password?</a> </span>
                    <div class="checkboxes fl_right">
                      <input id="remember-me" type="checkbox" name="remember">
                      <label for="remember-me">Remember Me</label>
                    </div>
                  </div>
                  <div class="utf_row_form">
					   
                    <input type="submit" class="button border margin-top-5" name="login" value="Sign In" />
                  </div>
                </form>
              </div>
				
				
				
				
				
				
				
				
              
              <div class="tab_content" id="tab2" style="display:none;">
                <form method="post" class="register">
					
					
					<div class="utf_row_form utf_form_wide_block">
											<label>Truck Owner Type</label> 
 <select class="" name="type" id="type" required onChange="myFunction()">
												 <option value='yes'>Corporate</option>
												   <option value='no'>Individual</option>
											</select>
										</div>
                    
					
					<div id="yes">
					YES	
					</div>
						<div id="no">
					NO	
					</div>
					
					
					
					
					
                  <p class="utf_row_form utf_form_wide_block">
                    <label for="username2">
                      <input type="text" class="input-text" name="username" id="username2" value="" placeholder="Username" />
                    </label>
                  </p>
                  <p class="utf_row_form utf_form_wide_block">
                    <label for="email2">
                      <input type="text" class="input-text" name="email" id="email2" value="" placeholder="Email" />
                    </label>
                  </p>
                  <p class="utf_row_form utf_form_wide_block">
                    <label for="password1">
                      <input class="input-text" type="password" name="password1" id="password1" placeholder="Password" />
                    </label>
                  </p>
                  <p class="utf_row_form utf_form_wide_block">
                    <label for="password2">
                      <input class="input-text" type="password" name="password2" id="password2" placeholder="Confirm Password" />
                    </label>
                  </p>
                  <input type="submit" class="button border fw margin-top-10" name="register" value="Register" />
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