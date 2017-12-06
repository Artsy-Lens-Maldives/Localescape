@extends('layouts.extranet')

@section('content')
    
        <div class="container">
            <ol class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li><a href="#">Listing</a></li>
                <li class="active">Detail</li>
            </ol>
            <!--end breadcrumb-->
            <div class="main-content">
                <div class="title">
                    <h1 class="inactive"><a href="{{ url('/extranet/accommodations') }}">My Accommodations</a></h1>
                    <h1><a href="{{ url('/extranet/profile') }}">Profile</a></h1>
                </div>
                <!--end title-->
                <div class="row">
                    <div class="col-md-9">
                        <form id="form-profile" class="labels-uppercase" method="post" action="?" enctype="multipart/form-data">
                            <div class="row">
                                <!--Profile Picture-->
                                <div class="col-md-3 col-sm-3">
                                    <section>
                                        <h3>Profile Picture</h3>
                                        <div id="profile-picture" class="profile-picture single-file-preview">
                                            <img src="{{ Helper::s3_url_gen($users->profile_image) }}" alt="" class="image">
                                            <div class="input">
                                                <input name="file" type="file" class="">
                                                <span>Click to upload a picture</span>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                                <!--end col-md-3-->

                                <!--Contact Info-->
                                <div class="col-md-9 col-sm-9">
                                    <section>
                                        <h3>Personal Info</h3>
                                        <div class="row">
                                            <div class="col-md-6 col-sm-6">
                                                <div class="form-group">
                                                    <label for="name">Name</label>
                                                    <input type="text" class="form-control" id="name" name="name" value="{{ $users->name }}">
                                                </div>
                                                <!--end form-group-->
                                            </div>
                                            <!--end col-md-3-->
                                            <div class="col-md-6 col-sm-6">
                                                <div class="form-group">
                                                    <label for="email">Email</label>
                                                    <input type="email" class="form-control" id="email" name="email" value="{{ $users->email }}">
                                                </div>
                                                <!--end form-group-->
                                            </div>
                                            <!--end col-md-3-->
                                            <div class="col-md-6 col-sm-6">
                                                <div class="form-group">
                                                    <label for="mobile">Mobile</label>
                                                    <input type="text" class="form-control" id="mobile" name="mobile" 
                                                    @if($users->mobile !== null)
                                                        value="{{ $users->mobile }}"
                                                    @endif>
                                                </div>
                                                <!--end form-group-->
                                            </div>
                                            <!--end col-md-3-->
                                            <div class="col-md-6 col-sm-6">
                                                <div class="form-group">
                                                    <label for="phone">Phone</label>
                                                    <input type="text" class="form-control" id="phone" name="phone" 
                                                    @if($users->phone !== null)
                                                        value="{{ $users->phone }}"
                                                    @endif>
                                                </div>
                                                <!--end form-group-->
                                            </div>
                                            <!--end col-md-3-->
                                        </div>
                                    </section>
                                    <section>
                                        <h3>Address</h3>
                                        <div class="row">
                                            <div class="col-md-8 col-sm-8">
                                                <div class="form-group">
                                                    <label for="street">Street</label>
                                                    <input type="text" class="form-control" id="street" name="street" value="Male Magu"
                                                    @if($users->street !== null)
                                                        value="{{ $users->street }}"
                                                    @endif>
                                                </div>
                                                <!--end form-group-->
                                            </div>
                                            <!--end col-md-8-->
                                            <div class="col-md-4 col-sm-4">
                                                <div class="form-group">
                                                    <label for="zip">ZIP</label>
                                                    <input type="text" class="form-control" id="zip" name="zip"
                                                    @if($users->zip !== null)
                                                        value="{{ $users->mobile }}"
                                                    @endif>
                                                </div>
                                                <!--end form-group-->
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="additional_address">Additional Address Line</label>
                                            <input type="text" class="form-control" id="additional_address" name="additional_address"
                                            @if($users->additional_address !== null)
                                                value="{{ $users->additional_address }}"
                                            @endif>
                                        </div>
                                        <div class="form-group">
                                            <label for="state">State</label>
                                            <input type="text" class="form-control" id="state" name="state" value="Male"
                                            @if($users->state !== null)
                                                value="{{ $users->state }}"
                                            @endif>
                                        </div>
                                        <div class="form-group">
                                            <label for="city">City</label>
                                            <input type="text" class="form-control" id="city" name="city" value="Male"
                                            @if($users->city !== null)
                                                value="{{ $users->city }}"
                                            @endif>
                                        </div>
                                        <div class="form-group">
                                            <label for="country">Country</label>
                                            <input type="text" class="form-control" id="country" name="country"
                                            @if($users->country !== null)
                                                value="{{ $users->country }}"
                                            @endif>
                                        </div>
                                        <!--end form-group-->
                                    </section>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-large btn-primary btn-rounded" id="submit">Save Changes</button>
                                    </div>
                                    <!-- end form-group -->
                                </div>
                                <!--end col-md-6-->
                            </div>
                        </form>
                    </div>
                    <!--Password-->
                    <div class="col-md-3 col-sm-9">
                        <form class="labels-uppercase" id="form-password" method="post" action="?">
                            <h3>Password Change</h3>
                            <div class="form-group">
                                <label for="current-password">Current Password</label>
                                <input type="password" class="form-control" id="current-password" name="current-password">
                            </div>
                            <!--end form-group-->
                            <div class="form-group">
                                <label for="new-password">New Password</label>
                                <input type="password" class="form-control" id="new-password" name="new-password">
                            </div>
                            <!--end form-group-->
                            <div class="form-group">
                                <label for="confirm-new-password">Confirm New Password</label>
                                <input type="password" class="form-control" id="confirm-new-password" name="confirm-new-password">
                            </div>
                            <!--end form-group-->
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-rounded btn-framed">Change Password</button>
                            </div>
                            <!-- end form-group -->
                        </form>
                    </div>
                    <!-- end col-md-3-->
                </div>
            </div>
            <!--end main-content-->
        </div>
        <!--end container-->

@endsection