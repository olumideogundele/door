 
 
<?php
session_start();
include ("config/DB_config.php"); 
include("includes/class_file.php");
$myName = new Name();

 if(isset($_SESSION['email']))
 {
$emailing  = $_SESSION['email'];
 }




if(isset($_POST["state"])){
    // Capture selected country
    $truck_type = $_POST["state"];
 
    if($truck_type !== 'Select'){
        
        if($truck_type == "Yes")
        {
            
            echo '<div class="form-group overflow-hidden">
													<label>Select Truck:</label>
<select class="form-control single-select" name="truck" id="truck">
												 
   
    
    
    <option value="">Select One</option>';
												   
						 
	 
	 
	 $query =  "SELECT  `id`, `truck_plate_number`, `truck_brand` FROM `truck` WHERE `account_number` = '$emailing' AND `status` =  1 ORDER BY `truck_plate_number` ASC";	
      
 $extract_distance = mysqli_query($conn, $query) or die(mysqli_error($conn));
		$count = mysqli_num_rows($extract_distance);
    if ($count > 0)
		  {
 	 while ($row_distance=mysqli_fetch_row($extract_distance))
    {
  						  $id=$row_distance[0];
		  $truck_plate_number=$row_distance[1];
		  $truck_brand=$row_distance[1];
		
	 
					 
					  
					  
				 echo '<option value='.$id.'>'.$truck_plate_number.' ('.$truck_brand.')</option>';	
				
				  
	}
	
		  }
	 
	 echo "</select>
		 </div>";
            
 

 
            echo ' <div class="form-group overflow-hidden">
													<label>Percentage cf Negotiation Limit:</label>
 <input type="number" class="form-control" id="exampleInputuname_1" placeholder="Minimum of percentage deduction for negotiation" name="percentage" value="" required>
												</div>';
            
            
        }
        
        
        
      
		
		
		
		
		
		
		
		
		
    } 
}
?>
<script src="restricted/backend-admin/assets/plugins/select2/js/select2.min.js"></script>
 
    <script>
        $(document).ready(function() {
            $('.single-select').select2();
       

        
 

          });

    </script>

 