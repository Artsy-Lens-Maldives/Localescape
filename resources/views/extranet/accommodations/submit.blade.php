@extends('layouts.extranet')

@section('content')
        <div class="container">
            <ol class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li><a href="#">Extranet</a></li>
                <li><a href="#">Accommodations</a></li>
                <li class="active">Submit</li>
            </ol>
            <!--end breadcrumb-->
            <div class="main-content">
                <div class="title">
                    <h1>Submit Accommodation</h1>
                </div>
                <!--end title-->
                <div class="quick-navigation" data-fixed-after-touch="">
                    <div class="wrapper">
                        <ul>
                            <li><a href="#main-information" class="scroll">Main Information</a></li>
                            <li><a href="#location" class="scroll">Location</a></li>
                            <li><a href="#gallery" class="scroll">Gallery</a></li>
                            <li><a href="#facilities" class="scroll">Facilities</a></li>
                            <li><a href="#additional-information" class="scroll">Additional Information</a></li>
                        </ul>
                    </div>
                </div>
                <!--end quick-navigation-->
                <form class="form-submit labels-uppercase" id="form-submit" enctype="multipart/form-data">
                    <section id="main-information">
                        <div class="title">
                            <h2>Main Information</h2>
                            <aside class="step">1</aside>
                        </div>
                        <div class="row">
                            <div class="col-md-7">
                                <div class="form-group">
                                    <label for="form-submit-title">Title<em>*</em></label>
                                    <input type="text" class="form-control" id="form-submit-title" name="title" placeholder="Accommodation Title" required="">
                                </div>
                                <!--end form-group-->
                            </div>
                            <!--end col-md-7-->
                            <div class="col-md-5">
                                <div class="form-group">
                                    <label for="object-type">Object Type</label>
                                    <select class="framed width-100" name="type" id="object-type">
                                        <option value="">Select</option>
                                        <option value="1">Hotel</option>
                                        <option value="2">Resort</option>
                                        <option value="3">Guest House</option>
                                    </select>
                                </div>
                                <!--end form-group-->
                            </div>
                            <!--end col-md-5-->
                        </div>
                        <!--end row-->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="form-submit-description">Description<em>*</em></label>
                                    <textarea class="form-control" id="form-submit-description" rows="10" name="description" required="" placeholder="Describe your accommodation"></textarea>
                                </div>
                                <!--end form-group-->
                            </div>
                        </div>
                        <!--end row-->
                        <div class="row">
                            <div class="col-md-5">
                                <h3>Special Offer? <i class="fa fa-question-circle tooltip-question" data-toggle="tooltip" data-placement="right" title="Have a special offer? Tick here and Enter the details"></i></h3>
                                <div class="form-group-inline vertical-align-middle">
                                    <div class="form-group">
                                        <label class="no-margin"><input type="checkbox" name="special_offer">Special Offer</label>
                                    </div>
                                    <!--end form-group-->
                                    <div class="form-group width-20">
                                        <input type="text" class="form-control" id="percents" name="percents" placeholder="20%">
                                    </div>
                                    <!--end form-group-->
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="special-offer-text" name="special-offer-text" placeholder="Off the price today">
                                    </div>
                                    <!--end form-group-->
                                </div>
                                <!--end form-group-inline-->
                            </div>
                            <!--col-md-5-->
                        </div>
                        <!--end row-->
                        <div class="row">
                            <div class="col-md-7">
                                <h3>Meal</h3>
                                <ul class="checkboxes inline list-unstyled">
                                    <li><label><input type="checkbox" name="1">Breakfast Included</label></li>
                                    <li><label><input type="checkbox" name="2">Full meal</label></li>
                                    <li><label><input type="checkbox" name="3">Own Meal</label></li>
                                    <li><label><input type="checkbox" name="4">Breakfast & Dinner</label></li>
                                    <li><label><input type="checkbox" name="5">Bed & Breakfast</label></li>
                                    <li><label><input type="checkbox" name="6">All Inclusive</label></li>
                                    <li><label><input type="checkbox" name="7">Ultra All Inclusive</label></li>
                                </ul>
                                <!--end checkboxes-->
                            </div>
                            <!--end col-md-7-->
                            <div class="col-md-5">
                                <div class="row">
                                    <div class="col-md-7">
                                        <h3>Receive Reviews<i class="fa fa-question-circle tooltip-question" data-toggle="tooltip" data-placement="top" title="Tick Here if you want to turn off review emails about your accommodation."></i></h3>
                                        <label><input type="checkbox" name="1">Receive Reviews in Email</label>
                                    </div>
                                    <!--end col-md-7-->
                                    <div class="col-md-5">
                                        <h3>Minimum Stay<i class="fa fa-question-circle tooltip-question" data-toggle="tooltip" data-placement="top" title="Enter the minimum nights required to book your accommodation"></i></h3>
                                        <input type="number" min="1" class="form-control" id="minimum-stay" name="minimum_stay" placeholder="2">
                                    </div>
                                    <!--end col-md-5-->
                                </div>
                                <!--end row-->
                            </div>
                            <!--end col-md-5-->
                        </div>
                        <!--end row-->
                    </section>
                    <section id="location">
                        <div class="row">
                            <div class="col-md-7">
                                <div class="title">
                                    <h2>Location</h2>
                                    <aside class="step">2</aside>
                                </div>
                                <div class="form-group">
                                    <label for="address-autocomplete">Address<em>*</em></label>
                                    <input type="text" class="form-control" id="address-autocomplete" name="address" placeholder="Accommodation Address" required="">
                                </div>
                                <div class="form-group">
                                    <label>Place on Map</label>
                                    <div class="map height-300 box" id="map-item"></div>
                                </div>
                                <div class="form-group hidden">
                                    <input type="text" class="form-control" id="latitude" name="latitude" hidden="">
                                    <input type="text" class="form-control" id="longitude" name="longitude" hidden="">
                                </div>
                                <!--end map-->
                                <h3>Position</h3>
                                <ul class="checkboxes inline list-unstyled">
                                    <li><label><input type="checkbox" name="1">Near the beach</label></li>
                                    <li><label><input type="checkbox" name="2">Near the forest</label></li>
                                    <li><label><input type="checkbox" name="3">Near the ski center</label></li>
                                    <li><label><input type="checkbox" name="4">At he town center</label></li>
                                    <li><label><input type="checkbox" name="5">Isolated</label></li>
                                    <li><label><input type="checkbox" name="6">Private island</label></li>
                                </ul>
                                <!--end checkboxes-->
                            </div>
                            <!--end col-md-7-->
                            <div class="col-md-5">
                                <h2>Contact Information</h2>
                                <div class="form-group">
                                    <label for="form-submit-email">Email</label>
                                    <input type="email" class="form-control" id="form-submit-email" name="email" placeholder="hello@example.com">
                                </div>
                                <!--end form-group-->
                                <div class="form-group">
                                    <label for="form-submit-phone">Phone</label>
                                    <input type="text" class="form-control" id="form-submit-phone" name="phone" placeholder="+960 3323456">
                                </div>
                                <!--end form-group-->
                                <div class="form-group">
                                    <label for="form-submit-mobile-phone">Mobile Phone</label>
                                    <input type="text" class="form-control" id="form-submit-mobile-phone" name="mobile-phone" placeholder="+960 9123456">
                                </div>
                                <!--end form-group-->
                                <div class="form-group-inline">
                                    <div class="form-group">
                                        <label for="form-submit-facebook">Facebook Page</label>
                                        <input type="text" class="form-control" id="form-submit-facebook" name="facebook" placeholder="www.facebook.com/yourhotel">
                                    </div>
                                    <!--end form-group-->
                                    <div class="form-group">
                                        <label for="form-submit-twitter">Twitter</label>
                                        <input type="text" class="form-control" id="form-submit-twitter" name="twitter" placeholder="www.twitter.com/yourhotel">
                                    </div>
                                    <!--end form-group-->
                                </div>
                                <!--end form-group-inline-->
                                <div class="form-group-inline">
                                    <div class="form-group">
                                        <label for="form-submit-youtube">Youtube</label>
                                        <input type="text" class="form-control" id="form-submit-youtube" name="youtube" placeholder="www.youtube.com/yourhotel">
                                    </div>
                                    <!--end form-group-->
                                    <div class="form-group">
                                        <label for="form-submit-skype">Skype</label>
                                        <input type="text" class="form-control" id="form-submit-skype" name="skype" placeholder="your.hotel">
                                    </div>
                                    <!--end form-group-->
                                </div>
                                <!--end form-group-inline-->
                            </div>
                            <!--end col-md-7-->
                        </div>
                        <!--end row-->
                    </section>
                    <section id="gallery">
                        <div class="title">
                            <h2>Gallery</h2>
                            <aside class="step">3</aside>
                        </div>
                        <div class="file-upload-previews"></div>
                        <div class="file-upload">
                            <input type="file" name="files[]" class="file-upload-input with-preview" multiple title="Click to add files" maxlength="10" accept="gif|jpg|png">
                            <span>Click to add images</span>
                        </div>
                    </section>
                    <section id="facilities">
                        <div class="title">
                            <h2>Facilities</h2>
                            <aside class="step">4</aside>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <h3>Bathroom</h3>
                                <ul class="checkboxes inline half list-unstyled">
                                    <li><label><input type="checkbox" name="1">Shower</label></li>
                                    <li><label><input type="checkbox" name="2">Bathtub</label></li>
                                    <li><label><input type="checkbox" name="3">Free toiletries</label></li>
                                    <li><label><input type="checkbox" name="4">Toilet</label></li>
                                    <li><label><input type="checkbox" name="5">Hairdryer</label></li>
                                    <li><label><input type="checkbox" name="6">Bathroom</label></li>
                                </ul>
                                <!--end checkboxes-->
                            </div>
                            <!--end col-md-4-->
                            <div class="col-md-4">
                                <h3>Media & Technology</h3>
                                <ul class="checkboxes inline half list-unstyled">
                                    <li><label><input type="checkbox" name="1">Satellite channels </label></li>
                                    <li><label><input type="checkbox" name="2">TV</label></li>
                                    <li><label><input type="checkbox" name="3"> Flat-screen TV</label></li>
                                </ul>
                                <!--end checkboxes-->
                            </div>
                            <!--end col-md-4-->
                            <div class="col-md-4">
                                <h3>Living Area</h3>
                                <ul class="checkboxes inline half list-unstyled">
                                    <li><label><input type="checkbox" name="1">Desk</label></li>
                                    <li><label><input type="checkbox" name="2">Sofa</label></li>
                                    <li><label><input type="checkbox" name="3">Sitting area</label></li>
                                    <li><label><input type="checkbox" name="4">Dining area</label></li>
                                </ul>
                                <!--end checkboxes-->
                            </div>
                            <!--end col-md-4-->
                        </div>
                        <!--end row-->
                        <div class="row">
                            <div class="col-md-4">
                                <h3>Services</h3>
                                <ul class="checkboxes inline half list-unstyled">
                                    <li><label><input type="checkbox" name="1">Room Service </label></li>
                                    <li><label><input type="checkbox" name="2"> Packed Lunches </label></li>
                                    <li><label><input type="checkbox" name="3">Car Rental </label></li>
                                    <li><label><input type="checkbox" name="4">Shuttle Service</label></li>
                                    <li><label><input type="checkbox" name="5">Airport Shuttle</label></li>
                                    <li><label><input type="checkbox" name="6">24-Hour Front Desk </label></li>
                                    <li><label><input type="checkbox" name="7">Tour Desk </label></li>
                                    <li><label><input type="checkbox" name="8">Ticket Service </label></li>
                                    <li><label><input type="checkbox" name="9">Baggage Storage </label></li>
                                    <li><label><input type="checkbox" name="10">Concierge Service</label></li>
                                    <li><label><input type="checkbox" name="11">Laundry </label></li>
                                    <li><label><input type="checkbox" name="12">Dry Cleaning</label></li>
                                </ul>
                                <!--end checkboxes-->
                            </div>
                            <!--end col-md-4-->
                            <div class="col-md-4">
                                <h3>General</h3>
                                <ul class="checkboxes inline half list-unstyled">
                                    <li><label><input type="checkbox" name="1">Safe</label></li>
                                    <li><label><input type="checkbox" name="2">Non-smoking Rooms</label></li>
                                    <li><label><input type="checkbox" name="3">Family Rooms </label></li>
                                    <li><label><input type="checkbox" name="4">Elevator</label></li>
                                    <li><label><input type="checkbox" name="5">Airport Shuttle</label></li>
                                    <li><label><input type="checkbox" name="6">24-Hour Front Desk</label></li>
                                    <li><label><input type="checkbox" name="7">Soundproof Rooms </label></li>
                                    <li><label><input type="checkbox" name="8">Heating</label></li>
                                    <li><label><input type="checkbox" name="9">Iron </label></li>
                                </ul>
                                <!--end checkboxes-->
                            </div>
                            <!--end col-md-4-->
                            <div class="col-md-4">
                                <h3>Languages Spoken</h3>
                                <ul class="checkboxes inline half list-unstyled">
                                    <li><label><input type="checkbox" name="1">English </label></li>
                                    <li><label><input type="checkbox" name="2">Arabic</label></li>
                                    <li><label><input type="checkbox" name="3">Azerbaijani</label></li>
                                    <li><label><input type="checkbox" name="4">French</label></li>
                                    <li><label><input type="checkbox" name="5">German</label></li>
                                    <li><label><input type="checkbox" name="6">Italian</label></li>
                                    <li><label><input type="checkbox" name="7">Russian</label></li>
                                    <li><label><input type="checkbox" name="8">Spanish</label></li>
                                    <li><label><input type="checkbox" name="9">Turkish</label></li>
                                </ul>
                                <!--end checkboxes-->
                            </div>
                            <!--end col-md-4-->
                        </div>
                        <!--end row-->
                    </section>
                    <section id="additional-information">
                        <div class="title">
                            <h2>Additional Information</h2>
                            <aside class="step">5</aside>
                        </div>
                        <!--end title-->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="form-submit-description">Policy on Children<em>*</em></label>
                                    <textarea class="form-control" id="form-submit-children-policy" rows="10" name="charge_childeren" required="" placeholder="Describe your policy on children"></textarea>
                                </div>
                                <!--end form-group-->
                                <div class="form-group">
                                    <label for="form-submit-description">Policy on Pets<em>*</em></label>
                                    <textarea class="form-control" id="form-submit-pets-policy" rows="10" name="pets" required="" placeholder="Describe your policy on pets"></textarea>
                                </div>
                                <!--end form-group-->
                                <div class="form-group">
                                    <label for="form-submit-description">Cancellation Policy<em>*</em></label>
                                    <textarea class="form-control" id="form-submit-policy-cancellation" rows="10" name="cancellation" required="" placeholder="Describe your pancellation policy"></textarea>
                                </div>
                                <!--end form-group-->
                                <div class="form-group">
                                    <label for="form-submit-description">Other Policies<em>*</em></label>
                                    <textarea class="form-control" id="form-submit-other-policy" rows="10" name="other_policies" required="" placeholder="Describe other policies that you have"></textarea>
                                </div>
                                <!--end form-group-->
                            </div>
                            <!--end col-md-12-->
                        </div>
                        <!--end row-->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h3>Check In</h3>
                                        <div class="form-group-inline">
                                            <div class="form-group">
                                                <label for="check-in-from">From</label>
                                                <input type="text" class="form-control" id="check-in-from" name="check-in-from" placeholder="12:00">
                                            </div>
                                            <!--end form-group-->
                                            <div class="form-group">
                                                <label for="check-in-to">To</label>
                                                <input type="text" class="form-control" id="check-in-to" name="check-in-to" placeholder="20:00">
                                            </div>
                                            <!--end form-group-->
                                        </div>
                                        <!--end form-group-inline-->
                                        <label><input type="checkbox" name="1">Early Check-in</label>
                                    </div>
                                    <!--end col-md-6-->
                                    <div class="col-md-6">
                                        <h3>Check Out</h3>
                                        <div class="form-group-inline">
                                            <div class="form-group">
                                                <label for="check-out-from">From</label>
                                                <input type="text" class="form-control" id="check-out-from" name="check-out-from" placeholder="08:00">
                                            </div>
                                            <!--end form-group-->
                                            <div class="form-group">
                                                <label for="check-out-to">To</label>
                                                <input type="text" class="form-control" id="check-out-to" name="check-out-to" placeholder="12:00">
                                            </div>
                                            <!--end form-group-->
                                        </div>
                                        <!--end form-group-inline-->
                                        <label><input type="checkbox" name="1">Late Check-out</label>
                                    </div>
                                    <!--end col-md-6-->
                                </div>
                                <!--end row-->
                            </div>
                            <!--end col-md-12-->
                        </div>
                        <!--end row-->
                    </section>
                    <hr>
                    <section>
                        <div class="form-group center">
                            <button type="submit" class="btn btn-primary btn-rounded btn-xlarge">Submit Now</button>
                        </div>
                    </section>
                    <section>
                        <div class="center"><a href="#" class="btn btn-framed btn-default btn-rounded">Preview</a></div>
                    </section>
                </form>
                <!--end form-->
            </div>
            <!--end main-content-->
        </div>
        <!--end container-->
@endsection     


@section('js')

<script type="text/javascript" src="/js/jQuery.MultiFile.min.js"></script>

@endsection