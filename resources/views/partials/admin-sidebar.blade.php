            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                @if (Auth::guard('admin')->check()) 
                  <ul class="nav side-menu">
                    <li><a><i class="fa fa-home"></i> Extranet <span class="fa fa-chevron-down"></span> @if($approve_count > 0) <span class="label label-warning pull-right">{{ $approve_count }} Unapproved</span> @endif</a>
                      <ul class="nav child_menu">
                        <li><a href="{{ url('admin/accommodations') }}">Accommodations</a></li>
                      </ul>
                    </li>
                    <li><a><i class="fa fa-suitcase"></i> Tours <span class="fa fa-chevron-down"></span></a>
                      <ul class="nav child_menu">
                        <li><a href="{{ url('admin/tours') }}">All Tours</a></li>
                        <li><a href="{{ url('admin/tours') }}">All Dive Packages</a></li>
                        <li><a href="{{ url('admin/tours') }}">All Photo Packages</a></li>
                      </ul>
                    </li>
                    <li><a><i class="fa fa-bar-chart-o"></i> Bookings <span class="fa fa-chevron-down"></span></a>
                      <ul class="nav child_menu">
                        <li><a href="{{ url('admin/bookings/accommodations') }}">Accommodations</a></li>
                        <li><a href="{{ url('admin/bookings/tours') }}">Tours</a></li>
                      </ul>
                    </li>
                    <li><a><i class="fa fa-clone"></i>Inquiries <span class="fa fa-chevron-down"></span></a>
                      <ul class="nav child_menu">
                        <li><a href="{{ url('admin/inquiries') }}">All Inquiries</a></li>
                      </ul>
                    </li>
                    <li><a><i class="fa fa-times"></i>Cancellation Requests <span class="fa fa-chevron-down"></span></a>
                      <ul class="nav child_menu">
                        <li><a href="{{ url('admin/cancellation') }}">All Booking Cancellation Request</a></li>
                      </ul>
                    </li>
                    <li><a><i class="fa fa-rss"></i> Blog <span class="fa fa-chevron-down"></span></a>
                      <ul class="nav child_menu">
                        <li><a href="{{ url('admin/blog') }}">All Blog Post</a></li>
                        <li><a href="{{ url('admin/blog/create') }}">Add Blog Post</a></li>
                      </ul>
                    </li>
                    <li><a><i class="fa fa-users"></i> Users <span class="fa fa-chevron-down"></span></a>
                      <ul class="nav child_menu">
                        <li><a href="{{ url('admin/user/admin') }}">Admin</a></li>
                        <li><a href="{{ url('admin/user/extranet') }}">Extranet</a></li>
                        <li><a href="{{ url('admin/user/customers') }}">Customers</a></li>
                        <li><a href="{{ url('admin/user/dive') }}">Dive Panel User</a></li>
                        <li><a href="{{ url('admin/user/photo') }}">Photo Panel</a></li>
                      </ul>
                    </li>
                    <li><a href="{{ url('admin/bills') }}"><i class="fa fa-credit-card"></i> Bills and Fees @if($unpaid_count > 0) <span class="label label-danger pull-right">{{ $unpaid_count }} Due</span> @endif</a></li>
                    <li><a><i class="fa fa-cogs"></i> Admin Features <span class="fa fa-chevron-down"></span></a>
                      <ul class="nav child_menu">
                        <li><a href="{{ url('admin/gallery') }}"><i class="fa fa-camera-retro"></i> Gallery</a></li>
                        <li><a href="{{ url('admin/facilities') }}"><i class="fa fa-check"></i> Facilities</a></li>
                        <!--<li><a href="{{ url('admin/message') }}"><i class="fa fa-envelope"></i> Message</a></li>-->
                        <li><a href="{{ url('admin/top-picks') }}"><i class="fa fa-certificate"></i> Top Picks</a></li>
                        <li><a href="{{ url('admin/settings') }}"><i class="fa fa-cog"></i> Settings</a></li>
                        <li><a href="{{ url('admin/about-us/create') }}"><i class="fa fa-cog"></i> About Us</a></li>
                      </ul>
                    </li>
                    
                  </ul>
                @else
                  <ul class="nav side-menu">
                      <li><a href="{{ url('/admin/login') }}">Login</a></li>
                      <li><a href="{{ url('/admin/register') }}">Register</a></li>
                  </ul> 
                @endif
              </div>
            </div>
            <!-- /sidebar menu -->