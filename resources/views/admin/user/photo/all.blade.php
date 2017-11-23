@extends('layouts.admin')

@section('content')
    
    <div>
        <table id="accommo" class="table table-striped table-bordered" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Created At</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->created_at->diffForHumans() }}</td>
                    <td style="text-align: center;">
                        <a style="margin:1px" class="btn btn-danger" href="{{ url()->current() }}/delete/{{ $user->id }}" onclick="return confirm('Are you sure you would like to delete this accomodation. This process cannot be reversed.')">Delete</a>
                        <a style="margin:1px" class="btn btn-warning" href="{{ url()->current() }}/edit/{{ $user->id }}">Edit</a>
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