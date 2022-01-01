 
<?php
include ("restricted/config/DB_config.php"); 
 $myName = new Name();
   $radius = $myName->showName($conn, "SELECT  `radius` FROM `radius` WHERE `status` = 1");
         
 
	 
 $query =  "SELECT id,account_number,truck_brand, truck_type,  total_capacity, front_view_1,front_view_2,side_view_1,side_view_2,location,registeredby,
       lati, longi, status, distance
  FROM (
 SELECT 
 z.id,
 z.account_number,
 z.truck_brand,
        z.truck_type,
        z.total_capacity,
		z.front_view_1,
		z.front_view_2,
		z.side_view_1,
		z.side_view_2,
		z.location,
		z.registeredby,
        z.lati, 
		z.longi,
        z.status,
	    p.radius,
        p.distance_unit
                 * DEGREES(ACOS(LEAST(1.0, COS(RADIANS(p.latpoint))
                 * COS(RADIANS(z.lati))
                 * COS(RADIANS(p.longpoint - z.longi))
                
                + SIN(RADIANS(p.latpoint))
                
                 * SIN(RADIANS(z.lati))))) AS distance
  FROM truck AS z
  JOIN (
        SELECT  ".$lat1."  AS latpoint,  ".$long1." AS longpoint,
                ".$radius .".0 AS radius,      111.045 AS distance_unit
    ) AS p ON 1=1
  WHERE  (z.status = '1'  AND z.total_capacity = '".$capacity."' AND z.truck_type = '".$type."') AND z.lati
     BETWEEN p.latpoint  - (p.radius / p.distance_unit)
         AND p.latpoint  + (p.radius / p.distance_unit)
    AND z.longi
     BETWEEN p.longpoint - (p.radius / (p.distance_unit * COS(RADIANS(p.latpoint))))
         AND p.longpoint + (p.radius / (p.distance_unit * COS(RADIANS(p.latpoint))))
 ) AS d
 WHERE distance <= radius
 ORDER BY distance
 LIMIT 300";
	 
 
 

