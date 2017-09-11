@extends('layouts.app')

@section('content')
        <div class="hero-section" data-height="600">
            <form id="form-hero">
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
                                                <input type="text" class="form-control" id="address-autocomplete" name="location" placeholder="Enter Location or Place Name">
                                            </div>
                                        </div>
                                        <div class="col-md-2 col-sm-2">
                                            <div class="form-group">
                                                <label class="label-on-input" for="form-check-in">Check In</label>
                                                <input type="text" class="form-control date" id="form-check-in" name="nights" placeholder="Check In Date">
                                            </div>
                                        </div>
                                        <div class="col-md-2 col-sm-2">
                                            <div class="form-group">
                                                <label class="label-on-input" for="form-nights">Nights</label>
                                                <input type="number" min="1" class="form-control" id="form-nights" name="nights" placeholder="Nights">
                                            </div>
                                        </div>
                                        <div class="col-md-2 col-sm-2">
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-default">Search</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="favorite-search">
                                        <span>Favorite Searches</span>
                                        <a href="">Bourges</a>
                                        <a href="">Orléans</a>
                                        <a href="">Rouen</a>
                                        <a href="">Toulouse</a>
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
                    <div class="col-md-3 col-sm-6">
                        <div class="item big equal-height" data-map-latitude="48.87" data-map-longitude="2.29" data-id="1">
                            <div class="item-wrapper">
                                <div class="image">
                                    <div class="mark-circle description" data-toggle="tooltip" data-placement="right" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin quis erat vel quam aliquet hendrerit semper eget elit. Aenean tincidunt ultrices bibendum. Proin nisi erat, iaculis non pulvinar a, scelerisque ut est. "><i class="fa fa-question"></i></div>
                                    <div class="mark-circle map" data-toggle="tooltip" data-placement="right" title="Show on map"><i class="fa fa-map-marker"></i></div>
                                    <div class="mark-circle top" data-toggle="tooltip" data-placement="right" title="Top accommodation"><i class="fa fa-thumbs-up"></i></div>
                                    <a href="detail.html" class="wrapper">
                                        <div class="gallery">
                                            <img src="https://via.placeholder.com/273x208?text=Main%20Image" alt="">
                                            <img src="#" class="owl-lazy" alt="" data-src="https://via.placeholder.com/273x208?text=image%201">
                                            <img src="#" class="owl-lazy" alt="" data-src="https://via.placeholder.com/273x208?text=image%202">
                                            <img src="#" class="owl-lazy" alt="" data-src="https://via.placeholder.com/273x208?text=image%203">
                                        </div>
                                    </a>
                                    <div class="owl-navigation"></div>
                                    <!--end owl-navigation-->
                                </div>
                                <!--end image-->
                                <div class="description">
                                    <div class="meta">
                                        <span><i class="fa fa-star"></i>8.9</span>
                                        <span><i class="fa fa-bed"></i>365</span>
                                    </div>
                                    <div class="info">
                                        <figure class="label label-info">Hotel</figure>
                                        <a href="detail.html"><h3>Spring Hotel</h3></a>
                                        <figure class="location">Montenegro</figure>
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
                    <div class="col-md-3 col-sm-6">
                        <div class="item big equal-height" data-map-latitude="48.87" data-map-longitude="2.29" data-id="1">
                            <div class="item-wrapper">
                                <div class="image">
                                    <div class="mark-circle description" data-toggle="tooltip" data-placement="right" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin quis erat vel quam aliquet hendrerit semper eget elit. Aenean tincidunt ultrices bibendum. Proin nisi erat, iaculis non pulvinar a, scelerisque ut est. "><i class="fa fa-question"></i></div>
                                    <div class="mark-circle map" data-toggle="tooltip" data-placement="right" title="Show on map"><i class="fa fa-map-marker"></i></div>
                                    <div class="mark-circle top" data-toggle="tooltip" data-placement="right" title="Top accommodation"><i class="fa fa-thumbs-up"></i></div>
                                    <a href="detail.html" class="wrapper">
                                        <div class="gallery">
                                            <img src="https://via.placeholder.com/273x208?text=Main%20Image" alt="">
                                            <img src="#" class="owl-lazy" alt="" data-src="https://via.placeholder.com/273x208?text=image%201">
                                            <img src="#" class="owl-lazy" alt="" data-src="https://via.placeholder.com/273x208?text=image%202">
                                            <img src="#" class="owl-lazy" alt="" data-src="https://via.placeholder.com/273x208?text=image%203">
                                        </div>
                                    </a>
                                    <div class="owl-navigation"></div>
                                    <!--end owl-navigation-->
                                </div>
                                <!--end image-->
                                <div class="description">
                                    <div class="meta">
                                        <span><i class="fa fa-star"></i>8.9</span>
                                        <span><i class="fa fa-bed"></i>365</span>
                                    </div>
                                    <div class="info">
                                        <figure class="label label-info">Hotel</figure>
                                        <a href="detail.html"><h3>Spring Hotel</h3></a>
                                        <figure class="location">Montenegro</figure>
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
                    <div class="col-md-3 col-sm-6">
                        <div class="item big equal-height" data-map-latitude="48.87" data-map-longitude="2.29" data-id="1">
                            <div class="item-wrapper">
                                <div class="image">
                                    <div class="mark-circle description" data-toggle="tooltip" data-placement="right" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin quis erat vel quam aliquet hendrerit semper eget elit. Aenean tincidunt ultrices bibendum. Proin nisi erat, iaculis non pulvinar a, scelerisque ut est. "><i class="fa fa-question"></i></div>
                                    <div class="mark-circle map" data-toggle="tooltip" data-placement="right" title="Show on map"><i class="fa fa-map-marker"></i></div>
                                    <div class="mark-circle top" data-toggle="tooltip" data-placement="right" title="Top accommodation"><i class="fa fa-thumbs-up"></i></div>
                                    <a href="detail.html" class="wrapper">
                                        <div class="gallery">
                                            <img src="https://via.placeholder.com/273x208?text=Main%20Image" alt="">
                                            <img src="#" class="owl-lazy" alt="" data-src="https://via.placeholder.com/273x208?text=image%201">
                                            <img src="#" class="owl-lazy" alt="" data-src="https://via.placeholder.com/273x208?text=image%202">
                                            <img src="#" class="owl-lazy" alt="" data-src="https://via.placeholder.com/273x208?text=image%203">
                                        </div>
                                    </a>
                                    <div class="owl-navigation"></div>
                                    <!--end owl-navigation-->
                                </div>
                                <!--end image-->
                                <div class="description">
                                    <div class="meta">
                                        <span><i class="fa fa-star"></i>8.9</span>
                                        <span><i class="fa fa-bed"></i>365</span>
                                    </div>
                                    <div class="info">
                                        <figure class="label label-info">Hotel</figure>
                                        <a href="detail.html"><h3>Spring Hotel</h3></a>
                                        <figure class="location">Montenegro</figure>
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
                    <div class="col-md-3 col-sm-6">
                        <div class="item big equal-height" data-map-latitude="48.87" data-map-longitude="2.29" data-id="1">
                            <div class="item-wrapper">
                                <div class="image">
                                    <div class="mark-circle description" data-toggle="tooltip" data-placement="right" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin quis erat vel quam aliquet hendrerit semper eget elit. Aenean tincidunt ultrices bibendum. Proin nisi erat, iaculis non pulvinar a, scelerisque ut est. "><i class="fa fa-question"></i></div>
                                    <div class="mark-circle map" data-toggle="tooltip" data-placement="right" title="Show on map"><i class="fa fa-map-marker"></i></div>
                                    <div class="mark-circle top" data-toggle="tooltip" data-placement="right" title="Top accommodation"><i class="fa fa-thumbs-up"></i></div>
                                    <a href="detail.html" class="wrapper">
                                        <div class="gallery">
                                            <img src="https://via.placeholder.com/273x208?text=Main%20Image" alt="">
                                            <img src="#" class="owl-lazy" alt="" data-src="https://via.placeholder.com/273x208?text=image%201">
                                            <img src="#" class="owl-lazy" alt="" data-src="https://via.placeholder.com/273x208?text=image%202">
                                            <img src="#" class="owl-lazy" alt="" data-src="https://via.placeholder.com/273x208?text=image%203">
                                        </div>
                                    </a>
                                    <div class="owl-navigation"></div>
                                    <!--end owl-navigation-->
                                </div>
                                <!--end image-->
                                <div class="description">
                                    <div class="meta">
                                        <span><i class="fa fa-star"></i>8.9</span>
                                        <span><i class="fa fa-bed"></i>365</span>
                                    </div>
                                    <div class="info">
                                        <figure class="label label-info">Hotel</figure>
                                        <a href="detail.html"><h3>Spring Hotel</h3></a>
                                        <figure class="location">Montenegro</figure>
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
                    <div class="col-md-6 col-sm-12">
                        <a href="#" class="advertising-banner equal-height">
                            <span class="banner-badge">Advertising</span>
                            <img src="https://via.placeholder.com/555x333?text=Add Advertisments Here" alt="">
                        </a>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="item big equal-height" data-map-latitude="48.87" data-map-longitude="2.29" data-id="1">
                            <div class="item-wrapper">
                                <div class="image">
                                    <div class="mark-circle description" data-toggle="tooltip" data-placement="right" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin quis erat vel quam aliquet hendrerit semper eget elit. Aenean tincidunt ultrices bibendum. Proin nisi erat, iaculis non pulvinar a, scelerisque ut est. "><i class="fa fa-question"></i></div>
                                    <div class="mark-circle map" data-toggle="tooltip" data-placement="right" title="Show on map"><i class="fa fa-map-marker"></i></div>
                                    <div class="mark-circle top" data-toggle="tooltip" data-placement="right" title="Top accommodation"><i class="fa fa-thumbs-up"></i></div>
                                    <a href="detail.html" class="wrapper">
                                        <div class="gallery">
                                            <img src="https://via.placeholder.com/273x208?text=Main%20Image" alt="">
                                            <img src="#" class="owl-lazy" alt="" data-src="https://via.placeholder.com/273x208?text=image%201">
                                            <img src="#" class="owl-lazy" alt="" data-src="https://via.placeholder.com/273x208?text=image%202">
                                            <img src="#" class="owl-lazy" alt="" data-src="https://via.placeholder.com/273x208?text=image%203">
                                        </div>
                                    </a>
                                    <div class="owl-navigation"></div>
                                    <!--end owl-navigation-->
                                </div>
                                <!--end image-->
                                <div class="description">
                                    <div class="meta">
                                        <span><i class="fa fa-star"></i>8.9</span>
                                        <span><i class="fa fa-bed"></i>365</span>
                                    </div>
                                    <div class="info">
                                        <figure class="label label-info">Hotel</figure>
                                        <a href="detail.html"><h3>Spring Hotel</h3></a>
                                        <figure class="location">Montenegro</figure>
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
                    <div class="col-md-3 col-sm-6">
                        <div class="item big equal-height" data-map-latitude="48.87" data-map-longitude="2.29" data-id="1">
                            <div class="item-wrapper">
                                <div class="image">
                                    <div class="mark-circle description" data-toggle="tooltip" data-placement="right" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin quis erat vel quam aliquet hendrerit semper eget elit. Aenean tincidunt ultrices bibendum. Proin nisi erat, iaculis non pulvinar a, scelerisque ut est. "><i class="fa fa-question"></i></div>
                                    <div class="mark-circle map" data-toggle="tooltip" data-placement="right" title="Show on map"><i class="fa fa-map-marker"></i></div>
                                    <div class="mark-circle top" data-toggle="tooltip" data-placement="right" title="Top accommodation"><i class="fa fa-thumbs-up"></i></div>
                                    <a href="detail.html" class="wrapper">
                                        <div class="gallery">
                                            <img src="https://via.placeholder.com/273x208?text=Main%20Image" alt="">
                                            <img src="#" class="owl-lazy" alt="" data-src="https://via.placeholder.com/273x208?text=image%201">
                                            <img src="#" class="owl-lazy" alt="" data-src="https://via.placeholder.com/273x208?text=image%202">
                                            <img src="#" class="owl-lazy" alt="" data-src="https://via.placeholder.com/273x208?text=image%203">
                                        </div>
                                    </a>
                                    <div class="owl-navigation"></div>
                                    <!--end owl-navigation-->
                                </div>
                                <!--end image-->
                                <div class="description">
                                    <div class="meta">
                                        <span><i class="fa fa-star"></i>8.9</span>
                                        <span><i class="fa fa-bed"></i>365</span>
                                    </div>
                                    <div class="info">
                                        <figure class="label label-info">Hotel</figure>
                                        <a href="detail.html"><h3>Spring Hotel</h3></a>
                                        <figure class="location">Montenegro</figure>
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
                </div>
                <!--end row-->
            </div>
            <!--end container-->
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
                            <div class="col-md-3 col-sm-6">
                                <a href="detail.html" class="item small">
                                    <div class="image">
                                        <div class="info">
                                            <figure class="label label-info">Hotel</figure>
                                            <aside>
                                                <h3>Celestial Hotel & Spa</h3>
                                                <figure class="location">Norway</figure>
                                            </aside>
                                        </div>
                                        <div class="wrapper">
                                            <div class="gallery">
                                                <img src="assets/img/items/01.jpg" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <!--end image-->
                                    <div class="description">
                                        <div class="meta">
                                            <span><i class="fa fa-star"></i>8.9</span>
                                            <span><i class="fa fa-bed"></i>250</span>
                                        </div>
                                    </div>
                                    <!--end description-->
                                </a>
                                <!--end item-->
                            </div>
                            <!--end col-md-3-->
                            <div class="col-md-3 col-sm-6">
                                <a href="detail.html" class="item small">
                                    <div class="image">
                                        <div class="info">
                                            <figure class="label label-info">Apartment</figure>
                                            <aside>
                                                <h3>Spring Hotel</h3>
                                                <figure class="location">Austria</figure>
                                            </aside>
                                        </div>
                                        <div class="wrapper">
                                            <div class="gallery">
                                                <img src="assets/img/items/05.jpg" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <!--end image-->
                                    <div class="description">
                                        <div class="meta">
                                            <span><i class="fa fa-star"></i>8.2</span>
                                            <span><i class="fa fa-bed"></i>82</span>
                                        </div>
                                    </div>
                                    <!--end description-->
                                </a>
                                <!--end item-->
                            </div>
                            <!--end col-md-3-->
                            <div class="col-md-3 col-sm-6">
                                <a href="detail.html" class="item small">
                                    <div class="image">
                                        <div class="info">
                                            <figure class="label label-info">Cottage</figure>
                                            <aside>
                                                <h3>Rose Brook Resort</h3>
                                                <figure class="location">France</figure>
                                            </aside>
                                        </div>
                                        <div class="wrapper">
                                            <div class="gallery">
                                                <img src="assets/img/items/07.jpg" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <!--end image-->
                                    <div class="description">
                                        <div class="meta">
                                            <span><i class="fa fa-star"></i>9.4</span>
                                            <span><i class="fa fa-bed"></i>348</span>
                                        </div>
                                    </div>
                                    <!--end description-->
                                </a>
                                <!--end item-->
                            </div>
                            <!--end col-md-3-->
                            <div class="col-md-3 col-sm-6">
                                <a href="detail.html" class="item small">
                                    <div class="image">
                                        <div class="info">
                                            <figure class="label label-info">Hotel</figure>
                                            <aside>
                                                <h3>Secret Angel Hotel</h3>
                                                <figure class="location">Switzerland</figure>
                                            </aside>
                                        </div>
                                        <div class="wrapper">
                                            <div class="gallery">
                                                <img src="assets/img/items/08.jpg" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <!--end image-->
                                    <div class="description">
                                        <div class="meta">
                                            <span><i class="fa fa-star"></i>9.8</span>
                                            <span><i class="fa fa-bed"></i>37</span>
                                        </div>
                                    </div>
                                    <!--end description-->
                                </a>
                                <!--end item-->
                            </div>
                            <!--end col-md-3-->

                            <div class="col-md-3 col-sm-6">
                                <a href="detail.html" class="item small">
                                    <div class="image">
                                        <div class="info">
                                            <figure class="label label-info">Hotel</figure>
                                            <aside>
                                                <h3>Mountain Paradise</h3>
                                                <figure class="location">Norway</figure>
                                            </aside>
                                        </div>
                                        <div class="wrapper">
                                            <div class="gallery">
                                                <img src="assets/img/items/03.jpg" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <!--end image-->
                                    <div class="description">
                                        <div class="meta">
                                            <span><i class="fa fa-star"></i>8.9</span>
                                            <span><i class="fa fa-bed"></i>250</span>
                                        </div>
                                    </div>
                                    <!--end description-->
                                </a>
                                <!--end item-->
                            </div>
                            <!--end col-md-3-->
                            <div class="col-md-3 col-sm-6">
                                <a href="detail.html" class="item small">
                                    <div class="image">
                                        <div class="info">
                                            <figure class="label label-info">Apartment</figure>
                                            <aside>
                                                <h3>Twin Oaks Resort</h3>
                                                <figure class="location">Austria</figure>
                                            </aside>
                                        </div>
                                        <div class="wrapper">
                                            <div class="gallery">
                                                <img src="assets/img/items/02.jpg" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <!--end image-->
                                    <div class="description">
                                        <div class="meta">
                                            <span><i class="fa fa-star"></i>8.2</span>
                                            <span><i class="fa fa-bed"></i>82</span>
                                        </div>
                                    </div>
                                    <!--end description-->
                                </a>
                                <!--end item-->
                            </div>
                            <!--end col-md-3-->
                            <div class="col-md-3 col-sm-6">
                                <a href="detail.html" class="item small">
                                    <div class="image">
                                        <div class="info">
                                            <figure class="label label-info">Cottage</figure>
                                            <aside>
                                                <h3>Sunrise Sanctum</h3>
                                                <figure class="location">France</figure>
                                            </aside>
                                        </div>
                                        <div class="wrapper">
                                            <div class="gallery">
                                                <img src="assets/img/items/04.jpg" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <!--end image-->
                                    <div class="description">
                                        <div class="meta">
                                            <span><i class="fa fa-star"></i>9.4</span>
                                            <span><i class="fa fa-bed"></i>348</span>
                                        </div>
                                    </div>
                                    <!--end description-->
                                </a>
                                <!--end item-->
                            </div>
                            <!--end col-md-3-->
                            <div class="col-md-3 col-sm-6">
                                <a href="detail.html" class="item small">
                                    <div class="image">
                                        <div class="info">
                                            <figure class="label label-info">Hotel</figure>
                                            <aside>
                                                <h3>Primal Court Resort</h3>
                                                <figure class="location">Switzerland</figure>
                                            </aside>
                                        </div>
                                        <div class="wrapper">
                                            <div class="gallery">
                                                <img src="assets/img/items/06.jpg" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <!--end image-->
                                    <div class="description">
                                        <div class="meta">
                                            <span><i class="fa fa-star"></i>9.8</span>
                                            <span><i class="fa fa-bed"></i>37</span>
                                        </div>
                                    </div>
                                    <!--end description-->
                                </a>
                                <!--end item-->
                            </div>
                            <!--end col-md-3-->
                        </div>
                        <!--end row-->
                        <a href="listing.html" class="pull-right">View All</a>
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
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum luctus posuere mattis.
                                    Donec id nulla nisl.
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
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum luctus posuere mattis.
                                    Donec id nulla nisl.
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
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum luctus posuere mattis.
                                    Donec id nulla nisl.
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

        <!-- Tip-for-a-trip-section -->
        <div class="block">
            <div class="container">
                <div class="title">
                    <h2 class="center">Tip For a Trip</h2>
                </div>
                <!--end title-->
                <div class="gallery-carousel">
                    <div class="gallery-item">
                        <a href="blog-detail.html"><div class="image"><img src="assets/img/items/tip-01.jpg" alt=""></div></a>
                        <div class="description">
                            <a href="blog-detail.html"><h3>Silver Peak Resort</h3></a>
                            <figure>Austria</figure>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum luctus posuere mattis. Donec </p>
                            <a href="blog-detail.html" class="btn btn-default btn-small btn-framed btn-rounded">More</a>
                        </div>
                    </div>
                    <!--end gallery-item-->
                    <div class="gallery-item">
                        <a href="blog-detail.html"><div class="image"><img src="assets/img/items/tip-02.jpg" alt=""></div></a>
                        <div class="description">
                            <a href="blog-detail.html"><h3>Silver Peak Resort</h3></a>
                            <figure>Austria</figure>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum luctus posuere mattis. Donec </p>
                            <a href="blog-detail.html" class="btn btn-default btn-small btn-framed btn-rounded">More</a>
                        </div>
                    </div>
                    <!--end gallery-item-->
                    <div class="gallery-item">
                        <a href="blog-detail.html"><div class="image"><img src="assets/img/items/tip-03.jpg" alt=""></div></a>
                        <div class="description">
                            <a href="blog-detail.html"><h3>Silver Peak Resort</h3></a>
                            <figure>Austria</figure>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum luctus posuere mattis. Donec </p>
                            <a href="blog-detail.html" class="btn btn-default btn-small btn-framed btn-rounded">More</a>
                        </div>
                    </div>
                    <!--end gallery-item-->
                    <div class="gallery-item">
                        <a href="blog-detail.html"><div class="image"><img src="assets/img/items/tip-01.jpg" alt=""></div></a>
                        <div class="description">
                            <a href="blog-detail.html"><h3>Silver Peak Resort</h3></a>
                            <figure>Austria</figure>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum luctus posuere mattis. Donec </p>
                            <a href="blog-detail.html" class="btn btn-default btn-small btn-framed btn-rounded">More</a>
                        </div>
                    </div>
                    <!--end gallery-item-->
                    <div class="gallery-item">
                        <a href="blog-detail.html"><div class="image"><img src="assets/img/items/tip-02.jpg" alt=""></div></a>
                        <div class="description">
                            <a href="blog-detail.html"><h3>Silver Peak Resort</h3></a>
                            <figure>Austria</figure>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum luctus posuere mattis. Donec </p>
                            <a href="blog-detail.html" class="btn btn-default btn-small btn-framed btn-rounded">More</a>
                        </div>
                    </div>
                    <!--end gallery-item-->
                    <div class="gallery-item">
                        <a href="blog-detail.html"><div class="image"><img src="assets/img/items/tip-03.jpg" alt=""></div></a>
                        <div class="description">
                            <a href="blog-detail.html"><h3>Silver Peak Resort</h3></a>
                            <figure>Austria</figure>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum luctus posuere mattis. Donec </p>
                            <a href="blog-detail.html" class="btn btn-default btn-small btn-framed btn-rounded">More</a>
                        </div>
                    </div>
                    <!--end gallery-item-->
                </div>
                <!--end gallery-carousel-->
            </div>
            <!--end container-->
            <div class="bg opacity-30">
                <img src="assets/img/bg-map.jpg" alt="">
            </div>
        </div>
        <!--end block-->

        <!-- subscribe-section -->        
        <div class="container">
            <div class="block">
                <form class="marketing-form">
                    <div class="row">
                        <div class="col-md-10 col-md-offset-1">
                            <div class="form-group-inline vertical-align-middle no-margin">
                                <div class="form-group">
                                    <h3 class="font-color-white no-margin"> Save up to 50% off your next trip</h3>
                                    <p class="font-color-white no-margin">Secret Deals – for our subscribers only</p>
                                </div>
                                <div class="form-group width-50">
                                    <input type="email" class="form-control input-dark" name="location" placeholder="Your email">
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                <div class="bg color default"></div>
            </div>
        </div>
        <!--end block-->

        <!-- Our-Picks-section -->
        <div class="block">
            <div class="container">
                <div class="title">
                    <h2>Our Picks</h2>
                </div>
                <!--end title-->
                <div class="grid masonry">
                    <div class="grid-item">
                        <a href="#">
                            <h3>Switzerland</h3>
                            <img src="assets/img/items/pick-01.jpg" alt="">
                        </a>
                    </div>
                    <div class="grid-item">
                        <a href="#">
                            <h3>Prague</h3>
                            <img src="assets/img/items/pick-02.jpg" alt="">
                        </a>
                    </div>
                    <div class="grid-item grid-item--width2">
                        <a href="#">
                            <h3>Norway</h3>
                            <img src="assets/img/items/pick-03.jpg" alt="">
                        </a>
                    </div>
                    <div class="grid-item grid-item--width2">
                        <a href="#">
                            <h3>Machu Picchu</h3>
                            <img src="assets/img/items/pick-04.jpg" alt="">
                        </a>
                    </div>
                    <div class="grid-item">
                        <a href="#">
                            <h3>Tuscany</h3>
                            <img src="assets/img/items/pick-05.jpg" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!--end block-->

        <!-- HR TAG -->
        <div class="container"><hr/></div>
        <!-- HR TAG -->

        <!-- Favorite-Destinations-section -->
        <div class="block">
            <div class="container">
                <div class="title">
                    <h2>Favorite Destinations</h2>
                </div>
                <!--end title-->
               <ul class="list-links">
                   <li><a href="#">Tenerife<span>23</span></a></li>
                   <li><a href="#">Al Madinah<span>12</span></a></li>
                   <li><a href="#">Koh Samui<span>76</span></a></li>
                   <li><a href="#">Cotswolds<span>52</span></a></li>
                   <li><a href="#">Lake District<span>63</span></a></li>
                   <li><a href="#">Cornwall<span>15</span></a></li>
                   <li><a href="#">Algarve<span>19</span></a></li>
                   <li><a href="#">Ibiza<span>90</span></a></li>
                   <li><a href="#">New Forest<span>57</span></a></li>
                   <li><a href="#">Phuket Province<span>82</span></a></li>
                   <li><a href="#">Loch Lomond<span>24</span></a></li>
                   <li><a href="#">Gran Canaria<span>23</span></a></li>
                   <li><a href="#">Majorca<span>33</span></a></li>
                   <li><a href="#">Isle of Wight<span>74</span></a></li>
                   <li><a href="#">Jersey<span>51</span></a></li>
                   <li><a href="#">Isle of Man<span>23</span></a></li>
                   <li><a href="#">Santoríni<span>36</span></a></li>
                   <li><a href="#">Mykonos<span>55</span></a></li>
                   <li><a href="#">Lanzarote<span>78</span></a></li>
                   <li><a href="#">Bali<span>17</span></a></li>
               </ul>
                <!--end list-links-->
            </div>
            <!--end container-->
        </div>
        <!--end block-->

        <!-- HR TAG -->
        <div class="container"><hr/></div>
        <!-- HR TAG -->

        <!-- Latest-Reviews-section -->
        <div class="container">
            <div class="block">
                <div class="title">
                    <h2>Reviews</h2>
                    <div class="row">
                        <div class="col-md-3 col-sm-3">
                            <div class="review-single">
                                <a href="detail.html#reviews"><h3>White Doe Inn</h3></a>
                                <figure class="location">Austria</figure>
                                <div class="rating"><i class="fa fa-star"></i>8.9</div>
                                <p>Donec bibendum at neque pellentesque viverra. Fusce rhoncus elementum commodo.
                                    In ac nibh nec turpis finibus eleme
                                </p>
                                <a href="detail.html#reviews" class="link icon">Full Review<i class="arrow_right"></i></a>
                            </div>
                            <!--end review-->
                        </div>
                        <!--end col-md-3-->
                        <div class="col-md-3 col-sm-3">
                            <div class="review-single">
                                <a href="detail.html#reviews"><h3>Mountain Valley Motel</h3></a>
                                <figure class="location">Scotland</figure>
                                <div class="rating"><i class="fa fa-star"></i>9.3</div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla vitae odio ac dui
                                    fermentum tempus. Phasellus sit amet
                                </p>
                                <a href="detail.html#reviews" class="link icon">Full Review<i class="arrow_right"></i></a>
                            </div>
                            <!--end review-->
                        </div>
                        <!--end col-md-3-->
                        <div class="col-md-3 col-sm-3">
                            <div class="review-single">
                                <a href="detail.html#reviews"><h3>Camp Shoresh</h3></a>
                                <figure class="location">France</figure>
                                <div class="rating"><i class="fa fa-star"></i>9.6</div>
                                <p>Sed posuere nunc sit amet arcu rutrum porttitor. Quisque ut ante lacus. Fusce a
                                    lacus fermentum ante iaculis convallis
                                </p>
                                <a href="detail.html#reviews" class="link icon">Full Review<i class="arrow_right"></i></a>
                            </div>
                            <!--end review-->
                        </div>
                        <!--end col-md-3-->
                        <div class="col-md-3 col-sm-3">
                            <div class="review-single">
                                <a href="detail.html#reviews"><h3>Primal Court Resort</h3></a>
                                <figure class="location">Switzerland</figure>
                                <div class="rating"><i class="fa fa-star"></i>9.4</div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla vitae odio ac dui fermentum tempus.
                                </p>
                                <a href="detail.html#reviews" class="link icon">Full Review<i class="arrow_right"></i></a>
                            </div>
                            <!--end review-->
                        </div>
                        <!--end col-md-3-->
                    </div>
                    <!--end row-->
                </div>
                <!--end title-->
                <div class="bg color white"></div>
            </div>
            <!--end container-->
        </div>
        <!--end block-->
@endsection