<?php	 
 
		 //include("config/DB_config.php");
	if(isset($_GET["del"]))
{
	$id = $_GET["del"];
	$TableName = $_GET["table"];
	
	
	 
	

$DELsql = 	mysqli_query($conn,"DELETE FROM `".$TableName."` WHERE `id` = '$id'") or die("ERROR OCCURED: ".mysqli_error($conn));
			
			
			if($DELsql)
			{
				
				if($TableName == "electric_commission_sharing")
				{
					$DELsql = 	mysqli_query($conn,"DELETE FROM `electric_commission_sharing_2` WHERE `id` = '$id'") or die("ERROR OCCURED: ".mysqli_error($conn));
			
					
				}
				
				
				echo '<div class="alert alert-success"> <span class="vd_alert-icon"><i class="fa fa-check-circle vd_green"></i></span><strong>Well done!</strong> Information Deleted Successfully. </div>';
					 //echo '<span class="label label-success"></span>';
				 
				 
				 
				  echo '<meta http-equiv="Refresh" content="3; url='.$_SERVER['HTTP_REFERER'].'"> ';
				
			}
			else
			{
		  
					
					//	echo '<span class="label label-danger">Not successfully created. Thank you.</span>';
						echo '<div class="alert alert-danger"> <span class="vd_alert-icon"><i class="fa fa-exclamation-circle vd_red"></i></span><strong>Oh snap!</strong> Not successfully deleted. Try again later or contact the administrator. </div>';
						
						 echo '<meta http-equiv="Refresh" content="3; url='.$_SERVER['HTTP_REFERER'].'"> ';
			}
 
}
?>