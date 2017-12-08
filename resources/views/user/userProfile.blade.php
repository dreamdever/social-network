@extends('layouts.master')

@section('title', $user->name)

@section('content')
<div class="content">



    <div class="container">
        <!-- START EDIT CONTENT -->
        <div class="row">
            <div class="col-md-12 m-t-3">
                <div class="row">

                    <!-- START Left Column -->
                    <div class="col-lg-4 m-b-2">

                        <!-- START Avatar with Name -->
                        <div class="media">
                            <div class="media-left p-r-2">
                                <div class="center-block">
                                    <div class="avatar avatar-lg center-block">
                                        <img class="img-circle center-block m-t-1 m-b-2" src="{{ asset($user->img) }}" alt="Avatar">
                                        <i class="avatar-status avatar-status-bottom {{ $user->is_active ? 'bg-success' : 'bg-danger'}} b-brand-gray-darker"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="media-body">
                                <h4 class="m-b-0"><span>{{ $user->name }}</span></h4>
                                    <p class="m-t-0"><span>{{ $user->email }}</span></p>

                                    <div class="btn-toolbar" role="toolbar" aria-label="...">

                                        <div class="btn-group" role="group" aria-label="...">
                                            <!-- Standard button -->
                                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".modal-chat"><i class="fa fa-fw fa-envelope-o"></i><span class="hidden-xs m-l-1">Správa</span></button>

                                        </div>
                                        <?php
                                            $friend = DB::table('friendship')->where([['user1_id', Auth::user()->id],['user2_id',$user->id]])->orWhere([['user2_id', Auth::user()->id],['user1_id',$user->id]])->first();
                                        ?>
                                        @if ($friend)
                                            <div class="btn-group" role="group" aria-label="...">
                                                <a href="{{ url('friend/remove/'.$user->id) }}" class="btn btn-default" data-toggle="tooltip"  class="btn btn-default" title="Zrušiť priateľstvo"><i class="fa fa-fw fa-user-times"></i> Zrušiť priateľstvo</a>
                                            </div>
                                        @else
                                            <div class="btn-group" role="group" aria-label="...">
                                                <a href="{{ url('friend/add/'.$user->id) }}" class="btn btn-default" data-toggle="tooltip" class="btn btn-default" title="Pridať"><i class="fa fa-fw fa-user-plus"></i> Pridať priateľa</a>
                                            </div>
                                        @endif


                                    </div>

                                </div>
                            </div>
                            <!-- END Avatar with Name -->

                            <div class="hr-text hr-text-left">
                                <h6 class="text-white"><strong>Popis</strong></h6>
                            </div>
                            {{ $user->description }}



                            </div>
                            <!-- START Left Column -->

                            <!-- START Tabs Content -->
                            <div class="col-lg-8">

                                <!-- Tabs Buttons -->
                                <ul class="nav nav-tabs">

                                    <li role="presentation" class="active">
                                        <a aria-expanded="true" data-toggle="tab" href="#tab-overview" role="tab">Prehľad</a></li>

                                        <li role="presentation">
                                            <a aria-expanded="true" data-toggle="tab" href="#tab-detail-contact" role="tab">Kontakt</a></li>


                                                </ul>

                                                <!-- START Tabs Content -->
                                                <div class="tab-content">

                                                    <!-- START Tab: Detail Contact -->
                                                    <div class="tab-pane fade p-r-1" id="tab-detail-contact" role="tabpanel">
                                                        <div class="hr-text hr-text-left m-t-1">
                                                            <h6 class="text-white"><strong>Kontakt</strong></h6>
                                                        </div>
                                                        <dl class="dl-horizontal text-left">
                                                            <dt class="text-left">Mobil</dt>
                                                            <dd class="text-left text-white"><span>{{ $user->mobile }}</span></dd>
                                                            <dt class="text-left">Email</dt>
                                                            <dd class="text-left text-white"><span>{{ $user->email }}</span></dd>

                                                        </dl>
                                                        <div class="hr-text hr-text-left m-t-1">
                                                            <h6 class="text-white"><strong>Adresa</strong></h6>
                                                        </div>
                                                        <dl class="dl-horizontal text-left">
                                                            <dt class="text-left">Ulica</dt>
                                                            <dd class="text-left text-white"><span>{{ $user->address }}</span></dd>
                                                            <dt class="text-left">Mesto</dt>
                                                            <dd class="text-left text-white"><span>{{ $user->city }}</span></dd>
                                                            <dt class="text-left">Štát</dt>
                                                            <dd class="text-left text-white"><span>{{ $user->state }}</span></dd>
                                                        </dl>
                                                    </div>
                                                    <!-- END Tab: Detail Contact -->

                                                    <!-- START Tab: Overview -->
                                                    <div class="tab-pane fade in active p-r-1" id="tab-overview" role="tabpanel">


                                                        <div class="hr-text hr-text-center m-t-2">
                                                            <h6 class="text-white"><strong>Aktivita</strong></h6>
                                                        </div>



                                                        <div class="posts">
                                                            @foreach( $posts as $post )
                                                                <!-- START Timeline - Post -->
                                                                <div class="timeline timeline-datetime" id="post{{ $post->id }}" data-user="{{ $post->user_id }}">
                                                                    <div class="timeline-item p-r-1">
                                                                        <!-- Timeline - Mini Icon -->
                                                                        <div class="timeline-icon">
                                                                            <i class="fa fa-circle-o text-info"></i>
                                                                        </div>
                                                                        <div class="timeline-item-inner">
                                                                            <!-- Timeline - Date -->
                                                                            <span class="timeline-item-time">{{ date("H:i",strtotime($post->created_at)) }}</span>
                                                                            <!-- Timeline - Icon  -->
                                                                            <div class="timeline-item-head clearfix media">
                                                                                <div class="media-left media-top">

                                                                                        <div class="avatar"> <img class="media-object img-circle" src="{{ asset($user->img) }}"><i class="avatar-status avatar-status-bottom bg-success b-brand-gray-darker"></i> </div>

                                                                                </div>
                                                                                <div class="media-body">
                                                                                    <h5 class="m-t-0 m-b-0"><span>{{ $user->name }}</span></h5>
                                                                                    <p class="m-t-0">{{ date("j.n.Y",strtotime($post->created_at)) }}</p>
                                                                                </div>
                                                                            </div>
                                                                            <!-- Timeline - START Content -->
                                                                            <div class="timeline-item-content m-b-2">
                                                                                <p class="m-b-1"><span>{{ $post->text }}</span></p>
                                                                                <p>
                                                                                    <a href="{{ URL::to('/post'.'/'.$post->id) }}/{{ in_array($post->id, json_decode(Auth::user()->liked_posts, true)) ? '0' : '1' }}" class="btn btn-primary btn-like btn-sm {{in_array($post->id, json_decode(Auth::user()->liked_posts, true)) ? '' : 'btn-outline'}}" type="button">
                                                                                        <i class="fa fa-thumbs-o-up"></i>
                                                                                        <span>Páči sa mi to</span>
                                                                                    </a>

                                                                                    <span class="m-l-1"><i class="fa fa-thumbs-up"></i> <span class="likes-count">{{ $post->likes }}</span></span>
                                                                                </p>
                                                                            </div>
                                                                            <!-- Timeline - END Content -->
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!-- END Timeline - Post -->
                                                            @endforeach
                                                        </div>

                                                        <!-- END Tieline -->

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
                        <div class="modal fade modal-chat" tabindex="-1" role="dialog" >
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                                        </button>
                                        <h4 class="modal-title">Správa pre <span>{{ $user->name }}</span></h4>
                                    </div>
                                    <div class="modal-body">
                                        <form action="{{ route('sendMessage') }}" method="post" id="sendMessage">
                                            {{ csrf_field() }}
                                           <textarea name="text" placeholder="Správa..." class="form-control" rows="8"></textarea>
                                           <input type="hidden" name="to_id" value="{{ $user->id }}">
                                       </form>
                                    </div>
                                    <div class="modal-footer">
                                        <!-- START Send Message Input -->
                                        <div class="input-group">
                                            <span class="input-group-btn">
                                                <button class="btn btn-default" type="button" data-dismiss="modal">Zrušiť</button>
                                                <button class="btn btn-primary" onclick="$('#sendMessage').submit();" type="button">Poslať</button>
                                            </span>
                                        </div>
                                        <!-- END Send Message Input -->
                                    </div>
                                </div>
                            </div>
                        </div>


