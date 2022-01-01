 
<?php
include ("config/DB_config.php"); 
 session_start();
 if(isset($_SESSION['email']))
 {
 $emailing = $_SESSION['email'];
 }
 
$query = "";

 
$coding = "";
 


 

						$min1=$_SESSION['min1']  ;
					  $max1 =  $_SESSION['max1'] ;
$datacategory1 = trim(substr_replace($_SESSION['datacategory1'] ,"",-1)) ;
					    
				
//$datacategory1 

//echo str_replace(",","Peter","Hello world!");

// $datacategory1= trim($_SESSION['datacategory1']) ;
				 $myArray = explode(',', $datacategory1);
/*foreach($myArray as $my_Array){
    echo $my_Array.'<br>';  
}	*/ 
					    
  $value = "";
 foreach($myArray as $names)
{
	 $value .= "`datacategory` = ".$names." or";
	 
 }
$leave =  trim(substr_replace($value ,"",-2)) ;;


$string = "";
$theValue1 = "";
$theValue2 = "";
$max2 = $max1 +1;
$theValue ="";

$theValue ="";

	
 
// {y: '2006', a: 100, b: 90},

 for($a = $min1; $a <= $max1; $a++)
{	 
		 $theValue .= "{Year: '".$a."',";
	
	$theValue2 .= "{y: '".$a."',";
	// print "You are selected $names<br/>";

 	// $theValue .= "{Year: '".$min1."',";
 $query =  "SELECT  `title`, shot FROM `data_entry` WHERE `year` = '$a' and (".$leave.")";
	 
	 
	 //echo $query;
  $extract_distance = mysqli_query($conn, $query) or die(mysqli_error($conn));
		$count = mysqli_num_rows($extract_distance);
    if ($count > 0)
		  {
 	 while ($row_distance=mysqli_fetch_row($extract_distance))
    {
  						   
		 					$title =$row_distance[0];
						 
						   	$shot =$row_distance[1];
							
							    if($title != "")
								{
									$theValue  .= "'".$title."':".$shot.",";	
					$theValue2  .= "'".$title."':".$shot.",";				
									
								}
							
					  
					 
				 
						   
						   
						   
		 
	 
}
		$theValue .="},";
	
		$theValue2 .="},";
 	 
						  
	  	}
				 
			 
					}




 
 echo $theValue2;



 
 	  
 $query =  "SELECT  DISTINCT(`title`) FROM `data_entry` WHERE `year` >= '$min1' AND `year` <= '$max1'";
 
	
  $extract_distance = mysqli_query($conn, $query) or die(mysqli_error($conn));
		$count = mysqli_num_rows($extract_distance);
    if ($count > 0)
		  {
 	 while ($row_distance=mysqli_fetch_row($extract_distance))
    {
  						   
		 					$title =$row_distance[0];
						 
						   
							
						   
				 
						   
				$coding  .= " {
                                    dataField: '".$title."',
                                    symbolType: 'square',

                                    labels:
                                    {
                                        visible: true,
                                       backgroundOpacity: 0.2,
                                      borderOpacity: 0.7,
                                        padding: { left: 5, right: 5, top: 0, bottom: 0 }
                                    }
                                },";
						   
						   
						   
						   
		 
	 
}
	 
 	 
						  
	 	 	
				 
			 
					}






	 
?>























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
					    
 
  
 $query =  "SELECT  `title`, sum(`shot`)  FROM `data_entry` WHERE `year` >= '$min1' and `year` <= '$max1' and
`category` = '$category1' and  `subcategory` = '$subcategory1' and `datacategory` = '$datacategory1' GROUP BY `title`   ORDER BY `year`, `title` ";
  $extract_distance = mysqli_query($conn, $query) or die(mysqli_error($conn));
		$count = mysqli_num_rows($extract_distance);
    if ($count > 0)
		  {
 	 while ($row_distance=mysqli_fetch_row($extract_distance))
    {
  						   
		 					$title =$row_distance[0];
		 					$sum =$row_distance[1];
		 					 
		 
		
 
												
												
		 
echo '
 <tr>
                  <td>'.$title.'</td>
                  <td><span class="badge bg-green">'.number_format($sum, 2).'</span></td>
                </tr>


<tr>

 
 
                     </tr>';	 
							    
							
					 
					 
		 
						   
						   
		 
	 
}
	 
 	 
						  
		}	 	
				 
			 
				 




 




	 
?>