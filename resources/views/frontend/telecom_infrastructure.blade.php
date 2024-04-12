@extends('frontend.master')
@section('title',"Contact Us")
@section('content')
    <!-- ======= Intro Section ======= -->
    <section id="intro">
        <div class="intro-container">
            <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">

                <ol class="carousel-indicators"></ol>

                <div class="carousel-inner" role="listbox">

                    <div class="carousel-item active" style="background-image: url(/public/assets/img/intro-carousel/it3.jpg)">
                        <div class="carousel-container">
                            <div class="container">
                                <p class="animate__animated animate__fadeInDown"><strong>Structured Cabling and Installation</strong></p>
                                <p class="animate__animated animate__fadeInUp"> Providing IT system design, installation, and Project management services.</p>

                            </div>
                        </div>
                    </div>

                <    <div class="carousel-item" style="background-image: url(/public/assets/img/intro-carousel/server1.jpg)">
                        <div class="carousel-container">
                            <div class="container">
                                <p class="animate__animated animate__fadeInDown"><strong>Design, Build, Manage, Maintain.</strong></p>
                                <p class="animate__animated animate__fadeInUp">Our experts will meet and exceed your project specifications.</p>
                            </div>
                        </div>
                    </div>

                <!--   <div class="carousel-item" style="background-image: url(/assets/img/intro-carousel/it3.jpg)">
                        <div class="carousel-container">
                            <div class="container">
                                <h2 class="animate__animated animate__fadeInDown"></h2>
                                <p class="animate__animated animate__fadeInUp"></p>
                                <a href="#featured-services" class="btn-get-started scrollto animate__animated animate__fadeInUp">Get Started</a>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item" style="background-image: url(/assets/img/intro-carousel/ntwk3.jpg)">
                        <div class="carousel-container">
                            <div class="container">
                                <h2 class="animate__animated animate__fadeInDown"></h2>
                                <p class="animate__animated animate__fadeInUp"></p>
                                <a href="#featured-services" class="btn-get-started scrollto animate__animated animate__fadeInUp">Get Started</a>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item" style="background-image: url(/assets/img/intro-carousel/ntwk1.jpg)">
                        <div class="carousel-container">
                            <div class="container">
                                <h2 class="animate__animated animate__fadeInDown"></h2>
                                <p class="animate__animated animate__fadeInUp"></p>
                                <a href="#featured-services" class="btn-get-started scrollto animate__animated animate__fadeInUp">Get Started</a>
                            </div>
                        </div>
                    </div>

                </div>

                <a class="carousel-control-prev" href="#introCarousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon ion-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>

                <a class="carousel-control-next" href="#introCarousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon ion-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>

            </div>
        </div>-->
    </section><!-- End Intro Section -->
    <!-- ======= About Us Section ======= -->
    <section id="about">
        <div class="container" data-aos="fade-up">

            <header class="section-header">
                <h3> ICT and Telecommunication</h3>
                <p>TECO is an IT Systems firm that provides cable system design, installation, and project management services over the spectrum of data, voice, & security, and audio & video technologies, encompassing optical fiber and wireless based distribution systems.</p>
            </header>

            <div class="row about-cols">

                <div class="col-md-12" data-aos="fade-up" data-aos-delay="100">
                    <div class="about-col">
                        <div class="img">
                            <img src="{{asset('assets/img/portfolio/yves.jpg')}}" alt="" class="img-fluid">
                          <!--  <div class="icon"><i class="ion-ios-speedometer-outline"></i></div>-->
                        </div>
                        <h2 class="title"><a href="#">We are professional</a></h2>
                        <p>
                            we understand that time is money, and jobs must absolutely stay on schedule.TECO provides peace of mind that no matter what your business, our focus is centered on top quality workmanship, premium manufacturer products, and a timely installation.
                        </p>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End About Us Section -->

    <!-- ======= Featured Services Section Section ======= -->
    <section id="featured-services" style="background-color:#1b6d85">
        <div class="container" style="background-color: yellow">
            <div class="row">

                <div class="col-lg-4 box" style="background-color: #1b6d85" >
                    <!--<i class="ion-ios-bookmarks-outline"></i>-->
                    <h4 class="title"><a href=""><strong>Why TECO </strong> </a></h4>
                    <p class="description">
                        We Install With The Highest Quality,
                        We Work and Drive Safely,
                        We Respect Our Coworkers, Customers, & Everyone We Have Contact With and
                        We Demonstrate Professionalism In all That We Do.

                    </p>
                </div>

                <div class="col-lg-4 box box" style="background-color: #1b6d85">
                    <!-- <i class="ion-ios-stopwatch-outline"></i><-->
                    <h4 class="title"><a href=""><strong> Fully Tested & Documented</strong></a></h4>
                    <p class="description">From site survey and needs assessment to installation and project close out, TECO is with you every step of the way.  At project completion, you will have a fully tested, certified, standards compliant cabling system, as-built drawings including labeling schemes and routing plan, comprehensive test reports, and extended manufacturers warranties on all TECO supplied and installed products.

                    </p>
                </div>

                <div class="col-lg-4 box" style="background-color: #1b6d85">
                    <!--<i class="ion-ios-heart-outline"></i><-->
                    <h4 class="title"><a href=""><strong> Network Design and Implementation</strong></a></h4>
                    <p class="description">From multi building campus environments and to classified clean rooms, TECO has the expertise, resources, and experience to handle any cabling environment.  Cost effective, quick to respond, and flexible in tackling the most challenging IT system installation.</p>
                </div>

            </div>
        </div>
    </section><!-- End Featured Services Section -->


@endsection
@section("scripts")



@endsection
