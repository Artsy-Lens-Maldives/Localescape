@extends('layouts.admin')

@section('title')
    <span><i class="fa fa-home"></i> Rooms of accommodation</span> <a class="btn btn-success" href="{{ url()->current() }}/add">Add New Room</a> <a class="btn btn-warning" href="{{ url('admin/accommodations') }}">Go Back</a>
@endsection

@section('content')
    <div class="flash-message">
        @foreach (['danger', 'warning', 'success', 'info'] as $msg)
            @if(Session::has('alert-' . $msg))

            <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
            
            @endif
        @endforeach
    </div>
    <div>
        <table id="rooms" class="table table-striped table-bordered" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th>Accommodation Name</th>
                    <th>Room Type</th>
                    <th>Created At</th>
                    <th>Last Update</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($accommodation->rooms as $room)
                <tr>
                    <td>{{ $accommodation->title }}</td>
                    <td>{{ $room->room_type }}</td>
                    <td>{{ $room->created_at->diffForHumans() }}</td>
                    <td>{{ $room->updated_at->diffForHumans() }}</td>
                    <td style="text-align: center;">
                        <a style="margin:1px" class="btn btn-danger" href="{{ url()->current() }}/delete/{{ $room->id }}" onclick="return confirm('Are you sure you would like to delete this room. This process cannot be reversed.')">Delete</a>
                        <a style="margin:1px" class="btn btn-warning" href="{{ url()->current() }}/edit/{{ $room->id }}">Edit</a>
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
        $('#rooms').DataTable();
    } );
</script>

@endsection