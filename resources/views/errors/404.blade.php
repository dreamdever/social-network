@extends('layouts.master')

@section('title', '404')

@section('content')
<div class="content">
    <div class="container-fluid">
        <a class="btn btn-default m-t-2 m-b-1 action-navigate-back" href="#" role="button"><i class="fa fa-angle-left m-r-1"></i>Späť</a>
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="panel panel-default b-a-2 no-bg b-gray-dark">
                    <div class="panel-heading text-center">
                        <a href="{{ route('home') }}"><img src="{{ asset('assets/images/spin-logo-inverted-@2X.png')}}" alt="Logo" class="m-t-3 m-b-3 h-20"></a>
                    </div>
                    <div class="panel-body">
                        <h2 class="text-center f-w-300 m-b-0">Error 404</h2>
                        <p class="text-center m-b-3">Nepíš tam somariny vidíš že to nebude fungovať.</p>
                    </div>
                    <div class="panel-footer b-a-0 b-r-a-0">
                        <a href="{{ route('home') }}" type="button" class="btn btn-block btn-link"><i class="fa fa-angle-left m-r-1"></i>Domov</a>
                    </div>
                </div>
                <p class="text-gray-light text-center"><strong>Projekt Sociálna sieť </strong> <span class="text-gray-light">&#xA9; 2017 Tvorcovia <i class="fa fa-fw fa-heart text-danger"></i> Študenti UCM</span></p>
            </div>
        </div>
    </div>

</div>
@endsection
