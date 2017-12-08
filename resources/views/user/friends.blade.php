@extends('layouts.master')

@section('title', 'Priatelia')

@section('content')


<div class="content" style="min-height: 1734px;">

    <!-- END Sub-Navbar with Header and Breadcrumbs-->
    <div class="container">
        <!-- START EDIT CONTENT -->
        <div class="row m-t-3">
            <!-- START Left Column -->
            <div class="col-lg-2">
                <div class="row">
                    <div class="col-lg-12 col-md-6 col-sm-6 col-xs-6">
                        <!-- START Widget - Menu Pills Vertical -->
                        <ul class="nav nav-pills nav-stacked m-b-2">
                            <li role="presentation" class="active"><a href="javascript: void(0)">Priatelia<span class="badge pull-right">{{ count($friends) }}</span> </a></li>
                        </ul>
                    </div>
                    <div class="col-lg-12 col-md-6 col-sm-6 col-xs-6 m-b-3">
                        <p class="small text-uppercase"><strong>Legenda</strong></p>
                        <ul class="nav nav-pills nav-stacked">
                            <li role="presentation"><a href="javascript: void(0)" class="text-muted"><i class="fa fa-fw fa-circle-o text-success m-r-1"></i> Aktívny</a></li>
                            <li role="presentation"><a href="javascript: void(0)" class="text-muted"><i class="fa fa-fw fa-circle-o text-warning m-r-1"></i> Neprítomný</a></li>
                            <li role="presentation"><a href="javascript: void(0)" class="text-muted"><i class="fa fa-fw fa-circle-o text-danger m-r-1"></i> Neaktívny</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- END Left Column -->
            <div class="col-lg-10">
                <!-- START Header with Option -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="input-group">
                            <input type="text" class="form-control search-friend" placeholder="Hľadať...">
                            <span class="input-group-btn">
                            <button class="btn btn-primary" type="button"><i class="fa fa-fw fa-search"></i> </button>
                            </span>
                        </div>

                    </div>
                </div>
                <!-- END Header with Option -->
                <!-- START ROW Users Grid -->
                <div class="row m-t-3 friends">

                    @forelse( $friends as $friend )
                        <!-- START Contact Grid -->
                        <div class="col-lg-4 col-md-6 col-sm-6" data-name="{{ $friend->name }}">
                            <div class="panel panel-default b-a-2 no-bg b-gray-dark">
                                <div class="panel-body">
                                    <div class="avatar avatar-image avatar-lg center-block loaded">
                                        <img class="img-circle center-block m-t-1 m-b-2" src="{{ asset($friend->img) }}" alt="Avatar">
                                        <i class="avatar-status avatar-status-bottom {{ $friend->is_active ? 'bg-success' : 'bg-danger'}} b-brand-gray-darker"></i>
                                    </div>
                                    <h4 class="text-center">
                                        <span>{{ $friend->name }}</span>
                                    </h4>
                                    <p class="m-t-0 text-center"><span>{{ $friend->email }}</span></p>
                                    <div class="text-center">
                                        <div class="btn-group m-t-2 m-b-2" role="group" aria-label="...">
                                            <a href="{{ url('user/profile/'.$friend->id) }}" type="button" class="btn btn-default" >Profil</a>
                                            <div class="btn-group" role="group">
                                                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <span class="caret"></span> </button>
                                                <ul class="dropdown-menu dropdown-menu-right">
                                                    <li><a href="javascript: void(0)" data-name="{{ $friend->name }}" data-id="{{ $friend->id }}" data-toggle="modal" data-target=".modal-chat"><i class="fa text-gray-lighter fa-comment fa-fw m-r-1"></i> Správa</a></li>
                                                    <li role="separator" class="divider"></li>
                                                    <li><a class="unfriend" data-name="{{$friend->name}}" data-friend="{{$friend->id}}" href="javascript: void(0)" data-toggle="modal" data-target=".modal-alert-danger"><i class="fa fa-fw text-gray-lighter fa-user-times m-r-1"></i> Zrušiť priateľstvo</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END Contact Grid -->
                    @empty
                        <div class="col-sm-12">
                            <div class="alert no-bg b-l-danger b-l-3 b-t-gray b-r-gray b-b-gray" role="alert">
                                <strong class="text-white">Smola!</strong> <span class="text-gray-lighter">Nemáš žiadnych priateľov, si bezvýznamný. :(</span>
                            </div>
                        </div>
                    @endforelse

                </div>
                <!-- END ROW Users Grid -->


            </div>
        </div>
        <!-- END EDIT CONTENT -->
    </div>
    <!-- START All Modals -->
    <div class="modal modal-danger fade modal-alert-danger" id="removeFriend" tabindex="-1" role="dialog" style="display: none">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <!-- START Left Chat -->
                    <div class="media">
                        <div class="media-left">
                            <span class="fa-stack fa-lg">
                            <i class="fa fa-circle fa-stack-2x text-danger"></i>
                            <i class="fa fa-exclamation fa-stack-1x fa-inverse"></i>
                            </span>
                        </div>
                        <div class="media-body">
                            <h4>Určite chcete zrušiť priateľstvo?</h4>
                            <p>Nebudete naďalej môcť vidieť príspevky používateľa <span class="friendToRemove text-white" ></span>.</p>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <!-- START Buttons -->
                    <button type="button" class="btn btn-default" data-dismiss="modal">Zrušiť</button>
                    <a href="{{ url('friend/remove')}}/" class="btn btn-danger" >Áno</a>
                    <!-- END Buttons -->
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade modal-chat" tabindex="-1" role="dialog" >
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                    </button>
                    <h4 class="modal-title">Správa pre <span class="messageToName"></span></h4>
                </div>
                <div class="modal-body">
                    <form action="{{ route('sendMessage') }}" method="post" id="sendMessage">
                        {{ csrf_field() }}
                       <textarea name="text" placeholder="Správa..." class="form-control" rows="8"></textarea>
                       <input type="hidden" name="to_id" >
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
    <!-- END All Modals -->
</div>

<script>
    $('.unfriend').click( function() {
        var friendId = $(this).attr('data-friend');
        var friendName = $(this).attr('data-name');
        $('.friendToRemove').text(friendName);
        $('#removeFriend').find('a').attr('href', $('#removeFriend').find('a').attr('href')+friendId );
    });

    $('.search-friend').on('keyup', function(event) {
        $('.friends > div').each( function(index, item) {
            var name = $(item).attr('data-name').toLowerCase();
            name = name.split(' ');
            if ( !name[0].match('^'+$('.search-friend').val().toLowerCase() ) && !name[1].match('^'+$('.search-friend').val().toLowerCase() )) {
                $(this).fadeOut();
            } else {
                $(this).fadeIn();
            }
        });
    });
</script>

<script>

    $('a[data-toggle=modal]').click( function() {
        var id = $(this).attr('data-id');
        var name = $(this).attr('data-name');
        $('.modal-chat').find('input[name=to_id]').val(id);
        $('.modal-chat').find('.messageToName').text(name);
    });

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
