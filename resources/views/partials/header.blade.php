    <div id="page-header">
        <header>
            <div class="container">
                <div class="secondary-nav">
                    <div class="nav-trigger"><a data-toggle="collapse" href="#secondary-nav" aria-expanded="false" aria-controls="secondary-nav"><i class="fa fa-user"></i></a></div>
                    <div id="secondary-nav">
                        <nav>
                            <div class="left opacity-60">
                                <a href="phone:+9609999777"><i class="fa fa-phone"></i>+960 9999777</a>
                                <a href="mailto:info@localescapemaldives.com"><i class="fa fa-envelope"></i>info@localescapemaldives.com</a>
                            </div>
                            <!--end left-->
                            <div class="right">
                                <div class="element">
                                    <select>
                                        <option>$</option>
                                        <option>€</option>
                                    </select>
                                </div>
                                <!--end element-->
                                <div class="element">
                                    <a href="#tab-sign-in" data-toggle="modal" data-tab="true" data-target="#sign-in-register-modal">Sign In</a>
                                </div>
                                <!--end element-->
                                <div class="element">
                                    <a href="#tab-register" data-toggle="modal" data-tab="true" data-target="#sign-in-register-modal">Register</a>
                                </div>
                                <!--end element-->
                                <div class="element">
                                    <select>
                                        <option>EN</option>
                                        <option>DE</option>
                                        <option>RU</option>
                                        <option>ES</option>
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
                    <!--end left-->
                    <div class="right" >
                        <nav id="primary-nav">
                            <ul>
                                <li class="active"><a href="{{ url('/') }}">Home</a></li>
                                <li><a href="{{ url('/hotels') }}">Hotels</a></li>
                                <li><a href="{{ url('/resorts') }}">Resort</a></li>
                                <li><a href="{{ url('/guest-house') }}">Guest House</a></li>
                                <li>
                                    <a href="{{ url('/tours') }}" class="has-child">Tours</a>
                                    <ul class="child-nav">
                                        <li><a href="{{ url('/tours') }}">Tours</a></li>
                                        <li><a href="{{ url('/diving-package') }}">Diving Package</a></li>
                                        <li><a href="{{ url('/photo-package') }}">Photo Package</a></li>
                                    </ul>
                                </li>
                                <li><a href="{{ url('/blog') }}">Blog</a></li>
                                <li>
                                    <a href="{{ url('/about-us') }}" class="has-child">About Us</a>
                                    <ul class="child-nav">
                                        <li><a href="{{ url('/gallery') }}">Gallery</a></li>
                                    </ul>
                                </li>
                                <li><a href="{{ url('/contact-us') }}">Contact Us</a></li>
                            </ul>
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