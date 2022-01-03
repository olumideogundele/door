

<?php
session_start(); 
 $user = "";
	 $today=date("Y-m-d"); 

	 $todaydatefull=  date('Y-m-d G:i:s');
// Initialize the session.
// If you are using session_name("something"), don't forget it now!

$url = strtr(base64_encode("/"), '+/=', '-_,');;
if(isset($_SERVER['HTTP_REFERER']))
{
	
	$url =  strtr(base64_encode($_SERVER['HTTP_REFERER']), '+/=', '-_,');
	
}
	 






if(isset($_SESSION['loginData']))
{
$user = $_SESSION['loginData'];
}
// Unset all of the session variables.
$_SESSION = array();

// If it's desired to kill the session, also delete the session cookie.
// Note: This will destroy the session, and not just the session data!
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}

// Finally, destroy the session.
session_destroy();
?>
<?php
 
  include("../config/DB_config.php");
   mysqli_query($conn,"UPDATE `login_log` SET `logout` = '$todaydatefull' , `status` = 1 WHERE `username` = '$user' AND `status` = 0 AND `login` >= '".$today."%'") or die("ERROR OCCURED: ".mysqli_error($conn)); 



//echo "UPDATE `login_log` SET `logout` = '$todaydatefull' , `status` = 1 WHERE `username` = '$user' AND `status` = 0 AND `login` >= '".$today."%'";
 
//getting logout time
$logoutTime = date("Y-m-d g:i:s");

$_SESSION = array();

if (isset($_COOKIE['idCookie'])) {
    setcookie("idCookie", '', time()-42000, '/');
	setcookie("passCookie", '', time()-42000, '/');
}
 
if (!isset($_SESSION))
  {
    session_destroy(); 
  }

if(!isset($_SESSION['email'])){ 
	
	

 
 
	

 
	
	
 echo '<meta http-equiv="Refresh" content="0; url=../../sign-in?login=successful&link='.$url.'"> ';

 


} else {
print "<h2>Could not log you out, sorry the system encountered an error.</h2>";
exit();
} 
?> 


