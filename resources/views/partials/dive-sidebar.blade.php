            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                @if (Auth::guard('divepackage')->check()) 
                  <ul class="nav side-menu">
                    <li><a href="{{ url('divepackage/all') }}"><i class="fa fa-table"></i> View All</a></li>
                    <li><a href="{{ url('divepackage/create') }}"><i class="fa fa-edit"></i> Create a new Package</a></li>
                  </ul>
                @else
                  <ul class="nav side-menu">
                      <li><a href="{{ url('/divepackage/login') }}">Login</a></li>
                      <li><a href="{{ url('/divepackage/register') }}">Register</a></li>
                  </ul> 
                @endif
              </div>
            </div>
            <!-- /sidebar menu -->