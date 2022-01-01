 
<?php
include ("config/DB_config.php"); 
 $myName = new Name();
 if(isset($_SESSION['email']))
 {
 $emailing = $_SESSION['email'];
 }
 
$query = "";
 
if(isset($_GET['id']))
{
	
	$value = $_GET['id'];
	
	 if($super == '1' or $super == 1)
							{

 $query =  "SELECT  `id`, `truck`, `driver`, `status`, `created_date`, `registeredby` FROM `driver_truck_attachment` WHERE `status` = '$value' ORDER BY `id` DESC ";	
	 
	  
 }
else
{
	
 $query =  "SELECT  `id`, `truck`, `driver`, `status`, `created_date`, `registeredby` FROM `driver_truck_attachment` WHERE `registeredby` = '$emailing' AND `status` = '$value' ORDER BY `id` DESC ";	
 
	
}



}
else
{
	
	 if($super == '1' or $super == 1)
							{

 $query =  "SELECT  `id`, `truck`, `driver`, `status`, `created_date`, `registeredby` FROM `driver_truck_attachment` ORDER BY `id` DESC ";	
	 
	  
 }
else
{
	
 $query =  "SELECT  `id`, `truck`, `driver`, `status`, `created_date`, `registeredby` FROM `driver_truck_attachment` WHERE `registeredby` = '$emailing' ORDER BY `id` DESC ";	
 
	
}



	
	
}





 $extract_distance = mysqli_query($conn, $query) or die(mysqli_error($conn));
		$count = mysqli_num_rows($extract_distance);
    if ($count > 0)
		  {
 	 while ($row_distance=mysqli_fetch_row($extract_distance))
    {
  						  	$id =$row_distance[0];
						   	$truck =$row_distance[1];
					  		$driver =$row_distance[2];
					  		$status =$row_distance[3];
						   	$created_date =$row_distance[4];
					  		$registeredby =$row_distance[5];
					  	 
						 	 
 $statusCSS = "";
$statusParam = "";
if($status == 1)
{
 $statusCSS = "badge badge-success m-b-5";
$statusParam = "Active";
}			
else  if($status == 0)
{
 $statusCSS = "badge badge-danger m-b-5";
$statusParam = "Not Active";
}
  //`truck_brand`, `truck_plate_number`
 $driver_name = $myName->showName($conn, "SELECT  `name` FROM  `user_unit` WHERE  `account_number` = '$driver'");
 $registeredby = $myName->showName($conn, "SELECT  `name` FROM  `user_unit` WHERE  `account_number` = '$registeredby'");
 $truck_brand = $myName->showName($conn, "SELECT  `truck_brand` FROM  `truck` WHERE  `id` = '$truck'");
 $truck_plate_number = $myName->showName($conn, "SELECT  `truck_plate_number` FROM  `truck` WHERE  `id` = '$truck'");
		
echo '<tr>
<td> <strong>'.$driver_name.'</strong> </td>
<td>'.$registeredby.'</td>
<td>'.$truck_brand.'</td>
<td>'.$truck_plate_number.'</td>
 	 
                                            </tr>';	 
	 
}
 
						  
				 	
				 
			 
					}
		   
	 
?>