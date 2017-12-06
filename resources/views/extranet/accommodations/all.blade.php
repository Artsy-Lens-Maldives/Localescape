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
                    <h1><a href="#">My Accommodations</a> <a style="margin:1px" class="btn btn-success" href="{{ url()->current() }}/add">Add Accommodation</a></h1>
                </div>
                <div class="reservations table-responsive">
                    <div class="flash-message">
                        @foreach (['danger', 'warning', 'success', 'info'] as $msg)
                            @if(Session::has('alert-' . $msg))

                            <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
                            
                            @endif
                        @endforeach
                    </div>
                    <table class="table table-fixed-header">
                        <thead class="header">
                        <tr>
                            <th>Accommodation Name</th>
                            <th>Accommodation Type</th>
                            <th>Location</th>
                            <th>Status</th>
                            <th>Created at</th>
                            <th>Last Update</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($accommodations as $acco)

                        <tr class="reservation">
                            <td>{{ $acco->title }}</td>
                            <td>{{ $acco->type }}</td>
                            <td>{{ $acco->address }}</td>
                            <td style="font-weight: bold; text-transform: capitalize;">{{ $acco->status }}</td>
                            <td>{{ $acco->created_at->diffForHumans() }}</td>
                            <td>{{ $acco->updated_at->diffForHumans() }}</td>
                            <td style="text-align: center;">
                                <a style="margin:1px" class="btn btn-danger" href="/extranet/accommodations/delete/{{ $acco->id }}" onclick="return confirm('Are you sure you would like to delete this accomodation. This process cannot be reversed.')">Delete</a>
                                <a style="margin:1px" class="btn btn-warning" href="/extranet/accommodations/edit/{{ $acco->id }}">Edit</a>
                                <a style="margin:1px" class="btn btn-info" href="/extranet/accommodations/rooms/{{ $acco->id }}">Rooms</a>
                                <a style="margin:1px" class="btn btn-success" href="/extranet/accommodations/images/{{ $acco->id }}">Images</a>
                                <a style="margin:1px" class="btn btn-success" href="/extranet/accommodations/preview/{{ $acco->id }}">Preview</a>
                            </td>
                        </tr>

                        @endforeach
                        <!--end reservation-->
                        </tbody>
                    </table>
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