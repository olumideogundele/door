 
<?php
include ("config/DB_config.php"); 
 $myName = new Name();
 if(isset($_SESSION['email']))
 {
 $emailing = $_SESSION['email'];
 }
 $emailing = $_SESSION['email'];
$query = "";


$user = $_GET['user'];

 $query =  "SELECT `id`, `user`, `menu`, `super` FROM `menu_rights` WHERE `user` = '$user' AND `super` != 'super' ORDER BY `super`";	
 $extract_distance = mysqli_query($conn, $query) or die(mysqli_error($conn));
		$count = mysqli_num_rows($extract_distance);
    if ($count > 0)
		  {
 	 while ($row_distance=mysqli_fetch_row($extract_distance))
    {
  						  	$id =$row_distance[0];
						   	$user =$row_distance[1];
					  		$menu =$row_distance[2];
					  		$super =$row_distance[3];
						  
		
		$menu_value = $myName->showName($conn, "SELECT `name` FROM  `menu` WHERE  `id` = '$menu'"); 
 
	  $super = $myName->showName($conn, "SELECT `name` FROM  `menu` WHERE  `id` = '$super'"); 
		 
					
		
		 
echo '<tr>
<td> '.$menu_value.' </td>
<td>'.$super.' </td>
 
												 <td>
												 
												 <div class="btn-group">
												<button class="btn btn-primary btn-sm m-b-5 m-t-5 dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
												Action
												</button>
												<div class="dropdown-menu">
											 
												 <a class="dropdown-item" onClick="return confirm(\'Are you sure you want to delete?\')" href="?table=menu_rights&dels='.$id.'&user='. $emailing .'">Remove</a> 
                      
					  
					   
													 
												</div>
											</div>
												 
												 
												 
												 
												 
												 
												 
												 
												 
												 
												 
												 
				   
													</td> 
											 
											     
											   
									 
                                            </tr>';	 
	 
}
 
						  
				 	
				 
			 
					}
		   
	 
?>