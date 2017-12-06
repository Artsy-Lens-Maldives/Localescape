@extends('layouts.admin')

@section('title')
    <span>Add New Accommodation</span> <a href="{{ url('admin/accommodations') }}" class="btn btn-lg btn-success">Go Back</a> </h1></span>
@endsection

@section('content') 
    
    <div class="container">
        <form class="form-submit labels-uppercase" id="form-submit" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <section id="main-information">
                <div class="title">
                    <h2>Main Information</h2>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="form-submit-title">Title</label>
                            <input type="text" value="{{ $acco->title }}" class="form-control" id="form-submit-title" name="title" placeholder="Accommodation Title" required="">
                        </div>
                        <!--end form-group-->
                    </div>
                    <!--end col-md-7-->
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="object-type">Accommodation Type</label>
                            <select class="form-control" name="type" id="object-type">
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
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="object-type">Switch User</label>
                            <select class="form-control" name="user_id" id="object-type">
                                <option value="0"
                                @if($acco->user_id == '0')
                                    selected
                                @endif
                                >Admin User</option>    
                                @foreach($extranet_users as $user)
                                    <option value="{{ $user->id }}"
                                    @if($acco->user_id == $user->id)
                                        selected
                                    @endif
                                    >Name:{{ $user->name }} - Email:{{ $user->email }}</option>    
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
                            <label for="form-submit-description">Description</label>
                            <textarea class="form-control" id="form-submit-description" rows="10" name="description" required="" placeholder="Describe your accommodation">{{ $acco->description }}</textarea>
                        </div>
                        <!--end form-group-->
                    </div>
                </div>
                <!--end row-->
                <div class="row">
                    <div class="col-md-12">
                        <h3>Special Offer? <i class="fa fa-question-circle tooltip-question" data-toggle="tooltip" data-placement="right" title="Have a special offer? Tick here and Enter the details"></i></h3>
                        <div class="form-group-inline vertical-align-middle">
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="checkbox">
                                        <label><input type="checkbox" value="1" name="special_offer"
                                        @if($acco->special_offer == 1)
                                            checked
                                        @else
                                            
                                        @endif
                                        >Special Offer</label>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <input type="text" class="form-control" value="{{ $acco->percents }}" id="percents" name="percents" placeholder="Offer Percentage example: 20%">
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <input type="text" class="form-control" value="{{ $acco->getAttribute('special-offer-text') }}" id="special-offer-text" name="special-offer-text" placeholder="Offer Text example: Off the price today">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end form-group-inline-->
                    </div>
                    <!--col-md-5-->
                </div>
                <!--end row-->
                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-2">
                                <h3>Receive Reviews <i class="fa fa-question-circle tooltip-question" data-toggle="tooltip" data-placement="top" title="Tick Here if you want to turn off review emails about your accommodation. (Feature Comming Soon.)"></i></h3>
                                <div class="checkbox">
                                    <label><input type="checkbox" name="receive_reviews" value="1"
                                    @if($acco->receive_reviews == '1')
                                        checked
                                    @else
                                        
                                    @endif>Receive Reviews in Email</label>
                                </div>
                            </div>
                                
                            <!--end col-md-7-->
                            <div class="col-md-2">
                                <h3>Minimum Stay <i class="fa fa-question-circle tooltip-question" data-toggle="tooltip" data-placement="top" title="Enter the minimum nights required to book your accommodation"></i></h3>
                                <input type="number" min="1" value="{{ $acco->minimum_stay }}" class="form-control" id="minimum-stay" name="minimum_stay" placeholder="2">
                            </div>
                            <!--end col-md-5-->
                        </div>
                        <!--end row-->
                    </div>
                    <!--end col-md-5-->
                </div>
                <!--end row-->
            </section>
            <hr>
            <section id="location">
                <div class="row">
                    <div class="col-md-12">
                        <div class="title">
                            <h2>Location</h2>
                        </div>
                        <div class="form-group">
                            <label for="address-autocomplete">Address<em>*</em></label>
                            <input type="text" class="form-control" id="address-autocomplete" name="address" placeholder="Accommodation Address" value="{{ $acco->address }}" required="">
                        </div>
                    </div>
                    <br>
                    <!--end col-md-7-->
                    <div class="col-md-12">
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
            <hr>
            <section id="facilities">
                <div class="title">
                    <h2>Facilities </h2>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <ul class="checkboxes inline half list-unstyled" style="columns: 3; -webkit-columns: 3; -moz-columns: 3;">
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
                                        >  <i class="fa {{ $facility->fa_icon }}"></i> {{ $facility->name }} 
                                    </label>
                                </li>
                            @endforeach   
                        </ul>
                        <!--end checkboxes-->
                    </div>
                </div>
            </section>
            <hr>
            <section id="additional-information">
                <div class="title">
                    <h2>Additional Information</h2>
                </div>
                <!--end title-->
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="form-submit-description">Policy on Children</label>
                            <textarea class="form-control" id="form-submit-children-policy" rows="10" name="charge_childeren"  required="" placeholder="Describe your policy on children">{{ $acco->charge_childeren }}</textarea>
                        </div>
                        <!--end form-group-->
                        <div class="form-group">
                            <label for="form-submit-description">Policy on Pets</label>
                            <textarea class="form-control" id="form-submit-pets-policy" rows="10" name="pets" required="" placeholder="Describe your policy on pets">{{ $acco->pets }}</textarea>
                        </div>
                        <!--end form-group-->
                        <div class="form-group">
                            <label for="form-submit-description">Cancellation Policy</label>
                            <textarea class="form-control" id="form-submit-policy-cancellation" rows="10" name="cancellation" required="" placeholder="Describe your pancellation policy">{{ $acco->cancellation }}</textarea>
                        </div>
                        <!--end form-group-->
                        <div class="form-group">
                            <label for="form-submit-description">Other Policies</label>
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
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="check-in-from">From</label>
                                                <input type="text" class="form-control" id="check-in-from" value="{{ $acco->getAttribute('check-in-from') }}" name="check-in-from" placeholder="12:00">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="check-in-to">To</label>
                                                <input type="text" class="form-control" id="check-in-to" value="{{ $acco->getAttribute('check-in-to') }}" name="check-in-to" placeholder="20:00">
                                            </div>
                                        </div>
                                    </div>
                                    <!--end form-group-->
                                </div>
                                <!--end form-group-inline-->
                                <div class="checkbox">
                                    <label><input type="checkbox" value="1" name="early_check_in"
                                    @if($acco->early_check_in == '1')
                                        checked
                                    @else
                                        
                                    @endif
                                    >Early Check-in</label>
                                </div>
                            </div>
                            <!--end col-md-6-->
                            <div class="col-md-6">
                                <h3>Check Out</h3>
                                <div class="form-group-inline">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="check-out-from">From</label>
                                                <input type="text" class="form-control" id="check-out-from" value="{{ $acco->getAttribute('check-out-from') }}" name="check-out-from" placeholder="08:00">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <!--end form-group-->
                                            <div class="form-group">
                                                <label for="check-out-to">To</label>
                                                <input type="text" class="form-control" id="check-out-to" value="{{ $acco->getAttribute('check-out-to') }}" name="check-out-to" placeholder="12:00">
                                            </div>
                                            <!--end form-group-->
                                        </div>
                                    </div>
                                </div>
                                <!--end form-group-inline-->
                                <div class="checkbox">
                                    <label><input type="checkbox" value="1" name="late_check_out"
                                    @if($acco->late_check_out == '1')
                                        checked
                                    @else
                                        
                                    @endif
                                    >Late Check-out</label>
                                </div>
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