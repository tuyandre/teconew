@extends('frontend.master')
@section('title',"Biomedical")
@section('content')

    <!-- ======= Intro Section ======= -->
    <div class="jumbotron mb-0" style="margin-top: 50px">
        <div class="container">
            <h1 class="display-4">Biomedical</h1>
            <p class="lead mb-0 font-weight-bold text-danger">
                Health facilities design and construction
            </p>
        </div>
    </div>
    <div class="container my-5">

        <div class="row">
            <div class="col-md-6">
                <div class="card mb-3" style="max-width: 540px;">
                    <div class="row no-gutters">
                        <div class="col-md-5">
                            <img src="{{ asset('assets/img/biomedical/centre.jpg') }}" alt="Bio 1"
                                 class="img-fluid rounded"
                                 style="height: 170px;width:100%;object-fit: cover;object-position: center">
                        </div>
                        <div class="col-md-7">
                            <div class="card-body">
                                <p class="card-text">
                                    Centralized patient monitoring system
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card mb-3" style="max-width: 540px;">
                    <div class="row no-gutters">
                        <div class="col-md-5">
                            <img src="{{ asset('assets/img/biomedical/frigee.jpg') }}" alt="Bio 1"
                                 class="img-fluid rounded"
                                 style="height: 170px;width:100%;object-fit: cover;object-position: center">
                        </div>
                        <div class="col-md-7">
                            <div class="card-body">
                                <p class="card-text">
                                    Remote refrigerator and freezer monitoring systems
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="card mb-3" style="max-width: 540px;">
                    <div class="row no-gutters">
                        <div class="col-md-5">
                            <img src="{{ asset('assets/img/biomedical/biomm2.jpg') }}" alt="Bio 1"
                                 class="img-fluid rounded"
                                 style="height: 170px;width:100%;object-fit: cover;object-position: center">
                        </div>
                        <div class="col-md-7">
                            <div class="card-body">
                                <p class="card-text">
                                    Medical equipment supply and maintenance
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card mb-3" style="max-width: 540px;">
                    <div class="row no-gutters">
                        <div class="col-md-5">
                            <img src="{{ asset('assets/img/biomedical/biomm3.jpg') }}" alt="Bio 1"
                                 class="img-fluid rounded"
                                 style="height: 170px;width:100% ;object-fit: cover;object-position: center">
                        </div>
                        <div class="col-md-7">
                            <div class="card-body">
                                <p class="card-text">
                                    Medical equipment planning
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>


@endsection
@section("scripts")



@endsection
