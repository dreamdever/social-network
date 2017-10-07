@extends('layouts.master')

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
                        <h2 class="text-center f-w-300 m-b-0"> Login</h2>
                        <p class="text-center m-b-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        <form class="m-t-3" method="POST" action="{{ route('login') }}">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Your Email..." required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <input id="password" name="password" type="password" required class="form-control" placeholder="Your Password...">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Password?
                                </label>
                            </div>
                            <button type="submit" role="button" class="btn btn-block m-b-2 btn-primary">Login</button>
                        </form>
                    </div>
                    <div class="panel-footer b-a-0 b-r-a-0">
                        <a href="{{ route('password.request') }}">Forgot Password?</a>
                        <a href="{{ route('register') }}" class="pull-right">Register</a>
                    </div>
                </div>
                <p class="text-gray-light text-center"><strong>SPIN Dashboard </strong> <span class="text-gray-light">&#xA9; 2009 - 2016. Made by <i class="fa fa-fw fa-heart text-danger"></i> New York, US</span></p>
            </div>
        </div>
    </div>

</div>
@endsection
