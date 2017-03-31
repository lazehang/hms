
<nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#"><img src="{{ asset ("assets/img/logo/logo.png") }}" class="img-responsive" alt="logo"></a>
                </div>
                <div class="collapse navbar-collapse text-center" id="bs-example-navbar-collapse-1">
                    <div class="col-md-8 col-xs-12 nav-wrap">
                        <ul class="nav navbar-nav">
                            <li><a href="{{route('home')}}">Home</a></li>
                            <li><a href="{{route ('account')}}" class="page-scroll">Account</a></li>
                            <li><a href="{{route ('news')}}" class="page-scroll">News</a></li>
                            <li><a href="{{route ('details')}}" class="page-scroll">Details</a></li>
                            <li><a href="about.php" class="page-scroll">About</a></li>
                        </ul>
                    </div>
                    <div class="social-media hidden-sm hidden-xs">
                        <ul class="nav navbar-nav">
                            <li>
                                <a href="{{route ('login')}}"> Login</a>
                            </li>

                            <li><a href="{{route ('logout')}}"> Logout </a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
