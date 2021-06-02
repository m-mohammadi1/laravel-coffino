<!DOCTYPE html>
<html lang="fa">

<head>
    <meta charset="utf-8" />
    <title>تجربه آبی - قالب خلاقانه و چند منظوره HTML</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="Bluetec Saas Software Startup Website Template" name="description" />
    <meta content="" name="keywords" />
    <meta content="" name="author" />

    <!--[if lt IE 9]>
            <script src="js/html5shiv.js"></script>
        <![endif]-->

    <!-- CSS Files
    ================================================== -->
    <link href="{{ asset('front/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('front/css/bootstrap-grid.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('front/css/bootstrap-reboot.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('front/css/animate.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('front/css/owl.carousel.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('front/css/owl.theme.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('front/css/owl.transitions.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('front/css/magnific-popup.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('front/css/jquery.countdown.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('front/css/style.css') }}" rel="stylesheet" type="text/css" />

    <!-- rtl file -->
    <link rel="stylesheet" href="{{ asset('front/css/rtl.css') }}">

    <!-- color scheme -->
    <link id="colors" href="{{ asset('front/css/colors/scheme-02.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('front/css/coloring.css') }}" rel="stylesheet" type="text/css" />


</head>

<body>
    <div id="wrapper">
        <!-- header begin -->
            <x-front.partials.header />
        <!-- header close -->

        <!-- content begin -->
            @yield('content')
        <!-- content close -->

        <!-- footer begin -->
            <x-front.partials.footer />
        <!-- footer close -->

        <div id="preloader">
            <div class="spinner">
                <div class="bounce1"></div>
                <div class="bounce2"></div>
                <div class="bounce3"></div>
            </div>
        </div>
    </div>

    <div id="selector">
        <span class="opt tc1" data-color="scheme-01"></span>
        <span class="opt tc2" data-color="scheme-02"></span>
        <span class="opt tc3" data-color="scheme-03"></span>
        <span class="opt tc4" data-color="scheme-04"></span>
        <span class="opt tc5" data-color="scheme-05"></span>

        <span class="dark-mode">
                Enable Dark Mode
            </span>
    </div>

    <!-- Javascript Files
    ================================================== -->
    <script src="{{ asset('front/js/jquery.min.js') }}"></script>
    <script src="{{ asset('front/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('front/js/wow.min.js') }}"></script>
    <script src="{{ asset('front/js/jquery.isotope.min.js') }}"></script>
    <script src="{{ asset('front/js/easing.js') }}"></script>
    <script src="{{ asset('front/js/owl.carousel.js') }}"></script>
    <script src="{{ asset('front/js/validation.js') }}"></script>
    <script src="{{ asset('front/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('front/js/enquire.min.js') }}"></script>
    <script src="{{ asset('front/js/jquery.stellar.min.js') }}"></script>
    <script src="{{ asset('front/js/jquery.plugin.js') }}"></script>
    <script src="{{ asset('front/js/typed.js') }}"></script>
    <script src="{{ asset('front/js/jquery.countTo.js') }}"></script>
    <script src="{{ asset('front/js/jquery.countdown.js') }}"></script>
    <script src="{{ asset('front/js/designesia.js') }}"></script>


</body>

</html>