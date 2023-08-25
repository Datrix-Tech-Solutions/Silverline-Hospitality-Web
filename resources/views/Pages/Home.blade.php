@extends('Layouts.Master')

@section('content')
    <section class="hero-section gap" style="background-image: url(/assets/img/background-1.png);">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200" data-aos-duration="300">
                    <div class="restaurant">
                        <h1>Silverline Hospitality Ltd</h1>
                        <p>Silverline Hospitality Ltd is
                            a Ghanaian
                            company established in 2013 as
                            a subsidiary
                            of Silverline Resource Company Ltd, focusing
                            on core areas like Hospitality and Catering
                            Services ...</p>
                        <div class="nice-select-one">

                            <a href="#" class="button button-2">Learn more</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300" data-aos-duration="400">
                    <div class="img-restaurant">
                        <img alt="man" style="height:720px; border-radius: 40px;"
                            src="{{ asset('/assets/img/1.jpg') }}">
                        <div class="wilmington">
                            <img alt="img" src="https://via.placeholder.com/90x90">
                            <div>
                                <p>Restaurant of the Month</p>
                                <h6>The Wilmington</h6>
                                <div>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-regular fa-star-half-stroke"></i>
                                </div>
                            </div>
                        </div>
                        <div class="wilmington location-restaurant">
                            <i class="fa-solid fa-location-dot"></i>
                            <div>
                                <h6>12 Restaurant</h6>
                                <p>In Your city</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="posts-section-blog gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-12" data-aos="fade-up" data-aos-delay="200" data-aos-duration="300">
                    <div class="news-posts-one full">
                        <div class="blog-post-data-img">
                            <img alt="man" src="{{ asset('/assets/img/3.jpg') }}">

                        </div>
                        <div class="blog-post-data-img">
                            <h3>We Have Received An Award For The Quality Of Our Work</h3>
                            <p>At Silverline hospitality, we take pride in offering a premier catering service specifically
                                tailored to meet the unique dietary needs and preferences of your esteemed staff. with our
                                unwavering commitment to excellence, we promise to deliver an exceptional dining experience
                                that surpasses expectations in every way.
                            </p>
                            <a href="#">Read More<i class="fa-solid fa-arrow-right"></i></a>

                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12" data-aos="flip-up" data-aos-delay="200"
                    data-aos-duration="300">
                    <div class="news-posts-one blog">
                        <img alt="man" src="{{ asset('/assets/img/4.jpg') }}">

                        <h3>With Quickeat you can order food for the whole day</h3>
                        <p>Scelerisque purus semper eget duis at. Tincidunt ornare massa eget egestas purus viverra. Morbi
                            enim nunc faucibus a pellentesque. Lobortis elementum nibh tellus molestie nunc non...</p>
                        <a href="#">Read More<i class="fa-solid fa-arrow-right"></i></a>


                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12" data-aos="flip-up" data-aos-delay="300"
                    data-aos-duration="400">
                    <div class="news-posts-one blog">
                        <img alt="man" src="{{ asset('/assets/img/5.jpg') }}">

                        <h3>127+ Couriers On Our Team Big Food Trends</h3>
                        <p>Scelerisque purus semper eget duis at. Tincidunt ornare massa eget egestas purus viverra. Morbi
                            enim nunc faucibus a pellentesque. Lobortis elementum nibh tellus molestie nunc non...</p>
                        <a href="#">Read More<i class="fa-solid fa-arrow-right"></i></a>


                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12" data-aos="flip-up" data-aos-delay="400"
                    data-aos-duration="500">
                    <div class="news-posts-one blog">
                        <img alt="man" src="{{ asset('/assets/img/6.jpg') }}">

                        <h3>Why You Should Optimize Your Menu for Delivery</h3>
                        <p>Scelerisque purus semper eget duis at. Tincidunt ornare massa eget egestas purus viverra. Morbi
                            enim nunc faucibus a pellentesque. Lobortis elementum nibh tellus molestie nunc non...</p>
                        <a href="#">Read More<i class="fa-solid fa-arrow-right"></i></a>


                    </div>

                </div>
            </div>
    </section>
    <!-- works-section -->


    <!-- join-partnership -->
    <section class="join-partnership gap" style="background-color: #363636;">
        <div class="container">
            <h2>Healthy Food, Healthy Life</h2>
            <div class="row">
                <div class="col-lg-6" data-aos="flip-up" data-aos-delay="200" data-aos-duration="300">
                    <div class="join-img">
                        <img alt="img" src="{{ asset('/assets/img/img1.jpg') }}">
                        <div class="Join-courier">

                            <a href="become-partner.html" class="button button-2">Learn More <i
                                    class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6" data-aos="flip-up" data-aos-delay="300" data-aos-duration="400">
                    <div class="join-img">
                        <img alt="img" src="{{ asset('/assets/img/img2.jpg') }}">
                        <div class="Join-courier">

                            <a href="become-partner.html" class="button button-2">Learn More <i
                                    class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
