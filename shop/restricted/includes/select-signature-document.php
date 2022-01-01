 
<?php
include ("config/DB_config.php"); 
  $myName = new Name();
 if(isset($_SESSION['email']))
 {
 $emailing = $_SESSION['email'];
 }
  $inst_name = "";
$inst_slogan = "";
$query = "";
 
 $query =  "SELECT  `id`, `filecode`, `stakeholder`, `created_date`, `status`, `registeredby` FROM `signature_file` WHERE  `filecode` = '$group_code' AND `status` = 1";	
 
 
 $extract_distance = mysqli_query($conn, $query) or die(mysqli_error($conn));
		$count = mysqli_num_rows($extract_distance);
    if ($count > 0)
		  {
 	 while ($row_distance=mysqli_fetch_row($extract_distance))
    {
  						   $iding =$row_distance[0];
						   $filecode =$row_distance[1];
					  $stakeholder =$row_distance[2];
		
		 				$status =$row_distance[3];
						   $registeredby =$row_distance[4];
				 
					 
						 
					  
 
    $filename = $myName->showName($conn, "SELECT  `filename` FROM `signature` WHERE  `code` = '$stakeholder'"); 
    $name = $myName->showName($conn, "SELECT  `name` FROM `stake_holder` WHERE `account_number` = '$stakeholder'"); 
    $phone = $myName->showName($conn, "SELECT  `phone` FROM `stake_holder` WHERE `account_number` = '$stakeholder'"); 
    $email = $myName->showName($conn, "SELECT  `email` FROM `stake_holder` WHERE `account_number` = '$stakeholder'"); 
    $position = $myName->showName($conn, "SELECT  `position` FROM `stake_holder` WHERE `account_number` = '$stakeholder'"); 
    $position = $myName->showName($conn, "SELECT  `name` FROM `sh_position` WHERE `position` = '$position'"); 
 



echo ' <tr>
      <td>&nbsp;</td>
	  
	  <td colspan = "2" align = "right">  </td>
      <td align = "right" style = "padding-right:100px;">  <img src ="sign/'.$filename.'" width="130px" height = "70px"> <br>
  
<strong>'.$name.'</strong><br>
<em>('.$position.')<br>
'.$phone.'<br>
'.$email.'</em>
</td>
      
      
    </tr>';
 
											 
											     
									 
	 
}
 
						  
				 	
				 
			 
					}
		   
	 
?>