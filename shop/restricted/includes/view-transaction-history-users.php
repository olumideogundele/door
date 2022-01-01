 
<?php
//include ("config/DB_config.php"); 
 $myName = new Name();
 if(isset($_SESSION['email']))
 {
 $emailing = $_SESSION['email'];
 }
  
     $value_super  = "";
     
$query =  "SELECT  `id`, `code`, `truck_owner`, `amount`   , `customer`, `status`, `created_date`, `registeredby`, `trip_status` FROM `transaction_information`  WHERE `registeredby` = '$emailing'	ORDER BY `id` DESC";
 
  $extract_distance = mysqli_query($conn, $query) or die(mysqli_error($conn));
		$count = mysqli_num_rows($extract_distance);
    if ($count > 0)
		  {
 	 while ($row_distance=mysqli_fetch_row($extract_distance))
    {
  						  	$id =$row_distance[0];
  						  	$id123 =$row_distance[0];
						   	$code =$row_distance[1];
					  		$truck_owner =$row_distance[2];
					  		$amount =$row_distance[3];
						   	$customer =$row_distance[4];
					  		$status =$row_distance[5];
					  		$created_date =$row_distance[6];
						   	$registeredby =$row_distance[7];
						   	$trip_status =$row_distance[8];
         
         /*SELECT  `id`, `code`, `loading`, `destination`, `pick_up_date`, `product`, `truck_type`, `truck_capacity`, `status`, `created_date`, `registeredby`, `longi1`, `lati1`, `longi2`, `lati2`, `distance`, `amount`, `truck_id` FROM `search_result` WHERE 1*/
         
         
         
         /*SELECT  `id`, `account_number`, `truck_brand`, `year`, `truck_plate_number`, `state`, `total_capacity`, `truck_type`, `calibration_chart`, `road_worthiness_cert`, `commercial_licence`, `git_insurance`, `front_view_1`, `front_view_2`, `side_view_1`, `side_view_2`, `status`, `created_date`, `registeredby`, `driver`, `ccaution`, `extinguisher`, `jacket`, `extratyre`, `hat`, `boot`, `inspector`, `inspection_status`, `code`, `location`, `lati` FROM `truck` WHERE 1*/
         
           $loading = $myName->showName($conn, "SELECT  `loading` FROM `search_result` WHERE `code` = '$code'"); 
           $destination = $myName->showName($conn, "SELECT  `destination` FROM `search_result` WHERE `code` = '$code'"); 
           $truck_id = $myName->showName($conn, "SELECT  `truck_id` FROM `search_result` WHERE `code` = '$code'"); 
           $pick_up_date = $myName->showName($conn, "SELECT  `pick_up_date` FROM `search_result` WHERE `code` = '$code'"); 
         
         
         
           $truck_plate_number = $myName->showName($conn, "SELECT  `truck_plate_number` FROM `truck` WHERE `id` = '$truck_id'"); 
           $truck_type = $myName->showName($conn, "SELECT   `truck_type` FROM `truck` WHERE `id` = '$truck_id'"); 
           $total_capacity = $myName->showName($conn, "SELECT  `total_capacity` FROM `truck` WHERE `id` = '$truck_id'"); 
          
         
         
         $truck_type = $myName->showName($conn, "SELECT `name` FROM `truck_type` WHERE  `id` = '$truck_type'"); 
         $total_capacity = $myName->showName($conn, "SELECT  `capacity` FROM `truck_capacity` WHERE   `id` = '$total_capacity'"); 
         
         $statusParam2 = "";
             
          $statusCSS = "";
          $search_value =  	strtr(base64_encode($code),'-_,', '+/=');
          $udateValue = strtr(base64_encode(2),'-_,', '+/=');
          $udateValue1 = strtr(base64_encode(0),'-_,', '+/=');
$statusParam = "";
  $statusParam1 = "";
if($status == 1)
{
 $statusCSS = "label label-success m-b-5";
$statusParam = "Paid";
//$statusParam1 = '<span class="'.$statusCSS.' label-transparent">Paid/Click to Cancel</span>';
    
    if($trip_status == 1)
    {
        
 $statusParam1 = '<a onClick="return confirm(\'Are you sure you want to update?\')" href=?id='.$search_value.'&columnValue='. $udateValue.'"><span class="'.$statusCSS.' label-transparent">Click if Delivered</span></a></br>';

 $statusParam2 = '<a onClick="return confirm(\'Are you sure you want to update?\')" href=?id='.$search_value.'&columnValue='. $udateValue1.'"><span class="'.$statusCSS.' label-transparent">Click to  Cancel Trip</span></a>';
        
    }

 
    


}			
else if($status == 0)
{
 $statusCSS = "label label-danger m-b-5";
$statusParam = "Not paid";
}else  if($status == 2)
{
 $statusCSS = "label label-danger m-b-5";
$statusParam = "Completed";
}
/* else  if($status == 4)
{
 $statusCSS = "label label-info m-b-5";
$statusParam = "Delivered";
}*/
         else  if($status == 3)
{
 $statusCSSe= "label label-danger m-b-5";
$statusParam = "Truck Owner Rejected Offer";
   
    
}
 else  if($status == 4)
{
 $statusCSS= "label label-success m-b-5";
$statusParam = "Order Accepted";
     
     $search_value2 =  	strtr(base64_encode($code),'+/=****', '-_,****');
       
 $value_super = '<h4><a class="label"   onClick="return confirm(\'Are you sure you want to continue?\')" href="payment-proceed?payment='.$search_value2.'">   <span class="icon fa fa-credit-card">  </span>   <strong>Click to Make Payment </strong> 
(Flutterwaves)</a> </h4>';
      
   
    
} else  if($status == 5)
{
 $statusCSS= "label label-success m-b-5";
$statusParam = "Delivered";
   
    
}
 else  if($status == 6)
{
 $statusCSS= "label label-success m-b-5";
$statusParam = "Cancelled";
   
    
}
else  if($status == 8)
{
 $statusCSS= "label label-success m-b-5";
$statusParam = "Trip Started";
   
    
}  else  if($status == 9)
{
 $statusCSS= "label label-success m-b-5";
$statusParam = "Trip Ended";
    }
            
        
					  		 
						echo ' <tr>
                        <td>'.$code.'</td>
                        <td>'. $loading .'</td>
                        <td>'. $destination .'</td>
                        <td>'. $truck_plate_number .'<br>
'. $truck_type.'<br>
('.$total_capacity.')</td>
                     
                        <td>'.$amount.'</td>
                         <td>'. $pick_up_date .'</td>
                        <td>  <span class="'.$statusCSS.' label-transparent">'.$statusParam.'</span><br>
                          '.$value_super.'<br>
'.$statusParam1 .'<br>
'.$statusParam2 .'<br>
                        
                        </td>
                        
                         <td><a class="label label-info  label-transparent"  href="full-trip-information?search='.$search_value.'"> <strong> Click to View Details</strong> </a> </td>
                    </tr>'   ;
         
         
         

          
}
 
						  
		}	
else{
    
    
    echo ' <tr>
               
         
                        
                        
                        <th colspan = "8">No Transaction Available Yet</th>
                         
                    </tr>';
}
				 
			 
			 
		   
	 
?>