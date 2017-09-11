@extends('layouts.app')

@section('content')
    <div class="container">
        <!-- <ol class="breadcrumb">
            <li><a href="#">Home</a></li>
            <li><a href="#">Listing</a></li>
            <li class="active">Detail</li>
        </ol> -->
        <!-- end breadcrumb-->
        <div class="main-content">
            <!-- <div class="title">
                <h1>404</h1>
            </div> -->
            <!--end title-->
            <div class="error-message">
                <h2>404</h2>
                <div class="message">
                    <h3>Page not found</h3>
                </div>
            </div>
            <!--end error-message-->
            <form class="labels-uppercase">
                <div class="row">
                    <div class="col-md-4 col-md-offset-4">
                        <div class="row">
                            <div class="col-md-10">
                                <div class="form-group">

                                    <input type="search" class="form-control" id="search" name="search" placeholder="Enter Search Keyword">
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary ">Search</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <!--end main-content-->
    </div>
@endsection