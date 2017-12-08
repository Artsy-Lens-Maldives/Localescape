@extends('layouts.admin')

@section('title')
    <span>Add New Accommodation</span> <a href="{{ url('admin/accommodations') }}" class="btn btn-lg btn-success">Go Back</a> </h1></span>
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
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="form-submit-title">Title<em>*</em></label>
                            <input type="text" class="form-control" id="form-submit-title" name="title" placeholder="Accommodation Title" required="">
                        </div>
                        <!--end form-group-->
                    </div>
                    <!--end col-md-7-->
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="type">Type:</label>
                            <select class="form-control" id="type" name="type">
                                @foreach($categories as $category)
                                    <option value="{{ Helper::slug_gen($category) }}">{{ $category }}</option>    
                                @endforeach
                            </select>
                        </div>
                        <!--end form-group-->
                    </div>
                    <!--end col-md-5-->
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="object-type">Extranet User</label>
                            <select class="form-control" name="user_id" id="object-type">
                                    <option value="0">Admin User</option>    
                                @foreach($extranet_users as $user)
                                    <option value="{{ $user->id }}">Name:{{ $user->name }} - Email:{{ $user->email }}</option>    
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
                            <textarea class="form-control" id="form-submit-description" rows="10" name="description" required="" placeholder="Describe your accommodation"></textarea>
                        </div>
                        <!--end form-group-->
                    </div>
                </div>
                <!--end row-->
                <div class="row">
                    <div class="col-md-12">
                        <div class="title">
                            <h2>Special Offer </h2>
                        </div>
                        <div class="form-group-inline vertical-align-middle">
                            <div class="row">
                                <div class="col-md-2">
                                    <label class="radio-inline">
                                        <input type="radio" name="special_offer" value="1">On
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="special_offer" value="0">Off
                                    </label>
                                </div>
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="percents" name="percents" placeholder="Offer Percentage example: 20%">
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="special-offer-text" name="special-offer-text" placeholder="Offer Text example: Off the price today">
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
                                <div class="title">
                                    <h3>Receive Reviews in Email</h3>
                                </div>
                                <div class="">
                                    <label class="radio-inline">
                                        <input type="radio" name="receive_reviews" value="1">On
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="receive_reviews" value="0">Off
                                    </label>
                                </div>
                            </div>
                                
                            <!--end col-md-7-->
                            <div class="col-md-2">
                                <div class="title">
                                    <h3>Minimum Stay </h3>
                                </div>
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
            <hr>
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
            <hr>
            <section id="gallery">
                <div class="title">
                    <h2>Gallery</h2>
                </div>
                <div id="image_preview_text"></div>
                <div id="image_preview" style="margin-top: 10px"></div>
                <div class="file-upload">
                    <input type="file" id="images" name="image[]" class="file-upload-input with-preview" multiple title="Click to add files" onchange="preview_images();" accept="gif|jpg|png">
                    <span>Click to add images</span>
                </div>
            </section>
            <hr>
            <section id="facilities">
                <div class="title">
                    <h2>Facilities</h2>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <ul class="checkboxes inline half list-unstyled" style="columns: 3; -webkit-columns: 3; -moz-columns: 3;">
                            @foreach($facilities as $facility)
                                <li><label><input type="checkbox" name="facilities[]" value="{{ $facility->id }}">  <i class="fa {{ $facility->fa_icon }}"></i> {{ $facility->name }} </label></li>
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
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="check-in-from">From</label>
                                                <input type="text" class="form-control" id="check-in-from" name="check-in-from" placeholder="12:00">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="check-in-to">To</label>
                                                <input type="text" class="form-control" id="check-in-to" name="check-in-to" placeholder="20:00">
                                            </div>
                                        </div>
                                    </div>
                                    <!--end form-group-->
                                </div>
                                <!--end form-group-inline-->
                                <div class="title">
                                    <h3>Early Check-in</h3>
                                </div>
                                <div class="">
                                    <label class="radio-inline">
                                        <input type="radio" name="early_check_in" value="1">On
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="early_check_in" value="0">Off
                                    </label>
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
                                                <input type="text" class="form-control" id="check-out-from" name="check-out-from" placeholder="08:00">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <!--end form-group-->
                                            <div class="form-group">
                                                <label for="check-out-to">To</label>
                                                <input type="text" class="form-control" id="check-out-to" name="check-out-to" placeholder="12:00">
                                            </div>
                                            <!--end form-group-->
                                        </div>
                                    </div>
                                </div>
                                <!--end form-group-inline-->
                                <div class="title">
                                    <h3>Late Check-out</h3>
                                </div>
                                <div class="">
                                    <label class="radio-inline">
                                        <input type="radio" name="late_check_out" value="1">On
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="late_check_out" value="0">Off
                                    </label>
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
    
<script>
    function preview_images() {
        var total_file = document.getElementById("images").files.length;
        $('#image_preview').empty();
        $('#image_preview_text').html('<h3>Upload Preview</h3>')
        for (var i = 0; i < total_file; i++) {
            $('#image_preview').append("<img src='" + URL.createObjectURL(event.target.files[i]) + "'>");
        }
    }
</script>

@endsection

@section('css')
    <style>
        #image_preview {
            /* Prevent vertical gaps */
            line-height: 0;

            -webkit-column-count: 5;
            -webkit-column-gap:   0px;
            -moz-column-count:    5;
            -moz-column-gap:      0px;
            column-count:         5;
            column-gap:           0px;
        }

        #image_preview img {
            /* Just in case there are inline attributes */
            width: 100% !important;
            height: auto !important;
        }

        @media (max-width: 1200px) {
            #image_preview {
                -moz-column-count:    4;
                -webkit-column-count: 4;
                column-count:         4;
            }
        }
        @media (max-width: 1000px) {
            #image_preview {
                -moz-column-count:    3;
                -webkit-column-count: 3;
                column-count:         3;
            }
        }
        @media (max-width: 800px) {
            #image_preview {
                -moz-column-count:    2;
                -webkit-column-count: 2;
                column-count:         2;
            }
        }
        @media (max-width: 400px) {
            #image_preview {
                -moz-column-count:    1;
                -webkit-column-count: 1;
                column-count:         1;
            }
        }
    </style>
@endsection
