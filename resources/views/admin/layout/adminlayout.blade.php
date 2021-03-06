<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Churchsermons - @yield('title')</title>
    <link rel="shortcut icon" href="{{ asset('/img/favicon/png') }}">

    <link href="{{ asset('/css/simple-line-icons.css') }}" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="{{ asset('/css/uikit.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/style.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>

    @yield('styles')

</head>

<body class="app header-fixed sidebar-fixed footer-fixed">

    <header class="app-header navbar">
        <button class="navbar-toggler mobile-sidebar-toggler hidden-lg-up" type="button">☰</button>
        <a class="navbar-brand" href="{{ '/admin/home' }}"></a>

        <ul class="nav navbar-nav hidden-md-down">
            <li class="nav-item">
                <a class="nav-link navbar-toggler sidebar-toggler" href="#">☰</a>
            </li>
        </ul>

        <ul class="nav navbar-nav ml-auto">

            <li class="nav-item dropdown">

                <a class="nav-link dropdown-toggle nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                    <span class="hidden-md-down">{{ Auth::user()->name }}</span>
                </a>

                <div class="dropdown-menu dropdown-menu-right">

                    <a class="dropdown-item" href="{{ url('/admin/logout') }}"><i class="fa fa-lock"></i> Logout </a>

                </div>

            </li>

            <li class="nav-item hidden-md-down">
            </li>

        </ul>
    </header>


    <div id="app" class="app-body">

        @include('admin.partials._sidebar');

        @yield('content')

    </div>


    <footer class="app-footer">
        <span>
        
            <a href="http://pointlogix.io">ChurchAudiox</a> © 2017.
        
        </span>
    </footer>

    <script src="{{ asset('/js/app.js') }}"></script>
    <script src="{{ asset('/js/tether.min.js') }}"></script>
    <script src="{{ asset('/js/pace.js') }}"></script>
    <script src="{{ asset('/js/coreui/app.js') }}"></script>
    <script src="{{ asset('/js/uikit.min.js') }}"></script>

    @yield('scripts')


    </script>


</body>

</html>