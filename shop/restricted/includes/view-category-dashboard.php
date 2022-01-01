 
<?php
include ("config/DB_config.php"); 
 $myName = new Name();
 if(isset($_SESSION['email']))
 {
 $emailing = $_SESSION['email'];
 }
 
$query = "";

 
 
 $query =  "SELECT `id`, `name`,  `created_date`,`registeredby`, `status` FROM `category` ORDER BY `id` ASC";	
 $extract_distance = mysqli_query($conn, $query) or die(mysqli_error($conn));
		$count = mysqli_num_rows($extract_distance);
    if ($count > 0)
		  {
 	 while ($row_distance=mysqli_fetch_row($extract_distance))
    {
  						  	$id =$row_distance[0];
						   	$name =$row_distance[1];
					  	   $created_date =$row_distance[2];
						 	$registeredby =$row_distance[3];
					   		$status =$row_distance[4];
						 
		
		
		
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
 		 
	  $categoryCount = $myName->showName($conn, "SELECT COUNT(`id`) FROM `data_entry` WHERE `category` = '$id'"); 
		
		 
		 
		 echo '  <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3>'. $categoryCount .'<sup style="font-size: 20px"> </sup></h3>

              <p>'.$name.'</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>';
		 
		 
		 
		 
		 
	  
	 
}
 
						  
				 	
				 
			 
					}
		   
	 
?>