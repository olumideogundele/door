 
<?php
include ("config/DB_config.php"); 
 $myName = new Name();
 if(isset($_SESSION['email']))
 {
 $emailing = $_SESSION['email'];
 }
 
$query = "";
 
 
 $query =  "SELECT   `id`, `uniqid`, `time`, `name`, `email`, `subject`, `body_text`, `body_html` FROM `emails`WHERE `created_by` = '$emailing' ORDER BY `id` DESC";	
 $extract_distance = mysqli_query($conn, $query) or die(mysqli_error($conn));
		$count = mysqli_num_rows($extract_distance);
    if ($count > 0)
		  {
 	 while ($row_distance=mysqli_fetch_row($extract_distance))
    {
  						  	$id =$row_distance[0];
		 					$uniqid =$row_distance[1];
						    $time =$row_distance[2];
					  	    $name =$row_distance[3];
						 	$email =$row_distance[4];
					   		$subject =$row_distance[5];
					   		$body_text =$row_distance[6];
					   		$body_html =$row_distance[7];
					 
		
		
		 
		 
		 
		  
		 
	 
		 
echo '<tr>
 <td><a href = "inbox-details.php?message='.$uniqid.'">'.$subject.'</a></td> 
 <td>'.$name.'<br>
'.$email.'
<td>'.$time.'</td>
   </td> 
  
												 
												 
											 
											  
												
											 
											     
											   
									 
                                            </tr>';	 
	 
}
 
						  
				 	
				 
			 
					}
		   
	 
?>