@extends('layouts.admin')

@section('title')
    <span>All Tour Packages</span>  <a class="btn btn-success" href="{{ url()->current() }}/add">Create a tour</a> 
@endsection

@section('content')
    
    <div class="container">
      <div class="flash-message">
        @foreach (['danger', 'warning', 'success', 'info'] as $msg)
            @if(Session::has('alert-' . $msg))

            <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
            
            @endif
        @endforeach
      </div>
      <table id="tours" class="table table-striped table-bordered" cellspacing="0" width="100%">
        <thead>
          <tr>
            <th>Package Name</th>
            <th>Price</th>
            <th>Description</th>
            <th>Itenarary</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach($tours as $tour)
            <tr>
              <td>{{ $tour->name }}</td>
              <td>{{ $tour->price }}</td>
              <td>{{ $tour->description }}</td>
              <td>{{ $tour->itenarary }}</td>
              <td style="text-align: center;">
                <a style="margin:1px" class="btn btn-danger" href="{{ url()->current() }}/delete/{{ $tour->slug }}" onclick="return confirm('Are you sure you would like to delete this tour package. This process cannot be reversed.')">Delete</a>
                <a style="margin:1px" class="btn btn-warning" href="{{ url()->current() }}/edit/{{ $tour->slug }}">Edit</a>                     
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
        $('#tours').DataTable();
    } );
</script>

@endsection