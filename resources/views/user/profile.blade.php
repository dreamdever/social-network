@extends('layouts.master')

@section('title', Auth::user()->name)

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
                                        <img class="img-circle center-block m-t-1 m-b-2" src="{{ asset(Auth::user()->img) }}" alt="Avatar">
                                        <i class="avatar-status avatar-status-bottom bg-success b-brand-gray-darker"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="media-body">
                                <h4 class="m-b-0"><span>{{ Auth::user()->name }}</span></h4>
                                    <p class="m-t-0"><span>{{ Auth::user()->email }}</span></p>

                                    <div class="btn-toolbar" role="toolbar" aria-label="...">

                                        <div class="btn-group" role="group" aria-label="...">
                                            <!-- Standard button -->
                                            <a href="javascript: void(0)" data-toggle="modal" data-target=".modal-edit-profile" class="btn btn-default" data-placement="top" title="Upraviť profil"><i class="fa fa-fw fa-pencil"></i></a>

                                        </div>
                                        <div class="btn-group" role="group" aria-label="...">
                                            <button type="button" class="btn btn-default" data-toggle="modal" data-target=".modal-alert-danger" class="btn btn-default" title="Delete"><i class="fa fa-fw fa-trash"></i></button>
                                        </div>

                                    </div>

                                </div>
                            </div>
                            <!-- END Avatar with Name -->

                            <div class="hr-text hr-text-left">
                                <h6 class="text-white"><strong>Popis</strong></h6>
                            </div>
                            {{ Auth::user()->description }}

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
                                                            <dd class="text-left text-white"><span>{{ Auth::user()->mobile }}</span></dd>
                                                            <dt class="text-left">Email</dt>
                                                            <dd class="text-left text-white"><span>{{ Auth::user()->email }}</span></dd>

                                                        </dl>
                                                        <div class="hr-text hr-text-left m-t-1">
                                                            <h6 class="text-white"><strong>Adresa</strong></h6>
                                                        </div>
                                                        <dl class="dl-horizontal text-left">
                                                            <dt class="text-left">Ulica</dt>
                                                            <dd class="text-left text-white"><span>{{ Auth::user()->address }}</span></dd>
                                                            <dt class="text-left">Mesto</dt>
                                                            <dd class="text-left text-white"><span>{{ Auth::user()->city }}</span></dd>
                                                            <dt class="text-left">Štát</dt>
                                                            <dd class="text-left text-white"><span>{{ Auth::user()->state }}</span></dd>
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
                                                                            <i class="fa fa-circle-o text-primary"></i>
                                                                        </div>
                                                                        <div class="timeline-item-inner">
                                                                            <!-- Timeline - Date -->
                                                                            <span class="timeline-item-time">{{ date("H:i",strtotime($post->created_at)) }}</span>
                                                                            <!-- Timeline - Icon  -->
                                                                            <div class="timeline-item-head clearfix media">
                                                                                <div class="media-left media-top">
                                                                                    <a href="{{ url("user/profile/{$post->user_id}") }}" data-toggle="tooltip" data-placement="top" title="" data-original-title="Go to Full Profile">
                                                                                        <div class="avatar"> <img class="media-object img-circle" src="{{ asset(Auth::user()->img) }}"><i class="avatar-status avatar-status-bottom bg-success b-brand-gray-darker"></i> </div>
                                                                                    </a>
                                                                                </div>
                                                                                <div class="media-body">
                                                                                    <h5 class="m-t-0 m-b-0"><span>{{ Auth::user()->name }}</span></h5>
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

                        <!-- START Modal: Edit Profile -->
                        <div class="modal fade modal-edit-profile" tabindex="-1" role="dialog">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                                        </button>
                                        <h4 class="modal-title">Upraviť profil</h4>
                                    </div>
                                    <div class="modal-body">

                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Avatar</label>
                                            <div class="col-sm-9">
                                                <div class="panel panel-default no-bg b-a-2 b-gray b-dashed m-b-2">
                                                    <div class="panel-body">
                                                        <form target="upload_target" enctype="multipart/form-data" id="imageForm" class="form-horizontal text-center" action="{{ route('avatarChange') }}" method="post">
                                                            {{ csrf_field() }}
                                                            <img class="img-circle" style="max-width: 50%" src="{{ asset(Auth::user()->img) }}" alt=""><br>
                                                            <label for="fileInput" class="btn btn-lg btn-default m-t-2 m-b-1">Zmeniť obrázok</label><br>
                                                            <strong class="text-white selectedFile"></strong>
                                                            <iframe id="upload_target" name="upload_target" src-a="#" style="width:0;height:0;border:0px solid #fff;"></iframe>
                                                            <input name="uploaded_img" class="hidden" id="fileInput" type="file">
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <form class="form-horizontal" id="formUpdateProfile" action="{{ route('profileUpdate') }}"  method="post">
                                            {{ csrf_field() }}
                                            <div class="form-group">
                                                <label for="profile-first-name" class="col-sm-3 control-label">Meno</label>
                                                <div class="col-sm-9">
                                                    <input name="name" type="text" value="{{ Auth::user()->name }}" class="form-control" id="profile-first-name" placeholder="Meno a priezvisko...">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="profile-profile" class="col-sm-3 control-label">Popis</label>
                                                <div class="col-sm-9">
                                                    <textarea name="description" class="form-control" id="profile-profile" rows="4" placeholder="Popíšte svoj profil...">{{ Auth::user()->description }}</textarea>
                                                </div>
                                            </div>

                                            <div class="hr-text hr-text-left">
                                                <h6 class="text-white bg-rangoon-i"><strong>Kontaktné informácie</strong></h6>
                                            </div>

                                            <div class="form-group">
                                                <label for="profile-email" class="col-sm-3 control-label">Email</label>
                                                <div class="col-sm-9">
                                                    <input name="email" type="email" value="{{ Auth::user()->email }}" class="form-control" id="profile-email" placeholder="Váš email...">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="profile-mobile" class="col-sm-3 control-label">Mobil</label>
                                                <div class="col-sm-9">
                                                    <input name="mobile" type="text" value="{{ Auth::user()->mobile }}" class="form-control" id="profile-mobile" placeholder="Vaše tel. číslo...">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="profile-address" class="col-sm-3 control-label">Ulica</label>
                                                <div class="col-sm-9">
                                                    <input name="address" type="text" value="{{ Auth::user()->address }}" class="form-control" id="profile-address" placeholder="Ulica a číslo domu...">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="profile-city" class="col-sm-3 control-label">Mesto</label>
                                                <div class="col-sm-9">
                                                    <input name="city" type="text" value="{{ Auth::user()->city }}" class="form-control" id="profile-city" placeholder="Vaše mesto...">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="profile-state" class="col-sm-3 control-label">Štát</label>
                                                <div class="col-sm-9">
                                                    <input name="state" type="text" value="{{ Auth::user()->state }}" class="form-control" id="profile-state" placeholder="Štát...">
                                                </div>
                                            </div>

                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                                        <button type="button" onclick="$('#formUpdateProfile').submit();" class="btn btn-primary" data-dismiss="modal">Save</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END Modal: Edit Profile -->
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
                                                <h4>Určite chcete vymazať svoj účet?</h4>
                                                <p>Nebudete sa môcť prihlásiť, všetky správy a príspevky budú neobnoviteľné.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <form action="{{ route('delete') }}" method="post" id="deleteAccount">
                                        {{ csrf_field() }}
                                        <input type="hidden" name="id" value="{{ Auth::user()->id }}">

                                    </form>
                                    <div class="modal-footer">
                                        <!-- START Buttons -->
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Zrušiť</button>
                                        <button class="btn btn-danger" onclick="$('#deleteAccount').submit();" >Áno</button>
                                        <!-- END Buttons -->
                                    </div>
                                </div>
                            </div>
                        </div>


<script>

    $('#upload_target').load(function() {
        console.log("load");
        stopUpload(document.upload_target.document.body.innerHTML);
    });

    $('#fileInput').change(function() {
        var filename = $(this).val().split('\\');
        filename = filename[filename.length-1];
        $('.selectedFile').html(filename);

        $('#imageForm').submit();
    });

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

    function stopUpload(data){
        $('.selectedFile').text('');
        if (data[0] == 'h' && data[1] == 't'){
            $('img').attr('src',data);
            toast('success','Výborne', 'Podarilo sa zmeniť obrázok!');
        } else {
            toast('error','Chyba', 'Obrázok sa nepodarilo nahrať!');
        }

        return true;
    }

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
