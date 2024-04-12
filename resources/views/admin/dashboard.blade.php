 @extends('layouts.app')

@section('title','Teams')
@section('content')
    <div class="content">
        <h1>Dashboard</h1>

        <div class="row">
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-aqua">
                    <div class="inner">
                        <h3>{{ \App\Team::count() }}</h3>

                        <p>Teams</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-ios-people"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-green">
                    <div class="inner">
                        <h3>{{ \App\Feedback::count() }}</h3>

                        <p>Feedback</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-chatbox"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-yellow">
                    <div class="inner">
                        <h3>{{ \App\Feedback::where("read",">",0)->count() }}</h3>

                        <p>Read Feedback</p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-comment"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-red">
                    <div class="inner">
                        <h3>{{ \App\Feedback::where("read","=",0)->count() }}</h3>

                        <p>Unread Feedback</p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-comment-o"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
        </div>
    </div>
@endsection
