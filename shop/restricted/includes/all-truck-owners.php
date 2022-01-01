 
<?php
include ("config/DB_config.php"); 
 $myName = new Name();
 if(isset($_SESSION['email']))
 {
 $emailing = $_SESSION['email'];
 }
 
$query = "";
 

$super = $myName->showName($conn, "SELECT  `super` FROM `user_unit` WHERE `account_number` = '$emailing'"); 




$usertype = $_SESSION['usertype'] ;

	if(isset($_GET['type']))
    {
        
        $type = $_GET['type'];
        if($usertype != "1" or $super != "1")
{
        $query =  "SELECT `id`, `name`, `account_number`, `phone`, `email`, `address`, `usertype`,`created_date`, `registeredby`, `status`,`irrelivant` ,`designation`, `ministry` ,`state`, `lga` , `branch` FROM `user_unit` WHERE (`account_number` = '$emailing' AND `registeredby` = '$emailing' AND `truck_owner_type` = '$type') AND `usertype` = '2'  ORDER BY `id` DESC";
        }
        else{
            
         $query =  "SELECT `id`, `name`, `account_number`, `phone`, `email`, `address`, `usertype`,`created_date`, `registeredby`, `status`,`irrelivant` ,`designation`, `ministry` ,`state`, `lga` , `branch` FROM `user_unit` WHERE (`usertype` = '2' AND `truck_owner_type` = '$type') ORDER BY `id` DESC";	    
            
        }
        
    }
