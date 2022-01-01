<?php
include ("config/DB_config.php"); 
 $myName = new Name();
 if(isset($_SESSION['email']))
 {
 $emailing = $_SESSION['email'];
 }
 
$query = "";

 
 

 
$coding = "";


	$min1=$_SESSION['min1']  ;
					  $max1 =  $_SESSION['max1'] ;
					    $category1 = trim($_SESSION['category1']); 
					    $datacategory1= trim($_SESSION['datacategory1']) ;
					   $subcategory1 = trim($_SESSION['subcategory1']) ;
					    
 
  
 $query =  "SELECT  `id`, `category`, `subcategory`, `datacategory`, `project_id`, `title`, `state`, `year`, `basin`, `terrain`, `price`, `dimension`, `energy_source`, `shot`, `client`, `contractor`, `comment`, `status`, `created_date`, `registeredby`, `volume`,`volume_value`  FROM `data_entry` WHERE `year` >= '$min1' and `year` <= '$max1' and
`category` = '$category1' and  `subcategory` = '$subcategory1' and `datacategory` = '$datacategory1'   ORDER BY `year`, `title`";
  $extract_distance = mysqli_query($conn, $query) or die(mysqli_error($conn));
		$count = mysqli_num_rows($extract_distance);
    if ($count > 0)
		  {
 	 while ($row_distance=mysqli_fetch_row($extract_distance))
    {
  						   
		 					$id =$row_distance[0];
		 					$category =$row_distance[1];
		 					$subcategory =$row_distance[2];
						   	$datacategory =$row_distance[3];
					  	   $project_id =$row_distance[4];
						 	$title =$row_distance[5];
					   		$state =$row_distance[6];
 							$year =$row_distance[7];
		 					$basin =$row_distance[8];
		 					$terrain =$row_distance[9];
						   	$price =$row_distance[10];
					  	   $dimension =$row_distance[11];
						 	$energy_source =$row_distance[12];
					   		$shot =$row_distance[13];
		 
		 					$client =$row_distance[14];
						 	$contractor =$row_distance[15];
					   		$comment =$row_distance[16];
		 
		 
		 $status =$row_distance[17];
						 	$created_date =$row_distance[18];
					   		$registeredby =$row_distance[19];
		 $volume  =$row_distance[20];
		 $volume_value = $row_distance[21];
		  
		 
		 
		 
		 
		 
		 
		 
		 
		 $categoryName = $myName->showName($conn, "SELECT `name` FROM `category` WHERE id = '$category'"); 
		  $subcategoryName = $myName->showName($conn, "SELECT `name` FROM `sub_category` WHERE id = '$subcategory'"); 
		   $data_category = $myName->showName($conn, "SELECT `name` FROM `data_category` WHERE  id = '$datacategory'"); 
		
		
 
												
												
		 
echo '<tr>
 
 <td>'.$title.'</td>
<td>'.$state.'</td>
<td> '.$year.'  </td>
 <td>'.$basin.'</td>
<td>'.$terrain.'</td>
<td> '.$price.'  </td>
<td>'.$dimension.'</td>
<td>'.$volume_value.'</td>

<td>'.$volume.'</td>

<td>'.$energy_source.'</td>
<td>  '.number_format($shot,2).' </td>
 
                     </tr>';	 
							    
							
					 
					 
		 
						   
						   
		 
	 
}
	 
 	 
						  
		}	 	
				 
			 
				 




 




	 
?>