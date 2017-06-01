@extends('layouts.app')

@section('title')
<title> Mobilna telefonija — ITelecom </title>
@endsection

@section('styles')
    <link rel="stylesheet" href="{{ config('app.filePath'). '/css/app.css' }}" />
@endsection

@section('fonts')
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,600i,700,700i" rel="stylesheet">
@endsection

@section('content')
    <div class="container-fluid">
                <style>
                    body {
                        background: url(images/pexels-photo.jpg) no-repeat fixed center;
                        background-size: 100%;
                    }
                </style>
                <!-- no-repeat center center-->
    </div>
@endsection