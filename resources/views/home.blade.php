@extends('layouts.app')

@section('content')
<br>
<br>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <nav class="navbar navbar-inverse">
                    <a class="navbar-brand" href="#">Welcome {{ Auth::user()->name }}</a>
                    <ul class="nav navbar-nav navbar-right">
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav">
                                <li class="active"><a href="{{ url('/home') }}">Customer Dashboard</a></li>
                                <li><a href="{{ url('/home/bookings') }}">All Bookings</a></li>
                                <li><a href="{{ url('/home/inquiries') }}">All Inquiries</a></li>
                                <li><a href="{{ url('/home/settings') }}">Settings</a></li>

                            </ul>
                        </div>
                    </ul>
                 </nav>
                 <div class="panel-body">
                    @if (!$last_booking == null)
                        <div class="last-booking">
                            <h3>Your Last Booking was on {{ $last_booking->created_at->toFormattedDateString() }}</h3>
                            <?php $accommodation = $last_booking->room->accommodation ?>
                            <div class="item list">
                                <div class="image-wrapper">
                                    @if($accommodation->top_acco == "1")
                                        <div class="mark-circle top" data-toggle="tooltip" data-placement="right" title="Top accommodation"><i class="fa fa-thumbs-up"></i></div>    
                                    @endif
                                    <div class="image">
                                        <a href="{{ url('accommodation') }}/{{ $accommodation->type }}/{{ $accommodation->slug }}" class="wrapper">
                                            <div class="gallery">
                                                @foreach($accommodation->photos as $photo)
                                                    @if($photo->main == '1')
                                                        <img src="{{ Helper::s3_url_gen($photo->thumbnail) }}" alt="">
                                                    @else
                                                        <img src="#" class="owl-lazy" alt="" data-src="{{ Helper::s3_url_gen($photo->thumbnail) }}">
                                                    @endif
                                                @endforeach
                                            </div>
                                        </a>
                                        <!--end map-item-->
                                        <div class="owl-navigation"></div>
                                        <!--end owl-navigation-->
                                    </div>
                                </div>
                                <!--end image-->
                                <div class="description">
                                    <div class="info">
                                        <a href="{{ url('accommodation') }}/{{ $accommodation->type }}/{{ $accommodation->slug }}"><h3>{{ $accommodation->title }}</h3></a>
                                        <figure class="label label-info">{{ Helper::un_slug_gen($accommodation->type) }}</figure>
                                    </div>
                                    <!--end info-->
                                    <br>
                                    <div class="row">
                                        <div class="col-md-8">
                                            <ul>
                                                <li>
                                                    Booking Status: 
                                                    @if ($last_booking->booking_confirmed == 1)
                                                        <button class="btn btn-success disabled">Confirmed</button>
                                                    @endif
                                                    
                                                    @if ($last_booking->booking_not_available == 1)
                                                        <button class="btn btn-danger disabled">Booking Not Available</button>
                                                    @endif
                                                    
                                                    @if ($last_booking->booking_requested == 1)
                                                        <button class="btn btn-primary disabled">Booking Requested</button>
                                                    @endif
                                                    
                                                    @if ($last_booking->booking_cancellation_requested == 1)
                                                        <button class="btn btn-info disabled">Booking Cancellation Requested</button>
                                                    @endif
                                                    
                                                    @if ($last_booking->booking_cancelled == 1)
                                                        <button class="btn btn-danger disabled">Booking Cancelled</button>
                                                    @endif
                                                </li>
                                                <li>
                                                    Booking Confirmation Number: <?php echo mt_rand(100000,999999) ?>
                                                </li>
                                                <li>Check in: {{ $last_booking->checkin }}</li>
                                                <li>Check out: {{ $last_booking->checkout }}</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!--end description-->
                            </div>
                        </div>
                        <hr>
                    @endif
                    <h3>Recommend Accommodations for {{ Auth::user()->name }}</h3>
                    <div class="row">
                        @foreach ($accommodations as $accommodation)
                            <div class="col-md-3 col-sm-6">
                                <a href="{{ url('accommodation') }}/{{ $accommodation->type }}/{{ $accommodation->slug }}" class="item small">
                                    <div class="image">
                                        <div class="info">
                                            <figure class="label label-info">{{ Helper::slug_gen($accommodation->type) }}</figure>
                                            <aside>
                                                <h3>{{ $accommodation->title }}</h3>
                                            </aside>
                                        </div>
                                        <div class="wrapper">
                                            <div class="gallery">
                                                <?php $photo = $accommodation->mainPhoto ?>
                                                <img src="{{ Helper::s3_url_gen($photo[0]->thumbnail) }}" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <!--end image-->
                                </a>
                                <!--end item-->
                            </div>
                        @endforeach
                    </div>
                    <hr>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
