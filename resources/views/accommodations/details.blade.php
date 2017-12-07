@extends('layouts.app')

@section('content')

    
        <div class="container">
            <ol class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li><a href="#">{{ Helper::un_slug_gen($type) }}</a></li>
                <li class="active">{{ $accommodation->title }}</li>
            </ol>
            <!--end breadcrumb-->
            <div class="row">
                
                <div class="col-md-12 col-sm-12">
                    <div class="quick-navigation" data-fixed-after-touch="">
                        <div class="wrapper" style="width: 100%;">
                            <ul>
                                <li><a href="#description" class="scroll">Description</a></li>
                                <li><a href="#map" class="scroll">Map</a></li>
                                <li><a href="#facilities" class="scroll">Facilities</a></li>
                                <li><a href="#additional-information" class="scroll">Additional Information</a></li>
                                <li><a href="#reviews" class="scroll">Reviews</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="main-content">
                        <div class="title">
                            <div class="left">
                                <h1>{{ $accommodation->title }}<span class="rating"><i class="fa fa-star"></i>{{ $accommodation->rating }}</span></h1>
                                <h3><a href="#">{{ $accommodation->location }}</a></h3>
                            </div>
                            <div class="right">
                                <a href="#map" class="icon scroll"><i class="fa fa-map-marker"></i>See on the map</a>
                                <a href="#availability" class="btn btn-primary btn-rounded scroll">Reserve Today</a>
                            </div>
                        </div>
                        <!--end title-->
                        
                        @if($accommodation->photos->isempty())
                            <h4>No photos added for this Accommodation </h4> 
                        @else
                            <section id="gallery">
                                <div class="gallery-detail">
                                    @if($accommodation->hotdeals == "1")
                                        <div class="ribbon"><div class="offer-number">{{ $accommodation->discount }}%</div><figure>Off Today!</figure></div>    
                                    @endif
                                    
                                    <div class="one-item-carousel">
                                        @foreach($accommodation->photos as $photo)
                                            <div class="image">                                        
                                                <img src="{{ Helper::s3_url_gen($photo->photo_url) }}" alt="">
                                            </div>
                                        @endforeach
                                    </div>   
                                </div>
                            </section>
                        @endif
                        <h2>Description</h2>
                        <div class="row">
                            <div class="col-md-8">
                                <section id="description">
                                    <p>{{ $accommodation->description }}</p>
                                </section>
                                <section id="facilities">
                                    <h2>Facilities</h2>
                                    <ul class="bullets half">
                                    <?php 
                                        $myArray = explode(',', $accommodation->facilities);
                                    ?>
                                    @foreach($facilities as $facility)
                                        @foreach($myArray as $arrayI)
                                            @if($arrayI == $facility->id)
                                                <li>{{ $facility->name }}</li>
                                            @else
                                                
                                            @endif
                                        @endforeach
                                    @endforeach   
                                    </ul>
                                </section>
                                <section id="map">
                                    <h2>Map</h2>
                                    <div id="map-item-detail" class="map height-300 box"></div>
                                    <!--end map-->
                                </section>
                            </div>
                            <!--end col-md-8-->
                            <div class="col-md-4">
                                <div class="sidebar">
                                    <aside class="box">
                                        <h2>Contact</h2>
                                        <address>
                                            <strong>{{ $accommodation->title }}</strong><br>
                                            {{ $accommodation->address }}<br>
                                            <br>
                                            {{ $accommodation->phone }}<br>
                                            <a href="#">{{ $accommodation->email }}</a><br>
                                        </address>
                                    </aside>
                                </div>
                                <!--end sidebar-->
                            </div>
                            <!--end col-md-4-->
                        </div>
                        <!--end row-->
                        <section id="availability">
                            <h2>Availability</h2> <a class="btn btn-lg btn-info" href="http://127.0.0.1:8000/booking/?accommodation=1&room=1&check_in=12%2F21%2F2017&check_out=12%2F25%2F2017&adults=2&child=1"> Room rate calculation Test Link for yaniu, Add a room and room photo first </a>
                            <form class="labels-uppercase" id="form-availability">
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="form-availability-check-in">Check In</label>
                                            <input type="text" class="form-control date" id="form-availability-check-in" name="check-in" placeholder="Check In">
                                        </div>
                                    </div>
                                    <!--end col-md-3-->
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="form-availability-check-out">Check In</label>
                                            <input type="text" class="form-control date" id="form-availability-check-out" name="check-out" placeholder="Check In">
                                        </div>
                                    </div>
                                    <!--end col-md-3-->
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label class="invisible">Hidden label</label>
                                            <button type="submit" class="btn btn-primary btn-rounded btn-framed form-control">Search</button>
                                        </div>
                                    </div>
                                    <!--end col-md-3-->
                                </div>
                                <!--end row-->
                            </form>

                            <div class="form-reservations">
                                @if($accommodation->rooms->isempty())
                                    <h4>No Rooms added for this Accommodation </h4> 
                                @else
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                            <tr>
                                                <th>Room Type</th>
                                                <th>Persons</th>
                                                <th>Price</th>
                                                <th>Book</th>
                                            </tr>
                                            </thead>
                                        </table>
                                    </div>
                                    @foreach($accommodation->rooms as $room)
                                        <form id="room_1">
                                            <table class="table">
                                                <tbody>
                                                    <tr class="room">
                                                        <td>
                                                            <a href=""><h3>{{ $room->room_type }}</h3></a>
                                                            <p>{{ $room->description }}</p>
                                                        </td>
                                                        <td>{{ $room->no_adult }} Adults <br> {{ $room->no_children }} Children</td>
                                                        <td>${{ $room->price_adult }} Adults <br> ${{ $room->price_child }} Children</td>
                                                        <td>
                                                            <div class="form-group">
                                                                <center>
                                                                    <a href="{{ url('booking') }}/{{ $accommodation->id }}/{{ $room->id }}" class="btn btn-primary btn-rounded">Book Now</a>
                                                                    <a href="{{ url('inquiry') }}/{{ $accommodation->id }}/{{ $room->id }}" class="btn btn-info btn-rounded">Send Inquiry</a>
                                                                </center>
                                                            </div>
                                                            <!--end form-group-->
                                                        </td>
                                                    </tr>
                                                    <!--end tr.room-->
                                                </tbody>
                                            </table>
                                            <!--end table-->
                                        </form>
                                    @endforeach 
                                @endif
                            </div>
                            <!--end form-reservations-->
                        </section>
                        <section id="additional-information">
                            <h2>Additional Information</h2>
                            <dl class="info">
                                @if($accommodation->getAttribute('check-in-from') !== null)
                                    <dt>Check-in:</dt>
                                    <dd><strong>{{ $accommodation->getAttribute('check-in-from') }} - {{ $accommodation->getAttribute('check-in-to') }} </strong> @if($accommodation->early_check_in == '1') Early Check in available @endif </dd>    
                                @endif
                                
                                @if($accommodation->getAttribute('check-out-from') !== null)
                                    <dt>Check-out:</dt>
                                    <dd><strong>{{ $accommodation->getAttribute('check-out-from') }} - {{ $accommodation->getAttribute('check-out-to') }} </strong> @if($accommodation->late_check_out == '1') Late Check out available @endif </dd>
                                @endif
                                
                                @if($accommodation->cancellation !== null)
                                    <dt>Cancellation:</dt>
                                    <br>
                                    <dd>{{ $accommodation->cancellation }}</dd>
                                @endif
                                
                                @if($accommodation->charge_childeren !== null)
                                    <dt>Children:</dt>
                                    <br>
                                    <dd>{{ $accommodation->charge_childeren }}</dd>
                                @endif
                                
                                @if($accommodation->pets !== null)
                                    <dt>Pets:</dt>
                                    <br>
                                    <dd>{{ $accommodation->pets }}</dd>
                                @endif

                                @if($accommodation->other_policies !== null)
                                    <dt>Other Policies:</dt>
                                    <br>
                                    <dd>{{ $accommodation->other_policies }}</dd>
                                @endif
                            </dl>
                            <!--end info-->
                        </section>
                        <section id="reviews">
                            <div class="title">
                                <h2 class="pull-left">Reviews</h2>
                                <a href="#write-a-review" class="btn btn-primary btn-rounded pull-right scroll">Write a Review</a>
                            </div>
                            <h3>Overall Score</h3>
                            <ul class="rating-score">
                                <li class="overall"><i class="fa fa-star"></i>9.9</li>
                                <li><span>9.6</span>
                                    <figure>Cleanliness</figure>
                                </li>
                                <li><span>10</span>
                                    <figure>Comfort</figure>
                                </li>
                                <li><span>9.4</span>
                                    <figure>Location</figure>
                                </li>
                                <li><span>9.8</span>
                                    <figure>Facilities</figure>
                                </li>
                                <li><span>10</span>
                                    <figure>Staff</figure>
                                </li>
                                <li><span>10</span>
                                    <figure>Value for money</figure>
                                </li>
                            </ul>
                            <div class="reviews">
                                <div class="review">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <aside class="name">John Doe</aside>
                                            <aside class="date">10.03.2015</aside>
                                        </div>
                                        <!--end col-md-3-->
                                        <div class="col-md-9">
                                            <div class="comment">
                                                <div class="comment-title">
                                                    <figure class="rating">9.5</figure>
                                                    <h4>Beautiful Holiday</h4>
                                                </div>
                                                <!--end title-->
                                                <p>Consectetur adipiscing elit. Vivamus nec augue ac dui sodales euismod.
                                                    Suspendisse at dui sit amet felis commodo dictum. Class aptent taciti
                                                    sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.
                                                    Integer commodo eleifend erat, vitae tincidunt urna volutpat et.
                                                    Mauris laoreet, sem ut sodales sodales, massa turpis posuere lectus, non
                                                    aliquet massa nisl ac orci.
                                                </p>
                                                <div class="clearfix options">
                                                    <span class="pull-left"><a href="" class="btn btn-framed btn-default btn-rounded btn-small icon"><i class="fa fa-thumbs-up font-color-default"></i>3</a>Helpful Review?</span>
                                                    <span class="pull-right"><a href="" class="link icon font-color-grey"><i class="fa fa-flag"></i>Report</a></span>
                                                </div>
                                                <!--end options-->
                                            </div>
                                            <!--end comment-->
                                        </div>
                                        <!--end col-md-9-->
                                    </div>
                                    <!--end row-->
                                </div>
                                <!--end review-->
                                <div class="review">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <aside class="name">Peter Green</aside>
                                            <aside class="date">10.03.2015</aside>
                                        </div>
                                        <!--end col-md-3-->
                                        <div class="col-md-9">
                                            <div class="comment">
                                                <div class="comment-title">
                                                    <figure class="rating">9.8</figure>
                                                    <h4>Very Good Hotel</h4>
                                                </div>
                                                <!--end title-->
                                                <p>In eleifend odio vel augue mattis, et pharetra dolor ullamcorper. Nulla
                                                    ut porttitor mauris. Sed tincidunt, urna non cursus suscipit, quam velit
                                                    laoreet libero, sit amet tincidunt ex nunc eget eros.
                                                </p>
                                                <div class="clearfix options">
                                                    <span class="pull-left"><a href="" class="btn btn-framed btn-default btn-rounded btn-small icon"><i class="fa fa-thumbs-up font-color-default"></i>10</a>Helpful Review?</span>
                                                    <span class="pull-right"><a href="" class="link icon font-color-grey"><i class="fa fa-flag"></i>Report</a></span>
                                                </div>
                                                <!--end options-->
                                            </div>
                                            <!--end comment-->
                                        </div>
                                        <!--end col-md-9-->
                                    </div>
                                    <!--end row-->
                                </div>
                                <!--end review-->
                            </div>
                            <!--end reviews-->
                        </section>
                        <section id="write-a-review">
                            <h2>Write a Review</h2>
                            <form  class="labels-uppercase clearfix" id="form_reply_1">
                                @if(Auth::guest())

                                <div class="alert alert-dark fade in center" role="alert">
                                    <span class="sr-only">Error:</span>
                                    <a href="#tab-sign-in" data-toggle="modal" data-tab="true" data-target="#sign-in-register-modal">Please Sign in to write a review</a>
                                </div>

                                <div class="review write switch" id="review-write">
                                
                                @else

                                <div class="review write" id="review-write">
                                
                                @endif

                                    <aside class="name">John Doe</aside>
                                    <div class="comment">
                                        <div class="row">
                                            <div class="col-md-8">
                                                <div class="comment-title">
                                                    <h4>Review Your Stay</h4>
                                                </div>
                                                <!--end title-->
                                                <div class="form-group">
                                                    <label for="form_reply_1-name">Title of your review<em>*</em></label>
                                                    <input type="text" class="form-control" id="form_reply_1-name" name="name" placeholder="Beautiful holiday!" required="">
                                                </div>
                                                <div class="form-group">
                                                    <label for="form_reply_1-message">Your Answer<em>*</em></label>
                                                    <textarea class="form-control" id="form_reply_1-message" rows="8" name="answer" required="" placeholder="Describe your stay"></textarea>
                                                </div>
                                                <!--end form-group-->
                                                <div class="form-group pull-right">
                                                    <button type="submit" class="btn btn-primary btn-rounded">Send Review</button>
                                                </div>
                                                <!--end form-group-->
                                            </div>
                                            <!--end col-md-8-->
                                            <div class="col-md-4">
                                                <div class="comment-title">
                                                    <h4>Rating</h4>
                                                </div>
                                                <!--end title-->
                                                <dl class="visitor-rating">
                                                    <dt>Cleanliness</dt>
                                                    <dd class="star-rating active" data-name="cleanliness"></dd>
                                                    <dt>Comfort</dt>
                                                    <dd class="star-rating active" data-name="comfort"></dd>
                                                    <dt>Location</dt>
                                                    <dd class="star-rating active" data-name="location"></dd>
                                                    <dt>Facilities</dt>
                                                    <dd class="star-rating active" data-name="facilities"></dd>
                                                    <dt>Staff</dt>
                                                    <dd class="star-rating active" data-name="staff"></dd>
                                                    <dt>Value for money</dt>
                                                    <dd class="star-rating active" data-name="value"></dd>
                                                </dl>
                                            </div>
                                            <!--end col-md-4-->
                                        </div>
                                        <!--end row-->
                                    </div>
                                    <!--end comment-->
                                </div>
                                <!--end review-->
                            </form>
                            <!--end form-->
                        </section>
                    </div>
                    <!--end main-content-->
                </div>
                <!--end col-md-9-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->

    <div>
        <?php
            $watch_count = rand(-100,100);
            $booking_count = rand(-100,100);
            $watch_counts = rand(-100,100);
        ?>  
        @if($watch_count > 0)
            <div class="message-popup bottom-left" data-show-after-time="2000" data-close-after-time="10000">
                <div class="close"><i class="fa fa-times"></i></div>
                <p>{{ $watch_count }} people are watching this accommodation.</p>
            </div>
        @endif

        @if($booking_count > 0)
            <div class="message-popup bottom-left featured" data-show-after-time="4000" data-close-after-time="10000">
                <div class="close"><i class="fa fa-times"></i></div>
                <div class="title">Just Booked!</div>
                <p>Hurry up! This accommodation was just booked. Don’t miss the chance!</p>
            </div>
        @endif
        
        @if($watch_counts > 0)
            <div class="message-popup bottom-left" data-show-after-time="5000" data-close-after-time="10000">
                <div class="close"><i class="fa fa-times"></i></div>
                <p>Last booking was from <strong>{{ $country }}</strong></p>
            </div>
        @endif

    </div>
    
