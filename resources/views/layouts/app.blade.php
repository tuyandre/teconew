<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

    <title>@yield("title")</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito:300|Raleway:300|Source+Sans+Pro:400&display=swap"
          rel="stylesheet">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="{{ asset('lib/bootstrap/css/bootstrap.min.css') }}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('lib/font-awesome/css/font-awesome.min.css') }}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="{{ asset('lib/ionicons/css/ionicons.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('vendor/skin-red.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/AdminLTE.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
 Placed at the end of the document so the pages load faster -->
    <script src="{{ asset('vendor/jquery.min.js') }}"></script>
    <script src="{{ asset('lib/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('vendor/adminlte.min.js') }}"></script>
    <script src="{{ asset('vendor/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <![endif]-->
</head>

<body class="hold-transition skin-red sidebar-mini">
<div class="wrapper">
    @include('admin.header')
    @include('admin.sidebar')
    <div class="content-wrapper">
        @yield('content')
    </div>
    <footer class="main-footer">
        <div class="pull-right hidden-xs">
            <b>Version</b> 1.0.0
        </div>
        <strong>Copyright &copy; {{ now()->year }}
            <a href="javascript:void(0);">TECO</a>.</strong> All rights
        reserved.
    </footer>
</div>


@yield('scripts')

</body>
</html>
