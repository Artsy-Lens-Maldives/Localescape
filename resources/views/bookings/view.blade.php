@extends('layouts.admin')

@section('title')
    <span>All Bookings</span>
@endsection

@section('content')
    
    <div class="container">
      <table id="bookings" class="table table-striped table-bordered" cellspacing="0" width="100%">
        <thead>
          <tr>
            <th>Name</th>
            <th>Accomodation Booked</th>
            <th>Email</th>
            <th>Checkin</th>
            <th>Checkout</th>
            <th>Estimated Time of Arrival</th>
            <th>Flight Number</th>
            <th>Status</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach($bookings as $booking)
            <tr>
              <td>{{ $booking->name }}</td>
              <td>{{ $booking->room->accommodation->title }} - {{ $booking->room->room_type }}</td>
              <td>{{ $booking->email }}</td>
              <td>{{ $booking->checkin }}</td>
              <td>{{ $booking->checkout }}</td>
              <td>{{ $booking->eta }}</td>
              <td>{{ $booking->flightnumber }}</td>
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
                      <a style="margin:1px" class="btn btn-danger" href="{{ url()->current() }}/cancel/{{ $booking->id }}">Decline Booking</a>
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

@endsection

@section('js')
    
<script>
    $(document).ready(function() {
        $('#bookings').DataTable();
    } );
</script>

@endsection