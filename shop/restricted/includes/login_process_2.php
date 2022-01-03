<?php 
  date_default_timezone_set('Africa/Lagos');
	
	//require_once('config/DB_config.php');

	 $today=date("Y-m-d"); 

	 $todaydatefull=  date('Y-m-d G:i:s'); 
	 
	 
unset($_SESSION['email']);
unset($_SESSION['emailadd']);
unset($_SESSION['name']);
 
$errinput_arr = array();

 
$errcatch_flag = false;
$username = "";

global $error, $success, $error2;
 

if(isset($_POST['login']))
{
	include("restricted/config/DB_config.php");
 $myName = new Name();
	
	$password =   mysqli_real_escape_string($conn, $_POST['password'] );
$username =   mysqli_real_escape_string($conn, $_POST['username']) ;
$link =   base64_decode(strtr($_POST['link'], '-_,', '+/='));
 
	  $account_number2 = $myName->showName($conn, "SELECT `account_number` FROM  `user_unit` WHERE (`account_number` = '$username' OR `email` = '$username' OR `phone` = '$username') "); 	
 
if(strlen($username) == 0 )
{
$errinput_arr[] = '<div class="notification danger closeable margin-bottom-30">*Username is a reqiured field</div> - '.$username;
$errcatch_flag = true;
}
else if(strlen($password) == 0 )
{
$errinput_arr[] = '<div class="notification danger closeable margin-bottom-30"> *Password is a reqiured field</div>  ';
$errcatch_flag = true;
}
 

if($errcatch_flag)
{
$error =  $errinput_arr;
}
else
{
	//HERE
 $count_times = 0;
	
	  $count_times = $myName->showName($conn, "SELECT `count_times`  FROM `block_users` WHERE  `username` = '$account_number2' "); 
	//echo  "SELECT `count_times`  FROM `block_users` WHERE  `username` = '$account_number2' AND `count_times` <= 3";
	
/*	$query1 =  "SELECT `count_times`  FROM `block_users` WHERE  `username` = '$account_number2'";	
 $extract_distance1 = mysqli_query($conn, $query1) or die(mysqli_error($conn));
		$count1 = mysqli_num_rows($extract_distance1);
    if ($count1 < 0)
		  {*/
 if($count_times < 4 or  $count_times == 0)
 {
	 
 
	  $sql = 	mysqli_query($conn,"UPDATE `block_users` SET `count_times` = '0' WHERE  `username` = '$account_number2'") or die("ERROR OCCURED: ".mysqli_error($conn)); 

$statement = "select * from `user_unit` where (`account_number` = '$username' OR `email` = '$username' OR `phone` = '$username') AND `status` =  1";
	
$result = mysqli_query($conn,$statement) or die("ERROR OCCURED: ".mysqli_error($conn));

if($result)
{
if(mysqli_num_rows($result) == 1)
{
$customer = mysqli_fetch_assoc($result);

$emailing = $customer['account_number'];
$emailAdd  = $customer['email']; 
	$phoneNumber  = $customer['phone']; 
		$account_number = $customer['account_number'];

$lastname  = $customer['name'];
$firstname  = $customer['name']; 
$fullname = $lastname;

$_SESSION['lastname'] = $lastname;
$_SESSION['lastnaming'] = $lastname;

$_SESSION['fullname'] = $fullname;
$password_update = $customer['password_update'];
 $salt = $customer['salt'];
 
$_SESSION['name'] =$fullname;
$_SESSION['naming'] =$fullname;
$_SESSION['email'] = $customer['account_number'];
	
	
	$_SESSION['loginData'] = $username;
	
	
$_SESSION['emailadd'] = $customer['email'];
 $encrypted_password = $customer['encrypted_password'];
	$_SESSION['iss'] = $customer['id'];
	
	$_SESSION['user_unit'] = $customer['id'];
	$_SESSION['service_unit'] = $customer['id'];
	 $usertype =  $customer['usertype'];
$_SESSION['usertype'] = $usertype;
 $_SESSION['account_number'] =$account_number;	
  $hash = base64_encode(sha1($password . $salt, true) . $salt);
  $_SESSION['account_number1'] = $customer['account_number']; 
  
 if ($encrypted_password == $hash and (trim($emailing) == trim($username) or trim($emailAdd) == trim($username) or trim($phoneNumber) == trim($username)) )
   {
	 
	   
	     if($password_update == 1)
	   {
 
	    $pipaddress = "";
	  $ipaddress= "";
	 if (getenv('HTTP_X_FORWARDED_FOR')) {
        $pipaddress = getenv('HTTP_X_FORWARDED_FOR');
        $ipaddress = getenv('REMOTE_ADDR');
 
    } else {
        $ipaddress = getenv('REMOTE_ADDR');
       
    }
	   
  $sql = 	mysqli_query($conn,"INSERT INTO `login_log`(`username`, `ip_address`, `login`, `platform`,`status`) VALUES('$username','$ipaddress','$todaydatefull', 'Web Admin','0')") or die("ERROR OCCURED: ".mysqli_error($conn)); 
	   
	   
	
	
	if(isset($_POST['remember']))
	{
	
	$year = time() + 31536000;
setcookie('remember_me', $_POST['username'], $year);

setcookie('password_me', $_POST['password'], $year);
		
	}
	else if(!isset($_POST['remember'])) {
	if(isset($_COOKIE['remember_me'])) {
		$past = time() - 100;
		setcookie('remember_me', gone, $past);
			setcookie('password_me', gone, $past);
	}
}


 
			 if($link != "")
			 {
				 
				 
				  echo '<meta http-equiv="Refresh" content="0; url='.$link.'"> ';
				 
			 }else if($usertype == 3)
			 {
                 
				 	 echo '<meta http-equiv="Refresh" content="0; url=profile"> ';
				 
			 }else if($usertype == 2)
			 {
                 
				 	 echo '<meta http-equiv="Refresh" content="0; url=account/"> ';
				 
			 }
             else
			 {
				 	 echo '<meta http-equiv="Refresh" content="0; url=restricted/dashboard"> ';
				 
			 }
			 
			  
				 
				 
			 
  

		 
	   }
	   else
	   {
		   
		   echo '<meta http-equiv="Refresh" content="0; url=change-password"> ';
	   }
 
   }
  else
  {
		 $count_times += 1;
		
			
				/*$error2 = '<div class="btn btn-danger btn-lg">
                   Invalid login details.  Please try again.
                
            </div>';   $error2 = '<div class="notification danger closeable margin-bottom-30" role="alert">
		 
		<strong>Ooops!</strong>   Invalid login details.  Please try again.
		 <a class="close" href="#"></a> 
	</div>';
		    */
			
      
      
	   $error2 = ' 
      <div class="row">
        <div class="col-md-12">
          <div class="notification error closeable margin-bottom-30">
            <p><strong>Ooops!</strong>   Invalid login details.  Please try again.</p>
            <a class="close" href="#"></a> 
		  </div>
        </div></div>';	
		   
	  
	  $query =  "SELECT  `id`, `count_times`, `username`, `status`, `created_date`, `registeredby` FROM `block_users` WHERE  `username` = '$account_number2'";	
 
 
 $extract_distance = mysqli_query($conn, $query) or die(mysqli_error($conn));
		$count = mysqli_num_rows($extract_distance);
    if ($count > 0)
		  {
  	  
	  
  $sql = 	mysqli_query($conn,"UPDATE `block_users` SET `count_times` = '$count_times' WHERE  `username` = '$account_number2'") or die("ERROR OCCURED: ".mysqli_error($conn)); 
	   
	}else
	{
		
			  
	  
  $sql = 	mysqli_query($conn,"INSERT INTO `block_users`(`count_times`, `username`, `status`, `created_date`, `registeredby`) VALUES('$count_times','$account_number2','1', '$datetime','$account_number2')") or die("ERROR OCCURED: ".mysqli_error($conn)); 
	   
	}
	  
	  
	  
	  
	  
	  
	  
	  

			
		 
	  }


}
else
{
 
 $count_times += 1;
		 
			
			/*	$error2 = '<div class="btn btn-danger btn-lg">
                   Invalid login details.  Please try again.
                
            </div>'; 
    */
    
         
      /*   $error2 = '<div class="notification danger closeable margin-bottom-30" role="alert">
		 
		<strong>Ooops!</strong>   Invalid login details.  Please try again.
		 <a class="close" href="#"></a> 
	</div>';*/
		   
		 $error2 = ' 
      <div class="row">
        <div class="col-md-12">
          <div class="notification error closeable margin-bottom-30">
            <p><strong>Ooops!</strong>   Invalid login details.  Please try again.</p>
            <a class="close" href="#"></a> 
		  </div>
        </div>';	
		   
	  
	  
	  $query =  "SELECT  `id`, `count_times`, `username`, `status`, `created_date`, `registeredby` FROM `block_users` WHERE  `username` = '$account_number2'";	
 
 
 $extract_distance = mysqli_query($conn, $query) or die(mysqli_error($conn));
		$count = mysqli_num_rows($extract_distance);
    if ($count > 0)
		  {
  	  
	  
  $sql = 	mysqli_query($conn,"UPDATE `block_users` SET `count_times` = '$count_times' WHERE  `username` = '$account_number2'") or die("ERROR OCCURED: ".mysqli_error($conn)); 
	   
	}else
	{
		
			  
	  
  $sql = 	mysqli_query($conn,"INSERT INTO `block_users`(`count_times`, `username`, `status`, `created_date`, `registeredby`) VALUES('$count_times','$account_number2','1', '$datetime','$account_number2')") or die("ERROR OCCURED: ".mysqli_error($conn)); 
	   
	}
	  
}
}

		}
	{

		
		
			
		
			
		
			 
		if( $count_times >= 3)
		{		
	
			
			/*$error2 .= '<div class="btn btn-danger">
                Invalid login details.  Please try again.  Your account is blocked.<br>
				   Please contact the administrator.

                
            </div>';         $error2 = '<div class="alert alert-danger" role="alert">
		<button aria-label="Close" class="close" data-dismiss="alert" type="button">
		   <span aria-hidden="true">&times;</span>
	  </button>
		<strong>Oops!</strong>  Invalid login details.  Please try again.  Your account is blocked.
				   Please contact the administrator.
	</div>'; */
            
    
			  
			
			   
      /*   $error2 = '<div class="notification danger closeable margin-bottom-30" role="alert">
		 
		<strong>Oops!</strong>  Invalid login details.  Please try again.  Your account is blocked.
				   Please contact the administrator.
				    <a class="close" href="#"></a> 
	</div>';*/
		    $error2 = ' 
      <div class="row">
        <div class="col-md-12">
          <div class="notification error closeable margin-bottom-30">
            <p><strong>Oops!</strong>  Invalid login details.  Please try again.  Your account is blocked.
				   Please contact the administrator.</p>
            <a class="close" href="#"></a> 
		  </div>
        </div>';
		   
			
			  $sql = 	mysqli_query($conn,"UPDATE `user_unit` SET `status` = '3' WHERE  `account_number` = '$account_number2'") or die("ERROR OCCURED: ".mysqli_error($conn));  
			
			echo '<meta http-equiv="Refresh" content="10; url=index.php"> ';
		}
		else
		{
				/*	$error2 = '<div class="btn btn-danger">
                   Invalid login details.  Please try again. 3
                
            </div>'; */
			
		}

		
		
	}

//HERE2

}

}
 

?>

