@extends('layouts.extranet')

@section('content')
        <div class="container">
            <ol class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li><a href="#">Extranet - Test</a></li>
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
                                <button style="margin:1px" class="delete-button btn btn-danger" data-id="{{ $acco->id }}" onclick="">Delete</button>
                                <a style="margin:1px" class="btn btn-warning" href="/extranet/accommodations/edit/{{ $acco->id }}">Edit</a>
                                <a style="margin:1px" class="btn btn-info" href="/extranet/accommodations/rooms/{{ $acco->id }}">Rooms</a>
                                <a style="margin:1px" class="btn btn-success" href="/extranet/accommodations/images/{{ $acco->id }}">Images</a>
                                <a style="margin:1px" class="btn btn-primary" href="/extranet/accommodations/preview/{{ $acco->id }}">Preview</a>
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


@section('js')
    <script src="//unpkg.com/sweetalert2@7.3.1/dist/sweetalert2.all.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>

    <script>
        const swal = require('sweetalert2');

        $(document).on('click', '.button', function (e) {
            e.preventDefault();
            var id = $(this).data('id');
            swal({
                title: "Are you sure!",
                type: 'warning',
                text: "You won't be able to revert this!",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            },
            function() {
                $.ajax({
                    type: "POST",
                    url: "{{ url('/extranet/accommodations/delete') }}",
                    data: {id : id},
                    success: function (data) {
                        if(data){
                            swal("Deleted", "Accommodation was successfully deleted!", "success");
                        } 
                        else {
                            swal("Oops", "Your accommodation could not be deleted 😞", "error");
                        }
                    }         
                });
            });
        });


    </script>

@endsection