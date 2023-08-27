@extends('Layouts.Master')

@section('content')
    <!-- Our Team Section -->
    <section class="our-team-section gap ">
        <div class="container">
            <div class="hading pt-5 mb-5" data-aos="fade-up" data-aos-delay="200" data-aos-duration="300">
                <h2 class="pt-5 ">Our team</h2>

            </div>
            <div class="row">
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12" data-aos="fade-up" data-aos-delay="200"
                    data-aos-duration="300">
                    <div class="our-team">
                        <img alt="team-img" src="{{ asset('/assets/img/team1.jpg') }}">
                        <h4><a href="#">ELIZABETH BREW-SMITH</a></h4>
                        <p>Chief Executive Officer</p>

                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12" data-aos="fade-up" data-aos-delay="300"
                    data-aos-duration="400">
                    <div class="our-team">
                        <img alt="team-img" src="{{ asset('/assets/img/team2.jpg') }}">
                        <h4><a href="#">LOUISA ASAMOAH</a></h4>
                        <p>General Manager</p>

                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12" data-aos="fade-up" data-aos-delay="400"
                    data-aos-duration="500">
                    <div class="our-team">
                        <img alt="team-img" src="{{ asset('/assets/img/team3.jpg') }}">
                        <h4><a href="#">FREDERICKA SERWAA
                                OTOO
                            </a></h4>
                        <p>In-House Dietician</p>

                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12" data-aos="fade-up" data-aos-delay="400"
                    data-aos-duration="500">
                    <div class="our-team">
                        <img alt="team-img" src="{{ asset('/assets/img/team4.jpg') }}">
                        <h4><a href="#">JULIUS MAWYEOGBA</a></h4>
                        <p>Head Chef</p>


                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
