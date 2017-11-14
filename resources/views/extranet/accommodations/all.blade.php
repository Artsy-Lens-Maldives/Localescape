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
                    <h1><a href="#">My Accommodations</a></h1>
                </div>
                <div class="reservations table-responsive">
                    <table class="table table-fixed-header">
                        <thead class="header">
                        <tr>
                            <th>Accommodation Name</th>
                            <th>Accommodation Type</th>
                            <th>Location</th>
                            <th>Created at</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr class="reservation">
                            <td>Test</td>
                            <td>Test</td>
                            <td>Test</td>
                            <td>Test</td>
                            <td>
                                <a class="btn btn-danger" href="" onclick="return confirm('Are you sure you would like to delete this accomodation. This process cannot be reversed.')">Delete</a>
                                <a class="btn btn-warning" href="">Edit</a>
                                <a class="btn btn-info" href="">Rooms</a>
                            </td>
                        </tr>
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