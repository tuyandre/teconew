@extends('frontend.master')
@section('title',"Contact Us")
@section('content')
    <!-- ======= Intro Section ======= -->
    <section id="intro">
        <div class="intro-container">
            <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">

                <ol class="carousel-indicators"></ol>

                <div class="carousel-inner" role="listbox">

                    <div class="carousel-item active" style="background-image: url(assets/img/portfolio/v1.jpg)">
                        <div class="carousel-container">
                            <div class="container">
                                <h1 class="animate__animated animate__fadeInDown"></h1>
                                <p class="animate__animated animate__fadeInUp"><strong>Our experts will meet and exceed your project specifications.</strong></p>
                            </div>
                        </div>
                    </div>
                 <!--   < <div class="carousel-item" style="background-image: url(assets/img/intro-carousel/newav1.jpg)">
                        <div class="carousel-container">
                            <div class="container">
                                <h2 class="animate__animated animate__fadeInDown">At vero eos et accusamus</h2>
                                <p class="animate__animated animate__fadeInUp">Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut.</p>
                                <a href="#featured-services" class="btn-get-started scrollto animate__animated animate__fadeInUp">Get Started</a>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item" style="background-image: url(assets/img/intro-carousel/newav1.jpg)">
                        <div class="carousel-container">
                            <div class="container">
                                <h2 class="animate__animated animate__fadeInDown">Temporibus autem quibusdam</h2>
                                <p class="animate__animated animate__fadeInUp">Beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt omnis iste natus error sit voluptatem accusantium.</p>
                                <a href="#featured-services" class="btn-get-started scrollto animate__animated animate__fadeInUp">Get Started</a>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item" style="background-image: url(assets/img/intro-carousel/newav1.jpg)">
                        <div class="carousel-container">
                            <div class="container">
                                <h2 class="animate__animated animate__fadeInDown">Nam libero tempore</h2>
                                <p class="animate__animated animate__fadeInUp">Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum.</p>
                                <a href="#featured-services" class="btn-get-started scrollto animate__animated animate__fadeInUp">Get Started</a>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item" style="background-image: url(assets/img/intro-carousel/5.jpg)">
                        <div class="carousel-container">
                            <div class="container">
                                <h2 class="animate__animated animate__fadeInDown">Magnam aliquam quaerat</h2>
                                <p class="animate__animated animate__fadeInUp">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                <a href="#featured-services" class="btn-get-started scrollto animate__animated animate__fadeInUp">Get Started</a>
                            </div>
                        </div>
                    </div>

                </div>-->

                    <a class="carousel-control-prev" href="#introCarousel" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon ion-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>

                    <a class="carousel-control-next" href="#introCarousel" role="button" data-slide="next">
                        <span class="carousel-control-next-icon ion-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>

                </div>
            </div>
    </section><!-- End Intro Section -->
    <!-- ======= About Us Section ======= -->
    <section id="about">
        <div class="container" data-aos="fade-up">

            <header class="section-header">
                <h3>Audio visual installation</h3>
                <p> TECO team is here for all of your audio visual installation needs! No matter the size of the project, we follow the same methodical installation process to ensure precision from preparation to operation. When it comes to technology, first use should inspire future use. Your employees should feel confident while using all workplace audio visual applications so that your business can run effectively. That’s why our installation process is designed to make sure your new or updated technology is intuitive and easy to use for everyone.
                    Our team can install audio visual systems in any type of environment including schools, commercial offices, enterprise-level workplaces, healthcare facilities and beyond.
                </p>

                <div class="row about-cols">

                    <div class="col-md-12" data-aos="fade-up" data-aos-delay="100">
                        <div class="about-col">
                            <div class="img">
                                <img src="{{asset('assets/img/portfolio/v3.png')}}" alt="" class="img-fluid">

                                <!--<div class="icon"><i class="ion-ios-speedometer-outline"></i></div><--!>
                            </div>
                            <h2 class="title"><a href="#">We are professional </a></h2>
                            <p>
                                We follow a methodical process, putting every audio visual installation project through four phases to ensure full compliance with standards set by the industry as well as the client..
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
                    <h4 class="title"><a href=""><strong>Video Conferencing </strong> </a></h4>
                    <p class="description">Implement the latest conferencing technology for maximum reliability, collaboration and productivity.</p>
                </div>

                <div class="col-lg-4 box box" style="background-color: #1b6d85">
                    <!-- <i class="ion-ios-stopwatch-outline"></i><-->
                    <h4 class="title"><a href=""><strong> Masking & Absorption</strong></a></h4>
                    <p class="description"> Reduce noise disturbance and distractions while protecting speech privacy and improving office comfort.</p>
                </div>

                <div class="col-lg-4 box" style="background-color: #1b6d85">
                    <!--<i class="ion-ios-heart-outline"></i><-->
                    <h4 class="title"><a href=""><strong> Signage</strong></a></h4>
                    <p class="description">Engage and impress with modern display tactics to communicate various types of messaging.</p>
                </div>

            </div>
        </div>
    </section><!-- End Featured Services Section -->


@endsection
@section("scripts")



@endsection
