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
                    <h1>Edit Accommodation ({{ $acco->title }})</h1>
                </div>
                <!--end title-->
                <div class="quick-navigation" data-fixed-after-touch="">
                    <div class="wrapper">
                        <ul>
                            <li><a href="#main-information" class="scroll">Main Information</a></li>
                            <li><a href="#location" class="scroll">Location</a></li>
                            <li><a href="#facilities" class="scroll">Facilities</a></li>
                            <li><a href="#additional-information" class="scroll">Additional Information</a></li>
                        </ul>
                    </div>
                </div>
                <!--end quick-navigation-->
                <form class="form-submit labels-uppercase" id="form-submit" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <section id="main-information">
                        <div class="title">
                            <h2>Main Information</h2>
                            <aside class="step">1</aside>
                        </div>
                        <div class="row">
                            <div class="col-md-7">
                                <div class="form-group">
                                    <label for="form-submit-title">Title<em>*</em></label>
                                    <input type="text" value="{{ $acco->title }}" class="form-control" id="form-submit-title" name="title" placeholder="Accommodation Title" required="">
                                </div>
                                <!--end form-group-->
                            </div>
                            <!--end col-md-7-->
                            <div class="col-md-5">
                                <div class="form-group">
                                    <label for="object-type">Accommodation Type</label>
                                    <select class="framed width-100" name="type" id="object-type">
                                        <option value="">Select</option>
                                        @foreach($categories as $category)
                                            <option value="{{ Helper::slug_gen($category) }}"
                                                @if($acco->type == Helper::slug_gen($category))
                                                    selected    
                                                @else
                                                    
                                                @endif
                                            >{{ $category }}</option>    
                                        @endforeach                                        
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
                                    <textarea class="form-control" id="form-submit-description" rows="10" name="description" required="" placeholder="Describe your accommodation">{{ $acco->description }}</textarea>
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
                                        <label class="no-margin"><input type="checkbox" value="1" name="special_offer"
                                        @if($acco->special_offer == 1)
                                            checked
                                        @else
                                            
                                        @endif
                                        >Special Offer</label>
                                    </div>
                                    <!--end form-group-->
                                    <div class="form-group width-20">
                                        <input type="text" class="form-control" value="{{ $acco->percents }}" id="percents" name="percents" placeholder="20%">
                                    </div>
                                    <!--end form-group-->
                                    <div class="form-group">
                                        <input type="text" class="form-control" value="{{ $acco->getAttribute('special-offer-text') }}" id="special-offer-text" name="special-offer-text" placeholder="Off the price today">
                                    </div>
                                    <!--end form-group-->
                                </div>
                                <!--end form-group-inline-->
                            </div>
                            <div class="col-md-7">
                                <fieldset class="rating">
                                    <legend>Please rate:</legend>
                                    <input type="radio" id="star5" name="rating" value="5" /><label for="star5" title="Rocks!">5 stars</label>
                                    <input type="radio" id="star4" name="rating" value="4" /><label for="star4" title="Pretty good">4 stars</label>
                                    <input type="radio" id="star3" name="rating" value="3" /><label for="star3" title="Meh">3 stars</label>
                                    <input type="radio" id="star2" name="rating" value="2" /><label for="star2" title="Kinda bad">2 stars</label>
                                    <input type="radio" id="star1" name="rating" value="1" /><label for="star1" title="Sucks big time">1 star</label>
                                </fieldset>
                            </div>
                            <!--col-md-5-->
                        </div>
                        <!--end row-->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-7">
                                        <h3>Receive Reviews<i class="fa fa-question-circle tooltip-question" data-toggle="tooltip" data-placement="top" title="Tick Here if you want to turn off review emails about your accommodation. (Feature Comming Soon.)"></i></h3>
                                        <label><input type="checkbox" name="receive_reviews" value="1"
                                        @if($acco->receive_reviews == '1')
                                            checked
                                        @else
                                            
                                        @endif
                                        >Receive Reviews in Email</label>
                                    </div>
                                    <!--end col-md-7-->
                                    <div class="col-md-5">
                                        <h3>Minimum Stay<i class="fa fa-question-circle tooltip-question" data-toggle="tooltip" data-placement="top" title="Enter the minimum nights required to book your accommodation"></i></h3>
                                        <input type="number" value="{{ $acco->minimum_stay }}" min="1" class="form-control" id="minimum-stay" name="minimum_stay" placeholder="2">
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
                                    <input type="text" class="form-control" id="address-autocomplete" value="{{ $acco->address }}" name="address" placeholder="Accommodation Address" required="">
                                </div>
                                <div class="form-group">
                                    <label>Place on Map</label>
                                    <div class="map height-300 box" id="map-item"></div>
                                </div>
                                <div class="form-group hidden">
                                    <input type="text" class="form-control" id="latitude" name="latitude" hidden=""  value="{{ $acco->latitude }}">
                                    <input type="text" class="form-control" id="longitude" name="longitude" hidden="" value="{{ $acco->longitude }}">
                                </div>
                                <!--end map-->
                                <!-- <h3>Position</h3>
                                <ul class="checkboxes inline list-unstyled">
                                    <li><label><input type="checkbox" name="1">Near the beach</label></li>
                                    <li><label><input type="checkbox" name="2">Near the forest</label></li>
                                    <li><label><input type="checkbox" name="3">Near the ski center</label></li>
                                    <li><label><input type="checkbox" name="4">At he town center</label></li>
                                    <li><label><input type="checkbox" name="5">Isolated</label></li>
                                    <li><label><input type="checkbox" name="6">Private island</label></li>
                                </ul> -->
                                <!--end checkboxes-->
                            </div>
                            <br>
                            <!--end col-md-7-->
                            <div class="col-md-5">
                                <h2>Contact Information</h2>
                                <div class="form-group">
                                    <label for="form-submit-email">Email</label>
                                    <input type="email" class="form-control" id="form-submit-email" name="email" value="{{ $acco->email }}"  placeholder="hello@example.com">
                                </div>
                                <!--end form-group-->
                                <div class="form-group">
                                    <label for="form-submit-phone">Tel. Phone</label>
                                    <input type="text" class="form-control" id="form-submit-phone" name="phone" value="{{ $acco->phone }}" placeholder="+960 3323456">
                                </div>
                                <!--end form-group-->
                                <div class="form-group">
                                    <label for="form-submit-mobile-phone">Mobile Phone</label>
                                    <input type="text" class="form-control" id="form-submit-mobile-phone" name="mobile-phone" value="{{ $acco->getAttribute('mobile-phone') }}" placeholder="+960 9123456">
                                </div>
                                <!--end form-group-->
                                <div class="form-group-inline">
                                    <div class="form-group">
                                        <label for="form-submit-facebook">Facebook Page</label>
                                        <input type="text" class="form-control" id="form-submit-facebook" name="facebook" value="{{ $acco->facebook }}" placeholder="www.facebook.com/yourhotel">
                                    </div>
                                    <!--end form-group-->
                                    <div class="form-group">
                                        <label for="form-submit-twitter">Twitter</label>
                                        <input type="text" class="form-control" id="form-submit-twitter" name="twitter" value="{{ $acco->twitter }}" placeholder="www.twitter.com/yourhotel">
                                    </div>
                                    <!--end form-group-->
                                </div>
                                <!--end form-group-inline-->
                                <div class="form-group-inline">
                                    <div class="form-group">
                                        <label for="form-submit-youtube">Youtube</label>
                                        <input type="text" class="form-control" id="form-submit-youtube" name="youtube" value="{{ $acco->youtube }}" placeholder="www.youtube.com/yourhotel">
                                    </div>
                                    <!--end form-group-->
                                    <div class="form-group">
                                        <label for="form-submit-skype">Webstite</label>
                                        <input type="text" class="form-control" id="form-submit-skype" name="website" value="{{ $acco->website }}" placeholder="www.hotel.com">
                                    </div>
                                    <!--end form-group-->
                                </div>
                                <!--end form-group-inline-->
                            </div>
                            <!--end col-md-7-->
                        </div>
                        <!--end row-->
                    </section>
                    <section id="facilities">
                        <div class="title">
                            <h2>Facilities </h2>
                            <aside class="step">3</aside>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <ul class="checkboxes inline half list-unstyled">
                                    <?php 
                                        $myArray = explode(',', $acco->facilities);
                                    ?>
                                    @foreach($facilities as $facility)
                                        <li>
                                            <label>
                                                <input type="checkbox" name="facilities[]" value="{{ $facility->id }}"
                                                @foreach($myArray as $arrayI)
                                                    @if($arrayI == $facility->id)
                                                        checked
                                                    @else
                                                        
                                                    @endif
                                                @endforeach
                                                >{{ $facility->name }} 
                                            </label>
                                        </li>
                                    @endforeach   
                                </ul>
                                <!--end checkboxes-->
                            </div>
                        </div>
                    </section>
                    <section id="additional-information">
                        <div class="title">
                            <h2>Additional Information</h2>
                            <aside class="step">4</aside>
                        </div>
                        <!--end title-->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="form-submit-description">Policy on Children<em>*</em></label>
                                    <textarea class="form-control" id="form-submit-children-policy" rows="10" name="charge_childeren"  required="" placeholder="Describe your policy on children">{{ $acco->charge_childeren }}</textarea>
                                </div>
                                <!--end form-group-->
                                <div class="form-group">
                                    <label for="form-submit-description">Policy on Pets<em>*</em></label>
                                    <textarea class="form-control" id="form-submit-pets-policy" rows="10" name="pets" required="" placeholder="Describe your policy on pets">{{ $acco->pets }}</textarea>
                                </div>
                                <!--end form-group-->
                                <div class="form-group">
                                    <label for="form-submit-description">Cancellation Policy<em>*</em></label>
                                    <textarea class="form-control" id="form-submit-policy-cancellation" rows="10" name="cancellation" required="" placeholder="Describe your pancellation policy">{{ $acco->cancellation }}</textarea>
                                </div>
                                <!--end form-group-->
                                <div class="form-group">
                                    <label for="form-submit-description">Other Policies<em>*</em></label>
                                    <textarea class="form-control" id="form-submit-other-policy" rows="10" name="other_policies" required="" placeholder="Describe other policies that you have">{{ $acco->other_policies }}</textarea>
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
                                                <input type="text" class="form-control" id="check-in-from" value="{{ $acco->getAttribute('check-in-from') }}" name="check-in-from" placeholder="12:00">
                                            </div>
                                            <!--end form-group-->
                                            <div class="form-group">
                                                <label for="check-in-to">To</label>
                                                <input type="text" class="form-control" id="check-in-to" value="{{ $acco->getAttribute('check-in-to') }}" name="check-in-to" placeholder="20:00">
                                            </div>
                                            <!--end form-group-->
                                        </div>
                                        <!--end form-group-inline-->
                                        <label><input type="checkbox" value="1" name="early_check_in"
                                        @if($acco->early_check_in == '1')
                                            checked
                                        @else
                                            
                                        @endif
                                        >Early Check-in</label>
                                    </div>
                                    <!--end col-md-6-->
                                    <div class="col-md-6">
                                        <h3>Check Out</h3>
                                        <div class="form-group-inline">
                                            <div class="form-group">
                                                <label for="check-out-from">From</label>
                                                <input type="text" class="form-control" id="check-out-from" value="{{ $acco->getAttribute('check-out-from') }}" name="check-out-from" placeholder="08:00">
                                            </div>
                                            <!--end form-group-->
                                            <div class="form-group">
                                                <label for="check-out-to">To</label>
                                                <input type="text" class="form-control" id="check-out-to" value="{{ $acco->getAttribute('check-out-to') }}" name="check-out-to" placeholder="12:00">
                                            </div>
                                            <!--end form-group-->
                                        </div>
                                        <!--end form-group-inline-->
                                        <label><input type="checkbox" value="1" name="late_check_out"
                                        @if($acco->late_check_out == '1')
                                            checked
                                        @else
                                            
                                        @endif
                                        >Late Check-out</label>
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
                <!--end form-->
            </div>
            <!--end main-content-->
        </div>
        <!--end container-->
