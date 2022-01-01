<?php	 
 //session_start();

$meter_numbers = "";

		 include("config/DB_config.php");
	if(isset($_POST["transfer"]))
{
	 		
	 
 
	
 
 if(!empty($_POST['transfer'])){
	 
	 
	 
// Loop to store and display values of individual checked checkbox.
foreach($_POST['transfer'] as $selected){

	
	
	//echo $selected." ".$warehouse .""."</br>";
	
	$meter_numbers .= $selected.",";
	
	
	
	
	
	
	
}
}
		
		
		$_SESSION['meter_numbers'] = $meter_numbers;
		
		//echo $meter_numbers;
		 echo '<meta http-equiv="Refresh" content="0; url=update-data-physical.php"> ';
		
		//meter-upvs.php
		
		//echo $_SESSION['meter_numbers'];
}
						
						
 
						
						
	   
			 
?>
