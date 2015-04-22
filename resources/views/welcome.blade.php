@extends('app')

@section('content')

    <div id="Welcome-Wrapper" class="row">
        <div class="col-lg-6 col-lg-offset-3">
            <div class="text-center">
                <div class="jumbotron">
                    <h1>Taskrewarder</h1>
                    <h3>Andra användare ger dig uppgifter och när du har slutfört dem får du utsatt belöning. Bra va?</h3>
                    <div class="row">
                        <div id="myCarousel" class="carousel slide" data-interval="3000" data-ride="carousel">
                            <!-- Carousel indicators -->
                            <ol class="carousel-indicators">
                                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                <li data-target="#myCarousel" data-slide-to="1"></li>
                                <li data-target="#myCarousel" data-slide-to="2"></li>
                                <li data-target="#myCarousel" data-slide-to="3"></li>
                                <li data-target="#myCarousel" data-slide-to="4"></li>
                                <li data-target="#myCarousel" data-slide-to="5"></li>
                                <li data-target="#myCarousel" data-slide-to="6"></li>
                                <li data-target="#myCarousel" data-slide-to="7"></li>
                            </ol>
                            <!-- Carousel items -->
                            <div class="carousel-inner">
                                <div class="active item">
                                    <h2>Bild 1</h2>
                                </div>
                                <div class="item">
                                    <h2>Bild 2</h2>
                                    <div class="carousel-caption">
                                    </div>
                                </div>
                            </div>
                            <!-- Carousel nav -->
                            <a class="carousel-control left" href="#myCarousel" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                            </a>
                            <a class="carousel-control right" href="#myCarousel" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                            </a>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <a href="/login" class="btn btn-lg btn-success">Logga in <i class="fa fa-sign-in fa-fw"></i></a>
                                <a href="/register" class="btn btn-lg btn-info">Registera dig <i class="fa fa-user-plus fa-fw"></i></a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>




@endsection