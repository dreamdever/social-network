<nav class="navigation">
    <!-- START Navbar -->
    <div class="navbar-inverse navbar navbar-fixed-top">
        <div class="container-fluid">

            <div class="navbar-header">
                <a class="current navbar-brand" href="{{ route('home') }}">
                    <img alt="Spin Logo Inverted" class="h-20" src="{{ asset('assets/images/spin-logo-inverted-@2X.png') }}">
                </a>
                <button class="navbar-toggle collapsed" data-target="#navbar" data-toggle="collapse" type="button">
                    <i class="fa fa-fw fa-user text-white"></i>
                </button>
                <button class="action-sidebar-open navbar-toggle collapsed" type="button">
                    <i class="fa fa-fw fa-bars text-white"></i>
                </button>
            </div>

            <div class="collapse navbar-collapse" id="navbar">
                <form action="{{ route('search') }}" method="post">
                <!-- START Search Mobile -->
                <div class="form-group hidden-lg hidden-md hidden-sm">
                    <div class="input-group hidden-lg hidden-md">
                            <input name="name" type="text" class="form-control" placeholder="Hľadať...">
                            <span class="input-group-btn">
                                <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-search"></i></button>
                            </span>
                    </div>
                </div>

                </form>
                <!-- END Search Mobile -->

                <form action="{{ route('search') }}" method="post">
                    {{ csrf_field() }}
                    <!-- START Left Side Navbar -->
                    <ul class="nav navbar-nav navbar-left clearfix yamm">

                        <!-- START Switch Sidebar ON/OFF -->
                        <li id="sidebar-switch" class="hidden-xs">
                            <a class="action-toggle-sidebar-slim" data-placement="bottom" data-toggle="tooltip" href="#" title="Slim sidebar on/off">
                                <i class="fa fa-lg fa-bars fa-fw"></i>
                            </a>
                        </li>
                        <!-- END Switch Sidebar ON/OFF -->

                        <!-- START Menu Only Visible on Navbar -->
                        <li id="top-menu-switch" class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Menu <i class="fa fa-fw fa-caret-down"></i></a>
                        </li>
                        <!-- END Menu Only Visible on Navbar -->

                        <li class="spin-search-box clearfix hidden-xs">
                            <a href="#" class="pull-left">
                                <i class="fa fa-search fa-lg icon-inactive"></i>
                                <i class="fa fa-close fa-lg icon-active"></i>
                            </a>
                                <div class="input-group input-group-sm pull-left p-10">
                                    <input name="name" type="text" class="form-control" placeholder="Hľadať...">
                                    <span class="input-group-btn">
                                        <button class="btn btn-primary" type="submit">
                                            <i class="fa fa-search"></i>
                                        </button>
                                    </span>
                                </div>
                        </li>

                    </ul>
                    <!-- START Left Side Navbar -->
                </form>
                <!-- START Right Side Navbar -->
                <ul class="nav navbar-nav navbar-right">

                    <li role="separator" class="divider hidden-lg hidden-md hidden-sm"></li>
                    <li class="dropdown-header hidden-lg hidden-md hidden-sm text-gray-lighter text-uppercase">
                        <strong>Your Profile</strong>
                    </li>

                    <li class="dropdown">
                        <a class="dropdown-toggle user-dropdown" data-toggle="dropdown" href="#" role="button">
                            <span class="m-r-1">{{ Auth::user()->name }}</span>
                            <div class="avatar avatar-image avatar-sm avatar-inline">
                                <img alt="User" src="{{ asset(Auth::user()->img) }}">
                            </div>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-header text-gray-lighter">
                                <strong class="text-uppercase">Účet</strong>
                            </li>
                            <li role="separator" class="divider"></li>
                            <li>
                                <a href="{{ route('profile') }}">Môj profil</a>
                            </li>
                            <li role="separator" class="divider"></li>
                            <li>
                                <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                Odhlásiť
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- END Right Side Navbar -->
        </div>


    </div>
</div>
<!-- END Navbar -->

<!-- START Sidebars -->
<aside class="navbar-default sidebar">
    <div class="sidebar-overlay-head">
        <img src="{{ asset('assets/images/spin-logo-inverted.png') }}" alt="Logo" width="90">
        <a href="#" class="sidebar-switch action-sidebar-close">
            <i class="fa fa-times"></i>
        </a>
    </div>

    <div class="sidebar-content">
        <div class="add-on-container">
            <div class="sidebar-container-default sidebar-section">
                <div class="media">
                    <div class="media-left media-top">
                        <div class="avatar avatar-image avatar-inline">
                            <img src="{{ asset(Auth::user()->img) }}" alt="Avatar">
                            <i class="avatar-status bg-success avatar-status-bottom"></i>
                        </div>
                    </div>
                    <div class="media-body">
                        <h5 class="media-heading m-t-0 m-b-0"><span>{{ Auth::user()->name }}</span></h5>
                        <small>{{ Auth::user()->email }}</small>
                    </div>
                    <div class="media-right media-middle">
                        <a href="{{route('profile')}}" class="text-default"><i class="fa fa-fw fa-gear"></i></a>
                    </div>
                </div>


            </div>
            <!-- END Sidebar Header -->



            <div class="sidebar-container-slim">
                <div class="avatar avatar-image avatar-sm">
                    <img src="{{ asset(Auth::user()->img) }}" alt="Avatar">
                    <i class="avatar-status bg-success avatar-status-bottom"></i>
                </div>
            </div>
        </div>

        <div class="sidebar-default-visible text-muted small text-uppercase sidebar-section p-y-2">
            <strong>
                Navigácia
            </strong>
        </div>

        <!-- START Tree Sidebar Common -->
        <ul class="side-menu">
            <li class="">
                <a href="{{ route('home') }}">
                    <i class="fa fa-home fa-lg"></i><span class="nav-label">Domov</span>
                </a>
            </li>

            <li class="">
                <a href="{{ route('messages') }}">
                    <i class="fa fa-comment fa-lg"></i><span class="nav-label">Správy</span>
                </a>
            </li>

            <li class="">
                <a href="{{ route('friends') }}">
                    <i class="fa fa-users fa-lg"></i><span class="nav-label">Priatelia</span>
                    <span class="badge badge-outline badge-gray-lighter pull-right">{{ DB::table('friendship')->where('user1_id', Auth::user()->id)->orWhere('user2_id', Auth::user()->id)->count() }}</span>
                </a>
            </li>

        </ul>
        <!-- END Tree Sidebar Common  -->


        <div class="sidebar-default-visible">
            <hr>
        </div>


</aside>



</nav>
