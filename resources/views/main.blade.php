@extends('layouts.app')

@section('content')
        <div class="hero-section" data-height="600">
            <form id="form-hero" action="{{ url('search') }}" method="get">
                <div class="hero-inner">
                    <div class="hero-wrapper" >
                        <div class="caption">
                            <div class="inner">
                                <div class="container">
                                    <h1 class="center">Find Your Best Holiday</h1>
                                    <div class="row no-gutters">
                                        <div class="col-md-6 col-sm-6">
                                            <div class="form-group">
                                                <label class="label-on-input" for="address-autocomplete">Location</label>
                                                <input type="text" class="form-control" id="address-autocomplete" name="q" placeholder="Enter Location or Place Name">
                                            </div>
                                        </div>
                                        <div class="col-md-2 col-sm-2">
                                            <div class="form-group">
                                                <label class="label-on-input" for="form-check-in">Check In</label>
                                                <input type="text" class="form-control date" id="form-check-in" name="check_in" placeholder="Check In Date">
                                            </div>
                                        </div>
                                        <div class="col-md-2 col-sm-2">
                                            <div class="form-group">
                                                <label class="label-on-input" for="form-check-out">Check Out</label>
                                                <input type="text" class="form-control date" id="form-check-out" name="check_out" placeholder="Check In Date">
                                            </div>
                                        </div>
                                        <div class="col-md-2 col-sm-2">
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-default">Search</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="favorite-search">
                                        <span>Favorite Searches: </span>
                                        <a href="/search?q=Rasdhoo">Rasdhoo</a>
                                        <a href="/search?q=Male">Male'</a>
                                        <a href="/search?q=Hulhumale">Hulhumale</a>
                                        <a href="/search?q=Maafushi">Maafushi</a>
                                    </div>
                                    <!--end favorite-searches-->
                                </div>
                                <!--end container-->
                                <div class="bg-transfer"><img src="assets/img/bg-hero.jpg" alt=""></div>
                                <!--end bg-transfer-->
                            </div>
                            <!--end inner-->
                        </div>
                        <!--end caption-->
                        <div class="options">
                            <div class="container">
                                <div class="wrapper">
                                    <h2>Further Options</h2>
                                    <div class="row">
                                        <div class="col-md-8 col-sm-7">
                                            <ul class="checkboxes inline list-unstyled">
                                                <li><label><input type="checkbox" name="hotel">Hotel</label></li>
                                                <li><label><input type="checkbox" name="apartment">Apartment</label></li>
                                                <li><label><input type="checkbox" name="breakfast-only">Breakfast Only</label></li>
                                                <li><label><input type="checkbox" name="spa-wellness">Spa & Wellness</label></li>
                                                <li><label><input type="checkbox" name="ski-center">Ski Center</label></li>
                                                <li><label><input type="checkbox" name="cottage">Cottage</label></li>
                                                <li><label><input type="checkbox" name="hostel">Hostel</label></li>
                                                <li><label><input type="checkbox" name="boat">Boat</label></li>
                                            </ul>
                                            <!--end checkboxes-->
                                        </div>
                                        <!--end col-md-8-->
                                        <div class="col-md-4 col-sm-5">
                                            <div class="row">
                                                <div class="col-md-6 col-sm-6">
                                                    <div class="form-group">
                                                        <label>Rate (per Night)</label>
                                                        <select class="form-control framed white">
                                                            <option value="">$0 - $100</option>
                                                            <option value="">$100 - $200</option>
                                                            <option value="">$200+</option>
                                                        </select>
                                                    </div>
                                                    <!--end form-group-->
                                                </div>
                                                <!--end col-md-6-->
                                                <div class="col-md-6 col-sm-6">
                                                    <div class="form-group">
                                                        <label>Star Rating</label>
                                                        <select class="form-control framed white">
                                                            <option value="">1</option>
                                                            <option value="">2</option>
                                                            <option value="">3</option>
                                                            <option value="">4</option>
                                                            <option value="">5</option>
                                                        </select>
                                                    </div>
                                                    <!--end form-group-->
                                                </div>
                                                <!--end col-md-6-->
                                            </div>
                                            <!--end row-->
                                        </div>
                                        <!--end col-md-4-->
                                    </div>
                                    <!--end row-->
                                </div>
                                <!--end wrapper-->
                            </div>
                            <!--end container-->
                        </div>
                        <!--end options-->
                    </div>
                    <!--end hero-wrapper-->
                    <div id="options-hidden" class="collapse">
                        <div class="container">
                            <div class="wrapper">
                                <h2>Facilities</h2>
                                <div class="row">
                                    <div class="col-md-8 col-sm-6">
                                        <ul class="checkboxes inline">
                                            <li><label><input type="checkbox" name="wi-fi">Wi-fi</label></li>
                                            <li><label><input type="checkbox" name="free-parking">Free Parking</label></li>
                                            <li><label><input type="checkbox" name="airport">Airport Shuttle</label></li>
                                            <li><label><input type="checkbox" name="family-rooms">Family Rooms</label></li>
                                            <li><label><input type="checkbox" name="pets">Pets Allowed</label></li>
                                            <li><label><input type="checkbox" name="restaurant">Restaurant</label></li>
                                            <li><label><input type="checkbox" name="indoor-pool">Indoor Pool</label></li>
                                            <li><label><input type="checkbox" name="brakfast-only">Breakfast Only</label></li>
                                        </ul>
                                        <!--end checkboxes-->
                                    </div>
                                    <!--end col-md-8-->
                                    <div class="col-md-4"></div>
                                    <!--end col-md-4-->
                                </div>
                                <!--end row-->
                            </div>
                            <!--end wrapper-->
                        </div>
                        <!--end container-->
                    </div>
                </div>
                <!--end hero-inner-->
                <div class="plate">
                    <a data-toggle="collapse" href="#options-hidden" aria-expanded="false" aria-controls="options-hidden">View Further Options</a>
                </div>
                <!--end plate-->
            </form>
            <!--end form-->
            <div class="map-wrapper">
                <div class="plate white">
                    <a href="#" data-switch="#form-hero">Show Map</a>
                </div>
                <!--end plate-->
                <div id="map-item" class="map height-100"></div>
                <!--<img src="assets/img/map.jpg" alt="">-->
            </div>
        </div>
        <!--end hero-section-->

        <!--Top Accmmodation-section -->
        <div class="block">
            <div class="container">
                <div class="title">
                    <h2>Top Accommodations</h2>
                </div>
                <div class="row">
                    @if(!$top_picks->isempty())
                        @foreach($top_picks as $accommodation)
                            <div class="col-md-3 col-sm-6">
                                <div class="item big equal-height" data-map-latitude="{{ $accommodation->latitude }}" data-map-longitude="{{ $accommodation->longtitude }}" data-id="1">
                                    <div class="item-wrapper">
                                        <div class="image">
                                            <div class="mark-circle description" data-toggle="tooltip" data-placement="right" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin quis erat vel quam aliquet hendrerit semper eget elit. Aenean tincidunt ultrices bibendum. Proin nisi erat, iaculis non pulvinar a, scelerisque ut est. "><i class="fa fa-question"></i></div>
                                            <div class="mark-circle map" data-toggle="tooltip" data-placement="right" title="Show on map"><i class="fa fa-map-marker"></i></div>
                                            @if($accommodation->top_acco == "1")
                                                <div class="mark-circle top" data-toggle="tooltip" data-placement="right" title="Top accommodation"><i class="fa fa-thumbs-up"></i></div>
                                            @endif
                                            <a href="{{ url('accommodation') }}/{{ $accommodation->type }}/{{ $accommodation->slug }}" class="wrapper">
                                                @foreach($accommodation->photos as $photo)
                                                    @if($photo->main == '1')
                                                        <img src="{{ Helper::s3_url_gen($photo->thumbnail) }}" alt="">
                                                    @else
                                                        <img src="#" class="owl-lazy" alt="" data-src="{{ Helper::s3_url_gen($photo->thumbnail) }}">
                                                    @endif
                                                @endforeach
                                            </a>
                                            <div class="owl-navigation"></div>
                                            <!--end owl-navigation-->
                                        </div>
                                        <!--end image-->
                                        <div class="description">
                                            <div class="info">
                                                <figure class="label label-info">{{ Helper::un_slug_gen($accommodation->type) }}</figure>
                                                <a href="{{ url('accommodation') }}/{{ $accommodation->type }}/{{ $accommodation->slug }}"><h3>{{ $accommodation->title }}</h3></a>
                                            </div>
                                        </div>
                                        <!--end description-->
                                        <div class="map-item">
                                            <button class="btn btn-close"><i class="fa fa-close"></i></button>
                                            <div class="map-wrapper"></div>
                                        </div>
                                        <!--end map-item-->
                                    </div>
                                </div>
                                <!--end item-->
                            </div>    
                        @endforeach    
                    @endif
                </div>
                <!--end row-->
            </div>
            <!--end container-->
        </div>
        <!--end block-->
        
        <!-- HR TAG -->
        <div class="container"><hr/></div>
        <!-- HR TAG -->

        <!--Features-section -->
        <div class="block">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <div class="feature">
                            <aside class="circle">
                                <i class="icon_house_alt"></i>
                            </aside>
                            <figure>
                                <h3>200+ Accommodations</h3>
                                <p>Best Travel Agent Including 200 + vacation rentals – from cozy country homes to funky city apartments
                                </p>
                            </figure>
                        </div>
                        <!--end feature-->
                    </div>
                    <!--end col-md-4-->
                    <div class="col-md-4 col-sm-4">
                        <div class="feature">
                            <aside class="circle">
                                <i class="icon_box-checked"></i>
                            </aside>
                            <figure>
                                <h3>Easy Booking System</h3>
                                <p>Trust & Safety 30-Day Money-Back Guarantee for all bookings
                                </p>
                            </figure>
                        </div>
                        <!--end feature-->
                    </div>
                    <!--end col-md-4-->
                    <div class="col-md-4 col-sm-4">
                        <div class="feature">
                            <aside class="circle">
                                <i class="icon_headphones"></i>
                            </aside>
                            <figure>
                                <h3>Great Support</h3>
                                <p>Best Price Guarantee New deals listed daily – for every budget!
                                </p>
                            </figure>
                        </div>
                        <!--end feature-->
                    </div>
                    <!--end col-md-4-->
                </div>
                <!--end row-->
            </div>
            <!--end container-->
            <div class="space"></div>
        </div>
        <!--end block-->

        <!-- HR TAG -->
        <div class="container"><hr/></div>
        <!-- HR TAG -->

        <!--Recent Accmmodation-section -->
        <div class="block">
            <div class="container">
                <div class="title">
                    <h2 class="pull-left">Recent Accommodations</h2>
                </div>
                <!--end title-->
                <div class="row">
                    <div class="col-md-9 col-sm-8">
                        <div class="row">
                            <!--end col-md-3-->
                            @foreach ($recent_acco as $accommodation)
                                <div class="col-md-3 col-sm-6">
                                    <a href="{{ url('accommodation') }}/{{ $accommodation->type }}/{{ $accommodation->slug }}" class="item small">
                                        <div class="image">
                                            <div class="info">
                                                <figure class="label label-info">{{ Helper::slug_gen($accommodation->type) }}</figure>
                                                <aside>
                                                    <h3>{{ $accommodation->title }}</h3>
                                                </aside>
                                            </div>

                                            <div class="wrapper">
                                                <div class="gallery">
                                                    @foreach ($accommodation->photos as $photo)
                                                        <img src="{{ Helper::s3_url_gen($photo->thumbnail) }}" alt="">
                                                    @endforeach
                                                </div>
                                            </div>

                                        </div>
                                        <!--end image-->
                                    </a>
                                    <!--end item-->
                                </div>
                            @endforeach
                            <!--end col-md-3-->
                        </div>
                        <!--end row--> 
                    </div>
                    <div class="col-md-3 col-sm-4">
                        <a href="#" class="advertising-banner">
                            <img src="https://via.placeholder.com/262x400?text=Add%20Advertisment%20Here" alt="">
                        </a>
                    </div>
                </div>
            </div>
            <!--end container-->
        </div>
        <!--end block-->

        <!-- subscribe-section -->        
        <div class="container">
            <div class="block">
                <form class="marketing-form" id="subForm" method="POST" action="{{ url('subscribe/post') }}">
                    <div class="row">
                        <div class="col-md-10 col-md-offset-1">
                            <div class="form-group-inline vertical-align-middle no-margin">
                                <div class="form-group">
                                    <h4 class="font-color-white no-margin"> Subscribe to recivie exclusive deals</h4>
                                    <p class="font-color-white no-margin">Secret Deals – for our subscribers only</p>
                                </div>
                                <div class="form-group width-50">
                                    {{ csrf_field() }}
                                    <input type="email" class="form-control input-dark" name="email" placeholder="Your email">
                                </div>
                                <button style="margin-top: 3px;" class="btn btn-default" type="submit">Submit</button>
                            </div>
                        </div>
                    </div>
                </form>
                <div class="bg color default"></div>
            </div>
        </div>
        <!--end block-->        

        <!-- Tip-for-a-trip-section -->
        <div class="block">
            <div class="container">
                <div class="title">
                    <h2 class="center">Blog Posts</h2>
                </div>
                <!--end title-->
                    <div class="gallery-carousel">
                        @foreach ($blogs as $blog)
                            <div class="gallery-item">
                                <a href="{{ url('blog') }}/{{ $blog->slug }}">
                                    <div class="image">
                                        <?php $photo = $blog->photos ?>
                                        <img src="{{ Helper::s3_url_gen($photo[0]->photo_url) }}" alt="">
                                    </div>
                                </a>
                                <div class="description">
                                    <a href="{{ url('blog') }}/{{ $blog->slug }}"><h3>{{ $blog->title }}</h3></a>
                                    <figure>Blog</figure>
                                    <a href="{{ url('blog') }}/{{ $blog->slug }}" class="btn btn-default btn-small btn-framed btn-rounded">More</a>
                                </div>
                            </div>
                            <!--end gallery-item-->
                        @endforeach
                    </div>
                    <!--end gallery-carousel-->    
            </div>
            <!--end container-->
        </div>
        <!--end block-->
        <!--end col-md-3-->

@endsection


@section('js-after')
    <script>
        $('#subForm').on('keyup keypress', function(e) {
            var keyCode = e.keyCode || e.which;
            if (keyCode === 13) { 
                e.preventDefault();
                return false;
            }
        });
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
    
    @include('sweet::alert')
@endsection

@section('css')
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css" />
  <style>
    .info {
      float: left;
    }
    .value {
      float: right;
      font-weight: bold;
    }
  </style>
@endsection