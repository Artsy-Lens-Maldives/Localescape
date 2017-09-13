@extends('layouts.app')

@section('content')

        <div class="container">
            <ol class="breadcrumb">
                <li><a href="{{ url('/') }}">Home</a></li>
                <li class="active">Become an Affiliate</li>
            </ol>
            <!--end breadcrumb-->
            <div class="row">
                <div class="col-md-3">
                    <div class="sidebar">
                        <div class="box filter">
                            <h2>About Us</h2>
                            <ul class="links">
                                <li><a href="{{ url('/about-us') }}">About Us</a></li>
                                <li class="active"><a href="{{ url('/become-an-affiliate') }}">Become an Affiliate</a></li>
                                <li><a href="{{ url('/terms-and-conditions') }}">Terms & Conditions</a></li>
                                <li><a href="{{ url('/contact-us') }}">Contact Us</a></li>
                            </ul>
                        </div>
                        <!--end filter-->
                    </div>
                    <!--end sidebar-->
                </div>
                <!--end col-md-3-->
                <div class="col-md-9">
                    <div class="main-content">
                        <div class="title">
                            <h1>Become an Affiliate</h1>
                        </div>
                        <!--end title-->
                        <section>
                            <div class="row">
                                <div class="col-md-4 col-sm-4">
                                    <div class="feature-simple">
                                        <div class="circle">
                                            <span>1</span>
                                            <div class="bg color dark opacity-30"></div>
                                        </div>
                                        <h3>Register</h3>
                                        <p>Consectetur adipiscing elit. Vivamus nec augue ac dui sodales euismod.
                                            Suspendisse at dui sit amet.
                                        </p>
                                        <a href="#register" class="btn btn-framed btn-small btn-default btn-rounded">Register Now</a>
                                    </div>
                                    <!--feature-simple-->
                                </div>
                                <!--col-md-4-->
                                <div class="col-md-4 col-sm-4">
                                    <div class="feature-simple">
                                        <div class="circle">
                                            <span>2</span>
                                            <div class="bg color dark opacity-50"></div>
                                        </div>
                                        <h3>Choose a Package</h3>
                                        <p>Integer commodo eleifend erat, vitae tincidunt urna volutpat et. Mauris laoreet,
                                            sem ut sodales sodales
                                        </p>
                                        <a href="#choose-a-package" class="scroll btn btn-framed btn-small btn-default btn-rounded">Choose a package</a>
                                    </div>
                                    <!--feature-simple-->
                                </div>
                                <!--col-md-4-->
                                <div class="col-md-4 col-sm-4">
                                    <div class="feature-simple">
                                        <div class="circle">
                                            <span>3</span>
                                            <div class="bg color dark opacity-50"></div>
                                        </div>
                                        <h3>Add Your Accommodation</h3>
                                        <p>Aenean non dapibus neque. Praesent tempus aliquet felis, auctor aliquet ligula
                                            bibendum id. Phasellus ut finibus
                                        </p>
                                        <a href="{{ url('/extranet/submit') }}" class="btn btn-framed btn-small btn-default btn-rounded">Add Accommodation</a>
                                    </div>
                                    <!--feature-simple-->
                                </div>
                                <!--col-md-4-->
                            </div>
                        </section>
                        <hr>
                        <section id="choose-a-package">
                            <h2>Choose a Package</h2>
                            <div class="table-responsive pricing-table">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th class="width-50 opacity-50">
                                                <span class="title">Service</span>
                                            </th>
                                            <th class="section">
                                                <span class="title">Basic</span>
                                                <span class="price">$19.90</span>
                                                <span class="appendix">/year</span>
                                            </th>
                                            <th class="section">
                                                <span class="title">Medium
                                                    <span class="mark-circle top" data-toggle="tooltip" data-placement="right" title="Top"><i class="fa fa-thumbs-up"></i></span>
                                                </span>
                                                <span class="price">$39.90</span>
                                                <span class="appendix">/year</span>
                                            </th>
                                            <th class="section">
                                                <span class="title">Professional</span>
                                                <span class="price">$69.90</span>
                                                <span class="appendix">/year</span>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Number of accommodations<i class="fa fa-question-circle tooltip-question" data-toggle="tooltip" data-placement="right" title="Nam quis ipsum ac sem ornare efficitur et vel mauris. Proin nibh arcu, vulputate eget massa sed."></i></td>
                                            <td>1</td>
                                            <td>10</td>
                                            <td>Unlimited</td>
                                        </tr>
                                        <tr>
                                            <td>Number of photos in gallery<i class="fa fa-question-circle tooltip-question" data-toggle="tooltip" data-placement="right" title="Nam quis ipsum ac sem ornare efficitur et vel mauris. Proin nibh arcu, vulputate eget massa sed."></i></td>
                                            <td>5</td>
                                            <td>10</td>
                                            <td>Unlimited</td>
                                        </tr>
                                        <tr>
                                            <td>Availability change<i class="fa fa-question-circle tooltip-question" data-toggle="tooltip" data-placement="right" title="Nam quis ipsum ac sem ornare efficitur et vel mauris. Proin nibh arcu, vulputate eget massa sed."></i></td>
                                            <td class="not-available"><i class="fa fa-times"></i></td>
                                            <td class="available"><i class="fa fa-check"></i></td>
                                            <td class="available"><i class="fa fa-check"></i></td>
                                        </tr>
                                        <tr>
                                            <td>Statistics<i class="fa fa-question-circle tooltip-question" data-toggle="tooltip" data-placement="right" title="Nam quis ipsum ac sem ornare efficitur et vel mauris. Proin nibh arcu, vulputate eget massa sed."></i></td>
                                            <td class="not-available"><i class="fa fa-times"></i></td>
                                            <td class="available"><i class="fa fa-check"></i></td>
                                            <td class="available"><i class="fa fa-check"></i></td>
                                        </tr>
                                        <tr>
                                            <td>Featured Accommodation<i class="fa fa-question-circle tooltip-question" data-toggle="tooltip" data-placement="right" title="Nam quis ipsum ac sem ornare efficitur et vel mauris. Proin nibh arcu, vulputate eget massa sed."></i></td>
                                            <td class="not-available"><i class="fa fa-times"></i></td>
                                            <td class="not-available"><i class="fa fa-times"></i></td>
                                            <td class="available"><i class="fa fa-check"></i></td>
                                        </tr>
                                        <tr>
                                            <td>Always on the home page<i class="fa fa-question-circle tooltip-question" data-toggle="tooltip" data-placement="right" title="Nam quis ipsum ac sem ornare efficitur et vel mauris. Proin nibh arcu, vulputate eget massa sed."></i></td>
                                            <td class="not-available"><i class="fa fa-times"></i></td>
                                            <td class="not-available"><i class="fa fa-times"></i></td>
                                            <td class="available"><i class="fa fa-check"></i></td>
                                        </tr>
                                        <tr class="buttons">
                                            <td class="opacity-30"><strong>Tip:</strong> You can change your package any time</td>
                                            <td><button type="button" class="btn btn-primary btn-rounded">Register</button></td>
                                            <td><button type="button" class="btn btn-primary btn-rounded">Register</button></td>
                                            <td><button type="button" class="btn btn-primary btn-rounded">Register</button></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!--end pricing-table-->
                        </section>
                        <section>
                            <div class="row">
                                <div class="col-md-7 col-sm-7">
                                    <h2>What You Will Get?</h2>
                                    <ul class="bullets">
                                        <li>Maecenas consectetur pellentesque mauris, non molestie sapien</li>
                                        <li>Ut consectetur risus id lorem porttitor, nec hendrerit dolor pulvinar</li>
                                        <li>Ut tristique efficitur nisl, in eleifend eros porta eu. In odio magna</li>
                                        <li>Pellentesque habitant morbi tristique senectus et netus et malesuada</li>
                                        <li>Cras augue magna, vehicula id rhoncus ac, dignissim et ligula.</li>
                                    </ul>
                                </div>
                                <!--end col-md-7-->
                                <div class="col-md-5 col-sm-5">
                                    <h2>Satisfied Clients</h2>
                                    <div class="blockquote-carousel one-item-carousel">
                                        <blockquote>
                                            <p>Nullam nec gravida neque. Praesent neque tellus, consequat sed augue sed, imperdiet facilisis lorem.
                                                Cras a semper ipsum. Aenean sed leo neque. Fusce vitae auctor augue, in aliquam sapien.
                                            </p>
                                            <footer>John Doe</footer>
                                        </blockquote>
                                        <blockquote>
                                            <p>Integer commodo eleifend erat, vitae tincidunt urna volutpat et. Mauris laoreet,
                                                sem ut sodales sodales, massa turpis
                                            </p>
                                            <footer>Suzane Brown</footer>
                                        </blockquote>
                                    </div>
                                    <!--end blockquote-carousel-->
                                </div>
                                <!--end col-md-5-->
                            </div>
                            <!--end row-->
                        </section>
                    </div>
                    <!--end main-content-->
                </div>
                <!--end col-md-9-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->

@endsection