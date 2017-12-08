<!DOCTYPE html>
<html lang="en">
<!-- START Head -->
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">

    <!-- Enable responsiveness on mobile devices-->
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>
        SPIN | @yield('title')
    </title>

    <!--START Loader -->
    <style>
    #initial-loader{display:flex;align-items:center;justify-content:center;flex-wrap:wrap;width:100%;background:#212121;position:fixed;z-index:10000;top:0;left:0;bottom:0;right:0;transition:opacity .2s ease-out}#initial-loader .initial-loader-top{display:flex;align-items:center;justify-content:space-between;width:200px;border-bottom:1px solid #2d2d2d;padding-bottom:5px}#initial-loader .initial-loader-top > *{display:block;flex-shrink:0;flex-grow:0}#initial-loader .initial-loader-bottom{padding-top:10px;color:#5C5C5C;font-family:-apple-system,"Helvetica Neue",Helvetica,"Segoe UI",Arial,sans-serif;font-size:12px}@keyframes spin{100%{transform:rotate(360deg)}}#initial-loader .loader g{transform-origin:50% 50%;animation:spin .5s linear infinite}body.loading {overflow: hidden !important} body.loaded #initial-loader{opacity:0}
    </style>
    <!--END Loader-->

    <!-- SCSS Output -->
    <link rel="stylesheet" href="{{ asset('assets/stylesheets/app.min.e0bb64e7.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/stylesheets/custom.css') }}">

    <!-- START Favicon -->
    <link rel="apple-touch-icon" sizes="57x57" href="../assets/images/favicons/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="../assets/images/favicons/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="../assets/images/favicons/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/images/favicons/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="../assets/images/favicons/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="../assets/images/favicons/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="../assets/images/favicons/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="../assets/images/favicons/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="../assets/images/favicons/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="../assets/images/favicons/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../assets/images/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="../assets/images/favicons/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicons/favicon-16x16.png">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="../assets/images/favicons/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <!-- END Favicon -->

    <!-- RSS -->
    <link rel="alternate" type="application/rss+xml" title="RSS" href="../atom.xml">

    <!-- Google Analytics -->
    <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-83862026-1', 'auto');
    ga('send', 'pageview');
    </script>

    <!-- jekyll settings -->
    <script>
    var ASSET_PATH_BASE = '../';
    </script>
</head>
<!-- END Head -->


<body class="sidebar-full-height loading {{ Auth::check() ? '' : 'sidebar-disabled navbar-disabled footer-disabled' }}">


    <div id="initial-loader">
        <div>
            <div class="initial-loader-top">
                <img class="initial-loader-logo" src="{{ asset('assets/images/spin-logo-inverted.png') }}" alt="Loader">
                <div class="loader loader--style1">

                        </div>
                    </div>
                    <div class="initial-loader-bottom">
                        Načítavam, prosím čakajte. <img width="30" src="{{ asset('assets/images/loading.gif') }}" alt="loading">
                    </div>
                </div>
            </div>

            <!-- Bower Libraries Scripts -->
            <script src="{{ asset('assets/vendor/js/lib.min.js')}}"></script>

            <div class="main-wrap">

            @if ( Auth::check() )

                @include('layouts.partial.nav')

            @endif

            @yield('content')

            <!-- START Layout Options (Right Side) -->
            @if ( Auth::check() && false )

                @include('layouts.partial.layout_options')

            @endif

            <!-- END Layout Options (Right Side) -->

            <!-- START Footer -->
            <footer>
                <div class="container-fluid">
                    <p class="text-gray-dark">
                        <strong class="m-r-1">Projekt Sociálna sieť </strong>
                        <span class="text-gray-dark">&#xA9; 2017 Tvorcovia
                            <i class="fa fa-fw fa-heart text-danger"></i> Študenti UCM</span>
                        </p>
                    </div>
                </footer>
                <!-- END Footer -->

            </div>
            <script>
            // Hide loader
            (function() {
                var bodyElement = document.querySelector('body');
                bodyElement.classList.add('loading');

                document.addEventListener('readystatechange', function() {
                    if(document.readyState === 'complete') {
                        var bodyElement = document.querySelector('body');
                        var loaderElement = document.querySelector('#initial-loader');

                        bodyElement.classList.add('loaded');
                        setTimeout(function() {
                            bodyElement.removeChild(loaderElement);
                            bodyElement.classList.remove('loading', 'loaded');
                        }, 200);
                    }
                });
            })();

            </script>

            <!-- Bower Libraries Styles -->
            <link rel="stylesheet" href="{{ asset('assets/vendor/css/lib.min.css') }}">

            <script src="{{ asset('assets/javascript/app.min.13a3a368.js') }}"></script>

            <script src="{{asset('assets/javascript/plugins-init.js')}}"></script>
            <script src="{{asset('assets/javascript/switchery-settings.js')}}"></script>

            <script src="{{asset('assets/vendor/js/toastr.min.js')}}"></script>
            <script src="{{asset('assets/javascript/toastr-settings.js')}}"></script>

        </body>

        </html>
