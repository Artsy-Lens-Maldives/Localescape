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
                        </div>
                        
                        @if($accommodations)
                        
                        @foreach($accommodations as $accommodation)

                            <div class="item list" data-map-latitude="{{ $accommodation->latitude }}" data-map-longitude="{{ $accommodation->longitude }}" data-id="1">
                                <div class="image-wrapper">
                                    <div class="mark-circle description" data-toggle="tooltip" data-placement="right" title="{{ $accommodation->description }}"><i class="fa fa-question"></i></div>
                                    <div class="mark-circle map" data-toggle="tooltip" data-placement="right" title="Show on map"><i class="fa fa-map-marker"></i></div>
                                    @if($accommodation->top_acco == "1")
                                        <div class="mark-circle top" data-toggle="tooltip" data-placement="right" title="Top accommodation"><i class="fa fa-thumbs-up"></i></div>    
                                    @else
                                        
                                    @endif
                                    <div class="image">
                                        <a href="{{ url()->current() }}/{{ $accommodation->slug }}" class="wrapper">
                                            
                                            <div class="gallery">
                                                @foreach($accommodation->photos as $photo)
                                                    @if($photo->main == '1')
                                                        <img src="{{ $photo->photo_url }}" alt="">
                                                    @else
                                                        <img src="#" class="owl-lazy" alt="" data-src="{{ $photo->photo_url }}">
                                                    @endif
                                                @endforeach
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
                                    <!-- <div class="meta">
                                        <span><i class="fa fa-star"></i>8.9</span>
                                        <span><i class="fa fa-bed"></i>365</span>
                                    </div> -->
                                    <!--end meta-->
                                    <div class="info">
                                        <a href="{{ url()->current() }}/{{ $accommodation->slug }}"><h3>{{ $accommodation->title }}</h3></a>
                                        <figure class="location">{{ $accommodation->location }}</figure>
                                        <figure class="label label-info">{{ $type }}</figure>
                                        <?php
                                            $watch_count = rand(-100,100);
                                        ?>  
                                        @if($watch_count > 0)
                                            <figure class="live-info"><b>{{ $watch_count }} watching this now!</b></figure>    
                                        @else
                                            
                                        @endif
                                        <p>
                                            {{ $accommodation->description }}
                                        </p>
                                        <!-- <div class="price-info">From<span class="price">${{ $accommodation->price }}</span><span class="appendix">/night</span></div> -->
                                        <a href="{{ url()->current() }}/{{ $accommodation->slug }}" class="btn btn-rounded btn-default btn-framed btn-small">View detail</a>
                                    </div>
                                    <!--end info-->
                                </div>
                                <!--end description-->
                            </div>
                            
                        @endforeach

                        {{ $accommodations->links() }}

                        @else

                            <h3>No {{ $type }} found</h3>
                        
                        @endif
                        
                    </div>
                    <!--end main-content-->
                </div>
                <!--end col-md-9-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->    

@endsection