@extends('layouts.app')

@section('title')
<title> Moj nalog </title>
@endsection

@section('styles')
    <link rel="stylesheet" href="{{ config('app.filePath'). '/css/app.css' }}" />
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
@endsection

@section('fonts')
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,600i,700,700i" rel="stylesheet">
@endsection

@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10">
            <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                Moj nalog
                            </h3>
                        </div>
                        <div class="panel-body">
                            <div class="row"><h2 align="center">{{ $user->full_name }}</h2></div>


                        </div>
            </div>
        </div>
        <div class="col-md-1"></div>
    </div>        
</div>

@endsection