@extends('layouts.app')

@section('title')
<title> ITelecom </title>
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
                <!--<style>
                    body {
                        background: url(images/telecom.jpg) no-repeat center center;
                    }
                </style>-->

                <div class="panel panel-default">
                    <!--<div class="panel-heading">
                        <h3 class="panel-title">
                            Panel title
                        </h3>
                    </div>-->
                    <div class="panel-body">
                        


                        <div class="row">
                            <div class="col-md-12">
                                <div class="carousel slide" id="carousel-632874">
                                    <ol class="carousel-indicators">
                                        <li class="active" data-slide-to="0" data-target="#carousel-632874">
                                        </li>
                                        <li data-slide-to="1" data-target="#carousel-632874">
                                        </li>
                                        <li data-slide-to="2" data-target="#carousel-632874">
                                        </li>
                                        <li data-slide-to="3" data-target="#carousel-632874">
                                        </li>
                                    </ol>
                                    <div class="carousel-inner">
                                        <div class="item active">
                                            <img alt="Carousel Bootstrap First" src="/images/landline-1600x500.jpg" />
                                            <div class="carousel-caption">
                                                <h4>
                                                    <a href="/fiksna-telefonija">FIKSNA TELEFONIJA</a>
                                                </h4>
                                                <p>
                                                    Pričajte više, plaćajte manje i iskoristite napredne usluge fiskne telefonije.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <img alt="Carousel Bootstrap Second" src="/images/pexels-photo-1600x500.jpg" />
                                            <div class="carousel-caption">
                                                <h4>
                                                    <a href="/mobilna-telefonija">MOBILNA TELEFONIJA</a>
                                                </h4>
                                                <p>
                                                    Pričajte više, plaćajte manje i iskoristite napredne usluge mobilne telefonije.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <img alt="Carousel Bootstrap Third" src="/images/101413-1600x500.jpg" />
                                            <div class="carousel-caption">
                                                <h4>
                                                    <a href="/internet">INTERNET</a>
                                                    <!--{{ $_SERVER['REMOTE_ADDR'] }}-->
                                                </h4>
                                                <p>
                                                    Superbrzi internet u kući, kao i mreža za van kuće na 100 hiljada lokacija u zemlji i regionu.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <img alt="Carousel Bootstrap Third" src="/images/watchingtv-1600x500.jpg" />
                                            <div class="carousel-caption">
                                                <h4>
                                                    <a href="/tv">TELEVIZIJA</a>
                                                </h4>
                                                <p>
                                                    Gledajte preko 200 vrhunskih digitalnih kanala i 50 HD kanala.
                                                </p>
                                            </div>
                                        </div>
                                    </div> <a class="left carousel-control" href="#carousel-632874" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a> <a class="right carousel-control" href="#carousel-632874" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
                                </div>
                            </div>
                        </div>


                        
                    </div>
                    <div class="panel-footer">
					        <a href="/politika-sigurnosti"><span class="glyphicon glyphicon-info-sign"></span>&nbsp;&nbsp;Politika informacijske sigurnosti</a>
				        </div>
                </div>


                    


                    <div class="row">
                        <div class="col-md-12">
                            
                                
                            
                        </div>
                    </div>






    </div>
@endsection

@section('scripts') 
    <!--<script src="{{ config('app.filePath'). '/templateAssets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js' }}"></script>
    <script src="{{ config('app.filePath'). '/templateAssets/js/vendor/jquery-1.11.2.min.js' }}"></script>
    <script src="{{ config('app.filePath'). '/templateAssets/js/vendor/bootstrap.min.js' }}"></script>
    <script src="{{ config('app.filePath'). '/templateAssets/js/jquery.magnific-popup.js' }}"></script>
    <script src="{{ config('app.filePath'). '/templateAssets/js/jquery.mixitup.min.js' }}"></script>
    <script src="{{ config('app.filePath'). '/templateAssets/js/jquery.easing.1.3.js' }}"></script>
    <script src="{{ config('app.filePath'). '/templateAssets/js/jquery.masonry.min.js' }}"></script>-->

    <!--slick slide js -->
    <!--<script src="{{ config('app.filePath'). '/templateAssets/css/slick/slick.js' }}"></script>
    <script src="{{ config('app.filePath'). '/templateAssets/css/slick/slick.min.js' }}"></script>

    <script src="{{ config('app.filePath'). '/templateAssets/js/plugins.js' }}"></script>
    <script src="{{ config('app.filePath'). '/templateAssets/js/main.js' }}"></script>-->
@endsection