@endsection

@section('js-after')
<script async defer type="text/javascript">
!function(e){function t(n){if(o[n])return o[n].exports;var i=o[n]={i:n,l:!1,exports:{}};return e[n].call(i.exports,i,i.exports,t),i.l=!0,i.exports}var o={};return t.m=e,t.c=o,t.d=function(e,o,n){t.o(e,o)||Object.defineProperty(e,o,{configurable:!1,enumerable:!0,get:n})},t.n=function(e){var o=e&&e.__esModule?function(){return e["default"]}:function(){return e};return t.d(o,"a",o),o},t.o=function(e,t){return Object.prototype.hasOwnProperty.call(e,t)},t.p="",t(t.s=0)}([function(e,t,o){o(1),e.exports=o(2)},function(e,t){function o(e,t,o,a){a||(a=!1);var l=new google.maps.LatLng(e,t),r={zoom:16,center:l,disableDefaultUI:!0,scrollwheel:!0,styles:s},c=document.getElementById(o),d=new google.maps.Map(c,r),u=new MarkerWithLabel({position:new google.maps.LatLng(e,t),map:d,icon:"/assets/img/marker.png",labelAnchor:new google.maps.Point(50,0),draggable:a});google.maps.event.addListener(u,"mouseup",function(e){this.position.lat(),this.position.lng();$("#latitude").val(this.position.lat()),$("#longitude").val(this.position.lng())}),i(d,u),n(e,t)}function n(e,t){if($(".weather").length){var o,n,i,s,a=new google.maps.LatLng(e,t);o=new google.maps.Geocoder,o.geocode({latLng:a},function(e,t){if(t==google.maps.GeocoderStatus.OK)if(e[0]){var o=e[0].formatted_address,a=o.split(",");count=a.length,i=a[count-1],n=a[count-2].replace(/\d+/g,""),s=a[count-3],$.simpleWeather({location:n+", "+i,woeid:"",unit:"c",success:function(e){var t='<div class="left"><i class="icon-'+e.code+'"></i><span>'+e.temp+"&deg;"+e.units.temp+'</span></div><div class="right"><ul><li>'+e.city+", "+e.region+'</li><li class="currently">'+e.currently+"</li></ul></div>";$(".weather-detail").html(t)},error:function(e){function t(t){return e.apply(this,arguments)}return t.toString=function(){return e.toString()},t}(function(e){$(".weather-detail").html("<p>"+e+"</p>")})})}else console.log("address not found");else console.log("Geocoder failed due to: "+t)})}}function i(e,t){if($("#address-autocomplete").length){var o=function(t){e.setCenter(new google.maps.LatLng(t.coords.latitude,t.coords.longitude)),$("#latitude").val(t.coords.latitude),console.log(t.coords.latitude),$("#longitude").val(t.coords.longitude),console.log(t.coords.longitude)},n=document.getElementById("address-autocomplete"),i=new google.maps.places.Autocomplete(n);i.bindTo("bounds",e),google.maps.event.addListener(i,"place_changed",function(){var o=i.getPlace();if(o.geometry){o.geometry.viewport?e.fitBounds(o.geometry.viewport):(e.setCenter(o.geometry.location),e.setZoom(17)),t&&(t.setPosition(o.geometry.location),t.setVisible(!0),$("#latitude").val(t.getPosition().lat()),$("#longitude").val(t.getPosition().lng()));var n="";o.address_components&&(n=[o.address_components[0]&&o.address_components[0].short_name||"",o.address_components[1]&&o.address_components[1].short_name||"",o.address_components[2]&&o.address_components[2].short_name||""].join(" "))}}),$(".geo-location").on("click",function(){navigator.geolocation?($("#"+element).addClass("fade-map"),navigator.geolocation.getCurrentPosition(o)):console.log("Geo Location is not supported")})}}var s=[{featureType:"road",elementType:"geometry",stylers:[{lightness:100},{visibility:"simplified"}]},{featureType:"water",elementType:"geometry",stylers:[{visibility:"on"},{color:"#C6E2FF"}]},{featureType:"poi",elementType:"geometry.fill",stylers:[{color:"#C5E3BF"}]},{featureType:"road",elementType:"geometry.fill",stylers:[{color:"#D1D1B8"}]}];$(document).ready(function(e){"use strict";e(".item .mark-circle.map").on("click",function(){var t=e(this).closest(".item").attr("data-map-latitude"),n=e(this).closest(".item").attr("data-map-longitude"),i=e(this).closest(".item").attr("data-id");e(this).closest(".item").find(".map-wrapper").attr("id","map"+i);var s="map"+i;o(t,n,s),e(this).closest(".item").addClass("show-map"),e(this).closest(".item").find(".btn-close").on("click",function(){e(this).closest(".item").removeClass("show-map")})})});var a={{ $accommodation->latitude }},l={{ $accommodation->longitude }},r="map-item-detail";o(a,l,r)},function(e,t){}]);
</script>
@endsection