@extends('layouts.app')

@section('content')
    
        <div class="container">
            <ol class="breadcrumb">
                <li><a href="{{ url('/') }}">Home</a></li>
                <li class="active">About Us</li>
            </ol>
            <!--end breadcrumb-->
            <div class="row">
                <div class="col-md-3">
                    <div class="sidebar">
                        <div class="box filter">
                            <h2>About Us</h2>
                            <ul class="links">
                                <li class="active"><a href="{{ url('/about-us') }}">About Us</a></li>
                                <li><a href="{{ url('/become-an-affiliate') }}">Become an Affiliate</a></li>
                                <li><a href="{{ url('/terms-and-conditions') }}">Terms & Conditions</a></li>
                                <li><a href="{{ url('/contact-us') }}">Contact Us</a></li>
                            </ul>
                        </div>
                        <!--end filter-->
                    </div>
                    <!--end sidebar-->
                </div>
                <!--end col-md-3-->
                <div class="col-md-9">
                    <div class="main-content">
                        <div class="title">
                            <h1>{{ $about->title }}</h1>
                        </div>
                        <!--end title-->
                        <section>
                            <div>{!! $about->description !!}</div>
                        </section>
                        <!--<section>
                            <h2>Our Team</h2>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="member">
                                        <div class="image"><img src="assets/img/person-01.jpg" alt=""></div>
                                        <div class="description">
                                            <h3>Kate Brown</h3>
                                            <h4>Company CEO</h4>
                                            <div class="info">
                                                <dl>
                                                    <dt>Phone:</dt>
                                                    <dd>(123) 456 777</dd>
                                                    <dt>Mobile Phone:</dt>
                                                    <dd>888 123 456 789</dd>
                                                    <dt>Email:</dt>
                                                    <dd><a href="mailto:kate.brown@example.com">kate.brown@example.com</a></dd>
                                                    <dt>Skype:</dt>
                                                    <dd>kate.brown</dd>
                                                </dl>
                                            </div>
                                            
                                        </div>
                                        
                                    </div>
                                    
                                </div>
                            </div>
                            
                        </section>-->
                    </div>
                    <!--end main-content-->
                </div>
                <!--end col-md-9-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->

@endsection