 
<?php
include ("config/DB_config.php"); 
 $myName = new Name();
 if(isset($_SESSION['email']))
 {
 $emailing = $_SESSION['email'];
 }
 
$query = "";
 

//ministry
if($_SESSION['usertype'] == 1)
{
	
	$query =  "SELECT  `id`, `header`, `footer`, `status`, `created_date`, `registeredby`, `mda` FROM `headerfooter` WHERE `mda` = '$mdas'";	

}
else
{
	$mda = $myName->showName($conn, "SELECT `ministry` FROM `user_unit` WHERE  `account_number` = '$emailing'"); 
	
	
	
	$query =  "SELECT  `id`, `header`, `footer`, `status`, `created_date`, `registeredby`, `mda` FROM `headerfooter` WHERE `mda` = '$mda'";	

}

 




  $extract_distance = mysqli_query($conn, $query) or die(mysqli_error($conn));
		$count = mysqli_num_rows($extract_distance);
    if ($count > 0)
		  {
 	 while ($row_distance=mysqli_fetch_row($extract_distance))
    {
  						  	$id =$row_distance[0];
						   	$header =$row_distance[1];
					  		$footer =$row_distance[2];
					  		 
						   	$status =$row_distance[3];
					  		$created_date =$row_distance[4];
					   		$registeredby =$row_distance[5];
					   		$mda =$row_distance[6];
 
						 	 
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
 
		 $value = "";
		 
		  $query1 =  "SELECT `rights` FROM  `privilege` WHERE `account_number` = '$emailing'";	
 $extract_distance1 = mysqli_query($conn, $query1) or die(mysqli_error($conn));
		$count1 = mysqli_num_rows($extract_distance1);
    if ($count1 > 0)
		  {
 	 while ($row_distance1=mysqli_fetch_row($extract_distance1))
    {
  						  	$privilege =$row_distance1[0];
		 
		 
	 
		 
		 
		 if($privilege == "delete")
		 {
			 
			 $value .= '<li> <a class="dropdown-item" onClick="return confirm(\'Are you sure you want to delete?\')" href="?table=headerfooter&del='.$id.'">Delete</a> </li>';
		 }
	
		  if($privilege == "activate")
		 {
			 
			 $value .= '<li> <a  class="dropdown-item"   onClick="return confirm(\'Are you sure you want to update?\')" href="?table=headerfooter&id='.$id.'&columnValue=1&column=status">Activate</a> </li>';
		 }
  
		  if($privilege == "deactivate")
		 {
			 
			 $value .= '<li> <a class="dropdown-item"  onClick="return confirm(\'Are you sure you want to update?\')" href="?table=headerfooter&id='.$id.'&columnValue=0&column=status"> Deactivate</a>  </li>';
		 }
		 
		 }
	}
		 
		 
		 
		 
$naming = $myName->showName($conn, "SELECT `name` FROM `mda` WHERE  `id` = '$mda'"); 		 
		 
		 
		 
		 
echo '<tr>
<td>  '.$naming.'..... </td>
<td>  '.$header.' </td>
<td>'.$footer.'</td>
 
 
<td>'.$created_date.'</td>
<td>'.$registeredby.'</td>



 <td> <span class="'.$statusCSS.'">'.$statusParam.' </span> </td>
 
  		   
												 <td>
												 
												 
												 
												 <div class="btn-group">
														<div class="dropdown">
															<button aria-expanded="false" data-toggle="dropdown" class="btn btn-info dropdown-toggle " type="button">More <span class="caret"></span></button>
															<ul role="menu" class="dropdown-menu">
																
																
															'.$value.'	
																
																
															</ul>
														</div>
													</div>
												 
												 
												 
												 
												 
												 
												 
												 
												 
												 
												 
												 
												 
												 
												 
				   
													</td> 
											 
											     
											   
									 
                                            </tr>';	 
	 
}
 
						  
				 	
				 
			 
					}
		   
	 
?>