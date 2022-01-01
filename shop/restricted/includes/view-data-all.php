 
<?php
include ("config/DB_config.php"); 
 $myName = new Name();
 if(isset($_SESSION['email']))
 {
 $emailing = $_SESSION['email'];
 }
 
$query = "";

$link = "";
 
$usertype = $_SESSION['usertype'] ;




if(isset($_GET['id']))
{
	$idd = $_GET['id'];
	
	
	if($usertype != "1")
{
	
  
	 
		
		$query =  "SELECT `id`, `wath`, `community`, `state`, `lga`, `claim_type`, `name_of_claimant`, `line_no`, `sp1`, `sp2`, `km`, `crop`, `crop_age`, `no_of_damages`, `rate`, `amount`, `book_no`, `dav_no`, `status`, `created_date`, `registeredby`, `unique_id` FROM `data_entry` WHERE `status` = '$idd' AND `registeredby`  = '$emailing'  ORDER BY `id` DESC";	
	 
}
else
{
	 
	 $query =  "SELECT `id`, `wath`, `community`, `state`, `lga`, `claim_type`, `name_of_claimant`, `line_no`, `sp1`, `sp2`, `km`, `crop`, `crop_age`, `no_of_damages`, `rate`, `amount`, `book_no`, `dav_no`, `status`, `created_date`, `registeredby`, `unique_id` FROM `data_entry` WHERE `status` = '$idd' ORDER BY `id` DESC";	
	
}

	
	
	
	
	
	
	
	
	
}
else
{
	
	
	
		if($usertype != "1")
{
	
  
	 
		
		$query =  "SELECT `id`, `wath`, `community`, `state`, `lga`, `claim_type`, `name_of_claimant`, `line_no`, `sp1`, `sp2`, `km`, `crop`, `crop_age`, `no_of_damages`, `rate`, `amount`, `book_no`, `dav_no`, `status`, `created_date`, `registeredby`, `unique_id` FROM `data_entry` WHERE   `registeredby`  = '$emailing'  ORDER BY `id` DESC";	
	 
}
else
{
	 
	 $query =  "SELECT `id`, `wath`, `community`, `state`, `lga`, `claim_type`, `name_of_claimant`, `line_no`, `sp1`, `sp2`, `km`, `crop`, `crop_age`, `no_of_damages`, `rate`, `amount`, `book_no`, `dav_no`, `status`, `created_date`, `registeredby`, `unique_id` FROM `data_entry` ORDER BY `id` DESC";
		
	
}

	
}











 
 $extract_distance = mysqli_query($conn, $query) or die(mysqli_error($conn));
		$count = mysqli_num_rows($extract_distance);
    if ($count > 0)
		  {
 	 while ($row_distance=mysqli_fetch_row($extract_distance))
    {
  						  	$id =$row_distance[0];
		 					$wath =$row_distance[1];
		 					$community =$row_distance[2];
						   	$state =$row_distance[3];
		 					$lga =$row_distance[4];
						 	$claim_type =$row_distance[5];
					   		$name_of_claimant =$row_distance[6];
		 					$line_no =$row_distance[7];
						 	$sp1 =$row_distance[8];
					   		$sp2 =$row_distance[9];
		   					$km =$row_distance[10];
						 	$crop =$row_distance[11];
					   		$crop_age =$row_distance[12];
		 					$no_of_damages =$row_distance[13];
					   		$rate =$row_distance[14];
		   					$amount =$row_distance[15];
						 	$book_no =$row_distance[16];
					   		$dav_no =$row_distance[17];
		 					$status =$row_distance[18];
					   		$created_date =$row_distance[19];
		   					$registeredby =$row_distance[20];
		 $unique_id =$row_distance[21];
						  
		
		
 $statusCSS = "";
$statusParam = "";
if($status == 1)
{
 $statusCSS = "btn btn-success";
$statusParam = "Paid";
	
	$link = "";
	
}			
else  if($status == 0)
{
 $statusCSS = "btn btn-info";
$statusParam = "Not Paid";
		$link = "invoice.php?id=".$id;
}else  if($status == 2)
{
 $statusCSS =  "btn btn-danger";
$statusParam = "Pending";
	
		$link = "invoice.php?id=".$id;
}
 		
	 
		 
echo '<tr>
 <td><strong><a href = '.$link.'>'.$unique_id .'</a></strong></td>
<td>'.$wath .'</td>
<td>'.$community .'</td>
<td> '.$state .' </td>
 <td>'.$lga .'</td>
 <td>'.$claim_type .'</td>
<td>'.$name_of_claimant .'</td>
<td> '.$line_no .' </td>
 <td>'.$sp1 .'</td>
 <td>'.$sp2 .'</td>
<td>'.$km .'</td>
<td> '.$crop .' </td>
 <td>'.$crop_age .'</td>
 <td>'.$no_of_damages .'</td>
<td>'.$rate .'</td>
<td> '.$amount .' </td>
 

 
 
 
 <td> <span class="'.$statusCSS.'">'.$statusParam.' </span> </td>
 <td>'.$created_date  .'</td>
<td> '.$registeredby  .' </td>
 
  		   
												 <td>
											 
												 
												 <div class="btn-group mt-40">
											<div class="dropdown">
												<!-- Single button -->
												<button class="btn btn-info dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
												Action
												<span class="caret"></span>
												</button>
												<ul class="dropdown-menu">
												<li> <a class="dropdown-item" onClick="return confirm(\'Are you sure you want to delete?\')" href="?table=data_entry&del='.$id.'">Delete</a> </li>
												 
												<li class="divider"></li>
												<li> <a class="dropdown-item"  onClick="return confirm(\'Are you sure you want to update?\')" href="?table=data_entry&id='.$id.'&columnValue=2&column=status"> Pend</a>  </li>
												</ul>
											</div>
										</div>
												 
												 
												 
											 
											  
												
													
													 
												</div>
											</div>
												 
												 
												 
												 
												 
												 
												 
												 
												 
												 
												 
												 
				   
													</td> 
											 
											     
											   
									 
                                            </tr>';	 
	 
}
 
						  
				 	
				 
			 
					}
		   
	 
?>