@extends('frontend.master')
@section('title',"Team info")
@section('content')
    <section id="team">
        <div class="container">
            <div class="text-center wow fadeInUp">
                <h1>{{ $team->name }}</h1>
            </div>
            <div class="row">
                <div class="col-md-4 wow fadeInUp thumbnail">
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
                <div class="col-md-8">
                    @if($team->quote)
                        <em>
                            "{{ $team->quote }}"
                        </em>
                        <br>
                        <br>
                    @endif
                    <h6>
                        <strong>Biography</strong>
                    </h6>
                    <p>
                        {{ $team->bio }}
                    </p>
                </div>

            </div>
        </div>
    </section><!-- #team -->

@endsection