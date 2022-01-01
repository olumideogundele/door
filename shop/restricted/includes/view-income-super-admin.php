 
<?php
include ("config/DB_config.php"); 
 $myName = new Name();
 if(isset($_SESSION['email']))
 {
 $emailing = $_SESSION['email'];
 }


$query = "";
 
 $query =  "SELECT  `id`, `code`, `name`, `desc`, `status`, `created_date`, `registeredby` FROM `income_super_category` ORDER BY `id` DESC";	
 
 
 $extract_distance = mysqli_query($conn, $query) or die(mysqli_error($conn));
		$count = mysqli_num_rows($extract_distance);
    if ($count > 0)
		  {
 	 while ($row_distance=mysqli_fetch_row($extract_distance))
    {
  						  $id =$row_distance[0];
  						  $code =$row_distance[1];
						   $name =$row_distance[2];
					 $desc_text=$row_distance[3];
						   $status =$row_distance[4];
					  $created_date=$row_distance[5];
		 $registeredby=$row_distance[6];
		 
		 
					  
		
		 
					  

					     

	$statusCSS = "";
$statusParam = "";
if($status == 1)
{
	
	$statusCSS = "badge badge-success m-b-5";
$statusParam = "Active";
}			
else  if($status == 0)
{
	//btn btn-primary btn-block
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
			 
			 $value .= '<li> <a class="dropdown-item" onClick="return confirm(\'Are you sure you want to delete?\')" href="?table=income_super_category&del='.$id.'">Delete</a> </li>';
		 }
	
		  if($privilege == "activate")
		 {
			 
			 $value .= '<li> <a  class="dropdown-item"   onClick="return confirm(\'Are you sure you want to update?\')" href="?table=income_super_category&id='.$id.'&columnValue=1&column=status">Activate</a> </li>';
		 }
  
		  if($privilege == "deactivate")
		 {
			 
			 $value .= '<li> <a class="dropdown-item"  onClick="return confirm(\'Are you sure you want to update?\')" href="?table=income_super_category&id='.$id.'&columnValue=0&column=status"> Deactivate</a>  </li>';
		 }
		 
		 }
	}
		
		 
		 


  
						 
echo '<tr>
<td>'.$name.'</a></td>
<td>'.$code.'</a></td>

<td>'.$desc_text.'</td>
 
<td> <span class="'.$statusCSS.'">'.$statusParam.' </span> </td>
<td> '.$created_date.' </td>
 
  		   
												 <td>
												 
												 <div class="btn-group">
												<button class="btn btn-primary btn-sm m-b-5 m-t-5 dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
												Action
												</button>
												<div class="dropdown-menu">
											 
												'.$value.'
													
													 
												</div>
											</div>
												 
												 
												 
												 
												 
												 
												 
												 
												 
												 
												 
												 
				   
													</td> 
											 
											     
											   
									 
                                            </tr>';	 
	 
}
 
						  
				 	
				 
			 
					}
		   
	 
?>