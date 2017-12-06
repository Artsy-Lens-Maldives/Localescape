@extends('layouts.admin')

@section('title')
    <span><i class="fa fa-home"></i> All Accommodation</span> <a class="btn btn-success" href="{{ url()->current() }}/create">Create Accommodation</a> 
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
        <table id="accommo" class="table table-striped table-bordered" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Type</th>
                    <th>Location</th>
                    <th>Status</th>
                    <th>Created At</th>
                    <th>Last Update</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($accommodations as $acco)
                <tr>
                    <td>{{ $acco->title }}</td>
                    <td>{{ $acco->type }}</td>
                    <td>{{ $acco->address }}</td>
                    <td style="font-weight: bold; text-transform: capitalize;">{{ $acco->status }}</td>
                    <td>{{ $acco->created_at->diffForHumans() }}</td>
                    <td>{{ $acco->updated_at->diffForHumans() }}</td>
                    <td style="text-align: center;">
                        <a style="margin:1px" class="btn btn-danger" href="{{ url()->current() }}/delete/{{ $acco->id }}" onclick="return confirm('Are you sure you would like to delete this accomodation. This process cannot be reversed.')">Delete</a>
                        <a style="margin:1px" class="btn btn-warning" href="{{ url()->current() }}/edit/{{ $acco->id }}">Edit</a>
                        <a style="margin:1px" class="btn btn-info" href="{{ url()->current() }}/rooms/{{ $acco->id }}">Rooms</a>
                        <a style="margin:1px" class="btn btn-success" href="{{ url()->current() }}/images/{{ $acco->id }}">Images</a>
                        <a style="margin:1px" class="btn btn-primary" href="{{ url()->current() }}/approve/{{ $acco->id }}">Approve</a>
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
        $('#accommo').DataTable();
    } );
</script>

@endsection