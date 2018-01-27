@extends('layouts.extranet')

@section('content')
<br>
<br>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel-body">
                <div class="flash-message">
                    @foreach (['danger', 'warning', 'success', 'info'] as $msg)
                        @if(Session::has('alert-' . $msg))
            
                        <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
                        
                        @endif
                    @endforeach
                </div>
                <table id="taxi" class="table table-striped table-bordered" cellspacing="0" width="100%">
                    <thead>
                        <tr>                            
                            <th>Accomodation Booked</th>
                            <th>Check In</th>
                            <th>Check Out</th>
                            <th>Nights</th>
                            <th>Adults</th>
                            <th>Children</th>
                            <th>Price</th>
                            <th>Booked Date</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($bookings as $booking)
                        <tr>
                            <td>{{ $booking->room->accommodation->title }} - {{ $booking->room->room_type }}</td>
                            <td>{{ $booking->checkin }}</td>
                            <td>{{ $booking->checkout }}</td>
                            <td>{{ $booking->nights }}</td>
                            <td>{{ $booking->adult }}</td>
                            <td>{{ $booking->children }}</td>
                            <td>{{ $booking->price }}</td>
                            <td>{{ $booking->created_at->toFormattedDateString() }}</td>
                            @if ($booking->booking_confirmed == 1)
                                <td>
                                    <button class="btn btn-success disabled">Confirmed</button>
                                </td>
                                <td>
                                    <a style="margin:1px" class="btn btn-warning" href="{{ url()->current() }}/cancel/{{ $booking->id }}">Cancel Booking</a>
                                </td>
                            @endif
                            
                            @if ($booking->booking_not_available == 1)
                                <td>
                                    <button class="btn btn-danger disabled">Booking Not Available</button>
                                </td>
                                <td>
                                    <a style="margin:1px" class="btn btn-warning" href="{{ url()->current() }}/confirm/{{ $booking->id }}">Confirm Booking</a>
                                </td>
                            @endif
                            
                            @if ($booking->booking_requested == 1)
                                <td>
                                    <button class="btn btn-primary disabled">Booking Requested</button>
                                </td>
                                <td>
                                    <a style="margin:1px" class="btn btn-warning" href="{{ url()->current() }}/confirm/{{ $booking->id }}">Confirm Booking</a>
                                    <a style="margin:1px" class="btn btn-danger" href="{{ url()->current() }}/cancel/{{ $booking->id }}">Cancel Booking</a>
                                </td>
                            @endif
                            
                            @if ($booking->booking_cancellation_requested == 1)
                                <td>                                        
                                    <button class="btn btn-info disabled">Booking Cancellation Requested</button>
                                </td>
                                <td>
                                    <a style="margin:1px" class="btn btn-warning" href="{{ url()->current() }}/cancel/{{ $booking->id }}">Cancel Booking</a>
                                </td>
                            @endif
                            
                            @if ($booking->booking_cancelled == 1)
                                <td>
                                    <button class="btn btn-danger disabled">Booking Cancelled</button>
                                </td>
                                <td>
                                    <a style="margin:1px" class="btn btn-warning" href="{{ url()->current() }}/confirm/{{ $booking->id }}">Confirm Booking</a>
                                </td>
                            @endif
                        </tr>                            
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
