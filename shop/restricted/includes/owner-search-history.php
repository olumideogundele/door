 
<?php
 
 $myName = new Name();
 if(isset($_SESSION['email']))
 {
 $emailing = $_SESSION['email'];
 } 
     
$super = $myName->showName($conn, "SELECT  `super` FROM `user_unit` WHERE `account_number` = '$emailing'"); 


if($super == 1)
{
    
    if(isset($_GET['status']))
    {
        
       $value =   base64_decode(strtr($_GET['status'], '-_,', '+/='));
        
     
         $query =  "SELECT  `id`, `code`, `loading`, `destination`, `pick_up_date`, `product`, `truck_type`, `truck_capacity`, `status`, `created_date`, `registeredby`,  `amount`, `truck_id`, `truck_owner` FROM `search_result` WHERE `status` = '$value' ORDER BY `id` DESC";
        
    }
    else
    {
        
            $query =  "SELECT  `id`, `code`, `loading`, `destination`, `pick_up_date`, `product`, `truck_type`, `truck_capacity`, `status`, `created_date`, `registeredby`,  `amount`, `truck_id`, `truck_owner` FROM `search_result` ORDER BY `id` DESC";
    }
    

    
}
else
{
     if(isset($_GET['status']))
    {
           $value =   base64_decode(strtr($_GET['status'], '-_,', '+/='));
          $query =  "SELECT  `id`, `code`, `loading`, `destination`, `pick_up_date`, `product`, `truck_type`, `truck_capacity`, `status`, `created_date`, `registeredby`,  `amount`, `truck_id`, `truck_owner` FROM `search_result` WHERE  `truck_owner` = '$emailing' AND `status` = '$value'	ORDER BY `id` DESC"; 
     }else
     {
         
          $query =  "SELECT  `id`, `code`, `loading`, `destination`, `pick_up_date`, `product`, `truck_type`, `truck_capacity`, `status`, `created_date`, `registeredby`,  `amount`, `truck_id`, `truck_owner` FROM `search_result` WHERE  `truck_owner` = '$emailing'	ORDER BY `id` DESC"; 
         
     }
 
  
    
}


$value = "";

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
						   	$truck_owner =$row_distance[13];
         
          
 
         
         
         
           $truck_plate_number = $myName->showName($conn, "SELECT  `truck_plate_number` FROM `truck` WHERE `id` = '$truck_id'"); 
           $truck_type = $myName->showName($conn, "SELECT  `truck_type` FROM `truck` WHERE `id` = '$truck_id'"); 
           $total_capacity = $myName->showName($conn, "SELECT  `total_capacity` FROM `truck` WHERE `id` = '$truck_id'"); 
          
         
         
         $truck_type = $myName->showName($conn, "SELECT `name` FROM `truck_type` WHERE  `id` = '$truck_type'"); 
         $total_capacity = $myName->showName($conn, "SELECT  `capacity` FROM `truck_capacity` WHERE   `id` = '$total_capacity'"); 
         
         $search_value =  	strtr(base64_encode($code),'-_,', '+/=');
     
             $value2 = "";
          $statusCSS = "";
$statusParam = "";
if($status == 1)
{
 $statusCSS = "badge badge-success m-b-5";
$statusParam = "Paid";
}			
else  if($status == 0)
{
 $statusCSS = "badge badge-danger m-b-5";
$statusParam = "Pending";
}else  if($status == 2)
{
 $statusCSS = "badge badge-info m-b-5";
$statusParam = "Waiting Approval";
    
    
   
    
    
}
else  if($status == 3)
{
 $statusCSS= "badge badge-danger m-b-5";
$statusParam = "Rejected Offer";
   
}
 else  if($status == 4)
{
 $statusCSS= "badge badge-success m-b-5";
$statusParam = "Order Accepted";

   
       
   
    
} else  if($status == 5)
{
 $statusCSS= "badge badge-success m-b-5";
$statusParam = "Completed";
   
    
}
         else  if($status == 6)
{
 $statusCSS= "badge badge-success m-b-5";
$statusParam = "Negotiation Approved";
   
    
} 
    else  if($status == 8)
{
 $statusCSS= "badge badge-success m-b-5";
$statusParam = "Trip Started";
   
    
}  else  if($status == 9)
{
 $statusCSS= "badge badge-success m-b-5";
$statusParam = "Trip Ended";
    }
          
    $value = "";
 	 
		  $query1 =  "SELECT `rights` FROM  `privilege` WHERE `account_number` = '$emailing'";	
 $extract_distance1 = mysqli_query($conn, $query1) or die(mysqli_error($conn));
		$count1 = mysqli_num_rows($extract_distance1);
    if ($count1 > 0)
		  {
 	 while ($row_distance1=mysqli_fetch_row($extract_distance1))
    {
  						  	$privilege =$row_distance1[0];
		 
		 
	 
		 
		 
		 if($privilege == "delete")
		 {
			 
			 $value .= '<li> <a class="dropdown-item" onClick="return confirm(\'Are you sure you want to delete?\')" href="?table=search_result&del='.$id.'">Delete</a> </li>';
		 }
	
		  if($privilege == "activate")
		 {
			 
			 $value .= ' <li> <a  class="dropdown-item"   onClick="return confirm(\'Are you sure you want to update?\')" href="?table=search_result&id='.$id.'&columnValue=4&column=status">Approve Offer</a> </li>';
		 }
  
		  if($privilege == "deactivate")
		 {
			 
			  $value .= '<li> <a  class="dropdown-item"   onClick="return confirm(\'Are you sure you want to update?\')" href="?table=search_result&id='.$id.'&columnValue=3&column=status">Reject Offer</a> </li>';
		 }
		 
		 }
	}
		 
		 
 
          if($truck_owner == $emailing)
    {
$value .= '<li> <a  class="dropdown-item"   onClick="return confirm(\'Are you sure you want to update?\')" href="?table=search_result&id='.$id.'&columnValue=3&column=status">Reject Offer</a> </li>';
 $value .= ' <li> <a  class="dropdown-item"   onClick="return confirm(\'Are you sure you want to update?\')" href="?table=search_result&id='.$id.'&columnValue=4&column=status">Approve Offer</a> </li>';
    
    }
    
					  		 
						echo ' <tr>
                 
                        <td><a href = "view-order-details?id='.$id.'&code='.$code.'">'. $code .'</a></td>
                        <td>'. $loading .'</td>
                        <td>'. $destination .'</td>
                        <td>'. $product .'</td>
                        <td>'. $truck_plate_number .'<br>
'. $truck_type.'<br>
('.$total_capacity.')</td>
                     
                        <td>'.number_format($amount, 2).'</td>
                         <td>'. $pick_up_date .'</td>
                          <td><span class="'.$statusCSS.'">'.$statusParam.'</span>   
                        </td>
                         <td> 
                         
                         
                         <div class="btn-group">
														<div class="dropdown">
															<button aria-expanded="false" data-toggle="dropdown" class="btn btn-info dropdown-toggle " type="button">More <span class="caret"></span></button>
															<ul role="menu" class="dropdown-menu">
																'.$value.'
															 
																
															</ul>
														</div>
													</div>
												 
												 
                         
                         </td>
                       
                    </tr>'   ;
         
         
         

          
}
 
						  
		}	
 
			 
		   
	 
?>