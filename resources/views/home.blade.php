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
                                <li class="active"><a href="#">Customer Dashboard</a></li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Navigation <span class="caret"></span></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="{{ url('/home/bookings') }}">All Bookings</a></li>
                                            <li><a href="{{ url('/home/inquiries') }}">All Inquiries</a></li>
                                            <li role="separator" class="divider"></li>
                                            <li><a href="{{ url('/settings') }}">Settings</a></li>
                                        </ul>
                                    </li>
                            </ul>
                        </div>
                    </ul>
                 </nav>
                 <div class="panel-body">
                    <h3>Your Last Booking</h3>
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
                                <td>{{ $last_booking->name }}</th>
                                <td>{{ $last_booking->email }}</td>
                                <td>{{ $last_booking->checkin }}</td>
                                <td>{{ $last_booking->checkout }}</td>
                                <td>{{ $last_booking->eta }}</td>
                                <td>{{ $last_booking->flightnumber }}</td>
                                <td>{{ $last_booking->room->accommodation->title }} - {{ $booking->room->room_type }}</td>
                                <td>{{ $last_booking->created_at->diffForHumans() }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
