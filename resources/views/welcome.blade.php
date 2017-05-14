@extends('layouts.app')

@section('title')
<title> ITelecom </title>
@endsection

@section('styles')
    <link rel="stylesheet" href="{{ config('app.filePath'). '/css/app.css' }}" />
    <link rel="stylesheet" href="{{ config('app.filePath'). '/templateAssets/css/font-awesome.min.css' }}" />
    <!--Theme custom css -->
    <link rel="stylesheet" href="{{ config('app.filePath'). '/templateAssets/css/style.css' }}" />
@endsection

@section('fonts')
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,600i,700,700i" rel="stylesheet">
@endsection

@section('content') 
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
                                            <p>Vaš omiljeni operater!</p>
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
                                <p class="lead"> Tradicionalna telefonska usluga fiksnim telefonom je najbolji, najjednostavniji i nezamjenjiv način komunikacije! </p>
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <div class="single_feature">
                                <div class="single_feature_icon">
                                    <i class="fa fa-mobile fa-2x"></i>
                                </div>

                                <h4>MOBILNA TELEFONIJA</h4>
                                <div class="separator3"> </div>
                                <p class="lead"> Želite pričati, slati poruke i surfati? Ultra je savršen izbor za vas! </p>
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <div class="single_feature">
                                <div class="single_feature_icon">
                                    <i class="fa fa-globe fa-2x"></i>
                                </div>
                                <h4>INTERNET</h4>
                                <div class="separator3"></div>
                                <p class="lead"> Želite da imate pristup internetu uvijek? Ultra Internet je savršen izbor za vas! </p>
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <div class="single_feature">
                                <div class="single_feature_icon">
                                    <i class="fa fa-television fa-2x"></i>
                                </div>

                                <h4>TELEVIZIJA</h4>
                                <div class="separator3"></div>
                                <p class="lead"> Želite vaše omiljene tv kanale ili radio stanice? Izaberite mojaTV! </p>
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
                                <img src="{{ config('app.filePath'). '/images/telecom.jpg' }}" alt="" />
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

    <!-- End off footer Section-->
    </div>

    <!-- START SCROLL TO TOP  -->

    <div class="scrollup">
        <a href="#"><i class="fa fa-chevron-up"></i></a>
    </div>
@endsection

@section('scripts') 
@endsection