 <?php
 
 include("config/DB_config.php");
$emailing = "";
 
 if(isset($_POST['validate']))
 {
 
 if(isset($_SESSION['email']))
 {
$emailing  = $_SESSION['email'];
 }

 

 $randing = rand(22,76723).rand(23,7674).rand(234,889);

/*fname
lname
email
phone
license
license_expiry
password
front_view
back_view*/



 
 $target_dir = "graphicallity/";
 
$fname= $_POST['fname'];
$lname  = $_POST['lname'];
	 $email= $_POST['email'];
$phone = $_POST['phone'];
	 $license= $_POST['license'];
	 $license_expiry= $_POST['license_expiry'];
 $passport = $target_dir .$randing. basename($_FILES["passport"]["name"]);
$front_view = $target_dir .$randing. basename($_FILES["front_view"]["name"]);
$back_view = $target_dir .$randing. basename($_FILES["back_view"]["name"]);
 
 
 
	 
	 
  
//  $extract_user = mysqli_query($conn, "SELECT * FROM `driver`  WHERE `phone` = '$phone' AND `email` = '$email'") or die(mysqli_error($conn));
	  $extract_user = mysqli_query($conn, "SELECT * FROM `user_unit` WHERE (`phone` = '$phone' or `email` = '$email') AND `usertype` = 4") or die(mysqli_error($conn));
		$count = mysqli_num_rows($extract_user);
		 if ($count > 0) {
	 	  
			 
			  echo '<div class="btn btn-danger btn-lg">Driver\'s Information Already In The Database.<br /> Please Check And Try Again Later.</a></div>'; 	
			 
			 
		 
 
		 }else
		 {
 
 /*SELECT  `id`, `account_number`, `fname`, `lname`, `email`, `phone`, `license`, `license_expiry`, `passport`, `front_view`, `back_view`, `status`, `created_date` FROM `driver` WHERE 1*/
 	 
$sql = 	 "INSERT INTO `driver`(`account_number`, `fname`, `lname`, `email`, `phone`, `license`, `license_expiry`, `passport`, `front_view`, `back_view`, `status`, `created_date`,`registeredby` ) VALUES
('$randing', '$fname', '$lname', '$email', '$phone', '$license','$license_expiry', '$passport', '$front_view', '$back_view','0','$datetime','$emailing')";
 
 $process = mysqli_query($conn, $sql) or die(mysqli_error($conn));
 
	if ($process) {
		 
 
		
		 
  
 $password = rand(3455, 827365345);					
$uuid = uniqid('', true);

$salt = sha1(rand());
        $salt = substr($salt, 0, 10);
        $encrypted = base64_encode(sha1($password . $salt, true) . $salt);
        $hash = array("salt" => $salt, "encrypted" => $encrypted);
         
        $encrypted_password = $hash["encrypted"]; // encrypted password
        $salt = $hash["salt"]; // salt
 
	 $name = $fname ." ".$lname; 
	 
$sql = 	 "INSERT INTO `user_unit`(`usertype`,`name`, `account_number`, `phone`, `email`, `address`, `created_date`, `registeredby`, `status`, `unique_id`, `encrypted_password`, `salt`, `irrelivant`, `ministry`, `designation`, `state`, `lga`,`number`,`file` ) VALUES
('4','$name', '$randing', '$phone', '$email', '-', '$datetime', '$emailing',0, '$uuid' ,'$encrypted_password','$salt', '$password', '-', 'Driver', '-', '-', '0', '$passport')";		
		
		 $process = mysqli_query($conn, $sql) or die(mysqli_error($conn));
		
		 $phone = $phone;
		
		if($phone !="")
		{
  
			
		 
			
			
  $message = "Welcome to ".$inst_name." ".$name."! Username:".$phone.".Password:".$password.". Thank You.";

  
  	 $Sending = new SendingSMS(); 
  							 
						$Sending->smsAPI($phone,"Welcome",$message);
							 
		 }
		
		
		
		
		if($email != "")
		{
			
			
		 
		$sendEmail = ' 
<html xmlns="http://www.w3.org/1999/xhtml"
 xmlns:v="urn:schemas-microsoft-com:vml"
 xmlns:o="urn:schemas-microsoft-com:office:office">
<head>
	<!--[if gte mso 9]><xml>
	<o:OfficeDocumentSettings>
	<o:AllowPNG/>
	<o:PixelsPerInch>96</o:PixelsPerInch>
	</o:OfficeDocumentSettings>
	</xml><![endif]-->
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="format-detection" content="date=no" />
	<meta name="format-detection" content="address=no" />
	<meta name="format-detection" content="telephone=no" />
	<title><?php 
		if(isset($inst_name))
		{
			echo $inst_name;
			
		}
		
		?></title>
	

	<style type="text/css" media="screen">
		/* Linked Styles */
		body { padding:0 !important; margin:0 !important; display:block !important; background:#1e1e1e; -webkit-text-size-adjust:none }
		a { color:#a88123; text-decoration:none }
		p { padding:0 !important; margin:0 !important } 

		/* Mobile styles */
		</style>
		<style media="only screen and (max-device-width: 480px), only screen and (max-width: 480px)" type="text/css">
		@media only screen and (max-device-width: 480px), only screen and (max-width: 480px) { 
			div[class="mobile-br-5"] { height: 5px !important; }
			div[class="mobile-br-10"] { height: 10px !important; }
			div[class="mobile-br-15"] { height: 15px !important; }
			div[class="mobile-br-20"] { height: 20px !important; }
			div[class="mobile-br-25"] { height: 25px !important; }
			div[class="mobile-br-30"] { height: 30px !important; }

			th[class="m-td"], 
			td[class="m-td"], 
			div[class="hide-for-mobile"], 
			span[class="hide-for-mobile"] { display: none !important; width: 0 !important; height: 0 !important; font-size: 0 !important; line-height: 0 !important; min-height: 0 !important; }

			span[class="mobile-block"] { display: block !important; }

			div[class="wgmail"] img { min-width: 320px !important; width: 320px !important; }

			div[class="img-m-center"] { text-align: center !important; }

			div[class="fluid-img"] img,
			td[class="fluid-img"] img { width: 100% !important; max-width: 100% !important; height: auto !important; }

			table[class="mobile-shell"] { width: 100% !important; min-width: 100% !important; }
			td[class="td"] { width: 100% !important; min-width: 100% !important; }
			
			table[class="center"] { margin: 0 auto; }
			
			td[class="column-top"],
			th[class="column-top"],
			td[class="column"],
			th[class="column"] { float: left !important; width: 100% !important; display: block !important; }

			td[class="content-spacing"] { width: 15px !important; }

			div[class="h2"] { font-size: 44px !important; line-height: 48px !important; }
		} 
	</style>
</head>
<body class="body" style="padding:0 !important; margin:0 !important; display:block !important; background:#1e1e1e; -webkit-text-size-adjust:none">
	<table width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="#1e1e1e">
		<tr>
			<td align="center" valign="top">
				<!-- Top -->
				<table width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="#161616">
					<tr>
						<td align="center" valign="top">
							<table width="600" border="0" cellspacing="0" cellpadding="0" class="mobile-shell">
								<tr>
									<td class="td" style="font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal; width:600px; min-width:600px; Margin:0" width="600">
										<table width="100%" border="0" cellspacing="0" cellpadding="0">
											<tr>
												<td class="content-spacing" style="font-size:0pt; line-height:0pt; text-align:left" width="20"></td>
												<td>
													<table width="100%" border="0" cellspacing="0" cellpadding="0" class="spacer" style="font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%"><tr><td height="10" class="spacer" style="font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%">&nbsp;</td></tr></table>

													 
													<table width="100%" border="0" cellspacing="0" cellpadding="0" class="spacer" style="font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%"><tr><td height="10" class="spacer" style="font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%">&nbsp;</td></tr></table>

												</td>
												<td class="content-spacing" style="font-size:0pt; line-height:0pt; text-align:left" width="20"></td>
											</tr>
										</table>
									</td>
								</tr>
							</table>
						</td>
					</tr>
				</table>
				<!-- END Top -->

				<table width="600" border="0" cellspacing="0" cellpadding="0" class="mobile-shell">
					<tr>
						<td class="td" style="font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal; width:600px; min-width:600px; Margin:0" width="600">
							<!-- Header -->
							<table width="100%" border="0" cellspacing="0" cellpadding="0">
								<tr>
									<td class="content-spacing" style="font-size:0pt; line-height:0pt; text-align:left" width="20"></td>
									<td>
										<table width="100%" border="0" cellspacing="0" cellpadding="0" class="spacer" style="font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%"><tr><td height="30" class="spacer" style="font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%">&nbsp;</td></tr></table>

										<div class="img-center" style="font-size:0pt; line-height:0pt; text-align:center"><a href="#" target="_blank"><img src="restricted/'.$inst_logo.'" border="0" width="100" height="100s" alt="" /></a></div>
										<table width="100%" border="0" cellspacing="0" cellpadding="0" class="spacer" style="font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%"><tr><td height="30" class="spacer" style="font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%">&nbsp;</td></tr></table>
 
									</td>
									<td class="content-spacing" style="font-size:0pt; line-height:0pt; text-align:left" width="20"></td>
								</tr>
							</table>
							<!-- END Header -->

							<!-- Main -->
							<table width="100%" border="0" cellspacing="0" cellpadding="0">
								<tr>
									<td>
										<!-- Head -->
										<table width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="#d2973b">
											<tr>
												<td>
													<table width="100%" border="0" cellspacing="0" cellpadding="0">
														<tr>
<td class="img" style="font-size:0pt; line-height:0pt; text-align:left" width="27"><img src="https://d1pgqke3goo8l6.cloudfront.net/JJxrFRyVRr20CJD3pOx9_top_left.jpg" border="0" width="27" height="27" alt="" /></td>
															<td>
																<table width="100%" border="0" cellspacing="0" cellpadding="0">
																	<tr>
																		<td class="img" style="font-size:0pt; line-height:0pt; text-align:left" height="3" bgcolor="#e6ae57">&nbsp;</td>
																	</tr>
																</table>
																<table width="100%" border="0" cellspacing="0" cellpadding="0" class="spacer" style="font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%"><tr><td height="24" class="spacer" style="font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%">&nbsp;</td></tr></table>

															</td>
															<td class="img" style="font-size:0pt; line-height:0pt; text-align:left" width="27"><img src="https://d1pgqke3goo8l6.cloudfront.net/SNcoUN5kSfCDagqSBEZ4_top_right.jpg" border="0" width="27" height="27" alt="" /></td>
														</tr>
													</table>
													<table width="100%" border="0" cellspacing="0" cellpadding="0">
														<tr>
															<td class="img" style="font-size:0pt; line-height:0pt; text-align:left" width="3" bgcolor="#e6ae57"></td>
															<td class="img" style="font-size:0pt; line-height:0pt; text-align:left" width="10"></td>
															<td>
																<table width="100%" border="0" cellspacing="0" cellpadding="0" class="spacer" style="font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%"><tr><td height="15" class="spacer" style="font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%">&nbsp;</td></tr></table>

																<div class="h2" style="color:#ffffff; font-family:Georgia, serif; min-width:auto !important; font-size:30px; line-height:64px; text-align:center">
																	<em>Welcome to '.$inst_name.'</em>
																</div>
																<table width="100%" border="0" cellspacing="0" cellpadding="0" class="spacer" style="font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%"><tr><td height="15" class="spacer" style="font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%">&nbsp;</td></tr></table>


 <div class="h3-2-center" style="color:#1e1e1e; font-family:Arial, sans-serif; min-width:auto !important; font-size:20px; line-height:26px; text-align:center; letter-spacing:5px"><em>Hi '.$name.'</em></div>
																<table width="100%" border="0" cellspacing="0" cellpadding="0" class="spacer" style="font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%"><tr><td height="35" class="spacer" style="font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%">&nbsp;</td></tr></table>

															</td>
															<td class="img" style="font-size:0pt; line-height:0pt; text-align:left" width="10"></td>
															<td class="img" style="font-size:0pt; line-height:0pt; text-align:left" width="3" bgcolor="#e6ae57"></td>
														</tr>
													</table>
												</td>
											</tr>
										</table>
										<!-- END Head -->

										<!-- Body -->
										<table width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="#ffffff">
											<tr>
												<td class="content-spacing" style="font-size:0pt; line-height:0pt; text-align:left" width="20"></td>
												<td>
													<table width="100%" border="0" cellspacing="0" cellpadding="0" class="spacer" style="font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%"><tr><td height="35" class="spacer" style="font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%">&nbsp;</td></tr></table>

													<div class="h3-1-center" style="color:#1e1e1e; font-family:Georgia, serif; min-width:auto !important; font-size:20px; line-height:26px; text-align:center">Your account on '.$inst_name.'  as been activated. <br />
Please find your credentials below.</div>
													<table width="100%" border="0" cellspacing="0" cellpadding="0" class="spacer" style="font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%"><tr><td height="20" class="spacer" style="font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%">&nbsp;</td></tr></table>

										
													<!-- Button -->
													<table width="100%" border="0" cellspacing="0" cellpadding="0">
														<tr>
															<td align="center">
																<table width="210" border="0" cellspacing="0" cellpadding="0">
																	<tr>
																		<td align="center" bgcolor="#d2973b">
																			<table border="0" cellspacing="0" cellpadding="0">
																				<tr>
																					<td class="img" style="font-size:0pt; line-height:0pt; text-align:left" width="15"><table width="100%" border="0" cellspacing="0" cellpadding="0" class="spacer" style="font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%"><tr><td height="50" class="spacer" style="font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%">&nbsp;</td></tr></table>
</td>
																					<td bgcolor="#d2973b">
																						<div class="text-btn" style="color:#ffffff; font-family:Arial, sans-serif; min-width:auto !important; font-size:16px; line-height:20px; text-align:center">
																							<a href="http://'.$_SERVER['HTTP_HOST'] .'" target="_blank" class="link-white" style="color:#ffffff; text-decoration:none"><span class="link-white" style="color:#ffffff; text-decoration:none">MY ACCOUNT</span></a>
																						</div>
																					</td>
																					<td class="img" style="font-size:0pt; line-height:0pt; text-align:left" width="15"></td>
																				</tr>
																			</table>
																		</td>
																	</tr>
																</table>
															</td>
														</tr>
													</table>
													<!-- END Button -->
													<table width="100%" border="0" cellspacing="0" cellpadding="0" class="spacer" style="font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%"><tr><td height="40" class="spacer" style="font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%">&nbsp;</td></tr></table>
													
													
													
													<table width="100%" border="0" cellspacing="0" cellpadding="0">
														<tr>
															<th class="column-top" style="font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal; vertical-align:top; Margin:0" valign="top" width="270">
																<table width="100%" border="0" cellspacing="0" cellpadding="0">
																	<tr>
																		<td>
																			<table width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="#f4f4f4">
																				<tr>
																					<td class="content-spacing" style="font-size:0pt; line-height:0pt; text-align:left" width="20"></td>
																					<td>
																						<table width="100%" border="0" cellspacing="0" cellpadding="0" class="spacer" style="font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%"><tr><td height="10" class="spacer" style="font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%">&nbsp;</td></tr></table>

																						<div class="text-1" style="color:#d2973b; font-family:Arial, sans-serif; min-width:auto !important; font-size:14px; line-height:20px; text-align:left">
																							<strong>Username:</strong>
																						</div>
																						<table width="100%" border="0" cellspacing="0" cellpadding="0" class="spacer" style="font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%"><tr><td height="10" class="spacer" style="font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%">&nbsp;</td></tr></table>

																					</td>
																					<td class="content-spacing" style="font-size:0pt; line-height:0pt; text-align:left" width="20"></td>
																				</tr>
																			</table>
																			 
																		</td>
																	</tr>
																</table>
															</th>
															<th class="column-top" style="font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal; vertical-align:top; Margin:0" valign="top" width="20">
																<table width="100%" border="0" cellspacing="0" cellpadding="0">
																	<tr>
																		<td><div style="font-size:0pt; line-height:0pt;" class="mobile-br-15"></div>
</td>
																	</tr>
																</table>
															</th>
															<th class="column-top" style="font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal; vertical-align:top; Margin:0" valign="top" width="270">
																<table width="100%" border="0" cellspacing="0" cellpadding="0">
																	<tr>
																		<td>
																			<table width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="#f4f4f4">
																				<tr>
																					<td class="content-spacing" style="font-size:0pt; line-height:0pt; text-align:left" width="20"></td>
																					<td>
																						<table width="100%" border="0" cellspacing="0" cellpadding="0" class="spacer" style="font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%"><tr><td height="10" class="spacer" style="font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%">&nbsp;</td></tr></table>

																						<div class="text-1" style="color:#d2973b; font-family:Arial, sans-serif; min-width:auto !important; font-size:14px; line-height:20px; text-align:left">
																							  <span style="color: #1e1e1e;">
																								 '.$email.'</span>
																						</div>
																						<table width="100%" border="0" cellspacing="0" cellpadding="0" class="spacer" style="font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%"><tr><td height="10" class="spacer" style="font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%">&nbsp;</td></tr></table>

																					</td>
																					<td class="content-spacing" style="font-size:0pt; line-height:0pt; text-align:left" width="20"></td>
																				</tr>
																			</table>
																			
																			 
																			<table width="100%" border="0" cellspacing="0" cellpadding="0" class="spacer" style="font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%"><tr><td height="20" class="spacer" style="font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%">&nbsp;</td></tr></table>


																			 
																			 
																		</td>
																	</tr>
																</table>
															</th>
														</tr>
													</table>


													<table width="100%" border="0" cellspacing="0" cellpadding="0">
														<tr>
															<th class="column-top" style="font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal; vertical-align:top; Margin:0" valign="top" width="270">
																<table width="100%" border="0" cellspacing="0" cellpadding="0">
																	<tr>
																		<td>
																			<table width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="#f4f4f4">
																				<tr>
																					<td class="content-spacing" style="font-size:0pt; line-height:0pt; text-align:left" width="20"></td>
																					<td>
																						<table width="100%" border="0" cellspacing="0" cellpadding="0" class="spacer" style="font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%"><tr><td height="10" class="spacer" style="font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%">&nbsp;</td></tr></table>

																						<div class="text-1" style="color:#d2973b; font-family:Arial, sans-serif; min-width:auto !important; font-size:14px; line-height:20px; text-align:left">
																							<strong>Password:</strong>
																						</div>
																						<table width="100%" border="0" cellspacing="0" cellpadding="0" class="spacer" style="font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%"><tr><td height="10" class="spacer" style="font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%">&nbsp;</td></tr></table>

																					</td>
																					<td class="content-spacing" style="font-size:0pt; line-height:0pt; text-align:left" width="20"></td>
																				</tr>
																			</table>
																			 
																		</td>
																	</tr>
																</table>
															</th>
															<th class="column-top" style="font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal; vertical-align:top; Margin:0" valign="top" width="20">
																<table width="100%" border="0" cellspacing="0" cellpadding="0">
																	<tr>
																		<td><div style="font-size:0pt; line-height:0pt;" class="mobile-br-15"></div>
</td>
																	</tr>
																</table>
															</th>
															<th class="column-top" style="font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal; vertical-align:top; Margin:0" valign="top" width="270">
																<table width="100%" border="0" cellspacing="0" cellpadding="0">
																	<tr>
																		<td>
																			<table width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="#f4f4f4">
																				<tr>
																					<td class="content-spacing" style="font-size:0pt; line-height:0pt; text-align:left" width="20"></td>
																					<td>
																						<table width="100%" border="0" cellspacing="0" cellpadding="0" class="spacer" style="font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%"><tr><td height="10" class="spacer" style="font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%">&nbsp;</td></tr></table>

																						<div class="text-1" style="color:#d2973b; font-family:Arial, sans-serif; min-width:auto !important; font-size:14px; line-height:20px; text-align:left">
																							  <span style="color: #1e1e1e;">
																								
																								'.$password.'
																								
																								 </span>
																						</div>
																						<table width="100%" border="0" cellspacing="0" cellpadding="0" class="spacer" style="font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%"><tr><td height="10" class="spacer" style="font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%">&nbsp;</td></tr></table>

																					</td>
																					<td class="content-spacing" style="font-size:0pt; line-height:0pt; text-align:left" width="20"></td>
																				</tr>
																			</table>
																			
																			 
																			<table width="100%" border="0" cellspacing="0" cellpadding="0" class="spacer" style="font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%"><tr><td height="20" class="spacer" style="font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%">&nbsp;</td></tr></table>


																			 
																			 
																		</td>
																	</tr>
																</table>
															</th>
														</tr>
													</table>
													
													
													
													
													
													
													
													
													
													<table width="100%" border="0" cellspacing="0" cellpadding="0" class="spacer" style="font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%"><tr><td height="40" class="spacer" style="font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%">&nbsp;</td></tr></table>


													 
													<table width="100%" border="0" cellspacing="0" cellpadding="0" class="spacer" style="font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%"><tr><td height="10" class="spacer" style="font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%">&nbsp;</td></tr></table>


													<table width="100%" border="0" cellspacing="0" cellpadding="0">
														<tr>
															<td class="img" style="font-size:0pt; line-height:0pt; text-align:left" height="1" bgcolor="#d2973b">&nbsp;</td>
														</tr>
													</table>
													<table width="100%" border="0" cellspacing="0" cellpadding="0" class="spacer" style="font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%"><tr><td height="15" class="spacer" style="font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%">&nbsp;</td></tr></table>


													 
													<table width="100%" border="0" cellspacing="0" cellpadding="0" class="spacer" style="font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%"><tr><td height="35" class="spacer" style="font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%">&nbsp;</td></tr></table>

												</td>
												<td class="content-spacing" style="font-size:0pt; line-height:0pt; text-align:left" width="20"></td>
											</tr>
										</table>
										<!-- END Body -->

										<!-- Foot -->
										<table width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="#d2973b">
											<tr>
												<td>
													<table width="100%" border="0" cellspacing="0" cellpadding="0">
														<tr>
															<td class="img" style="font-size:0pt; line-height:0pt; text-align:left" width="3" bgcolor="#e6ae57"></td>
															<td>
																<table width="100%" border="0" cellspacing="0" cellpadding="0" class="spacer" style="font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%"><tr><td height="30" class="spacer" style="font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%">&nbsp;</td></tr></table>

																<div class="h3-1-center" style="color:#1e1e1e; font-family:Georgia, serif; min-width:auto !important; font-size:20px; line-height:26px; text-align:center">
																	<em>Follow Us</em>
																</div>
																<table width="100%" border="0" cellspacing="0" cellpadding="0" class="spacer" style="font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%"><tr><td height="15" class="spacer" style="font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%">&nbsp;</td></tr></table>


																<!-- Socials -->
																<table width="100%" border="0" cellspacing="0" cellpadding="0">
																	<tr>
																		<td align="center">
																			<table border="0" cellspacing="0" cellpadding="0">
																				<tr>
																					<td class="img-center" style="font-size:0pt; line-height:0pt; text-align:center" width="38"><a href="#" target="_blank"><img src="https://d1pgqke3goo8l6.cloudfront.net/PZeWpIm2TkSqtS6i07xE_ico_facebook.jpg" border="0" width="28" height="28" alt="" /></a></td>
																					<td class="img-center" style="font-size:0pt; line-height:0pt; text-align:center" width="38"><a href="#" target="_blank"><img src="https://d1pgqke3goo8l6.cloudfront.net/hAIPhWl2SB2cL0Atc4lB_ico_twitter.jpg" border="0" width="28" height="28" alt="" /></a></td>
																					<td class="img-center" style="font-size:0pt; line-height:0pt; text-align:center" width="38"><a href="#" target="_blank"><img src="https://d1pgqke3goo8l6.cloudfront.net/NrXUpqcRQwKnJKzLkqS1_ico_instagram.jpg" border="0" width="28" height="28" alt="" /></a></td>
																					<td class="img-center" style="font-size:0pt; line-height:0pt; text-align:center" width="38"><a href="#" target="_blank"><img src="https://d1pgqke3goo8l6.cloudfront.net/VaewiS8gT5ClCCR9vAO1_ico_pinterest.jpg" border="0" width="28" height="28" alt="" /></a></td>
																				</tr>
																			</table>
																		</td>
																	</tr>
																</table>
																<!-- END Socials -->
																<table width="100%" border="0" cellspacing="0" cellpadding="0" class="spacer" style="font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%"><tr><td height="15" class="spacer" style="font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%">&nbsp;</td></tr></table>

															</td>
															<td class="img" style="font-size:0pt; line-height:0pt; text-align:left" width="3" bgcolor="#e6ae57"></td>
														</tr>
													</table>
													<table width="100%" border="0" cellspacing="0" cellpadding="0">
														<tr>
															<td class="img" style="font-size:0pt; line-height:0pt; text-align:left" width="27"><img src="https://d1pgqke3goo8l6.cloudfront.net/nK8bYazcQWGAQt8sAH2g_bot_left.jpg" border="0" width="27" height="27" alt="" /></td>
															<td>
																<table width="100%" border="0" cellspacing="0" cellpadding="0" class="spacer" style="font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%"><tr><td height="24" class="spacer" style="font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%">&nbsp;</td></tr></table>

																<table width="100%" border="0" cellspacing="0" cellpadding="0">
																	<tr>
																		<td class="img" style="font-size:0pt; line-height:0pt; text-align:left" height="3" bgcolor="#e6ae57">&nbsp;</td>
																	</tr>
																</table>
															</td>
															<td class="img" style="font-size:0pt; line-height:0pt; text-align:left" width="27"><img src="https://d1pgqke3goo8l6.cloudfront.net/v9RanaDRM2FzjQNT9PwV_bot_right.jpg" border="0" width="27" height="27" alt="" /></td>
														</tr>
													</table>
												</td>
											</tr>
										</table>
										<!-- END Foot -->
									</td>
								</tr>
							</table>
							<!-- END Main -->
							
							<!-- Footer -->
							<table width="100%" border="0" cellspacing="0" cellpadding="0">
								<tr>
									<td class="content-spacing" style="font-size:0pt; line-height:0pt; text-align:left" width="20"></td>
									<td>
										<table width="100%" border="0" cellspacing="0" cellpadding="0" class="spacer" style="font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%"><tr><td height="30" class="spacer" style="font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%">&nbsp;</td></tr></table>

										<div class="text-footer" style="color:#666666; font-family:Arial, sans-serif; min-width:auto !important; font-size:12px; line-height:18px; text-align:center">
											 ,<span class="mobile-block"></span> '.$inst_address.' <span class="mobile-block"></span>  
											<br />
											<a href="http://'.$_SERVER['HTTP_HOST'].'" target="_blank" class="link-1" style="color:#666666; text-decoration:none"><span class="link-1" style="color:#666666; text-decoration:none">http://'.$_SERVER['HTTP_HOST'].'</span></a>
											<span class="mobile-block"><span class="hide-for-mobile">|</span></span>
											<a href="mailto:'.$inst_email.'" target="_blank" class="link-1" style="color:#666666; text-decoration:none"><span class="link-1" style="color:#666666; text-decoration:none">'.$inst_email.'</span></a>
											<span class="mobile-block"><span class="hide-for-mobile">|</span></span>
											Phone: <a href="tel:'.$inst_phone.'" target="_blank" class="link-1" style="color:#666666; text-decoration:none"><span class="link-1" style="color:#666666; text-decoration:none">'.$inst_phone.' </span></a>
										</div>
										<table width="100%" border="0" cellspacing="0" cellpadding="0" class="spacer" style="font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%"><tr><td height="30" class="spacer" style="font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%">&nbsp;</td></tr></table>

									</td>
									<td class="content-spacing" style="font-size:0pt; line-height:0pt; text-align:left" width="20"></td>
								</tr>
							</table>
							<!-- END Footer -->
						</td>
					</tr>
				</table>
				<div class="wgmail" style="font-size:0pt; line-height:0pt; text-align:center"><img src="https://d1pgqke3goo8l6.cloudfront.net/oD2XPM6QQiajFKLdePkw_gmail_fix.gif" width="600" height="1" style="min-width:600px" alt="" border="0" /></div>
	 
</body>
</html>
</html>';
		
		//echo $sendEmail;
		
		
			$newEmail= "info@loadme.services";
	
	
	 					$headers = "From: " .($newEmail) . "\r\n";
                        $headers .= "Reply-To: ".($newEmail) . "\r\n";
                        $headers .= "Return-Path: ".($newEmail) . "\r\n";;
                        $headers .= "MIME-Version: 1.0\r\n";
                        $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
                        $headers .= "X-Priority: 3\r\n";
                        $headers .= "X-Mailer: PHP". phpversion() ."\r\n";
  $emailSend = mail($email,"Welcome: ".$name,$sendEmail,$headers); 
			
			 
	
	 
  //$emailSend = mail($emailing,"Welcome ".$name,$sendEmail,$headers); 
			
			
			
			
			$to = $email;
$subject = 'Welcome to LOADME';
$from = 'info@loadme.service';
 
// To send HTML mail, the Content-type header must be set
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
 
// Create email headers
$headers .= 'From: '.$from."\r\n".
    'Reply-To: '.$from."\r\n" .
    'X-Mailer: PHP/' . phpversion();
 
 
 
// Sending email
if(mail($to, $subject, $sendEmail, $headers)){
  //  echo 'Your mail has been sent successfully.';
} else{
    //echo 'Unable to send email. Please try again.';
}
			
		
		
	
		
		
			
		}
		
		
		
		
		
		
		
		
  echo '<div class="btn btn-success btn-lg">Information Submitted Successfully.</a></div><br />'; 	
  $target_dir = "graphicallity/";
		
		
		
		
		saveImage($target_dir,$randing,$_FILES["passport"]["name"],$_FILES["passport"]["tmp_name"],$_FILES["passport"]["size"]);
		saveImage($target_dir,$randing,$_FILES["front_view"]["name"],$_FILES["front_view"]["tmp_name"],$_FILES["front_view"]["size"]);
		saveImage($target_dir,$randing,$_FILES["back_view"]["name"],$_FILES["back_view"]["tmp_name"],$_FILES["back_view"]["size"]);
 

	 
  
  
   
} else {
  // echo "Error: " . $sql . "<br>" . $conn->error;
    $error="Not Inserted,Some Problem occured.";
echo'<a href="#"class="btn btn-danger btn-lg">Information Not Submitted Successfully.  <br />Please try again later.</a><br />';  

}

 
		 
 
		
 
 }
 		 
 }



function saveImage($target_dir,$randing,$imageValue,$imageValue2,$size)
{
	
$target_file = $target_dir.$randing. basename($imageValue);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if($imageValue2 != "") {
    $check = getimagesize($imageValue2);
    if($check !== false) {
        echo "<div class='btn btn-success btn-lg'>File is an image - " . $check["mime"] . ".</div>";
        $uploadOk = 1;
    } else {
      //  echo "<div class='btn btn-danger btn-lg'>File is not an image.</div>";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "<div class='btn btn-danger btn-lg'>Sorry, file already exists.</div>";
    $uploadOk = 0;
}
// Check file size
if ($size > 500000) {
    echo "<div class='btn btn-danger btn-lg'>Sorry, your file is too large.</div>";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" && $imageFileType != "pdf" ) {
    echo "<div class='btn btn-danger btn-lg'>Sorry, only JPG, JPEG, PNG & GIF files are allowed.</div>";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "<div class='btn btn-danger btn-lg'>Sorry, your file was not uploaded.</div>";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($imageValue2, $target_file)) {
        echo "<div class='btn btn-success btn-lg'>The file ". basename( $imageValue). " has been uploaded.</div>";
    } else {
        echo "<div class='btn btn-danger btn-lg'>Sorry, there was an error uploading your file.</div>";
    }
}
	
}
 
$conn->close();
	
 
?>

 