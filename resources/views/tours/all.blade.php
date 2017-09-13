@extends('layouts.app')

@section('content')
        <div class="container">
            <ol class="breadcrumb">
                <li><a href="{{ url('/') }}">Home</a></li>
                <li class="active">{{ $type }}</li>
            </ol>
            <!--end breadcrumb-->
            <div class="row">
                <div class="col-md-12">
                    <div class="main-content">
                        <div class="title">
                            <h1>{{ $type }}</h1>
                        </div>
                        <!--end title-->
                        <div class="row">
                            <div class="col-md-4 col-sm-6">
                                <div class="item big equal-height" data-map-latitude="48.87" data-map-longitude="2.29" data-id="1">
                                    <div class="ribbon"><div class="offer-number">20%</div><figure>Off Today!</figure></div>
                                    <div class="item-wrapper">
                                        <div class="image">
                                            <div class="mark-circle description" data-toggle="tooltip" data-placement="right" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin quis erat vel quam aliquet hendrerit semper eget elit. Aenean tincidunt ultrices bibendum. Proin nisi erat, iaculis non pulvinar a, scelerisque ut est. "><i class="fa fa-question"></i></div>
                                            <div class="mark-circle map" data-toggle="tooltip" data-placement="right" title="Show on map"><i class="fa fa-map-marker"></i></div>
                                            <div class="mark-circle top" data-toggle="tooltip" data-placement="right" title="Top accommodation"><i class="fa fa-thumbs-up"></i></div>
                                            <a href="detail" class="wrapper">
                                                <div class="gallery">
                                                    <img src="https://via.placeholder.com/373x308?text=Main%20Image" alt="">
                                                    <img src="#" class="owl-lazy" alt="" data-src="https://via.placeholder.com/373x308?text=image%201">
                                                    <img src="#" class="owl-lazy" alt="" data-src="https://via.placeholder.com/373x308?text=image%202">
                                                    <img src="#" class="owl-lazy" alt="" data-src="https://via.placeholder.com/373x308?text=image%203">
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
                                                <figure class="label label-info">Tour</figure>
                                                <a href="detail"><h3>Tour Name</h3></a>
                                                <figure class="location">Tour Location</figure>
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
                            <!--col-md-3-->
                            <div class="col-md-4 col-sm-6">
                                <div class="item big equal-height" data-map-latitude="48.87" data-map-longitude="2.29" data-id="2">
                                    <div class="item-wrapper">
                                        <div class="image">
                                            <div class="mark-circle description" data-toggle="tooltip" data-placement="right" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin quis erat vel quam aliquet hendrerit semper eget elit. Aenean tincidunt ultrices bibendum. Proin nisi erat, iaculis non pulvinar a, scelerisque ut est. "><i class="fa fa-question"></i></div>
                                            <div class="mark-circle map" data-toggle="tooltip" data-placement="right" title="Show on map"><i class="fa fa-map-marker"></i></div>
                                            <div class="mark-circle top" data-toggle="tooltip" data-placement="right" title="Top accommodation"><i class="fa fa-thumbs-up"></i></div>
                                            <a href="detail" class="wrapper">
                                                <div class="gallery">
                                                    <img src="https://via.placeholder.com/373x308?text=Main%20Image" alt="">
                                                    <img src="#" class="owl-lazy" alt="" data-src="https://via.placeholder.com/373x308?text=image%201">
                                                    <img src="#" class="owl-lazy" alt="" data-src="https://via.placeholder.com/373x308?text=image%202">
                                                    <img src="#" class="owl-lazy" alt="" data-src="https://via.placeholder.com/373x308?text=image%203">
                                                </div>
                                            </a>
                                            <div class="owl-navigation"></div>
                                            <!--end owl-navigation-->
                                        </div>
                                        <!--end image-->
                                        <div class="description">
                                            <div class="meta">
                                                <span><i class="fa fa-star"></i>9.3</span>
                                                <span><i class="fa fa-bed"></i>148</span>
                                            </div>
                                            <div class="info">
                                                <figure class="label label-info">Tour</figure>
                                                <a href="detail"><h3>Tour Name</h3></a>
                                                <figure class="location">Tour Location</figure>
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
                            <!--col-md-3-->
                            <div class="col-md-4 col-sm-6">
                                <div class="item big equal-height" data-map-latitude="48.87" data-map-longitude="2.29" data-id="1">
                                    <div class="ribbon"><div class="offer-number">20%</div><figure>Off Today!</figure></div>
                                    <div class="item-wrapper">
                                        <div class="image">
                                            <div class="mark-circle description" data-toggle="tooltip" data-placement="right" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin quis erat vel quam aliquet hendrerit semper eget elit. Aenean tincidunt ultrices bibendum. Proin nisi erat, iaculis non pulvinar a, scelerisque ut est. "><i class="fa fa-question"></i></div>
                                            <div class="mark-circle map" data-toggle="tooltip" data-placement="right" title="Show on map"><i class="fa fa-map-marker"></i></div>
                                            <div class="mark-circle top" data-toggle="tooltip" data-placement="right" title="Top accommodation"><i class="fa fa-thumbs-up"></i></div>
                                            <a href="detail" class="wrapper">
                                                <div class="gallery">
                                                    <img src="https://via.placeholder.com/373x308?text=Main%20Image" alt="">
                                                    <img src="#" class="owl-lazy" alt="" data-src="https://via.placeholder.com/373x308?text=image%201">
                                                    <img src="#" class="owl-lazy" alt="" data-src="https://via.placeholder.com/373x308?text=image%202">
                                                    <img src="#" class="owl-lazy" alt="" data-src="https://via.placeholder.com/373x308?text=image%203">
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
                                                <figure class="label label-info">Tour</figure>
                                                <a href="detail"><h3>Tour Name</h3></a>
                                                <figure class="location">Tour Location</figure>
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
                            <!--col-md-3-->
                            <div class="col-md-4 col-sm-6">
                                <div class="item big equal-height" data-map-latitude="48.87" data-map-longitude="2.29" data-id="2">
                                    <div class="item-wrapper">
                                        <div class="image">
                                            <div class="mark-circle description" data-toggle="tooltip" data-placement="right" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin quis erat vel quam aliquet hendrerit semper eget elit. Aenean tincidunt ultrices bibendum. Proin nisi erat, iaculis non pulvinar a, scelerisque ut est. "><i class="fa fa-question"></i></div>
                                            <div class="mark-circle map" data-toggle="tooltip" data-placement="right" title="Show on map"><i class="fa fa-map-marker"></i></div>
                                            <div class="mark-circle top" data-toggle="tooltip" data-placement="right" title="Top accommodation"><i class="fa fa-thumbs-up"></i></div>
                                            <a href="detail" class="wrapper">
                                                <div class="gallery">
                                                    <img src="https://via.placeholder.com/373x308?text=Main%20Image" alt="">
                                                    <img src="#" class="owl-lazy" alt="" data-src="https://via.placeholder.com/373x308?text=image%201">
                                                    <img src="#" class="owl-lazy" alt="" data-src="https://via.placeholder.com/373x308?text=image%202">
                                                    <img src="#" class="owl-lazy" alt="" data-src="https://via.placeholder.com/373x308?text=image%203">
                                                </div>
                                            </a>
                                            <div class="owl-navigation"></div>
                                            <!--end owl-navigation-->
                                        </div>
                                        <!--end image-->
                                        <div class="description">
                                            <div class="meta">
                                                <span><i class="fa fa-star"></i>9.3</span>
                                                <span><i class="fa fa-bed"></i>148</span>
                                            </div>
                                            <div class="info">
                                                <figure class="label label-info">Tour</figure>
                                                <a href="detail"><h3>Tour Name</h3></a>
                                                <figure class="location">Tour Location</figure>
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
                            <!--col-md-3-->
                            <div class="col-md-4 col-sm-6">
                                <div class="item big equal-height" data-map-latitude="48.87" data-map-longitude="2.29" data-id="1">
                                    <div class="ribbon"><div class="offer-number">20%</div><figure>Off Today!</figure></div>
                                    <div class="item-wrapper">
                                        <div class="image">
                                            <div class="mark-circle description" data-toggle="tooltip" data-placement="right" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin quis erat vel quam aliquet hendrerit semper eget elit. Aenean tincidunt ultrices bibendum. Proin nisi erat, iaculis non pulvinar a, scelerisque ut est. "><i class="fa fa-question"></i></div>
                                            <div class="mark-circle map" data-toggle="tooltip" data-placement="right" title="Show on map"><i class="fa fa-map-marker"></i></div>
                                            <div class="mark-circle top" data-toggle="tooltip" data-placement="right" title="Top accommodation"><i class="fa fa-thumbs-up"></i></div>
                                            <a href="detail" class="wrapper">
                                                <div class="gallery">
                                                    <img src="https://via.placeholder.com/373x308?text=Main%20Image" alt="">
                                                    <img src="#" class="owl-lazy" alt="" data-src="https://via.placeholder.com/373x308?text=image%201">
                                                    <img src="#" class="owl-lazy" alt="" data-src="https://via.placeholder.com/373x308?text=image%202">
                                                    <img src="#" class="owl-lazy" alt="" data-src="https://via.placeholder.com/373x308?text=image%203">
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
                                                <figure class="label label-info">Tour</figure>
                                                <a href="detail"><h3>Tour Name</h3></a>
                                                <figure class="location">Tour Location</figure>
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
                            <!--col-md-3-->
                            <div class="col-md-4 col-sm-6">
                                <div class="item big equal-height" data-map-latitude="48.87" data-map-longitude="2.29" data-id="2">
                                    <div class="item-wrapper">
                                        <div class="image">
                                            <div class="mark-circle description" data-toggle="tooltip" data-placement="right" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin quis erat vel quam aliquet hendrerit semper eget elit. Aenean tincidunt ultrices bibendum. Proin nisi erat, iaculis non pulvinar a, scelerisque ut est. "><i class="fa fa-question"></i></div>
                                            <div class="mark-circle map" data-toggle="tooltip" data-placement="right" title="Show on map"><i class="fa fa-map-marker"></i></div>
                                            <div class="mark-circle top" data-toggle="tooltip" data-placement="right" title="Top accommodation"><i class="fa fa-thumbs-up"></i></div>
                                            <a href="detail" class="wrapper">
                                                <div class="gallery">
                                                    <img src="https://via.placeholder.com/373x308?text=Main%20Image" alt="">
                                                    <img src="#" class="owl-lazy" alt="" data-src="https://via.placeholder.com/373x308?text=image%201">
                                                    <img src="#" class="owl-lazy" alt="" data-src="https://via.placeholder.com/373x308?text=image%202">
                                                    <img src="#" class="owl-lazy" alt="" data-src="https://via.placeholder.com/373x308?text=image%203">
                                                </div>
                                            </a>
                                            <div class="owl-navigation"></div>
                                            <!--end owl-navigation-->
                                        </div>
                                        <!--end image-->
                                        <div class="description">
                                            <div class="meta">
                                                <span><i class="fa fa-star"></i>9.3</span>
                                                <span><i class="fa fa-bed"></i>148</span>
                                            </div>
                                            <div class="info">
                                                <figure class="label label-info">Tour</figure>
                                                <a href="detail"><h3>Tour Name</h3></a>
                                                <figure class="location">Tour Location</figure>
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
                            <!--col-md-3-->
                        </div>
                        <!--end row-->
                    </div>
                    <!--end main-content-->
                </div>
                <!--end col-md-12-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->    
@endsection