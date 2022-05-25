<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}"
      class="minimal-style is-menu-fixed is-always-fixed is-selection-shareable blog-animated header-light header-small"
      data-effect="slideUp">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Impose - Responsive HTML5 Template">
    <meta name="keywords" content="personal, blog, html5">
    <meta name="author" content="Pixelwars">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- FAV and TOUCH ICONS -->
    <link rel="shortcut icon" href="{{asset('images/ico/favicon.ico')}}">
    <link rel="apple-touch-icon" href="{{asset('images/ico/apple-touch-icon.png')}}"/>

    <!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
            integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
            integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
            integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
    </script>
    <!-- INITIAL SCRIPTS -->
    <script src="{{asset('js/modernizr.min.js')}}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script>
        if (!window.jQuery) {
            document.write('<script src="{{asset('js/jquery-3.1.1.min.js')}}"><\/script>');
        }
    </script>
    <script src="{{asset('js/jquery-migrate-3.0.0.min.js')}}"></script>
    <script src="{{asset('js/fastclick.js')}}"></script>
    <script src="{{asset('js/jquery.fitvids.js')}}"></script>
    <script src="{{asset('js/jquery.viewport.mini.js')}}"></script>
    <script src="{{asset('js/jquery.waypoints.min.js')}}"></script>
    <script src="{{asset('js/jquery-validation/jquery.validate.min.js')}}"></script>
    <script src="{{asset('js/imagesloaded.pkgd.min.js')}}"></script>
    <script src="{{asset('js/jquery.isotope.min.js')}}"></script>
    <script src="{{asset('js/jquery.magnific-popup/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('js/jquery.fluidbox/jquery.fluidbox.min.js')}}"></script>
    <script src="{{asset('js/owl-carousel/owl.carousel.min.js')}}"></script>
    <script src="{{asset('js/selection-sharer/selection-sharer.js')}}"></script>
    <script src="{{asset('js/socialstream.jquery.js')}}"></script>
    <script src="{{asset('js/jquery.collagePlus/jquery.collagePlus.min.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>
    <script src="{{asset('js/shortcodes/shortcodes.js')}}"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css?family=Lato:400,700|Noto+Sans:400,400i,700,700i|Poppins:300,400,500,600,700"
        rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/fonts/fontello/css/fontello.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('js/jquery.magnific-popup/magnific-popup.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('js/jquery.fluidbox/fluidbox.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('js/owl-carousel/owl.carousel.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('js/selection-sharer/selection-sharer.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/rotate-words.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/align.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/main.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('js/shortcodes/shortcodes.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/768.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/992.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/frontend.css')}}">
</head>

<body>

<!-- page -->
<div id="page" class="hfeed site">

    <!-- header -->
    <header id="masthead" class="site-header" role="banner">


        <!-- site-navigation -->
        <nav id="primary-navigation" class="site-navigation primary-navigation" role="navigation">

            <!-- layout-medium -->
            <div class="layout-medium">

                <!-- site-title : image-logo -->
                <h1 class="site-title">
                    <a href="{{route('home')}}" rel="home">
                        <img src="{{asset('images/site/logo.png')}}" alt="logo">
                        <span class="screen-reader-text">Haley Dust</span>
                    </a>
                </h1>

                <a class="menu-toggle"><span class="lines"></span></a>

                <!-- nav-menu -->
                <div class="nav-menu">
                    <ul>
                        <li><a href="{{route('home')}}">HOME</a></li>
                        <li><a href="{{route('categories')}}">CATEGORIES</a></li>
                        <li><a href="{{route('features')}}">FEATURES</a></li>
                        <li><a href="{{route('about')}}">ABOUT ME</a></li>
                        <li><a href="{{route('contact')}}">CONTACT</a></li>
                    </ul>
                </div>
                <!-- nav-menu -->

                <!-- social-container -->
                <div class="social-container">

                    <a class="social-link facebook" href="#"></a>
                    <a class="social-link twitter" href="#"></a>
                    <a class="social-link vine" href="#"></a>
                    <a class="social-link dribbble" href="#"></a>
                    <a class="social-link instagram" href="#"></a>

                </div>
                <!-- social-container -->

            </div>
            <!-- layout-medium -->

        </nav>
        <!-- site-navigation -->

    </header>
    <!-- header -->


</div>
<!-- page -->

<main class="py-4">
    @yield('content')
</main>

<!-- site-footer -->
<footer id="colophon" class="site-footer" role="contentinfo">

    <!-- layout-medium -->
    <div class="layout-medium">

        <!-- site-title-wrap -->
        <div class="site-title-wrap">

            <!-- site-title : image-logo -->
            <h1 class="site-title">
                <a href="{{route('home')}}" rel="home">
                    <img src="{{asset('images/site/logo.png')}}" alt="logo">
                </a>
            </h1>
            <!-- site-title -->

            <p class="site-description">just living the life as it goes by</p>

        </div>
        <!-- site-title-wrap -->

        <!-- footer-social -->
        <div class="footer-social">

            <div class="textwidget">
                <a class="social-link facebook" href="#"></a>
                <a class="social-link twitter" href="#"></a>
                <a class="social-link vine" href="#"></a>
                <a class="social-link dribbble" href="#"></a>
                <a class="social-link instagram" href="#"></a>
            </div>

        </div>
        <!-- footer-social -->

    </div>
    <!-- layout-medium -->

    <!-- .site-info -->
    <div class="site-info">

        <!-- layout-medium -->
        <div class="layout-medium">

            <div class="textwidget">crafted with <i class="pw-icon-heart"></i> <em>by</em> Pixelwars</div>

        </div>
        <!-- layout-medium -->

    </div>
    <!-- .site-info -->

</footer>
<!-- site-footer -->
</body>

</html>
