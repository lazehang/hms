<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, shrink-to-fit=no, initial-scale=1">
    <meta name="description" content="Prince HMS">
    <meta name="author" content="Mangal Hang Limbu">

    <title>Prince | @yield('title')</title>
    <script type="text/javascript" src="{{asset("assets/Admin/js/jquery-3.1.1.min.js") }}"></script>

    <script type="text/javascript">
        $(document).ready(function(e){
            $('.has-sub').click(function(){
                $(this).toggleClass('tap');

            });
        });

    </script>

    <!-- Bootstrap Core CSS -->
    <link href="{{asset("assets/Admin/bootstrap/css/bootstrap.min.css") }}" rel="stylesheet">
    <link rel="stylesheet" href="http://cdn.datatables.net/1.10.2/css/jquery.dataTables.min.css">

    <!-- Custom CSS -->
    <link href="{{asset("assets/Admin/simple-sidebar.css")}}" rel="stylesheet">
    <link href="{{asset("assets/Admin/dist/css/AdminLTE.css")}}" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>


{{--<nav class="navbar navbar-default navbar-fixed-top" style="">--}}
       {{--<div class="container">--}}
           {{--<div class="navbar-header">--}}
               {{--<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">--}}
                   {{--<span class="sr-only">Toggle navigation</span>--}}
                   {{--<span class="icon-bar"></span>--}}
                   {{--<span class="icon-bar"></span>--}}
                   {{--<span class="icon-bar"></span>--}}
               {{--</button>--}}
               {{--<a href="#menu-toggle" class="navbar-brand" id="menu-toggle">Admin Control Panel</a>--}}
           {{--</div>--}}
           {{--<div id="navbar" class="navbar-collapse collapse">--}}
               {{--<ul class="nav navbar-nav">--}}

               {{--</ul>--}}
               {{--<ul class="nav navbar-nav navbar-right">--}}
                   {{--<li class="dropdown">--}}
                       {{--<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>--}}
                       {{--<ul class="dropdown-menu">--}}
                           {{--<li><a href="#">Action</a></li>--}}
                           {{--<li><a href="#">Another action</a></li>--}}
                           {{--<li><a href="#">Something else here</a></li>--}}
                           {{--<li role="separator" class="divider"></li>--}}
                           {{--<li class="dropdown-header">Nav header</li>--}}
                           {{--<li><a href="#">Separated link</a></li>--}}
                           {{--<li><a href="#">One more separated link</a></li>--}}
                       {{--</ul>--}}
                   {{--</li>--}}
                   {{--<li><a href="{{ url('/logout') }}"--}}
                          {{--onclick="event.preventDefault();--}}
                           {{--document.getElementById('logout-form').submit();">--}}
                           {{--Logout--}}
                       {{--</a>--}}

                       {{--<form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">--}}
                           {{--{{ csrf_field() }}--}}
                       {{--</form></li>--}}
               {{--</ul>--}}
           {{--</div>--}}
       {{--</div>--}}
{{--</nav>--}}

<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="#menu-toggle" class="navbar-brand" id="menu-toggle">Admin Control Panel</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse" aria-expanded="false" style="height: 1px;">
            <ul class="nav navbar-nav navbar-right">

                <li><a href="#">Settings</a></li>
                <li><a href="#">Profile</a></li>
                <li><a href="{{ url('/logout') }}"
                onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                Logout
                </a>

                <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
                </form></li>
            </ul>
            <form class="navbar-form navbar-right">
                <input type="text" class="form-control" placeholder="Search...">
            </form>
        </div>
    </div>
</nav>

<div id="wrapper">