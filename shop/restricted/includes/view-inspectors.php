 
<?php
include ("config/DB_config.php"); 
 $myName = new Name();
 if(isset($_SESSION['email']))
 {
 $emailing = $_SESSION['email'];
 }
 
$query = "";
 






$usertype = $_SESSION['usertype'] ;

$super = $myName->showName($conn, "SELECT  `super` FROM `user_unit` WHERE `account_number` = '$emailing'"); 
 
	


if($usertype != "1" or $super != "1")
{
	
 
	 $query =  "SELECT `id`, `name`, `account_number`, `phone`, `email`, `address`, `usertype`,`created_date`, `registeredby`, `status`,`irrelivant` ,`designation`, `ministry` ,`state`, `lga` , `branch` FROM `user_unit` WHERE (`account_number` = '$emailing' AND `registeredby` = '$emailing') AND `usertype` = '7'  ORDER BY `id` DESC";
	
	 
	 
}
else 
{
	
	 $query =  "SELECT `id`, `name`, `account_number`, `phone`, `email`, `address`, `usertype`,`created_date`, `registeredby`, `status`,`irrelivant` ,`designation`, `ministry` ,`state`, `lga` , `branch` FROM `user_unit` WHERE (`usertype` = '7') ORDER BY `id` DESC";	
	
	
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
							// ,`state`, `lga` , `branch`
         
         
                            $state  =$row_distance[13];
							$lga  =$row_distance[14];
							$branch  =$row_distance[15];
		
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
 else  if($status == 3)
{
 $statusCSS = "badge badge-danger m-b-5";
$statusParam = "Blocked";
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
		}else if($usertype == 7)
		{
			
				$usertypeValue = "Inspector";
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
		 }  if($privilege == "unblock")
		 {
			 //<a class="dropdown-item" href="#">
			  $value .= ' <a class="dropdown-item"  onClick="return confirm(\'Are you sure you want to update?\')" href="?table=user_unit&id='.$id.'&columnValue=1&column=status&user='.$account_number.'"> Unblock</a> ';
		 }
		 
		 
		 }
	}
		
		 
		$registeredby = $myName->showName($conn, "SELECT `name` FROM  `user_unit` WHERE `account_number` = '$registeredby'");  	
		 
		 
		 
		//$ministryName = $myName->showName($conn, "SELECT `name` FROM  `mda` WHERE `id` = '$ministry'");  		
		 
echo '<tr>
<td><a  href="register-users.php?value='.$id.'""><strong>'.$name.'<br>
('.$account_number.')</strong></a></td>
 <td>'.$phone.'</td>
<td>'.$email.'</td>
 <td>'.$address.' <br>'.$lga_name.'<br> '.$branch_name.'<br>'.$state_name.'</td>
 
 <td>'.$designation.'</td>
<td>'.$usertypeValue.'</td>
<td>'.$created_date.'</td>
<td>'.$registeredby.'</td>
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