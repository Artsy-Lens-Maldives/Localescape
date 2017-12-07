@extends('layouts.extranet')

@section('content')
        <div class="container">
            <ol class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li><a href="#">Extranet</a></li>
                <li class="active">Accommodations</li>
            </ol>
            <!--end breadcrumb-->
            <div class="main-content">
                <div class="title">
                    <h1><a href="#">Rooms of accommodation</a> <a style="margin:1px" class="btn btn-success" href="{{ url()->current() }}/add">Add New Room</a><a href="{{ url('extranet/accommodations') }}" class="btn btn-warning">Go Back</a> </h1>
                </div>
                <div class="reservations table-responsive">
                    <div class="flash-message">
                        @foreach (['danger', 'warning', 'success', 'info'] as $msg)
                            @if(Session::has('alert-' . $msg))

                            <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
                            
                            @endif
                        @endforeach
                    </div>
                    @if($rooms->isempty())
                        <h4>No Rooms found for this Accommodation </h4>
                    @else
                    <table class="table table-fixed-header">
                        <thead class="header">
                            <tr>
                                <th>Accommodation Name</th>
                                <th>Room Type</th>
                                <th>Created at</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($rooms as $room)
                            <tr class="reservation">
                                <td>{{ $room->accommo_id }}</td>
                                <td>{{ $room->room_type }}</td>                                
                                <td>{{ $room->created_at->diffForHumans() }}</td>
                                <td style="text-align: center;">
                                    <a style="margin:1px" class="btn btn-danger" href="/extranet/accommodations/rooms/delete/{{ $room->id }}" onclick="return confirm('Are you sure you would like to delete this room. This process cannot be reversed.')">Delete</a>
                                    <a style="margin:1px" class="btn btn-warning" href="/extranet/accommodations/rooms/edit/{{ $room->id }}">Edit</a>
                                </td>
                            </tr>
                        @endforeach
                        <!--end reservation-->
                        </tbody>
                    </table>
                    @endif
                </div>
                <!--end my-items-->
            </div>
            <!--end main-content-->
        </div>
        <!--end container-->    
@endsection

@section('css')
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css">
@endsection

@section('js')
    <script src="//cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="//cdn.datatables.net/1.10.16/js/dataTables.bootstrap.min.js"></script>

    <script>
    $(document).ready(function() {
        $('#example').DataTable();
    } );
    </script>

@endsection