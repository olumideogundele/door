 
<?php
include ("config/DB_config.php"); 
 $myName = new Name();
 if(isset($_SESSION['email']))
 {
 $emailing = $_SESSION['email'];
 }
 
$query = "";

$super = $myName->showName($conn, "SELECT  `super` FROM `user_unit` WHERE `account_number` = '$emailing'"); 
$right = "";
if(isset($_GET['id']))
{
	
	$value = $_GET['id'];
     $value =   base64_decode(strtr($_GET['id'], '-_,', '+/='));

 if($super == '1' or $super == 1)
 {
     
    
     
     
$query =  "SELECT `id`, `account_number`, `fname`, `lname`, `email`, `phone`, `license`, `passport`, `front_view`, `back_view`, `status`, `created_date`, `registeredby` , `license_expiry` FROM `driver`  WHERE `id` = '$value'	ORDER BY `id` DESC";
}
else
{
$query =  "SELECT `id`, `account_number`, `fname`, `lname`, `email`, `phone`, `license`, `passport`, `front_view`, `back_view`, `status`, `created_date`, `registeredby`, `license_expiry` FROM `driver` WHERE `registeredby` = '$emailing' AND `id` = '$value' ORDER BY `id` DESC";
 }
  $extract_distance = mysqli_query($conn, $query) or die(mysqli_error($conn));
		$count = mysqli_num_rows($extract_distance);
    if ($count > 0)
		  {
 	 while ($row_distance=mysqli_fetch_row($extract_distance))
    {
  						  	$id =$row_distance[0];
  						  	$id123 =$row_distance[0];
						   	$account_number =$row_distance[1];
					  		$fname =$row_distance[2];
					  		$lname =$row_distance[3];
						   	$email =$row_distance[4];
					  		$phone =$row_distance[5];
					  		$license =$row_distance[6];
						   	$passport =$row_distance[7];
					  		$front_view =$row_distance[8];
					   		$back_view =$row_distance[9];
                            $status =$row_distance[10];
                            $created_date =$row_distance[11];
                            $registeredby =$row_distance[12];
                            $license_expiry =$row_distance[13];
						   
         
         $irrelivant = $myName->showName($conn, "SELECT  `irrelivant` FROM `user_unit` WHERE `account_number` = '$emailing'"); 
         
         
            $driver_id = 	strtr(base64_encode($id), '+/=', '-_,');
         
         
          $statusCSS = "";
$statusParam = "";
if($status == 1)
{
 $statusCSS = "badge badge-success m-b-5";
$statusParam = "Active";
}			
else  if($status == 0)
{
 $statusCSS = "badge badge-danger m-b-5";
$statusParam = "Pending";
}
  
          
}
 
						  
		}		 	
				 
			 
					}
		   
	 
?>