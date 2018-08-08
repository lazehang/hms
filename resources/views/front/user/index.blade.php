@extends('layouts.front')
@section('title')
Home
@stop

@section('content')

<style type="text/css">


/** Carousel **/

.jcarousel {
    position: relative;
    overflow: hidden;
    width: 100%;
}

.jcarousel ul {
    width: 20000em;
    position: relative;
    list-style: none;
    min-width: 100%;
    height: 100%;
}

.jcarousel li {
    float: left;
    width: 100%;
    height: 100%;
}
/** Carousel Controls **/

.jcarousel-control-prev,
.jcarousel-control-next {
    position: absolute;
    top: 200px;
    width: 30px;
    height: 30px;
    text-align: center;
    background: #4E443C;
    color: #fff;
    text-decoration: none;
    text-shadow: 0 0 1px #000;
    font: 24px/27px Arial, sans-serif;
    -webkit-border-radius: 30px;
       -moz-border-radius: 30px;
            border-radius: 30px;
    -webkit-box-shadow: 0 0 2px #999;
       -moz-box-shadow: 0 0 2px #999;
            box-shadow: 0 0 2px #999;
}

.jcarousel-control-prev {
    left: -50px;
}

.jcarousel-control-next {
    right: -50px;
}

.jcarousel-control-prev:hover span,
.jcarousel-control-next:hover span {
    display: block;
}

.jcarousel-control-prev.inactive,
.jcarousel-control-next.inactive {
    opacity: .5;
    cursor: default;
}

/** Carousel Pagination **/

.jcarousel-pagination {
    position: absolute;
    bottom: 0;
    left: 15px;
}

.jcarousel-pagination a {
    text-decoration: none;
    display: inline-block;
    
    font-size: 11px;
    line-height: 14px;
    min-width: 14px;
    
    background: #fff;
    color: #4E443C;
    border-radius: 14px;
    padding: 3px;
    text-align: center;
    
    margin-right: 2px;
    
    opacity: .75;
}

.jcarousel-pagination a.active {
    background: #4E443C;
    color: #fff;
    opacity: 1;
    text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.75);
}
    
    .caption {
        position: absolute;
        top:  35%;
        float: left;
        margin-left: 5em;
        color: #fff;
        width: 25em;

    }

    .caption h2{
        font-weight: 900;
        font-size: 30px;
        padding: 20px 0;        
    }
    .caption p{
        font-size: 18px;
        line-height: 1.7em;
        color: #fff;
        font-family: 'Roboto',sans-serif;
        font-weight: lighter;

    }

    .slide{
        padding: 10%;
        width: 100vw;
        text-align: center;
        position: absolute;
        transform: scale(0.5,0.5);
        opacity: 0;
        transition: all .3s;
    }

    .slide.blue{
        background: #1E73BE;
        color: white;
    }
    .slide.white{
        background: #ccc;
        color: #444444;
    }
    .slide.red{
        background: #BF525A;
        color: white;
    }
    .slide.active{
        z-index: 10;
        left: 0;
        opacity: 1;
        transform: scale(1,1);
    }

    .slide.inactiveLeft{
        left: -100vw;
        z-index: 11;
    }
    .slide.inactiveRight{
        left: 100vw;
        z-index: 11;
    }
  .slide:after{
    content: attr(data-icon);
    font-family: "FontAwesome";
    font-size: 15vw;
    position: absolute;
    bottom: -8vw;
    left: 0;
    opacity: 0.3;
  }

</style>

        <!-- Header -->
<a name="about"></a>
        
    
                    <!-- <div class="intro-message">
                        <h1>Prince Boys Hostel</h1>
                        <h3>WELCOME</h3>
                        <hr class="intro-divider">
                        <ul class="list-inline intro-social-buttons">
                            <li>
                                <a href="https://twitter.com/SBootstrap" class="btn btn-default btn-lg"><i class="fa fa-twitter fa-fw"></i> <span class="network-name">Twitter</span></a>
                            </li>
                            <li>
                                <a href="https://github.com/IronSummitMedia/startbootstrap" class="btn btn-default btn-lg"><i class="fa fa-github fa-fw"></i> <span class="network-name">Github</span></a>
                            </li>
                            <li>
                                <a href="#" class="btn btn-default btn-lg"><i class="fa fa-linkedin fa-fw"></i> <span class="network-name">Linkedin</span></a>
                            </li>
                        </ul>
                    </div> -->

            <div class="">
             
                    <div class="jcarousel">
                        <ul>
                            <li style=" background: url({{ asset('assets/img/mural.jpg') }}) no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;">
      
            <div class="caption" data-icon="&#xf013;">
                <h2>Widgets/Today Extension</h2>
                <p>Clocks+ wouldn’t be a modern app without Widgets. Your favorite cities appear in the Today View with just a swipe down, for quick glancing, Did we mention that they look awesome, too?</p>
                <a class="btn btn-primary" target="_blank" href="https://itunes.apple.com/gb/app/clocks+/id937380413?mt=8">Download on AppStore</a>
            </div>
                            </li>
                            <li style=" background: url({{ asset('assets/img/bed.jpg') }}) no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;">
      <div class="caption" data-icon="&#xf013;">
                <h2>Widgets/Today Extension</h2>
                <p>Clocks+ wouldn’t be a modern app without Widgets. Your favorite cities appear in the Today View with just a swipe down, for quick glancing, Did we mention that they look awesome, too?</p>
                <a target="_blank" class="btn btn-primary" href="https://itunes.apple.com/gb/app/clocks+/id937380413?mt=8">Download on AppStore</a>
            </div>
  </li>
                        </ul>
                    </div>
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

<div class="content-section-b">

    <div class="container">

        <div class="row">
            <div class="col-lg-5 col-lg-offset-1 col-sm-push-6  col-sm-6">
                <hr class="section-heading-spacer">
                <div class="clearfix"></div>
                <h2 class="section-heading">3D Device Mockups<br>by PSDCovers</h2>
                <p class="lead">Turn your 2D designs into high quality, 3D product shots in seconds using free Photoshop actions by <a target="_blank" href="http://www.psdcovers.com/">PSDCovers</a>! Visit their website to download some of their awesome, free photoshop actions!</p>
            </div>
            <div class="col-lg-5 col-sm-pull-6  col-sm-6">
                <div class="grid">
                    <figure class="effect-sadie">
                        <img src="{{asset('assets/img/loginhostel.jpg')}}" alt="img14">
                        <figcaption>
                            <h2>Holy <span>Sadie</span></h2>
                            <p>Sadie never took her eyes off me. <br>She had a dark soul.</p>
                            <a href="#">View more</a>
                        </figcaption>
                    </figure>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container -->

</div>
<!-- /.content-section-b -->

<div class="content-section-a">

    <div class="container">

        <div class="row">
            <div class="col-lg-5 col-sm-6">
                <hr class="section-heading-spacer">
                <div class="clearfix"></div>
                <h2 class="section-heading">Google Web Fonts and<br>Font Awesome Icons</h2>
                <p class="lead">This template features the 'Lato' font, part of the <a target="_blank" href="http://www.google.com/fonts">Google Web Font library</a>, as well as <a target="_blank" href="http://fontawesome.io">icons from Font Awesome</a>.</p>
            </div>
            <div class="col-lg-5 col-lg-offset-2 col-sm-6">
                <img class="img-responsive" src="{{asset('assets/img/phones.png')}}" alt="" />
            </div>
        </div>

    </div>
    <!-- /.container -->

</div>
<!-- /.content-section-a -->


@stop