    <div id="page-header">
        <header>
            <div class="container">
                <div class="secondary-nav">
                    <div class="nav-trigger"><a data-toggle="collapse" href="#secondary-nav" aria-expanded="false" aria-controls="secondary-nav"><i class="fa fa-user"></i></a></div>
                    <div id="secondary-nav">
                        <nav>
                            <div class="left opacity-60">
                                <a href="phone:+9609555544"><i class="fa fa-phone"></i>+960 9555544</a>
                                <a href="mailto:info@localescapemaldives.com"><i class="fa fa-envelope"></i>info@localescapemaldives.com</a>
                            </div>
                            <!--end left-->
                            <div class="right">
                                <div class="element">
                                    <select>
                                        <option>$</option>
                                    </select>
                                </div>
                                <div class="element">
                                    <select>
                                        <option>EN</option>
                                    </select>
                                </div>
                                <!--end element-->
                            </div>
                            <!--end right-->
                        </nav>
                    </div>
                </div>
                <!--end secondary-nav-->
            </div>
            <!--end container-->
            <hr>
            <div class="container">
                <div class="primary-nav">
                    <div class="left">
                        <a href="{{ url('/') }}" id="brand"><img src="/img/logo-invert.png" alt=""></a>
                        <a class="nav-trigger" data-toggle="collapse" href="#primary-nav" aria-expanded="false" aria-controls="primary-nav"><i class="fa fa-navicon"></i></a>
                    </div>
                    <div class="left">
                        <h4>Local Escape Extranet</h4>
                    </div>
                    <!--end left-->
                    <div class="right" >
                        <nav id="primary-nav">
                            @if (Auth::guard('extranet')->check()) 
                            <ul>
                                <li class="active"><a href="{{ url('/') }}">Go Back Home </a></li>
                                <li>
                                    <a href="{{ url('/extranet/accommodations') }}" class="has-child">Accommodations</a>
                                    <ul class="child-nav">
                                        <li><a href="{{ url('/extranet/accommodations') }}">View All</a></li>
                                        <li><a href="{{ url('/extranet/accommodations/add') }}">Add New</a></li>
                                    </ul>
                                </li>
                                <li><a href="{{ url('/extranet/bookings') }}">Bookings</a></li>
                                <li><a href="{{ url('/extranet/profile') }}">Profile</a></li>
                                <li>
                                    <a href="{{ url('/extranet/logout') }}"
                                        onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>

                                    <form id="logout-form" action="{{ url('/extranet/logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                                <!-- <li><a href="{{ url('/extranet/bookings') }}">Bookings</a></li> -->
                            </ul>   
                            @else
                            <ul>
                                <li class="active"><a href="{{ url('/') }}">Go Back Home</a></li>                                
                                <li><a href="{{ url('/extranet/login') }}">Login</a></li>
                                <li><a href="{{ url('/extranet/register') }}">Register</a></li>
                            </ul> 
                            @endif
                            
                        </nav>
                        <!--end nav-->
                    </div>
                    <!--end right-->
                </div>
                <!--end primary-nav-->
            </div>
            <!--end container-->
        </header>
        <!--end header-->
    </div>