 
 
<?php
include ("config/DB_config.php"); 
include("includes/class_file.php");
$myName = new Name();

if(isset($_POST["state"])){
    // Capture selected country
    $truck_type = $_POST["state"];
 
    if($truck_type !== 'Select'){
      echo ' 	 
			  <div class="form-group">						
	<label for="exampleInputPassword" class="sr-only">LGA</label>
			   <div class="position-relative has-icon-right">
				<label>Truck Capacity</label> 												';

     
	 
		
 
		 
$query =  "SELECT `id`,  `capacity` FROM `truck_capacity` WHERE `truck_type` = '$truck_type'";	
        
        
  echo '<select name="total_capacity" id="total_capacity"  class="form-control single-select" required>
	   <option value = "">Select One</option>';
 
 $extract_distance = mysqli_query($conn, $query) or die(mysqli_error($conn));
		$count = mysqli_num_rows($extract_distance);
    if ($count > 0)
		  {
 	 while ($row_distance=mysqli_fetch_row($extract_distance))
    {
  						  $id123 =$row_distance[0];
						   $name =$row_distance[1];
		
		
		 
					  
		  echo "<option value = ".$id123.">". $name . " Tons</option>";
	}
		  }
		
		
  
        echo "</select> </div></div> ";
		 
 
					
		 
		
		
		
		
		
		
		
		
		
		
		
		
    } 
}
?>

<script src="restricted/backend-admin/assets/plugins/select2/js/select2.min.js"></script>
 
    <script>
        $(document).ready(function() {
            $('.single-select').select2();
       

        
 

          });

    </script>