$value1 = "";
	
 $extract_distance = mysqli_query($conn, $query) or die(mysqli_error($conn));
		$count = mysqli_num_rows($extract_distance);
    if ($count > 0)
		  {
 	 while ($row_distance=mysqli_fetch_row($extract_distance))
    {
      				  	  
 
         
         $id =$row_distance[0];
         $_SESSION['truck_id_2'] =$row_distance[0];
						   	$account_number =$row_distance[1];
					  		$truck_brand =$row_distance[2];
					  		$truck_type =$row_distance[3];
						   	$total_capacity =$row_distance[4];
					  		$front_view_1 =$row_distance[5];
					  		$front_view_2 =$row_distance[6];
						   	$side_view_1 =$row_distance[7];
					  		$side_view_2 =$row_distance[8];
					   		$location =$row_distance[9];
					   		$registeredby =$row_distance[10];
					   		$distance_unit =$row_distance[14];
          
         
        
         $truck_owner_type_1 = $myName->showName($conn, "SELECT  `truck_owner_type` FROM  `user_unit` WHERE  `account_number` = '$registeredby' AND `truck_owner_type` = '$truck_owner_type'");
         
          
         if($truck_owner_type == $truck_owner_type_1)
         {
                  
   $km =  trim(substr($dist['distance'],0,-2));
		    $base_fare = $myName->showName($conn, "SELECT  `amount` FROM  `base_fare` WHERE  (`truck_type` = '$truck_type' AND `capacity` = '$total_capacity' AND `status` = 1)");
		    $price_per_km = $myName->showName($conn, "SELECT  `amount` FROM  `price_per_km` WHERE  (`truck_type` = '$truck_type' AND `capacity` = '$total_capacity' AND `status` = 1)");
         
      
		    $truck_capacity_charge = $myName->showName($conn, "SELECT  `amount` FROM  `truck_capacity_charge` WHERE  (`truck_type` = '$truck_type' AND `capacity` = '$total_capacity' AND `status` = 1)");
		 
         $total_price_per_km = $price_per_km *  (int)str_replace(',', '', $km);
         
         $estimated = $total_price_per_km + $truck_capacity_charge + $base_fare;
         
         $total_capacity = $myName->showName($conn, "SELECT  `capacity` FROM `truck_capacity` WHERE `id` = '$total_capacity'"); 
         
          $truck_type = $myName->showName($conn, "SELECT  `name` FROM  `truck_type` WHERE  `id` = '$truck_type'");
          $owner = $myName->showName($conn, "SELECT  `name` FROM  `user_unit` WHERE  `account_number` = '$registeredby'");
         
         $truck_id = 	strtr(base64_encode($id), '+/=', '-_,');
         $code = 	strtr(base64_encode($code), '+/=', '-_,');
 
     
           $trip_count = $myName->showName($conn, "SELECT  COUNT(`code`) FROM  `search_result` WHERE  `truck_id` = '$id' AND `status` = '5'");
		
echo '<div class="col-md-6 col-sm-12 col-xs-12">
                            <div class="news-box">
                                <div class="news-thumb">
                                    <a href="search-result-details?truck='.$truck_id.'&search='.$code.'"><img class="img-responsive" alt="" src="restricted/'.$front_view_1.'" width = "360px" height = "190px"></a>
                                    <div class="date"> <strong>'. $trip_count.'</strong>
<span>Trip(s)</span> </div> 
                                </div>
                                <div class="news-detail">
                                    <h2><a title="" href="search-result-details?truck='.$truck_id.'&search='.$code.'">'.$truck_brand.' ' .$truck_type.' ('.$total_capacity.' tons) </a></h2>
                                    <h2> <i class="fa fa-truck"></i> | '.$truck_type.'.</h2><br>
                                    <i class="icon-map"></i> '.$location.'.
                                   <h4><strong><a title="" href="search-result-details?truck='.$truck_id.'&search='.$code.'">Estimated Amount: &#8358;'.number_format($estimated,2).'</a></strong></h4>
                                    <div class="entry-footer">
                                     
                                        <div class="post-meta">
                                        
                                            <div class="post-admin"> <i class="icon-profile-male"></i><a href="#"><strong>'.$owner.'</strong></a> </div>
                                            <div class="post-comment"> <i class="fa fa-map-marker"></i> <a href="#">'.round($distance_unit, 2).' km</a> </div>
                                           
                                        </div>  
                                        
                                         <div class="post-meta">
                                        
                                            <a href = "search-result-details?truck='.$truck_id.'&search='.$code.'" class="button button1">Details Here</a> 
                                            
                                            <a href = "search-result-details?truck='.$truck_id.'&search='.$code.'&booking='.$code.'" class="button button1">Book Now</a>
                                        </div>
                                      
                                    </div>
                                </div>
                            </div>
                        </div>';
         }
         else
         {
             
             //echo "Not found";
             
             
                  
   $km =  trim(substr($dist['distance'],0,-2));
		    $base_fare = $myName->showName($conn, "SELECT  `amount` FROM  `base_fare` WHERE  (`truck_type` = '$truck_type' AND `capacity` = '$total_capacity' AND `status` = 1)");
		    $price_per_km = $myName->showName($conn, "SELECT  `amount` FROM  `price_per_km` WHERE  (`truck_type` = '$truck_type' AND `capacity` = '$total_capacity' AND `status` = 1)");
         
      
		    $truck_capacity_charge = $myName->showName($conn, "SELECT  `amount` FROM  `truck_capacity_charge` WHERE  (`truck_type` = '$truck_type' AND `capacity` = '$total_capacity' AND `status` = 1)");
		 
         $total_price_per_km = $price_per_km *  (int)str_replace(',', '', $km);
         
         $estimated = $total_price_per_km + $truck_capacity_charge + $base_fare;
         
         $total_capacity = $myName->showName($conn, "SELECT  `capacity` FROM `truck_capacity` WHERE `id` = '$total_capacity'"); 
         
          $truck_type = $myName->showName($conn, "SELECT  `name` FROM  `truck_type` WHERE  `id` = '$truck_type'");
          $owner = $myName->showName($conn, "SELECT  `name` FROM  `user_unit` WHERE  `account_number` = '$registeredby'");
         
         $truck_id = 	strtr(base64_encode($id), '+/=', '-_,');
         $code = 	strtr(base64_encode($code), '+/=', '-_,');
 
     
           $trip_count = $myName->showName($conn, "SELECT  COUNT(`code`) FROM  `search_result` WHERE  `truck_id` = '$id' AND `status` = '5'");
		
echo '<div class="col-md-6 col-sm-12 col-xs-12">
                            <div class="news-box">
                                <div class="news-thumb">
                                    <a href="search-result-details?truck='.$truck_id.'&search='.$code.'"><img class="img-responsive" alt="" src="restricted/'.$front_view_1.'" width = "360px" height = "190px"></a>
                                    <div class="date"> <strong>'. $trip_count.'</strong>
<span>Trip(s)</span> </div> 
                                </div>
                                <div class="news-detail">
                                    <h2><a title="" href="search-result-details?truck='.$truck_id.'&search='.$code.'">'.$truck_brand.' ' .$truck_type.' ('.$total_capacity.' tons) </a></h2>
                                    <h2> <i class="fa fa-truck"></i> | '.$truck_type.'</h2><br>
                                    <i class="icon-map"></i> '.$location.'.
                                   <h4><strong><a title="" href="search-result-details?truck='.$truck_id.'&search='.$code.'">Estimated Amount: &#8358;'.number_format($estimated,2).'</a></strong></h4>
                                    <div class="entry-footer">
                                     
                                        <div class="post-meta">
                                        
                                            <div class="post-admin"> <i class="icon-profile-male"></i><a href="#"><strong>'.$owner.'</strong></a> </div>
                                            <div class="post-comment"> <i class="fa fa-map-marker"></i> <a href="#">'.round($distance_unit, 2).' km</a> </div>
                                           
                                        </div>  
                                        
                                         <div class="post-meta">
                                        
                                            <a href = "search-result-details?truck='.$truck_id.'&search='.$code.'" class="button button2">Details Here</a>
                                             <a href = "search-result-details?truck='.$truck_id.'&search='.$code.'&booking='.$code.'" class="button button1">Book Now</a>
                                        </div>
                                      
                                    </div>
                                </div>
                            </div>
                        </div>';
             
             
             
         }
    	 
	 
}
 
						  
				 	
				 
			 
					}
