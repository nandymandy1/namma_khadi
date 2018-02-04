<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="{{ asset('./css/slick.css') }}">
        <link rel="stylesheet" href="{{ asset('./css/slick-theme.css') }}">
        <link rel="stylesheet" href="{{ asset('./css/animate.css') }}">
        <link rel="stylesheet" href="{{ asset('./css/fonticons.css') }}">
        <link rel="stylesheet" href="{{ asset('./css/font-awesome.min.css') }}">
        <link rel="stylesheet" href="{{ asset('./css/bootstrap.css') }}">
        <link rel="stylesheet" href="{{ asset('./css/bootstrap.css') }}">
        <link rel="stylesheet" href="{{ asset('./css/bootsnav.css') }}">
        <link rel="stylesheet" href="{{ asset('./css/custom.css') }}">

        <!--For Plugins external css-->
        <!--<link rel="stylesheet" href="assets/css/plugins.css" />-->

        <!--Theme custom css -->
        <link rel="stylesheet" href="{{ asset('./css/style.css') }}">
        <!--<link rel="stylesheet" href="assets/css/colors/maron.css">-->

        <!--Theme Responsive css-->
        <link rel="stylesheet" href="{{ asset('./css/responsive.css') }}" />

        <script src="{{ asset('./js/vendor/modernizr-2.8.3-respond-1.4.2.min.js') }}"></script>

        <!--Google Fonts link-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">

        <link href="https://fonts.googleapis.com/css?family=Crimson+Text:400,400i,600,600i,700,700i" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i" rel="stylesheet">

        <!-- JS includes -->

        <script src="{{ asset('./js/vendor/jquery-1.11.2.min.js') }}"></script>
        <script src="{{ asset('./js/vendor/bootstrap.min.js') }}"></script>

        <script src="{{ asset('./js/isotope.min.js') }}"></script>
        <script src="{{ asset('./js/jquery.magnific-popup.js') }}"></script>
        <script src="{{ asset('./js/jquery.easing.1.3.js') }}"></script>
        <script src="{{ asset('./js/slick.min.js') }}"></script>
        <script src="{{ asset('./js/jquery.collapse.js') }}"></script>
        <script src="{{ asset('./js/bootsnav.js') }}"></script>



        <script src="{{ asset('./js/plugins.js') }}"></script>
        <script src="{{ asset('./js/main.js') }}"></script>

    </head>
    <body data-spy="scroll" data-target=".navbar-collapse">

        <!--Preloader-->
        <!-- Preloader -->

        <div id="loading">
            <div id="loading-center">
                <div id="loading-center-absolute">
                    <div class="object"></div>
                    <div class="object"></div>
                    <div class="object"></div>
                    <div class="object"></div>
                    <div class="object"></div>
                    <div class="object"></div>
                    <div class="object"></div>
                    <div class="object"></div>
                    <div class="object"></div>
                    <div class="object"></div>
                </div>
            </div>
        </div>

        <!--End off Preloader -->
<div class="culmn">
        <!--Top Navbar-->
        @include('layout.inc.navbar')
        <!--Content-->
        @yield('content')
        <!--Company Watermark Goes here-->
        @include('layout.inc.company')
        <!-- scroll up-->
        <div class="scrollup">
            <a href="#"><i class="fa fa-chevron-up"></i></a>
        </div>
        <!-- End off scroll up -->
        <!--Footer-->
        @include('layout.inc.footer')


</div>
    </body>
    	@yield('scripts')
</html>