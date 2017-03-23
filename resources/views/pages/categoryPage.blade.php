@extends('layout')

@section('content')
    <style>
        .carousel{
            position: relative;
            height: 500px;
        }
        .item{
            position: relative;
            width: 100%;
            height: 500px;
        }



    </style>
    <div class="container" style="padding-top: 30px;">
        <div class="rows">
            <div class="col-sm-12" >
                <center><h1 style="color: black"> DESKTOP </h1></center>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-8">
                <div id="myCarousel" class="carousel" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>

                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <div class="slider-size">
                                <img src="/images/desktop1.jpg" style="height: 100%; width: auto;">
                            </div>
                        </div>

                        <div class="item">
                            <div class="slider-size">
                                <img src="/images/desktop2.jpg" style="height: 100%; width: auto;">
                            </div>
                        </div>


                    </div>

                    <!-- Left and right controls -->
                    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            <div class="col-xs-6 col-md-4" style="background-color: #eee; color: black;">
                <h4>Echipe inscrise</h4>
                <h5>Echipa 1</h5>
                <h5>Echipa 2</h5>
                <h5>Echipa 3</h5>
                <h5>Echipa 4</h5>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-8">
                <h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</h4><br>
                <p style="background-color: #eee;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                </p>

            </div>

        </div>
    </div>

@endsection