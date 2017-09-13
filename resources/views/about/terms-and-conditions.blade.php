@extends('layouts.app')

@section('content')

        <div class="container">
            <ol class="breadcrumb">
                <li><a href="{{ url('/') }}">Home</a></li>
                <li class="active">Terms and Conditions</li>
            </ol>
            <!--end breadcrumb-->
            <div class="row">
                <div class="col-md-3">
                    <div class="sidebar">
                        <div class="box filter">
                            <h2>About Us</h2>
                            <ul class="links">
                                <li><a href="{{ url('/about-us') }}">About Us</a></li>
                                <li><a href="{{ url('/become-an-affiliate') }}">Become an Affiliate</a></li>
                                <li class="active"><a href="{{ url('/terms-and-conditions') }}">Terms & Conditions</a></li>
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
                            <h1>Terms & Conditions</h1>
                        </div>
                        <!--end title-->
                        <section>
                            <h2>Welcome to Accommodation Portal!</h2>
                            <p>These terms and conditions outline the rules and regulations for the use of Accommodation Portal's Website.
                                Accommodation Portal is located at:</p>
                            <p>
                                <i>2708 Burwell Heights Road,<br>
                                Warren, TX 77664<br>
                                United States<br></i>
                            </p>
                            <p>By accessing this website we assume you accept these terms and conditions in full. Do not continue to use Accommodation Portal's website if you do not accept all of the terms and conditions stated on this page.</p>
                            <p>The following terminology applies to these Terms and Conditions, Privacy Statement and Disclaimer Notice and any or all Agreements: "Client", “You” and “Your” refers to you, the person accessing this website and accepting the Company’s terms and conditions. "The Company", “Ourselves”, “We”, “Our” and "Us", refers to our Company. “Party”, “Parties”, or “Us”, refers to both the Client and ourselves, or either the Client or ourselves. All terms refer to the offer, acceptance and consideration of payment necessary to undertake the process of our assistance to the Client in the most appropriate manner, whether by formal meetings of a fixed duration, or any other means, for the express purpose of meeting the Client’s needs in respect of provision of the Company’s stated services/products, in accordance with and subject to, prevailing law of United States. Any use of the above terminology or other words in the singular, plural, capitalisation and/or he/she or they, are taken as interchangeable and therefore as referring to same.</p>
                        </section>
                        <section>
                            <h2>Cookies</h2>
                            <p>We employ the use of cookies. By using Accommodation Portal's website you consent to the use of cookies in accordance with Accommodation Portal’s privacy policy.
                                <br><br>
                                Most of the modern day interactive web sites use cookies to enable us to retrieve user details for each visit. Cookies are used in some areas of our site to enable the functionality of this area and ease of use for those people visiting. Some of our affiliate / advertising partners may also use cookies.</p>
                        </section>
                        <section>
                            <h2>License</h2>
                            <p>Unless otherwise stated, Accommodation Portal and/or it’s licensors own the intellectual property rights for all material on Accommodation Portal All intellectual property rights are reserved. You may view and/or print pages from http://www.example.com for your own personal use subject to restrictions set in these terms and conditions.</p>
                            <p>You must not:</p>
                            <ul class="bullets">
                                <li>Republish material from http://www.example.com</li>
                                <li>Sell, rent or sub-license material from http://www.example.com</li>
                                <li>Reproduce, duplicate or copy material from http://www.example.com</li>
                            </ul>
                            <p>Redistribute content from Accommodation Portal (unless content is specifically made for redistribution).</p>
                        </section>
                        <section>
                            <h2>User Comments</h2>
                            <ol>
                                <li>This Agreement shall begin on the date hereof.</li>
                                <li>Certain parts of this website offer the opportunity for users to post and exchange opinions, information, material and data ('Comments') in areas of the website. Accommodation Portal does not screen, edit, publish or review Comments prior to their appearance on the website and Comments do not reflect the views or opinions of Accommodation Portal, its agents or affiliates. Comments reflect the view and opinion of the person who posts such view or opinion. To the extent permitted by applicable laws Accommodation Portal shall not be responsible or liable for the Comments or for any loss cost, liability, damages or expenses caused and or suffered as a result of any use of and/or posting of and/or appearance of the Comments on this website.</li>
                                <li>Accommodation Portal reserves the right to monitor all Comments and to remove any Comments which it considers in its absolute discretion to be inappropriate, offensive or otherwise in breach of these Terms and Conditions.</li>
                                <li>You warrant and represent that:
                                    <ol>
                                        <li>You are entitled to post the Comments on our website and have all necessary licenses and consents to do so;</li>
                                        <li>The Comments do not infringe any intellectual property right, including without limitation copyright, patent or trademark, or other proprietary right of any third party;</li>
                                        <li>The Comments do not contain any defamatory, libelous, offensive, indecent or otherwise unlawful material or material which is an invasion of privacy</li>
                                        <li>The Comments will not be used to solicit or promote business or custom or present commercial activities or unlawful activity.</li>
                                    </ol>
                                </li>
                                <li>You hereby grant to Accommodation Portal a non-exclusive royalty-free license to use, reproduce, edit and authorize others to use, reproduce and edit any of your Comments in any and all forms, formats or media.</li>
                            </ol>
                        </section>
                        <section>
                            <h2>Reservation of Rights</h2>
                            <p>We reserve the right at any time and in its sole discretion to request that you remove all links or any particular link to our Web site. You agree to immediately remove all links to our Web site upon such request. We also reserve the right to amend these terms and conditions and its linking policy at any time. By continuing to link to our Web site, you agree to be bound to and abide by these linking terms and conditions.</p>
                        </section>
                        <section>
                            <h2>Removal of links from our website</h2>
                            <p>If you find any link on our Web site or any linked web site objectionable for any reason, you may contact us about this. We will consider requests to remove links but will have no obligation to do so or to respond directly to you.

                                Whilst we endeavour to ensure that the information on this website is correct, we do not warrant its completeness or accuracy; nor do we commit to ensuring that the website remains available or that the material on the website is kept up to date.</p>
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