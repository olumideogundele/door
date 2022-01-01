<?php
include ("config/DB_config.php"); 
 $myName = new Name();
 if(isset($_SESSION['email']))
 {
 $emailing = $_SESSION['email'];
 }
 
$query = "";

 
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
$leave =  trim(substr_replace($value ,"",-2));


 
$coding = "";


					$min1=$_SESSION['min1']  ;
					  $max1 =  $_SESSION['max1'] ;
					    $category1 = trim($_SESSION['category1']); 
					    $datacategory1= trim($_SESSION['datacategory1']) ;
					   $subcategory1 = trim($_SESSION['subcategory1']) ;
					    
 
 

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
$leave =  trim(substr_replace($value ,"",-2));


$string = "";
$theValue1 = "";
$theValue2 = "";
$max2 = $max1 +1;
$theValue ="";

$theValue ="";

	
 
// {y: '2006', a: 100, b: 90},
  foreach($myArray as $names)
{

	 


 $query =  "SELECT  `title`, sum(shot), `datacategory`, `year` FROM `data_entry` WHERE `year` >= '$min1' AND `year` <= '$max1'  and `datacategory` = '$names' GROUP BY `datacategory`, `year`";
	 
  $extract_distance = mysqli_query($conn, $query) or die(mysqli_error($conn));



		$count = mysqli_num_rows($extract_distance);
    if ($count > 0)
		  {
 	 while ($row_distance=mysqli_fetch_row($extract_distance))
    {
  						   
		 				 
		  
		 					$title =$row_distance[0];
						 
						   	$shot =$row_distance[1];
		
		 $datacategory  =$row_distance[2]; 
		 $year =$row_distance[3];
						 $data_category = $myName->showName($conn, "SELECT `name` FROM `data_category` WHERE  id = '$datacategory'"); 
				 	
		
 
												
												
		 
echo '
 <tr>
                  <td>'.$data_category.' </td><td> '. $year.'</td>
                  <td><span class="badge bg-green">'.number_format($shot, 2).'</span></td>
                </tr>


<tr>

 
 
                     </tr>';	 
							    
							
					 
					 
		 
						   
						   
		 
	 
}
	 
 	 
						  
		}	 	
				 
			 
				 
 


 }
  
 




	 
?>