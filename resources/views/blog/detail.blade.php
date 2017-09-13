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
                            <h3>Audio Object</h3>
                            <iframe width="100%" height="166" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/71654970&amp;color=ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_artwork=true&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false"></iframe>
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
                        <section id="about-author">
                            <header><h3>About the Author</h3></header>
                            <div class="post-author">
                                <img src="/assets/img/person-01.jpg">
                                <div class="wrapper">
                                    <header>Author Name</header>
                                    <p>Phasellus metus ipsum, sollicitudin lacinia turpis in, pellentesque pulvinar diam.
                                        Cras ultricies augue sapien, aliquam hendrerit mi suscipit at. Suspendisse vulputate felis eget
                                    </p>
                                </div>
                            </div>
                        </section>
                        <section id="comments">
                            <header><h2 class="no-border">Comments</h2></header>
                            <ul class="comments">
                                <li class="comment">
                                    <figure>
                                        <div class="image">
                                            <img alt="" src="/assets/img/person-02.jpg">
                                        </div>
                                    </figure>
                                    <div class="comment-wrapper">
                                        <div class="name pull-left">Catherine Brown</div>
                                        <span class="date pull-right"><span class="fa fa-calendar"></span>12.05.2014</span>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla vestibulum, sem ut sollicitudin consectetur,
                                            augue diam ornare massa, ac vehicula leo turpis eget purus. Nunc pellentesque vestibulum mauris, eget suscipit
                                            mauris imperdiet vel. Nulla et massa metus. Nam porttitor quam eget ante elementum consectetur. Aenean ac nisl
                                            et nulla placerat suscipit eu a mauris. Curabitur quis augue condimentum, varius mi in, ultricies velit.
                                            Suspendisse potenti.
                                        </p>
                                        <a href="#" class="reply"><span class="fa fa-reply"></span>Reply</a>
                                        <hr>
                                    </div>
                                </li>
                                <li>
                                    <ul class="comments-child">
                                        <li class="comment">
                                            <figure>
                                                <div class="image">
                                                    <img alt="" src="/assets/img/person-03.jpg">
                                                </div>
                                            </figure>
                                            <div class="comment-wrapper">
                                                <div class="name">John Doe</div>
                                                <span class="date"><span class="fa fa-calendar"></span>24.06.2014</span>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla vestibulum, sem ut sollicitudin consectetur,
                                                    augue diam ornare massa, ac vehicula leo turpis eget purus. Nunc pellentesque vestibulum mauris, eget suscipit
                                                    mauris.
                                                </p>
                                                <a href="#" class="reply"><span class="fa fa-reply"></span>Reply</a>
                                                <hr>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li class="comment">
                                    <figure>
                                        <div class="image">
                                            <img alt="" src="/assets/img/person-04.jpg">
                                        </div>
                                    </figure>
                                    <div class="comment-wrapper">
                                        <div class="name">John Doe</div>
                                        <span class="date"><span class="fa fa-calendar"></span>08.05.2014</span>
                                        <p>Quisque iaculis neque at dui cursus posuere. Sed tristique pharetra orci, eu malesuada ante tempus nec.
                                            Phasellus enim odio, facilisis et ante vel, tempor congue sapien. Praesent eget ligula
                                            eu libero cursus facilisis vel non arcu. Sed vitae quam enim.
                                        </p>
                                        <a href="#" class="reply"><span class="fa fa-reply"></span>Reply</a>
                                        <hr>
                                    </div>
                                </li>
                            </ul>
                        </section><!-- /#comments -->
                        <section id="leave-reply">
                            <header><h2 class="no-border">Leave a Reply</h2></header>
                            <form role="form" id="form-blog-reply" method="post"  class="clearfix">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="form-blog-reply-name">Your Name<em>*</em></label>
                                            <input type="text" class="form-control" id="form-blog-reply-name" name="form-blog-reply-name" required>
                                        </div><!-- /.form-group -->
                                    </div><!-- /.col-md-6 -->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="form-blog-reply-email">Your Email<em>*</em></label>
                                            <input type="email" class="form-control" id="form-blog-reply-email" name="form-blog-reply-email" required>
                                        </div><!-- /.form-group -->
                                    </div><!-- /.col-md-6 -->
                                </div><!-- /.row -->
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="form-blog-reply-message">Your Message<em>*</em></label>
                                            <textarea class="form-control" id="form-blog-reply-message" rows="5" name="form-blog-reply-message" required></textarea>
                                        </div><!-- /.form-group -->
                                    </div><!-- /.col-md-12 -->
                                </div><!-- /.row -->
                                <div class="form-group clearfix">
                                    <button type="submit" class="btn pull-right btn-primary btn-rounded" id="form-blog-reply-submit">Leave a Reply</button>
                                </div><!-- /.form-group -->
                                <div id="form-rating-status"></div>
                            </form><!-- /#form-contact -->
                        </section>
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