            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                @if (Auth::guard('photopackage')->check()) 
                  <ul class="nav side-menu">
                    <li><a href="{{ url('photopackage/all') }}"><i class="fa fa-table"></i> View All</a></li>
                    <li></i><a href="{{ url('photopackage/create') }}"><i class="fa fa-edit"> Create a new Package</a></li>
                  </ul>
                @else
                  <ul class="nav side-menu">
                      <li><a href="{{ url('/photopackage/login') }}">Login</a></li>
                      <li><a href="{{ url('/photopackage/register') }}">Register</a></li>
                  </ul> 
                @endif
              </div>
            </div>
            <!-- /sidebar menu -->