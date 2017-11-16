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
                    <h1><a href="{{ url('extranet/accommodations/edit') }}">Edit Accommodation</a></h1>
                    <h1 class="inactive"><a href="{{ url('extranet/accommodations/bookings') }}">Bookings</a></h1>
                    <h1 class="inactive"><a href="{{ url('extranet/accommodations/reviews') }}">Reviews</a></h1>
                </div>
                <!--end title-->
                <div class="info">
                    <strong>Accommodation:</strong>
                    <h2 class="no-margin"><a href="/hotels/detail">Spring Hotel</a></h2>
                    <hr>
                </div>
                <!--end info-->
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
                <form class="form-submit labels-uppercase" id="form-submit">
                    <section id="main-information">
                        <div class="title">
                            <h2>Main Information</h2>
                            <aside class="step">1</aside>
                        </div>
                        <div class="row">
                            <div class="col-md-7">
                                <div class="form-group">
                                    <label for="form-submit-title">Title<em>*</em></label>
                                    <input type="text" class="form-control" id="form-submit-title" name="title" placeholder="Accommodation Title" required="" value="Spring Hotel">
                                </div>
                                <!--end form-group-->
                            </div>
                            <!--end col-md-7-->
                            <div class="col-md-5">
                                <div class="form-group">
                                    <label for="object-type">Object Type</label>
                                    <select class="framed width-100" name="object_type" id="object-type">
                                        <option value="1">Hotel</option>
                                        <option value="">Select</option>
                                        <option value="2">Villa</option>
                                        <option value="3">Resort</option>
                                        <option value="4">Spa & Wellness</option>
                                    </select>
                                </div>
                                <!--end form-group-->
                            </div>
                            <!--end col-md-5-->
                        </div>
                        <!--end row-->
                        <div class="row">
                            <div class="col-md-7">
                                <div class="form-group">
                                    <label for="form-submit-description">Description<em>*</em></label>
                                    <textarea class="form-control" id="form-submit-description" rows="10" name="description" required="" placeholder="Describe your accommodation">
                                        Consectetur adipiscing elit. Vivamus nec augue ac dui sodales euismod. Suspendisse at dui sit amet felis commodo dictum. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Integer commodo eleifend erat, vitae tincidunt urna volutpat et. Mauris laoreet, sem ut sodales sodales, massa turpis posuere lectus, non aliquet massa nisl ac orci.

                                        Aenean non dapibus neque. Praesent tempus aliquet felis, auctor aliquet ligula bibendum id. Phasellus ut finibus ligula. Suspendisse sodales lacus vel viverra egestas. Donec eu interdum sem, sed tempus odio. Interdum et malesuada fames ac ante ipsum primis in faucibus. In ut ante lacinia, interdum ante eu, posuere ex. Donec iaculis elit consectetur nisi finibus, a vestibulum nibh mattis. Aliquam erat volutpat.
                                    </textarea>
                                </div>
                                <!--end form-group-->
                            </div>
                            <div class="col-md-5">
                                <h3>Room Types <i class="fa fa-question-circle tooltip-question" data-toggle="tooltip" data-placement="right" title="Nam quis ipsum ac sem ornare efficitur et vel mauris. Proin nibh arcu, vulputate eget massa sed."></i></h3>
                                <div class="form-group-inline">
                                    <div class="form-group width-60">
                                        <label>Room Type</label>
                                        <select class="framed width-100" name="room_type_1" id="room-type_1">
                                            <option value="1">Apartment</option>
                                            <option value="">Select Room Type</option>
                                            <option value="2">Family Room</option>
                                            <option value="3">Double Room</option>
                                        </select>
                                    </div>
                                    <!--end form-group-->
                                    <div class="form-group">
                                        <label for="number-of-rooms_1">How Many</label>
                                        <input type="number" class="form-control" id="number-of-rooms_1" name="room_number_1" placeholder="1" value="34">
                                    </div>
                                    <!--end form-group-->
                                    <div class="form-group">
                                        <label for="beds_1">Beds</label>
                                        <input type="number" class="form-control" id="beds_1" name="beds_1" placeholder="1" value="2">
                                    </div>
                                    <!--end form-group-->
                                </div>
                                <!--end form-group-inline-->
                                <div class="form-group-inline">
                                    <div class="form-group width-60">
                                        <select class="framed width-100" name="room_type_2" id="room-type_2">
                                            <option value="2">Family Room</option>
                                            <option value="">Select Room Type</option>
                                            <option value="1">Apartment</option>
                                            <option value="3">Double Room</option>
                                        </select>
                                    </div>
                                    <!--end form-group-->
                                    <div class="form-group">
                                        <input type="number" class="form-control" id="number-of-rooms_2" name="room_number_2" placeholder="1" value="24">
                                    </div>
                                    <!--end form-group-->
                                    <div class="form-group">
                                        <input type="number" class="form-control" id="beds_2" name="beds_2" placeholder="1" value="4+1">
                                    </div>
                                    <!--end form-group-->
                                </div>
                                <!--end form-group-inline-->
                                <div class="form-group-inline">
                                    <div class="form-group width-60">
                                        <select class="framed width-100" name="room_type_3" id="room-type_3">
                                            <option value="">Select Room Type</option>
                                            <option value="1">Apartment</option>
                                            <option value="2">Family Room</option>
                                            <option value="3">Double Room</option>
                                        </select>
                                    </div>
                                    <!--end form-group-->
                                    <div class="form-group">
                                        <input type="number" class="form-control" id="number-of-rooms_3" name="room_number_3" placeholder="1">
                                    </div>
                                    <!--end form-group-->
                                    <div class="form-group">
                                        <input type="number" class="form-control" id="beds_3" name="beds_3" placeholder="1">
                                    </div>
                                    <!--end form-group-->
                                </div>
                                <!--end form-group-inline-->
                                <a href="#" class="link icon"><i class="fa fa-plus"></i>Add Room Type</a>
                            </div>
                            <!--end col-md-5-->
                        </div>
                        <!--end row-->
                        <div class="row">
                            <div class="col-md-5">
                                <h3>Special Offer? <i class="fa fa-question-circle tooltip-question" data-toggle="tooltip" data-placement="right" title="Nam quis ipsum ac sem ornare efficitur et vel mauris. Proin nibh arcu, vulputate eget massa sed."></i></h3>
                                <div class="form-group-inline vertical-align-middle">
                                    <div class="form-group">
                                        <label class="no-margin"><input type="checkbox" name="special_offer" checked>Special Offer</label>
                                    </div>
                                    <!--end form-group-->
                                    <div class="form-group width-20">
                                        <input type="text" class="form-control" id="percents" name="percents" placeholder="20%" value="18%">
                                    </div>
                                    <!--end form-group-->
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="special-offer-text" name="special-offer-text" placeholder="Off the price today" value="Only Today!">
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
                                    <li><label><input type="checkbox" name="1" checked>Breakfast Included</label></li>
                                    <li><label><input type="checkbox" name="2">Full meal</label></li>
                                    <li><label><input type="checkbox" name="3">Own Meal</label></li>
                                    <li><label><input type="checkbox" name="4" checked>Breakfast & Dinner</label></li>
                                    <li><label><input type="checkbox" name="5">Bed & Breakfast</label></li>
                                    <li><label><input type="checkbox" name="6" checked>All Inclusive</label></li>
                                    <li><label><input type="checkbox" name="7">Ultra All Inclusive</label></li>
                                </ul>
                                <!--end checkboxes-->
                            </div>
                            <!--end col-md-7-->
                            <div class="col-md-5">
                                <div class="row">
                                    <div class="col-md-7">
                                        <h3>Receive Reviews<i class="fa fa-question-circle tooltip-question" data-toggle="tooltip" data-placement="top" title="Nam quis ipsum ac sem ornare efficitur et vel mauris."></i></h3>
                                        <label><input type="checkbox" name="1" checked>Receive Reviews</label>
                                    </div>
                                    <!--end col-md-7-->
                                    <div class="col-md-5">
                                        <h3>Minimum Stay<i class="fa fa-question-circle tooltip-question" data-toggle="tooltip" data-placement="top" title="Nam quis ipsum ac sem ornare efficitur et vel mauris."></i></h3>
                                        <input type="number" class="form-control" id="minimum-stay" name="minimum_stay" placeholder="2" value="2">
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
                                    <label for="address-map">Address<em>*</em></label>
                                    <input type="text" class="form-control" id="address-map" name="address" placeholder="Accommodation Address" required="">
                                </div>
                                <div class="form-group">
                                    <label for="map-item">Place on Map</label>
                                    <div class="map height-300 box" id="map-item"></div>
                                </div>
                                <div class="form-group hidden">
                                    <input type="text" class="form-control" id="latitude" name="latitude" hidden="">
                                    <input type="text" class="form-control" id="longitude" name="longitude" hidden="">
                                </div>
                                <!--end map-->
                                <h3>Position</h3>
                                <ul class="checkboxes inline list-unstyled">
                                    <li><label><input type="checkbox" name="1" checked>Near the beach</label></li>
                                    <li><label><input type="checkbox" name="2" checked>Near the forest</label></li>
                                    <li><label><input type="checkbox" name="3">Near the ski center</label></li>
                                    <li><label><input type="checkbox" name="4" checked>At he town center</label></li>
                                    <li><label><input type="checkbox" name="5" checked>Isolated</label></li>
                                    <li><label><input type="checkbox" name="6">Private island</label></li>
                                </ul>
                                <!--end checkboxes-->
                            </div>
                            <!--end col-md-7-->
                            <div class="col-md-5">
                                <h2>Contact Information</h2>
                                <div class="form-group">
                                    <label for="form-submit-email">Email</label>
                                    <input type="email" class="form-control" id="form-submit-email" name="email" placeholder="hello@example.com" value="hello@example.com">
                                </div>
                                <!--end form-group-->
                                <div class="form-group">
                                    <label for="form-submit-phone">Email</label>
                                    <input type="text" class="form-control" id="form-submit-phone" name="phone" placeholder="+1 123456" value="+1 123456">
                                </div>
                                <!--end form-group-->
                                <div class="form-group">
                                    <label for="form-submit-mobile-phone">Mobile Phone</label>
                                    <input type="text" class="form-control" id="form-submit-mobile-phone" name="mobile-phone" placeholder="+123 123 456 789" value="+123 123 456 789">
                                </div>
                                <!--end form-group-->
                                <div class="form-group-inline">
                                    <div class="form-group">
                                        <label for="form-submit-facebook">Facebook Page</label>
                                        <input type="text" class="form-control" id="form-submit-facebook" name="facebook" placeholder="www.facebook.com/yourhotel" value="www.facebook.com/yourhotel">
                                    </div>
                                    <!--end form-group-->
                                    <div class="form-group">
                                        <label for="form-submit-twitter">Twitter</label>
                                        <input type="text" class="form-control" id="form-submit-twitter" name="twitter" placeholder="www.twitter.com/yourhotel" value="www.twitter.com/yourhotel">
                                    </div>
                                    <!--end form-group-->
                                </div>
                                <!--end form-group-inline-->
                                <div class="form-group-inline">
                                    <div class="form-group">
                                        <label for="form-submit-youtube">Youtube</label>
                                        <input type="text" class="form-control" id="form-submit-youtube" name="youtube" placeholder="www.youtube.com/yourhotel" value="www.youtube.com/yourhotel">
                                    </div>
                                    <!--end form-group-->
                                    <div class="form-group">
                                        <label for="form-submit-skype">Skype</label>
                                        <input type="text" class="form-control" id="form-submit-skype" name="skype" placeholder="your.hotel" value="your.hotel">
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
                                    <li><label><input type="checkbox" name="1" checked>Shower</label></li>
                                    <li><label><input type="checkbox" name="2" checked>Bathtub</label></li>
                                    <li><label><input type="checkbox" name="3">Free toiletries</label></li>
                                    <li><label><input type="checkbox" name="4">Toilet</label></li>
                                    <li><label><input type="checkbox" name="5" checked>Hairdryer</label></li>
                                    <li><label><input type="checkbox" name="6">Bathroom</label></li>
                                </ul>
                                <!--end checkboxes-->
                            </div>
                            <!--end col-md-4-->
                            <div class="col-md-4">
                                <h3>Media & Technology</h3>
                                <ul class="checkboxes inline half list-unstyled">
                                    <li><label><input type="checkbox" name="1" checked>Satellite channels </label></li>
                                    <li><label><input type="checkbox" name="2" checked>TV</label></li>
                                    <li><label><input type="checkbox" name="3"> Flat-screen TV</label></li>
                                </ul>
                                <!--end checkboxes-->
                            </div>
                            <!--end col-md-4-->
                            <div class="col-md-4">
                                <h3>Living Area</h3>
                                <ul class="checkboxes inline half list-unstyled">
                                    <li><label><input type="checkbox" name="1">Desk</label></li>
                                    <li><label><input type="checkbox" name="2" checked>Sofa</label></li>
                                    <li><label><input type="checkbox" name="3" checked>Sitting area</label></li>
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
                                    <li><label><input type="checkbox" name="1" checked>Room Service </label></li>
                                    <li><label><input type="checkbox" name="2" checked> Packed Lunches </label></li>
                                    <li><label><input type="checkbox" name="3">Car Rental </label></li>
                                    <li><label><input type="checkbox" name="4">Shuttle Service</label></li>
                                    <li><label><input type="checkbox" name="5" checked>Airport Shuttle</label></li>
                                    <li><label><input type="checkbox" name="6">24-Hour Front Desk </label></li>
                                    <li><label><input type="checkbox" name="7" checked>Tour Desk </label></li>
                                    <li><label><input type="checkbox" name="8" checked>Ticket Service </label></li>
                                    <li><label><input type="checkbox" name="9">Baggage Storage </label></li>
                                    <li><label><input type="checkbox" name="10">Concierge Service</label></li>
                                    <li><label><input type="checkbox" name="11" checked>Laundry </label></li>
                                    <li><label><input type="checkbox" name="12" checked>Dry Cleaning</label></li>
                                </ul>
                                <!--end checkboxes-->
                            </div>
                            <!--end col-md-4-->
                            <div class="col-md-4">
                                <h3>General</h3>
                                <ul class="checkboxes inline half list-unstyled">
                                    <li><label><input type="checkbox" name="1" checked>Safe</label></li>
                                    <li><label><input type="checkbox" name="2" checked>Non-smoking Rooms</label></li>
                                    <li><label><input type="checkbox" name="3">Family Rooms </label></li>
                                    <li><label><input type="checkbox" name="4">Elevator</label></li>
                                    <li><label><input type="checkbox" name="5" checked>Airport Shuttle</label></li>
                                    <li><label><input type="checkbox" name="6">24-Hour Front Desk</label></li>
                                    <li><label><input type="checkbox" name="7" checked>Soundproof Rooms </label></li>
                                    <li><label><input type="checkbox" name="8" checked>Heating</label></li>
                                    <li><label><input type="checkbox" name="9">Iron </label></li>
                                </ul>
                                <!--end checkboxes-->
                            </div>
                            <!--end col-md-4-->
                            <div class="col-md-4">
                                <h3>Languages Spoken</h3>
                                <ul class="checkboxes inline half list-unstyled">
                                    <li><label><input type="checkbox" name="1" checked>English </label></li>
                                    <li><label><input type="checkbox" name="2">Arabic</label></li>
                                    <li><label><input type="checkbox" name="3">Azerbaijani</label></li>
                                    <li><label><input type="checkbox" name="4" checked>French</label></li>
                                    <li><label><input type="checkbox" name="5" checked>German</label></li>
                                    <li><label><input type="checkbox" name="6">Italian</label></li>
                                    <li><label><input type="checkbox" name="7" checked>Russian</label></li>
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
                            <div class="col-md-6">
                                <div class="form-group label-inline">
                                    <label for="children" class="width-30">Children Allowed</label>
                                    <select class="framed width-100" name="children" id="children">
                                        <option value="2">All children allowed</option>
                                        <option value="">Select</option>
                                        <option value="3">12+ years allowed</option>
                                        <option value="4">No children allowed</option>
                                    </select>
                                </div>
                                <!--end form-group-->
                                <div class="form-group label-inline">
                                    <label for="pets" class="width-30">Pets Allowed</label>
                                    <select class="framed width-100" name="pets" id="pets">
                                        <option value="4">No pets allowed</option>
                                        <option value="">Select</option>
                                        <option value="2">All pets allowed</option>
                                        <option value="3">Only small pets allowed</option>
                                    </select>
                                </div>
                                <!--end form-group-->
                                <div class="form-group label-inline">
                                    <label for="cancellation" class="width-30">Cancellation</label>
                                    <select class="framed width-100" name="cancellation" id="cancellation">
                                        <option value="3">30 days before check in</option>
                                        <option value="">Select</option>
                                        <option value="2">No cancellation possible</option>
                                        <option value="4">7 days before check in</option>
                                    </select>
                                </div>
                                <!--end form-group-->
                                <div class="form-group label-inline">
                                    <label for="parking" class="width-30">Parking</label>
                                    <select class="framed width-100" name="parking" id="parking">
                                        <option value="2">Free parking</option>
                                        <option value="">Select</option>
                                        <option value="3">Payed parking</option>
                                        <option value="4">No parking possible</option>
                                    </select>
                                </div>
                                <!--end form-group-->
                            </div>
                            <!--end col-md-6-->
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h3>Check In</h3>
                                        <div class="form-group-inline">
                                            <div class="form-group">
                                                <label for="check-in-from">From</label>
                                                <input type="text" class="form-control" id="check-in-from" name="check-in-from" placeholder="12:00" value="12:00">
                                            </div>
                                            <!--end form-group-->
                                            <div class="form-group">
                                                <label for="check-in-to">To</label>
                                                <input type="text" class="form-control" id="check-in-to" name="check-in-to" placeholder="20:00" value="22:00">
                                            </div>
                                            <!--end form-group-->
                                        </div>
                                        <!--end form-group-inline-->
                                        <label><input type="checkbox" name="1" checked>Early Check-in</label>
                                    </div>
                                    <!--end col-md-6-->
                                    <div class="col-md-6">
                                        <h3>Check Out</h3>
                                        <div class="form-group-inline">
                                            <div class="form-group">
                                                <label for="check-out-from">From</label>
                                                <input type="text" class="form-control" id="check-out-from" name="check-out-from" placeholder="08:00" value="08:00">
                                            </div>
                                            <!--end form-group-->
                                            <div class="form-group">
                                                <label for="check-out-to">To</label>
                                                <input type="text" class="form-control" id="check-out-to" name="check-out-to" placeholder="12:00" value="14:00">
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
                            <!--end col-md-6-->
                        </div>
                        <!--end row-->
                    </section>
                    <hr>
                    <section>
                        <div class="form-group center">
                            <button type="submit" class="btn btn-primary btn-rounded btn-xlarge">Save Changes</button>
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