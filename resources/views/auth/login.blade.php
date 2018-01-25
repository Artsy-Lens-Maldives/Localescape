@extends('layouts.app')

@section('content')

<br>
<br>
<br>
<br>
<br>

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
               <center> <div class="panel-heading" style="font-size:20px;">Welcome To Local Escape Customer Panel</div> </center>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

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
                                <input id="password" type="password" class="form-control" name="password" required>

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
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Login
                                </button>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    Forgot Your Password?
                                </a>
                            </div>
                        </div>
                        <hr>
                        <center> <div class="panel-heading" style="font-size:20px;">Login Using </div> </center>
                        <hr>

                        <center>
                            <div class="row">
                                <div class="col-xs-6 col-md-2 col-offset-2">
                                   
                                </div>  
                                <div class="col-xs-6 col-md-2 ">
                                    <i class="fa fa-facebook-official" style="font-size:45px;color:#3b5998"></i>
                                </div>      
                                
                                <div class="col-xs-6 col-md-2">
                                    <i class="fa fa-twitter" style="font-size:45px;color:#0084b4"></i>
                                </div>      
                                
                                <div class="col-xs-6 col-md-2">
                                    <i class="fa fa-google-plus" style="font-size:45px;color:#d34836"></i>
                                </div> 
                                <div class="col-xs-6 col-md-2">
                                       
                                </div> 
                            </div>
                        </center>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
