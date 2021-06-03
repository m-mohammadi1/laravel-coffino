<!DOCTYPE html>
<html lang="fa">

<head>
    <meta charset="utf-8" />
    <title>فاکک آبی - قالب خلاقانه و چند منظوره HTML</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="Bluetec Saas Software Startup Website Template" name="description" />
    <meta content="" name="keywords" />
    <meta content="" name="author" />

    <link rel="stylesheet" href="{{ asset('front/css/all.css') }}" />

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
    
    <script src="{{ asset('front/js/all.js') }}"></script>

</body>

</html>