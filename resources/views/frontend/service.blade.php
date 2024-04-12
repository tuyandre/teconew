@extends('frontend.master')
@section('title',"Services")
@section('content')
    <section id="service">
        <div class="container" style="padding-top: 50px">

            <div>
                <h1><i>Services</i></h1>
                <div class="margin-top-20px">

                    <h6><strong><i>1.ICT department (ICT/Telecom Infrastructure) since 2013.</i></strong></h6>
                    <div class="row">
                        <div class="col-md-4">
                            <img src="{{ asset('img/fiber.jpg') }}" class="img img-responsive img-thumbnail" alt="">
                        </div>
                        <div class="col-md-8">
                            <ul>
                                <li>
                                    TECO has carried out various ICT/Telecom Infrastructure projects such as Fiber
                                    network projects,network cabling,CCTV systems and other services related to ICT.
                                </li>
                                <br>
                                <li>

                                    It's largest Regional authorized Audio Visual and call Centers (AVC) systems
                                    integrators and we believe that collaboration technology and smart environments
                                    enable people and businesses to work more efficiently together in everyday life.
                                </li>

                            </ul>
                            <p>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="margin-top-20px">
                    <h6><strong><i>2.Construction department since 2014</i></strong></h6>
                    <div class="row">
                        <div class="col-md-4">
                            <img src="{{ asset('img/cons.jpg') }}" class="img img-responsive img-thumbnail" alt="">
                        </div>
                        <div class="col-md-8">
                            <ul>
                                <li>
                                    Buildings conception (design)
                                </li>
                                <li>
                                    Buildings constructions activities
                                </li>
                                <li>
                                    Construction materials supply such as stones,aggregates (crushed)...
                                </li>
                            </ul>
                            <p>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="margin-top-20px">

                    <h6><strong><i>3.Biomedical technology integrator,since 2015.</i></strong></h6>
                    <div class="row">
                        <div class="col-md-4">
                            <img src="{{ asset('img/biome.jpg') }}" class="img img-responsive img-thumbnail"
                                 alt="">
                        </div>
                        <div class="col-md-8">
                            <ul>
                                <li>
                                    Biomedical equipment installation
                                </li>

                                <li>
                                    Biomedical systems integration
                                </li>
                                <li>
                                    Biomedical equipment and systems maintenance
                                </li>

                            </ul>
                            <p>
                            </p>
                        </div>
                    </div>

                </div>
            </div>


        </div>


    </section>
    <br>
    <br>
@endsection
