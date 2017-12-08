@extends('layouts.extranet')

@section('content')
        <div class="container">
            <ol class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li><a href="#">Extranet</a></li>
                <li class="active">Accommodations</li>
            </ol>
            <!--end breadcrumb-->
            <div class="main-content">
                <div class="title">
                    <h1><a href="#">My Accommodations</a> <a style="margin:1px" class="btn btn-success" href="{{ url()->current() }}/add">Add Accommodation</a></h1>
                </div>
                <div class="">
                    @if(!$accommodations->isempty())
                        @foreach($accommodations as $accommodation)
                            <div class="item list">
                                <div class="image-wrapper">
                                    @if($accommodation->top_acco == "1")
                                        <div class="mark-circle top" data-toggle="tooltip" data-placement="right" title="Top accommodation"><i class="fa fa-thumbs-up"></i></div>    
                                    @endif
                                    <div class="image">
                                        <a href="{{ url()->current() }}/preview/{{ $accommodation->id }}" class="wrapper">
                                            <div class="gallery">
                                                @foreach($accommodation->photos as $photo)
                                                    @if($photo->main == '1')
                                                        <img src="{{ Helper::s3_url_gen($photo->thumbnail) }}" alt="">
                                                    @else
                                                        <img src="#" class="owl-lazy" alt="" data-src="{{ Helper::s3_url_gen($photo->thumbnail) }}">
                                                    @endif
                                                @endforeach
                                            </div>
                                        </a>
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
                                        <a href="{{ url()->current() }}/preview/{{ $accommodation->id }}"><h3>{{ $accommodation->title }}</h3></a>
                                        <figure class="label label-info">{{ Helper::un_slug_gen($accommodation->type) }}</figure>
                                        <h4>Information and tips for your accommodation</h4>
                                        <ul>  
                                            @if($accommodation->active == '1')
                                                <li>Your accommodation has been aproved and is now visible on the website</li>
                                            @else
                                                <li>You accommodation has not been aproved yet, Try following the tips listed below</li>
                                            @endif

                                            @if($accommodation->photos->count() < 15)
                                                <li>Try adding atleast 15 photos to your accommodation, Now added {{ $accommodation->photos->count() }} of 15 Photos</li>
                                            @else
                                                <li>You have added {{ $accommodation->photos->count() }} photos to your accommodation</li>
                                            @endif

                                            @if($accommodation->rooms->count() < 1)
                                                <li>Try adding atleast 1 room to your accommodation</li>
                                            @else
                                                <li>You have added {{ $accommodation->rooms->count() }} room(s) to your accommodation</li>
                                            @endif

                                            @if($accommodation->top_acco == "1")
                                                <li>Your accommodation has been selected as a Top Accommodation</li>
                                            @endif
                                        </ul>
                                        <hr style="margin: 10px;">
                                        <div class="in-line" style="float: right; margin-bottom: 10px;">
                                            <center>
                                                <a style="" class="btn btn-danger btn-lg" href="/extranet/accommodations/delete/{{ $accommodation->id }}" onclick="return confirm('Are you sure you would like to delete this accomodation. This process cannot be reversed.')">Delete</a>
                                                <a style="" class="btn btn-warning btn-lg" href="/extranet/accommodations/edit/{{ $accommodation->id }}">Edit</a>
                                                <a style="" class="btn btn-info btn-lg" href="/extranet/accommodations/rooms/{{ $accommodation->id }}">Rooms</a>
                                                <a style="" class="btn btn-success btn-lg" href="/extranet/accommodations/images/{{ $accommodation->id }}">Images</a>
                                                <a style="" class="btn btn-primary btn-lg" href="/extranet/accommodations/preview/{{ $accommodation->id }}">Preview</a>
                                            </center>
                                        </div>
                                    </div>
                                    <!--end info-->
                                </div>
                                <!--end description-->
                            </div>
                        @endforeach    
                    @else
                        <p>No accommodations has been added to your account</p>
                    @endif
                    
                </div>
                <!--end my-items-->
            </div>
            <!--end main-content-->
        </div>
        <!--end container-->    
@endsection

@section('css')
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css">
@endsection

@section('js')
    <script src="//cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="//cdn.datatables.net/1.10.16/js/dataTables.bootstrap.min.js"></script>

    <script>
    $(document).ready(function() {
        $('#example').DataTable();
    } );
    </script>

@endsection