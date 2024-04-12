@extends('frontend.master')
@section('title',"Contact Us")
@section('content')
    <!-- ======= Intro Section ======= -->
    <section id="intro">
        <div class="intro-container">
            <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">

                <ol class="carousel-indicators"></ol>

                <div class="carousel-inner" role="listbox">

                    <div class="carousel-item active" style="background-image: url(/public/assets/img/intro-carousel/arc2.jpg)">
                        <div class="carousel-container">
                            <div class="container">
                                <h2 class="animate__animated animate__fadeInDown"></h2>
                                <p class="animate__animated animate__fadeInUp">Landscape design ,Construction supervision</p>
{{--                                <a href="#featured-services" class="btn-get-started scrollto animate__animated animate__fadeInUp">Get Started</a>--}}
                            </div>
                        </div>
                    </div>
                     <div class="carousel-item" style="background-image: url(/public/assets/img/intro-carousel/arc3.jpg)">
                        <div class="carousel-container">
                            <div class="container">
                                <p class="animate__animated animate__fadeInUp">Landscape design ,Construction supervision</p>
{{--                                <a href="#featured-services" class="btn-get-started scrollto animate__animated animate__fadeInUp">Get Started</a>--}}
                            </div>
                        </div>
                    </div>

                  <!--  <div class="carousel-item" style="background-image: url(assets/img/intro-carousel/4.jpg)">
                        <div class="carousel-container">
                            <div class="container">
                                <h2 class="animate__animated animate__fadeInDown">Temporibus autem quibusdam</h2>
                                <p class="animate__animated animate__fadeInUp">Beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt omnis iste natus error sit voluptatem accusantium.</p>
                                <a href="#featured-services" class="btn-get-started scrollto animate__animated animate__fadeInUp">Get Started</a>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item" style="background-image: url(assets/img/intro-carousel/4.jpg)">
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
                <h3>Architecture Design</h3>
                <p> We believe that every project has a mission and accompany our partners throughout the design process — from early visioning through project completion — to develop and implement a shared vision for how design can achieve that mission. We do this through architecture, landscape design and Construction.
                </p>

            <div class="row about-cols">

                <div class="col-md-12" data-aos="fade-up" data-aos-delay="100">
                    <div class="about-col">
                        <div class="img">
                            <img src="{{asset('assets/img/portfolio/ap11.jpg')}}" alt="" class="img-fluid">
                            <!--<div class="icon"><i class="ion-ios-speedometer-outline"></i></div><--!>
                        </div>
                        <h2 class="title"><a href="#">We are professional </a></h2>
                        <p>
                            Buildings conception (design),Buildings constructions activities and Construction materials supply such as stones,aggregates (crushed)
                        </p>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End About Us Section -->

    <!-- ======= Featured Services Section Section ======= -->



    <!-- ======recent projects ======= -->
    < <section id="portfolio" class="section-bg">
         <div class="container" data-aos="fade-up">

             <header class="section-header">
                 <h3 class="section-title text-danger"> Recent Projects</h3>
             </header>

             <div class="row" data-aos="fade-up" data-aos-delay="100">
             </div>

             <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
                 <div class="col-lg-3 col-md-6 portfolio-item filter-web">
                     <div class="portfolio-wrap">
                         <figure>
                             <img src="assets/img/portfolio/p.jpg" class="img-fluid img-fit" alt="">
                             <a href="assets/img/portfolio/p.jpg" class="link-preview venobox"
                                data-gall="portfolioGallery" title="Web 3"><i class="ion ion-eye"></i></a>

                         </figure>

                     </div>
                 </div>
                 <div class="col-lg-3 col-md-6 portfolio-item filter-web">
                     <div class="portfolio-wrap">
                         <figure class="d-flex align-items-center justify-content-center">
                             <img src="assets/img/portfolio/p2.jpeg" class="img-fluid img-fit" alt="">
                             <a href="assets/img/portfolio/p2.jpeg" class="link-preview venobox"
                                data-gall="portfolioGallery" title="Web 3">
                                 <i class="ion ion-eye"></i>
                             </a>
                         </figure>

                     </div>
                 </div>
                 <div class="col-lg-3 col-md-6 portfolio-item filter-app">
                     <div class="portfolio-wrap">
                         <figure>
                             <img src="assets/img/portfolio/p3.jpeg" class="img-fluid img-fit" alt="">
                             <a href="assets/img/portfolio/p3.jpeg" class="link-preview venobox"
                                data-gall="portfolioGallery" title="App 2"><i class="ion ion-eye"></i></a>

                         </figure>


                     </div>
                 </div>
                 <div class="col-lg-3 col-md-6 portfolio-item filter-card">
                     <div class="portfolio-wrap">
                         <figure>
                             <img src="assets/img/portfolio/p.jpg" class="img-fluid img-fit" alt="">
                             <a href="assets/img/portfolio/p.jpg" class="link-preview venobox"
                                data-gall="portfolioGallery" title="Card 2"><i class="ion ion-eye"></i></a>
                         </figure>


                     </div>
                 </div>


             </div>
         </div>
     </section>

@endsection
@section("scripts")



@endsection
