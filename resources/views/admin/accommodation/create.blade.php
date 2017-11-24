@extends('layouts.admin')

@section('title')
    <span>Add New Accommodation</span>
@endsection

@section('content') 
    
    <div class="container">
        <form class="form-submit labels-uppercase" id="form-submit" method="post" enctype="multipart/form-data" action="{{ url()->current() }}">
            {{ csrf_field() }}
            <section id="main-information">
                <div class="title">
                    <h2>Main Information</h2>
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
                            <label for="object-type">Accommodation Type</label>
                            <select class="framed width-100" name="type" id="object-type">
                                <option disabled>Select</option>
                                <option value="hotel">Hotel</option>
                                <option value="resort">Resort</option>
                                <option value="guest-house">Guest House</option>
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
                                <label class="no-margin"><input type="checkbox" value="1" name="special_offer">Special Offer</label>
                            </div>
                            <!--end form-group-->
                            <div class="form-group width-20">
                                <input type="text" class="form-control" id="percents" name="percents" placeholder="20">
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
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-7">
                                <h3>Receive Reviews<i class="fa fa-question-circle tooltip-question" data-toggle="tooltip" data-placement="top" title="Tick Here if you want to turn off review emails about your accommodation. (Feature Comming Soon.)"></i></h3>
                                <label><input type="checkbox" name="receive_reviews" value="1">Receive Reviews in Email</label>
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
                    <div class="col-md-12">
                        <div class="title">
                            <h2>Location</h2>
                        </div>
                        <div class="form-group">
                            <label for="address-autocomplete">Address<em>*</em></label>
                            <input type="text" class="form-control" id="address-autocomplete" name="address" placeholder="Accommodation Address" required="">
                        </div>
                    </div>
                    <br>
                    <!--end col-md-7-->
                    <div class="col-md-12">
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
                                <label for="form-submit-skype">Webstite</label>
                                <input type="text" class="form-control" id="form-submit-skype" name="website" placeholder="www.hotel.com">
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
                </div>
                <div class="file-upload-previews"></div>
                <div class="file-upload">
                    <input type="file" name="image[]" class="file-upload-input with-preview" multiple title="Click to add files" accept="gif|jpg|png">
                    <span>Click to add images</span>
                </div>
            </section>
            <section id="facilities">
                <div class="title">
                    <h2>Facilities</h2>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <ul class="checkboxes inline half list-unstyled">
                            @foreach($facilities as $facility)
                                <li><label><input type="checkbox" name="facilities[]" value="{{ $facility->id }}">{{ $facility->name }} </label></li>
                            @endforeach   
                        </ul>
                        <!--end checkboxes-->
                    </div>
                </div>
            </section>
            <section id="additional-information">
                <div class="title">
                    <h2>Additional Information</h2>
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
                                <label><input type="checkbox" value="1" name="early_check_in">Early Check-in</label>
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
                                <label><input type="checkbox" value="1" name="late_check_out">Late Check-out</label>
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
        </form>
    </div>

@endsection

@section('js')
    
   

@endsection