else{
 
	if(isset($_GET['id']))
	{
		
		
		
		$id = $_GET['id'];
if($super == "1")
{
	
 
	 $query =  "SELECT `id`, `name`, `account_number`, `phone`, `email`, `address`, `usertype`,`created_date`, `registeredby`, `status`,`irrelivant` ,`designation`, `ministry` FROM `user_unit` WHERE    `usertype` = '2' AND `status` = '$id' ORDER BY `id` DESC";
	
	 
}
else 
{
	
	 $query =  "SELECT `id`, `name`, `account_number`, `phone`, `email`, `address`, `usertype`,`created_date`, `registeredby`, `status`,`irrelivant` ,`designation`, `ministry` FROM `user_unit` WHERE (`super` != 1 AND `usertype` = '2'  AND `registeredby` = '$emailing' AND `status` = '$id') ORDER BY `id` DESC";	
	
	
}

		
	}
else
{
	

	
	


if($super == "1")
{
	
 
	 $query =  "SELECT `id`, `name`, `account_number`, `phone`, `email`, `address`, `usertype`,`created_date`, `registeredby`, `status`,`irrelivant` ,`designation`, `ministry` FROM `user_unit` WHERE    `usertype` = '2' ORDER BY `id` DESC";
	
	 
}
else 
{
	
	 $query =  "SELECT `id`, `name`, `account_number`, `phone`, `email`, `address`, `usertype`,`created_date`, `registeredby`, `status`,`irrelivant` ,`designation`, `ministry` FROM `user_unit` WHERE (`super` != 1 AND `usertype` = '2'  AND `registeredby` = '$emailing') ORDER BY `id` DESC";	
	
	
}

	
	

	}
 





}








 $extract_distance = mysqli_query($conn, $query) or die(mysqli_error($conn));
		$count = mysqli_num_rows($extract_distance);
    if ($count > 0)
		  {
 	 while ($row_distance=mysqli_fetch_row($extract_distance))
    {
  						  	$id =$row_distance[0];
						   	$name =$row_distance[1];
					  		$account_number =$row_distance[2];
					  		$phone =$row_distance[3];
						   	$email =$row_distance[4];
					  		$address =$row_distance[5];
					  		$usertype =$row_distance[6];
						    $created_date =$row_distance[7];
						 	$registeredby =$row_distance[8];
					   		$status =$row_distance[9];
							$irrelivant  =$row_distance[10];
							$designation  =$row_distance[11];
							$ministry  =$row_distance[12];
		
		
		
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
		 else  if($status == 3)
{
 $statusCSS = "badge badge-danger m-b-5";
$statusParam = "Blocked";
}		 else  if($status == 2)
{
 $statusCSS = "badge badge-warning m-b-5";
$statusParam = "Pending";
}
 		
	 
		
		
$value = "";
			 	 
		  $query1 =  "SELECT `rights` FROM  `privilege` WHERE `account_number` = '$emailing'";	
 $extract_distance1 = mysqli_query($conn, $query1) or die(mysqli_error($conn));
		$count1 = mysqli_num_rows($extract_distance1);
    if ($count1 > 0)
		  {
 	 while ($row_distance1=mysqli_fetch_row($extract_distance1))
    {
  						  	$privilege =$row_distance1[0];
		 
		 
	 
		 
		 
		 if($privilege == "delete")
		 {
	
             
             
		  $value .= ' <a class="dropdown-item" onClick="return confirm(\'Are you sure you want to delete?\')" href="?table=user_unit&del='.$id.'">Delete</a> ';
		 }
	
		  if($privilege == "activate")
		 {
			 
		  $value .= '  <a  class="dropdown-item"   onClick="return confirm(\'Are you sure you want to update?\')" href="?table=user_unit&id='.$id.'&columnValue=1&column=status&account_number='.$account_number.'">Activate</a> ';
		 }
  
		  if($privilege == "deactivate")
		 {
			 //<a class="dropdown-item" href="#">
			  $value .= ' <a class="dropdown-item"  onClick="return confirm(\'Are you sure you want to update?\')" href="?table=user_unit&id='.$id.'&columnValue=0&column=status"> Deactivate</a> ';
                $value .= '<li> <a  class="dropdown-item"   onClick="return confirm(\'Are you sure you want to update?\')" href="?table=user_unit&id='.$id.'&columnValue=0&column=password_update&update='.$account_number.'">Reset Passsword</a> </li>';
		 } 
         if($privilege == "unblock")
		 {
			 //<a class="dropdown-item" href="#">
			  $value .= ' <a class="dropdown-item"  onClick="return confirm(\'Are you sure you want to update?\')" href="?table=user_unit&id='.$id.'&columnValue=1&column=status&user='.$account_number.'"> Unblock</a> ';
		 }
		 
		 }
	}
		
      
		 
		 
		$registeredby = $myName->showName($conn, "SELECT `name` FROM  `user_unit` WHERE `account_number` = '$registeredby'");  	
		  $driver_id = 	strtr(base64_encode($id), '+/=', '-_,');
   
          $value .= ' <a class="dropdown-item"  onClick="return confirm(\'Are you sure you want to view details?\')"  href="truck-owner-profile?id='.$driver_id.'"> View Details</a> ';
		 
echo '<tr>
<td><a class="dropdown-item"  href="truck-owner-profile?id='.$driver_id.'"><strong>'.$name.'</strong></a></td>
<td> <a href="?account_number='.$account_number.'">'.$account_number.'</a></td>
<td>'.$phone.'</td>
<td>'.$email.'</td>
 <td>'.$address.'</td>
 
 <td>'.$designation.'</td>
 
<td>'.$created_date.'</td>
 
 <td> <span class="'.$statusCSS.'">'.$statusParam.' </span> </td>
 
  		   
												 <td>
											 <div class="dropdown">
		<button aria-expanded="false" aria-haspopup="true" class="btn ripple btn-primary"
		data-toggle="dropdown" id="dropdownMenuButton" type="button">More <i class="fas fa-caret-down ml-1"></i></button>
		<div  class="dropdown-menu tx-13">
        '.$value.'
			 
		</div>
	</div>
									 
												 
												 
												 
												 
												 
												 
												 
												 
												 
				   
													</td> 
											 
											     
											   
									 
                                            </tr>';	 
	 
}
 
						  
				 	
				 
			 
					}
		   
	 
?>