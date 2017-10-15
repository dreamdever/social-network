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
        SPIN | Sidebar with Menu
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
                <img class="initial-loader-logo" src="../assets/images/spin-logo-inverted.png" alt="Loader">
                <div class="loader loader--style1">
                    <svg version="1.1" id="loader-1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="30px" height="30px" viewbox="0 0 40 40" enable-background="new 0 0 40 40" xml:space="preserve">
                        <g>
                            <path fill="#2d2d2d" d="M20.201,5.169c-8.254,0-14.946,6.692-14.946,14.946c0,8.255,6.692,14.946,14.946,14.946s14.946-6.691,14.946-14.946C35.146,11.861,28.455,5.169,20.201,5.169z M20.201,31.749c-6.425,0-11.634-5.208-11.634-11.634c0-6.425,5.209-11.634,11.634-11.634c6.425,0,11.633,5.209,11.633,11.634C31.834,26.541,26.626,31.749,20.201,31.749z">
                                <path fill="#2c97de" d="M26.013,10.047l1.654-2.866c-2.198-1.272-4.743-2.012-7.466-2.012h0v3.312h0C22.32,8.481,24.301,9.057,26.013,10.047z">

                                </g>
                            </svg>
                        </div>
                    </div>
                    <div class="initial-loader-bottom">
                        Loading. Please Wait. <i class="fa fa-cricle" style="opacity: 0"></i>
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
            @if ( Auth::check() )

                @include('layouts.partial.layout_options')

            @endif

            <!-- END Layout Options (Right Side) -->
    <div class="right-sidebar">
        <!-- DodatkowyContent: data-target-extra-content wskazuje, że ten konkretny div ma być przykrywany przez kontener o id chatpanel2 -->
        <div class="container-fluid" data-target-extra-content="chatpanel2">
            <div class="row">

                <!-- <a href="#" class="extra-content-open">Extra content Large</a>-->

                <!-- START Tabs -->
                <div class="tabbable-line">
                    <ul class="nav nav-tabs m-r-1 m-t-2">
                        <!-- Tab: Calendar -->
                        <li role="presentation" class="visible-xs">
                            <a class="action-right-sidebar-toggle" href="javascript:void(0)" role="tab">
                                <span class="fa fa-times"></span>
                            </a>
                        </li>
                        <!-- Tab: Calendar -->
                        <li class="active" role="presentation">
                            <a data-toggle="tab" href="#tab-calendar" role="tab"><span class="fa fa-calendar-o"></span></a>
                        </li>
                        <!-- Tab: Statisticts -->
                        <li role="presentation">
                            <a data-toggle="tab" href="#tab-statistics" role="tab"><span class="fa fa-area-chart"></span></a>
                        </li>
                        <!-- Tab: Users -->
                        <li role="presentation">
                            <a data-toggle="tab" href="#right-sidebar-users" role="tab"><span class="fa fa-users"></span></a>
                        </li>
                        <!-- Tab: Timeline -->
                        <li role="presentation">
                            <a data-toggle="tab" href="#right-sidebar-timeline" role="tab"><span class="fa fa-list"></span></a>
                        </li>
                        <!-- Tab: Settings -->
                        <li role="presentation">
                            <a data-toggle="tab" href="#right-sidebar-settings" role="tab"><span class="fa fa-gear"></span></a>
                        </li>
                    </ul>
                    <!-- END Tabs -->

                    <!-- START Tab: Calendar -->
                    <div class="tab-content vertical-scroll-container" id="myTabContent">
                        <div class="tab-pane fade in active p-r-1" id="tab-calendar" role="tabpanel">

                            <p class="small text-uppercase m-b-0 m-t-1"><strong>Weather</strong></p>
                            <!-- START Widget - Weather Current -->
                            <div class="m-t-0 m-b-3">
                                <p class="display-4 text-white m-t-0 m-b-0">
                                    <span>Thursday</span>
                                </p>
                                <span class="lead text-white m-t-0 m-b-0">30 September</span>
                                <p class="m-t-2">Partly cloudy today, temperature minimum 11&#xBA;, maximum 15&#xBA;</p>
                                <a href="../start/weather.html">More Details <i class="fa fa-angle-right"></i></a>
                            </div>
                            <!-- END Widget - Weather Current -->
                            <!-- START Widget - Stock -->
                            <table class="table table-condensed table-hover">
                                <thead>
                                    <tr>
                                        <th class="small text-muted text-uppercase">
                                            <strong>Stock</strong>
                                        </th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-white">DOW J</td>
                                        <td class="text-muted">17 552,89</td>
                                        <td class="text-right"><span class="label label-danger">-0.29%</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-white">APPL</td>
                                        <td class="text-muted">1 987</td>
                                        <td class="text-right"><span class="label label-success">+7.10%</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-white">CAC</td>
                                        <td class="text-muted">17 552,89</td>
                                        <td class="text-right"><span class="label label-danger">-0.29%</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-white">DAX</td>
                                        <td class="text-muted">1 987</td>
                                        <td class="text-right"><span class="label label-success">+7.10%</span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>

                            <!-- END Widget - Stock -->
                            <!-- START Widget - Emails Today -->
                            <table class="table m-t-2 m-b-3">
                                <thead>
                                    <tr>
                                        <th class="small text-muted text-uppercase">
                                            <strong>Emails Today </strong>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="media">
                                                <div class="media-left media-middle">
                                                    <a href="../apps/email-details.html">
                                                        <div class="avatar"> <img class="media-object img-circle" src="{{ asset('assets/images/avatars/default-avatar.png') }}" alt="Avatar"><i class="avatar-status avatar-status-bottom bg-success b-gray-darker"></i> </div>
                                                    </a>
                                                </div>
                                                <div class="media-body media-auto">
                                                    <h5 class="m-b-0"><span>Elena Heller</span> <small><span>01:48</span></small></h5>
                                                    <p class="m-t-0 m-b-0"><span>Enim illo veniam dicta est nulla.</span></p>
                                                    <div class="btn-group" role="group">
                                                        <a role="button" class="btn btn-link btn-xs" href="../apps/email-details.html"><i class="fa fa-reply text-gray-light"></i></a>
                                                        <a role="button" class="btn btn-link btn-xs" href="../apps/email-details.html"><i class="fa fa-archive text-gray-light"></i></a>
                                                        <a role="button" class="btn btn-link btn-xs" href="../apps/email-details.html"><i class="fa fa-trash text-gray-light"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="media">
                                                <div class="media-left media-middle">
                                                    <a href="../apps/email-details.html">
                                                        <div class="avatar"> <img class="media-object img-circle" src="https://s3.amazonaws.com/uifaces/faces/twitter/kapaluccio/128.jpg" alt="Avatar"><i class="avatar-status avatar-status-bottom bg-danger b-gray-darker"></i> </div>
                                                    </a>
                                                </div>
                                                <div class="media-body media-auto">
                                                    <h5 class="m-b-0"><span>Kyra Aufderhar</span> <small><span>03:01</span></small></h5>
                                                    <p class="m-t-0 m-b-0"><span>Et iste eveniet vel est possimus.</span></p>
                                                    <div class="btn-group" role="group">
                                                        <a role="button" class="btn btn-link btn-xs" href="../apps/email-details.html"><i class="fa fa-reply text-gray-light"></i></a>
                                                        <a role="button" class="btn btn-link btn-xs" href="../apps/email-details.html"><i class="fa fa-archive text-gray-light"></i></a>
                                                        <a role="button" class="btn btn-link btn-xs" href="../apps/email-details.html"><i class="fa fa-trash text-gray-light"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <div class="media">
                                                <div class="media-left media-middle">
                                                    <a href="../apps/email-details.html">
                                                        <div class="avatar"> <img class="media-object img-circle" src="https://s3.amazonaws.com/uifaces/faces/twitter/bu7921/128.jpg" alt="Avatar"><i class="avatar-status avatar-status-bottom bg-warning b-gray-darker"></i> </div>
                                                    </a>
                                                </div>
                                                <div class="media-body media-auto">
                                                    <h5 class="m-b-0"><span>Lamont Cormier</span> <small><span>01:49</span></small></h5>
                                                    <p class="m-t-0 m-b-0"><span>Expedita id a est qui quia molestias corporis qui veniam.</span></p>
                                                    <div class="btn-group" role="group">
                                                        <a role="button" class="btn btn-link btn-xs" href="../apps/email-details.html"><i class="fa fa-reply text-gray-light"></i></a>
                                                        <a role="button" class="btn btn-link btn-xs" href="../apps/email-details.html"><i class="fa fa-archive text-gray-light"></i></a>
                                                        <a role="button" class="btn btn-link btn-xs" href="../apps/email-details.html"><i class="fa fa-trash text-gray-light"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>


                                </tbody>
                            </table>


                            <!-- END Widget - Emails Today -->
                            <!-- START Widget - Tasks -->
                            <table class="table table-condensed m-t-2 m-b-0">
                                <thead>
                                    <tr>
                                        <th class="small text-muted text-uppercase">
                                            <strong>Tasks</strong>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value="">
                                                    <a href="../apps/tasks-details.html"><span>I&apos;ll hack the mobile RSS system, that should interface the SSL pixel!</span></a>
                                                    <span class="m-t-1 small"><i class="fa fa-history small text-gray-light"></i> <span>05-Aug-2011, 10:13</span> </span>
                                                </label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value="" checked="checked">
                                                    <del> <a href="../apps/tasks-details.html" class="text-muted"><span>Use the digital THX capacitor, then you can copy the wireless array!</span></a></del>
                                                    <span class="m-t-1 small"><i class="fa fa-history small text-gray-light"></i> <span>16-Jul-2014, 07:14</span> </span>
                                                </label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value="" checked="checked">
                                                    <del> <a href="../apps/tasks-details.html" class="text-muted"><span>navigating the array won&apos;t do anything, we need to generate the open-source SDD alarm!</span></a></del>
                                                    <span class="m-t-1 small"><i class="fa fa-history small text-gray-light"></i> <span>21-Mar-2014, 12:08</span> </span>
                                                </label>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <!-- END Widget - Emails Today -->

                        </div>
                        <!-- END Tab: Calendar -->

                        <!-- START Tab: Statistics -->
                        <div class="tab-pane fade p-r-1" id="tab-statistics" role="tabpanel">

                            <p class="small text-uppercase m-b-0 m-t-1"><strong>Statisticts</strong></p>
                            <!-- START Peity Charts -->
                            <div class="row m-t-3">
                                <div class="col-sm-4">
                                    <p class="data-attributes text-center">
                                        <span data-peity="{ &quot;fill&quot;: [&quot;#2A85C6&quot;, &quot;#222D33&quot;],  &quot;innerRadius&quot;: 20, &quot;radius&quot;: 28 }">4/7</span>
                                    </p>
                                    <h5 class="m-b-0 text-center">CPU
                                    </h5>
                                    <p class="small m-t-0 p-t-0 text-center">76%</p>
                                </div>
                                <div class="col-sm-4">
                                    <p class="data-attributes text-center">
                                        <span data-peity="{ &quot;fill&quot;: [&quot;#2A85C6&quot;, &quot;#222D33&quot;],  &quot;innerRadius&quot;: 20, &quot;radius&quot;: 28 }">6/7</span>
                                    </p>
                                    <h5 class="m-b-0 text-center">Drive
                                    </h5>
                                    <p class="small m-t-0 p-t-0 text-center">98%</p>
                                </div>
                                <div class="col-sm-4">
                                    <p class="data-attributes text-center">
                                        <span data-peity="{ &quot;fill&quot;: [&quot;#2A85C6&quot;, &quot;#222D33&quot;],  &quot;innerRadius&quot;: 20, &quot;radius&quot;: 28 }">2/7</span>
                                    </p>
                                    <h5 class="m-b-0 text-center">Memory
                                    </h5>
                                    <p class="small m-t-0 p-t-0 text-center">16%</p>
                                </div>
                            </div>
                            <!-- END Peity Charts -->
                            <!-- START Network -->
                            <p class="small text-center text-uppercase m-t-2"><strong>Network</strong></p>
                            <p class="text-nowrap text-center m-t-0">
                                <span class="text-white small">21 KB/s</span> <i class="fa fa-level-down text-primary m-r-2"></i>
                                <i class="fa fa-level-up text-primary"></i> <span class="text-white small">89 KB/s</span>
                            </p>
                            <!-- END Network -->
                            <!-- START Table: System -->
                            <table class="table m-t-2 table-condensed v-a-m">
                                <thead>
                                    <tr>
                                        <th class="small"><i class="fa fa-database m-r-1"></i>
                                            <span class="text-uppercase"><strong>system</strong></span></th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="small v-a-m">
                                            <td> Disabled </td>
                                            <td class="text-right v-a-m text-white">1:36</td>
                                        </tr>
                                        <tr class="small v-a-m">
                                            <td> Processing </td>
                                            <td class="text-right v-a-m text-white"><span>26904</span></td>
                                        </tr>
                                        <tr class="small v-a-m">
                                            <td> CPU User </td>
                                            <td class="text-right v-a-m text-white">16%</td>
                                        </tr>
                                        <tr class="small v-a-m">
                                            <td> CPU System </td>
                                            <td class="text-right v-a-m text-white">19%</td>
                                        </tr>
                                        <tr class="small v-a-m">
                                            <td> CPU Free </td>
                                            <td class="text-right v-a-m text-white">78%</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <!-- END Table: System -->
                                <!-- START Table: LAN -->
                                <table class="table table-condensed v-a-m">
                                    <thead>
                                        <tr>
                                            <th class="small"><i class="fa fa-wifi m-r-1"></i>
                                                <span class="text-uppercase"><strong>Lan</strong></span></th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="small v-a-m">
                                                <td>Wi-Fi</td>
                                                <td class="text-right v-a-m text-white"><i class="fa fa-fw fa-sort"></i></td>
                                            </tr>
                                            <tr class="small v-a-m">
                                                <td>IP</td>
                                                <td class="text-right v-a-m text-white"><samp><span>102.115.40.13</span></samp></td>
                                            </tr>
                                            <tr class="small v-a-m">
                                                <td>MAC</td>
                                                <td class="text-right v-a-m text-white"><samp><span>af:81:27:5b:c2:b2</span></samp></td>
                                            </tr>
                                            <tr class="small v-a-m">
                                                <td>
                                                    <i class="fa fa-long-arrow-down"></i>
                                                </td>
                                                <td class="text-right v-a-m text-white"><span class="m-r-1">893.00  KB/s</span>
                                                    <span>567.00 MB</span>
                                                </td>
                                            </tr>
                                            <tr class="small v-a-m">
                                                <td>
                                                    <i class="fa fa-long-arrow-up text-white"></i>
                                                </td>
                                                <td class="text-right v-a-m text-white"><span class="m-r-1">989.00  KB/s</span>
                                                    <span>95.00 MB</span>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <!-- END Table: LAN -->
                                    <!-- START Widget - Usage -->
                                    <ul class="list-group b-a-0 m-t-3">
                                        <li class="list-group-item">
                                            <i class="fa fa-hdd-o small m-r-1"></i> <span class="text-uppercase small m-t-0"><strong>Macintosh</strong> <span class="pull-right text-right text-white"><span>111.00</span></span>
                                        </span>
                                        <div class="progress b-r-a-0 m-t-1 m-b-1 h-3">
                                            <div class="progress-bar" role="progressbar" style="width: 60%">
                                                <span class="sr-only">60% Complete</span>
                                            </div>
                                        </div>
                                        <span class="text-uppercase small m-t-0"><strong class="text-white"><span>218.00 GB</span></strong>
                                        <span class="small"> / 436.00 GB</span></span>
                                    </li>
                                    <li class="list-group-item">
                                        <i class="fa fa-hdd-o small m-r-1"></i> <span class="text-uppercase small m-t-2"><strong>Windows</strong>
                                            <span class="pull-right text-right text-white"><span>263.00</span></span>
                                        </span>
                                        <div class="progress b-r-a-0 m-t-1 m-b-1 h-3">
                                            <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 90%">
                                                <span class="sr-only">60% Complete</span>
                                            </div>
                                        </div>
                                        <span class="text-uppercase small m-t-0"><strong class="text-white"><span>39.00 GB</span></strong>
                                        <span class="small"> / 812.00 GB</span></span>
                                    </li>
                                    <li class="list-group-item">
                                        <i class="fa fa-hdd-o small m-r-1"></i> <span class="text-uppercase small m-t-2"><strong>Linux</strong>
                                            <span class="pull-right text-right text-white"><span>591.00</span></span>
                                        </span>
                                        <div class="progress b-r-a-0 m-t-1 m-b-1 h-3">
                                            <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                                                <span class="sr-only">60% Complete</span>
                                            </div>
                                        </div>
                                        <span class="text-uppercase small m-t-0"><strong class="text-white"><span>178.00 GB</span></strong>
                                        <span class="small"> / 629.00 GB</span></span>
                                    </li>
                                </ul>
                                <!-- END Widget - Usage -->
                            </div>
                            <!-- END Tab: Statisticts -->

                            <!-- START Tab: Users -->
                            <div class="tab-pane fade p-r-1" id="right-sidebar-users" role="tabpanel">
                                <p class="small text-uppercase m-b-2 m-t-1"><strong>Users with Chat</strong></p>
                                <!-- START Search Input -->
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search for...">
                                    <span class="input-group-btn">
                                        <button class="btn btn-primary" type="button"><i class="fa fa-fw fa-search"></i></button>
                                    </span>
                                </div>
                                <!-- END Search Input -->
                                <!-- DodatkowyContent: data-target-extra-content wskazuje, że ten konkretny div ma być przykrywany przez kontener o id chatpanel -->
                                <div class="m-t-1" data-target-extra-content="chatpanel">


                                    <ul class="nav nav-pills nav-stacked">

                                        <li role="presentation">
                                            <p class="small text-uppercase m-t-2"><strong>Online (3)</strong></p>
                                        </li>

                                        <!-- START User Online (Small) -->
                                        <li role="presentation">
                                            <a href="#" class="extra-content-open">
                                                <div class="media">
                                                    <div class="media-left media-middle">
                                                        <div class="avatar avatar-image avatar-sm">
                                                            <img class="media-object img-circle" src="https://s3.amazonaws.com/uifaces/faces/twitter/justinrgraham/128.jpg" alt="Avatar">
                                                            <i class="avatar-status avatar-status-bottom bg-success b-brand-gray-darker"></i>
                                                        </div>
                                                    </div>
                                                    <div class="media-body">
                                                        <h5 class="m-t-0 m-b-0"><span>Mose Muller</span></h5>
                                                        <p class="small text-muted m-b-0"><span>Corporate Data Developer</span></p>
                                                    </div>
                                                    <div class="media-right media-middle">
                                                        <span class="badge">4</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <!-- START User Online (Small) -->

                                        <!-- START User Online (Small) -->
                                        <li role="presentation">
                                            <a href="#" class="extra-content-open">
                                                <div class="media">
                                                    <div class="media-left media-middle">
                                                        <div class="avatar avatar-image avatar-sm">
                                                            <img class="media-object img-circle" src="https://s3.amazonaws.com/uifaces/faces/twitter/dvdwinden/128.jpg" alt="Avatar">
                                                            <i class="avatar-status avatar-status-bottom bg-success b-brand-gray-darker"></i>
                                                        </div>
                                                    </div>
                                                    <div class="media-body">
                                                        <h5 class="m-t-0 m-b-0"><span>Helen Durgan</span></h5>
                                                        <p class="small text-gray-lighter m-b-0"><span>National Accounts Technician</span></p>
                                                    </div>

                                                    <div class="media-right media-middle">

                                                    </div>

                                                </div>
                                            </a>
                                        </li>
                                        <!-- START User Online (Small) -->

                                        <!-- START User Online (Small) -->
                                        <li role="presentation">
                                            <a href="#" class="extra-content-open">
                                                <div class="media">
                                                    <div class="media-left media-middle">
                                                        <div class="avatar avatar-image avatar-sm">
                                                            <img class="media-object img-circle" src="https://s3.amazonaws.com/uifaces/faces/twitter/adhamdannaway/128.jpg" alt="Avatar">
                                                            <i class="avatar-status avatar-status-bottom bg-success b-brand-gray-darker"></i>
                                                        </div>
                                                    </div>
                                                    <div class="media-body">
                                                        <h5 class="m-t-0 m-b-0"><span>Cathrine Ratke</span></h5>
                                                        <p class="small text-gray-lighter m-b-0"><span>Chief Mobility Supervisor</span></p>
                                                    </div>

                                                    <div class="media-right media-middle">

                                                        <span class="badge bg-danger">13</span>

                                                    </div>

                                                </div>
                                            </a>
                                        </li>
                                        <!-- START User Online (Small) -->
                                        <li role="presentation">
                                            <p class="small text-uppercase m-t-2"><strong>Busy (3)</strong></p>
                                        </li>

                                        <!-- START User Online (Busy) -->
                                        <li class="collapsed" role="presentation">
                                            <a href="#" class="extra-content-open">
                                                <div class="media">
                                                    <div class="media-left media-middle">
                                                        <div class="avatar avatar-image avatar-sm">
                                                            <img class="media-object img-circle" src="https://s3.amazonaws.com/uifaces/faces/twitter/alexivanichkin/128.jpg" alt="Avatar">
                                                            <i class="avatar-status avatar-status-bottom bg-danger b-brand-gray-darker"></i>
                                                        </div>
                                                    </div>
                                                    <div class="media-body">
                                                        <h5 class="m-t-0 m-b-0"><span>Devon Lynch</span></h5>
                                                        <p class="small text-muted m-b-0"><span>International Research Representative</span></p>
                                                    </div>

                                                    <div class="media-right media-middle">

                                                    </div>

                                                </div>
                                            </a>
                                        </li>
                                        <!-- START User Online (Busy) -->

                                        <!-- START User Online (Busy) -->
                                        <li role="presentation">
                                            <a href="#" class="extra-content-open">
                                                <div class="media">
                                                    <div class="media-left media-middle">
                                                        <div class="avatar avatar-image avatar-sm">
                                                            <img class="media-object img-circle" src="https://s3.amazonaws.com/uifaces/faces/twitter/cdavis565/128.jpg" alt="Avatar">
                                                            <i class="avatar-status avatar-status-bottom bg-danger b-brand-gray-darker"></i>
                                                        </div>
                                                    </div>
                                                    <div class="media-body">
                                                        <h5 class="m-t-0 m-b-0"><span>Nicola West</span></h5>
                                                        <p class="small text-muted m-b-0"><span>Dynamic Usability Representative</span></p>
                                                    </div>

                                                    <div class="media-right media-middle">

                                                    </div>

                                                </div>
                                            </a>
                                        </li>
                                        <!-- START User Online (Busy) -->

                                        <!-- START User Online (Busy) -->
                                        <li role="presentation">
                                            <a href="#" class="extra-content-open">
                                                <div class="media">
                                                    <div class="media-left media-middle">
                                                        <div class="avatar avatar-image avatar-sm">
                                                            <img class="media-object img-circle" src="https://s3.amazonaws.com/uifaces/faces/twitter/cbracco/128.jpg" alt="Avatar">
                                                            <i class="avatar-status avatar-status-bottom bg-danger b-brand-gray-darker"></i>
                                                        </div>
                                                    </div>
                                                    <div class="media-body">
                                                        <h5 class="m-t-0 m-b-0"><span>Rita Wunsch</span></h5>
                                                        <p class="small text-muted m-b-0"><span>Central Response Representative</span></p>
                                                    </div>

                                                    <div class="media-right media-middle">

                                                    </div>

                                                </div>
                                            </a>
                                        </li>
                                        <!-- START User Online (Busy) -->

                                        <li role="presentation">
                                            <p class="small text-uppercase m-t-2"><strong>Away (3)</strong></p>
                                        </li>

                                        <!-- START User Online (Away) -->
                                        <li role="presentation">
                                            <a href="#" class="extra-content-open">
                                                <div class="media">
                                                    <div class="media-left media-middle">
                                                        <div class="avatar avatar-image avatar-sm">
                                                            <img class="media-object img-circle" src="https://s3.amazonaws.com/uifaces/faces/twitter/jmfsocial/128.jpg" alt="Avatar">
                                                            <i class="avatar-status avatar-status-bottom bg-warning b-brand-gray-darker"></i>
                                                        </div>
                                                    </div>
                                                    <div class="media-body">
                                                        <h5 class="m-t-0 m-b-0"><span>Kristina Pacocha</span></h5>
                                                        <p class="small text-muted m-b-0"><span>Central Applications Producer</span></p>
                                                    </div>

                                                    <div class="media-right media-middle">

                                                    </div>

                                                </div>
                                            </a>
                                        </li>
                                        <!-- START User Online (Away) -->

                                        <!-- START User Online (Away) -->
                                        <li role="presentation">
                                            <a href="#" class="extra-content-open">
                                                <div class="media">
                                                    <div class="media-left media-middle">
                                                        <div class="avatar avatar-image avatar-sm">
                                                            <img class="media-object img-circle" src="https://s3.amazonaws.com/uifaces/faces/twitter/dvdwinden/128.jpg" alt="Avatar">
                                                            <i class="avatar-status avatar-status-bottom bg-warning b-brand-gray-darker"></i>
                                                        </div>
                                                    </div>
                                                    <div class="media-body">
                                                        <h5 class="m-t-0 m-b-0"><span>Adan Langosh</span></h5>
                                                        <p class="small text-muted m-b-0"><span>District Branding Director</span></p>
                                                    </div>

                                                    <div class="media-right media-middle">

                                                    </div>

                                                </div>
                                            </a>
                                        </li>
                                        <!-- START User Online (Away) -->

                                        <!-- START User Online (Away) -->
                                        <li role="presentation">
                                            <a href="#" class="extra-content-open">
                                                <div class="media">
                                                    <div class="media-left media-middle">
                                                        <div class="avatar avatar-image avatar-sm">
                                                            <img class="media-object img-circle" src="https://s3.amazonaws.com/uifaces/faces/twitter/ahmetalpbalkan/128.jpg" alt="Avatar">
                                                            <i class="avatar-status avatar-status-bottom bg-warning b-brand-gray-darker"></i>
                                                        </div>
                                                    </div>
                                                    <div class="media-body">
                                                        <h5 class="m-t-0 m-b-0"><span>Jillian Ruecker</span></h5>
                                                        <p class="small text-muted m-b-0"><span>Product Infrastructure Developer</span></p>
                                                    </div>

                                                    <div class="media-right media-middle">

                                                    </div>

                                                </div>
                                            </a>
                                        </li>
                                        <!-- START User Online (Away) -->

                                        <li role="presentation">
                                            <p class="small text-uppercase m-t-2"><strong>Offline (3)</strong></p>
                                        </li>

                                        <!-- START User Online (Away) -->
                                        <li role="presentation">
                                            <a href="#" class="extra-content-open">
                                                <div class="media">
                                                    <div class="media-left media-middle">
                                                        <div class="avatar avatar-image avatar-sm">
                                                            <img class="media-object img-circle" src="https://s3.amazonaws.com/uifaces/faces/twitter/ramanathan_pdy/128.jpg" alt="Avatar">
                                                            <i class="avatar-status avatar-status-bottom bg-gray-lighter b-brand-gray-darker"></i>
                                                        </div>
                                                    </div>
                                                    <div class="media-body">
                                                        <h5 class="m-t-0 m-b-0"><span>Anibal Glover</span></h5>
                                                        <p class="small text-muted m-b-0"><span>Principal Operations Facilitator</span></p>
                                                    </div>

                                                    <div class="media-right media-middle">

                                                    </div>

                                                </div>
                                            </a>
                                        </li>
                                        <!-- START User Online (Away) -->

                                        <!-- START User Online (Away) -->
                                        <li role="presentation">
                                            <a href="#" class="extra-content-open">
                                                <div class="media">
                                                    <div class="media-left media-middle">
                                                        <div class="avatar avatar-image avatar-sm">
                                                            <img class="media-object img-circle" src="https://s3.amazonaws.com/uifaces/faces/twitter/shinze/128.jpg" alt="Avatar">
                                                            <i class="avatar-status avatar-status-bottom bg-gray-lighter b-brand-gray-darker"></i>
                                                        </div>
                                                    </div>
                                                    <div class="media-body">
                                                        <h5 class="m-t-0 m-b-0"><span>Rogers Botsford</span></h5>
                                                        <p class="small text-muted m-b-0"><span>Investor Metrics Producer</span></p>
                                                    </div>

                                                    <div class="media-right media-middle">

                                                    </div>

                                                </div>
                                            </a>
                                        </li>
                                        <!-- START User Online (Away) -->

                                        <!-- START User Online (Away) -->
                                        <li role="presentation">
                                            <a href="#" class="extra-content-open">
                                                <div class="media">
                                                    <div class="media-left media-middle">
                                                        <div class="avatar avatar-image avatar-sm">
                                                            <img class="media-object img-circle" src="https://s3.amazonaws.com/uifaces/faces/twitter/pierrestoffe/128.jpg" alt="Avatar">
                                                            <i class="avatar-status avatar-status-bottom bg-gray-lighter b-brand-gray-darker"></i>
                                                        </div>
                                                    </div>
                                                    <div class="media-body">
                                                        <h5 class="m-t-0 m-b-0"><span>Rubie Mante</span></h5>
                                                        <p class="small text-muted m-b-0"><span>Lead Mobility Producer</span></p>
                                                    </div>

                                                    <div class="media-right media-middle">

                                                    </div>

                                                </div>
                                            </a>
                                        </li>
                                        <!-- START User Online (Away) -->

                                    </ul>

                                </div>

                                <!-- START Chat Content (Hide Tab: Users) -->
                                <div class="right-sidebar-extra-content p-r-2" id="chatpanel">

                                    <div class="panel panel-default m-t-3">
                                        <div class="panel-heading">
                                            <div class="row">
                                                <div class="col-xs-3"><a class="extra-content-close small" href="javascript:void(0);"><i class="fa fa-fw fa-chevron-left"></i></a></div>
                                                <div class="col-xs-6 text-center"><span>G. Marks</span></div>
                                                <div class="col-xs-3 text-right"><a href="#" class="text-gray-lighter"><i class="fa fa-fw fa-circle text-success"></i></a></div>
                                            </div>
                                        </div>

                                        <div class="panel-body">

                                            <!-- START Left Chat -->
                                            <div class="media">
                                                <div class="media-left">
                                                    <div class="avatar avatar-image avatar-sm">
                                                        <img class="media-object img-circle" src="{{ asset('assets/images/avatars/default-avatar.png') }}" alt="Avatar">
                                                        <i class="avatar-status avatar-status-bottom bg-warning b-brand-gray-darker"></i>
                                                    </div>
                                                </div>
                                                <div class="media-body">
                                                    <div class="panel-default">
                                                        <div class="panel-body bg-gray-dark text-white b-r-a-3">
                                                            <span>Dolor sit laudantium ex rerum laboriosam et inventore.</span>
                                                        </div>
                                                    </div>
                                                    <h6 class="m-t-1"><span>Delia Roberts</span>   <small><span> 11:60</span></small></h6>
                                                </div>
                                            </div>
                                            <!-- END Left Chat -->

                                            <!-- START Right Chat -->
                                            <div class="media m-b-0">
                                                <div class="media-body">
                                                    <div class="panel-default">
                                                        <div class="panel-body bg-primary text-white b-r-a-3">
                                                            <span>Sint animi aliquam ipsa dolorem.</span>
                                                        </div>
                                                    </div>
                                                    <h6 class="m-t-1"><span>Tiana Gleichner</span>   <small><span> 03:04</span></small></h6>
                                                </div>
                                                <div class="media-right">
                                                    <div class="avatar avatar-image avatar-sm">
                                                        <img class="media-object img-circle" alt="Avatar" src="https://s3.amazonaws.com/uifaces/faces/twitter/baumann_alex/128.jpg">
                                                        <i class="avatar-status avatar-status-bottom bg-danger b-brand-gray-darker"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- END Right Chat -->

                                            <!-- START Left Chat -->
                                            <div class="media">
                                                <div class="media-left">
                                                    <div class="avatar avatar-image avatar-sm">
                                                        <img class="media-object img-circle" src="{{ asset('assets/images/avatars/default-avatar.png') }}" alt="Avatar">
                                                        <i class="avatar-status avatar-status-bottom bg-success b-brand-gray-darker"></i>
                                                    </div>
                                                </div>
                                                <div class="media-body">
                                                    <div class="panel-default">
                                                        <div class="panel-body bg-gray-dark text-white b-r-a-3">
                                                            <span>Quibusdam non rerum veritatis. Praesentium numquam adipisci. Repellendus voluptate quam consequatur voluptatem quidem eius dolores. Et consequatur rerum voluptatem tempore corrupti quaerat cumque illum autem. Aut laborum sunt tenetur vel corporis nemo non aut debitis.</span>
                                                        </div>
                                                    </div>
                                                    <h6 class="m-t-1"><span>Travon Schamberger</span>   <small><span>06:05</span></small></h6>
                                                </div>
                                            </div>
                                            <!-- END Left Chat -->

                                            <!-- START Right Chat -->
                                            <div class="media m-b-0">
                                                <div class="media-body">
                                                    <div class="panel-default">
                                                        <div class="panel-body bg-gray-dark text-white b-r-a-3">
                                                            <span>Mollitia tenetur ipsa aut nam id in maxime veniam.</span>
                                                        </div>
                                                    </div>
                                                    <h6 class="m-t-1"><span>Monserrate Abshire</span>   <small><span> 02:58</span></small></h6>
                                                </div>
                                                <div class="media-right">
                                                    <div class="avatar avatar-image avatar-sm">
                                                        <img class="media-object img-circle" alt="Avatar" src="https://s3.amazonaws.com/uifaces/faces/twitter/lososina/128.jpg">
                                                        <i class="avatar-status avatar-status-bottom bg-danger b-brand-gray-darker"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- END Right Chat -->

                                        </div>

                                        <!-- START Input Your Message -->
                                        <div class="panel-footer">
                                            <div class="input-group input-group-sm">
                                                <span class="input-group-btn">
                                                    <button class="btn btn-default" type="button">
                                                        <i class="fa fa-fw fa-plus"></i>
                                                    </button>
                                                </span>
                                                <input type="text" class="form-control" placeholder="Your Message...">
                                                <span class="input-group-btn">
                                                    <button class="btn btn-primary" type="button">Go!</button>
                                                </span>
                                            </div>
                                        </div>
                                        <!-- END Input Your Message -->

                                    </div>

                                </div>
                                <!-- END Chat Content (Hide Tab: Users) -->
                            </div>
                            <!-- END Tab: Users -->

                            <!-- START Tab: Settings -->
                            <div class="tab-pane fade p-r-1" id="right-sidebar-settings" role="tabpanel">

                                <p class="text-uppercase small m-t-1 m-b-2"><strong>Settings</strong></p>

                                <div class="row m-b-1">
                                    <div class="col-sm-6"><span class="text-white">Notifications</span></div>
                                    <div class="col-sm-6 text-right"> <input type="checkbox" class="js-switch-small" checked="checked"></div>
                                </div>
                                <p class="m-b-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>

                                <div class="row m-b-1">
                                    <div class="col-sm-6"><span class="text-white">Activity</span></div>
                                    <div class="col-sm-6 text-right"><input type="checkbox" class="js-switch-small-primary" checked="checked"></div>
                                </div>
                                <p class="m-b-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>

                                <div class="row m-b-1">
                                    <div class="col-sm-6"><span class="text-white">Statisticts</span></div>
                                    <div class="col-sm-6 text-right"><input type="checkbox" class="js-switch-small-warning" checked="checked"></div>
                                </div>
                                <p class="m-b-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>

                                <div class="row m-b-1">
                                    <div class="col-sm-9"><span class="text-white">Settings for Responsive</span></div>
                                    <div class="col-sm-3 text-right"><input type="checkbox" class="js-switch-small-danger" checked="checked"></div>
                                </div>
                                <p class="m-b-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>

                            </div>
                            <!-- END Tab: Settings -->

                            <!-- START Tab: Timeline -->
                            <div class="tab-pane fade p-r-1" id="right-sidebar-timeline" role="tabpanel">

                                <p class="text-uppercase small m-t-1 m-b-2"><strong>Timeline</strong></p>

                                <!-- START Timeline - Active Entry (Day) -->
                                <div class="timeline">
                                    <!-- Timeline - Badge Date -->
                                    <div class="timeline-date">
                                        <span class="badge">Today</span>
                                    </div>
                                    <div class="timeline-item p-r-1">
                                        <!-- Timeline - Mini Icon -->
                                        <div class="timeline-icon">
                                            <i class="fa fa-fw fa-times-circle text-danger"></i>
                                        </div>

                                        <!-- Timeline - Icon  -->
                                        <div class="timeline-item-head clearfix m-b-0">
                                            <!-- Timeline - Header & Subtitle -->

                                            <!-- START Avatar, Message & Time -->
                                            <div class="row">

                                                <div class="col-lg-12 m-l-1">

                                                    <span class="label label-danger label-outline">Alert</span>
                                                    <br>
                                                    <p class="text-white m-t-1"><span>indexing the feed won&apos;t do anything, we need to bypass the wireless CSS system!</span></p>
                                                    <p class="text-nowrap small"><span>13-May-2016, 09:49</span>
                                                    </p>
                                                </div>
                                            </div>
                                            <!-- END Avatar, Message & Time -->

                                        </div>
                                    </div>
                                </div>
                                <!-- END Timeline - Active Entry (Day) -->

                                <!-- START Timeline - Active Entry -->
                                <div class="timeline">
                                    <div class="timeline-item p-r-1">
                                        <!-- Timeline - Mini Icon -->
                                        <div class="timeline-icon">
                                            <i class="fa fa-fw fa-exclamation-circle text-warning"></i>
                                        </div>

                                        <!-- Timeline - Icon  -->
                                        <div class="timeline-item-head clearfix m-b-0">
                                            <!-- Timeline - Header & Subtitle -->

                                            <!-- START Avatar, Message & Time -->
                                            <div class="row">

                                                <div class="col-lg-12 m-l-1">

                                                    <span class="label label-warning label-outline">Warning</span>
                                                    <br>
                                                    <p class="text-white m-t-1"><span>The AGP interface is down, index the virtual bandwidth so we can copy the GB port!</span></p>
                                                    <p class="text-nowrap small"><span>28-Feb-2015, 06:24</span>
                                                    </p>
                                                </div>
                                            </div>
                                            <!-- END Avatar, Message & Time -->

                                        </div>
                                    </div>
                                </div>
                                <!-- END Timeline - Active Entry -->

                                <!-- START Timeline - Active Entry -->
                                <div class="timeline">
                                    <div class="timeline-item p-r-1">
                                        <!-- Timeline - Mini Icon -->
                                        <div class="timeline-icon">
                                            <i class="fa fa-fw fa-info-circle text-info"></i>
                                        </div>

                                        <!-- Timeline - Icon  -->
                                        <div class="timeline-item-head clearfix m-b-0">
                                            <!-- Timeline - Header & Subtitle -->

                                            <!-- START Avatar, Message & Time -->
                                            <div class="row">

                                                <div class="col-lg-12 m-l-1">

                                                    <span class="label label-info label-outline">Info</span>
                                                    <br>
                                                    <p class="text-white m-t-1">15 Files Uploaded</p>
                                                    <p class="text-nowrap small"><span>07-Oct-2015, 08:29</span>
                                                    </p>
                                                    <i class="m-l-1 fa fa-file-text-o fa-fw"></i> read_me.txt<br>
                                                    <i class="m-l-1 fa fa-file-zip-o fa-fw"></i> all-files.zip<br>
                                                    <i class="m-l-1 fa fa-file-word-o fa-fw"></i> alice-feedback.doc<br>

                                                    <span class="badge m-t-1 m-b-1">+12</span>

                                                </div>
                                            </div>
                                            <!-- END Avatar, Message & Time -->

                                        </div>
                                    </div>
                                </div>
                                <!-- END Timeline - Active Entry -->

                                <!-- START Timeline - Active Entry -->
                                <div class="timeline">
                                    <div class="timeline-item p-r-1">
                                        <!-- Timeline - Mini Icon -->
                                        <div class="timeline-icon">
                                            <i class="fa fa-fw fa-plus-circle text-primary"></i>
                                        </div>

                                        <!-- Timeline - Icon  -->
                                        <div class="timeline-item-head clearfix m-b-0">
                                            <!-- Timeline - Header & Subtitle -->

                                            <!-- START Avatar, Message & Time -->
                                            <div class="row">

                                                <div class="col-lg-12 m-l-1">

                                                    <span class="label label-primary label-outline">Message</span>
                                                    <br>
                                                    <p class="text-white m-t-1">6 users have been accepted by the Admin</p>
                                                    <p class="text-nowrap small"><span>16-Dec-2016, 08:14</span>
                                                    </p>
                                                    <div class="m-b-1">
                                                        <img class="img-circle avatar avatar-sm" src="https://s3.amazonaws.com/uifaces/faces/twitter/incubo82/128.jpg" alt="Avatar">
                                                        <img class="img-circle avatar avatar-sm" src="https://s3.amazonaws.com/uifaces/faces/twitter/jackiesaik/128.jpg" alt="Avatar">
                                                        <img class="img-circle avatar avatar-sm" src="https://s3.amazonaws.com/uifaces/faces/twitter/sur4dye/128.jpg" alt="Avatar">
                                                        <img class="img-circle avatar avatar-sm" src="https://s3.amazonaws.com/uifaces/faces/twitter/saschamt/128.jpg" alt="Avatar">
                                                        <img class="img-circle avatar avatar-sm" src="https://s3.amazonaws.com/uifaces/faces/twitter/ludwiczakpawel/128.jpg" alt="Avatar">
                                                        <img class="img-circle avatar avatar-sm" src="https://s3.amazonaws.com/uifaces/faces/twitter/tanveerrao/128.jpg" alt="Avatar">
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- END Avatar, Message & Time -->

                                        </div>
                                    </div>
                                </div>
                                <!-- END Timeline - Active Entry -->

                                <!-- START Timeline - Active Entry (Day) -->
                                <div class="timeline">
                                    <!-- Timeline - Badge Date -->
                                    <div class="timeline-date">
                                        <span class="badge">Yesterday</span>
                                    </div>
                                    <div class="timeline-item p-r-1">
                                        <!-- Timeline - Mini Icon -->
                                        <div class="timeline-icon">
                                            <i class="fa fa-fw fa-check-circle text-success"></i>
                                        </div>

                                        <!-- Timeline - Icon  -->
                                        <div class="timeline-item-head clearfix m-b-0">
                                            <!-- Timeline - Header & Subtitle -->

                                            <!-- START Avatar, Message & Time -->
                                            <div class="row">

                                                <div class="col-lg-12 m-l-1">

                                                    <span class="label label-success label-outline">Success</span>
                                                    <br>
                                                    <p class="text-white m-t-1"><span>If we quantify the sensor, we can get to the RAM card through the bluetooth HDD array!</span></p>
                                                    <p class="text-nowrap small"><span>21-Mar-2014, 08:57</span>
                                                    </p>

                                                    <p><span>Saepe molestias omnis dolorum officia vel qui.</span></p>
                                                </div>
                                            </div>
                                            <!-- END Avatar, Message & Time -->

                                        </div>
                                    </div>
                                </div>
                                <!-- END Timeline - Active Entry (Day) -->

                                <!-- START Timeline - Active Entry -->
                                <div class="timeline">

                                    <div class="timeline-item p-r-1">
                                        <!-- Timeline - Mini Icon -->
                                        <div class="timeline-icon">
                                            <i class="fa fa-fw fa-circle text-gray"></i>
                                        </div>

                                        <!-- Timeline - Icon  -->
                                        <div class="timeline-item-head clearfix m-b-0">
                                            <!-- Timeline - Header & Subtitle -->

                                            <!-- START Avatar, Message & Time -->
                                            <div class="row">

                                                <div class="col-lg-12 m-l-1">

                                                    <span class="label label-gray label-outline">Obsolete</span>
                                                    <br>
                                                    <del><p class="m-t-1"><span>We need to input the optical USB matrix!</span></p></del>
                                                    <p class="text-nowrap small"><span>02-Nov-2013, 10:40</span>
                                                    </p>
                                                </div>
                                            </div>
                                            <!-- END Avatar, Message & Time -->

                                        </div>
                                    </div>
                                </div>
                                <!-- END Timeline - Active Entry  -->
                            </div>
                            <!-- END Tab: Timeline -->
                        </div>
                        <!-- END Tabs All Content --></div>
                    </div>
                </div>
                <!-- START Content Show in Full-Height -->
                <div class="right-sidebar-extra-content" id="chatpanel2">
                    <a href="#" class="extra-content-close">Back</a>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id, ipsa, rem. Accusantium autem blanditiis dolor ducimus earum eius eligendi, eos est exercitationem id illo in mollitia neque optio pariatur placeat quisquam recusandae reiciendis repellat reprehenderit. Amet at deleniti dicta distinctio dolorem eveniet hic id, iusto magnam maxime modi officiis perspiciatis porro praesentium quas, recusandae repudiandae rerum tempora totam unde velit voluptate, voluptatem. Alias consequatur consequuntur et nisi quibusdam quo quos ut. Asperiores commodi deserunt dicta dolor eligendi ex fugit, harum itaque laborum maiores mollitia nam nihil obcaecati officiis quae quis repellendus tenetur voluptate. Eos ratione saepe voluptatibus? Animi, illo magni!</p>
                </div>
                <!-- END Content Show in Full-Height -->
            </div>
            <!-- START Footer -->
            <footer>
                <div class="container-fluid">
                    <p class="text-gray-dark">
                        <strong class="m-r-1">SPIN Dashboard </strong>
                        <span class="text-gray-dark">&#xA9; 2009 - 2016. Made by
                            <i class="fa fa-fw fa-heart text-danger"></i> New York, US</span>
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
        </body>

        </html>
