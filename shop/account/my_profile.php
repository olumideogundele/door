<?php
include("header.php");
include("../restricted/includes/view-truck-owners-detials.php");
?>

<script>
	
	
	function call()
	{
		   //alert("Tracking");
        var selectedCountry = $("#state option:selected").val();
	 //alert(selectedCountry);
		   
        $.ajax({
            type: "POST",
            url: "../populate-lga-2.php",
            data: {state : selectedCountry } 
        }).done(function(data){
            $("#response").html(data);
        });
		
	}
	
	
</script>

    <div class="utf_dashboard_content"> 
      <div id="titlebar" class="dashboard_gradient">
        <div class="row">
          <div class="col-md-12">
            <h2>My Profile</h2>
            <nav id="breadcrumbs">
              <ul>
                <li><a href="../index">Home</a></li>
                <li><a href="index">Dashboard</a></li>
                <li>My Profile</li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
      <div class="row"> 
        <div class="col-lg-12 col-md-12">
          <div class="utf_dashboard_list_box margin-top-0">
            <h4 class="gray"><i class="sl sl-icon-user"></i> Profile Details</h4>
			  
			  <form method="post" class="login" enctype="multipart/form-data">
			  
            <div class="utf_dashboard_list_box-static"> 
              <div class="my-profile">
			    <div class="row with-forms">
					
					
					 <div class="form-group">
											             <?php
			 
		 include("../restricted/includes/truck-owner-registeration-update.php");
			 
			 ?>
										</div>
					
					<div class="col-md-4">
						<label>Name</label>						
						<input type="text" class="input-text" name="name" value="<?php echo $name; ?>">
					</div>
					<div class="col-md-4">
						<label>Phone</label>						
						<input type="text"  name="phone" class="input-text" placeholder="0910000000" value="<?php echo $phone; ?>">
					</div>
					<div class="col-md-4">
						<label>Email</label>						
						<input type="text"  name="email" class="input-text" placeholder="test@example.com" value="<?php echo $email; ?>">
					</div>
					<div class="col-md-12">
						<label>Address</label>
						<textarea name="notes" cols="30" rows="10"><?php echo $address; ?></textarea>
					</div>
					
					
					<div class="col-md-4">
						<label>Courier Type</label>						
						 <select class="form-control select2" name="owner_type" id="owner_type" required>
							<?php
							 if(isset($truck_owner_type))
							 {
								 ?>
									 
									 
									 <option value='<?php  echo $truck_owner_type; ?>'><?php  echo $truck_owner_typeParam1; ?></option> 
									 <?php
								 
								 
							 }
							 
							 
							 ?>
							 
							 
							 <option value='1'>Corporate</option>
												   <option value='2'>Individual</option>
											</select>
					</div>
					
					<div class="col-md-4">
						<label>State of Operation</label> 
 <select class="form-control select2"  name="state" id="state" onChange = "call()" required>
	 
	 <?php
							 if(isset($state))
							 {
								 ?>
									 
									 
									 <option value='<?php  echo $state; ?>' selected><?php  echo $state_name; ?></option> 
									 <?php
								 
								 
							 }
							 
							 
							 ?>
												 <?php
	 include("../restricted/config/DB_config.php");
	 
	 
	 $query =  "SELECT  `state_id`, `name` FROM `states` ORDER BY `name` ASC";	
 $extract_distance = mysqli_query($conn, $query) or die(mysqli_error($conn));
		$count = mysqli_num_rows($extract_distance);
    if ($count > 0)
		  {
 	 while ($row_distance=mysqli_fetch_row($extract_distance))
    {
  						  $id=$row_distance[0];
		  $name=$row_distance[1];
		
	 
					 
					  
					  
				echo '<option value='.$id.'>'.$name.'</option>';	
				
				  
	}
	
		  }
	 
	 
	 ?>
											</select>
								
					</div>
					 <div class="col-md-4" id="response">  
						 <label>LGA</label>
                   <input type="text" class="input-text" value="<?php echo $lga_name; ?>" name="lga">                      
	 </div>                      
					 <div class="col-md-4">  
						<label>RC Number (If Coorprate)</label> 
                   <input type="text" class="input-text" name="rc"  value="<?php echo $rc; ?>">                      
	 </div>              
					<div class="col-md-4">
						<label>LOGO</label>						
						<input type="file" name="file" class="input-text" >
					</div>
					<div class="col-md-4">
						<label>Cover Picture</label>						
						<input type="file" name="git" class="input-text">
						<input type="hidden" name="logo1" class="input-text" value="<?php echo $file; ?>"> 
						<input type="hidden" name="id123" class="input-text" value="<?php echo $id123; ?>"> 
					</div>	
					 
					<div class="col-md-12">
						<label>About You</label>
						<textarea name="notes" cols="30" rows="10">
								  </textarea>
					</div>
														
					 
				  </div>	
              </div>
              <button class="button preview btn_center_item margin-top-15" name="validate">Save Changes</button>
            </div>
				  
			  </form>
          </div>
        </div>
        <div class="col-md-12">
          <div class="footer_copyright_part">Copyright © 2019 All Rights Reserved.</div>
        </div>
      </div>
    </div>
  </div>  
</div>

<!-- Scripts --> 
<script src="../scripts/jquery-3.4.1.min.js"></script> 
<script src="../scripts/chosen.min.js"></script> 
<script src="../scripts/perfect-scrollbar.min.js"></script>
<script src="../scripts/slick.min.js"></script> 
<script src="../scripts/rangeslider.min.js"></script> 
<script src="../scripts/magnific-popup.min.js"></script> 
<script src="../scripts/jquery-ui.min.js"></script> 
<script src="../scripts/mmenu.js"></script>
<script src="../scripts/tooltips.min.js"></script> 
<script src="../scripts/color_switcher.js"></script>
<script src="../scripts/jquery_custom.js"></script>
<script>
(function($) {
try {
	var jscr1 = $('.js-scrollbar');
	if (jscr1[0]) {
		const ps1 = new PerfectScrollbar('.js-scrollbar');

	}
    } catch (error) {
        console.log(error);
    }
})(jQuery);
</script>
<!-- Style Switcher -->
<div id="color_switcher_preview">
  <h2>Choose Your Color <a href="#"><i class="fa fa-gear fa-spin (alias)"></i></a></h2>	
	<div>
		<ul class="colors" id="color1">
			<li><a href="#" class="stylesheet"></a></li>
			<li><a href="#" class="stylesheet_1"></a></li>
			<li><a href="#" class="stylesheet_2"></a></li>			
			<li><a href="#" class="stylesheet_3"></a></li>						
			<li><a href="#" class="stylesheet_4"></a></li>
			<li><a href="#" class="stylesheet_5"></a></li>			
		</ul>
	</div>		
</div>
</body>
</html>