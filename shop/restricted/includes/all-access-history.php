 <?php
include ("config/DB_config.php"); 
 $myName = new Name();
 if(isset($_SESSION['email']))
 {
 $emailing = $_SESSION['email'];
 }
 $query = "";


$usertype = $_SESSION['usertype']; 

$filecode = "";


 if(isset($_GET['code']))
 {
	 
	 $filecode = $_GET['code']; 
	 
	 
	 $query1 =  "SELECT  `id`, `filecode`, `created_date`, `created_by`, `type`, `filename` FROM `access_who` WHERE `filecode`  = '$filecode'   ORDER BY `created_by` DESC";
 }
else
{
	
	$query1 =  "SELECT  `id`, `filecode`, `created_date`, `created_by`, `type`, `filename` FROM `access_who`  ORDER BY `created_by` DESC";
}
		  
 
		 
	
	
	
 $extract_distance1 = mysqli_query($conn, $query1) or die(mysqli_error($conn));
		$count1 = mysqli_num_rows($extract_distance1);
    if ($count1 > 0)
		  {
 	 while ($row_distance1=mysqli_fetch_row($extract_distance1))
    {
  						  	$id =$row_distance1[0];
						   	$filecode =$row_distance1[1];
						   	$created_date =$row_distance1[2];
						   	$created_by =$row_distance1[3];
						   	$type =$row_distance1[4];
						   	$filename =$row_distance1[5];
						 
	 $name = $myName->showName($conn, "SELECT  `name`  FROM `userfiles`  WHERE `filecode` = '$filecode' OR `group_code` = '$filecode'"); 
	 $code = $myName->showName($conn, "SELECT  `filecode`  FROM `userfiles`  WHERE `filecode` = '$filecode' OR `group_code` = '$filecode'"); 
	 $downloadedBy = $myName->showName($conn, "SELECT  `name`  FROM `user_unit`  WHERE `account_number` = '$created_by'"); 
 		  
 
if($usertype == 1)
{
		
		 echo '<tr> <td>  '. $created_date .'</td> 
		 <td><strong>'.$name.'<br>
<em>('.$filename.')</em></strong></td>
		 <td><strong>'.$filecode.'</strong></td>
<td> <strong>'.$downloadedBy.'</strong> </td>
  </tr>';	
	}
		 else
		 {
				 echo '<tr>
		 <td colspan = "4"> You are not privileged to view this report.</td>   </tr>';		 
			 
		 }
	 
		  
}		
		 
	 }
		

		 
		 
 
	 
 
						  
				 	
				 
			  
		   
	 
?>