@extends('layouts.app')

@section('content')
<br>
<br>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-default">
				<nav class="navbar navbar-inverse">
					<a class="navbar-brand" href="#">Welcome {{ Auth::user()->name }}</a>
					<ul class="nav navbar-nav navbar-right">
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<ul class="nav navbar-nav">
								<li><a href="{{ url('/home') }}">Customer Dashboard</a></li>
								<li><a href="{{ url('/home/bookings') }}">All Bookings</a></li>
								<li><a class="active" href="{{ url('/home/inquiries') }}">All Inquiries</a></li>
								<li><a href="{{ url('/home/settings') }}">Settings</a></li>
							</ul>
						</div>
					</ul>
				</nav>
				<div class="panel-body">
					<div class="your-account">
						<h2>Profile</h2>
						<p>This information is only used to autofill your details and make it quicker for you to book. Your details will be stored securely and won't be shared publicly. </p>
						<div class="row">
							<div class="col-md-7">
								<form class="form-horizontal" action="{{ url('/home/settings/profile') }}" method="POST">
									{{ csrf_field() }}
									<div class="form-group">
										<label class="control-label col-sm-3" for="name">Full Name:</label>
										<div class="col-sm-9">
											<input type="text" class="form-control" id="name" placeholder="Enter your name" name="name"
											value="{{ $user->name }}">
										</div>
									</div>

									<div class="form-group">
										<label class="control-label col-sm-3" for="phone">Phone Number:</label>
										<div class="col-sm-9">
											<input type="text" name="phone" id="phone" placeholder="Enter your phone number (Include your country code)" class="form-control"
											@if($user->phone !== null)
												value="{{ $user->phone }}"
											@endif>
										</div>
									</div>

									<div class="form-group">
										<label class="control-label col-sm-3" for="address">Address:</label>
										<div class="col-sm-9">
											<input type="text" name="street" id="address" placeholder="Enter your address" class="form-control"
											@if($user->street !== null)
												value="{{ $user->street }}"
											@endif>
										</div>
									</div>

									<div class="form-group">
										<label class="control-label col-sm-3" for="city">City:</label>
										<div class="col-sm-9">
											<input type="text" name="city" id="city" placeholder="Enter your city" class="form-control"
											@if($user->city !== null)
												value="{{ $user->city }}"
											@endif>
										</div>
									</div>

									<div class="form-group">
										<label class="control-label col-sm-3" for="country">Country:</label>
										<div class="col-sm-9">
											<input type="text" name="country" id="country" placeholder="Enter your country" class="form-control"
											@if($user->country !== null)
												value="{{ $user->country }}"
											@endif>
										</div>
									</div>

									<div class="form-group">
										<label class="control-label col-sm-3" for="zip">Zip/Post Code:</label>
										<div class="col-sm-9">
											<input type="text" name="zip" id="zip" placeholder="Enter your zip/post code" class="form-control"
											@if($user->zip !== null)
												value="{{ $user->zip }}"
											@endif>
										</div>
									</div>
									
									<div class="form-group">
										<div class="col-sm-offset-3 col-sm-9">
											<button type="submit" class="btn btn-info">Submit</button>
										</div>
									</div>
								</form> 
							</div>
						</div>
						<hr>
					</div>
					<div class="change-password">
						<h3>Change Password</h3>
						<br>
						@if (session('error'))
							<div class="alert alert-danger">
							{{ session('error') }}
							</div>
						@endif
						@if (session('success'))
							<div class="alert alert-success">
							{{ session('success') }}
						</div>
						@endif
						<div class="row">
							<div class="col-md-7">
								<form class="form-horizontal" method="POST" action="{{ route('changePassword') }}">
									{{ csrf_field() }}
									<div class="form-group{{ $errors->has('current-password') ? ' has-error' : '' }}">
										<label for="new-password" class="col-sm-3 control-label">Current Password</label>
										<div class="col-sm-9">
												<input id="current-password" type="password" class="form-control" name="current-password" required>
											@if ($errors->has('current-password'))
												<span class="help-block">
													<strong>{{ $errors->first('current-password') }}</strong>
												</span>
											@endif
										</div>
									</div>
									<div class="form-group{{ $errors->has('new-password') ? ' has-error' : '' }}">
										<label for="new-password" class="col-sm-3 control-label">New Password</label>
											<div class="col-sm-9">
												<input id="new-password" type="password" class="form-control" name="new-password" required>
												@if ($errors->has('new-password'))
													<span class="help-block">
														<strong>{{ $errors->first('new-password') }}</strong>
													</span>
												@endif
											</div>
									</div>
									<div class="form-group">
										<label for="new-password-confirm" class="col-sm-3 control-label">Confirm New Password</label>
										<div class="col-sm-9">
											<input id="new-password-confirm" type="password" class="form-control" name="new-password_confirmation" required>
										</div>
									</div>
									<div class="form-group">
										<div class="col-sm-9 col-sm-offset-3">
											<button type="submit" class="btn btn-primary">
											Change Password
											</button>
										</div>
									</div>
								
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
