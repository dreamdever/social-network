@extends('layouts.master')

@section('title', 'Prihlásenie')

@section('content')

<div class="content login-page">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="panel panel-default b-a-2 no-bg b-gray-dark">
                    <div class="panel-heading text-center">
                        <a href="../index.html"> <img src="../assets/images/spin-logo-inverted-@2X.png" alt="Logo" class="m-t-3 m-b-3 h-20"></a>
                    </div>
                    <div class="panel-body">
                        <h2 class="text-center f-w-300 m-b-0"> Prihlásenie</h2>
                        <p class="text-center m-b-3"><strong>Tu sa môžete prihlásiť do najlepšej sociálnej siete.</strong> <small>nesrandujem</small></p>
                        <form class="m-t-3" method="POST" action="{{ route('login') }}">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Váš email..." required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <input id="password" name="password" type="password" required class="form-control" placeholder="Vaše heslo...">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <button type="submit" role="button" class="btn btn-block m-b-2 btn-primary">Prihlásiť</button>
                        </form>
                    </div>
                    <div class="panel-footer b-a-0 b-r-a-0">
                        <a id="smola" href="#">Zabudli ste heslo?</a>
                        <a href="{{ route('register') }}" class="pull-right">Registrácia</a>
                    </div>
                </div>
                <p class="text-gray-light text-center"><strong>Projekt Sociálna sieť </strong> <span class="text-gray-light">&#xA9; 2017 Tvorcovia <i class="fa fa-fw fa-heart text-danger"></i> Študenti UCM</span></p>
            </div>
        </div>
    </div>

</div>

<script>
    $('#smola').click(function () {
        toastr["error"]("To ma skutočne mrzí", "Zabudli ste heslo?")
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
 });
</script>
@endsection
