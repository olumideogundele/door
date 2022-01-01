 
<?php
include ("config/DB_config.php"); 
 $myName = new Name();
 if(isset($_SESSION['email']))
 {
 $emailing = $_SESSION['email'];
 }

 
$query = "";
 
if(isset($_GET['mda']))
{
$mda = 	$_GET['mda'];
	$query =  "SELECT  `id`, `name`, `phone`, `email`, `username`, `position`, `status`, `created_date`,`registeredby`,`mda` FROM `stake_holder` WHERE `mda` = '$mda'";	
 
}
else
{
$query =  "SELECT  `id`, `name`, `phone`, `email`, `username`, `position`, `status`, `created_date`,`registeredby`,`mda` FROM `stake_holder`";	
 	
}

 
 
 $extract_distance = mysqli_query($conn, $query) or die(mysqli_error($conn));
		$count = mysqli_num_rows($extract_distance);
    if ($count > 0)
		  {
 	 while ($row_distance=mysqli_fetch_row($extract_distance))
    {
  						  $id =$row_distance[0];
						   $name =$row_distance[1];
		 $phone =$row_distance[2];
					  
				  $email =$row_distance[3];
					  
					    $username =$row_distance[4];
						   $position =$row_distance[5];
		 $status =$row_distance[6];
						   
 $created_date =$row_distance[7];	
		$registeredby =$row_distance[8];
		$mda =$row_distance[9];
		   $department = $myName->showName($conn, "SELECT  `name`  FROM `mda`  WHERE `id` = '$mda'"); 
					  
					  
  $positionName = $myName->showName($conn, "SELECT `name` FROM  `sh_position` WHERE  `position` = '$position' AND `mda` = '$mda'"); 
			 

	$statusCSS = "";
$statusParam = "";
if($status == 1)
{
	
	$statusCSS = "badge badge-success m-b-5";
$statusParam = "Active";
}			
else  if($status == 0)
{
	//btn btn-primary btn-block
	$statusCSS = "badge badge-danger m-b-5";
$statusParam = "Not Active";
}

 
 $stage = "";
		
		

if($position == 1)
{
	
	$stage = "First Stage";
}
		else if($position == 2)
		{
			
			$stage = "Second Stage";
			
		}
		else if($position == 3)
		{
			
			$stage = "Third Stage";
		}


 // $registeredby = $myName->showName($conn, "SELECT `name` FROM `user_unit` WHERE `account_number` = '$registeredby'"); 
	
		 
		  $stage = "";
		
		
$registeredby = $myName->showName($conn, "SELECT `name` FROM `user_unit` WHERE `account_number` = '$registeredby'"); 

$stage = $position." Stage";
		 
		 
		 
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
			 
			 $value .= '<li> <a class="dropdown-item" onClick="return confirm(\'Are you sure you want to delete?\')" href="?table=stake_holder&del='.$id.'">Delete</a> </li>';
		 }
	
		  if($privilege == "activate")
		 {
			 
			 $value .= '<li> <a  class="dropdown-item"   onClick="return confirm(\'Are you sure you want to update?\')" href="?table=stake_holder&id='.$id.'&columnValue=1&column=status">Activate</a> </li>';
		 }
  
		  if($privilege == "deactivate")
		 {
			 
			 $value .= '<li> <a class="dropdown-item"  onClick="return confirm(\'Are you sure you want to update?\')" href="?table=stake_holder&id='.$id.'&columnValue=0&column=status"> Deactivate</a>  </li>';
		 }
		 
		 }
	}
		
		 
		 
		 
echo '<tr>
<td>'.$name.' ('.$positionName.')</td>
<td>'.$phone.'</td>
<td>'.$email.'</td>
<td>'.$department.'</td>
 
     </tr>';	 
	 
}
 
						  
				 	
				 
			 
					}
		   
	 
?>