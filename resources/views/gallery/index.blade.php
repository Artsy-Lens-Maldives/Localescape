@extends('layouts.app')

@section('content')
    <div class="container gallery-container">
        <h1>Our Gallery</h1>
        {{--  <p class="page-description text-center">(Tell us something to write here)</p>      --}}
        <div class="tz-gallery">
            <div class="row">
                @foreach($gallery_images as $image)
                    <div class="col-lg-4 col-md-4 col-sm-6 ">
                        <a class="lightbox" href="{{ Helper::s3_url_gen($image->photo_url) }}">
                            <img src="{{ Helper::s3_url_gen($image->thumbnail) }}" alt="Gallery Image" height="230px">
                        </a>
                    </div>
                @endforeach        
            </div>
        </div>    
    </div>    
@endsection

@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.css">
    <link rel="stylesheet" href="{{ url('css/gallery-grid.css') }}">
@endsection

@section('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
    <script>
        baguetteBox.run('.tz-gallery');
    </script>
@endsection