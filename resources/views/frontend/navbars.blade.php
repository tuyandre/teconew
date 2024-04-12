<!--==========================
  Header
============================-->
<header id="header">
    <div class="container-fluid">

        <div id="logo" class="pull-left">
            <!-- Uncomment below if you prefer to use an image logo -->
           <a href="#intro">
               <img src="{{ asset('img/LOGO/LOGO.JPG') }}" alt="" style="height:50px" title="" />
           </a>
        </div>
    </div>

    <nav id="nav-menu-container">
        <ul class="nav-menu">
            <li class="nav-home">
                <a href="{{ url("/") }}">Home</a>
            </li>
            <li><a href="{{ url('/#about') }}">About Us</a></li>
            <li><a href="{{ url('/service') }}">services</a></li>



            <li class="nav-contact"><a href="{{ route('contact-us') }}">Contact Us</a></li>

        </ul>
    </nav><!-- #nav-menu-container -->
{{--    </div>--}}
</header><!-- #header -->
