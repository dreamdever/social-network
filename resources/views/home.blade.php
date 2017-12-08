@extends('layouts.master')

@section('title', 'Nástenka')

@section('content')

<div class="content" id="timeline" style="min-height: 1636px;">

    <!-- END Sub-Navbar with Header and Breadcrumbs-->
    <div class="container">
        <!-- START EDIT CONTENT -->
        <div class="row m-b-3 m-t-3">
            <div class="col-lg-8">
                <div class="row">
                    <div class="col-lg-12">
                        <form action="{{ route('postCreate') }}" method="post" id="postForm">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <textarea name="text" style="max-width: 100%; min-width:100%;" rows="5" class="form-control" placeholder="Čo máte na mysli?"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary pull-right">Uverejniť</button>
                            <img src="{{ asset('assets/images/loading.gif') }}" class="pull-right loading-spinner m-r-2" alt="loading">
                        </form>
                    </div>
                </div>

                <div class="posts">
                    @forelse( $posts as $post )
                        <!-- START Timeline - Post -->
                        <div class="timeline timeline-datetime" id="post{{ $post->id }}" data-user="{{ $post->user_id }}">
                            <div class="timeline-item p-r-1">
                                <!-- Timeline - Mini Icon -->
                                <div class="timeline-icon">
                                    <i class="fa fa-circle-o text-primary"></i>
                                </div>
                                <div class="timeline-item-inner">
                                    <!-- Timeline - Date -->
                                    <span class="timeline-item-time">{{ date("H:i",strtotime($post->created_at)) }}</span>
                                    <!-- Timeline - Icon  -->
                                    <div class="timeline-item-head clearfix media">
                                        <div class="media-left media-top">
                                            <a href="{{ url("user/profile/{$post->user_id}") }}" data-toggle="tooltip" data-placement="top" title="{{ $post['user']->name }}" data-original-title="Profil">
                                                <div class="avatar"> <img class="media-object img-circle" src="{{ asset($post['user']->img) }}"> </div>
                                            </a>
                                        </div>
                                        <div class="media-body">
                                            <h5 class="m-t-0 m-b-0"><span>{{ $post['user']->name }}</span></h5>
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
                    @empty
                        <div class="alert no-bg b-l-primary b-l-3 b-t-gray b-r-gray b-b-gray m-t-2 empty" role="alert">
                            <strong class="text-white">Smola!</strong> <span class="text-gray-lighter">Nič tu zatiaľ nieje.</span>
                        </div>
                    @endforelse
                </div>
            </div>
            <div class="col-lg-4">
                <div class="panel panel-default no-bg b-a-2 b-gray-dark">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-sm-12 col-xs-12">Prihlásený priatelia</div>
                        </div>
                    </div>
                    <div class="panel-body">

                        @forelse( $friends as $friend )
                            <div class="clearfix media">
                                <div class="media-left media-top v-a-m">
                                    <a href="{{ url('user/profile/'.$friend->id) }}" data-toggle="tooltip" data-placement="top" title="" data-original-title="{{ $friend->name }}">
                                        <div class="avatar"> <img class="media-object img-circle" src="{{ $friend->img }}"><i class="avatar-status avatar-status-bottom bg-success b-brand-gray-darker"></i> </div>
                                    </a>
                                </div>
                                <div class="media-body v-a-m">
                                    <h5 class="m-t-0 m-b-0"><span>{{ $friend->name }}</span></h5>
                                </div>
                            </div>
                        @empty
                            <div class="alert no-bg b-l-danger b-l-3 b-t-gray b-r-gray b-b-gray" role="alert">
                                <strong class="text-white">Smola!</strong> <span class="text-gray-lighter">Si tu sám, <strong>uplne sám</strong>.</span>
                            </div>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
        <!-- END EDIT CONTENT -->
    </div>
</div>

<script>
    var formPost = $('#postForm');
    var loading = $('.loading-spinner');

    formPost.on('submit', function(event) {
        event.preventDefault();

        loading.show();

        var req = $.ajax({
            url: formPost.attr('action'),
            type: 'POST',
            data: formPost.serialize()
        });

        req.done(function(data) {

            loading.hide();

            var htmlString = data,
                parser = new DOMParser(),
                doc = parser.parseFromString(htmlString, "text/html");

            var post = $(doc).find('.timeline[data-user='+<?= Auth::user()->id; ?>+']').first();

            $('.empty').hide();

            $('.posts').prepend(post);

            post.hide().slideDown();

        });

    });

    $('#timeline').on('click', '.btn-like', function(event) {
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