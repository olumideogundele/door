 
<?php
include ("restricted/config/DB_config.php"); 
 $myName = new Name();
 
$query = "";
 
$right = "";
if(isset($_GET['search']))
{
	$value_super = "";
	$value = $_GET['search'];
	$value89 = $_GET['search'];
     $value =   base64_decode(strtr($_GET['search'], '-_,', '+/='));

  
$query1 =  "SELECT  `id`, `code`, `loading`, `destination`, `pick_up_date`, `product`, `truck_type`, `truck_capacity`, `created_date`, `registeredby`, `distance`, `status`, `amount` FROM `search_result`   WHERE `code` = '$value'	ORDER BY `id` DESC";
 
  
  $extract_distance1 = mysqli_query($conn, $query1) or die(mysqli_error($conn));
		$count1 = mysqli_num_rows($extract_distance1);
    if ($count1 > 0)
		  {
 	 while ($row_distance1=mysqli_fetch_row($extract_distance1))
    {
  						  	$id =$row_distance1[0];
  						  	$id123 =$row_distance1[0];
						   	$code =$row_distance1[1];
					  		$loading =$row_distance1[2];
					  		$destination =$row_distance1[3];
						   	$pick_up_date =$row_distance1[4];
					  		$product =$row_distance1[5];
					  	 $truck_type =$row_distance1[6];
                            $truck_capacity =$row_distance1[7];
                            $created_date =$row_distance1[8];
                            $registeredby =$row_distance1[9];
                            $distance =$row_distance1[10];
                            $status_for_use =$row_distance1[11];
                            $amount_for_use =$row_distance1[12];
			   
         
           $base_fare = $myName->showName($conn, "SELECT  `amount` FROM  `base_fare` WHERE  (`truck_type` = '$truck_type' AND `capacity` = '$truck_capacity' AND `status` = 1)");
		    $price_per_km = $myName->showName($conn, "SELECT  `amount` FROM  `price_per_km` WHERE  (`truck_type` = '$truck_type' AND `capacity` = '$truck_capacity' AND `status` = 1)");
         
      
		    $truck_capacity_charge = $myName->showName($conn, "SELECT  `amount` FROM  `truck_capacity_charge` WHERE  (`truck_type` = '$truck_type' AND `capacity` = '$truck_capacity' AND `status` = 1)");
		 
         $total_price_per_km = $price_per_km * (int)str_replace(',', '', $distance);
 $estimated = $total_price_per_km + $truck_capacity_charge + $base_fare;
 $query =  "UPDATE  `search_result`  SET `amount` = '$estimated'   WHERE `code` = '$value'	ORDER BY `id` DESC";
 
  $extract_distance = mysqli_query($conn, $query) or die(mysqli_error($conn));		
         
         
         
         						 	 
 $statusCSS_for_use= "";
$statusParam_for_use = "";
if($status_for_use == 1)
{
 $statusCSS_for_use= "label label-success m-b-5";
$statusParam_for_use = "Paid";
    
    
    
}			
else  if($status_for_use == 0)
{
 $statusCSS_for_use= "label label-danger m-b-5";
$statusParam_for_use = "Pending";
    
    
  
 
}
  else  if($status_for_use == 2)
{
 $statusCSS_for_use= "label label-success m-b-5";
$statusParam_for_use = "Awaiting Approval";
      
        
   
    
}  else  if($status_for_use == 3)
{
 $statusCSS_for_use= "label label-danger m-b-5";
$statusParam_for_use = "Truck Owner Rejected Offer";
   
    
}  else  if($status_for_use == 4)
{
 $statusCSS_for_use= "label label-success m-b-5";
$statusParam_for_use = "Order Accepted";
      
      $search_value2 =  	strtr(base64_encode($code),'+/=****', '-_,****');
       
/* $value_super = '<h4><a class="label"   onClick="return confirm(\'Are you sure you want to continue?\')" href="payment-proceed?payment='.$search_value2.'">   <span class="icon fa fa-credit-card">  </span>   <strong>Make Payment </strong> 
(Flutterwaves)</a> </h4>'; */
      
      
      
$value_super = '<tr>
                        <td>
                            
                            <div class="contact-container"><strong>Pay with:</strong> </div>
                        </td><td>
                            
                          <a class="label"   onClick="return confirm(\'Are you sure you want to continue?\')" href="payment-proceed?payment='.$search_value2.'">   <img src="images/RAVE.png" width="150px" height="60px"></a>
                        </td>
                    <tr>';
      
   
    
} else  if($status_for_use == 5)
{
 $statusCSS_for_use= "label label-success m-b-5";
$statusParam_for_use = "Completed";
   
    
}
         
         
         
         
         
         
}
 
						  
		}		 	
				 
			 
					}
		   
	 
?>