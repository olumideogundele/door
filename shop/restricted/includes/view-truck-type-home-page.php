 
<?php
 
 
 include("restricted/config/DB_config.php");
$query = "";
 
 $query =  "SELECT  `id`, `name`, `desc`,  `image`  FROM `truck_type`  WHERE `status` =  1 ORDER BY `id` DESC ";	
 $extract_distance = mysqli_query($conn, $query) or die(mysqli_error($conn));
		$count = mysqli_num_rows($extract_distance);
    if ($count > 0)
		  {
 	 while ($row_distance=mysqli_fetch_row($extract_distance))
    {
  						  	$id =$row_distance[0];
						   	$name =$row_distance[1];
					  		$desc =$row_distance[2];
					  		 
					  		$image =$row_distance[3];
					  		 
  
		
echo '<li class="portfolio-item gutter">
                        <div class="portfolio">
                            <div class="tt-overlay"></div>
                            <img src="restricted/'.$image.'" alt="">

                            <div class="portfolio-info">
                                <h3 class="project-title">'.$name.'</h3>
                                <a href="#" class="links">'.$desc.'</a>
                            </div>
                            <!-- /.project-info -->

                            <ul class="portfolio-details">
                                <li><a class="tt-lightbox" href="restricted/'.$image.'"><i class="fa fa-search"></i></a></li>
                                <li><a href="#"><i class="fa fa-external-link"></i></a></li>
                            </ul>
                        </div>
                        <!-- /.portfolio -->
                    </li>';	 
	 
}
 
						  
				 	
				 
			 
					}
else
{
    
    echo'<li class="portfolio-item gutter">
                        <div class="portfolio">
                            <div class="tt-overlay"></div>
                            <img src="images/portfolio/2.jpg" alt="">

                            <div class="portfolio-info">
                                <h3 class="project-title">No Truck Added Yet</h3>
                                <a href="#" class="links"> No truck type information added by the admin yet</a>
                            </div>
                            <!-- /.project-info -->

                            <ul class="portfolio-details">
                                <li><a class="tt-lightbox" href="images/portfolio/2.jpg"><i class="fa fa-search"></i></a></li>
                                <li><a href="#"><i class="fa fa-external-link"></i></a></li>
                            </ul>
                        </div>
                        <!-- /.portfolio -->
                    </li>';
    
}
		   
	 
?>