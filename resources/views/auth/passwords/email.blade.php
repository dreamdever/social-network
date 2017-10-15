@extends('layouts.master')

@section('content')

<div class="content">
    <div class="container-fluid">
        <a class="btn btn-default m-t-2 m-b-1 action-navigate-back" href="#" role="button"><i class="fa fa-angle-left m-r-1"></i> Späť</a>
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="panel panel-default b-a-2 no-bg b-gray-dark">
                    <div class="panel-heading text-center">
                        <a href="../index.html"><img src="../assets/images/spin-logo-inverted-@2X.png" alt="Logo" class="m-t-3 m-b-3 h-20"></a>
                    </div>
                    <div class="panel-body">
                        <h2 class="text-center f-w-300 m-b-0">Forgot Password</h2>
                        <p class="text-center m-b-3">We can help you reset your password using a user name or email address associated with your account.</p>
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif
                        <form method="POST" action="{{ route('password.email') }}">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <button type="submit" role="button" class="btn m-b-2 btn-block btn-primary">Reset Your Password</button>
                        </form>
                    </div>
                    <div class="panel-footer b-a-0 b-r-a-0">
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}" class="pull-right">Register</a>
                    </div>
                </div>
                <p class="text-gray-light text-center"><strong>SPIN Dashboard </strong> <span class="text-gray-light">&#xA9; 2009 - 2016. Made by <i class="fa fa-fw fa-heart text-danger"></i> New York, US</span></p>
            </div>
        </div>
    </div>

</div>
@endsection
