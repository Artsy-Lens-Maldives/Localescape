@extends('layouts.extranet')

@section('content')
    
    <div class="container">
            <ol class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li><a href="#">Extranet</a></li>
                <li><a href="#">Accommodations</a></li>
                <li class="active">Submit</li>
            </ol>
            <!--end breadcrumb-->
            <div class="main-content">
                <div class="title">
                    <h1>Edit {{ $acco->title }}'s Photos <a href="{{ url('extranet/accommodations') }}" class="btn btn-lg btn-success">Go Back</a> </h1>
                </div>
                <!--end title-->
                <div class="flash-message">
                    @foreach (['danger', 'warning', 'success', 'info'] as $msg)
                        @if(Session::has('alert-' . $msg))

                        <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
                        
                        @endif
                    @endforeach
                </div>
                
                <section id="gallery">
                    <form action="{{ url()->current() }}/new" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="title">
                            <h2>Add New Image</h2>
                        </div>
                        <div class="file-upload-previews"></div>
                        <div class="file-upload">
                            <input type="file" name="image[]" class="file-upload-input with-preview" multiple title="Click to add files" accept="gif|jpg|png" required>
                            <span>Click to add images</span>
                        </div>
                    <section>
                        <div class="form-group center">
                            <button type="submit" class="btn btn-primary btn-rounded btn-lg">Add Image(s)</button>
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