@extends('layouts.master')

@section('title', 'Správy')

@section('content')

<div class="content" style="min-height: 1636px;">

    <div class="container">
        <!-- START EDIT CONTENT -->
        <div class="row m-t-3">
            <div class="col-lg-3">
                <!-- START Search Input -->
                <div class="input-group">
                    <input type="text" class="form-control search-contact" placeholder="Hľadať...">
                    <span class="input-group-btn">
                    <button class="btn btn-primary" type="button"><i class="fa fa-fw fa-search"></i></button>
                    </span>
                </div>
                <!-- END Search Input -->
                <div class="hr-text hr-text-left m-t-3 m-b-1">
                    <h6><strong>Kontakty</strong></h6>
                </div>
                <!-- START Widget - Menu Pills Vertical -->
                <div class="scroll-300 custom-scrollbar ps-container ps-theme-default ps-active-y" data-ps-id="e5861b41-83b8-fba8-3cb7-23860183d9c4">
                    <ul class="nav nav-pills nav-stacked contacts">

                        @forelse( $users as $user )
                            <!-- START User Online (Small) -->
                            <li role="presentation" data-id="{{ $user->id }}" data-url="{{ url('chat/'.$user->id) }}" data-name="{{$user->name}}" >
                                <a href="javascript: void(0)">
                                    <div class="media">
                                        <div class="media-left">
                                            <div class="avatar avatar-image avatar-sm loaded">
                                                <img class="media-object img-circle" src="{{ $user->img }}" alt="Avatar">
                                            </div>
                                        </div>
                                        <div class="media-body v-a-m">
                                            <h5 class="m-t-0 m-b-0"><span>{{ $user->name }}</span></h5>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <!-- START User Online (Small) -->
                        @empty
                            <div class="alert no-bg b-l-danger b-l-3 b-t-gray b-r-gray b-b-gray" role="alert">
                                <strong class="text-white">Smola!</strong> <span class="text-gray-lighter">Nikto si s tebou nechce písať.</span>
                            </div>
                        @endforelse

                    </ul>

                    <div class="ps-scrollbar-y-rail" style="top: 0px; height: 100%; right: 0px;">
                        <div class="ps-scrollbar-y" tabindex="0" style="top: 0px; height: 264px;"></div>
                    </div>
                </div>
                <!-- END Widget - Menu Pills Vertical -->


            </div>

            <div class="col-lg-9 messages">
                <div class="text-center loading-chat" style="height: 100%;"><img style="max-width: 100%;" src="{{ asset('assets/images/loading.gif') }}" alt="Loading..."></div>
                <div class="chat">

                </div>
            </div>
        </div>
        <!-- END EDIT CONTENT -->
    </div>
</div>

<script>
    var requestWorking = false;
    var loading = $('.loading-chat').hide();

    $('.contacts').on('click', 'li', function() {

        if (!requestWorking) {

            $('li').removeClass('active');
            $(this).addClass('active');
            var id = $(this).attr('data-id');
            var url = $(this).attr('data-url');
            var user = $(this).attr('data-name');

            loading.fadeIn();

            requestWorking = true;
            $('.messages').find('.chat').hide();

            var req = $.ajax({
                url: url,
                type: 'GET'
            });

            req.done(function(data) {

                loading.hide();

                requestWorking = false;

                $('.messages .chat').html(data);
                $('.messages .chat').fadeIn();
                $('.chat-name').text(user);

                $('.messages').find('.scrollbar-custom').scrollTop($('.messages').find('.scrollbar-custom')[0].scrollHeight);

            });
        }
    });

    //send message
    $('.messages').on('submit', '#sendMessage', function(event) {
        event.preventDefault();

        setTimeout( function() {
            $('.messages').find('input[name=text]').val('');
        },200);

        var req = $.ajax({
            url: $(this).attr('action'),
            type: 'POST',
            data: $(this).serialize()
        });

        req.done(function(data) {

            var htmlString = data,
                parser = new DOMParser(),
                doc = parser.parseFromString(htmlString, "text/html");

            var message = $(doc).find('[data-msg-id]').last();

            $('.messages').find('.messages-wrap').append(message);
            message.hide().slideDown();

            var time = new Date();
            var now = time.getTime();

            var scrollInterval = setInterval( function() {
                setTimeout( function() {
                    clearInterval(scrollInterval);
                },500);
                $('.messages').find('.scrollbar-custom').scrollTop($('.messages').find('.scrollbar-custom')[0].scrollHeight);
            },10);

        });

    });

    $('.search-contact').on('keyup', function(event) {
        $('.contacts li').each( function(index, item) {
            var name = $(item).attr('data-name').toLowerCase()
            name = name.split(' ');
            if ( !name[0].match('^'+$('.search-contact').val().toLowerCase() ) && !name[1].match('^'+$('.search-contact').val().toLowerCase() )) {
                $(this).fadeOut();
            } else {
                $(this).fadeIn();
            }
        });
    });


</script>

@endsection
