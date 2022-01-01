<?php 
include("header.php");
 //$id =   base64_decode(strtr($_GET['id'], '-_,', '+/='));

include("restricted/includes/view-truck-full-index.php");


?>
    <section id="blog" class="custom-padding">
        <div class="container">
            <!-- Row -->
            <div class="row">
                <!-- Left Content Area -->
                <div class="col-sm-12 col-xs-12 col-md-8">


                    <!-- blog-grid -->
                    <div class="news-box no-space">
                        <?php
                        
                         include("restricted/includes/booking-process.php");
                        
                        ?>
                        
                        
                        
                         <?php
                          if(!isset($_GET['negotiate']))
                            {
                            ?>
                            
                        <!-- post image -->
                        <div class="news-thumb">
                            <!-- slider post -->
                            <div id="post-slider" class="owl-carousel owl-theme">
                                <div class="item"><img class="img-responsive" src="<?php echo 'restricted/'.$front_view_1.''; ?>"  style="width: 751px; height: 400px;" alt=""></div>
                                <div class="item"><img class="img-responsive" src="<?php echo 'restricted/'.$front_view_2.''; ?>" style="width: 751px; height: 400px;" alt=""></div>
                                <div class="item"><img class="img-responsive" src="<?php echo 'restricted/'.$side_view_1.''; ?>" style="width: 751px; height: 400px;"  alt=""></div>
                                <div class="item"><img class="img-responsive" src="<?php echo 'restricted/'.$side_view_2.''; ?>" style="width: 751px; height: 400px;" alt=""></div>
                            </div>
                            <!-- slider post end -->
                            <div class="date"> <strong>21</strong>
<span>Jun</span> </div>
                        </div>
                        
                        
                        <?php
                                
                            }
                                
                                ?>
                        <!-- post image end -->

                        <!-- blog detail -->
                        <div class="news-detail single">
                               <?php
            include("restricted/includes/view-trip-information.php");
            
            ?>
                            <div class="block-content">
        <div class="table-responsive">
            <table class="table table-clean-paddings margin-bottom-0">
                <thead>
                    <tr>
                        <th colspan="2"> TRUCK INFORMATION</th>
                        
                        
                    </tr>
                         <?php
                    if(isset($_GET['negotiate']))
                    {
                    ?>
                     <?php
                    if(isset($_SESSION['email']))
                    {
                    ?>
                       <tr>
                         <td colspan="2">
                           <form action="#" method="post" id="commentform" name="commentform">

                            <div class="row">
                                <div class="col-sm-12">
                                    <!-- Name -->
                                    <div class="form-group">
                                      
                                        
                                        <?php 
                        
                        include("restricted/includes/negotiation-process.php");
                       // include("restricted/includes/booking-process.php");
                        
                        ?>
                                    </div>
                                </div>
                                 <div class="col-sm-12">
                                    <!-- Name -->
                                    <div class="form-group" style="color: blue;">
                                        <label for="author" style=" font-size: 20px;">Hi,  <?php echo $_SESSION['lastnaming'];?></span></label><br>
  <label for="author" style=" font-size: 20px;"><a name="negotiate">Current Estimate: </a>&#8358;<?php echo number_format($estimated, 2); ?></span></label>
                                        
                                    </div>
                               
                                <div class="form-group">
                                        <label for="author">Make your offer<span class="required">*</span></label>
                                        <input type="number" name="offer" class="form-control" id="offer" placeholder="Make Us An Offer" required>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <button type="submit" id="send" name="negotiate" class="btn btn-primary">Make An Offer</button>
                                </div>
                                <!-- $_SESSION['truck'] = $_GET['truck'];
	$_SESSION['search'] = $_GET['search'];
     $value =   base64_decode(strtr($_GET['truck'], '-_,', '+/='));
End col-sm-6 -->

                                
                                <div class="col-sm-12">
                                    <!-- Name -->
                                    <div class="form-group">
                                         
                                    </div>
                                </div>
                            </div>
                            <!-- End row -->

                        </form>
                           
                           </td>
                       </tr>
                                
                                <?php
                    }
                        else{
                            
                        echo '<div class="alert alert-success" role="alert">
		<button aria-label="Close" class="close" data-dismiss="alert" type="button">
		   <span aria-hidden="true">&times;</span>
	  </button>
		<strong>Sorry</strong>   Please <a href = "sign-in">SIGN IN</a> or <a href = "sign-in">SIGN UP</a> to proceed.
	</div>';    
                        }
                        }
                        ?>
                    
                    
                    
                     <tr>
                        <td>
                           <div class="contact-container"><a href="#">Amount</a> <span>Estimated Amount</span></div>
                        </td>
                        <td>
                            
                            <?php
                            if($negotiation_status == "Yes")
                            {
                            ?>
                            
                            
                            
                            
                            <div class="post-bottom clearfix">
                                <div class="tag_cloud">
                                    <a href="search-result-details?truck=<?php echo $value123; ?>&search=<?php echo $value89; ?>&negotiate=now#negotiate" class="btn btn-lg btn-clean">Negotiate &#8358;<?php echo number_format($estimated, 2); ?></a>
                                    
                                </div>
                                 
                            </div>
                            <?php
                            }
                            else
                            {
                                
                            $search_value =   base64_decode(strtr($value89, '-_,', '+/='));     
         //'+/=****', '-_,****'
                                
 $sql = "INSERT INTO `negotiation_table`(`code`, `count`, `amount`, `status`, `created_date`, `registeredby`) VALUES
('$search_value', '1', '$estimated','1', '$datetime', '$emailing')";
 
                               
 $process = mysqli_query($conn, $sql) or die(mysqli_error($conn));
                                 $search_value12 =  	strtr(base64_encode($search_value), '+/=****', '-_,****');     
                        
                               
                                
                                ?>
                             <div class="post-bottom clearfix">
                                <div class="">
                           Pay <strong style="color: crimson;"> &#8358;<?php echo number_format($estimated, 2); ?></strong> With:
                            </div>
                                 
                            </div>
                            
                            <?php
                                
                                if(isset($_SESSION['email']))
                                {
                                 $order_status = $myName->showName($conn, "SELECT  `status` FROM `search_result` WHERE  `code` = '$search_value'"); 
                                    if($order_status =='4')
                                    {
                                ?>
                            
                            <div class="post-bottom clearfix">
                                <div class="tag_cloud">
                          
 <a class="label"   onClick="return confirm(\'Are you sure you want to continue?\')" href="payment-proceed?payment=<?php echo $search_value12; ?>">  <?php ?> <img src="images/RAVE.png" width="150px" height="60px"></a>
                                </div>
                                 
                            </div>
                            
                            <?php
                                        }
                                    else{
                                        
                                        
                        
                        ?>
                                
                            
                            
           <div class="post-bottom clearfix">
                                <div class="tag_cloud">
                    
 <a class="label"   onClick="return confirm(\'Are you sure you want to continue?\')" href="?booking=<?php echo $search_value12; ?>&truck=<?php echo $_GET['truck']; ?>&search=<?php echo $search_value12; ?>">Book Now   </a>
                                </div>
                                 
                            </div>                    
                            
                            
                            <?php
                                        
                                        
                                        
                                        
                                    }
                                }
                                else
                                {
                                    
        echo '<div class="alert alert-success" role="alert">
		<button aria-label="Close" class="close" data-dismiss="alert" type="button">
		   <span aria-hidden="true">&times;</span>
	  </button>
		<strong>Sorry</strong>   Please <a href = "sign-in"><strong>SIGN IN</strong></a> or <a href = "sign-in"><strong>SIGN UP</strong></a> to proceed.
	</div>';                                   
                                    
                                    
                                }
                            }
                                ?>
                        </td>
                    </tr>
                    
               
                </thead>
                <tbody>
                    
                    
                    
                    
                    
                    <tr>
                        <td>
                           <div class="contact-container"><a href="#">Brand</a> <span>Truck Brand</span></div>
                        </td>
                        <td><?php echo $truck_brand; ?></td>
                    </tr>
                    
                    
                       <tr>
                        <td>
                           <div class="contact-container"><a href="#">Capacity</a> <span>Truck Capacity</span></div>
                        </td>
                        <td><?php echo $total_capacity; ?></td>
                    </tr>
                       <tr>
                        <td>
                           <div class="contact-container"><a href="#">Year</a> <span>Truck Model/Year</span></div>
                        </td>
                        <td><?php echo  $year; ?></td>
                    </tr>
                      <tr>
                        <td>
                           <div class="contact-container"><a href="#">Plate</a> <span>Truck Registeration Number</span></div>
                        </td>
                        <td><?php echo   	$truck_plate_number ; ?></td>
                    </tr>
                     
                    
                   
                     
                    <tr>
                        <td>
                           <div class="contact-container"><a href="#">State</a> <span>Truck State</span></div>
                        </td>
                        <td><?php echo   	$state_name ; ?></td>
                    </tr>
                     
                    <tr>
                        <td>
                           <div class="contact-container"><a href="#">Location</a> <span>Truck Operating Location</span></div>
                        </td>
                        <td><?php echo   	$location ; ?></td>
                    </tr>
                     
                     <tr>
                        <td>
                           <div class="contact-container"><a href="#">Owner</a> <span>Truck Owner</span></div>
                        </td>
                        <td><?php echo   	$owner ; ?></td>
                    </tr> 
                    <tr>
                        <td>
                           
                        </td>
                        <td> </td>
                    </tr>
                  
             
                </tbody>
            </table>
            
         
            
            <table class="table table-clean-paddings margin-bottom-0">
                <thead>
                    <tr>
                        <th colspan="2"> TRIP INFORMATION</th>
                        
                        
                    </tr>
                </thead>
                <tbody>
                   
                       <tr>
                        <td>
                           <div class="contact-container"><a href="#">Loading</a> <span>Loading Location</span></div>
                        </td>
                        <td><?php echo $loading; ?></td>
                    </tr>
                       <tr>
                        <td>
                           <div class="contact-container"><a href="#">Destination</a> <span>Drop Off Location</span></div>
                        </td>
                        <td><?php echo  $destination; ?></td>
                    </tr>
                      <tr>
                        <td>
                           <div class="contact-container"><a href="#">Distance</a> <span>Calculated Distance(Loading - Destination)</span></div>
                        </td>
                        <td><?php echo $distance ; ?> km</td>
                    </tr>
                     
                    
                   
                     
                    <tr>
                        <td>
                           <div class="contact-container"><a href="#">Date</a> <span>Truck Loading Date</span></div>
                        </td>
                        <td><?php echo $pick_up_date ; ?></td>
                    </tr>
                     
                    <tr>
                        <td>
                           <div class="contact-container"><a href="#">Product</a> <span>Product To Load</span></div>
                        </td>
                        <td><?php echo $product ; ?></td>
                    </tr>
                     
                     <tr>
                        <td>
                           <div class="contact-container"><a href="#">Search Date</a> <span>Date Of Search</span></div>
                        </td>
                        <td><?php echo $created_date ; ?></td>
                    </tr>
                  
             
                </tbody>
            </table>
        </div>
    </div>
     <p></p>
     <p></p> <p></p>
     <p></p>
              
                        </div>
                        <!-- blog detail end -->

                    </div>
                    <!-- blog-grid end -->

                    <div class="clearfix"></div>




                    <!-- blog-comment section -->
 
                    <div class="blog-section">

                        <div class="custom-heading">
                            <h2>FeedBacks/Reviews (<?php
                                $comment_cont = $myName->showName($conn, "SELECT  count(`id`) FROM  `feedback` WHERE  `truck_owner` = '$account_number'");
                                if(empty($comment_cont))
                                {
                                  echo "0";  
                                }
                                else
                                {
                                  echo $comment_cont;   
                                }
                               
                                
                                ?>)</h2>
                        </div>

                        <ol class="comment-list">
                         
                            <?php
                            include("restricted/includes/view-all-review.php");
                            
                            ?>
                            
                            
                            
                            
                            
                            
                            
                          <!--  
                            <li class="comment">
                                <div class="comment-info">
                                    <img alt="author" src="images/blog/comment.png" class="pull-left hidden-xs">
                                    <div class="author-desc">
                                        <div class="author-title">
                                            <strong>Arslan Tariq</strong>
                                            <ul class="list-inline pull-right">
                                                <li><a href="#">22 Feb 2016</a></li>
                                                <li><a href="#"><i class="fa fa-reply"></i> Reply</a></li>
                                            </ul>
                                        </div>
                                        <p>You wanna be where everyboody knows Your name. And a we knooow Flipper lives in a world full of wonder flying there-under under the sea creepy and kooky</p>
                                    </div>
                                </div>
                                <ol class="children">
                                    <li class="comment">
                                        <div class="comment-info">
                                            <img alt="author" src="images/blog/comment.png" class="pull-left hidden-xs">
                                            <div class="author-desc">
                                                <div class="author-title">
                                                    <strong>John Cena</strong>
                                                    <ul class="list-inline pull-right">
                                                        <li><a href="#">22 Feb 2016</a></li>
                                                        <li><a href="#"><i class="fa fa-reply"></i> Reply</a></li>
                                                    </ul>
                                                </div>
                                                <p>The first mate and his Skipper too this is will do their very best to make the most others comfortable in their tropic lives in a world of wonder.</p>
                                            </div>
                                        </div>
                                       
                                    </li>
                                </ol>
                            
                            </li>
                         
                            <li class="comment">
                                <div class="comment-info">
                                    <img alt="author" src="images/blog/comment.png" class="pull-left hidden-xs">
                                    <div class="author-desc">
                                        <div class="author-title">
                                            <strong>Roman Smith</strong>
                                            <ul class="list-inline pull-right">
                                                <li><a href="#">18 Jan 2016</a></li>
                                                <li><a href="#"><i class="fa fa-reply"></i> Reply</a></li>
                                            </ul>
                                        </div>
                                        <p>You wanna be where everyboody knows Your name. And a we knooow Flipper lives in a world full of wonder flying there-under under the sea creepy and kooky</p>
                                    </div>
                                </div>
                               
                            </li>-->
                       
                        </ol>

                    </div>
                 
 
                    <div class="blog-section">

                        <div class="custom-heading">
                            <h2>Post Your Feedback/Review</h2>
 <?php
											include("restricted/includes/process-review.php");
											
											?>    

                        <form action="#" method="post" id="commentform" name="commentform">

                            <div class="row">

                                <div class="col-sm-6">
                                    
                                    <div class="form-group">
                                        <label for="author">Name<span class="required">*</span></label>
                                        <input type="text" name="name" class="form-control" id="name" placeholder="Name" value="<?php if(!empty($customer_name)){ echo $customer_name;} ?>" required>
                                    </div>
                                </div> 
                                <div class="col-sm-6">
                                 
                                    <div class="form-group">
                                        <label for="email">Email<span class="required">*</span></label>
 <input type="email" name="email" class="form-control" id="email" placeholder="Email"  value="<?php if(!empty($customer_email)){ echo $customer_email;} ?>" required> 
                                        
                                        
