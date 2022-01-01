 
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


 
	

 
	if(isset($_GET['id']))
	{
		
		 $id =   base64_decode(strtr($_GET['id'], '-_,', '+/='));
		
		//$id = $_GET['id'];
if($super == "1")
{
	
 
	 $query =  "SELECT `id`, `name`, `account_number`, `phone`, `email`, `address`, `usertype`,`created_date`, `registeredby`, `status`,`irrelivant` ,`designation`, `ministry` FROM `user_unit` WHERE    `usertype` = '3' AND `status` = '$id' ORDER BY `id` DESC";
	
	 
}
else 
{
	
	 $query =  "SELECT `id`, `name`, `account_number`, `phone`, `email`, `address`, `usertype`,`created_date`, `registeredby`, `status`,`irrelivant` ,`designation`, `ministry` FROM `user_unit` WHERE (`super` != 1 AND `usertype` = '3'  AND `registeredby` = '$emailing' AND `status` = '$id') ORDER BY `id` DESC";	
	
	
}

		
	}
else
{
	

	
	


if($super == "1")
{
	
 
	 $query =  "SELECT `id`, `name`, `account_number`, `phone`, `email`, `address`, `usertype`,`created_date`, `registeredby`, `status`,`irrelivant` ,`designation`, `ministry` FROM `user_unit` WHERE    `usertype` = '3' ORDER BY `id` DESC";
	
	 
}
else 
{
	
	 $query =  "SELECT `id`, `name`, `account_number`, `phone`, `email`, `address`, `usertype`,`created_date`, `registeredby`, `status`,`irrelivant` ,`designation`, `ministry` FROM `user_unit` WHERE (`super` != 1 AND `usertype` = '3'  AND `registeredby` = '$emailing') ORDER BY `id` DESC";	
	
	
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
		 else  if($status == 0)
{
 $statusCSS = "badge badge-danger m-b-5";
$statusParam = "Blocked";
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
			 
			 $value .= '<li> <a class="dropdown-item" onClick="return confirm(\'Are you sure you want to delete?\')" href="?table=user_unit&del='.$id.'">Delete</a> </li>';
		 }
	
		  if($privilege == "activate")
		 {
			 
			 $value .= '<li> <a  class="dropdown-item"   onClick="return confirm(\'Are you sure you want to update?\')" href="?table=user_unit&id='.$id.'&columnValue=1&column=status&account_number='.$account_number.'">Activate</a> </li>';
              
              
                $value .= '<li> <a  class="dropdown-item"   onClick="return confirm(\'Are you sure you want to update?\')" href="?table=user_unit&id='.$id.'&columnValue=0&column=password_update&update='.$account_number.'">Reset Passsword</a> </li>';
		 }
  
		  if($privilege == "deactivate")
		 {
			 
			 $value .= '<li> <a class="dropdown-item"  onClick="return confirm(\'Are you sure you want to update?\')" href="?table=user_unit&id='.$id.'&columnValue=0&column=status"> Deactivate</a>  </li>';
		 }
		 if($privilege == "unblock")
		 {
			 //<a class="dropdown-item" href="#">
			  $value .= ' <a class="dropdown-item"  onClick="return confirm(\'Are you sure you want to update?\')" href="?table=user_unit&id='.$id.'&columnValue=1&column=status&user='.$account_number.'"> Unblock</a> ';
		 }
		 }
	}
		
		 
		$registeredby = $myName->showName($conn, "SELECT `name` FROM  `user_unit` WHERE `account_number` = '$registeredby'");  	
		 
 
		 
echo '<tr>
<td><a  href="register-users.php?value='.$id.'""><strong>'.$name.'</strong></a></td>
<td> <a href="?account_number='.$account_number.'">'.$account_number.'</a></td>
<td>'.$phone.'</td>
<td>'.$email.'</td>
 <td>'.$address.'</td>
 
 <td>'.$designation.'</td>
 
<td>'.$created_date.'</td>
 
 <td> <span class="'.$statusCSS.'">'.$statusParam.' </span> </td>
 
  		   
												 <td>
											 
												 
												 <div class="btn-group mt-40">
											<div class="dropdown">
												<!-- Single button -->
												<button class="btn btn-info dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
												Action
												<span class="caret"></span>
												</button>
												<ul class="dropdown-menu">
												'.$value.'
												</ul>
											</div>
										</div>
												 
												 
												 
											 
											  
												
													
													 
												</div>
											</div>
												 
												 
												 
												 
												 
												 
												 
												 
												 
												 
												 
												 
				   
													</td> 
											 
											     
											   
									 
                                            </tr>';	 
	 
}
 
						  
				 	
				 
			 
					}
		   
	 
?>