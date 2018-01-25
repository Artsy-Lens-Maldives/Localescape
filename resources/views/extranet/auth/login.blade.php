@extends('extranet.layout.auth')

@section('content')
<div class="container">
    <ol class="breadcrumb">
        <li><a href="#">Home</a></li>
        <li><a href="#">Extranet</a></li>
        <li><a href="#">Login</a></li>
    </ol>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                    <center> <div class="panel-heading" style="font-size:20px;">Welcome To Local Escape Extranet</div> </center>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/extranet/login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember"> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Login
                                </button>

                                <a class="btn btn-link" href="{{ url('/extranet/password/reset') }}">
                                    Forgot Your Password?
                                </a>
                            </div>
                        </div>
                        <hr>
                        <center> <div class="panel-heading" style="font-size:20px;">WHY LIST IN LOCAL ESCAPE?</div> </center>
                        <center> <div class="panel-heading" style="font-size:15px;">Easy to Use : Our hassle-free solutions give you the power to manage your calendar and reservations with ease.</div> </center>
                        <center> <div class="panel-heading" style="font-size:15px;">Flexible Payments : You're in charge of when and how to collect payment from guests.</div> </center>
                        <center> <div class="panel-heading" style="font-size:15px;">Support in Your Language : Our support team speaks your language and is always available – whatever you need, whenever you need it.</div> </center>
                        <hr>
                        <center> <div class="panel-heading" style="font-size:20px;">
                                How It Works</div> </center>
                        <center> <div class="panel-heading" style="font-size:15px;">#1 You tell us about your property: Add your property details, photos and payment policies during your registration. Once we confirm your details, you set your property live and can start receiving reservations.</div> </center>
                        <center> <div class="panel-heading" style="font-size:15px;">#2 We tell the world about you We show your property in a way that's relevant to guests around the world, we also market your property on search engines like Google, Bing and Yahoo to help you sell more rooms and increase revenue!</div> </center>
                        <center> <div class="panel-heading" style="font-size:15px;">#3 You get instant bookings & reviews All bookings made through localescapemaldives.com are confirmed instantly. In localescapemaldives.com guests leave reviews of their stay which help your future guests make the decision to stay with you.</div> </center>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