<script>

    $('.timeline').on('click', '.btn-like', function(event) {
        event.preventDefault();
        var url = this.href;
        var btn = $(this);
        var likes = btn.parent().find('.likes-count');
        var req = $.ajax({
            url: url,
            type: 'GET',
            data: $(this).serialize()
        });

        req.done(function(data) {

            if ( data === "liked" ) {
                btn.removeClass('btn-outline');
                url = url.substring(0, url.length-1)+"0";
                likes.text(Number(likes.text()) + 1 );
            } else {
                btn.addClass('btn-outline')
                url = url.substring(0, url.length-1)+"1";
                likes.text(Number(likes.text()) - 1 );
            }

            btn.attr('href', url );
        });


    });

</script>

<script>
    $('#sendMessage').on('submit', function(event) {
        event.preventDefault();

        setTimeout( function() {
            $('#sendMessage').find('textarea').val('');
        },200);

        var req = $.ajax({
            url: $(this).attr('action'),
            type: 'POST',
            data: $(this).serialize()
        });

        req.done(function(data) {

            toast('success', 'Výborne', 'Správa bola odoslaná!');

            $('.modal-chat').find('[data-dismiss=modal]').click();

        });

    });

    function toast( type, heading, message) {
        toastr[type](message, heading)
        toastr.options = {
        "closeButton": true,
          "debug": false,
          "newestOnTop": false,
          "progressBar": true,
          "positionClass": "toast-top-right",
          "preventDuplicates": false,
          "onclick": null,
          "showDuration": "300",
          "hideDuration": "1000",
          "timeOut": "5000",
          "extendedTimeOut": "1000",
          "showEasing": "swing",
          "hideEasing": "linear",
          "showMethod": "fadeIn",
          "hideMethod": "fadeOut"
        }
    }
</script>

@endsection
