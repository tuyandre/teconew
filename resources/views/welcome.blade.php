@extends('frontend.master')
@section('title',"TECO Ltd")
@section('content')
    <style>
        #portfolio .portfolio-item figure {
            background: #000;
            overflow: hidden;
            height: auto;
            position: relative;
            border-radius: 4px 4px 0 0;
            margin: 0;
        }

        .div-hide {
            display: none;
        }
    </style>
    <!-- ======= Intro Section ======= -->
    <section id="intro">
        <div class="intro-container">
            <div id="introCarousel" class="carousel slide carousel-fade" data-ride="carousel">

                <ol class="carousel-indicators"></ol>

                <div class="carousel-inner" role="listbox">

                    <div class="carousel-item active" style="background-image: url({{asset('img/intro-carousel/CC1.png')}})">
                        <div class="carousel-container"><br><br>
                            <div class="container">
                                <h1 class="animate__animated animate__fadeInDown"></h1>
                                <p class="animate__animated animate__fadeInUp"></p>
                                <a href="#featured-services"
                                   class="btn-get-started scrollto animate__animated animate__fadeInUp">Get Started</a>
                            </div>
                        </div>
                    </div>


                    <div class="carousel-item" style="background-image: url({{ asset('assets/img/intro-carousel/tric2.png') }})">
                        <div class="carousel-container">
                            <div class="container">
                                <h2 class="animate__animated animate__fadeInDown"></h2>
                                <p class="animate__animated animate__fadeInUp"></p>
                                <a href="#featured-services"
                                   class="btn-get-started scrollto animate__animated animate__fadeInUp">Get Started</a>
                            </div>
                        </div>
                    </div>



                    <div class="carousel-item" style="background-image: url({{ asset('assets/img/portfolio/yves.jpg') }})">
                        <div class="carousel-container">
                            <div class="container">
                                <h2 class="animate__animated animate__fadeInDown"><strong>Structured Cabling and Installation</strong></h2>
                                <p class="animate__animated animate__fadeInUp">Providing IT system design, installation, and Project management services.</p>
                                <a href="#featured-services"
                                   class="btn-get-started scrollto animate__animated animate__fadeInUp">Get Started</a>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item" style="background-image: url({{ asset('assets/img/intro-carousel/ofav.png') }})">
                        <div class="carousel-container">
                            <div class="container">
                                <h2 class="animate__animated animate__fadeInDown"></h2>
                                <p class="animate__animated animate__fadeInUp"></p>
                                <a href="#featured-services"
                                   class="btn-get-started scrollto animate__animated animate__fadeInUp">Get Started</a>
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
        </div>
    </section><!-- End Intro Section -->















    <main id="main">

        <!-- ======= Featured Services Section Section ======= -->
        <section id="featured-services">
            <div class="container">
                <div class="row">

                    <div class="col-lg-4 box">
                        <i class="ion-ios-bookmarks-outline"></i>
                        <h4 class="title"><a href="">Our Mission</a></h4>
                        <p class="description">
                            TECO Ltd aim to make people embracing digital transformation, transforming communities.
                            Technologies that offer opportunities to realize integration of Rwanda and the continent
                            faster and smarter.
                        </p>
                    </div>

                    <div class="col-lg-4 box box-bg">
                        <i class="ion-ios-calendar-outline"></i>
                        <h4 class="title"><a href="">Our Plan</a></h4>
                        <p class="description">
                            Our fully integrated teams take full control of a project, from advisory services to design
                            and construction.
                        </p>
                    </div>

                    <div class="col-lg-4 box">
                        <i class="ion-ios-eye-outline"></i>
                        <h4 class="title"><a href="">Our Vision</a></h4>
                        <p class="description">
                            Whoever the client. Wherever they are. However harsh the environment they operate in. We’re
                            committed to keeping them connected. Every day, we all have the chance to bring our vision
                            to life in our actions.
                        </p>
                    </div>

                </div>
            </div>
        </section><!-- End Featured Services Section -->

        <!-- ======= About Us Section ======= -->
        <section id="about">
            <div class="container" data-aos="fade-up">

                <header class="section-header">
                    <h3 class="text-danger">About Us</h3>
                    <p>
                        TECHNO ENGINEERING COMPANY (TECO Ltd) is privately owned firm established in 2014,which began
                        its services by serving Rwandan's ICT/Telecom infrastructure,Audio visual,Construction and
                        Biomedical system integrator services .Since then, TECO has focused on growing and expanding its
                        professional services.<br>
                        TECO Ltd was founded on core values of integrity, client focus, teamwork, and sustained
                        excellence.It realizes the extensive growth over the years through the rigorous pursuit of
                        catering to the needs of the clients by adjusting to the dynamically changing
                        environment.<br><br>
                        Techno Engineering Company (TECO Ltd)takes pride in establishing the highest standard of business
                        professionals in its roots through which it has been providing the utmost level of performance.
                    </p>
                </header>
            </div>
        </section><!-- End About Us Section -->

        <!-- ======= Services Section ======= -->
        <section id="services">
            <div class="container" data-aos="fade-up">

                <header class="section-header wow fadeInUp">
                    <h3 class="text-danger">Services</h3>
                    <p></p>
                </header>
                <div class="row">

                    <div class="col-md-6 box aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
                        <div class="icon"><i class="ion ion-laptop"></i></div>
                        <h4 class="title">
                            <a href="{{route('telecom_infrastructure')}}">
                                ICT/Telecom Infrastructure
                            </a>
                        </h4>
                        <p class="description">
                            TECO has carried out various ICT/Telecom Infrastructure projects such as Fiber network
                            projects,network cabling,CCTV systems and other services related to ICT.
                            <br>
                            <a href="{{route('telecom_infrastructure')}}"
                               class="btn btn-sm btn-outline-danger rounded-0 text- my-2">
                                Learn More &rarr;
                            </a>
                        </p>

                    </div>

                    <div class="col-md-6 box aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
                        <div class="icon"><i class="ion ion-music-note"></i></div>
                        <h4 class="title"><a href="{{route('Audio')}}">Audio Visual System Installation</a></h4>
                        <p class="description">
                            Regional authorized Audio Visual and call Centers (AVC) systems integrators and we believe
                            that collaboration technology and smart environments enable people and businesses to work
                            more efficiently together in everyday life
                            <br>
                            <a href="{{route('Audio')}}" class="btn btn-sm btn-outline-danger rounded-0 text- my-2">
                                Learn More &rarr;
                            </a>
                        </p>
                    </div>
                    <div class="col-md-6 box aos-init aos-animate" data-aos="fade-up" data-aos-delay="300">
                        <div class="icon"><i class="ion ion-ios-home-outline"></i></div>
                        <h4 class="title"><a href="{{route('construction')}}">Construction</a></h4>
                        <p class="description">
                            Building conception (design),Building constructions activities and Construction materials
                            supply such as stones,aggregates(crushed)...
                            <br>
                            <a href="{{route('construction')}}"
                               class="btn btn-sm btn-outline-danger rounded-0 text-sm my-2">
                                Learn More &rarr;
                            </a>
                        </p>
                    </div>
                    <div class="col-md-6 box aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
                        <div class="icon"><i class="ion ion-heart-broken"></i></div>
                        <h4 class="title"><a href="{{route('Biomedical')}}">Biomedical</a></h4>
                        <p class="description">
                            Centralized patient monitoring system,Medical equipment supply and maintenance and Medical equipment planning
                            <br>
                            <a href="{{route('Biomedical')}}" class="btn btn-sm btn-outline-danger rounded-0  my-2">
                                Learn More &rarr;
                            </a>
                        </p>
                    </div>

                </div>


            </div>


        </section><!-- End Services Section -->


        <!-- ======= Portfolio Section ======= -->
        <!-- <section id="portfolio" class="section-bg">
             <div class="container" data-aos="fade-up">

                 <header class="section-header">
                     <h3 class="section-title text-danger">Projects</h3>
                 </header>

                 <div class="row" data-aos="fade-up" data-aos-delay="100">
                 </div>

                 <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

                     <div class="col-lg-3 col-md-6 portfolio-item filter-app">
                         <div class="portfolio-wrap">
                             <figure>
                                 <img src="assets/img/portfolio/app1.jpg" class="img-fluid" alt="">
                                 <a href="assets/img/portfolio/app1.jpg" data-lightbox="portfolio" data-title="App 1"
                                    class="link-preview"><i class="ion ion-eye"></i></a>
                                 <a href="portfolio-details.html" class="link-details" title="More Details"><i
                                         class="ion ion-android-open"></i></a>
                             </figure>

                             <div class="portfolio-info">
                                 <h4><a href="portfolio-details.html">
                                         Project 1
                                     </a></h4>
                                 <p>App</p>
                             </div>
                         </div>
                     </div>
                     <div class="col-lg-3 col-md-6 portfolio-item filter-web">
                         <div class="portfolio-wrap">
                             <figure>
                                 <img src="assets/img/portfolio/web3.jpg" class="img-fluid" alt="">
                                 <a href="assets/img/portfolio/web3.jpg" class="link-preview venobox"
                                    data-gall="portfolioGallery" title="Web 3"><i class="ion ion-eye"></i></a>
                                 <a href="portfolio-details.html" class="link-details" title="More Details"><i
                                         class="ion ion-android-open"></i></a>
                             </figure>

                             <div class="portfolio-info">
                                 <h4><a href="portfolio-details.html">Web 3</a></h4>
                                 <p>Web</p>
                             </div>
                         </div>
                     </div>
                     <div class="col-lg-3 col-md-6 portfolio-item filter-app">
                         <div class="portfolio-wrap">
                             <figure>
                                 <img src="assets/img/portfolio/app2.jpg" class="img-fluid" alt="">
                                 <a href="assets/img/portfolio/app2.jpg" class="link-preview venobox"
                                    data-gall="portfolioGallery" title="App 2"><i class="ion ion-eye"></i></a>
                                 <a href="portfolio-details.html" class="link-details" title="More Details"><i
                                         class="ion ion-android-open"></i></a>
                             </figure>

                             <div class="portfolio-info">
                                 <h4><a href="portfolio-details.html">App 2</a></h4>
                                 <p>App</p>
                             </div>
                         </div>
                     </div>
                     <div class="col-lg-3 col-md-6 portfolio-item filter-card">
                         <div class="portfolio-wrap">
                             <figure>
                                 <img src="assets/img/portfolio/card2.jpg" class="img-fluid" alt="">
                                 <a href="assets/img/portfolio/card2.jpg" class="link-preview venobox"
                                    data-gall="portfolioGallery" title="Card 2"><i class="ion ion-eye"></i></a>
                                 <a href="portfolio-details.html" class="link-details" title="More Details"><i
                                         class="ion ion-android-open"></i></a>
                             </figure>

                             <div class="portfolio-info">
                                 <h4><a href="portfolio-details.html">Card 2</a></h4>
                                 <p>Card</p>
                             </div>
                         </div>
                     </div>


                 </div>
             </div>
         </section>End Portfolio Section -->

        <!-- ======= Our Clients Section ======= -->
        <section id="clients">
            <div class="container" data-aos="zoom-in">

                <header class="section-header">
                    <h3 class="text-danger">Our Clients</h3>
                </header>

                <div class="owl-carousel clients-carousel clients">
                    <img src="{{ asset('assets/clients/UGHEpng.png') }}" alt=""><br>
                    <img src="{{ asset('assets/clients/RICA.png') }}" alt=""><br>
                    <img src="{{ asset('assets/clients/nsr.png') }}" alt=""><br>
                    <img src="{{ asset('assets/clients/Dian Fossey.png') }}" alt=""><br>
                    <img src="{{ asset('assets/clients/ALU.png') }}" alt=""><br>

                </div>

            </div>
        </section><!-- End Our Clients Section -->


        <section id="contact" class="section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-header"><br><br>
                    <h3 class="text-danger">Contact Us</h3>
                    <p>Contact Us on the following links</p>
                </div>

                <div class="row contact-info">
                    <div class="col-md-4">
                        <div class="contact-address">
                            <i class="ion-ios-location-outline"></i>
                            <h3>Address</h3>
                            <address>DOWN TOWN BUILDING,F3-35</address>
                            <address>Po. Box: 3526 Kigali</address>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="contact-phone">
                            <i class="ion-ios-telephone-outline"></i>
                            <h3>Phone Number</h3>
                            <p><a href="tel:+155895548855">+250783648884/+250788476252</a></p>

                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="contact-email">
                            <i class="ion-ios-email-outline"></i>
                            <h3>Email</h3>
                            <p><a href="mailto:info@example.com">info@teco.rw/tecorwanda@gmail.com</a></p>
                        </div>
                    </div>

                </div>


                <div class="row">
                    <div class="col-sm-12">
                        <div class="sendmessage div-hide">
                            <div class="alert alert-success flat text-center">
                                <i class="fa fa-check-circle-o"></i>
                                Your message has been sent. Thank you!
                            </div>
                        </div>
                        <div class="form">

                            <div id="errormessage"></div>
                            <form action="{{ route("message.save") }}"
                                  method="post" role="form" id="feedbackForm" autocomplete="off">
                                @csrf
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <input required type="text" name="name"
                                               class="form-control form-control-lg rounded-sm shadow-sm" id="name"
                                               placeholder="Your Name" data-rule="minlen:4"
                                               data-msg="Please enter at least 4 chars"/>
                                        <div class="validation"></div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <input type="email" required
                                               class="form-control form-control-lg rounded-sm shadow-sm" name="email"
                                               id="email"
                                               placeholder="Your Email" data-rule="email"
                                               data-msg="Please enter a valid email"/>
                                        <div class="validation"></div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <input type="text" class="form-control form-control-lg rounded-sm shadow-sm"
                                           name="subject" id="subject"
                                           placeholder="Subject" data-rule="minlen:4"
                                           data-msg="Please enter at least 8 chars of subject"/>
                                    <div class="validation"></div>
                                </div>
                                <div class="form-group">
                                <textarea class="form-control form-control-lg rounded-sm shadow-sm" required
                                          name="message" rows="5" data-rule="required"
                                          data-msg="Please write something for us" placeholder="Message"></textarea>
                                    <div class="validation"></div>
                                </div>
                                <div class="form-group">
                                    <button type="submit"
                                            class="btn btn-danger btn-lg rounded-sm shadow-sm text-uppercase"
                                            id="sendBtn">
                                        Send Message
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>


            </div>
        </section><!-- #contact -->


    </main><!-- End #main -->

@endsection

@section("scripts")
    <script>
        $(function () {
            $('.nav-contact').addClass("menu-active");

            $('#feedbackForm').submit(function (e) {
                e.preventDefault();
                var form = $(this);
                var btn = $('#sendBtn');
                btn.prop("disabled", true);
                $.post(form.attr('action'), form.serialize())
                    .done(function (data) {
                        btn.prop("disabled", false);
                        form[0].reset();
                        $('.sendmessage').removeClass('div-hide');
                    });
            });
        });
    </script>
@endsection