else
{
  
 $query =  "SELECT id,account_number,truck_brand, truck_type,  total_capacity, front_view_1,front_view_2,side_view_1,side_view_2,location,registeredby,
       lati, longi, distance
  FROM (
 SELECT 
 z.id,
 z.account_number,
 z.truck_brand,
        z.truck_type,
        z.total_capacity,
		z.front_view_1,
		z.front_view_2,
		z.side_view_1,
		z.side_view_2,
		z.location,
		z.registeredby,
        z.lati, 
		z.longi,
	    p.radius,
        p.distance_unit
                 * DEGREES(ACOS(LEAST(1.0, COS(RADIANS(p.latpoint))
                 * COS(RADIANS(z.lati))
                 * COS(RADIANS(p.longpoint - z.longi))
                
                + SIN(RADIANS(p.latpoint))
                
                 * SIN(RADIANS(z.lati))))) AS distance
  FROM truck AS z
  JOIN (
        SELECT  ".$lat1."  AS latpoint,  ".$long1." AS longpoint,
                ".$radius .".0 AS radius,      111.045 AS distance_unit
    ) AS p ON 1=1
  WHERE  (z.status = '1'  AND z.total_capacity = '".$capacity."' AND z.truck_type = '".$type."') AND z.lati
     BETWEEN p.latpoint  - (p.radius / p.distance_unit)
         AND p.latpoint  + (p.radius / p.distance_unit)
    AND z.longi
     BETWEEN p.longpoint - (p.radius / (p.distance_unit * COS(RADIANS(p.latpoint))))
         AND p.longpoint + (p.radius / (p.distance_unit * COS(RADIANS(p.latpoint))))
 ) AS d
 ORDER BY distance
 LIMIT 30000";
	 
 
 

$value1 = "";
	
 $extract_distance = mysqli_query($conn, $query) or die(mysqli_error($conn));
		$count = mysqli_num_rows($extract_distance);
    if ($count > 0)
		  {
 echo '<div class="btn btn-success btn-lg">Unfortunately We could not find a truck for your search. <br>
Here  are so other trucks that mighty likely meet your need.  .</a></div>'; 
 	 while ($row_distance=mysqli_fetch_row($extract_distance))
    {
      				  	  
 
         
                            $id =$row_distance[0];
						   	$account_number =$row_distance[1];
					  		$truck_brand =$row_distance[2];
					  		$truck_type =$row_distance[3];
						   	$total_capacity =$row_distance[4];
					  		$front_view_1 =$row_distance[5];
					  		$front_view_2 =$row_distance[6];
						   	$side_view_1 =$row_distance[7];
					  		$side_view_2 =$row_distance[8];
					   		$location =$row_distance[9];
					   		$registeredby =$row_distance[10];
					   		$distance_unit =$row_distance[14];
          
         $km =  trim(substr($dist['distance'],0,-2));
 
		    $base_fare = $myName->showName($conn, "SELECT  `amount` FROM  `base_fare` WHERE  (`truck_type` = '$truck_type' AND `capacity` = '$total_capacity' AND `status` = 1)");
		    $price_per_km = $myName->showName($conn, "SELECT  `amount` FROM  `price_per_km` WHERE  (`truck_type` = '$truck_type' AND `capacity` = '$total_capacity' AND `status` = 1)");
         
      
		    $truck_capacity_charge = $myName->showName($conn, "SELECT  `amount` FROM  `truck_capacity_charge` WHERE  (`truck_type` = '$truck_type' AND `capacity` = '$total_capacity' AND `status` = 1)");
		 
       $total_price_per_km = $price_per_km * (int)str_replace(',', '', $km);//floatval($km);
         
        
         
         $estimated = $total_price_per_km + $truck_capacity_charge + $base_fare;
         
         $total_capacity = $myName->showName($conn, "SELECT  `capacity` FROM `truck_capacity` WHERE `id` = '$total_capacity'"); 
         
          $truck_type = $myName->showName($conn, "SELECT  `name` FROM  `truck_type` WHERE  `id` = '$truck_type'");
          $owner = $myName->showName($conn, "SELECT  `name` FROM  `user_unit` WHERE  `account_number` = '$registeredby'");
         
         $truck_id = 	strtr(base64_encode($id), '+/=', '-_,');
         $code = 	strtr(base64_encode($code), '+/=', '-_,');
 
 
         //NUMBER OF SUCCESSFUL TRIPS
         
         //$query =  "SELECT  `id`, `code`, `truck_owner`, `commissiononfee`, `message`, `owners_share`, `loadme_share`, `customer`, `status`, `created_date`, `registeredby`, `amount`,`trip_status`,`cashed` FROM `transaction_information` WHERE (`status` = 2  OR `status` = 1)  ORDER BY `id` DESC LIMIT 5";
         
           $trip_count = $myName->showName($conn, "SELECT  COUNT(`code`) FROM  `search_result` WHERE  `truck_id` = '$id' AND `status` = '5'");
          // $owner = $myName->showName($conn, "SELECT  COUNT(`id`) FROM  `transaction_information` WHERE  `account_number` = '$registeredby'");
		
echo '<div class="col-md-6 col-sm-12 col-xs-12">
                            <div class="news-box">
                                <div class="news-thumb">
                                    <a href="search-result-details?truck='.$truck_id.'&search='.$code.'"><img class="img-responsive" alt="" src="restricted/'.$front_view_1.'" width = "360px" height = "190px"></a>
                                    <div class="date"> <strong>'.$trip_count.'</strong>
<span>Trip(s)</span> </div> 
                                </div>
                                <div class="news-detail">
                                    <h2><a title="" href="search-result-details?truck='.$truck_id.'&search='.$code.'">'.$truck_brand.' ' .$truck_type.' ('.$total_capacity.' tons) </a></h2>
                                    <h2> <i class="fa fa-truck"></i> | '.$truck_type.'</h2><br>
                                    <i class="icon-map"></i> '.$location.'.
                                   <h4><strong><a title="" href="search-result-details?truck='.$truck_id.'&search='.$code.'">Estimated Amount: &#8358;'.number_format($estimated,2).'</a></strong></h4>
                                    <div class="entry-footer">
                                        <div class="post-meta">
                                        
                                            <div class="post-admin"> <i class="icon-profile-male"></i><a href="#"><strong>'.$owner.'</strong></a> </div>
                                            <div class="post-comment"> <i class="fa fa-map-marker"></i> <a href="#">'.round($distance_unit,2).' km</a> </div>
                                           
                                            <div class="post-meta">
                                        
                                            <a href = "search-result-details?truck='.$truck_id.'&search='.$code.'" class="button button2">Details Here</a>
                                             <a href = "search-result-details?truck='.$truck_id.'&search='.$code.'&booking='.$code.'" class="button button1">Book Now</a>
                                        </div>
                                           
                                           
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>';	 
	 // <div class="post-like"> <i class="icon-heart"></i> <a href="#">130</a> </div>
}
 
						  
				 	
				 
			 
					}
    else{
        
 $query =  "SELECT id,account_number,truck_brand, truck_type,  total_capacity, front_view_1,front_view_2,side_view_1,side_view_2,location,registeredby,
       lati, longi, distance
  FROM (
 SELECT 
 z.id,
 z.account_number,
 z.truck_brand,
        z.truck_type,
        z.total_capacity,
		z.front_view_1,
		z.front_view_2,
		z.side_view_1,
		z.side_view_2,
		z.location,
		z.registeredby,
        z.lati, 
		z.longi,
	    p.radius,
        p.distance_unit
                 * DEGREES(ACOS(LEAST(1.0, COS(RADIANS(p.latpoint))
                 * COS(RADIANS(z.lati))
                 * COS(RADIANS(p.longpoint - z.longi))
                
                + SIN(RADIANS(p.latpoint))
                
                 * SIN(RADIANS(z.lati))))) AS distance
  FROM truck AS z
  JOIN (
        SELECT  ".$lat1."  AS latpoint,  ".$long1." AS longpoint,
                900.0 AS radius,      111.045 AS distance_unit
    ) AS p ON 1=1
  WHERE  (z.status = '1'  AND z.total_capacity = '".$capacity."' AND z.truck_type = '".$type."') AND z.lati
     BETWEEN p.latpoint  - (p.radius / p.distance_unit)
         AND p.latpoint  + (p.radius / p.distance_unit)
    AND z.longi
     BETWEEN p.longpoint - (p.radius / (p.distance_unit * COS(RADIANS(p.latpoint))))
         AND p.longpoint + (p.radius / (p.distance_unit * COS(RADIANS(p.latpoint))))
 ) AS d
 ORDER BY distance
 LIMIT 30000";
	 
 
 

$value1 = "";
	
 $extract_distance = mysqli_query($conn, $query) or die(mysqli_error($conn));
		$count = mysqli_num_rows($extract_distance);
    if ($count > 0)
		  {
 echo '<div class="btn btn-success btn-lg">Unfortunately We could not find a truck for your search. <br>
Here  are so other trucks that mighty likely meet your need.</a></div>'; 
 	 while ($row_distance=mysqli_fetch_row($extract_distance))
    {
      				  	  
 
         
                            $id =$row_distance[0];
						   	$account_number =$row_distance[1];
					  		$truck_brand =$row_distance[2];
					  		$truck_type =$row_distance[3];
						   	$total_capacity =$row_distance[4];
					  		$front_view_1 =$row_distance[5];
					  		$front_view_2 =$row_distance[6];
						   	$side_view_1 =$row_distance[7];
					  		$side_view_2 =$row_distance[8];
					   		$location =$row_distance[9];
					   		$registeredby =$row_distance[10];
					   		$distance_unit =$row_distance[14];
          
         $km =  trim(substr($dist['distance'],0,-2));
 
		    $base_fare = $myName->showName($conn, "SELECT  `amount` FROM  `base_fare` WHERE  (`truck_type` = '$truck_type' AND `capacity` = '$total_capacity' AND `status` = 1)");
		    $price_per_km = $myName->showName($conn, "SELECT  `amount` FROM  `price_per_km` WHERE  (`truck_type` = '$truck_type' AND `capacity` = '$total_capacity' AND `status` = 1)");
         
      
		    $truck_capacity_charge = $myName->showName($conn, "SELECT  `amount` FROM  `truck_capacity_charge` WHERE  (`truck_type` = '$truck_type' AND `capacity` = '$total_capacity' AND `status` = 1)");
		 
       $total_price_per_km = $price_per_km * (int)str_replace(',', '', $km);//floatval($km);
         
        
         
         $estimated = $total_price_per_km + $truck_capacity_charge + $base_fare;
         
         $total_capacity = $myName->showName($conn, "SELECT  `capacity` FROM `truck_capacity` WHERE `id` = '$total_capacity'"); 
         
          $truck_type = $myName->showName($conn, "SELECT  `name` FROM  `truck_type` WHERE  `id` = '$truck_type'");
          $owner = $myName->showName($conn, "SELECT  `name` FROM  `user_unit` WHERE  `account_number` = '$registeredby'");
         
         $truck_id = 	strtr(base64_encode($id), '+/=', '-_,');
         $code = 	strtr(base64_encode($code), '+/=', '-_,');
 
 
         //NUMBER OF SUCCESSFUL TRIPS
         
         //$query =  "SELECT  `id`, `code`, `truck_owner`, `commissiononfee`, `message`, `owners_share`, `loadme_share`, `customer`, `status`, `created_date`, `registeredby`, `amount`,`trip_status`,`cashed` FROM `transaction_information` WHERE (`status` = 2  OR `status` = 1)  ORDER BY `id` DESC LIMIT 5";
         
           $trip_count = $myName->showName($conn, "SELECT  COUNT(`code`) FROM  `search_result` WHERE  `truck_id` = '$id' AND `status` = '5'");
          // $owner = $myName->showName($conn, "SELECT  COUNT(`id`) FROM  `transaction_information` WHERE  `account_number` = '$registeredby'");
		
echo '<div class="col-md-6 col-sm-12 col-xs-12">
                            <div class="news-box">
                                <div class="news-thumb">
                                    <a href="search-result-details?truck='.$truck_id.'&search='.$code.'"><img class="img-responsive" alt="" src="restricted/'.$front_view_1.'" width = "360px" height = "190px"></a>
                                    <div class="date"> <strong>'.$trip_count.'</strong>
<span>Trip(s)</span> </div> 
                                </div>
                                <div class="news-detail">
                                    <h2><a title="" href="search-result-details?truck='.$truck_id.'&search='.$code.'">'.$truck_brand.' ' .$truck_type.' ('.$total_capacity.' tons) </a></h2>
                                    <h2> <i class="fa fa-truck"></i> | '.$truck_type.'</h2><br>
                                    <i class="icon-map"></i> '.$location.'.
                                   <h4><strong><a title="" href="search-result-details?truck='.$truck_id.'&search='.$code.'">Estimated Amount: &#8358;'.number_format($estimated,2).'</a></strong></h4>
                                    <div class="entry-footer">
                                        <div class="post-meta">
                                        
                                            <div class="post-admin"> <i class="icon-profile-male"></i><a href="#"><strong>'.$owner.'</strong></a> </div>
                                            <div class="post-comment"> <i class="fa fa-map-marker"></i> <a href="#">'.round($distance_unit,2).' km</a> </div>
                                           
                                            <div class="post-meta">
                                        
                                            <a href = "search-result-details?truck='.$truck_id.'&search='.$code.'" class="button button2">Details Here</a>
                                             <a href = "search-result-details?truck='.$truck_id.'&search='.$code.'&booking='.$code.'" class="button button1">Book Now</a>
                                        </div>
                                           
                                           
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>';	 
	 // <div class="post-like"> <i class="icon-heart"></i> <a href="#">130</a> </div>
}
 
						  
				 	
				 
			 
					}
        else
        {
            
            
         echo '<div class="col-md-6 col-sm-12 col-xs-12">
                            <div class="news-box">
                                <div class="news-thumb">
                                    <a href="#"><img class="img-responsive" alt="" src="restricted/'.$inst_logo.'" width = "360px" height = "190px"></a>
                                    <div class="date"> <strong>0</strong>
<span>Search</span> </div> 
                                </div>
                                <div class="news-detail">
                                    <h2><a title="" href="#">No Truck Found for</a></h2>
                                   <h4><a title="" href="#"> No Result Found For Your Search Yet!</h4>
                                    <div class="entry-footer">
                                        <button type="submit" id="send" class="btn btn-primary">Contact Us For Help</button>
                                    </div>
                                </div>
                            </div>
                        </div>';
        }
        
    }
   
}
		   
	 
?>