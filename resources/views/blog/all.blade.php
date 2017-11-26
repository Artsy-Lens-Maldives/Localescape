@extends('layouts.app')

@section('content')
        <div class="container">
            <ol class="breadcrumb">
                <li><a href="{{ url('/') }}">Home</a></li>
                <li class="active">Blog</li>
            </ol>
            <!--end breadcrumb-->
            <div class="row">
                <div class="col-md-9">
                    <div class="main-content">
                        <div class="title">
                            <h1>Blog Posts</h1>
                        </div>
                        <!--end title-->
                        @foreach($blogs as $blog)
                        <article class="blog-post">
                            <a href="blog-detail"><img src="{{ Helper::s3_url_gen($blog->photos[0]->thumbnail) }}"></a>
                            <header><a href="blog-detail"><h2>{{ $blog->title }}</h2></a></header>
                            <figure class="meta">
                                <a href="#" class="link icon"><i class="fa fa-user"></i>{{ $blog->author }}</a>
                                <a href="#" class="link icon"><i class="fa fa-calendar"></i>{{ $blog->created_at->format("d/m/Y") }}</a>
                                <div class="tags">
                                    <a href="#" class="tag article">Photo Post</a>
                                    <a href="#" class="tag article">Local Escape</a>
                                </div>
                            </figure>
                            <p>
                            {{ $blog->description }}
                            </p>
                            <a href="blog-detail" class="btn btn-rounded btn-default btn-framed btn-small">Read More</a>
                        </article><!-- /.blog-post -->    
                        @endforeach
                        <!-- Pagination -->
                        <!--<div class="center">
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
                        </div>-->
                        <!-- end center-->
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