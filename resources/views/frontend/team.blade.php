@extends('frontend.master')
@section('title',"Team")
@section('content')
    <section id="team">
        <div class="container">
            <div class="section-header wow fadeInUp">
                <h3>Board of Directors and Team</h3>
            </div>

            <div class="row">
                @foreach($teams as $team)
                    <div class="col-lg-3 col-md-6 wow fadeInUp thumbnail">
                        <div class="member">
                            <div class="" style="height: 250px;overflow: hidden;">
                                <a href="{{ route('team.show',['id'=>$team->id]) }}">
                                    <img src="{{ Storage::url("/images/$team->image") }}"
                                         class="img-fluid img img-responsive" alt="" style="width: 100%">
                                </a>
                            </div>
                            <div class="info">
                                <h4>{{ $team->name }}</h4>
                                <span>{{ $team->role }}</span>
                                <div class="social">
                                    <a href="{{ $team->twitter }}" target="_blank">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                    <a href="{{ $team->facebook }}" target="_blank">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                    <a href="{{ $team->linkedIn }}" target="_blank">
                                        <i class="fa fa-linkedin"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach


            </div>

        </div>
    </section><!-- #team -->

@endsection