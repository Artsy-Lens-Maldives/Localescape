@extends('layouts.admin')

@section('title')
    <span><i class="fa fa-check" aria-hidden="true"></i> All Facilities</span> <a class="btn btn-success" href="{{ url()->current() }}/add">Create a Facility</a> 
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
      <table id="facilities" class="table table-striped table-bordered" cellspacing="0" width="100%">
        <thead>
          <tr>
            <th>Facility Name</th>
            <th>Icon</th>
            <th>Created at</th>
            <th>Last Update</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach($facilities as $facility)
            <tr>
              <td>{{ $facility->name }}</td>
              <td><i class="fa {{ $facility->fa_icon }} fa-2x" aria-hidden="true"></i> icon</td>
              <td>{{ $facility->created_at->diffForHumans() }}</td>
              <td>{{ $facility->updated_at->diffForHumans() }}</td>
              <td style="text-align: center;">
                <a style="margin:1px" class="btn btn-danger" href="{{ url()->current() }}/delete/{{ $facility->id }}" onclick="return confirm('Are you sure you would like to delete this Facility. This process cannot be reversed.')"><i class="fa fa-trash-o"></i> Delete</a>
                <a style="margin:1px" class="btn btn-warning" href="{{ url()->current() }}/edit/{{ $facility->id }}"><i class="fa fa-edit"></i> Edit</a>
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
        $('#facilities').DataTable();
    } );
</script>

@endsection