            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                @if (Auth::guard('admin')->check()) 
                  <ul class="nav side-menu">
                    <li><a><i class="fa fa-home"></i> Extranet <span class="fa fa-chevron-down"></span></a>
                      <ul class="nav child_menu">
                        <li><a href="{{ url('admin/accommodations') }}">Accommodations</a></li>
                      </ul>
                    </li>
                    <li><a><i class="fa fa-edit"></i> Users <span class="fa fa-chevron-down"></span></a>
                      <ul class="nav child_menu">
                        <li><a href="{{ url('admin/user/customers') }}">Customers</a></li>
                        <li><a href="{{ url('admin/user/extranet') }}">Extranet</a></li>
                        <li><a href="{{ url('admin/user/admin') }}">Admin</a></li>
                        <li><a href="{{ url('admin/user/dive') }}">Dive Panel User</a></li>
                        <li><a href="{{ url('admin/user/photo') }}">Photo Panel</a></li>
                      </ul>
                    </li>
                    <li><a><i class="fa fa-desktop"></i> Tours <span class="fa fa-chevron-down"></span></a>
                      <ul class="nav child_menu">
                        <li><a href="{{ url('admin/tours') }}">All Tours</a></li>
                        <li><a href="{{ url('admin/tours/add') }}">Add Tours</a></li>
                      </ul>
                    </li>
                    <li><a><i class="fa fa-table"></i> Blog <span class="fa fa-chevron-down"></span></a>
                      <ul class="nav child_menu">
                        <li><a href="{{ url('admin/blog') }}">All Blog Post</a></li>
                        <li><a href="{{ url('admin/blog/create') }}">Add Blog Post</a></li>
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