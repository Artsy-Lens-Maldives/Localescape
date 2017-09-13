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
                        <article class="blog-post">
                            <a href="blog-detail"><img src="/assets/img/items/01_b.jpg"></a>
                            <header><a href="blog-detail"><h2>Vivamus porta orci eu turpis vulputate ornare fusce hendrerit arcu risu</h2></a></header>
                            <figure class="meta">
                                <a href="#" class="link icon"><i class="fa fa-user"></i>Admin</a>
                                <a href="#" class="link icon"><i class="fa fa-calendar"></i>{{ date("d/m/Y") }}</a>
                                <div class="tags">
                                    <a href="#" class="tag article">Photo Post</a>
                                    <a href="#" class="tag article">Local Escape</a>
                                </div>
                            </figure>
                            <p>Fusce quis nulla volutpat, rhoncus ligula ut, pulvinar nisi. In dapibus urna sit amet accumsan
                                tristique. Donec odio ligula, luctus venenatis varius id, tincidunt ac ipsum. Cras commodo,
                                velit nec aliquam dictum, tortor velit dictum ipsum, sed ornare nunc leo nec ipsum. Vestibulum
                                sagittis sapien vitae tristique mollis. Aliquam hendrerit nulla semper, viverra mi et,
                                hendrerit mauris. Maecenas hendrerit congue ultrices. In laoreet erat blandit eros aliquet,
                                in malesuada sem rutrum. In placerat porta egestas.
                            </p>
                            <a href="blog-detail" class="btn btn-rounded btn-default btn-framed btn-small">Read More</a>
                        </article><!-- /.blog-post -->
                        <article class="blog-post">
                            <header><a href="blog-detail"><h2>Cras commodo, velit nec aliquam dictum, tortor velit
                                dictum ipsum, sed ornare nunc leo nec ipsum. Vestibulum sagittis sapien vitae tristique mollis.</h2></a></header>
                            <figure class="meta">
                                <a href="#" class="link icon"><i class="fa fa-user"></i>Admin</a>
                                <a href="#" class="link icon"><i class="fa fa-calendar"></i>{{ date("d/m/Y") }}</a>
                                <div class="tags">
                                    <a href="#" class="tag article">Normal Post</a>
                                    <a href="#" class="tag article">Local Escape</a>
                                </div>
                            </figure>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris sit amet commodo mauris,
                                sit amet commodo turpis. Duis consequat placerat lacus, in sagittis metus pretium vel.
                                In luctus justo venenatis, accumsan justo sit amet, volutpat dolor. Pellentesque quis nulla
                                nec nisi tempor scelerisque. Nam nec scelerisque sapien. Donec eleifend purus id neque pretium,
                                at sollicitudin erat vestibulum. Donec ac tempus tellus, ac dignissim sapien. Fusce et
                                elementum arcu. Maecenas sit amet tincidunt lorem.
                            </p>
                            <p>Vivamus porta orci eu turpis vulputate ornare. Fusce hendrerit arcu risus, sed commodo
                                lacus viverra in. Donec eget ligula in risus rutrum pretium id a elit. Nullam ut tristique
                                arcu. Nam quis nunc ac eros accumsan tincidunt vel sit amet lorem. Sed euismod, turpis
                                et facilisis vestibulum, leo lectus consectetur velit, sed lobortis ante dolor nec leo.
                                Praesent congue tellus eu dui consectetur commodo. Sed quam ante, elementum sodales felis
                                quis, rutrum tincidunt dolor. Etiam nec metus iaculis arcu cursus pulvinar. Nunc interdum
                                eros a neque elementum lobortis. Nulla mattis quis risus vel molestie. Mauris id urna ac
                                metus blandit lobortis in et odio.
                            </p>
                            <a href="blog-detail" class="btn btn-rounded btn-default btn-framed btn-small">Read More</a>
                        </article><!-- /.blog-post -->

                        <!-- Pagination -->
                        <div class="center">
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
                            <!-- end pagination-->
                        </div>
                        <!-- end center-->
                    </div>
                    <!--end main-content-->
                </div>
                <!--end col-md-9-->
                <div class="col-md-3">
                    <div class="sidebar">
                        <h2>Archive</h2>
                        <ul class="links">
                            <li><a href="#">January</a></li>
                            <li><a href="#">February</a></li>
                            <li><a href="#">April</a></li>
                            <li><a href="#">March</a></li>
                            <li><a href="#">July</a></li>
                            <li><a href="#">September</a></li>
                            <li><a href="#">October</a></li>
                            <li><a href="#">December</a></li>
                        </ul>
                    </div>
                    <!--end sidebar-->
                </div>
                <!--end col-md-3-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->
@endsection