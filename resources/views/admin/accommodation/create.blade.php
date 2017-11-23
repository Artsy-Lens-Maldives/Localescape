@extends('layouts.admin')

@section('title')
    <span>Add New Accommodation</span>
@endsection

@section('content') 
    
    <div class="container">
        <form action="{{ url()->current() }}" method="POST" class="form-horizontal" role="form">
            <div class="container-fluid shadow">
                <div class="row">
                    <div class="row" style="display: block;">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="control-label control-label-left col-sm-3" for="field1">Title<span class="req"> *</span></label>
                            <div class="controls col-sm-9">
                                <input id="field1" type="text" class="form-control k-textbox" data-role="text" name="title" required="required" data-parsley-errors-container="#errId1"><span id="errId1" class="error"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label control-label-left col-sm-3" for="field6">Type</label>
                            <div class="controls col-sm-9">
                                <select id="field6" class="form-control" data-role="select" selected="selected" data-parsley-errors-container="#errId2">
                                <option value="Hotel">Hotel</option>
                                <option value="Guest House">Guest House</option>
                                <option value="Resort">Resort</option>
                                </select>
                                <span id="errId2" class="error"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label control-label-left col-sm-3" for="field18">Description</label>
                            <div class="controls col-sm-9">
                                <textarea id="field18" rows="3" class="form-control k-textbox" data-role="textarea" name="description" style="margin-top: 0px; margin-bottom: 0px; height: 96px;" data-parsley-errors-container="#errId3"></textarea><span id="errId3" class="error"></span>
                            </div>
                        </div>
                        <div class="form-group"> 
                            <div class="col-sm-offset-2 col-sm-10">
                                <div class="checkbox">
                                    <label><input value="1" name="special_offer" type="checkbox"> Special Offer</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label control-label-left col-sm-3" for="field101">Percent</label>
                            <div class="controls col-sm-9">
                                <input id="field101" type="text" class="form-control k-textbox" data-role="text" placeholder="20%" name="percent" data-parsley-errors-container="#errId5"><span id="errId5" class="error"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label control-label-left col-sm-3" for="field91">Minimum Stay</label>
                            <div class="controls col-sm-9">
                                <input id="field91" type="text" class="form-control k-textbox" data-role="text" name="minimum_stay" data-parsley-errors-container="#errId7"><span id="errId7" class="error"></span>
                            </div>
                        </div>
                        <div class="form-group"> 
                            <div class="col-sm-offset-2 col-sm-10">
                                <div class="checkbox">
                                    <label><input name="receive_reviews" value="1" type="checkbox"> Special Offer</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group" style="display: block;">
                            <label class="control-label control-label-left col-sm-3" for="address">Address</label>
                            <div class="controls col-sm-9">
                                <input id="address" type="text" class="form-control k-textbox" data-role="text" name="address" data-parsley-errors-container="#errId9"><span id="errId9" class="error"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label control-label-left col-sm-3" for="field4">Email</label>
                            <div class="controls col-sm-9">
                                <input id="field4" type="text" class="form-control k-textbox" data-role="text" name="email" data-parsley-errors-container="#errId10"><span id="errId10" class="error"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label control-label-left col-sm-3" for="field5">Phone</label>
                            <div class="controls col-sm-9">
                                <input id="field5" type="text" class="form-control k-textbox" data-role="text" name="phone" data-parsley-errors-container="#errId11"><span id="errId11" class="error"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label control-label-left col-sm-3" for="mobile-phone">Mobile Phone</label>
                            <div class="controls col-sm-9">
                                <input id="mobile-phone" type="text" class="form-control k-textbox" data-role="text" name="mobile-phone" data-parsley-errors-container="#errId12"><span id="errId12" class="error"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label control-label-left col-sm-3" for="twitter">Twitter Page</label>
                            <div class="controls col-sm-9">
                                <input id="twitter" type="text" class="form-control k-textbox" data-role="text" name="twitter" data-parsley-errors-container="#errId13"><span id="errId13" class="error"></span>
                            </div>
                        </div>
                        <div class="form-group" style="display: block;">
                            <label class="control-label control-label-left col-sm-3" for="facebook">Facebook Page</label>
                            <div class="controls col-sm-9">
                                <input id="facebook" type="text" class="form-control k-textbox" data-role="text" name="facebook" data-parsley-errors-container="#errId14"><span id="errId14" class="error"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label control-label-left col-sm-3" for="youtube">Youtube Page</label>
                            <div class="controls col-sm-9">
                                <input id="youtube" type="text" class="form-control k-textbox" data-role="text" name="youtube" data-parsley-errors-container="#errId15"><span id="errId15" class="error"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label control-label-left col-sm-3" for="website">Website</label>
                            <div class="controls col-sm-9">
                                <input id="website" type="text" class="form-control k-textbox" data-role="text" name="website" data-parsley-errors-container="#errId16"><span id="errId16" class="error"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label control-label-left col-sm-3" for="charge_childeren">Policy on Children</label>
                            <div class="controls col-sm-9">
                                <textarea id="charge_childeren" rows="3" class="form-control k-textbox" data-role="textarea" name="charge_childeren" data-parsley-errors-container="#errId17"></textarea><span id="errId17" class="error"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label control-label-left col-sm-3" for="pets">Policy on Pets</label>
                            <div class="controls col-sm-9">
                                <textarea id="pets" rows="3" class="form-control k-textbox" data-role="textarea" name="pets" data-parsley-errors-container="#errId18"></textarea><span id="errId18" class="error"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label control-label-left col-sm-3" for="cancellation">Cancellation Policy</label>
                            <div class="controls col-sm-9">
                                <textarea id="cancellation" rows="3" class="form-control k-textbox" data-role="textarea" name="cancellation" data-parsley-errors-container="#errId19"></textarea><span id="errId19" class="error"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label control-label-left col-sm-3" for="other_policies">Other Policies</label>
                            <div class="controls col-sm-9">
                                <textarea id="other_policies" rows="3" class="form-control k-textbox" data-role="textarea" name="other_policies" data-parsley-errors-container="#errId20"></textarea><span id="errId20" class="error"></span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label control-label-left col-sm-3" for="check-in-from">Check In</label>
                                    <div class="controls col-sm-9">
                                        <input id="check-in-from" type="text" class="form-control k-textbox" data-role="text" name="check-in-from" data-parsley-errors-container="#errId21"><span class="help-block">From</span><span id="errId21" class="error"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label control-label-left col-sm-3 sr-only" for="check-in-to"></label>
                                    <div class="controls col-sm-9">
                                        <input id="check-in-to" type="text" class="form-control k-textbox" data-role="text" name="check-in-to" data-parsley-errors-container="#errId22"><span class="help-block">To</span><span id="errId22" class="error"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label control-label-left col-sm-3" for="check-out-from">Check out</label>
                                    <div class="controls col-sm-9">
                                        <input id="check-out-from" type="text" class="form-control k-textbox" data-role="text" name="check-out-from" data-parsley-errors-container="#errId23"><span class="help-block">From</span><span id="errId23" class="error"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label control-label-left col-sm-3 sr-only" for="check-out-to"></label>
                                    <div class="controls col-sm-9">
                                        <input id="check-out-to" type="text" class="form-control k-textbox" data-role="text" name="check-out-to" data-parsley-errors-container="#errId24"><span class="help-block">To</span><span id="errId24" class="error"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group" style="display: block;">
                                    <label class="control-label control-label-left col-sm-3">Early Check In</label>
                                    <div class="controls col-sm-9">
                                        <label class="checkbox" for="checkbox70"><input type="checkbox" value="1" name="early_check_in" id="checkbox70" data-parsley-errors-container="#errId25"></label><span id="errId25" class="error"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label control-label-left col-sm-3">Early Check out</label>
                                    <div class="controls col-sm-9">
                                        <label class="checkbox" for="checkbox75"><input type="checkbox" value="1" name="late_check_out" id="checkbox75" data-parsley-errors-container="#errId26"></label><span id="errId26" class="error"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group center">
                            <button type="submit" class="btn btn-primary btn-rounded btn-xlarge">Submit Now</button>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </form>
    </div>

@endsection

@section('js')
    
   

@endsection