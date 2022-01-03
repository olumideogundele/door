<?php 

session_start();

if(isset($_SESSION['email']))
{
	
	$emailing = $_SESSION['email'];
}
 
include("restricted/config/DB_config.php");
include("restricted/includes/view-application-details-general.php");
include("restricted/includes/class_file.php");
 
// include("restricted/includes/SendingSMS.php");
   

 $myName = new Name();




if(isset($_SESSION['email']))
{
	$customer_name = $myName->showName($conn, "SELECT  `name` FROM  `user_unit` WHERE  `account_number` = '$emailing'");
    $customer_phone = $myName->showName($conn, "SELECT  `phone` FROM  `user_unit` WHERE  `account_number` = '$emailing'");
    $customer_email = $myName->showName($conn, "SELECT  `email` FROM  `user_unit` WHERE  `account_number` = '$emailing'");
}


?><!DOCTYPE html>
<html lang="zxx">
<head>
<meta name="author" content="">
<meta name="description" content="">
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $inst_name.":: ".$inst_slogan;?></title>

<!-- Favicon -->
<link rel="shortcut png" href="<?php echo "restricted/".$inst_logo; ?>">
<link rel="shortcut jpg" href="<?php echo "restricted/".$inst_logo; ?>">
	<link rel="icon" href="<?php
						   
						   if(isset($inst_logo))
														{
															echo "restricted/".$inst_logo;
														}
														else
														{
															echo "backend-admin/assets/images/logo-icon.png";
															
														}
						   ?>" type="image/jpg" sizes="16x16">
<!-- Style CSS -->
<link rel="stylesheet" href="css/stylesheet.css">
<link rel="stylesheet" href="css/mmenu.css">
<link rel="stylesheet" href="css/style.css" id="colors">
	
	
 
<link rel="stylesheet" href="css/perfect-scrollbar.css">
 
	
	
<!-- Google Font -->
<link href="https://fonts.googleapis.com/css?family=Nunito:300,400,600,700,800&display=swap&subset=latin-ext,vietnamese" rel="stylesheet"> 
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700,800" rel="stylesheet" type="text/css">
</head>
<body onLoad="loading()">

<!-- Wrapper -->
<div id="main_wrapper">
  <header id="header_part"> 
    <div id="header">
      <div class="container"> 
        <div class="utf_left_side"> 
          <div id="logo"> <a href="index"><img src="<?php echo "restricted/".$inst_logo; ?>" alt="<?php echo $inst_name; ?>" width="100%" style="width: 100%;"></a> </div>
          <div class="mmenu-trigger">
			<button class="hamburger utfbutton_collapse" type="button">
				<span class="utf_inner_button_box">
					<span class="utf_inner_section"></span>
				</span>
			</button>
		  </div>
          <nav id="navigation" class="style_one">
            <ul id="responsive">
              <li><a class="current" href="index">Home </a>
                  <ul>
                 		  
                </ul>
              </li>			  
              <li><a href="#">About</a>
				  
				  <ul>
                 		  
                </ul>
                 
              </li><li><a href="#">How It Works</a>
				  
				  <ul>
                 		  
                </ul>
                 
              </li><li><a href="#">Contact Us</a>
				  
				  <ul>
                 		  
                </ul>
                 
              </li>
               
             
                             
            </ul>
          </nav>
          <div class="clearfix"></div>
        </div>
        <div class="utf_right_side">
          <div class="header_widget"> <a href="sign-in" class="button border sign-in"><i class="fa fa-sign-in"></i> Sign In</a> <a href="dashboard_add_listing.html" class="button border with-icon"><i class="sl sl-icon-user"></i> Add Listing</a></div>
        </div>
		
         
      </div>
    </div>    
  </header>
  <div class="clearfix"></div>