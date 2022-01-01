 
<?php
include ("config/DB_config.php"); 
 $myName = new Name();
 if(isset($_SESSION['email']))
 {
 $emailing = $_SESSION['email'];
 }

 
$query = "";


$super = $myName->showName($conn, "SELECT `super` FROM `user_unit` WHERE `account_number` = '$emailing'"); 
			 
 
	$query =  "SELECT  `id`, `name`, `manufacturer` , `model` FROM `product_type` WHERE   `status` =  1 ORDER BY `id` DESC";	
$extract_distance = mysqli_query($conn, $query) or die(mysqli_error($conn));
		$count = mysqli_num_rows($extract_distance);
    if ($count > 0)
		  {
 	 while ($row_distance=mysqli_fetch_row($extract_distance))
    {
  						  $id =$row_distance[0];
						   $name =$row_distance[1];
						   $manufacturer =$row_distance[2];
						   $model =$row_distance[3];
		 

 
		
	 
		 
echo ' <div class="form-group overflow-hidden">
													<label>'.$name.' - '.$manufacturer.' - '.$model.':</label>
 <input type="text" class="form-control" id="exampleInputEmail_1"  name="qty" placeholder="Quantity">
												</div>
				   ';	 
	 
}
 
						  
				 	
				 
			 
					}
		   
	 
?>