<input type="hidden" name="truck_owner" class="form-control"   value="<?php if(!empty($account_number)){ echo $account_number;} ?>" required>
                                    </div>
                                </div>
                     

                                <div class="col-sm-12">
                                  
                                    <div class="form-group">
                                        <label for="comment">Comment<span class="required">*</span></label>
                                        <textarea class="form-control" name="comment" id="comment" rows="10" required></textarea>
                                    </div>
                                </div>
                            

                                <div class="col-sm-6">
                                    <button type="submit" id="send" name="send" class="btn btn-primary">Post  your comment</button>
                                </div>
                               

                            </div>
                          

                        </form>


                    </div>
              

 
                </div>
               
 
                
                    <!-- sidebar end -->

                </div>
                <!-- Right Sidebar Area End -->
            </div>
            <!-- Row End -->
        </div>
        <!-- end container -->
    </section>
    <!-- =-=-=-=-=-=-= Blog & News end =-=-=-=-=-=-= -->



    <!-- =-=-=-=-=-=-= Call To Action =-=-=-=-=-=-= -->
    <div class="parallex-small ">
        <div class="container">
            <div class="row custom-padding-20 "> <div class="col-md-8 col-sm-8">
                    <div class="parallex-text">
                        <h4>Not sure which solution fits you business needs?</h4>
                    </div>
                    <!-- end subsection-text -->
                </div>
                <!-- end col-md-8 -->

                <div class="col-md-4 col-sm-4">
                    <div class="parallex-button"> <a href="javascript:void(0)" class="btn btn-lg btn-clean">Get a quote <i class="fa fa-angle-double-right "></i></a> </div>
                    <!-- end parallex-button -->
                </div>
                <!-- end col-md-4 -->

            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- =-=-=-=-=-=-= Call To Action End =-=-=-=-=-=-= -->

   <?php 

include("footer.php");

?>