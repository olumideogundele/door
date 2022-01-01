 <!-- Footer -->
  <div id="footer" class="footer_sticky_part"> 
    <div class="container">
      <div class="row">
        <div class="col-md-2 col-sm-3 col-xs-6">
          <h4>Useful Links</h4>
          <ul class="social_footer_link">
            <li><a href="#">Home</a></li>
            <li><a href="#">Listing</a></li>
            <li><a href="#">Blog</a></li>
            <li><a href="#">Privacy Policy</a></li>
            <li><a href="#">Contact</a></li>
          </ul>
        </div>
        <div class="col-md-2 col-sm-3 col-xs-6">
          <h4>My Account</h4>
          <ul class="social_footer_link">
            <li><a href="#">Dashboard</a></li>
            <li><a href="#">Profile</a></li>
            <li><a href="#">My Listing</a></li>
            <li><a href="#">Favorites</a></li>
          </ul>
        </div>
        <div class="col-md-2 col-sm-3 col-xs-6">
          <h4>Pages</h4>
          <ul class="social_footer_link">
            <li><a href="#">Blog</a></li>
            <li><a href="#">Our Partners</a></li>
            <li><a href="#">How It Work</a></li>
            <li><a href="#">Privacy Policy</a></li>
          </ul>
        </div>
        <div class="col-md-2 col-sm-3 col-xs-6">
          <h4>Help</h4>
          <ul class="social_footer_link">
            <li><a href="#">Sign In</a></li>
            <li><a href="#">Register</a></li>
            <li><a href="#">Add Listing</a></li>
            <li><a href="#">Pricing</a></li>
            <li><a href="#">Contact Us</a></li>
          </ul>
        </div>
        <div class="col-md-4 col-sm-12 col-xs-12"> 
          <h4>About Us</h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore</p>          
        </div>
      </div>
      
      <div class="row">
        <div class="col-md-12">
          <div class="footer_copyright_part">Copyright © 2019 All Rights Reserved.</div>
        </div>
      </div>
    </div>
  </div>
  <div id="bottom_backto_top"><a href="#"></a></div>
</div>

<!-- Scripts --> 
<script src="scripts/jquery-3.4.1.min.js"></script> 
<script src="scripts/chosen.min.js"></script> 
<script src="scripts/slick.min.js"></script> 
<script src="scripts/rangeslider.min.js"></script> 
<script src="scripts/magnific-popup.min.js"></script> 
<script src="scripts/jquery-ui.min.js"></script> 
<script src="scripts/bootstrap-select.min.js"></script>
<script src="scripts/mmenu.js"></script>
<script src="scripts/tooltips.min.js"></script> 
<script src="scripts/color_switcher.js"></script>
<script src="scripts/jquery_custom.js"></script> 


 
<script src="scripts/perfect-scrollbar.min.js"></script>
 





<!-- Maps --> 
<!--<script src="http://maps.google.com/maps/api/js??key=AIzaSyAGrHdhUTvfj1Fyl9Dx7_e7RstThaE1uHo&sensor=false&amp;language=en"></script> -->
	
	
	
	
	
	
	
 <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAGrHdhUTvfj1Fyl9Dx7_e7RstThaE1uHo&libraries=places"></script>
	
<script src="scripts/infobox.min.js"></script> 
<script src="scripts/markerclusterer.js"></script> 
<!--<script src="scripts/maps.js"></script>-->

	
	<script type="text/javascript">
	
