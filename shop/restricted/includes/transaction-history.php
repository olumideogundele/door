 
<?php
include ("config/DB_config.php"); 
 $myName = new Name();
 if(isset($_SESSION['email']))
 {
 $emailing = $_SESSION['email'];
 }
 
$query = "";

 	
$usertype = $_SESSION['usertype'] ;											

if(isset($_GET['id']))
{
	$idd = $_GET['id'];
	
	
	
	
	
if($usertype != "1")
{
	$query =  "SELECT `id`, `amount`, `account_number`, `registeredby`, `status`, `created_date`, `tcode` FROM `transactions` WHERE `account_number` = '$idd' AND `account_number` = '$emailing' ORDER BY `id` DESC";	
 
	 
	
}
else
{
	 $query =  "SELECT `id`, `amount`, `account_number`, `registeredby`, `status`, `created_date`, `tcode` FROM `transactions` WHERE `account_number` = '$idd' ORDER BY `id` DESC";	
	  
}
	
	
	
	
	
	
	
	
	
	
}
else
{
	



if($usertype != "1")
{
	
 
	
	 $query =  "SELECT `id`, `amount`, `account_number`, `registeredby`, `status`, `created_date`, `tcode` FROM `transactions` WHERE `account_number` = '$emailing' ORDER BY `id` DESC";
	
}
else
{
	
	  $query =  "SELECT `id`, `amount`, `account_number`, `registeredby`, `status`, `created_date`, `tcode` FROM `transactions` ORDER BY `id` DESC";
	
}


	
		
	
}
 
 $extract_distance = mysqli_query($conn, $query) or die(mysqli_error($conn));
		$count = mysqli_num_rows($extract_distance);
    if ($count > 0)
		  {
 	 while ($row_distance=mysqli_fetch_row($extract_distance))
    {
  						  	$id =$row_distance[0];
		 					$amount =$row_distance[1];
		 					$account_number =$row_distance[2];
						   	$registeredby =$row_distance[3];
		 					$status =$row_distance[4];
						 	$created_date =$row_distance[5];
					   		$tcode =$row_distance[6];
		 					 
 /*<th>Payer</th>
<th>Transaction Code</th>
<th>Amount</th>
<th>Payment Date</th>

SELECT  `name`  FROM `user_unit` WHERE 1
*/
		 
		 
		 $id_product = $myName->showName($conn, "SELECT `name` FROM `user_unit` WHERE `account_number` = '$account_number'"); 
		 
echo '<tr>
 <td><strong> '.$id_product .' </strong></td>
<td>'.$tcode .'</td>
<td>'.number_format($amount, 2) .'</td>
<td> '.$created_date .' </td>
 
 
											     
											   
									 
                                            </tr>';	 
	 
}
 
						  
				 	
				 
			 
					}
		   
	 
?>