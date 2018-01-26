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
                                <li><a href="{{ url('/settings') }}">Settings</a></li>

                            </ul>
                        </div>
                    </ul>
                 </nav>
                 <div class="panel-body">
                    <h3>Your Last Booking was on {{ $last_booking->created_at->toFormattedDateString() }}</h3>
                    <table id="taxi" class="table table-striped table-bordered" cellspacing="0" width="100%">
                        <thead>
                            <tr> 
                                <th>Accomodation Booked</th>                  
                                <th>Check In</th>
                                <th>Check Out</th>
                                <th>ETA</th>
                                <th>Flight Number</th>
                                <th>Email</th>
                                <th>Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{ $last_booking->room->accommodation->title }} - {{ $last_booking->room->room_type }}</td>
                                <td>{{ $last_booking->checkin }}</td>
                                <td>{{ $last_booking->checkout }}</td>
                                <td>{{ $last_booking->eta }}</td>
                                <td>{{ $last_booking->flightnumber }}</td>
                                <td>{{ $last_booking->email }}</td>
                                <td>{{ $last_booking->created_at->diffForHumans() }}</td>
                            </tr>
                        </tbody>
                    </table>
                    <hr>
                    <h3>Upcoming Booking</h3>
                    <table id="taxi" class="table table-striped table-bordered" cellspacing="0" width="100%">
                        <thead>
                            <tr>                   
                                <th>Name</th>
                                <th>Email</th>
                                <th>Check In</th>
                                <th>Check Out</th>
                                <th>Estimated Time Arrival</th>
                                <th>Flight Number</th>
                                <th>Accomodation Booked</th>
                                <th>Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{ $upcoming_booking->name }}</th>
                                <td>{{ $upcoming_booking->email }}</td>
                                <td>{{ $upcoming_booking->checkin }}</td>
                                <td>{{ $upcoming_booking->checkout }}</td>
                                <td>{{ $upcoming_booking->eta }}</td>
                                <td>{{ $upcoming_booking->flightnumber }}</td>
                                <td>{{ $upcoming_booking->room->accommodation->title }} - {{ $upcoming_booking->room->room_type }}</td>
                                <td>{{ $upcoming_booking->created_at->diffForHumans() }}</td>
                            </tr>
                        </tbody>
                    </table>
                    <hr>
                    <hr>
                    <h3>Recommend Accommodations for {{ Auth::user()->name }}</h3>
                    <br>
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
                                                @foreach ($accommodation->photos as $photo)
                                                    <img src="{{ Helper::s3_url_gen($photo->thumbnail) }}" alt="">
                                                @endforeach
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
