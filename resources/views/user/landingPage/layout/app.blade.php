<!DOCTYPE html>
<html lang="en" class="">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Lawlan Logistics</title>
    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon" />
    <link rel="stylesheet" href="{{ asset('user/landingPage/assets/css/custom.css') }}" />
    <link rel="stylesheet" href="{{ asset('user/landingPage/assets/plugins/icons/fontawesome/css/all.css') }}">
    <link rel="stylesheet" href="{{ asset('user/landingPage/assets/css/style.css') }}" />
</head>

<body id="ok" class="ok">

    {{-- <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div> --}}

    <div id="main-wrapper" class="">

        @yield('homepage');

    </div>

    <script src="{{ asset('user/js/jquery.min.js') }}"></script>
    <script src="{{ asset('user/landingPage/assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('user/landingPage/assets/js/scripts.js') }}"></script>
</body>

</html>
