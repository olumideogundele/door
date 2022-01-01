 
<?php
//include ("config/DB_config.php"); 
 $myName = new Name();
 if(isset($_SESSION['email']))
 {
 $emailing = $_SESSION['email'];
 }
  
     /*SELECT  `id`, `code`, `loading`, `destination`, `pick_up_date`, `product`, `truck_type`, `truck_capacity`, `status`, `created_date`, `registeredby`, `longi1`, `lati1`, `longi2`, `lati2`, `distance`, `amount`, `truck_id` FROM `search_result` WHERE  `registeredby` = '$emailing'*/
     
$query =  "SELECT  `id`, `code`, `loading`, `destination`, `pick_up_date`, `product`, `truck_type`, `truck_capacity`, `status`, `created_date`, `registeredby`,  `amount`, `truck_id` FROM `search_result` WHERE  `registeredby` = '$emailing'	ORDER BY `id` DESC";
 
  $extract_distance = mysqli_query($conn, $query) or die(mysqli_error($conn));
		$count = mysqli_num_rows($extract_distance);
    if ($count > 0)
		  {
 	 while ($row_distance=mysqli_fetch_row($extract_distance))
    {
  						  	$id =$row_distance[0];
  						  	$id123 =$row_distance[0];
						   	$code =$row_distance[1];
					  		$loading =$row_distance[2];
					  		$destination =$row_distance[3];
						   	$pick_up_date =$row_distance[4];
					  		$product =$row_distance[5];
					  		$truck_type =$row_distance[6];
						   	$truck_capacity =$row_distance[7];
						   	$status =$row_distance[8];
						   	$created_date =$row_distance[9];
						   	$registeredby =$row_distance[10];
						   	$amount =$row_distance[11];
						   	$truck_id =$row_distance[12];
         
          
         
/*           $loading = $myName->showName($conn, "SELECT  `loading` FROM `search_result` WHERE `code` = '$code'"); 
           $destination = $myName->showName($conn, "SELECT  `destination` FROM `search_result` WHERE `code` = '$code'"); 
           $truck_id = $myName->showName($conn, "SELECT  `truck_id` FROM `search_result` WHERE `code` = '$code'"); 
           $pick_up_date = $myName->showName($conn, "SELECT  `pick_up_date` FROM `search_result` WHERE `code` = '$code'"); */
         
         
         
           $truck_plate_number = $myName->showName($conn, "SELECT  `truck_plate_number` FROM `truck` WHERE `id` = '$truck_id'"); 
           $truck_type = $myName->showName($conn, "SELECT   `truck_type` FROM `truck` WHERE `id` = '$truck_id'"); 
           $total_capacity = $myName->showName($conn, "SELECT  `total_capacity` FROM `truck` WHERE `id` = '$truck_id'"); 
          
         
         
         $truck_type = $myName->showName($conn, "SELECT `name` FROM `truck_type` WHERE  `id` = '$truck_type'"); 
         $total_capacity = $myName->showName($conn, "SELECT  `capacity` FROM `truck_capacity` WHERE   `id` = '$total_capacity'"); 
         
         $search_value =  	strtr(base64_encode($code),'-_,', '+/=');
         $search_value2 =  	strtr(base64_encode($code),'+/=****', '-_,****');
     
            $value_super = ""  ;
          $statusCSS = "";
$statusParam = "";
if($status == 1)
{
 $statusCSS = "label label-success m-b-5";
$statusParam = "Paid";
}			
else  if($status == 0)
{
 $statusCSS = "label label-danger m-b-5";
$statusParam = "Pending";
}else  if($status == 2)
{
 $statusCSS = "label label-danger m-b-5";
$statusParam = "Waiting Approval";
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
       
 $value_super = '<h4><a class="label"   onClick="return confirm(\'Are you sure you want to continue?\')" href="payment-proceed?payment='.$search_value2.'">   <span class="icon fa fa-credit-card">  </span>   <strong>Make Payment </strong> 
(Flutterwaves)</a> </h4><a class="label"   onClick="return confirm(\'Are you sure you want to continue?\')" href="payment-proceed?payment='.$search_value2.'">   <img src="images/RAVE.png" width="150px" height="60px"></a>';
      
   
    
} else  if($status == 5)
{
 $statusCSS= "label label-success m-b-5";
$statusParam = "Completed";
   
    
}
     else  if($status == 6)
{
 $statusCSS= "label label-success m-b-5";
$statusParam = "Negotiation Approved";
   
    
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
                 
                        <td>'. $loading .'</td>
                        <td>'. $destination .'</td>
                        <td>'. $truck_plate_number .'<br>
'. $truck_type.'<br>
('.$total_capacity.')</td>
                     
                        <td>'.number_format($amount, 2).'</td>
                         <td>'. $pick_up_date .'</td>
                          <td><span class="'.$statusCSS.' label-transparent">'.$statusParam.'</span><br>
                          '.$value_super.'
                        
                        </td>
                         <td><a class="label label-info label-transparent"  href="full-trip-information?search='.$search_value.'"> <strong> View Details</strong> </a> </td>
                       
                    </tr>'   ;
         
         
         

          
}
 
						  
		}	
else{
    
    
    echo ' <tr>
               
         
                        
                        
                        <th colspan = "6">No Transaction Available Yet</th>
                         
                    </tr>';
}
				 
			 
			 
		   
	 
?>