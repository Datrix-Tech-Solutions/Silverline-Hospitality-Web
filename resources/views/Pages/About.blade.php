@extends('Layouts.Master')

<head>
    <title>About</title>
</head>
@section('content')
    <section class="video-section gap ">
        <div class="container mt-5">
            <div class="row align-items-center">
                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200" data-aos-duration="300">
                    <div class="wait-a-minute">
                        <h2>About Us</h2>
                        <p>Silverline Hospitality Ltd is
                            a Ghanaian
                            company established in 2013 as
                            a subsidiary
                            of Silverline Resource Company Ltd, focusing
                            on core areas like Hospitality and Catering
                            Services, Construction, and Procurement
                            . In
                            January 2023
                            , Silverline Resource's Board of
                            Directors decided to separate the Hospitality
                            and Catering operations from Construction
                            and Procurement due to substantial growth
                            .
                            This led to the registration of Silverline
                            Hospitality as an independent entity in
                            March 2023 </p>

                        <p>
                            Since its inception in 2015
                            , Silverline
                            Hospitality has thrived with an impressive
                            client base, having successfully managed
                            over 300 events, served 100
                            ,000 meals, and
                            engaged
                            8 corporate clients
                            .
                        </p>
                        </h6>

                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300" data-aos-duration="400">
                    <div class="video-section-img">
                        <img alt="elements" src="{{ asset('/assets/img/about2.png') }}">

                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="about-counters-section gap" style="background-image: url(/assets/img/background-1.png);">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-12 col-sm-12" data-aos="flip-up" data-aos-delay="200" data-aos-duration="300">
                    <div class="about-counters-img">
                        <img alt="girl" src="{{ asset('/assets/img/about1.png') }}">
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12" data-aos="flip-up" data-aos-delay="300" data-aos-duration="400">
                    <div class="row">


                        <div class="row">
                            <div class="count-time mb-3">
                                <h2>Vision</h2>
                                <p>Our vision is to become the premier catering company known for providing extraordinary
                                    culinary experiences that delight and inspire our clients. </p>
                            </div>
                        </div>
                        <div class="row" data-aos="flip-up" data-aos-delay="300" data-aos-duration="400">
                            <div class="count-time">
                                <h2>Mission </h2>
                                <p>Our mission is to deliver an exceptional culinary experience for our clients with a
                                    dedication to quality, healthy, efficient, and timely delivery of services creating
                                    memorable experiences whiles making a positive impact on society through practising
                                    sustainable practices and active engagement in society initiatives fostering a world
                                    where food brings joy, nourishment, and empowerment to all</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="our-partners-section gap" style="background:#fcfcfc" data-aos="fade-up" data-aos-delay="200"
        data-aos-duration="300">
        <div class="container">
            <div class="hading">
                <h2>Our trusted clients</h2>
            </div>
            <div class="row align-items-center justify-content-center logodata owl-carousel owl-theme">
                <div class="col-xl-12 item">
                    <div class="logo-img">
                        <img alt="logo-img" src="{{ asset('/assets/img/clients/askpar.jpg') }}">

                    </div>
                </div>
                <div class="col-xl-12 item">
                    <div class="logo-img">
                        <img alt="logo-img" src="{{ asset('/assets/img/clients/TBH.png') }}">

                    </div>
                </div>
                <div class="col-xl-12 item">
                    <div class="logo-img">
                        <img alt="logo-img" src="{{ asset('/assets/img/clients/apolonia.png') }}">

                    </div>
                </div>

                <div class="col-xl-12 item">
                    <div class="logo-img">
                        <img alt="logo-img" src="{{ asset('/assets/img/clients/HUBTEL.png') }}">

                    </div>

                </div>
                <div class="col-xl-12 item">
                    <div class="logo-img">
                        <img alt="logo-img" src="{{ asset('/assets/img/clients/C&H.jpg') }}">

                    </div>
                </div>
                <div class="col-xl-12 item">
                    <div class="logo-img">
                        <img alt="logo-img" src="{{ asset('/assets/img/clients/dovelyn.jpg') }}">

                    </div>
                </div>
                <div class="col-xl-12 item">
                    <div class="logo-img">
                        <img alt="logo-img" src="{{ asset('/assets/img/clients/irisk.png') }}">

                    </div>
                </div>
            </div>


        </div>
    </section>
@endsection
