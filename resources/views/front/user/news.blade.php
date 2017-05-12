@extends('layouts.front')
@section('title')
News
@stop

@section('content')
<section id="portfolio">
    <div class="container content" style=";">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-xs-12">
                <h2>Room Vaccancies</h2>
                <hr class="sep">

                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead style="background-color: #666; color: #fff;">
                        <tr>
                            <td>Room Type</td>
                            <td>No. Of Seats</td>
                            <td> Action </td>
                        </tr>
                        </thead>

                        <tbody>

                        @foreach( $vaccancies as $vaccancy )
                            @if($vaccancy->seats > 0)
                                <tr>
                                    <td>{{ $vaccancy->type }}</td>
                                    <td>{{ $vaccancy->seats }}</td>
                                    <td><a href="{{route('booking', $vaccancy->id)}}"> Book Now </a></td>
                                </tr>
                            @endif
                        @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="jumbotron">
            <h1>Welcome</h1>
        </div>

            </div>
     </section>
<style>
    .glyphicon {
        margin-right: 4px !important; /*override*/
    }
    .pagination .glyphicon {
        margin-right: 0px !important; /*override*/
    }
    .pagination a {
        color: #555;
    }
    .panel ul {
        padding: 0px;
        margin: 0px;
        list-style: none;
    }
    .news-item {
        padding: 4px 4px;
        margin: 0px;
        border-bottom: 1px dotted #555;
    }
</style>
{{--<div class="panel panel-default">--}}
    {{--<div class="panel-heading"> <span class="glyphicon glyphicon-list-alt"></span><b>News</b></div>--}}
    {{--<div class="panel-body">--}}
        {{--<div class="row">--}}
            {{--<div class="col-xs-12">--}}
                {{--<ul class="demo">--}}

                    {{--<li class="news-item">--}}
                        {{--<table cellpadding="4">--}}
                            {{--<tr>--}}
                                {{--<td><img src="images/1.png" width="60" class="img-circle" /></td>--}}
                                {{--<td> News 1<a href="#">Read more...</a></td>--}}
                            {{--</tr>--}}
                        {{--</table>--}}
                    {{--</li>--}}

                    {{--<li class="news-item">--}}
                        {{--<table cellpadding="4">--}}
                            {{--<tr>--}}
                                {{--<td><img src="images/2.png" width="60" class="img-circle" /></td>--}}
                                {{--<td> News 2<a href="#">Read more...</a></td>--}}
                            {{--</tr>--}}
                        {{--</table>--}}
                    {{--</li>--}}

                    {{--<li class="news-item">--}}
                        {{--<table cellpadding="4">--}}
                            {{--<tr>--}}
                                {{--<td><img src="images/3.png" width="60" class="img-circle" /></td>--}}
                                {{--<td> News 3<a href="#">Read more...</a></td>--}}
                            {{--</tr>--}}
                        {{--</table>--}}
                    {{--</li>--}}

                    {{--...--}}

                {{--</ul>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
    {{--<div class="panel-footer"> </div>--}}
{{--</div>--}}
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="scripts/jquery.bootstrap.newsbox.min.js" type="text/javascript"></script>

<script type="text/javascript">
    $(function () {
        $(".demo").bootstrapNews({
            newsPerPage: 4,
            navigation: true,
            autoplay: true,
            direction:'up', // up or down
            animationSpeed: 'normal',
            newsTickerInterval: 4000, //4 secs
            pauseOnHover: true,
            onStop: null,
            onPause: null,
            onReset: null,
            onPrev: null,
            onNext: null,
            onToDo: null
        });
    });
</script>
@stop