var infoBox_ratingType = 'utf_star_rating_section';
(function($) {
    "use strict";
    function mainMap() {
        var ib = new InfoBox();
        function locationData(locationURL, locationImg, locationTitle, locationAddress, locationRating, locationRatingCounter) {
            return ('' + '<a href="' + locationURL + '" class="listing-img-container">' + '<div class="infoBox-close"><i class="fa fa-times"></i></div>' + '<img src="' + locationImg + '" alt="">' + '</a>' + '<div class="listing-content">' + '<div class="listing-title">' + '<div class="utf_listing_item_content">' + '<h3>' + locationTitle + '</h3>' + '<span>' + locationAddress + '</span>' + '</div>' + '</div>' + '</div>')
        }
        var locations = [
            [locationData('listings_single_page_1.html', 'images/utf_listing_item-01.jpg', "Most popular places listing", 'The Ritz-Carlton, Hong Kong'), 40.94401669296697, -74.16938781738281, 1, '<i class="im im-icon-Cocktail"></i>'],
            [locationData('listings_single_page_2.html', 'images/utf_listing_item-02.jpg', 'Most popular places listing', 'The Ritz-Carlton, Hong Kong'), 40.77055783505125, -74.26002502441406, 2, '<i class="im im-icon-Chef-Hat"></i>'],
            [locationData('listings_single_page_3.html', 'images/utf_listing_item-03.jpg', 'Most popular places listing', 'The Ritz-Carlton, Hong Kong'), 40.7427837, -73.11445617675781, 3, '<i class="im im-icon-Home-2"></i>'],
            [locationData('listings_single_page_1.html', 'images/utf_listing_item-04.jpg', 'Most popular places listing', 'The Ritz-Carlton, Hong Kong'), 40.70437865245596, -73.98674011230469, 4, '<i class="im im-icon-Hotel"></i>'],
            [locationData('listings_single_page_2.html', 'images/utf_listing_item-05.jpg', 'Most popular places listing', 'The Ritz-Carlton, Hong Kong'), 40.641311, -73.778139, 5, '<i class="im im-icon-Dumbbell"></i>'],
            [locationData('listings_single_page_3.html', 'images/utf_listing_item-06.jpg', 'Most popular places listing', 'The Ritz-Carlton, Hong Kong'), 41.080938, -74.535957, 6, '<i class="im im-icon-Coffee"></i>'],
            [locationData('listings_single_page_1.html', 'images/utf_listing_item-04.jpg', 'Most popular places listing', 'The Ritz-Carlton, Hong Kong'), 41.079386, -74.519478, 7, '<i class="im im-icon-Hamburger"></i>'],			
        ];
        google.maps.event.addListener(ib, 'domready', function() {
            if (infoBox_ratingType = 'numerical-rating') {
                numericalRating('.infoBox .' + infoBox_ratingType + '');
            }
            if (infoBox_ratingType = 'utf_star_rating_section') {
                starRating('.infoBox .' + infoBox_ratingType + '');
            }
        });
        var mapZoomAttr = $('#map').attr('data-map-zoom');
        var mapScrollAttr = $('#map').attr('data-map-scroll');
        if (typeof mapZoomAttr !== typeof undefined && mapZoomAttr !== false) {
            var zoomLevel = parseInt(mapZoomAttr);
        } else {
            var zoomLevel = 5;
        }
        if (typeof mapScrollAttr !== typeof undefined && mapScrollAttr !== false) {
            var scrollEnabled = parseInt(mapScrollAttr);
        } else {
            var scrollEnabled = false;
        }
        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: zoomLevel,
            scrollwheel: scrollEnabled,
            center: new google.maps.LatLng(40.80, -73.70),
            mapTypeId: google.maps.MapTypeId.ROADMAP,
            zoomControl: false,
            mapTypeControl: false,
            scaleControl: false,
            panControl: false,
            navigationControl: false,
            utf_street_view_btnControl: false,
            gestureHandling: 'cooperative',
            styles: [{
                "featureType": "poi",
                "elementType": "labels.text.fill",
                "stylers": [{
                    "color": "#747474"
                }, {
                    "lightness": "23"
                }]
            }, {
                "featureType": "poi.attraction",
                "elementType": "geometry.fill",
                "stylers": [{
                    "color": "#f38eb0"
                }]
            }, {
                "featureType": "poi.government",
                "elementType": "geometry.fill",
                "stylers": [{
                    "color": "#ced7db"
                }]
            }, {
                "featureType": "poi.medical",
                "elementType": "geometry.fill",
                "stylers": [{
                    "color": "#ffa5a8"
                }]
            }, {
                "featureType": "poi.park",
                "elementType": "geometry.fill",
                "stylers": [{
                    "color": "#c7e5c8"
                }]
            }, {
                "featureType": "poi.place_of_worship",
                "elementType": "geometry.fill",
                "stylers": [{
                    "color": "#d6cbc7"
                }]
            }, {
                "featureType": "poi.school",
                "elementType": "geometry.fill",
                "stylers": [{
                    "color": "#c4c9e8"
                }]
            }, {
                "featureType": "poi.sports_complex",
                "elementType": "geometry.fill",
                "stylers": [{
                    "color": "#b1eaf1"
                }]
            }, {
                "featureType": "road",
                "elementType": "geometry",
                "stylers": [{
                    "lightness": "100"
                }]
            }, {
                "featureType": "road",
                "elementType": "labels",
                "stylers": [{
                    "visibility": "off"
                }, {
                    "lightness": "100"
                }]
            }, {
                "featureType": "road.highway",
                "elementType": "geometry.fill",
                "stylers": [{
                    "color": "#ffd4a5"
                }]
            }, {
                "featureType": "road.arterial",
                "elementType": "geometry.fill",
                "stylers": [{
                    "color": "#ffe9d2"
                }]
            }, {
                "featureType": "road.local",
                "elementType": "all",
                "stylers": [{
                    "visibility": "simplified"
                }]
            }, {
                "featureType": "road.local",
                "elementType": "geometry.fill",
                "stylers": [{
                    "weight": "3.00"
                }]
            }, {
                "featureType": "road.local",
                "elementType": "geometry.stroke",
                "stylers": [{
                    "weight": "0.30"
                }]
            }, {
                "featureType": "road.local",
                "elementType": "labels.text",
                "stylers": [{
                    "visibility": "on"
                }]
            }, {
                "featureType": "road.local",
                "elementType": "labels.text.fill",
                "stylers": [{
                    "color": "#747474"
                }, {
                    "lightness": "36"
                }]
            }, {
                "featureType": "road.local",
                "elementType": "labels.text.stroke",
                "stylers": [{
                    "color": "#e9e5dc"
                }, {
                    "lightness": "30"
                }]
            }, {
                "featureType": "transit.line",
                "elementType": "geometry",
                "stylers": [{
                    "visibility": "on"
                }, {
                    "lightness": "100"
                }]
            }, {
                "featureType": "water",
                "elementType": "all",
                "stylers": [{
                    "color": "#d2e7f7"
                }]
            }]
        });
        $('.utf_listing_item-container').on('mouseover', function() {
            var listingAttr = $(this).data('marker-id');
            if (listingAttr !== undefined) {
                var listing_id = $(this).data('marker-id') - 1;
                var marker_div = allMarkers[listing_id].div;
                $(marker_div).addClass('clicked');
                $(this).on('mouseout', function() {
                    if ($(marker_div).is(":not(.infoBox-opened)")) {
                        $(marker_div).removeClass('clicked');
                    }
                });
            }
        });
        var boxText = document.createElement("div");
        boxText.className = 'map-box'
        var currentInfobox;
        var boxOptions = {
            content: boxText,
            disableAutoPan: false,
            alignBottom: true,
            maxWidth: 0,
            pixelOffset: new google.maps.Size(-134, -55),
            zIndex: null,
            boxStyle: {
                width: "270px"
            },
            closeBoxMargin: "0",
            closeBoxURL: "",
            infoBoxClearance: new google.maps.Size(25, 25),
            isHidden: false,
            pane: "floatPane",
            enableEventPropagation: false,
        };
        var markerCluster, overlay, i;
        var allMarkers = [];
        var clusterStyles = [{
            textColor: 'white',
            url: '',
            height: 50,
            width: 50
        }];
        var markerIco;
        for (i = 0; i < locations.length; i++) {
            markerIco = locations[i][4];
            var overlaypositions = new google.maps.LatLng(locations[i][1], locations[i][2]),
                overlay = new CustomMarker(overlaypositions, map, {
                    marker_id: i
                }, markerIco);
            allMarkers.push(overlay);
            google.maps.event.addDomListener(overlay, 'click', (function(overlay, i) {
                return function() {
                    ib.setOptions(boxOptions);
                    boxText.innerHTML = locations[i][0];
                    ib.open(map, overlay);
                    currentInfobox = locations[i][3];
                    google.maps.event.addListener(ib, 'domready', function() {
                        $('.infoBox-close').click(function(e) {
                            e.preventDefault();
                            ib.close();
                            $('.map-marker-container').removeClass('clicked infoBox-opened');
                        });
                    });
                }
            })(overlay, i));
        }
        var options = {
            imagePath: 'images/',
            styles: clusterStyles,
            minClusterSize: 2
        };
        markerCluster = new MarkerClusterer(map, allMarkers, options);
        google.maps.event.addDomListener(window, "resize", function() {
            var center = map.getCenter();
            google.maps.event.trigger(map, "resize");
            map.setCenter(center);
        });
        var zoomControlDiv = document.createElement('div');
        var zoomControl = new ZoomControl(zoomControlDiv, map);

        function ZoomControl(controlDiv, map) {
            zoomControlDiv.index = 1;
            map.controls[google.maps.ControlPosition.RIGHT_CENTER].push(zoomControlDiv);
            controlDiv.style.padding = '5px';
            controlDiv.className = "zoomControlWrapper";
            var controlWrapper = document.createElement('div');
            controlDiv.appendChild(controlWrapper);
            var zoomInButton = document.createElement('div');
            zoomInButton.className = "custom-zoom-in";
            controlWrapper.appendChild(zoomInButton);
            var zoomOutButton = document.createElement('div');
            zoomOutButton.className = "custom-zoom-out";
            controlWrapper.appendChild(zoomOutButton);
            google.maps.event.addDomListener(zoomInButton, 'click', function() {
                map.setZoom(map.getZoom() + 1);
            });
            google.maps.event.addDomListener(zoomOutButton, 'click', function() {
                map.setZoom(map.getZoom() - 1);
            });
        }
        var scrollEnabling = $('#scrollEnabling');
        $(scrollEnabling).click(function(e) {
            e.preventDefault();
            $(this).toggleClass("enabled");
            if ($(this).is(".enabled")) {
                map.setOptions({
                    'scrollwheel': true
                });
            } else {
                map.setOptions({
                    'scrollwheel': false
                });
            }
        })
        $("#geoLocation, .input-with-icon.location a").click(function(e) {
            e.preventDefault();
            geolocate();
        });

        function geolocate() {
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(function(position) {
                    var pos = new google.maps.LatLng(position.coords.latitude, position.coords.longitude);
                    map.setCenter(pos);
                    map.setZoom(12);
                });
            }
        }
    }
    var map = document.getElementById('map');
    if (typeof(map) != 'undefined' && map != null) {
        google.maps.event.addDomListener(window, 'load', mainMap);
        google.maps.event.addDomListener(window, 'resize', mainMap);
    }

    function utf_single_listingmap() {
        var myLatlng = new google.maps.LatLng({
            lng: $('#utf_single_listingmap').data('longitude'),
            lat: $('#utf_single_listingmap').data('latitude'),
        });
        var single_map = new google.maps.Map(document.getElementById('utf_single_listingmap'), {
            zoom: 15,
            center: myLatlng,
            scrollwheel: false,
            zoomControl: false,
            mapTypeControl: false,
            scaleControl: false,
            panControl: false,
            navigationControl: false,
            utf_street_view_btnControl: false,
            styles: [{
                "featureType": "poi",
                "elementType": "labels.text.fill",
                "stylers": [{
                    "color": "#747474"
                }, {
                    "lightness": "23"
                }]
            }, {
                "featureType": "poi.attraction",
                "elementType": "geometry.fill",
                "stylers": [{
                    "color": "#f38eb0"
                }]
            }, {
                "featureType": "poi.government",
                "elementType": "geometry.fill",
                "stylers": [{
                    "color": "#ced7db"
                }]
            }, {
                "featureType": "poi.medical",
                "elementType": "geometry.fill",
                "stylers": [{
                    "color": "#ffa5a8"
                }]
            }, {
                "featureType": "poi.park",
                "elementType": "geometry.fill",
                "stylers": [{
                    "color": "#c7e5c8"
                }]
            }, {
                "featureType": "poi.place_of_worship",
                "elementType": "geometry.fill",
                "stylers": [{
                    "color": "#d6cbc7"
                }]
            }, {
                "featureType": "poi.school",
                "elementType": "geometry.fill",
                "stylers": [{
                    "color": "#c4c9e8"
                }]
            }, {
                "featureType": "poi.sports_complex",
                "elementType": "geometry.fill",
                "stylers": [{
                    "color": "#b1eaf1"
                }]
            }, {
                "featureType": "road",
                "elementType": "geometry",
                "stylers": [{
                    "lightness": "100"
                }]
            }, {
                "featureType": "road",
                "elementType": "labels",
                "stylers": [{
                    "visibility": "off"
                }, {
                    "lightness": "100"
                }]
            }, {
                "featureType": "road.highway",
                "elementType": "geometry.fill",
                "stylers": [{
                    "color": "#ffd4a5"
                }]
            }, {
                "featureType": "road.arterial",
                "elementType": "geometry.fill",
                "stylers": [{
                    "color": "#ffe9d2"
                }]
            }, {
                "featureType": "road.local",
                "elementType": "all",
                "stylers": [{
                    "visibility": "simplified"
                }]
            }, {
                "featureType": "road.local",
                "elementType": "geometry.fill",
                "stylers": [{
                    "weight": "3.00"
                }]
            }, {
                "featureType": "road.local",
                "elementType": "geometry.stroke",
                "stylers": [{
                    "weight": "0.30"
                }]
            }, {
                "featureType": "road.local",
                "elementType": "labels.text",
                "stylers": [{
                    "visibility": "on"
                }]
            }, {
                "featureType": "road.local",
                "elementType": "labels.text.fill",
                "stylers": [{
                    "color": "#747474"
                }, {
                    "lightness": "36"
                }]
            }, {
                "featureType": "road.local",
                "elementType": "labels.text.stroke",
                "stylers": [{
                    "color": "#e9e5dc"
                }, {
                    "lightness": "30"
                }]
            }, {
                "featureType": "transit.line",
                "elementType": "geometry",
                "stylers": [{
                    "visibility": "on"
                }, {
                    "lightness": "100"
                }]
            }, {
                "featureType": "water",
                "elementType": "all",
                "stylers": [{
                    "color": "#d2e7f7"
                }]
            }]
        });
        $('#utf_street_view_btn').click(function(e) {
            e.preventDefault();
            single_map.getStreetView().setOptions({
                visible: true,
                position: myLatlng
            });
        });
        var zoomControlDiv = document.createElement('div');
        var zoomControl = new ZoomControl(zoomControlDiv, single_map);

        function ZoomControl(controlDiv, single_map) {
            zoomControlDiv.index = 1;
            single_map.controls[google.maps.ControlPosition.RIGHT_CENTER].push(zoomControlDiv);
            controlDiv.style.padding = '5px';
            var controlWrapper = document.createElement('div');
            controlDiv.appendChild(controlWrapper);
            var zoomInButton = document.createElement('div');
            zoomInButton.className = "custom-zoom-in";
            controlWrapper.appendChild(zoomInButton);
            var zoomOutButton = document.createElement('div');
            zoomOutButton.className = "custom-zoom-out";
            controlWrapper.appendChild(zoomOutButton);
            google.maps.event.addDomListener(zoomInButton, 'click', function() {
                single_map.setZoom(single_map.getZoom() + 1);
            });
            google.maps.event.addDomListener(zoomOutButton, 'click', function() {
                single_map.setZoom(single_map.getZoom() - 1);
            });
        }
        var singleMapIco = "<i class='" + $('#utf_single_listingmap').data('map-icon') + "'></i>";
        new CustomMarker(myLatlng, single_map, {
            marker_id: '1'
        }, singleMapIco);
    }
    var single_map = document.getElementById('utf_single_listingmap');
    if (typeof(single_map) != 'undefined' && single_map != null) {
        google.maps.event.addDomListener(window, 'load', utf_single_listingmap);
        google.maps.event.addDomListener(window, 'resize', utf_single_listingmap);
    }

    function CustomMarker(latlng, map, args, markerIco) {
        this.latlng = latlng;
        this.args = args;
        this.markerIco = markerIco;
        this.setMap(map);
    }
    CustomMarker.prototype = new google.maps.OverlayView();
    CustomMarker.prototype.draw = function() {
        var self = this;
        var div = this.div;
        if (!div) {
            div = this.div = document.createElement('div');
            div.className = 'map-marker-container';
            div.innerHTML = '<div class="marker-container">' + '<div class="marker-card">' + '<div class="front face">' + self.markerIco + '</div>' + '<div class="back face">' + self.markerIco + '</div>' + '<div class="marker-arrow"></div>' + '</div>' + '</div>'
            google.maps.event.addDomListener(div, "click", function(event) {
                $('.map-marker-container').removeClass('clicked infoBox-opened');
                google.maps.event.trigger(self, "click");
                $(this).addClass('clicked infoBox-opened');
            });
            if (typeof(self.args.marker_id) !== 'undefined') {
                div.dataset.marker_id = self.args.marker_id;
            }
            var panes = this.getPanes();
            panes.overlayImage.appendChild(div);
        }
        var point = this.getProjection().fromLatLngToDivPixel(this.latlng);
        if (point) {
            div.style.left = (point.x) + 'px';
            div.style.top = (point.y) + 'px';
        }
    };
    CustomMarker.prototype.remove = function() {
        if (this.div) {
            this.div.parentNode.removeChild(this.div);
            this.div = null;
            $(this).removeClass('clicked');
        }
    };
    CustomMarker.prototype.getPosition = function() {
        return this.latlng;
    };
})(this.jQuery);	
	
	
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