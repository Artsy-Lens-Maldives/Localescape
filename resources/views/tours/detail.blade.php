@extends('layouts.app')

@section('content')

        <div class="container">
            <ol class="breadcrumb">
                <li><a href="{{ url('') }}">Home</a></li>
                <li><a href="{{ url('tours') }}">Tour</a></li>
                <li class="active">Detail</li>
            </ol>
            <!--end breadcrumb-->
            <div class="row">
                <div class="col-md-9">
                    <div class="main-content">
                        <div class="title">
                            <h1>Tour Post</h1>
                        </div>
                        <!--end title-->
                        <article class="blog-post">
                            <div class="gallery">
                                {{--  <?php $photos = $tour->photos ?>
                                @foreach($tour->photos as $photo)
                                    @if($photo->main == '1')
                                        <img src="{{ Helper::s3_url_gen($photo->thumbnail) }}" alt="">
                                    @else
                                        <img src="#" class="owl-lazy" alt="" data-src="{{ Helper::s3_url_gen($photo->thumbnail) }}">
                                    @endif
                                @endforeach  --}}
                            </div>
                            <header><a href="blog-detail"><h2>{{ $tour->name }} - ${{ $tour->price }}</h2></a></header>
                            <p>
                                {{ $tour->description }}
                            </p>
                        </article><!-- /.blog-post-listing -->
                    </div>
                    <!--end main-content-->
                </div>
                <!--end col-md-9-->
                <div class="col-md-3">
                    <div class="sidebar">
                    <h2>Advertisment</h2>
                    <img src="" height="500px" width="250px" style="border-width: 1px">
                    </div>
                    <!--end sidebar-->
                </div>
                <!--end col-md-3-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->

@endsection