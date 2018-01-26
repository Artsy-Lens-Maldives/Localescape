@extends('layouts.admin')

@section('title')
    <span>All Inquiries</span>
@endsection

@section('content')
    
    <div class="container">
      <table id="inquiry" class="table table-striped table-bordered" cellspacing="0" width="100%">
        <thead>
          <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Contact Number</th>
            <th>Accomodation Inquiried</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach($inquiries as $inquiry)
            <tr>
              <td>{{ $inquiry->name }}</td>
              <td>{{ $inquiry->email }}</td>
              <td>{{ $inquiry->contact }}</td>
              <td>{{ $inquiry->room->accommodation->title }} - {{ $inquiry->room->room_type }}</td>
              <td style="text-align: center;">
                <a style="margin:1px" class="btn btn-success" href="">View</a>                     
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
        $('#inquiry').DataTable();
    } );
</script>

@endsection