 
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
	
 $query =  "SELECT `id`, `name`, `account_number`, `phone`, `email`, `address`, `usertype`,`created_date`, `registeredby`, `status`,`irrelivant`,`ministry`,`designation` ,`branch`,`state` ,`lga` FROM `user_unit` WHERE `id` = '$value' ";	
 
 $extract_distance = mysqli_query($conn, $query) or die(mysqli_error($conn));
		$count = mysqli_num_rows($extract_distance);
    if ($count > 0)
		  {
 	 while ($row_distance=mysqli_fetch_row($extract_distance))
    {
  						  	$id =$row_distance[0];
						   	$name =$row_distance[1];
						   	$naming =$row_distance[1];
					  		$account_number =$row_distance[2];
					  		$phone =$row_distance[3];
						   	$email =$row_distance[4];
					  		$address =$row_distance[5];
					  		$usertype =$row_distance[6];
						    $created_date =$row_distance[7];
						 	$registeredby =$row_distance[8];
					   		$status =$row_distance[9];
							$irrelivant  =$row_distance[10];
							$ministry  =$row_distance[11];
							$designation  =$row_distance[12];
							$branch  =$row_distance[13];
         
                            $state  =$row_distance[14];
							$lga  =$row_distance[15];
		 
		 
		 
		 
		 
		 // $ministry_value = $myName->showName($conn, "SELECT `name` FROM  `mda` WHERE `id` = '$ministry'"); 
		  $branch_name = $myName->showName($conn, "SELECT `name` FROM  `city` WHERE `id` = '$branch'"); 
		  $state_name = $myName->showName($conn, "SELECT  `name` FROM `states` WHERE  `state_id` = '$state'"); 
		  $lga_name = $myName->showName($conn, "SELECT  `local_name` FROM `locals` WHERE `local_id` = '$lga'"); 
		
		
		
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
$statusParam = "Not Active";
}
 		
		$usertypeValue = "";
		if($usertype == 1)
		{
				$usertypeValue = "Super Admin";
			
		}
		else if($usertype == 9)
		{
			
				$usertypeValue = "Department Head";
		}
		else if($usertype == 8)
		{
			
				$usertypeValue = "Normal User";
		}
		
		 
		 
		 
		 $priviled = "";
		 
		 
		 
		  $query1 =  "SELECT   `rights`   FROM `privilege` WHERE `account_number` = '$account_number'";	
	 
 
 $extract_distance1 = mysqli_query($conn, $query1) or die(mysqli_error($conn));
		$count1 = mysqli_num_rows($extract_distance1);
    if ($count1 > 0)
		  {
 	 while ($row_distance1=mysqli_fetch_row($extract_distance1))
    {
  						  	$rights =$row_distance1[0];
		 
		 $priviled .= '<option value='.$rights.' selected>'.$rights.'</option>';	
						  
	}
	}
		 
	 
		 
		 
		 
		
		
		
	 
	 
}
 
					}	  
				 	
				 
			 
					}
		   
	 
?>