@endsection     


@section('js')

<script type="text/javascript" src="/js/jQuery.MultiFile.min.js"></script>
<script>
    
</script>
@endsection

@section('css')
<style>
.rating {
    float:left;
}

/* :not(:checked) is a filter, so that browsers that don’t support :checked don’t 
   follow these rules. Every browser that supports :checked also supports :not(), so
   it doesn’t make the test unnecessarily selective */
.rating:not(:checked) > input {
    position:absolute;
    top:-9999px;
    clip:rect(0,0,0,0);
}

.rating:not(:checked) > label {
    float:right;
    width:1em;
    padding:0 .1em;
    overflow:hidden;
    white-space:nowrap;
    cursor:pointer;
    font-size:200%;
    line-height:1.2;
    color:#ddd;
    text-shadow:1px 1px #bbb, 2px 2px #666, .1em .1em .2em rgba(0,0,0,.5);
}

.rating:not(:checked) > label:before {
    content: '★ ';
}

.rating > input:checked ~ label {
    color: #f70;
    text-shadow:1px 1px #c60, 2px 2px #940, .1em .1em .2em rgba(0,0,0,.5);
}

.rating:not(:checked) > label:hover,
.rating:not(:checked) > label:hover ~ label {
    color: gold;
    text-shadow:1px 1px goldenrod, 2px 2px #B57340, .1em .1em .2em rgba(0,0,0,.5);
}

.rating > input:checked + label:hover,
.rating > input:checked + label:hover ~ label,
.rating > input:checked ~ label:hover,
.rating > input:checked ~ label:hover ~ label,
.rating > label:hover ~ input:checked ~ label {
    color: #ea0;
    text-shadow:1px 1px goldenrod, 2px 2px #B57340, .1em .1em .2em rgba(0,0,0,.5);
}

.rating > label:active {
    position:relative;
    top:2px;
    left:2px;
}
</style>
@endsection