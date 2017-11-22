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
                            You have logged into Extranet!
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
