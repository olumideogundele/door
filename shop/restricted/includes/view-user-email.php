 
<?php
include ("config/DB_config.php"); 
 $myName = new Name();
 if(isset($_SESSION['email']))
 {
 $emailing = $_SESSION['email'];
 }
 
$query = "";

if(isset($_GET['value']))
{
 
	$value = $_GET['value'];
	
 
 $query =  "SELECT  `id`, `account_number`, `email`,`status`, `irrelivant` FROM `email_attachment_management` WHERE `id` = '$value' ";	
 
 $extract_distance = mysqli_query($conn, $query) or die(mysqli_error($conn));
		$count = mysqli_num_rows($extract_distance);
    if ($count > 0)
		  {
 	 while ($row_distance=mysqli_fetch_row($extract_distance))
    {
  						  	$id =$row_distance[0];
						   	$account_number =$row_distance[1];
						   	$email =$row_distance[1];
					  		$status =$row_distance[2];
					  		$irrelivant =$row_distance[3];
		
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
$statusParam = "Inctive";
}
 		
		 
		 
		
	 
	 
}
 
					}	  
				 	
				 
			 
					}
		   
	 
?>