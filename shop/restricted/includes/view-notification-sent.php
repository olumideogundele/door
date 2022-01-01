 
<?php
include ("config/DB_config.php"); 
$counter = 0;
$active= "active";
$userT = "";
$usernameT = "";
 $myName = new Name();
 if(isset($_SESSION['email']))
 {
 $emailing = $_SESSION['email'];
	   
 }
 
 
	 
	 $query12 =  "SELECT `id`, `created_at`, `code`,`title`,`registeredby` FROM `notification` WHERE `registeredby` = '$emailing' ORDER BY `id` DESC";	



 $extract_distance12= mysqli_query($conn, $query12) or die(mysqli_error($conn));
		$count12 = mysqli_num_rows($extract_distance12);
    if ($count12 > 0)
		  {
 	 while ($row_distance12=mysqli_fetch_row($extract_distance12))
    {
  						  	$id =$row_distance12[0];
		 					$created_date =$row_distance12[1];
		 					$code =$row_distance12[2];
						   	$title =$row_distance12[3];
		 					$registered_by =$row_distance12[4];
					  	  		 
		
 
		$name = $myName->showName($conn, "SELECT  `name` FROM `user_unit` WHERE `account_number` = '$registered_by'"); 
		 echo '<tr>
                                    <td>
                                        <div class="icheck-material-primary my-0">
                                            <input id="checkbox1" type="checkbox">
                                            <label for="checkbox1">
                                            </label>
                                        </div>
                                    </td>
                                    
                                    <td>
                                        <a href="notification-details.php?value='.$code.'">'.$name.'</a>
                                    </td>
                                    <td>
                                        <a href="notification-details.php?value='.$code.'"><i class="fa fa-circle text-info mr-2"></i><strong>'.$title.'</strong></a>
                                    </td>
                                    
                                    <td class="text-right">
                                       '.$created_date.'
                                    </td>
                                </tr>';
	 
		  
	 
}
 
						  
				 	
				 
			 
					}
else
{
	
	///echo '<meta http-equiv="Refresh" content="0; url= all-my-accessed-files.php"> ';
}
		   
	 
?>