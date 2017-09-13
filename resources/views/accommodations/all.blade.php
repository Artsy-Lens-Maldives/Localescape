@extends('layouts.app')

@section('content')
    
        <div class="container">
            <ol class="breadcrumb">
                <li><a href="{{ url('/') }}">Home</a></li>
                <li class="active"><a href="">{{ $type }}</a></li>
            </ol>
            <!--end breadcrumb-->
            <div class="row">
                @include('partials.listing-sidebar')
                <!--end col-md-3-->
                <div class="col-md-9">
                    <div class="main-content">
                        <div class="title">
                            <h1>{{ $type }}</h1>
                            <div class="display-selector">
                                <span>Display:</span>
                                <a href="" class="active" data-toggle="tooltip" data-placement="left" title="Display list"><i class="fa fa-th-list"></i></a>
                                <a href="#" data-toggle="tooltip" data-placement="left" title="Display matrix"><i class="fa fa-th"></i></a>
                            </div>
                        </div>
                        <!-- With Top Accommodation -->
                        <div class="item list" data-map-latitude="48.87" data-map-longitude="2.29" data-id="1">
                            <div class="image-wrapper">
                                <div class="mark-circle description" data-toggle="tooltip" data-placement="right" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin quis erat vel quam aliquet hendrerit semper eget elit. Aenean tincidunt ultrices bibendum. Proin nisi erat, iaculis non pulvinar a, scelerisque ut est. "><i class="fa fa-question"></i></div>
                                <div class="mark-circle map" data-toggle="tooltip" data-placement="right" title="Show on map"><i class="fa fa-map-marker"></i></div>
                                <div class="mark-circle top" data-toggle="tooltip" data-placement="right" title="Top accommodation"><i class="fa fa-thumbs-up"></i></div>
                                <div class="image">
                                    <a href="{{ url()->current() }}/detail" class="wrapper">
                                        <div class="gallery">
                                            <img src="https://via.placeholder.com/273x208?text=Main%20Image" alt="">
                                            <img src="#" class="owl-lazy" alt="" data-src="https://via.placeholder.com/273x208?text=image%201">
                                            <img src="#" class="owl-lazy" alt="" data-src="https://via.placeholder.com/273x208?text=image%202">
                                            <img src="#" class="owl-lazy" alt="" data-src="https://via.placeholder.com/273x208?text=image%203">
                                        </div>
                                    </a>
                                    <div class="map-item">
                                        <button class="btn btn-close"><i class="fa fa-close"></i></button>
                                        <div class="map-wrapper"></div>
                                    </div>
                                    <!--end map-item-->
                                    <div class="owl-navigation"></div>
                                    <!--end owl-navigation-->
                                </div>
                            </div>
                            <!--end image-->
                            <div class="description">
                                <div class="meta">
                                    <span><i class="fa fa-star"></i>8.9</span>
                                    <span><i class="fa fa-bed"></i>365</span>
                                </div>
                                <!--end meta-->
                                <div class="info">
                                    <a href="{{ url()->current() }}/detail"><h3>Random Accommodation</h3></a>
                                    <figure class="location">Montenegro</figure>
                                    <figure class="label label-info">Hotel</figure>
                                    <figure class="live-info">3 Persons watching now!</figure>
                                    <p>
                                        Consectetur adipiscing elit. Vivamus nec augue ac dui sodales euismod. Suspendisse
                                        at dui sit amet felis commodo dictum. Class aptent taciti sociosqu ad
                                        litora torquent per conubia nostra,
                                    </p>
                                    <div class="price-info">From<span class="price">$32</span><span class="appendix">/night</span></div>
                                    <a href="{{ url()->current() }}/detail" class="btn btn-rounded btn-default btn-framed btn-small">View detail</a>
                                </div>
                                <!--end info-->
                            </div>
                            <!--end description-->
                        </div>
                        <!-- One Room Left -->
                        <div class="item list" data-map-latitude="48.87" data-map-longitude="2.29" data-id="2">
                            <div class="image-wrapper">
                                <div class="mark-circle description" data-toggle="tooltip" data-placement="right" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin quis erat vel quam aliquet hendrerit semper eget elit. Aenean tincidunt ultrices bibendum. Proin nisi erat, iaculis non pulvinar a, scelerisque ut est. "><i class="fa fa-question"></i></div>
                                <div class="mark-circle map" data-toggle="tooltip" data-placement="right" title="Show on map"><i class="fa fa-map-marker"></i></div>
                                <div class="image">
                                    <a href="{{ url()->current() }}/detail" class="wrapper">
                                        <div class="gallery">
                                            <img src="https://via.placeholder.com/273x208?text=Main%20Image" alt="">
                                            <img src="#" class="owl-lazy" alt="" data-src="https://via.placeholder.com/273x208?text=image%201">
                                            <img src="#" class="owl-lazy" alt="" data-src="https://via.placeholder.com/273x208?text=image%202">
                                            <img src="#" class="owl-lazy" alt="" data-src="https://via.placeholder.com/273x208?text=image%203">
                                        </div>
                                    </a>
                                    <div class="map-item">
                                        <button class="btn btn-close"><i class="fa fa-close"></i></button>
                                        <div class="map-wrapper"></div>
                                    </div>
                                    <!--end map-item-->
                                    <div class="owl-navigation"></div>
                                    <!--end owl-navigation-->
                                </div>
                            </div>
                            <!--end image-->
                            <div class="description">
                                <div class="meta">
                                    <span><i class="fa fa-star"></i>4,5</span>
                                    <span><i class="fa fa-bed"></i>158</span>
                                </div>
                                <!--end meta-->
                                <div class="info">
                                    <a href="{{ url()->current() }}/detail"><h3>Random Accommodation</h3></a>
                                    <figure class="location">Austria</figure>
                                    <figure class="label label-info">Hotel</figure>
                                    <figure class="label label-danger">1 Room Left!</figure>
                                    <p>
                                        Consectetur adipiscing elit. Vivamus nec augue ac dui sodales euismod. Suspendisse
                                        at dui sit amet felis commodo dictum. Class aptent taciti sociosqu ad
                                        litora torquent per conubia nostra,
                                    </p>
                                    <div class="price-info">From<span class="price">$64</span><span class="appendix">/night</span></div>
                                    <a href="{{ url()->current() }}/detail" class="btn btn-rounded btn-default btn-framed btn-small">View detail</a>
                                </div>
                                <!--end info-->
                            </div>
                            <!--end description-->
                        </div>
                        <!-- Sold Out -->
                        <div class="item list" data-map-latitude="48.87" data-map-longitude="2.29" data-id="3">
                            <div class="image-wrapper">
                                <div class="mark-circle description" data-toggle="tooltip" data-placement="right" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin quis erat vel quam aliquet hendrerit semper eget elit. Aenean tincidunt ultrices bibendum. Proin nisi erat, iaculis non pulvinar a, scelerisque ut est. "><i class="fa fa-question"></i></div>
                                <div class="mark-circle map" data-toggle="tooltip" data-placement="right" title="Show on map"><i class="fa fa-map-marker"></i></div>
                                <div class="image">
                                    <a href="{{ url()->current() }}/detail" class="wrapper">
                                        <div class="gallery">
                                            <img src="https://via.placeholder.com/273x208?text=Main%20Image" alt="">
                                            <img src="#" class="owl-lazy" alt="" data-src="https://via.placeholder.com/273x208?text=image%201">
                                            <img src="#" class="owl-lazy" alt="" data-src="https://via.placeholder.com/273x208?text=image%202">
                                            <img src="#" class="owl-lazy" alt="" data-src="https://via.placeholder.com/273x208?text=image%203">
                                        </div>
                                    </a>
                                    <div class="map-item">
                                        <button class="btn btn-close"><i class="fa fa-close"></i></button>
                                        <div class="map-wrapper"></div>
                                    </div>
                                    <!--end map-item-->
                                    <div class="owl-navigation"></div>
                                    <!--end owl-navigation-->
                                </div>
                            </div>
                            <!--end image-->
                            <div class="description">
                                <div class="meta">
                                    <span><i class="fa fa-star"></i>8.9</span>
                                    <span><i class="fa fa-bed"></i>469</span>
                                </div>
                                <!--end meta-->
                                <div class="info">
                                    <a href="{{ url()->current() }}/detail"><h3>Random Accommodation</h3></a>
                                    <figure class="location">Switzerland</figure>
                                    <figure class="label label-info">Hotel</figure>
                                    <p>
                                        Consectetur adipiscing elit. Vivamus nec augue ac dui sodales euismod. Suspendisse
                                        at dui sit amet felis commodo dictum. Class aptent taciti sociosqu ad
                                        litora torquent per conubia nostra,
                                    </p>
                                    <div class="price-info"><span class="price warning">Sold Out</span></div>
                                    <a href="{{ url()->current() }}/detail" class="btn btn-rounded btn-default btn-framed btn-small">View detail</a>
                                </div>
                                <!--end info-->
                            </div>
                            <!--end description-->
                        </div>
                        <!--Discounted-->
                        <div class="item list" data-map-latitude="48.87" data-map-longitude="2.29" data-id="4">
                            <div class="ribbon"><div class="offer-number">20%</div><figure>Off Today!</figure></div>
                            <div class="image-wrapper">
                                <div class="mark-circle description" data-toggle="tooltip" data-placement="right" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin quis erat vel quam aliquet hendrerit semper eget elit. Aenean tincidunt ultrices bibendum. Proin nisi erat, iaculis non pulvinar a, scelerisque ut est. "><i class="fa fa-question"></i></div>
                                <div class="mark-circle map" data-toggle="tooltip" data-placement="right" title="Show on map"><i class="fa fa-map-marker"></i></div>
                                <div class="mark-circle top" data-toggle="tooltip" data-placement="right" title="Top accommodation"><i class="fa fa-thumbs-up"></i></div>
                                <div class="image">
                                    <a href="{{ url()->current() }}/detail" class="wrapper">
                                        <div class="gallery">
                                            <img src="https://via.placeholder.com/273x208?text=Main%20Image" alt="">
                                            <img src="#" class="owl-lazy" alt="" data-src="https://via.placeholder.com/273x208?text=image%201">
                                            <img src="#" class="owl-lazy" alt="" data-src="https://via.placeholder.com/273x208?text=image%202">
                                            <img src="#" class="owl-lazy" alt="" data-src="https://via.placeholder.com/273x208?text=image%203">
                                        </div>
                                    </a>
                                    <div class="map-item">
                                        <button class="btn btn-close"><i class="fa fa-close"></i></button>
                                        <div class="map-wrapper"></div>
                                    </div>
                                    <!--end map-item-->
                                    <div class="owl-navigation"></div>
                                    <!--end owl-navigation-->
                                </div>
                            </div>
                            <!--end image-->
                            <div class="description">
                                <div class="meta">
                                    <span><i class="fa fa-star"></i>9.8</span>
                                    <span><i class="fa fa-bed"></i>324</span>
                                </div>
                                <!--end meta-->
                                <div class="info">
                                    <a href="{{ url()->current() }}/detail"><h3>Random Accommodation</h3></a>
                                    <figure class="location">Finland</figure>
                                    <figure class="label label-info">Hotel</figure>
                                    <p>
                                        Consectetur adipiscing elit. Vivamus nec augue ac dui sodales euismod. Suspendisse
                                        at dui sit amet felis commodo dictum. Class aptent taciti sociosqu ad
                                        litora torquent per conubia nostra,
                                    </p>
                                    <div class="price-info">From<span class="price">$46,90</span><span class="appendix">/night</span></div>
                                    <a href="{{ url()->current() }}/detail" class="btn btn-rounded btn-default btn-framed btn-small">View detail</a>
                                </div>
                                <!--end info-->
                            </div>
                            <!--end description-->
                        </div>
                        <div class="center">
                            <ul class="pagination">
                                <li class="prev">
                                    <a href="#"><i class="arrow_left"></i></a>
                                </li>
                                <li class="active"><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">5</a></li>
                                <li class="next">
                                    <a href="#"><i class="arrow_right"></i></a>
                                </li>
                            </ul>
                            <!-- end pagination-->
                        </div>
                        <!-- end center-->
                    </div>
                    <!--end main-content-->
                </div>
                <!--end col-md-9-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->    

@endsection