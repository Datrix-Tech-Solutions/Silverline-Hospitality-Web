@extends('Layouts.Master')

@section('content')
    <!-- hero-section -->
    <section class="hero-section about gap">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-12" data-aos="fade-up" data-aos-delay="200" data-aos-duration="300">
                    <div class="about-text">
                        <ul class="crumbs d-flex">
                            <li><a href="index.html">Home</a></li>
                            <li class="two"><a href="index.html"><i class="fa-solid fa-right-long"></i>Contacts</a></li>
                        </ul>
                        <h2>Contact us</h2>
                        <p>If you're looking to elevate your upcoming event with exceptional catering services, you've come
                            to the right place. At Silverline Hospitality, we are passionate about creating extraordinary
                            culinary experiences that leave a lasting impression .</p>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-12">
                            <div class="address">
                                <i class="fa-solid fa-location-dot"></i>
                                <h5>Noit se Nort ey Avenue,
                                    Haaso – West land
                                </h5>
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-8 col-sm-12">
                            <div class="address">
                                <i class="fa-solid fa-envelope"></i>
                                <a href="mailto:info@silverlinehospitality.com">
                                    <h6>info@silverlinehospitality.com</h6>
                                </a>
                                <span>send us an email</span>

                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12">
                            <div class="address">
                                <i class="fa-solid fa-phone"></i>
                                <a href="callto:+14253261627">
                                    <h6>+233 50 3497935
                                    </h6>
                                </a>
                                <span>or</span>
                                <a href="callto:+14253261627">
                                    <h6>+233 50 6835379</h6>
                                </a>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-12" data-aos="fade-up" data-aos-delay="300" data-aos-duration="400">
                    <div class="contact-us-img">
                        <img alt="contacts-img-girl" src="{{ asset('/assets/img/contacts-1.png') }}">
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- contact map -->
    <section class="gap no-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-12" data-aos="fade-up" data-aos-delay="300" data-aos-duration="400">
                    <div class="contact-map-data">
                        <div class="join-courier content">
                            <h3>Get in touch with us</h3>
                            <p>Send us a message</p>
                            <form class="blog-form">
                                <div class="name-form">
                                    <i class="fa-regular fa-user"></i>
                                    <input type="text" name="name" placeholder="Enter your name">
                                </div>
                                <div class="name-form">
                                    <i class="fa-regular fa-envelope"></i>
                                    <input type="text" name="email" placeholder="Enter your email">
                                </div>
                                <textarea placeholder="Enter your message"></textarea>
                                <button class="button-price">Submit</button>
                            </form>

                        </div>
                        <div class="contact-map">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3970.3390099934627!2d-0.21538022439909477!3d5.664019132552799!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xfdf9d49ad279981%3A0xd856c8a04a5ea8d0!2sSilverline%20Resource%20Limited!5e0!3m2!1sen!2sgh!4v1693092557850!5m2!1sen!2sgh"
                                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- subscribe-section -->
@endsection
