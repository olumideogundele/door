 
<?php
include ("config/DB_config.php"); 
 $myName = new Name();
 if(isset($_SESSION['email']))
 {
 $emailing = $_SESSION['email'];
$usertype = $_SESSION['usertype'] ;
 
 }
 
$query = "";
 
 
 

 
 




 	if($usertype == "1")
					{
 	
	 	$query =  "SELECT  `id`, `mda`,   `foldername`, `registeredby`, `status`, `created_date` FROM `file_directory` WHERE `mda` = '$mdas' ORDER BY `id` DESC";

		
	}
else
{
	
		$query =  "SELECT  `id`, `mda`,   `foldername`, `registeredby`, `status`, `created_date` FROM `file_directory` WHERE `registeredby` = '$emailing'  ORDER BY `id` DESC";

	
	
	
	 
}
 







 $extract_distance = mysqli_query($conn, $query) or die(mysqli_error($conn));
		$count = mysqli_num_rows($extract_distance);
    if ($count > 0)
		  {
 	 while ($row_distance=mysqli_fetch_row($extract_distance))
    {
  						  	$id =$row_distance[0];
		 					$ministry =$row_distance[1];
						    $foldername =$row_distance[2];
					  	    $registeredby =$row_distance[3];
						 	$status =$row_distance[4];
					   		$created_date =$row_distance[5];
					 
		
		
		 
		 
		  $id_value = $myName->showName($conn, "SELECT count(`id`) FROM `userfiles` WHERE `directoryname` = '$id'"); 
		 
 		 $ministry = $myName->showName($conn, "SELECT `name`  FROM `mda`  WHERE `id` = '$ministry'"); 
		 
		  
		 
	 
  
	 
		 
		 echo '<div class="col-12 col-lg-4 col-xl-4">
      <div class="card gradient-primary rounded-0">
             <div class="card-body text-center">
               <h5 class="text-uppercase text-white">'.$foldername.'</h5>
                <div class="icon-box bg-white my-5 mx-auto">
                  <i class="fa fa-folder-o text-dark"></i>
                </div>
                <p class="my-5 text-white">MDA: '.$ministry.'<br>
Number of files: '. $id_value.'</p>
                <a href="view-folder-effect.php?value='.$id.'" class="btn btn-dark btn-round">View More</a>
             </div>
           </div>
        </div>';
		 
		 
		 
		 echo '  <div class="col-12 col-lg-4 col-xl-4">
           <div class="card bubble gradient-rainbow rounded-0">
              <div class="card-body card-block">
                <div class="media align-items-center">
                  <div class="media-body">
                    <p class="mb-0 text-white"><strong>'.$foldername.'</strong></p>
                    <h4 class="mb-0 text-white">Files: '. $id_value.'</h4>
                    <p class="extra-small-font mt-3 mb-0 text-white"">MDA: '.$ministry.' <br>  <a href="view-folder-effect.php?value='.$id.'" class="btn btn-dark btn-round">View More</a></p>
                  </div>
                  <div class="position-relative"><i class="fa fa-folder-o fa-5x text-white"></i></div>
                </div>
              </div>
            </div>
        </div>';
		 
}
 
						  
				 	
				 
			 
					}
		   
	 
?>