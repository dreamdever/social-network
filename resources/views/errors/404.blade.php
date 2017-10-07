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
                        <a href="../index.html"><img src="../assets/images/spin-logo-inverted-@2X.png" alt="Logo" class="m-t-3 m-b-3 h-20"></a>
                    </div>
                    <div class="panel-body">
                        <h2 class="text-center f-w-300 m-b-0">Error 404</h2>
                        <p class="text-center m-b-3">Sorry but the page you are looking for was not found. Try to fix the URL or use the search engine below.</p>
                        <form>
                            <div class="input-group m-b-1">
                                <input type="text" class="form-control" placeholder="Search page..."><span class="input-group-btn"><a class="btn btn-primary" type="button" href="../index.html"><i class="fa fa-fw fa-search"></i></a></span>
                            </div>
                        </form>
                    </div>
                    <div class="panel-footer b-a-0 b-r-a-0">
                        <a href="{{ route('home') }}" type="button" class="btn btn-block btn-link"><i class="fa fa-angle-left m-r-1"></i>Back to Home</a>
                    </div>
                </div>
                <p class="text-gray-light text-center"><strong>SPIN Dashboard </strong> <span class="text-gray-light">&#xA9; 2009 - 2016. Made by <i class="fa fa-fw fa-heart text-danger"></i> New York, US</span></p>
            </div>
        </div>
    </div>

</div>
@endsection
