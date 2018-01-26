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
											<input type="text" name="phone" id="phone" placeholder="Enter your phone number" class="form-control"
											value="{{ $user->name }}"
											>
										</div>
									</div>

									<div class="form-group">
										<label class="control-label col-sm-3" for="address">Address:</label>
										<div class="col-sm-9">
											<input type="text" name="address" id="address" placeholder="Enter your address" class="form-control"
											value="{{ $user->name }}"
											>
										</div>
									</div>

									<div class="form-group">
										<label class="control-label col-sm-3" for="city">City:</label>
										<div class="col-sm-9">
											<input type="text" name="city" id="city" placeholder="Enter your city" class="form-control"
											value="{{ $user->name }}"
											>
										</div>
									</div>

									<div class="form-group">
										<label class="control-label col-sm-3" for="country">Country:</label>
										<div class="col-sm-9">
											<input type="text" name="country" id="country" class="form-control"
											value="{{ $user->name }}"
											>
										</div>
									</div>

									<div class="form-group">
										<label class="control-label col-sm-3" for="zip">Zip/Post Code:</label>
										<div class="col-sm-9">
											<input type="text" name="zip" id="zip" placeholder="Enter your zip/post code" class="form-control"
											value="{{ $user->name }}"
											>
										</div>
									</div>
									
									<div class="form-group">
										<div class="col-sm-offset-3 col-sm-10">
											<button type="submit" class="btn btn-info">Submit</button>
										</div>
									</div>
								</form> 
							</div>
						</div>
						<hr>
						<div class="change-password">
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
