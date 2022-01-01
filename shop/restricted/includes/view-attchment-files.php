 
<?php
include ("config/DB_config.php"); 
 $myName = new Name();
 if(isset($_SESSION['email']))
 {
 $emailing = $_SESSION['email'];
 }
 
$query = "";
 
 
 $query =  "SELECT  `id`, `filepath`, `filename`, `name`, `status`, `created_date`, `created_by` FROM `emailfiles` WHERE `created_by` = '$emailing' ORDER BY `id` DESC";	
 $extract_distance = mysqli_query($conn, $query) or die(mysqli_error($conn));
		$count = mysqli_num_rows($extract_distance);
    if ($count > 0)
		  {
 	 while ($row_distance=mysqli_fetch_row($extract_distance))
    {
  						  	$id =$row_distance[0];
		 					$filepath =$row_distance[1];
						    $filename =$row_distance[2];
					  	    $name =$row_distance[3];
						 	$status =$row_distance[4];
					   		$created_date =$row_distance[5];
					 
		
		
		 
		 
		 
		  
		 
	 
		 
echo '<tr>
 <td>'.$filename.'</td> 
<td><a class="btn btn-info dropdown-toggle" href="download-email.php?file='.$filename.'">Download</a></td>
<td>'.$created_date.'</td>
 

<td>  </td> 
  
												 
												 
											 
											  
												
											 
											     
											   
									 
                                            </tr>';	 
	 
}
 
						  
				 	
				 
			 
					}
		   
	 
?>