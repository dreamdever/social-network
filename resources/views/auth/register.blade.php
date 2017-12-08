@extends('layouts.master')

@section('title', 'Registrácia')

@section('content')

<div class="content register-page">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="panel panel-default b-a-2 no-bg b-gray-dark">
                    <div class="panel-heading text-center">
                        <a href="../index.html"> <img src="../assets/images/spin-logo-inverted-@2X.png" alt="Logo" class="m-t-3 m-b-3 h-20"></a>
                    </div>
                    <div class="panel-body">
                        <h2 class="text-center f-w-300 m-b-0">Registrácia</h2>
                        <p class="text-center m-b-3"><strong>Tu sa môžete zaregistrovať do najlepšej sociálnej siete.</strong> <small>srandujem</small></p>
                        <form  method="POST" action="{{ route('register') }}">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <label>Meno a priezvisko</label>
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <label>Heslo</label>
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label>Heslo znovu</label>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label>Email</label>
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox"> Prijímam všetky podmienky
                                </label>
                            </div>
                            <button type="submit" role="button" class="btn m-b-2 btn-block btn-primary">Registrovať</button>
                        </form>

                    </div>
                    <div class="panel-footer b-a-0 b-r-a-0">
                        <a id="smola" href="#">Zabudli ste heslo?</a>
                        <a href="{{ route('login') }}" class="pull-right">Prihlásenie</a>
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
