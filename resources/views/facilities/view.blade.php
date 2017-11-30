@extends('layouts.admin')

@section('title')
    <span>All Facilities</span>  <a class="btn btn-success" href="{{ url()->current() }}/add">Create a Facility</a> 
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
            <th>Facility Name</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach($facility as $facilities)
            <tr>
              <td>{{ $facilities->name }}</td>
              <td style="text-align: center;">
                <a style="margin:1px" class="btn btn-danger" href="{{ url()->current() }}/delete/{{ $tour->slug }}" onclick="return confirm('Are you sure you would like to delete this Facility. This process cannot be reversed.')">Delete</a>
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