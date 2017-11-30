@extends('layouts.admin')

@section('content')
    
    <div class="container">
            <!--end breadcrumb-->
            <div class="main-content">
                <div class="title">
                    <h1>Gallery </h1>
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
                    <form action="{{ url()->current() }}/post" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="title">
                            <h2>Add New Image</h2>
                        </div>
                        <div class="file-upload-previews"></div>
                        <div class="file-upload">
                            <input type="file" name="image[]" multiple title="Click to add files" accept="gif|jpg|png" required>
                            <span>Click to add images</span>
                        </div>
                    <section>
                        <div class="form-group center">
                            <button type="submit" class="btn btn-primary btn-rounded btn-lg">Add Image(s)</button>
                        </div>
                    </section>
                    </form>
                </section>

                <hr>

                <div>
                    @foreach($gallery_images as $image)
                        <div class="clearfix col-lg-4 col-md-4 col-sm-4 col-xs-6" style="width: 200px; height:100%; margin-top: 10px; margin-bottom: 10px;">
                            <a href="{{ Helper::s3_url_gen($image->photo_url) }}" data-title="Gallery image" data-toggle="lightbox">
                                <img class='img-responsive img-thumbnail' src="{{ Helper::s3_url_gen($image->photo_url) }}" style="width: 200px; height:130px;">
                            </a>
                            <center>
                                <a href="{{ url()->current() }}/{{ $image->id }}/delete" onclick="return confirm('Are you sure you want to delete this image?');" class="btn btn-danger" style="margin-top: 3px;">Delete</a>
                            </center>
                        </div>                        
                    @endforeach
                </div>
            </div>
            <!--end main-content-->
        </div>
        <!--end container-->

@endsection
