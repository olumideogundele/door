 
<?php
include ("config/DB_config.php"); 
 $myName = new Name();
 if(isset($_SESSION['email']))
 {
 $emailing = $_SESSION['email'];
 }
 
$query = "";
 //SELECT  `id`, `name`, `phone`, `email`, `slogan`, `address`, `logo`, `status`, `created_date`, `registeredby`, `ip`, `port` FROM `application` WHERE 1


 $query =  "SELECT `id`, `name`, `logo`,`phone`, `email`, `slogan`, `address`,  `status`, `created_date`, `registeredby`, `ip`, `port`, `acct_num`, `bank_name`  FROM `application` ";	
 $extract_distance = mysqli_query($conn, $query) or die(mysqli_error($conn));
		$count = mysqli_num_rows($extract_distance);
    if ($count > 0)
		  {
 	 while ($row_distance=mysqli_fetch_row($extract_distance))
    {
  						  	$id =$row_distance[0];
						   	$name =$row_distance[1];
					  		$logo =$row_distance[2];
					  		$phone =$row_distance[3];
						   	$email =$row_distance[4];
					  		$slogan =$row_distance[5];
					  		$address =$row_distance[6];
						   	$status =$row_distance[7];
					  		$created_date =$row_distance[8];
					   		$registeredby =$row_distance[9];
						   	$ip =$row_distance[10];
					  		$port =$row_distance[11];
		
							$acct_num =$row_distance[12];
					  		$bank_name =$row_distance[13];
						 	 
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
  
 $bank_name = $myName->showName($conn, "SELECT  `name` FROM  `banks` WHERE  `code` = '$bank_name'");
		
echo '<tr>
<td><a href = "?value='.$id.'"> <strong>'.$name.'</strong> </a></td>
<td>'.$slogan.'</td>


<td>'.$phone.'</td>
<td>'.$email.'</td>
 <td>'.$address.'</td>
<td>'.$acct_num.'</td>
<td>'.$bank_name.'</td>
<td>'.$created_date.'</td>
<td>'.$registeredby.'</td>



 <td> <span class="'.$statusCSS.'">'.$statusParam.' </span> </td>
 
  		   
												 <td>
												 
												 <div class="btn-group">
												<button class="btn btn-primary btn-sm m-b-5 m-t-5 dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
												Action
												</button>
												<div class="dropdown-menu">
											 
												 <a class="dropdown-item" onClick="return confirm(\'Are you sure you want to delete?\')" href="?table=application&del='.$id.'">Delete</a> 
                      
											<div class="dropdown-divider"></div>  <a  class="dropdown-item"   onClick="return confirm(\'Are you sure you want to update?\')" href="?table=application&id='.$id.'&columnValue=1&column=status">Activate</a> 	
											  
											  
											   <a class="dropdown-item"  onClick="return confirm(\'Are you sure you want to update?\')" href="?table=application&id='.$id.'&columnValue=0&column=status"> Deactivate</a>  
												
													
													 
												</div>
											</div>
												 
												 
												 
												 
												 
												 
												 
												 
												 
												 
												 
												 
				   
													</td> 
											 
											     
											   
									 
                                            </tr>';	 
	 
}
 
						  
				 	
				 
			 
					}
		   
	 
?>