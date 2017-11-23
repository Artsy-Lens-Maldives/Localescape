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
            <th>Email</th>
            <th>Checkin</th>
            <th>Checkout</th>
            <th>Estimated Time of Arrival</th>
            <th>Flight Number</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach($bookings as $booking)
            <tr>
              <td>{{ $booking->name }}</td>
              <td>{{ $bookings->email }}</td>
              <td>{{ $booking->checkin }}</td>
              <td>{{ $bookings->checkout }}</td>
              <td>{{ $booking->eta }}</td>
              <td>{{ $bookings->flightnumber }}</td>
              <td style="text-align: center;">
                <a style="margin:1px" class="btn btn-danger" href="" onclick="return confirm('Are you sure you would like to delete this accommodation. This process cannot be reversed.')">Delete</a>
                <a style="margin:1px" class="btn btn-warning" href="">Edit</a>                     
              </td>
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