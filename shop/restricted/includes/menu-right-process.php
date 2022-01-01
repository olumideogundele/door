<?php	 
//session_start();
 include("config/DB_config.php");
$emailing = "";
   $myName = new Name();

if(isset($_SESSION['menu_user']))
{
$menu_user = $_SESSION['menu_user'];

}



$meter_numbers = "";

		 include("config/DB_config.php");
	if(isset($_POST["transfer"]))
{
	 		

 
 //SELECT `id`, `menu`, `edit_right`, `delete_right`, `update_right`, `created_date`, `registeredby` FROM `menu_rights` WHERE 1
 if(!empty($_POST['transfer'])){
 
 
foreach($_POST['transfer'] as $selected){

	//ALTER TABLE `menu_rights` ADD `user` VARCHAR(30) NULL AFTER `id`;
	 
	
	$super_menu = $myName->showName($conn, "SELECT `super_menu` FROM  `menu` WHERE  `id` = '$selected'"); 
	
	
	
	
	 	 
$sql = 	 "INSERT INTO `menu_rights`(`menu`,`user`, `super`) VALUES
('$selected','$menu_user', '$super_menu')";
 
 $process = mysqli_query($conn, $sql) or die(mysqli_error($conn));
 
	 
}
		
	
	 	if($process)
		{
 echo '<div class="btn btn-success btn-lg">Information Successfully Created.</a></div><br />'; 	 
 }
		else
		{
			
 echo '<div class="btn btn-success btn-lg">Information Submitted Successfully.</a></div><br />';
		}
	 
	 
}
						
						
}
						
						
	   
			 
?>
