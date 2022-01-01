 
<?php
include ("config/DB_config.php"); 
 $myName = new Name();
 if(isset($_SESSION['email']))
 {
 $emailing = $_SESSION['email'];
 }


$query = "";
 
 $query =  "SELECT `id`, `name`, `super_menu`,`desc_text` FROM `menu` WHERE `status` = 1 AND `super_menu` = 'super' ORDER BY `name` ASC";	
 
 
 $extract_distance = mysqli_query($conn, $query) or die(mysqli_error($conn));
		$count = mysqli_num_rows($extract_distance);
    if ($count > 0)
		  {
 	 while ($row_distance=mysqli_fetch_row($extract_distance))
    { 
					  
 $id = $row_distance[0];
$name = $row_distance[1];
$super_menu = $row_distance[2];
$desc_text = $row_distance[3];
		
 $menuValue = "Sub Menu -> ".$super_menu;
 if($super_menu == 'super')
 {
	 $menuValue = "Main Menu";
	 
 }
		
		echo '<tr>
<td><input type="checkbox" value = '.$id.'  name = "transfer[]"    id = "checkbox">	</td>
<td><strong>---'.$name.'---</strong><br>
<em>'.$desc_text.'</em></td>
 
<td>'.$menuValue.'</td>  </tr>';
		
 
 $query1 =  "SELECT `id`, `name`, `super_menu` FROM `menu` WHERE `super_menu` = '$id' ORDER BY `name` ASC";	
		
		 
 $extract_distance1 = mysqli_query($conn, $query1) or die(mysqli_error($conn));
		$count = mysqli_num_rows($extract_distance1);
    if ($count > 0)
		  {
 	 while ($row_distance1=mysqli_fetch_row($extract_distance1))
    { 
					  
 $id = $row_distance1[0];
$name = $row_distance1[1];
$super_menu = $row_distance1[2];
 
 
		if($super_menu != "super")
		{
			
			$super_menu = $myName->showName($conn, "SELECT `name` FROM  `menu` WHERE  `id` = '$super_menu'"); 
		}
					  
 $menuValue = "Sub Menu -> ".$super_menu;
 if($super_menu == 'super')
 {
	 $menuValue = "Main Menu";
	 
 }

 	
echo '<tr>
<td> </td>
<td> <input type="checkbox" value = '.$id.'  name = "transfer[]"  id="checkbox">	</td>
<td>'.$name.'
<br>
<em>'.$desc_text.'</em><br>
'.$menuValue.'</td>
  </tr>';	 
	 
}
 
		  }
	}
				 	
				 
			 
					}
		   
	 
?>