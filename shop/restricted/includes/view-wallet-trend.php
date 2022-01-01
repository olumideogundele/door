 
<?php
include ("config/DB_config.php"); 
 $myName = new Name();
 if(isset($_SESSION['email']))
 {
 $emailing = $_SESSION['email'];
 }
 $query = "";

$account_number = "";

$usertype = $_SESSION['usertype'] ;


if(isset($_GET['account_number']))
{
	$account_number = $_GET['account_number'];
	
 
	
 $query =  "SELECT `id`, `amount`, `account_number`, `registeredby`, `status`, `created_date`, `updated_at`, `tcode`, `remark`  FROM  `e_wallet_trend` WHERE `account_number` = '$account_number'   ORDER BY `id` DESC";	
 
}
else
{
	
	
	


if($usertype != "1")
{
	
 
	
	
	
	 $query =  "SELECT `id`, `amount`, `account_number`, `registeredby`, `status`, `created_date`, `updated_at`, `tcode`, `remark`  FROM  `e_wallet_trend`  WHERE `account_number` = '$emailing' ORDER BY `id` DESC";
	
}
else
{
	
	 $query =  "SELECT `id`, `amount`, `account_number`, `registeredby`, `status`, `created_date`, `updated_at`, `tcode`, `remark`  FROM  `e_wallet_trend` ORDER BY `id` DESC";	
	
	
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
					  		$updated_at =$row_distance[6];
						    $tcode =$row_distance[7];
						 	$remark =$row_distance[8];
		 				 
		 					 
$statusCSS = "";
$statusParam = "";
if($status == 1)
{
 $statusCSS = "badge badge-success m-b-5";
$statusParam = "Successful";
}			
else  if($status == 0)
{
 $statusCSS = "badge badge-danger m-b-5";
$statusParam = "Not Successful";
}
		 //1 active investment
		 //2matured investment
		 //3cashed out investment
		 //0 inactive investment
 
$name = $myName->showName($conn, "SELECT `name` FROM `user_unit` WHERE `account_number` = '$account_number'");
 
		 
echo '<tr>
<td> <strong>'.$name.'</strong> </td>
<td><a href = "#?int='.$id.'"><strong>'.$account_number.'</strong></a></td>
 
<td> &#8358;'.number_format($amount,2).'</td>
 <td>'.$created_date.'</td>
<td>'.$registeredby.'</td>
 <td> <span class="'.$statusCSS.'">'.$statusParam.' </span> </td>
 
  		   
												 
											 
											     
											   
									 
                                            </tr>';	 
	 
}
 
						  
				 	
				 
			 
					}
		   
	 
?>