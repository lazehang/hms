@extends('layouts.front')
@section('title')
Home
@stop

@section('content')

        <!-- Header -->
<a name="about"></a>

<div class="overlay">
    <div class="intro-header">
        <div class="container overlay">

            <div class="row">
                <div class="col-lg-12">
                    <div class="intro-message">
                        <h1>Prince Boys Hostel</h1>
                        <h3>WELCOME</h3>
                        <hr class="intro-divider">
                        <ul class="list-inline intro-social-buttons">
                            <li>
                                <a href="#" class="btn btn-primary btn-lg"><i class="fa fa-spinner fa-spin fa-3x  fa-fw"></i> <span class="network-name">Welcome</span></a>
                            </li>
                            <li>
                                <a href="#" class="btn btn-default btn-lg"><i class=""></i> <span class="network-name">To</span></a>
                            </li>
                            <li>
                                <a href="#" class="btn btn-success btn-lg"><i class="fa fa-cog fa-spin fa-3x  fa-fw"></i> <span class="network-name">Prince</span></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
    <!-- /.intro-header -->
</div>



<!-- Page Content -->

<a  name="services"></a>
<div class="content-section-a">

    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-sm-6">
                <hr class="section-heading-spacer">
                <div class="clearfix"></div>
                <h2 class="section-heading">Who We Are:<br>A Special Place</h2>
                <p class="lead">A special place to <a target="_blank" href="#">to reside</a> as a student. A home far from home. Get an impressive view of the natural beauty of surrounding Kathmandu Valley from our roof top. Here you will always find the best of Nepali hospitality and we swear of a peaceful night sleep without any noise from nightlife.
                </p>
            </div>

            <div class="col-lg-5 col-lg-offset-2 col-sm-6">
                <div class="grid">
                    <figure class="effect-sadie">
                        <img src="{{asset('assets/img/hostel1.jpg')}}" alt="img14">
                        <figcaption>
                            <h2>Clean <span>Room</span></h2>

                            <a href="#">View more</a>
                        </figcaption>
                    </figure>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container -->

</div>
<!-- /.content-section-a -->


<a  name="contact"></a>
<div class="banner">

    <div class="container">

        <div class="row">
            <div class="col-lg-6">
                <h2>Join Us</h2>
            </div>
            <div class="col-lg-6">
                <ul class="list-inline banner-social-buttons">
                    <li>
                        <a href="https://twitter.com/SBootstrap" class="btn btn-default btn-lg"><i class="fa fa-twitter fa-fw"></i> <span class="network-name"></span></a>
                    </li>
                    <li>
                        <a href="https://github.com/IronSummitMedia/startbootstrap" class="btn btn-default btn-lg"><i class="fa fa-facebook fa-fw"></i> <span class="network-name"></span></a>
                    </li>
                    <li>
                        <a href="#" class="btn btn-default btn-lg"><i class="fa fa-instagram fa-fw"></i> <span class="network-name"></span></a>
                    </li>
                </ul>
            </div>
        </div>

    </div>
    <!-- /.container -->

</div>
<!-- /.banner -->

@stop
