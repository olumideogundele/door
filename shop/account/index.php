<?php
include("header.php");
?>
    
	<div class="utf_dashboard_content"> 
      <div id="titlebar" class="dashboard_gradient">
        <div class="row">
          <div class="col-md-12">
            <h2>Dashboard</h2>
            <nav id="breadcrumbs">
              <ul>
                <li><a href="../index">Home</a></li>
                <li>Dashboard</li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
		
		<?php
		
					if(empty($logo))
					{
						
						?>
		
		  <div class="row">
        <div class="col-md-12">
          <div class="notification warning closeable margin-bottom-30">
            <p>Please upload logo and cover picture for <strong><?php echo $customer_name; ?></strong>. <strong><a href="my_profile">Click here to update your profile</a></strong>.</p>
            <a class="close" href="#"></a> 
		  </div>
        </div>
      </div>
		
		<?php
						
					}
		
		?>
		
      
      <div class="row">
        <div class="col-md-12">
          <div class="notification success closeable margin-bottom-30">
            <p>You are currently signed in as <strong><?php echo $customer_name; ?></strong> Has Been Approved!</p>
            <a class="close" href="#"></a> 
		  </div>
        </div>
      </div>
      
      <div class="row"> 
        <div class="col-lg-2 col-md-6">
          <div class="utf_dashboard_stat color-1">
            <div class="utf_dashboard_stat_content">
              <h4>36</h4>
              <span>Published Listings</span>
			</div>
            <div class="utf_dashboard_stat_icon"><i class="im im-icon-Map2"></i></div>
          </div>
        </div>
        
        <div class="col-lg-2 col-md-6">
          <div class="utf_dashboard_stat color-2">
            <div class="utf_dashboard_stat_content">
              <h4>615</h4>
              <span>Pending Listings</span>
			</div>
            <div class="utf_dashboard_stat_icon"><i class="im im-icon-Add-UserStar"></i></div>
          </div>
        </div>
        
        <div class="col-lg-2 col-md-6">
          <div class="utf_dashboard_stat color-3">
            <div class="utf_dashboard_stat_content">
              <h4>9128</h4>
              <span>Expired Listings</span>
			</div>
            <div class="utf_dashboard_stat_icon"><i class="im im-icon-Align-JustifyRight"></i></div>
          </div>
        </div>
        
        <div class="col-lg-2 col-md-6">
          <div class="utf_dashboard_stat color-4">
            <div class="utf_dashboard_stat_content">
              <h4>572</h4>
              <span>New Feedbacks</span>
			</div>
            <div class="utf_dashboard_stat_icon"><i class="im im-icon-Diploma"></i></div>
          </div>
        </div>
	
		<div class="col-lg-2 col-md-6">
          <div class="utf_dashboard_stat color-5">
            <div class="utf_dashboard_stat_content">
              <h4>572</h4>
              <span>Total Views</span>
			</div>
            <div class="utf_dashboard_stat_icon"><i class="im im-icon-Eye-Visible"></i></div>
          </div>
        </div>
		
        <div class="col-lg-2 col-md-6">
          <div class="utf_dashboard_stat color-6">
            <div class="utf_dashboard_stat_content">
              <h4>572</h4>
              <span>Total Reviews</span>
			</div>
            <div class="utf_dashboard_stat_icon"><i class="im im-icon-Star"></i></div>
          </div>
        </div>
      </div>
      <div class="row"> 
        <div class="col-lg-6 col-md-12">
          <div class="utf_dashboard_list_box with-icons margin-top-20">
            <h4>Recent Activities</h4>
            <ul>
              <li> 
				<i class="utf_list_box_icon sl sl-icon-layers"></i> Peter Parker Left A Review 5.0 On <strong><a href="#"> Restaurant</a></strong> <a href="#" class="close-list-item"><i class="fa fa-close"></i></a> 
			  </li>
              <li> 
			    <i class="utf_list_box_icon sl sl-icon-star"></i> Your Listing <strong><a href="#">Local Service</a></strong> Has Been Approved<a href="#" class="close-list-item"><i class="fa fa-close"></i></a> 
			  </li>
              <li> 
				<i class="utf_list_box_icon sl sl-icon-heart"></i> Someone Bookmarked Your <strong><a href="#">Listing</a></strong> Restaurant <a href="#" class="close-list-item"><i class="fa fa-close"></i></a> 
			  </li>              
              <li> 
			    <i class="utf_list_box_icon sl sl-icon-star"></i> Your Listing <strong><a href="#">Local Service</a></strong> Has Been Approved<a href="#" class="close-list-item"><i class="fa fa-close"></i></a> 
			  </li>
              <li> 
			    <i class="utf_list_box_icon sl sl-icon-heart"></i> Someone Bookmarked Your <strong><a href="#">Listing</a></strong> Restaurant <a href="#" class="close-list-item"><i class="fa fa-close"></i></a> 
			  </li>			  
              <li> 
				<i class="utf_list_box_icon sl sl-icon-layers"></i> Peter Parker Left A Review 5.0 On <strong><a href="#"> Restaurant</a></strong> <a href="#" class="close-list-item"><i class="fa fa-close"></i></a> 
			  </li>
			  <li>
			    <i class="utf_list_box_icon sl sl-icon-star"></i> Someone Bookmarked Your <strong><a href="#">Listing</a></strong> Restaurant <a href="#" class="close-list-item"><i class="fa fa-close"></i></a> 
			  </li>
			  <li> 
				<i class="utf_list_box_icon sl sl-icon-layers"></i> Peter Parker Left A Review 5.0 On <strong><a href="#"> Restaurant</a></strong> <a href="#" class="close-list-item"><i class="fa fa-close"></i></a> 
			  </li>
              <li> 
			    <i class="utf_list_box_icon sl sl-icon-star"></i> Your Listing <strong><a href="#">Local Service</a></strong> Has Been Approved<a href="#" class="close-list-item"><i class="fa fa-close"></i></a> 
			  </li>
              <li> 
				<i class="utf_list_box_icon sl sl-icon-heart"></i> Someone Bookmarked Your <strong><a href="#">Listing</a></strong> Restaurant <a href="#" class="close-list-item"><i class="fa fa-close"></i></a> 
			  </li>
            </ul>
          </div>
		  <div class="clearfix"></div>
          <div class="utf_pagination_container_part margin-top-30 margin-bottom-30">
            <nav class="pagination">
              <ul>
			    <li><a href="#"><i class="sl sl-icon-arrow-left"></i></a></li>
                <li><a href="#" class="current-page">1</a></li>
                <li><a href="#">2</a></li>
				<li><a href="#">3</a></li>
                <li><a href="#"><i class="sl sl-icon-arrow-right"></i></a></li>
              </ul>
            </nav>
          </div>
        </div>
		<div class="col-lg-6 col-md-12">
          <div class="utf_dashboard_list_box invoices with-icons margin-top-20">
            <h4>All Order Invoices</h4>
            <ul>
              <li><i class="utf_list_box_icon sl sl-icon-doc"></i> <strong>Premium Plan <span class="paid">Paid</span></strong>
                <ul>
                  <li><span>Order Number:-</span> 004128641</li>
                  <li><span>Date:-</span> 12 Jan 2019</li>
                </ul>
                <div class="buttons-to-right"> <a href="../dashboard_invoice.html" class="button gray"><i class="sl sl-icon-printer"></i> Invoice</a> </div>
              </li>
              <li><i class="utf_list_box_icon sl sl-icon-doc"></i> <strong>Platinum Plan <span class="paid">Paid</span></strong>
                <ul>
                  <li><span>Order Number:-</span> 004312641</li>
                  <li><span>Date:-</span> 12 Jan 2019</li>
                </ul>
                <div class="buttons-to-right"> <a href="../dashboard_invoice.html" class="button gray"><i class="sl sl-icon-printer"></i> Invoice</a> </div>
              </li>
              <li><i class="utf_list_box_icon sl sl-icon-doc"></i> <strong>Platinum Plan <span class="paid">Paid</span></strong>
                <ul>
                  <li><span>Order Number:-</span> 004312641</li>
                  <li><span>Date:-</span> 12 Jan 2019</li>
                </ul>
                <div class="buttons-to-right"> <a href="../dashboard_invoice.html" class="button gray"><i class="sl sl-icon-printer"></i> Invoice</a> </div>
              </li>
              <li><i class="utf_list_box_icon sl sl-icon-doc"></i> <strong>Basic Plan <span class="unpaid">Unpaid</span></strong>
                <ul>
                  <li><span>Order Number:-</span> 004031281</li>
                  <li><span>Date:-</span> 12 Jan 2019</li>
                </ul>
                <div class="buttons-to-right"> <a href="../dashboard_invoice.html" class="button gray"><i class="sl sl-icon-printer"></i> Invoice</a> </div>
              </li>
			  <li><i class="utf_list_box_icon sl sl-icon-doc"></i> <strong>Basic Plan <span class="unpaid">Unpaid</span></strong>
                <ul>
                  <li><span>Order Number:-</span> 004031281</li>
                  <li><span>Date:-</span> 12 Jan 2019</li>
                </ul>
                <div class="buttons-to-right"> <a href="../dashboard_invoice.html" class="button gray"><i class="sl sl-icon-printer"></i> Invoice</a> </div>
              </li>
			  <li><i class="utf_list_box_icon sl sl-icon-doc"></i> <strong>Basic Plan <span class="unpaid">Unpaid</span></strong>
                <ul>
                  <li><span>Order Number:-</span> 004031281</li>
                  <li><span>Date:-</span> 12 Jan 2019</li>
                </ul>
                <div class="buttons-to-right"> <a href="../dashboard_invoice.html" class="button gray"><i class="sl sl-icon-printer"></i> Invoice</a> </div>
              </li>
            </ul>
          </div>
        </div>
		<div class="col-lg-12 col-md-12 mb-4">
		  <div class="utf_dashboard_list_box table-responsive recent_booking">
			<h4>Recent Booking</h4>
			<div class="dashboard-list-box table-responsive invoices with-icons">
			  <table class="table table-hover">
				<thead>
				  <tr>
					<th>#</th>
					<th>Image</th>
					<th>Name</th>
					<th>Booking Date</th>
					<th>Payment Type</th>
					<th>Status</th>
					<th>View Booking</th>
				  </tr>
				</thead>
				<tbody>
				  <tr>
					<td>1</td>
					<td><img alt="" class="img-fluid rounded-circle shadow-lg" src="../images/thumb-1.jpg" width="50" height="50"></td>
					<td>Kathy Brown</td>
					<td>12 Jan 2019</td>
					<td>Paypal</td>
					<td><span class="badge badge-pill badge-primary text-uppercase">Booked</span></td>
					<td><a href="../dashboard_bookings.html" class="button gray"><i class="fa fa-eye"></i> View</a></td>
				  </tr>
				  <tr>
					<td>2</td>
					<td><img alt="" class="img-fluid rounded-circle shadow-lg" src="../images/thumb-2.jpg" width="50" height="50"></td>
					<td>Kathy Brown</td>
					<td>12 Jan 2019</td>
					<td>Credit Card</td>
					<td><span class="badge badge-pill badge-primary text-uppercase">Booked</span></td>
					<td><a href="../dashboard_bookings.html" class="button gray"><i class="fa fa-eye"></i> View</a></td>
				  </tr>
				  <tr>
					<td>3</td>
					<td><img alt="" class="img-fluid rounded-circle shadow-lg" src="../images/thumb-3.jpg" width="50" height="50"></td>
					<td>Kathy Brown</td>
					<td>12 Jan 2019</td>
					<td>Paypal</td>
					<td><span class="badge badge-pill badge-danger text-uppercase">Pending</span></td>
					<td><a href="../dashboard_bookings.html" class="button gray"><i class="fa fa-eye"></i> View</a></td>
				  </tr>
				  <tr>
					<td>4</td>
					<td><img alt="" class="img-fluid rounded-circle shadow-lg" src="../images/thumb-1.jpg" width="50" height="50"></td>
					<td>Kathy Brown</td>
					<td>12 Jan 2019</td>
					<td>Paypal</td>
					<td><span class="badge badge-pill badge-danger text-uppercase">Pending</span></td>
					<td><a href="../dashboard_bookings.html" class="button gray"><i class="fa fa-eye"></i> View</a></td>
				  </tr>
				  <tr>
					<td>5</td>
					<td><img alt="" class="img-fluid rounded-circle shadow-lg" src="../images/thumb-2.jpg" width="50" height="50"></td>
					<td>Kathy Brown</td>
					<td>12 Jan 2019</td>
					<td>Paypal</td>
					<td><span class="badge badge-pill badge-danger text-uppercase">Pending</span></td>
					<td><a href="../dashboard_bookings.html" class="button gray"><i class="fa fa-eye"></i> View</a></td>
				  </tr>
				  <tr>
					<td>6</td>
					<td><img alt="" class="img-fluid rounded-circle shadow-lg" src="../images/thumb-3.jpg" width="50" height="50"></td>
					<td>Kathy Brown</td>
					<td>12 Jan 2019</td>
					<td>Paypal</td>
					<td><span class="badge badge-pill badge-canceled text-uppercase">Canceled</span></td>
					<td><a href="../dashboard_bookings.html" class="button gray"><i class="fa fa-eye"></i> View</a></td>
				  </tr>
				</tbody>
			  </table>
			</div>
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