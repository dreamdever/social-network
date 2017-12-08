
    <!-- START Panel Sessions -->
    <div class="chat panel panel-default b-a-2 no-bg b-gray-dark">
        <div class="panel-heading">
            <div class="row">
                <div class="col-xs-12">
                    <h4 class="panel-title">Chat s používateľom <span class="chat-name"></span></h4>
                </div>
            </div>
        </div>
        <div class="scrollbar-custom" style="max-height: 70vh; overflow: scroll; overflow-x: hidden;">
            <div class="panel-body messages-wrap" >

                @foreach( $messages as $message )

                    @if ( $message->from_id != Auth::user()->id )
                        <!-- START Left Chat -->
                        <div class="media" data-msg-id="{{ $message->id }}">
                            <div class="media-left">
                                <div class="avatar">
                                    <img class="media-object img-circle" src="{{ asset($message->img) }}" alt="Avatar">
                                </div>
                            </div>
                            <div class="media-body">
                                <div class="panel-default">
                                    <div class="panel-body bg-gray text-white b-r-a-3">
                                        <span>{{ $message->text }}</span>
                                    </div>
                                </div>
                                <h5 class="m-t-1"><span>{{ $message->name }}</span>   <small><span>{{ date('j.n.Y H:i', strtotime($message->time)) }}</span></small></h5>
                            </div>
                        </div>
                        <!-- END Left Chat -->

                    @else

                        <!-- START Right Chat -->
                        <div class="media" data-msg-id="{{ $message->id }}">
                            <div class="media-body">
                                <div class="panel-default">
                                    <div class="panel-body bg-endaveour text-white b-r-a-3">
                                        <span>{{ $message->text }}</span>
                                    </div>
                                </div>
                                <h5 class="m-t-1 text-right"><small><span>{{ date('j.n.Y H:i',strtotime($message->time)) }}</span></small> <span>{{ $message->name }}</span></h5>
                            </div>
                            <div class="media-right">
                                <div class="avatar">
                                    <img class="media-object img-circle" src="{{ asset($message->img) }}" alt="Avatar">
                                </div>
                            </div>
                        </div>
                        <!-- END Right Chat -->
                    @endif
                @endforeach

            </div>
        </div>
        <form action="{{ route('sendMessage') }}" method="post" id="sendMessage">
            {{ csrf_field() }}
            <div class="panel-footer">
                <!-- START Send Message Input -->
                <div class="input-group">
                    <input type="hidden" name="to_id" value="{{ $id }}">
                    <input name="text" type="text" class="form-control" placeholder="Your Message...">
                    <span class="input-group-btn">
                    <button class="btn btn-primary btn-send-message" type="submit"><i class="fa fa-send fa-lg"></i></button>
                    </span>
                </div>
                <!-- END Send Message Input -->
            </div>
        </form>
    </div>
    <!-- END Panel Sessions -->
