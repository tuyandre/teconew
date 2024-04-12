<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                {{--<img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">--}}
                <i class="fa fa-user-circle-o fa-2x" style="color: white"></i>
            </div>
            <div class="pull-left info">
                <p>{{ Auth::user()->name }}</p>
            </div>
        </div>
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MAIN NAVIGATION</li>
            <li class="{{ url()->current()==route('admin.dashboard')?'active':'' }}">
                <a href="{{ route('admin.dashboard') }}">
                    <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                </a>
            </li>
            <li class="teams {{ url()->current()==route('admin.teams')?'active':'' }}">
                <a href="{{ route('admin.teams') }}">
                    <i class="fa fa-th"></i> <span>Teams</span>
                </a>
            </li>
            <li class="feedback {{ url()->current()==route('feedbacks.all')?'active':'' }}">
                <a href="{{ route('feedbacks.all') }}">
                    <i class="fa fa-comments"></i> <span>Feedback</span>
                </a>
            </li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>
