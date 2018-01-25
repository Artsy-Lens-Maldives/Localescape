                <div class="col-md-3">
                    <div class="sidebar">
                        <div class="box filter">
                            <h2>Search</h2>
                            <form id="form-filter" action="/search" method="GET" class="labels-uppercase">
                                <div class="form-group">
                                    <label for="form-filter-destination">Destination</label>
                                    <input type="text" class="form-control" value="{{ request()->q }}" id="form-filter-destination" name="q" placeholder="Destination" required>
                                </div>
                                <!--end form-group-->
                                <div class="form-group-inline">
                                    <div class="form-group">
                                        <label for="form-filter-check-in">Check In</label>
                                        <input type="text" class="form-control date" value="{{ request()->check_in }}" id="form-filter-check-in" name="check_in" placeholder="Check In" required>
                                    </div>
                                    <!--end form-group-->
                                    <div class="form-group">
                                        <label for="form-filter-check-in">Check Out</label>
                                        <input type="text" class="form-control date" value="{{ request()->check_out }}" id="form-filter-check-in" name="check_out" placeholder="Check Out" required>
                                    </div>
                                    <!--end form-group-->
                                </div>
                                <!--end form-group-inline-->
                                <!-- <div class="center">
                                    <a href="#filter-advanced-search" class="link icon" data-toggle="collapse" aria-expanded="false" aria-controls="filter-advanced-search">Advanced Search<i class="fa fa-plus"></i></a>
                                </div> -->
                                <!-- <div class="collapse in" id="filter-advanced-search">
                                    <div class="wrapper">
                                        <h2>Filter</h2>
                                        <section>
                                            <h3>Rate (per night)</h3>
                                            <ul class="checkboxes list-unstyled">
                                                <li><label><input type="checkbox" name="hotel">$0 - $50<span>12</span></label></li>
                                                <li><label><input type="checkbox" name="apartment">$50 - $100<span>48</span></label></li>
                                                <li><label><input type="checkbox" name="breakfast-only">$150 - $150<span>36</span></label></li>
                                                <li><label><input type="checkbox" name="spa-wellness">$150+<span>56</span></label></li>
                                            </ul>
                                            
                                        </section>
                                        
                                        <section>
                                            <h3>Property Type </h3>
                                            <ul class="checkboxes">
                                                <li><label><input type="checkbox" name="apartment">Hotels<span>31</span></label></li>
                                                <li><label><input type="checkbox" name="breakfast-only">Resorts<span>68</span></label></li>
                                                <li><label><input type="checkbox" name="spa-wellness">Guest-House<span>52</span></label></li>
                                            </ul>      
                                        </section>
                                        
                                        <section>
                                            <h3>Property Facility</h3>
                                            <ul class="checkboxes no-bottom-margin">
                                                <li><label><input type="checkbox" name="wi-fi">Wi-fi<span>12</span></label></li>
                                                <li><label><input type="checkbox" name="free-parking">Free Parking<span>48</span></label></li>
                                                <li><label><input type="checkbox" name="airport">Airport Shuttle<span>36</span></label></li>
                                                <li><label><input type="checkbox" name="family-rooms">Family Rooms<span>56</span></label></li>
                                            </ul>
                                            
                                        </section>
                                        
                                    </div>
                                </div> -->
                                <!--end collapse-->
                                <div class="form-group center">
                                    <button type="submit" class="btn btn-primary btn-rounded form-control">Search</button>
                                </div>
                            </form>
                            <!--end form-filter-->
                        </div>
                        <!--end filter-->
                        <a href="#" class="advertising-banner">
                            <span class="banner-badge">Advertising</span>
                            <img src="https://via.placeholder.com/555x333?text=Add Advertisments Here" alt="Insert Advertisments here">
                        </a>
                    </div>
                    <!--end sidebar-->
                </div>