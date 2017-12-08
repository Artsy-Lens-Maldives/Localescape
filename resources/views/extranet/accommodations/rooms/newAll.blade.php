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
                    <h1><a href="#">Rooms of accommodation</a> <a style="margin:1px" class="btn btn-success" href="{{ url()->current() }}/add">Add New Room</a><a href="{{ url('extranet/accommodations') }}" class="btn btn-warning">Go Back</a> </h1>
                </div>
                @if(!$rooms->isempty())
                    @foreach($rooms as $room)
                        <div class="col-md-4 col-sm-6">
                            <div class="item big equal-height" data-map-latitude="48.87" data-map-longitude="2.29" data-id="2">
                                <div class="item-wrapper">
                                    <div class="image">
                                        <div class="mark-circle description" data-toggle="tooltip" data-placement="right" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin quis erat vel quam aliquet hendrerit semper eget elit. Aenean tincidunt ultrices bibendum. Proin nisi erat, iaculis non pulvinar a, scelerisque ut est. "><i class="fa fa-question"></i></div>
                                        <div class="mark-circle map" data-toggle="tooltip" data-placement="right" title="Show on map"><i class="fa fa-map-marker"></i></div>
                                        <a href="detail" class="wrapper">
                                            <div class="gallery">
                                            @foreach($room->photos as $photo)
                                                @if($photo->main == '1')
                                                    <img src="{{ Helper::s3_url_gen($photo->thumbnail) }}" alt="">
                                                @else
                                                    <img src="#" class="owl-lazy" alt="" data-src="{{ Helper::s3_url_gen($photo->thumbnail) }}">
                                                @endif
                                            @endforeach
                                            </div>
                                        </a>
                                        <div class="owl-navigation"></div>
                                        <!--end owl-navigation-->
                                    </div>
                                    <!--end image-->
                                    <div class="description">
                                        <div class="info">
                                            <figure class="label label-info">Room</figure>
                                            <a href="detail"><h3>{{ $room->room_type }}</h3></a>
                                            <figure class="location">Room of {{ $room->accommodation->title }}</figure>
                                            <hr style="margin: 10px;">
                                            <td style="text-align: center;">
                                                <a style="margin:1px" class="btn btn-danger btn-lg" href="/extranet/accommodations/rooms/delete/{{ $room->id }}" onclick="return confirm('Are you sure you would like to delete this room. This process cannot be reversed.')">Delete</a>
                                                <a style="" class="btn btn-success btn-lg" href="/extranet/accommodations/images/{{ $room->accommo_id }}">Images</a>
                                                <a style="margin:1px" class="btn btn-warning btn-lg" href="/extranet/accommodations/rooms/edit/{{ $room->id }}">Edit</a>
                                            </td>
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
                @else
                    <p>Add a room to this accommodation</p>
                @endif
                    
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