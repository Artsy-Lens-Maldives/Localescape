@extends('layouts.extranet')

@section('content')
    
        <div class="container">
            <ol class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li><a href="#">Listing</a></li>
                <li class="active">Detail</li>
            </ol>
            <!--end breadcrumb-->
            <div class="main-content">
                <div class="title">
                    <h1 class="inactive"><a href="{{ url('extranet/accommodations/edit') }}">Edit Accommodation</a></h1>
                    <h1 class="inactive"><a href="{{ url('extranet/accommodations/bookings') }}">Bookings</a></h1>
                    <h1><a href="{{ url('extranet/accommodations/reviews') }}">Reviews</a></h1>
                </div>
                <!--end title-->
                <div class="info">
                    <strong>Accommodation:</strong>
                    <h2 class="no-margin"><a href="detail">Spring Hotel</a></h2>
                    <hr>
                </div>
                <!--end info-->
                <div class="reviews">
                    <div class="review">
                        <div class="ribbon right new"><figure>New</figure></div>
                        <div class="row">
                            <div class="col-md-2">
                                <aside class="name">John Doe</aside>
                                <aside class="date">10.03.2015</aside>
                            </div>
                            <!--end col-md-3-->
                            <div class="col-md-10">
                                <div class="comment">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="comment-title">
                                                <figure class="rating">9.5</figure>
                                                <h4>Beautiful Holiday</h4>
                                            </div>
                                            <!--end title-->
                                            <p>Consectetur adipiscing elit. Vivamus nec augue ac dui sodales euismod.
                                                Suspendisse at dui sit amet felis commodo dictum. Class aptent taciti
                                                sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.
                                                Integer commodo eleifend erat, vitae tincidunt urna volutpat et.
                                                Mauris laoreet, sem ut sodales sodales, massa turpis posuere lectus, non
                                                aliquet massa nisl ac orci.
                                            </p>
                                            <div class="options">
                                                <a href="#reply_1" data-toggle="collapse" aria-expanded="false" aria-controls="reply_1" class="btn btn-framed btn-default btn-rounded btn-small icon">Reply<i class="fa fa-reply font-color-default"></i></a>
                                            </div>
                                            <!--end options-->
                                            <div class="collapse in" id="reply_1">
                                                <div class="answer">
                                                    <form class="labels-uppercase clearfix" id="form_reply_1">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="form_reply_1-name">Your Name<em>*</em></label>
                                                                    <input type="text" class="form-control" id="form_reply_1-name" name="name" placeholder="Name" required="">
                                                                </div>
                                                            </div>
                                                            <!--end col-md-6-->
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="form_reply_1-email">Your Position (optional)</label>
                                                                    <input type="text" class="form-control" id="form_reply_1-email" name="position" placeholder="e.g. Owner">
                                                                </div>
                                                            </div>
                                                            <!--end col-md-6-->
                                                        </div>
                                                        <!--end row-->
                                                        <div class="form-group">
                                                            <label for="form_reply_1-message">Your Answer<em>*</em></label>
                                                            <textarea class="form-control" id="form_reply_1-message" rows="8" name="answer" required="" placeholder="Message"></textarea>
                                                        </div>
                                                        <!--end form-group-->
                                                        <div class="form-group pull-right">
                                                            <button type="submit" class="btn btn-primary btn-rounded">Send Message</button>
                                                        </div>
                                                        <!--end form-group-->
                                                    </form>
                                                    <!--end form-->
                                                </div>
                                                <!--end answer-->
                                            </div>
                                            <!--end collapse-->
                                        </div>
                                        <!--end col-md-8-->
                                        <div class="col-md-4">
                                            <div class="comment-title">
                                                <h4>Rating</h4>
                                            </div>
                                            <!--end title-->
                                            <dl class="visitor-rating">
                                                <dt>Cleanliness</dt>
                                                <dd>10</dd>
                                                <dt>Comfort</dt>
                                                <dd>9</dd>
                                                <dt>Location</dt>
                                                <dd>8</dd>
                                                <dt>Facilities</dt>
                                                <dd>10</dd>
                                                <dt>Staff</dt>
                                                <dd>8</dd>
                                                <dt>Value for money</dt>
                                                <dd>9</dd>
                                            </dl>
                                        </div>
                                        <!--end col-md-4-->
                                    </div>
                                    <!--end row-->
                                </div>
                                <!--end comment-->
                            </div>
                            <!--end col-md-9-->
                        </div>
                        <!--end row-->
                    </div>
                    <!--end review-->
                    <div class="review muted">
                        <div class="ribbon right new white"><figure><i class="fa fa-check"></i>Answered</figure></div>
                        <div class="row">
                            <div class="col-md-2">
                                <aside class="name">Peter Green</aside>
                                <aside class="date">08.03.2015</aside>
                            </div>
                            <!--end col-md-3-->
                            <div class="col-md-10">
                                <div class="comment">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="comment-title">
                                                <figure class="rating">9.8</figure>
                                                <h4>Very Good Hotel</h4>
                                            </div>
                                            <!--end title-->
                                            <p>Sed facilisis mi turpis, sed suscipit risus consequat sed. Donec cursus
                                                feugiat nulla sit amet viverra. Nulla sit amet condimentum mi, et suscipit
                                                justo. Pellentesque maximus lectus sit amet rutrum vulputate. Vivamus neque
                                                tortor, rutrum eu consectetur eget, posuere eu eros. Aenean fringilla vel libero
                                                eu mollis. Phasellus vitae ultricies mauris. In vel est interdum, dictum mi eget,
                                                fermentum nibh. Quisque vitae porttitor massa. Proin non diam tincidunt, consectetur
                                                tortor eget, consequat diam. Praesent dictum odio lorem, nec imperdiet turpis
                                                vestibulum ac.
                                            </p>
                                            <div class="options">
                                                <a href="#reply_2" data-toggle="collapse" aria-expanded="false" aria-controls="reply_2" class="btn btn-framed btn-default btn-rounded btn-small icon">Reply<i class="fa fa-reply font-color-default"></i></a>
                                            </div>
                                            <!--end options-->
                                            <div class="collapse" id="reply_2">
                                                <div class="answer">
                                                    <form class="labels-uppercase clearfix" id="form_reply_2">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="form_reply_1-name">Your Name<em>*</em></label>
                                                                    <input type="text" class="form-control" id="form_reply_2-name" name="name" placeholder="Name" required="">
                                                                </div>
                                                            </div>
                                                            <!--end col-md-6-->
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="form_reply_1-email">Your Position (optional)</label>
                                                                    <input type="text" class="form-control" id="form_reply_2-email" name="position" placeholder="e.g. Owner">
                                                                </div>
                                                            </div>
                                                            <!--end col-md-6-->
                                                        </div>
                                                        <!--end row-->
                                                        <div class="form-group">
                                                            <label for="form_reply_1-message">Your Answer<em>*</em></label>
                                                            <textarea class="form-control" id="form_reply_2-message" rows="8" name="answer" required="" placeholder="Message"></textarea>
                                                        </div>
                                                        <!--end form-group-->
                                                        <div class="form-group pull-right">
                                                            <button type="submit" class="btn btn-primary btn-rounded">Send Message</button>
                                                        </div>
                                                        <!--end form-group-->
                                                    </form>
                                                    <!--end form-->
                                                </div>
                                                <!--end answer-->
                                            </div>
                                            <!--end collapse-->
                                        </div>
                                        <!--end col-md-8-->
                                        <div class="col-md-4">
                                            <div class="comment-title">
                                                <h4>Rating</h4>
                                            </div>
                                            <!--end title-->
                                            <dl class="visitor-rating">
                                                <dt>Cleanliness</dt>
                                                <dd>10</dd>
                                                <dt>Comfort</dt>
                                                <dd>9</dd>
                                                <dt>Location</dt>
                                                <dd>8</dd>
                                                <dt>Facilities</dt>
                                                <dd>10</dd>
                                                <dt>Staff</dt>
                                                <dd>8</dd>
                                                <dt>Value for money</dt>
                                                <dd>9</dd>
                                            </dl>
                                        </div>
                                        <!--end col-md-4-->
                                    </div>
                                    <!--end row-->
                                </div>
                                <!--end comment-->
                            </div>
                            <!--end col-md-9-->
                        </div>
                        <!--end row-->
                    </div>
                    <!--end review-->
                    <div class="review">
                        <div class="row">
                            <div class="col-md-2">
                                <aside class="name">Suzanne Broke</aside>
                                <aside class="date">01.03.2015</aside>
                            </div>
                            <!--end col-md-3-->
                            <div class="col-md-10">
                                <div class="comment">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="comment-title">
                                                <figure class="rating">9.2</figure>
                                                <h4>Nice Stay!</h4>
                                            </div>
                                            <!--end title-->
                                            <p>Maecenas porta velit nec semper rutrum. Vestibulum ac lorem imperdiet metus
                                                ullamcorper porttitor. In quis iaculis dui. Sed lorem dui, scelerisque sodales
                                                feugiat aliquet, finibus et magna. Aenean sit amet tincidunt nunc.
                                                Vestibulum commodo at nisi ut pellentesque.
                                            </p>
                                            <div class="options">
                                                <a href="#reply_3" data-toggle="collapse" aria-expanded="false" aria-controls="reply_3" class="btn btn-framed btn-default btn-rounded btn-small icon">Reply<i class="fa fa-reply font-color-default"></i></a>
                                            </div>
                                            <!--end options-->
                                            <div class="collapse" id="reply_3">
                                                <div class="answer">
                                                    <form class="labels-uppercase clearfix" id="form_reply_3">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="form_reply_1-name">Your Name<em>*</em></label>
                                                                    <input type="text" class="form-control" id="form_reply_3-name" name="name" placeholder="Name" required="">
                                                                </div>
                                                            </div>
                                                            <!--end col-md-6-->
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="form_reply_1-email">Your Position (optional)</label>
                                                                    <input type="text" class="form-control" id="form_reply_3-email" name="position" placeholder="e.g. Owner">
                                                                </div>
                                                            </div>
                                                            <!--end col-md-6-->
                                                        </div>
                                                        <!--end row-->
                                                        <div class="form-group">
                                                            <label for="form_reply_1-message">Your Answer<em>*</em></label>
                                                            <textarea class="form-control" id="form_reply_3-message" rows="8" name="answer" required="" placeholder="Message"></textarea>
                                                        </div>
                                                        <!--end form-group-->
                                                        <div class="form-group pull-right">
                                                            <button type="submit" class="btn btn-primary btn-rounded">Send Message</button>
                                                        </div>
                                                        <!--end form-group-->
                                                    </form>
                                                    <!--end form-->
                                                </div>
                                                <!--end answer-->
                                            </div>
                                            <!--end collapse-->
                                        </div>
                                        <!--end col-md-8-->
                                        <div class="col-md-4">
                                            <div class="comment-title">
                                                <h4>Rating</h4>
                                            </div>
                                            <!--end title-->
                                            <dl class="visitor-rating">
                                                <dt>Cleanliness</dt>
                                                <dd>10</dd>
                                                <dt>Comfort</dt>
                                                <dd>9</dd>
                                                <dt>Location</dt>
                                                <dd>8</dd>
                                                <dt>Facilities</dt>
                                                <dd>10</dd>
                                                <dt>Staff</dt>
                                                <dd>8</dd>
                                                <dt>Value for money</dt>
                                                <dd>9</dd>
                                            </dl>
                                        </div>
                                        <!--end col-md-4-->
                                    </div>
                                    <!--end row-->
                                </div>
                                <!--end comment-->
                            </div>
                            <!--end col-md-9-->
                        </div>
                        <!--end row-->
                    </div>
                    <!--end review-->
                </div>
                <!--end reviews-->
                <div class="center">
                    <a href="" class="btn btn-default btn-rounded btn-framed btn-large">Load More</a>
                </div>
                <!--end center-->
            </div>
            <!--end main-content-->
        </div>
        <!--end container-->

@endsection