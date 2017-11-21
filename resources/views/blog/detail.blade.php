@extends('layouts.app')

@section('content')

        <div class="container">
            <ol class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li><a href="#">Listing</a></li>
                <li class="active">Detail</li>
            </ol>
            <!--end breadcrumb-->
            <div class="row">
                <div class="col-md-9">
                    <div class="main-content">
                        <div class="title">
                            <h1>Blog Post</h1>
                        </div>
                        <!--end title-->
                        <article class="blog-post">
                            <a href="blog-detail"><img src="assets/img/items/01_b.jpg"></a>
                            <header><a href="blog-detail"><h2>Vivamus porta orci eu turpis vulputate ornare fusce hendrerit arcu risu</h2></a></header>
                            <figure class="meta">
                                <a href="#" class="link-icon"><i class="fa fa-user"></i>Admin</a>
                                <a href="#" class="link-icon"><i class="fa fa-calendar"></i>{{ date("d/m/Y") }}</a>
                                <div class="tags">
                                    <a href="#" class="tag article">Architecture</a>
                                    <a href="#" class="tag article">Design</a>
                                    <a href="#" class="tag article">Trend</a>
                                </div>
                            </figure>
                            <p>Fusce quis nulla volutpat, rhoncus ligula ut, pulvinar nisi. In dapibus urna sit amet accumsan
                                tristique. Donec odio ligula, luctus venenatis varius id, tincidunt ac ipsum. Cras commodo,
                                velit nec aliquam dictum, tortor velit dictum ipsum, sed ornare nunc leo nec ipsum. Vestibulum
                                sagittis sapien vitae tristique mollis. Aliquam hendrerit nulla semper, viverra mi et,
                                hendrerit mauris. Maecenas hendrerit congue ultrices. In laoreet erat blandit eros aliquet,
                                in malesuada sem rutrum. In placerat porta egestas.
                            </p>
                            <h3>Parahraph Headline</h3>
                            <p>
                                Phasellus metus ipsum, sollicitudin lacinia turpis in, pellentesque pulvinar diam.
                                Cras ultricies augue sapien, aliquam hendrerit mi suscipit at. Suspendisse vulputate felis eget
                                felis convallis fermentum et eu nulla. Donec sagittis sit amet erat non eleifend. Mauris at convallis
                                magna. Quisque pellentesque id mauris vitae placerat. Mauris facilisis odio nec metus cursus commodo.
                                Integer vel libero nunc. Donec ac lorem commodo, laoreet elit eget, tempus ante. Quisque eu nunc blandit
                                erat rutrum feugiat ac sed arcu. In nisi risus, molestie a sem adipiscing, porta volutpat velit.
                                Pellentesque nec felis sit amet nunc porta tincidunt sit amet et justo.
                            </p>
                            
                            <h3>Parahraph Headline</h3>
                            <p>
                                Phasellus metus ipsum, sollicitudin lacinia turpis in, pellentesque pulvinar diam.
                                Cras ultricies augue sapien, aliquam hendrerit mi suscipit at. Suspendisse vulputate felis eget
                                felis convallis fermentum et eu nulla. Donec sagittis sit amet erat non eleifend. Mauris at convallis
                                magna. Quisque pellentesque id mauris vitae placerat.
                            </p>
                            <h4>List Headline</h4>
                            <ul>
                                <li>Phasellus metus ipsum, sollicitudin</li>
                                <li>Quisque pellentesque id mauris</li>
                                <li>Donec ac lorem commodo</li>
                                <li>In nisi risus, molestie a sem adipiscing</li>
                                <li>Pellentesque nec felis sit amet nunc</li>
                            </ul>
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