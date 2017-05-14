@extends('layouts.app')

@section('title')
<title> ITelecom </title>
@endsection

@section('styles')
    <link rel="stylesheet" href="{{ config('app.filePath'). '/css/app.css' }}" />
<!--
    <link rel="stylesheet" href="{{ config('app.filePath'). '/templateAssets/css/iconfont.css' }}" />
    <link rel="stylesheet" href="{{ config('app.filePath'). '/templateAssets/css/slick/slick.css' }}" />
    <link rel="stylesheet" href="{{ config('app.filePath'). '/templateAssets/css/slick/slick-theme.css' }}" />
    <link rel="stylesheet" href="{{ config('app.filePath'). '/templateAssets/css/font-awesome.min.css' }}" />
    <link rel="stylesheet" href="{{ config('app.filePath'). '/templateAssets/css/jquery.fancybox.css' }}" />
    <link rel="stylesheet" href="{{ config('app.filePath'). '/templateAssets/css/bootstrap.css' }}" />
    <link rel="stylesheet" href="{{ config('app.filePath'). '/templateAssets/css/bootstrap.min.css' }}" />
    <link rel="stylesheet" href="{{ config('app.filePath'). '/templateAssets/css/magnific-popup.css' }}" />
-->

    <!--For Plugins external css-->
    <link rel="stylesheet" href="{{ config('app.filePath'). '/templateAssets/css/plugins.css' }}" />
    <!--Theme custom css -->
    <link rel="stylesheet" href="{{ config('app.filePath'). '/templateAssets/css/style.css' }}" />
    <!--Theme Responsive css-->
    <link rel="stylesheet" href="{{ config('app.filePath'). '/templateAssets/css/responsive.css' }}" />
@endsection

@section('fonts')
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,600i,700,700i" rel="stylesheet">
@endsection

@section('content') 
    <div class='preloader'><div class='loaded'>&nbsp;</div></div>
    <div class="culmn">
        <!--home Section -->
        <section id="home" class="home">
            <div class="overlay">
                <div class="home_skew_border">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12 ">
                                <div class="main_home_slider text-center">
                                    <div class="single_home_slider">
                                        <div class="main_home wow fadeInUp" data-wow-duration="700ms">
                                            <h3>Zadovoljstvo klijenata je naš prioritet!</h3>
                                            <h1>DOBRO DOŠLI NA ITELECOM</h1>
                                            <div class="separator"></div>
                                            <p>Kratak opis</p>
                                            <div class="home_btn">
                                                <a href="" class="btn btn-lg m_t_10">Treba li nam?</a>
                                                <a href="" class="btn btn-default">Treba li nam?</a>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="single_home_slider">
                                        <div class="main_home wow fadeInUp" data-wow-duration="700ms">
                                            <h3>Zadovoljstvo klijenata je naš prioritet!</h3>
                                            <h1>DOBRO DOŠLI NA ITELECOM</h1>
                                            <div class="separator"></div>
                                            <p>Kratak opis</p>
                                            <div class="home_btn">
                                                <a href="" class="btn btn-lg m_t_10">Treba li nam?</a>
                                                <a href="" class="btn btn-default">Treba li nam?</a>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="single_home_slider">
                                        <div class="main_home wow fadeInUp" data-wow-duration="700ms">
                                            <h3>Zadovoljstvo klijenata je naš prioritet!</h3>
                                            <h1>DOBRO DOŠLI NA ITELECOM</h1>
                                            <div class="separator"></div>
                                            <p>Kratak opis</p>
                                            <div class="home_btn">
                                                <a href="" class="btn btn-lg m_t_10">Treba li nam?</a>
                                                <a href="" class="btn btn-default">Treba li nam?</a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="scrooldown">
                        <a href="#feature"><i class="fa fa-arrow-down"></i></a>
                    </div>
                </div>
            </div>
        </section><!--End of home section -->


        <!--feature section -->
        <section id="feature" class="feature sections">
            <div class="container">
                <div class="row">
                    <div class="main_feature text-center">

                        <div class="col-sm-3">
                            <div class="single_feature">
                                <div class="single_feature_icon">
                                    <i class="fa fa-phone fa-2x"></i>
                                </div>

                                <h4>FIKSNA TELEFONIJA</h4>
                                <div class="separator3"></div>
                                <p></p>
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <div class="single_feature">
                                <div class="single_feature_icon">
                                    <i class="fa fa-mobile fa-2x"></i>
                                </div>

                                <h4>MOBILNA TELEFONIJA</h4>
                                <div class="separator3"></div>
                                <p></p>
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <div class="single_feature">
                                <div class="single_feature_icon">
                                    <i class="fa fa-globe fa-2x"></i>
                                </div>
                                <h4>INTERNET</h4>
                                <div class="separator3"></div>
                                <p></p>
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <div class="single_feature">
                                <div class="single_feature_icon">
                                    <i class="fa fa-television fa-2x"></i>
                                </div>

                                <h4>TELEVIZIJA</h4>
                                <div class="separator3"></div>
                                <p></p>
                            </div>
                        </div>

                    </div>
                </div>
            </div><!--End of container -->
        </section><!--End of feature Section -->
        <hr />


        <!-- History section -->
        <section id="history" class="history sections">
            <div class="container">
                <div class="row">
                    <div class="main_history">
                        <div class="col-sm-6">
                            <div class="single_history_img">
                                <img src="{{ config('app.filePath'). '/templateAssets/images/stab1.png' }}" alt="" />
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="single_history_content">
                                <div class="head_title">
                                    <h2>O NAMA</h2>
                                </div>
                                <p> infooooo... </p>
                            </div>
                        </div>
                    </div>
                </div><!--End of row -->
            </div><!--End of container -->
        </section><!--End of history -->


        <!--Footer section-->
        <section class="footer">
            <div class="container">
                <div class="row">
                </div>
            </div>
        </section><!-- End off footer Section-->

    </div>

    <!-- START SCROLL TO TOP  -->

    <div class="scrollup">
        <a href="#"><i class="fa fa-chevron-up"></i></a>
    </div>
@endsection

@section('scripts') 
    <script src="{{ config('app.filePath'). '/templateAssets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js' }}"></script>
    <script src="{{ config('app.filePath'). '/templateAssets/js/vendor/jquery-1.11.2.min.js' }}"></script>
<!--    <script src="{{ config('app.filePath'). '/templateAssets/js/vendor/bootstrap.min.js' }}"></script>-->
    <script src="{{ config('app.filePath'). '/templateAssets/js/jquery.magnific-popup.js' }}"></script>
    <script src="{{ config('app.filePath'). '/templateAssets/js/jquery.mixitup.min.js' }}"></script>
    <script src="{{ config('app.filePath'). '/templateAssets/js/jquery.easing.1.3.js' }}"></script>
    <script src="{{ config('app.filePath'). '/templateAssets/js/jquery.masonry.min.js' }}"></script>

    <!--slick slide js -->
    <script src="{{ config('app.filePath'). '/templateAssets/css/slick/slick.js' }}"></script>
    <script src="{{ config('app.filePath'). '/templateAssets/css/slick/slick.min.js' }}"></script>

    <script src="{{ config('app.filePath'). '/templateAssets/js/plugins.js' }}"></script>
    <script src="{{ config('app.filePath'). '/templateAssets/js/main.js' }}"></script>
@endsection