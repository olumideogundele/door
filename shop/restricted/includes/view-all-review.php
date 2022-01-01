 
<?php
include ("restricted/config/DB_config.php"); 
 $myName = new Name();
 if(isset($_SESSION['email']))
 {
 $emailing = $_SESSION['email'];
 }
 
 
	
 
	 $query =  "SELECT  `id`, `feedback`, `truck_owner`, `registeredby`, `rating`, `status`, `created_at`, `name`, `email` FROM `feedback` WHERE `truck_owner` = '$account_number' ORDER BY `id` DESC";
 
 $extract_distance = mysqli_query($conn, $query) or die(mysqli_error($conn));
		$count = mysqli_num_rows($extract_distance);
    if ($count > 0)
		  {
 	 while ($row_distance=mysqli_fetch_row($extract_distance))
    {
  						  	$id =$row_distance[0];
						   	$feedback =$row_distance[1];
					  		$truck_owner =$row_distance[2];
					  		$registeredby =$row_distance[3];
						   	$rating =$row_distance[4];
					  		$status =$row_distance[5];
					  		$created_at =$row_distance[6];
						    $name =$row_distance[7];
						 	$email =$row_distance[8];
					   		 
 
            /* <li><a href="#"><i class="fa fa-reply"></i> Reply</a></li>*/
         
         echo '<li class="comment">
                                <div class="comment-info">
                                    <img alt="author" src="restricted/'.$inst_logo.'" class="pull-left hidden-xs">
                                    <div class="author-desc">
                                        <div class="author-title">
                                            <strong>Name: '.$name.'</strong>
                                            <ul class="list-inline pull-right">
                                                <li><a href="#">'.$created_at.'</a></li>
                                            
                                            </ul>
                                        </div>
                                        <p>'.$feedback.'</p>
                                    </div>
                                </div>
                               
                            </li>';
         
         
         
         
         
	 
}
 
						  
				 	
				 
			 
					}
		   
	 
?>