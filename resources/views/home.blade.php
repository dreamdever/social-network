@extends('layouts.master')
@section('content')

<div class="content" style="min-height: 1636px;">

    <!-- END Sub-Navbar with Header and Breadcrumbs-->
    <div class="container">
        <!-- START EDIT CONTENT -->
        <div class="row m-b-3 m-t-3">
            <div class="col-lg-8">
                <div class="row">
                    <div class="col-lg-12">
                        <form>
                            <div class="form-group">
                                <textarea name="postText" style="max-width: 100%; min-width:100%;" rows="5" class="form-control" placeholder="Čo máte na mysli?"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary pull-right">Uverejniť</button>
                        </form>
                    </div>
                </div>
                <!-- START Timeline - Post -->
                <div class="timeline timeline-datetime" id="wallmessages">
                    <div class="timeline-item p-r-1" id="m16">
                        <!-- Timeline - Mini Icon -->
                        <div class="timeline-icon">
                            <i class="fa fa-circle-o text-info"></i>
                        </div>
                        <div class="timeline-item-inner">
                            <!-- Timeline - Date -->
                            <span class="timeline-item-time">0:12 am</span>
                            <!-- Timeline - Icon  -->
                            <div class="timeline-item-head clearfix media">
                                <div class="media-left media-top">
                                    <a href="../apps/profile-details.html" data-toggle="tooltip" data-placement="top" title="" data-original-title="Go to Full Profile">
                                        <div class="avatar"> <img class="media-object img-circle" src="https://s3.amazonaws.com/uifaces/faces/twitter/jmfsocial/128.jpg"><i class="avatar-status avatar-status-bottom bg-success b-brand-gray-darker"></i> </div>
                                    </a>
                                </div>
                                <div class="media-body">
                                    <h5 class="m-t-0 m-b-0"><span>Beau Cruickshank</span></h5>
                                    <p class="m-t-0">Assigned to: <span>Buddy Boehm</span></p>
                                </div>
                            </div>
                            <!-- Timeline - START Content -->
                            <div class="timeline-item-content m-b-2">
                                <p class="m-b-1"><span>Quaerat aut eum et. Vitae eos quod et veritatis consequatur repudiandae dolorem. Officia optio atque voluptatum est fuga rerum veritatis atque. Quos ut laudantium ut rerum cupiditate. Autem atque occaecati. Et veritatis magni officia dolorem distinctio eligendi magnam.</span></p>
                                <p>
                                    <button class="btn btn-primary btn-like btn-sm btn-outline" type="button">Páči sa mi to</button>
                                </p>
                            </div>
                            <!-- Timeline - END Content -->
                        </div>
                    </div>
                </div>
                <!-- END Timeline - Post -->
            </div>
            <div class="col-lg-4">
                <div class="panel panel-default no-bg b-a-2 b-gray-dark">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-sm-4 col-xs-4">Timeline</div>
                            <div class="col-sm-4 col-xs-4 col-xs-offset-4 col-sm-offset-4 text-right"><button type="button" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></button></div>
                        </div>
                    </div>
                    <div class="panel-body">
                        <!-- START Timeline - Active Entry (Day) -->
                        <div class="timeline">
                            <!-- Timeline - Badge Date -->
                            <div class="timeline-date">
                                <span class="badge">Today</span>
                            </div>
                            <div class="timeline-item p-r-1" id="m16">
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
                                            <p class="text-white m-t-1"><span>overriding the driver won't do anything, we need to parse the haptic SAS pixel!</span></p>
                                            <p class="text-nowrap small"><span>03-Feb-2011, 10:41</span>
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
                            <div class="timeline-item p-r-1" id="m16">
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
                                            <p class="text-white m-t-1"><span>The PCI transmitter is down, override the bluetooth bus so we can back up the SMS driver!</span></p>
                                            <p class="text-nowrap small"><span>17-Jul-2013, 03:54</span>
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
                            <div class="timeline-item p-r-1" id="m16">
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
                                            <p class="text-nowrap small"><span>05-Sep-2016, 02:50</span>
                                            </p>
                                            <i class="m-l-1 fa fa-file-text-o fa-fw"></i> read_me.txt
                                            <br>
                                            <i class="m-l-1 fa fa-file-zip-o fa-fw"></i> all-files.zip
                                            <br>
                                            <i class="m-l-1 fa fa-file-word-o fa-fw"></i> alice-feedback.doc
                                            <br>
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
                            <div class="timeline-item p-r-1" id="m16">
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
                                            <p class="text-nowrap small"><span>19-Feb-2016, 10:18</span>
                                            </p>
                                            <div class="m-b-1">
                                                <img class="img-circle avatar avatar-sm" src="https://s3.amazonaws.com/uifaces/faces/twitter/carbontwelve/128.jpg">
                                                <img class="img-circle avatar avatar-sm" src="https://s3.amazonaws.com/uifaces/faces/twitter/nateschulte/128.jpg">
                                                <img class="img-circle avatar avatar-sm" src="https://s3.amazonaws.com/uifaces/faces/twitter/isacosta/128.jpg">
                                                <img class="img-circle avatar avatar-sm" src="https://s3.amazonaws.com/uifaces/faces/twitter/madshensel/128.jpg">
                                                <img class="img-circle avatar avatar-sm" src="https://s3.amazonaws.com/uifaces/faces/twitter/adamnac/128.jpg">
                                                <img class="img-circle avatar avatar-sm" src="https://s3.amazonaws.com/uifaces/faces/twitter/haligaliharun/128.jpg">
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
                            <div class="timeline-item p-r-1" id="m16">
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
                                            <p class="text-white m-t-1"><span>I'll override the auxiliary SQL array, that should array the HTTP application!</span></p>
                                            <p class="text-nowrap small"><span>11-Jul-2011, 10:28</span>
                                            </p>
                                            <p><span>Voluptatem molestiae debitis numquam deserunt consectetur dicta fugit consequatur ut.</span></p>
                                        </div>
                                    </div>
                                    <!-- END Avatar, Message & Time -->
                                </div>
                            </div>
                        </div>
                        <!-- END Timeline - Active Entry (Day) -->
                        <!-- START Timeline - Active Entry -->
                        <div class="timeline">
                            <div class="timeline-item p-r-1" id="m16">
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
                                            <del>
                                                <p class="m-t-1"><span>We need to bypass the haptic SAS transmitter!</span></p>
                                            </del>
                                            <p class="text-nowrap small"><span>30-Jun-2012, 10:45</span>
                                            </p>
                                        </div>
                                    </div>
                                    <!-- END Avatar, Message & Time -->
                                </div>
                            </div>
                        </div>
                        <!-- END Timeline - Active Entry  -->
                    </div>
                </div>
            </div>
        </div>
        <!-- END EDIT CONTENT -->
    </div>
</div>
@endsection