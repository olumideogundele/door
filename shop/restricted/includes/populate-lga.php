 
 
<?php
include ("config/DB_config.php"); 
include("includes/class_file.php");
$myName = new Name();

if(isset($_POST["state"])){
    // Capture selected country
    $state = $_POST["state"];
 
    if($state !== 'Select'){
   

      echo '<select name="lga" id="biller2"  class="form-control single-select" required>
	   <option value = "">Select One</option>';
	 
		
 
		 
$query =  "SELECT `local_id`,  `local_name` FROM `locals` WHERE `state_id` = '$state'";	
 
 
 $extract_distance = mysqli_query($conn, $query) or die(mysqli_error($conn));
		$count = mysqli_num_rows($extract_distance);
    if ($count > 0)
		  {
 	 while ($row_distance=mysqli_fetch_row($extract_distance))
    {
  						  $id123 =$row_distance[0];
						   $name =$row_distance[1];
		
		
		 
					  
		  echo "<option value = ".$id123.">". $name . "</option>";
	}
		  }
		
		
  
        echo "</select> </div>";
		 
 
					
		 
		
		
		
		
		
		
		
		
		
		
		
		
    } 
}
?>

<script src="backend-admin/assets/plugins/select2/js/select2.min.js"></script>
 
    <script>
        $(document).ready(function() {
            $('.single-select').select2();
       

        
 

          });

    </script>