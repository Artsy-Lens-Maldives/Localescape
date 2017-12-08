@extends('extranet.layout.auth')

@section('content')
    <div class="container">
        <ol class="breadcrumb">
            <li><a href="#">Home</a></li>
            <li><a href="#">Extranet</a></li>
        </ol>
        <div class="main-content">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="panel panel-default">
                        <div class="panel-heading">Dashboard</div>

                        <div class="panel-body">
                            @if($users->phone === null OR $users->street === null OR $users->city === null OR $users->country === null)
                                <div class="alert alert-info">
                                    <strong>Please complete your profile before adding a Accommodation <a href="{{ url('extranet/profile') }}">Go to Profile</a> </strong>
                                </div>      
                            @endif              
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
