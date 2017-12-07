@extends('layouts.admin-no')

@section('title')
    <span>Edit {{ $acco->title }}'s Photos</span> <a href="{{ url('admin/accommodations') }}" class="btn btn-lg btn-success">Go Back</a>
@endsection

@section('content')
    
    <div class="container">
        <div class="main-content">
            <!--end title-->
            <div class="flash-message">
                @foreach (['danger', 'warning', 'success', 'info'] as $msg)
                    @if(Session::has('alert-' . $msg))

                    <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
                    
                    @endif
                @endforeach
            </div>
            
            <div class="panel panel-success">
                <div class="panel-heading">Add Accommodation Photos</div>
                <div class="panel-body">
                    <div class="row">
                        @if($acco->photos->count() < 15)
                            <div class="col-md-12">
                                <div class="alert alert-info">Try adding atleast 15 photos to your accommodation, Now added {{ $acco->photos->count() }} of 15 Photos</div>
                            </div>
                        @endif
                    </div>
                    <section id="gallery">
                        <form action="{{ url()->current() }}/new" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="file-upload">
                                <input id="input-b1" name="image[]" type="file" class="file" multiple accept="gif|jpg|png" required>
                                <span>Click to add images</span>
                            </div>
                        <section>
                            <div class="form-group center">
                                <button type="submit" class="btn btn-primary btn-rounded">Add Image(s)</button>
                            </div>
                        </section>
                        </form>
                    </section>
                    <div>   
                        @foreach($acco->photos as $image)
                        <div class="clearfix col-lg-2 col-md-2 col-sm-4 col-xs-6" style="width: 200px; height:100%; margin-top: 10px; margin-bottom: 10px;">
                            <a href="{{ Helper::s3_url_gen($image->photo_url) }}" data-title="{{ $acco->title }}'s image" data-toggle="lightbox">
                                <img class='img-responsive img-thumbnail' src="{{ Helper::s3_url_gen($image->photo_url) }}" style="width: 200px; height:130px;">
                            </a>
                            <center>
                                @if($image->main == '0')
                                    <a href="{{ url()->current() }}/{{ $image->id }}/delete" onclick="return confirm('Are you sure you want to delete this image?');" class="btn btn-danger" style="margin-top: 3px;">Delete</a>
                                    <a href="{{ url()->current() }}/{{ $image->id }}/main" class="btn btn-warning" style="margin-top: 3px;">Main Photo</a>        
                                @else
                                    <a href="" class="btn btn-warning disabled" style="margin-top: 3px;" disabled>Current Main</a>
                                @endif
                            </center>
                            
                        </div>
                        @endforeach
                    </div>    
                </div>
            </div>
            <hr>
            @if($acco->rooms->isempty() )
                <h4>No Rooms found for this Accommodation <a href="{{ url('admin/accommodations/rooms') }}/{{ $acco->id }}" class="btn btn-lg btn-warning">Add a room</a> </h4>
            @else
                <div class="panel panel-info">
                    <div class="panel-heading">Add Room Photos</div>
                    <div class="panel-body">
                        @foreach($acco->rooms as $room)
                            <div class="row">
                                @if($room->photos->count() < 4)
                                    <div class="col-md-12">
                                        <div class="alert alert-info">Try adding atleast 15 photos to your room, Now added {{ $room->photos->count() }} of 4 Photos</div>
                                    </div>
                                @endif
                            </div>
                            <div>
                                <section id="gallery">
                                    <form action="{{ url()->current() }}/room/{{ $room->id }}" method="post" enctype="multipart/form-data">
                                        {{ csrf_field() }}
                                        <div class="title">
                                            <h2>{{ $room->room_type }}'s Photos</h2>
                                        </div>
                                        <div class="file-upload-previews"></div>
                                        <div class="file-upload">
                                            <input type="file" name="image[]" class="file-upload-input with-preview" multiple title="Click to add files" accept="gif|jpg|png" required>
                                            <span>Click to add images</span>
                                        </div>
                                    <section>
                                        <div class="form-group center">
                                            <button type="submit" class="btn btn-primary btn-rounded">Add Image(s)</button>
                                        </div>
                                    </section>
                                    </form>
                                </section>
                                <div>   
                                    @foreach($room->photos as $image)
                                        <div class="clearfix col-lg-2 col-md-2 col-sm-4 col-xs-6" style="width: 200px; height:100%; margin-top: 10px; margin-bottom: 10px;">
                                            <a href="{{ Helper::s3_url_gen($image->photo_url) }}" data-title="{{ $acco->title }}'s image" data-toggle="lightbox">
                                                <img class='img-responsive img-thumbnail' src="{{ Helper::s3_url_gen($image->photo_url) }}" style="width: 200px; height:130px;">
                                            </a>
                                            <center>
                                                @if($image->main == '0')
                                                    <a href="{{ url()->current() }}/{{ $image->id }}/delete" onclick="return confirm('Are you sure you want to delete this image?');" class="btn btn-danger" style="margin-top: 3px;">Delete</a>
                                                    <a href="{{ url()->current() }}/{{ $image->id }}/main" class="btn btn-warning" style="margin-top: 3px;">Main Photo</a>        
                                                @else
                                                    <a href="" class="btn btn-warning disabled" style="margin-top: 3px;" disabled>Current Main</a>
                                                @endif
                                            </center>
                                            
                                        </div>
                                    @endforeach
                                </div>    
                            </div>
                            <hr>
                        @endforeach
                    </div>
                </div>   
            @endif 
            </div>
        </div>
        <!--end main-content-->
    </div>
    <!--end container-->

@endsection

@section('css')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css" rel="stylesheet" type="text/css" />

    <style>
    .grid-item {
        width: 100%;
        height: 130px;
    }
    </style>
@endsection

@section('js')
    <script type="text/javascript" src="/js/jQuery.MultiFile.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.min.js"></script>
    <script> 
        $(document).on('click', '[data-toggle="lightbox"]', function(event) {
            alwaysShowClose: true,
            event.preventDefault();
            $(this).ekkoLightbox();
        });
    </script>
@endsection