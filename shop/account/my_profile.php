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
						<textarea name="address" cols="30" rows="10"><?php echo $address; ?></textarea>
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
	 </div>           <div class="col-md-4" id="response">  
						 <label>Number of Bikes</label>
                   <input type="number" class="input-text" value="<?php echo $number; ?>" name="number">                      
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
						<input type="hidden" name="git1" class="input-text" value="<?php echo $git ; ?>"> 
						<input type="hidden" name="id123" class="input-text" value="<?php echo $account_number; ?>"> 
					</div>	
					 <div class="col-md-12">
						<label>Categories</label>		
					
					 <?php
	 include("../restricted/config/DB_config.php");
	 
	 
	 $query =  "SELECT  `id`, `name`, `desc` FROM `courier_category` WHERE `status` =  1 ORDER BY `name` ASC";	
//	 /$query =  "SELECT  `id`, `category`, `courier`, `status`, `created_date`, `registeredby` FROM `courier_category_sign_up` WHERE `courier` = '$account_number'";	
 $extract_distance = mysqli_query($conn, $query) or die(mysqli_error($conn));
		$count = mysqli_num_rows($extract_distance);
    if ($count > 0)
		  {
 	 while ($row_distance=mysqli_fetch_row($extract_distance))
    {
  						  $id=$row_distance[0];
		  $name_ing=$row_distance[1];
		  $desc=$row_distance[2];
		$myName = new Name();
		   
		 
		 
		  $name = $myName->showName($conn, "SELECT `category` FROM `courier_category_sign_up` WHERE `category` = '$id' AND `courier` = '$account_number'");		
		 
		 
		 
		if(empty($name))
		{
			 echo '  <div class="col-md-2">
					 
														 <label>'. $name_ing.'</label>
														
														<input type="checkbox"   name="courier_category[]"   value = "'.$id.'" class="myinput large">
														</div>
            
                     
                    '; 
			
		}
		 else{
	 echo '  <div class="col-md-2">
					 
														 <label>'. $name_ing.'</label>
														
														<input type="checkbox" checked  name="courier_category[]"   value = "'.$id.'" class="myinput large">
														</div>
            
                     
                    ';
					 
					  
					}  
				 
				
				  
	}
	
		  }
	 
	 
	 ?>
			
					</div>	
					
					
					
					<div class="col-md-12">
						<label>About You</label>
						<textarea name="notes" cols="30" rows="10">
							<?php
							echo $notes;
							
							?>
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


<style type="text/css">

/* Main Classes */
.myinput[type="checkbox"]:before{
    position: relative;
    display: block;
    width: 11px;
    height: 11px;
    border: 1px solid #808080;
    content: "";
    background: #FFF;
}
.myinput[type="checkbox"]:after{
    position: relative;
    display: block;
    left: 2px;
    top: -11px;
    width: 7px;
    height: 7px;
    border-width: 1px;
    border-style: solid;
    border-color: #B3B3B3 #dcddde #dcddde #B3B3B3;
    content: "";
    background-image: linear-gradient(135deg, #B1B6BE 0%,#FFF 100%);
    background-repeat: no-repeat;
    background-position:center;
}
.myinput[type="checkbox"]:checked:after{
    background-image:  url('data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAcAAAAHCAQAAABuW59YAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAIGNIUk0AAHolAACAgwAA+f8AAIDpAAB1MAAA6mAAADqYAAAXb5JfxUYAAAB2SURBVHjaAGkAlv8A3QDyAP0A/QD+Dam3W+kCAAD8APYAAgTVZaZCGwwA5wr0AvcA+Dh+7UX/x24AqK3Wg/8nt6w4/5q71wAAVP9g/7rTXf9n/+9N+AAAtpJa/zf/S//DhP8H/wAA4gzWj2P4lsf0JP0A/wADAHB0Ngka6UmKAAAAAElFTkSuQmCC'), linear-gradient(135deg, #B1B6BE 0%,#FFF 100%);
}
.myinput[type="checkbox"]:disabled:after{
    -webkit-filter: opacity(0.4);
}
.myinput[type="checkbox"]:not(:disabled):checked:hover:after{
    background-image:  url('data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAcAAAAHCAQAAABuW59YAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAIGNIUk0AAHolAACAgwAA+f8AAIDpAAB1MAAA6mAAADqYAAAXb5JfxUYAAAB2SURBVHjaAGkAlv8A3QDyAP0A/QD+Dam3W+kCAAD8APYAAgTVZaZCGwwA5wr0AvcA+Dh+7UX/x24AqK3Wg/8nt6w4/5q71wAAVP9g/7rTXf9n/+9N+AAAtpJa/zf/S//DhP8H/wAA4gzWj2P4lsf0JP0A/wADAHB0Ngka6UmKAAAAAElFTkSuQmCC'), linear-gradient(135deg, #8BB0C2 0%,#FFF 100%);
}
.myinput[type="checkbox"]:not(:disabled):hover:after{
    background-image: linear-gradient(135deg, #8BB0C2 0%,#FFF 100%);  
    border-color: #85A9BB #92C2DA #92C2DA #85A9BB;  
}
.myinput[type="checkbox"]:not(:disabled):hover:before{
    border-color: #3D7591;
}
/* Large checkboxes */
.myinput.large{
    height:22px;
    width: 22px;
}

.myinput.large[type="checkbox"]:before{
    width: 20px;
    height: 20px;
}
.myinput.large[type="checkbox"]:after{
    top: -20px;
    width: 16px;
    height: 16px;
}
/* Custom checkbox */
.myinput.large.custom[type="checkbox"]:checked:after{
background-image: url('data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAAGHRFWHRBdXRob3IAbWluZWNyYWZ0aW5mby5jb23fZidLAAAAk0lEQVQ4y2P4//8/AyUYwcAD+OzN/oMwshjRBoA0Gr8+DcbIhhBlAEyz+qZZ/7WPryHNAGTNMOxpJvo/w0/uP0kGgGwGaZbrKgfTGnLc/0nyAgiDbEY2BCRGdCDCnA2yGeYVog0Aae5MV4c7Gzk6CRqAbDM2w/EaQEgzXgPQnU2SAcTYjNMAYm3GaQCxNuM0gFwMAPUKd8XyBVDcAAAAAElFTkSuQmCC'), linear-gradient(135deg, #B1B6BE 0%,#FFF 100%);
}
.myinput.large.custom[type="checkbox"]:not(:disabled):checked:hover:after{
background-image: url('data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAAGHRFWHRBdXRob3IAbWluZWNyYWZ0aW5mby5jb23fZidLAAAAk0lEQVQ4y2P4//8/AyUYwcAD+OzN/oMwshjRBoA0Gr8+DcbIhhBlAEyz+qZZ/7WPryHNAGTNMOxpJvo/w0/uP0kGgGwGaZbrKgfTGnLc/0nyAgiDbEY2BCRGdCDCnA2yGeYVog0Aae5MV4c7Gzk6CRqAbDM2w/EaQEgzXgPQnU2SAcTYjNMAYm3GaQCxNuM0gFwMAPUKd8XyBVDcAAAAAElFTkSuQmCC'), linear-gradient(135deg, #8BB0C2 0%,#FFF 100%);
}


</style>
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