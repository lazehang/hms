@extends('layouts.front')
@section('title')
News
@stop

@section('content')

<section id="portfolio">
    <!-- PRICING TABLE STYLE 1-->
    <div class="container">
        <div class="row">
            <div class="info">
                <hr class="sep">
                <h2>Room Vacancies</h2>
                <hr class="sep">
            </div>
            @if(Session::has('success'))
            <div class="alert alert-success">
                <strong>Success!</strong> Room Booked.
                <small>You will get a call for confirmation soon</small>
            </div>
            @endif
            @foreach( $vaccancies as $vaccancy )
                @if($vaccancy->seats > 0)
                    <div class="col-md-4 col-sm-6 col-xs-12 float-shadow">
                        <div class="price_table_container">
                            <div class="price_table_heading">Vaccancy</div>
                            <div class="price_table_body">
                                <div class="price_table_row cost"><strong>रु {{ $vaccancy->fee }}</strong><span>/MONTH</span></div>
                                <div class="price_table_row">{{ $vaccancy->type }}</div>
                                <div class="price_table_row">{{ $vaccancy->seats }}</div>
                                <div class="price_table_row">Here</div>

                            </div>
                            <a href="{{route('booking', $vaccancy->id)}}" class="btn btn-danger btn-lg btn-block"> Book Now</a>
                        </div>
                    </div>
                @endif
            @endforeach


        </div>
    </div>
    </div>
    <!-- PRICING TABLE STYLE 1-->

    <div class="container">
        <div class="info">
            <hr class="sep">
            <h1>News Card Section</h1>
            <hr class="sep">

        </div>
        <!-- Normal Demo-->
        <div class="column">
            <div class="demo-title">Normal</div>
            <!-- Post-->
            <div class="post-module">
                <!-- Thumbnail-->
                <div class="thumbnail">
                    <div class="date">
                        <div class="day">27</div>
                        <div class="month">Mar</div>
                    </div><img src="{{ asset('assets/img/h1.jpg') }}"/>
                </div>
                <!-- Post Content-->
                <div class="post-content">
                    <div class="category">Hostel</div>
                    <h1 class="title">New Branch in Pokhara</h1>
                    <h2 class="sub_title">The city that never sleeps.</h2>
                    <p class="description">Pokhara, an architectural marvel with plenty of historic monuments, magnificent buildings and countless dazzling natural beauty.</p>
                    <div class="post-meta"><span class="timestamp"><i class="fa fa-clock-">o</i> 6 mins ago</span><span class="comments"><i class="fa fa-comments"></i><a href="#"> 39 comments</a></span></div>
                </div>
            </div>
        </div>
        <!-- Normal Demo-->
        <div class="column">
            <div class="demo-title">Normal</div>
            <!-- Post-->
            <div class="post-module">
                <!-- Thumbnail-->
                <div class="thumbnail">
                    <div class="date">
                        <div class="day">27</div>
                        <div class="month">Mar</div>
                    </div><img src="{{ asset('assets/img/food.jpg') }}"/>
                </div>
                <!-- Post Content-->
                <div class="post-content">
                    <div class="category">Food</div>
                    <h1 class="title">New Food Menu !!</h1>
                    <h2 class="sub_title">See Whats New</h2>
                    <p class="description">Clean, healthy and delicious menu has been added for the new hostel menu. See what is there for today.</p>
                    <div class="post-meta"><span class="timestamp"><i class="fa fa-clock-">o</i> 6 mins ago</span><span class="comments"><i class="fa fa-comments"></i><a href="#"> 39 comments</a></span></div>
                </div>
            </div>
        </div>

    </div>


     </section>
