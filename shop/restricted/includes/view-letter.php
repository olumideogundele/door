 
<?php
include ("config/DB_config.php"); 
 $myName = new Name();
 if(isset($_SESSION['email']))
 {
 $emailing = $_SESSION['email'];
 $emailadd = $_SESSION['emailadd'];
 }
 
$query = "";

 
 
 $query =  "SELECT `id`,  `title`, `registeredby`, `sent_to`, `status`, `created_at`, `code` FROM `letter` WHERE `registeredby` = '$emailing' or (`sent_to` = '$emailadd' or `sent_to` = '$emailing')";	
 $extract_distance = mysqli_query($conn, $query) or die(mysqli_error($conn));
		$count = mysqli_num_rows($extract_distance);
    if ($count > 0)
		  {
 	 while ($row_distance=mysqli_fetch_row($extract_distance))
    {
  						  	$id =$row_distance[0];
		 					$title =$row_distance[1];
						    $registeredby =$row_distance[2];
					  	    $sent_to =$row_distance[3];
						 	$status =$row_distance[4];
					   		$created_date =$row_distance[5];
					   		$code =$row_distance[6];
					 
		
		
		 
		 
		  $registeredby = $myName->showName($conn, "SELECT `name` FROM `user_unit` WHERE `account_number` = '$registeredby'"); 
		  $sent_to = $myName->showName($conn, "SELECT `name` FROM `user_unit` WHERE `account_number` = '$sent_to'"); 
		 
 		
		 
		  
		 
	 
		 
echo '<tr>
 <td><a href = "prepared-letter?code='.$code.'"> <i aria-hidden="true" class="fa fa-envilope"></i> '.$title.'</a> </td> 
<td>'.$sent_to.'</td>
 

<td> '. $registeredby.' </td> 
<td> '. $created_date.' </td> 
  
												 
												 
											 
											  
												
											 
											     
											   
									 
                                            </tr>';	 
	 
}
 
						  
				 	
				 
			 
					}
		   
	 
?>