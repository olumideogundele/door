<?php

include("header.php");

?>

  
  <!-- Map -->
  <div id="utf_map_container" class="fullwidth_block-home-map">
    <div id="map" data-map-zoom="9"></div>
    <div class="main_inner_search_block">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="main_input_search_part">
              <div class="main_input_search_part_item">
                <input type="text" placeholder="What are you looking for?" value=""/>
              </div>
              <div class="main_input_search_part_item location">
                <input type="text" placeholder="Search Location..." value=""/>
                <a href="#"><i class="sl sl-icon-location"></i></a> 
			  </div>
              <div class="main_input_search_part_item intro-search-field">
                <select data-placeholder="All Categories" class="selectpicker default" title="All Categories" data-live-search="true" data-selected-text-format="count" data-size="5">
                  <option>Education</option>
                  <option>Business</option>
                  <option>Events</option>
				  <option>Shops</option>
                  <option>Hotels</option>
                  <option>Restaurants</option>
                  <option>Fitness</option>
                </select>
              </div>
              <button class="button" onclick="window.location">Search</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <a href="#" id="scrollEnabling" title="Enable or disable scrolling on map">Scrolling Enable</a> 
  </div>
  
  <section class="fullwidth_block padding-top-75 padding-bottom-70" data-background-color="#ffffff">
    <div class="container">
      <div class="row slick_carousel_slider">
        <div class="col-md-12">
          <h3 class="headline_part centered margin-bottom-45"> Most Visited Places <span>Explore the greates places in the city</span> </h3>
        </div>
		
		<div class="row">
			<div class="col-md-12">
				<div class="simple_slick_carousel_block utf_dots_nav"> 
				  <div class="utf_carousel_item"> <a href="listings_single_page_1.html" class="utf_listing_item-container compact">
					<div class="utf_listing_item"> <img src="images/utf_listing_item-01.jpg" alt=""> <span class="tag"><i class="im im-icon-Chef-Hat"></i> Restaurant</span> <span class="featured_tag">Featured</span>
					  <span class="utf_open_now">Open Now</span>
					  <div class="utf_listing_item_content">
					    <div class="utf_listing_prige_block">							
							<span class="utf_meta_listing_price"><i class="fa fa-tag"></i> $25 - $55</span>							
							<span class="utp_approve_item"><i class="utf_approve_listing"></i></span>
						</div>
						<h3>Chontaduro Barcelona</h3>
						<span><i class="sl sl-icon-location"></i> The Ritz-Carlton, Hong Kong</span>
						<span><i class="sl sl-icon-phone"></i> (415) 796-3633</span>											
					  </div>					  
					</div>
					<div class="utf_star_rating_section" data-rating="4.5">
						<div class="utf_counter_star_rating">(4.5)</div>
						<span class="utf_view_count"><i class="fa fa-eye"></i> 822+</span>
						<span class="like-icon"></span>
					</div>
					</a> 
				  </div>
				  
				  <div class="utf_carousel_item"> <a href="listings_single_page_1.html" class="utf_listing_item-container compact">
					<div class="utf_listing_item"> <img src="images/utf_listing_item-02.jpg" alt=""> <span class="tag"><i class="im im-icon-Electric-Guitar"></i> Events</span>
					  <div class="utf_listing_item_content">
					    <div class="utf_listing_prige_block">							
							<span class="utf_meta_listing_price"><i class="fa fa-tag"></i> $45 - $70</span>							
						</div>
						<h3>The Lounge & Bar</h3>
						<span><i class="sl sl-icon-location"></i> The Ritz-Carlton, Hong Kong</span>
						<span><i class="sl sl-icon-phone"></i> (415) 796-3633</span>												
					  </div>
					</div>
					<div class="utf_star_rating_section" data-rating="4.5">
						<div class="utf_counter_star_rating">(4.5)</div>
						<span class="utf_view_count"><i class="fa fa-eye"></i> 822+</span>
						<span class="like-icon"></span>
					</div>
					</a> 
				  </div>
				  
				  <div class="utf_carousel_item"> <a href="listings_single_page_1.html" class="utf_listing_item-container compact">
					<div class="utf_listing_item"> <img src="images/utf_listing_item-03.jpg" alt=""> <span class="tag"><i class="im im-icon-Hotel"></i> Hotels</span>
					  <span class="utf_closed">Closed</span>
					  <div class="utf_listing_item_content">
					    <div class="utf_listing_prige_block">							
							<span class="utf_meta_listing_price"><i class="fa fa-tag"></i> $25 - $55</span>							
						</div>
						<h3>Westfield Sydney</h3>
						<span><i class="sl sl-icon-location"></i> The Ritz-Carlton, Hong Kong</span>
						<span><i class="sl sl-icon-phone"></i> (415) 796-3633</span>												
					  </div>
					</div>
					<div class="utf_star_rating_section" data-rating="4.5">
						<div class="utf_counter_star_rating">(4.5)</div>
						<span class="utf_view_count"><i class="fa fa-eye"></i> 822+</span>
						<span class="like-icon"></span>
					</div>
					</a> 
				  </div>
				  
				  <div class="utf_carousel_item"> <a href="listings_single_page_1.html" class="utf_listing_item-container compact">
					<div class="utf_listing_item"> <img src="images/utf_listing_item-04.jpg" alt=""> <span class="tag"><i class="im im-icon-Dumbbell"></i> Fitness</span>
					  <div class="utf_listing_item_content">
					    <div class="utf_listing_prige_block">							
							<span class="utf_meta_listing_price"><i class="fa fa-tag"></i> $45 - $70</span>							
							<span class="utp_approve_item"><i class="utf_approve_listing"></i></span>
						</div>
						<h3>Ruby Beauty Center</h3>
						<span><i class="sl sl-icon-location"></i> The Ritz-Carlton, Hong Kong</span>
						<span><i class="sl sl-icon-phone"></i> (415) 796-3633</span>												
					  </div>
					</div>
					<div class="utf_star_rating_section" data-rating="4.5">
						<div class="utf_counter_star_rating">(4.5)</div>
						<span class="utf_view_count"><i class="fa fa-eye"></i> 822+</span>
						<span class="like-icon"></span>
					</div>
					</a> 
				  </div>
				  
				  <div class="utf_carousel_item"> <a href="listings_single_page_1.html" class="utf_listing_item-container compact">
					<div class="utf_listing_item"> <img src="images/utf_listing_item-05.jpg" alt=""> <span class="tag"><i class="im im-icon-Hotel"></i> Hotels</span> <span class="featured_tag">Featured</span>
					  <span class="utf_closed">Closed</span>
					  <div class="utf_listing_item_content">
					    <div class="utf_listing_prige_block">							
							<span class="utf_meta_listing_price"><i class="fa fa-tag"></i> $45 - $70</span>							
						</div>
						<h3>UK Fitness Club</h3>
						<span><i class="sl sl-icon-location"></i> The Ritz-Carlton, Hong Kong</span>
						<span><i class="sl sl-icon-phone"></i> (415) 796-3633</span>												
					  </div>
					</div>
					<div class="utf_star_rating_section" data-rating="4.5">
						<div class="utf_counter_star_rating">(4.5)</div>
						<span class="utf_view_count"><i class="fa fa-eye"></i> 822+</span>
						<span class="like-icon"></span>
					</div>
					</a> 
				   </div>
				  
				  <div class="utf_carousel_item"> <a href="listings_single_page_1.html" class="utf_listing_item-container compact">
					<div class="utf_listing_item"> <img src="images/utf_listing_item-06.jpg" alt=""> <span class="tag"><i class="im im-icon-Chef-Hat"></i> Restaurant</span>
					  <span class="utf_open_now">Open Now</span>
					  <div class="utf_listing_item_content">
					    <div class="utf_listing_prige_block">							
							<span class="utf_meta_listing_price"><i class="fa fa-tag"></i> $25 - $45</span>							
							<span class="utp_approve_item"><i class="utf_approve_listing"></i></span>
						</div>
						<h3>Fairmont Pacific Rim</h3>
						<span><i class="sl sl-icon-location"></i> The Ritz-Carlton, Hong Kong</span>
						<span><i class="sl sl-icon-phone"></i> (415) 796-3633</span>											
					  </div>
					</div>
					<div class="utf_star_rating_section" data-rating="4.5">
						<div class="utf_counter_star_rating">(4.5)</div>
						<span class="utf_view_count"><i class="fa fa-eye"></i> 822+</span>
						<span class="like-icon"></span>
					</div>
					</a>
				  </div>
				</div>
			  </div>
			</div>	
	    </div>
    </div>
  </section>
  
  <section class="utf_testimonial_part fullwidth_block padding-top-75 padding-bottom-75"> 
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <h3 class="headline_part centered"> What Say Our Customers <span class="margin-top-15">Lorem Ipsum is simply dummy text of the printing and type setting industry. Lorem Ipsum has been the industry's standard dummy text ever since...</span> </h3>
        </div>
      </div>
    </div>
    <div class="fullwidth_carousel_container_block margin-top-20">
      <div class="utf_testimonial_carousel testimonials"> 
        <div class="utf_carousel_review_part">
          <div class="utf_testimonial_box">
            <div class="testimonial">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar. Donec a consectetur nulla. Nulla posuere sapien vitae lectus suscipit, et pulvinar nisi tincidunt. Aliquam erat volutpat. Curabitur convallis fringilla diam sed aliquam. Sed tempor iaculis massa faucibus feugiat. In fermentum facilisis massa, a consequat purus viverra.</div>
          </div>
          <div class="utf_testimonial_author"> <img src="images/happy-client-01.jpg" alt="">
            <h4>Denwen Evil <span>Web Developer</span></h4>
          </div>
        </div>
        <div class="utf_carousel_review_part">
          <div class="utf_testimonial_box">
            <div class="testimonial">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar. Donec a consectetur nulla. Nulla posuere sapien vitae lectus suscipit, et pulvinar nisi tincidunt. Aliquam erat volutpat. Curabitur convallis fringilla diam sed aliquam. Sed tempor iaculis massa faucibus feugiat. In fermentum facilisis massa, a consequat purus viverra.</div>
          </div>
          <div class="utf_testimonial_author"> <img src="images/happy-client-02.jpg" alt="">
            <h4>Adam Alloriam <span>Web Developer</span></h4>
          </div>
        </div>
        <div class="utf_carousel_review_part">
          <div class="utf_testimonial_box">
            <div class="testimonial">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar. Donec a consectetur nulla. Nulla posuere sapien vitae lectus suscipit, et pulvinar nisi tincidunt. Aliquam erat volutpat. Curabitur convallis fringilla diam sed aliquam. Sed tempor iaculis massa faucibus feugiat. In fermentum facilisis massa, a consequat purus viverra.</div>
          </div>
          <div class="utf_testimonial_author"> <img src="images/happy-client-03.jpg" alt="">
            <h4>Illa Millia <span>Project Manager</span></h4>
          </div>
        </div>
		<div class="utf_carousel_review_part">
          <div class="utf_testimonial_box">
            <div class="testimonial">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar. Donec a consectetur nulla. Nulla posuere sapien vitae lectus suscipit, et pulvinar nisi tincidunt. Aliquam erat volutpat. Curabitur convallis fringilla diam sed aliquam. Sed tempor iaculis massa faucibus feugiat. In fermentum facilisis massa, a consequat purus viverra.</div>
          </div>
          <div class="utf_testimonial_author"> <img src="images/happy-client-01.jpg" alt="">
            <h4>Denwen Evil <span>Web Developer</span></h4>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  <div class="parallax" data-background="images/slider-bg-02.jpg"> 
    <div class="utf_text_content white-font">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-sm-12">
            <h2>Run and Grow Your Business With Listing<br>Star from Anywhere</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar. Donec a consectetur nulla. Nulla posuere sapien vitae lectus suscipit, et pulvinar nisi tincidunt. Aliquam erat volutpat. Curabitur convallis fringilla diam sed aliquam. Sed tempor iaculis massa faucibus feugiat. In fermentum facilisis massa, a consequat purus viverra.</p>
            <a href="listings_list_with_sidebar.html" class="button margin-top-25">Get Started</a> </div>
        </div>
      </div>
    </div>   
  </div>
  
  <section class="fullwidth_block margin-top-0 padding-top-75 padding-bottom-65" data-background-color="#f9f9f9"> 
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h3 class="headline_part centered margin-bottom-20">Choose Your Plan<span>Discover & connect with top-rated local businesses</span></h3>
        </div>
      </div>
      <div class="row">        
          <div class="utf_pricing_container_block margin-top-30 margin-bottom-20"> 
            <div class="plan featured col-md-3 col-sm-6 col-xs-12">
              <div class="utf_price_plan">
                <h3>Basic</h3>
                <span class="value">$29<span>/Par Month</span></span> <span class="period">Basic User Membership</span> 
			  </div>
              <div class="utf_price_plan_features">
                <ul>
                  <li>One Time Fee</li>
                  <li>One Listing</li>
                  <li>90 Days Availability</li>
                  <li>Featured In Search Results</li>
                  <li>24/7 Support</li>
                </ul>
                <a class="button border" href="#"><i class="sl sl-icon-basket"></i> Order Now</a> 
			  </div>
            </div>
            
            <div class="plan featured col-md-3 col-sm-6 col-xs-12 active">
              <div class="utf_price_plan">
                <h3>Business</h3>
                <span class="value">$49<span>/Par Month</span></span> <span class="period">Business User Membership</span> </div>
              <div class="utf_price_plan_features">
                <ul>
                  <li>One Time Fee</li>
                  <li>One Listing</li>
                  <li>90 Days Availability</li>
                  <li>Featured In Search Results</li>
                  <li>24/7 Support</li>
                </ul>
                <a class="button" href="#"><i class="sl sl-icon-basket"></i> Order Now</a> 
			  </div>
            </div>
            
			<div class="plan featured col-md-3 col-sm-6 col-xs-12">
              <div class="utf_price_plan">
                <h3>Premium</h3>
                <span class="value">$69<span>/Par Month</span></span> <span class="period">Premium User Membership</span> </div>
              <div class="utf_price_plan_features">
                <ul>
                  <li>One Time Fee</li>
                  <li>One Listing</li>
                  <li>90 Days Availability</li>
                  <li>Featured In Search Results</li>
                  <li>24/7 Support</li>
                </ul>
                <a class="button border" href="#"><i class="sl sl-icon-basket"></i> Order Now</a> 
			  </div>
            </div>
			
            <div class="plan featured col-md-3 col-sm-6 col-xs-12">
              <div class="utf_price_plan">
                <h3>Platinum</h3>
                <span class="value">$99<span>/Par Month</span></span> <span class="period">Platinum User Membership</span> </div>
              <div class="utf_price_plan_features">
                <ul>
                  <li>One Time Fee</li>
                  <li>One Listing</li>
                  <li>90 Days Availability</li>
                  <li>Featured In Search Results</li>
                  <li>24/7 Support</li>
                </ul>
                <a class="button border" href="#"><i class="sl sl-icon-basket"></i> Order Now</a> 
			  </div>
            </div>
          </div>        
      </div>      
    </div>    
  </section>
  
  <section class="fullwidth_block padding-top-75 padding-bottom-75">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h3 class="headline_part centered margin-bottom-50"> Letest Tips & Blog<span>Discover & connect with top-rated local businesses</span></h3>
        </div>
      </div>
      <div class="row"> 
        <div class="col-md-3 col-sm-6 col-xs-12"> <a href="blog_detail_post.html" class="blog_compact_part-container">
          <div class="blog_compact_part"> <img src="images/blog-compact-post-01.jpg" alt="">
            <div class="blog_compact_part_content">              
			  <h3>The Most Popular New top Places Listing</h3>
			  <ul class="blog_post_tag_part">
                <li>22 January 2019</li>				
              </ul>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor</p>
            </div>
          </div>
          </a> 
		</div>
        
        <div class="col-md-3 col-sm-6 col-xs-12"> <a href="blog_detail_post.html" class="blog_compact_part-container">
          <div class="blog_compact_part"> <img src="images/blog-compact-post-02.jpg" alt="">
            <div class="blog_compact_part_content">              
              <h3>Greatest Event Places in Listing</h3>
			  <ul class="blog_post_tag_part">
                <li>18 January 2019</li>
              </ul>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor</p>
            </div>
          </div>
          </a> 
		</div>
        
        <div class="col-md-3 col-sm-6 col-xs-12"> <a href="blog_detail_post.html" class="blog_compact_part-container">
          <div class="blog_compact_part"> <img src="images/blog-compact-post-03.jpg" alt="">
            <div class="blog_compact_part_content">              
              <h3>Top 15 Greatest Ideas for Health & Body</h3>
			  <ul class="blog_post_tag_part">
                <li>10 January 2019</li>
              </ul>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor</p>
            </div>
          </div>
          </a> 
		</div>
        
        <div class="col-md-3 col-sm-6 col-xs-12"> <a href="blog_detail_post.html" class="blog_compact_part-container">
          <div class="blog_compact_part"> <img src="images/blog-compact-post-04.jpg" alt="">
            <div class="blog_compact_part_content">              
              <h3>Top 10 Best Clothing Shops in Sydney</h3>
			  <ul class="blog_post_tag_part">
                <li>18 January 2019</li>
              </ul>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor</p>
            </div>
          </div>
          </a> 
		</div>        
        <div class="col-md-12 centered_content"> <a href="blog_page.html" class="button border margin-top-20">View More Blog</a> </div>
      </div>
    </div>
  </section>
  
  <section class="utf_cta_area_item utf_cta_area2_block">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="utf_subscribe_block clearfix">
                    <div class="col-md-8 col-sm-7">
                        <div class="section-heading">
                            <h2 class="utf_sec_title_item utf_sec_title_item2">Subscribe to Newsletter!</h2>
                            <p class="utf_sec_meta">
                                Subscribe to get latest updates and information.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-5">
                        <div class="contact-form-action">
                            <form method="post">
                                <span class="la la-envelope-o"></span>
                                <input class="form-control" type="email" placeholder="Enter your email" required="">
                                <button class="utf_theme_btn" type="submit">Subscribe</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div>
	</section>
  
 
<?php

include("footer.php");
?>