@extends('Layouts.Master')


@section('content')
    <!-- hero-section -->
    <section class="hero-section about gap" style="background-image: url(assets/img/background.png);">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-12" data-aos="fade-up" data-aos-delay="200" data-aos-duration="300">
                    <div class="about-text">
                        <ul class="crumbs d-flex">
                            <li><a href="{{ route('home') }}l">Home</a></li>
                            <li class="two"><a href="{{ route('services') }}"><i
                                        class="fa-solid fa-right-long"></i>Service</a></li>
                        </ul>
                        <h2>Our Services</h2>
                        <p>We specialize in creating unforgettable themed meals and catering for special events. Our
                            culinary team crafts
                            memorable menus, while also offering dietary workshops and seminars to promote well-being. We
                            provide on-site catering
                            services with quick and tasty options at stands during breaks.
                            From corporate events to celebrations, we offer tailored services for meetings, conferences, and
                            various occasions.</p>
                        <a href="{{ route('contact') }}" class="button button-2">Contact us</a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12" data-aos="fade-up" data-aos-delay="300" data-aos-duration="400">
                    <div class="hero-section-img-service">
                        <div class="row align-items-center">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                <div class="counter-img">
                                    <img alt="man" src="{{ asset('/assets/img/4.jpg') }}">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                <div class="counter-img-data">

                                    <span>catering <br> services</span>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                <div class="counter-img-data black">

                                    <span>Dietry <br>Workshops &<br>
                                        Seminars
                                    </span>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                <div class="counter-img">
                                    <img alt="man" src="{{ asset('/assets/img/5.jpg') }}">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Services Cards -->
    <section class="posts-section-blog gap mb-0">
        <div class="container">
            <div class="row">

                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12" data-aos="flip-up" data-aos-delay="200"
                    data-aos-duration="300">
                    <div class="news-posts-one blog">
                        <img alt="man" src="{{ asset('/assets/img/4.jpg') }}">

                        <h3>Tailored Themed Meals and Event Catering</h3>
                        <p>Our culinary team creates memorable themed meals and event catering</p>
                        <a href="#">Read More<i class="fa-solid fa-arrow-right"></i></a>


                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12" data-aos="flip-up" data-aos-delay="300"
                    data-aos-duration="400">
                    <div class="news-posts-one blog">
                        <img alt="man" src="{{ asset('/assets/img/5.jpg') }}">

                        <h3>Dietary Workshops and Seminars</h3>
                        <p>Promoting well-being through informative seminars.
                            .</p>
                        <a href="#">Read More<i class="fa-solid fa-arrow-right"></i></a>


                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12" data-aos="flip-up" data-aos-delay="400"
                    data-aos-duration="500">
                    <div class="news-posts-one blog">
                        <img alt="man" src="{{ asset('/assets/img/6.jpg') }}">

                        <h3>Catering for Corperate Events and Celebrations</h3>
                        <p>Tailored services for meetings, conferences, and celebrations.
                            .</p>
                        <a href="#">Read More<i class="fa-solid fa-arrow-right"></i></a>


                    </div>

                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12" data-aos="flip-up" data-aos-delay="400"
                    data-aos-duration="500">
                    <div class="news-posts-one blog">
                        <img alt="man" src="{{ asset('/assets/img/6.jpg') }}">

                        <h3>On-Site Catering Services</h3>
                        <p>Quick, tasty options at onsite stands during breaks.
                        </p>
                        <a href="#">Read More<i class="fa-solid fa-arrow-right"></i></a>


                    </div>

                </div>
            </div>
    </section>
    <section class="sit-at-home-section  pb-5">
        <div class="container">
            <div class="d-flex   justify-content-center mb-4">
                <h2>TECHNOLOGIES WE DEPLOY</h2>

            </div>
            <hr>
            <div class="row align-items-center  pb-5">
                <div class="col-xl-6 col-lg-12" data-aos="flip-up" data-aos-delay="200" data-aos-duration="300">

                    <img style="border-radius: 50px" alt="meal portal" src="{{ asset('/assets/img/sh portal.jpg') }}">


                </div>
                <div class="offset-xl-1 col-xl-5 col-lg-12" data-aos="flip-up" data-aos-delay="300" data-aos-duration="400">
                    <div class="sit-at-home-description">
                        <h2>Meal Request Portal</h2>
                        <div class="services-cards-text pb-0">
                            <p>To elevate customer service at Silverline Hospitality
                                Limited, we've introduced a cutting-edge meal
                                request portal. This innovative digital platform is
                                meticulously crafted to streamline the seamless
                                submission, processing, and adept management of
                                mealrequests initiated by our valuedpatrons.
                            </p>

                            <ul class="paragraph">
                                <p>The core functionalities encompass:</p>
                                <li><i class="fa-solid fa-circle-check"></i>
                                    <h5>Customer Real-time access to Menu through
                                        QR Code </h5>
                                </li>
                                <li><i class="fa-solid fa-circle-check"></i>
                                    <h5>Easily collaborate with the procurement unit to
                                        update the menu</h5>
                                </li>

                            </ul>
                            <p></p>
                        </div>


                    </div>

                </div>
            </div>
            <hr>

            <div class="row align-items-center mt-5 pb-5">


                <div class="col-xl-6 col-lg-12" data-aos="flip-up" data-aos-delay="200" data-aos-duration="300">

                    <img style="border-radius: 50px" alt="meal portal" src="{{ asset('/assets/img/sh portal.jpg') }}">


                </div>
                <div class="offset-xl-1 col-xl-5 col-lg-12" data-aos="flip-up" data-aos-delay="300"
                    data-aos-duration="400">

                    <div class="sit-at-home-description">
                        <h2>Customer Feedback Portal
                        </h2>
                        <div class="services-cards-text">
                            <p>Our Customer FeedbackPortal:
                                Experience 24/7 access to the customer
                                feedback portal for instant feedback
                                submission, swift acknowledgement,
                                and prompt resolution of concerns.
                            </p>

                            <ul class="paragraph">
                                <p>How it works:</p>
                                <li><i class="fa-solid fa-circle-check"></i>
                                    <h5>Scan the QR Code to access the
                                        customerfeedbackportal.
                                    </h5>
                                </li>
                                <li><i class="fa-solid fa-circle-check"></i>
                                    <h5>Submit Your Feedback</h5>
                                </li>

                            </ul>
                            <p></p>
                        </div>


                    </div>
                </div>
            </div>
            <hr>
        </div>
    </section>
@endsection
