@extends('layouts.app')

@section('content')
    <div id="banner-background" class="banner" style="">
        <div class="banner-content">
            <h1>Local Escape</h1>
            <p>Find Your Perfect Trip <br>
            Search for hotels</p>
            <form action="#" class="form-inline">
                <div class="form-group">
                    <input type="text" class="form-control input-lg" placeholder="Where">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control input-lg" placeholder="Check In">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control input-lg" placeholder="Check Out">
                </div>
                <div class="form-group">
                    <select name="" id="" class="form-control input-lg">
                        <option value="1">1 Guest</option>
                        <option value="2">2 Guest</option>
                        <option value="3">3 Guest</option>
                        <option value="4">4 Guest</option>
                        <option value="5">5 Guest</option>
                    </select>
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-primary btn-lg" value="Search">
                </div>
            </form>
        </div>
    </div>
    <div class="gap"></div>
    <div class="container">
        <div class="row multiple-items">
            <div class="col-xs-12 col-sm-4">
                <div class="card" style="background: linear-gradient(rgba(0,0,0,0.3), rgba(0,0,0,0.2)), url('https://aff.bstatic.com/images/hotel/840x460/454/45449549.jpg');">
                    <div class="card-category">Rasdhoo</div>
                        <div class="card-description">
                            <h2>Rasdhoo View In</h2>
                        </div>
                    <a class="card-link" href="#" ></a>
                </div>
            </div>
            <div class="col-xs-12 col-sm-4">
                <div class="card" style="background: linear-gradient(rgba(0,0,0,0.3), rgba(0,0,0,0.2)), url('https://aff.bstatic.com/images/hotel/840x460/454/45449549.jpg');">
                    <div class="card-category">Rasdhoo</div>
                        <div class="card-description">
                            <h2>Rasdhoo View In</h2>
                        </div>
                    <a class="card-link" href="#" ></a>
                </div>
            </div>
            <div class="col-xs-12 col-sm-4">
                <div class="card" style="background: linear-gradient(rgba(0,0,0,0.3), rgba(0,0,0,0.2)), url('https://aff.bstatic.com/images/hotel/840x460/454/45449555.jpg');">
                    <div class="card-category">Rasdhoo</div>
                        <div class="card-description">
                            <h2>Rasdhoo View In</h2>
                        </div>
                    <a class="card-link" href="#" ></a>
                </div>
            </div>
            <div class="col-xs-12 col-sm-4">
                <div class="card" style="background: linear-gradient(rgba(0,0,0,0.3), rgba(0,0,0,0.2)), url('https://aff.bstatic.com/images/hotel/840x460/454/45449549.jpg');">
                    <div class="card-category">Rasdhoo</div>
                        <div class="card-description">
                            <h2>Rasdhoo View In</h2>
                        </div>
                    <a class="card-link" href="#" ></a>
                </div>
            </div>
            <div class="col-xs-12 col-sm-4">
                <div class="card" style="background: linear-gradient(rgba(0,0,0,0.3), rgba(0,0,0,0.2)), url('https://aff.bstatic.com/images/hotel/840x460/454/45449549.jpg');">
                    <div class="card-category">Rasdhoo</div>
                        <div class="card-description">
                            <h2>Rasdhoo View In</h2>
                        </div>
                    <a class="card-link" href="#" ></a>
                </div>
            </div>
        </div>
    </div>
@endsection
