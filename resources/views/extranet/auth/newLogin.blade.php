@extends('admin.layout.auth')

@section('content')
    <div class="container">
        <div class="c_box" style="width: 60%;">
            <!-- Smart Wizard -->
            <p>List Your Property on localescapemaldives.com</p>
            <div id="wizard" class="form_wizard wizard_horizontal">
                <ul class="wizard_steps">
                    <li>
                        <a href="#step-1">
                            <span class="step_no">1</span>
                            <span class="step_descr">
                                Step 1<br />
                                <small>Step 1 description</small>
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="#step-2">
                            <span class="step_no">2</span>
                            <span class="step_descr">
                                Step 2<br />
                                <small>Step 2 description</small>
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="#step-3">
                            <span class="step_no">3</span>
                            <span class="step_descr">
                                Step 3<br />
                                <small>Step 3 description</small>
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="#step-4">
                            <span class="step_no">4</span>
                            <span class="step_descr">
                                Step 4<br />
                                <small>Step 4 description</small>
                            </span>
                        </a>
                    </li>
                </ul>
                <div id="step-1">
                    <div class="">
                        <h5>WHY LIST IN LOCAL ESCAPE?</h5>
                        <br>
                        <ul>
                            <li>Easy to Use : Our hassle-free solutions give you the power to manage your calendar and reservations with ease. </li>
                            <li>Flexible Payments : You're in charge of when and how to collect payment from guests. </li>
                            <li>Support in Your Language : Our support team speaks your language and is always available – whatever you need, whenever you need it.</li>
                        </ul>
                        <br>
                        <ul>
                            <h5> How It Works </h5>
                            <li>#1 You tell us about your property: Add your property details, photos and payment policies during your registration. Once we confirm your details, you set your property live and can start receiving reservations.</li>
                            <li>#2 We tell the world about you We show your property in a way that's relevant to guests around the world, we also market your property on search engines like Google, Bing and Yahoo to help you sell more rooms and increase revenue!</li>
                            <li> #3 You get instant bookings &amp; reviews All bookings made through localescapemaldives.com are confirmed instantly. In localescapemaldives.com guests leave reviews of their stay which help your future guests make the decision to stay with you.</li>
                        </ul>
                    </div>
                </div>
                <div id="step-2">
                    <form class="form-horizontal form-label-left">

                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">First Name <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Last Name <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" id="last-name" name="last-name" required="required" class="form-control col-md-7 col-xs-12">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Middle Name / Initial</label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input id="middle-name" class="form-control col-md-7 col-xs-12" type="text" name="middle-name">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Gender</label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div id="gender" class="btn-group" data-toggle="buttons">
                                    <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                        <input type="radio" name="gender" value="male"> &nbsp; Male &nbsp;
                                    </label>
                                    <label class="btn btn-primary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                        <input type="radio" name="gender" value="female"> Female
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Date Of Birth <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input id="birthday" class="date-picker form-control col-md-7 col-xs-12" required="required" type="text">
                            </div>
                        </div>
                    </form>
                </div>
                <div id="step-3">
                    <h2 class="StepTitle">Step 3 Content</h2>
                    <p>
                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                </div>
                <div id="step-4">
                    <h2 class="StepTitle">Step 4 Content</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                </div>
            </div>
            <!-- End SmartWizard Content -->
        </div>
    </div>
@endsection

@section('css')
    <style>
    .c_box {
        -webkit-box-sizing: content-box;
        -moz-box-sizing: content-box;
        box-sizing: content-box;
        width: 60%;
        -webkit-box-shadow: 2px 2px 13px 3px rgba(209,210,211,0.91) ;
        box-shadow: 2px 2px 13px 3px rgba(209,210,211,0.91) ;
        background: -webkit-linear-gradient(-90deg, rgba(255,255,255,1) 0, rgba(243,243,243,1) 50%, rgba(237,237,237,1) 51%, rgba(255,255,255,1) 100%);
        background: -moz-linear-gradient(180deg, rgba(255,255,255,1) 0, rgba(243,243,243,1) 50%, rgba(237,237,237,1) 51%, rgba(255,255,255,1) 100%);
        background: linear-gradient(180deg, rgba(255,255,255,1) 0, rgba(243,243,243,1) 50%, rgba(237,237,237,1) 51%, rgba(255,255,255,1) 100%);
        background-position: 50% 50%;
        -webkit-background-origin: padding-box;
        background-origin: padding-box;
        -webkit-background-clip: border-box;
        background-clip: border-box;
        -webkit-background-size: auto auto;
        background-size: auto auto;
    }
    </style>
@endsection

@section('js')
    <script>
        $(updateBoxDimension);
        $(window).on('resize', updateBoxDimension);

        function updateBoxDimension() {
            var $box = $('.c_box');
            
            $box.css({
                'position' : 'absolute',
                'left' : '50%',
                'top' : '50%',
                'margin-left' : -$('.c_box').outerWidth()/2,
                'margin-top' : -$('.c_box').outerHeight()/2
            });
        }
    </script>
@endsection
