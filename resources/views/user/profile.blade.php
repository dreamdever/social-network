@extends('layouts.master')

@section('title', 'Profil')

@section('content')
<div class="content">
    <!-- START Sub-Navbar with Header only-->
    <div class="sub-navbar sub-navbar__header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-header m-t-0">
                        <h3 class="m-t-0">Profile Details</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END Sub-Navbar with Header only-->

    <!-- START Sub-Navbar with Header and Breadcrumbs-->
    <div class="sub-navbar sub-navbar__header-breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 sub-navbar-column">
                    <div class="sub-navbar-header">
                        <h3>Profile Details</h3>
                    </div>
                    <ol class="breadcrumb navbar-text navbar-right no-bg">
                        <li class="current-parent">
                            <a class="current-parent" href="../index.html">
                                <i class="fa fa-fw fa-home"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Apps
                            </a>
                        </li>
                        <li class="active">Profile Details</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- END Sub-Navbar with Header and Breadcrumbs-->


    <div class="container">
        <!-- START EDIT CONTENT -->
        <div class="row">
            <div class="col-md-12">
                <div class="row">

                    <!-- START Left Column -->
                    <div class="col-lg-4 m-b-2">

                        <!-- START Avatar with Name -->
                        <div class="media">
                            <div class="media-left p-r-2">
                                <div class="center-block">
                                    <div class="avatar avatar-lg center-block">
                                        <div class="avatar avatar-lg avatar-icon visible-lg-inline-block visible-md-inline-block visible-sm-inline-block visible-xs-inline-block m-r-1 bg-gray-light">
                                            <i class="avatar-content fa fa-user"></i>
                                        </div>
                                        <i class="avatar-status avatar-status-bottom bg-danger b-brand-gray-darker"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="media-body">
                                <h4 class="m-b-0"><span>{{ Auth::user()->name }}</span> <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Favorites">
                                    <i class="fa fa-fw fa-star-o text-muted fa-lg"></i></a> </h4>
                                    <p class="m-t-0"><span>Investor Directives Agent</span></p>

                                    <div class="btn-toolbar" role="toolbar" aria-label="...">
                                        <div class="btn-group" role="group" aria-label="...">
                                            <!-- Standard button -->
                                            <button type="button" class="btn btn-primary"><i class="fa fa-fw fa-envelope-o"></i><span class="hidden-xs m-l-1">Send Email</span></button>

                                        </div>
                                        <div class="btn-group" role="group" aria-label="...">
                                            <!-- Standard button -->
                                            <a role="button" href="profile-edit.html" class="btn btn-default" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-fw fa-pencil"></i></a>

                                        </div>
                                        <div class="btn-group" role="group" aria-label="...">
                                            <button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-fw fa-trash"></i></button>
                                        </div>

                                    </div>

                                </div>
                            </div>
                            <!-- END Avatar with Name -->

                            <div class="hr-text hr-text-left">
                                <h6 class="text-white"><strong>Profile</strong></h6>
                            </div>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                            <div class="hr-text hr-text-left m-t-2">
                                <h6 class="text-white"><strong>Labels</strong></h6>
                            </div>
                            <span class="label label-gray label-outline"><span>Home</span></span>
                            <span class="label label-gray label-outline"><span>Tools</span></span>
                            <span class="label label-gray label-outline"><span>Home</span></span>

                            <div class="hr-text hr-text-left m-t-2">
                                <h6 class="text-white"><strong>Social</strong></h6>
                            </div>

                            <a href="#" data-toggle="tooltip" data-placement="top" title="Linkedin Profile">
                                <i class="fa fa-fw fa-linkedin-square text-muted fa-lg"></i></a>

                                <a href="#" data-toggle="tooltip" data-placement="top" title="Facebook Profile"><i class="fa fa-fw fa-facebook-square text-muted fa-lg"></i></a>

                                <a href="#" data-toggle="tooltip" data-placement="top" title="Twitter Profile"><i class="fa fa-fw fa-twitter-square text-muted fa-lg"></i></a>

                            </div>
                            <!-- START Left Column -->

                            <!-- START Tabs Content -->
                            <div class="col-lg-8">

                                <!-- Tabs Buttons -->
                                <ul class="nav nav-tabs">

                                    <li role="presentation" class="active">
                                        <a aria-expanded="true" data-toggle="tab" href="#tab-overview" role="tab">Overview</a></li>

                                        <li role="presentation">
                                            <a aria-expanded="true" data-toggle="tab" href="#tab-detail-contact" role="tab"><span class="hidden-xs">Detail</span> Contact</a></li>

                                            <li role="presentation">
                                                <a aria-expanded="true" data-toggle="tab" href="#tab-chat" role="tab">Chat</a></li>

                                                <li role="presentation">
                                                    <a aria-expanded="true" data-toggle="tab" href="#tab-messages" role="tab">Messages  <span class="badge hidden-xs">4</span> </a></li>


                                                </ul>

                                                <!-- START Tabs Content -->
                                                <div class="tab-content">

                                                    <!-- START Tab: Detail Contact -->
                                                    <div class="tab-pane fade p-r-1" id="tab-detail-contact" role="tabpanel">
                                                        <div class="hr-text hr-text-left m-t-1">
                                                            <h6 class="text-white"><strong>Contacts</strong></h6>
                                                        </div>
                                                        <dl class="dl-horizontal text-left">
                                                            <dt class="text-left">Phone</dt>
                                                            <dd class="text-left text-white"><span>775-027-5134</span></dd>
                                                            <dt class="text-left">Mobile</dt>
                                                            <dd class="text-left text-white"><span>628-674-2239</span></dd>
                                                            <dt class="text-left">Fax</dt>
                                                            <dd class="text-left text-white"><span>773-527-6383</span></dd>
                                                            <dt class="text-left">Email</dt>
                                                            <dd class="text-left text-white"><a href="#"><span>Camden.Prosacco69@gmail.com</span></a></dd>
                                                            <dt class="text-left">Skype</dt>
                                                            <dd class="text-left text-white"><a href="#"><span>Raymundo_Bednar</span></a></dd>
                                                        </dl>
                                                        <div class="hr-text hr-text-left m-t-1">
                                                            <h6 class="text-white"><strong>Social</strong></h6>
                                                        </div>
                                                        <dl class="dl-horizontal text-left">
                                                            <dt class="text-left"><i class="fa fa-fw fa-linkedin-square"></i> Linkedin</dt>
                                                            <dd class="text-left text-white"><a href="#">http://lnkd.in/<span>Cecilia.Cormier</span></a></dd>
                                                            <dt class="text-left"><i class="fa fa-fw fa-facebook-square"></i> Facebook</dt>
                                                            <dd class="text-left text-white"><a href="#">http://fb.com/<span>Jessyca.Spinka</span></a></dd>
                                                            <dt class="text-left"><i class="fa fa-fw fa-twitter-square"></i> Twitter</dt>
                                                            <dd class="text-left text-white"><a href="#">http://twitter.com/<span>Johnathan35</span></a></dd>
                                                        </dl>
                                                        <div class="hr-text hr-text-left m-t-1">
                                                            <h6 class="text-white"><strong>Address</strong></h6>
                                                        </div>
                                                        <dl class="dl-horizontal text-left">
                                                            <dt class="text-left">Address</dt>
                                                            <dd class="text-left text-white"><span>154 Borer Crossing</span></dd>
                                                            <dt class="text-left">City</dt>
                                                            <dd class="text-left text-white"><span>Sanfordbury</span></dd>
                                                            <dt class="text-left">State</dt>
                                                            <dd class="text-left text-white"><span>Georgia</span></dd>
                                                            <dt class="text-left">ZIP Code</dt>
                                                            <dd class="text-left text-white"><span>47991-5403</span></dd>
                                                        </dl>
                                                    </div>
                                                    <!-- END Tab: Detail Contact -->

                                                    <!-- START Tab: Chat -->
                                                    <div class="tab-pane fade p-r-1" id="tab-chat" role="tabpanel">

                                                        <!-- START Panel Chat -->
                                                        <div class="panel panel-default b-a-2 no-bg b-gray-dark m-t-2">
                                                            <div class="panel-heading">

                                                                <div class="row">
                                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                        <h4 class="panel-title">Chat with <span>Wilbert Halvorson</span></h4>
                                                                        <div class="dropdown hidden-lg hidden-md hidden-sm">
                                                                            <button class="btn btn-default m-t-1 btn-block dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                                                                Options
                                                                                <span class="caret"></span>
                                                                            </button>
                                                                            <ul class="dropdown-menu dropdown-menu-right">
                                                                                <li><a href="#"><i class="fa text-gray-lighter fa-fw fa-comment m-r-1"></i>Private Message</a></li>
                                                                                <li><a href="#"><i class="fa text-gray-lighter fa-fw fa-search m-r-1"></i>Search This Thread</a></li>
                                                                                <li role="separator" class="divider"></li>
                                                                                <li><a href="#"><i class="fa text-gray-lighter fa-fw fa-close m-r-1"></i>Block User</a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-lg-2 col-lg-offset-4 col-md-2 col-md-offset-4 col-sm-2 col-sm-offset-4 hidden-xs text-right">
                                                                        <div class="dropdown">
                                                                            <button class="btn btn-default btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                                                                <i class="fa fa-fw fa-gear"></i>
                                                                                <span class="caret"></span>
                                                                            </button>
                                                                            <ul class="dropdown-menu dropdown-menu-right">
                                                                                <li><a href="#"><i class="fa text-gray-lighter fa-fw fa-comment m-r-1"></i>Private Message</a></li>
                                                                                <li><a href="#"><i class="fa text-gray-lighter fa-fw fa-search m-r-1"></i>Search This Thread</a></li>
                                                                                <li role="separator" class="divider"></li>
                                                                                <li><a href="#"><i class="fa text-gray-lighter fa-fw fa-close m-r-1"></i>Block User</a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>

                                                            <div class="scroll-1300">
                                                                <div class="panel-body">

                                                                    <!-- START Left Chat -->
                                                                    <div class="media">
                                                                        <div class="media-left">
                                                                            <div class="avatar">
                                                                                <img src="https://s3.amazonaws.com/uifaces/faces/twitter/hgharrygo/128.jpg" alt="Avatar" class="media-object img-circle">
                                                                                <i class="avatar-status avatar-status-bottom bg-warning b-brand-gray-darker"></i>
                                                                            </div>
                                                                        </div>
                                                                        <div class="media-body">
                                                                            <div class="panel-default">
                                                                                <div class="panel-body bg-gray text-white b-r-a-3">
                                                                                    <span>At ipsa cupiditate excepturi et quia possimus labore. Illo quia facilis adipisci impedit dolore sed autem debitis qui. Non quia autem necessitatibus atque minima ipsa sunt quos. Sint blanditiis rerum. Amet omnis porro aperiam dolorum eos vel praesentium.</span>
                                                                                </div>
                                                                            </div>
                                                                            <h5 class="m-t-1"><span>Gerhard White</span>   <small><span>at Sat Oct 29 2016 22:13:43 GMT+0200 (&#x15A;rodkowoeuropejski czas letni)</span></small></h5>
                                                                        </div>
                                                                    </div>
                                                                    <!-- END Left Chat -->
                                                                    <!-- START Right Chat -->
                                                                    <div class="media">
                                                                        <div class="media-body">
                                                                            <div class="panel-default">
                                                                                <div class="panel-body bg-gray text-white b-r-a-3">
                                                                                    <span>Libero consectetur quia. Et odit maiores magni repellendus laudantium quas labore quia corporis. Consequatur dicta molestiae repudiandae deleniti aliquam blanditiis voluptatibus.</span>
                                                                                </div>
                                                                            </div>
                                                                            <h5 class="m-t-1 text-right"><small><span>Mon Jan 18 2016 17:30:29 GMT+0100 (&#x15A;rodkowoeuropejski czas stand.)</span></small> <span>Dessie O&apos;Reilly</span></h5>
                                                                        </div>
                                                                        <div class="media-right">
                                                                            <div class="avatar">
                                                                                <img src="https://s3.amazonaws.com/uifaces/faces/twitter/mikebeecham/128.jpg" alt="Avatar" class="media-object img-circle">
                                                                                <i class="avatar-status avatar-status-bottom bg-success b-brand-gray-darker"></i>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <!-- END Right Chat -->
                                                                    <!-- START Left Chat Active -->
                                                                    <div class="media">
                                                                        <div class="media-left">
                                                                            <div class="avatar">
                                                                                <img src="https://s3.amazonaws.com/uifaces/faces/twitter/itskawsar/128.jpg" alt="Avatar" class="media-object img-circle">
                                                                                <i class="avatar-status avatar-status-bottom bg-danger b-brand-gray-darker"></i>
                                                                            </div>
                                                                        </div>
                                                                        <div class="media-body">
                                                                            <div class="panel-default">
                                                                                <div class="panel-body bg-primary text-white b-r-a-3">
                                                                                    <span>Voluptas molestiae totam aut nam. Deserunt totam laborum.</span>
                                                                                </div>
                                                                            </div>
                                                                            <h5 class="m-t-1"><span>Chelsie Stoltenberg</span>   <small><span>at Sat Dec 26 2015 10:47:44 GMT+0100 (&#x15A;rodkowoeuropejski czas stand.)</span></small></h5>
                                                                        </div>
                                                                    </div>
                                                                    <!-- END Left Chat Active -->
                                                                    <!-- END Widget - Chat -->

                                                                    <div class="hr-text hr-text-center m-t-2 m-b-1">
                                                                        <h6 class="text-white"><strong>Yesterday</strong></h6>
                                                                    </div>

                                                                    <!-- START Right Chat -->
                                                                    <div class="media">
                                                                        <div class="media-body">
                                                                            <div class="panel-default">
                                                                                <div class="panel-body bg-gray text-white b-r-a-3">
                                                                                    <span>Facilis est facere cum temporibus veniam. Optio rem quas ullam commodi harum aliquid sunt magnam cum. Incidunt quod ullam optio. Ad vel perferendis. Id veritatis ut nihil libero.</span>
                                                                                </div>
                                                                            </div>
                                                                            <h5 class="m-t-1 text-right"><small><span>Mon Aug 15 2016 15:15:01 GMT+0200 (&#x15A;rodkowoeuropejski czas letni)</span></small> <span>Kaylah Labadie</span></h5>
                                                                        </div>
                                                                        <div class="media-right">
                                                                            <div class="avatar">
                                                                                <img src="https://s3.amazonaws.com/uifaces/faces/twitter/gizmeedevil1991/128.jpg" alt="Avatar" class="media-object img-circle">
                                                                                <i class="avatar-status avatar-status-bottom bg-success b-brand-gray-darker"></i>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <!-- END Right Chat -->
                                                                    <!-- START Left Chat Active -->
                                                                    <div class="media">
                                                                        <div class="media-left">
                                                                            <div class="avatar">
                                                                                <img src="https://s3.amazonaws.com/uifaces/faces/twitter/liminha/128.jpg" alt="Avatar" class="media-object img-circle">
                                                                                <i class="avatar-status avatar-status-bottom bg-danger b-brand-gray-darker"></i>
                                                                            </div>
                                                                        </div>
                                                                        <div class="media-body">
                                                                            <div class="panel-default">
                                                                                <div class="panel-body bg-gray text-white b-r-a-3">
                                                                                    <span>Est voluptas quibusdam dolores qui veniam voluptas eos. Quia facere dignissimos natus dolorem itaque. Sint deserunt adipisci quo ut.</span>
                                                                                </div>
                                                                            </div>
                                                                            <h5 class="m-t-1"><span>Sarah Kihn</span>   <small><span>at Mon Aug 01 2016 05:02:37 GMT+0200 (&#x15A;rodkowoeuropejski czas letni)</span></small></h5>
                                                                        </div>
                                                                    </div>
                                                                    <!-- END Left Chat Active -->

                                                                </div>

                                                            </div>


                                                            <div class="panel-footer">
                                                                <!-- START Send Message Input -->
                                                                <div class="input-group">

                                                                    <span class="input-group-btn">
                                                                        <button class="btn btn-default" type="button"><i class="fa fa-fw fa-plus"></i></button>
                                                                    </span>

                                                                    <input type="text" class="form-control" placeholder="Your Message...">

                                                                    <span class="input-group-btn">

                                                                        <button class="btn btn-primary" type="button">Send</button>
                                                                    </span>
                                                                </div>
                                                                <!-- END Send Message Input -->


                                                            </div>

                                                        </div>
                                                        <!-- END Panel Chat -->

                                                    </div>
                                                    <!-- END Tab: Chat -->

                                                    <!-- START Tab: Messages -->
                                                    <div class="tab-pane fade p-r-1" id="tab-messages" role="tabpanel">

                                                        <!-- START Inbox -->
                                                        <div class="panel panel-default b-a-2 m-t-2 no-bg b-gray-dark">
                                                            <div class="panel-heading">

                                                                <div class="row">
                                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                        <h4 class="panel-title">Chat with <span>Frances Mraz</span></h4>
                                                                        <div class="btn-group m-t-1 btn-group-justified hidden-lg hidden-md hidden-sm" role="group" aria-label="...">
                                                                            <a href="#" class="btn btn-sm btn-default active" role="button">Inbox</a>
                                                                            <a href="#" class="btn btn-sm btn-default" role="button">Archive</a>
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-lg-4 col-lg-offset-2 col-md-4 col-md-offset-2 col-sm-4 col-sm-offset-2 hidden-xs text-right">
                                                                        <div class="btn-group" role="group" aria-label="...">
                                                                            <a href="#" class="btn btn-sm btn-default active" role="button">Inbox</a>
                                                                            <a href="#" class="btn btn-sm btn-default" role="button">Archive</a>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>

                                                            <!-- START Table -->
                                                            <div class="table-responsive">
                                                                <table class="table table-hover">
                                                                    <thead>
                                                                        <tr>
                                                                            <th class="small text-muted text-uppercase w-5">
                                                                            </th>
                                                                            <th class="small text-muted text-uppercase w-210"><strong>From</strong>
                                                                            </th>
                                                                            <th class="small text-muted text-uppercase"><strong>Subject</strong>
                                                                            </th>
                                                                            <th class="small text-muted text-uppercase w-3">
                                                                            </th>
                                                                            <th class="small text-muted text-right text-uppercase w-100"><strong>Date</strong>
                                                                            </th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>

                                                                        <!-- START ROW Mail (New) -->
                                                                        <tr>
                                                                            <td class="v-a-m">
                                                                                <i class="fa fa-fw fa-circle text-primary" data-toggle="tooltip" data-placement="top" title="You Got New Message"></i>
                                                                            </td>

                                                                            <td class="v-a-m">
                                                                                <div class="media">
                                                                                    <div class="media-left media-middle">
                                                                                        <div class="avatar"> <img src="https://s3.amazonaws.com/uifaces/faces/twitter/gearpixels/128.jpg" alt="Avatar" class="media-object img-circle"> <i class="avatar-status avatar-status-bottom bg-success b-brand-gray-darker"></i> </div>
                                                                                    </div>
                                                                                    <div class="media-body media-auto"><a href="email-details.html" class="text-white"><span class="media-heading text-white">Gaston Aufderhar</span></a>
                                                                                        <br>
                                                                                        <span class="media-heading"><span>Florida</span></span>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                            <td class="v-a-m">
                                                                                <a href="email-details.html" class="text-white"><span class="media-heading">Multi-tiered bi-directional encryption</span></a>
                                                                                <br>
                                                                                <span class="media-heading"><span>Dolore aspernatur culpa nisi et cupiditate eaque.</span></span>
                                                                            </td>

                                                                            <td class="v-a-m text-right">
                                                                                <i class="fa fa-fw fa-lg fa-paperclip"></i>
                                                                            </td>
                                                                            <td class="v-a-m text-right">
                                                                                <span class="text-white">08-Mar-2013</span>
                                                                                <br><span>06:45</span> PM
                                                                            </td>
                                                                        </tr>
                                                                        <!-- END ROW Mail (New) -->

                                                                        <!-- START ROW Mail (New) -->
                                                                        <tr>
                                                                            <td class="v-a-m">
                                                                                <i class="fa fa-fw fa-circle text-primary" data-toggle="tooltip" data-placement="top" title="You Got New Message"></i>
                                                                            </td>
                                                                            <td class="v-a-m">
                                                                                <div class="media">
                                                                                    <div class="media-left media-middle">
                                                                                        <div class="avatar"> <img src="https://s3.amazonaws.com/uifaces/faces/twitter/sircalebgrove/128.jpg" alt="Avatar" class="media-object img-circle"> <i class="avatar-status avatar-status-bottom bg-warning b-brand-gray-darker"></i> </div>
                                                                                    </div>
                                                                                    <div class="media-body media-auto"><a href="email-details.html" class="text-white"><span class="media-heading">Nicole Emard</span></a>
                                                                                        <br>
                                                                                        <span class="media-heading"><span>Wisconsin</span></span>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                            <td class="v-a-m">
                                                                                <a href="email-details.html" class="text-white"><span class="media-heading">Proactive asymmetric methodology</span></a>
                                                                                <br>
                                                                                <span class="media-heading"><span>Ratione est fuga quod dolorem doloremque aut.</span></span>
                                                                            </td>
                                                                            <td class="v-a-m">

                                                                            </td>
                                                                            <td class="v-a-m text-right">
                                                                                <span class="text-white">23-Apr-2011</span>
                                                                                <br><span>06:14</span> PM
                                                                            </td>
                                                                        </tr>
                                                                        <!-- END ROW Mail (New) -->

                                                                        <!-- START ROW Mail  -->
                                                                        <tr>
                                                                            <td class="v-a-m">

                                                                            </td>
                                                                            <td class="v-a-m">
                                                                                <div class="media">
                                                                                    <div class="media-left media-middle">
                                                                                        <div class="avatar"> <img src="https://s3.amazonaws.com/uifaces/faces/twitter/cdavis565/128.jpg" alt="Avatar" class="media-object img-circle"> <i class="avatar-status avatar-status-bottom bg-danger b-brand-gray-darker"></i> </div>
                                                                                    </div>
                                                                                    <div class="media-body media-auto"><a href="email-details.html" class="text-white"><span class="media-heading">Ida Altenwerth</span></a>
                                                                                        <br>
                                                                                        <span class="media-heading"><span>Connecticut</span></span>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                            <td class="v-a-m">
                                                                                <a href="email-details.html" class="text-gray-lighter"><span class="media-heading">Enhanced tangible concept</span></a>
                                                                                <br>
                                                                                <span class="media-heading"><span>Soluta est et.</span></span>
                                                                            </td>
                                                                            <td class="v-a-m">

                                                                            </td>
                                                                            <td class="v-a-m text-right">
                                                                                <span>23-Feb-2014</span>
                                                                                <br><span>04:48</span> PM
                                                                            </td>
                                                                        </tr>
                                                                        <!-- END ROW Mail  -->

                                                                        <!-- START ROW Mail  -->
                                                                        <tr>
                                                                            <td class="v-a-m">

                                                                            </td>
                                                                            <td class="v-a-m">
                                                                                <div class="media">
                                                                                    <div class="media-left media-middle">
                                                                                        <div class="avatar"> <img src="https://s3.amazonaws.com/uifaces/faces/twitter/cdharrison/128.jpg" alt="Avatar" class="media-object img-circle"> <i class="avatar-status avatar-status-bottom bg-gray-lighter b-brand-gray-darker"></i> </div>
                                                                                    </div>
                                                                                    <div class="media-body media-auto"><a href="email-details.html" class="text-white"><span class="media-heading">Earl Cole</span></a>
                                                                                        <br>
                                                                                        <span class="media-heading"><span>Pennsylvania</span></span>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                            <td class="v-a-m">
                                                                                <a href="email-details.html" class="text-gray-lighter"><span class="media-heading">Integrated multi-tasking application</span></a>
                                                                                <br>
                                                                                <span class="media-heading"><span>Aut officia quis velit soluta ut in porro.</span></span>
                                                                            </td>
                                                                            <td class="v-a-m">

                                                                            </td>
                                                                            <td class="v-a-m text-right">
                                                                                <span>01-Dec-2013</span>
                                                                                <br><span>01:11</span> PM
                                                                            </td>
                                                                        </tr>
                                                                        <!-- END ROW Mail  -->

                                                                        <!-- START ROW Mail -->
                                                                        <tr>
                                                                            <td class="v-a-m">
                                                                            </td>
                                                                            <td class="v-a-m">
                                                                                <div class="media">
                                                                                    <div class="media-left">
                                                                                        <div class="avatar"> <img src="https://s3.amazonaws.com/uifaces/faces/twitter/fluidbrush/128.jpg" alt="Avatar" class="media-object img-circle"> <i class="avatar-status avatar-status-bottom bg-success b-brand-gray-darker"></i> </div>
                                                                                    </div>
                                                                                    <div class="media-body media-auto"><a href="email-details.html" class="text-white"><span class="media-heading">Ernestine Marquardt</span></a>
                                                                                        <br>
                                                                                        <span class="media-heading"><span>New York</span></span>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                            <td class="v-a-m">
                                                                                <a href="email-details.html" class="text-gray-lighter"><span class="media-heading">Triple-buffered human-resource time-frame</span></a>
                                                                                <br>
                                                                                <span class="media-heading"><span>Qui consequatur corporis adipisci vel quod consequatur facilis.</span></span>
                                                                            </td>
                                                                            <td class="v-a-m text-right">
                                                                                <i class="fa fa-fw fa-lg fa-paperclip"></i>
                                                                            </td>
                                                                            <td class="v-a-m text-right">
                                                                                <span>22-Aug-2013</span>
                                                                                <br><span>01:30</span> PM
                                                                            </td>
                                                                        </tr>
                                                                        <!-- END ROW Mail -->

                                                                        <!-- START ROW Mail -->
                                                                        <tr>
                                                                            <td class="v-a-m">
                                                                            </td>
                                                                            <td class="v-a-m">
                                                                                <div class="media">
                                                                                    <div class="media-left media-middle">
                                                                                        <div class="avatar"> <img src="https://s3.amazonaws.com/uifaces/faces/twitter/dorphern/128.jpg" alt="Avatar" class="media-object img-circle"> <i class="avatar-status avatar-status-bottom bg-warning b-brand-gray-darker"></i> </div>
                                                                                    </div>
                                                                                    <div class="media-body media-auto"><a href="email-details.html" class="text-white"><span class="media-heading">Norval Hamill</span></a>
                                                                                        <br>
                                                                                        <span class="media-heading"><span>Georgia</span></span>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                            <td class="v-a-m">
                                                                                <a href="email-details.html" class="text-gray-lighter"><span class="media-heading">Mandatory executive forecast</span></a>
                                                                                <br>
                                                                                <span class="media-heading"><span>Quia ut sint rerum quo eos.</span></span>
                                                                            </td>
                                                                            <td class="v-a-m text-right">
                                                                                <i class="fa fa-fw fa-lg fa-paperclip"></i>
                                                                            </td>
                                                                            <td class="v-a-m text-right">
                                                                                <span>06-Feb-2013</span>
                                                                                <br><span>05:42</span> PM
                                                                            </td>
                                                                        </tr>
                                                                        <!-- END ROW Mail -->

                                                                        <!-- START ROW Mail  -->
                                                                        <tr>
                                                                            <td class="v-a-m">

                                                                            </td>
                                                                            <td class="v-a-m">
                                                                                <div class="media">
                                                                                    <div class="media-left">
                                                                                        <div class="avatar"> <img src="https://s3.amazonaws.com/uifaces/faces/twitter/swooshycueb/128.jpg" alt="Avatar" class="media-object img-circle"> <i class="avatar-status avatar-status-bottom bg-danger b-brand-gray-darker"></i> </div>
                                                                                    </div>
                                                                                    <div class="media-body media-auto"><a href="email-details.html" class="text-white"><span class="media-heading">Aurore Runte</span></a>
                                                                                        <br>
                                                                                        <span class="media-heading"><span>Iowa</span></span>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                            <td class="v-a-m">
                                                                                <a href="email-details.html" class="text-gray-lighter"><span class="media-heading">Multi-lateral optimizing algorithm</span></a>
                                                                                <br>
                                                                                <span class="media-heading"><span>Quis sit voluptatem aliquid quia sed nostrum rerum doloribus.</span></span>
                                                                            </td>
                                                                            <td class="v-a-m">

                                                                            </td>
                                                                            <td class="v-a-m text-right">
                                                                                <span>06-Mar-2016</span>
                                                                                <br><span>05:18</span> PM
                                                                            </td>
                                                                        </tr>
                                                                        <!-- END ROW Mail  -->

                                                                        <!-- START ROW Mail  -->
                                                                        <tr>
                                                                            <td class="v-a-m">

                                                                            </td>
                                                                            <td class="v-a-m">
                                                                                <div class="media">
                                                                                    <div class="media-left media-middle">
                                                                                        <div class="avatar"> <img src="https://s3.amazonaws.com/uifaces/faces/twitter/mutu_krish/128.jpg" alt="Avatar" class="media-object img-circle"> <i class="avatar-status avatar-status-bottom bg-gray-lighter b-brand-gray-darker"></i> </div>
                                                                                    </div>
                                                                                    <div class="media-body media-auto"><a href="email-details.html" class="text-white"><span class="media-heading">Sheridan Haag</span></a>
                                                                                        <br>
                                                                                        <span class="media-heading"><span>Illinois</span></span>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                            <td class="v-a-m">
                                                                                <a href="email-details.html" class="text-gray-lighter"><span class="media-heading">Upgradable optimal emulation</span></a>
                                                                                <br>
                                                                                <span class="media-heading"><span>Qui perferendis ullam id voluptatem.</span></span>
                                                                            </td>
                                                                            <td class="v-a-m">

                                                                            </td>
                                                                            <td class="v-a-m text-right">
                                                                                <span>31-Nov-2011</span>
                                                                                <br><span>10:58</span> PM
                                                                            </td>
                                                                        </tr>
                                                                        <!-- END ROW Mail  -->

                                                                        <!-- START ROW Mail -->
                                                                        <tr>
                                                                            <td class="v-a-m">
                                                                            </td>
                                                                            <td class="v-a-m">
                                                                                <div class="media">
                                                                                    <div class="media-left">
                                                                                        <div class="avatar"> <img src="https://s3.amazonaws.com/uifaces/faces/twitter/gt/128.jpg" alt="Avatar" class="media-object img-circle"> <i class="avatar-status avatar-status-bottom bg-success b-brand-gray-darker"></i> </div>
                                                                                    </div>
                                                                                    <div class="media-body media-auto"><a href="email-details.html" class="text-white"><span class="media-heading">Murray Kuhic</span></a>
                                                                                        <br>
                                                                                        <span class="media-heading"><span>Oregon</span></span>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                            <td class="v-a-m">
                                                                                <a href="email-details.html" class="text-gray-lighter"><span class="media-heading">Robust directional ability</span></a>
                                                                                <br>
                                                                                <span class="media-heading"><span>Nobis officia omnis in eius dolorum enim aliquid eos consectetur.</span></span>
                                                                            </td>
                                                                            <td class="v-a-m text-right">
                                                                                <i class="fa fa-fw fa-lg fa-paperclip"></i>
                                                                            </td>
                                                                            <td class="v-a-m text-right">
                                                                                <span>11-Jan-2013</span>
                                                                                <br><span>11:12</span> PM
                                                                            </td>
                                                                        </tr>
                                                                        <!-- END ROW Mail -->

                                                                        <!-- START ROW Mail -->
                                                                        <tr>
                                                                            <td class="v-a-m">
                                                                            </td>
                                                                            <td class="v-a-m">
                                                                                <div class="media">
                                                                                    <div class="media-left media-middle">
                                                                                        <div class="avatar"> <img src="https://s3.amazonaws.com/uifaces/faces/twitter/thewillbeard/128.jpg" alt="Avatar" class="media-object img-circle"> <i class="avatar-status avatar-status-bottom bg-warning b-brand-gray-darker"></i> </div>
                                                                                    </div>
                                                                                    <div class="media-body media-auto"><a href="email-details.html" class="text-white"><span class="media-heading">Elizabeth Little</span></a>
                                                                                        <br>
                                                                                        <span class="media-heading"><span>Washington</span></span>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                            <td class="v-a-m">
                                                                                <a href="email-details.html" class="text-gray-lighter"><span class="media-heading">Digitized optimal installation</span></a>
                                                                                <br>
                                                                                <span class="media-heading"><span>Veritatis id minus rem soluta cupiditate architecto fugiat ullam explicabo.</span></span>
                                                                            </td>
                                                                            <td class="v-a-m text-right">
                                                                                <i class="fa fa-fw fa-lg fa-paperclip"></i>
                                                                            </td>
                                                                            <td class="v-a-m text-right">
                                                                                <span>06-Oct-2012</span>
                                                                                <br><span>09:54</span> PM
                                                                            </td>
                                                                        </tr>
                                                                        <!-- END ROW Mail -->

                                                                        <!-- START ROW Mail  -->
                                                                        <tr>
                                                                            <td class="v-a-m">

                                                                            </td>
                                                                            <td class="v-a-m">
                                                                                <div class="media">
                                                                                    <div class="media-left">
                                                                                        <div class="avatar"> <img src="https://s3.amazonaws.com/uifaces/faces/twitter/mbilderbach/128.jpg" alt="Avatar" class="media-object img-circle"> <i class="avatar-status avatar-status-bottom bg-danger b-brand-gray-darker"></i> </div>
                                                                                    </div>
                                                                                    <div class="media-body media-auto"><a href="email-details.html" class="text-white"><span class="media-heading">Lyric Fahey</span></a>
                                                                                        <br>
                                                                                        <span class="media-heading"><span>Colorado</span></span>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                            <td class="v-a-m">
                                                                                <a href="email-details.html" class="text-gray-lighter"><span class="media-heading">Polarised content-based installation</span></a>
                                                                                <br>
                                                                                <span class="media-heading"><span>Dolorem harum unde.</span></span>
                                                                            </td>
                                                                            <td class="v-a-m">

                                                                            </td>
                                                                            <td class="v-a-m text-right">
                                                                                <span>27-Apr-2011</span>
                                                                                <br><span>11:36</span> PM
                                                                            </td>
                                                                        </tr>
                                                                        <!-- END ROW Mail  -->

                                                                        <!-- START ROW Mail  -->
                                                                        <tr class="bg-gray-darker">
                                                                            <td class="v-a-m">

                                                                            </td>
                                                                            <td class="v-a-m">
                                                                                <div class="media">
                                                                                    <div class="media-left media-middle">
                                                                                        <div class="avatar"> <img src="https://s3.amazonaws.com/uifaces/faces/twitter/rawdiggie/128.jpg" alt="Avatar" class="media-object img-circle"> <i class="avatar-status avatar-status-bottom bg-gray-lighter b-brand-gray-darker"></i> </div>
                                                                                    </div>
                                                                                    <div class="media-body media-auto"><a href="email-details.html" class="text-white"><span class="media-heading">Chase Pacocha</span></a>
                                                                                        <br>
                                                                                        <span class="media-heading"><span>New Jersey</span></span>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                            <td class="v-a-m">
                                                                                <a href="email-details.html" class="text-gray-lighter"><span class="media-heading">Sharable responsive service-desk</span></a>
                                                                                <br>
                                                                                <span class="media-heading"><span>Hic ducimus voluptas vel quia.</span></span>
                                                                            </td>
                                                                            <td class="v-a-m">

                                                                            </td>
                                                                            <td class="v-a-m text-right">
                                                                                <span>23-Mar-2014</span>
                                                                                <br><span>02:55</span> PM
                                                                            </td>
                                                                        </tr>
                                                                        <!-- END ROW Mail  -->

                                                                        <!-- START ROW Mail -->
                                                                        <tr>
                                                                            <td class="v-a-m">
                                                                            </td>
                                                                            <td class="v-a-m">
                                                                                <div class="media">
                                                                                    <div class="media-left">
                                                                                        <div class="avatar"> <img src="https://s3.amazonaws.com/uifaces/faces/twitter/themrdave/128.jpg" alt="Avatar" class="media-object img-circle"> <i class="avatar-status avatar-status-bottom bg-success b-brand-gray-darker"></i> </div>
                                                                                    </div>
                                                                                    <div class="media-body media-auto"><a href="email-details.html" class="text-white"><span class="media-heading">Katlynn Romaguera</span></a>
                                                                                        <br>
                                                                                        <span class="media-heading"><span>North Dakota</span></span>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                            <td class="v-a-m">
                                                                                <a href="email-details.html" class="text-gray-lighter"><span class="media-heading">De-engineered tertiary local area network</span></a>
                                                                                <br>
                                                                                <span class="media-heading"><span>Eum adipisci labore illo sit.</span></span>
                                                                            </td>
                                                                            <td class="v-a-m text-right">
                                                                                <i class="fa fa-fw fa-lg fa-paperclip"></i>
                                                                            </td>
                                                                            <td class="v-a-m text-right">
                                                                                <span>05-May-2016</span>
                                                                                <br><span>06:24</span> PM
                                                                            </td>
                                                                        </tr>
                                                                        <!-- END ROW Mail -->

                                                                        <!-- START ROW Mail -->
                                                                        <tr>
                                                                            <td class="v-a-m">
                                                                            </td>
                                                                            <td class="v-a-m">
                                                                                <div class="media">
                                                                                    <div class="media-left media-middle">
                                                                                        <div class="avatar"> <img src="https://s3.amazonaws.com/uifaces/faces/twitter/smalonso/128.jpg" alt="Avatar" class="media-object img-circle"> <i class="avatar-status avatar-status-bottom bg-warning b-brand-gray-darker"></i> </div>
                                                                                    </div>
                                                                                    <div class="media-body media-auto"><a href="email-details.html" class="text-white"><span class="media-heading">Tiana Bednar</span></a>
                                                                                        <br>
                                                                                        <span class="media-heading"><span>West Virginia</span></span>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                            <td class="v-a-m">
                                                                                <a href="email-details.html" class="text-gray-lighter"><span class="media-heading">Synergized discrete throughput</span></a>
                                                                                <br>
                                                                                <span class="media-heading"><span>Id cum iure dignissimos.</span></span>
                                                                            </td>
                                                                            <td class="v-a-m text-right">
                                                                                <i class="fa fa-fw fa-lg fa-paperclip"></i>
                                                                            </td>
                                                                            <td class="v-a-m text-right">
                                                                                <span>22-Apr-2014</span>
                                                                                <br><span>05:54</span> PM
                                                                            </td>
                                                                        </tr>
                                                                        <!-- END ROW Mail -->

                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                            <!-- END Table -->


                                                            <div class="panel-footer">

                                                                <div class="row">
                                                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                        <div class="btn-group" role="group" aria-label="...">
                                                                            <a href="#" class="btn btn-sm btn-default" role="button"><i class="fa fa-angle-left"></i></a>
                                                                            <a href="#" class="btn btn-sm btn-default" role="button"><i class="fa fa-angle-right"></i></a>
                                                                        </div>


                                                                    </div>

                                                                    <div class="col-lg-5 col-lg-offset-4 col-md-3 col-md-offset-4 col-sm-3 col-sm-offset-4 hidden-xs text-right">
                                                                        <span class="text-muted">Showing 1 to 10 of 57 entries</span>
                                                                    </div>
                                                                </div>

                                                            </div>

                                                        </div>
                                                        <!-- END Inbox -->

                                                    </div>
                                                    <!-- END Tab: Messages -->

                                                    <!-- START Tab: Overview -->
                                                    <div class="tab-pane fade in active p-r-1" id="tab-overview" role="tabpanel">


                                                        <div class="row m-t-3">

                                                            <div class="col-lg-3 col-md-6 col-sm-6">
                                                                <!-- START Widget - Views -->
                                                                <div class="panel panel-default bg-primary b-a-0">
                                                                    <div class="panel-body">
                                                                        <p class="text-white m-t-0">Views
                                                                            <span class="label label-white pull-right label-outline">Monthly</span>
                                                                        </p>
                                                                        <h3 class="display-4 text-center m-b-0">6.200</h3>
                                                                        <p class="text-muted small text-uppercase m-t-0 m-b-3 text-center"><strong><small class="text-white">Total Views</small></strong>
                                                                            <br>
                                                                        </p>
                                                                        <p class="small text-white m-t-2 m-b-0"> Last Month <span class="pull-right text-white">34% <i class="fa fa fa-caret-down text-white"></i></span></p>
                                                                    </div>
                                                                </div>
                                                                <!-- END Widget - Views -->
                                                            </div>

                                                            <div class="col-lg-3 col-md-6 col-sm-6">
                                                                <!-- START Widget - Orders -->
                                                                <div class="panel panel-default bg-success b-a-0">
                                                                    <div class="panel-body">
                                                                        <p class="text-white m-t-0">Orders
                                                                            <span class="label label-white pull-right label-outline">Annual</span>
                                                                        </p>
                                                                        <h3 class="display-4 text-center m-b-0">80.202</h3>
                                                                        <p class="text-muted small text-uppercase m-t-0 m-b-3 text-center"><strong><small class="text-white">New Orders</small></strong>
                                                                            <br>
                                                                        </p>
                                                                        <p class="small text-white m-t-2 m-b-0"> Last Month <span class="pull-right text-white">92% <i class="fa fa fa-caret-down text-white"></i></span></p>
                                                                    </div>
                                                                </div>
                                                                <!-- END Widget - Orders -->
                                                            </div>

                                                            <div class="col-lg-3 col-md-6 col-sm-6">
                                                                <!-- START Widget - Visits -->
                                                                <div class="panel panel-default bg-warning b-a-0">
                                                                    <div class="panel-body">
                                                                        <p class="text-white m-t-0">Visits
                                                                            <span class="label label-white pull-right label-outline">Monthly</span>
                                                                        </p>
                                                                        <h3 class="display-4 text-center m-b-0">767</h3>
                                                                        <p class="text-muted small text-uppercase m-t-0 m-b-3 text-center"><strong><small class="text-white">Total Views</small></strong>
                                                                            <br>
                                                                        </p>
                                                                        <p class="small text-white m-t-2 m-b-0"> Last Month <span class="pull-right text-white">34% <i class="fa fa fa-caret-down text-white"></i></span></p>
                                                                    </div>
                                                                </div>
                                                                <!-- END Widget - Visits -->
                                                            </div>

                                                            <div class="col-lg-3 col-md-6 col-sm-6">
                                                                <!-- START Widget - Downloads -->
                                                                <div class="panel panel-default bg-danger b-a-0">
                                                                    <div class="panel-body">
                                                                        <p class="text-white m-t-0">Downloads
                                                                            <span class="label label-white pull-right label-outline">Today</span>
                                                                        </p>
                                                                        <h3 class="display-4 text-center m-b-0">72</h3>
                                                                        <p class="text-muted small text-uppercase m-t-0 m-b-3 text-center"><strong><small class="text-white">Total Downloads</small></strong>
                                                                            <br>
                                                                        </p>
                                                                        <p class="small text-white m-t-2 m-b-0"> Last Month <span class="pull-right text-white">20% <i class="fa fa fa-caret-up text-white"></i></span></p>
                                                                    </div>
                                                                </div>
                                                                <!-- END Widget - Downloads -->
                                                            </div>


                                                        </div>



                                                        <div class="hr-text hr-text-center m-t-2">
                                                            <h6 class="text-white"><strong>Activity</strong></h6>
                                                        </div>

                                                        <!-- START Timeline - Post -->
                                                        <div class="timeline timeline-datetime">

                                                            <!-- Timeline - Badge Date -->
                                                            <div class="timeline-date">
                                                                <span class="badge">Today</span>
                                                            </div>

                                                            <div class="timeline-item p-r-1">
                                                                <!-- Timeline - Mini Icon -->
                                                                <div class="timeline-icon">
                                                                    <i class="fa fa-circle-o text-danger"></i>
                                                                </div>
                                                                <div class="timeline-item-inner">
                                                                    <!-- Timeline - Date -->
                                                                    <span class="timeline-item-time">11:09 am</span>
                                                                    <!-- Timeline - Icon  -->
                                                                    <div class="timeline-item-head clearfix">
                                                                        <div class="pull-left m-r-1">
                                                                            <span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-danger"></i> <i class="fa fa-exclamation fa-stack-1x fa-inverse"></i></span>
                                                                        </div>
                                                                        <!-- Timeline - Header & Subtitle -->
                                                                        <div class="user-detail">
                                                                            <h5><span>Enhanced contextually-based framework</span></h5>
                                                                            <p class="m-t-0 m-b-0 small text-uppercase"><strong><span>Durgan - Predovic</span></strong>
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                    <!-- Timeline - START Content -->
                                                                    <div class="timeline-item-content m-b-2">
                                                                        <p class="m-b-1"><span>Quia in molestiae necessitatibus. Omnis voluptas voluptates similique. Quisquam voluptatibus voluptatibus est. Quis voluptatibus quia ipsa odit est. Qui maxime corrupti.</span></p>
                                                                    </div>
                                                                    <!-- Timeline - END Content -->
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- END Timeline - Post -->




                                                        <!-- START Timeline - Post -->
                                                        <div class="timeline timeline-datetime">
                                                            <div class="timeline-item p-r-1">
                                                                <!-- Timeline - Mini Icon -->
                                                                <div class="timeline-icon">
                                                                    <i class="fa fa-circle-o text-info"></i>
                                                                </div>
                                                                <div class="timeline-item-inner">
                                                                    <!-- Timeline - Date -->
                                                                    <span class="timeline-item-time">0:12 am</span>
                                                                    <!-- Timeline - Icon  -->
                                                                    <div class="timeline-item-head clearfix">
                                                                        <div class="pull-left m-r-1">
                                                                            <span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-info"></i> <i class="fa fa-commenting fa-stack-1x fa-inverse"></i></span>
                                                                        </div>
                                                                        <!-- Timeline - Header & Subtitle -->
                                                                        <div class="user-detail">
                                                                            <h5>Invitation Sent!</h5>
                                                                            <p class="m-t-0 m-b-0 small text-uppercase"><strong><span>From: Michele Bartoletti</span></strong>
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                    <!-- Timeline - START Content -->
                                                                    <div class="timeline-item-content m-b-2">
                                                                        <p class="m-b-1"><span>Nisi quasi nobis cum. Est at molestias. Alias voluptates dolorem sequi.</span></p>

                                                                        <p>
                                                                            <button class="btn btn-default btn-sm" type="button">Accept</button>
                                                                            <button class="btn btn-default btn-sm" type="button">Reject</button>
                                                                        </p>

                                                                    </div>
                                                                    <!-- Timeline - END Content -->
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- END Timeline - Post -->


                                                        <!-- START Timeline - Post -->
                                                        <div class="timeline timeline-datetime">
                                                            <div class="timeline-item p-r-1">
                                                                <!-- Timeline - Mini Icon -->
                                                                <div class="timeline-icon">
                                                                    <i class="fa fa-circle-o text-primary"></i>
                                                                </div>
                                                                <div class="timeline-item-inner">
                                                                    <!-- Timeline - Date -->
                                                                    <span class="timeline-item-time text-right">3:45 pm</span>
                                                                    <!-- Timeline - Icon  -->
                                                                    <div class="timeline-item-head clearfix">
                                                                        <div class="pull-left m-r-1">
                                                                            <span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-primary"></i> <i class="fa fa-envelope fa-stack-1x fa-inverse"></i></span>
                                                                        </div>
                                                                        <!-- Timeline - Header & Subtitle -->
                                                                        <div class="user-detail">
                                                                            <h5>Where are You?</h5>
                                                                            <p class="m-t-0 m-b-0 small text-uppercase"><strong><span>Camila68@gmail.com</span></strong>
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                    <!-- Timeline - START Content -->
                                                                    <div class="timeline-item-content m-b-2">
                                                                        <p class="m-b-1"><span>Sequi aperiam voluptate perspiciatis excepturi voluptatem dolor. Adipisci ut aut voluptate molestias. Tenetur qui nisi aut recusandae qui. Ullam laborum autem pariatur dolorem ea aut pariatur ut accusantium. Magni ex eius ea omnis cum explicabo sit. Est ab quis quod molestiae et voluptatem iste.</span></p>
                                                                        <div class="media">
                                                                            <div class="media-left">
                                                                                <div class="avatar">
                                                                                    <img src="https://s3.amazonaws.com/uifaces/faces/twitter/idiot/128.jpg" alt="Avatar" class="media-object img-circle">
                                                                                </div>
                                                                            </div>
                                                                            <div class="media-body">
                                                                                <h6 class="m-t-0 m-b-0"><span>Haylie Abernathy</span></h6>
                                                                                <p class="m-t-0"><span class="small">Replied: 30 Monday, October, 2016</span></p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <!-- Timeline - END Content -->
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- END Timeline - Post -->

                                                        <!-- START Timeline - Post -->
                                                        <div class="timeline timeline-datetime">

                                                            <!-- Timeline - Badge Date -->
                                                            <div class="timeline-date">
                                                                <span class="badge">Yesterday</span>
                                                            </div>

                                                            <div class="timeline-item p-r-1">
                                                                <!-- Timeline - Mini Icon -->
                                                                <div class="timeline-icon">
                                                                    <i class="fa fa-circle-o text-warning"></i>
                                                                </div>
                                                                <div class="timeline-item-inner">
                                                                    <!-- Timeline - Date -->
                                                                    <span class="timeline-item-time">11:09 am</span>
                                                                    <!-- Timeline - Icon  -->
                                                                    <div class="timeline-item-head clearfix">
                                                                        <div class="pull-left m-r-1">
                                                                            <span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-warning"></i> <i class="fa fa-clock-o fa-stack-1x fa-inverse"></i></span>
                                                                        </div>
                                                                        <!-- Timeline - Header & Subtitle -->
                                                                        <div class="user-detail">
                                                                            <h5><span>Synergistic disintermediate task-force</span></h5>
                                                                            <p class="m-t-0 m-b-0 small text-uppercase"><strong><span>Kub Group</span></strong>
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                    <!-- Timeline - START Content -->
                                                                    <div class="timeline-item-content m-b-2">
                                                                        <p class="m-b-1"><span>Eum dolor soluta voluptatem et. Soluta perferendis autem sunt labore corrupti. Qui repudiandae libero delectus quisquam et velit. Quis et minima aperiam doloremque qui recusandae temporibus praesentium quasi. Rerum et qui. Minus reiciendis totam consequatur.</span></p>
                                                                    </div>
                                                                    <!-- Timeline - END Content -->
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- END Timeline - Post -->

                                                        <!-- START Timeline - Post -->
                                                        <div class="timeline timeline-datetime">
                                                            <div class="timeline-item p-r-1">
                                                                <!-- Timeline - Mini Icon -->
                                                                <div class="timeline-icon">
                                                                    <i class="fa fa-circle-o text-success"></i>
                                                                </div>
                                                                <div class="timeline-item-inner">
                                                                    <!-- Timeline - Date -->
                                                                    <span class="timeline-item-time">0:12 am</span>
                                                                    <!-- Timeline - Icon  -->
                                                                    <div class="timeline-item-head clearfix">
                                                                        <div class="pull-left m-r-1">
                                                                            <span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-success"></i> <i class="fa fa-check fa-stack-1x fa-inverse"></i></span>
                                                                        </div>
                                                                        <!-- Timeline - Header & Subtitle -->
                                                                        <div class="user-detail">
                                                                            <h5>Invitation Sent!</h5>
                                                                            <p class="m-t-0 m-b-0 small text-uppercase"><strong><span>From: Aditya Carroll</span></strong>
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                    <!-- Timeline - START Content -->
                                                                    <div class="timeline-item-content m-b-2">
                                                                        <p class="m-b-1"><span>Dolor sint velit labore facere. Et inventore sunt laudantium rerum eum eius molestiae. Sit omnis dolor quas.</span></p>

                                                                        <p>
                                                                            <button class="btn btn-default btn-sm" type="button">Accept</button>
                                                                            <button class="btn btn-default btn-sm" type="button">Reject</button>
                                                                        </p>

                                                                    </div>
                                                                    <!-- Timeline - END Content -->
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- END Timeline - Post -->

                                                        <!-- START Timeline - Post -->
                                                        <div class="timeline timeline-datetime">
                                                            <div class="timeline-item p-r-1">
                                                                <!-- Timeline - Mini Icon -->
                                                                <div class="timeline-icon">
                                                                    <i class="fa fa-circle-o text-gray"></i>
                                                                </div>
                                                                <div class="timeline-item-inner">
                                                                    <!-- Timeline - Date -->
                                                                    <span class="timeline-item-time text-right">3:45 pm</span>
                                                                    <!-- Timeline - Icon  -->
                                                                    <div class="timeline-item-head clearfix">
                                                                        <div class="pull-left m-r-1">
                                                                            <span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-gray"></i> <i class="fa fa-close fa-stack-1x fa-inverse"></i></span>
                                                                        </div>
                                                                        <!-- Timeline - Header & Subtitle -->
                                                                        <div class="user-detail">
                                                                            <h5>Where are You?</h5>
                                                                            <p class="m-t-0 m-b-0 small text-uppercase"><strong><span>Branson.Hilpert1@yahoo.com</span></strong>
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                    <!-- Timeline - START Content -->
                                                                    <div class="timeline-item-content m-b-2">
                                                                        <p class="m-b-1"><span>Vel provident soluta ut accusantium deserunt fuga ducimus est. Eligendi magni id id voluptatem dolorem consequatur. Molestiae quis quaerat debitis saepe ea occaecati sit expedita. Est sunt et quo officiis odit labore porro. Et cumque provident qui veritatis vel vel.</span></p>
                                                                        <div class="media">
                                                                            <div class="media-left">
                                                                                <div class="avatar">
                                                                                    <img src="https://s3.amazonaws.com/uifaces/faces/twitter/kolsvein/128.jpg" alt="Avatar" class="media-object img-circle">
                                                                                </div>
                                                                            </div>
                                                                            <div class="media-body">
                                                                                <h6 class="m-t-0 m-b-0"><span>Norval Schumm</span></h6>
                                                                                <p class="m-t-0"><span class="small">Replied: 30 Sunday, March, 2016</span></p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <!-- Timeline - END Content -->
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- END Timeline - Post -->



                                                        <!-- END Timeline -->

                                                    </div>
                                                    <!-- END Tab: Overview -->

                                                </div>
                                                <!-- END Tabs Content -->




                                            </div>
                                            <!-- END Tabs Content -->

                                        </div>

                                    </div>
                                </div>
                                <!-- END EDIT CONTENT -->
                            </div>
                        </div>

@endsection
