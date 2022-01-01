 
<?php
include ("config/DB_config.php"); 
$userT = "";
$usernameT = "";
 $myName = new Name();
 if(isset($_SESSION['email']))
 {
 $emailing = $_SESSION['email'];
	   $userT = $_SESSION['usertype'] ;
 }
 $ministry = "";

if(isset($_GET['file'] ))
{
$id = $_GET['file'] ;	
	

$query = "";

 
	$file = $_GET['file'];
	 
	
	 $query =  "SELECT  `id`, `document_id`, `document_code`, `commenting`, `status`, `created_date`, `registeredby` FROM `document_comment` WHERE  `document_id` = '$file' AND `status` = 1   ORDER BY `id` DESC";	
 $extract_distance = mysqli_query($conn, $query) or die(mysqli_error($conn));
		$count = mysqli_num_rows($extract_distance);
    if ($count > 0)
		  {
 	 while ($row_distance=mysqli_fetch_row($extract_distance))
    {
  						  	$id =$row_distance[0];
		 					$document_id =$row_distance[1];
		 					$document_code =$row_distance[2];
						   	$commenting =$row_distance[3];
		 					$status =$row_distance[4];
					  	   $created_date =$row_distance[5];
						 	$registeredby =$row_distance[6];
					 
		
		
		
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
 	
		 $usernameT = $myName->showName($conn, "SELECT `name` FROM `userfiles` WHERE  `filecode` = '$document_code'"); 
		 
		 
		   
		 
		 
		 $name_cell = $myName->showName($conn, "SELECT `name` FROM `user_unit` WHERE `account_number` = '$registeredby'"); 
		 
	   
 echo(' <div class="cd-timeline__block js-cd-block">
                <div class="cd-timeline__img cd-timeline__img--picture js-cd-img">
                  <img src="backend-admin/assets/images/timeline/cd-icon-picture.svg" alt="Picture">
                </div> <!-- cd-timeline__img -->

                <div class="cd-timeline__content js-cd-content">
                  <h6>  '.$usernameT .'- By:'. $name_cell.'</h6>
                  <p>'.$commenting.'</p>
                
                  <span class="cd-timeline__date">'.$created_date.'</span>
                </div> <!-- cd-timeline__content -->
              </div> ');
	 
}
 }
	else
	{
		 echo(' <div class="cd-timeline__block js-cd-block">
                <div class="cd-timeline__img cd-timeline__img--picture js-cd-img">
                  <img src="backend-admin/assets/images/timeline/cd-icon-picture.svg" alt="Picture">
                </div> <!-- cd-timeline__img -->

                <div class="cd-timeline__content js-cd-content">
                  <h4> No Comment on this file yet!!!</h4>
                  <p>Please check back yet!!!</p>
                
                  <span class="cd-timeline__date"> </span>
                </div> <!-- cd-timeline__content -->
              </div> ');
		
	}
						  
				 	
				 
			 
					}
		   
	 
?>