<style>
    .post-module {
        position: relative;
        z-index: 1;
        display: block;
        background: #FFFFFF;
        min-width: 270px;
        height: 470px;
        -webkit-box-shadow: 0px 1px 2px 0px rgba(0, 0, 0, 0.15);
        -moz-box-shadow: 0px 1px 2px 0px rgba(0, 0, 0, 0.15);
        box-shadow: 0px 1px 2px 0px rgba(0, 0, 0, 0.15);
        -webkit-transition: all 0.3s linear 0s;
        -moz-transition: all 0.3s linear 0s;
        -ms-transition: all 0.3s linear 0s;
        -o-transition: all 0.3s linear 0s;
        transition: all 0.3s linear 0s;
    }
    .post-module:hover,
    .hover {
        -webkit-box-shadow: 0px 1px 35px 0px rgba(0, 0, 0, 0.3);
        -moz-box-shadow: 0px 1px 35px 0px rgba(0, 0, 0, 0.3);
        box-shadow: 0px 1px 35px 0px rgba(0, 0, 0, 0.3);
    }
    .post-module:hover .thumbnail img,
    .hover .thumbnail img {
        -webkit-transform: scale(1.1);
        -moz-transform: scale(1.1);
        transform: scale(1.1);
        opacity: .6;
    }
    .post-module .thumbnail {
        background: #000000;
        height: 400px;
        overflow: hidden;
        padding: 0px;
    }
    .post-module .thumbnail .date {
        position: absolute;
        top: 20px;
        right: 20px;
        z-index: 1;
        background: #e74c3c;
        width: 55px;
        height: 55px;
        padding: 12.5px 0;
        -webkit-border-radius: 100%;
        -moz-border-radius: 100%;
        border-radius: 100%;
        color: #FFFFFF;
        font-weight: 700;
        text-align: center;
        -webkti-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
    }
    .post-module .thumbnail .date .day {
        font-size: 18px;
    }
    .post-module .thumbnail .date .month {
        font-size: 12px;
        text-transform: uppercase;
    }
    .post-module .thumbnail img {
        display: block;
        width: 120%;
        -webkit-transition: all 0.3s linear 0s;
        -moz-transition: all 0.3s linear 0s;
        -ms-transition: all 0.3s linear 0s;
        -o-transition: all 0.3s linear 0s;
        transition: all 0.3s linear 0s;
    }
    .post-module .post-content {
        position: absolute;
        bottom: 0;
        background: #FFFFFF;
        width: 100%;
        padding: 30px;
        -webkti-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
        -webkit-transition: all 0.3s cubic-bezier(0.37, 0.75, 0.61, 1.05) 0s;
        -moz-transition: all 0.3s cubic-bezier(0.37, 0.75, 0.61, 1.05) 0s;
        -ms-transition: all 0.3s cubic-bezier(0.37, 0.75, 0.61, 1.05) 0s;
        -o-transition: all 0.3s cubic-bezier(0.37, 0.75, 0.61, 1.05) 0s;
        transition: all 0.3s cubic-bezier(0.37, 0.75, 0.61, 1.05) 0s;
    }
    .post-module .post-content .category {
        position: absolute;
        top: -34px;
        left: 0;
        background: #e74c3c;
        padding: 10px 15px;
        color: #FFFFFF;
        font-size: 14px;
        font-weight: 600;
        text-transform: uppercase;
    }
    .post-module .post-content .title {
        margin: 0;
        padding: 0 0 10px;
        color: #333333;
        font-size: 26px;
        font-weight: 700;
    }
    .post-module .post-content .sub_title {
        margin: 0;
        padding: 0 0 20px;
        color: #e74c3c;
        font-size: 20px;
        font-weight: 400;
    }
    .post-module .post-content .description {
        display: none;
        color: #666666;
        font-size: 14px;
        line-height: 1.8em;
    }
    .post-module .post-content .post-meta {
        margin: 30px 0 0;
        color: #999999;
    }
    .post-module .post-content .post-meta .timestamp {
        margin: 0 16px 0 0;
    }
    .post-module .post-content .post-meta a {
        color: #999999;
        text-decoration: none;
    }
    .hover .post-content .description {
        display: block !important;
        height: auto !important;
        opacity: 1 !important;
    }
    .container {
        max-width: 800px;
        min-width: 640px;
        margin: 0 auto;
    }
    .container:before,
    .container:after {
        content: '';
        display: block;
        clear: both;
    }
    .container .column {
        width: 50%;
        padding: 0 25px;
        -webkti-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
        float: left;
    }
    .container .column .demo-title {
        margin: 0 0 15px;
        color: #666666;
        font-size: 18px;
        font-weight: bold;
        text-transform: uppercase;
    }
    .container .info {
        width: 300px;
        margin: 50px auto;
        text-align: center;
    }
    .container .info h1 {
        margin: 0 0 15px;
        padding: 0;
        font-size: 24px;
        font-weight: bold;
        color: #333333;
    }
    .container .info span {
        color: #666666;
        font-size: 12px;
    }
    .container .info span a {
        color: #000000;
        text-decoration: none;
    }
    .container .info span .fa {
        color: #e74c3c;
    }


    h1{
        font-size: 30px;
        color: #fff;
        text-transform: uppercase;
        font-weight: 300;
        text-align: center;
        margin-bottom: 15px;
    }
    table{
        width:100%;
        table-layout: fixed;
    }
    .tbl-header{
        background-color: rgba(255,255,255,0.3);
    }
    .tbl-content{
        height:300px;
        overflow-x:auto;
        margin-top: 0px;
        border: 1px solid rgba(255,255,255,0.3);
    }
    th{
        padding: 20px 15px;
        text-align: left;
        font-weight: 500;
        font-size: 12px;
        color: #fff;
        text-transform: uppercase;
    }
    td{
        padding: 15px;
        text-align: left;
        vertical-align:middle;
        font-weight: 300;
        font-size: 12px;
        color: #fff;
        border-bottom: solid 1px rgba(255,255,255,0.1);
    }


    /* demo styles */

    @import url(https://fonts.googleapis.com/css?family=Roboto:400,500,300,700);
    body{

        font-family: 'Roboto', sans-serif;
    }

    @import url(http://fonts.googleapis.com/css?family=Open+Sans:300);


    .price_table_container{
        text-align:center;
        color:#666;
        margin-top:35px;
        font-family: 'Open Sans', sans-serif;
    }

    .price_table_heading{
        font-size:36px;
        padding:10px;
        background:#EEE;
    }


    .price_table_row {
        padding:15px;
        background: #FFF;
    }

    .cost{
        padding:30px;
        font-size:30px;
    }
    .cost span{
        font-size:15px;
    }

    .price_table_row:nth-of-type(even) {
        background: #F8F8F8;
    }
    .btn{
        border-radius:0px;
    }

    .recommended{
        /*USER DEFINED COLOUR*/
        background:#FF3A3A;
        color:#FFF;
        /*USER DEFINED COLOUR*/
        padding:3px 0 3px 0;
        margin-top:10px;
        text-align:center;
        margin-bottom:-35px;
        font-family: 'Open Sans', sans-serif;
    }


    .spacer{width:100%;height:50px;}


    /*Already Defined Colours*/
    /*Background*/
    .primary-bg{background:#337AB7;color:#FFF;}
    .success-bg{background:#5CB85C;color:#FFF;}
    .info-bg{background:#5BC0DE;color:#FFF;}
    .warning-bg{background:#F0AD4E;color:#FFF;}
    .danger-bg{background:#D9534F;color:#FFF;}
    .dark-bg{background:#444;color:#FFF;}
    .royal-bg{background:#8E74E2;color:#FFF;}
    .static-bg{background:#2BB0A6;color:#FFF;}

    /*Only Text Colours*/
    .primary-text{background:#FFF;color:#337AB7;}
    .success-text{background:#FFF;color:#5CB85C;}
    .info-text{background:#FFF;color:#5BC0DE;}
    .warning-text{background:#FFF;color:#F0AD4E;}
    .danger-text{background:#FFF;color:#D9534F;}
    .dark-text{background:#FFF;color:#444;}
    .royal-text{background:#FFF;color:#8E74E2;}
    .static-text{background:#FFF;color:#2BB0A6;}

    /*Additional Button styles*/

    /*BTN-DARK*/
    .btn-dark {
        color: #fff;
        background-color: #444;
        border-color: #444;
    }
    .btn-dark:hover,
    .btn-dark:focus,
    .btn-dark.focus,
    .btn-dark:active,
    .btn-dark.active,
    .open > .dropdown-toggle.btn-dark {
        color: #fff;
        background-color: #222;
        border-color: #222;
    }
    .btn-dark:active,
    .btn-dark.active,
    .open > .dropdown-toggle.btn-dark {
        background-image: none;
    }


    /*BTN-ROYAL---------*/
    .btn-royal {
        color: #fff;
        background-color: #8E74E2;
        border-color: #8E74E2;
    }
    .btn-royal:hover,
    .btn-royal:focus,
    .btn-royal.focus,
    .btn-royal:active,
    .btn-royal.active,
    .open > .dropdown-toggle.btn-royal {
        color: #fff;
        background-color: #7451E8;
        border-color: #7451E8;
    }
    .btn-royal:active,
    .btn-royal.active,
    .open > .dropdown-toggle.btn-royal {
        background-image: none;
    }


    /*BTN-STATIC---------*/
    .btn-static {
        color: #fff;
        background-color: #2BB0A6;
        border-color: #2BB0A6;
    }
    .btn-static:hover,
    .btn-static:focus,
    .btn-static.focus,
    .btn-static:active,
    .btn-static.active,
    .open > .dropdown-toggle.btn-static {
        color: #fff;
        background-color: #07A094;
        border-color: #07A094;
    }
    .btn-static:active,
    .btn-static.active,
    .open > .dropdown-toggle.btn-static {
        background-image: none;
    }

</style>


@stop
